<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
    	'title',
    	'type'
    ];

    public function cards(){
    	return $this->hasMany('App\Card');
    }
}
