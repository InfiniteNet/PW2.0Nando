<?php

$GLOBALS["sbyjcyaxkqv"] = "inserenoti";
$GLOBALS["vmhlrlihp"] = "msg";
$GLOBALS["ulbrhlresqi"] = "inserecp";
$GLOBALS["pofxijt"] = "nome_final";
$GLOBALS["ynnwqvrqsq"] = "data";
$GLOBALS["jnedyjpmfohx"] = "fatu";
$GLOBALS["yqinhjrgr"] = "formapagto";
$GLOBALS["qrhkswlkuhjs"] = "extensao";
$GLOBALS["ioctyrwskvps"] = "_UP";
$GLOBALS["nojtejzvve"] = "contafaturacp";
$GLOBALS["hprxxvpzow"] = "faturacp";
$GLOBALS["krgatobst"] = "conta";
$GLOBALS["wnpqshwsul"] = "idfatura";
$GLOBALS["xycolgibwoxo"] = "SQLUPUser";
$GLOBALS["cxjcwnshfg"] = "arquivo";
$GLOBALS["hawradlfbwx"] = "nota";
$GLOBALS["xldnyly"] = "usuario";
require_once "../../../pages/system/seguranca.php";
require_once "../../../pages/system/config.php";
require_once "../../../pages/system/funcoes.php";
require_once "../../../pages/system/classe.ssh.php";
protegePagina("user");
if ($usuario["ativo"] == 2) {
    echo "<script type=\"text/javascript\">";
    echo "window.location=\"home.php?page=suspenso\";";
    echo "</script>";
    exit;
}
if (isset($_POST["fatura"])) {
    $xglstnpty = "forma";
    $eeccmnr = "idfatura";
    $GLOBALS["jtnixbfwxlxb"] = "extensao";
    $idfatura = sql_injector($_POST["fatura"]);
    $qgwqhqoa = "fatu";
    $nhbqabxygwf = "SQLUPUser";
    ${$GLOBALS["hawradlfbwx"]} = sql_injector($_POST["msg"]);
    ${$xglstnpty} = sql_injector($_POST["formap"]);
    ${$GLOBALS["cxjcwnshfg"]} = $_FILES["arquivo"];
    ${$GLOBALS["xycolgibwoxo"]} = "SELECT * FROM fatura_clientes where id='" . ${$GLOBALS["wnpqshwsul"]} . "'";
    $gcneqoxptx = "fatu";
    $GLOBALS["akrxqya"] = "_UP";
    $GLOBALS["hlmlstjhk"] = "faturacp";
    $ioduuklg = "_UP";
    $mwdximx = "conta";
    $GLOBALS["gebtfejhjks"] = "fatu";
    ${$nhbqabxygwf} = $conn->prepare(${$GLOBALS["xycolgibwoxo"]});
    $nhiqvajgy = "fatu";
    $vbortkrxl = "_UP";
    $GLOBALS["vrvckrju"] = "_UP";
    $bswqfovrphhc = "_UP";
    $SQLUPUser->execute();
    ${$GLOBALS["krgatobst"]} = $SQLUPUser->rowCount();
    if (${$mwdximx} == 0) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Fatura n\xc3\xa3o encontrada!\");";
        echo "window.location=\"../../../home.php?page=faturasclientes/minhas/confirmar&id=" . ${$GLOBALS["wnpqshwsul"]} . "\";";
        echo "</script>";
        exit;
    }
    $GLOBALS["rbyekwvvhou"] = "nome_final";
    $mgbzxikutwk = "_UP";
    ${$gcneqoxptx} = $SQLUPUser->fetch();
    if (${$nhiqvajgy}["usuario_id"] != $_SESSION["usuarioID"]) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Esta fatura n\xc3\xa3o \xc3\xa9 sua!\");";
        echo "window.location=\"../../../home.php?page=faturasclientes/minhas/abertas\";";
        echo "</script>";
        exit;
    }
    if (${$qgwqhqoa}["status"] == "cancelado") {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Esta fatura est\xc3\xa1 vencida ou expirada!\");";
        echo "window.location=\"../../../home.php?page=faturasclientes/minhas/canceladas\";";
        echo "</script>";
        exit;
    }
    if (${$GLOBALS["gebtfejhjks"]}["status"] == "pago") {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Esta fatura est\xc3\xa1 paga!\");";
        echo "window.location=\"../../../home.php?page=faturasclientes/minhas/pagas\";";
        echo "</script>";
        exit;
    }
    ${$GLOBALS["hprxxvpzow"]} = "SELECT * FROM fatura_comprovantes_clientes where fatura_id='" . ${$GLOBALS["wnpqshwsul"]} . "' and usuario_id='" . $_SESSION["usuarioID"] . "' and status='aberto'";
    ${$GLOBALS["hprxxvpzow"]} = $conn->prepare(${$GLOBALS["hlmlstjhk"]});
    $faturacp->execute();
    $GLOBALS["iblecqw"] = "contafaturacp";
    ${$GLOBALS["nojtejzvve"]} = $faturacp->rowCount();
    if (${$GLOBALS["iblecqw"]} > 0) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"J\xc3\xa1 possui uma confirma\xc3\xa7\xc3\xa3o para esta Fatura em andamento aguarde!\");";
        echo "window.location=\"../../../home.php?page=faturasclientes/minhas/confirmar&id=" . ${$GLOBALS["wnpqshwsul"]} . "\";";
        echo "</script>";
        exit;
    }
    ${$GLOBALS["vrvckrju"]}["pasta"] = "../../../pages/faturasclientes/minhas/comprovantes/";
    ${$GLOBALS["ioctyrwskvps"]}["tamanho"] = 2097152;
    ${$ioduuklg}["extensoes"] = array("jpg", "png", "gif");
    ${$GLOBALS["ioctyrwskvps"]}["renomeia"] = true;
    ${$mgbzxikutwk}["erros"][0] = "<script type=\"text/javascript\">alert(\"N\xc3\xa3o houve erro\");window.location=\"../../home.php?page=faturasclientes/minhas/confirmar&id=" . ${$GLOBALS["wnpqshwsul"]} . "\";</script>";
    ${$bswqfovrphhc}["erros"][1] = "<script type=\"text/javascript\">alert(\"O arquivo no upload \xc3\xa9 maior do que o limite do PHP\");window.location=\"../../home.php?page=faturasclientes/minhas/confirmar&id=" . ${$GLOBALS["wnpqshwsul"]} . "\";</script>";
    $bedxekgfrniy = "_UP";
    ${$GLOBALS["ioctyrwskvps"]}["erros"][2] = "<script type=\"text/javascript\">alert(\"O arquivo ultrapassa o limite de tamanho especifiado no HTML\");window.location=\"../../home.php?page=faturasclientes/minhas/confirmar&id=" . ${$GLOBALS["wnpqshwsul"]} . "\";</script>";
    ${$bedxekgfrniy}["erros"][3] = "<script type=\"text/javascript\">alert(\"O upload do arquivo foi feito parcialmente\");window.location=\"../../home.php?page=faturasclientes/minhas/confirmar&id=" . ${$GLOBALS["wnpqshwsul"]} . "\";</script>";
    ${$GLOBALS["akrxqya"]}["erros"][4] = "<script type=\"text/javascript\">alert(\"N\xc3\xa3o foi feito o upload do arquivo\");window.location=\"../../home.php?page=faturasclientes/minhas/confirmar&id=" . ${$GLOBALS["wnpqshwsul"]} . "\";</script>";
    if ($_FILES["arquivo"]["error"] != 0) {
        die("" . ${$GLOBALS["ioctyrwskvps"]}["erros"][$_FILES["arquivo"]["error"]]);
    }
    ${$GLOBALS["qrhkswlkuhjs"]} = strtolower(end(explode(".", $_FILES["arquivo"]["name"])));
    if (array_search(${$GLOBALS["jtnixbfwxlxb"]}, ${$vbortkrxl}["extensoes"]) === false) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Por favor, envie arquivos com as seguintes extens\xc3\xb5es: jpg, png ou gif\");";
        echo "window.location=\"../../../home.php?page=faturasclientes/minhas/confirmar&id=" . ${$GLOBALS["wnpqshwsul"]} . "\";";
        echo "</script>";
        exit;
    }
    if (${$GLOBALS["ioctyrwskvps"]}["tamanho"] < $_FILES["arquivo"]["size"]) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"O arquivo enviado \xc3\xa9 muito grande, envie arquivos de at\xc3\xa9 2Mb.\");";
        echo "window.location=\"../../../home.php?page=faturasclientes/minhas/confirmar&id=" . ${$GLOBALS["wnpqshwsul"]} . "\";";
        echo "</script>";
        exit;
    }
    if (${$GLOBALS["ioctyrwskvps"]}["renomeia"] == true) {
        $yyvrivbfl = "nome_final";
        $nome_final = md5(time()) . ".jpg";
    } else {
        $GLOBALS["ksnsjssuik"] = "nome_final";
        $nome_final = $_FILES["arquivo"]["name"];
    }
    if (move_uploaded_file($_FILES["arquivo"]["tmp_name"], ${$GLOBALS["ioctyrwskvps"]}["pasta"] . ${$GLOBALS["rbyekwvvhou"]})) {
        $GLOBALS["lzqrrtnoixs"] = "formapagto";
        $stlecp = "formapagto";
        $hxofinv = "nota";
        $GLOBALS["vomijnfr"] = "idfatura";
        $GLOBALS["xymcafvwkg"] = "fatu";
        $GLOBALS["zztvkr"] = "forma";
        $moybigjqocsr = "data";
        switch ($forma) {
            case 1:
                ${$stlecp} = "boleto";
                break;
            case 2:
                ${$GLOBALS["lzqrrtnoixs"]} = "deptra";
                break;
            default:
                ${$GLOBALS["yqinhjrgr"]} = "boleto";
                break;
        }
        $cintljrvz = "inserecp";
        if (${$hxofinv} == "") {
            $snexbbquml = "nota";
            $nota = "N/d";
        } else {
            $GLOBALS["cjrcmih"] = "nota";
            ${$GLOBALS["hawradlfbwx"]} = $nota;
        }
        ${$moybigjqocsr} = date("Y-m-d H:i:s");
        ${$cintljrvz} = "INSERT INTO fatura_comprovantes_clientes (fatura_id,id_mestre,usuario_id,data,formapagamento,nota,imagem) values ('" . ${$GLOBALS["vomijnfr"]} . "','" . ${$GLOBALS["jnedyjpmfohx"]}["id_mestre"] . "','" . $_SESSION["usuarioID"] . "','" . ${$GLOBALS["ynnwqvrqsq"]} . "','" . ${$GLOBALS["yqinhjrgr"]} . "','" . ${$GLOBALS["hawradlfbwx"]} . "','" . ${$GLOBALS["pofxijt"]} . "')";
        ${$GLOBALS["ulbrhlresqi"]} = $conn->prepare(${$GLOBALS["ulbrhlresqi"]});
        $inserecp->execute();
        ${$GLOBALS["vmhlrlihp"]} = "Novo comprovante para a Fatura #" . ${$GLOBALS["xymcafvwkg"]}["id"] . " Veja em Comprovantes!";
        $GLOBALS["ynxtyd"] = "inserenoti";
        $inserenoti = "INSERT INTO notificacoes (usuario_id,data,tipo,linkfatura,mensagem) values ('" . ${$GLOBALS["jnedyjpmfohx"]}["id_mestre"] . "','" . date("Y-m-d H:i:s") . "','fatura','faturas/comprovantes','" . ${$GLOBALS["vmhlrlihp"]} . "')";
        ${$GLOBALS["sbyjcyaxkqv"]} = $conn->prepare(${$GLOBALS["sbyjcyaxkqv"]});
        $inserenoti->execute();
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Enviado com sucesso! Aguarde um prazo de at\xc3\xa9 24 horas para ser Aprovado\");";
        echo "window.location=\"../../../home.php?page=faturasclientes/minhas/confirmar&id=" . ${$GLOBALS["wnpqshwsul"]} . "\";";
        echo "</script>";
    } else {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"N\xc3\xa3o foi possivel enviar o arquivo tente novamente!\");";
        echo "window.location=\"../../../home.php?page=faturasclientes/minhas/confirmar&id=" . ${$GLOBALS["wnpqshwsul"]} . "\";";
        echo "</script>";
    }
} else {
    echo "teste";
}
