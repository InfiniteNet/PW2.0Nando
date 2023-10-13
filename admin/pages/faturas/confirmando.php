<?php

$GLOBALS["nmghherlwl"] = "inserecp";
$GLOBALS["qgzsltp"] = "data";
$GLOBALS["dvhnjbd"] = "nota";
$GLOBALS["mcnjiuhdjgj"] = "nome_final";
$GLOBALS["vtnbllb"] = "extensao";
$GLOBALS["pkhluiyibji"] = "_UP";
$GLOBALS["gxpcnteciph"] = "faturacp";
$GLOBALS["pcdjdxccovk"] = "fatu";
$GLOBALS["tczovkxrx"] = "conta";
$GLOBALS["gvysushsa"] = "idfatura";
$GLOBALS["eegxdqozgdtm"] = "SQLUPUser";
$GLOBALS["gxqnpyqxlo"] = "arquivo";
$GLOBALS["upnctzxdye"] = "forma";
require_once "../../pages/system/seguranca.php";
require_once "../../pages/system/config.php";
require_once "../../pages/system/funcoes.php";
require_once "../../pages/system/classe.ssh.php";
protegePagina("user");
if (isset($_POST["fatura"])) {
    $GLOBALS["pqxorflukli"] = "idfatura";
    $drsunemnv = "faturacp";
    $enkjtbz = "nota";
    $tthryi = "idfatura";
    $idfatura = sql_injector($_POST["fatura"]);
    $GLOBALS["xizvcerrr"] = "idfatura";
    $nota = sql_injector($_POST["msg"]);
    $kvjxcfftgfe = "faturacp";
    $qlqxogvbenyt = "_UP";
    $forma = sql_injector($_POST["formap"]);
    $arquivo = $_FILES["arquivo"];
    $GLOBALS["qvtcma"] = "conta";
    $SQLUPUser = "SELECT * FROM fatura where id='" . $idfatura . "'";
    $SQLUPUser = $conn->prepare($SQLUPUser);
    $GLOBALS["tcmyjce"] = "fatu";
    $dhcjbxdcbgal = "contafaturacp";
    $SQLUPUser->execute();
    $pznimhpoc = "_UP";
    $GLOBALS["homkupkx"] = "_UP";
    $conta = $SQLUPUser->rowCount();
    $gkmjgqjri = "nome_final";
    $GLOBALS["golmlzp"] = "_UP";
    if ($conta == 0) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Fatura n\xe3o encontrada!\");";
        echo "window.location=\"home.php?page=faturas/confirmar&id=" . $idfatura . "\";";
        echo "</script>";
        exit;
    }
    $GLOBALS["yzstwsgm"] = "contafaturacp";
    $ndlipiuwztm = "idfatura";
    ${$GLOBALS["pcdjdxccovk"]} = $SQLUPUser->fetch();
    if (${$GLOBALS["tcmyjce"]}["usuario_id"] != $_SESSION["usuarioID"]) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Esta fatura n\xe3o \xe9 sua!\");";
        echo "window.location=\"home.php?page=faturas/abertas\";";
        echo "</script>";
        exit;
    }
    if (${$GLOBALS["pcdjdxccovk"]}["status"] == "cancelado") {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Esta fatura est\xe1 vencida ou expirada!\");";
        echo "window.location=\"home.php?page=faturas/canceladas\";";
        echo "</script>";
        exit;
    }
    if (${$GLOBALS["pcdjdxccovk"]}["status"] == "pago") {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Esta fatura est\xe1 paga!\");";
        echo "window.location=\"home.php?page=faturas/pagas\";";
        echo "</script>";
        exit;
    }
    ${$GLOBALS["gxpcnteciph"]} = "SELECT * FROM fatura_comprovantes where fatura_id='" . ${$GLOBALS["gvysushsa"]} . "' and usuario_id='" . $_SESSION["usuarioID"] . "' and status='aberto'";
    ${$drsunemnv} = $conn->prepare(${$kvjxcfftgfe});
    $faturacp->execute();
    ${$dhcjbxdcbgal} = $faturacp->rowCount();
    $GLOBALS["fadyaxqiq"] = "_UP";
    if (${$GLOBALS["yzstwsgm"]} > 0) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"J\xe1 possui uma confirma\xe7\xe3o para esta Fatura em andamento aguarde!\");";
        echo "window.location=\"../../home.php?page=faturas/confirmar&id=" . ${$GLOBALS["gvysushsa"]} . "\";";
        echo "</script>";
        exit;
    }
    ${$GLOBALS["homkupkx"]}["pasta"] = "../../admin/pages/faturas/comprovantes/";
    ${$GLOBALS["pkhluiyibji"]}["tamanho"] = 2097152;
    ${$GLOBALS["pkhluiyibji"]}["extensoes"] = array("jpg", "png", "gif");
    ${$GLOBALS["pkhluiyibji"]}["renomeia"] = true;
    ${$GLOBALS["pkhluiyibji"]}["erros"][0] = "<script type=\"text/javascript\">alert(\"N\xe3o houve erro\");window.location=\"../../home.php?page=faturas/confirmar&id=" . ${$GLOBALS["xizvcerrr"]} . "\";</script>";
    ${$GLOBALS["pkhluiyibji"]}["erros"][1] = "<script type=\"text/javascript\">alert(\"O arquivo no upload \xe9 maior do que o limite do PHP\");window.location=\"../../home.php?page=faturas/confirmar&id=" . ${$ndlipiuwztm} . "\";</script>";
    ${$GLOBALS["pkhluiyibji"]}["erros"][2] = "<script type=\"text/javascript\">alert(\"O arquivo ultrapassa o limite de tamanho especifiado no HTML\");window.location=\"../../home.php?page=faturas/confirmar&id=" . ${$GLOBALS["gvysushsa"]} . "\";</script>";
    ${$GLOBALS["golmlzp"]}["erros"][3] = "<script type=\"text/javascript\">alert(\"O upload do arquivo foi feito parcialmente\");window.location=\"../../home.php?page=faturas/confirmar&id=" . ${$tthryi} . "\";</script>";
    ${$qlqxogvbenyt}["erros"][4] = "<script type=\"text/javascript\">alert(\"N\xe3o foi feito o upload do arquivo\");window.location=\"../../home.php?page=faturas/confirmar&id=" . ${$GLOBALS["gvysushsa"]} . "\";</script>";
    if ($_FILES["arquivo"]["error"] != 0) {
        $GLOBALS["zkrhepwdr"] = "_UP";
        die("" . $_UP["erros"][$_FILES["arquivo"]["error"]]);
    }
    ${$GLOBALS["vtnbllb"]} = strtolower(end(explode(".", $_FILES["arquivo"]["name"])));
    if (array_search(${$GLOBALS["vtnbllb"]}, ${$GLOBALS["pkhluiyibji"]}["extensoes"]) === false) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Por favor, envie arquivos com as seguintes extens\xf5es: jpg, png ou gif\");";
        $GLOBALS["czwjgt"] = "idfatura";
        echo "window.location=\"../../home.php?page=faturas/confirmar&id=" . $idfatura . "\";";
        echo "</script>";
        exit;
    }
    if (${$GLOBALS["pkhluiyibji"]}["tamanho"] < $_FILES["arquivo"]["size"]) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"O arquivo enviado \xe9 muito grande, envie arquivos de at\xe9 2Mb.\");";
        echo "window.location=\"../../home.php?page=faturas/confirmar&id=" . ${$GLOBALS["gvysushsa"]} . "\";";
        echo "</script>";
        exit;
    }
    if (${$GLOBALS["fadyaxqiq"]}["renomeia"] == true) {
        ${$GLOBALS["mcnjiuhdjgj"]} = md5(time()) . ".jpg";
    } else {
        ${$GLOBALS["mcnjiuhdjgj"]} = $_FILES["arquivo"]["name"];
    }
    if (move_uploaded_file($_FILES["arquivo"]["tmp_name"], ${$pznimhpoc}["pasta"] . ${$gkmjgqjri})) {
        $GLOBALS["odtjbkicsxx"] = "formapagto";
        $rhyolrumxbs = "formapagto";
        $GLOBALS["tmqfgg"] = "formapagto";
        $GLOBALS["ifodst"] = "nota";
        $GLOBALS["wdefrvh"] = "nome_final";
        $fwqnydsmcg = "data";
        $GLOBALS["jmkhvgevnn"] = "forma";
        switch ($forma) {
            case 1:
                ${$GLOBALS["odtjbkicsxx"]} = "boleto";
                break;
            case 2:
                ${$GLOBALS["tmqfgg"]} = "deptra";
                break;
            default:
                ${$rhyolrumxbs} = "boleto";
                break;
        }
        $vkfppwbk = "inserecp";
        $GLOBALS["arnmoqmxo"] = "formapagto";
        if (${$GLOBALS["dvhnjbd"]} == "") {
            ${$GLOBALS["dvhnjbd"]} = "N/d";
        } else {
            $kcltnt = "nota";
            $tfjwencj = "nota";
            $nota = $nota;
        }
        ${$fwqnydsmcg} = date("Y-m-d H:i:s");
        ${$vkfppwbk} = "INSERT INTO fatura_comprovantes (fatura_id,usuario_id,data,formapagamento,nota,imagem) values ('" . ${$GLOBALS["gvysushsa"]} . "','" . $_SESSION["usuarioID"] . "','" . ${$GLOBALS["qgzsltp"]} . "','" . ${$GLOBALS["arnmoqmxo"]} . "','" . ${$GLOBALS["ifodst"]} . "','" . ${$GLOBALS["wdefrvh"]} . "')";
        ${$GLOBALS["nmghherlwl"]} = $conn->prepare(${$GLOBALS["nmghherlwl"]});
        $inserecp->execute();
        echo "<script type=\"text/javascript\">";
        $lusvrpdmvm = "idfatura";
        echo "alert(\"Enviado com sucesso! Aguarde um prazo de at\xe9 4 horas\");";
        echo "window.location=\"../../home.php?page=faturas/confirmar&id=" . $idfatura . "\";";
        echo "</script>";
    } else {
        echo "<script type=\"text/javascript\">";
        $GLOBALS["mtpwvjtlzle"] = "idfatura";
        echo "alert(\"N\xe3o foi possivel enviar o arquivo tente novamente!\");";
        echo "window.location=\"../../home.php?page=faturas/confirmar&id=" . $idfatura . "\";";
        echo "</script>";
    }
} else {
    echo "teste";
}
