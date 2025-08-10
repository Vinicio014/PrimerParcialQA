<?php
namespace Src\Entities;

use Src\Entities\Interfaces\ObjetoBibliotecaInterface;

class ObjetoBibliotecaBaseEntity implements ObjetoBibliotecaInterface {
    private string $Libro;
    private string $Autor;
    protected string $Editorial;
    

    public function libro(): String {
        return $this->Libro;
    }

    public function setAutor(String $Autor):void{
        $this-Autor = $Autor;
    }

    public function getAutor(): String {
        return $this->Autor;
    }

    public function setEditorial(String $Editorial):void{
        $this->Editorial = $Editorial;
    }

    public function getEditorial(): String {
        return $this->Editorial;
    }

}
//añadir dos servicio y dos repositorio para manejar los objetos de biblioteca