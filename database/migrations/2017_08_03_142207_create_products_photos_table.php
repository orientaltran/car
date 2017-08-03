<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsPhotosTable extends Migration
{
    /**
     * Run the migrations.php artisan make:model Product -m
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_photos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products_photos');
    }
}
