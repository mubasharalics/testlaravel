<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;
use DB;
class product extends Model
{
    //
    public function saveProduct() {
        $ProductData = array();
        $ProductData['product_name'] = Input::get('p_name');
        $ProductData['stock'] = Input::get('p_quantity');
        $ProductData['price'] = Input::get('p_price');
        $ProductId = DB::table('products')->insertGetId($ProductData);
        if($ProductId) {
            return 0;
        } else {
            return 1;
        }
    }
}
