<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWorldController extends Controller
{
    public function hello(Request $request){

        return response()->json([
           'oi'=> "Hello World {$request->name}",
           'tchau'=>$request->all()
    ]);
    }
}
