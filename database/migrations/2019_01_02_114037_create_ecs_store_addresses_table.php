<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEcsStoreAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ecs_store_addresses', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('id_store')->unsigned();
            $table->integer('id_province')->nullable(); 
            $table->string('province')->nullable();
            $table->integer('id_city')->nullable();
            $table->string('city')->nullable();
            $table->integer('id_subdistrict')->nullable();
            $table->string('subdistrict')->nullable();
            $table->string('zip_code')->nullable();
            $table->longText('complete_address')->nullable();
            $table->timestamps();
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
        Schema::dropIfExists('ecs_store_addresses');
    }
}
