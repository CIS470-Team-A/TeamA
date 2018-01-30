<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Products', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('Id');
            $table->integer('Catalog_Num');
            $table->decimal('Price');
            $table->integer('Media_Id')->unsigned();
            $table->integer('Type_Id')->unsigned();
            $table->timestamps();

            $table->index(["Media_Id"], 'fk_Products_Media1_idx');
            
            $table->index(["Type_Id"], 'fk_Products_Type1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Products');
    }
}
