<?php
namespace src\class;

class Person {
  private $name;
  private $age;
  private $height;
  private $weight;

  public function __construct($name = null, $age = null, $height = null, $weight = null)
  {
    $this->setName($name);
    $this->setAge($age);
    $this->setHeight($height);
    $this->setWeight($weight);
  }
  

  //getters
  public function getName() {
    return $this->name;
  }
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
  private function setName($name) {
    $this->name = $name;
  }
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