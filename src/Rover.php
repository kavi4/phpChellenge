<?php
namespace App;

Class Rover extends LocationElement {
    public $position;

    public function __construct($position)
    {
        parent::__construct($position);
    }
}
?>