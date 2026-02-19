<?php

require_once '../app/controllers/AuthController.php';
require_once '../app/controllers/UsuarioController.php';
require_once '../app/controllers/ChamadoController.php';
require_once '../app/controllers/ConsultaController.php';

$rota = $_GET['rota'] ?? 'login';

switch ($rota) {

    case 'login':
        (new AuthController())->login();
        break;

    case 'home':
        (new AuthController())->home();
        break;

    case 'logoff':
        (new AuthController())->logoff();
        break;

    case 'cadastrar_usuario':
        (new UsuarioController())->cadastrar();
        break;

    case 'abrir_chamado':
        (new ChamadoController())->abrir();
        break;

    case 'registrar_chamado':
        (new ChamadoController())->registrar();
        break;

    case 'consultar_chamado':
        (new ConsultaController())->consultar();
        break;

    default:
        (new AuthController())->login();
}

?>



