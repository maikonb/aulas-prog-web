<?php

require_once('01-conexao.php');
require_once('04-marcas.php');

function atualizarMarcaAleatoria($marcas) {
  if (count($marcas) > 0) {
    $idx_marca_aleatoria = random_int(0, count($marcas)-1 );
    echo "<p>Marca selecionada para ser atualizada: " . $marcas[ $idx_marca_aleatoria ]['nome'] . "</p>\n";
    
    $id = $marcas[ $idx_marca_aleatoria ]['id'];
    $novo_nome = $marcas[ $idx_marca_aleatoria ]['nome'] . " [atualizado]\n";
    
    $ret = (atualizaMarca($id, $novo_nome)) ? "sim" : "nao";
    echo "<p>Marca atualizada: $ret</p>\n";
  }
}

if ($conectado) {
  $marcas = getMarcas();
  listarMarcas($marcas);
  atualizarMarcaAleatoria($marcas);
  $marcas = getMarcas();
  listarMarcas($marcas);
}