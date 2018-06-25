<?php
namespace App;

class InputParser{
    protected $commandGenerator;

    public function __construct($commandgenerator)
    {
        $this->commandGenerator = $commandgenerator;
    }

    public function parseCommands($string,$element){
        if(!is_subclass_of ($element,ILocationElement::class) ){throw new \Exception("element should implement ILocation Element!");}
        $commands = [];
        for($i=0;$i<strlen($string);$i++){
            $command = $this->commandGenerator->getCommand($string[$i],$element);
            if($command){ array_push($commands, $command);}

        }
       // array_push($commands,$this->commandGenerator->getCommand('G',$element));
        return $commands;
    }

    public function parseDisplacement($string){
        switch ($string){
            case "E" :{
                return 0;
            }
            case "N" : {
                return 90;
            }
            case "W" : {
                return 180;
            }
            case "S" : {
                return 270;
            }
        }
        throw new \Exception("This displace not exist!");
    }
}
?>