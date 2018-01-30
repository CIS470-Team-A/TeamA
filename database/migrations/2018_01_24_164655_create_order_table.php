<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Order', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('Id');
            $table->integer('Customer_Id')->unsigned();
            $table->string('Status', 45);
            $table->string('Product_Content', 150);
            $table->timestamps();            

            $table->index(["Customer_Id"], 'fk_Order_Customer1_idx');

            $table->unique(["Customer_Id"], 'Customer_Id_UNIQUE');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Order');
    }
}
