<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
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
          $table->string('name',100);
          $table->decimal('price',5,2);
          $table->integer('marks_id')->unsigned();


          //--------------------
          //$table->primary('id');
          $table->foreign('marks_id')->references('id')->on('marks');

      });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

          Schema::drop('products');

    }
}
