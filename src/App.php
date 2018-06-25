<?php
namespace App;

Class App {
    public function __construct($inputStr)
    {
        $inputParser = new InputParser(new LocationItemCommandGenerator());
        $input = explode(' ',$inputStr);
        $data = [];
        foreach ($input as $item) {
            array_push($data,trim($item));
        }

        $maxX = $data[0];
        $maxY = $data[1];
        var_dump($data);

        $roversArr = [];
        for($i=2;$i<count($data);$i+=4){
            $d = [];
            array_push($d,$data[$i]);
            array_push($d,$data[$i+1]);
            array_push($d,$data[$i+2]);
            array_push($d,$data[$i+3]);
            array_push($roversArr,$d);
        }

        $rovers = [];
        foreach ($roversArr as $item){
            echo "</br> set  ".$inputParser->parseDisplacement($item[2])."    </br>";
            $rover = new Rover(new Position($item[0],$item[1],0,$inputParser->parseDisplacement(intval($item[2])),$maxX,$maxY,0,0,0,0));
            echo "  get ".$rover->position->getDisplace()."</br>";
            array_push($rovers,$rover);
        }


        $location = new Location($rovers);
        $commands = [];

        for($i=0;$i<count($rovers);$i++){
            $commandsStr = $roversArr[$i][3];
            $commands = array_merge($commands,$inputParser->parseCommands($commandsStr,$rovers[$i]));
        }

        foreach ($commands as $command){
            $command->execute();
        };

    }
}

?>