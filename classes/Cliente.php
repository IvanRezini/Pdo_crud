<?php

require 'Conexao.php';

class Cliente {
    private $conexao;
    public function __construct() {
        $this->conexao = Conexao::getConexao();
    }
    public function listar() {
        $sql = 'select * from cliente;';
        $q = $this->conexao->prepare($sql);
        $q->execute();
        return $q;
    }
  
}
