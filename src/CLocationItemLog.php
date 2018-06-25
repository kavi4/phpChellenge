<?php
namespace App;
class CLocationItemLog extends LocationItemCommand{
    public function __construct($element)
    {
        parent::__construct($element);
    }
    public function execute()
    {
        echo " ".$this->element->position->getX()." ".$this->element->position->getY()." ".$this->element->position->getDisplace();
    }
}

?>