<?php
namespace PhpAmqpLib\Connection;

/**
 * Class AMQPConnection
 *
 * Kept for BC
 *
 * @deprecated
 */
class AMQPConnection extends AMQPStreamConnection
{
    public function __construct(
        string $host,
        string $port,
        string $user,
        string $password,
        string $vhost = '/',
        bool $insist = false,
        string $login_method = 'AMQPLAIN',
        $login_response = NULL,
        string $locale = 'en_US',
        float $connection_timeout = 3.0,
        float $read_write_timeout = 3.0,
        $context = NULL,
        bool $keepalive = false,
        int $heartbeat = 0
    ) {
        parent::__construct($host, $port, $user, $password, $vhost, $insist, $login_method, $login_response, $locale,
            $connection_timeout, $read_write_timeout, $context, $keepalive, $heartbeat);
    }
}
