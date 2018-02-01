<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLineItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('LineItems', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('Id');
            $table->integer('Order_Id')->unsigned();
            $table->integer('Product_Id')->unsigned();
            $table->integer('Quantity');
            $table->decimal('Price');
            $table->timestamps();

            $table->index(["Product_Id"], 'fk_LineItems_Products1_idx');

            $table->index(["Order_Id"], 'fk_LineItems_Order1_idx');

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
        Schema::dropIfExists('LineItems');
    }
}
