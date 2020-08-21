<?php 

class Exemplo {
  private $atributo_privado;
  private $atributo_publico;

  public function __construct()
  {
    echo "<h1> Ola mundo </h1>";
    $this->atributo_publico = "Inicializando";
  }

  public function __destruct()
  {
    echo "<h1>Tchau mundo.</h1>";
  }

  public function setAtributo($atr) {
    if (isset($atr))
      $this->atributo_privado = $atr;
  }

  public function getAtributo() {
    return $this->atributo_privado;
  }  

}

$p = new Exemplo();
$p->setAtributo("Atributo privado OK");
var_dump($p);