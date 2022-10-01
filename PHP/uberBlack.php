<?php
require_once('car.php');
class UberX extends Car {
    public $brand;
    public $model;

    public function __construct($license, $driver, $typeCarAccepted, $seatsMaterial){
        parent::__construct($license, $driver, $brand);
        $this->typeCarAccepted = $typeCarAccepted;
        $this->seatsMaterial = $seatsMaterial;
      }
}

?>