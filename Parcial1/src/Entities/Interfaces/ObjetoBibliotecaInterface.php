<?php declare(strict_types=1);
namespace Src\Entities\Interfaces;

interface ObjetoBibliotecaInterface {
    public function Titulo(String $Titulo): string;
    public function Autor(String $Autor): string;

    public function getTitulo(): string;
    public function getAutor(): string;

    public function setTitulo(string $titulo): void;
    public function setAutor(string $autor): void;


}
