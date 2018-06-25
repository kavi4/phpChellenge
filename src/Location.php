<?php
namespace App;

Class Location {
    protected $elements = [];

    public function __construct($elements)
    {
        if(!is_array($elements)){throw new \Exception("input value should be array!");}
        $this->elements = $elements;
    }

    public function add($element){
        if(!is_subclass_of ($element,ILocationElement::class) ){throw new \Exception("element should implement ILocation Element!");}
        array_push($this->elements,$element);
    }
}
?>