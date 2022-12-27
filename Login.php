<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
<?php
    include_once 'header.php';
?>
        <br>
    <!-- Login -->
        <div id="conteudo">
            <br><br><br><br><br>
            <form action="login(bd).php" method="GET">
                <center>
                    <label><h1>Entre com a sua conta no All Projects</h1></label>
                    <br>
                    <input type="email" name="Email" placeholder="E-mail" required>
                    <br>
                    <input type="password" name="Senha" placeholder="Senha" required>
                    <br>
                    <br>
                    <button type="submit">Entrar</button>
                    <button type="reset">Limpar</button>
                </center>
            </form>
            <br>
            <center>
                <a href="Cadastro.php" id="aLogin">Cadastre-se aqui</a>
                <br>
                <br>
            </center>
        </div>
        <!-- Login Fim -->
        <br><br><br><br><br>
<?php
    include_once 'footer.php';
?>