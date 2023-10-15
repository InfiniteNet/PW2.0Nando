<?php

$GLOBALS["okinwxpuc"] = "notins";
$GLOBALS["czfloy"] = "updatechamado";
$GLOBALS["oxjohwns"] = "verificausuario";
$GLOBALS["iswosvbzmb"] = "chama";
$GLOBALS["dqhcsd"] = "diretorio";
$GLOBALS["jdwhoaar"] = "buscachamado";
$GLOBALS["ybgjedsqqq"] = "msg";
$GLOBALS["wpaqmue"] = "chamado";
require_once "../../../pages/system/seguranca.php";
require_once "../../../pages/system/config.php";
require_once "../../../pages/system/funcoes.system.php";
protegePagina("donoadmin");
if (isset($_POST["chamado"])) {
    $GLOBALS["gvtjjqg"] = "buscachamado";
    $nnmaycpyn = "diretorio";
    $nfcqarg = "verificausuario";
    $chamado = $_POST["chamado"];
    $GLOBALS["ifgmmf"] = "chama";
    $qivrhfmyn = "diretorio";
    $msg = sql_injector($_POST["msg"]);
    $tdpdtvz = "chama";
    $diretorio = $_POST["diretorio"];
    $buscachamado = "SELECT * FROM chamados where id='" . $chamado . "'";
    $buscachamado = $conn->prepare($buscachamado);
    $GLOBALS["ojbhfoouuy"] = "chama";
    $lmrooyvm = "chama";
    $feyjddmgwm = "verificausuario";
    $buscachamado->execute();
    $GLOBALS["jzjgzflref"] = "notins";
    if ($buscachamado->rowCount() == 0) {
        echo myalertuser("error", "Nao encontrado !", $diretorio);
        exit;
    }
    $kgfuouchlrk = "msg";
    ${$tdpdtvz} = $buscachamado->fetch();
    if (${$GLOBALS["iswosvbzmb"]}["status"] == "encerrado") {
        $sejuzlbmg = "diretorio";
        echo myalertuser("warnming", "Resolvido !", $diretorio);
        exit;
    }
    $GLOBALS["xegislidy"] = "chama";
    if (${$GLOBALS["ybgjedsqqq"]} != "") {
        $fjeyknz = "msg";
        $msg = ${$GLOBALS["ybgjedsqqq"]};
    } else {
        $pjgrqpui = "msg";
        $msg = ${$GLOBALS["iswosvbzmb"]}["resposta"];
    }
    ${$feyjddmgwm} = "SELECT * FROM usuario where id_usuario= '" . ${$GLOBALS["ifgmmf"]}["usuario_id"] . "'";
    ${$nfcqarg} = $conn->prepare(${$GLOBALS["oxjohwns"]});
    $ryucmyqainm = "updatechamado";
    $verificausuario->execute();
    $hnqwuthv = "notins";
    if ($buscachamado->rowCount() == 0) {
        $crhstvprggwb = "diretorio";
        echo myalertuser("error", "Nao encontrado !", $diretorio);
        exit;
    }
    ${$ryucmyqainm} = "UPDATE chamados set status='encerrado', resposta='" . ${$GLOBALS["ybgjedsqqq"]} . "', data='" . date("Y-m-d H:i:s") . "' where id= '" . ${$lmrooyvm}["id"] . "'";
    ${$GLOBALS["czfloy"]} = $conn->prepare(${$GLOBALS["czfloy"]});
    $updatechamado->execute();
    ${$GLOBALS["ybgjedsqqq"]} = "O Seu Chamado de <b><small>N\xc2\xb0" . ${$GLOBALS["xegislidy"]}["id"] . "</small></b> Foi Encerrado pelo Administrador";
    ${$hnqwuthv} = "INSERT INTO notificacoes (usuario_id,data,tipo,linkfatura,mensagem) values ('" . ${$GLOBALS["ojbhfoouuy"]}["usuario_id"] . "','" . date("Y-m-d H:i:s") . "','chamados','Admin','" . ${$kgfuouchlrk} . "')";
    ${$GLOBALS["okinwxpuc"]} = $conn->prepare(${$GLOBALS["jzjgzflref"]});
    $notins->execute();
    echo myalertuser("success", "Encerrado com sucesso !", ${$nnmaycpyn});
}
