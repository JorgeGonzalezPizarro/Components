<?php
/**
 * Created by PhpStorm.
 * User: PTL-JGonzalez
 * Date: 07/09/2018
 * Time: 9:16
 */


namespace App\Domain\Components\UseCases\CreateComponent;

use App\Domain\Components\Domain\Component\Components\ArrayComponents;
use Symfony\Component\HttpFoundation\ParameterBag;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Encoder\JsonEncode;

class ComponentCommand
{
    private $anuncioComponents;
    private $anuncioId;


    public function __construct(array $arrayComponents , ?string $anuncioId =NULL)
    {
        $this->anuncioComponents = $arrayComponents;
        $this->idAnuncio = $anuncioId;
        
    }

    /**
     * @return mixed
     */
    public function getAnuncioComponents()
    {
        return $this->anuncioComponents;
    }
    


    public function getAnuncioId()
    {
        return $this->idAnuncio;
    }



}