<?php
namespace src\controllers;

class Controller_validate {
  private $age;
  private $height = 1;
  private $weight = 1;
  private $tot;

  public function __construct($age, $height, $weight)
  {
    if (is_numeric($age)) {
      $this->setAge($age);
    }
    if (is_numeric($height)) {
      $this->setHeight($height); 
    }
    if (is_numeric($weight)) {
      $this->setWeight($weight);
    } 
    else {
      echo "<p>Erro! Digite somente números.</p>";
    }
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

  private function getAge() {
    return $this->age;
  }
  private function getHeight() {
    return $this->height;
  }
  private function getWeight() {
    return $this->weight;
  }

}