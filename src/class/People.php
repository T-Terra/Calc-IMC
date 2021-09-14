<?php
namespace src\class;
use src\class\Person;
class People extends Person {
  private $sex;

  public function __construct($name, $age, $height, $weight, $sex)
  {
    parent::__construct($name, $age, $height, $weight);
    $this->setSex($sex);
  }

  //getters
  public function getSex() {
    return $this->sex;
  }
  //setters
  public function setSex($sex) {
    $this->sex = $sex;
  }
}