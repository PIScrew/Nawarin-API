<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEcsStoreNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ecs_store_notes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('id_store')->unsigned();
            $table->string('title_note');
            $table->string('slug_note');
            $table->longText('description')->nullable();
            $table->integer('status')->default(0);
            $table->integer('created_by')->unsigned();
            $table->integer('updated_by')->unsigned();
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('id_store')->references('id')->on('ecs_stores');
            $table->foreign('created_by')->references('id')->on('ecs_users');
            $table->foreign('updated_by')->references('id')->on('ecs_users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ecs_store_notes');
    }
}
