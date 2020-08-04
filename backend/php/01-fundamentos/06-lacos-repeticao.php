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
