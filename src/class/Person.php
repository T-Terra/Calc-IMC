<?php
namespace src\class;

class Person {
  private $age;
  private $height;
  private $weight;

  public function __construct($age = null, $height = null, $weight = null)
  {
    $this->setAge($age);
    $this->setHeight($height);
    $this->setWeight($weight);
  }
  

  //getters
  public function getAge() {
    return $this->age;
  }
  public function getHeight() {
    return $this->height;
  }
  public function getWeight() {
    return $this->weight;
  }
  //setters
  private function setAge($age) {
    $this->age = $age;
  }
  private function setHeight($height) {
    $this->height = $height;
  }
  private function setWeight($weight) {
    $this->weight = $weight;
  }

}