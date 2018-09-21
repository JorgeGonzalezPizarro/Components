<?php
/**
 * Created by PhpStorm.
 * User: JorgePc
 * Date: 17/09/2018
 * Time: 17:37
 */

namespace App\Domain\Components\Domain;


interface EventSubscriber
{

    
    public function getEvents();
    
    public function handleEvents();

}