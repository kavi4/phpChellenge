<?
require_once('./SignalParser.php');
require_once('./StringSignalParser.php');
require_once('./Position.php');
require_once('./Rover.php');
require_once('./RoverCommand.php');
require_once('./CRoverLeft.php');
require_once('./CRoverRight.php');
require_once('./CRoverMove.php');



$input = "5 5/
1 2 N/
LMLMLMLMM/
3 3 E/
MMRMMRMRRM";

$arr = explode('/',$input);
$rovers = [];

for($i=1;$i<count($arr);$i+=2){
	array_push($rovers,['position' => trim($arr[$i]),'commands'=>trim($arr[$i+1])]);
}

$parser = new StringSignalParser();

$rover1 = new Rover($rovers[0]['position'],$parser,1);

$rover2 = new Rover($rovers[1]['position'],$parser,2);

echo $rover1->go($rovers[0]['commands']);
echo "</br>";
echo $rover2->go($rovers[1]['commands']);
?> 




