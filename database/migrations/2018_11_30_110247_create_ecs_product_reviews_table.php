<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEcsProductReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ecs_product_reviews', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('id_product')->unsigned();
            $table->integer('id_user')->unsigned();
            $table->float('rating', 8, 2);
            $table->text('description');        
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('id_product')->references('id')->on('ecs_products');
            $table->foreign('id_user')->references('id')->on('ecs_users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ecs_product_reviews');
    }
}
