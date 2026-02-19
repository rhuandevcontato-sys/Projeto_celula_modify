<?php

class Usuario {

    private $conexao;

    public function __construct(Conexao $conexao) {
        $this->conexao = $conexao->conectar();
    }

    public function buscarPorEmail($email) {

        $query = '
            SELECT * FROM usuarios
            WHERE email = :email
        ';

        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':email', $email);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function cadastrar($nome, $email, $senha) {

        $query = '
            INSERT INTO usuarios (nome, email, senha)
            VALUES (:nome, :email, :senha)
        ';

        $stmt = $this->conexao->prepare($query);

        $stmt->bindValue(':nome', $nome);
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':senha', password_hash($senha, PASSWORD_DEFAULT));

        return $stmt->execute();
    }

    public function validarLogin($email) {

        $query = '
            SELECT * FROM usuarios
            WHERE email = :email
        ';

        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':email', $email);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
