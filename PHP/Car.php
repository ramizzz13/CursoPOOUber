<?php
require_once('Account.php');
class Car {
    public $id;
    public $license;
    public $driver;
    public $passengers;

    public function getPassenger() {
        return $this->passengers;
    }

    public function setPassenger($passengers) {
        
        if ($passengers == 4) {
            $this->passengers = $passengers;
        }
        else {
            echo "Necesitas asignar 4 pasajeros";
        }
    
    }

    public function __construct($license, $driver){
        $this->license = $license;
        $this->driver =$driver;
    }

    /* public function printDataCar(){
        echo "License: $this->license, Driver:". $this->driver->name;
    } */

    public function printDataCar() {
        echo "
            License: $this->license 
            Driver: {$this->driver->name} 
            Número de pasajeros: $this->passengers ";
    }


}
?>