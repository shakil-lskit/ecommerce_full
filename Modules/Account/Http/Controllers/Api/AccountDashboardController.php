<?php

namespace Modules\Account\Http\Controllers\Api;

class AccountDashboardController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response([
            'account' => auth('api')->user(),
            'recentOrders' => auth()->user()->recentOrders(5),
        ]);
    }
}
