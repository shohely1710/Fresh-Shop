<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class All_ProductsController extends Controller
{
    //
    public function sidebar_products()
    {
        return view('frontend.pages.shop.product-sidebar');
    }
    public function product_details()
    {
        return view('frontend.pages.shop.product_details');
    }
    public function carts()
    {
        return view('frontend.pages.shop.carts');
    }
    public function checkout()
    {
        return view('frontend.pages.shop.checkout');
    }
    public function account_details()
    {
        return view('frontend.pages.shop.account-details');
    }
    public function wishlist()
    {
        return view('frontend.pages.shop.wishlist');
    }
}
