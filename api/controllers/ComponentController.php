<?php
/**
 * Created by PhpStorm.
 * User: JorgePc
 * Date: 06/09/2018
 * Time: 19:32
 */
    namespace api\controller;

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