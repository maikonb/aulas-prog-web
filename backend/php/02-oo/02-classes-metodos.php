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
  function setNome($nome) {
    $this->nome = $nome;
  }
  function getNome() {
    return $this->nome;
  }  
  function setIdade($idade) {
    $this->idade = $idade;
  }
  function getIdade() {
    return $this->idade;
  }
  function setCidade($cidade) {
    $this->cidade = $cidade;
  }
  function getCidade() {
    return $this->cidade;
  }
  function getHtml() {
    return "<ul>" . 
      "<li> $this->id </li>" .
      "<li> $this->nome </li>" .
      "<li> $this->idade </li>" .
      "<li> $this->cidade </li>" .
      "</ul>";
  }    
}

$c1 = new Cliente();
$c1->setId(1);
$c1->setNome("Orlando Ferreira");
$c1->setIdade(20);
$c1->setCidade("Florianopolis");


$c2 = new Cliente();
$c2->setId(1);
$c2->setNome("Maite Silva");
$c2->setIdade(38);
$c2->setCidade("Sao Paulo");

var_dump($c1);
echo "<br>";
var_dump($c2);
echo "<br>";

echo $c1->getHtml();
echo $c2->getHtml();
