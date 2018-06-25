<?php
namespace App;

use phpDocumentor\Reflection\Types\Integer;
use PHPUnit\Exception;

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
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
        $this->maxX = $maxX ;
        $this->maxY = $maxY ;
        $this->minX = $minX ;
        $this->minY = $minY ;
        $this->maxZ = $maxZ ;
        $this->minZ = $minZ ;
        $this->displace = $displace;
    }

    public function setMaxX($val){
    $this->maxX = $val;
    }

    public function setMaxY($val){
        $this->maxY = $val;
    }

    public function setMaxZ($val){
        $this->maxZ = $val;
    }

    public function setMinX($val){
        $this->minX = $val;
    }

    public function setMinY($val){
        $this->minY = $val;
    }

    public function setMinZ($val){
        $this->minZ = $val;
    }


    public function setX($val){
        if($val<=$this->maxX && $val>=$this->minX){
            $this->x = $val;
        }else{
            return false;
        }
    }

    public function setY($val){
        if($val<=$this->maxY && $val>=$this->minY){
            $this->y = $val;
        }else{
            return false;
        }
    }

    public function setZ($val){
        if($val<=$this->maxZ && $val>=$this->minZ){
            $this->z = $val;
        }else{
            return false;
        }
    }

    public function setDisplace($val){
        $this->displace = $val;
    }
}

?>