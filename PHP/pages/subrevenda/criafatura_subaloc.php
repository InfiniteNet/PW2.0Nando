<?php

$GLOBALS["hymxchpw"] = "notins";
$GLOBALS["ifibcfvhfldk"] = "msg";
$GLOBALS["szxspsqq"] = "usuarion";
$GLOBALS["zufleccbxvs"] = "alocado";
$GLOBALS["oogrmvstc"] = "data";
$GLOBALS["lmelmcusehqh"] = "tipo";
$GLOBALS["gsbpdbpdkv"] = "faturains";
$GLOBALS["kvcycpnq"] = "descricao";
$GLOBALS["qsrxyumpfc"] = "achoufat";
$GLOBALS["xdnupvaws"] = "fatura";
$GLOBALS["nzrdhwtm"] = "buscaaloc";
$GLOBALS["zqhiwhy"] = "desconto";
$GLOBALS["uzlqkyags"] = "ssh";
$GLOBALS["umrrznhkcyls"] = "achou";
$GLOBALS["xldwjcmj"] = "contassh";
$GLOBALS["hfpcgrct"] = "prazo";
$GLOBALS["uzyflvfkzyl"] = "valor";
$GLOBALS["aejotclhenn"] = "idconta";
require_once "../../pages/system/seguranca.php";
require_once "../../pages/system/config.php";
$GLOBALS["rqjreislzcfq"] = "usuario";
require_once "../../pages/system/funcoes.php";
require_once "../../pages/system/classe.ssh.php";
protegePagina("user");
if ($usuario["ativo"] == 2) {
    echo "<script type=\"text/javascript\">";
    echo "window.location=\"home.php?page=suspenso\";";
    echo "</script>";
    exit;
}
if (isset($_POST["idcontausuario"])) {
    $GLOBALS["jlobqfc"] = "ssh";
    $GLOBALS["gcjvuoql"] = "desconto";
    $GLOBALS["mgmrbh"] = "alocado";
    $GLOBALS["qfgjiip"] = "dataexpire";
    ${$GLOBALS["aejotclhenn"]} = sql_injector($_POST["idcontausuario"]);
    $milownbq = "ssh";
    $GLOBALS["syzmhhvny"] = "valor";
    ${$GLOBALS["uzyflvfkzyl"]} = sql_injector($_POST["valor"]);
    $bvsmvbafq = "tipe";
    ${$GLOBALS["gcjvuoql"]} = sql_injector($_POST["desconto"]);
    ${$GLOBALS["hfpcgrct"]} = sql_injector($_POST["prazo"]);
    $GLOBALS["sisyeklinlu"] = "valor";
    $qecykhhta = "servidor";
    $oyjemyra = "descricao";
    $vongmbjmtrz = "buscaaloc";
    $tmnyetgta = "contassh";
    $itirbvuwfjdu = "contassh";
    $GLOBALS["ojiivvs"] = "idconta";
    $descricao = sql_injector($_POST["msg"]);
    $GLOBALS["iutjjpjxdk"] = "achou";
    $GLOBALS["kpeguvyunu"] = "desconto";
    ${$bvsmvbafq} = sql_injector($_POST["tipo"]);
    ${$qecykhhta} = sql_injector($_POST["servidoralocado"]);
    $GLOBALS["fzlwvigm"] = "fatura";
    $GLOBALS["iasqteucfp"] = "buscaaloc";
    $ixwlygoj = "notins";
    $GLOBALS["rfbgopdmea"] = "desc";
    ${$tmnyetgta} = "SELECT * FROM usuario where id_usuario='" . ${$GLOBALS["ojiivvs"]} . "'";
    $GLOBALS["bgiujcv"] = "achoufat";
    ${$itirbvuwfjdu} = $conn->prepare(${$GLOBALS["xldwjcmj"]});
    $jgclyhr = "fatura";
    $contassh->execute();
    $GLOBALS["petdlbh"] = "faturains";
    ${$GLOBALS["iutjjpjxdk"]} = $contassh->rowCount();
    ${$milownbq} = $contassh->fetch();
    $rstelnbntf = "desconto";
    if (${$GLOBALS["umrrznhkcyls"]} == 0) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Usu\xc3\xa1rio n\xc3\xa3o encontrado!\");";
        echo "window.location=\"../../home.php?page=subrevenda/alocados\";";
        echo "</script>";
        exit;
    } elseif (${$GLOBALS["jlobqfc"]}["id_mestre"] != $_SESSION["usuarioID"]) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Este usuario n\xc3\xa3o \xc3\xa9 sua!\");";
        echo "window.location=\"../../home.php?page=subrevenda/alocados\";";
        echo "</script>";
        exit;
    }
    $oeehwsrkxn = "tipo";
    if (${$GLOBALS["uzlqkyags"]}["subrevenda"] != "sim") {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Este usu\xc3\xa1rio n\xc3\xa3o \xc3\xa9 um subrevendedor!\");";
        echo "window.location=\"../../home.php?page=subrevenda/alocados\";";
        echo "</script>";
        exit;
    }
    if (!is_numeric(${$GLOBALS["syzmhhvny"]})) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Digite um numero valido!\");";
        echo "window.location=\"../../home.php?page=subrevenda/alocados\";";
        echo "</script>";
        exit;
    }
    $GLOBALS["qplkkwpnclr"] = "dataexpire";
    if (!is_numeric(${$GLOBALS["kpeguvyunu"]})) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Digite um numero valido!\");";
        echo "window.location=\"../../home.php?page=subrevenda/alocados\";";
        echo "</script>";
        exit;
    }
    if (!is_numeric(${$GLOBALS["hfpcgrct"]})) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Digite um numero valido!\");";
        echo "window.location=\"../../home.php?page=subrevenda/alocados\";";
        echo "</script>";
        exit;
    }
    $GLOBALS["emyfaupfm"] = "ssh";
    $GLOBALS["jcqmeirqx"] = "msg";
    $GLOBALS["nwtnitii"] = "servidor";
    $euwnvf = "ssh";
    $GLOBALS["rfywhrvev"] = "notins";
    $fntpppul = "valorssh";
    $GLOBALS["nniweiux"] = "data";
    $ppzkfltsw = "valorssh";
    if (${$GLOBALS["uzyflvfkzyl"]} <= 0) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Digite um valor maior ou igual a 1 real!\");";
        echo "window.location=\"../../home.php?page=subrevenda/alocados\";";
        echo "</script>";
        exit;
    }
    if (${$GLOBALS["hfpcgrct"]} <= 0) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Digite um prazo maior ou igual a 1 dia!\");";
        echo "window.location=\"../../home.php?page=subrevenda/alocados\";";
        echo "</script>";
        exit;
    }
    $uevztcr = "valor";
    if (${$GLOBALS["zqhiwhy"]} >= ${$GLOBALS["sisyeklinlu"]}) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Desconto n\xc3\xa3o pode ser maior ou igual ao valor da SSH!\");";
        echo "window.location=\"../../home.php?page=subrevenda/alocados\";";
        echo "</script>";
        exit;
    }
    ${$oeehwsrkxn} = "revenda";
    ${$GLOBALS["iasqteucfp"]} = "SELECT * FROM acesso_servidor where id_acesso_servidor='" . ${$GLOBALS["nwtnitii"]} . "' and id_mestre='" . $_SESSION["usuarioID"] . "'";
    ${$GLOBALS["nzrdhwtm"]} = $conn->prepare(${$vongmbjmtrz});
    $buscaaloc->execute();
    if ($buscaaloc->rowCount() == 0) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Servidor n\xc3\xa3o encontrado!\");";
        echo "window.location=\"../../home.php?page=subrevenda/alocados\";";
        echo "</script>";
        exit;
    }
    ${$GLOBALS["mgmrbh"]} = $buscaaloc->fetch();
    ${$GLOBALS["fzlwvigm"]} = "SELECT * FROM fatura_clientes where usuario_id='" . ${$GLOBALS["aejotclhenn"]} . "' and status='pendente'";
    ${$jgclyhr} = $conn->prepare(${$GLOBALS["xdnupvaws"]});
    $GLOBALS["jkclcfqq"] = "desc";
    $fatura->execute();
    ${$GLOBALS["qsrxyumpfc"]} = $fatura->rowCount();
    if (${$GLOBALS["bgiujcv"]} > 0) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"J\xc3\xa1 existe uma fatura em andamento para este usuario!\");";
        echo "window.location=\"../../home.php?page=subrevenda/alocados\";";
        echo "</script>";
        exit;
    }
    ${$ppzkfltsw} = ${$uevztcr};
    ${$GLOBALS["nniweiux"]} = date("Y-m-d H:i:s");
    ${$GLOBALS["qfgjiip"]} = date("Y-m-d H:i:s", strtotime("+ " . ${$GLOBALS["hfpcgrct"]} . " days"));
    ${$GLOBALS["rfbgopdmea"]} = ${$GLOBALS["kvcycpnq"]};
    ${$GLOBALS["gsbpdbpdkv"]} = "insert into fatura_clientes (usuario_id,id_mestre,tipo,qtd,data,datavencimento,status,descri\xc3\xa7\xc3\xa3o,valor,desconto,servidor_id) values ('" . ${$euwnvf}["id_usuario"] . "','" . $_SESSION["usuarioID"] . "','" . ${$GLOBALS["lmelmcusehqh"]} . "','1','" . ${$GLOBALS["oogrmvstc"]} . "','" . ${$GLOBALS["qplkkwpnclr"]} . "','pendente','" . ${$GLOBALS["jkclcfqq"]} . "','" . ${$fntpppul} . "','" . ${$rstelnbntf} . "','" . ${$GLOBALS["zufleccbxvs"]}["id_servidor"] . "')";
    ${$GLOBALS["gsbpdbpdkv"]} = $conn->prepare(${$GLOBALS["petdlbh"]});
    $faturains->execute();
    ${$GLOBALS["szxspsqq"]} = ${$GLOBALS["emyfaupfm"]}["id_usuario"];
    ${$GLOBALS["ifibcfvhfldk"]} = "Aten\xc3\xa7\xc3\xa3o uma nova Fatura foi gerada e est\xc3\xa1 em aberto no momento veja!";
    ${$GLOBALS["rfywhrvev"]} = "INSERT INTO notificacoes (usuario_id,data,tipo,linkfatura,mensagem) values ('" . ${$GLOBALS["szxspsqq"]} . "','" . ${$GLOBALS["oogrmvstc"]} . "','fatura','faturasclientes/minhas/abertas','" . ${$GLOBALS["jcqmeirqx"]} . "')";
    ${$GLOBALS["hymxchpw"]} = $conn->prepare(${$ixwlygoj});
    $notins->execute();
    echo "<script type=\"text/javascript\">";
    echo "alert(\"Fatura Criada com Sucesso!\");";
    echo "window.location=\"../../home.php?page=faturasclientes/abertas\";";
    echo "</script>";
}
