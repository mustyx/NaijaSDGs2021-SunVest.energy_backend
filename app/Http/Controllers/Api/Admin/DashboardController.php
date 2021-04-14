<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\Investment;
use App\Models\Payment;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Traits\ApiResponseTrait;

/**
 * @group Dashboard - ADMIN
 *
 * Manage dashboard
 */

class DashboardController extends Controller
{
    use ApiResponseTrait;
    /**
     * GET Dashboard data
     *
     * @response {"status":"Success","message":null,"data":{"projects":4,"investments":0,"total_cells":"600","taken_cells":0,"amount_invested":0}}
     */
    public function index()
    {
        $projects = Project::active();
        $investments = Investment::paid();
        $payments = Payment::paid();
        $data = [
            'projects' => count($projects->get()),
            'investments' => count($investments->get()),
            'total_cells' => (int)$projects->sum('total_cells'),
            'taken_cells' => (int)$investments->sum('cells'),
            'amount_invested' => (int)$payments->sum('amount')
        ];
        return $this->success($data);
    }
}
