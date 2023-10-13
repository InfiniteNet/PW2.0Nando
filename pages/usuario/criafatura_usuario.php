<?php

$GLOBALS["qosbblxcl"] = "notins";
$GLOBALS["xsfyfxkofqt"] = "msg";
$GLOBALS["jotthpkogj"] = "valorssh";
$GLOBALS["iqcadsv"] = "dataexpire";
$GLOBALS["rtqffwmltd"] = "data";
$GLOBALS["hudnhysqirt"] = "achoufat";
$GLOBALS["haqjwbh"] = "fatura";
$GLOBALS["eqzueffll"] = "tipo";
$GLOBALS["hmcqffyv"] = "tipe";
$GLOBALS["xkvcmins"] = "desconto";
$GLOBALS["shegeq"] = "prazo";
$GLOBALS["jxgsqqmus"] = "valor";
$GLOBALS["ngwzno"] = "ssh";
$GLOBALS["uixopjjtijgj"] = "achou";
$GLOBALS["dsmdxkrr"] = "contassh";
$GLOBALS["erwxquguv"] = "descricao";
$GLOBALS["rrnfckhw"] = "idconta";
$GLOBALS["ccqlpjbp"] = "usuario";
require_once "../../pages/system/seguranca.php";
require_once "../../pages/system/config.php";
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
    $GLOBALS["hztiunyn"] = "desconto";
    $GLOBALS["xtoayugs"] = "usuarion";
    $xgguzxvy = "valor";
    $GLOBALS["vidovnxhmin"] = "ssh";
    $GLOBALS["nbfvyjaucu"] = "desconto";
    $GLOBALS["idreqptvpow"] = "prazo";
    $GLOBALS["hobbnf"] = "contassh";
    $dwgymgulv = "tipo";
    $bhndjw = "faturains";
    $GLOBALS["htbefdlply"] = "desc";
    ${$GLOBALS["rrnfckhw"]} = sql_injector($_POST["idcontausuario"]);
    $vylbkdxobw = "valor";
    $valor = sql_injector($_POST["valor"]);
    $GLOBALS["rzbihhd"] = "valor";
    ${$GLOBALS["nbfvyjaucu"]} = sql_injector($_POST["desconto"]);
    $GLOBALS["xqmujntdsqb"] = "tipo";
    $zybrcttb = "tipe";
    ${$GLOBALS["idreqptvpow"]} = sql_injector($_POST["prazo"]);
    $oyrkqm = "idconta";
    $GLOBALS["cnszxuddcu"] = "contassh";
    $gfilfwxsvl = "tipo";
    $ylpkoyojbil = "usuarion";
    $GLOBALS["tzntttnkzh"] = "msg";
    ${$GLOBALS["erwxquguv"]} = sql_injector($_POST["msg"]);
    $mhmihwmai = "faturains";
    ${$zybrcttb} = sql_injector($_POST["tipo"]);
    ${$GLOBALS["hobbnf"]} = "SELECT * FROM usuario where id_usuario='" . ${$oyrkqm} . "'";
    $vwtcqs = "achou";
    $vvewsfijd = "tipo";
    $hficguxikvs = "idconta";
    $etxipwbs = "valorssh";
    ${$GLOBALS["cnszxuddcu"]} = $conn->prepare(${$GLOBALS["dsmdxkrr"]});
    $peqbxracrz = "desc";
    $contassh->execute();
    ${$GLOBALS["uixopjjtijgj"]} = $contassh->rowCount();
    ${$GLOBALS["ngwzno"]} = $contassh->fetch();
    $wddfcnxepbl = "achoufat";
    $rnmtrkynuuoi = "ssh";
    if (${$vwtcqs} == 0) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Usu\xc3\xa1rio n\xc3\xa3o encontrado!\");";
        echo "window.location=\"../../home.php?page=usuario/listar\";";
        echo "</script>";
        exit;
    } elseif (${$GLOBALS["vidovnxhmin"]}["id_mestre"] != $_SESSION["usuarioID"]) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Este usuario n\xc3\xa3o \xc3\xa9 sua!\");";
        echo "window.location=\"../../home.php?page=usuario/listar\";";
        echo "</script>";
        exit;
    }
    $GLOBALS["lcmsanmqtlbo"] = "tipo";
    if (${$GLOBALS["ngwzno"]}["subrevenda"] == "sim") {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Este usu\xc3\xa1rio \xc3\xa9 um subrevendedor!\");";
        echo "window.location=\"../../home.php?page=usuario/listar\";";
        echo "</script>";
        exit;
    }
    if (!is_numeric(${$GLOBALS["jxgsqqmus"]})) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Digite um numero valido!\");";
        echo "window.location=\"../../home.php?page=usuario/listar\";";
        echo "</script>";
        exit;
    }
    if (!is_numeric(${$GLOBALS["hztiunyn"]})) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Digite um numero valido!\");";
        echo "window.location=\"../../home.php?page=usuario/listar\";";
        echo "</script>";
        exit;
    }
    $GLOBALS["hhljsdktiep"] = "notins";
    if (!is_numeric(${$GLOBALS["shegeq"]})) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Digite um numero valido!\");";
        echo "window.location=\"../../home.php?page=usuario/listar\";";
        echo "</script>";
        exit;
    }
    $ossdhlmvbtk = "fatura";
    if (${$xgguzxvy} <= 0) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Digite um valor maior ou igual a 1 real!\");";
        echo "window.location=\"../../home.php?page=usuario/listar\";";
        echo "</script>";
        exit;
    }
    if (${$GLOBALS["shegeq"]} <= 0) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Digite um prazo maior ou igual a 1 dia!\");";
        echo "window.location=\"../../home.php?page=usuario/listar\";";
        echo "</script>";
        exit;
    }
    if (${$GLOBALS["xkvcmins"]} >= ${$GLOBALS["jxgsqqmus"]}) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Desconto n\xc3\xa3o pode ser maior ou igual ao valor da SSH!\");";
        echo "window.location=\"../../home.php?page=usuario/listar\";";
        echo "</script>";
        exit;
    }
    switch (${$GLOBALS["hmcqffyv"]}) {
        case 1:
            ${$GLOBALS["xqmujntdsqb"]} = "vpn";
            break;
        case 2:
            ${$GLOBALS["eqzueffll"]} = "outros";
            break;
        case 3:
            ${$vvewsfijd} = "revenda";
            break;
        default:
            ${$dwgymgulv} = "erro";
            break;
    }
    $rpstreqqw = "faturains";
    if (${$GLOBALS["lcmsanmqtlbo"]} == "erro") {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Houve um erro no Tipo!\");";
        echo "window.location=\"../../home.php?page=usuario/listar\";";
        echo "</script>";
        exit;
    }
    $GLOBALS["bxbvxmfujqp"] = "fatura";
    ${$GLOBALS["haqjwbh"]} = "SELECT * FROM fatura_clientes where usuario_id='" . ${$hficguxikvs} . "' and status='pendente'";
    ${$ossdhlmvbtk} = $conn->prepare(${$GLOBALS["bxbvxmfujqp"]});
    $fatura->execute();
    ${$GLOBALS["hudnhysqirt"]} = $fatura->rowCount();
    if (${$wddfcnxepbl} > 0) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"J\xc3\xa1 existe uma fatura em andamento para este usuario!\");";
        echo "window.location=\"../../home.php?page=usuario/listar\";";
        echo "</script>";
        exit;
    }
    ${$etxipwbs} = ${$GLOBALS["rzbihhd"]};
    ${$GLOBALS["rtqffwmltd"]} = date("Y-m-d H:i:s");
    ${$GLOBALS["iqcadsv"]} = date("Y-m-d H:i:s", strtotime("+ " . ${$GLOBALS["shegeq"]} . " days"));
    $ulyttst = "ssh";
    $sdkaurqke = "dataexpire";
    ${$peqbxracrz} = ${$GLOBALS["erwxquguv"]};
    ${$mhmihwmai} = "insert into fatura_clientes (usuario_id,id_mestre,tipo,qtd,data,datavencimento,status,descri\xc3\xa7\xc3\xa3o,valor,desconto) values ('" . ${$ulyttst}["id_usuario"] . "','" . $_SESSION["usuarioID"] . "','" . ${$gfilfwxsvl} . "','1','" . ${$GLOBALS["rtqffwmltd"]} . "','" . ${$sdkaurqke} . "','pendente','" . ${$GLOBALS["htbefdlply"]} . "','" . ${$GLOBALS["jotthpkogj"]} . "','" . ${$GLOBALS["xkvcmins"]} . "')";
    ${$bhndjw} = $conn->prepare(${$rpstreqqw});
    $faturains->execute();
    ${$ylpkoyojbil} = ${$rnmtrkynuuoi}["id_usuario"];
    ${$GLOBALS["xsfyfxkofqt"]} = "Aten\xc3\xa7\xc3\xa3o uma nova Fatura foi gerada e est\xc3\xa1 em aberto no momento veja!";
    ${$GLOBALS["hhljsdktiep"]} = "INSERT INTO notificacoes (usuario_id,data,tipo,linkfatura,mensagem) values ('" . ${$GLOBALS["xtoayugs"]} . "','" . ${$GLOBALS["rtqffwmltd"]} . "','fatura','faturasclientes/minhas/abertas','" . ${$GLOBALS["tzntttnkzh"]} . "')";
    ${$GLOBALS["qosbblxcl"]} = $conn->prepare(${$GLOBALS["qosbblxcl"]});
    $notins->execute();
    echo "<script type=\"text/javascript\">";
    echo "alert(\"Fatura Criada com Sucesso!\");";
    echo "window.location=\"../../home.php?page=faturasclientes/abertas\";";
    echo "</script>";
}
