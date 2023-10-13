<?php

$GLOBALS["oagfunwxn"] = "SQLupdate";
$GLOBALS["spkenewe"] = "diretorio";
$GLOBALS["mbpmrko"] = "email";
$GLOBALS["osdxwbrrgwrj"] = "user";
$GLOBALS["gbdqacnn"] = "blockrev";
$GLOBALS["ssqwyrslcccq"] = "senha";
$GLOBALS["itayuqn"] = "valorrev";
$GLOBALS["vwcvcorpt"] = "subrevenda";
$GLOBALS["qhrmxokfqllc"] = "usuario";
require_once "../../pages/system/seguranca.php";
require_once "../../pages/system/config.php";
require_once "../../pages/system/funcoes.php";
require_once "../../pages/system/classe.ssh.php";
require_once "../../pages/system/funcoes.system.php";
protegePagina("user");
if ($usuario["ativo"] == 2) {
    echo "<script type=\"text/javascript\">";
    echo "window.location=\"home.php?page=suspenso\";";
    echo "</script>";
    exit;
}
if (isset($_POST["id_usuario"])) {
    $GLOBALS["jtewttjoi"] = "SQLusuario";
    $GLOBALS["xurrbeumsvq"] = "nome";
    $GLOBALS["sgultfqnje"] = "celular";
    $psfgjm = "usuario";
    $GLOBALS["qygktge"] = "SQLupdate";
    $GLOBALS["pqwqfqmiayh"] = "senha";
    $GLOBALS["bxdgrqedd"] = "email";
    $GLOBALS["dqholnof"] = "blockrev";
    ${$GLOBALS["vwcvcorpt"]} = sql_injector($_POST["subrevenda"]);
    $xdxcsxt = "subrevenda";
    ${$GLOBALS["itayuqn"]} = $_POST["valorrev"];
    $GLOBALS["nfgsjvhqqgvs"] = "subrevenda";
    $vyljhjcublf = "celular";
    $GLOBALS["pbomgaakh"] = "nome";
    $GLOBALS["ebnazpdktf"] = "nome";
    ${$GLOBALS["qhrmxokfqllc"]} = sql_injector($_POST["id_usuario"]);
    $GLOBALS["mleoyy"] = "user";
    ${$GLOBALS["pbomgaakh"]} = sql_injector($_POST["nome"]);
    ${$GLOBALS["ssqwyrslcccq"]} = sql_injector($_POST["senha"]);
    $ioougofn = "SQLusuario";
    $GLOBALS["kxrgwnpqgl"] = "SQLusuario";
    ${$GLOBALS["bxdgrqedd"]} = $_POST["email"];
    ${$vyljhjcublf} = $_POST["celular"];
    $GLOBALS["zzdhhquajwxg"] = "diretorio";
    $tpziiwdczf = "senha";
    ${$GLOBALS["dqholnof"]} = $_POST["blockrev"];
    ${$GLOBALS["zzdhhquajwxg"]} = $_POST["diretorio"];
    if (${$xdxcsxt} == sim) {
        if (${$GLOBALS["gbdqacnn"]} >= 1) {
            $qcempeibears = "diretorio";
            echo myalertuser("warning", "Essa revenda possui revendedore(s)!", $diretorio);
            exit;
        }
    }
    ${$GLOBALS["kxrgwnpqgl"]} = "select * from usuario where id_usuario = '" . ${$GLOBALS["qhrmxokfqllc"]} . "'  ";
    ${$ioougofn} = $conn->prepare(${$GLOBALS["jtewttjoi"]});
    $SQLusuario->execute();
    if ($SQLusuario->rowCount() == 0) {
        $GLOBALS["yrygzxdhf"] = "diretorio";
        echo myalertuser("error", "Usu\xc3\xa1rio n\xc3\xa3o encontrado!", $diretorio);
        exit;
    }
    ${$GLOBALS["osdxwbrrgwrj"]} = $SQLusuario->fetch();
    if (${$GLOBALS["mleoyy"]}["id_mestre"] != $_SESSION["usuarioID"]) {
        $GLOBALS["vrzrounehpk"] = "diretorio";
        echo myalertuser("error", "Erro, sem permiss\xc3\xa3o!", $diretorio);
        exit;
    }
    if (strlen(${$GLOBALS["xurrbeumsvq"]}) < 5) {
        $dkxcgtdyd = "diretorio";
        echo myalertuser("warning", "Informe mais de 5 caracteres!", $diretorio);
        exit;
    }
    if (strlen(${$GLOBALS["pqwqfqmiayh"]}) < 5) {
        $yrzvtejjg = "diretorio";
        echo myalertuser("warning", "Informe mais de 5 caracteres na senha!", $diretorio);
        exit;
    }
    if (filter_var(${$GLOBALS["mbpmrko"]}, FILTER_VALIDATE_EMAIL)) {
        $GLOBALS["qaajilx"] = "email";
        $email = ${$GLOBALS["mbpmrko"]};
    } else {
        echo myalertuser("error", "Email inv\xc3\xa1lido!", ${$GLOBALS["spkenewe"]});
        exit;
    }
    ${$GLOBALS["qygktge"]} = "update usuario set subrevenda='" . ${$GLOBALS["nfgsjvhqqgvs"]} . "', valorrevenda='" . ${$GLOBALS["itayuqn"]} . "', nome='" . ${$GLOBALS["ebnazpdktf"]} . "', senha='" . ${$tpziiwdczf} . "', email='" . ${$GLOBALS["mbpmrko"]} . "', celular='" . ${$GLOBALS["sgultfqnje"]} . "', permitir_demo='" . $_POST["acesso"] . "' where id_usuario = '" . ${$psfgjm} . "'";
    ${$GLOBALS["oagfunwxn"]} = $conn->prepare(${$GLOBALS["oagfunwxn"]});
    $SQLupdate->execute();
    echo myalertuser("success", "Dados alterados com sucesso!", ${$GLOBALS["spkenewe"]});
    exit;
}
