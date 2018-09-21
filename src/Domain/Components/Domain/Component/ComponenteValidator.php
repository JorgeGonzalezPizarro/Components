<?php
/**
 * Created by PhpStorm.
 * User: JorgePc
 * Date: 06/09/2018
 * Time: 19:53
 */


namespace App\Domain\Components\Domain\Component;


use App\Domain\Components\Domain\Component\Components\ComponentsVO\ComponentId;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\Finder\Finder;
use Throwable;

class ComponenteValidator
{

    public function __construct($component)
    {


    }
    

    public static function typeComponent($anuncioId,ComponentId $componentId,$component)
    {
        $type = $component['type'];
        $path = "Component";
        $class = $path . $type;
            return Component::createComponent($anuncioId,$componentId,$class, $component);
        
            
            
      
    }

}