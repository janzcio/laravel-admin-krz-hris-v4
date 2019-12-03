<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKarlcrudsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karlcruds', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('Name')->nullable();
            $table->text('Address')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('karlcruds');
    }
}
