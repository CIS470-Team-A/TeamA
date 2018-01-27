<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersWcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('WCS_Users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('Id')->unsigned;
            $table->string('User_Name', 32);
            $table->string('Password', 64);
            $table->timestamps();
            $table->unique(["Id"], 'Id_UNIQUE');
            $table->unique(["User_Name"], 'User_Name_UNIQUE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('WCS_Users');
    }
}
