<?php

require_once __DIR__ . '/../models/Conexao.php';
require_once __DIR__ . '/../models/Usuario.php';

class UsuarioController {

    public function login() {

        // SE FOR POST → processa login
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $conexao = new Conexao();
            $usuarioModel = new Usuario($conexao);

            $usuario = $usuarioModel->buscarPorEmail($_POST['email']);

            if ($usuario && password_verify($_POST['senha'], $usuario->senha)) {

                session_start();
                $_SESSION['usuario'] = $usuario->id;
                $_SESSION['usuario_nome'] = $usuario->nome;

                header('Location: index.php?rota=home');
                exit;
            }

            // erro de login
            $erro = true;
        }

        // SE FOR GET → mostra a view
        require __DIR__ . '/../views/auth/login.php';
    }

    public function cadastrar() {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $conexao = new Conexao();
            $usuario = new Usuario($conexao);

            $usuario->cadastrar(
                $_POST['nome'],
                $_POST['email'],
                $_POST['senha']
            );

            header('Location: index.php?rota=login');
            exit;
        }

        require __DIR__ . '/../views/auth/cadastro.php';
    }
}
