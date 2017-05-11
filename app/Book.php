<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
    	'title',
    	'type',
    	'description'
    ];

    public function cards(){
    	return $this->hasMany('App\Card');
    }
}
