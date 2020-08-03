<?php

  $a = [1,2,3,4,5];
  var_dump($a);
  echo("<br>");
  
  $a = [];
  $a = array();
  $a[] = 1;
  $a[] = 2;
  $a[] = 3;
  $a[] = "Tres";
  $a[] = "Quatro";
  $a[] = 50.9;
  $a[] = 50.8;
  $a[] = true;
  $a[] = false;
  $a[] = [10,20,30,40,50];
  var_dump($a);
  echo("<p>Na posicao 5: $a[5]</p>");

  echo("<br><hr>");

  echo("<h2>Arrays Associativos</h2>");
  $b['a'] = 10;
  $b['b'] = 20;
  $b['c'] = 30;
  $b['d'] = 40;
  $b['e'] = 'Letra E';
  $b['letra f'] = 400.88888;
  $b["array a"] = [1,2,3,4];
  $b[5] = 'numero 5';
  var_dump($b);
  echo("<p>Na posicao 5: $b[5]</p>");
  echo("<p>Na posicao 'b': " . $b['b'] ."</p>");
  echo("<p>Na posicao 'letra f': " . $b['f'] ."</p>");

  echo("<br><hr>");

  $joao['nome'] = "Joao";
  $joao['idade'] = 20;
  $joao['cidade'] = "Rondonopolis";
  $joao['uf'] = "MT";

  $maria['nome'] = "Maria";
  $maria['idade'] = 24;
  $maria['cidade'] = "Cuiaba";
  $maria['uf'] = "MT";

  echo("<br>");
  var_dump($joao);
  echo("<br>");
  var_dump($maria);

  $pessoas = [$joao, $maria];
  echo("<br>");
  echo("Pessoas: ");
  var_dump($pessoas);
  echo("<br>");

  // Exercício: Coloque os dados do 'joão'
  // em $pessoas['joao'] e os dados da 'maria' em
  // $pessoas['maria']

  
