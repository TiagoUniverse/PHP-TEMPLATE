<?php

    //A sessão inicia e deixa essas variáveis de sessão disponível enquanto estiver ocorrendo 
    //Meu servidor: "desktop-f2g3ks7\sqlexpress"
    //Servidor do Senac: SQLSERVER
    date_default_timezone_set('America/Recife');
    
    session_start();
    $_SESSION['URL_SYSTEM']  = "C:\\xampp\\htdocs\\PHP-Template";
    $_SESSION['SERVER']      = "SQLSERVER";
    $_SESSION['DB_USER']     = "tiagolopes";
    $_SESSION['DB_PASSWORD'] = "gti2022";
    $_SESSION['DB_NAME']     = "Placement";


