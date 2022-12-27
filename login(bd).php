<?php
session_start();

//Conectando com a Base de Dados
include_once 'conexao.php';
$con = conectaBD();

//Realizando pesquisa
if(isset($_GET['Nome'])){
	$Nome=$_GET["Nome"];

}
if(isset($_GET['Email'])){
	$Email=$_GET["Email"];
}
if(isset($_GET['Senha'])){
	$Senha=$_GET["Senha"];
}

$comando="SELECT * FROM usuario where Email='$Email' and Senha='$Senha'";
$res = mysqli_query($con,$comando);
$resgistro = mysqli_fetch_array($res);	
if ($Email==$resgistro["Email"] and $Senha==$resgistro["Senha"]){
	$_SESSION["Cod_usuario"]=$resgistro["Cod_usuario"];
	$_SESSION["Nome"]=$resgistro["Nome"];
	$_SESSION["Email"]=$resgistro["Email"];
	$_SESSION["Senha"]=$resgistro["Senha"];
	header('location:Home(Logado).php');

}
else{
	echo "<script>window.location='Login.php';alert('Usuario ou senha incorretos');</script>";
}
mysqli_close($con);
?>