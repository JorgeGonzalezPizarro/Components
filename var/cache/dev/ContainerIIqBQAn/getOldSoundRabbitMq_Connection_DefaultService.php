<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'old_sound_rabbit_mq.connection.default' shared service.

include_once $this->targetDirs[3].'\\vendor\\php-amqplib\\rabbitmq-bundle\\RabbitMq\\AMQPConnectionFactory.php';
include_once $this->targetDirs[3].'\\vendor\\php-amqplib\\php-amqplib\\PhpAmqpLib\\Channel\\AbstractChannel.php';
include_once $this->targetDirs[3].'\\vendor\\php-amqplib\\php-amqplib\\PhpAmqpLib\\Connection\\AbstractConnection.php';
include_once $this->targetDirs[3].'\\vendor\\php-amqplib\\php-amqplib\\PhpAmqpLib\\Connection\\AMQPStreamConnection.php';
include_once $this->targetDirs[3].'\\vendor\\php-amqplib\\php-amqplib\\PhpAmqpLib\\Connection\\AMQPConnection.php';

return $this->services['old_sound_rabbit_mq.connection.default'] = (new \OldSound\RabbitMqBundle\RabbitMq\AMQPConnectionFactory('PhpAmqpLib\\Connection\\AMQPConnection', array('host' => 'localhost:5672', 'user' => 'guest', 'password' => 'guest', 'vhost' => '/', 'connection_timeout' => 0, 'read_write_timeout' => 0, 'url' => '', 'port' => 5672, 'lazy' => false, 'use_socket' => false, 'ssl_context' => array(), 'keepalive' => false, 'heartbeat' => 0)))->createConnection();
