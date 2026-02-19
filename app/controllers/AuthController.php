<?php

require_once __DIR__ . '/../models/Conexao.php';
require_once __DIR__ . '/../models/Usuario.php';


class AuthController {

    public function login() {

        if ($_POST) {

            $email = $_POST['email'];
            $senha = $_POST['senha'];

            $usuarioModel = new Usuario(new Conexao());
            $usuario = $usuarioModel->buscarPorEmail($email);

            if ($usuario && password_verify($senha, $usuario['senha'])) {

                session_start();
                $_SESSION['usuario_id'] = $usuario['id'];
                $_SESSION['usuario'] = $usuario['nome'];
                $_SESSION['usuario_nome'] = $usuario['nome'];

                header('Location: index.php?rota=home');
                exit;
            }

            // login inválido
            $erro = true;
        }

        require '../app/views/auth/login.php';
    }

    public function home() {
        session_start();

        if (!isset($_SESSION['usuario'])) {
            header('Location: index.php?rota=login');
            exit;
        }

        require '../app/views/auth/home.php';
    }

    public function logoff() {
        session_start();
        session_destroy();
        header('Location: index.php?rota=login');
        exit;
    }
}
?>