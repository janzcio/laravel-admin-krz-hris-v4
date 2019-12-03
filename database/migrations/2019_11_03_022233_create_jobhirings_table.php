<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJobhiringsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobhirings', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->softDeletes();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->text('requirements')->nullable();
            $table->text('responsibilities')->nullable();
            $table->text('others')->nullable();
            $table->text('location')->nullable();
            $table->text('how_to_apply')->nullable();
            $table->integer('slot')->nullable();
            $table->integer('position')->nullable();
            $table->text('skill_requirement')->nullable();
            $table->date('available_from')->nullable();
            $table->date('available_to')->nullable();
            $table->string('email_address')->nullable();
            $table->boolean('is_active')->nullable();
            $table->integer('user_id')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('jobhirings');
    }
}
