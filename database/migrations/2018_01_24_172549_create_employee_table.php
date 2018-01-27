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
            $table->engine = 'InnoDB';
            $table->increments('Id')->unsigned();
            $table->string('First_Name', 25);
            $table->string('Last_Name', 25);
            $table->integer('Phone_Num');
            $table->string('Address', 45);
            $table->char('Access_Level', 2);
            $table->string('Email', 45);
            $table->integer('User_Id')->unsigned();
            $table->string('City', 25);
            $table->char('State', 2);

            $table->index(["User_Id"], 'fk_Employee_User_idx');

            $table->unique(["User_Id"], 'User_User_Id_UNIQUE');

            $table->unique(["Id"], 'Id_UNIQUE');

            $table->unique(["Email"], 'Email_UNIQUE');
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
