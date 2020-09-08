<?php
require_once(__DIR__ . "/../db/Db.php");
require_once(__DIR__ . "/../model/Departamento.php");
require_once(__DIR__ . "/../model/Marca.php");
require_once(__DIR__ . "/../model/Produto.php");
require_once(__DIR__ . "/../model/Fornecedor.php");
require_once(__DIR__ . "/../dao/DaoDepartamento.php");
require_once(__DIR__ . "/../dao/DaoMarca.php");
require_once(__DIR__ . "/../dao/DaoProduto.php");
require_once(__DIR__ . "/../dao/DaoFornecedor.php");

$db = Db::getInstance();
if ($db->connect()) {
  $daoMarca = new DaoMarca($db);
  $daoProd = new DaoProduto($db);
  $daoDep  = new DaoDepartamento($db);
  $daoFor = new DaoFornecedor($db);

  $deps[]   = new Departamento("Eletrônicos");
  $deps[]   = new Departamento("Roupas");
  $deps[]   = new Departamento("Informática");
  $deps[]   = new Departamento("Som e imagem");
  $deps[]   = new Departamento("Gamers");
  $deps[]   = new Departamento("Alimentos");
  $deps[]   = new Departamento("Bebidas");
  $deps[]   = new Departamento("Acessórios automotivos");
  foreach($deps as $dep) $daoDep->inserir($dep);

  $marcas[] = new Marca("Sony");
  $marcas[] = new Marca("LG");
  $marcas[] = new Marca("Samsung");
  $marcas[] = new Marca("Asus");
  $marcas[] = new Marca("Acer");
  $marcas[] = new Marca("AOC");
  $marcas[] = new Marca("Xiaomi");
  $marcas[] = new Marca("Multilaser");
  foreach($marcas as $marca) $daoMarca->inserir($marca);

  $fornecedores[] = new Fornecedor("Kabum", "Rua Carlos Gomes, 1321 - 9º Andar Centro - Limeira (SP) - CEP: 13480-010");
  $fornecedores[] = new Fornecedor("Acer", "Rua Kanebo, 175 - Galpão B2 E B3 - Distrito Industrial - Jundiaí/SP, CEP: 13213-090");
  $fornecedores[] = new Fornecedor("Pichau", "Rua Ottokar Doerffel, 1112 - Galpão C8 - Bairro: Atiradores - CEP: 89203-212 - Joinville/SC");
  foreach($fornecedores as $fornecedor) $daoFor->inserir($fornecedor);

  $prods[] = new Produto("Monitor AOC 21.5", 500.55, 5, $marcas[5], $fornecedores[2]);
  $prods[] = new Produto("Notebook Acer Aspire", 5000, 2, $marcas[4], $fornecedores[1]);
  $prods[] = new Produto("Tablet Multilaser 10p", 200, 20, $marcas[7], $fornecedores[0]);
  foreach($prods as $prod) $daoProd->inserir($prod);

  $daoProd->sincronizarDepartamentos($prods[0], [
    $deps[0]->getId(), $deps[2]->getId(), $deps[3]->getId()
  ]);
  $daoProd->sincronizarDepartamentos($prods[1], [
    $deps[0]->getId(), $deps[2]->getId(), $deps[3]->getId(), $deps[4]->getId()
  ]);
  $daoProd->sincronizarDepartamentos($prods[2], [
    $deps[0]->getId(), $deps[3]->getId()
  ]);
}
exit;