<?php

$GLOBALS["fuvljjwtjp"] = "updatechamado";
$GLOBALS["pqhwlql"] = "chama";
$GLOBALS["bddaqdumfor"] = "diretorio";
$GLOBALS["zvrubhndyfwg"] = "chamado";
$jzgkwvbjpvmk = "usuario";
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
    $rxyowgbogtb = "buscachamado";
    $sgjbxa = "chama";
    ${$GLOBALS["zvrubhndyfwg"]} = $_POST["chamado"];
    $GLOBALS["xzlfwjbw"] = "buscachamado";
    ${$GLOBALS["bddaqdumfor"]} = $_POST["diretorio"];
    ${$GLOBALS["xzlfwjbw"]} = "SELECT * FROM chamados where id='" . ${$GLOBALS["zvrubhndyfwg"]} . "' and id_mestre='" . $_SESSION["usuarioID"] . "'";
    $GLOBALS["kvvgecjkuvp"] = "buscachamado";
    $icxpfrsxwkzu = "chama";
    $buscachamado = $conn->prepare(${$rxyowgbogtb});
    $buscachamado->execute();
    $GLOBALS["czcntmlnhte"] = "updatechamado";
    if ($buscachamado->rowCount() == 0) {
        echo "<script type=\"text/javascript\">";
        $GLOBALS["zsrkkhq"] = "diretorio";
        echo "alert(\"Chamado n\xc3\xa3o encontrado!\");";
        echo "window.location=\"" . $diretorio . "\";";
        echo "</script>";
        exit;
    }
    ${$sgjbxa} = $buscachamado->fetch();
    if (${$GLOBALS["pqhwlql"]}["status"] != "encerrado") {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Chamado precisa ser encerrado primeiro!\");";
        echo "window.location=\"" . ${$GLOBALS["bddaqdumfor"]} . "\";";
        echo "</script>";
        exit;
    }
    ${$GLOBALS["fuvljjwtjp"]} = "DELETE FROM chamados where id='" . ${$icxpfrsxwkzu}["id"] . "'";
    ${$GLOBALS["czcntmlnhte"]} = $conn->prepare(${$GLOBALS["fuvljjwtjp"]});
    $updatechamado->execute();
    echo "<script type=\"text/javascript\">";
    echo "alert(\"Chamado deletado com sucesso!\");";
    echo "window.location=\"" . ${$GLOBALS["bddaqdumfor"]} . "\";";
    echo "</script>";
}
