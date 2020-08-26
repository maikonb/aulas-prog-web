<?php 

namespace PessoaJuridica;

class Pessoa {
  private $nome, $cidade;
  public function __construct($nome, $cidade)
  {
    $this->nome = $nome;
    $this->cidade = $cidade;
  }
  public function __toString()
  {
    return "<h3>SOU PESSOA JURIDICA</h3>" .
      "<p>Nome . $this->nome </p>" .
      "<p>Cidade . $this->cidade </p> <br>";
  }
}