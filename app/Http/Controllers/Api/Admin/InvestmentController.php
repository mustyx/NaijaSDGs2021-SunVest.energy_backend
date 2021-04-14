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
     *
     * @response {"status":"Success","message":"Investment successfully created.","data":null}
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
     * @param  Investment $investment Example: 1
     *
     * @response {"status":"Success","message":null,"data":{"id":1,"user_id":2,"project_id":1,"cells":15,"cost_per_cell":23500,"profit":22,"maturity_period":20,"start_date":"1970-05-22T00:00:00.000000Z","due_date":"1970-05-22T00:00:00.000000Z","created_at":"2021-04-09T14:39:32.000000Z","project":{"id":1,"name":"5KVA Rooftop Solar Mini Grid","slug":"5kva-rooftop-mini-grid","description":"Ut consectetuer ultricies est fringilla mus. Est ridiculus tempor facilisi curabitur orci montes proin. Accumsan metus risus feugiat ultricies tortor ullamcorper natoque. Urna magna bibendum ac pellentesque. Tincidunt parturient venenatis dolor ridiculus at nulla consequat. Nam molestie magna bibendum metus nascetur nulla.\r\n\r\nSi vehicula hendrerit dis justo fusce. Aptent erat molestie ac cras. Cras habitasse consequat hac lobortis ornare id. Platea justo ornare odio non morbi netus. Augue gravida iaculis sit nulla penatibus habitant. Eget tempor nullam interdum taciti maecenas.\r\n\r\nImperdiet eleifend gravida curae cubilia aenean justo. Fames eleifend ac vitae erat a. Integer mi aptent eget per odio nullam. Aliquam curabitur tristique magna class mus cubilia dis.","total_cells":120,"taken_cells":"15","cost_per_cell":23500,"profit":22,"maturity_period":20,"start_date":"2021-05-05T14:30:52.000000Z","end_date":"2021-05-20T14:30:52.000000Z","ad_due_date":"2021-04-28T14:30:52.000000Z","is_active":null,"created_at":"2021-04-06T06:44:50.000000Z"}}}
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
     * @response {"status":"Success","message":"Investment successfully updated.","data":{"id":1,"user_id":3,"project_id":1,"cells":12,"cost_per_cell":23500,"profit":22,"maturity_period":20,"start_date":"1970-05-22T00:00:00.000000Z","due_date":"1970-05-22T00:00:00.000000Z","created_at":"2021-04-09T14:39:32.000000Z"}}
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
