<?php

$GLOBALS["dwpqfhnw"] = "inserenoti";
$GLOBALS["erusqwbkku"] = "msg";
$GLOBALS["fqxaubw"] = "inserecp";
$GLOBALS["mpqckliu"] = "formapagto";
$GLOBALS["dwvqnoltg"] = "forma";
$GLOBALS["cnhwfmssdm"] = "nome_final";
$GLOBALS["evxiwkl"] = "extensao";
$GLOBALS["ihlfkqwvjn"] = "_UP";
$GLOBALS["bvvveqz"] = "contafaturacp";
$GLOBALS["yttcjkmkrd"] = "faturacp";
$GLOBALS["tbmntrs"] = "fatu";
$GLOBALS["tgkixlzk"] = "conta";
$GLOBALS["mnewkxfus"] = "SQLUPUser";
$GLOBALS["vsrrevmlwxl"] = "nota";
$GLOBALS["mjqmbgueh"] = "idfatura";
require_once "../../pages/system/seguranca.php";
require_once "../../pages/system/config.php";
require_once "../../pages/system/funcoes.php";
$GLOBALS["svrikqrcfgh"] = "usuario";
require_once "../../pages/system/classe.ssh.php";
protegePagina("user");
if ($usuario["ativo"] == 2) {
    echo "<script type=\"text/javascript\">";
    echo "window.location=\"home.php?page=suspenso\";";
    echo "</script>";
    exit;
}
if (isset($_POST["fatura"])) {
    $hymcrwb = "faturacp";
    $GLOBALS["gcchddulk"] = "faturacp";
    $GLOBALS["tergkjfdk"] = "fatu";
    $GLOBALS["hkkmbokpagl"] = "_UP";
    $wyynloeb = "idfatura";
    ${$GLOBALS["mjqmbgueh"]} = sql_injector($_POST["fatura"]);
    $GLOBALS["yhghfgt"] = "_UP";
    ${$GLOBALS["vsrrevmlwxl"]} = sql_injector($_POST["msg"]);
    $GLOBALS["wnprdaqcbpn"] = "forma";
    $forma = sql_injector($_POST["formap"]);
    $omhfqfna = "arquivo";
    $GLOBALS["cdeabfflh"] = "_UP";
    $bujfpa = "SQLUPUser";
    $wimjhsubki = "idfatura";
    $arquivo = $_FILES["arquivo"];
    ${$GLOBALS["mnewkxfus"]} = "SELECT * FROM fatura where id='" . ${$wyynloeb} . "'";
    ${$bujfpa} = $conn->prepare(${$GLOBALS["mnewkxfus"]});
    $GLOBALS["ewrzwdwcb"] = "idfatura";
    $SQLUPUser->execute();
    $GLOBALS["qljujbey"] = "fatu";
    ${$GLOBALS["tgkixlzk"]} = $SQLUPUser->rowCount();
    $vbetkzw = "idfatura";
    if (${$GLOBALS["tgkixlzk"]} == 0) {
        $wdjwcvt = "idfatura";
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Fatura n\xc3\xa3o encontrada!\");";
        echo "window.location=\"home.php?page=faturas/confirmar&id=" . $idfatura . "\";";
        echo "</script>";
        exit;
    }
    ${$GLOBALS["qljujbey"]} = $SQLUPUser->fetch();
    if (${$GLOBALS["tbmntrs"]}["usuario_id"] != $_SESSION["usuarioID"]) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Esta fatura n\xc3\xa3o \xc3\xa9 sua!\");";
        echo "window.location=\"home.php?page=faturas/abertas\";";
        echo "</script>";
        exit;
    }
    $cgwksqwlgkx = "contafaturacp";
    $qeqezq = "_UP";
    if (${$GLOBALS["tbmntrs"]}["status"] == "cancelado") {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Esta fatura est\xc3\xa1 vencida ou expirada!\");";
        echo "window.location=\"home.php?page=faturas/canceladas\";";
        echo "</script>";
        exit;
    }
    if (${$GLOBALS["tergkjfdk"]}["status"] == "pago") {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Esta fatura est\xc3\xa1 paga!\");";
        echo "window.location=\"home.php?page=faturas/pagas\";";
        echo "</script>";
        exit;
    }
    ${$hymcrwb} = "SELECT * FROM fatura_comprovantes where fatura_id='" . ${$wimjhsubki} . "' and usuario_id='" . $_SESSION["usuarioID"] . "' and status='aberto'";
    ${$GLOBALS["gcchddulk"]} = $conn->prepare(${$GLOBALS["yttcjkmkrd"]});
    $faturacp->execute();
    ${$GLOBALS["bvvveqz"]} = $faturacp->rowCount();
    if (${$cgwksqwlgkx} > 0) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"J\xc3\xa1 possui uma confirma\xc3\xa7\xc3\xa3o para esta Fatura em andamento aguarde!\");";
        echo "window.location=\"../../home.php?page=faturas/confirmar&id=" . ${$GLOBALS["mjqmbgueh"]} . "\";";
        echo "</script>";
        exit;
    }
    $qnpifdklpkpk = "_UP";
    ${$qeqezq}["pasta"] = "../../admin/pages/faturas/comprovantes/";
    ${$GLOBALS["ihlfkqwvjn"]}["tamanho"] = 2097152;
    ${$GLOBALS["ihlfkqwvjn"]}["extensoes"] = array("jpg", "png", "gif");
    $GLOBALS["gwpjflp"] = "idfatura";
    $GLOBALS["uonqkabijch"] = "idfatura";
    ${$qnpifdklpkpk}["renomeia"] = true;
    ${$GLOBALS["cdeabfflh"]}["erros"][0] = "<script type=\"text/javascript\">alert(\"N\xc3\xa3o houve erro\");window.location=\"../../home.php?page=faturas/confirmar&id=" . ${$GLOBALS["mjqmbgueh"]} . "\";</script>";
    ${$GLOBALS["yhghfgt"]}["erros"][1] = "<script type=\"text/javascript\">alert(\"O arquivo no upload \xc3\xa9 maior do que o limite do PHP\");window.location=\"../../home.php?page=faturas/confirmar&id=" . ${$GLOBALS["gwpjflp"]} . "\";</script>";
    ${$GLOBALS["hkkmbokpagl"]}["erros"][2] = "<script type=\"text/javascript\">alert(\"O arquivo ultrapassa o limite de tamanho especifiado no HTML\");window.location=\"../../home.php?page=faturas/confirmar&id=" . ${$vbetkzw} . "\";</script>";
    ${$GLOBALS["ihlfkqwvjn"]}["erros"][3] = "<script type=\"text/javascript\">alert(\"O upload do arquivo foi feito parcialmente\");window.location=\"../../home.php?page=faturas/confirmar&id=" . ${$GLOBALS["uonqkabijch"]} . "\";</script>";
    ${$GLOBALS["ihlfkqwvjn"]}["erros"][4] = "<script type=\"text/javascript\">alert(\"N\xc3\xa3o foi feito o upload do arquivo\");window.location=\"../../home.php?page=faturas/confirmar&id=" . ${$GLOBALS["ewrzwdwcb"]} . "\";</script>";
    if ($_FILES["arquivo"]["error"] != 0) {
        die("" . ${$GLOBALS["ihlfkqwvjn"]}["erros"][$_FILES["arquivo"]["error"]]);
    }
    ${$GLOBALS["evxiwkl"]} = strtolower(end(explode(".", $_FILES["arquivo"]["name"])));
    if (array_search(${$GLOBALS["evxiwkl"]}, ${$GLOBALS["ihlfkqwvjn"]}["extensoes"]) === false) {
        echo "<script type=\"text/javascript\">";
        $GLOBALS["kiumcnk"] = "idfatura";
        echo "alert(\"Por favor, envie arquivos com as seguintes extens\xc3\xb5es: jpg, png ou gif\");";
        echo "window.location=\"../../home.php?page=faturas/confirmar&id=" . $idfatura . "\";";
        echo "</script>";
        exit;
    }
    if (${$GLOBALS["ihlfkqwvjn"]}["tamanho"] < $_FILES["arquivo"]["size"]) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"O arquivo enviado \xc3\xa9 muito grande, envie arquivos de at\xc3\xa9 2Mb.\");";
        echo "window.location=\"../../home.php?page=faturas/confirmar&id=" . ${$GLOBALS["mjqmbgueh"]} . "\";";
        echo "</script>";
        exit;
    }
    if (${$GLOBALS["ihlfkqwvjn"]}["renomeia"] == true) {
        $wkkjdgezj = "nome_final";
        $nome_final = md5(time()) . ".jpg";
    } else {
        $GLOBALS["bigjmfezkxv"] = "nome_final";
        $nome_final = $_FILES["arquivo"]["name"];
    }
    if (move_uploaded_file($_FILES["arquivo"]["tmp_name"], ${$GLOBALS["ihlfkqwvjn"]}["pasta"] . ${$GLOBALS["cnhwfmssdm"]})) {
        $GLOBALS["exrjvxydt"] = "nota";
        $GLOBALS["qroicrg"] = "msg";
        $vyjnmlfdczek = "nota";
        $udgiqtvmt = "formapagto";
        switch (${$GLOBALS["dwvqnoltg"]}) {
            case 1:
                ${$GLOBALS["mpqckliu"]} = "boleto";
                break;
            case 2:
                ${$GLOBALS["mpqckliu"]} = "deptra";
                break;
            default:
                ${$udgiqtvmt} = "boleto";
                break;
        }
        $uzqmyyhqu = "inserenoti";
        $vcuztipwel = "data";
        $irzbksiqxz = "idfatura";
        if (${$vyjnmlfdczek} == "") {
            $vrpykelko = "nota";
            $nota = "N/d";
        } else {
            $tuotqkiezn = "nota";
            $nota = ${$GLOBALS["vsrrevmlwxl"]};
        }
        ${$vcuztipwel} = date("Y-m-d H:i:s");
        $zjjsvbrk = "data";
        $oxbcift = "inserecp";
        $ybnoqm = "inserenoti";
        $ccjqsjczxkt = "idfatura";
        $GLOBALS["yuxtmabdbnl"] = "inserecp";
        $inserecp = "INSERT INTO fatura_comprovantes (fatura_id,usuario_id,data,formapagamento,nota,imagem) values ('" . ${$irzbksiqxz} . "','" . $_SESSION["usuarioID"] . "','" . $data . "','" . ${$GLOBALS["mpqckliu"]} . "','" . ${$GLOBALS["exrjvxydt"]} . "','" . ${$GLOBALS["cnhwfmssdm"]} . "')";
        ${$GLOBALS["fqxaubw"]} = $conn->prepare($inserecp);
        $inserecp->execute();
        ${$GLOBALS["qroicrg"]} = "Foi Enviado um novo comprovante verifique!";
        ${$ybnoqm} = "INSERT INTO notificacoes (usuario_id,data,tipo,linkfatura,mensagem,admin) values (0,'" . date("Y-m-d H:i:s") . "','fatura','faturas/comprovantes','" . ${$GLOBALS["erusqwbkku"]} . "','sim')";
        ${$GLOBALS["dwpqfhnw"]} = $conn->prepare(${$uzqmyyhqu});
        $inserenoti->execute();
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Enviado com sucesso! Aguarde um prazo de at\xc3\xa9 4 horas\");";
        echo "window.location=\"../../home.php?page=faturas/confirmar&id=" . ${$ccjqsjczxkt} . "\";";
        echo "</script>";
    } else {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"N\xc3\xa3o foi possivel enviar o arquivo tente novamente!\");";
        echo "window.location=\"../../home.php?page=faturas/confirmar&id=" . ${$GLOBALS["mjqmbgueh"]} . "\";";
        echo "</script>";
    }
} else {
    echo "teste";
}
