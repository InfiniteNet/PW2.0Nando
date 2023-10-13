<?php

$GLOBALS["idmgzigix"] = "SQLREV";
$GLOBALS["evfgqnik"] = "result";
$GLOBALS["pnoighf"] = "status";
$GLOBALS["clayrcfge"] = "header";
$GLOBALS["rhsqlnbyl"] = "url";
$GLOBALS["nvpjbyaf"] = "ch";
$GLOBALS["htmbzapcpi"] = "token";
require_once "../vendor/autoload.php";
require_once "system/seguranca.php";
require_once "system/config.php";
protegePagina("user");
if (isset($_SESSION["payment_id"])) {
    $GLOBALS["nzheebms"] = "header";
    $xcywxopksovo = "url";
    $GLOBALS["seysjqkm"] = "token";
    $zcgefg = "ch";
    $url = "https://api.mercadopago.com/v1/payments/" . $_SESSION["payment_id"];
    $GLOBALS["qroydld"] = "ch";
    $token = $_SESSION["apimp"];
    $ubdgwvxmuoi = "ch";
    $header = array("Authorization: Bearer " . $token, "Content-Type: application/json");
    $GLOBALS["nbhupkpp"] = "result";
    $GLOBALS["yaefzfqylh"] = "ch";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_ENCODING, "");
    $GLOBALS["mwnnrhbs"] = "ch";
    curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
    curl_setopt($ch, CURLOPT_TIMEOUT, 0);
    $pyvfpts = "ch";
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    $result = curl_exec($ch);
    curl_close($ch);
    $status = json_decode($result);
    if ($status->status == "approved") {
        echo "Aprovado";
        $wtagtfmiew = "SQLREV";
        $SQLREV = "UPDATE usuario SET validade = '" . $_SESSION["data"] . "', ativo='1', apagar='1' WHERE id_usuario = '" . $_SESSION["usuarioID"] . "'";
        $SQLREV = $conn->prepare($SQLREV);
        $SQLREV->execute();
    }
}
