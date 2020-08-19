<?php
  session_start();
  $pessoas =  isset($_SESSION['pessoas']) ? $_SESSION['pessoas'] : [];
  $emEdicao = false;
  $pessoaEmEdicao = null;

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
    if ( !isset($dadosPessoa['id'])) {
      $dadosPessoa['id'] = gerarNovoId();
    }
    $pessoas[ $dadosPessoa['id'] ] = $dadosPessoa;
    $_SESSION['pessoas'] = $pessoas;
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


  function imprimirTabelaPessoas() 
  {
    global $pessoas;
    if (count($pessoas)) {
      echo "<table>";
      foreach($pessoas as $pessoa) {
        echo "<tr>";
        echo "<form method='POST'>"; 
        echo " <input type='hidden' name='id' value='" . 
          $pessoa['id'] . "' >";
        echo "  <td>" . $pessoa['id'] . "</td>";
        echo "  <td>" . $pessoa['nome'] . "</td>";
        echo "  <td>" . $pessoa['idade'] . "</td>";
        echo "  <td>" . $pessoa['telefone'] . "</td>";
        echo "  <td>" . $pessoa['cidade'] . "</td>";

        echo "  <td><input type='submit' name='acao' value='Apagar'></td>";
        echo "  <td><input type='submit' name='acao' value='Editar'></td>";
        
        echo "</form>";
        echo "</tr>";
      }
      echo "</table>";
    }
    else {
      echo "<p>Nenhum Registro Encontrado</p>";
    }
  }
  function editarPessoa($id) {
    global $pessoas, $emEdicao, $pessoaEmEdicao;
    $emEdicao = true;
    $pessoaEmEdicao = $pessoas[ $id ];
  }


  function getValue($input) {
    global $pessoas, $emEdicao, $pessoaEmEdicao;
    if ($emEdicao) {
      if (isset($pessoaEmEdicao[ $input ]))
        return $pessoaEmEdicao[ $input ];
    }
    return "";
  }  

  function processarAcao($acao) 
  {
    switch($acao) {
      case 'Atualizar':
      case 'Cadastrar':
        if (validaDadosForm()) {
          $dadosPessoa = empacotaDadosForm();
          cadastrarPessoa($dadosPessoa);
        }
        break;      
      case 'Editar':
        if (isset($_POST['id']) && $_POST['id'] != '')
          editarPessoa($_POST['id']);
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
  <form action="" method="POST">
    <input type="hidden" name="id" value="<?php echo getValue('id'); ?>">
    <table>
      <tr>
        <td>Nome</td>
        <td>
          <input type="text" name="nome" value="<?php echo getValue('nome'); ?>">
        </td>
      </tr>
      <tr>
        <td>Idade</td>
        <td>
          <input type="number" name="idade" value="<?php echo getValue('idade'); ?>">
        </td>
      </tr>      
      <tr>
        <td>Telefone</td>
        <td>
          <input type="text" name="telefone" value="<?php echo getValue('telefone'); ?>">
        </td>
      </tr>
      <tr>
        <td>Cidade</td>
        <td>
          <input type="text" name="cidade" value="<?php echo getValue('cidade'); ?>">
        </td>
      </tr>
      <tr>
        <td>
          <?php if ($emEdicao) { ?>
            <input type="submit" value="Atualizar" name="acao">
            <input type="submit" value="Cancelar" name="acao">
          <?php } else { ?>
            <input type="submit" value="Cadastrar" name="acao">
            <input type="reset" value="Cancelar">
          <?php } ?>
        </td>
      </tr>      
    </table>
  </form>

  <hr>

  <?php
    imprimirTabelaPessoas();
  ?>
</body>
</html>