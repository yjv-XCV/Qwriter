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
        $books = Book::all();
    	return view('homepage',compact('books'));
    }

    public function novel($id){
        $book = Book::find($id);
    	return view('samplepage',compact('book'));
    }
    
    public function article($id){
        return view('article');
    }

    public function test(){
        $books = Book::all();
        // dd($books);
    	return view('samplepage',compact('books'));
    }

    public function create(){
        $input = Request::all();
        Book::create($input);
        return redirect('home');
    }

    public function delete(){
        $input = Request::all();
        $book = Book::find($input["id"]);
        $book->delete(); 
        return redirect('home');
    }
}
