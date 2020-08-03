<?php

  // $_GET
  // $_POST
  echo "<p>POST: </p>";
  print_r($_POST);
  echo "<p>GET: </p>";
  print_r($_GET);

  $form = [];

  if (count($_POST) > 0)
    $form = $_POST;
  else if (count($_GET) > 0)
    $form = $_GET;
  
  echo "<p>Dados do formulário: </p>";
  print_r($form);

  