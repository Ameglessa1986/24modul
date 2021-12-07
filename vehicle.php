<?php
interface VehicleInterface
{
  public function moveForward();
  public function moveBackward();
  public function honkHorn();
  public function special();
}

abstract class Vehicle implements VehicleInterface
{
  public function moveForward() {
    return 'vehicle moves forward';
  }
  public function moveBackward() {
    return 'vehicle moves backwards';
  }
  public function honkHorn() {
    return 'beep!';
  }
  public function special() {
    return 'noching special';
  }
}

class Bulldozer extends Vehicle
{
  public function special() {
    return $this->useBlade();
  }

  public function useBlade() {
    return 'pushing sand';
  }
}

class Car extends Vehicle
{
  public $design = [
    'color'=>'black',
    'interior'=>'faux leather'
  ];

  public function special() {
    return $this->useNitrousOxide();
  }

  public function useNitrousOxide() {
    return 'wrrroooom!';
  }

  public function turnOnWipers() {
    return 'cleaning the windshield';
  }
}

function go(Vehicle $vehicle) {
  echo $vehicle->moveForward().'<br/>';
  echo $vehicle->special().'<br/>';
}

$dozer = new Bulldozer();
$renault = new Car();
go($dozer);
go($renault);

$renault->design['color'] = 'red';
print_r($renault->design);