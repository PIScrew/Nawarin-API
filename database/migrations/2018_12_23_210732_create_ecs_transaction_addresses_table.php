<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEcsTransactionAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ecs_transaction_addresses', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('id_transaction')->unsigned();
            $table->string('province');
            $table->integer('id_province');
            $table->string('city');            
            $table->integer('id_city');
            $table->string('subdistrict');
            $table->integer('id_subdistrict');
            $table->text('complete_address');
            $table->string('zip_code');
            $table->foreign('id_transaction')->references('id')->on('ecs_transactions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ecs_transaction_addresses');
    }
}
