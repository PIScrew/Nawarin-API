<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEcsUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ecs_users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('username');
            $table->string('fullname');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('phone')->nullable();
            $table->longText('img_path');
            $table->integer('is_ban')->default(0);
            $table->integer('id_role')->unsigned();
            $table->integer('active')->default(0);
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('id_role')->references('id')->on('ecs_user_roles')->onUpdate('cascade')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ecs_users');
    }
}
