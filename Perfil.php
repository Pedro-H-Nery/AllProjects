<!DOCTYPE html>
<?php
    if (!isset($_GET["usuario"])) {
        echo("Usuario não encontrado!");
        exit();
    }
    $usuario=$_GET["usuario"];
    include_once 'conexao.php';
    $con = conectaBD();
    $comando="SELECT * FROM usuario WHERE Nome='$usuario'";
    $pesquisa=mysqli_query($con,$comando);
    $row=mysqli_num_rows($pesquisa);
    if ($row>0) {
        while ($linha=mysqli_fetch_array($pesquisa)) {
            $Codigo=$linha['Cod_usuario'];
            $Nome=$linha['Nome'];
            $Email=$linha['Email'];
        }
    }
    else {
        echo("Ainda nao existe conteudo");
        exit();
    }
?>
<html>
<head>
    <title>Perfil</title>
<?php
    include_once 'header.php';
?>

<!-- Perfil -->
        <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body text-center"><img src="images/perfil.jpeg" style="width: 200px;height: 200px;">
                        <h4 class="card-title">Usuário:<?php echo "$Nome"; ?></h4>
                    </div>
                </div>
            </div>
        </div>
<br>
<center>
    <hr>
        <?php 
            $comando="SELECT * FROM projeto WHERE usuario=(SELECT Nome from usuario where Nome='$Nome')";
            $pesquisa=mysqli_query($con,$comando);
            $row=mysqli_num_rows($pesquisa);
            if ($row>0) {
                while ($linha=mysqli_fetch_array($pesquisa)) {
                    $projeto=$linha['Cod_projeto'];
                    echo "<a style='color:white;text-decoration: none;;font-size: 25px;' href='PaginaDoProjeto.php?projeto=$projeto'>Nome do Projeto: " . $linha['Nome'] . "<br>";
                    echo '<img src="data:image/jpeg;base64,'.base64_encode($linha['Imagem']).'"height="250px width="250px"/><br>';
                    echo "Linguagem: " . $linha['Linguagem'] . "<br>";
                    echo "Usuario: " . $linha['Usuario'] . "</a><br><hr>";
            }
        }
            else {
                echo("Esse usuario ainda nao fez um projeto");
                exit();
            }
        ?>
</center>

    </div>
<!-- Perfil Fim -->
<?php
    include_once 'footer.php';
?>