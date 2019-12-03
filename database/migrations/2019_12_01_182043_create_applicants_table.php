<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreateApplicantsTable extends Migration
{
    use SoftDeletes;
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('applicants', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');     
            $table->integer('jobhiring_id');
            $table->integer('status')->default(0)->comment = '0 = pending, 1 = approved, 2 = for interview , 3 = declined';
            $table->timestamps();
            $table->softDeletes();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applicants');
    }
}
