<?php
session_start();
$a=$_SESSION["Nome"];
?>
<html>
<head>
    <title>Criação de Projetos</title>
<?php
    include_once 'header.php';
?>
        <br>
    <!-- Criação de Projetos -->
    <center>
        <div id="conteudoFundoCinza">
            <form action="Projetos(bd).php" method="POST" enctype="multipart/form-data">
                <center>
                    <label><h1>Crie e Compartilhe seu Projeto</h1></label>
                    <br>
                    <input type="text" name="NomeProjeto" placeholder="Nome do Projeto" required>
                    <select name="Linguagem">
                        <option value="">Linguagem de Programação</option>
                        <option value="Python">Python</option>
                        <option value="Java">Java</option>
                        <option value="HTML">HTML</option>
                        <option value="JavaScript">JavaScript</option>
                        <option value="C++">C++</option>
                        <option value="Arduino">Arduino</option>
                    </select>
                    <br>
                    <br>
                    <label><h2>Digite o Codigo(Organizado em partes diferentes)</h2></label>
                    <br>
                    <textarea cols="130" rows="20" placeholder="Ex:
Programa Principal==>
Codigo
---------------------------
Classes==>
Codigo
---------------------------" name="Programa" required></textarea>
                    <br>
                    <br>
                    <label>Selecione Imagens do Projeto</label>
                    <input multiple="" name="img[]" type="file" accept=".jpg,.png,.gif" max="5" required/>
                    <br><br>
                    <textarea cols="130" rows="5" placeholder="Digite aqui alguma informação adicional sobre o programa." name="Detalhes"></textarea>
                    <br>
                    <br>
                    <label><h2>Antes de Enviar</h2></label>
                    <br>
                    Revise seu código para ter certeza que tudo está funcionando e que nao tem nada de importante faltando.
                    <br><br>
                    <button name="submit" type="submit">Enviar Projeto</button>
                </center>

            </form>
            <br>
        </div>
    </center>
        <!-- Criação de Projetos Fim -->
        <br><br><br><br><br>
<?php
    include_once 'footer.php';
?>