<?php

$GLOBALS["ydhqderukkuq"] = "senha";
$GLOBALS["wvfkrsjbl"] = "ip";
$GLOBALS["wryqbwuku"] = "usuario";
$GLOBALS["qffxzlopxx"] = "date";
require_once "pages/system/seguranca.php";
require_once "pages/system/config.php";
require_once "pages/system/funcoes.php";
require_once "pages/system/classe.ssh.php";
$GLOBALS["dyvxyxcasx"] = "senha";
require_once "pages/system/funcoesscript.php";
$date = date("Y-m-d H:i:s");
$usuario = $_POST["login"];
$senha = $_POST["senha"];
$ip = pega_ip();
$GLOBALS["rmjhogr"] = "usuario";
if (empty($usuario)) {
    echo alertinfo2("warning", "Digite o usu\xc3\xa1rio!", "../");
} elseif (empty($senha)) {
    echo alertinfo2("warning", "Digite a senha!", "../");
} else {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $GLOBALS["zdiwclnyg"] = "usuario";
        $sqyjdyiq = "usuario";
        $tyxeymybm = "senha";
        $GLOBALS["hxwjvuytm"] = "senha";
        $fqnttljlyv = "usuario";
        $eyxnelqxhyj = "senha";
        $GLOBALS["plncoxvg"] = "senha";
        $usuario = isset($usuario) ? $usuario : "";
        $senha = isset($senha) ? $senha : "";
        if (validaUsuario($usuario, $senha, $ip, "donoadmin") == true) {
            echo alertinfo("success", "Logado com sucesso!", "../admin/home.php");
        } else {
            echo alertinfo2("warning", "Dados incorreto!", "../");
        }
    }
}
