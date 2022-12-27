<?php
    $valor = isset($_SESSION['Nome']) ? '(Logado)' : '';
?>
<!-- Footer -->
    <div class="footer-dark" style="margin-top: 15px;">
        <footer style="padding-left: 5%;padding-right: 0px;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3 style="font-family: Audiowide, cursive;color: #2D8CEB;">Linguagens</h3>
                        <ul>
                            <li><a href="ProjetosDaComunidade<?php echo($valor)?>.php?linguagem=Java" style="font-family: Audiowide, cursive;color: #72A603;opacity: 1;">Java</a></li>
                            <li><a href="ProjetosDaComunidade<?php echo($valor)?>.php?linguagem=Arduino" style="font-family: Audiowide, cursive;color: #72A603;opacity: 1;">Arduino</a></li>
                            <li><a href="#" style="font-family: Audiowide, cursive;color: #72A603;opacity: 1;">    
                                </a></li>
                            <li><a href="ProjetosDaComunidade<?php echo($valor)?>.php?linguagem=Python" style="font-family: Audiowide, cursive;color: #72A603;opacity: 1;">Python</a></li>
                            <li><a href="ProjetosDaComunidade<?php echo($valor)?>.php?linguagem=C" style="font-family: Audiowide, cursive;color: #72A603;opacity: 1;">C</a></li>
                            <li><a href="ProjetosDaComunidade<?php echo($valor)?>.php?linguagem=JavaScript" style="font-family: Audiowide, cursive;color: #72A603;opacity: 1;">Java Script</a></li>
                            <li><a href="ProjetosDaComunidade<?php echo($valor)?>.php?linguagem=PHP" style="font-family: Audiowide, cursive;color: #72A603;opacity: 1;">PHP</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3 style="font-family: Audiowide, cursive;color: #2D8CEB;">Links Úteis</h3>
                        <ul>
                            <?php 
                                if($valor==''){
                                    echo('
                                        <li><a href="index.php" style="font-family: Audiowide, cursive;color: #72A603;opacity: 1;">Home</a></li>
                                        <li style="font-family: Audiowide, cursive;"><a href="ProjetosDaComunidade.php" style="color: #72A603;opacity: 1;">Projetos</a></li>
                                        <li><a href="Login.php" style="font-family: Audiowide, cursive;color: #72A603;opacity: 1;">Login</a></li>
                                        <li><a href="Cadastro.php" style="opacity: 1;color: #72A603;font-family: Audiowide, cursive;">Cadastro</a></li>');
                                }
                                else{
                                    echo('
                                        <li><a href="Home(Logado).php" style="font-family: Audiowide, cursive;color: #72A603;opacity: 1;">Home</a></li>
                                        <li style="font-family: Audiowide, cursive;"><a href="ProjetosDaComunidade(Logado).php" style="color: #72A603;opacity: 1;">Projetos</a></li>
                                        <li><a href="CriacaoDeProjetos.php" style="font-family: Audiowide, cursive;color: #72A603;opacity: 1;">Criação de Projetos</a></li>
                                        <li><a href="Perfil(Logado).php" style="opacity: 1;color: #72A603;font-family: Audiowide, cursive;">Perfil</a></li>
                                        <li><a href="MudarInfo.php" style="opacity: 1;color: #72A603;font-family: Audiowide, cursive;">Alterar Senha</a></li>
                                        <li><a href="index.php" style="opacity: 1;color: #72A603;font-family: Audiowide, cursive;">Sair</a></li>');
                                }
                            ?>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3 style="font-family: Audiowide, cursive;color: #2D8CEB;">All Projects</h3>
                        <p style="font-family: Audiowide, cursive;color: #72A603;opacity: 1;">Bem Vindo ao All Projects.Esse site serve para a criação,compartilhamento e visualização de projetos.</p>
                    </div>
                </div>
                <p class="copyright" style="color: #2D8CEB;opacity: 1;font-family: Audiowide, cursive;">AllProjects © 2019</p>
            </div>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- Footer Fim-->
</body>
</html>