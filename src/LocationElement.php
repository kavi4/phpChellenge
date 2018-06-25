<?php
namespace  App;
abstract class LocationElement implements ILocationElement {
    public $position;
    public function __construct($position)
    {
        $this->position = $position;
    }
}
?>