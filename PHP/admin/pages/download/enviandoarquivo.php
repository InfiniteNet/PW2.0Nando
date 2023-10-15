<?php

$GLOBALS["rtqfsafcl"] = "enviando";
$GLOBALS["ivtbynrjn"] = "msg";
$GLOBALS["tcmduehmc"] = "buscauser";
$GLOBALS["tluifboymga"] = "data";
$GLOBALS["rxcbvhrwsii"] = "tipocl";
$GLOBALS["cqshqvkj"] = "tipocliente";
$GLOBALS["pmaouo"] = "tipoar";
$GLOBALS["ibidwdnjzuh"] = "ope";
$GLOBALS["jollrhl"] = "operadora";
$GLOBALS["dnjdxttno"] = "sta";
$GLOBALS["upkqozi"] = "conta";
$GLOBALS["hmrzbvgsljdr"] = "final";
$GLOBALS["rxvhkmn"] = "nomedoarquido";
$GLOBALS["rsdkwa"] = "status";
$GLOBALS["dvwzgakwt"] = "tipoarquivo";
require_once "../../../pages/system/seguranca.php";
require_once "../../../pages/system/config.php";
require_once "../../../pages/system/funcoes.system.php";
protegePagina("donoadmin");
if (isset($_POST["enviandoarquivos"])) {
    $GLOBALS["xnucmeptlq"] = "operadora";
    $ecgsshfqsi = "tipocliente";
    $operadora = sql_injector($_POST["operadora"]);
    $GLOBALS["oeqmsrt"] = "detalhes";
    $tipoarquivo = sql_injector($_POST["tipo"]);
    $tipocliente = sql_injector($_POST["tipocliente"]);
    $GLOBALS["dcpausiyiuy"] = "nomear";
    $detalhes = sql_injector($_POST["msg"]);
    $nomear = sql_injector($_POST["nome"]);
    $status = sql_injector($_POST["status"]);
    define("DEST_DIR", "/var/www/html../../../pages/download");
    if (isset($_FILES["arquivo"]) && !empty($_FILES["arquivo"]["name"])) {
        $slmnhsfouw = "arquivo";
        $qmfjmkm = "nomedoarquido";
        $GLOBALS["faiooidyshj"] = "ope";
        $GLOBALS["xwphpk"] = "arquivo";
        $orpbrc = "tipocl";
        $GLOBALS["vgopuq"] = "ope";
        $arquivo = $_FILES["arquivo"];
        $qxdtmvjisllw = "tipocl";
        $GLOBALS["wxmdyolfod"] = "ope";
        $nkedrwztwj = "tipoar";
        $iclddeklvgv = "ope";
        $pmzfjdj = "buscasmtp";
        $GLOBALS["mealpooqfwz"] = "tipocl";
        $ljrnmydpbfm = "arquivo";
        $GLOBALS["ficxkbfvw"] = "final";
        $GLOBALS["cqjowry"] = "detalhes";
        $rpmrfdukkbil = "sta";
        $nomedoarquido = $arquivo["name"];
        $GLOBALS["wkexjmualngn"] = "buscasmtp";
        $final = sql_injector($nomedoarquido);
        $xieaxdsejfn = "buscasmtp";
        $ynszihfwrx = "arquivo";
        $buscasmtp = "SELECT * FROM arquivo_download WHERE nome_arquivo='" . $final . "'";
        $buscasmtp = $conn->prepare($buscasmtp);
        $xttxmziw = "ope";
        $buscasmtp->execute();
        $conta = $buscasmtp->rowCount();
        $GLOBALS["rtqbngi"] = "nomear";
        if ($conta > 0) {
            echo myalertuser("error", "Arquivo existente !", "../../home.php?page=download/downloads");
            exit;
        }
        if (${$GLOBALS["rtqbngi"]} == "") {
            echo myalertuser("error", "Defina um nome para o arquivo !", "../../home.php?page=download/downloads");
            exit;
        }
        $hyauwcjxjju = "tipoarquivo";
        switch (${$GLOBALS["rsdkwa"]}) {
            case 1:
                ${$GLOBALS["dnjdxttno"]} = "funcionando";
                break;
            case 2:
                ${$rpmrfdukkbil} = "testes";
                break;
            default:
                ${$GLOBALS["dnjdxttno"]} = "funcionando";
                break;
        }
        switch (${$GLOBALS["jollrhl"]}) {
            case 1:
                ${$GLOBALS["vgopuq"]} = "todas";
                break;
            case 2:
                ${$iclddeklvgv} = "claro";
                break;
            case 3:
                ${$GLOBALS["ibidwdnjzuh"]} = "vivo";
                break;
            case 4:
                ${$GLOBALS["faiooidyshj"]} = "tim";
                break;
            case 5:
                ${$GLOBALS["wxmdyolfod"]} = "oi";
                break;
            default:
                ${$xttxmziw} = "todas";
                break;
        }
        switch (${$hyauwcjxjju}) {
            case 1:
                ${$GLOBALS["pmaouo"]} = "ehi";
                break;
            case 2:
                ${$nkedrwztwj} = "apk";
                break;
            case 3:
                ${$GLOBALS["pmaouo"]} = "outros";
                break;
            default:
                ${$GLOBALS["pmaouo"]} = "erro";
                break;
        }
        if (${$GLOBALS["pmaouo"]} == "erro") {
            echo myalertuser("error", "Ocorreu um erro !", "../../home.php?page=download/downloads");
            exit;
        }
        switch (${$GLOBALS["cqshqvkj"]}) {
            case 1:
                ${$orpbrc} = "todos";
                break;
            case 2:
                ${$GLOBALS["mealpooqfwz"]} = "revenda";
                break;
            case 3:
                ${$qxdtmvjisllw} = "vpn";
                break;
            default:
                ${$GLOBALS["rxcbvhrwsii"]} = "erro";
                break;
        }
        if (${$GLOBALS["rxcbvhrwsii"]} == "erro") {
            echo "<script type=\"text/javascript\">";
            echo "alert(\"Houve problema na sele\xc3\xa7\xc3\xa3o do tipo de cliente\");";
            echo "window.location=\"../../home.php?page=download/downloads\";";
            echo "</script>";
            exit;
        }
        if (${$GLOBALS["cqjowry"]} == "") {
            echo myalertuser("error", "Falta a descricao !", "../../home.php?page=download/downloads");
            exit;
        }
        if (!move_uploaded_file(${$ljrnmydpbfm}["tmp_name"], "/var/www/html../../../pages/download/" . ${$ynszihfwrx}["name"])) {
            echo myalertuser("error", "Erro ao fazer upload !", "../../home.php?page=download/downloads");
        } else {
            $GLOBALS["kekslolko"] = "final";
            ${$GLOBALS["tluifboymga"]} = date("Y-m-d H:i:s");
            $GLOBALS["fmdjkmew"] = "buscauser";
            $GLOBALS["ekeeem"] = "nomear";
            $GLOBALS["rygsqawbsn"] = "enviando";
            if (${$GLOBALS["rxcbvhrwsii"]} == "todos") {
                $GLOBALS["bmmiwbbso"] = "buscauser";
                $buscauser = "SELECT * FROM usuario";
            } elseif (${$GLOBALS["rxcbvhrwsii"]} == "revenda") {
                ${$GLOBALS["tcmduehmc"]} = "SELECT * FROM usuario where tipo='revenda'";
            } elseif (${$GLOBALS["rxcbvhrwsii"]} == "vpn") {
                $GLOBALS["qvxpqmnswc"] = "buscauser";
                $buscauser = "SELECT * FROM usuario where tipo='vpn'";
            }
            ${$GLOBALS["tcmduehmc"]} = $conn->prepare(${$GLOBALS["fmdjkmew"]});
            $fohiumpan = "detalhes";
            $buscauser->execute();
            if ($buscauser->rowCount() > 0) {
                $fixjndrxxy = "row";
                while (${$fixjndrxxy} = $buscauser->fetch()) {
                    $GLOBALS["gyqcjqf"] = "notins";
                    $GLOBALS["rgyxgo"] = "msg";
                    $tcoygt = "row";
                    $koawqymqutn = "notins";
                    $kgxqtbhhu = "notins";
                    ${$GLOBALS["ivtbynrjn"]} = "Foi adicionado um novo arquivo ao servidor <small><a href=\"../home.php?page=downloads/downloads\">Veja</a></small>!";
                    ${$GLOBALS["gyqcjqf"]} = "INSERT INTO notificacoes (usuario_id,data,tipo,linkfatura,mensagem,info_outros) values ('" . ${$tcoygt}["id_usuario"] . "','" . date("Y-m-d H:i:s") . "','outros','n/d','" . ${$GLOBALS["rgyxgo"]} . "','Arquivos')";
                    ${$kgxqtbhhu} = $conn->prepare(${$koawqymqutn});
                    $notins->execute();
                }
            }
            ${$GLOBALS["rygsqawbsn"]} = "insert into arquivo_download (nome,tipo,operadora,data,detalhes,nome_arquivo,cliente_tipo,status) values ('" . ${$GLOBALS["ekeeem"]} . "','" . ${$GLOBALS["pmaouo"]} . "','" . ${$GLOBALS["ibidwdnjzuh"]} . "','" . ${$GLOBALS["tluifboymga"]} . "','" . ${$fohiumpan} . "','" . ${$GLOBALS["kekslolko"]} . "','" . ${$GLOBALS["rxcbvhrwsii"]} . "','" . ${$GLOBALS["dnjdxttno"]} . "')";
            ${$GLOBALS["rtqfsafcl"]} = $conn->prepare(${$GLOBALS["rtqfsafcl"]});
            $enviando->execute();
            echo myalertuser("success", "Upload feito com sucesso!", "../../home.php?page=download/downloads");
        }
    } else {
        echo myalertuser("error", "Erro ao fazer upload!", "../../home.php?page=download/downloads");
        exit;
    }
}
