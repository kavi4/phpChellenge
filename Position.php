<?

/**
 * Class for manipulating position
 */

Class Position {
	private $x = 0;
	private $y = 0;
	private $direction = 0;

	public function getX(){return $this->x;}
	public function getY(){return $this->y;}
	public function getDirection(){return $this->direction;}

	public function setX($value){$this->x =  $value;}
	public function setY($value){$this->y =  $value;}

	public function setDirection($value){
		if($value > 3){$this->direction = 0;return true;}
		if($value < 0){$this->direction = 3;return true;}
		$this->direction = $value;
	}

	public function toRight(){

		$direction = $this->getDirection();
		$this->setDirection($direction - 1);
	}

	public function toLeft(){

		$direction = $this->getDirection();
		$this->setDirection($direction + 1);
	}

	public function move(){
		$angle = $this->getDirection() * 90;
		$this->setX($this->getX() + round(cos(deg2rad($angle)),0));
		$this->setY($this->getY() + round(sin(deg2rad($angle)),0));
	}

	function __construct($x,$y,$direction) {
       $this->setX($x);
       $this->setY($y);
       $this->setDirection($direction);
   	}
}
?>