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

    public function adicionar($nomCli, $enCli, $telCli) {
        $sql = 'INSERT INTO cliente (nomCli, endCli, telCli) VALUES (?, ?, ?);';
         $q = $this->conexao->prepare($sql);
         $q->bindParam(1, $nomCli);
         $q->bindParam(2, $enCli);
         $q->bindParam(3, $telCli);
         $q->execute();
    }

}
