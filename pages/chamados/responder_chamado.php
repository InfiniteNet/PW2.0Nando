<?php

$GLOBALS["fxkrodc"] = "notins";
$GLOBALS["pmnqsewr"] = "msg";
$GLOBALS["ywxgtils"] = "updatechamado";
$GLOBALS["okqjxxptml"] = "verificausuario";
$GLOBALS["cyltflofleh"] = "chama";
$GLOBALS["sysumfacy"] = "buscachamado";
$GLOBALS["occiugaica"] = "diretorio";
require_once "../../pages/system/seguranca.php";
require_once "../../pages/system/config.php";
require_once "../../pages/system/funcoes.php";
require_once "../../pages/system/classe.ssh.php";
require_once "../../pages/system/funcoes.system.php";
protegePagina("user");
$GLOBALS["lyhgxsikg"] = "usuario";
if ($usuario["ativo"] == 2) {
    echo "<script type=\"text/javascript\">";
    echo "window.location=\"home.php?page=suspenso\";";
    echo "</script>";
    exit;
}
if (isset($_POST["chamado"])) {
    $watauknevw = "chama";
    $fxymlcbltwys = "msg";
    $GLOBALS["oybhudh"] = "chamado";
    $GLOBALS["goybyyhk"] = "buscachamado";
    $vhrvgb = "verificausuario";
    $chamado = $_POST["chamado"];
    $msg = $_POST["msg"];
    $GLOBALS["quvhlvxddxv"] = "chamado";
    ${$GLOBALS["occiugaica"]} = $_POST["diretorio"];
    $GLOBALS["uqhodjlyxww"] = "msg";
    $wcwoeaxtcu = "verificausuario";
    $GLOBALS["pedxtox"] = "chama";
    ${$GLOBALS["goybyyhk"]} = "SELECT * FROM chamados where id='" . ${$GLOBALS["quvhlvxddxv"]} . "' and usuario_id='" . $_SESSION["usuarioID"] . "'";
    $GLOBALS["cgcqmg"] = "chama";
    ${$GLOBALS["sysumfacy"]} = $conn->prepare(${$GLOBALS["sysumfacy"]});
    $GLOBALS["wghqejtql"] = "chama";
    $buscachamado->execute();
    $piqctkjoh = "usuario";
    if ($buscachamado->rowCount() == 0) {
        $njtbimtjeip = "diretorio";
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Chamado n\xc3\xa3o encontrado!\");";
        echo "window.location=\"" . $diretorio . "\";";
        echo "</script>";
        exit;
    }
    $GLOBALS["vachnoi"] = "diretorio";
    $uspngq = "msg";
    ${$GLOBALS["wghqejtql"]} = $buscachamado->fetch();
    if (${$GLOBALS["cyltflofleh"]}["status"] == "encerrado") {
        echo myalertuser("success", "Ja resolvido !", ${$GLOBALS["occiugaica"]});
        exit;
    }
    ${$wcwoeaxtcu} = "SELECT * FROM usuario where id_usuario= '" . ${$watauknevw}["usuario_id"] . "'";
    ${$vhrvgb} = $conn->prepare(${$GLOBALS["okqjxxptml"]});
    $verificausuario->execute();
    if ($buscachamado->rowCount() == 0) {
        $GLOBALS["phvjpw"] = "diretorio";
        echo myalertuser("warning", "Usuario nao encontrado !", $diretorio);
        exit;
    }
    $GLOBALS["bhfwqdohqgkh"] = "notins";
    ${$GLOBALS["ywxgtils"]} = "UPDATE chamados set status='resposta', mensagem='" . ${$uspngq} . "', data='" . date("Y-m-d H:i:s") . "' where id= '" . ${$GLOBALS["cgcqmg"]}["id"] . "'";
    ${$GLOBALS["ywxgtils"]} = $conn->prepare(${$GLOBALS["ywxgtils"]});
    $updatechamado->execute();
    ${$GLOBALS["pmnqsewr"]} = "O Usu\xc3\xa1rio <small><b>" . ${$piqctkjoh}["nome"] . "</b></small> Acabou de Responder o Chamado <b>N\xc2\xb0" . ${$GLOBALS["pedxtox"]}["id"] . "</b> de Suporte!";
    ${$GLOBALS["fxkrodc"]} = "INSERT INTO notificacoes (usuario_id,data,tipo,linkfatura,mensagem,admin) values ('0','" . date("Y-m-d H:i:s") . "','chamados','Admin','" . ${$GLOBALS["uqhodjlyxww"]} . "','sim')";
    ${$GLOBALS["fxkrodc"]} = $conn->prepare(${$GLOBALS["bhfwqdohqgkh"]});
    $notins->execute();
    echo myalertuser("success", "Respondido com sucesso !", ${$GLOBALS["vachnoi"]});
}
