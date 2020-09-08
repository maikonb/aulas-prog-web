<?php 
require_once(__DIR__ . '/../model/Fornecedor.php');
require_once(__DIR__ . '/../db/Db.php');

// Classe para persistencia de Fornecedor 
// DAO - Data Access Object
class DaoFornecedor {
    
  private $connection;

  public function __construct(Db $connection) {
      $this->connection = $connection;
  }
  
  public function porId(int $id): ?Fornecedor {
    $sql = "SELECT nome, endereco FROM fornecedores where id = ?";
    $stmt = $this->connection->prepare($sql);
    $fornecedor = null;
    if ($stmt) {
      $stmt->bind_param('i',$id);
      if ($stmt->execute()) {
        $nome = '';
        $stmt->bind_result($nome, $endereco);
        $stmt->store_result();
        if ($stmt->num_rows == 1 && $stmt->fetch()) {
          $fornecedor = new Fornecedor($id, $nome, $endereco);
        }
      }
      $stmt->close();
    }
    return $fornecedor;
  }

  public function inserir(Fornecedor $fornecedor): bool {
    $sql = "INSERT INTO fornecedores (nome, endereco) VALUES(?, ?)";
    $stmt = $this->connection->prepare($sql);
    $res = false;
    if ($stmt) {
      $nome = $fornecedor->getNome();
      $endereco = $fornecedor->getEndereco();
      $stmt->bind_param('ss', $nome, $endereco);
      if ($stmt->execute()) {
          $id = $this->connection->getLastID();
          $fornecedor->setId($id);
          $res = true;
      }
      $stmt->close();
    }
    return $res;
  }

  public function remover(Fornecedor $fornecedor): bool {
    $sql = "DELETE FROM forncedores where id=?";
    $id = $fornecedor->getId(); 
    $stmt = $this->connection->prepare($sql);
    $ret = false;
    if ($stmt) {
      $stmt->bind_param('i',$id);
      $ret = $stmt->execute();
      $stmt->close();
    }
    return $ret;
  }

  public function atualizar(Fornecedor $fornecedor): bool {
    $sql = "UPDATE fornecedores SET nome = ?, endreco=? WHERE id = ?";
    $stmt = $this->connection->prepare($sql);
    $ret = false;      
    if ($stmt) {
      $nome = $fornecedor->getNome();
      $endereco = $fornecedor->getEndereco();
      $stmt->bind_param('ss',$nome, $endereco);
      $ret = $stmt->execute();
      $stmt->close();
    }
    return $ret;
  }

  
  public function todos(): array {
    $sql = "SELECT id, nome, endereco from fornecedores";
    $stmt = $this->connection->prepare($sql);
    $fornecedores = [];
    if ($stmt) {
      if ($stmt->execute()) {
        // $id = 0; $nome = ''; $endereco = '';
        $stmt->bind_result($id, $nome, $endereco);
        $stmt->store_result();
        while($stmt->fetch()) {
          $fornecedores[] = new Departamento($id, $nome, $endereco);
        }
      }
      $stmt->close();
    }
    return $fornecedores;
  }

};

