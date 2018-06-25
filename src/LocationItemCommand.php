<?php
namespace App;
use PHPUnit\Runner\Exception;

abstract Class LocationItemCommand {
    protected $element;
    public function __construct( $element)
    {
        $this->element = $element;
    }

    abstract  function execute();
}
?>