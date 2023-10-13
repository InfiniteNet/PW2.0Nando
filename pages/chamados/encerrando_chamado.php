<?php

$GLOBALS["mvujift"] = "msg";
$GLOBALS["xbkpjly"] = "notins";
$GLOBALS["wcfmmwgux"] = "usuario";
$GLOBALS["ncrbnvbdpar"] = "verificausuario";
$GLOBALS["unkpeh"] = "updatechamado";
$GLOBALS["hsmjmhkhkqs"] = "chama";
$GLOBALS["tnxiuhqn"] = "diretorio";
$GLOBALS["pdaukc"] = "chamado";
require_once "../../pages/system/seguranca.php";
require_once "../../pages/system/config.php";
require_once "../../pages/system/funcoes.php";
require_once "../../pages/system/classe.ssh.php";
require_once "../../pages/system/funcoes.system.php";
protegePagina("user");
$pqokamld = "usuario";
if ($usuario["ativo"] == 2) {
    echo "<script type=\"text/javascript\">";
    echo "window.location=\"home.php?page=suspenso\";";
    echo "</script>";
    exit;
}
if (isset($_POST["chamado"])) {
    ${$GLOBALS["pdaukc"]} = $_POST["chamado"];
    ${$GLOBALS["tnxiuhqn"]} = $_POST["diretorio"];
    $GLOBALS["jurbqxztcfv"] = "buscachamado";
    $xpnilhufte = "buscachamado";
    $mvdhwbnsbkj = "buscachamado";
    $GLOBALS["rbjqvhinxt"] = "updatechamado";
    $exxggulf = "chama";
    $GLOBALS["dczvgaimrqp"] = "chamado";
    $buscachamado = "SELECT * FROM chamados where id='" . $chamado . "' and usuario_id='" . $_SESSION["usuarioID"] . "'";
    $GLOBALS["kswduykrj"] = "msg";
    $yfrrjmbu = "notins";
    $buscachamado = $conn->prepare($buscachamado);
    $buscachamado->execute();
    $GLOBALS["eobaofsh"] = "notins";
    if ($buscachamado->rowCount() == 0) {
        $GLOBALS["gwjcvaj"] = "diretorio";
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Chamado n\xc3\xa3o encontrado!\");";
        echo "window.location=\"" . $diretorio . "\";";
        echo "</script>";
        exit;
    }
    ${$GLOBALS["hsmjmhkhkqs"]} = $buscachamado->fetch();
    if (${$GLOBALS["hsmjmhkhkqs"]}["status"] == "encerrado") {
        $GLOBALS["qfbcualu"] = "diretorio";
        echo myalertuser("success", "Encerrado com sucesso !", $diretorio);
        exit;
    }
    ${$GLOBALS["unkpeh"]} = "UPDATE chamados set status='encerrado', data='" . date("Y-m-d H:i:s") . "' where id= '" . ${$exxggulf}["id"] . "'";
    ${$GLOBALS["rbjqvhinxt"]} = $conn->prepare(${$GLOBALS["unkpeh"]});
    $ealwfpzbokm = "diretorio";
    $updatechamado->execute();
    $kmaetmljjf = "usuario";
    ${$GLOBALS["ncrbnvbdpar"]} = "SELECT * FROM usuario where id_usuario= '" . $_SESSION["usuarioID"] . "'";
    ${$GLOBALS["ncrbnvbdpar"]} = $conn->prepare(${$GLOBALS["ncrbnvbdpar"]});
    $verificausuario->execute();
    ${$kmaetmljjf} = $verificausuario->fetch();
    ${$GLOBALS["kswduykrj"]} = "O Usu\xc3\xa1rio " . ${$GLOBALS["wcfmmwgux"]}["nome"] . " Acabou de Encerrar o Chamado N\xc2\xb0" . ${$GLOBALS["hsmjmhkhkqs"]}["id"] . " de Suporte n\xc3\xa3o precisa mais resolver!";
    ${$GLOBALS["xbkpjly"]} = "INSERT INTO notificacoes (usuario_id,data,tipo,linkfatura,mensagem,admin) values ('0','" . date("Y-m-d H:i:s") . "','chamados','Admin','" . ${$GLOBALS["mvujift"]} . "','sim')";
    ${$yfrrjmbu} = $conn->prepare(${$GLOBALS["eobaofsh"]});
    $notins->execute();
    echo myalertuser("success", "Encerrado com sucesso !", ${$ealwfpzbokm});
}
