<?php

$GLOBALS["lghetzkwdj"] = "db_usuario_acess";
$GLOBALS["eeujhhv"] = "perm";
$GLOBALS["spweikl"] = "URIadmin";
$GLOBALS["xdnlschdsgk"] = "URIindex";
$GLOBALS["cucaphyrnrm"] = "URIprofile";
$GLOBALS["tikzgqwvtpne"] = "URIapp_config";
$GLOBALS["kvhlqbf"] = "URIconfig";
$GLOBALS["ffsgfaydr"] = "URIcategories";
$GLOBALS["bevxvqjt"] = "db_logo";
$GLOBALS["ybbqvmmt"] = "sql";
$GLOBALS["xbfcbbcg"] = "usuario";
$GLOBALS["nztvjnquzl"] = "vencido";
$GLOBALS["slgurrdv"] = "dono";
$whpfxhhqd = "revendedor";
$GLOBALS["qsgejq"] = "dias_br";
$GLOBALS["zefsfd"] = "dt_br";
$GLOBALS["eelmvug"] = "db_adm_permiss";
$GLOBALS["eivhefsipvx"] = "dias";
$fmyxwmzoyr = "URIindex";
$GLOBALS["yndxxckjcpvh"] = "dt_calc";
$GLOBALS["mhybqjj"] = "db_usuario_expirar";
$ieiqesphwtl = "db_adm_permiss";
$ygnnqmfi = "URIindex";
$GLOBALS["vbwflopm"] = "data_consultar";
$GLOBALS["grwxcexec"] = "db_usuario_acess_name";
$GLOBALS["oziksxdv"] = "user_id";
$GLOBALS["khrfnjlz"] = "db_adm_permiss";
$GLOBALS["cecidfnki"] = "row_produto_login";
$hrskszhbuubv = "a1_link";
$GLOBALS["jmcgymq"] = "db_adm_permiss";
$GLOBALS["kwbhqljtapff"] = "nome";
$GLOBALS["kwnvfpeqgkn"] = "db_usuario";
$GLOBALS["deoqkitae"] = "resultado_produtos_login";
$GLOBALS["lpxvbkqh"] = "result_produtos_login";
$fehgfas = "db_usuario_expirar";
$GLOBALS["akufqdyzb"] = "login";
$GLOBALS["vffhol"] = "conn";
$sdihmsttyfpc = "data_atual";
session_start();
$GLOBALS["zssoxx"] = "row_produto_login";
$psmunds = "data_consultar";
include_once $_SERVER["DOCUMENT_ROOT"] . "/class/conexao.php";
$GLOBALS["ykkdtc"] = "dt_calc";
if (mysqli_real_escape_string($conn, $_GET["acao"]) == "sair") {
    unset($_SESSION["painel"]["login"]);
    echo "<br><br><center><h1>REDIRECIONANDO...</h1></center>";
    echo "<script>\nwindow.location='./loging.php';\n</script>";
    exit;
}
$ibmoekyc = "resultado_produtos_login";
if ($_SESSION["painel"]["login"] != "") {
} else {
    echo "<br><br><center><h1>REDIRECIONANDO...</h1></center>";
    echo "<script>\nwindow.location='./loging.php';\n</script>";
    exit;
}
$GLOBALS["jsfygfmcwfc"] = "result_produtos_login";
${$GLOBALS["akufqdyzb"]} = $_SESSION["painel"]["login"];
${$GLOBALS["jsfygfmcwfc"]} = "SELECT * FROM usuariogl WHERE login LIKE '{$login}'";
${$ibmoekyc} = mysqli_query(${$GLOBALS["vffhol"]}, ${$GLOBALS["lpxvbkqh"]});
$ralpsyabamya = "data_atual";
while (${$GLOBALS["zssoxx"]} = mysqli_fetch_assoc(${$GLOBALS["deoqkitae"]})) {
    $GLOBALS["mofrqtabgq"] = "db_user_id";
    $swemmnxa = "row_produto_login";
    $qbuglducnkqf = "row_produto_login";
    ${$GLOBALS["kwnvfpeqgkn"]} = $row_produto_login["login"];
    ${$GLOBALS["kwbhqljtapff"]} = ${$GLOBALS["cecidfnki"]}["user"];
    $GLOBALS["tkxgyxq"] = "db_usuario_acess";
    $uhamqcp = "db_usuario_expirar";
    $tzexszbv = "row_produto_login";
    ${$GLOBALS["mofrqtabgq"]} = ${$swemmnxa}["id"];
    $wxukajwkjcwq = "db_user_id";
    ${$uhamqcp} = ${$tzexszbv}["expirar"];
    ${$GLOBALS["khrfnjlz"]} = ${$GLOBALS["cecidfnki"]}["permiss"];
    $GLOBALS["tmamndzjuu"] = "perm";
    $advpewdjbnu = "db_adm_permiss";
    ${$GLOBALS["tkxgyxq"]} = ${$GLOBALS["cecidfnki"]}["permiss"];
    ${$GLOBALS["tmamndzjuu"]} = ${$GLOBALS["cecidfnki"]}["permiss"];
    $GLOBALS["ihssofcd"] = "db_adm_permiss";
    $GLOBALS["vqvxksj"] = "db_adm_permiss";
    ${$GLOBALS["oziksxdv"]} = ${$wxukajwkjcwq};
    if (${$GLOBALS["khrfnjlz"]} == "9") {
        $wuhluox = "db_usuario_acess_name";
        $db_usuario_acess_name = "Dono";
    } else {
        if (${$GLOBALS["khrfnjlz"]} == "8") {
            ${$GLOBALS["grwxcexec"]} = "Sub-Dono";
        } else {
            if (${$GLOBALS["khrfnjlz"]} == "7") {
                ${$GLOBALS["grwxcexec"]} = "Revendedor";
            } else {
                if (${$GLOBALS["vqvxksj"]} == "6") {
                    $GLOBALS["xuqhkenroxn"] = "db_usuario_acess_name";
                    $db_usuario_acess_name = "VIP";
                } else {
                    if (${$GLOBALS["khrfnjlz"]} == "5") {
                        $nzqkpirk = "db_usuario_acess_name";
                        $db_usuario_acess_name = "Usuario";
                    } else {
                        if (${$GLOBALS["khrfnjlz"]} == "4") {
                            $GLOBALS["qniytetddri"] = "db_usuario_acess_name";
                            $db_usuario_acess_name = "Membro";
                        } else {
                            if (${$GLOBALS["khrfnjlz"]} == "3") {
                                ${$GLOBALS["grwxcexec"]} = "Vencido";
                            } else {
                                if (${$GLOBALS["ihssofcd"]} == "2") {
                                    ${$GLOBALS["grwxcexec"]} = "Pendente";
                                } else {
                                    if (${$advpewdjbnu} == "1") {
                                        $GLOBALS["oxyvgsx"] = "db_usuario_acess_name";
                                        $db_usuario_acess_name = "Bloq";
                                    } else {
                                        if (${$GLOBALS["khrfnjlz"]} == "0") {
                                            ${$GLOBALS["grwxcexec"]} = "Banido";
                                        } else {
                                            ${$GLOBALS["grwxcexec"]} = "";
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}
date_default_timezone_set("America/Sao_Paulo");
${$ralpsyabamya} = date("Y-m-d");
$wmoywilsv = "dt_br";
${$GLOBALS["vbwflopm"]} = date(${$GLOBALS["mhybqjj"]});
${$GLOBALS["yndxxckjcpvh"]} = strtotime(${$psmunds}) - strtotime(${$sdihmsttyfpc});
${$GLOBALS["eivhefsipvx"]} = floor(${$GLOBALS["ykkdtc"]} / 86400);
${$GLOBALS["zefsfd"]} = strtotime(${$fehgfas});
${$GLOBALS["qsgejq"]} = date("d/m/Y", ${$wmoywilsv});
${$GLOBALS["slgurrdv"]} = "9";
$knkmwelilhd = "URIadmin";
$GLOBALS["ndtjjlcklh"] = "db_adm_permiss";
${$GLOBALS["nztvjnquzl"]} = "3";
${$GLOBALS["xbfcbbcg"]} = "5";
${$whpfxhhqd} = "7";
if (${$ieiqesphwtl} == 5) {
    $GLOBALS["fiyzymyv"] = "dias";
    if ($dias > 0) {
    } else {
        if (${$GLOBALS["eivhefsipvx"]} == 0 || ${$GLOBALS["eivhefsipvx"]} < 0) {
            ${$GLOBALS["ybbqvmmt"]} = $conn->prepare("UPDATE usuariogl SET permiss='{$vencido}' WHERE id='{$db_user_id}'");
            $sql->execute();
            echo "<script>alert('Seu acesso expirou!'); window.location='?acao=sair';</script>";
            exit;
        } else {
            echo "<script>alert('Ocorreu um erro!'); window.location='?acao=sair';</script>";
        }
    }
} else {
    if (${$GLOBALS["jmcgymq"]} == 9 || ${$GLOBALS["eelmvug"]} == 7) {
        $pmkjdkn = "dias";
        if (${$GLOBALS["eivhefsipvx"]} > 0) {
        } else {
            if (${$GLOBALS["eivhefsipvx"]} == 0 || $dias < 0) {
            } else {
                echo "<script>alert('Ocorreu um erro!'); window.location='?acao=sair';</script>";
                exit;
            }
        }
    } else {
        if (${$GLOBALS["ndtjjlcklh"]} == 3) {
            echo "<script>alert('Seu acesso expirou!'); window.location='?acao=sair';</script>";
        } else {
            echo "<script>alert('Ocorreu um erro!'); window.location='?acao=sair';</script>";
        }
    }
}
${$GLOBALS["bevxvqjt"]} = "static/assets/img/avatars/4.png";
${$hrskszhbuubv} = $_SERVER[REQUEST_URI];
${$fmyxwmzoyr} = "";
${$knkmwelilhd} = "";
${$GLOBALS["ffsgfaydr"]} = "";
${$GLOBALS["kvhlqbf"]} = "";
${$GLOBALS["tikzgqwvtpne"]} = "";
${$GLOBALS["cucaphyrnrm"]} = "";
if ($_SERVER[REQUEST_URI] == "/gltunnel" || $_SERVER[REQUEST_URI] == "gltunnel.php" || $_SERVER[REQUEST_URI] == "/") {
    ${$GLOBALS["xdnlschdsgk"]} = "active";
} elseif ($_SERVER[REQUEST_URI] == "/admin" || $_SERVER[REQUEST_URI] == "adming.php") {
    ${$GLOBALS["spweikl"]} = "active";
} elseif ($_SERVER[REQUEST_URI] == "/categories" || $_SERVER[REQUEST_URI] == "categories.php") {
    $wsbkwmpxi = "URIcategories";
    $URIcategories = "active";
} elseif ($_SERVER[REQUEST_URI] == "/config" || $_SERVER[REQUEST_URI] == "configg.php") {
    $qeadppknlhv = "URIconfig";
    $URIconfig = "active";
} elseif ($_SERVER[REQUEST_URI] == "/app_config" || $_SERVER[REQUEST_URI] == "app_config.php") {
    $huepdfbjiax = "URIapp_config";
    $URIapp_config = "active";
} elseif ($_SERVER[REQUEST_URI] == "/profile" || $_SERVER[REQUEST_URI] == "profile.php") {
    ${$GLOBALS["cucaphyrnrm"]} = "active";
}
if (${$GLOBALS["eeujhhv"]} == "3") {
    echo "<br><br><center><h1>ACESSO NEGADO</h1></center>";
    echo "<script>window.location='./expirado.php';</script>";
    exit;
}
echo "<style>\n  .nav-item {\n    background-color: #dedede;\n    border-radius: 100px;\n    margin-top: 3px;\n    height: 50px;\n  }\n  .nav-wrapper {\n    background-color: white;\n  }\n</style>\n<div class=\"container-fluid\">\n<div class=\"row\">\n<aside class=\"main-sidebar col-12 col-md-3 col-lg-2 px-0\">\n<div class=\"main-navbar\">\n<nav class=\"navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0\">\n<a class=\"navbar-brand w-100 mr-0\" href=\"#\" style=\"line-height: 25px;\">\n\n<div class=\"d-table m-auto\">\n<img id=\"main-logo\" class=\"d-inline-block align-top mr-1\" style=\"max-width: 40px;\"\nsrc=\"static/assets/img/avatars/4.png\" alt=\"Shards Dashboard\">\n</div>\n</a>\n\n<a class=\"toggle-sidebar d-sm-inline d-md-none d-lg-none\">\n<i class=\"material-icons\">&#xE5C4;</i>\n</a>\n\n</nav>\n</div>\n<div class=\"nav-wrapper\">\n<ul class=\"nav flex-column\">\n\n<li class=\"nav-item ";
echo ${$ygnnqmfi};
echo "\">\n<a class=\"nav-link\" href=\"gltunnel.php\">\n<i class=\"material-icons\">edit</i>\n<span>Painel de Controle</span>\n</a>\n</li>\n\n";
if (${$GLOBALS["lghetzkwdj"]} >= "9") {
    $GLOBALS["kupztopcs"] = "URIadmin";
    echo "<li class=\"nav-item ";
    echo $URIadmin;
    echo "\">\n<a class=\"nav-link\" href=\"adming.php\">\n<i class=\"material-icons\">person</i>\n<span>Gerenciar Usu\xc3\xa1rios</span>\n</a>\n</li>\n";
}
echo "\n<li class=\"nav-item ";
echo ${$GLOBALS["ffsgfaydr"]};
$kvwuykyqjst = "URIprofile";
echo "\">\n<a class=\"nav-link\" href=\"categories.php\">\n<i class=\"material-icons\">storage</i>\n<span>Categorias</span>\n</a>\n</li>\n\n<li class=\"nav-item ";
echo ${$GLOBALS["kvhlqbf"]};
echo "\">\n<a class=\"nav-link\" href=\"configg.php\">\n<i class=\"material-icons\">settings</i>\n<span>Configura\xc3\xa7\xc3\xb5es</span>\n</a>\n</li>\n\n<li class=\"nav-item ";
echo ${$GLOBALS["tikzgqwvtpne"]};
echo "\">\n<a class=\"nav-link\" href=\"app_config.php\">\n<i class=\"material-icons\">phone_iphone</i>\n<span>Aplicativo</span>\n</a>\n</li>\n\n<li class=\"nav-item ";
echo $URIprofile;
echo "\">\n<a class=\"nav-link\" href=\"profile.php\">\n<i class=\"material-icons\">person</i>\n<span>Perfil</span>\n</a>\n</li>\n\n<li class=\"nav-item\">\n<a class=\"nav-link\" href=\"?acao=sair\">\n<i class=\"material-icons\">exit_to_app</i>\n<span>Sair</span>\n</a>\n</li>\n\n</ul>\n</div>\n</aside>\n<main class=\"main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3\">\n<div class=\"main-navbar sticky-top bg-white\">\n<nav class=\"navbar align-items-stretch navbar-light flex-md-nowrap p-0\">\n<form action=\"#\" class=\"main-navbar__search w-100 d-none d-md-flex d-lg-flex\">\n<div class=\"input-group input-group-seamless ml-3\">\n</div>\n</form>\n</span>\n</a>\n<nav class=\"nav\">\n<a href=\"#\" class=\"nav-link nav-link-icon toggle-sidebar d-md-inline d-lg-none text-center border-right\"\ndata-toggle=\"collapse\" data-target=\".header-navbar\" aria-expanded=\"false\" aria-controls=\"header-navbar\">\n<i class=\"material-icons\">&#xE5D2;</i>\n</a>\n</nav>\n</nav>\n</div>\n\n";
