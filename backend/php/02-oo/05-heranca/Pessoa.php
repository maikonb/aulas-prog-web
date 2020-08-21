<?php

class Pessoa {
  private $nome;
  private $idade;

  function __construct($nome='', $idade=0)
  {
    $this->nome = $nome;
    $this->idade = $idade;
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

  function getHtml() {
    return "<ul>" . 
      "<li> $this->nome </li>" .
      "<li> $this->idade </li>" .
      "</ul>";
  }      
}