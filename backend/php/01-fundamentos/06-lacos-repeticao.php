<?php

  function printP($size) {
    echo "<p style=\"font-size: ${size}px\"> font-size: $size </p>";
  }

  $sizes = [10, 12, 16, 22, 25, 30];

  for($i=0; $i<count($sizes); $i++) {
    printP($sizes [ $i ]);
  }

  $i = count($sizes);
  while($i--) {
    printP($sizes [ $i ]);
  }

  $i = 0;
  do {
    printP($sizes [ $i ]);
  } while ( ++$i <  count($sizes) );