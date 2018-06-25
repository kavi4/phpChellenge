<?php
namespace App;

class CLocationItemMove extends LocationItemCommand {
    public function __construct( $element)
    {
        parent::__construct($element);
    }

    function execute()
    {
        $this->element->position->setX($this->element->position->getX() + round(cos(deg2rad($this->element->position->getDisplace())),0));
        $this->element->position->setY($this->element->position->getY() + round(sin(deg2rad($this->element->position->getDisplace())),0));
    }
}

?>


