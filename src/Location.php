<?php
namespace App;

Class Location {
    protected $elements = [];

    public function __construct(&$elements)
    {
        $this->elements = $elements;
    }

    public function add($element){
        array_push($this->elements,$element);
    }
}
?>