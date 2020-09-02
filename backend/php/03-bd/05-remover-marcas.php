<?php 

require_once('01-conexao.php');
require_once('04-marcas.php');


function removerMarcaAleatoria($marcas) {
  if (count($marcas) > 0) {
    $idx_marca_aleatoria = random_int(0, count($marcas)-1 );
    echo "<p>Marca selecionada para ser removida: " . $marcas[ $idx_marca_aleatoria ]['nome'] . "</p>\n";
    
    $id = $marcas[ $idx_marca_aleatoria ]['id'];
    
    $ret = (removeMarca($id)) ? "sim" : "nao";
    echo "<p>Marca removida: $ret</p>\n";
  }
}

if ($conectado) {
  $marcas = getMarcas();
  listarMarcas($marcas);
  removerMarcaAleatoria($marcas);
  $marcas = getMarcas();
  listarMarcas($marcas);
}