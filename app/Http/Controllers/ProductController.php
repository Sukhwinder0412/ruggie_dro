<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $fruits=array('magoes','orange','banana','apple');
        return view("welcome",compact('fruits'));
    }
}
