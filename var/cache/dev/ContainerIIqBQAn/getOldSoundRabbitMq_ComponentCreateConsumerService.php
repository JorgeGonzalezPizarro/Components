<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'old_sound_rabbit_mq.component_create_consumer' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\event-dispatcher\\Event.php';
include_once $this->targetDirs[3].'\\vendor\\php-amqplib\\rabbitmq-bundle\\Event\\AMQPEvent.php';
include_once $this->targetDirs[3].'\\src\\IO\\Events\\Consumer.php';
include_once $this->targetDirs[3].'\\vendor\\php-amqplib\\rabbitmq-bundle\\RabbitMq\\BaseAmqp.php';
include_once $this->targetDirs[3].'\\vendor\\php-amqplib\\rabbitmq-bundle\\RabbitMq\\DequeuerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\php-amqplib\\rabbitmq-bundle\\RabbitMq\\BaseConsumer.php';
include_once $this->targetDirs[3].'\\vendor\\php-amqplib\\rabbitmq-bundle\\RabbitMq\\Consumer.php';

$this->services['old_sound_rabbit_mq.component_create_consumer'] = $instance = new \OldSound\RabbitMqBundle\RabbitMq\Consumer(($this->services['old_sound_rabbit_mq.connection.default'] ?? $this->load('getOldSoundRabbitMq_Connection_DefaultService.php')));

$instance->setExchangeOptions(array('name' => 'exchangeCreateAnuncio', 'type' => 'topic', 'passive' => false, 'durable' => true, 'auto_delete' => false, 'internal' => false, 'nowait' => false, 'declare' => true, 'arguments' => NULL, 'ticket' => NULL));
$instance->setQueueOptions(array('name' => 'components.component.create_component_on_anuncio_created', 'routing_keys' => array(0 => 'example.anuncios.1.event.anuncio.#'), 'arguments' => array('x-dead-letter-exchange' => array(0 => 'S', 1 => 'message_create_dead_letter_ex'), 'x-dead-letter-routing-key' => array(0 => 'S', 1 => 'message_create_dead_letter_qu')), 'passive' => false, 'durable' => true, 'exclusive' => false, 'auto_delete' => false, 'nowait' => false, 'declare' => true, 'ticket' => NULL));
$instance->setCallback(array(0 => new \App\IO\Events\Consumer(($this->services['tactician.commandbus.default'] ?? $this->load('getTactician_Commandbus_DefaultService.php')), ''), 1 => 'execute'));
if ($this->has('event_dispatcher')) {
    $instance->setEventDispatcher(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
}

return $instance;