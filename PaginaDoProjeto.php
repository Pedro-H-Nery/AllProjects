<?php
    if (!isset($_GET["projeto"])) {
        echo("Pagina não encontrada!");
        exit();
    }
    $projeto=$_GET["projeto"];
    include_once 'conexao.php';
    $con = conectaBD();
    $comando="SELECT * FROM projeto WHERE Cod_projeto='$projeto'";
    $pesquisa=mysqli_query($con,$comando);
    $row=mysqli_num_rows($pesquisa);
    if ($row>0) {
        while ($linha=mysqli_fetch_array($pesquisa)) {
            $Codigo=$linha['Cod_projeto'];
            $Nome=$linha['Nome'];
            $Usuario=$linha['Usuario'];
            $Linguagem=$linha['Linguagem'];
            $Data=$linha['Data'];
            $Programa=$linha['Programa'];
            $Detalhes=$linha['Detalhes'];
        }
    }
    else {
        echo("Ainda nao existe conteudo");
        echo ("<a href=index.php><button>Voltar</button></a>");
        exit();
    }
?>
<html>
<head>
    <title><?php echo($Nome);?></title>
    <style type="text/css">
        .espaçamento{
            padding: 20px;
        }
    </style>
<?php
    include_once 'header.php';
?>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v5.0"></script>
        <br>
    <center>
<div id="conteudo" style="background-color: lightgray;width: 60%;padding-left: 20px;padding-right: 20px;padding-top: 20px;margin: auto;">
    <table border>
        <tr>
            <td class="espacamento">
                <h2 style="float:left "><?php echo($Nome);?></h2>
            </td>
            <td class="espacamento">
                <h2 style="float: right;">Codigo feito em <?php echo($Linguagem);?></h2>
            </td>
        </tr>
        <tr>
            <td class="espacamento">
                <h3>Código do Projeto</h3>
                            <textarea disabled cols="50" rows="15" style="padding-left: 15px;padding-top: 15px;resize: none;"><?php echo($Programa);?>
                            </textarea>
                <br>
                <br>
                <?php 
                    if ($Codigo==1) {
                        echo "<center><a href='garra.php?logado=1'><button type='submit'>Teste o projeto</button></a></center>";
                    }
                ?>
            </td>
            <td class="espacamento">
                <table border>
                    <tr>
                        <td>
                            <?php echo("<h4>Autor do Código:<a href='Perfil.php?usuario=$Usuario'>");echo($Usuario);echo("</a>
                            </h4>"); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4>Data de Criação:<?php echo($Data);?>
                            </h4>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Informações Adicionais:</p>
                            <?php
                                echo("<textarea disabled cols='30' rows='18' placeholder='$Detalhes' style='resize: none;border: none;'></textarea>");
                                ?>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <br>
</div>
        </center>
        <br>
        <div id="conteudo" style="background-color: lightgray;width: 60%;padding-left: 20px;padding-right: 20px;padding-top: 20px;margin: auto;">
            <center>
                <p><h2>Diga o que achou do projeto</h2></p>
                <div class="fb-comments" data-width="" data-numposts="5"></div>
                <br>
                <br>
            </div>
            </center>
        </div>
        <br><br><br><br><br>
<?php
    include_once 'footer.php';
?>