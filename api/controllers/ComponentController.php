<?php
/**
 * Created by PhpStorm.
 * User: JorgePc
 * Date: 06/09/2018
 * Time: 19:32
 */
    namespace api\controller;

use App\Domain\Anuncios\UseCases\CreateAnuncio\ComponentCreator;
use App\Domain\Anuncios\UseCases\CreateAnuncio\CreateComponentHandler;
use App\Domain\Anuncios\UseCases\CreateAnuncio\AuncioCreateCommand;
use Symfony\Component\HttpFoundation\Request;


class ComponentController
{
    
    

    public function __construct(Request $request)
    {
        $this->request=$request;
        $this->postAnuncio($request);
    }

    public function __invoke($request){

        $anuncioHandler = new CreateComponentHandler();
        
        $anuncioHandler->invoke(new ComponentCreator($request));


    }


}