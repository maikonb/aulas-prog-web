<?php

abstract class Veiculo {

  protected $marca;
  protected $modelo;

  abstract protected function getTipo();

  public function printTipo() {
    echo $this->getTipo();
  }
}

class Carro extends Veiculo {
  protected function getTipo() {
    return "Carro<br>";
  }
}

class Bicicleta extends Veiculo {
  protected function getTipo() {
    return "Bicicleta<br>";
  }
}

$c = new Carro();
$c->printTipo();

$b = new Bicicleta();
$b->printTipo();

/*
$v = new Veiculo(); // Nao instancia, pois classe Veiculo
                    // eh abstrata
*/                    