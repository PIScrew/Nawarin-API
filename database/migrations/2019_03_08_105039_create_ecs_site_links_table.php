<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEcsSiteLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ecs_site_links', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('id_site')->unsigned();
            $table->text('img_profil')->nullable();
            $table->text('img_product')->nullable();
            $table->text('img_user')->nullable();
            $table->text('img_store')->nullable();
            $table->timestamps();
            $table->foreign('id_site')->references('id')->on('ecs_sites');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ecs_site_links');
    }
}
