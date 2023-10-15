<?php

$GLOBALS["fehsudpy"] = "notins";
$GLOBALS["rirxgwst"] = "eu";
$GLOBALS["vwzfcdybkd"] = "eumesmp";
$GLOBALS["vywgtkhqgjx"] = "msg";
$GLOBALS["vpfrfpgcpdv"] = "updatechamado";
$GLOBALS["lezppyw"] = "verificausuario";
$GLOBALS["xqnrpae"] = "diretorio";
$GLOBALS["idinjurpyu"] = "chama";
$GLOBALS["nzdbttwycys"] = "buscachamado";
$GLOBALS["xqgxdlpc"] = "usuario";
require_once "../../pages/system/seguranca.php";
require_once "../../pages/system/config.php";
require_once "../../pages/system/funcoes.php";
require_once "../../pages/system/classe.ssh.php";
protegePagina("user");
if ($usuario["ativo"] == 2) {
    echo "<script type=\"text/javascript\">";
    echo "window.location=\"home.php?page=suspenso\";";
    echo "</script>";
    exit;
}
if (isset($_POST["chamado"])) {
    $dkvmpzide = "eumesmp";
    $mkcaom = "msg";
    $GLOBALS["jefxgvrnw"] = "chama";
    $dmmnhopv = "chamado";
    $chamado = $_POST["chamado"];
    $GLOBALS["putfvwwfnup"] = "buscachamado";
    $GLOBALS["cbhqrgnheyte"] = "notins";
    $GLOBALS["nuglhkjh"] = "chamado";
    $wmsjxgygf = "diretorio";
    $jkoyvooua = "diretorio";
    $ywiwlljn = "eu";
    $msg = $_POST["msg"];
    $diretorio = $_POST["diretorio"];
    $GLOBALS["fiiqiszdpmhk"] = "buscachamado";
    $bnvrgwffu = "chama";
    $GLOBALS["hrnplhkpgkco"] = "chama";
    ${$GLOBALS["nzdbttwycys"]} = "SELECT * FROM chamados where id='" . $chamado . "' and id_mestre='" . $_SESSION["usuarioID"] . "'";
    ${$GLOBALS["fiiqiszdpmhk"]} = $conn->prepare(${$GLOBALS["putfvwwfnup"]});
    $qgerqf = "eumesmp";
    $buscachamado->execute();
    if ($buscachamado->rowCount() == 0) {
        echo "<script type=\"text/javascript\">";
        $GLOBALS["lpswhyupey"] = "diretorio";
        echo "alert(\"Chamado n\xc3\xa3o encontrado!\");";
        echo "window.location=\"" . $diretorio . "\";";
        echo "</script>";
        exit;
    }
    $GLOBALS["pwfpmcm"] = "verificausuario";
    ${$GLOBALS["idinjurpyu"]} = $buscachamado->fetch();
    $GLOBALS["xhvxtxbbb"] = "msg";
    $rwyydpupdvk = "verificausuario";
    if (${$GLOBALS["jefxgvrnw"]}["status"] == "encerrado") {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Chamado j\xc3\xa1 resolvido!\");";
        echo "window.location=\"" . ${$GLOBALS["xqnrpae"]} . "\";";
        echo "</script>";
        exit;
    }
    ${$rwyydpupdvk} = "SELECT * FROM usuario where id_usuario= '" . ${$GLOBALS["idinjurpyu"]}["usuario_id"] . "'";
    ${$GLOBALS["lezppyw"]} = $conn->prepare(${$GLOBALS["pwfpmcm"]});
    $verificausuario->execute();
    if ($buscachamado->rowCount() == 0) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Usuario do chamado n\xc3\xa3o encontrado!\");";
        $lxsitodv = "diretorio";
        echo "window.location=\"" . $diretorio . "\";";
        echo "</script>";
        exit;
    }
    ${$GLOBALS["vpfrfpgcpdv"]} = "UPDATE chamados set status='resposta', resposta='" . ${$GLOBALS["vywgtkhqgjx"]} . "', data='" . date("Y-m-d H:i:s") . "' where id= '" . ${$GLOBALS["idinjurpyu"]}["id"] . "'";
    ${$GLOBALS["vpfrfpgcpdv"]} = $conn->prepare(${$GLOBALS["vpfrfpgcpdv"]});
    $updatechamado->execute();
    ${$qgerqf} = "SELECT * FROM usuario where id_usuario= '" . $_SESSION["usuarioID"] . "'";
    ${$GLOBALS["vwzfcdybkd"]} = $conn->prepare(${$dkvmpzide});
    $eumesmp->execute();
    ${$GLOBALS["rirxgwst"]} = $eumesmp->fetch();
    ${$GLOBALS["vywgtkhqgjx"]} = "O Seu Chamado de <b><small>N\xc2\xb0" . ${$bnvrgwffu}["id"] . "</small></b> Foi Respondido por <b>" . ${$ywiwlljn}["nome"] . "</b>";
    ${$GLOBALS["fehsudpy"]} = "INSERT INTO notificacoes (usuario_id,data,tipo,linkfatura,mensagem) values ('" . ${$GLOBALS["hrnplhkpgkco"]}["usuario_id"] . "','" . date("Y-m-d H:i:s") . "','chamados','Admin','" . ${$GLOBALS["xhvxtxbbb"]} . "')";
    ${$GLOBALS["fehsudpy"]} = $conn->prepare(${$GLOBALS["cbhqrgnheyte"]});
    $notins->execute();
    echo "<script type=\"text/javascript\">";
    echo "alert(\"Chamado Respondido com sucesso!\");";
    echo "window.location=\"" . ${$jkoyvooua} . "\";";
    echo "</script>";
}
