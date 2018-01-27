<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Media', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('Id');
            $table->char('Clothing', 1)->nullable();
            $table->char('Plaque', 1)->nullable();
            $table->char('Trophy', 1)->nullable();
            $table->timestamps();

            $table->unique(["Id"], 'Id_UNIQUE');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Media');
    }
}
