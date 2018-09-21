<?php
    /**
     * Created by PhpStorm.
     * User: PTL-JGonzalez
     * Date: 18/09/2018
     * Time: 11:03
     */
    
    namespace App\IO\Events;
    
    
    use App\Domain\Components\Domain\EventSubscriber;
    use App\Domain\Components\UseCases\CreateComponent\ComponentCommand;
    use PhpAmqpLib\Connection\AMQPStreamConnection;
    use PhpAmqpLib\Message\AMQPMessage;

    class ExampleConsumerRabbitImplementation extends Consumer implements EventSubscriber
    {
    
        private $connection;
        private $channel;
        
    
        public function handleEvents()
        {
    
        }
    
        public function getEvents(): void
        {
        
        
        
        }
        public function handle(CommandConsummer $command): void
        {
            
            $body = json_decode($command->getMessage(), true);
            
            $this->commandBus->handle(new ComponentCommand(
                $body
            ));
            
        
        }

    }
    
   