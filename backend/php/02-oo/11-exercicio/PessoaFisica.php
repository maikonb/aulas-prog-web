<?php

abstract class PessoaFisica {
  
  protected $id, $nome, $endereco, $telefone;

  public function __construct($id, $nome, $endereco, $telefone) 
  {
    $this->id        = $id;
    $this->nome      = $nome;
    $this->endereco  = $endereco;
    $this->telefone  = $telefone;
  }  
  public function setNome($nome) {
    $this->nome = $nome;
  }
  public function getNome() {
    return $this->nome;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setEndereco($endereco) {
    $this->endereco = $endereco;
  }
  public function getEndereco() {
    return $this->endereco;
  }
  public function setTelefone($telefone) {
    $this->telefone = $telefone;
  }
  public function getTelefone() { 
    return $this->telefone;
  }

  abstract function __toString();
}