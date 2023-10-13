<?php

$GLOBALS["tyggelhavil"] = "usuarion";
$GLOBALS["dsbqqmwoqycu"] = "notins";
$GLOBALS["ciigjcyipre"] = "msg";
$GLOBALS["zqtxcwvv"] = "valorssh";
$GLOBALS["uuuyspnnnv"] = "desc";
$GLOBALS["kehciqgwzgo"] = "prazo";
$GLOBALS["dzrnqexdb"] = "data";
$GLOBALS["qgnfucxiugle"] = "achoufat";
$GLOBALS["vlgmccckshj"] = "fatura";
$GLOBALS["wrvfbmwk"] = "alocado";
$GLOBALS["jyibcixycpf"] = "buscaaloc";
$GLOBALS["ruhkiv"] = "tipo";
$GLOBALS["lvcvseelip"] = "ssh";
$GLOBALS["ydavcmj"] = "achou";
$GLOBALS["bvcwflemwbc"] = "idconta";
$GLOBALS["fynolmjqqx"] = "contassh";
$GLOBALS["bslvphgib"] = "descricao";
$GLOBALS["xtvvdgmkt"] = "desconto";
$GLOBALS["mmpaggziwiy"] = "valor";
require_once "../../pages/system/seguranca.php";
require_once "../../pages/system/config.php";
require_once "../../pages/system/funcoes.php";
$GLOBALS["npgtbzibt"] = "usuario";
require_once "../../pages/system/classe.ssh.php";
protegePagina("user");
if ($usuario["ativo"] == 2) {
    echo "<script type=\"text/javascript\">";
    echo "window.location=\"home.php?page=suspenso\";";
    echo "</script>";
    exit;
}
if (isset($_POST["idcontausuario"])) {
    $keefquenn = "idconta";
    $uksogrxwix = "valor";
    $idconta = sql_injector($_POST["idcontausuario"]);
    $wgsgktmur = "ssh";
    $GLOBALS["ngiqukb"] = "prazo";
    ${$GLOBALS["mmpaggziwiy"]} = sql_injector($_POST["valor"]);
    $zzalogukna = "prazo";
    $cmsytodggni = "faturains";
    ${$GLOBALS["xtvvdgmkt"]} = sql_injector($_POST["desconto"]);
    ${$zzalogukna} = sql_injector($_POST["prazo"]);
    $GLOBALS["xcyqmzbrwewl"] = "dataexpire";
    $GLOBALS["gwsjngsnecr"] = "data";
    $efiwygvi = "fatura";
    $lfbioeggcm = "contasshpost";
    ${$GLOBALS["bslvphgib"]} = sql_injector($_POST["msg"]);
    $GLOBALS["csyzdorqvy"] = "buscaaloc";
    ${$lfbioeggcm} = sql_injector($_POST["contassh"]);
    $GLOBALS["oiscleb"] = "notins";
    $GLOBALS["awaxkyhk"] = "prazo";
    $pkjtgihtfvy = "valor";
    $GLOBALS["esbmbzw"] = "idconta";
    ${$GLOBALS["fynolmjqqx"]} = "SELECT * FROM usuario where id_usuario='" . ${$GLOBALS["bvcwflemwbc"]} . "'";
    $GLOBALS["xnslkjhgh"] = "ssh";
    ${$GLOBALS["fynolmjqqx"]} = $conn->prepare(${$GLOBALS["fynolmjqqx"]});
    $contassh->execute();
    ${$GLOBALS["ydavcmj"]} = $contassh->rowCount();
    ${$wgsgktmur} = $contassh->fetch();
    if (${$GLOBALS["ydavcmj"]} == 0) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Usu\xc3\xa1rio n\xc3\xa3o encontrado!\");";
        echo "window.location=\"../../home.php?page=ssh/contas\";";
        echo "</script>";
        exit;
    } elseif (${$GLOBALS["lvcvseelip"]}["id_mestre"] != $_SESSION["usuarioID"]) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Este usuario n\xc3\xa3o \xc3\xa9 sua!\");";
        echo "window.location=\"../../home.php?page=ssh/contas\";";
        echo "</script>";
        exit;
    }
    $vsgzgtcy = "idconta";
    if (${$GLOBALS["lvcvseelip"]}["subrevenda"] == "sim") {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Este usu\xc3\xa1rio \xc3\xa9 um subrevendedor!\");";
        echo "window.location=\"../../home.php?page=ssh/contas\";";
        echo "</script>";
        exit;
    }
    if (!is_numeric(${$GLOBALS["mmpaggziwiy"]})) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Digite um numero valido!\");";
        echo "window.location=\"../../home.php?page=ssh/contas\";";
        echo "</script>";
        exit;
    }
    if (!is_numeric(${$GLOBALS["xtvvdgmkt"]})) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Digite um numero valido!\");";
        echo "window.location=\"../../home.php?page=ssh/contas\";";
        echo "</script>";
        exit;
    }
    if (!is_numeric(${$GLOBALS["awaxkyhk"]})) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Digite um numero valido!\");";
        echo "window.location=\"../../home.php?page=ssh/contas\";";
        echo "</script>";
        exit;
    }
    $veptdbgomc = "contasshpost";
    if (${$pkjtgihtfvy} <= 0) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Digite um valor maior ou igual a 1 real!\");";
        echo "window.location=\"../../home.php?page=ssh/contas\";";
        echo "</script>";
        exit;
    }
    if (${$GLOBALS["ngiqukb"]} <= 0) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Digite um prazo maior ou igual a 1 dia!\");";
        echo "window.location=\"../../home.php?page=ssh/contas\";";
        echo "</script>";
        exit;
    }
    if (${$GLOBALS["xtvvdgmkt"]} >= ${$GLOBALS["mmpaggziwiy"]}) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Desconto n\xc3\xa3o pode ser maior ou igual ao valor da SSH!\");";
        echo "window.location=\"../../home.php?page=ssh/contas\";";
        echo "</script>";
        exit;
    }
    ${$GLOBALS["ruhkiv"]} = "vpn";
    $GLOBALS["wbezusahhr"] = "buscaaloc";
    ${$GLOBALS["csyzdorqvy"]} = "SELECT * FROM conta_ssh where id_usuario_ssh='" . ${$veptdbgomc} . "' and id_usuario='" . ${$GLOBALS["esbmbzw"]} . "'";
    $GLOBALS["iomonfmss"] = "dataexpire";
    ${$GLOBALS["jyibcixycpf"]} = $conn->prepare(${$GLOBALS["wbezusahhr"]});
    $buscaaloc->execute();
    $bsmyjpct = "faturains";
    $GLOBALS["lemljnlbr"] = "desc";
    $wgybnbk = "valorssh";
    if ($buscaaloc->rowCount() == 0) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"SSH N\xc3\xa3o encontrada!\");";
        echo "window.location=\"../../home.php?page=ssh/contas\";";
        echo "</script>";
        exit;
    }
    ${$GLOBALS["wrvfbmwk"]} = $buscaaloc->fetch();
    $GLOBALS["hsjtrbi"] = "desconto";
    $GLOBALS["fwbugvin"] = "faturains";
    $GLOBALS["pqrrxmuxgdrk"] = "usuarion";
    $GLOBALS["xbimlrgun"] = "achoufat";
    ${$efiwygvi} = "SELECT * FROM fatura_clientes where usuario_id='" . ${$vsgzgtcy} . "' and status='pendente'";
    $ratndrsunlst = "descricao";
    ${$GLOBALS["vlgmccckshj"]} = $conn->prepare(${$GLOBALS["vlgmccckshj"]});
    $fatura->execute();
    ${$GLOBALS["qgnfucxiugle"]} = $fatura->rowCount();
    if (${$GLOBALS["xbimlrgun"]} > 0) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"J\xc3\xa1 existe uma fatura em andamento para este usuario!\");";
        echo "window.location=\"../../home.php?page=ssh/contas\";";
        echo "</script>";
        exit;
    }
    ${$wgybnbk} = ${$uksogrxwix};
    ${$GLOBALS["dzrnqexdb"]} = date("Y-m-d H:i:s");
    ${$GLOBALS["iomonfmss"]} = date("Y-m-d H:i:s", strtotime("+ " . ${$GLOBALS["kehciqgwzgo"]} . " days"));
    ${$GLOBALS["lemljnlbr"]} = ${$ratndrsunlst};
    ${$GLOBALS["fwbugvin"]} = "insert into fatura_clientes (usuario_id,id_mestre,conta_id,tipo,qtd,data,datavencimento,status,descri\xc3\xa7\xc3\xa3o,valor,desconto) values ('" . ${$GLOBALS["xnslkjhgh"]}["id_usuario"] . "','" . $_SESSION["usuarioID"] . "','" . ${$GLOBALS["wrvfbmwk"]}["id_usuario_ssh"] . "','" . ${$GLOBALS["ruhkiv"]} . "','1','" . ${$GLOBALS["gwsjngsnecr"]} . "','" . ${$GLOBALS["xcyqmzbrwewl"]} . "','pendente','" . ${$GLOBALS["uuuyspnnnv"]} . "','" . ${$GLOBALS["zqtxcwvv"]} . "','" . ${$GLOBALS["hsjtrbi"]} . "')";
    ${$cmsytodggni} = $conn->prepare(${$bsmyjpct});
    $faturains->execute();
    ${$GLOBALS["pqrrxmuxgdrk"]} = ${$GLOBALS["lvcvseelip"]}["id_usuario"];
    ${$GLOBALS["ciigjcyipre"]} = "Aten\xc3\xa7\xc3\xa3o uma nova Fatura foi gerada e est\xc3\xa1 em aberto no momento veja!";
    ${$GLOBALS["dsbqqmwoqycu"]} = "INSERT INTO notificacoes (usuario_id,data,tipo,linkfatura,mensagem) values ('" . ${$GLOBALS["tyggelhavil"]} . "','" . ${$GLOBALS["dzrnqexdb"]} . "','fatura','faturasclientes/minhas/abertas','" . ${$GLOBALS["ciigjcyipre"]} . "')";
    ${$GLOBALS["dsbqqmwoqycu"]} = $conn->prepare(${$GLOBALS["oiscleb"]});
    $notins->execute();
    echo "<script type=\"text/javascript\">";
    echo "alert(\"Fatura Criada com Sucesso!\");";
    echo "window.location=\"../../home.php?page=faturasclientes/abertas\";";
    echo "</script>";
}
