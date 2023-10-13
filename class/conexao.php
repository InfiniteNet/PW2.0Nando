<?php
session_start();
$servidor = "localhost";
$usuario = "root";
$senha = "102030";
$dbname = "gestorssh";
$link2 = $_SERVER['HTTP_HOST'];
//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
//.

?>