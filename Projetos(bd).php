<?php
session_start();
//Conectando com a Base de Dados
include_once 'conexao.php';
$con = conectaBD();

if(isset($_POST['Detalhes'])){
  $Detalhes=addslashes($_POST["Detalhes"]);
}
else{
	$Detalhes="Sem detalhes no projeto";
}

//Realizando pesquisa
$Usuario=addslashes($_SESSION["Nome"]);
$Linguagem=$_POST["Linguagem"];
$Nome=addslashes($_POST["NomeProjeto"]);
$Data=date("Y/m/d");
$Programa=addslashes($_POST["Programa"]);
$file_tmp = $_FILES['img']['tmp_name'];
$temp = addslashes(file_get_contents($file_tmp[0]));
$Detalhes=addslashes($_POST["Detalhes"]);
$comando="INSERT INTO projeto(Usuario,Linguagem,Nome,Data,Programa,Detalhes,Imagem) VALUES ('$Usuario','$Linguagem','$Nome','$Data','$Programa','$Detalhes','$temp')";
$res = mysqli_query($con,$comando);
echo "<script>window.location='Home(Logado).php';alert('Projeto Criado Com Sucesso');</script>";
mysqli_close($con);
?>

