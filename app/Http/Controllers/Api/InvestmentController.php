<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreInvestmentRequest;
use App\Http\Resources\InvestmentResource;
use App\Http\Resources\InvestmentWithProjectResource;
use App\Models\Investment;
use App\Services\InvestmentService;
use Illuminate\Http\Request;
use App\Traits\ApiResponseTrait;

/**
 * @group Investments
 *
 * Manage investments
 */

class InvestmentController extends Controller
{
    use ApiResponseTrait;

    /**
     * GET Investments
     *
     * List all investments
     * @queryParam page Which page to show. Example: 3
     */
    public function index()
    {
        $investments = auth()->user()->investments()->paid()->get();
        return $this->success(InvestmentResource::collection($investments));
    }

    /**
     * POST Investment
     *
     * Create a new investment
     * @bodyParam  user_id string required Id/username of user. Example: 5,"dre-1"
     * @bodyParam  project_id string required Id/slug of project item.
     * @bodyParam  cells integer required Total number of cells the user wishes to invest in. Example: 10
     *
     * @response {"status":"Success","message":"Investment successfully created, please proceed with payment","data":{"payment_link":"https://checkout-testing.herokuapp.com/v3/hosted/pay/b98806086dd0b195cc53"}}
     */

    public function store(StoreInvestmentRequest $request, InvestmentService $investmentService)
    {
        $investment = $investmentService->userCreateNewInvestment($request);
        if(!is_null($investment)) {
            $pay = $investmentService->processPayment($investment);
            return $this->success(['payment_link'=>$pay],'Investment successfully created, please proceed with payment',201);
        }
        return $this->error('Failed to add investment',422);
    }

    /**
     * GET Single Investment
     *
     * Get information on a single investment
     * @param  Investment $investment Example: slug
     */
    public function show(Investment $investment)
    {
        if (auth()->user()->id === $investment->user_id){
            return $this->success(new InvestmentWithProjectResource($investment));
        }
        return $this->error('Invalid investment',403);
    }


    /**
     * @hideFromAPIDocumentation
     */
    public function update(Request $request, $id)
    {
        //
    }


    /**
     * @hideFromAPIDocumentation
     */
    public function destroy($id)
    {
        //
    }
}
