<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    //
    public function homepage(){
    	return view('homepage');
    }

    public function novel(){
    	return view('novel');
    }
    
    public function article(){
    	return view('article');
    }
}
