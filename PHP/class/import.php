<?php

$GLOBALS["gkacbilr"] = "result_usuario";
$GLOBALS["fpilygxwv"] = "sort_order";
$GLOBALS["jfsqxes"] = "proxy_hostname";
$GLOBALS["vckmlkec"] = "v2ray_uuid";
$GLOBALS["utupfoysuar"] = "udp_port";
$GLOBALS["yynjhlgt"] = "server_hostname";
$GLOBALS["kvwnxosqkoq"] = "config_mode";
$GLOBALS["ydysddqh"] = "username";
$GLOBALS["qjkkeb"] = "dados";
$GLOBALS["mwrdre"] = "nome";
$GLOBALS["culvdgsfuk"] = "status";
$GLOBALS["ktjbvdidhw"] = "user_id";
$GLOBALS["nhdvqbondll"] = "db_user_id";
$GLOBALS["fvvrbsw"] = "result_produtos_login";
$GLOBALS["ngymoci"] = "conn";
$GLOBALS["cvhnbucbod"] = "resultado_produtos_login";
$GLOBALS["sjcjhzkvqy"] = "login";
session_start();
$GLOBALS["suoxkncf"] = "result_produtos_login";
include_once $_SERVER["DOCUMENT_ROOT"] . "/class/conexao.php";
$login = $_SESSION["painel"]["login"];
$result_produtos_login = "SELECT * FROM usuariogl WHERE login LIKE '{$login}'";
$resultado_produtos_login = mysqli_query($conn, $result_produtos_login);
$elmpqhuh = "row_produto_login";
while (${$elmpqhuh} = mysqli_fetch_assoc(${$GLOBALS["cvhnbucbod"]})) {
    $GLOBALS["ultvuxch"] = "row_produto_login";
    $xlkeontgye = "db_user_id";
    ${$GLOBALS["nhdvqbondll"]} = $row_produto_login["id"];
    ${$GLOBALS["ktjbvdidhw"]} = ${$xlkeontgye};
}
if (mysqli_real_escape_string(${$GLOBALS["ngymoci"]}, $_GET["func"]) == "config") {
    $lgecdib = "config_mode";
    $GLOBALS["dbgijxksrwrp"] = "dados";
    $nsltadilkyc = "proxy_port";
    $GLOBALS["bkwxmeotj"] = "json";
    $GLOBALS["giipqgfw"] = "config_mode";
    $tooocdfaci = "password";
    $cwghqrerfe = "url_check_user";
    $GLOBALS["slxtxx"] = "json";
    $ulzuvpdskymx = "dados";
    $xafuesoftg = "config_v2ray";
    $json = $_POST["imp"];
    $dados = json_decode($json, true);
    ${$GLOBALS["culvdgsfuk"]} = $dados["status"];
    $GLOBALS["vvcvfjohovbp"] = "category_id";
    $qrsnvvvbtu = "dados";
    $GLOBALS["hclecqvwlxr"] = "description";
    $jmsqzqsaj = "dados";
    ${$GLOBALS["mwrdre"]} = $dados["name"];
    $dxrqri = "config_mode";
    $GLOBALS["kgehbqbaao"] = "dados";
    ${$GLOBALS["hclecqvwlxr"]} = ${$GLOBALS["qjkkeb"]}["description"];
    ${$GLOBALS["ydysddqh"]} = ${$GLOBALS["qjkkeb"]}["username"];
    ${$tooocdfaci} = ${$qrsnvvvbtu}["password"];
    ${$GLOBALS["kvwnxosqkoq"]} = ${$GLOBALS["qjkkeb"]}["config_mode"];
    $vmjzfum = "payload";
    $mnlnnsicity = "icon_image";
    $bwdzrpln = "dados";
    $GLOBALS["iyrsydkar"] = "dados";
    $vmxbpidkl = "dados";
    $GLOBALS["ftnojtz"] = "sni";
    $GLOBALS["hprjxfxgi"] = "primary_dns_server";
    $nwgdje = "secondary_dns_server";
    if (${$GLOBALS["kvwnxosqkoq"]} == "ssh_direct") {
        ${$GLOBALS["kvwnxosqkoq"]} = "SSH_DIRECT";
    } else {
        if (${$GLOBALS["giipqgfw"]} == "ssl_direct") {
            ${$GLOBALS["kvwnxosqkoq"]} = "SSL_DIRECT";
        } else {
            if (${$lgecdib} == "ssh_proxy") {
                $GLOBALS["aivfsid"] = "config_mode";
                $config_mode = "SSH_PROXY";
            } else {
                if (${$GLOBALS["kvwnxosqkoq"]} == "ssl_proxy") {
                    ${$GLOBALS["kvwnxosqkoq"]} = "SSL_PROXY";
                } else {
                    if (${$GLOBALS["kvwnxosqkoq"]} == "ovpn_proxy") {
                        ${$GLOBALS["kvwnxosqkoq"]} = "OVPN_PROXY";
                    } else {
                        if (${$GLOBALS["kvwnxosqkoq"]} == "ovpn_ssl") {
                            ${$GLOBALS["kvwnxosqkoq"]} = "OVPN_SSL";
                        } else {
                            if (${$dxrqri} == "ovpn_ssl_proxy") {
                                ${$GLOBALS["kvwnxosqkoq"]} = "OVPN_SSL_PROXY";
                            } else {
                                ${$GLOBALS["kvwnxosqkoq"]} = ${$GLOBALS["kvwnxosqkoq"]};
                            }
                        }
                    }
                }
            }
        }
    }
    $GLOBALS["qthecmkwdt"] = "dados";
    $GLOBALS["phhlosgdt"] = "dados";
    ${$xafuesoftg} = ${$GLOBALS["qjkkeb"]}["config_v2ray"];
    ${$vmjzfum} = ${$GLOBALS["kgehbqbaao"]}["payload"];
    ${$GLOBALS["yynjhlgt"]} = ${$GLOBALS["qthecmkwdt"]}["server_hostname"];
    $server_port = ${$GLOBALS["iyrsydkar"]}["server_port"];
    $asnazxdr = "dados";
    ${$GLOBALS["utupfoysuar"]} = ${$vmxbpidkl}["udp_port"];
    ${$nsltadilkyc} = ${$GLOBALS["phhlosgdt"]}["proxy_port"];
    ${$GLOBALS["ftnojtz"]} = ${$GLOBALS["qjkkeb"]}["sni"];
    ${$mnlnnsicity} = ${$GLOBALS["qjkkeb"]}["icon_image"];
    ${$GLOBALS["vckmlkec"]} = ${$bwdzrpln}["v2ray_uuid"];
    ${$GLOBALS["hprjxfxgi"]} = ${$GLOBALS["qjkkeb"]}["primary_dns_server"];
    ${$nwgdje} = ${$GLOBALS["qjkkeb"]}["secondary_dns_server"];
    ${$cwghqrerfe} = ${$GLOBALS["qjkkeb"]}["url_check_user"];
    $nvcmooiyqf = "config_openvpn";
    $config_openvpn = ${$GLOBALS["qjkkeb"]}["config_openvpn"];
    $gfkzeorpj = "sort_order";
    ${$GLOBALS["jfsqxes"]} = ${$GLOBALS["qjkkeb"]}["proxy_hostname"];
    ${$GLOBALS["fpilygxwv"]} = ${$GLOBALS["qjkkeb"]}["sort_order"];
    if (${$gfkzeorpj} == "") {
        ${$GLOBALS["fpilygxwv"]} = "1";
    } else {
        ${$GLOBALS["fpilygxwv"]} = ${$GLOBALS["fpilygxwv"]};
    }
    ${$GLOBALS["vvcvfjohovbp"]} = ${$GLOBALS["qjkkeb"]}["category_id"];
    if (${$asnazxdr}) {
        $GLOBALS["ggbtbwduyxi"] = "resultado_usuario";
        $GLOBALS["kcjhcuw"] = "result_usuario";
        $result_usuario = "INSERT INTO configgl SET\nstatus='{$status}',\nname='{$nome}',\nconfig_v2ray='{$config_v2ray}',\nserver_hostname='{$server_hostname}',\ndescription='{$description}',\nusername='{$username}',\nserver_port='{$server_port}',\nicon_image='{$icon_image}',\nuser_id='{$user_id}',\novpn_config='{$ovpn_config}',\npassword='{$password}',\nudp_port='{$udp_port}',\ncategory_id='{$category_id}',\nv2ray_uuid='{$v2ray_uuid}',\nprimary_dns_server='{$primary_dns_server}',\npayload='{$payload}',\nsecondary_dns_server='{$secondary_dns_server}',\nsni='{$sni}',\nconfig_mode='{$config_mode}',\nurl_check_user='{$url_check_user}',\nconfig_openvpn='{$config_openvpn}',\nproxy_hostname='{$proxy_hostname}',\nsort_order='{$sort_order}',\nproxy_port='{$proxy_port}'";
        $etuvfupf = "conn";
        $resultado_usuario = mysqli_query(${$GLOBALS["ngymoci"]}, ${$GLOBALS["gkacbilr"]});
        if (mysqli_affected_rows($conn)) {
            $_SESSION["message"] = "Importado com sucesso!";
            header("location: /configg.php");
        } else {
            $_SESSION["erro"] = "Erro!";
            header("location: /configg.php");
        }
    } else {
        $_SESSION["erro"] = "Erro de syntax!";
        header("location: /configg.php");
    }
}
