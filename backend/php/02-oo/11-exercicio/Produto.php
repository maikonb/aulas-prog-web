<?php

require_once('Departamento.php');

class Produto {
  private $idProduto, $nome, $preco, $departamento;

  public function __construct($idProduto, $nome, 
                              $preco, Departamento $departamento) 
  {
    $this->idProduto = $idProduto;
    $this->nome = $nome;
    $this->preco = $preco;
    $this->departamento = $departamento;
  }

  public function setIdProduto($idProduto) {
    $this->idProduto = $idProduto;
  }

  public function getIdProduto() {
    return $this->idProduto;
  }

  public function setNome($nome) {
    $this->nome = $nome;
  }

  public function getNome() {
    return $this->nome;
  }

  public function setPreco($preco) {
    $this->preco = $preco;
  }

  public function getPreco() {
    return $this->preco;
  }

  public function setDepartamento(Departamento $departamento) {
    $this->departamento = $departamento;
  }

  public function getDepartamento() {
    return $this->departamento;
  }

  public function __toString()
  {
    return "Produto: [$this->idProduto] $this->nome";
  }
}