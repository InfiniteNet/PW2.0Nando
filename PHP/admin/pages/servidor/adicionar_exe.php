<?php

$GLOBALS["wfifkiuxtktl"] = "id";
$GLOBALS["rglntujoyur"] = "SQLNServidor";
$GLOBALS["lpftotnugt"] = "localiza";
$GLOBALS["zrbicjdlj"] = "SQLInsert";
$GLOBALS["vfmkdlix"] = "servidor_autenticado";
$GLOBALS["uocypjgude"] = "ssh";
$GLOBALS["kmhpljg"] = "SQLServidor";
$GLOBALS["mqbojxjh"] = "regi";
$GLOBALS["poritoo"] = "limite";
$GLOBALS["hldwuju"] = "validade";
$GLOBALS["rabwjhlis"] = "siteserver";
$GLOBALS["vmwdaepph"] = "tiposerver";
require_once "../../../pages/system/seguranca.php";
require_once "../../../pages/system/config.php";
require_once "../../../pages/system/classe.ssh.php";
require_once "../../../pages/system/funcoes.system.php";
protegePagina("donoadmin");
if (isset($_POST["nomesrv"]) and isset($_POST["ip"]) and isset($_POST["login"]) and isset($_POST["senha"])) {
    $tiposerver = sql_injector($_POST["tiposerver"]);
    $hnyvln = "limite";
    $uvgcdfntcp = "SQLServidorn";
    $GLOBALS["mprljpdyozpw"] = "localiza";
    $localiza = sql_injector($_POST["localiza"]);
    $ifuvzrdolpeo = "site";
    $siteserver = sql_injector($_POST["siteserver"]);
    $validade = sql_injector($_POST["validade"]);
    $gknmoivrl = "regiao";
    $tckdfhaujp = "regiao";
    $GLOBALS["vikgwuxs"] = "validade";
    $limite = sql_injector($_POST["limite"]);
    $regiao = sql_injector($_POST["regiao"]);
    $GLOBALS["vvqupmgut"] = "regi";
    $hnyeyowxti = "regi";
    $site = sql_injector($_POST["sitevps"]);
    if (!is_numeric($validade)) {
        echo myalertuser("error", "S\xc3\xb3 \xc3\xa9 permitido n\xc3\xbameros na validade!", "../../home.php?page=servidor/adicionar");
        exit;
    }
    $GLOBALS["pkijrfmlv"] = "regi";
    $GLOBALS["vmlckqlcet"] = "SQLServidorn";
    if (!is_numeric(${$hnyvln})) {
        echo myalertuser("error", "S\xc3\xb3 \xc3\xa9 permitido n\xc3\xbameros no limite!", "../../home.php?page=servidor/adicionar");
        exit;
    }
    switch (${$gknmoivrl}) {
        case 1:
            ${$GLOBALS["mqbojxjh"]} = "asia";
            break;
        case 2:
            ${$hnyeyowxti} = "america";
            break;
        case 3:
            ${$GLOBALS["mqbojxjh"]} = "europa";
            break;
        case 4:
            ${$GLOBALS["mqbojxjh"]} = "australia";
            break;
        default:
            ${$GLOBALS["pkijrfmlv"]} = "nada";
            break;
    }
    $GLOBALS["qqkawj"] = "SQLServidorn";
    if (${$GLOBALS["vvqupmgut"]} == "nada") {
        echo myalertuser("error", "Selecione uma regiao !", "../../home.php?page=servidor/adicionar");
        exit;
    }
    ${$uvgcdfntcp} = "select * from servidor WHERE nome = '" . $_POST["nomesrv"] . "'  ";
    ${$GLOBALS["qqkawj"]} = $conn->prepare(${$GLOBALS["vmlckqlcet"]});
    $SQLServidorn->execute();
    if ($SQLServidorn->rowCount() > 0) {
        echo myalertuser("error", "J\xc3\xa1 existe um servidor com esse nome!", "../../home.php?page=servidor/adicionar");
        exit;
    }
    $GLOBALS["tljeekkbyt"] = "SQLServidor";
    ${$GLOBALS["kmhpljg"]} = "select * from servidor WHERE ip_servidor = '" . $_POST["ip"] . "'  ";
    ${$GLOBALS["kmhpljg"]} = $conn->prepare(${$GLOBALS["tljeekkbyt"]});
    $SQLServidor->execute();
    if ($SQLServidor->rowCount() > 0) {
        echo myalertuser("error", "J\xc3\xa1 existe um servidor com esse IP!", "../../home.php?page=servidor/adicionar");
    } else {
        $GLOBALS["rqcyecsmj"] = "ip_servidor";
        $gmsslcj = "ip_servidor";
        $GLOBALS["ejibvxdgtd"] = "servidor_online";
        $GLOBALS["lyrogwwv"] = "servidor_online";
        $ip_servidor = $_POST["ip"];
        $dpvrlpsst = "senhaSSH";
        $GLOBALS["jdqvjt"] = "loginSSH";
        $loginSSH = $_POST["login"];
        $senhaSSH = $_POST["senha"];
        ${$GLOBALS["uocypjgude"]} = new SSH2($ip_servidor);
        ${$GLOBALS["ejibvxdgtd"]} = $ssh->online($_POST["ip"]);
        $ssh->output();
        if (${$GLOBALS["lyrogwwv"]}) {
            ${$GLOBALS["vfmkdlix"]} = $ssh->auth($_POST["login"], $_POST["senha"]);
            $ssh->output();
            if (${$GLOBALS["vfmkdlix"]}) {
                $abmuvooj = "validade";
                $gnvbwczelzjp = "limite";
                $jbnwpewac = "tipodeservidor";
                $krkqfvhnklx = "tipodeservidor";
                $GLOBALS["hvxrbytcwlci"] = "SQLNServidor";
                $tkkgudp = "nome_final";
                $qfjxqekd = "SQLInsert";
                $pudvdbbm = "siteserver";
                $tipodeservidor = "premium";
                ${$GLOBALS["zrbicjdlj"]} = "INSERT INTO servidor (ip_servidor, nome, login_server, senha, site_servidor, localizacao, localizacao_img, validade, limite, tipo, regiao, online, autenticado) VALUES ('" . $_POST["ip"] . "', '" . sql_injector($_POST["nomesrv"]) . "', '" . $_POST["login"] . "',  '" . $_POST["senha"] . "', '" . $siteserver . "', '" . ${$GLOBALS["lpftotnugt"]} . "', '" . $nome_final . "', '" . $validade . "', '" . $limite . "', '" . $tipodeservidor . "', '" . ${$GLOBALS["mqbojxjh"]} . "', '1', '1')";
                $GLOBALS["cvkwehx"] = "SQLNServidor";
                $GLOBALS["gybinxir"] = "id";
                ${$GLOBALS["zrbicjdlj"]} = $conn->prepare(${$qfjxqekd});
                $SQLInsert->execute();
                ${$GLOBALS["cvkwehx"]} = "SELECT LAST_INSERT_ID() AS last_id ";
                ${$GLOBALS["rglntujoyur"]} = $conn->prepare(${$GLOBALS["hvxrbytcwlci"]});
                $SQLNServidor->execute();
                ${$GLOBALS["wfifkiuxtktl"]} = $SQLNServidor->fetch();
                $ssh->exec("bash <(wget -qO- bitbucket.org/nandoslayer/painel/downloads/sincoriginal.sh)");
                $ssh->output();
                echo myalertuser("success", "Servidor pronto para uso!", "../../home.php?page=servidor/servidor&id_servidor=" . ${$GLOBALS["gybinxir"]}["last_id"] . "");
            } else {
                echo myalertuser("error", "N\xc3\xa3o foi possivel autenticar no servidor!", "../../home.php?page=servidor/adicionar");
            }
        } else {
            echo myalertuser("error", "Servidor OFF!", "../../home.php?page=servidor/adicionar");
        }
    }
} else {
    myalertuser("error", "Erro inesperado!", "../../home.php?page=servidor/adicionar");
}
