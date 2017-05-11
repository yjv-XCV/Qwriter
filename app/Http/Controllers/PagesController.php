<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    //
    public function homepage(){
        $books = \App\Book::all();
    	return view('homepage',compact('books'));
    }

    public function novel(){
    	return view('novel');
    }
    
    public function article(){
        return view('article');
    }

    public function test(){
        $books = \App\Book::all();
    	return view('samplepage',compact('books'));
    }

    public function create(){
        $input = Requests::all();

        return $input;
    }
}
