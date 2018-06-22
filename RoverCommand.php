<?
/**
 * Class for rover commands
 *
 */

abstract class RoverCommand{
	public $rover;

	function __construct($rover) {
       $this->rover = $rover;
   	}

   	public function execute(){
   		return false;
   	}
}
?>