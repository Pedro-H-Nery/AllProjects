<?php
session_start();
//Conectando com a Base de Dados
include_once 'conexao.php';
$con = conectaBD();

//Realizando pesquisa
$Cod_usuario="0";
$Nome=$_POST["Nome"];
$Email=$_POST["Email"];
$Senha=$_POST["Senha"];

$sql1 = mysqli_query($con, "SELECT * FROM usuario WHERE Nome = '{$Nome}'") or print mysql_error();

$sql2 = mysqli_query($con, "SELECT * FROM usuario WHERE  Email = '{$Email}'") or print mysql_error();

if(mysqli_num_rows($sql1)==0) {
   if(mysqli_num_rows($sql2)==0){
   	$comando = "Insert into usuario(Cod_usuario,Nome,Email,Senha)";
	$comando .="VALUES ('$Cod_usuario','$Nome','$Email','$Senha')";
	$res = mysqli_query($con, $comando);
    header('location:Login.php');
   }
   else{
   	echo "<script>window.location='Cadastro.php';alert('Email inválido!!');</script>";
   }
}
else{
	echo "<script>window.location='Cadastro.php';alert('Nome inválido!');</script>";
}
mysqli_close($con);

?>