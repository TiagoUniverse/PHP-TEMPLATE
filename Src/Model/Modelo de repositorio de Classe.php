<?php

/**
 * ╔═══════════════════════════════════════════════════════════════════════════════════════════════════════════════════╗
 * ║                                                   NOME DO SISTEMA                                                 ║
 * ║  ┌─────────────────────────────────────────────────────────────────────────────────────────────────────────────┐  ║
 * ║  │ NOTA: Todas as informações contidas neste documento são propriedade do SENAC PERNAMBUCO e seus fornecedores,│  ║
 * ║  │ caso existam. Os conceitos intelectuais e técnicos contidos são propriedade do SENAC PERNAMBUCO e seus      │  ║
 * ║  │ fornecedores e podem estar cobertos pelas patentes nacionais, e estão protegidas por segredo comercial ou   │  ║
 * ║  │ lei de direitos autorais. Divulgação desta informação ou reprodução deste material é estritamente proibido, │  ║
 * ║  │ a menos que seja obtida permissão prévia por escrito do SENAC PERNAMBUCO.                                   │  ║
 * ║  └─────────────────────────────────────────────────────────────────────────────────────────────────────────────┘  ║
 * ║  ┌─────────────────────────────────────────────────────────────────────────────────────────────────────────────┐  ║
 * ║  │ @description                                                                                                │  ║
 * ║  │ @class                                                                                                      │  ║
 * ║  │ @dir                                                                                                        │  ║
 * ║  │ @author                                                                                                     │  ║
 * ║  │ @date                                                                                                       │  ║
 * ║  └─────────────────────────────────────────────────────────────────────────────────────────────────────────────┘  ║
 * ║═══════════════════════════════════════════════════════════════════════════════════════════════════════════════════║
 * ║                                                     UPGRADES                                                      ║
 * ║  ┌─────────────────────────────────────────────────────────────────────────────────────────────────────────────┐  ║
 * ║  │ 1. @date:                                                                                                   │  ║
 * ║  │    @description                                                                                             │  ║
 * ║  └─────────────────────────────────────────────────────────────────────────────────────────────────────────────┘  ║
 * ║                                                                                                                   ║
 * ╚═══════════════════════════════════════════════════════════════════════════════════════════════════════════════════╝
 */

namespace folder;

use function Recursos\conexao_declaracao;

class Classe_repositorio
{

    public function cadastrar()
    {
        $declaracao = "";

        conexao_declaracao($declaracao);
    }

    public function consultar()
    {
        $declaracao = "";

        $conexao = array("Database" => $_SESSION['DB_NAME'], "CharacterSet" => "UTF-8", "UID" =>  $_SESSION['DB_USER'], "PWD" => $_SESSION['DB_PASSWORD']);
        $link = sqlsrv_connect($_SESSION['SERVER'], $conexao);

        $stmt = sqlsrv_query($link, $declaracao);

        if ($stmt == false) {
            return false;
        }

        $Classe = new Classe();
        while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
            //Classe
            $Classe->setId($row['id']);
            $Classe->setNome_criador($row['nome_criador']);
            $Classe->setStatus($row['status']);
            $Classe->setCreated($row['created']->format("Y-m-d"));
            //$Classe->setUpdated($row['updated']->format("Y-m-d"));
            $Classe->setDescription($row['description']);
        }
        return $Classe;
    }

    public function alterar()
    {
        $declaracao = "";

        conexao_declaracao($declaracao);
    }

    public function deletar()
    {
        $declaracao = "";

        conexao_declaracao($declaracao);
    }
}
