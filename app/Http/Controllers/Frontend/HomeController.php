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

    public function aboutUs()
    {

        return view('frontend.pages.about_us');
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
    public function wishlist()
    {
        return view('frontend.pages.wishlist');
    }



    public function shop_list()
    {
        return view('frontend.pages.shop_list');
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }
    public function gallery()
    {
        return view('frontend.pages.gallery');
    }
    public function blog()
    {
        return view('frontend.pages.blog');
    }
    public function blog_details()
    {
        return view('frontend.pages.blog_details');
    }
    public function blog_standard()
    {
        return view('frontend.pages.blog_standard');
    }
    public function chef()
    {
        return view('frontend.pages.chef');
    }
    public function faq()
    {
        return view('frontend.pages.faq');
    }
    public function services()
    {
        return view('frontend.pages.services');
    }

    function languageSet($lang)
    {
        session()->put('locale', $lang);
        return redirect()->back();
    }
}
