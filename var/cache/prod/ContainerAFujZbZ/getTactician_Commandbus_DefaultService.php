<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'tactician.commandbus.default' shared service.

include_once $this->targetDirs[3].'\\vendor\\league\\tactician\\src\\Handler\\CommandNameExtractor\\CommandNameExtractor.php';
include_once $this->targetDirs[3].'\\vendor\\league\\tactician\\src\\Handler\\CommandNameExtractor\\ClassNameExtractor.php';
include_once $this->targetDirs[3].'\\vendor\\league\\tactician\\src\\Handler\\Locator\\HandlerLocator.php';
include_once $this->targetDirs[3].'\\vendor\\league\\tactician-container\\src\\ContainerLocator.php';
include_once $this->targetDirs[3].'\\vendor\\league\\tactician\\src\\Handler\\MethodNameInflector\\MethodNameInflector.php';
include_once $this->targetDirs[3].'\\vendor\\league\\tactician\\src\\Handler\\MethodNameInflector\\HandleInflector.php';
include_once $this->targetDirs[3].'\\vendor\\league\\tactician\\src\\Middleware.php';
include_once $this->targetDirs[3].'\\vendor\\league\\tactician\\src\\Handler\\CommandHandlerMiddleware.php';
include_once $this->targetDirs[3].'\\vendor\\league\\tactician\\src\\CommandBus.php';

return $this->services['tactician.commandbus.default'] = new \League\Tactician\CommandBus(array(0 => new \League\Tactician\Handler\CommandHandlerMiddleware(new \League\Tactician\Handler\CommandNameExtractor\ClassNameExtractor(), new \League\Tactician\Container\ContainerLocator(new \Symfony\Component\DependencyInjection\ServiceLocator(array('App\\Domain\\Components\\UseCases\\CreateComponent\\CreateComponentHandler' => function () {
    return ($this->privates['App\Domain\Components\UseCases\CreateComponent\CreateComponentHandler'] ?? $this->load('getCreateComponentHandlerService.php'));
}, 'event_domain.consumer' => function () {
    return ($this->privates['event_domain.consumer'] ?? $this->load('getEventDomain_ConsumerService.php'));
})), array('App\\Domain\\Components\\UseCases\\CreateComponent\\ComponentCommand' => 'App\\Domain\\Components\\UseCases\\CreateComponent\\CreateComponentHandler', 'PhpAmqpLib\\Message\\AMQPMessage' => 'event_domain.consumer', 'OldSound\\RabbitMqBundle\\RabbitMq\\Consumer' => 'event_domain.consumer', 'App\\IO\\Events\\CommandConsummer' => 'event_domain.consumer')), new \League\Tactician\Handler\MethodNameInflector\HandleInflector())));
