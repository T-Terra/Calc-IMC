<?php
namespace src\class;
require __DIR__ ."../controllers/controller_validate.php";
use controller\controller_validate;
use src\class\Person;
class People extends Person {
  private $sex;

  public function __construct($age, $height, $weight, $sex)
  {
    parent::__construct($age, $height, $weight);
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