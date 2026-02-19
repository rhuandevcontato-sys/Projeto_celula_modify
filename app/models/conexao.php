<?php

class Conexao {

    private $host = 'localhost';
    private $dbname = 'projeto_celula';
    private $user = 'root';
    private $pass = '';

    public function conectar() {
        try {

            $conexao = new PDO(
                "mysql:host={$this->host};dbname={$this->dbname};charset=utf8",
                $this->user,
                $this->pass,
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // 👈 AQUI
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES => false
                ]
            );

            return $conexao;

        } catch (PDOException $e) {
            echo '<pre>Erro de conexão: ' . $e->getMessage() . '</pre>';
            exit;
        }
    }
}

?>