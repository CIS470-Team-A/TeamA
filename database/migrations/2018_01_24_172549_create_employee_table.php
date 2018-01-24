<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Employee', function (Blueprint $table) {
            $table->integer('User_Id');
            $table->string('First_Name', 25)->unique();
            $table->string('Last_Name', 25)->unique();
            $table->string('Address', 45)->unique();
            $table->string('Access_Level',2);
            $table->integer('Phone_Num')->length(10);
            $table->string('Email', 45)->unique();
            $table->string('City', 25)->unique();
            $table->char('State', 2);
            $table->increments('id');
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
        Schema::dropIfExists('Employee');
    }
}
