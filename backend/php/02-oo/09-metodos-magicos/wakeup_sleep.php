<?php

session_start();

class MinhaClasse {

  private $atributo1;
  private $atributo2;

  public function __construct($atributo1, $atributo2) {
    $this->atributo1 = $atributo1;
    $this->atributo2 = $atributo2;
  }

  public function imprimirAtributos() {
    echo "<p>";
    echo "Atributo1: $this->atributo1; ";
    echo "Atributo2: $this->atributo2; ";
    echo "</p>";
  }

  public function __sleep()
  {
    return ['atributo1', 'atributo2'];
  }

  public function __wakeup()
  {
    
  }
}

$c = 0;
if (isset($_SESSION['objetos']))
  $c = count($_SESSION['objetos']);

$objeto = new MinhaClasse($c+1, $c+2);
$_SESSION['objetos'][] = $objeto;

foreach($_SESSION['objetos'] as $i => $obj) {
  echo "<h2>Objeto $i</h2>";
  $obj->imprimirAtributos();
}

if ($c >= 10)
  session_destroy();

