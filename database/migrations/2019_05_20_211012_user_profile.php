<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profile', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('employee_id')->unique();
            $table->string('title');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('gender')->nullable();
            $table->string('email_address')->unique();
            $table->integer('phone_number')->nullable();
            $table->integer('emergency_number')->nullable();
            $table->date('dob')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('id_number')->nullable()->unique();
            $table->string('nationality')->nullable();
            $table->string('state_of_origin')->nullable();
            $table->string('permanent_home_address')->nullable();
            $table->string('state_of_residence')->nullable();
            $table->string('lga_of_residence')->nullable();
            $table->string('current_residential_address')->nullable();
            $table->string('next_of_Kin')->nullable();
            $table->string('relationship')->nullable();
            $table->string('next_o_fkinaddress')->nullable();
            $table->string('job_title');
            $table->date('joined_date');
            $table->date('confirmation_date')->nullable();
            $table->string('supervisor');
            $table->binary('profile_image')->nullable();
                 });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       
          Schema::dropIfExists('user_profile');
    }
}
