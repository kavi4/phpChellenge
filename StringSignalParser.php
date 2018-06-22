<?

/**
 * Interface for parse commands in string format
 */

Class StringSignalParser implements ISignalParser{

	private $directions = ['E','N','W','S'];

	public function parsePosition($strPosition){
		$split = explode(' ',$strPosition);
		return new Position($split[0],$split[1],array_search($split[2],$this->directions));
	}

	public function parseCommands($string,$rover){

		$commandList = ['R'=> new CRoverRight($rover), 'L'=> new CRoverLeft($rover), 'M'=> new CroverMove($rover)];
		$commands    = [];

		for($i=0; $i<strlen($string); $i++){
			array_push($commands,$commandList[$string[$i]]);
		}

		return $commands;
	}

	public function deParsePosition($position){
		return $position->getX()." ".$position->getY()." ".$this->directions[$position->getDirection()];
	}

}
?>