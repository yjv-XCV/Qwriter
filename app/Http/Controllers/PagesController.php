<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Request;

use App\Http\Requests;
use App\Book;

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
        // dd($books);
    	return view('samplepage',compact('books'));
    }

    public function create(){
        $input = Request::all();
        Book::create($input);
        return redirect('test');
    }
}
