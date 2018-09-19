<?php
/**
 * Created by PhpStorm.
 * User: JorgePc
 * Date: 06/09/2018
 * Time: 19:37
 */


namespace App\Domain\Components\UseCases\CreateComponent;


use App\Domain\Anuncios\Domain\Component\ComponentRepository;
use App\IO\Events\EventPublisher;
use App\Domain\Anuncios\Domain\IState;
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
        AnuncioId $id,
        $anuncioState,
        ArrayCollection $components)
    {
        $anuncio = Anuncio::createAnuncio(
            $id,
            $anuncioState,
            $components
        );
        $this->anuncioRepository->store($anuncio);
        $this->eventPublisher->publish($anuncio->getDomainEvents());

        //$components = $anuncio->getAssocietComponents();
        //foreach ($components as $component) {
         //   $this->componentsRepository->store($component);
       // }
        
       // $this->componentsRepository->finishStoreAnuncio();


    }

}