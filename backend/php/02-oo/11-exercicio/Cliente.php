<?php

require_once('PessoaFisica.php');

class Cliente extends PessoaFisica {

  protected $pontosfidelidade;

  public function __construct($id, $nome, $end, $tel, $pontos) 
  {
    parent::__construct($id, $nome, $end, $tel);
    $this->pontosfidelidade = $pontos;
  }

  public function setPontos($pontos) {
    $this->pontosfidelidade = $pontos;
  }
  public function getPontos() {
    return $this->pontosfidelidade;
  }  

  public function __toString() {
    return "Cliente: [$this->id] $this->nome";
  }
}