<?php

$GLOBALS["oedigcself"] = "ion";
$GLOBALS["ndpjpdzsl"] = "bg";
$GLOBALS["fbjyrbjz"] = "dia";
$GLOBALS["ndigufkxczi"] = "ano";
$GLOBALS["jdixglr"] = "partes";
$GLOBALS["kitmszfiscg"] = "dataconv";
$GLOBALS["dwrlubybipi"] = "row";
$GLOBALS["qqpsadbex"] = "dataatual";
$GLOBALS["fgsyrdokq"] = "SQLSubSSH";
$GLOBALS["nxkygvlhbp"] = "usuario";
$GLOBALS["bsawnenvk"] = "SQLUsuario";
$GLOBALS["ufgtkkrbux"] = "tip";
$GLOBALS["kfgirje"] = "tipo";
echo "<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">\n<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js\" type=\"text/javascript\"></script>\n<script type=\"text/javascript\">\n  var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle=\"popover\"]'))\n  var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {\n    return new bootstrap.Popover(popoverTriggerEl)\n  })\n</script>\n<script type=\"text/javascript\">\n  \$('.descricao').tooltipsy({\n    offset: [0, 10],\n    css: {\n      'padding': '10px',\n      'max-width': '200px',\n      'color': '#303030',\n      'background-color': '#f5f5b5',\n      'border': '1px solid #deca7e',\n      '-moz-box-shadow': '0 0 10px rgba(0, 0, 0, .5)',\n      '-webkit-box-shadow': '0 0 10px rgba(0, 0, 0, .5)',\n      'box-shadow': '0 0 10px rgba(0, 0, 0, .5)',\n      'text-shadow': 'none'\n    }\n  });\n</script>\n";
require_once "../../pages/system/seguranca.php";
require_once "../../pages/system/config.php";
$GLOBALS["qaugnrr"] = "usuario";
$rswegay = "SQLSubSSH";
require_once "../../pages/system/funcoes.php";
require_once "../../pages/system/classe.ssh.php";
protegePagina("user");
$yadunvv = "tip";
if ($usuario["ativo"] == 2) {
    echo "<script type=\"text/javascript\">";
    echo "window.location=\"home.php?page=suspenso\";";
    echo "</script>";
    exit;
}
$GLOBALS["kqeyjy"] = "tip";
if (isset($_GET["tipo"])) {
    ${$GLOBALS["kfgirje"]} = $_GET["tipo"];
} else {
    ${$GLOBALS["kfgirje"]} = 1;
}
switch (${$GLOBALS["kfgirje"]}) {
    case 0:
        ${$yadunvv} = "todos";
        break;
    case 1:
        ${$GLOBALS["ufgtkkrbux"]} = "ehi";
        break;
    case 2:
        ${$GLOBALS["ufgtkkrbux"]} = "apk";
        break;
    case 3:
        ${$GLOBALS["ufgtkkrbux"]} = "outros";
        break;
    default:
        ${$GLOBALS["kqeyjy"]} = "todos";
        break;
}
${$GLOBALS["bsawnenvk"]} = "SELECT * FROM usuario WHERE id_usuario = '" . $_SESSION["usuarioID"] . "'";
${$GLOBALS["bsawnenvk"]} = $conn->prepare(${$GLOBALS["bsawnenvk"]});
$SQLUsuario->execute();
${$GLOBALS["nxkygvlhbp"]} = $SQLUsuario->fetch();
if (${$GLOBALS["ufgtkkrbux"]} == "todos") {
    $xbznljucklpt = "SQLSubSSH";
    $SQLSubSSH = "SELECT * FROM arquivo_download where cliente_tipo='" . ${$GLOBALS["nxkygvlhbp"]}["tipo"] . "' or cliente_tipo='todos'  ORDER BY id desc";
} else {
    ${$GLOBALS["fgsyrdokq"]} = "SELECT * FROM arquivo_download where cliente_tipo='" . ${$GLOBALS["nxkygvlhbp"]}["tipo"] . "' or cliente_tipo='todos' and tipo='" . ${$GLOBALS["ufgtkkrbux"]} . "'  ORDER BY id desc";
}
${$GLOBALS["fgsyrdokq"]} = $conn->prepare(${$rswegay});
$SQLSubSSH->execute();
if ($SQLSubSSH->rowCount() > 0) {
    $GLOBALS["jfsffnmohcx"] = "row";
    while (${$GLOBALS["jfsffnmohcx"]} = $SQLSubSSH->fetch()) {
        $hqobzkfybpx = "dataatual";
        ${$GLOBALS["qqpsadbex"]} = ${$GLOBALS["dwrlubybipi"]}["data"];
        $GLOBALS["suioxsuhga"] = "bg";
        $nyxqwzns = "ion";
        $kyfttfni = "row";
        ${$GLOBALS["kitmszfiscg"]} = substr(${$hqobzkfybpx}, 0, 10);
        $GLOBALS["gjxqxumjem"] = "row";
        $pamglblk = "ion";
        $gqiflfyz = "mes";
        $GLOBALS["uhioufr"] = "row";
        $GLOBALS["lvggwf"] = "bg";
        ${$GLOBALS["jdixglr"]} = explode("-", ${$GLOBALS["kitmszfiscg"]});
        ${$GLOBALS["ndigufkxczi"]} = ${$GLOBALS["jdixglr"]}[0];
        $dmtzmtowbq = "partes";
        ${$gqiflfyz} = ${$GLOBALS["jdixglr"]}[1];
        $GLOBALS["bihkldmauok"] = "ion";
        ${$GLOBALS["fbjyrbjz"]} = ${$dmtzmtowbq}[2];
        switch (${$kyfttfni}["operadora"]) {
            case "vivo":
                ${$GLOBALS["ndpjpdzsl"]} = "primary";
                break;
            case "claro":
                ${$GLOBALS["ndpjpdzsl"]} = "danger";
                break;
            case "tim":
                ${$GLOBALS["suioxsuhga"]} = "info";
                break;
            case "oi":
                ${$GLOBALS["ndpjpdzsl"]} = "warning";
                break;
            default:
                ${$GLOBALS["lvggwf"]} = "primary";
                break;
        }
        switch (${$GLOBALS["dwrlubybipi"]}["tipo"]) {
            case "ehi":
                ${$GLOBALS["oedigcself"]} = "file";
                break;
            case "apk":
                ${$pamglblk} = "android";
                break;
            case "outros":
                ${$GLOBALS["oedigcself"]} = "download";
                break;
            default:
                ${$nyxqwzns} = "download";
                break;
        }
        echo "\n    <div class=\"col-lg-3 col-sm-6 col-12\">\n      <div class=\"card border-";
        echo ${$GLOBALS["ndpjpdzsl"]};
        echo "\">\n        <a href=\"pages/downloads/baixar.php?id=";
        echo ${$GLOBALS["gjxqxumjem"]}["id"];
        echo "\" title=\"Descri\xc3\xa7\xc3\xa3o !\" data-bs-container=\"body\" data-bs-toggle=\"popover\" data-bs-placement=\"top\" data-bs-content=\"";
        echo ${$GLOBALS["uhioufr"]}["detalhes"];
        echo "\">\n          <div class=\"card-header d-flex flex-column align-items-center pb-0\">\n            <div class=\"avatar bg-light-info avatar-xl\">\n              <div class=\"avatar-content\">\n\n                <i class=\"fa fa-";
        $GLOBALS["wiwqfhvp"] = "row";
        echo ${$GLOBALS["bihkldmauok"]};
        echo "\"></i>\n              </div>\n            </div>\n            <h4 class=\"text-bold-700 mt-1 text-success\">";
        echo ${$GLOBALS["dwrlubybipi"]}["nome"];
        echo "</h4>\n            ";
        if (${$GLOBALS["dwrlubybipi"]}["status"] == "funcionando") {
            echo "              <span class=\"text-warning\">Funcionando</span>\n            ";
        } elseif ($row["status"] == "testes") {
            echo "              <span class=\"text-danger\">Em Testes</span>\n            ";
        }
        echo "            <p class=\"mb-2\"></p>\n          </div>\n        </a>\n      </div>\n    </div>\n    \n    \n  ";
    }
} else {
    echo "  <div class=\"col-lg-3 col-sm-6 col-12\">\n    <div class=\"card border-danger\">\n      <a href=\"#\">\n        <div class=\"card-header d-flex flex-column align-items-center pb-0\">\n          <div class=\"avatar bg-light-danger avatar-xl\">\n            <div class=\"avatar-content\">\n              <i class=\"fa fa-times-circle-o\"></i>\n            </div>\n          </div>\n          <h4 class=\"text-bold-700 mt-1 text-danger\">Nada foi encontrado !</h4>\n          <p class=\"mb-2\"></p>\n        </div>\n      </a>\n    </div>\n  </div>\n\n\n";
}
