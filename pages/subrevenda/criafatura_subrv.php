<?php

$GLOBALS["xqcxjpxrtcuj"] = "notins";
$GLOBALS["hkctjzu"] = "usuarion";
$GLOBALS["rusmfpq"] = "faturains";
$GLOBALS["vwgrkieddv"] = "valorssh";
$GLOBALS["jenjsbwe"] = "dataexpire";
$GLOBALS["nyswxpi"] = "data";
$GLOBALS["bsayrdq"] = "achoufat";
$GLOBALS["igsrlokfvwk"] = "fatura";
$GLOBALS["ikktfjvskbl"] = "tipo";
$GLOBALS["bpgrvqjshcro"] = "desconto";
$GLOBALS["cynqvw"] = "prazo";
$GLOBALS["chcymzg"] = "valor";
$GLOBALS["gknwpur"] = "ssh";
$GLOBALS["ypwqfytft"] = "achou";
$GLOBALS["ylcaxgs"] = "contassh";
$GLOBALS["ehroavnfbsrn"] = "idconta";
require_once "../../pages/system/seguranca.php";
require_once "../../pages/system/config.php";
$lcdecaiuyi = "usuario";
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
    $tkudwbln = "valor";
    $GLOBALS["dgebruj"] = "descricao";
    $GLOBALS["nlxoweymhwru"] = "valor";
    $nncglbqgnlq = "desconto";
    $GLOBALS["tyhuqqpk"] = "tipo";
    ${$GLOBALS["ehroavnfbsrn"]} = sql_injector($_POST["idcontausuario"]);
    $byjbpnfkc = "desconto";
    $aviswhhdpkd = "valorssh";
    ${$GLOBALS["nlxoweymhwru"]} = sql_injector($_POST["valor"]);
    ${$byjbpnfkc} = sql_injector($_POST["desconto"]);
    $iqocqw = "prazo";
    $tqvjtmqz = "descricao";
    $prazo = sql_injector($_POST["prazo"]);
    $GLOBALS["tdfcdrsqkar"] = "faturains";
    $GLOBALS["lwnrewpknami"] = "tipe";
    ${$GLOBALS["dgebruj"]} = sql_injector($_POST["msg"]);
    $wdrrsmeuvkt = "contassh";
    $GLOBALS["osnynbg"] = "prazo";
    $GLOBALS["kmownmxcsk"] = "tipo";
    $cvnmbhdoeo = "data";
    $wnnikryxgue = "desconto";
    $GLOBALS["qsnrjohqsyw"] = "dataexpire";
    $xibvcmmn = "desc";
    $phaxfvmvs = "ssh";
    $GLOBALS["crvewgoiiti"] = "tipo";
    $zainbodm = "tipo";
    $GLOBALS["gnvfywgpyir"] = "contassh";
    ${$GLOBALS["lwnrewpknami"]} = sql_injector($_POST["tipo"]);
    $GLOBALS["tuxfvedbvf"] = "faturains";
    ${$GLOBALS["ylcaxgs"]} = "SELECT * FROM usuario where id_usuario='" . ${$GLOBALS["ehroavnfbsrn"]} . "'";
    $ybmjhq = "ssh";
    ${$wdrrsmeuvkt} = $conn->prepare(${$GLOBALS["gnvfywgpyir"]});
    $contassh->execute();
    $GLOBALS["mbqadmczhlm"] = "msg";
    ${$GLOBALS["ypwqfytft"]} = $contassh->rowCount();
    ${$phaxfvmvs} = $contassh->fetch();
    if (${$GLOBALS["ypwqfytft"]} == 0) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Usu\xc3\xa1rio n\xc3\xa3o encontrado!\");";
        echo "window.location=\"../../home.php?page=subrevenda/revendedores\";";
        echo "</script>";
        exit;
    } elseif (${$GLOBALS["gknwpur"]}["id_mestre"] != $_SESSION["usuarioID"]) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Este usuario n\xc3\xa3o \xc3\xa9 sua!\");";
        echo "window.location=\"../../home.php?page=subrevenda/revendedores\";";
        echo "</script>";
        exit;
    }
    $gfcihb = "desc";
    if (${$ybmjhq}["subrevenda"] != "sim") {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Este usu\xc3\xa1rio n\xc3\xa3o \xc3\xa9 um subrevendedor!\");";
        echo "window.location=\"../../home.php?page=subrevenda/revendedores\";";
        echo "</script>";
        exit;
    }
    if (!is_numeric(${$GLOBALS["chcymzg"]})) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Digite um numero valido!\");";
        echo "window.location=\"../../home.php?page=subrevenda/revendedores\";";
        echo "</script>";
        exit;
    }
    $ycyimcu = "valor";
    if (!is_numeric(${$nncglbqgnlq})) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Digite um numero valido!\");";
        echo "window.location=\"../../home.php?page=subrevenda/revendedores\";";
        echo "</script>";
        exit;
    }
    $GLOBALS["yophgdyy"] = "msg";
    $iqtkrpefnby = "achoufat";
    $ontqyumjer = "tipe";
    if (!is_numeric(${$GLOBALS["osnynbg"]})) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Digite um numero valido!\");";
        echo "window.location=\"../../home.php?page=subrevenda/revendedores\";";
        echo "</script>";
        exit;
    }
    if (${$GLOBALS["chcymzg"]} <= 0) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Digite um valor maior ou igual a 1 real!\");";
        echo "window.location=\"../../home.php?page=subrevenda/revendedores\";";
        echo "</script>";
        exit;
    }
    if (${$GLOBALS["cynqvw"]} <= 0) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Digite um prazo maior ou igual a 1 dia!\");";
        echo "window.location=\"../../home.php?page=subrevenda/revendedores\";";
        echo "</script>";
        exit;
    }
    if (${$GLOBALS["bpgrvqjshcro"]} >= ${$tkudwbln}) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Desconto n\xc3\xa3o pode ser maior ou igual ao valor da SSH!\");";
        echo "window.location=\"../../home.php?page=subrevenda/revendedores\";";
        echo "</script>";
        exit;
    }
    switch (${$ontqyumjer}) {
        case 2:
            ${$GLOBALS["kmownmxcsk"]} = "outros";
            break;
        case 3:
            ${$zainbodm} = "revenda";
            break;
        default:
            ${$GLOBALS["ikktfjvskbl"]} = "erro";
            break;
    }
    if (${$GLOBALS["crvewgoiiti"]} == "erro") {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Houve um erro no Tipo!\");";
        echo "window.location=\"../../home.php?page=subrevenda/revendedores\";";
        echo "</script>";
        exit;
    }
    $hqfmnzwxpzn = "notins";
    ${$GLOBALS["igsrlokfvwk"]} = "SELECT * FROM fatura_clientes where usuario_id='" . ${$GLOBALS["ehroavnfbsrn"]} . "' and status='pendente'";
    ${$GLOBALS["igsrlokfvwk"]} = $conn->prepare(${$GLOBALS["igsrlokfvwk"]});
    $fatura->execute();
    ${$GLOBALS["bsayrdq"]} = $fatura->rowCount();
    if (${$iqtkrpefnby} > 0) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"J\xc3\xa1 existe uma fatura em andamento para este usuario!\");";
        echo "window.location=\"../../home.php?page=subrevenda/revendedores\";";
        echo "</script>";
        exit;
    }
    ${$aviswhhdpkd} = ${$ycyimcu};
    ${$GLOBALS["nyswxpi"]} = date("Y-m-d H:i:s");
    ${$GLOBALS["qsnrjohqsyw"]} = date("Y-m-d H:i:s", strtotime("+ " . ${$GLOBALS["cynqvw"]} . " days"));
    ${$gfcihb} = ${$tqvjtmqz};
    ${$GLOBALS["tuxfvedbvf"]} = "insert into fatura_clientes (usuario_id,id_mestre,tipo,qtd,data,datavencimento,status,descri\xc3\xa7\xc3\xa3o,valor,desconto) values ('" . ${$GLOBALS["gknwpur"]}["id_usuario"] . "','" . $_SESSION["usuarioID"] . "','" . ${$GLOBALS["tyhuqqpk"]} . "','1','" . ${$cvnmbhdoeo} . "','" . ${$GLOBALS["jenjsbwe"]} . "','pendente','" . ${$xibvcmmn} . "','" . ${$GLOBALS["vwgrkieddv"]} . "','" . ${$wnnikryxgue} . "')";
    ${$GLOBALS["rusmfpq"]} = $conn->prepare(${$GLOBALS["tdfcdrsqkar"]});
    $faturains->execute();
    ${$GLOBALS["hkctjzu"]} = ${$GLOBALS["gknwpur"]}["id_usuario"];
    $GLOBALS["oepcpeqgpk"] = "usuarion";
    ${$GLOBALS["mbqadmczhlm"]} = "Aten\xc3\xa7\xc3\xa3o uma nova Fatura foi gerada e est\xc3\xa1 em aberto no momento veja!";
    ${$hqfmnzwxpzn} = "INSERT INTO notificacoes (usuario_id,data,tipo,linkfatura,mensagem) values ('" . ${$GLOBALS["oepcpeqgpk"]} . "','" . ${$GLOBALS["nyswxpi"]} . "','fatura','faturasclientes/minhas/abertas','" . ${$GLOBALS["yophgdyy"]} . "')";
    ${$GLOBALS["xqcxjpxrtcuj"]} = $conn->prepare(${$GLOBALS["xqcxjpxrtcuj"]});
    $notins->execute();
    echo "<script type=\"text/javascript\">";
    echo "alert(\"Fatura Criada com Sucesso!\");";
    echo "window.location=\"../../home.php?page=faturasclientes/abertas\";";
    echo "</script>";
}
