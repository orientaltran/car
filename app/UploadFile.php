<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UploadFile extends Model
{
     protected $fillable = [
        'id', 'file',
    ];
}
