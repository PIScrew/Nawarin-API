<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEcsDropshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ecs_dropships', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('id_user')->unsigned();
            $table->integer('id_store')->unsigned(); 
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('id_user')->references('id')->on('ecs_users');
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
        Schema::dropIfExists('ecs_dropships');
    }
}
