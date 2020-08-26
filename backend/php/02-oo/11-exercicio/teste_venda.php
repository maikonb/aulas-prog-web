<?php

require_once('Produto.php');
require_once('Cliente.php');
require_once('Departamento.php');
require_once('Venda.php');
require_once('Vendedor.php');
require_once('VendaProduto.php');

$departamentos = [];
$departamentos[] = new Departamento(1, "Alimentos");
$departamentos[] = new Departamento(2, "Roupas");
$departamentos[] = new Departamento(3, "Eletronicos");

$produtos = [];
$produtos[] = new Produto(1, "Pastel", 5.00, $departamentos[0]);
$produtos[] = new Produto(2, "Camiseta", 25.00, $departamentos[1]);
$produtos[] = new Produto(3, "Monitor", 500.00, $departamentos[2]);

$clientes = [];
$clientes[] = new Cliente(1, "Marcelo Silva", "Rua Brasil", 
  "66 54654645", 1000);
$clientes[] = new Cliente(2, "Paula Roberta", "Rua Rondonopolis", 
  "45 32165423", 2000);  

$vendedores = [];
$vendedores[] = new Vendedor(1, "Adriano Moura", "Rua Parana",
  "44 654654654", 5000.00);
$vendedores[] = new Vendedor(2, "Maria Roberta", "Rua Sao Paulo",
  "19 97898778", 2000.00);

$vendas = [];
$venda1 = new Venda(1, $clientes[0], $vendedores[0]);
$venda1->addProduto($produtos[0], 2, 0);
$venda1->addProduto($produtos[1], 3, 50);
$venda1->addProduto($produtos[2], 2, 100);
$vendas[] = $venda1;

$venda2 = new Venda(2, $clientes[1], $vendedores[1]);
$venda2->addProduto($produtos[0], 10, 0);
$venda2->addProduto($produtos[1], 30, 500);
$venda2->addProduto($produtos[2], 10, 1000);
$vendas[] = $venda2;


$venda3 = new Venda(3, $clientes[1], $vendedores[0]);
$venda3->addProduto($produtos[1], 3, 50);
$venda3->addProduto($produtos[2], 1, 10);
$vendas[] = $venda3;

foreach($vendas as $venda) {
  echo $venda;
  echo "<hr>";
}

// Exercicio:
// Obter o nome do departamento do primeiro produto da venda id 1
// a partir do array de vendas

$nomeDepartamento = $vendas[0]->getProdutos()[0]->getProduto()
                      ->getDepartamento()->getNome();
echo "<h2>$nomeDepartamento</h2>";
