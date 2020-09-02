<?php 

function getMarcas() 
{
  global $mysqli;
  $sql = "SELECT id, nome FROM marcas";
  $res = $mysqli->query($sql); 
  if ($res) {
    $arr = $res->fetch_all(MYSQLI_ASSOC);
    mysqli_free_result($res);
    return $arr;
  }
  return [];
}

function atualizaMarca($id, $novo_nome) 
{
  global $mysqli;

  $sql = "UPDATE marcas SET nome=? where id=?";
  $stmt = $mysqli->prepare($sql);

  if ($stmt) {
    /* 
        's' -> parametro eh uma string
        'i' -> parametro eh um inteiro
    */
    $stmt->bind_param('si', $novo_nome, $id); 
    $ret = $stmt->execute();
    $stmt->close();
    return $ret;
  }
  return false;
}

function listarMarcas($marcas) {
  if (count($marcas) > 0) {
    echo "<h3>Marcas:</h3>\n";
    echo "<ul>\n";
    foreach($marcas as $marca) {
      echo "<li>" . $marca['id'] . " - " . $marca['nome'] . "</li> \n";
    }    
    echo "</ul>\n";
  }
  else
    echo "<p>Nenhuma marca cadastrada.</p>\n";
}