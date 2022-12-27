<!DOCTYPE html>
<html>
<head>
    <title>All Projects</title>
<?php
    include_once 'header.php';
?>
    <!-- Carousel -->
    <div class="container">
        <div class="row">
            <div class="col" style="padding: 15px;">
                <div class="carousel slide" data-ride="carousel" id="carousel-1" style="margin: 35px;">
                    <div class="carousel-inner" role="listbox">

                        <div class="carousel-item active" style="background-image: url(&quot;assets/img/project1.jpg&quot;);"><a href="ProjetosDaComunidade.php?linguagem=Java"><img class="w-100 d-block" src="assets/img/java.jpg" alt="Slide Image"></a></div>

                        <div class="carousel-item"><a href="ProjetosDaComunidade.php?linguagem=Python"><img class="w-100 d-block" src="images/python.jpg" alt="Slide Image"></a></div>

                        <div class="carousel-item"><a href="ProjetosDaComunidade.php?linguagem=Arduino"><img class="w-100 d-block" src="images/arduino.jpg" alt="Slide Image"></a></div>

                        <div class="carousel-item"><a href="ProjetosDaComunidade.php?linguagem=C"><img class="w-100 d-block" src="images/c2.jpg" alt="Slide Image"></a></div>

                        <div class="carousel-item"><a href="ProjetosDaComunidade.php?linguagem=JavaScript"><img class="w-100 d-block" src="images/js.jpg" alt="Slide Image"></a></div>

                        <div class="carousel-item"><a href="ProjetosDaComunidade.php?linguagem=PHP"><img class="w-100 d-block" src="assets/img/php.jpg" alt="Slide Image" style="padding: 0px;"></a></div>
                    </div>

                    <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button"
                            data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>

                    <ol class="carousel-indicators">
                        <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-1" data-slide-to="1"></li>
                        <li data-target="#carousel-1" data-slide-to="2"></li>
                        <li data-target="#carousel-1" data-slide-to="3"></li>
                        <li data-target="#carousel-1" data-slide-to="4"></li>
                        <li data-target="#carousel-1" data-slide-to="5"></li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- Carousel Fim -->
        <!-- Alguns Projetos -->
        <center>
        <div class="row">
            <div class="col" style="padding: 0px 15px;">
                <div class="card-group" style="margin: 35px;">
                    <a href="PaginaDoProjeto.php?projeto=12">
                    <div class="card" style="background-color: #2D8CEB;margin-right: 15px;">
                        <img style="background-image: url(&quot;assets/img/project1.jpg&quot;);width: 334px;height: 200px;background-color: #2D8CEB;" src="assets/img/fibonacci.png">
                        <div class="card-body" style="background-color: black;">
                            <h4 class="card-title">
Fibonacci</h4>
                            <br>
                            <button class="btn btn-primary" type="button" style="background-color: rgb(255,255,255);color: rgb(0,0,0);height: 40px;">Ver Projeto</button></div>
                    </div>
                </a>
                    <a href="PaginaDoProjeto.php?projeto=1">
                    <div class="card" style="background-color: #2D8CEB;"><img style="background-image: url(&quot;assets/img/project2.jpg&quot;);width: 333px;height: 200px;background-color: #2D8CEB;" src="assets/img/garra.jpg">
                        <div class="card-body" style="background-color: black;">
                            <h4 class="card-title">Braço Robótico</h4>
                            <br>
                            <button class="btn btn-primary" type="button" style="color: rgb(0,0,0);background-color: rgb(255,255,255);height: 40px;">Ver Projeto</button></div>
                    </div>
                    </a>
                    <a href="PaginaDoProjeto.php?projeto=19">
                    <div class="card" style="background-color: #2D8CEB;margin-left: 15px;"><img style="background-image: url(&quot;assets/img/project3.jpg&quot;);width: 333px;height: 200px;background-color: #2D8CEB;" src="assets/img/caranga.jpg">
                        <div class="card-body" style="background-color: black;">
                            <h4 class="card-title">Caranga Ligeira</h4>
                            <br>
                            <button class="btn btn-primary" type="button" style="color: rgb(0,0,0);background-color: rgb(255,255,255);height: 40px;">Ver Projeto</button></div>
                    </div>
                </a>
                </div>
            </div>
        </div>
    </div>
</center>
    <!-- Alguns Projetos Fim -->
<?php
    include_once 'footer.php';
?>