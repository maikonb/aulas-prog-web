<?php

require_once('Produto.php');

class VendaProduto {
  
  private $produto, $quantidade, $desconto;

  public function __construct(Produto $prod, $quantidade, $desconto)
  {
    $this->produto = $prod;
    $this->quantidade = $quantidade;
    $this->desconto = $desconto;
  }

  public function setProduto(Produto $prod) {
    $this->produto = $prod;
  }

  public function getProduto() {
    return $this->produto;
  }

  public function setQuantidade($quantidade) {
    $this->quantidade = $quantidade;
  }

  public function getQuantidade() {
    return $this->quantidade;
  }

  public function setDesconto($desc) {
    $this->desconto = $desc;
  }

  public function getDesconto() {
    return $this->desconto;
  }

  public function __toString() {
    return $this->produto->getNome() . " - R$ " . 
      $this->produto->getPreco() . " - Qtde: " . 
      $this->quantidade . " - Desconto: " . 
      $this->desconto;
  }
}