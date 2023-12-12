<?php

namespace App\Controllers;

use App\Models\Produk;
use App\Controllers\BaseController;

class Course extends BaseController
{
    private $productModel;
    public function __construct()
    {
        $this->productModel = new Produk;
    }

    /**
     * @return string
     */
    public function index()
    {
        //
        $product_entries = $this->productModel->findAll();

        $product_entries = array_map(function($item){
            $item['benefit_points'] = explode('-',$item['product_description']);
            return $item;
        }, $product_entries);
        return view('pages/course', ['page' => 'course', 'product_entries' => $product_entries]);
    }
}
