<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\product;
class productController extends Controller {

    public function __construct() {
        // CSRF Protection
        $this->Product = new Product();
    }

    // Save Product Record
    public function saveProduct() {
        $products = $this->Product->saveProduct(Input::all());
        return $products;
    }

}
