<?php

class AlunoProgramacao {
  private $notas;

  public function __construct()
  {
    $this->notas = [];
  }

  public function __set($nomeAtributo, $valorAtributo) {
    $this->notas[$nomeAtributo] = $valorAtributo;
  }

  public function __get($nomeAtributo) {
    return $this->notas[$nomeAtributo];
  }
}

$a = new AlunoProgramacao();
var_dump($a);

$a->java  = 5.1;
$a->cobol = 9.2;

echo "<br><br><br><br><br>";

echo "Notas: Java - " . $a->java . " e Cobol - " . $a->cobol;

echo "<br><br><br><br><br>";

var_dump($a);