<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEcsStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ecs_stores', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('id_user')->unsigned();
            $table->string('name_store');
            $table->text('img_path')->nullable();
            $table->longText('img_banner')->nullable();
            $table->string('slug_store')->nullable();
            $table->longText('desc')->nullable();
            $table->longText('courier')->nullable();
            $table->timestamp('last_login')->nullable();
            $table->integer('is_login')->default(0);
            // $table->timestamp('is_ban')->default(0);
            $table->integer('integration')->default(0);
            $table->integer('reseller')->default(0);
            $table->integer('status')->default(0);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('id_user')->references('id')->on('ecs_users')->onUpdate('cascade')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ecs_stores');
    }
}
