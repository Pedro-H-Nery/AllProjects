<?php
    if (!isset($_GET["linguagem"])) {
        $procura="nada";
        $linguagem="";
    }
    else{
        $procura="linguagem";
        $linguagem=$_GET["linguagem"];
        include_once("conexao.php");
        $con = conectaBD();
        $comando="SELECT * FROM projeto WHERE Linguagem='$linguagem'";
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
    }
?>
<html>
<head>
    <title>Projetos Da Comunidade</title>
<?php
    include_once 'header.php';
?>
        <br>
        <center>
    <!-- Projetos -->
    <p><h3>Projetos Da Comunidade</h3></p><br>
    <?php
    if (isset($_GET["linguagem"])) {
        echo "<h4>Feitos em $linguagem</h4>";
    }
    ?>
    <br>
    <?php
        //Receber o número da página
    
        $pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);       
        $pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
        
        //Setar a quantidade de itens por pagina
        $qnt_result_pg = 4;
        
        //calcular o inicio visualização
        $inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;
        if ($procura=="linguagem") {
            $result_usuarios = "SELECT * FROM projeto where Linguagem='$linguagem' LIMIT $inicio, $qnt_result_pg";
            $link="ProjetosDaComunidade.php?linguagem=$linguagem"; 
            $result_pg = "SELECT COUNT(Cod_projeto) AS num_result FROM projeto where Linguagem='$linguagem'";
        }
        else{
            $result_usuarios = "SELECT * FROM projeto LIMIT $inicio, $qnt_result_pg";
            $link="ProjetosDaComunidade.php?";
            $result_pg = "SELECT COUNT(Cod_projeto) AS num_result FROM projeto";
        }
        include_once 'conexao.php';
        $con = conectaBD();
        $resultado_usuarios = mysqli_query($con, $result_usuarios);
        echo("<hr>");
        while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
            $projeto=$row_usuario['Cod_projeto'];
            echo "<a style='color:white;text-decoration: none;;font-size: 25px;' href='PaginaDoProjeto.php?projeto=$projeto'>Nome do Projeto: " . $row_usuario['Nome'] . "<br>";
            echo '<img src="data:image/jpeg;base64,'.base64_encode($row_usuario['Imagem']).'"height="250px width="250px"/><br>';
            echo "Linguagem: " . $row_usuario['Linguagem'] . "<br>";
            echo "Usuario: " . $row_usuario['Usuario'] . "</a><br><hr>";
        }
        
        //Paginção - Somar a quantidade de usuários
        
        $resultado_pg = mysqli_query($con, $result_pg);
        $row_pg = mysqli_fetch_assoc($resultado_pg);
        //echo $row_pg['num_result'];
        //Quantidade de pagina 
        $quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);
        
        //Limitar os link antes depois
        $max_links = 2;
        echo "<a style='color:black;' href='$link&pagina=1'>Primeira</a> ";
        
        for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){
            if($pag_ant >= 1){
                echo "<a style='color:black;' href='$link&pagina=$pag_ant'>$pag_ant</a> ";
            }
        }
            
        echo "<a style='color:black;' href='#'>$pagina</a> ";
        
        for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){
            if($pag_dep <= $quantidade_pg){
                echo "<a style='color:black;' href='$link&pagina=$pag_dep'>$pag_dep</a> ";
            }
        }
        
        echo "<a style='color:black;' href='$link&pagina=$quantidade_pg'>Ultima</a>";
        
        ?>
</center>
        <!-- Projetos Fim -->
        <br><br><br><br><br>
<?php
    include_once 'footer.php';
?>