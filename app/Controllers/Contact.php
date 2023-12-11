<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Contact extends BaseController
{
    /**
     * @return string
     */
    public function index()
    {
        return view('pages/contact', ['page' => 'contact']);
    }
}
