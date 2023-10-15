<?php

$GLOBALS["lkvckidgoxo"] = "id";
$GLOBALS["dmvnglvuq"] = "add";
$GLOBALS["bwmsvktt"] = "SQLcelular";
$GLOBALS["nchpsgw"] = "SQLemail";
$GLOBALS["vncdnl"] = "SQLADM";
$GLOBALS["hezijzi"] = "SQLCSSH";
$GLOBALS["pbjbdi"] = "SQLUsuario";
$GLOBALS["qyfyfmqdl"] = "acesso";
$GLOBALS["gjldmd"] = "dirt";
$GLOBALS["cmwxbfdx"] = "status";
$GLOBALS["viogvj"] = "myalert";
$GLOBALS["yswmjvhlxl"] = "pass";
$GLOBALS["hjxfwuwkduh"] = "num";
$GLOBALS["ghycvqjhvrg"] = "i";
$orjpjlxxe = "data";
$GLOBALS["jwqsupslyit"] = "administrador";
$GLOBALS["wwbkrxohtdf"] = "SQLAdministrador";
echo "<!DOCTYPE html>\n<html class=\"loading bordered-layout\" lang=\"pt\" data-layout=\"bordered-layout\" data-textdirection=\"ltr\">\n<!-- BEGIN: Head-->\n<head>\n<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">\n<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">\n<meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui\">\n<link href=\"https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600\" rel=\"stylesheet\">\n<!-- BEGIN: Vendor CSS-->\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../../../app-assets/vendors/css/vendors.min.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../../../app-assets/vendors/css/animate/animate.min.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../../../app-assets/vendors/css/extensions/sweetalert2.min.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../../../app-assets/css/bootstrap.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../../../app-assets/css/bootstrap-extended.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../../../app-assets/css/colors.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../../../app-assets/css/components.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../../../app-assets/css/themes/dark-layout.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../../../app-assets/css/themes/bordered-layout.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../../../app-assets/css/themes/semi-dark-layout.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../../../app-assets/css/bootstrap.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../../../app-assets/css/bootstrap-extended.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../../../app-assets/css/plugins/extensions/ext-component-sweet-alerts.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../../../app-assets/css/pages/ui-feather.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../../../assets/css/style.css\">\n<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>\n</head>\n<body class=\"vertical-layout vertical-menu-modern\">\n<script src=\"../../../app-assets/js/scripts/extensions/ext-component-sweet-alerts.js\"></script>\n<script src=\"../../../app-assets/vendors/js/extensions/sweetalert2.all.min.js\"></script>\n<script src=\"../../../app-assets/js/scripts/ui/ui-feather.js\"></script>\n<script src=\"../../../app-assets/vendors/js/vendors.min.js\"></script>\n<script src=\"../../../app-assets/js/core/app-menu.js\"></script>\n<script src=\"../../../app-assets/js/core/app.js\"></script>\n<script>\n\$(window).on('load', function() {\nif (feather) {\nfeather.replace({\nwidth: 14,\nheight: 14\n});\n}\n})\n</script>\n";
require_once "../../../pages/system/seguranca.php";
$nxlxmij = "token";
$GLOBALS["phjprcoueol"] = "dominio";
require_once "../../../pages/system/config.php";
require_once "../../../pages/system/funcoes.system.php";
$GLOBALS["owwkciz"] = "SQLAdministrador";
protegePagina("donoadmin");
$dominio = $_SERVER["HTTP_HOST"];
$SQLAdministrador = "SELECT * FROM admin";
$SQLAdministrador = $conn->prepare($SQLAdministrador);
$SQLAdministrador->execute();
$administrador = $SQLAdministrador->fetch();
function geraToken()
{
    $GLOBALS["vfpcdkix"] = "pass";
    $fenhjhrjyq = "salt";
    $salt = "123456ABCDER";
    srand((double) microtime() * 1000000);
    $i = 0;
    $pass = 0;
    while ($i <= 7) {
        $ryfckwqukx = "tmp";
        $GLOBALS["zguoygb"] = "pass";
        $iikumwj = "num";
        $ggptjpt = "salt";
        $GLOBALS["yobixdrf"] = "pass";
        $ljysavfvmwc = "tmp";
        $num = rand() % 10;
        $tmp = substr($salt, $num, 1);
        $pass .= $tmp;
        $GLOBALS["upedkxxtu"] = "i";
        $i++;
    }
    return $pass;
}
$data = date("Y-m-d H:i:s");
$token = geraToken();
function alertinfo($status, $msgalert, $dirt)
{
    $srfsiiwpza = "myalert";
    $idkygmwsw = "dirt";
    $GLOBALS["oltvulkcqx"] = "msgalert";
    $eqvnjxhqix = "alert";
    $GLOBALS["xmlzymychrj"] = "alert";
    $myalert = "\nlet timerInterval\nSwal.fire({\nicon: '" . $status . "',\ntitle: '" . $msgalert . "',\ntimer: 2000,\ntimerProgressBar: true,\nwillClose: () => {\nclearInterval(timerInterval)\n}\n}).then((result) => {\nif (result.dismiss === Swal.DismissReason.timer) {\nwindow.location='" . $dirt . "';\n} else {\nwindow.location='" . $dirt . "';\n}\n})\n";
    $alert = "<script type=\"text/javascript\">" . $myalert . "</script>";
    return $alert;
}
if (isset($_POST["login"]) and isset($_POST["email"]) and isset($_POST["nome"]) and isset($_POST["senha"]) and isset($_POST["tipo"]) and isset($_POST["dias"]) and isset($_POST["celular"])) {
    $GLOBALS["dwtwebhdov"] = "SQLUsuario";
    $GLOBALS["grigmstbe"] = "SQLUsuario";
    $acesso = $_POST["acesso"];
    $GLOBALS["vbyikulhaq"] = "SQLADM";
    $SQLUsuario = "select * from usuario WHERE login = '" . $_POST["login"] . "' ";
    $SQLUsuario = $conn->prepare($SQLUsuario);
    $SQLUsuario->execute();
    $uphfoffsn = "SQLemail";
    if ($SQLUsuario->rowCount() > 0) {
        echo myalertuser("warning", "O usu\xc3\xa1rio " . $_POST["login"] . " j\xc3\xa1 existe!", "../../home.php?page=usuario/1-etapa");
        exit;
    }
    $GLOBALS["mcitoyn"] = "SQLCSSH";
    $yttdupfehg = "SQLemail";
    ${$GLOBALS["hezijzi"]} = "select * from conta_ssh WHERE login = '" . $_POST["login"] . "' ";
    ${$GLOBALS["hezijzi"]} = $conn->prepare(${$GLOBALS["mcitoyn"]});
    $GLOBALS["lxqwlhva"] = "SQLUsuario";
    $GLOBALS["brheuodoq"] = "dominio";
    $SQLCSSH->execute();
    $GLOBALS["fcfymsqbhtkn"] = "administrador";
    $cbfgdupdsfhj = "SQLADM";
    if ($SQLCSSH->rowCount() > 0) {
        echo myalertuser("warning", "O usu\xc3\xa1rio " . $_POST["login"] . " j\xc3\xa1 existe!", "../../home.php?page=usuario/1-etapa");
        exit;
    }
    ${$cbfgdupdsfhj} = "select * from admin WHERE login = '" . $_POST["login"] . "' ";
    ${$GLOBALS["vncdnl"]} = $conn->prepare(${$GLOBALS["vbyikulhaq"]});
    $SQLADM->execute();
    if ($SQLADM->rowCount() > 0) {
        echo myalertuser("warning", "O usu\xc3\xa1rio " . $_POST["login"] . " j\xc3\xa1 existe!", "../../home.php?page=usuario/1-etapa");
        exit;
    }
    $shpcqpakp = "SQLcelular";
    ${$uphfoffsn} = "select * from usuario WHERE email = '" . $_POST["email"] . "' ";
    ${$GLOBALS["nchpsgw"]} = $conn->prepare(${$yttdupfehg});
    $SQLemail->execute();
    if ($SQLemail->rowCount() > 0) {
        echo myalertuser("warning", "Esse E-MAIL j\xc3\xa1 existe!", "../../home.php?page=usuario/1-etapa");
        exit;
    }
    $GLOBALS["xvuwwjaau"] = "SQLcelular";
    ${$shpcqpakp} = "select * from usuario WHERE celular = '" . $_POST["celular"] . "' ";
    ${$GLOBALS["bwmsvktt"]} = $conn->prepare(${$GLOBALS["xvuwwjaau"]});
    $SQLcelular->execute();
    if ($SQLcelular->rowCount() > 0) {
        echo myalertuser("warning", "Esse celular j\xc3\xa1 existe!", "../../home.php?page=usuario/1-etapa");
        exit;
    }
    ${$GLOBALS["dmvnglvuq"]} = date("Y-m-d H:i:s", strtotime("+ " . $_POST["dias"] . " days"));
    ${$GLOBALS["pbjbdi"]} = "INSERT INTO usuario (email, login, senha, validade, data_cadastro, tipo, nome, celular, token_user, permitir_demo) VALUES ('" . $_POST["email"] . "', '" . $_POST["login"] . "', '" . $_POST["senha"] . "', '" . ${$GLOBALS["dmvnglvuq"]} . "', '{$data}', '" . $_POST["tipo"] . "', '" . $_POST["nome"] . "', '" . $_POST["celular"] . "', '{$token}', '{$acesso}' )";
    $GLOBALS["vuxgqbq"] = "SQLUsuario";
    ${$GLOBALS["lxqwlhva"]} = $conn->prepare(${$GLOBALS["dwtwebhdov"]});
    $SQLUsuario->execute();
    ${$GLOBALS["vuxgqbq"]} = "SELECT LAST_INSERT_ID() AS last_id ";
    ${$GLOBALS["pbjbdi"]} = $conn->prepare(${$GLOBALS["pbjbdi"]});
    $SQLUsuario->execute();
    ${$GLOBALS["lkvckidgoxo"]} = $SQLUsuario->fetch();
    echo info_alert_user(${$GLOBALS["brheuodoq"]}, "" . $_POST["login"] . "", "" . $_POST["senha"] . "", ${$GLOBALS["fcfymsqbhtkn"]}["textorev"] . "", "../../home.php?page=usuario/perfil&id_usuario=" . ${$GLOBALS["lkvckidgoxo"]}["last_id"] . " ");
} else {
    echo alertinfo("warning", "Preencha todos os campos!", "../../home.php?page=usuario/1-etapa");
}
echo "</body>\n</html>\n";
