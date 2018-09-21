<?php
    /**
     * Created by PhpStorm.
     * User: PTL-JGonzalez
     * Date: 20/09/2018
     * Time: 15:02
     */
    
    namespace App\IO\Events;
    
    
    use App\Domain\Components\Domain\Component\Components\ArrayComponents;

    class CommandConsummer
    {
        
        public function __construct(array $arrayComponents, string $anuncioId)
        {
           // $this->message=$message;
            
        }
    
        /**
         * @return mixed
         */
        public function getMessage()
        {
         
            return $this->message;
        }
    
    
    }