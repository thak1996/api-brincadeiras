<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brincadeira extends Model
{
    protected $table = 'brincadeiras';

    protected $fillable = [
        'categoria',
        'custo',
        'descricao',
        'dificuldade',
        'duracao',
        'faixa_etaria',
        'favorito',
        'imagem',
        'materiais',
        'titulo',
    ];

    protected $casts = [
        'favorito' => 'boolean',
        'materiais' => 'array',
    ];

    public string $categoria;
    public string $custo;
    public string $descricao;
    public string $dificuldade;
    public string $duracao;
    public string $faixa_etaria;
    public bool $favorito;
    public int $id;
    public string $imagem;
    public array $materiais;
    public string $titulo;
}