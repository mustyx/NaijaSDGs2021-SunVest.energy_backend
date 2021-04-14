<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProjectResource;
use App\Models\Project;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Traits\ApiResponseTrait;

/**
 * @group Home
 *
 * Manage landing pages that do not require authentication
 */

class HomeController extends Controller
{
    use ApiResponseTrait;

    /**
     * GET Home
     *
     * List 8 random projects
     * @response {"status":"Success","message":null,"data":[{"id":1,"name":"5KVA Rooftop Solar Mini Grid","slug":"5kva-rooftop-mini-grid","description":"Ut consectetuer ultricies est fringilla mus. Est ridiculus tempor facilisi curabitur orci montes proin. Accumsan metus risus feugiat ultricies tortor ullamcorper natoque. Urna magna bibendum ac pellentesque. Tincidunt parturient venenatis dolor ridiculus at nulla consequat. Nam molestie magna bibendum metus nascetur nulla.\r\n\r\nSi vehicula hendrerit dis justo fusce. Aptent erat molestie ac cras. Cras habitasse consequat hac lobortis ornare id. Platea justo ornare odio non morbi netus. Augue gravida iaculis sit nulla penatibus habitant. Eget tempor nullam interdum taciti maecenas.\r\n\r\nImperdiet eleifend gravida curae cubilia aenean justo. Fames eleifend ac vitae erat a. Integer mi aptent eget per odio nullam. Aliquam curabitur tristique magna class mus cubilia dis.","total_cells":120,"taken_cells":"12","cost_per_cell":23500,"profit":22,"maturity_period":20,"start_date":"2021-05-05T14:30:52.000000Z","end_date":"2021-05-20T14:30:52.000000Z","ad_due_date":"2021-04-28T14:30:52.000000Z","is_active":null,"created_at":"2021-04-06T06:44:50.000000Z"},{"id":2,"name":"10KVA Rooftop Mini Grid","slug":"10kva-rooftop-mini-grid","description":"Ut consectetuer ultricies est fringilla mus. Est ridiculus tempor facilisi curabitur orci montes proin. Accumsan metus risus feugiat ultricies tortor ullamcorper natoque. Urna magna bibendum ac pellentesque. Tincidunt parturient venenatis dolor ridiculus at nulla consequat. Nam molestie magna bibendum metus nascetur nulla.\r\n\r\nSi vehicula hendrerit dis justo fusce. Aptent erat molestie ac cras. Cras habitasse consequat hac lobortis ornare id. Platea justo ornare odio non morbi netus. Augue gravida iaculis sit nulla penatibus habitant. Eget tempor nullam interdum taciti maecenas.\r\n\r\nImperdiet eleifend gravida curae cubilia aenean justo. Fames eleifend ac vitae erat a. Integer mi aptent eget per odio nullam. Aliquam curabitur tristique magna class mus cubilia dis.","total_cells":120,"taken_cells":0,"cost_per_cell":23500,"profit":22,"maturity_period":20,"start_date":"2021-05-01T14:25:12.000000Z","end_date":"2021-05-20T14:25:12.000000Z","ad_due_date":"2021-04-28T14:25:12.000000Z","is_active":null,"created_at":"2021-04-09T14:25:12.000000Z"}]}
     */
    public function home(){
        $today = Carbon::today();
        $projects = Project::active()->whereDate('ad_due_date','>=',$today)->inRandomOrder()->limit(8)->get();
        return $this->success(ProjectResource::collection($projects));
    }


