<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
class FluentController extends Controller
{
    public function index(){
        echo "<h1>Fluent Srings Given below</h1>";
        $slice=Str::of('Welcome to my job')->after('Welcome');
        echo "<br>"; echo $slice;
        $slice2= Str::of('App\Http\Controllers')->afterLast('\\');
        echo $slice2;
        $append=Str::of('Hello')->append('World');
        echo  $append;
        $lower=Str::of('HELLO')->lower();
        echo $lower;
        $trim=Str::of('LaravelNewasa')->trim('a');
        echo  $trim;

    }
}
