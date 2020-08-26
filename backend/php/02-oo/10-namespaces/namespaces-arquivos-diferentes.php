<?php 

require_once('Pessoa1.php');
require_once('Pessoa2.php');


// Modo 1
// O codigo pertence ao mesmo namespace
// nesse caso, voce compartilha todo o codigo do namespace

/*
//namespace PessoaJuridica;
namespace PessoaFisica;

$p = new Pessoa("Andre", "Rondonopolis");
echo $p;
*/

// Modo 2
// Seu codigo utiliza um namespace
/*
//use \PessoaFisica\Pessoa;
use \PessoaJuridica\Pessoa;
$p = new Pessoa("Andre", "Rondonopolis");
echo $p;
*/

// Modo 3
// Seu codigo utiliza um namespace com Alias

use \PessoaFisica\Pessoa as PessoaFisica;
$p = new PessoaFisica("Andre", "Rondonopolis");
echo $p;

use \PessoaJuridica\Pessoa as PessoaJuridica;
$p = new PessoaJuridica("Andre", "Rondonopolis");
echo $p;


$p = new \PessoaJuridica\Pessoa("Andre Jur", "Rondonopolis");
echo $p;
$p = new \PessoaFisica\Pessoa("Andre Fis", "Rondonopolis");
echo $p;