<?php

$GLOBALS["qqbkellqys"] = "config_payloads";
$GLOBALS["xmlawetvflb"] = "config_payloads2";
$GLOBALS["yrcjmcdwvl"] = "row_produto3";
$GLOBALS["blxhmbnje"] = "conn";
$GLOBALS["jyciqzw"] = "resultado_produtos3";
$GLOBALS["zhjryhc"] = "row_produto2";
$GLOBALS["kfnqeczplch"] = "config_cat1";
$GLOBALS["looviuxbw"] = "resultado_produtos2";
$GLOBALS["gkpttcii"] = "config_payloads";
$GLOBALS["qqomntwynmk"] = "db_token_up";
$GLOBALS["nputjnqnxp"] = "conn";
$GLOBALS["pcomylxmg"] = "row_produto_login";
$GLOBALS["aoupyxtx"] = "id_login";
$GLOBALS["wyeeuyupzx"] = "rodape";
$exjgkt = "result_produtos2";
$GLOBALS["tcofevdlsxkj"] = "row_produto2";
session_start();
$GLOBALS["wlfquj"] = "result_produtos_login";
$wugpctc = "resultado_produtos2";
$mpkhaoxt = "resultado_produtos_login";
$GLOBALS["ogttnfnqsthx"] = "result_produtos_login";
$pjihfw = "resultado_produtos_login";
$jgyyamhcvtvm = "topo";
$GLOBALS["skvkpjivo"] = "result_produtos2";
include_once $_SERVER["DOCUMENT_ROOT"] . "/class/conexao.php";
echo "<pre>";
$yzjlmy = "topo";
$topo = "{\n\"status\": 200,\n\"data\": {\n\"prev_page\": null,\n\"next_page\": null,\n\"has_prev\": false,\n\"has_next\": false,\n\"total\": 10,\n\"current_page\": 1,\n\"pages\": 1,\n\"results\": [";
$rodape = "\n]\n}\n}";
$jwkobuex = "conn";
$id_login = $_SESSION["painel"]["login"];
$result_produtos_login = "SELECT * FROM usuariogl WHERE login LIKE '{$id_login}'";
$resultado_produtos_login = mysqli_query($conn, $result_produtos_login);
while (${$GLOBALS["pcomylxmg"]} = mysqli_fetch_assoc(${$mpkhaoxt})) {
    $wsektyrtnbu = "row_produto_login";
    $ctwllprzi = "db_user_id_up";
    $db_user_id_up = $row_produto_login["id"];
    ${$GLOBALS["qqomntwynmk"]} = ${$GLOBALS["pcomylxmg"]}["token"];
}
${$GLOBALS["skvkpjivo"]} = "SELECT * FROM configgl WHERE status LIKE 'ACTIVE' && user_id LIKE '{$db_user_id_up}' LIMIT 100";
${$wugpctc} = mysqli_query(${$GLOBALS["nputjnqnxp"]}, ${$exjgkt});
while (${$GLOBALS["tcofevdlsxkj"]} = mysqli_fetch_assoc(${$GLOBALS["looviuxbw"]})) {
    $GLOBALS["oomqvlc"] = "row_produto2";
    $GLOBALS["flebyj"] = "row_produto2";
    $GLOBALS["cgfwdtxwu"] = "config_payloads";
    $daggueuir = "result_produtos3";
    $xvbrejbvi = "row_produto2";
    $bpepjlp = "row_produto2";
    $GLOBALS["udgcyukubun"] = "payload";
    $GLOBALS["pgepim"] = "row_produto2";
    ${$GLOBALS["kfnqeczplch"]} = "\"category\": { \"name\": \"SEM CATEGORIA\", \"id\": " . $row_produto2["category_id"] . ", \"status\": \"ACTIVE\", \"sort_order\": 1000, \"user_id\": " . ${$GLOBALS["zhjryhc"]}["user_id"] . ", \"slug\": \"\", \"description\": \"\" }";
    $GLOBALS["wteryw"] = "config_payloads";
    $GLOBALS["tdreijfvvp"] = "result_produtos3";
    $GLOBALS["ozgkno"] = "row_produto2";
    $GLOBALS["hiqqyuatl"] = "row_produto2";
    $GLOBALS["ogdvzxx"] = "row_produto2";
    $GLOBALS["jfgjvhsym"] = "payload";
    $GLOBALS["lxeynok"] = "db_cat_category_id";
    $db_cat_category_id = ${$bpepjlp}["category_id"];
    $donxxujbs = "row_produto2";
    $GLOBALS["surpkn"] = "row_produto2";
    $result_produtos3 = "SELECT * FROM categoriagl WHERE id='{$db_cat_category_id}' && status LIKE 'ACTIVE' && user_id LIKE '{$db_user_id_up}' LIMIT 1";
    $GLOBALS["gdjklwde"] = "row_produto2";
    ${$GLOBALS["jyciqzw"]} = mysqli_query(${$GLOBALS["blxhmbnje"]}, ${$daggueuir});
    $eqhduumju = "config_payloads2";
    while (${$GLOBALS["yrcjmcdwvl"]} = mysqli_fetch_assoc(${$GLOBALS["jyciqzw"]})) {
        $gshhjicdgs = "row_produto3";
        $GLOBALS["rsujvhfqxsu"] = "config_cat1";
        $dpsrbvvrvvsv = "row_produto3";
        $eniqaashiiik = "row_produto3";
        $GLOBALS["gsvjllyw"] = "row_produto3";
        $vwzejdpdc = "row_produto3";
        $GLOBALS["zpnjfkmayjw"] = "row_produto2";
        $wkxcsxeyyo = "row_produto3";
        $config_cat1 = "\n\"category\": {\n\"name\": \"" . $row_produto3["name"] . "\",\n\"id\": " . ${$GLOBALS["zhjryhc"]}["category_id"] . ",\n\"category_color\": \"" . $row_produto3["category_color"] . "\",\n\"status\": \"" . $row_produto3["status"] . "\",\n\"sort_order\": " . $row_produto3["sort_order"] . ",\n\"user_id\": " . $row_produto2["user_id"] . ",\n\"slug\": \"" . $row_produto3["slug"] . "\",\n\"description\": \"" . $row_produto3["description"] . "\"\n}";
    }
    ${$GLOBALS["udgcyukubun"]} = ${$GLOBALS["zhjryhc"]}["payload"];
    $GLOBALS["msicdjqw"] = "row_produto2";
    $GLOBALS["dkpobrl"] = "row_produto2";
    $GLOBALS["imjpbhd"] = "row_produto2";
    ${$eqhduumju} = ${$GLOBALS["wteryw"]};
    ${$GLOBALS["cgfwdtxwu"]} = "\n{\n\"name\": \"" . ${$GLOBALS["zhjryhc"]}["name"] . "\",\n\"SSH\": \"" . ${$GLOBALS["imjpbhd"]}["SSH"] . "\",\n\"server_hostname\": \"" . ${$GLOBALS["zhjryhc"]}["server_hostname"] . "\",\n\"description\": \"" . ${$GLOBALS["zhjryhc"]}["description"] . "\",\n\"username\": \"" . ${$GLOBALS["zhjryhc"]}["username"] . "\",\n\"server_port\": " . ${$GLOBALS["zhjryhc"]}["server_port"] . ",\n\"icon_image\": \"" . ${$GLOBALS["zhjryhc"]}["icon_image"] . "\",\n\"user_id\": " . ${$GLOBALS["dkpobrl"]}["user_id"] . ",\n\"password\": \"" . ${$GLOBALS["zhjryhc"]}["password"] . "\",\n\"udp_port\": \"" . ${$GLOBALS["hiqqyuatl"]}["udp_port"] . "\",\n\"category_id\": " . ${$GLOBALS["zhjryhc"]}["category_id"] . ",\n\"v2ray_uuid\": \"" . ${$GLOBALS["msicdjqw"]}["v2ray_uuid"] . "\",\n\"primary_dns_server\": \"" . ${$donxxujbs}["primary_dns_server"] . "\",\n\"payload\": \"" . ${$GLOBALS["jfgjvhsym"]} . "\",\n\"status\": \"" . ${$GLOBALS["zhjryhc"]}["status"] . "\",\n\"secondary_dns_server\": \"" . ${$GLOBALS["ogdvzxx"]}["secondary_dns_server"] . "\",\n\"sni\": \"" . ${$GLOBALS["flebyj"]}["sni"] . "\",\n\"config_mode\": \"" . ${$GLOBALS["ozgkno"]}["config_mode"] . "\",\n\"config_v2ray\": \"" . ${$GLOBALS["zhjryhc"]}["config_v2ray"] . "\",\n\"url_check_user\": \"" . ${$GLOBALS["surpkn"]}["url_check_user"] . "\",\n\"config_openvpn\": \"" . ${$GLOBALS["gdjklwde"]}["ovpn_config"] . "\",\n\"proxy_hostname\": \"" . ${$GLOBALS["pgepim"]}["proxy_hostname"] . "\",\n\"sort_order\": " . ${$GLOBALS["zhjryhc"]}["sort_order"] . ",\n\"id\": " . ${$xvbrejbvi}["id"] . ",\n\"proxy_port\": " . ${$GLOBALS["zhjryhc"]}["proxy_port"] . "," . ${$GLOBALS["kfnqeczplch"]} . "\n}";
    if (${$GLOBALS["xmlawetvflb"]} != "") {
        $GLOBALS["xrmgpkeo"] = "config_payloads2";
        ${$GLOBALS["xmlawetvflb"]} = $config_payloads2 . ",";
    }
    ${$GLOBALS["xmlawetvflb"]} .= ${$GLOBALS["qqbkellqys"]};
}
print_r(${$jgyyamhcvtvm} . ${$GLOBALS["gkpttcii"]} . ${$GLOBALS["wyeeuyupzx"]});
