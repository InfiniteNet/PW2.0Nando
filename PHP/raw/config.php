<?php

$GLOBALS["yrpdvucijx"] = "rodape";
$GLOBALS["wqsmmrh"] = "topo";
$GLOBALS["uzyysnnxiqo"] = "config_payloads";
$GLOBALS["bvpgiigrrqj"] = "config_payloads2";
$GLOBALS["wpiroyrgvs"] = "payload";
$GLOBALS["unbjmevczh"] = "row_produto3";
$GLOBALS["uyyxcb"] = "config_cat1";
$GLOBALS["mmwrpqzjio"] = "resultado_produtos3";
$GLOBALS["uwpfid"] = "result_produtos3";
$GLOBALS["hqlgzcaxmad"] = "db_cat_category_id";
$GLOBALS["pegnlftqs"] = "row_produto2";
$GLOBALS["fgarrruvftwj"] = "result_produtos2";
$GLOBALS["lwkgueid"] = "result_produtos_login";
$GLOBALS["qtjtkrxnk"] = "conn";
$GLOBALS["oxxldkbrhokt"] = "sess_ip_hist";
$GLOBALS["wxzyvxdd"] = "pattern_ip_hist";
$qekpphgnlmj = "u_agent";
$GLOBALS["nyetflhtdff"] = "pattern_ip_hist";
$GLOBALS["msckbnpbu"] = "u_agent";
session_start();
$GLOBALS["krnbtvxlykyg"] = "sess_ip_hist";
$sess_ip_hist = "{$_SERVER['HTTP_USER_AGENT']}";
$u_agent = "okhttp";
$pattern_ip_hist = "/okhttp/";
if (preg_match($pattern_ip_hist, $sess_ip_hist)) {
    $jsychwfushh = "resultado_produtos_login";
    $GLOBALS["ptadevlfxs"] = "id_token";
    $GLOBALS["dfyezphehm"] = "rodape";
    $GLOBALS["upewzxgdmnh"] = "servidor";
    $yuhdsafjgkr = "senha";
    $GLOBALS["kqeczofp"] = "usuario";
    $wanbsop = "id_token";
    $lirpbdy = "row_produto_login";
    $hhljfojfxsq = "dbname";
    $pzthpqool = "resultado_produtos2";
    include_once $_SERVER["DOCUMENT_ROOT"] . "/class/conexao.php";
    $GLOBALS["giatgiemqr"] = "config_payloads";
    $GLOBALS["urvgqkmnqu"] = "resultado_produtos2";
    $zjfmxracuf = "result_produtos_login";
    $GLOBALS["cbyguwo"] = "row_produto2";
    $GLOBALS["awifzadtnoc"] = "result_produtos2";
    $rptykis = "resultado_produtos_login";
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
    $id_token = mysqli_real_escape_string($conn, $_GET["update"]);
    if (mysqli_real_escape_string($conn, $_GET["token"]) != "") {
        $qhixmpnegiz = "id_token";
        $id_token = mysqli_real_escape_string($conn, $_GET["token"]);
    }
    $jyxayfqvegd = "conn";
    $GLOBALS["nvopwqvbx"] = "topo";
    if (${$GLOBALS["ptadevlfxs"]} != "") {
        $GLOBALS["cmroimehl"] = "id_token";
        $GLOBALS["llvokws"] = "id_token";
        $id_token = $id_token;
    } else {
        echo "<center><h1>CONFIG PROTEGIDO BY <a href=\"https://t.me/paineis\">@paineis</a></h1></center>";
        exit;
    }
    ${$GLOBALS["nvopwqvbx"]} = "{\n\"status\": 200,\n\"data\": {\n\"prev_page\": null,\n\"next_page\": null,\n\"has_prev\": false,\n\"has_next\": false,\n\"total\": 10,\n\"current_page\": 1,\n\"pages\": 1,\n\"results\": [";
    ${$GLOBALS["dfyezphehm"]} = "\n]\n}\n}";
    ${$GLOBALS["lwkgueid"]} = "SELECT * FROM usuariogl WHERE token LIKE '{$id_token}'";
    ${$rptykis} = mysqli_query(${$GLOBALS["qtjtkrxnk"]}, ${$zjfmxracuf});
    while (${$lirpbdy} = mysqli_fetch_assoc(${$jsychwfushh})) {
        $GLOBALS["mrpcosxxgbm"] = "row_produto_login";
        $GLOBALS["usqjeniuxx"] = "db_user_id_up";
        $db_user_id_up = $row_produto_login["id"];
    }
    ${$GLOBALS["fgarrruvftwj"]} = "SELECT * FROM configgl WHERE status LIKE 'ACTIVE' && user_id LIKE '{$db_user_id_up}' LIMIT 100";
    ${$GLOBALS["urvgqkmnqu"]} = mysqli_query(${$jyxayfqvegd}, ${$GLOBALS["awifzadtnoc"]});
    while (${$GLOBALS["cbyguwo"]} = mysqli_fetch_assoc(${$pzthpqool})) {
        $GLOBALS["whgcdwugjvd"] = "row_produto2";
        $jfdmqdjklcp = "row_produto2";
        $GLOBALS["qucsnmxgxsd"] = "row_produto2";
        $GLOBALS["tzqxyphxyu"] = "payload";
        $ghwpbhwrtw = "row_produto2";
        $GLOBALS["aprdrjk"] = "config_cat1";
        $wskhpfiiiia = "row_produto3";
        $yksxzk = "config_payloads";
        $config_cat1 = "\"category\": { \"name\": \"SEM CATEGORIA\", \"id\": " . $row_produto2["category_id"] . ", \"status\": \"ACTIVE\", \"sort_order\": 1000, \"user_id\": " . ${$GLOBALS["pegnlftqs"]}["user_id"] . ", \"slug\": \"\", \"description\": \"\" }";
        ${$GLOBALS["hqlgzcaxmad"]} = ${$GLOBALS["pegnlftqs"]}["category_id"];
        $ckzqozzk = "config_payloads2";
        $jpguoxc = "row_produto2";
        $GLOBALS["ypqkhnd"] = "row_produto2";
        $GLOBALS["mnmkbuvew"] = "resultado_produtos3";
        $GLOBALS["xvukvvn"] = "config_payloads";
        $flpipb = "row_produto2";
        $opmogogjn = "row_produto2";
        ${$GLOBALS["uwpfid"]} = "SELECT * FROM categoriagl WHERE id='{$db_cat_category_id}' && status LIKE 'ACTIVE' && user_id LIKE '{$db_user_id_up}' LIMIT 1";
        $GLOBALS["mfvgytmkimif"] = "row_produto2";
        $GLOBALS["xtytnuuk"] = "row_produto2";
        $igffrhdvvb = "row_produto2";
        ${$GLOBALS["mmwrpqzjio"]} = mysqli_query(${$GLOBALS["qtjtkrxnk"]}, ${$GLOBALS["uwpfid"]});
        $GLOBALS["xofdjohl"] = "row_produto2";
        while (${$wskhpfiiiia} = mysqli_fetch_assoc(${$GLOBALS["mnmkbuvew"]})) {
            $rfyxnenohqz = "row_produto3";
            $GLOBALS["pulwocwzm"] = "row_produto3";
            $hxiqvkicgtgz = "row_produto3";
            $GLOBALS["jyckryn"] = "row_produto2";
            ${$GLOBALS["uyyxcb"]} = "\n\"category\": {\n\"name\": \"" . ${$GLOBALS["unbjmevczh"]}["name"] . "\",\n\"id\": " . $row_produto2["category_id"] . ",\n\"category_color\": \"" . $row_produto3["category_color"] . "\",\n\"status\": \"" . $row_produto3["status"] . "\",\n\"sort_order\": " . ${$GLOBALS["unbjmevczh"]}["sort_order"] . ",\n\"user_id\": " . ${$GLOBALS["pegnlftqs"]}["user_id"] . ",\n\"slug\": \"" . ${$GLOBALS["unbjmevczh"]}["slug"] . "\",\n\"description\": \"" . $row_produto3["description"] . "\"\n}";
        }
        ${$GLOBALS["wpiroyrgvs"]} = ${$GLOBALS["pegnlftqs"]}["payload"];
        ${$GLOBALS["bvpgiigrrqj"]} = ${$GLOBALS["xvukvvn"]};
        $dbwgwpwsc = "row_produto2";
        ${$GLOBALS["uzyysnnxiqo"]} = "\n{\n\"name\": \"" . ${$GLOBALS["pegnlftqs"]}["name"] . "\",\n\"SSH\": \"" . ${$GLOBALS["whgcdwugjvd"]}["config_v2ray"] . "\",\n\"server_hostname\": \"" . ${$GLOBALS["pegnlftqs"]}["server_hostname"] . "\",\n\"description\": \"" . ${$GLOBALS["pegnlftqs"]}["description"] . "\",\n\"username\": \"" . ${$GLOBALS["pegnlftqs"]}["username"] . "\",\n\"server_port\": " . ${$GLOBALS["pegnlftqs"]}["server_port"] . ",\n\"icon_image\": \"" . ${$igffrhdvvb}["icon_image"] . "\",\n\"user_id\": " . ${$GLOBALS["pegnlftqs"]}["user_id"] . ",\n\"password\": \"" . ${$opmogogjn}["password"] . "\",\n\"udp_port\": \"" . ${$GLOBALS["xofdjohl"]}["udp_port"] . "\",\n\"category_id\": " . ${$GLOBALS["pegnlftqs"]}["category_id"] . ",\n\"v2ray_uuid\": \"" . ${$jpguoxc}["v2ray_uuid"] . "\",\n\"primary_dns_server\": \"" . $row_produto2["primary_dns_server"] . "\",\n\"payload\": \"" . ${$GLOBALS["tzqxyphxyu"]} . "\",\n\"status\": \"" . ${$flpipb}["status"] . "\",\n\"secondary_dns_server\": \"" . ${$GLOBALS["xtytnuuk"]}["secondary_dns_server"] . "\",\n\"sni\": \"" . ${$GLOBALS["pegnlftqs"]}["sni"] . "\",\n\"config_mode\": \"" . ${$GLOBALS["pegnlftqs"]}["config_mode"] . "\",\n\"config_v2ray\": \"" . ${$GLOBALS["pegnlftqs"]}["config_v2ray"] . "\",\n\"url_check_user\": \"" . ${$GLOBALS["ypqkhnd"]}["url_check_user"] . "\",\n\"config_openvpn\": \"" . ${$GLOBALS["pegnlftqs"]}["ovpn_config"] . "\",\n\"proxy_hostname\": \"" . ${$GLOBALS["pegnlftqs"]}["proxy_hostname"] . "\",\n\"sort_order\": " . ${$ghwpbhwrtw}["sort_order"] . ",\n\"id\": " . ${$GLOBALS["mfvgytmkimif"]}["id"] . ",\n\"proxy_port\": " . ${$jfdmqdjklcp}["proxy_port"] . ",\n" . ${$GLOBALS["uyyxcb"]} . "\n}";
        if (${$GLOBALS["bvpgiigrrqj"]} != "") {
            $rmhtue = "config_payloads2";
            $GLOBALS["sbliflmqtp"] = "config_payloads2";
            $config_payloads2 .= ",";
        }
        ${$ckzqozzk} .= ${$GLOBALS["uzyysnnxiqo"]};
    }
    print_r(${$GLOBALS["wqsmmrh"]} . ${$GLOBALS["giatgiemqr"]} . ${$GLOBALS["yrpdvucijx"]});
} else {
    echo "<center><h1>CONFIG PROTEGIDO BY <a href=\"https://t.me/paineis\">@paineis</a></h1></center>";
    exit;
}
