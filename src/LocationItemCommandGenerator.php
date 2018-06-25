<?php
namespace App;

 use PHPUnit\Runner\Exception;

 Class LocationItemCommandGenerator implements ICommandGenerator {

    public function getCommand($string,$element){
        switch ($string){
            case 'M':{
                return new CLocationItemMove($element);
            }
            case 'R':{
                return new CLocationItemRotate($element,-90);
            }
            case 'L':{
                return new CLocationItemRotate($element,90);
            }
            case 'G':{
                return new CLocationItemLog($element);
            }
        }
        throw new Exception("this command does not exist!");
    }
}

?>