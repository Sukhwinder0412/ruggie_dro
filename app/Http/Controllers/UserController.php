<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
   public function index(){
       $name='test';
       $users=array("name"=>"Sukh","email"=>"s1@gmail.com","phone"=>"7643756");
      // print_r($users); die;
       return view('user',compact('name','users'));
   }
}
