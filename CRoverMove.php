<?
/**
 * Class rover command for move position in this direction
 */

Class CRoverMove extends RoverCommand{

	function __construct($rover) {
       parent::__construct($rover);
   	}

   	public function execute(){
   		$this->rover->position->move();
   	}
}
?>