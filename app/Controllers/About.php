<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class About extends BaseController
{
    /**
     * @return string
     */
    public function index()
    {
        return view('pages/about',['page' => 'about']);
    }
}
