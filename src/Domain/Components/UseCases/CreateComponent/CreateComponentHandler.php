<?php
/**
 * Created by PhpStorm.
 * User: JorgePc
 * Date: 06/09/2018
 * Time: 19:34
 */

namespace App\Domain\Components\UseCases\CreateComponent;



use App\Domain\Components\Domain\Component\Components\ComponentsVO\ComponentId;
use App\Domain\Components\Domain\Component\Uuid;
use App\Domain\Components\Domain\Component\ComponenteValidator;
use App\Domain\Components\Domain\Component\Components\ArrayComponents;

class CreateComponentHandler
{

    private $anuncioCreator;

    public function __construct(ComponentCreator $componentCreator)

    {
        $this->componentCreator = $componentCreator;
    }

    public function handle(ComponentCommand $componentCommand)
    {
        
        $componentsList = new ArrayComponents();
        $anuncioId=$componentCommand->getAnuncioId();
        foreach($componentCommand->getAnuncioComponents() as $component){
            $componentsList->add($component);
        }
        
        
        
        foreach($componentsList as $component) {
            $this->componentCreator->__invoke(
                new ComponentId(),
                $anuncioId,
                $component
                );
        
        }

    }


}