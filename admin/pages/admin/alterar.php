<?php

$GLOBALS["twhxgrulbov"] = "SQLUPUser";
$GLOBALS["vksknwjxse"] = "SQLADM";
$GLOBALS["ywbwlqvvei"] = "SQLUser";
$GLOBALS["hbfrqjgsbhy"] = "SQLCSSH";
$GLOBALS["mtjskroxbat"] = "SQLUsuario";
$GLOBALS["kbvofsij"] = "senhanew";
$GLOBALS["vixxpcdrhyd"] = "senhaat";
$GLOBALS["gtnrihhkmyn"] = "textorev";
$GLOBALS["gaicysu"] = "site";
$GLOBALS["ylncqh"] = "nome";
$GLOBALS["vmtkocm"] = "ipdominio";
require_once "../../../pages/system/seguranca.php";
require_once "../../../pages/system/config.php";
require_once "../../../pages/system/funcoes.system.php";
$motrcgb = "accessKEY";
protegePagina("donoadmin");
if ($_POST["segmax"] !== $accessKEY) {
    expulsaVisitante();
    exit;
}
if ($_POST["ipmax"] !== ${$GLOBALS["vmtkocm"]}) {
    expulsaVisitante();
    exit;
}
if (isset($_POST["nome"]) and isset($_POST["email"]) and isset($_POST["idusuario"])) {
    $GLOBALS["gsznkw"] = "SQLCSSH";
    $GLOBALS["mhdurtmtdkw"] = "celular";
    $GLOBALS["usqplrvtnre"] = "SQLUsuario";
    $owptigwapbcs = "textocon";
    ${$GLOBALS["ylncqh"]} = sql_injector($_POST["nome"]);
    $GLOBALS["nbnjopfdiemq"] = "SQLUser";
    $vfdwvgn = "login";
    $GLOBALS["lblyye"] = "email";
    $login = sql_injector($_POST["idusuario"]);
    ${$GLOBALS["mhdurtmtdkw"]} = sql_injector($_POST["celular"]);
    $GLOBALS["fyqgrpbovr"] = "SQLUsuario";
    ${$GLOBALS["lblyye"]} = sql_injector($_POST["email"]);
    ${$GLOBALS["gaicysu"]} = sql_injector($_POST["site"]);
    $eulfopoqcli = "SQLCSSH";
    ${$owptigwapbcs} = sql_injector($_POST["textoconatt"]);
    ${$GLOBALS["gtnrihhkmyn"]} = sql_injector($_POST["textorevatt"]);
    $GLOBALS["ewkffo"] = "SQLUser";
    ${$GLOBALS["vixxpcdrhyd"]} = sql_injector($_POST["senhaantiga"]);
    ${$GLOBALS["kbvofsij"]} = sql_injector($_POST["novasenha"]);
    ${$GLOBALS["mtjskroxbat"]} = "select * from usuario WHERE login='" . $_POST["idusuario"] . "' ";
    ${$GLOBALS["fyqgrpbovr"]} = $conn->prepare(${$GLOBALS["usqplrvtnre"]});
    $SQLUsuario->execute();
    if ($SQLUsuario->rowCount() > 0) {
        echo myalertuser("warning", "O usu\xc3\xa1rio " . $_POST["idusuario"] . " j\xc3\xa1 existe!", "../../home.php?page=admin/dados");
        exit;
    }
    ${$eulfopoqcli} = "select * from conta_ssh WHERE login='" . $_POST["idusuario"] . "' ";
    ${$GLOBALS["hbfrqjgsbhy"]} = $conn->prepare(${$GLOBALS["gsznkw"]});
    $SQLCSSH->execute();
    if ($SQLCSSH->rowCount() > 0) {
        echo myalertuser("warning", "O usu\xc3\xa1rio " . $_POST["idusuario"] . " j\xc3\xa1 existe!", "../../home.php?page=admin/dados");
        exit;
    }
    ${$GLOBALS["nbnjopfdiemq"]} = "select * from admin where id_administrador = '" . $_SESSION["usuarioID"] . "'   ";
    ${$GLOBALS["ewkffo"]} = $conn->prepare(${$GLOBALS["ywbwlqvvei"]});
    $SQLUser->execute();
    if ($SQLUser->rowCount() > 0) {
        $GLOBALS["bewypifbh"] = "SQLUPUser";
        $GLOBALS["qyfctowlg"] = "euadm";
        $gmpblufrfcfh = "login";
        $lejlbxd = "updatesenha";
        $euadm = $SQLUser->fetch();
        $GLOBALS["mymmgyojgn"] = "euadm";
        $dgkkervxf = "senhaat";
        if ($login !== $euadm["login"]) {
            $iboetwhnbjg = "SQLADM";
            $GLOBALS["vumgqhils"] = "SQLADM";
            ${$GLOBALS["vksknwjxse"]} = "select * from admin WHERE login='" . $_POST["idusuario"] . "' ";
            ${$iboetwhnbjg} = $conn->prepare(${$GLOBALS["vumgqhils"]});
            $SQLADM->execute();
            if ($SQLADM->rowCount() > 0) {
                echo myalertuser("warning", "O usu\xc3\xa1rio " . $_POST["idusuario"] . " j\xc3\xa1 existe!", "../../home.php?page=admin/dados");
                exit;
            }
        }
        if (${$dgkkervxf} != "") {
            $pwhgfrr = "senhaat";
            $GLOBALS["mvqoshwxxdd"] = "euadm";
            $zlzsojhq = "senhaat";
            $rhxnlbsfr = "senhanew";
            $GLOBALS["kxcywvffdon"] = "senhanew";
            $ihcwstwtw = "updatesenha";
            if ($senhaat != $euadm["senha"]) {
                echo myalertuser("error", "Senha atual incorreta!", "../../home.php?page=admin/dados");
                exit;
            } elseif ($senhaat == $senhanew) {
                echo myalertuser("info", "A senha deve ser diferente da atual!", "../../home.php?page=admin/dados");
                exit;
            }
            if (strlen(${$rhxnlbsfr}) < 5) {
                echo myalertuser("error", "Senha muito curta!", "../../home.php?page=admin/dados");
                exit;
            }
            ${$ihcwstwtw} = "senha='" . ${$GLOBALS["kbvofsij"]} . "',";
        }
        ${$GLOBALS["bewypifbh"]} = "update admin set " . ${$lejlbxd} . " nome='" . $_POST["nome"] . "', login='" . $_POST["idusuario"] . "', celular='" . $_POST["celular"] . "', email='" . $_POST["email"] . "', site='" . $_POST["site"] . "', textocon='" . $_POST["textoconatt"] . "', textorev='" . $_POST["textorevatt"] . "' WHERE id_administrador = '" . $_SESSION["usuarioID"] . "' ";
        ${$GLOBALS["twhxgrulbov"]} = $conn->prepare(${$GLOBALS["twhxgrulbov"]});
        $SQLUPUser->execute();
        echo myalertuser("success", "Alterado com sucesso !", "../../home.php?page=admin/dados");
    } else {
        echo myalertuser("error", "erro !", "../../home.php?page=admin/dados");
        exit;
    }
} else {
    echo myalertuser("error", "Erro !", "../../home.php?page=admin/dados");
    exit;
}
