<?php 

class Contato {
  private $nome, $email, $telefone;
  public function __construct($nome, $email, $telefone)
  {
    $this->nome = $nome;
    $this->email = $email;
    $this->telefone = $telefone;
  }
  public function __toString()
  {
    return "<p>$this->nome</p>" .
      "<ul>" . 
      "<li>Email: $this->email </li>" .
      "<li>Telefone: $this->telefone </li>" .
      "</ul>";
  }
}

$c1 = new Contato("Marcelo", "marcelo@gmail.com", "66 987878788");
$c2 = new Contato("Adriana", "adriana@gmail.com", "11 998798879");
$c3 = new Contato("Sirlei", "sirlei@gmail.com", "45 787878785");

echo $c1;
echo $c2;
echo $c3;