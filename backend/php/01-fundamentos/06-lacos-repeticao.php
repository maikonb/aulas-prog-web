<?php

  function printP($size) {
    echo "<p style=\"font-size: ${size}px\"> font-size: $size </p>";
  }

  $sizes = [10, 12, 16, 22, 25, 30];

  echo "<h3>For</h3>";
  for($i=0; $i<count($sizes); $i++) {
    printP($sizes [ $i ]);
  }

  echo "<h3>While</h3>";
  $i = count($sizes);
  while($i--) {
    printP($sizes [ $i ]);
  }

  echo "<h3>Do-While</h3>";
  $i = 0;
  do {
    printP($sizes [ $i ]);
  } while ( ++$i <  count($sizes) );

  echo "<h3>ForEach</h3>";
  foreach($sizes as $size) {
    printP($size);
  }

  echo "<h3>ForEach</h3>";
  foreach($sizes as $indice=>$size) {
    // $indice -> indice do array
    printP($size); 
  }  

  $pessoa["nome"] = "joao";
  $pessoa["idade"] = 20;
  $pessoa["cidade"] = "Rondonopolis";
  $pessoa["uf"] = "MT";

  echo "<hr>";
  foreach($pessoa as $atributo => $valor) {
    echo "<p>$atributo: $valor</p>";
  }

  // Exercicio: faca um laco de repeticao
  // para imprimir todos os dados de joao e maria:
  $pessoas['joao']['nome'] = "Joao";
  $pessoas['joao']['idade'] = 20;
  $pessoas['joao']['cidade'] = "Rondonopolis";
  $pessoas['joao']['uf'] = "MT";

  $pessoas['maria']['nome'] = "Maria";
  $pessoas['maria']['idade'] = 24;
  $pessoas['maria']['cidade'] = "Cuiaba";
  $pessoas['maria']['uf'] = "MT"; 

  $pessoas['ana']['nome'] = "Ana";
  $pessoas['ana']['idade'] = 34;
  $pessoas['ana']['cidade'] = "Curitiba";
  $pessoas['ana']['uf'] = "PR"; 

  echo "<hr>";
  foreach($pessoas as $nome => $dados) {
    echo "<h3>$nome</h3>";
    echo "<p>Dados: </p>";
    echo "<ul>";
    foreach($dados as $atributo => $valor) {
      echo "<li>$atributo: $valor</li>";
    }
    echo "</ul>";
  }

