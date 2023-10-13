<?php

$GLOBALS["srqikmxnes"] = "acao";
$GLOBALS["fcruuhdiqafe"] = "link_conecta";
$GLOBALS["nfxwuuehqz"] = "pronto";
$GLOBALS["wlbyveruwze"] = "busca";
$GLOBALS["brzhlsd"] = "config";
$idbgozwki = "dados";
$GLOBALS["jersdg"] = "configbase";
$GLOBALS["lxdscny"] = "path";
$GLOBALS["yqkcdg"] = "dados";
$GLOBALS["relovirw"] = "dadosbase";
$GLOBALS["wsygrm"] = "payloads";
$GLOBALS["echjcn"] = "uid";
$GLOBALS["qdjquq"] = "config";
$GLOBALS["pdbfnneewab"] = "search";
$pgidxwrih = "uid";
$GLOBALS["dhwhvyfm"] = "servidores";
$GLOBALS["ahbtmkpmi"] = "change";
$pxzjytgy = "uid";
$GLOBALS["mtjeguphqu"] = "portas2";
$GLOBALS["nqejto"] = "sql";
$GLOBALS["pvmhqeyljyiy"] = "uid";
$GLOBALS["bjpuippdhc"] = "servidores";
$kwidupez = "uid";
$ypwmwacs = "uid";
$hhgvxnhqapc = "uid";
$GLOBALS["dmeuttf"] = "row";
require_once $_SERVER["DOCUMENT_ROOT"] . "/config/funcoes.php";
isLogged($sid);
$GLOBALS["dkdrrxecyhmp"] = "replace";
$GLOBALS["cfenwnlksyeb"] = "payloads";
$GLOBALS["zopoevfb"] = "json";
$wdfbqudne = "change";
$ftpcsdne = "servidores";
$GLOBALS["kegmefffuyb"] = "row";
$yvhkzp = "config";
$fjlcxmci = "portas";
$fuiqhlq = "uid";
if (!file_exists("base_app/baseconecta.apk")) {
    $GLOBALS["eogylhwz"] = "link_conecta";
    $link_conecta = "https://bitbucket.org/nandoslayer/pweb2.0/downloads/baseconecta.apk";
} else {
    $gjnsphh = "link_conecta";
    $link_conecta = "/base_app/baseconecta.apk";
}
$GLOBALS["fvytkubmigx"] = "sql";
$gkqorihvbpq = "uid";
$GLOBALS["vwolsdowllq"] = "pronto";
${$ftpcsdne} = array();
${$GLOBALS["cfenwnlksyeb"]} = array();
$GLOBALS["cpimhqotokrg"] = "uid";
${$fjlcxmci} = array();
$yhivekn = "uid";
${$GLOBALS["fvytkubmigx"]} = $conn->query("SELECT Name, TYPE, FLAG, ServerIP, CheckUser, ServerPort, SSLPort, USER, PASS FROM servidores  WHERE id_owner='{$uid}'");
$xwjjyncv = "busca";
$GLOBALS["gzorqwbrj"] = "uid";
$GLOBALS["dukrgarzipf"] = "replace";
$xqgxmfmi = "dados";
$riemen = "uid";
$GLOBALS["wqnbiyt"] = "search";
$dksstdrdtpq = "portas";
while (${$GLOBALS["dmeuttf"]} = $sql->fetch(PDO::FETCH_ASSOC)) {
    ${$GLOBALS["bjpuippdhc"]}[] = ${$GLOBALS["dmeuttf"]};
}
$gsrnmlczxry = "uid";
$GLOBALS["ehxratvznxt"] = "uid";
${$GLOBALS["nqejto"]} = $conn->query("SELECT Name, FLAG, Payload, SNI, TlsIP, ProxyIP, ProxyPort, Info FROM payloads  WHERE id_owner='{$uid}'");
$GLOBALS["xlkdiaxcjkb"] = "uid";
while (${$GLOBALS["dmeuttf"]} = $sql->fetch(PDO::FETCH_ASSOC)) {
    $GLOBALS["nnmjmonay"] = "row";
    $GLOBALS["gfbwxlqye"] = "payloads";
    $payloads[] = $row;
}
$habrfigc = "json";
${$GLOBALS["nqejto"]} = $conn->query("SELECT Porta FROM portas WHERE id_owner='{$uid}'");
$GLOBALS["xhdbsmooim"] = "config";
while (${$GLOBALS["kegmefffuyb"]} = $sql->fetch(PDO::FETCH_ASSOC)) {
    $GLOBALS["yngmhastev"] = "portas";
    $GLOBALS["agtptbqqs"] = "row";
    $portas[] = $row["Porta"];
    ${$GLOBALS["mtjeguphqu"]}[] = ${$GLOBALS["dmeuttf"]};
}
$GLOBALS["euogqakgzcew"] = "uid";
$umgguvre = "uid";
$GLOBALS["gozhpyvnci"] = "uid";
${$GLOBALS["zopoevfb"]} = json_encode(${$dksstdrdtpq});
${$GLOBALS["wqnbiyt"]} = array("[", "\"", ",", "]");
${$GLOBALS["dkdrrxecyhmp"]} = array("", "", ";", "");
${$GLOBALS["ahbtmkpmi"]} = str_replace(${$GLOBALS["pdbfnneewab"]}, ${$GLOBALS["dukrgarzipf"]}, ${$habrfigc});
${$xqgxmfmi} = array("Version" => getConfigUser("versao", ${$hhgvxnhqapc}), "ReleaseNotes" => getConfigUser("notas", ${$GLOBALS["echjcn"]}), "UrlUpdate" => getConfigUser("att", ${$GLOBALS["echjcn"]}), "Sms" => getConfigUser("sms", ${$GLOBALS["gozhpyvnci"]}), "CorUser" => getConfigUser("CorUser", ${$kwidupez}), "CorGeral" => getConfigUser("CorGeral", ${$gsrnmlczxry}), "CorMenu" => getConfigUser("CorMenu", ${$GLOBALS["ehxratvznxt"]}), "CorTexto" => getConfigUser("CorTexto", ${$GLOBALS["echjcn"]}), "logoonline" => getConfigUser("logoonline", ${$GLOBALS["echjcn"]}), "fundoonline" => getConfigUser("fundoonline", ${$ypwmwacs}), "fundoDoLogOnline" => getConfigUser("fundoDoLogOnline", ${$GLOBALS["echjcn"]}), "LogoLink" => getConfigUser("logoonline", ${$GLOBALS["gzorqwbrj"]}), "BackgroundLink" => getConfigUser("fundoonline", ${$GLOBALS["pvmhqeyljyiy"]}), "BackgroundLink1" => getConfigUser("fundoDoLogOnline", ${$GLOBALS["echjcn"]}), "BackgroundLink2" => getConfigUser("BackgroundLink2", ${$GLOBALS["echjcn"]}), "EmailFeedback" => getConfigUser("email", ${$yhivekn}), "UrlContato" => getConfigUser("contato", ${$pxzjytgy}), "UrlTermos" => getConfigUser("termos", ${$GLOBALS["echjcn"]}), "CheckUser" => getConfigUser("checkuser", ${$pgidxwrih}), "UdpPort" => ${$wdfbqudne}, "Udp" => ${$GLOBALS["mtjeguphqu"]}, "Servers" => ${$GLOBALS["dhwhvyfm"]}, "Networks" => ${$GLOBALS["wsygrm"]});
${$GLOBALS["relovirw"]} = "{\n    \"Version\": \"1\",\n    \"ReleaseNotes\": \"Abra com internet pra atualizar o APP!\",\n    \"UrlUpdate\": \"" . getConfigUser("att", ${$GLOBALS["echjcn"]}) . "\",\n    \"Sms\": \"" . getConfigUser("sms", ${$GLOBALS["echjcn"]}) . "\",\n    \"CorUser\": \"#fffac400\",\n    \"CorGeral\": \"#FF23af4d\",\n    \"CorMenu\": \"#e8eccbe1\",\n    \"CorTexto\": \"#FFfa0000\",\n    \"logoonline\": \"https://i.imgur.com/TAWmkzs.png\",\n    \"fundoonline\": \"https://i.imgur.com/vvLLutx.jpg\",\n    \"fundoDoLogOnline\": \"https://i.imgur.com/4N9rl6S.jpg\",\n    \"LogoLink\": \"https://i.imgur.com/TAWmkzs.png\",\n    \"BackgroundLink\": \"https://i.imgur.com/vvLLutx.jpg\",\n    \"BackgroundLink1\": \"https://i.imgur.com/4N9rl6S.jpg\",\n    \"BackgroundLink2\": \"https://i.imgur.com/ZeTZrge.png\",\n    \"EmailFeedback\": \"" . getConfigUser("email", ${$GLOBALS["xlkdiaxcjkb"]}) . "\",\n    \"UrlContato\": \"" . getConfigUser("contato", ${$riemen}) . "\",\n    \"UrlTermos\": \"" . getConfigUser("termos", ${$GLOBALS["echjcn"]}) . "\",\n    \"CheckUser\": \"true\",\n    \"UdpPort\": \"7300\",\n    \"Udp\": [\n        {\n            \"Porta\": \"7300\"\n        }\n    ],\n    \"Servers\":[\n        {\n            \"Name\": \"Abra com internet\",\n            \"TYPE\": \"PREMIUM\",\n            \"FLAG\": \"br.png\",\n            \"ServerIP\": \"\",\n            \"CheckUser\": \"\",\n            \"ServerPort\": \"80\",\n            \"SSLPort\": \"443\",\n            \"USER\": \"\",\n            \"PASS\": \"\"\n        }\n    ],\n    \"Networks\": [\n        {\n            \"Name\": \"pra atualizar o APP!\",\n            \"FLAG\": \"vivo\",\n            \"Payload\": \"\",\n            \"SNI\": \"\",\n            \"TlsIP\": \"\",\n            \"ProxyIP\": \"\",\n            \"ProxyPort\": \"\",\n            \"Info\": \"Proxy\"\n        }\n    ]\n}";
${$GLOBALS["yqkcdg"]} = json_encode(${$GLOBALS["yqkcdg"]}, "JSON_U^EWWY_UV__^ISOEW");
${$GLOBALS["lxdscny"]} = "update/" . getData("pasta_att", ${$GLOBALS["echjcn"]}) . "";
if (!file_exists(${$GLOBALS["lxdscny"]})) {
    mkdir(${$GLOBALS["lxdscny"]}, 0777, true);
}
${$GLOBALS["qdjquq"]} = "update/" . getData("pasta_att", ${$umgguvre}) . "/config";
${$GLOBALS["jersdg"]} = "update/" . getData("pasta_att", ${$GLOBALS["echjcn"]}) . "/configbase";
if (file_exists(${$GLOBALS["brzhlsd"]})) {
    $eoltvlnhps = "config";
    unlink($config);
}
file_put_contents(${$yvhkzp}, ${$idbgozwki});
$esqxeg = "config";
if (file_exists(${$GLOBALS["jersdg"]})) {
    $jxaqmkyq = "configbase";
    unlink($configbase);
}
file_put_contents(${$GLOBALS["jersdg"]}, ${$GLOBALS["relovirw"]});
$GLOBALS["tgjbshs"] = "uid";
${$xwjjyncv} = $conn->query("SELECT * FROM mensagens WHERE id_owner='{$uid}'")->fetch();
${$GLOBALS["vwolsdowllq"]} = "{\"SendMessage\":\"" . ${$GLOBALS["wlbyveruwze"]}["att"] . "\",\"MyMessage\":\"" . ${$GLOBALS["wlbyveruwze"]}["msg"] . "\"}";
${$GLOBALS["lxdscny"]} = "update/" . getData("pasta_att", ${$GLOBALS["echjcn"]}) . "";
if (!file_exists(${$GLOBALS["lxdscny"]})) {
    $cibtkubbw = "path";
    mkdir($path, 0777, true);
}
${$GLOBALS["xhdbsmooim"]} = "update/" . getData("pasta_att", ${$GLOBALS["cpimhqotokrg"]}) . "/sms";
if (file_exists(${$esqxeg})) {
    $oggarzhcxnvh = "config";
    unlink($config);
}
file_put_contents(${$GLOBALS["brzhlsd"]}, ${$GLOBALS["nfxwuuehqz"]});
echo "\n<div class=\"container\">\n    <center>\n        <a href=\"homec.php\"><img class=\"mt-5\" src=\"";
echo getConfig("logo");
echo "\" width=\"";
echo getConfig("largura");
echo "\" height=\"";
echo getConfig("altura");
echo "\"></a><br>\n        Bem vindo(a) <b>";
echo getNickById(${$GLOBALS["echjcn"]});
echo "</b>!<br>\n\n        <div class=\"mt-3\" class=\"col-12 px-0 mb-4\">\n            <div class=\"card border-0 shadow\">\n                <div class=\"card-body\">\n                    <div class=\"d-flex align-items-center justify-content-between border-bottom pb-3\">\n                        <div><i class=\"fa-solid fa-bars\"></i>\n                        </div>\n                    </div>\n\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-between border-bottom py-3\">\n\t\t\t\t\t<div class=\"h6 mb-0 d-flex align-items-center\">\n<a href=\"";
echo ${$GLOBALS["fcruuhdiqafe"]};
echo "\"><i class=\"fa-solid fa-download\"></i> DOWNLOAD DA BASE</a>\n</div>\n</div>\n";
if (getAdm(${$gkqorihvbpq}) == true) {
    echo "<div class=\"d-flex align-items-center justify-content-between border-bottom py-3\">\n<div class=\"h6 mb-0 d-flex align-items-center\">\n<form method=\"post\" enctype=\"multipart/form-data\" action=\"recconectaUp.php\">\n<input name=\"arquivo\" type=\"file\" />\n<input style=\"color: white\" class=\"btn btn-success\" type=\"submit\" value=\" UPLOAD DA BASE\" />\n</form>  \n</div>\n</div>\n";
}
echo "\n<div class=\"d-flex align-items-center justify-content-between border-bottom py-3\">\n                        <div>\n                            <div class=\"h6 mb-0 d-flex align-items-center\">\n                                <a href=\"update/";
echo getData("pasta_att", ${$GLOBALS["echjcn"]});
echo "/configbase\" download=\"configbase.json\"><i class=\"fa-solid fa-download\"></i> BAIXAR BASE JSON</a>\n                            </div>\n                        </div>\n                    </div>\n                    <div class=\"d-flex align-items-center justify-content-between border-bottom py-3\">\n                        <div>\n                            <div class=\"h6 mb-0 d-flex align-items-center\">\n                                <a href=\"update/";
echo getData("pasta_att", ${$GLOBALS["tgjbshs"]});
echo "/config\" download=\"config.json\"><i class=\"fa-solid fa-download\"></i> BAIXAR ATT JSON</a>\n                            </div>\n                        </div>\n                    </div>\n                    <div class=\"d-flex align-items-center justify-content-between border-bottom py-3\">\n                        <div>\n                            <div class=\"h6 mb-0 d-flex align-items-center\">\n                                <a href=\"app.php\"><i class=\"fa-solid fa-gear\"></i> CONFIGURA\xc3\x87\xc3\x95ES DO APP</a>\n                            </div>\n                        </div>\n                    </div>\n                    ";
if (getAdm(${$GLOBALS["euogqakgzcew"]}) == true) {
    echo "                        <div class=\"d-flex align-items-center justify-content-between border-bottom py-3\">\n                            <div>\n                                <div class=\"h6 mb-0 d-flex align-items-center\">\n                                    <a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-config-site\"><i class=\"fa-solid fa-gear\"></i> CONFIGURA\xc3\x87\xc3\x95ES DO SITE</a>\n                                </div>\n                            </div>\n                        </div>\n                    ";
}
echo "\n                    <div class=\"d-flex align-items-center justify-content-between border-bottom py-3\">\n                        <div>\n                            <div class=\"h6 mb-0 d-flex align-items-center\">\n                                <a href=\"perfil.php\"><i class=\"fa-solid fa-user\"></i> CONFIGURA\xc3\x87\xc3\x95ES DE PERFIL</a>\n                            </div>\n                        </div>\n                    </div>\n                    ";
if (getAdm(${$GLOBALS["echjcn"]}) == true) {
    echo "                        <div class=\"d-flex align-items-center justify-content-between border-bottom py-3\">\n                            <div>\n                                <div class=\"h6 mb-0 d-flex align-items-center\">\n                                    <a href=\"usuarios.php\"><i class=\"fa-solid fa-users\"></i> GERENCIAR USU\xc3\x81RIOS</a>\n                                </div>\n                            </div>\n                        </div>\n                    ";
}
echo "\n                    <div class=\"d-flex align-items-center justify-content-between pt-3\">\n                        <div>\n                            <div class=\"h6 mb-0 d-flex align-items-center\">\n                                <a href=\"?acao=sair\"><i class=\"fa-solid fa-right-from-bracket\"></i> SAIR</a>\n                            </div>\n                        </div>\n                    </div>\n                </div>\n            </div>\n        </div>\n</div>\n<br><br>\n\n";
if (${$GLOBALS["srqikmxnes"]} == "sair") {
    $conn->query("DELETE FROM sessao WHERE id='{$sid}'");
    session_destroy();
    header("location: /painel.php");
}
echo "\n\n";
if (getAdm(${$fuiqhlq}) == true) {
    echo "    <!------------------------------------------------------------------------------------>\n    <!-- MODAL CONFIGURA\xc3\x87\xc3\x95ES SITE -->\n    <!------------------------------------------------------------------------------------>\n    <div class=\"modal fade\" id=\"modal-config-site\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"\" aria-hidden=\"true\">\n        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">\n            <div class=\"modal-content\">\n                <div class=\"modal-header\">\n                    <h2 class=\"h6 modal-title\">Configura\xc3\xa7\xc3\xb5es do site</h2>\n                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>\n                </div>\n                <div class=\"modal-body\">\n                    <form action=\"editar.php?acao=site\" method=\"post\">\n                        <div class=\"row\">\n                            <div class=\"col\">\n                                <label for=\"\">Logotipo</label>\n                                <input type=\"text\" name=\"logo\" class=\"form-control\" value=\"";
    echo getConfig("logo");
    echo "\">\n                            </div>\n                        </div>\n\n                        <div class=\"row mt-2\">\n                            <div class=\"col\">\n                                <label for=\"\">Largura</label>\n                                <input type=\"text\" name=\"largura\" class=\"form-control\" value=\"";
    echo getConfig("largura");
    echo "\">\n                            </div>\n                            <div class=\"col\">\n                                <label for=\"\">Altura</label>\n                                <input type=\"text\" name=\"altura\" class=\"form-control\" value=\"";
    echo getConfig("altura");
    echo "\">\n                            </div>\n                        </div>\n\n                        <div class=\"row mt-2\">\n                            <div class=\"col\">\n                                <label for=\"\">Link do site</label>\n                                <input type=\"text\" name=\"link\" class=\"form-control\" value=\"http://";
    echo $_SERVER["HTTP_HOST"];
    echo "\" disabled>\n                            </div>\n                            <div class=\"col\">\n                                <label for=\"\">Titulo do site</label>\n                                <input type=\"text\" name=\"titulo\" class=\"form-control\" value=\"";
    echo getConfig("titulo");
    echo "\">\n                            </div>\n                        </div>\n\n                </div>\n                <div class=\"modal-footer\">\n                    <button type=\"submit\" name=\"atualiza_site\" style=\"color: white\" class=\"btn btn-success\">Editar</button></form>\n                    <button type=\"button\" style=\"color: white\" class=\"btn btn-secondary text-gray ms-auto\" data-bs-dismiss=\"modal\">Cancelar</button>\n                </div>\n            </div>\n        </div>\n    </div>\n";
}
require_once $_SERVER["DOCUMENT_ROOT"] . "/config/rodape.php";
