<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {                   //Products//
                Schema::table('Products', function (Blueprint $table) {
                $table->foreign('Type_Id', 'fk_Products_Type1_idx')
                ->references('Id')->on('ProductType')
                ->onDelete('no action')
                ->onUpdate('no action');
        });

                Schema::table('Products', function (Blueprint $table) {
                $table->foreign('Media_Id', 'fk_Products_Media1_idx')
                ->references('Id')->on('Media')
                ->onDelete('no action')
                ->onUpdate('no action');

        });             //Employee//
                Schema::table('Employee', function (Blueprint $table) {
                $table->foreign('User_Id', 'fk_Employee_User_idx')
                ->references('Id')->on('WCS_Users')
                ->onDelete('no action')
                ->onUpdate('no action');

        });             //Payment//
                Schema::table('Payment', function (Blueprint $table) {
                 $table->foreign('Customer_Id', 'fk_Payment_Customer1_idx')
                ->references('Id')->on('Customer')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
                Schema::table('Payment', function (Blueprint $table) {
                $table->foreign('Order_Id', 'fk_Payment_Order1_idx')
                ->references('Id')->on('Order')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
                Schema::table('Payment', function (Blueprint $table) {
                $table->foreign('PaymentType_Id', 'fk_Payment_PaymentType1_idx')
                ->references('Id')->on('PaymentType')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
                        //LineItems//
                Schema::table('LineItems', function (Blueprint $table) {
                $table->foreign('Order_Id', 'fk_LineItems_Order1_idx')
                ->references('Id')->on('Order')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
                Schema::table('LineItems', function (Blueprint $table) {
               $table->foreign('Product_Id', 'fk_LineItems_Products1_idx')
                ->references('Id')->on('Products')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
                        //Customer//
                Schema::table('Customer', function (Blueprint $table) {
                 $table->foreign('User_Id', 'fk_Customer_User1_idx')
                ->references('Id')->on('WCS_Users')
                ->onDelete('no action')
                ->onUpdate('no action');
                });   

    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
