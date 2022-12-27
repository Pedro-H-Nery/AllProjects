<?php 
$nomePasta = "/allprojects/";
$pagina = substr(strstr($_SERVER["REQUEST_URI"],"/"),strlen($nomePasta));
$valor = isset($_SESSION['Nome']) ? '(Logado)' : '';
$home = $valor=='' ? 'index.php' : 'Home(Logado).php';
$nomeUsuario='';
$fonte = "font-family: 'Press Start 2P', cursive";
if($valor=='(Logado)'){
    $nomeUsuario = $_SESSION["Nome"];
}

$intensidade=[];
$paginas = ["index.php","ProjetosDaComunidade.php","Login.php","Cadastro.php","Home(Logado).php","ProjetosDaComunidade(Logado).php","CriacaoDeProjetos.php","Perfil(Logado).php","MudarInfo.php"];
for ($i = 0; $i < 9; $i++) { 
    array_push($intensidade,$paginas[$i]==$pagina ? 0.9 : 0.5);
}
if($pagina==''){
    $intensidade[0]=0.9;
}
?>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/PaginasLogadas.css">
    <link rel="stylesheet" type="text/css" href="css/PaginasDeslogadas.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Black+Ops+One">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Press+Start+2P">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets1/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <!-- CSS Fim -->

</head>
<body style="background-color: gray;">
    <!-- NavBar -->
    <nav class="navbar navbar-light navbar-expand-md text-right" style="background-color: #000000;margin: 0px;">
        <div class="container-fluid"><a class="navbar-brand" href=<?php echo("$home");?> style="color: rgba(255,255,255,0.9);background-image: url(&quot;assets/img/logo.png&quot;);width: 170px;height: 100px;margin: 5px;"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon" style="background-color: rgba(255,255,255,0);background-image: url(&quot;assets/img/menu_hamburger.png&quot;);width: 50px;height: 50px;"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1" style="padding-left: 0px;">
                <ul class="nav navbar-nav">
                    <?php
                        if($valor==''){
                            echo('
                                <li class="nav-item" role="presentation" style="margin-right: 0px;"><a class="nav-link active" href="index.php" style="color: rgba(255,255,255,'.$intensidade[0].');'.$fonte.';font-size: 15px;padding-right: 8px;margin-right: 0px;">Home</a></li>
                                <li class="nav-item mx-3" role="presentation"><a class="nav-link" href="ProjetosDaComunidade.php" style="color: rgba(255,255,255,'.$intensidade[1].');'.$fonte.';font-size: 15px;padding-right: 8px;">Projetos</a></li>
                                <li class="nav-item mx-3" role="presentation"><a class="nav-link" href="Login.php" style="color: rgba(255,255,255,'.$intensidade[2].');'.$fonte.';font-size: 15px;padding-right: 8px;">Login</a></li>
                                <li class="nav-item mx-3" role="presentation"><a class="nav-link" href="Cadastro.php" style="color: rgba(255,255,255,'.$intensidade[3].');'.$fonte.';font-size: 15px;padding-right: 8px;">Cadastro</a></li>
                            ');
                        }
                        else{
                            echo('
                                <li class="nav-item" role="presentation" style="margin-right: 0px;"><a class="nav-link active" href="Home(Logado).php" style="color: rgba(255,255,255,'.$intensidade[4].');'.$fonte.';font-size: 15px;padding-right: 8px;margin-right: 0px;">Home</a></li>
                                <li class="nav-item mx-3" role="presentation"><a class="nav-link" href="ProjetosDaComunidade(Logado).php" style="color: rgba(255,255,255,'.$intensidade[5].');'.$fonte.';font-size: 15px;padding-right: 8px;">Projetos</a></li>
                                <li class="nav-item mx-3" role="presentation"><a class="nav-link" href="CriacaoDeProjetos.php" style="color: rgba(255,255,255,'.$intensidade[6].');'.$fonte.';font-size: 15px;padding-right: 8px;">Criar Projeto</a></li>
                                <li class="nav-item mx-3" role="presentation"><a class="nav-link" href="Perfil(Logado).php" style="color: rgba(255,255,255,'.$intensidade[7].');'.$fonte.';font-size: 15px;padding-right: 8px;">' . $nomeUsuario . '</a></li>
                                <li class="nav-item mx-3" role="presentation"><a class="nav-link" href="index.php" style="color: rgba(255,255,255,0.5);'.$fonte.';font-size: 15px;padding-right: 8px;">Sair</a></li>
                            ');
                        }
                    ?>
                    </div>
                </ul>
        </div>
        </div>
    </nav>
    <!-- NavBar Fim -->