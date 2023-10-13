<?php

$GLOBALS["uiatgpfwncr"] = "ordem";
$GLOBALS["jqnjpdavnit"] = "status";
$GLOBALS["uvgcqlx"] = "primary_dns_server";
$GLOBALS["jsutmrqet"] = "udp_port";
$GLOBALS["mzhgiqlo"] = "cor";
$GLOBALS["ovewhgs"] = "ovpn_config";
$GLOBALS["lkmqslphy"] = "proxy_port";
$GLOBALS["ywlzbvlfek"] = "sort_order";
$GLOBALS["ylfooddp"] = "config_openvpn";
$GLOBALS["llwjeyhmyye"] = "url_check_user";
$GLOBALS["jinbdelwa"] = "config_mode";
$GLOBALS["jpvgtjaiaf"] = "sni";
$GLOBALS["djgmgiw"] = "secondary_dns_server";
$GLOBALS["nxzyvabmrq"] = "payload";
$GLOBALS["zqhqzmt"] = "v2ray_uuid";
$GLOBALS["rvinvxqxl"] = "category_id";
$GLOBALS["inssvvft"] = "password";
$GLOBALS["irqlrxwf"] = "description";
$GLOBALS["pauegezyxrak"] = "config_v2ray";
$GLOBALS["dwrpjke"] = "name";
$GLOBALS["bjhaiyt"] = "nome";
$GLOBALS["dynituhro"] = "resultado_usuario";
$GLOBALS["uxuwwr"] = "id";
$GLOBALS["vpummggrigt"] = "result_usuario";
$GLOBALS["zujcprachom"] = "conn";
$GLOBALS["peirhfanhugg"] = "row_produto_login";
$GLOBALS["jdlsoqvtxb"] = "resultado_produtos_login";
$GLOBALS["ogawzfn"] = "resultado_produtos_login";
$GLOBALS["jxaoissp"] = "login";
session_start();
if ($_SESSION["painel"]["login"] != "") {
} else {
    echo "<br><br><center><h1>REDIRECIONANDO...</h1></center>";
    echo "<script>\nwindow.location='/loging.php';\n</script>";
    exit;
}
$GLOBALS["jjmigyqwx"] = "result_produtos_login";
$iktuuuv = "conn";
include_once $_SERVER["DOCUMENT_ROOT"] . "/class/conexao.php";
$prcsco = "conn";
${$GLOBALS["jxaoissp"]} = $_SESSION["painel"]["login"];
$gmfqxxvt = "result_produtos_login";
${$GLOBALS["jjmigyqwx"]} = "SELECT * FROM usuariogl WHERE login LIKE '{$login}'";
${$GLOBALS["jdlsoqvtxb"]} = mysqli_query(${$iktuuuv}, ${$gmfqxxvt});
$yptvowpst = "conn";
while (${$GLOBALS["peirhfanhugg"]} = mysqli_fetch_assoc(${$GLOBALS["ogawzfn"]})) {
    $GLOBALS["kdohulggkb"] = "db_user_id";
    $nbqmfhph = "row_produto_login";
    $GLOBALS["revsrqbh"] = "user_id";
    $xqgrcidlm = "db_user_id";
    $db_user_id = $row_produto_login["id"];
    $user_id = $db_user_id;
}
if (mysqli_real_escape_string(${$prcsco}, $_GET["func"]) == "del_cat") {
    $nclobcf = "id";
    $gamefvufjemz = "result_usuario";
    $bpivhorull = "conn";
    $iyhvtsm = "resultado_usuario";
    $id = mysqli_real_escape_string(${$GLOBALS["zujcprachom"]}, $_GET["id"]);
    ${$GLOBALS["vpummggrigt"]} = "DELETE FROM configgl WHERE id='{$id}' && user_id='{$db_user_id}' ";
    ${$iyhvtsm} = mysqli_query(${$bpivhorull}, ${$gamefvufjemz});
    $_SESSION["message"] = "Deletado com sucesso!";
    header("location: /configg.php");
} else {
    if (mysqli_real_escape_string(${$yptvowpst}, $_GET["func"]) == "desab_cat") {
        $GLOBALS["ctzisdxuxyej"] = "resultado_usuario";
        $GLOBALS["vsagydsdk"] = "result_usuario";
        $GLOBALS["zesfuqw"] = "conn";
        ${$GLOBALS["uxuwwr"]} = mysqli_real_escape_string($conn, $_GET["id"]);
        ${$GLOBALS["vpummggrigt"]} = "UPDATE configgl SET status='INACTIVE' WHERE id='{$id}' && user_id='{$db_user_id}'";
        ${$GLOBALS["ctzisdxuxyej"]} = mysqli_query(${$GLOBALS["zujcprachom"]}, ${$GLOBALS["vsagydsdk"]});
        $_SESSION["message"] = "Desativado com sucesso!";
        header("location: /configg.php");
    } else {
        if (mysqli_real_escape_string(${$GLOBALS["zujcprachom"]}, $_GET["func"]) == "habilit_cat") {
            $biagnkd = "id";
            $id = mysqli_real_escape_string(${$GLOBALS["zujcprachom"]}, $_GET["id"]);
            ${$GLOBALS["vpummggrigt"]} = "UPDATE configgl SET status='ACTIVE' WHERE id='{$id}' && user_id='{$db_user_id}'";
            $GLOBALS["pwzwdhxudw"] = "result_usuario";
            ${$GLOBALS["dynituhro"]} = mysqli_query(${$GLOBALS["zujcprachom"]}, $result_usuario);
            $_SESSION["message"] = "Ativada com sucesso!";
            header("location: /configg.php");
        }
    }
}
if (mysqli_real_escape_string(${$GLOBALS["zujcprachom"]}, $_GET["ed"]) != "") {
    if (mysqli_real_escape_string(${$GLOBALS["zujcprachom"]}, $_GET["ed"]) == "EDIT") {
        $lponfseshud = "proxy_hostname";
        $GLOBALS["fyptkfwoq"] = "username";
        $GLOBALS["jenbdjco"] = "payload";
        $GLOBALS["kceiuncslr"] = "primary_dns_server";
        $rtxkljib = "name";
        ${$GLOBALS["uxuwwr"]} = mysqli_real_escape_string(${$GLOBALS["zujcprachom"]}, $_GET["ida"]);
        $GLOBALS["fclpqzlnfhj"] = "ovpn_config";
        $GLOBALS["psrihuitqi"] = "server_hostname";
        ${$rtxkljib} = addslashes($_POST["name"]);
        $puvifiufk = "payload";
        $GLOBALS["drtltnyqioo"] = "ordem";
        $mwjviedy = "payload";
        $GLOBALS["yadygifjfoz"] = "icon_image";
        ${$GLOBALS["bjhaiyt"]} = "TEST";
        ${$GLOBALS["drtltnyqioo"]} = addslashes($_POST["sort_order"]);
        $rnjtgs = "payload";
        ${$GLOBALS["dwrpjke"]} = addslashes($_POST["name"]);
        ${$GLOBALS["pauegezyxrak"]} = addslashes($_POST["config_v2ray"]);
        $ncuzivrd = "payload";
        ${$GLOBALS["psrihuitqi"]} = addslashes($_POST["server_hostname"]);
        ${$GLOBALS["irqlrxwf"]} = addslashes($_POST["description"]);
        $GLOBALS["dfmifvpx"] = "payload";
        $GLOBALS["cpboslpjbha"] = "udp_port";
        ${$GLOBALS["fyptkfwoq"]} = addslashes($_POST["username"]);
        $server_port = addslashes($_POST["server_port"]);
        ${$GLOBALS["yadygifjfoz"]} = addslashes($_POST["icon_image"]);
        $GLOBALS["gbyezjjhj"] = "ovpn_config";
        ${$GLOBALS["inssvvft"]} = addslashes($_POST["password"]);
        ${$GLOBALS["cpboslpjbha"]} = addslashes($_POST["udp_port"]);
        ${$GLOBALS["rvinvxqxl"]} = addslashes($_POST["category"]);
        ${$GLOBALS["zqhqzmt"]} = addslashes($_POST["v2ray_uuid"]);
        ${$GLOBALS["kceiuncslr"]} = addslashes($_POST["primary_dns_server"]);
        ${$puvifiufk} = addslashes($_POST["payload"]);
        ${$GLOBALS["nxzyvabmrq"]} = str_replace("\\r", "", ${$GLOBALS["dfmifvpx"]});
        $ornnvpm = "status";
        ${$GLOBALS["jenbdjco"]} = str_replace("\\n", "", ${$ncuzivrd});
        $skrxmkmn = "payload";
        $GLOBALS["kjpmglnbf"] = "ovpn_config";
        ${$mwjviedy} = json_encode(${$rnjtgs}, JSON_PRETTY_PRINT);
        $GLOBALS["suvqmfirvdj"] = "resultado_usuario";
        ${$skrxmkmn} = str_replace("\"", "", ${$GLOBALS["nxzyvabmrq"]});
        $lkwdghvg = "ovpn_config";
        ${$GLOBALS["nxzyvabmrq"]} = str_replace("\n      ", "", ${$GLOBALS["nxzyvabmrq"]});
        $uvdyenivk = "status";
        $status = addslashes($_POST["status"]);
        ${$GLOBALS["djgmgiw"]} = addslashes($_POST["secondary_dns_server"]);
        ${$GLOBALS["jpvgtjaiaf"]} = addslashes($_POST["sni"]);
        ${$GLOBALS["jinbdelwa"]} = addslashes($_POST["config_mode"]);
        $GLOBALS["bhvhkjqc"] = "conn";
        ${$GLOBALS["llwjeyhmyye"]} = addslashes($_POST["url_check_user"]);
        ${$GLOBALS["ylfooddp"]} = addslashes($_POST["config_openvpn"]);
        ${$lponfseshud} = addslashes($_POST["proxy_hostname"]);
        $rtwwdcdj = "result_usuario";
        ${$GLOBALS["ywlzbvlfek"]} = addslashes($_POST["sort_order"]);
        ${$GLOBALS["lkmqslphy"]} = addslashes($_POST["proxy_port"]);
        ${$GLOBALS["kjpmglnbf"]} = addslashes($_POST["ovpn_config"]);
        ${$GLOBALS["fclpqzlnfhj"]} = str_replace("\\r", "", ${$GLOBALS["ovewhgs"]});
        ${$GLOBALS["ovewhgs"]} = str_replace("\\n", "", ${$GLOBALS["ovewhgs"]});
        ${$lkwdghvg} = json_encode(${$GLOBALS["gbyezjjhj"]}, JSON_PRETTY_PRINT);
        ${$GLOBALS["ovewhgs"]} = str_replace("\"", "", ${$GLOBALS["ovewhgs"]});
        ${$GLOBALS["ovewhgs"]} = str_replace("\n      ", "", ${$GLOBALS["ovewhgs"]});
        ${$ornnvpm} = addslashes($_POST["status"]);
        ${$rtwwdcdj} = "UPDATE configgl SET\nstatus='{$status}',\nname='{$name}',\nconfig_v2ray='{$config_v2ray}',\nserver_hostname='{$server_hostname}',\ndescription='{$description}',\nusername='{$username}',\nserver_port='{$server_port}',\nicon_image='{$icon_image}',\nuser_id='{$user_id}',\novpn_config='{$ovpn_config}',\npassword='{$password}',\nudp_port='{$udp_port}',\ncategory_id='{$category_id}',\nv2ray_uuid='{$v2ray_uuid}',\nprimary_dns_server='{$primary_dns_server}',\npayload='{$payload}',\nsecondary_dns_server='{$secondary_dns_server}',\nsni='{$sni}',\nconfig_mode='{$config_mode}',\nurl_check_user='{$url_check_user}',\nconfig_openvpn='{$config_openvpn}',\nproxy_hostname='{$proxy_hostname}',\nsort_order='{$sort_order}',\nproxy_port='{$proxy_port}'\n\nWHERE id='{$id}' && user_id='{$db_user_id}'";
        ${$GLOBALS["suvqmfirvdj"]} = mysqli_query(${$GLOBALS["bhvhkjqc"]}, ${$GLOBALS["vpummggrigt"]});
        if (mysqli_affected_rows(${$GLOBALS["zujcprachom"]})) {
            $_SESSION["message"] = "Editado com sucesso!";
            header("location: /configg.php");
        } else {
            $_SESSION["erro"] = "N\xc3\xa3o houve mudan\xc3\xa7as!";
            header("location: /configg.php");
        }
    } else {
        if (mysqli_real_escape_string(${$GLOBALS["zujcprachom"]}, $_GET["ed"]) == "ADD") {
            $jqflrdvzf = "ovpn_config";
            $jncemrxhxjr = "v2ray_uuid";
            $ixctgwhcgbp = "ordem";
            $GLOBALS["leobuxfxw"] = "payload";
            $fsgbkjm = "username";
            ${$GLOBALS["bjhaiyt"]} = addslashes($_POST["name"]);
            $GLOBALS["mhcpgjhpvcc"] = "resultado_usuario";
            ${$ixctgwhcgbp} = addslashes($_POST["sort_order"]);
            $wzoxbcmifmjc = "proxy_hostname";
            $GLOBALS["ysveykeoly"] = "ovpn_config";
            $uchjccktovme = "category_id";
            $GLOBALS["bqtfigwlmhym"] = "server_hostname";
            $pgpptgnf = "payload";
            $eomamsnplh = "name";
            $olprytqg = "config_v2ray";
            ${$GLOBALS["mzhgiqlo"]} = addslashes($_POST["category_color"]);
            $pzpvpvvwkq = "conn";
            $GLOBALS["eqjnsoirjtn"] = "conn";
            ${$eomamsnplh} = addslashes($_POST["name"]);
            $GLOBALS["crgreilcwsw"] = "icon_image";
            ${$olprytqg} = addslashes($_POST["config_v2ray"]);
            $GLOBALS["wxuiwy"] = "payload";
            ${$GLOBALS["bqtfigwlmhym"]} = addslashes($_POST["server_hostname"]);
            $smwhsyi = "status";
            ${$GLOBALS["irqlrxwf"]} = addslashes($_POST["description"]);
            $GLOBALS["glmuuuvg"] = "config_mode";
            ${$fsgbkjm} = addslashes($_POST["username"]);
            $server_port = addslashes($_POST["server_port"]);
            ${$GLOBALS["crgreilcwsw"]} = addslashes($_POST["icon_image"]);
            ${$GLOBALS["inssvvft"]} = addslashes($_POST["password"]);
            $zgqrojyzt = "sort_order";
            ${$GLOBALS["jsutmrqet"]} = addslashes($_POST["udp_port"]);
            ${$uchjccktovme} = addslashes($_POST["category"]);
            ${$jncemrxhxjr} = addslashes($_POST["v2ray_uuid"]);
            ${$GLOBALS["uvgcqlx"]} = addslashes($_POST["primary_dns_server"]);
            ${$GLOBALS["nxzyvabmrq"]} = addslashes($_POST["payload"]);
            $GLOBALS["tldromfezlo"] = "url_check_user";
            ${$GLOBALS["nxzyvabmrq"]} = str_replace("\\r", "", ${$GLOBALS["leobuxfxw"]});
            $GLOBALS["gldsodvifo"] = "sni";
            ${$pgpptgnf} = str_replace("\\n", "", ${$GLOBALS["wxuiwy"]});
            ${$GLOBALS["jqnjpdavnit"]} = addslashes($_POST["status"]);
            ${$GLOBALS["djgmgiw"]} = addslashes($_POST["secondary_dns_server"]);
            $ddysfmqe = "proxy_port";
            ${$GLOBALS["gldsodvifo"]} = addslashes($_POST["sni"]);
            ${$GLOBALS["glmuuuvg"]} = addslashes($_POST["config_mode"]);
            ${$GLOBALS["tldromfezlo"]} = addslashes($_POST["url_check_user"]);
            ${$GLOBALS["ylfooddp"]} = addslashes($_POST["config_openvpn"]);
            ${$wzoxbcmifmjc} = addslashes($_POST["proxy_hostname"]);
            ${$zgqrojyzt} = addslashes($_POST["sort_order"]);
            ${$ddysfmqe} = addslashes($_POST["proxy_port"]);
            ${$GLOBALS["ovewhgs"]} = addslashes($_POST["ovpn_config"]);
            ${$GLOBALS["ovewhgs"]} = str_replace("\\r", "", ${$GLOBALS["ysveykeoly"]});
            ${$GLOBALS["ovewhgs"]} = str_replace("\\n", "", ${$jqflrdvzf});
            if (${$smwhsyi} == "") {
                ${$GLOBALS["jqnjpdavnit"]} = "ACTIVE";
            }
            ${$GLOBALS["vpummggrigt"]} = "INSERT INTO configgl SET\nstatus='{$status}',\nname='{$nome}',\nconfig_v2ray='{$config_v2ray}',\nserver_hostname='{$server_hostname}',\ndescription='{$description}',\nusername='{$username}',\nserver_port='{$server_port}',\nicon_image='{$icon_image}',\nuser_id='{$user_id}',\novpn_config='{$ovpn_config}',\npassword='{$password}',\nudp_port='{$udp_port}',\ncategory_id='{$category_id}',\nv2ray_uuid='{$v2ray_uuid}',\nprimary_dns_server='{$primary_dns_server}',\npayload='{$payload}',\nsecondary_dns_server='{$secondary_dns_server}',\nsni='{$sni}',\nconfig_mode='{$config_mode}',\nurl_check_user='{$url_check_user}',\nconfig_openvpn='{$config_openvpn}',\nproxy_hostname='{$proxy_hostname}',\nsort_order='{$sort_order}',\nproxy_port='{$proxy_port}'\n    ";
            ${$GLOBALS["mhcpgjhpvcc"]} = mysqli_query(${$GLOBALS["eqjnsoirjtn"]}, ${$GLOBALS["vpummggrigt"]});
            if (mysqli_affected_rows(${$pzpvpvvwkq})) {
                $_SESSION["message"] = "Adcionado com sucesso!";
                header("location: /configg.php");
            } else {
                $_SESSION["erro"] = "Erro ao criar!";
                header("location: /configg.php");
            }
        } else {
            $cijaeu = "status";
            $GLOBALS["sjedymlfbnll"] = "id";
            $cergwvolksf = "conn";
            $pqsklgl = "nome";
            $id = addslashes($_POST["edit_qual_id"]);
            $nome = addslashes($_POST["name"]);
            ${$GLOBALS["uiatgpfwncr"]} = addslashes($_POST["sort_order"]);
            $GLOBALS["vejmksonp"] = "resultado_usuario";
            ${$GLOBALS["mzhgiqlo"]} = addslashes($_POST["category_color"]);
            $zcolwhiimyi = "result_usuario";
            ${$cijaeu} = addslashes($_POST["status"]);
            ${$GLOBALS["vpummggrigt"]} = "INSERT INTO configgl SET name='{$nome}'";
            ${$GLOBALS["vejmksonp"]} = mysqli_query(${$GLOBALS["zujcprachom"]}, ${$zcolwhiimyi});
            if (mysqli_affected_rows(${$cergwvolksf})) {
                $_SESSION["message"] = "Adcionado com sucesso!";
                header("location: /configg.php");
            } else {
                $_SESSION["erro"] = "Erro ao criar!";
                header("location: /configg.php");
            }
        }
    }
}
