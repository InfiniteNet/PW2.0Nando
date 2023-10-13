<?php

$GLOBALS["msmbsdsp"] = "SQLServidor";
$GLOBALS["euxucsdvwmv"] = "servidor_autenticado";
$GLOBALS["bbjvriomft"] = "ssh";
$GLOBALS["hohxvx"] = "senhaSSH";
$GLOBALS["hfxsud"] = "loginSSH";
$GLOBALS["mbmurb"] = "SQLServn";
$GLOBALS["ultstgxupbw"] = "euserv";
$GLOBALS["humnrno"] = "SQLServ";
require_once "../../../pages/system/seguranca.php";
require_once "../../../pages/system/config.php";
require_once "../../../pages/system/classe.ssh.php";
require_once "../../../pages/system/funcoes.system.php";
protegePagina("donoadmin");
if (isset($_POST["nomesrv"]) and isset($_POST["ip"]) and isset($_POST["login"]) and isset($_POST["senha"]) and isset($_POST["id_servidor"])) {
    $SQLServ = "select * from servidor WHERE id_servidor = '" . $_POST["id_servidor"] . "'";
    $svglmcij = "SQLServ";
    $GLOBALS["kikgtzmmw"] = "servidor_autenticado";
    $SQLServ = $conn->prepare($SQLServ);
    $vrtfxzcroz = "ip_servidor";
    $SQLServ->execute();
    if ($SQLServ->rowCount() > 0) {
        $grruphfdo = "euserv";
        $euserv = $SQLServ->fetch();
        if ($_POST["nomesrv"] !== $euserv["nome"]) {
            $GLOBALS["ecivvnddk"] = "SQLServn";
            $ytqqno = "SQLServn";
            $SQLServn = "select * from servidor WHERE nome = '" . $_POST["nomesrv"] . "'";
            $SQLServn = $conn->prepare($SQLServn);
            $SQLServn->execute();
            if ($SQLServn->rowCount() > 0) {
                echo myalertuser("error", "J\xc3\xa1 existe um servidor com esse nome!", "../../home.php?page=servidor/servidor&id_servidor=" . $_POST["id_servidor"] . "");
                exit;
            }
        }
        if ($_POST["ip"] !== ${$GLOBALS["ultstgxupbw"]}["ip_servidor"]) {
            $tqlkobqknl = "SQLServip";
            $GLOBALS["bqdommhrikv"] = "SQLServip";
            $SQLServip = "select * from servidor WHERE ip_servidor = '" . $_POST["ip"] . "'";
            $gdkmxcqsmc = "SQLServip";
            $SQLServip = $conn->prepare($SQLServip);
            $SQLServip->execute();
            if ($SQLServip->rowCount() > 0) {
                echo myalertuser("error", "J\xc3\xa1 existe um servidor com esse IP!", "../../home.php?page=servidor/servidor&id_servidor=" . $_POST["id_servidor"] . "");
                exit;
            }
        }
    }
    if (!is_numeric($_POST["validade"])) {
        echo myalertuser("error", "S\xc3\xb3 \xc3\xa9 permitido n\xc3\xbameros na validade!", "../../home.php?page=servidor/servidor&id_servidor=" . $_POST["id_servidor"] . "");
        exit;
    }
    if (!is_numeric($_POST["limite"])) {
        echo myalertuser("error", "S\xc3\xb3 \xc3\xa9 permitido n\xc3\xbameros no limite!", "../../home.php?page=servidor/servidor&id_servidor=" . $_POST["id_servidor"] . "");
        exit;
    }
    ${$vrtfxzcroz} = $_POST["ip"];
    ${$GLOBALS["hfxsud"]} = $_POST["login"];
    ${$GLOBALS["hohxvx"]} = $_POST["senha"];
    $GLOBALS["qnhitndeuwf"] = "ip_servidor";
    ${$GLOBALS["bbjvriomft"]} = new SSH2($ip_servidor);
    ${$GLOBALS["euxucsdvwmv"]} = $ssh->auth($_POST["login"], $_POST["senha"]);
    $ssh->output();
    if (${$GLOBALS["kikgtzmmw"]}) {
        ${$GLOBALS["msmbsdsp"]} = "select * from servidor where id_servidor = '" . $_POST["id_servidor"] . "'";
        $GLOBALS["dvitwjwxhy"] = "SQLServidor";
        $SQLServidor = $conn->prepare(${$GLOBALS["msmbsdsp"]});
        $SQLServidor->execute();
        if ($SQLServidor->rowCount() > 0) {
            $GLOBALS["jdpcbk"] = "SQLServidor";
            $GLOBALS["cwhkgihucap"] = "servidor";
            $servidor = $SQLServidor->fetch();
            $SQLServidor = "update servidor set nome='" . sql_injector($_POST["nomesrv"]) . "', ip_servidor='" . sql_injector($_POST["ip"]) . "', login_server='" . sql_injector($_POST["login"]) . "', senha='" . sql_injector($_POST["senha"]) . "', site_servidor='" . sql_injector($_POST["siteserver"]) . "', localizacao='" . sql_injector($_POST["localiza"]) . "', localizacao_img='" . $_POST["localiza_ico"] . "', validade='" . sql_injector($_POST["validade"]) . "', limite='" . sql_injector($_POST["limite"]) . "' WHERE id_servidor = '" . $_POST["id_servidor"] . "' ";
            ${$GLOBALS["msmbsdsp"]} = $conn->prepare(${$GLOBALS["msmbsdsp"]});
            $SQLServidor->execute();
            $conn->query("UPDATE servidor SET online='1', autenticado='1' WHERE id_servidor='" . $_POST["id_servidor"] . "'");
            echo myalertuser("success", "O servidor " . $_POST["nomesrv"] . " foi editado com sucesso!", "../../home.php?page=servidor/servidor&id_servidor=" . $_POST["id_servidor"] . "");
        } else {
            echo myalertuser("error", "Servidor n\xc3\xa3o encontrado!", "../../home.php?page=servidor/listar");
        }
    } else {
        echo myalertuser("warning", "N\xc3\xa3o foi poss\xc3\xadvel autenticar no servidor!", "../../home.php?page=servidor/servidor&id_servidor=" . $_POST["id_servidor"] . "");
    }
} else {
    echo myalertuser("error", "Preencha!", "../../home.php?page=servidor/servidor&id_servidor=" . $_POST["id_servidor"] . "");
}
