<?php session_start() ?>

<!doctype html />

<html lang="pt">
    <head>
        <meta name="description" content="sistema de gestao de monografias" />
        <meta charset="utf-8" />
        <meta propriety="favicon" content="imagens/logo.png" />
        <title>WikiTcc - sistema de gestao de monografias</title>
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
                <div id="areaPesquisa">
                    <form name="pesquisa_geral" method="post" action="#">
                        <input  
                            type="text" 
                            class="textBoxPesquisa" 
                            placeholder="Pesquisar..."   
                        />
                        <input type="submit" name="bntPesquisar" value="Pesquisar" class="botaoPesquisar">
                    </form>
                </div>
                
                <div class="boasVindas">
                    <p><a href="login.php">Login</a> | <a href="cadastro.php">Cadastro</a></p>
                </div>
                <br />
                
                <!--Linha divisoria Azul-->
                <div class="linhaAzul centralizarDiv"></div>
                <br />
                
                <!--Titulo principal da pagina-->
                <h1>Monografias em destaque</h1>
                
                <br />
                <h2>Procure monografias por:</h2>
                
                <table class="centralizarDiv">
                    <tr>
                        <td>
                            <label>Curso</label>
                        </td>
                        <td>
                            <select>
                                <option>
                                    Engenharia Informática
                                </option>
                                <option>
                                    Gestão
                                </option>
                                <option>
                                    ...
                                </option>
                            </select>
                        </td>
                        
                        <td>
                            <label>Nota acima de:</label>
                        </td>
                        <td>
                            <select>
                                <?php
                                    for($i=10; $i<=20; $i++){
                                        print "<option> $i </option>";
                                    }
                                ?>
                            </select>
                        </td>
                        <td>
                            <input type="submit" name="bntFiltro" value="Pesquisar" />
                        </td>
                    </tr>
                
                </table>
                <br />
                <div class="linhaAzul centralizarDiv"></div>
                <br />
                <br />
                
                
                
                <!--Miniaturas de monografias-->
                
                <div class="miniaturaTcc">
                    <a href="#">
                        <img src="imagens/monografia.png" alt="<?php print $nomeDaImagem ?>" />
                    </a>
                        <label>
                            <a href="">
                            Titulo do trabalho
                            </a>
                        </label>
                    
                </div>
                
                <div class="miniaturaTcc">
                    <img src="imagens/monografia.png" alt="<?php print $nomeDaImagem ?>" />
                    <label>
                        Título do trabalho  
                    </label>
                </div>
                
                <div class="miniaturaTcc">
                    <img src="imagens/monografia.png" alt="<?php print $nomeDaImagem ?>" />
                    <label>
                        Título do trabalho  
                    </label>
                </div>
                
                <div class="miniaturaTcc">
                    <img src="imagens/monografia.png" alt="<?php print $nomeDaImagem ?>" />
                    <label>
                        Título do trabalho  
                    </label>
                </div>
                
                <div class="miniaturaTcc">
                    <img src="imagens/monografia.png" alt="<?php print $nomeDaImagem ?>" />
                    <label>
                        Título do trabalho  
                    </label>
                </div>
                
                <div class="miniaturaTcc">
                    <img src="imagens/monografia.png" alt="<?php print $nomeDaImagem ?>" />
                    <label>
                        Título do trabalho  
                    </label>
                </div>
                
                <div class="miniaturaTcc">
                    <img src="imagens/monografia.png" alt="<?php print $nomeDaImagem ?>" />
                    <label>
                        Título do trabalho  
                    </label>
                </div>
                
                <div class="miniaturaTcc">
                    <img src="imagens/monografia.png" alt="<?php print $nomeDaImagem ?>" />
                    <label>
                        Título do trabalho  
                    </label>
                </div>
                
                
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