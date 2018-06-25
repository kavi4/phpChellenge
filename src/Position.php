<?php
namespace App;


use PHPUnit\Runner\Exception;
use Prophecy\Exception\InvalidArgumentException;

Class Position {
    protected $x;
    protected $y;
    protected $z;
    protected $maxX;
    protected $maxY;
    protected $minX;
    protected $minY;
    protected $maxZ;
    protected $minZ;
    protected $displace;

    public function getX(){return $this->x;}
    public function getY(){return $this->y;}
    public function getZ(){return $this->z;}

    public function getMinX(){return $this->minX;}
    public function getMinY(){return $this->minY;}
    public function getMinZ(){return $this->minZ;}

    public function getMaxX(){return $this->maxX;}
    public function getMaxY(){return $this->maxY;}
    public function getMaxZ(){return $this->maxZ;}

    public function getDisplace(){return $this->displace;}

    public function __construct($x=0, $y=0,$z=0,$displace = 0,$maxX=0,$maxY=0,$maxZ=0,$minX=0,$minY=0,$minZ=0)
    {
        $this->x = intval($x);
        $this->y = intval($y);
        $this->z = intval($z);
        $this->maxX = intval($maxX);
        $this->maxY = intval($maxY);
        $this->minX = intval($minX);
        $this->minY = intval($minY);
        $this->maxZ = intval($maxZ);
        $this->minZ = intval($minZ);
        $this->displace = intval($displace);
    }

    public function setMaxX($val){
        if(!is_numeric($val)){throw new InvalidArgumentException("Value should be numeric");}
        $this->maxX = $val;
    }

    public function setMaxY($val){
        if(!is_numeric($val)){throw new InvalidArgumentException("Value should be numeric");}
        $this->maxY = $val;
    }

    public function setMaxZ($val){
        if(!is_numeric($val)){throw new InvalidArgumentException("Value should be numeric");}
        $this->maxZ = $val;
    }

    public function setMinX($val){
        if(!is_numeric($val)){throw new InvalidArgumentException("Value should be numeric");}
        $this->minX = $val;
    }

    public function setMinY($val){
        if(!is_numeric($val)){throw new InvalidArgumentException("Value should be numeric");}
        $this->minY = $val;
    }

    public function setMinZ($val){
        if(!is_numeric($val)){throw new InvalidArgumentException("Value should be numeric");}
        $this->minZ = $val;
    }


    public function setX($val){
        if(!is_numeric($val)){throw new InvalidArgumentException("Value should be numeric");}
        if($val<=$this->maxX && $val>=$this->minX){
            $this->x = $val;
        }else{
            return false;
        }
    }

    public function setY($val){
        if(!is_numeric($val)){throw new InvalidArgumentException("Value should be numeric");}
        if($val<=$this->maxY && $val>=$this->minY){
            $this->y = $val;
        }else{
            return false;
        }
    }

    public function setZ($val){
        if(!is_numeric($val)){throw new InvalidArgumentException("Value should be numeric");}
        if($val<=$this->maxZ && $val>=$this->minZ){
            $this->z = $val;
        }else{
            return false;
        }
    }

    public function setDisplace($val){
        if(!is_numeric($val)){throw new InvalidArgumentException("Value should be numeric");}
        $this->displace = $val;
    }
}

?>