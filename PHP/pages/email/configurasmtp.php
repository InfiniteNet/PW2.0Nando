<?php

$GLOBALS["jdrmxmrj"] = "updatesmtp";
$GLOBALS["gotfomlnfuj"] = "servidor";
$GLOBALS["fxjztmwyrun"] = "smtp";
$GLOBALS["jvrsoehbdp"] = "conta";
$GLOBALS["bkecxfw"] = "ssl";
$GLOBALS["sxfrveruly"] = "senha";
$GLOBALS["tckcisrk"] = "email";
$GLOBALS["gmcmtqenqn"] = "porta";
$GLOBALS["aersftcwmv"] = "empresa";
require_once "../../pages/system/seguranca.php";
$GLOBALS["cfplnazx"] = "usuario";
require_once "../../pages/system/config.php";
require_once "../../pages/system/funcoes.php";
require_once "../../pages/system/classe.ssh.php";
require_once "../../pages/system/funcoes.system.php";
protegePagina("user");
if ($usuario["ativo"] == 2) {
    echo "<script type=\"text/javascript\">";
    echo "window.location=\"home.php?page=suspenso\";";
    echo "</script>";
    exit;
}
if (isset($_POST["servidor"])) {
    $oowvvjt = "buscasmtp";
    $GLOBALS["wiovcisjv"] = "email";
    $GLOBALS["shdferv"] = "servidor";
    $servidor = sql_injector($_POST["servidor"]);
    $xacotkiklm = "buscasmtp";
    ${$GLOBALS["aersftcwmv"]} = sql_injector($_POST["nomeempresa"]);
    ${$GLOBALS["gmcmtqenqn"]} = sql_injector($_POST["porta"]);
    ${$GLOBALS["tckcisrk"]} = sql_injector($_POST["email"]);
    $xghbklv = "buscasmtp";
    ${$GLOBALS["sxfrveruly"]} = sql_injector($_POST["senha"]);
    ${$GLOBALS["bkecxfw"]} = sql_injector($_POST["ssl"]);
    if (!is_numeric(${$GLOBALS["gmcmtqenqn"]})) {
        echo myalertuser("error", "Defina a porta corretamente!", "../../home.php?page=email/enviaremail");
        exit;
    }
    $eihkdphtv = "conta";
    if (filter_var(${$GLOBALS["wiovcisjv"]}, FILTER_VALIDATE_EMAIL)) {
        $scllurn = "email";
        ${$GLOBALS["tckcisrk"]} = $email;
    } else {
        echo myalertuser("error", "Email invalido!", "../../home.php?page=email/enviaremail");
        exit;
    }
    ${$xacotkiklm} = "SELECT * FROM smtp_usuarios WHERE usuario_id='" . $_SESSION["usuarioID"] . "'";
    ${$oowvvjt} = $conn->prepare(${$xghbklv});
    $buscasmtp->execute();
    ${$GLOBALS["jvrsoehbdp"]} = $buscasmtp->rowCount();
    if (${$eihkdphtv} > 0) {
        $GLOBALS["quntuiei"] = "updatesmtp";
        ${$GLOBALS["fxjztmwyrun"]} = $buscasmtp->fetch();
        $GLOBALS["cduobdhhi"] = "email";
        $GLOBALS["gelsfjfco"] = "smtp";
        $yisngft = "empresa";
        $GLOBALS["jqyfinpg"] = "ssl";
        ${$GLOBALS["quntuiei"]} = "update smtp_usuarios set servidor='" . ${$GLOBALS["gotfomlnfuj"]} . "', empresa='" . $empresa . "', porta='" . ${$GLOBALS["gmcmtqenqn"]} . "', email='" . $email . "', senha='" . ${$GLOBALS["sxfrveruly"]} . "', ssl_secure='" . $ssl . "' WHERE usuario_id='" . $smtp["usuario_id"] . "'";
        ${$GLOBALS["jdrmxmrj"]} = $conn->prepare(${$GLOBALS["jdrmxmrj"]});
        $updatesmtp->execute();
        echo myalertuser("success", "SMTP Atualizado !", "../../home.php?page=email/enviaremail");
        exit;
    } else {
        $GLOBALS["kcwjtcvyplp"] = "porta";
        $GLOBALS["vcsiwghd"] = "empresa";
        $GLOBALS["wdaxavsh"] = "senha";
        $GLOBALS["xowcrpvlp"] = "updatesmtp";
        $GLOBALS["yyrwdof"] = "email";
        ${$GLOBALS["jdrmxmrj"]} = "insert into smtp_usuarios (usuario_id,servidor,empresa,porta,email,senha) values ('" . $_SESSION["usuarioID"] . "','" . ${$GLOBALS["gotfomlnfuj"]} . "','" . $empresa . "','" . $porta . "','" . $email . "','" . $senha . "')";
        ${$GLOBALS["xowcrpvlp"]} = $conn->prepare(${$GLOBALS["jdrmxmrj"]});
        $updatesmtp->execute();
        echo myalertuser("success", "SMTP Configurado !", "../../home.php?page=email/enviaremail");
        exit;
    }
}
