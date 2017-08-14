<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->float('originalprice')->unsigned();
            $table->float('comcomprice')->unsigned();
            $table->text('description');
            $table->text('image')->nullable();
            $table->text('slug')->nullable();
            $table->integer('minimumreservation');
            $table->string('duration');
            $table->integer('user_id')->unsigned()->index(); //sin signo y del tipo index.
             $table->foreign('user_id')->references('id')->on('users');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories');
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
        Schema::dropIfExists('products');
    }
}
