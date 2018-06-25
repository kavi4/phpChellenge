<?php
namespace Test;

use App\CLocationItemRotate;
use App\CLocationItemMove;
use App\CLocationItemLog;
use App\InputParser;
use App\LocationItemCommandGenerator;
use App\Position;
use App\Rover;
use PHPUnit;


class InputParserTest extends PHPUnit\Framework\TestCase
{
    /**
     * @dataProvider displacementProvider
     */
    public function testParseDisplacement($value,$expected){
        $parser = new InputParser(new LocationItemCommandGenerator());
        $this->assertEquals($expected,$parser->parseDisplacement($value));
    }

    public function testParseCommands(){
        $parser = new InputParser(new LocationItemCommandGenerator());
        $commands = $parser->parseCommands("LRMG",new Rover(new Position()));
        $this->assertInstanceOf(CLocationItemRotate::class,$commands[0]);
        $this->assertInstanceOf(CLocationItemRotate::class,$commands[1]);
        $this->assertInstanceOf(CLocationItemMove::class,$commands[2]);
        $this->assertInstanceOf(CLocationItemLog::class,$commands[3]);
    }

    public function displacementProvider(){
        return [
            ['N',90],
            ['E',0],
            ['W',180],
            ['S',270],
        ];
    }
}

?>