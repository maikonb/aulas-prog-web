<?php

require_once(__DIR__ . '/../../db/Db.php');
require_once(__DIR__ . '/../../model/Produto.php');
require_once(__DIR__ . '/../../dao/DaoProduto.php');
require_once(__DIR__ . '/../../config/config.php');
require_once(__DIR__ . '/../../model/Marca.php');
require_once(__DIR__ . '/../../dao/DaoMarca.php');
require_once(__DIR__ . '/../../model/Fornecedor.php');
require_once(__DIR__ . '/../../dao/DaoFornecedor.php');

$conn = Db::getInstance();

if (! $conn->connect()) {
    die();
}

$daoMarca = new DaoMarca($conn);
$daoProduto = new DaoProduto($conn);
$daoFornecedor = new DaoFornecedor($conn);

$marca = $daoMarca->porId( $_POST['marca'] );
$fornecedor = $daoFornecedor->porId( $_POST['fornecedor'] );
$novoProduto = new Produto($_POST['nome'], $_POST['preco'], $_POST['estoque'], $marca, $fornecedor);

if ($daoProduto->inserir( $novoProduto) ) {
    $daoProduto->sincronizarDepartamentos($novoProduto, $_POST['departamentos']);
}
    
header('Location: ./index.php');

?>


