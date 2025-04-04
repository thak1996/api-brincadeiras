<?php

namespace App\Enums;

class FaixaEtariaEnum
{
    public const VALORES = ['crianças', 'adolescentes', 'idosos'];

    public static function valores(): array
    {
        return self::VALORES;
    }
}