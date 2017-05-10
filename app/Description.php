<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    protected fillable = [
    	'content',
    	'version',
    	'card_id'
    ];

    public function card(){
    	return $this->belongsTo('App\Card');
    }
}
