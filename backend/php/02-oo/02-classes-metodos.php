<?php 

class Cliente {

  // Atributos - Estados do objeto
  private $id;
  private $nome;
  private $idade;
  private $cidade;

  // Metodos representam os comportamentos exercidos
  // pelos objetos Cliente
  function setId($id) {
    $this->id = $id;
  }
  function getId() {
    return $this->id;
  }
}

$c1 = new Cliente();
$c1->setId(1);
//$c1->nome = "Orlando Ferreira";
//$c1->idade = 20;
//$c1->cidade = "Florianopolis";


$c2 = new Cliente();
$c2->setId(1);
// $c2->nome = "Maite Silva";
// $c2->idade = 38;
// $c2->cidade = "Sao Paulo";

var_dump($c1);
echo "<br>";
var_dump($c2);
echo "<br>";