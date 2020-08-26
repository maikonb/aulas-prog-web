<?php

require_once('Cliente.php');
require_once('Vendedor.php');
require_once('VendaProduto.php');
require_once('Produto.php');

class Venda {
  private $idVenda;
  private $total;
  private $cliente;
  private $produtos;
  private $vendedor;

  public function __construct($idVenda, Cliente $cliente, 
                              Vendedor $vendedor) 
  {
    $this->idVenda  = $idVenda;
    $this->cliente  = $cliente;
    $this->vendedor = $vendedor;
    $this->total    = 0;
    $this->produtos = [];
  }  

  public function setIdVenda($idVenda) {
    $this->idVenda = $idVenda;
  }

  public function setCliente(Cliente $cliente) {
    $this->cliente = $cliente;
  }

  public function getIdVenda() {
    return $this->idVenda;
  }

  public function getCliente() {
    return $this->cliente;
  }

  public function getTotal() {
    return $this->total;
  }

  public function getProdutos() {
    return $this->produtos;
  }

  public function setVendedor(Vendedor $vendedor) {
    $this->vendedor = $vendedor;
  }
  
  public function getVendedor() {
    return $this->vendedor;
  }

  public function addProduto(Produto $produto, $qtde, $desconto) {
    $vp = new VendaProduto ($produto, $qtde, $desconto);
    $subtotal = $produto->getPreco() * $qtde - $desconto;
    $this->total += $subtotal;
    $this->produtos[] = $vp;
  }

  public function __toString() {
    $s = "";
    $s .= "<p>IdVenda $this->idVenda </p>";
    $s .= "<p>Cliente " . $this->cliente->getNome() . "  </p>";
    $s .= "<p>Vendedor " . $this->cliente->getNome() . "  </p>";
    $s .= "<p>Total R$ $this->total </p>";
    $s .= "<ul>";
    foreach($this->produtos as $vp) {
      $s .= "<li>" . $vp . "</li>";
    }
    $s .= "</ul>";
    return $s;
  }
}