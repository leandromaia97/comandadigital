<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Garcom extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('garcom', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('id_garcom', 255);
            $table->string('nome', 255);
            $table->string('cpf', 20);
            $table->string('rg', 20);
            $table->string('status', 45)->nullable();
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
        Schema::dropIfExists('garcom');
    }
}