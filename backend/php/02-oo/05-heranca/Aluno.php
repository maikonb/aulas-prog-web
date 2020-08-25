<?php

// include('Pessoa.php');
// require('Pessoa.php');
// include_once('Pessoa.php');
require_once('Pessoa.php');

class Aluno extends Pessoa {

  private $linguagens;
  private $matricula;

  public function __construct($nome='', $idade=0, $matricula) 
  {
    parent::__construct($nome, $idade);
    $this->matricula = $matricula;
    $this->linguagens = [] ;
  }

  public function addLinguagem($linguagem) {
    $this->linguagens[] = $linguagem;
  }

  public function getLinguagens() {
    return $this->linguagens;
  }

  public function setMatricula($matricula) {
    $this->matricula = $matricula; 
  }

  public function getMatricula() {
    return $this->matricula; 
  }

  function getHtml() {
    $s = "<ul>";
    foreach($this->linguagens as $l) {
      $s .= "<li>$l</li>";
    }
    $s .= "</ul>";

    return "<p>" . 
      "Nome: " . $this->getNome() . " | " .
      "Idade " . $this->getIdade() . " | " .
      "Matricula $this->matricula | " .
      "</p>" . $s;
  } 
}