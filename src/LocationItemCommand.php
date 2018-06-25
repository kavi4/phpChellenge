<?php
namespace App;
use PHPUnit\Runner\Exception;

abstract Class LocationItemCommand {
    protected $element;
    public function __construct( $element)
    {
        if(!is_subclass_of ($element,ILocationElement::class) ){throw new \Exception("element should implement ILocation Element!");}
        $this->element = $element;
    }

    abstract  function execute();
}
?>