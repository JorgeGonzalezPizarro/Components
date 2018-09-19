<?php
/**
 * Created by PhpStorm.
 * User: JorgePc
 * Date: 06/09/2018
 * Time: 19:32
 */
    namespace api\controller;
namespace App\Controller;
use App\Domain\Anuncios\UseCases\CreateAnuncio\ComponentCommand;
use App\IO\Api\SunmediaController;

use App\Domain\Anuncios\UseCases\CreateAnuncio\CreateComponentHandler;
use App\Domain\Anuncios\UseCases\CreateAnuncio\AuncioCreateCommand;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Routing\Route;

class ComponentController extends SunmediaController
{


    public function __invoke(\Symfony\Component\HttpFoundation\Request $request){


        $command = new ComponentCommand($request);
        $this->handle($command);
    }



}