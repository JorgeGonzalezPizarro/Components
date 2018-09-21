<?php
    /**
     * Created by PhpStorm.
     * User: JorgePc
     * Date: 06/09/2018
     * Time: 19:23
     */
    
    namespace App\Domain\Components\Exception;
    
    

    use App\Domain\Components\Domain\Component\Component;
    use Doctrine\Common\Collections\ArrayCollection;
    use DomainException;

    class ArrayException extends ArrayCollection
    {
        
     
     public function __construct(array $elements = [])
     {
         parent::__construct($elements);
     }
     
    public static function addException($exception ){
         
         if($exception instanceof MyException){
         return  parent::add($exception);
         }
         return;
         
         
    }
    
    public static function getExceptions(){
         
         return parent::toArray();
         
    }
    
    }