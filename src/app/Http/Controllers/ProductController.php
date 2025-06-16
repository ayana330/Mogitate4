<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controllers
{
    public function index(){
        return view('index');
    }
}