<?php

require_once('Pessoa.php');

$p1 = new Pessoa();
$p1->setNome("Rodrigo");
$p1->setIdade(20);

$p2 = new Pessoa("Marcos", 15);

$p3 = new Pessoa("Paulo");
$p3->setIdade(30);


echo $p1->getHtml();
echo $p2->getHtml();
echo $p3->getHtml();