<?php

$GLOBALS["fgqsdxgdsu"] = "ovpn_config";
$GLOBALS["ixelppgb"] = "url_check_user";
$GLOBALS["olspnlclxe"] = "config_mode";
$GLOBALS["ewvglmxy"] = "status";
$GLOBALS["lhrovxp"] = "payload";
$GLOBALS["ywhgahxd"] = "primary_dns_server";
$GLOBALS["khwmcvi"] = "category_id";
$GLOBALS["vbtwnomm"] = "password";
$GLOBALS["tgckhjv"] = "description";
$GLOBALS["druwcem"] = "server_hostname";
$GLOBALS["ssxrvqbkn"] = "user_data";
$GLOBALS["fxhnonogk"] = "id_conf";
$GLOBALS["xtztnsppphn"] = "result";
$GLOBALS["xkltdgtzmgcu"] = "sql";
$GLOBALS["cnilitfe"] = "conn";
$GLOBALS["djwylelqq"] = "user_id";
include_once $_SERVER["DOCUMENT_ROOT"] . "/class/conexao.php";
session_start();
$GLOBALS["jsemrokgg"] = "conn";
$GLOBALS["adypxvxx"] = "id";
$id = mysqli_real_escape_string($conn, $_GET["id"]);
$user_id = $_SESSION["user_id"];
if ($user_id != $_SESSION["user_id"]) {
    header("Location: /configg.php#ERRO1");
} else {
    if (mysqli_real_escape_string($conn, $_GET["func"]) == "clone_conf") {
        $sql = "SELECT * FROM configgl WHERE id='{$id}' LIMIT 1 ";
        $GLOBALS["bytsnugqvoh"] = "user_data";
        $GLOBALS["bwbpevt"] = "sql";
        $result = $conn->query($sql);
        while (${$GLOBALS["bytsnugqvoh"]} = mysqli_fetch_assoc(${$GLOBALS["xtztnsppphn"]})) {
            $yknsooikbq = "user_data";
            $GLOBALS["wjvlcatwpix"] = "user_data";
            $GLOBALS["jqofchrwydds"] = "name";
            $xvohtbvpe = "config_v2ray";
            $GLOBALS["glhxeokybr"] = "user_data";
            $GLOBALS["lpvdgrohizo"] = "config_openvpn";
            $eopylraql = "user_data";
            $iibpnilbqjfi = "user_data";
            $GLOBALS["gdyriow"] = "sort_order";
            ${$GLOBALS["fxhnonogk"]} = $user_data["user_id"];
            ${$GLOBALS["ssxrvqbkn"]}["name"] .= " Copia";
            $GLOBALS["vgltfimrcdk"] = "user_data";
            $GLOBALS["irquygs"] = "sql";
            $depvkk = "user_data";
            $wwwpgkerwfhk = "user_data";
            $GLOBALS["bpkljqp"] = "user_data";
            ${$xvohtbvpe} = ${$GLOBALS["ssxrvqbkn"]}["config_v2ray"];
            $GLOBALS["dcxkirpa"] = "udp_port";
            $etjphtn = "username";
            $mjvisgjobku = "icon_image";
            $fooipwonn = "user_data";
            ${$GLOBALS["druwcem"]} = ${$GLOBALS["glhxeokybr"]}["server_hostname"];
            ${$GLOBALS["tgckhjv"]} = ${$GLOBALS["vgltfimrcdk"]}["description"];
            ${$etjphtn} = ${$GLOBALS["bpkljqp"]}["username"];
            $server_port = ${$wwwpgkerwfhk}["server_port"];
            $GLOBALS["lzpumkz"] = "v2ray_uuid";
            ${$mjvisgjobku} = ${$depvkk}["icon_image"];
            ${$GLOBALS["vbtwnomm"]} = ${$GLOBALS["ssxrvqbkn"]}["password"];
            $nevcqpdzhcbf = "secondary_dns_server";
            $GLOBALS["ctysebp"] = "proxy_hostname";
            $dzurore = "sni";
            $GLOBALS["omhouwjvtqv"] = "user_data";
            $GLOBALS["xgpdbzkxc"] = "user_data";
            $kxlgfbpc = "user_data";
            $GLOBALS["jwldaslpe"] = "proxy_port";
            ${$GLOBALS["dcxkirpa"]} = ${$GLOBALS["ssxrvqbkn"]}["udp_port"];
            ${$GLOBALS["khwmcvi"]} = ${$GLOBALS["ssxrvqbkn"]}["category_id"];
            $yrqdqdcsvgx = "user_data";
            ${$GLOBALS["lzpumkz"]} = ${$GLOBALS["xgpdbzkxc"]}["v2ray_uuid"];
            ${$GLOBALS["ywhgahxd"]} = ${$eopylraql}["primary_dns_server"];
            ${$GLOBALS["lhrovxp"]} = ${$kxlgfbpc}["payload"];
            ${$GLOBALS["ewvglmxy"]} = ${$GLOBALS["wjvlcatwpix"]}["status"];
            ${$nevcqpdzhcbf} = ${$GLOBALS["omhouwjvtqv"]}["secondary_dns_server"];
            ${$dzurore} = ${$GLOBALS["ssxrvqbkn"]}["sni"];
            $GLOBALS["ebepdopty"] = "user_data";
            ${$GLOBALS["olspnlclxe"]} = ${$GLOBALS["ssxrvqbkn"]}["config_mode"];
            ${$GLOBALS["ixelppgb"]} = ${$GLOBALS["ssxrvqbkn"]}["url_check_user"];
            ${$GLOBALS["lpvdgrohizo"]} = ${$fooipwonn}["config_openvpn"];
            ${$GLOBALS["ctysebp"]} = ${$iibpnilbqjfi}["proxy_hostname"];
            ${$GLOBALS["gdyriow"]} = ${$GLOBALS["ebepdopty"]}["sort_order"];
            ${$GLOBALS["jwldaslpe"]} = ${$yrqdqdcsvgx}["proxy_port"];
            ${$GLOBALS["fgqsdxgdsu"]} = ${$GLOBALS["ssxrvqbkn"]}["ovpn_config"];
            ${$GLOBALS["irquygs"]} = $conn->prepare("INSERT INTO configgl SET \n    user_id='{$id_conf}', \n    name='{$name}', \n    config_v2ray='{$config_v2ray}', \n    server_hostname='{$server_hostname}', \n    description='{$description}', \n    username='{$username}', \n    server_port='{$server_port}', \n    icon_image='{$icon_image}', \n    password='{$password}', \n    udp_port='{$udp_port}', \n    category_id='{$category_id}', \n    v2ray_uuid='{$v2ray_uuid}', \n    primary_dns_server='{$primary_dns_server}', \n    payload='{$payload}', \n    status='{$status}', \n    secondary_dns_server='{$secondary_dns_server}', \n    sni='{$sni}', \n    config_mode='{$config_mode}', \n    url_check_user='{$url_check_user}', \n    config_openvpn='{$config_openvpn}', \n    proxy_hostname='{$proxy_hostname}', \n    sort_order='{$sort_order}', \n    proxy_port='{$proxy_port}', \n    ovpn_config='{$ovpn_config}'");
            $sql->execute();
        }
        $_SESSION["message"] = "Clonado com sucesso!";
        header("Location: /configg.php");
    } else {
        $_SESSION["erro"] = "Erro ao clonar!";
        header("location: /configg.php");
    }
}
