<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Course extends BaseController
{
    /**
     * @return string
     */
    public function index()
    {
        //
        return view('pages/course', ['page' => 'course']);
    }
}
