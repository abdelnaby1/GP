<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBalletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ballets', function (Blueprint $table) {
                          $table->bigIncrements('id');
            $table->string('name');
            $table->integer('owner_id')->index();
            $table->string('image'); // save url for the image
            $table->string('location');
            $table->text('description');
            $table->unsignedInteger('price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ballets');
    }
}
