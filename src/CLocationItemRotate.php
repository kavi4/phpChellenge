<?php
namespace App;

class CLocationItemRotate extends LocationItemCommand {
    protected $angle;
    public function __construct($element,$angle)
    {
        parent::__construct($element);
        $this->angle = $angle;
    }

    function execute()
    {
        $this->element->position->setDisplace($this->element->position->getDisplace() + $this->angle);
    }
}

?>


