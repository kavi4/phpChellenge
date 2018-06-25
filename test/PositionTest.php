<?php
namespace  Test;
use App\Position;
use PHPUnit;
use Prophecy\Exception\InvalidArgumentException;

class PositionTest extends PHPUnit\Framework\TestCase {

    public function testSetter(){

        $pos = new Position();
        $pos->setMinX(1);
        $pos->setMinY(1);
        $pos->setMinZ(1);
        $pos->setMaxX(20);
        $pos->setMaxY(20);
        $pos->setMaxZ(20);

        $pos->setX(15);
        $pos->setY(15);
        $pos->setZ(15);
        $pos->setDisplace(100);

        $this->assertEquals($pos->getX(),15);
        $this->assertEquals($pos->getY(),15);
        $this->assertEquals($pos->getZ(),15);
        $this->assertEquals($pos->getDisplace(),100);
        $this->assertEquals($pos->getMinX(),1);
        $this->assertEquals($pos->getMinY(),1);
        $this->assertEquals($pos->getMinZ(),1);
        $this->assertEquals($pos->getMaxX(),20);
        $this->assertEquals($pos->getMaxY(),20);
        $this->assertEquals($pos->getMaxZ(),20);

    }

    public function testException(){
        $pos = new Position();
        $this->expectException(InvalidArgumentException::class);

        $pos->setX("werg");

    }

}
?>