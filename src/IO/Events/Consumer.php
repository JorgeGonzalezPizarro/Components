<?php
    /**
     * Created by PhpStorm.
     * User: PTL-JGonzalez
     * Date: 20/09/2018
     * Time: 13:42
     */
    
    namespace App\IO\Events;
    
    
    use App\Domain\Components\UseCases\CreateComponent\ComponentCommand;
    use function json_decode;
    use function json_encode;
    use League\Tactician\CommandBus;
    use OldSound\RabbitMqBundle\Event\AMQPEvent;
    use PhpAmqpLib\Message\AMQPMessage;
    use Symfony\Component\HttpFoundation\Request;

    class Consumer extends AMQPEvent
    {
        
    
        public function __construct(CommandBus $commandBus, ?string $message =null)
        {
            
            $this->commandBus=$commandBus;
            $this->message=json_decode($message,true);
        }
        
        
        public function execute(AMQPMessage $message)
        {
            $this->message=json_decode($message->getBody(),true);
            
            $this->commandBus->handle(new ComponentCommand($this->message['data']['components'],$this->guard($this->message,'agregate_id')));
        }
    
    
        private function guard($message,string $index){
        
            if(isset($message[$index])) return ($message[$index]);
            return null;
            
        }
     }
    