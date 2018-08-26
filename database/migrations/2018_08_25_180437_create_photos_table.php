<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos', function (Blueprint $table) {
          $table->increments('photo_id');
          $table->string('photo_name');
          $table->integer('category_id')->unsigned();
          $table->foreign('category_id')->references('category_id')->on('categories');
          $table->integer('subcategory_id')->unsigned();
          $table->foreign('subcategory_id')->references('subcategory_id')->on('subcategories');
          $table->enum('status', ['show', 'hide'])->default('show');
          $table->text('photo');
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
        Schema::dropIfExists('photos');
    }
}
