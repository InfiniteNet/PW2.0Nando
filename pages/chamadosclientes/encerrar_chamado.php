<?php

$GLOBALS["zjfulnjljm"] = "eu";
$GLOBALS["fbepbxaq"] = "eumesmp";
$GLOBALS["jctlqpviw"] = "updatechamado";
$GLOBALS["udkbqdjpjux"] = "verificausuario";
$GLOBALS["okxelxay"] = "chama";
$GLOBALS["kxcgzue"] = "buscachamado";
$GLOBALS["xdnatntrro"] = "chamado";
$GLOBALS["seufyaxddfnk"] = "diretorio";
$GLOBALS["ieynhbdvyuv"] = "msg";
require_once "../../pages/system/seguranca.php";
require_once "../../pages/system/config.php";
require_once "../../pages/system/funcoes.php";
require_once "../../pages/system/classe.ssh.php";
protegePagina("user");
$nkdxoofog = "usuario";
if ($usuario["ativo"] == 2) {
    echo "<script type=\"text/javascript\">";
    echo "window.location=\"home.php?page=suspenso\";";
    echo "</script>";
    exit;
}
if (isset($_POST["chamado"])) {
    $GLOBALS["ukfhecfehurj"] = "chama";
    $GLOBALS["djpcjng"] = "buscachamado";
    $gvljihstsj = "chamado";
    $GLOBALS["qxtpovwjvtnw"] = "msg";
    $GLOBALS["ouxbboleqh"] = "verificausuario";
    $GLOBALS["acbiel"] = "verificausuario";
    $chamado = $_POST["chamado"];
    $GLOBALS["qysnjmrf"] = "eu";
    $ueuehtzmt = "notins";
    ${$GLOBALS["ieynhbdvyuv"]} = $_POST["msg"];
    ${$GLOBALS["seufyaxddfnk"]} = $_POST["diretorio"];
    $ifllvdk = "notins";
    $tcilndx = "updatechamado";
    $nhkksodrv = "updatechamado";
    ${$GLOBALS["djpcjng"]} = "SELECT * FROM chamados where id='" . ${$GLOBALS["xdnatntrro"]} . "' and id_mestre='" . $_SESSION["usuarioID"] . "'";
    ${$GLOBALS["kxcgzue"]} = $conn->prepare(${$GLOBALS["kxcgzue"]});
    $qjwhftfg = "notins";
    $buscachamado->execute();
    $GLOBALS["teukpcjp"] = "chama";
    if ($buscachamado->rowCount() == 0) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Chamado n\xc3\xa3o encontrado!\");";
        echo "window.location=\"" . ${$GLOBALS["seufyaxddfnk"]} . "\";";
        echo "</script>";
        exit;
    }
    $GLOBALS["huhlauomfr"] = "chama";
    $chama = $buscachamado->fetch();
    if (${$GLOBALS["okxelxay"]}["status"] == "encerrado") {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Chamado j\xc3\xa1 resolvido!\");";
        echo "window.location=\"" . ${$GLOBALS["seufyaxddfnk"]} . "\";";
        echo "</script>";
        exit;
    }
    if (${$GLOBALS["ieynhbdvyuv"]} != "") {
        ${$GLOBALS["ieynhbdvyuv"]} = ${$GLOBALS["ieynhbdvyuv"]};
    } else {
        $GLOBALS["ielkid"] = "chama";
        ${$GLOBALS["ieynhbdvyuv"]} = $chama["resposta"];
    }
    $ltnifycmf = "chama";
    ${$GLOBALS["ouxbboleqh"]} = "SELECT * FROM usuario where id_usuario= '" . ${$GLOBALS["teukpcjp"]}["usuario_id"] . "'";
    ${$GLOBALS["udkbqdjpjux"]} = $conn->prepare(${$GLOBALS["acbiel"]});
    $verificausuario->execute();
    if ($buscachamado->rowCount() == 0) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Usuario do chamado n\xc3\xa3o encontrado!\");";
        echo "window.location=\"" . ${$GLOBALS["seufyaxddfnk"]} . "\";";
        echo "</script>";
        exit;
    }
    ${$tcilndx} = "UPDATE chamados set status='encerrado', resposta='" . ${$GLOBALS["ieynhbdvyuv"]} . "', data='" . date("Y-m-d H:i:s") . "' where id= '" . ${$GLOBALS["ukfhecfehurj"]}["id"] . "'";
    ${$nhkksodrv} = $conn->prepare(${$GLOBALS["jctlqpviw"]});
    $GLOBALS["ewyrkefnbvo"] = "eumesmp";
    $updatechamado->execute();
    $eumesmp = "SELECT * FROM usuario where id_usuario= '" . $_SESSION["usuarioID"] . "'";
    ${$GLOBALS["fbepbxaq"]} = $conn->prepare(${$GLOBALS["fbepbxaq"]});
    $eumesmp->execute();
    ${$GLOBALS["qysnjmrf"]} = $eumesmp->fetch();
    ${$GLOBALS["ieynhbdvyuv"]} = "O Seu Chamado de <b><small>N\xc2\xb0" . ${$GLOBALS["okxelxay"]}["id"] . "</small></b> Foi Encerrado por <b>" . ${$GLOBALS["zjfulnjljm"]}["nome"] . "</b>";
    ${$ifllvdk} = "INSERT INTO notificacoes (usuario_id,data,tipo,linkfatura,mensagem) values ('" . ${$ltnifycmf}["usuario_id"] . "','" . date("Y-m-d H:i:s") . "','chamados','Admin','" . ${$GLOBALS["qxtpovwjvtnw"]} . "')";
    ${$ueuehtzmt} = $conn->prepare(${$qjwhftfg});
    $notins->execute();
    echo "<script type=\"text/javascript\">";
    echo "alert(\"Chamado Encerrado com sucesso!\");";
    echo "window.location=\"" . ${$GLOBALS["seufyaxddfnk"]} . "\";";
    echo "</script>";
}
