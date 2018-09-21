<?php
    /**
     * Created by PhpStorm.
     * User: PTL-JGonzalez
     * Date: 12/09/2018
     * Time: 8:38
     */
    
    namespace App\Domain\Components\Domain\Component\Components\ComponentsVO;
    
    

    class ComponentId
    {
    
        private $componentId;
        public function __construct()
        {
          $this->componentId=  $this->generateUUid();
        
        
        }
    
       public static function generateUUid(){
       
            return \App\IO\UuidGenerator\UUid::generateUuid();
       }
    
        public  function uuidToString(){
        
            return $this->componentId->toString();
        }

        public function __toString()
        {
            return (string)$this->uuidToString();
        }
    
    }