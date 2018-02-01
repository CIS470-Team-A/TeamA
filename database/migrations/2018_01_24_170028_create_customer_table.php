<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Customer', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('Id');
            $table->integer('User_Id')->unsigned();
            $table->string('First_Name', 25);
            $table->string('Last_Name', 25);
            $table->string('Address', 45);
            $table->integer('Phone_Num');
            $table->string('Email', 45);
            $table->string('City', 25);
            $table->char('State', 2);
            $table->timestamps();
            
            $table->index(["User_Id"], 'fk_Customer_User1_idx');

            $table->unique(["User_Id"], 'User_Id_UNIQUE');
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
        Schema::dropIfExists('Customer');
    }
}
