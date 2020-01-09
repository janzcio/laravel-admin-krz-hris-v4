<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            
            $table->boolean('is_employed')->nullable()->default(0);
            $table->boolean('is_department_head')->nullable()->default(0);
            $table->string('device_id')->nullable();
            $table->string('employee_id_no')->nullable();
            $table->string('surname')->nullable();
            $table->string('firstname')->nullable();
            $table->string('middlename')->nullable();
            $table->string('suffix')->nullable();
            $table->string('department')->nullable();
            $table->string('section')->nullable();
            $table->string('position')->nullable();
            $table->string('status')->nullable();
            $table->date('salary_schedule')->nullable();
            $table->string('sg')->nullable();
            $table->integer('monthly_salary')->nullable();
            $table->string('step')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->text('place_of_birth')->nullable();
            $table->string('sex')->nullable();
            $table->string('civil_status')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            /*Government ID Numbers*/
            $table->string('gsis_id_no')->nullable();
            $table->string('pagibig_id_no')->nullable();
            $table->string('phil_health_no')->nullable();
            $table->string('sss_no')->nullable();
            $table->string('tin_no')->nullable();
            $table->string('agency_emp_no')->nullable();
            $table->string('citizenship')->nullable();
            $table->string('citizenship_by')->nullable();
            $table->string('country')->nullable();

            /*Residential Address*/
            $table->text('house_block_lot')->nullable();
            $table->text('street')->nullable();
            $table->text('subdivision_or_village')->nullable();
            $table->text('barangay')->nullable();
            $table->text('city_or_municipality')->nullable();
            $table->text('province')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('tel_no')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('email')->nullable();
            $table->string('highest_educational_attainment')->nullable();
            $table->string('first_day_of_service_in_govt')->nullable();
            $table->string('casual_appointment')->nullable();
            $table->string('original_appointment')->nullable();
            $table->string('nature_of_appointment')->nullable();
            $table->string('status_type')->nullable();
            $table->string('bio')->nullable();

            /*Family Background*/
            $table->string('spouse_surname')->nullable();
            $table->string('spouse_firstname')->nullable();
            $table->string('spouse_middlename')->nullable();
            $table->string('spouse_occupation')->nullable();
            $table->string('spouse_employer_bus_name')->nullable();
            $table->string('spouse_business_address')->nullable();
            $table->string('spouse_bus_telephone')->nullable();
            $table->string('father_surname')->nullable();
            $table->string('father_firstname')->nullable();
            $table->string('father_middlename')->nullable();
            $table->string('mother_surname')->nullable();
            $table->string('mother_firstname')->nullable();
            $table->string('mother_middlename')->nullable();
            $table->text('children')->nullable();

            /*Educational*/
            $table->text('educational')->nullable();

            $table->text('cse')->nullable();

            $table->text('we')->nullable();

            $table->text('vw')->nullable();

            $table->text('tp')->nullable();

            $table->text('oi')->nullable();

            $table->text('reference')->nullable();

            $table->boolean('rfu')->nullable()->default(0)->comment = 'request for update';
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
        Schema::dropIfExists('profiles');
    }
}
