<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;


class ProductsController extends Controller
{
public function index(){

}
public function show($id)
{
    $product = \App\Models\Product::findOrFail($id);
    //echo "<pre>"; print_r($product); die;
    Session::flash('flash_message', 'Task successfully added!');

    return view('product', compact('product'));
}
}
