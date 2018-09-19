<?php
/**
 * Created by PhpStorm.
 * User: JorgePc
 * Date: 06/09/2018
 * Time: 19:34
 */

namespace App\Domain\Components\UseCases\CreateComponent;



use App\Domain\Components\Domain\Component\Uuid;
use App\Domain\Components\Domain\Component\ComponenteValidator;
use App\Domain\Components\Domain\Component\Components\ArrayComponents;

class CreateComponentHandler
{

    private $anuncioCreator;

    public function __construct(ComponentCreator $anuncioCreator)

    {
        $this->anuncioCreator = $anuncioCreator;
    }

    public function handle(ComponentCommand $anuncioCommand)
    {
        
        $componentsList = new ArrayComponents();
        $anuncioId= new AnuncioId();
        foreach($anuncioCommand->getAnuncioComponents() as $component){
            $componentsList->add($component);
        }
        
        
        
        $state = StateValidator::fromRequest($anuncioCommand->getAnuncioState());
        $this->anuncioCreator->__invoke(
            $anuncioId,
            $state,
            $componentsList);


    }


}