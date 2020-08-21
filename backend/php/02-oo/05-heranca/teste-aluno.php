<?php

require_once('Aluno.php');

$a1 = new Aluno("Mauro", 21, 2018123456);
$a2 = new Aluno("Silvia", 31, 2017654987);
$a3 = new Aluno("Adriano", 41, 2019321897);

$a1->addLinguagem("C++");
$a1->addLinguagem("Python");
$a1->addLinguagem("Pascal");

$a2->addLinguagem("C");
$a2->addLinguagem("Lisp");

$a3->addLinguagem("Javascript");
$a3->addLinguagem("Typescript");

echo $a1->getHtml();
echo $a2->getHtml();
echo $a3->getHtml();

var_dump($a1);
var_dump($a2);
var_dump($a3);



