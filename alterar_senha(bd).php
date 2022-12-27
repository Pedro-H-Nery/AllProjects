 <?php
session_start();

//Conectando com a Base de Dados
include_once 'conexao.php';
$con = conectaBD();

//Realizando pesquisa
$Senha1=$_GET["Senha"];
$b=$_SESSION["Email"];

$comando1 = "SELECT Senha FROM usuario where Email='$b'";

$res = mysqli_query($con, $comando1);
if($res){
	$comando = "UPDATE usuario SET Senha='$Senha1' WHERE Email='$b';";
	$res = mysqli_query($con, $comando);
	echo "<script>window.location='Home(Logado).php';alert('Senha alterada com sucesso');</script>";
}
mysqli_close($con);
?>