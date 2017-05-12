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
        $cards = $book->cards();
        $synopsis = $cards->where('type', 0);
        $settings = $cards->where('type', 1);
        $characters = $cards->where('type', 2);
        $locations = $cards->where('type', 3);
        $scenes = $cards->where('type', 4);
        $histories = $cards->where('type', 5);
        $items = $cards->where('type', 6);
        $brainstorms = $cards->where('type', 7);
        $sublocations = $cards->where('type', 8);
        return view('samplepage',compact('book','synopsis','settings','characters','locations','scenes','histories','items','brainstorms','sublocations'));
    	// return view('novel',compact('book'));
    }
    
    public function article($id){
        $book = Book::find($id);
        $cards = $book->cards();
        $summary = $cards->where('type', 10);
        $ideas = $cards->where('type', 11);
        $quotes = $cards->where('type', 12);
        $facts = $cards->where('type', 13);
        $explanations = $cards->where('type', 14);
        $brainstorms = $cards->where('type', 15);
        $references = $cards->where('type', 16);
        return view('article',compact('book','summary','ideas','quotes','facts','explanations','brainstorms','references'));
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
