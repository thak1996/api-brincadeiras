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

    public const FAIXA_ETARIA = ['criança', 'adolescente', 'idosos'];
    public const DIFICULDADE = ['fácil', 'médio', 'difícil'];
    public const CATEGORIA = ['jogos cognitivos', 'atividades físicas', 'artes', 'atividades sociais', 'jogos de tabuleiro', 'jogos de cartas'];

    public string $categoria;
    public string $custo;
    public string $descricao;
    public string $dificuldade;
    public string $duracao;
    public string $faixa_etaria;
    public ?bool $favorito;
    public int $id;
    public ?string $imagem;
    public array $materiais;
    public string $titulo;
}