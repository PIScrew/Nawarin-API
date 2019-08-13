<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEcsClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ecs_classes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('class_name')->unsigned();
            $table->integer('id_store')->unsigned();
            $table->integer('id_class_product')->unsigned(); 
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('id_store')->references('id')->on('ecs_stores');
            $table->foreign('id_class_product')->references('id')->on('ecs_class_products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ecs_classes');
    }
}
