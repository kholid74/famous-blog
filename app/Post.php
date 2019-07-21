<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
     'id_category', 'title', 'slug', 'short_description', 'content', 'image'
    ];

    public function cat() {

	    return $this->belongsTo('App\Categories', 'id_category');
	
	}
}


