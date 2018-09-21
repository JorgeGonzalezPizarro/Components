<?php
    /**
     * Created by PhpStorm.
     * User: JorgePc
     * Date: 06/09/2018
     * Time: 19:23
     */
    
    namespace App\Domain\Components\Domain\Component\Components;
    
    

    use App\Domain\Components\Domain\Component\Component;
    use Doctrine\Common\Collections\ArrayCollection;

    class ArrayComponents extends ArrayCollection
    {
        
     
     public function __construct(array $elements = [])
     {
         parent::__construct($elements);
     }
     
    public function addComponentIfExist($component){
         
         if($component instanceof Component){
         return  $this->add($component);
         }
         return;
         
         
    }
    
    }