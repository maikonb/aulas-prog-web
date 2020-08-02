<?php

  // Operadores aritmeticos
  $i = 100;
  $soma  = $i + 100;
  $sub   = $i - 100;
  $div   = $i / 5;
  $mul   = $i * 100;
  $resto = $i % 100;
  
  echo ("soma = $soma <br>");
  echo ("sub = $sub <br>");
  echo ("div = $div <br>");
  echo ("mul = $mul <br>");
  echo ("resto = $resto <br>");

  // Comentario de linha
  /* 
    Comentario de Bloco
  */
  # Comentario de linha

  $i = "100";
  $res = ($i == 100) ? "É 100" : "Não é 100";
  echo "$res <br>";

  $res = ($i === 100) ? "É 100" : "Não é 100";
  echo "$res <br>";

  // Operadores lógicos: 
  // && and  
  // || or
  // ! not
  // > < <= >=
  $b = ($i == 100) && ($i < 1000 || $i > 50) && (! $i==1);

  
  // Incremento
  $i = 100;
  echo $i++ . "<br>"; // imprime 100 e depois i=101
  echo ++$i . "<br>"; // i=102 e depoois imprime 102

  // Operacoes simplificadas  
  $i += 1;  $i *= 1;  $i -= 1;  $i %= 1;
  $i /= 1;  $i |= 1;  $i &= 1;  $i ^= 1;
  
  $s = "Hello ";
  $s .= "World";
  