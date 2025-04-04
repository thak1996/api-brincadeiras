<?php

namespace App\Enums;

class DuracaoEnum
{
    public const VALORES = ['menos de 30 minutos', '30 a 60 minutos', 'mais de 60 minutos'];

    public static function valores(): array
    {
        return self::VALORES;
    }
}