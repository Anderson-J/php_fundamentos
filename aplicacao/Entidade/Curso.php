<?php

namespace App\Entidade;

class Curso
{
    private string $nome;

    private string $versaoFerramenta;

    private int $cargaHoraria;

    private bool $status;

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function getVersaoFerramenta(): string
    {
        return $this->versaoFerramenta;
    }

    public function setVersaoFerramenta(string $versaoFerramenta): void
    {
        $this->versaoFerramenta = $versaoFerramenta;
    }

    public function getCargaHoraria(): int
    {
        return $this->cargaHoraria;
    }

    public function setCargaHoraria(int $cargaHoraria): void
    {
        $this->cargaHoraria = $cargaHoraria;
    }

    public function getStatus(): bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): void
    {
        $this->status = $status;
    }
}