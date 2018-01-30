<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_log', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('room_id')->references('id')->on('room');
            $table->string('action', 50);
            $table->integer('user_id_1')->references('id')->on('users');
            $table->integer('user_id_2')->references('id')->on('users');
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
        Schema::dropIfExists('room_log');
    }
}
