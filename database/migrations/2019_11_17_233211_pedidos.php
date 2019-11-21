<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pedidos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('numero_mesa', 255);
            $table->string('nome_cliente', 255);
            $table->string('comidas', 500);
            $table->string('bebidas', 500);
            $table->longText('observacoes')->nullable();
            $table->string('status', 255);
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
        Schema::dropIfExists('pedidos');
    }
}
