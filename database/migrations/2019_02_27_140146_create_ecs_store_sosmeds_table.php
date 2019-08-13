<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEcsStoreSosmedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ecs_store_sosmeds', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('id_store')->unsigned();
            $table->longText('fb')->nullable();
            $table->longText('ig')->nullable();
            $table->longText('twitter')->nullable();
            $table->longText('whatsapp')->nullable();
            $table->longText('telegram')->nullable();
            $table->timestamps();
            $table->softDeletes();
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
        Schema::dropIfExists('ecs_store_sosmeds');
    }
}
