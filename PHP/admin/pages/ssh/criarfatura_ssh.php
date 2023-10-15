<?php

$GLOBALS["jrbfstecwx"] = "notins";
$GLOBALS["wnriykuc"] = "usuarion";
$GLOBALS["qjgxysw"] = "desc";
$GLOBALS["cpuyzzvqyq"] = "faturains";
$GLOBALS["vddhrbroslk"] = "descricao";
$GLOBALS["uduook"] = "dataexpire";
$GLOBALS["wwmwytrwbmmh"] = "data";
$GLOBALS["hxvqebi"] = "ssh";
$GLOBALS["xjmgnkgzw"] = "achoufat";
$GLOBALS["llyoflvmudo"] = "fatura";
$GLOBALS["cxqomtl"] = "achou";
$GLOBALS["mxpwhplnapj"] = "contassh";
$GLOBALS["ddhsvum"] = "valor";
$GLOBALS["kwfhoyunqow"] = "idconta";
require_once "../../../pages/system/seguranca.php";
require_once "../../../pages/system/config.php";
require_once "../../../pages/system/classe.ssh.php";
protegePagina("donoadmin");
if (isset($_POST["idcontassh"])) {
    $nkmrizpeusgh = "prazo";
    $ihhgynlwggxd = "idconta";
    $GLOBALS["kirzxgrympiq"] = "prazo";
    $zhfrgutddl = "desconto";
    $hpkwbqywchv = "contassh";
    $otmrshfxl = "dataexpire";
    $olasnor = "msg";
    $nghagpdkk = "data";
    $GLOBALS["vmezdmcc"] = "desc";
    $idconta = sql_injector($_POST["idcontassh"]);
    $ritqkvcc = "descricao";
    $valor = sql_injector($_POST["valor"]);
    $GLOBALS["xdprfzxf"] = "desconto";
    $desconto = sql_injector($_POST["desconto"]);
    $prazo = sql_injector($_POST["prazo"]);
    $GLOBALS["qmiulltvb"] = "valor";
    $hpfvcph = "valorssh";
    $descricao = sql_injector($_POST["msg"]);
    $contassh = "SELECT * FROM conta_ssh where id_usuario_ssh='" . $idconta . "'";
    $contassh = $conn->prepare($contassh);
    $contassh->execute();
    $achou = $contassh->rowCount();
    $xwkwko = "ssh";
    $GLOBALS["kvvwrljfvrtu"] = "ssh";
    $ssh = $contassh->fetch();
    $GLOBALS["hauthfhhfpn"] = "valor";
    $GLOBALS["oxijgyruoxgx"] = "ssh";
    $GLOBALS["kaymqdvhnnm"] = "prazo";
    $GLOBALS["evlkwddlxv"] = "prazo";
    $GLOBALS["wyfklv"] = "faturains";
    if ($achou == 0) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Conta n\xc3\xa3o encontrada!\");";
        echo "window.location=\"../../home.php?page=ssh/contas\";";
        echo "</script>";
        exit;
    } elseif ($ssh["id_usuario"] == 0) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Essa conta \xc3\xa9 do sistema!\");";
        echo "window.location=\"../../home.php?page=ssh/contas\";";
        echo "</script>";
        exit;
    }
    if (!is_numeric(${$GLOBALS["ddhsvum"]})) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Digite um numero valido!\");";
        echo "window.location=\"../../home.php?page=ssh/contas\";";
        echo "</script>";
        exit;
    }
    if (!is_numeric(${$zhfrgutddl})) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Digite um numero valido!\");";
        echo "window.location=\"../../home.php?page=ssh/contas\";";
        echo "</script>";
        exit;
    }
    if (!is_numeric(${$GLOBALS["kirzxgrympiq"]})) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Digite um numero valido!\");";
        echo "window.location=\"../../home.php?page=ssh/contas\";";
        echo "</script>";
        exit;
    }
    $svutycnfuq = "desconto";
    if (${$GLOBALS["hauthfhhfpn"]} <= 0) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Digite um valor maior ou igual a 1 real!\");";
        echo "window.location=\"../../home.php?page=ssh/contas\";";
        echo "</script>";
        exit;
    }
    if (${$GLOBALS["evlkwddlxv"]} <= 0) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Digite um prazo maior ou igual a 1 dia!\");";
        echo "window.location=\"../../home.php?page=ssh/contas\";";
        echo "</script>";
        exit;
    }
    if (${$svutycnfuq} >= ${$GLOBALS["qmiulltvb"]}) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Desconto n\xc3\xa3o pode ser maior ou igual ao valor da SSH!\");";
        echo "window.location=\"../../home.php?page=ssh/contas\";";
        echo "</script>";
        exit;
    }
    ${$GLOBALS["llyoflvmudo"]} = "SELECT * FROM fatura where conta_id='" . ${$GLOBALS["kwfhoyunqow"]} . "' and status='pendente'";
    ${$GLOBALS["llyoflvmudo"]} = $conn->prepare(${$GLOBALS["llyoflvmudo"]});
    $GLOBALS["ngwljorilrz"] = "valor";
    $fatura->execute();
    ${$GLOBALS["xjmgnkgzw"]} = $fatura->rowCount();
    $GLOBALS["iidepqjuwrqw"] = "valorssh";
    if (${$GLOBALS["xjmgnkgzw"]} > 0) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"J\xc3\xa1 existe uma fatura em andamento para esta conta!\");";
        echo "window.location=\"../../home.php?page=ssh/contas\";";
        echo "</script>";
        exit;
    }
    $mqrdps = "msg";
    $GLOBALS["wjayezpbhp"] = "notins";
    ${$hpfvcph} = ceil(${$GLOBALS["ngwljorilrz"]} * ${$GLOBALS["hxvqebi"]}["acesso"]);
    ${$GLOBALS["wwmwytrwbmmh"]} = date("Y-m-d H:i:s");
    ${$GLOBALS["uduook"]} = date("Y-m-d 00:00:00", strtotime("+ " . ${$GLOBALS["kaymqdvhnnm"]} . " days"));
    ${$GLOBALS["vmezdmcc"]} = ${$GLOBALS["vddhrbroslk"]};
    $oalxflm = "notins";
    ${$GLOBALS["cpuyzzvqyq"]} = "insert into fatura (usuario_id,servidor_id,conta_id,tipo,qtd,data,datavencimento,status,descri\xc3\xa7\xc3\xa3o,valor,desconto) values ('" . ${$GLOBALS["hxvqebi"]}["id_usuario"] . "','" . ${$GLOBALS["hxvqebi"]}["id_servidor"] . "','" . ${$GLOBALS["oxijgyruoxgx"]}["id_usuario_ssh"] . "','vpn','1','" . ${$nghagpdkk} . "','" . ${$otmrshfxl} . "','pendente','" . ${$GLOBALS["qjgxysw"]} . "','" . ${$GLOBALS["iidepqjuwrqw"]} . "','0')";
    ${$GLOBALS["wyfklv"]} = $conn->prepare(${$GLOBALS["cpuyzzvqyq"]});
    $faturains->execute();
    ${$GLOBALS["wnriykuc"]} = ${$GLOBALS["hxvqebi"]}["id_usuario"];
    ${$mqrdps} = "Foi gerado uma nova fatura para <small><b>" . ${$GLOBALS["hxvqebi"]}["login"] . "</b></small> veja!";
    ${$oalxflm} = "INSERT INTO notificacoes (usuario_id,data,tipo,linkfatura,mensagem) values ('" . ${$GLOBALS["wnriykuc"]} . "','" . ${$GLOBALS["wwmwytrwbmmh"]} . "','fatura','faturas/abertas','" . ${$olasnor} . "')";
    ${$GLOBALS["wjayezpbhp"]} = $conn->prepare(${$GLOBALS["jrbfstecwx"]});
    $notins->execute();
    echo "<script type=\"text/javascript\">";
    echo "alert(\"Fatura Criada com Sucesso!\");";
    echo "window.location=\"../../home.php?page=ssh/contas\";";
    echo "</script>";
}
