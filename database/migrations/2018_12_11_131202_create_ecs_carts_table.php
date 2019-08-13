<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEcsCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ecs_carts', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('id_product')->unsigned();
            $table->integer('id_user')->nullable();
            $table->text('id_guest')->nullable();
            $table->integer('qty');
            $table->longText('session')->nullable();
            $table->integer('id_extra')->nullable();
            $table->timestamps();
            $table->foreign('id_product')->references('id')->on('ecs_products');
            // $table->foreign('id_extra')->references('id')->on('ecs_product_extras');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ecs_carts');
    }
}
