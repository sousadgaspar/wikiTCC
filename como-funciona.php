<!doctype html />

<html lang="pt">
    <head>
        <meta name="description" content="Cadastro - sistema de gestao de monografias" />
        <meta charset="utf-8" />
        <meta propriety="favicon" content="imagens/logo.png" />
        <title>Como funciona - WikiTcc</title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css" />
    </head>
    
    <body>
        <div id="conteinerPrincipal">
           <?php
                //barra topo
                require_once('template/topo.php');
            ?>
            
            <?php
                //Barra lateral
                require_once('template/eside.php');
            ?>
            
            <!--Zona de conteudo - Zona principal-->
            <section id="zonaConteudo">
            
                <div class="boasVindas">
                    <p>
                        <a href="index.php">Voltar o inicio</a> | 
                        <a href="login.php">Login</a> | 
                        <a href="cadastro.php">Cadastro</a>
                    </p>
                </div>
                <br />
                
                <!--Linha divisoria Azul-->
                <div class="linhaAzul centralizarDiv"></div>
                <br />
                <!--Titulo principal da pagina-->
                <h1>Como o WikiTcc funciona?</h1>
                <br>
                <!--Linha divisoria Azul-->
                <div class="linhaAzul centralizarDiv"></div>
                <br />
                <p>
                    O WikiTcc é um aplicativo web que ajuda na hora de procurar por um trabalho de conclusão de curso realizada na Universidade Técnica de Angola, Foi consebildo principalmente para arquivar os trabalhos defendidos pelos estudantes da mesma instituição, servindo como base para investigação de fraudes, e continuidade de estudos realizados nwa Utanga.
                </p>
            </section>
            
            <!--Corrigir Flutuacao-->
            <div class="corrigirFlutuacao"></div>
            <?php
                //footer
                require_once('template/footer.php');
            ?>
        </div>
    </body>
</html>