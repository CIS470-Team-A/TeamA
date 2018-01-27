<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ProductType', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('Id');
            $table->char('Engraving', 1)->nullable();
            $table->char('Print', 1)->nullable();
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
        Schema::dropIfExists('ProductType');
    }
}
