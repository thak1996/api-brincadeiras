<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\CategoriaEnum;
use App\Enums\CustoEnum;
use App\Enums\DificuldadeEnum;
use App\Enums\DuracaoEnum;
use App\Enums\FaixaEtariaEnum;

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
            $table->enum('categoria', CategoriaEnum::valores());
            $table->enum('custo', CustoEnum::valores());
            $table->text('descricao');
            $table->enum('dificuldade', DificuldadeEnum::valores());
            $table->enum('duracao', DuracaoEnum::valores());
            $table->enum('faixa_etaria', FaixaEtariaEnum::valores());
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