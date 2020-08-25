<?php

class MinhaClasseBase {

  public    $atributo1;
  protected $atributo2;
  private   $atributo3;

  function __construct($at1, $at2, $at3)
  {
    $this->atributo1 = $at1;
    $this->atributo2 = $at2;
    $this->atributo3 = $at3;    
  }

  function imprimir() {
    echo "$this->atributo1, $this->atributo2, $this->atributo3 <br>";
  }
}

class MinhaSubClasse extends MinhaClasseBase {
  public function __construct($at1, $at2, $at3) 
  {
    parent::__construct($at1, $at2, $at3);
  }

  function imprimir() {
    echo "$this->atributo1, $this->atributo2, $this->atributo3 <br>";
  }  
}


$o1 = new MinhaClasseBase(1,2,3);

$o1->atributo1 = 4;
//$o1->atributo2 = 5;
//$o1->atributo3 = 6;
$o1->imprimir(); // imprimir do MinhaClasseBase

$o2 = new MinhaSubClasse(6,7,8);
$o2->atributo1 = 1;
$o2->imprimir(); // imprimir do MinhaSubClasse