<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Calculadora</title>
</head>
<body>
  <form action="" method="POST">
    <table>
      <tr> 
        <td>Valor1</td>
        <td><input type="number" name="valor1"></td>
      </tr>
      <tr> 
        <td>Valor2</td>
        <td><input type="number" name="valor2"></td>
      </tr>      
      <tr> 
        <td>Operação</td>
        <td>
          <input type="radio" name="operacao" value="sum" checked> +
          <input type="radio" name="operacao" value="sub"> -
          <input type="radio" name="operacao" value="div"> /
          <input type="radio" name="operacao" value="mul"> X
        </td>
      </tr>      
      <tr> 
        <td><input type="submit" name="Calcular"></td>
      </tr>      

    </table>
  </form>

  <hr>

  <?php

    if (isset($_POST['valor1']) && 
        isset($_POST['valor2']) && 
        isset($_POST['operacao']) ) 
    {
      $res = 0;
      switch($_POST['operacao']) {
        case "sum":
          $res = $_POST['valor1'] + $_POST['valor2'];
          break;
        case "sub":
          $res = $_POST['valor1'] - $_POST['valor2'];
          break;  
        case "div":
          $res = $_POST['valor1'] / $_POST['valor2'];
          break;
        case "mul":
          $res = $_POST['valor1'] * $_POST['valor2'];
          break;
      }
      echo "<h2> Resultado: $res </h2>";
    }
  ?>

</body>
</html>