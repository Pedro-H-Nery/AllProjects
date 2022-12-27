<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
<?php
    include_once 'header.php';
?>
		<br>
    <!-- Cadastro -->
		<div id="conteudo">
            <br><br><br><br><br>
            <form action="Cadastro(bd).php" method="POST">
                <center>
                    <label><h1>Crie a sua conta do All Projects</h1></label>
                    <br>
                    <input type="text" name="Nome" placeholder="Nome" minlength="10" maxlength="50" required>
                    <input type="email" name="Email" placeholder="E-mail" maxlength="50" required>
                    <br>
                    <input type="password" name="Senha" placeholder="Senha" id="Senha" minlength="7" maxlength="50" required>
                    <input type="password" name="ConfirmarSenha" placeholder="Confirme a Senha" id="ConfirmarSenha" minlength="7" maxlength="20" required oninput="validaSenha(this)">
                    <br>
                    <br>
                    <button type="submit">Criar Conta</button>
                    <button type="reset">Limpar</button>
                </center>
            </form>
            <br>
        </div>
        <!-- Cadastro Fim -->
		<br><br><br><br><br>
<?php
    include_once 'footer.php';
?>