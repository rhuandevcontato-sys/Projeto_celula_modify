<?php

class Chamado {

    private $usuario_id;
    private $nome_completo;
    private $celula;
    private $membro;
    private $descricao;

    private $conexao;

    public function __construct(Conexao $conexao) {
        $this->conexao = $conexao->conectar(); // PDO REAL
    }

    public function __get($atributo) {
        return $this->$atributo;
    }

    public function __set($atributo, $valor) {
        $this->$atributo = $valor;
        return $this;
    }


    public function registrar($usuario_id, $nome_completo, $celula, $membro, $descricao) {

    $query = "
        INSERT INTO registros 
        (usuario_id, nome_completo, celula, membro, descricao)
        VALUES 
        (:usuario_id, :nome_completo, :celula, :membro, :descricao)
    ";

    $stmt = $this->conexao->prepare($query);

    $stmt->bindValue(':usuario_id', $usuario_id, PDO::PARAM_INT);
    $stmt->bindValue(':nome_completo', $nome_completo);
    $stmt->bindValue(':celula', $celula);
    $stmt->bindValue(':membro', $membro, PDO::PARAM_STR);
    $stmt->bindValue(':descricao', $descricao);
    return $stmt->execute();

}

}

?>