<?php
/**
 * Created by PhpStorm.
 * User: PTL-JGonzalez
 * Date: 07/09/2018
 * Time: 9:16
 */


namespace App\Domain\Components\UseCases\CreateComponent;

use Symfony\Component\HttpFoundation\ParameterBag;

class ComponentCommand
{
    private $anuncioComponents;
    private $anuncioState;


    public function __construct(\Symfony\Component\HttpFoundation\Request $request)
    {
        $this->request = $request;
        $this->anuncioComponents = $request->get('components');
        $this->anuncioState = $request->get('state');
    }

    /**
     * @return mixed
     */
    public function getAnuncioComponents()
    {
        return $this->anuncioComponents;
    }

    public function getAnuncioState()
    {
        return $this->anuncioState;
    }



    public function getId()
    {
        return $this->id;
    }

    public function getRequest(): Request
    {
        return $this->request;
    }


}