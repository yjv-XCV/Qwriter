<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Request;

use App\Http\Requests;
use App\Book;
use App\Card;

class PagesController extends Controller
{
    //
    public function homepage(){
        $books = Book::all();
    	return view('homepage',compact('books'));
    }

    public function novel($id){
        $book = Book::find($id);
        $synopsis = Card::where('book_id',$id)->where('type', 0)->get();
        $settings = Card::where('book_id',$id)->where('type', 1)->get();
        $characters = Card::where('book_id',$id)->where('type', 2)->get();
        $locations = Card::where('book_id',$id)->where('type', 3)->get();
        $scenes = Card::where('book_id',$id)->where('type', 4)->get();
        $histories = Card::where('book_id',$id)->where('type', 5)->get();
        $items = Card::where('book_id',$id)->where('type', 6)->get();
        $brainstorms = Card::where('book_id',$id)->where('type', 7)->get();
        $sublocations = Card::where('book_id',$id)->where('type', 8)->get();
        return view('samplepage',compact('book','synopsis','settings','characters','locations','scenes','histories','items','brainstorms','sublocations'));
    	// return view('novel',compact('book'));
    }
    
    public function article($id){
        $book = Book::find($id);
        $summary = Card::where('book_id',$id)->where('type', 10)->get();
        $ideas = Card::where('book_id',$id)->where('type', 11)->get();
        $quotes = Card::where('book_id',$id)->where('type', 12)->get();
        $facts = Card::where('book_id',$id)->where('type', 13)->get();
        $explanations = Card::where('book_id',$id)->where('type', 14)->get();
        $brainstorms = Card::where('book_id',$id)->where('type', 15)->get();
        $references = Card::where('book_id',$id)->where('type', 16)->get();
        return view('article',compact('book','summary','ideas','quotes','facts','explanations','brainstorms','references'));
    }

    public function create(){
        $input = Request::all();
        Book::create($input);
        return redirect('home');
    }

    public function createCard($id){
        $input = Request::all();
        if($input['card_id']==0)$input['card_id'] = null;
        Card::create($input);
        return redirect()->action('PagesController@novel',['id'=>$id]);
    }

    public function delete(){
        $input = Request::all();
        $book = Book::find($input["id"]);
        $book->delete(); 
        return redirect('home');
    }
}
