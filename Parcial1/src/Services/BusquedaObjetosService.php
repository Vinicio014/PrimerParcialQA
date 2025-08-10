<?php
namespace Src\Services;

use Src\Entities\Interfaces\ObjetoBibliotecaInterface;

class BusquedaObjetosService {
    /**
     * Busca por título en una lista de objetos
     */
    public function buscarPorTitulo(array $objetos, string $titulo): array {
        return array_filter($objetos, function(ObjetoBibliotecaInterface $objeto) use ($titulo) {
            return stripos($objeto->getTitulo(), $titulo) !== false;
        });
    }

    /**
     * Busca por autor en una lista de objetos
     */
    public function buscarPorAutor(array $objetos, string $autor): array {
        return array_filter($objetos, function(ObjetoBibliotecaInterface $objeto) use ($autor) {
            return stripos($objeto->getAutor(), $autor) !== false;
        });
    }
}
