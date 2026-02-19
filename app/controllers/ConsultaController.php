<?php

require_once __DIR__ . '/../models/Conexao.php';
require_once __DIR__ . '/../models/consultarChamado.php';

class ConsultaController {

    public function consultar() {

        session_start();

        if (!isset($_SESSION['usuario_id'])) {
            header('Location: index.php?rota=login');
            exit;
        }

        $filtro = $_GET['filtro'] ?? 'completo';

        $model = new ConsultarChamado(new Conexao());

        // Buscar dados do modelo
        $registros = $model->buscarRegistros($_SESSION['usuario_id']);
        $celulasSummary = $model->resumoCelulas($_SESSION['usuario_id']);
        $membrosSummary = $model->resumoMembros($_SESSION['usuario_id']);

        // Processar dados - LÓGICA DE NEGÓCIO aqui
        $celulaCount = [];
        foreach ($registros as $registro) {
            if (!isset($celulaCount[$registro['celula']])) {
                $celulaCount[$registro['celula']] = 0;
            }
            $celulaCount[$registro['celula']]++;
        }

        // Filtrar registros por membro
        $registrosFiltrados = array_filter($registros, function($r) use ($filtro) {
            if ($filtro == 'sim') return $r['membro'] == 1;
            if ($filtro == 'nao') return $r['membro'] == 0;
            return true; // completo
        });

        // Reindexar o array após filtrar (importante!)
        $registrosFiltrados = array_values($registrosFiltrados);

        // Preparar dados para a view
        $dados = [
            'celulaCount' => $celulaCount,
            'membrosSummary' => $membrosSummary,
            'registrosFiltrados' => $registrosFiltrados,
            'filtro' => $filtro
        ];

        require '../app/views/chamados/consultar.php';
    }
}
