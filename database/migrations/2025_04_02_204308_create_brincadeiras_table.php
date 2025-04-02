<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrincadeirasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brincadeiras', function (Blueprint $table) {
            $table->id();
            $table->string('categoria');
            $table->string('custo');
            $table->text('descricao');
            $table->string('dificuldade');
            $table->string('duracao');
            $table->string('faixa_etaria');
            $table->boolean('favorito')->default(false);
            $table->string('imagem');
            $table->json('materiais');
            $table->string('titulo');
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
        Schema::dropIfExists('brincadeiras');
    }
}