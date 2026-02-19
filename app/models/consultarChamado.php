<?php

class ConsultarChamado {

    private $conexao;

    public function __construct(Conexao $conexao) {
        $this->conexao = $conexao->conectar();
    }

    public function buscarRegistros($usuarioId) {

        $sql = "
            SELECT nome_completo, celula, membro, descricao
            FROM registros
        ";

        // Se não for ADM (usuario_id = 1), filtra apenas seus registros
        if ($usuarioId != 1) {
            $sql .= " WHERE usuario_id = :usuario_id";
        }

        $sql .= " ORDER BY nome_completo ASC";

        $stmt = $this->conexao->prepare($sql);
        
        // Apenas bind se não for ADM
        if ($usuarioId != 1) {
            $stmt->bindValue(':usuario_id', $usuarioId, PDO::PARAM_INT);
        }
        
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function resumoCelulas($usuarioId) {

        $sql = "
            SELECT celula, COUNT(*) total
            FROM registros
        ";

        // Se não for ADM, filtra apenas seus registros
        if ($usuarioId != 1) {
            $sql .= " WHERE usuario_id = :usuario_id";
        }

        $sql .= " GROUP BY celula ORDER BY celula ASC";

        $stmt = $this->conexao->prepare($sql);
        
        // Apenas bind se não for ADM
        if ($usuarioId != 1) {
            $stmt->bindValue(':usuario_id', $usuarioId, PDO::PARAM_INT);
        }
        
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_KEY_PAIR);
    }

    public function resumoMembros($usuarioId) {

        $sql = "
            SELECT membro, COUNT(*) total
            FROM registros
        ";

        // Se não for ADM, filtra apenas seus registros
        if ($usuarioId != 1) {
            $sql .= " WHERE usuario_id = :usuario_id";
        }

        $sql .= " GROUP BY membro";

        $stmt = $this->conexao->prepare($sql);
        
        // Apenas bind se não for ADM
        if ($usuarioId != 1) {
            $stmt->bindValue(':usuario_id', $usuarioId, PDO::PARAM_INT);
        }
        
        $stmt->execute();

        $resultado = ['sim' => 0, 'nao' => 0];

        foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $r) {
            if ($r['membro'] == 1) {
                $resultado['sim'] = $r['total'];
            } else {
                $resultado['nao'] = $r['total'];
            }
        }

        return $resultado;
    }
}
