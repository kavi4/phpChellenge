<?

/**
 * Class for manipulating with rover
 */

Class Rover {
	public  $position;
	private $signalParser;

	function __construct($position, $signalParser) {
       $this->signalParser = $signalParser;
       $this->position     = $this->signalParser->parsePosition($position);
   	}

   	public function go($string){
   		$commands = $this->signalParser->parseCommands($string,$this);

   		foreach ($commands as $key => $command) {
   			$command->rover = $this;
   			$command->execute();
   		}
   		return $this->sendResposeSignal();
   	}

   	private function sendResposeSignal()
   	{
   		return $this->signalParser->deParsePosition($this->position);
   	}

}


?>