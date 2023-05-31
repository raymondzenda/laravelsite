<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }
    public function about()
    {
        return view('about');
    }
    public function clients()
    {
        return view('clients');
    }
    public function contact()
    {
        return view('contact');
    }
    public function products()
    {
        return view('products');
    }
}
