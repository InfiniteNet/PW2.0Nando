<?php

$GLOBALS["ukfluglsoh"] = "date";
$GLOBALS["lqmrlirq"] = "senha";
$GLOBALS["sujvodtwsp"] = "ip";
$sksbiv = "usuario";
$GLOBALS["uyripku"] = "usuario";
require_once "pages/system/seguranca.php";
require_once "pages/system/config.php";
$jxommbir = "date";
require_once "pages/system/funcoes.php";
require_once "pages/system/classe.ssh.php";
require_once "pages/system/funcoesscript.php";
$mlkdajdppjh = "senha";
$date = date("Y-m-d H:i:s");
$usuario = $_POST["login"];
$senha = $_POST["senha"];
$ip = pega_ip();
if (empty($usuario)) {
    echo alertinfo2("warning", "Digite o usuario!", "../");
} elseif (empty($senha)) {
    echo alertinfo2("warning", "Digite a senha!", "../");
} else {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $GLOBALS["gcqbidsnnqo"] = "senha";
        $eyfjpp = "senha";
        $emmdrpskp = "usuario";
        $yxklffe = "usuario";
        $twgegefq = "senha";
        $GLOBALS["xvmtjgxhrcr"] = "usuario";
        $GLOBALS["knqayjzpdevk"] = "usuario";
        $usuario = isset($usuario) ? $usuario : "";
        $senha = isset($senha) ? $senha : "";
        if (validaUsuario($usuario, $senha, $ip, "user") == true) {
            $conn->query("INSERT INTO historico_login SET id_usuario = '" . $_SESSION["usuarioID"] . "', data_login = '" . $date . "', ip_login = '" . pega_ip() . "', navegador = '" . get_browser_name() . " com " . get_os() . "/" . get_device() . "'");
            echo alertinfo("success", "Logado com sucesso!", "../home.php");
        } else {
            echo alertinfo2("warning", "Dados incorreto!", "../");
        }
    }
}
