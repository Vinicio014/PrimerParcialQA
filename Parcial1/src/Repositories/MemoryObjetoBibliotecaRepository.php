<?php
namespace Src\Repositories;

use Src\Entities\Interfaces\ObjetoBibliotecaInterface;

class InMemoryObjetoBibliotecaRepository implements ObjetoBibliotecaRepositoryInterface
{
    private array $objetos = [];

    public function save(ObjetoBibliotecaInterface $objeto): void
    {
        $this->objetos[] = $objeto;
    }

    public function findAll(): array
    {
        return $this->objetos;
    }

    public function findByTitulo(string $titulo): ?ObjetoBibliotecaInterface
    {
        foreach ($this->objetos as $obj) {
            if (strcasecmp($obj->getTitulo(), $titulo) === 0) {
                return $obj;
            }
        }
        return null;
    }
}
