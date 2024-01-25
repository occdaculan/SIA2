<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function home(){
        return view('welcome');
    }

    public function contactPage(){
        var_dump("contact us");
        return view('contact');
    }

    
}
