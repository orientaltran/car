<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\Featured_images;

class Relationships extends Controller
{
    public function toAndto()
    {
    	$post = Posts::find(1)->FeaturedImages;
    	print_r($post);
    }
}
