<?php

$GLOBALS["jrexttmt"] = "SQLSucesso";
$GLOBALS["rdirkvci"] = "contas_ssh_criadas";
$GLOBALS["ysymwdioemlw"] = "soma";
$GLOBALS["ubsvqjyhid"] = "SQLSubSSH";
$GLOBALS["uyzioxn"] = "row";
$GLOBALS["yujmfax"] = "SQLUsuarioSub";
$GLOBALS["fojvtur"] = "SQLContasSSH";
$GLOBALS["juxeywqdtbtn"] = "buscaserver3";
$GLOBALS["ndomkj"] = "buscaserver2";
$GLOBALS["fxvwwligogn"] = "meuservidor";
$GLOBALS["mrkwlszx"] = "buscaserver";
$GLOBALS["gqguejk"] = "buscasubusuario";
$GLOBALS["cjlrxqdhjjg"] = "eu";
$GLOBALS["ilpyoqx"] = "buscaeu";
$GLOBALS["xugfntb"] = "limite";
$GLOBALS["hzzqlnske"] = "servidor";
require_once "../../pages/system/seguranca.php";
require_once "../../pages/system/config.php";
require_once "../../pages/system/funcoes.php";
$gjrzwwxtvpsq = "ipdominio";
$GLOBALS["nkekkrph"] = "accessKEY";
$GLOBALS["honymnqbspc"] = "usuario";
require_once "../../pages/system/classe.ssh.php";
require_once "../../pages/system/funcoes.system.php";
protegePagina("user");
if ($usuario["ativo"] == 2) {
    echo "<script type=\"text/javascript\">";
    echo "window.location=\"home.php?page=suspenso\";";
    echo "</script>";
    exit;
}
if ($_POST["segmax"] !== ${$GLOBALS["nkekkrph"]}) {
    expulsaVisitante();
    exit;
}
if ($_POST["ipmax"] !== ${$gjrzwwxtvpsq}) {
    expulsaVisitante();
    exit;
}
if (isset($_POST["servidor"])) {
    $maltnud = "contas_ssh_criadas";
    $GLOBALS["gyeochul"] = "buscaeu";
    $GLOBALS["bsturwu"] = "SQLSubSSH";
    ${$GLOBALS["hzzqlnske"]} = sql_injector($_POST["servidor"]);
    $whkgqnnhg = "SQLSucesso";
    $GLOBALS["nkmnckebg"] = "buscaserver3";
    $GLOBALS["phkvxnikitif"] = "eu";
    $GLOBALS["yhefneir"] = "subrevendedor";
    $GLOBALS["axkcffcjwh"] = "buscaserver2";
    $ppyeznsdvrw = "meuservidor";
    $GLOBALS["xitjbxipkjvj"] = "subrevendedor";
    $clnaedpndo = "limite";
    $subrevendedor = sql_injector($_POST["subusuario"]);
    $mbtrflqy = "subrevendedor";
    $GLOBALS["lqlqdskguhc"] = "SQLUsuarioSub";
    $GLOBALS["pksvfxiebds"] = "buscaserver";
    $bygqhcpp = "buscasubusuario";
    ${$GLOBALS["xugfntb"]} = sql_injector($_POST["limite"]);
    $GLOBALS["blgswgey"] = "buscaeu";
    if (!ctype_digit(${$GLOBALS["xugfntb"]})) {
        echo myalertuser("error", "Informe um n\xc3\xbamero v\xc3\xa1lido!", "../../home.php?page=subrevenda/adicionar");
        exit;
    }
    $GLOBALS["cblbilofklg"] = "eu";
    $GLOBALS["fkcfcwul"] = "SQLContasSSH";
    if (${$clnaedpndo} <= 0) {
        echo myalertuser("error", "Informe um n\xc3\xbamero v\xc3\xa1lido!", "../../home.php?page=subrevenda/adicionar");
        exit;
    }
    $GLOBALS["yjcngbxpg"] = "eu";
    ${$GLOBALS["gyeochul"]} = "SELECT * FROM usuario where id_usuario= '" . $_SESSION["usuarioID"] . "'";
    $pigizuxrjnl = "subrevendedor";
    ${$GLOBALS["ilpyoqx"]} = $conn->prepare(${$GLOBALS["blgswgey"]});
    $buscaeu->execute();
    $mpgwstk = "buscaserver2";
    $mvkrejg = "buscasubusuario";
    if ($buscaeu->rowCount() == 0) {
        echo myalertuser("error", "Erro", "../../home.php?page=subrevenda/adicionar");
        exit;
    }
    $xzjdkd = "SQLContasSSH";
    ${$GLOBALS["cjlrxqdhjjg"]} = $buscaeu->fetch();
    $pgsjnfbufi = "servidor";
    ${$GLOBALS["gqguejk"]} = "SELECT * FROM usuario where id_usuario= '" . ${$GLOBALS["xitjbxipkjvj"]} . "' and id_mestre='" . $_SESSION["usuarioID"] . "'";
    $wnrdxznpwj = "SQLContasSSH";
    ${$mvkrejg} = $conn->prepare(${$bygqhcpp});
    $buscasubusuario->execute();
    $GLOBALS["mpfcwpimdw"] = "meuservidor";
    ${$GLOBALS["mrkwlszx"]} = "SELECT * FROM acesso_servidor where id_acesso_servidor= '" . ${$pgsjnfbufi} . "' and id_usuario='" . ${$GLOBALS["cjlrxqdhjjg"]}["id_usuario"] . "'";
    ${$GLOBALS["mrkwlszx"]} = $conn->prepare(${$GLOBALS["pksvfxiebds"]});
    $buscaserver->execute();
    if ($buscaserver->rowCount() == 0) {
        echo myalertuser("error", "Servidor n\xc3\xa3o encontrado!", "../../home.php?page=subrevenda/adicionar");
        exit;
    }
    $GLOBALS["qmvhmohsqo"] = "meuservidor";
    $meuservidor = $buscaserver->fetch();
    ${$mpgwstk} = "SELECT * FROM servidor where id_servidor='" . ${$GLOBALS["fxvwwligogn"]}["id_servidor"] . "'";
    ${$GLOBALS["axkcffcjwh"]} = $conn->prepare(${$GLOBALS["ndomkj"]});
    $buscaserver2->execute();
    if ($buscaserver2->rowCount() == 0) {
        echo myalertuser("error", "Servidor n\xc3\xa3o encontrado!", "../../home.php?page=subrevenda/adicionar");
        exit;
    }
    ${$GLOBALS["juxeywqdtbtn"]} = "SELECT * FROM acesso_servidor where id_servidor='" . ${$GLOBALS["mpfcwpimdw"]}["id_servidor"] . "' and id_usuario='" . ${$mbtrflqy} . "' and id_mestre='" . $_SESSION["usuarioID"] . "'";
    $GLOBALS["lmrpvzwc"] = "contas_ssh_criadas";
    ${$GLOBALS["nkmnckebg"]} = $conn->prepare(${$GLOBALS["juxeywqdtbtn"]});
    $buscaserver3->execute();
    if ($buscaserver3->rowCount() > 0) {
        echo myalertuser("error", "Esse servidor j\xc3\xa1 foi adicionado a essa revenda!", "../../home.php?page=subrevenda/adicionar");
        exit;
    }
    $tgilqqpk = "meuservidor";
    ${$GLOBALS["fojvtur"]} = "SELECT sum(acesso) AS quantidade FROM conta_ssh where id_servidor = '" . ${$GLOBALS["fxvwwligogn"]}["id_servidor"] . "' and id_usuario='" . ${$GLOBALS["yjcngbxpg"]}["id_usuario"] . "'";
    ${$GLOBALS["fkcfcwul"]} = $conn->prepare(${$GLOBALS["fojvtur"]});
    $SQLContasSSH->execute();
    ${$xzjdkd} = $SQLContasSSH->fetch();
    ${$maltnud} += ${$wnrdxznpwj}["quantidade"];
    ${$GLOBALS["yujmfax"]} = "SELECT * FROM usuario WHERE id_mestre ='" . ${$GLOBALS["phkvxnikitif"]}["id_usuario"] . "'";
    $GLOBALS["mstkwtnse"] = "meuservidor";
    ${$GLOBALS["yujmfax"]} = $conn->prepare(${$GLOBALS["lqlqdskguhc"]});
    $SQLUsuarioSub->execute();
    if ($SQLUsuarioSub->rowCount() > 0) {
        while (${$GLOBALS["uyzioxn"]} = $SQLUsuarioSub->fetch()) {
        }
    }
    ${$GLOBALS["ubsvqjyhid"]} = "SELECT sum(qtd) AS limites from acesso_servidor WHERE id_mestre ='" . ${$GLOBALS["cblbilofklg"]}["id_usuario"] . "' and id_servidor='" . ${$ppyeznsdvrw}["id_servidor"] . "'";
    ${$GLOBALS["ubsvqjyhid"]} = $conn->prepare(${$GLOBALS["ubsvqjyhid"]});
    $hovrcaoogtw = "contas_ssh_criadas";
    $SQLSubSSH->execute();
    ${$GLOBALS["bsturwu"]} = $SQLSubSSH->fetch();
    ${$GLOBALS["lmrpvzwc"]} += ${$GLOBALS["ubsvqjyhid"]}["limites"];
    ${$GLOBALS["mstkwtnse"]}["qtd"] -= ${$hovrcaoogtw};
    if (${$GLOBALS["ysymwdioemlw"]} <= 0) {
        ${$GLOBALS["ysymwdioemlw"]} = 0;
    }
    if (${$GLOBALS["fxvwwligogn"]}["qtd"] < ${$GLOBALS["rdirkvci"]} + ${$GLOBALS["xugfntb"]}) {
        $GLOBALS["xftcpfqeerb"] = "soma";
        echo myalertuser("warning", "Voc\xc3\xaa n\xc3\xa3o possui esse limite, Quantidade Permitida: " . $soma . " !", "../../home.php?page=subrevenda/adicionar");
        exit;
    }
    ${$GLOBALS["jrexttmt"]} = "insert into acesso_servidor (id_servidor,id_usuario,id_mestre,id_servidor_mestre,qtd) values ('" . ${$tgilqqpk}["id_servidor"] . "','" . ${$pigizuxrjnl} . "','" . $_SESSION["usuarioID"] . "','" . ${$GLOBALS["fxvwwligogn"]}["id_acesso_servidor"] . "','" . ${$GLOBALS["xugfntb"]} . "')";
    ${$GLOBALS["jrexttmt"]} = $conn->prepare(${$whkgqnnhg});
    $SQLSucesso->execute();
    echo myalertuser("success", "Adicionado com sucesso !", "../../home.php?page=subrevenda/alocados");
    exit;
}
