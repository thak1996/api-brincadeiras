<?php

namespace App\Enums;

class CategoriaEnum
{
    public const VALORES = [
        'jogos cognitivos',
        'atividades físicas',
        'artes',
        'atividades sociais',
        'jogos de tabuleiro',
        'jogos de cartas',
        'desafios',
        'atividades digitais',
        'jogos interativos',
        'desafios digitais'
    ];

    public static function valores(): array
    {
        return self::VALORES;
    }
}