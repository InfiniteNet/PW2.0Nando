<?php

$GLOBALS["luwhioxaxfm"] = "ano";
$GLOBALS["jvdloory"] = "ion";
$GLOBALS["whuksng"] = "bg";
$GLOBALS["nrzniqyifv"] = "row";
$GLOBALS["pdumjpmx"] = "dia";
$GLOBALS["skirclxyk"] = "mes";
$GLOBALS["kxuvhjq"] = "partes";
$GLOBALS["rviqptjmk"] = "dataconv";
$GLOBALS["stsxruqghr"] = "SQLSubSSH";
$mcamibnjig = "SQLSubSSH";
echo "<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">\n<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js\" type=\"text/javascript\"></script>\n<script type=\"text/javascript\">\nvar popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle=\"popover\"]'))\nvar popoverList = popoverTriggerList.map(function(popoverTriggerEl) {\nreturn new bootstrap.Popover(popoverTriggerEl)\n})\n</script>\n<script type=\"text/javascript\">\n\$('.descricao').tooltipsy({\noffset: [0, 10],\ncss: {\n'padding': '10px',\n'max-width': '200px',\n'color': '#303030',\n'background-color': '#f5f5b5',\n'border': '1px solid #deca7e',\n'-moz-box-shadow': '0 0 10px rgba(0, 0, 0, .5)',\n'-webkit-box-shadow': '0 0 10px rgba(0, 0, 0, .5)',\n'box-shadow': '0 0 10px rgba(0, 0, 0, .5)',\n'text-shadow': 'none'\n}\n});\n</script>\n";
require_once "../pages/system/seguranca.php";
require_once "../pages/system/config.php";
require_once "../pages/system/funcoes.php";
require_once "../pages/system/classe.ssh.php";
$SQLSubSSH = "SELECT * FROM arquivo_download where cliente_tipo='todos'  ORDER BY id desc";
$SQLSubSSH = $conn->prepare($SQLSubSSH);
$SQLSubSSH->execute();
if ($SQLSubSSH->rowCount() > 0) {
    $GLOBALS["micjesky"] = "row";
    while (${$GLOBALS["micjesky"]} = $SQLSubSSH->fetch()) {
        $GLOBALS["wfiqembtd"] = "dataatual";
        $pvfdugsm = "ion";
        $ewiibicglsyq = "ano";
        $iugmluswhkj = "mes";
        $jaikakkdpd = "row";
        $qhnewl = "bg";
        $GLOBALS["bbkbhsc"] = "dataatual";
        $dataatual = $row["data"];
        $GLOBALS["koyhkag"] = "bg";
        ${$GLOBALS["rviqptjmk"]} = substr($dataatual, 0, 10);
        ${$GLOBALS["kxuvhjq"]} = explode("-", ${$GLOBALS["rviqptjmk"]});
        $GLOBALS["ymauikkg"] = "row";
        $uxpjpooxy = "ion";
        $GLOBALS["mgpsoyvrey"] = "partes";
        ${$ewiibicglsyq} = ${$GLOBALS["kxuvhjq"]}[0];
        ${$GLOBALS["skirclxyk"]} = ${$GLOBALS["mgpsoyvrey"]}[1];
        $fuczdxepd = "ion";
        $cguhetpgftpi = "bg";
        ${$GLOBALS["pdumjpmx"]} = ${$GLOBALS["kxuvhjq"]}[2];
        switch (${$GLOBALS["nrzniqyifv"]}["operadora"]) {
            case "vivo":
                ${$cguhetpgftpi} = "primary";
                break;
            case "claro":
                ${$GLOBALS["whuksng"]} = "danger";
                break;
            case "tim":
                ${$GLOBALS["whuksng"]} = "info";
                break;
            case "oi":
                ${$GLOBALS["whuksng"]} = "warning";
                break;
            default:
                ${$GLOBALS["koyhkag"]} = "primary";
                break;
        }
        switch (${$GLOBALS["nrzniqyifv"]}["tipo"]) {
            case "ehi":
                ${$GLOBALS["jvdloory"]} = "file";
                break;
            case "apk":
                ${$pvfdugsm} = "android";
                break;
            case "outros":
                ${$uxpjpooxy} = "download";
                break;
            default:
                ${$fuczdxepd} = "download";
                break;
        }
        $tseymbn = "ion";
        $GLOBALS["mvyxdjfi"] = "row";
        echo "<div class=\"col-lg-3 col-sm-6 col-12\">\n<div class=\"card border-";
        echo ${$qhnewl};
        $wplvplhsbsv = "row";
        echo "\">\n<a href=\"baixar.php?id=";
        echo $row["id"];
        echo "\">\n<div class=\"card-header d-flex flex-column align-items-center pb-0\">\n<div class=\"avatar bg-light-info avatar-xl\">\n<div class=\"avatar-content\">\n<i class=\"fa fa-";
        echo $ion;
        echo "\"></i>\n</div>\n</div>\n<h4 class=\"text-bold-700 mt-1 text-success\">";
        $GLOBALS["utoalwv"] = "dia";
        echo $row["nome"];
        echo "</h4>\n";
        if (${$GLOBALS["nrzniqyifv"]}["status"] == "funcionando") {
            echo "<span class=\"text-warning\">Funcionando</span>\n";
        } elseif (${$GLOBALS["ymauikkg"]}["status"] == "testes") {
            echo "<span class=\"text-danger\">Em Testes</span>\n";
        }
        echo "<h4 class=\"text-bold-700 mt-1 text-success\">";
        echo ${$GLOBALS["utoalwv"]};
        echo "/";
        echo ${$iugmluswhkj};
        echo "/";
        echo ${$GLOBALS["luwhioxaxfm"]};
        echo "</h4>\n<h4 class=\"text-bold-700 mt-1 text-warning\">";
        echo ${$GLOBALS["nrzniqyifv"]}["detalhes"];
        echo "</h4>\n<p class=\"mb-2\"></p>\n</div>\n</a>\n</div>\n</div>\n";
    }
} else {
    echo "<div class=\"col-lg-3 col-sm-6 col-12\">\n<div class=\"card border-danger\">\n<a href=\"#\">\n<div class=\"card-header d-flex flex-column align-items-center pb-0\">\n<div class=\"avatar bg-light-danger avatar-xl\">\n<div class=\"avatar-content\">\n<i class=\"fa fa-times-circle-o\"></i>\n</div>\n</div>\n<h4 class=\"text-bold-700 mt-1 text-danger\">Nada foi encontrado !</h4>\n<p class=\"mb-2\"></p>\n</div>\n</a>\n</div>\n</div>\n";
}
