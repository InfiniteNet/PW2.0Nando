<?php

$GLOBALS["pvxcxhqwcg"] = "inserecp";
$GLOBALS["ouivkmmh"] = "data";
$GLOBALS["qhsfxwhsfxn"] = "nota";
$GLOBALS["ctnedbg"] = "formapagto";
$GLOBALS["mguxzsuskdl"] = "nome_final";
$GLOBALS["ikvjdgbs"] = "_UP";
$GLOBALS["vvzpoomrtog"] = "faturacp";
$GLOBALS["vrkhzpahrxn"] = "fatu";
$GLOBALS["qvekeycjjwh"] = "conta";
$GLOBALS["gsjfpmm"] = "arquivo";
$GLOBALS["mqopzxrr"] = "forma";
$GLOBALS["ohlwdbfknpyo"] = "idfatura";
$GLOBALS["vjreitppdd"] = "usuario";
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
if (isset($_POST["fatura"])) {
    $GLOBALS["ydwdcjrgkxev"] = "idfatura";
    $bcuiuqw = "nota";
    $bcfpkibcdzl = "faturacp";
    ${$GLOBALS["ohlwdbfknpyo"]} = sql_injector($_POST["fatura"]);
    $pikrpivye = "conta";
    $GLOBALS["xoiqetai"] = "SQLUPUser";
    ${$bcuiuqw} = sql_injector($_POST["msg"]);
    $tnluypxtt = "idfatura";
    $viexdv = "SQLUPUser";
    ${$GLOBALS["mqopzxrr"]} = sql_injector($_POST["formap"]);
    $GLOBALS["hlvszpsx"] = "contafaturacp";
    $bncmyxolmo = "fatu";
    ${$GLOBALS["gsjfpmm"]} = $_FILES["arquivo"];
    $wtttxkohf = "faturacp";
    ${$viexdv} = "SELECT * FROM fatura where id='" . ${$tnluypxtt} . "'";
    $iozjuobq = "SQLUPUser";
    $xckdijfx = "contafaturacp";
    ${$GLOBALS["xoiqetai"]} = $conn->prepare($SQLUPUser);
    $SQLUPUser->execute();
    ${$pikrpivye} = $SQLUPUser->rowCount();
    if (${$GLOBALS["qvekeycjjwh"]} == 0) {
        echo "<script type=\"text/javascript\">";
        $GLOBALS["gaoxgambwa"] = "idfatura";
        echo "alert(\"Fatura n\xe3o encontrada!\");";
        echo "window.location=\"home.php?page=faturas/confirmar&id=" . $idfatura . "\";";
        echo "</script>";
        exit;
    }
    $GLOBALS["mhgnspbe"] = "extensao";
    ${$GLOBALS["vrkhzpahrxn"]} = $SQLUPUser->fetch();
    if (${$GLOBALS["vrkhzpahrxn"]}["usuario_id"] != $_SESSION["usuarioID"]) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Esta fatura n\xe3o \xe9 sua!\");";
        echo "window.location=\"home.php?page=faturas/abertas\";";
        echo "</script>";
        exit;
    }
    $GLOBALS["fexyphzk"] = "_UP";
    if (${$bncmyxolmo}["status"] == "cancelado") {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Esta fatura est\xe1 vencida ou expirada!\");";
        echo "window.location=\"home.php?page=faturas/canceladas\";";
        echo "</script>";
        exit;
    }
    $hljgqlxdwljv = "_UP";
    if (${$GLOBALS["vrkhzpahrxn"]}["status"] == "pago") {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Esta fatura est\xe1 paga!\");";
        echo "window.location=\"home.php?page=faturas/pagas\";";
        echo "</script>";
        exit;
    }
    ${$wtttxkohf} = "SELECT * FROM fatura_comprovantes where fatura_id='" . ${$GLOBALS["ohlwdbfknpyo"]} . "' and usuario_id='" . $_SESSION["usuarioID"] . "' and status='aberto'";
    $iplcgpcgb = "idfatura";
    ${$bcfpkibcdzl} = $conn->prepare(${$GLOBALS["vvzpoomrtog"]});
    $faturacp->execute();
    $upnyphse = "_UP";
    ${$xckdijfx} = $faturacp->rowCount();
    if (${$GLOBALS["hlvszpsx"]} > 0) {
        $odnsdvsdfvo = "idfatura";
        echo "<script type=\"text/javascript\">";
        echo "alert(\"J\xe1 possui uma confirma\xe7\xe3o para esta Fatura em andamento aguarde!\");";
        echo "window.location=\"../../home.php?page=faturas/confirmar&id=" . $idfatura . "\";";
        echo "</script>";
        exit;
    }
    ${$GLOBALS["ikvjdgbs"]}["pasta"] = "../../admin/pages/faturas/comprovantes/";
    $GLOBALS["iptiklaujqo"] = "extensao";
    $GLOBALS["wrdmejwhp"] = "nome_final";
    $GLOBALS["hrxfjr"] = "idfatura";
    ${$hljgqlxdwljv}["tamanho"] = 2097152;
    $sfnyfvyrqe = "idfatura";
    $GLOBALS["piglnqxzhlee"] = "_UP";
    ${$GLOBALS["ikvjdgbs"]}["extensoes"] = array("jpg", "png", "gif");
    ${$GLOBALS["piglnqxzhlee"]}["renomeia"] = true;
    ${$GLOBALS["ikvjdgbs"]}["erros"][0] = "<script type=\"text/javascript\">alert(\"N\xe3o houve erro\");window.location=\"../../home.php?page=faturas/confirmar&id=" . ${$GLOBALS["hrxfjr"]} . "\";</script>";
    ${$GLOBALS["ikvjdgbs"]}["erros"][1] = "<script type=\"text/javascript\">alert(\"O arquivo no upload \xe9 maior do que o limite do PHP\");window.location=\"../../home.php?page=faturas/confirmar&id=" . ${$sfnyfvyrqe} . "\";</script>";
    ${$upnyphse}["erros"][2] = "<script type=\"text/javascript\">alert(\"O arquivo ultrapassa o limite de tamanho especifiado no HTML\");window.location=\"../../home.php?page=faturas/confirmar&id=" . ${$GLOBALS["ohlwdbfknpyo"]} . "\";</script>";
    ${$GLOBALS["ikvjdgbs"]}["erros"][3] = "<script type=\"text/javascript\">alert(\"O upload do arquivo foi feito parcialmente\");window.location=\"../../home.php?page=faturas/confirmar&id=" . ${$iplcgpcgb} . "\";</script>";
    ${$GLOBALS["ikvjdgbs"]}["erros"][4] = "<script type=\"text/javascript\">alert(\"N\xe3o foi feito o upload do arquivo\");window.location=\"../../home.php?page=faturas/confirmar&id=" . ${$GLOBALS["ydwdcjrgkxev"]} . "\";</script>";
    $GLOBALS["safkdugewoj"] = "_UP";
    if ($_FILES["arquivo"]["error"] != 0) {
        die("" . ${$GLOBALS["ikvjdgbs"]}["erros"][$_FILES["arquivo"]["error"]]);
    }
    ${$GLOBALS["iptiklaujqo"]} = strtolower(end(explode(".", $_FILES["arquivo"]["name"])));
    if (array_search(${$GLOBALS["mhgnspbe"]}, ${$GLOBALS["fexyphzk"]}["extensoes"]) === false) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Por favor, envie arquivos com as seguintes extens\xf5es: jpg, png ou gif\");";
        echo "window.location=\"../../home.php?page=faturas/confirmar&id=" . ${$GLOBALS["ohlwdbfknpyo"]} . "\";";
        echo "</script>";
        exit;
    }
    $GLOBALS["bnpmottkwwl"] = "_UP";
    if (${$GLOBALS["safkdugewoj"]}["tamanho"] < $_FILES["arquivo"]["size"]) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"O arquivo enviado \xe9 muito grande, envie arquivos de at\xe9 2Mb.\");";
        echo "window.location=\"../../home.php?page=faturas/confirmar&id=" . ${$GLOBALS["ohlwdbfknpyo"]} . "\";";
        echo "</script>";
        exit;
    }
    if (${$GLOBALS["ikvjdgbs"]}["renomeia"] == true) {
        $GLOBALS["pjollgt"] = "nome_final";
        $nome_final = md5(time()) . ".jpg";
    } else {
        ${$GLOBALS["mguxzsuskdl"]} = $_FILES["arquivo"]["name"];
    }
    if (move_uploaded_file($_FILES["arquivo"]["tmp_name"], ${$GLOBALS["bnpmottkwwl"]}["pasta"] . ${$GLOBALS["wrdmejwhp"]})) {
        $bprljnb = "inserecp";
        $lzelxeqdwt = "formapagto";
        $GLOBALS["cfcobj"] = "idfatura";
        $ywkdxucqiq = "formapagto";
        switch (${$GLOBALS["mqopzxrr"]}) {
            case 1:
                ${$lzelxeqdwt} = "boleto";
                break;
            case 2:
                ${$ywkdxucqiq} = "deptra";
                break;
            default:
                ${$GLOBALS["ctnedbg"]} = "boleto";
                break;
        }
        $jpsuxuj = "nome_final";
        if (${$GLOBALS["qhsfxwhsfxn"]} == "") {
            ${$GLOBALS["qhsfxwhsfxn"]} = "N/d";
        } else {
            ${$GLOBALS["qhsfxwhsfxn"]} = ${$GLOBALS["qhsfxwhsfxn"]};
        }
        $ekxeffqikey = "formapagto";
        ${$GLOBALS["ouivkmmh"]} = date("Y-m-d H:i:s");
        $btbcxzqjhrz = "inserecp";
        ${$GLOBALS["pvxcxhqwcg"]} = "INSERT INTO fatura_comprovantes (fatura_id,usuario_id,data,formapagamento,nota,imagem) values ('" . ${$GLOBALS["cfcobj"]} . "','" . $_SESSION["usuarioID"] . "','" . ${$GLOBALS["ouivkmmh"]} . "','" . ${$ekxeffqikey} . "','" . ${$GLOBALS["qhsfxwhsfxn"]} . "','" . ${$jpsuxuj} . "')";
        ${$bprljnb} = $conn->prepare(${$btbcxzqjhrz});
        $inserecp->execute();
        echo "<script type=\"text/javascript\">";
        $GLOBALS["jakvscm"] = "idfatura";
        echo "alert(\"Enviado com sucesso! Aguarde um prazo de at\xe9 4 horas\");";
        echo "window.location=\"../../home.php?page=faturas/confirmar&id=" . $idfatura . "\";";
        echo "</script>";
    } else {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"N\xe3o foi possivel enviar o arquivo tente novamente!\");";
        $GLOBALS["jxjzrphjcky"] = "idfatura";
        echo "window.location=\"../../home.php?page=faturas/confirmar&id=" . $idfatura . "\";";
        echo "</script>";
    }
} else {
    echo "teste";
}
