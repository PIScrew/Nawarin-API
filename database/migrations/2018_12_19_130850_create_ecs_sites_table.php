<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEcsSitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ecs_sites', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');            
            $table->string('title_site')->nullable();
            $table->longText('desc')->nullable();
            $table->longText('meta')->nullable();
            $table->text('logo')->nullable();
            $table->text('favicon')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ecs_sites');
    }
}
