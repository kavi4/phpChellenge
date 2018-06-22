<?

/**
 * Class rover command for turn position left
 */

Class CRoverLeft extends RoverCommand{

	function __construct($rover) {
       parent::__construct($rover);
   	}

   	public function execute(){
   		$this->rover->position->toLeft();
   	}
}
?>