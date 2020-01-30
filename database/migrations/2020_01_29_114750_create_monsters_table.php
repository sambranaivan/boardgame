<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonstersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monsters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('num');
            $table->string('species');
            // $table->integer('baseHp');
            // $table->integer('baseAtk');
            // $table->integer('baseDef');
            // $table->integer('baseSpeed');
            // $table->integer('baseActionSpeed');
            // $table->string('type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('monsters');
    }
}
