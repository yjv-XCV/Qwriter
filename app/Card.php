<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = [
    	'name',
    	'book_id',
    	'card_id',
    	'type'
    ];

    public function subcards(){
    	return $this->hasMany('App\Card');
    }

    public function parentcard(){
    	return $this->belongsTo('App\Card');
    }

    public function book(){
    	return $this->belongsTo('App\Book');
    }

    public function descriptions(){
    	return $this->hasMany('App\Description');
    }

    public function related(){
    	return $this->belongsToMany('App\Card', 'card_card', 'card_id','related_id');
    }
}
