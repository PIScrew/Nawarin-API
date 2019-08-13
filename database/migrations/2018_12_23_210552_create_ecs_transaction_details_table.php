<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEcsTransactionDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ecs_transaction_details', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('id_store')->unsigned();
            $table->integer('id_transaction')->unsigned();
            $table->integer('id_product')->unsigned();
            $table->integer('qty')->default(0);
            $table->integer('id_extra')->unsigned();
            $table->integer('price')->nullable();
            $table->integer('total_price')->nullable();
            $table->string('courier')->nullable();            
            $table->string('courier_service')->nullable();
            $table->integer('delivery_fee')->nullable();            
            $table->string('coupon')->nullable();
            $table->integer('coupon_price')->nullable();
            $table->longText('note')->nullable();            
            $table->timestamp('receipt')->nullable();          
            $table->integer('status')->default(0);
            $table->timestamps();
            $table->foreign('id_transaction')->references('id')->on('ecs_transactions');
            $table->foreign('id_product')->references('id')->on('ecs_products');
            $table->foreign('id_extra')->references('id')->on('ecs_product_extras');
            $table->foreign('id_store')->references('id')->on('ecs_stores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ecs_transaction_details');
    }
}
