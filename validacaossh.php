<?php

$GLOBALS["srulqpmf"] = "usuario";
$GLOBALS["ywtkpkhep"] = "senha";
$GLOBALS["ovtylogshsk"] = "date";
require_once "pages/system/seguranca.php";
require_once "pages/system/config.php";
require_once "pages/system/funcoes.php";
require_once "pages/system/classe.ssh.php";
require_once "pages/system/funcoesscript.php";
if (isset($_POST["botaologin"])) {
    $jfjckyjn = "senha";
    $GLOBALS["mtdntlkcje"] = "usuario";
    $emuufbfw = "usuario";
    $date = date("Y-m-d H:i:s");
    $usuario = $_POST["login"];
    $GLOBALS["ovhnkwpbpfg"] = "ip";
    $senha = $_POST["senha"];
    $ip = pega_ip();
    if (empty($usuario)) {
        echo alertinfo2("warning", "Digite o usuario!", "../");
    } elseif (empty($senha)) {
        echo alertinfo2("warning", "Digite a senha!", "../");
    } else {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $oczuivettmko = "ip";
            $lwpich = "usuario";
            $ydxxvwdevpe = "senha";
            $GLOBALS["ycqqrib"] = "senha";
            $usuario = isset($usuario) ? $usuario : "";
            $senha = isset($senha) ? $senha : "";
            if (validaUsuariossh($usuario, $senha, $ip, "userssh") == true) {
                echo alertinfo("success", "Logado com sucesso!", "/renovacaossh.php");
            } else {
                echo alertinfo2("warning", "Dados incorreto!", "/renovassh.php");
            }
        }
    }
}
