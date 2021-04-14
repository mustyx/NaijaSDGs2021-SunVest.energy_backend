<?php
namespace App\Services;

use App\Models\Payment;
use App\User;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class PaymentService
{
    public function createPayment($investment){
        $amount = $investment->cells * $investment->cost_per_cell;
        $data = [
            'user_id' => auth()->id(),
            'investment_id' => $investment->id,
            'amount' => $amount,
        ];
        $payment = Payment::create($data);
        return $this->redirectToGateway($payment);
    }

    public function redirectToGateway($payment)
    {
        $user = $payment->user;

        $callbackUrl = route('raveCallback').'?pid='.$payment->id;

        $paymentData = [
            'gateway' => 'rave',
            "tx_ref" => uniqid('FW_'),
            'amount' => $payment->amount,
            "currency" => 'NGN',
            "redirect_url" => $callbackUrl,
            "payment_options"=>"card",
            'customer' => [
                'email' => $user->email,
                'name' => $user->fullName(),
            ],
            'meta' => [
                'customer_id' => $user->id,
                'payment_id' => $payment->id,
            ],
            "customizations" => [
                "title" => config('payment.raveTitle'),
                "description" => "Invest in ".strtoupper($payment->investment->project->name),
                "logo" => config('payment.raveLogo')
            ]
        ];

        $debit = $this->debit($paymentData);
        if($debit['status'] !== 'success'){
            return false;
        }
        return $debit['data']['link'];
    }

    public function getPaymentEnvData(){
        $envir = config('payment.default');
        return config('payment.connectionsRave.'.$envir);
    }
    public function getPaymentHeaders(){
        $credentials = $this->getPaymentEnvData();
        return [
            'headers' => [
                'authorization' => 'Bearer '.$credentials['secretKey'],
                'content-type' => 'application/json',
                'cache-control' => 'no-cache'
            ]
        ];
    }
    public function debit($paymentData){
        $headers = $this->getPaymentHeaders();
        $client = new Client($headers);
        $url = "https://api.flutterwave.com/v3/payments";
        $request = $client->request('POST',$url, ['json'=>$paymentData,'http_errors'=>false]);
        $response = $request->getBody()->getContents();
        $response = json_decode($response,true);
        return $response;
    }

    public function callback($request)
    {
        $paymentId = request()->query('pid');
        $payment = Payment::where('id',$paymentId)->firstOrFail();
        if($request['status'] !== 'success' && strpos($request['status'],'success') === false){
            return $payment;
        }

        $user = $payment->user;

        $verify = $this->verifyTrnx($request['transaction_id']);
        if($verify['status'] !== 'success'){
            return $payment;
        }
        $trxData = $verify['data'];

        //If transaction is successful, continue
        $payment->trxId = $trxData['tx_ref'];
        $payment->paid = true;
        $payment->payment_method = 'card';
        $payment->payment_gateway = 'rave';
        $payment->save();
        return $payment->refresh();
    }
    public function verifyTrnx($trnxRef){
        $headers = $this->getPaymentHeaders();
        $client = new Client($headers);
        $url = "https://api.flutterwave.com/v3/transactions/".rawurlencode($trnxRef)."/verify";
        $request = $client->request('GET',$url);
        $response = $request->getBody()->getContents();
        $response = json_decode($response,true);
        return $response;
    }

}
