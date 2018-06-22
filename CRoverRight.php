<?
/**
 * Class rover command for turn position right
 */

Class CRoverRight extends RoverCommand{

	function __construct($rover) {
       parent::__construct($rover);
   	}

   	public function execute(){
   		$this->rover->position->toRight();
   	}
}
?>