<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Payment', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('Id');
            $table->integer('Customer_Id');
            $table->integer('Order_Id');
            $table->integer('PaymentType_Id');
            $table->decimal('Payment_Amount');
            $table->timestamps();
            $table->index(["Order_Id"], 'fk_Payment_Order1_idx');

            $table->index(["Customer_Id"], 'fk_Payment_Customer1_idx');

            $table->index(["PaymentType_Id"], 'fk_Payment_PaymentType1_idx');

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
        Schema::dropIfExists('Payment');
    }
}
