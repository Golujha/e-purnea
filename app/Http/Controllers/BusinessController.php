<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusinessController extends Controller
{
    //
    public function businessLogin(Request $req){
        if($req->isMethod("post")){

        }
        return view("businessLogin");
    }
}
