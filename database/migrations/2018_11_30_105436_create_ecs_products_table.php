<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEcsProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ecs_products', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('id_user')->unsigned();                 
            $table->integer('id_store')->unsigned();                    
            $table->integer('id_categories')->unsigned();
            $table->integer('id_storefront')->nullable();
            $table->string('title_product');
            $table->string('slug_product');
            $table->integer('basic_price');
            $table->integer('market_price');
            $table->integer('selling_price');
            $table->integer('weight')->nullable();
            $table->integer('length')->nullable();
            $table->integer('width')->nullable();
            $table->integer('height')->nullable();
            $table->longText('description')->nullable();                        
            $table->integer('id_measurement')->unsigned();
            $table->integer('status');
            $table->string('type_product')->nullable();
            $table->timestamp('is_ban')->nullable();
            $table->timestamps();
            $table->softDeletes();            
            $table->foreign('id_user')->references('id')->on('ecs_users')->onUpdate('cascade')->onDelete('cascade');;
            $table->foreign('id_store')->references('id')->on('ecs_stores')->onUpdate('cascade')->onDelete('cascade');;
            $table->foreign('id_categories')->references('id')->on('ecs_categories')->onUpdate('cascade')->onDelete('cascade');;
            $table->foreign('id_measurement')->references('id')->on('ecs_measurements')->onUpdate('cascade')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ecs_products');
    }
}
