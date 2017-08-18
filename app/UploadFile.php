<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UploadFile extends Model
{
	//protected $table='upload_files'; //difine table

	//difine column using
    protected $fillable = [
        'id', 'file',
    ];

    public $timestamps = true;//false
}
