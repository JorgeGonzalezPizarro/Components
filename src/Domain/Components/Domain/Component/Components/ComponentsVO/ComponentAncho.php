<?php
/**
 * Created by PhpStorm.
 * User: Jorge Gonzalez
 * Date: 06/09/2018
 * Time: 20:22
 */

namespace App\Domain\Components\Domain\Component\Components\ComponentsVO;


class ComponentAncho
{


    public function __construct($anuncioAncho)
    {
        $this->anuncioAncho = $this->setAnuncioAncho($anuncioAncho);


    }

    private function setAnuncioAncho($anuncioAncho)
    {

        $anuncioAncho = $this->guard($anuncioAncho);
        return $anuncioAncho;

    }

    private function guard($anuncioAncho)
    {

        if ( is_string($anuncioAncho) ) {
            $anuncioAncho = (int)$anuncioAncho;
        }

        if ( $anuncioAncho < 1 ) {
            /**TODO NEW EXCEPTIO **/

        }
        return $anuncioAncho;
    }
    public function __toString()
    {
        return (string)$this->anuncioAncho;
    }
    
}