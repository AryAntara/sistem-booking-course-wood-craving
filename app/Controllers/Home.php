<?php

namespace App\Controllers;

class Home extends BaseController
{
    /**
     * @return string
     */
    public function index(): string
    {
        return view('pages/home', ['page' => 'home']);
    }
}
