<?php
  $pessoas = array();

  function adicionaPessoa(&$pessoas, $nome, $idade, $cidade) {
    $dados = [
      'nome'   => $nome, 
      'idade'  => $idade, 
      'cidade' => $cidade
    ];
    $pessoas[] = $dados;
  }

  function imprimirPessoas($pessoas) {
    foreach($pessoas as $pessoa) {
      var_dump($pessoa);
      echo "<br>";
    }
  }

  function adicionaPessoa2($nome, $idade, $cidade) {
    global $pessoas;
    $dados = [
      'nome'   => $nome, 
      'idade'  => $idade, 
      'cidade' => $cidade
    ];
    $pessoas[] = $dados;
  }


  adicionaPessoa($pessoas, "Joao", 28, "Rondonopolis");
  adicionaPessoa($pessoas, "Maria", 22, "Rondonopolis");
  adicionaPessoa($pessoas, "Jose", 30, "Cuiba");
  adicionaPessoa($pessoas, "Paola", 40, "Caceres");
  adicionaPessoa($pessoas, "Marcos", 18, "Rondonopolis");
  adicionaPessoa2("Marcia", 18, "Rondonopolis");
  adicionaPessoa2("Tiburcio", 12, "Rondonopolis");
  adicionaPessoa2("Yolanda", 15, "Rondonopolis");

  imprimirPessoas($pessoas);
?>