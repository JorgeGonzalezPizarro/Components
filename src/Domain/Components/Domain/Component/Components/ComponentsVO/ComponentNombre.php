<?php
/**
 * Created by PhpStorm.
 * User: Jorge Gonzalez
 * Date: 06/09/2018
 * Time: 20:22
 */
    
    namespace App\Domain\Components\Domain\Component\Components\ComponentsVO;


class ComponentNombre
{
    private $anuncioNombre;

    public function __construct($nombre)
    {
        $this->setAnuncioNombre($nombre);

    }


    private function setAnuncioNombre($nombre)
    {
        if ( strlen($nombre) <= 140 ) {
            return $this->anuncioNombre = $nombre;
        }
        /**TODO GENERATE EXCEPTION*/


    }
public function __toString()
{
    return (string)$this->anuncioNombre;
}
}