<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserAccount extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('user_account', function (Blueprint $table) {


            $table->string('employee_id')->unique();
            $table->string('username')->unique();
            $table->string('password');
            $table->string('department');
            $table->string('employee_role');
            $table->rememberToken();
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
        Schema::dropIfExists('user_account');
    }
}
