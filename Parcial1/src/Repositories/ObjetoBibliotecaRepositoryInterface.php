<?php
namespace Src\Repositories;

use Src\Entities\Interfaces\ObjetoBibliotecaInterface;

interface ObjetoBibliotecaRepositoryInterface
{
    public function save(ObjetoBibliotecaInterface $objeto): void;

    
    @return ObjetoBibliotecaInterface[]
     
    public function findAll(): array;

    public function findByTitulo(string $titulo): ?ObjetoBibliotecaInterface;
}
