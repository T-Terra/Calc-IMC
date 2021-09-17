<?php
  require __DIR__ . '/src/controllers/controller_validate.php';
  use src\controllers\Controller_validate\Controller_validate;
  
  $age = $_POST['age'];
  $height = $_POST['height'];
  $weight = $_POST['weight'];
  $val = new Controller_validate($age, $height, $weight);
  //var_dump($val);
      
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css">
  <!-- Bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <title>Cálculo IMC</title>
</head>
<body>
  <main class="main">
    <section>
      <div class="form">
        <form action="./" method="post">
          <h1>Cálculo IMC</h1>
          <div class="sex-button">
            <input type="radio" class="btn-check" name="options" id="option1" autocomplete="off" checked>
            <label class="btn btn-secondary" for="option1">Homem</label>
            <input type="radio" class="btn-check" name="options" id="option2" autocomplete="off">
            <label class="btn btn-secondary" for="option2">Mulher</label>
          </div>
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="age" placeholder="Idade" aria-label="Idade" aria-describedby="basic-addon1">
            <span class="input-group-text" id="basic-addon1">Anos</span>
          </div>
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="height"  placeholder="Altura" aria-label="Altura" aria-describedby="basic-addon1">
            <span class="input-group-text" id="basic-addon1">m</span>
          </div>
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="weight" placeholder="Peso" aria-label="Peso" aria-describedby="basic-addon1">
            <span class="input-group-text" id="basic-addon1">kg</span>
          </div>
          <div class="sub-button">
            <button type="submit" class="btn btn-danger btn-lg">Calcular</button>
          </div>
        </form>
      </div>
    </section>
    <div class="resp">
      <p>
        <pre>
        <?php
          echo "<p class='resp'>Seu imc é: {$val->imc()}</p>";
          //var_dump($val);
        ?>
        </pre>
      </p>
    </div>
  </main>
  <!-- Bootstrap-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>
</html>