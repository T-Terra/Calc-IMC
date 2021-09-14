<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cálculo IMC</title>
</head>
<body>
  <h1>Cálculo IMC</h1>
  <pre>
    <?php 
      require __DIR__ . "./src/class/Person.php";
      require __DIR__ . "./src/class/People.php";
      
      //$person = new src\class\Person();
      $man = new src\class\People("Gabriel", 22, 1.81, 84, "M");
      $woman = new src\class\People("Maria", 25, 1.56, 61, "F");

      //var_dump($man);
      echo "<p>Nome: {$man->getName()}
      <br>Idade: {$man->getAge()}
      <br>Altura: {$man->getHeight()}
      <br>Peso: {$man->getWeight()}
      <br>Sexo: {$man->getSex()}</p>";

      echo "<p>Nome: {$woman->getName()}
      <br>Idade: {$woman->getAge()}
      <br>Altura: {$woman->getHeight()}
      <br>Peso: {$woman->getWeight()}
      <br>Sexo: {$woman->getSex()}</p>";
    ?>
  </pre>
</body>
</html>