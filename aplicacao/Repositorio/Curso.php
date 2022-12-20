<?php

namespace App\Repositorio;

use App\Entidade\Curso as CursoEntidade;

class Curso
{
    public function todos(): array
    {
        $php = new CursoEntidade;
        $php->setNome("Curso de PHP fundamentos");
        $php->setVersaoFerramenta("7.4");
        $php->setCargaHoraria(40);
        $php->setStatus(true);

        $java = new CursoEntidade;
        $java->setNome("Curso de Java fundamentos");
        $java->setVersaoFerramenta("11.4");
        $java->setCargaHoraria(30);
        $java->setStatus(true);

        $cSharp = new CursoEntidade;
        $cSharp->setNome("Curso de C# fundamentos");
        $cSharp->setVersaoFerramenta("5");
        $cSharp->setCargaHoraria(60);
        $cSharp->setStatus(false);

        $js = new CursoEntidade;
        $js->setNome("Curso de Javascript fundamentos");
        $js->setVersaoFerramenta("16.4");
        $js->setCargaHoraria(30);
        $js->setStatus(true);

        return [
            "php" =>  $php,
            "java" => $java,
            "c#" => $cSharp,
            "javascript" => $js
        ];
    }
}