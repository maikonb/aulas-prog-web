<?php
  session_start();
  $pessoas =  isset($_SESSION['pessoas']) ? 
                isset($_SESSION['pessoas']) : [];

  function gerarNovoId()
  {
    if (isset($_SESSION['ultimoID']))
      ++$_SESSION['ultimoID'];
    else
      $_SESSION['ultimoID'] = 1;
    return $_SESSION['ultimoID'];
  }

  function cadastrarPessoa($dadosPessoa) 
  {
    global $pessoas;
    $id = gerarNovoId();
    $pessoas[ $id ] = $dadosPessoa;
  } 

  function empacotaDadosForm() 
  {
    $dados = [];
    $dados['nome'] = $_POST['nome'];
    $dados['idade'] = $_POST['idade'];
    $dados['telefone'] = $_POST['telefone'];
    $dados['cidade'] = $_POST['cidade'];
    if (isset($_POST['id']) && $_POST['id'] != '')
      $dados['id'] = $_POST['id'];
    return $dados;
  }

  function validaDadosForm()
  {
    return (
      (isset($_POST['nome']) && $_POST['nome'] != "") && 
      (isset($_POST['idade']) && $_POST['idade'] != "") && 
      (isset($_POST['telefone']) && $_POST['telefone'] != "") && 
      (isset($_POST['cidade']) && $_POST['cidade'] != ""));
  }

  function processarAcao($acao) 
  {
    switch($acao) {
      case 'Cadastrar':
        if (validaDadosForm()) {
          $dadosPessoa = empacotaDadosForm();
          cadastrarPessoa($dadosPessoa);
        }
        break;      
      case 'Atualizar':
        break;
      case 'Apagar':
        break;
      case 'Cancelar':
        break;
    }
  }

  if (isset($_POST['acao']) && $_POST['acao'] != '')
    processarAcao($_POST['acao']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Pessoas</title>
</head>
<body>
  <h2>Cadastro de Pessoas</h2>
  <form action="">
    <input type="hidden" name="id" value="">
    <table>
      <tr>
        <td>Nome</td>
        <td>
          <input type="text" name="nome" value="">
        </td>
      </tr>
      <tr>
        <td>Idade</td>
        <td>
          <input type="number" name="idade" value="">
        </td>
      </tr>      
      <tr>
        <td>Telefone</td>
        <td>
          <input type="text" name="telefone" value="">
        </td>
      </tr>
      <tr>
        <td>Cidade</td>
        <td>
          <input type="text" name="cidade" value="">
        </td>
      </tr>
      <tr>
        <td>
          <input type="submit" value="Cadastrar" name="acao">
          <input type="submit" value="Atualizar" name="acao">
          <input type="reset" value="Cancelar">
        </td>
      </tr>      
    </table>
  </form>
</body>
</html>