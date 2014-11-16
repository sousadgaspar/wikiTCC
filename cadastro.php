<!doctype html />

<html lang="pt">
    <head>
        <meta name="description" content="Cadastro - sistema de gestao de monografias" />
        <meta charset="utf-8" />
        <meta propriety="favicon" content="imagens/logo.png" />
        <title>Cadastro - WikiTcc</title>
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
                <!--<div id="areaPesquisa">
                    <form name="pesquisa_geral" method="post" action="#">
                        <input  
                            type="text" 
                            class="textBoxPesquisa" 
                            placeholder="Pesquisar..."   
                        />
                        <input type="submit" name="bntPesquisar" value="Pesquisar" class="botaoPesquisar">
                    </form>
                </div>-->
                
                <div class="boasVindas">
                    <p><a href="login.php">Login</a> | <a href="cadastro.php">Cadastro</a></p>
                </div>
                <br />
                
                <!--Linha divisoria Azul-->
                <div class="linhaAzul centralizarDiv"></div>
                
                <div class="boxLogin">
                    <br />
                
                    <!--Titulo principal da pagina-->
                    <h1>Cadastro</h1>
                    <br>
                    <form name="formCadastro" method="post" action="controllerCadastro.php" >
                        <table class="centralizarDiv">
                            <tr>
                                <td>
                                    <label for="nome" class="labelPadrao">Nome</label>
                                </td>
                                <td>
                                    <input type="text" name="nome" class="textBoxPadrao" placeholder="Seu nome" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="senha">Senha</label>
                                </td>
                                <td>
                                     <input type="password" name="senha" class="textBoxPadrao" placeholder="Sua senha" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Sexo</label>
                                </td>
                                <td>
                                    <select>
                                        <option>
                                            Masculino
                                        </option>
                                        <option>
                                            Feminino
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Categoria</label>
                                </td>
                                <td>
                                    <select>
                                        <option>
                                            Aluno
                                        </option>
                                        <option>
                                            Funcionario
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Número</label>
                                </td>
                                <td>
                                    <input type="number" name="cod_usuario" class="textBoxPadrao" placeholder="Nº Aluno | Funcio..." />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    
                                </td>
                                <td>
                                    <input type="submit" name="bntLogin" value="Entrar" class="buttonNormal" />
                                </td>
                            </tr>
                        </table>
                    </form>
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