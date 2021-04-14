<?php

namespace App\Http\Controllers;

use App\Services\PaymentService;
use Illuminate\Http\Request;
use App\Traits\ApiResponseTrait;

/**
 * @group Payments
 *
 * Manage payments
 */
class PaymentController extends Controller
{
    use ApiResponseTrait;

    /**
     * GET Payments callback
     *
     * List all investments
     * @queryParam pid Payment ID. Example: 3
     * @queryParam transaction_id Payment ID. Example: FW_ys64532yw7
     */
    public function raveCallback(Request $request,PaymentService $paymentService){
        $payment = $paymentService->callback($request);
        if($payment->paid === true) {
            return $this->success([],'Payment successfull',201);
        }
        return $this->error('Failed to make payment, please try again or contact support.',422);
    }
}
