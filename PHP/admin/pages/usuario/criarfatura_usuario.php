<?php

$GLOBALS["xjjgayxxkpe"] = "usuarion";
$GLOBALS["hvkkmzvva"] = "notins";
$GLOBALS["scufwovr"] = "msg";
$GLOBALS["odntxvsj"] = "faturains";
$GLOBALS["zwupaokwdv"] = "descricao";
$GLOBALS["tqandwbp"] = "desc";
$GLOBALS["dyjidudzv"] = "dataexpire";
$GLOBALS["fdhohxd"] = "data";
$GLOBALS["bedonibspdyn"] = "achoufat";
$GLOBALS["pwikjmwojwqo"] = "idconta";
$GLOBALS["rfcjemc"] = "fatura";
$GLOBALS["seenwjch"] = "ssh";
$GLOBALS["wkydhayy"] = "contassh";
$GLOBALS["ofnwhmjc"] = "desconto";
$GLOBALS["mybbuokpggq"] = "valor";
require_once "../../../pages/system/seguranca.php";
require_once "../../../pages/system/config.php";
require_once "../../../pages/system/classe.ssh.php";
protegePagina("donoadmin");
if (isset($_POST["idcontausuario"])) {
    $qbiwhubloq = "prazo";
    $fxpsyphfiri = "idconta";
    $idconta = sql_injector($_POST["idcontausuario"]);
    $GLOBALS["ztrbmout"] = "ssh";
    $GLOBALS["cekipkqfqlx"] = "prazo";
    $GLOBALS["jbbsgjrxi"] = "idconta";
    $ppxpizthg = "desconto";
    $valor = sql_injector($_POST["valor"]);
    $kkxhfojjergk = "valor";
    $GLOBALS["mckopv"] = "contassh";
    $gymggrelgfwt = "valorssh";
    $GLOBALS["gwescfyi"] = "prazo";
    $desconto = sql_injector($_POST["desconto"]);
    $GLOBALS["hiojmevw"] = "contassh";
    $slwcqrekslw = "descricao";
    $jungwbtz = "fatura";
    $GLOBALS["qfpfykiborb"] = "achou";
    $prazo = sql_injector($_POST["prazo"]);
    $descricao = sql_injector($_POST["msg"]);
    $GLOBALS["xycmkwikwkje"] = "achou";
    $GLOBALS["oyoetgfykq"] = "usuarion";
    $GLOBALS["gdwagrnaw"] = "notins";
    $contassh = "SELECT * FROM usuario where id_usuario='" . $idconta . "'";
    $llyxckhsfkw = "valorssh";
    $contassh = $conn->prepare($contassh);
    $svxutja = "prazo";
    $contassh->execute();
    $achou = $contassh->rowCount();
    $ssh = $contassh->fetch();
    if ($achou == 0) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Usu\xc3\xa1rio n\xc3\xa3o encontrado!\");";
        echo "window.location=\"../../home.php?page=usuario/revenda\";";
        echo "</script>";
        exit;
    } elseif ($ssh["id_mestre"] != 0) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Essa conta n\xc3\xa3o \xc3\xa9 do administrador!\");";
        echo "window.location=\"../../home.php?page=usuario/revenda\";";
        echo "</script>";
        exit;
    }
    if (${$GLOBALS["seenwjch"]}["subrevenda"] == "sim") {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Este usu\xc3\xa1rio \xc3\xa9 um subrevendedor!\");";
        echo "window.location=\"../../home.php?page=usuario/revenda\";";
        echo "</script>";
        exit;
    }
    $qinkdlipwne = "achoufat";
    $cknbwg = "valor";
    if (!is_numeric(${$GLOBALS["mybbuokpggq"]})) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Digite um numero valido!\");";
        echo "window.location=\"../../home.php?page=usuario/revenda\";";
        echo "</script>";
        exit;
    }
    if (!is_numeric(${$ppxpizthg})) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Digite um numero valido!\");";
        echo "window.location=\"../../home.php?page=usuario/revenda\";";
        echo "</script>";
        exit;
    }
    if (!is_numeric(${$GLOBALS["cekipkqfqlx"]})) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Digite um numero valido!\");";
        echo "window.location=\"../../home.php?page=usuario/revenda\";";
        echo "</script>";
        exit;
    }
    if (${$cknbwg} <= 0) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Digite um valor maior ou igual a 1 real!\");";
        echo "window.location=\"../../home.php?page=usuario/revenda\";";
        echo "</script>";
        exit;
    }
    if (${$svxutja} <= 0) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Digite um prazo maior ou igual a 1 dia!\");";
        echo "window.location=\"../../home.php?page=usuario/revenda\";";
        echo "</script>";
        exit;
    }
    if (${$GLOBALS["ofnwhmjc"]} >= ${$GLOBALS["mybbuokpggq"]}) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Desconto n\xc3\xa3o pode ser maior ou igual ao valor da SSH!\");";
        echo "window.location=\"../../home.php?page=usuario/revenda\";";
        echo "</script>";
        exit;
    }
    ${$GLOBALS["rfcjemc"]} = "SELECT * FROM fatura where usuario_id='" . ${$GLOBALS["pwikjmwojwqo"]} . "' and status='pendente'";
    ${$GLOBALS["rfcjemc"]} = $conn->prepare(${$jungwbtz});
    $xlvnfree = "data";
    $fatura->execute();
    ${$qinkdlipwne} = $fatura->rowCount();
    if (${$GLOBALS["bedonibspdyn"]} > 0) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"J\xc3\xa1 existe uma fatura em andamento para este usuario!\");";
        echo "window.location=\"../../home.php?page=usuario/revenda\";";
        echo "</script>";
        exit;
    }
    ${$gymggrelgfwt} = ${$kkxhfojjergk};
    ${$GLOBALS["fdhohxd"]} = date("Y-m-d H:i:s");
    $GLOBALS["ferqijxuloou"] = "faturains";
    ${$GLOBALS["dyjidudzv"]} = date("Y-m-d 00:00:00", strtotime("+ " . ${$GLOBALS["gwescfyi"]} . " days"));
    ${$GLOBALS["tqandwbp"]} = ${$GLOBALS["zwupaokwdv"]};
    ${$GLOBALS["odntxvsj"]} = "insert into fatura (usuario_id,tipo,qtd,data,datavencimento,status,descri\xc3\xa7\xc3\xa3o,valor,desconto) values ('" . ${$GLOBALS["seenwjch"]}["id_usuario"] . "','vpn','1','" . ${$GLOBALS["fdhohxd"]} . "','" . ${$GLOBALS["dyjidudzv"]} . "','pendente','" . ${$GLOBALS["tqandwbp"]} . "','" . ${$llyxckhsfkw} . "','" . ${$GLOBALS["ofnwhmjc"]} . "')";
    ${$GLOBALS["ferqijxuloou"]} = $conn->prepare(${$GLOBALS["odntxvsj"]});
    $faturains->execute();
    ${$GLOBALS["oyoetgfykq"]} = ${$GLOBALS["seenwjch"]}["id_usuario"];
    ${$GLOBALS["scufwovr"]} = "Foi gerado uma nova fatura para seus servi\xc3\xa7os veja!";
    ${$GLOBALS["hvkkmzvva"]} = "INSERT INTO notificacoes (usuario_id,data,tipo,linkfatura,mensagem) values ('" . ${$GLOBALS["xjjgayxxkpe"]} . "','" . ${$xlvnfree} . "','fatura','faturas/abertas','" . ${$GLOBALS["scufwovr"]} . "')";
    ${$GLOBALS["hvkkmzvva"]} = $conn->prepare(${$GLOBALS["gdwagrnaw"]});
    $notins->execute();
    echo "<script type=\"text/javascript\">";
    echo "alert(\"Fatura Criada com Sucesso!\");";
    echo "window.location=\"../../home.php?page=usuario/revenda\";";
    echo "</script>";
}
