<?php

namespace App\Controllers\Admins;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        return view("admins/pages/dashboard", ['type' => 'dashboard']);
    }
}
