<?php

abstract class MeuTipo {
  protected $valor;
  function __construct($valor)
  {
    $this->valor = $valor;
  }

  abstract function somar($v);
  abstract function imprimir();
}

class MeuTipoString extends MeuTipo {
  function __construct($valor) {
    parent::__construct($valor);
  }

  function somar($v) {
    if(is_string($v))
      $this->valor .= $v;
  }
  function imprimir() {
    echo "<p>Minha String: $this->valor</p>";
  }
}


class MeuTipoInteiro extends MeuTipo {
  function __construct($valor) {
    parent::__construct($valor);
  }

  function somar($v) {
    if (is_int($v))
      $this->valor += $v;
  }
  function imprimir() {
    echo "<p>Meu Inteiro: $this->valor</p>";
  }
}

function somar(MeuTipo $obj, $valor) {
  $obj->somar($valor);
}

$s = new MeuTipoString("Ola");
somar($s, " Mundo");
somar($s, "!!!");
$s->imprimir();

$i = new MeuTipoInteiro(100);
somar($i, 100);
somar($i, 200);
$i->imprimir();