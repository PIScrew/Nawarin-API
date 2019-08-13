<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEcsTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ecs_transactions', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('invoice_code')->nullable();
            $table->integer('price_unique')->nullable();            
            $table->integer('total_price')->nullable();
            $table->integer('id_payment')->unsigned();
            $table->string('id_user')->nullable();
            $table->integer('id_bank')->nullable();
            $table->integer('status')->default(0);
            $table->timestamp('expired_date')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('id_payment')->references('id')->on('ecs_site_payments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ecs_transactions');
    }
}
