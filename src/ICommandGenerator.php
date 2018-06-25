<?php
namespace App;

interface ICommandGenerator{
    public function getCommand($string,$element);
}

?>