<?php
namespace src\class;
require __DIR__ .'./../../src/controllers/controller_validate.php';
require __DIR__ .'./../class/Person.php';
use src\controllers\Controller_validate;
use src\class\Person;

class People extends Person {
  private $sex;

  public function __construct($age, $height, $weight, $sex)
  {
    $this->setSex($sex);
    parent::__construct($age, $height, $weight);
    $val = new Controller_validate($age, $height, $weight);
  }

  public function imc() {
    $this->tot = $this->getWeight() / ($this->getHeight() * $this->getHeight());
    return number_format($this->tot, 1, ".", ",");
  }

  //getters
  public function getSex() {
    if ($this->sex === "M") {
      return $this->sex = "Masculino";
    } elseif ($this->sex === "F") {
      return $this->sex = "Feminino";
    }
  }
  //setters
  public function setSex($sex) {
    $this->sex = $sex;
  }

}