<?php

namespace App\Enums;

class DificuldadeEnum
{
    public const VALORES = ['fácil', 'médio', 'difícil'];

    public static function valores(): array
    {
        return self::VALORES;
    }
}