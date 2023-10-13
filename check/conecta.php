<?php

$GLOBALS["izyhawlcaq"] = "response";
$GLOBALS["ghthbjwiwe"] = "url";
$GLOBALS["kanuzheqb"] = "row";
$GLOBALS["tiuimnbnuyk"] = "username";
$suscostxy = "SQLServidor";
$GLOBALS["qthkvmi"] = "ipdominio";
$GLOBALS["kxrmvxq"] = "accessKEY";
$cnxlodinsfyr = "ipdominio";
$upsqmrigor = "SQLServidor";
header("Content-Type: application/json");
$GLOBALS["usftgxaxggc"] = "SQLServidor";
header("Access-Control-Allow-Origin: *");
require_once "../pages/system/funcoes.php";
require_once "../pages/system/seguranca.php";
require_once "../pages/system/config.php";
require_once "../pages/system/classe.ssh.php";
if ($accessKEY !== $accessKEY) {
    expulsaVisitante();
    exit;
}
if (${$cnxlodinsfyr} !== ${$GLOBALS["qthkvmi"]}) {
    expulsaVisitante();
    exit;
}
${$GLOBALS["tiuimnbnuyk"]} = $_GET["username"];
${$suscostxy} = "SELECT * FROM servidor";
${$GLOBALS["usftgxaxggc"]} = $conn->prepare(${$upsqmrigor});
$SQLServidor->execute();
if ($SQLServidor->rowCount() > 0) {
    while (${$GLOBALS["kanuzheqb"]} = $SQLServidor->fetch()) {
        $GLOBALS["iruosdolw"] = "username";
        $GLOBALS["bkejgzh"] = "ip_servidor";
        $GLOBALS["tobabgvxil"] = "response";
        $ip_servidor = ${$GLOBALS["kanuzheqb"]}["ip_servidor"];
        ${$GLOBALS["ghthbjwiwe"]} = "http://{$ip_servidor}:5454/checkUser" . $username;
        ${$GLOBALS["tobabgvxil"]} = file_get_contents(${$GLOBALS["ghthbjwiwe"]});
        echo ${$GLOBALS["izyhawlcaq"]};
    }
} else {
    echo "<br>Nenhum Servidor!<br>";
}
