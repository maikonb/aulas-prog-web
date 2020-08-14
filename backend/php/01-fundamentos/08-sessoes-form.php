<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="post">
    <table>
      <tr>
        <td>Nome</td>
        <td>
          <input type="text" name="nome">
        </td>
      </tr>
      <tr>
        <td>Idade</td>
        <td>
          <input type="number" name="idade">
        </td>
      </tr>
      <tr>
        <td>Telefone</td>
        <td>
          <input type="text" name="telefone">
        </td>
      </tr>
      <tr>
        <td>Cidade</td>
        <td>
          <input type="text" name="cidade">
        </td>
      </tr>
      <tr>
        <td>
          <input type="submit" value="Enviar">
        </td>
      </tr>
    </table>
  </form>

  <hr>

  <?php
    if (isset($_POST['nome']) &&
        isset($_POST['idade']) &&
        isset($_POST['telefone']) &&
        isset($_POST['cidade'])) 
    {
      $_SESSION['pessoas'][] = $_POST;
    }

    if (count($_SESSION['pessoas']) > 0) 
    {
      echo "<table>";
      foreach($_SESSION['pessoas'] as $pessoa)
      {
        echo "<tr>";
        echo "  <td>" . $pessoa['nome'] . "</td>";
        echo "  <td>" . $pessoa['idade'] . "</td>";
        echo "  <td>" . $pessoa['telefone'] . "</td>";
        echo "  <td>" . $pessoa['cidade'] . "</td>";
        echo "</tr>";
      }
      echo "</table>";
    } 
    else {
      echo "<p>Nenhum registro encontrado.</p>";
    }

  ?>

</body>
</html>