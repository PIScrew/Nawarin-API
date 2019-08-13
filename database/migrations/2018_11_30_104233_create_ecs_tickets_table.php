<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEcsTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ecs_tickets', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->Integer('id_user')->unsigned();
            $table->Integer('id_ticket_types')->unsigned();
            $table->string('invoice')->nullable();
            $table->string('titlee');
            $table->string('description');
            $table->timestamps();
            $table->softDeletes();            
            $table->foreign('id_user')->references('id')->on('ecs_users');
            $table->foreign('id_ticket_types')->references('id')->on('ecs_ticket_types')->onUpdate('cascade')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ecs_tickets');
    }
}
