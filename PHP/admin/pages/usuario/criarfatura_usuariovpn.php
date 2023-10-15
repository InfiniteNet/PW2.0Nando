<?php

$GLOBALS["olkbbiog"] = "notins";
$GLOBALS["mqnuui"] = "msg";
$GLOBALS["wknnsyt"] = "usuarion";
$GLOBALS["fwyglspk"] = "faturains";
$GLOBALS["rmlnjoeockc"] = "desc";
$GLOBALS["qglrglsubel"] = "dataexpire";
$GLOBALS["kvlznmpd"] = "data";
$GLOBALS["jakelx"] = "valorssh";
$GLOBALS["hcglwpwfwx"] = "achoufat";
$GLOBALS["obsadcxne"] = "prazo";
$GLOBALS["sgxwdbmdx"] = "ssh";
$GLOBALS["hfpfblfqpay"] = "achou";
$GLOBALS["ygptpxdflsq"] = "idconta";
$GLOBALS["kpuluivrz"] = "desconto";
$GLOBALS["fdefwwp"] = "valor";
require_once "../../../pages/system/seguranca.php";
require_once "../../../pages/system/config.php";
require_once "../../../pages/system/classe.ssh.php";
protegePagina("donoadmin");
if (isset($_POST["idcontausuario"])) {
    $xbptxxlp = "idconta";
    $kmwshugt = "data";
    $GLOBALS["irnksiw"] = "valorssh";
    $GLOBALS["purkcmgwid"] = "notins";
    $GLOBALS["oqxsxyw"] = "dataexpire";
    $GLOBALS["bkismq"] = "contassh";
    $GLOBALS["kwajrlwgghz"] = "ssh";
    $idconta = sql_injector($_POST["idcontausuario"]);
    $GLOBALS["kamtqyx"] = "descricao";
    $ofrwujmydl = "achou";
    $valor = sql_injector($_POST["valor"]);
    $desconto = sql_injector($_POST["desconto"]);
    $GLOBALS["tcqajuf"] = "achoufat";
    $GLOBALS["ygcruimt"] = "desc";
    $GLOBALS["ckjgwhlfq"] = "prazo";
    $exdvppwcqs = "contassh";
    $emosfcwmvv = "desconto";
    $GLOBALS["vqfbncnsvg"] = "descricao";
    $otkzim = "contassh";
    $prazo = sql_injector($_POST["prazo"]);
    $evjwji = "fatura";
    $GLOBALS["eaxeqk"] = "fatura";
    $GLOBALS["gqswgkukut"] = "prazo";
    $rnjlfoefmpq = "data";
    $descricao = sql_injector($_POST["msg"]);
    $contassh = "SELECT * FROM usuario where id_usuario='" . $idconta . "'";
    $contassh = $conn->prepare($contassh);
    $contassh->execute();
    $xqhxsqyy = "faturains";
    $achou = $contassh->rowCount();
    $ssh = $contassh->fetch();
    $vbqveko = "notins";
    $GLOBALS["zdvvamcij"] = "usuarion";
    if ($achou == 0) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Usu\xc3\xa1rio n\xc3\xa3o encontrado!\");";
        echo "window.location=\"../../home.php?page=usuario/conta_ssh\";";
        echo "</script>";
        exit;
    } elseif ($ssh["id_mestre"] != 0) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Essa conta n\xc3\xa3o \xc3\xa9 do administrador!\");";
        echo "window.location=\"../../home.php?page=usuario/conta_ssh\";";
        echo "</script>";
        exit;
    }
    if (${$GLOBALS["sgxwdbmdx"]}["subrevenda"] == "sim") {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Este usu\xc3\xa1rio \xc3\xa9 um subrevendedor!\");";
        echo "window.location=\"../../home.php?page=usuario/conta_ssh\";";
        echo "</script>";
        exit;
    }
    if (!is_numeric(${$GLOBALS["fdefwwp"]})) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Digite um numero valido!\");";
        echo "window.location=\"../../home.php?page=usuario/conta_ssh\";";
        echo "</script>";
        exit;
    }
    $GLOBALS["ofdwzmgv"] = "valor";
    if (!is_numeric(${$emosfcwmvv})) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Digite um numero valido!\");";
        echo "window.location=\"../../home.php?page=usuario/conta_ssh\";";
        echo "</script>";
        exit;
    }
    $ykiuph = "fatura";
    if (!is_numeric(${$GLOBALS["obsadcxne"]})) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Digite um numero valido!\");";
        echo "window.location=\"../../home.php?page=usuario/conta_ssh\";";
        echo "</script>";
        exit;
    }
    if (${$GLOBALS["fdefwwp"]} <= 0) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Digite um valor maior ou igual a 1 real!\");";
        echo "window.location=\"../../home.php?page=usuario/conta_ssh\";";
        echo "</script>";
        exit;
    }
    $erbqjsjfokvg = "prazo";
    if (${$GLOBALS["gqswgkukut"]} <= 0) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Digite um prazo maior ou igual a 1 dia!\");";
        echo "window.location=\"../../home.php?page=usuario/conta_ssh\";";
        echo "</script>";
        exit;
    }
    if (${$GLOBALS["kpuluivrz"]} >= ${$GLOBALS["ofdwzmgv"]}) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Desconto n\xc3\xa3o pode ser maior ou igual ao valor da SSH!\");";
        echo "window.location=\"../../home.php?page=usuario/conta_ssh\";";
        echo "</script>";
        exit;
    }
    $GLOBALS["wlrclt"] = "valor";
    $GLOBALS["gstaxdd"] = "faturains";
    ${$evjwji} = "SELECT * FROM fatura where usuario_id='" . ${$GLOBALS["ygptpxdflsq"]} . "' and status='pendente'";
    ${$GLOBALS["eaxeqk"]} = $conn->prepare(${$ykiuph});
    $fatura->execute();
    ${$GLOBALS["hcglwpwfwx"]} = $fatura->rowCount();
    if (${$GLOBALS["tcqajuf"]} > 0) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"J\xc3\xa1 existe uma fatura em andamento para este usuario!\");";
        echo "window.location=\"../../home.php?page=usuario/conta_ssh\";";
        echo "</script>";
        exit;
    }
    ${$GLOBALS["jakelx"]} = ${$GLOBALS["wlrclt"]};
    ${$GLOBALS["kvlznmpd"]} = date("Y-m-d H:i:s");
    $pftbxegyffnr = "ssh";
    ${$GLOBALS["qglrglsubel"]} = date("Y-m-d 00:00:00", strtotime("+ " . ${$erbqjsjfokvg} . " days"));
    ${$GLOBALS["rmlnjoeockc"]} = ${$GLOBALS["vqfbncnsvg"]};
    ${$xqhxsqyy} = "insert into fatura (usuario_id,tipo,qtd,data,datavencimento,status,descri\xc3\xa7\xc3\xa3o,valor,desconto) values ('" . ${$pftbxegyffnr}["id_usuario"] . "','outros','1','" . ${$rnjlfoefmpq} . "','" . ${$GLOBALS["oqxsxyw"]} . "','pendente','" . ${$GLOBALS["ygcruimt"]} . "','" . ${$GLOBALS["irnksiw"]} . "','0')";
    ${$GLOBALS["fwyglspk"]} = $conn->prepare(${$GLOBALS["gstaxdd"]});
    $faturains->execute();
    ${$GLOBALS["wknnsyt"]} = ${$GLOBALS["sgxwdbmdx"]}["id_usuario"];
    ${$GLOBALS["mqnuui"]} = "Foi gerado uma nova fatura para seus servi\xc3\xa7os veja!";
    ${$vbqveko} = "INSERT INTO notificacoes (usuario_id,data,tipo,linkfatura,mensagem) values ('" . ${$GLOBALS["zdvvamcij"]} . "','" . ${$kmwshugt} . "','fatura','faturas/abertas','" . ${$GLOBALS["mqnuui"]} . "')";
    ${$GLOBALS["purkcmgwid"]} = $conn->prepare(${$GLOBALS["olkbbiog"]});
    $notins->execute();
    echo "<script type=\"text/javascript\">";
    echo "alert(\"Fatura Criada com Sucesso!\");";
    echo "window.location=\"../../home.php?page=usuario/conta_ssh\";";
    echo "</script>";
}
