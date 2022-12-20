<?php

namespace App\Uteis;

class Formatador
{
    public static function cargaHoraria(int $carga): string
    {
        return $carga . " horas";
    }
}

