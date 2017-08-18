<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    //protected $table='Posts';
    public $timestamp=false;
    // public function FeaturedImages()
    // {
    // 	return $this->hasOne('App\FeaturedImages');
    // }

    public function FeaturedImages()
    {
    	return $this->hasOne('App\FeaturedImages','forigen_key');
    }
}
