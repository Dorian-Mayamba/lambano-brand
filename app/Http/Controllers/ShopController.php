<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function showShopPage(){
        return view('Shop');
    }   

    public function sendOrderDetail(){
        //ToDo implement his function
    }
}
