<?php
function conectaBD(){
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "all projects";
    $con= mysqli_connect($servidor,$usuario,$senha,$dbname);
    if(!$con){
        die("Erro:".mysqli_error($con));
    }
    return $con;
}