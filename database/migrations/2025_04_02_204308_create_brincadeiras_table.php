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
            $table->enum('categoria', ['jogos cognitivos', 'atividades físicas', 'artes', 'atividades sociais', 'jogos de tabuleiro', 'jogos de cartas']);
            $table->string('custo');
            $table->text('descricao');
            $table->enum('dificuldade', ['fácil', 'médio', 'difícil']);
            $table->string('duracao');
            $table->enum('faixa_etaria', ['crianças', 'adolescente', 'idosos']);
            $table->boolean('favorito')->nullable()->default(false);
            $table->string('imagem')->nullable();
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