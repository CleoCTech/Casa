<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function shop()
    {
        return view("shop");
    }
    public function collections()
    {
        return view("collections");
    }
    public function jewerlytips()
    {
        return view("jewerlytips");
    }
    public function about()
    {
        return view("about");
    }
    public function durability()
    {
        return view("durability");
    }
    public function contact()
    {
        return view("contact");
    }
}