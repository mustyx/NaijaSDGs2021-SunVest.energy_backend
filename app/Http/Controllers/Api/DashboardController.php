<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\ApiResponseTrait;

/**
 * @group Dashboard
 *
 * Manage user dashboard
 */

class DashboardController extends Controller
{
    use ApiResponseTrait;
    /**
     * GET Dashboard data
     *
     * @response {"status":"Success","message":null,"data":{"projects":0,"investments":0,"cells_invested_in":0,"amount_invested":0}}
     */
    public function index()
    {
        $projects = count(auth()->user()->projects());
        $investments = auth()->user()->investments()->paid();
        $payments = auth()->user()->payments()->paid();
        $data = [
            'projects' => $projects,
            'investments' => count($investments->get()),
            'cells_invested_in' => (int)$investments->sum('cells'),
            'amount_invested' => (int)$payments->sum('amount')
        ];
        return $this->success($data);
    }
}
