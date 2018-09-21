<?php
/**
 * Created by PhpStorm.
 * User: JorgePc
 * Date: 06/09/2018
 * Time: 19:37
 */


namespace App\Domain\Components\UseCases\CreateComponent;


use App\Domain\Components\Domain\Component\ComponenteValidator;
use App\Domain\Components\Domain\Component\Components\ComponentsVO\ComponentId;
use App\IO\Events\EventPublisher;
use Doctrine\Common\Collections\ArrayCollection;

class ComponentCreator
{

    public function __construct(\App\Domain\Components\Domain\Component\ComponentRepository $anuncioRepository ,
                                \App\Domain\Components\Domain\Component\ComponentRepository $componentsRepository,
                                \App\Domain\Components\Domain\EventPublisher $eventPublisher)
    {
        $this->anuncioRepository = $anuncioRepository;
        $this->componentsRepository = $componentsRepository;
        $this->eventPublisher= $eventPublisher;
    }

    public function __invoke(
        ComponentId $id,
        $anuncioId,
        array $components)
    {
        
        $component = ComponenteValidator::typeComponent(
            $anuncioId,$id,
            $components
        );
        $this->componentsRepository->store($component);
        //$this->anuncioRepository->store($anuncio);
        //$this->eventPublisher->publish($anuncio->getDomainEvents());

        


    }

}