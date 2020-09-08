<?php

class Fornecedor {
    private $id;
    private $nome;
    private $endereco;

    public function __construct(string $nome='', string $endereco='', int $id=-1) {
        $this->id = $id;
        $this->nome = $nome;
        $this->endereco = $endereco;
    }

    public function getId() {
        return $this->id;
    }
    
    public function setId($id) {
        $this->id = $id;
    }

    public function getNome() {
        return $this->nome;
    }
    
    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getEndereco() {
        return $this->endereco;
    }
    
    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }
}