<?php
session_start();
$a=$_SESSION["Nome"];
$b=$_SESSION["Email"];
$c=$_SESSION["Senha"];

?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Mudar Informações</title>
<?php
    include_once 'header.php';
?>
    <div class="login-dark" style="background-image: url(&quot;none&quot;);height: 650px;background-color: gray;">
        <form method="GET" action="alterar_senha(bd).php">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>

            <div class="form-group"><input class="form-control" type="password" name="Senha" id="Senha"placeholder="Nova Senha"></div>
            <div class="form-group"><input class="form-control" type="password" name="ConfirmarSenha" id="ConfirmarSenha" placeholder="Confirmar Senha"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit" style="padding-bottom: 40px;">Alterar Senha</button></div>

        </form>
        
    </div>
<?php
    include_once 'footer.php';
?>