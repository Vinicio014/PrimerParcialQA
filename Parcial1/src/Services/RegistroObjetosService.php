<?php
namespace Src\Services;

use Src\Entities\Interfaces\ObjetoBibliotecaInterface;

class RegistroObjetosService {
    private array $objetos = [];

    public function agregarObjeto(ObjetoBibliotecaInterface $objeto): void {
        $this->objetos[] = $objeto;
    }

    public function listarObjetos(): array {
        return $this->objetos;
    }
}
