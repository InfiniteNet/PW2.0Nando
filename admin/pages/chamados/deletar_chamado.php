<?php

$GLOBALS["srfyhgwfw"] = "updatechamado";
$GLOBALS["kwevotzux"] = "chama";
$GLOBALS["mgvfstduli"] = "buscachamado";
$GLOBALS["ptyqmiknhcb"] = "diretorio";
$GLOBALS["wudhorlms"] = "chamado";
require_once "../../../pages/system/seguranca.php";
require_once "../../../pages/system/config.php";
require_once "../../../pages/system/funcoes.system.php";
protegePagina("donoadmin");
if (isset($_POST["chamado"])) {
    $whndhggdy = "buscachamado";
    $ddfkiia = "chama";
    $GLOBALS["cynqrgbodbg"] = "buscachamado";
    $chamado = $_POST["chamado"];
    $diretorio = $_POST["diretorio"];
    $ouswjcfdhjo = "updatechamado";
    $buscachamado = "SELECT * FROM chamados where id='" . $chamado . "'";
    $mosoxbwlsg = "updatechamado";
    $buscachamado = $conn->prepare($buscachamado);
    $buscachamado->execute();
    $zrvqwcluk = "chama";
    if ($buscachamado->rowCount() == 0) {
        $dotjtgdeawn = "diretorio";
        echo myalertuser("error", "Nao encontrado !", $diretorio);
        exit;
    }
    ${$zrvqwcluk} = $buscachamado->fetch();
    if (${$ddfkiia}["status"] != "encerrado") {
        echo myalertuser("warning", "Encerre-o prmeiro !", ${$GLOBALS["ptyqmiknhcb"]});
        exit;
    }
    ${$mosoxbwlsg} = "DELETE FROM chamados where id='" . ${$GLOBALS["kwevotzux"]}["id"] . "'";
    ${$ouswjcfdhjo} = $conn->prepare(${$GLOBALS["srfyhgwfw"]});
    $cpcuaxo = "diretorio";
    $updatechamado->execute();
    echo myalertuser("success", "Deletado com sucesso !", $diretorio);
}
