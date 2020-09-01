<?php

require_once('01-conexao.php');

// Modo 1
echo "<p>Listando marcas - Modo 1 </p>\n";
$sql = "SELECT id, nome FROM marcas";
$res = $mysqli->query($sql); 
// retorna 'false' caso tenha erros ou um 'objeto' se tudo ocorrer ok
if ($res) {
  echo "<p>Foram encontrados $res->num_rows registros.</p>\n";
  echo "<ul>\n";
  while ($dados = $res->fetch_row()) {
    echo "<li>" . $dados[0] . " - " . $dados[1] . "</li>\n";
  }
  echo "</ul>\n";

  mysqli_free_result($res);
}
echo "<hr>\n";



// Modo 2
echo "<p>Listando marcas - Modo 2 </p>\n";
$sql = "SELECT id, nome FROM marcas";
$res = $mysqli->query($sql); 

if ($res) {
  echo "<p>Foram encontrados $res->num_rows registros.</p>\n";
  echo "<ul>\n";
  while ($dados = $res->fetch_assoc()) {  // <<<<<<<<<< fetch_assoc 
    echo "<li>" . $dados['id'] . " - " . $dados['nome'] . "</li>\n"; // <<<<<<<<<<
  }
  echo "</ul>\n";

  mysqli_free_result($res);
}
echo "<hr>\n";


// Modo 3
echo "<p>Listando marcas - Modo 3 </p>\n";
$sql = "SELECT id, nome FROM marcas";  
$stmt = $mysqli->prepare($sql);

if ($stmt) {
  $stmt->execute();
  $stmt->bind_result($res_id, $res_nome);
  if ($stmt->store_result()) {
    echo "<p> Foram encontrados $stmt->num_rows registros </p> \n";
    if ($stmt->num_rows) {
      echo "<ul>";
      while ($stmt->fetch()) {
          echo "<li> $res_id - $res_nome</li> \n";
      }
      echo "</ul>";
    }
  }
  $stmt->close();
}
echo "<hr>\n";

// Modo 4
echo "<p>Listando marcas - Modo 4 </p>\n";
$sql = "SELECT id, nome FROM marcas";
$res = $mysqli->query($sql); 

if ($res) {
  echo "<p>Foram encontrados $res->num_rows registros.</p>\n";
  //$arr = $res->fetch_all(MYSQLI_NUM);
  $arr = $res->fetch_all(MYSQLI_ASSOC);  
  //var_dump($arr);
  //echo "<br>\n";
 
  echo "<ul>";
  foreach($arr as $marca) {
    echo "<li>" . $marca['id'] . " - " . $marca['nome'] . "</li> \n";
  }
  echo "</ul>";

  mysqli_free_result($res);
}
echo "<hr>\n";
