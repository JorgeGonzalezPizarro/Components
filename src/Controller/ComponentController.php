<?php
/**
 * Created by PhpStorm.
 * User: JorgePc
 * Date: 06/09/2018
 * Time: 19:32
 */
    namespace api\controller;
namespace App\Controller;
use App\IO\Api\ApiController;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Routing\Route;

class ComponentController extends ApiController
{


    public function __invoke(\Symfony\Component\HttpFoundation\Request $request){

        
        $command = new ComponentCommand(
            $request->get('components'),
            $request->get('anuncio_id')
        );
        $this->handle($command);
    }



}