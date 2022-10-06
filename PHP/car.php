<?php

class Car {
    public $id;
    public $license;
    public $driver;
    public $passenger;

    public function __construct($license, $driver){
        $this->license = $license;
        $this->driver = $driver;
      }
    
      public function PrintDataCar(){
        echo"license: $this->license, conductor: {$this->driver->name}, document: {$this->driver->document}";
      }

      public function getId() {
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }

    public function getLicense() {
        return $this->license;
    }
    public function setLicense($license){
        $this->license = $license;
    }

    public function getDriver() {
        return $this->driver;
    }
    public function setDriver($driver){
        $this->driver = $driver;
    }

    public function getPassenger() {
        return $this->passengers;
    }

    public function setPassenger($passengers) {
        
        if ($passengers == 4) {
            $this->passengers = $passengers;
        }
        else {
            echo "Necesitas asignar 4 pasajeros <br>";
        }
    
    }

}

?>