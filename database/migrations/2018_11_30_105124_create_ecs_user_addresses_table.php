<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEcsUserAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ecs_user_addresses', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('id_user')->unsigned();
            $table->string('title_address')->nullable();
            $table->string('name');
            $table->string('phone');
            $table->integer('id_province');
            $table->string('province');
            $table->integer('id_city');
            $table->string('city');
            $table->integer('id_subdistrict');
            $table->string('subdistrict');
            $table->string('zip_code');
            $table->longText('complete_address');
            $table->integer('primary');
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
        Schema::dropIfExists('ecs_user_addresses');
    }
}
