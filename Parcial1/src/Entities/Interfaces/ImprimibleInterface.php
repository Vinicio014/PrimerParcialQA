<?php declare(strict_types=1);
namespace Src\Entities\Interfaces;

interface ImprimibleInterface {
    public function imprimir(): string;

    public function getImpresion(): string;

    public function setImpresion(string $impresion): void;

}
