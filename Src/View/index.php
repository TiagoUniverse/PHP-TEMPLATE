<?php
/*
 * ╔═══════════════════════════════════════════════════════════════════════════════════════════════════════════════════╗
 * ║                                                Senac - Aceite                                                     ║
 * ║  ┌─────────────────────────────────────────────────────────────────────────────────────────────────────────────┐  ║
 * ║  │ NOTA: Todas as informações contidas neste documento são propriedade do SENAC PERNAMBUCO e seus fornecedores,│  ║
 * ║  │ caso existam. Os conceitos intelectuais e técnicos contidos são propriedade do SENAC PERNAMBUCO e seus      │  ║
 * ║  │ fornecedores e podem estar cobertos pelas patentes nacionais, e estão protegidas por segredo comercial ou   │  ║
 * ║  │ lei de direitos autorais. Divulgação desta informação ou reprodução deste material é estritamente proibido, │  ║
 * ║  │ a menos que seja obtida permissão prévia por escrito do SENAC PERNAMBUCO.                                   │  ║
 * ║  └─────────────────────────────────────────────────────────────────────────────────────────────────────────────┘  ║
 * ║  ┌─────────────────────────────────────────────────────────────────────────────────────────────────────────────┐  ║
 * ║  │ @description: HomePage                                                                                      │  ║
 * ║  │ @class: Tela Home                                                                                           │  ║
 * ║  │ @dir: View/                                                                                                 │  ║
 * ║  │ @author: Tiago César da Silva Lopes                                                                         │  ║
 * ║  │ @date:                                                                                                      │  ║
 * ║  └─────────────────────────────────────────────────────────────────────────────────────────────────────────────┘  ║
 * ║═══════════════════════════════════════════════════════════════════════════════════════════════════════════════════║
 * ║                                                     UPGRADES                                                      ║
 * ║  ┌─────────────────────────────────────────────────────────────────────────────────────────────────────────────┐  ║
 * ║  │ 1. @date:                                                                                                   │  ║
 * ║  │    @description:                                                                                            │  ║
 * ║  └─────────────────────────────────────────────────────────────────────────────────────────────────────────────┘  ║
 * ║                                                                                                                   ║
 * ╚═══════════════════════════════════════════════════════════════════════════════════════════════════════════════════╝
 */

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela inicial</title>
    <meta name="theme-color" content="#ffffff">
    <meta name="description" content="Sistema de termo de aceite" />
    <meta name="keywords" content="sistema" />
    <!-- CSS -->
    <link rel="stylesheet" href="../../Assets//Css//Header.css" />
    <link rel="stylesheet" href="../../Assets//Css//body.css" />
    <link rel="stylesheet" href="../../Assets//Css//navbar.css" />
    <link rel="stylesheet" href="../../Assets//Css//Content.css" />
    <link rel="stylesheet" href="../../Assets//Css//SideBar.css" />
    <link rel="stylesheet" href="../../Assets//Css//footer.css" />
    <!--Boostrap link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="manifest" href="/Termo-de-compromisso/manifest.json">
</head>

<body>

    <?php
    require_once "Recursos/Navegacao.php";

    ?>
    <div class="row">
        <section>
            <article class="card">
                <div class="row g-0 text-center">
                    <div class="col-6 col-md-4">
                        <img src="../../Assets/Img/funcionarios.png" alt="Icone da solicitação de acesso" width="200" height="200" id="content_icon">
                    </div>
                    <div class="col-sm-6 col-md-8" id="content_inicio">
                        <h2 class="content_inicioText">Colaboradores</h2>
                        <h4 class="content_inicioText">Clique no seu registro abaixo e confirme a leitura.</h4>
                    </div>
                </div>
            </article>

            <article class="card">
                <h1>Seja bem vindo!</h1>
            </article>
        </section>
    </div>
    
    <footer>
        © Todos os Direitos Reservados - 2022.
    </footer>


    <script>
        if ('serviceWorker' in navigator) {
            navigator.serviceWorker.register('/Termo-de-compromisso/sw.js', {
                scope: '/Termo-de-compromisso/'
            });
        }
    </script>

</body>

</html>