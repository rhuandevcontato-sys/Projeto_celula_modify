<?php

require_once __DIR__ . '/../models/Conexao.php';
require_once __DIR__ . '/../models/Chamado.php';

class ChamadoController {

    public function abrir() {
        session_start();

        if (!isset($_SESSION['usuario'])) {
            header('Location: index.php?rota=login');
            exit;
        }

        require '../app/views/chamados/abrir.php';
    }

    public function registrar() {

    session_start();

    if (!isset($_SESSION['usuario'])) {
        die('Usuário não autenticado');
    }

     $usuario_id = $_SESSION['usuario_id'];

    $usuario_id = $_SESSION['usuario_id'];
    $nome       = $_POST['nome_completo']; // ou nome_completo (se padronizar)
    $celula     = $_POST['celula'];
    $membro     = $_POST['membro'];
    $descricao  = $_POST['descricao'];

    $conexao = new Conexao();
    $chamado = new Chamado($conexao);

    if ($chamado->registrar($usuario_id, $nome, $celula, $membro, $descricao)) {
        header('Location: index.php?rota=abrir_chamado&sucesso=1');
    } else {
        header('Location: index.php?rota=abrir_chamado&erro=1');
    }
    exit;
}




}

?>