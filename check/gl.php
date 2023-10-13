<?php

$GLOBALS["lwkninyls"] = "response";
$GLOBALS["awtirbyio"] = "username";
$GLOBALS["juavsfmyg"] = "row";
$GLOBALS["smwhlhlpd"] = "ipdominio";
$GLOBALS["trxzmkookwep"] = "accessKEY";
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
require_once "../pages/system/funcoes.php";
require_once "../pages/system/seguranca.php";
$GLOBALS["kuvnekdp"] = "SQLServidor";
require_once "../pages/system/config.php";
$nmmcrythzxfo = "username";
require_once "../pages/system/classe.ssh.php";
$GLOBALS["lhjkkwqeq"] = "SQLServidor";
$xztoekboxkp = "SQLServidor";
if ($accessKEY !== $accessKEY) {
    expulsaVisitante();
    exit;
}
$dxdicgg = "ipdominio";
if (${$GLOBALS["smwhlhlpd"]} !== $ipdominio) {
    expulsaVisitante();
    exit;
}
${$nmmcrythzxfo} = $_GET["username"];
${$GLOBALS["lhjkkwqeq"]} = "SELECT * FROM servidor";
${$GLOBALS["kuvnekdp"]} = $conn->prepare(${$xztoekboxkp});
$SQLServidor->execute();
if ($SQLServidor->rowCount() > 0) {
    while (${$GLOBALS["juavsfmyg"]} = $SQLServidor->fetch()) {
        $GLOBALS["mvxlropsx"] = "url";
        $jouigpslvro = "ip_servidor";
        $GLOBALS["ffyfxhroqkyq"] = "response";
        $nxshoes = "url";
        $ip_servidor = ${$GLOBALS["juavsfmyg"]}["ip_servidor"];
        $url = "http://{$ip_servidor}:5454/gl" . ${$GLOBALS["awtirbyio"]};
        ${$GLOBALS["lwkninyls"]} = file_get_contents($url);
        echo ${$GLOBALS["ffyfxhroqkyq"]};
    }
} else {
    echo "<br>Nenhum Servidor!<br>";
}
