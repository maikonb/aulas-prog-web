<?php

  echo "<h1>Variaveis PHP</h1>";

  $varString = "Hello World!";
  echo "<h2> $varString </h2>";
  echo '<h2> $varString </h2>';

  $varBool = false;
  if ($varBool)
    echo "<h2>varBool = verdadeiro</h2>";
  else 
    echo "<h2>varBool = falso</h2>";

  $varInt = 7005;
  echo "<h2>varInt = $varInt</h2>";
  echo "<h2>varInt = " . $varInt . "</h2>";

  $varFloat = 101.54456;
  echo "<h2>varFloat = $varFloat</h2>";

  printf("<p> varFloat = %08.4f  </p>", $varFloat);
  printf("<p> varInt = %08d  </p>", $varInt);