    /**
     * GET Marketplace
     *
     * List projects available for investing
     * @queryParam page Which page to show. Example: 3
     * @response {"status":"Success","message":null,"data":[{"id":1,"name":"5KVA Rooftop Solar Mini Grid","slug":"5kva-rooftop-mini-grid","description":"Ut consectetuer ultricies est fringilla mus. Est ridiculus tempor facilisi curabitur orci montes proin. Accumsan metus risus feugiat ultricies tortor ullamcorper natoque. Urna magna bibendum ac pellentesque. Tincidunt parturient venenatis dolor ridiculus at nulla consequat. Nam molestie magna bibendum metus nascetur nulla.\r\n\r\nSi vehicula hendrerit dis justo fusce. Aptent erat molestie ac cras. Cras habitasse consequat hac lobortis ornare id. Platea justo ornare odio non morbi netus. Augue gravida iaculis sit nulla penatibus habitant. Eget tempor nullam interdum taciti maecenas.\r\n\r\nImperdiet eleifend gravida curae cubilia aenean justo. Fames eleifend ac vitae erat a. Integer mi aptent eget per odio nullam. Aliquam curabitur tristique magna class mus cubilia dis.","total_cells":120,"taken_cells":"12","cost_per_cell":23500,"profit":22,"maturity_period":20,"start_date":"2021-05-05T14:30:52.000000Z","end_date":"2021-05-20T14:30:52.000000Z","ad_due_date":"2021-04-28T14:30:52.000000Z","is_active":null,"created_at":"2021-04-06T06:44:50.000000Z"},{"id":2,"name":"10KVA Rooftop Mini Grid","slug":"10kva-rooftop-mini-grid","description":"Ut consectetuer ultricies est fringilla mus. Est ridiculus tempor facilisi curabitur orci montes proin. Accumsan metus risus feugiat ultricies tortor ullamcorper natoque. Urna magna bibendum ac pellentesque. Tincidunt parturient venenatis dolor ridiculus at nulla consequat. Nam molestie magna bibendum metus nascetur nulla.\r\n\r\nSi vehicula hendrerit dis justo fusce. Aptent erat molestie ac cras. Cras habitasse consequat hac lobortis ornare id. Platea justo ornare odio non morbi netus. Augue gravida iaculis sit nulla penatibus habitant. Eget tempor nullam interdum taciti maecenas.\r\n\r\nImperdiet eleifend gravida curae cubilia aenean justo. Fames eleifend ac vitae erat a. Integer mi aptent eget per odio nullam. Aliquam curabitur tristique magna class mus cubilia dis.","total_cells":120,"taken_cells":0,"cost_per_cell":23500,"profit":22,"maturity_period":20,"start_date":"2021-05-01T14:25:12.000000Z","end_date":"2021-05-20T14:25:12.000000Z","ad_due_date":"2021-04-28T14:25:12.000000Z","is_active":null,"created_at":"2021-04-09T14:25:12.000000Z"}]}
     */
    public function marketplace(){
        $today = Carbon::today();
        $projects = Project::active()->whereDate('ad_due_date','>=',$today)->latest()->paginate(12);
        return $this->success(ProjectResource::collection($projects));
    }

    /**
     * GET Single Project
     *
     * Get information on a single project
     * @param  Project $project Example: slug
     *
     * @response {"status":"Success","message":null,"data":{"id":1,"name":"5KVA Rooftop Solar Mini Grid","slug":"5kva-rooftop-mini-grid","description":"Ut consectetuer ultricies est fringilla mus. Est ridiculus tempor facilisi curabitur orci montes proin. Accumsan metus risus feugiat ultricies tortor ullamcorper natoque. Urna magna bibendum ac pellentesque. Tincidunt parturient venenatis dolor ridiculus at nulla consequat. Nam molestie magna bibendum metus nascetur nulla.\r\n\r\nSi vehicula hendrerit dis justo fusce. Aptent erat molestie ac cras. Cras habitasse consequat hac lobortis ornare id. Platea justo ornare odio non morbi netus. Augue gravida iaculis sit nulla penatibus habitant. Eget tempor nullam interdum taciti maecenas.\r\n\r\nImperdiet eleifend gravida curae cubilia aenean justo. Fames eleifend ac vitae erat a. Integer mi aptent eget per odio nullam. Aliquam curabitur tristique magna class mus cubilia dis.","total_cells":120,"taken_cells":"12","cost_per_cell":23500,"profit":22,"maturity_period":20,"start_date":"2021-05-05T14:30:52.000000Z","end_date":"2021-05-20T14:30:52.000000Z","ad_due_date":"2021-04-28T14:30:52.000000Z","is_active":null,"created_at":"2021-04-06T06:44:50.000000Z"}}
     */
    public function project(Project $project){
        return $this->success(new ProjectResource($project));
    }
}
