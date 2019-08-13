<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEcsClassDropshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ecs_class_dropships', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('id_drophiship')->unsigned();
            $table->integer('id_class')->unsigned();
            $table->timestamps();
            $table->foreign('id_drophiship')->references('id')->on('ecs_dropships');
            $table->foreign('id_class')->references('id')->on('ecs_classes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ecs_class_dropships');
    }
}
