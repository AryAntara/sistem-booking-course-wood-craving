<?php

namespace App\Controllers\Admins;

use App\Controllers\BaseController;
use App\Models\Produk;
use CodeIgniter\HTTP\RedirectResponse;
class Product extends BaseController
{
    private $productModel;
    public function __construct()
    {
        $this->productModel = new Produk;
    }

    /**
     * Show product management pages
     * 
     * @return string
     */
    public function index()
    {

        $product_entries = $this->productModel->findAll();
        $product_entries = array_map(function($item){
            $item['benefit_points'] = explode('-',$item['product_description']);
            return $item;
        }, $product_entries);

        $data = ['products' => $product_entries, 'type' => 'product'];
        return view("admins/pages/product", $data);
    }

    /**
     * Show add page to added new product
     * 
     * @return string
     */
    public function show_add_page(): string
    {
        return view("admins/pages/add_product", ['type' => 'product']);
    }

    /**
     * Show edit page to edited new product
     * @param string $id
     * @return string
     */
    public function show_edit_page(string $id): string
    {
        $product_entry = $this->productModel->where('id_product', $id)->first();
        return view("admins/pages/edit_product", ['type' => 'product', 'product_entry' => $product_entry]);
    }

    /**
     * Insert new product data
     */
    public function insert()
    {
        $title = $this->request->getPost('product_name');
        $price = $this->request->getPost('product_price');
        $desc = $this->request->getPost('product_description');
        $image = $this->request->getFile('product_image');

        // check image was valid 

        if (!$image->isValid()) {
            throw new \RuntimeException($image->getErrorString() . '(' . $image->getError() . ')');
        }

        
        // move image into public directory 
        $image_path = ROOTPATH . '/public/images/';  
        $filename = $title . "_" . rand() . '.' . $image->getExtension();        
        $image->move($image_path, $filename);                
                
        $product = [
            'product_name' => $title,
            'product_price' => $price,
            'product_description' => $desc,
            'product_image' => $filename
        ];

        $this->productModel->insert($product);
        return redirect()->back();
    }

    /**
     * Delete a product by their id and remove the image file
     * 
     * @return RedirectResponse
     */
    public function delete(){
        $id_product = $this->request->getGet('id_product');
        $this->productModel->where('id_product', $id_product)->delete();
        return redirect()->back();
    }

    /**
     * Update new product data
     * @param string $id
     *
     */
    public function update(string $id)
    {
        $title = $this->request->getPost('product_name');
        $price = $this->request->getPost('product_price');
        $desc = $this->request->getPost('product_description');
        $image = $this->request->getPost('product_image');

        $oldData = $this->productModel->where('id_product', $id)->first();
        $filename = $oldData['product_image'];

        // move image into public directory
        if($image) {
            $image = $this->request->getFile('product_image');
            $image_path = ROOTPATH . '/public/images/';
            $filename = $title . "_" . rand() . '.' . $image->getExtension();
            $image->move($image_path, $filename);
        }

        $product = [
            'product_name' => $title,
            'product_price' => $price,
            'product_description' => $desc,
            'product_image' => $filename
        ];

        $this->productModel->update($id,$product);
        return redirect()->back();
    }


}
