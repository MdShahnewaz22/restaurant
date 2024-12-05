<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use Inertia\Inertia;
use Exception;

class HomeController extends Controller
{

    public function __construct() {}

    public function index()
    {
        return view('frontend.home');
    }

    public function aboutUs1()
    {

        return view('frontend.pages.about_us1');
    }
    public function aboutUs2()
    {

        return view('frontend.pages.about_us2');
    }

    public function shop()
    {
        return view('frontend.pages.shop');
    }

    public function shop_details()
    {
        return view('frontend.pages.shop_details');
    }

    public function cart()
    {
        return view('frontend.pages.cart');
    }

    public function checkout()
    {
        return view('frontend.pages.checkout');
    }
}
