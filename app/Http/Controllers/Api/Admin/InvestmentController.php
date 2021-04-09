<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreInvestmentRequest;
use App\Http\Requests\Admin\UpdateInvestmentRequest;
use App\Http\Resources\InvestmentResource;
use App\Http\Resources\InvestmentWithProjectResource;
use App\Models\Investment;
use App\Services\InvestmentService;
use App\Traits\ApiResponseTrait;
use Illuminate\Http\Request;

/**
 * @group Investments - ADMIN
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
        $investments = Investment::all();
        return $this->success(InvestmentResource::collection($investments));
    }

    /**
     * POST Investment
     *
     * Create a new investment
     * @bodyParam  user_id string required Id/username of user. Example: 5,"dre-1"
     * @bodyParam  project_id string required Id/slug of project item.
     * @bodyParam  cells integer required Total number of cells the user wishes to invest in. Example: 10
     */

    public function store(StoreInvestmentRequest $request, InvestmentService $investmentService)
    {
        $investment = $investmentService->createNewInvestment($request);
        if(!is_null($investment)) {
            return $this->success(null,'Investment successfully created.',201);
        }
        return $this->error('Failed to create investment',422);
    }

    /**
     * GET Single Investment
     *
     * Get information on a single investment
     * @param  Investment $investment Example: slug
     */
    public function show(Investment $investment)
    {
        return $this->success(new InvestmentWithProjectResource($investment));
    }

    /**
     * PUT Investment
     *
     * Update investment data. This should be a POST request
     * @bodyParam  _method string required This will tell backend to see it as an update request. Example: "PUT"
     * @bodyParam  user_id string required Id/username of user. Example: 5,"dre-1"
     * @bodyParam  project_id string required Id/slug of project item.
     * @bodyParam  cells integer required Total number of cells the user wishes to invest in. Example: 10
     */
    public function update(UpdateInvestmentRequest $request, Investment $investment, InvestmentService $investmentService)
    {
        $update = $investmentService->updateInvestment($request,$investment);
        return $this->success(new InvestmentResource($update),'Investment successfully updated.',201);
    }

    /**
     * DELETE Investment
     *
     * Soft delete a investment. This should be a POST request
     * @param  Investment $investment
     * @bodyParam _method string required This will tell backend that its actually a delete request. Example: "DELETE"
     */
    public function destroy(Investment $investment)
    {
        $investment->delete();
        return $this->success([],'Investment soft-deleted successfully.');
    }
}
