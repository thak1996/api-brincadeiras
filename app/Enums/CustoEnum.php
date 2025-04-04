<?php

namespace App\Enums;

class CustoEnum
{
    public const VALORES = ['baixo', 'médio', 'alto'];

    public static function valores(): array
    {
        return self::VALORES;
    }
}