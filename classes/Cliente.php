<?php

require 'Conexao.php';

class Cliente {
    private $conexao;
    public function __construct() {
        $this->conexao = Conexao::getConexao();
    }
  
}
