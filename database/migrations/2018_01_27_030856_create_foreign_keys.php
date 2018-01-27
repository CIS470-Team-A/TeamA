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
    {
                Schema::table('Order', function (Blueprint $table) {
            $table->foreign('Customer_Id', 'fk_Order_Customer1_idx')
                ->references('Id')->on('Customer')
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
