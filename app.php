<?php

$GLOBALS["znvdmxz"] = "config";
$GLOBALS["ovptytvbf"] = "payloads";
$GLOBALS["xszfvgsup"] = "portas2";
$GLOBALS["vggfkoxchyc"] = "json";
$GLOBALS["zbmhvkelugcb"] = "replace";
$GLOBALS["kxvbrw"] = "change";
$GLOBALS["umfliveds"] = "servidores";
$GLOBALS["ljvertwn"] = "portas";
$GLOBALS["hqkkwoxysu"] = "sql";
$GLOBALS["nliueplgim"] = "row";
$GLOBALS["fgncjek"] = "logoonline";
$GLOBALS["yfpvwbjf"] = "CorTexto";
$GLOBALS["sdkdrdkx"] = "CorGeral";
$GLOBALS["dfecgqlbn"] = "CorTexto";
$GLOBALS["tpugomca"] = "fundoDoLogOnline";
$GLOBALS["lcbitjgl"] = "CorUser";
$GLOBALS["efwawfdfkqc"] = "BackgroundLink2";
$GLOBALS["jlnqihnyuvso"] = "fundoDoLogOnline";
$GLOBALS["osvjqnpz"] = "fundoonline";
$GLOBALS["ombeopehxin"] = "CorMenu";
$GLOBALS["nqgptgi"] = "CorTexto";
$GLOBALS["zbyygduuekyv"] = "uid";
$GLOBALS["qldkiqby"] = "check";
$GLOBALS["mtcbmfvonp"] = "uid";
$ztahqcdn = "uid";
$GLOBALS["bxvuginbvq"] = "CorTexto";
$zljrvrq = "CorUser";
$gjbdevoyus = "fundoonline";
$GLOBALS["jlvsdvfhsjk"] = "uid";
$brkcghb = "sql";
require_once $_SERVER["DOCUMENT_ROOT"] . "/config/funcoes.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/modais.php";
$GLOBALS["hygdvwfke"] = "uid";
isLogged($sid);
$GLOBALS["zhjygtid"] = "CorGeral";
$ernawdqlulmd = "CorUser";
$uid = getIdBySid($sid);
$GLOBALS["fvsckfxlnr"] = "fundoonline";
$ivtlmyfeez = "CorUser";
echo "<div class=\"container\">\n<center>\n<a href=\"homec.php\"><img class=\"mt-5\" src=\"";
echo getConfig("logo");
echo "\" width=\"";
echo getConfig("largura");
echo "\" height=\"";
echo getConfig("altura");
echo "\"></a><br>\nBem vindo(a) <b>";
$qkkohqexy = "uid";
$GLOBALS["ohjkuat"] = "CorUser";
echo getNickById($uid);
$GLOBALS["rizmphe"] = "CorGeral";
echo "</b>!<br>\n<div ";
$GLOBALS["fkimycdmfju"] = "row";
if (!$detect->isMobile()) {
    echo "style=\"max-width: 50%;\" ";
}
echo " class=\"mt-4 row\">\n<div class=\"mt-2 mb-2\">\n<div class=\"row\">\n<div class=\"col\">\n<div class=\"dropdown\">\n<button class=\"btn btn-primary d-inline-flex align-items-center me-2 dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">\n<svg class=\"icon icon-xs me-2\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">\n<path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 6v6m0 0v6m0-6h6m-6 0H6\"></path>\n</svg>\nAdicionar\n</button>\n<div class=\"dropdown-menu dashboard-dropdown dropdown-menu-start mt-2 py-1\">\n<a class=\"dropdown-item d-flex align-items-center\" href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-add-servidor\">\n<i class=\"fa-solid fa-server\"></i>&nbsp; Servidor\n</a>\n<a class=\"dropdown-item d-flex align-items-center\" href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-add-payload\">\n<i class=\"fa-solid fa-file-lines\"></i>&nbsp; Payload\n</a>\n<a class=\"dropdown-item d-flex align-items-center\" href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-add-porta\">\n<i class=\"fa-solid fa-door-open\"></i>&nbsp; Porta\n</a>\n<a class=\"dropdown-item d-flex align-items-center\" href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-add-multi\">\n<i class=\"fa-solid fa-file-lines\"></i>&nbsp; Multi Payloads\n</a>\n<a class=\"dropdown-item d-flex align-items-center\" href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-excluir-todas-payloads\">\n<i class=\"fa-solid fa-trash\"></i>&nbsp; Excluir Todas Payloads\n</a>\n</div>\n</div>\n</div>\n<div class=\"col\">\n<div class=\"col\"><button class=\"btn btn-primary\" type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-sms\"><i class=\"fa-solid fa-sms\"></i> Enviar SMS</button></div>\n</div>\n</div>\n</div>\n";
$GLOBALS["enqbrgh"] = "uid";
${$brkcghb} = $conn->query("SELECT * FROM configuracoes WHERE id_owner='{$uid}'");
${$GLOBALS["qldkiqby"]} = $sql->fetch(PDO::FETCH_ASSOC);
${$ernawdqlulmd} = getConfigUser("CorUser", ${$GLOBALS["mtcbmfvonp"]});
${$GLOBALS["zhjygtid"]} = getConfigUser("CorGeral", ${$qkkohqexy});
${$GLOBALS["ombeopehxin"]} = getConfigUser("CorMenu", ${$GLOBALS["mtcbmfvonp"]});
$GLOBALS["mjxjqwy"] = "logoonline";
${$GLOBALS["bxvuginbvq"]} = getConfigUser("CorTexto", ${$GLOBALS["enqbrgh"]});
${$GLOBALS["mjxjqwy"]} = getConfigUser("logoonline", ${$GLOBALS["mtcbmfvonp"]});
${$GLOBALS["osvjqnpz"]} = getConfigUser("fundoonline", ${$GLOBALS["mtcbmfvonp"]});
$GLOBALS["uujgbgtxb"] = "BackgroundLink2";
${$GLOBALS["jlnqihnyuvso"]} = getConfigUser("fundoDoLogOnline", ${$ztahqcdn});
$GLOBALS["wipczcocv"] = "logoonline";
$llxggvppo = "CorMenu";
$xtwxdntjxd = "CorGeral";
${$GLOBALS["efwawfdfkqc"]} = getConfigUser("BackgroundLink2", ${$GLOBALS["zbyygduuekyv"]});
if (${$zljrvrq} == "") {
    ${$GLOBALS["lcbitjgl"]} = "#fffac400";
} else {
    if (${$GLOBALS["ohjkuat"]} > "") {
        $okcmlinxu = "CorUser";
        $nvkqzslcw = "CorUser";
        $CorUser = $CorUser;
    }
}
$GLOBALS["ujlrrbfrdcw"] = "row";
if (${$GLOBALS["rizmphe"]} == "") {
    ${$GLOBALS["sdkdrdkx"]} = "#FF23af4d";
} else {
    if (${$GLOBALS["sdkdrdkx"]} > "") {
        ${$GLOBALS["sdkdrdkx"]} = ${$GLOBALS["sdkdrdkx"]};
    }
}
if (${$llxggvppo} == "") {
    $GLOBALS["ugocrgqlpah"] = "CorMenu";
    $CorMenu = "#e8eccbe1";
} else {
    if (${$GLOBALS["ombeopehxin"]} > "") {
        $pydctzlw = "CorMenu";
        ${$GLOBALS["ombeopehxin"]} = $CorMenu;
    }
}
if (${$GLOBALS["nqgptgi"]} == "") {
    ${$GLOBALS["yfpvwbjf"]} = "#FF23af4d";
} else {
    if (${$GLOBALS["dfecgqlbn"]} > "") {
        ${$GLOBALS["yfpvwbjf"]} = ${$GLOBALS["yfpvwbjf"]};
    }
}
if (${$GLOBALS["wipczcocv"]} == "") {
    $ftekoufmm = "logoonline";
    $logoonline = "https://i.imgur.com/TAWmkzs.png";
} else {
    if (${$GLOBALS["fgncjek"]} > "") {
        $ttgjdgeqy = "logoonline";
        ${$GLOBALS["fgncjek"]} = $logoonline;
    }
}
if (${$GLOBALS["osvjqnpz"]} == "") {
    ${$GLOBALS["osvjqnpz"]} = "https://i.imgur.com/vvLLutx.jpg";
} else {
    if (${$GLOBALS["fvsckfxlnr"]} > "") {
        $jciadbeh = "fundoonline";
        $GLOBALS["ibqytcp"] = "fundoonline";
        $fundoonline = $fundoonline;
    }
}
if (${$GLOBALS["tpugomca"]} == "") {
    ${$GLOBALS["jlnqihnyuvso"]} = "https://i.imgur.com/PkCl6oH.jpeg";
} else {
    if (${$GLOBALS["jlnqihnyuvso"]} > "") {
        $GLOBALS["ymrkokfjonz"] = "fundoDoLogOnline";
        $fundoDoLogOnline = ${$GLOBALS["jlnqihnyuvso"]};
    }
}
if (${$GLOBALS["uujgbgtxb"]} == "") {
    $tqibebkqip = "BackgroundLink2";
    $BackgroundLink2 = "https://i.imgur.com/ZeTZrge.png";
} else {
    if (${$GLOBALS["efwawfdfkqc"]} > "") {
        $GLOBALS["tvprrommga"] = "BackgroundLink2";
        $BackgroundLink2 = ${$GLOBALS["efwawfdfkqc"]};
    }
}
echo "<!------------------------------------------------------------------------------------>\n<!-- CONFIGURA\xc3\x87\xc3\x95ES -->\n<!------------------------------------------------------------------------------------>\n<form action=\"editar.php?acao=config\" method=\"post\">\n<input type=\"hidden\" name=\"id_owner\" value=\"";
echo getIdBySid($sid);
echo "\">\n<div class=\"row mt-2\">\n<div class=\"col\">\n<div class=\"card card-small\">\n<label for=\"\">LINK UPDATE</label>\n<input type=\"text\" class=\"form-control\" value=\"";
$rmicpmqz = "sql";
echo getConfig("link");
echo "/update/";
echo getData("pasta_att", ${$GLOBALS["hygdvwfke"]});
$ahntxst = "BackgroundLink2";
echo "/config\" disabled>\n<input type=\"hidden\" class=\"form-control\" name=\"update\" value=\"http://";
echo $_SERVER["HTTP_HOST"];
echo "/update/";
echo getData("pasta_att", ${$GLOBALS["mtcbmfvonp"]});
$kvtotuv = "CorGeral";
echo "/config\">\n</div>\n</div>\n<div class=\"col\">\n<div class=\"card card-small\">\n<label for=\"\">LINK SMS</label>\n<input type=\"text\" class=\"form-control\" value=\"";
echo getConfig("link");
echo "/update/";
echo getData("pasta_att", ${$GLOBALS["mtcbmfvonp"]});
echo "/sms\" disabled>\n<input type=\"hidden\" class=\"form-control\" name=\"sms\" value=\"http://";
echo $_SERVER["HTTP_HOST"];
echo "/update/";
echo getData("pasta_att", ${$GLOBALS["mtcbmfvonp"]});
echo "/config\">\n</div>\n</div>\n</div>\n<div class=\"row mt-2\">\n<div class=\"col\">\n<div class=\"card card-small\">\n      <label for=\"\">COR USU\xc3\x81RIO</label>\n      <div class=\"card-body p-1\">\n        <div class=\"row align-items-center\">\n          <div class=\"col-md-100\">\n            <input type=\"text\" class=\"form-control form-control-sm mb-1\" placeholder=\"Hexadecimal\" id=\"app_CorUser\" name=\"CorUser\" value=\"";
echo ${$ivtlmyfeez};
$GLOBALS["neicekaxw"] = "CorMenu";
echo "\" onkeyup=\"changeInputColor('CorUser', this.value)\">\n          </div>\n          <div class=\"col-md-100 \">\n            <input type=\"color\" class=\"form-control form-control-sm\" value=\"";
$GLOBALS["meqwievo"] = "check";
echo ${$GLOBALS["lcbitjgl"]};
echo "\" id=\"CorUser\" onchange=\"changeColor('app_CorUser', this.value)\">\n          </div>\n        </div>\n        <label class=\"form-label\">OPACIDADE</label>\n        <input type=\"range\" class=\"form-range\" min=\"0\" max=\"100\" step=\"1\" value=\"\" oninput=\"changeInputRange('app_CorUser_transparency', 'app_CorUser', this.value)\">\n        <div id=\"app_CorUser_transparency\" class=\"p-1 rounded-pill\" style=\"background-color: ";
echo ${$GLOBALS["lcbitjgl"]};
echo "\">\n        </div>\n      </div>\n    </div>\n  </div>\n   <div class=\"col\">\n    <div class=\"card card-small\">\n      <label for=\"\">COR GERAL</label>\n      <div class=\"card-body p-1\">\n        <div class=\"row align-items-center\">\n          <div class=\"col-md-100\">\n            <input type=\"text\" class=\"form-control form-control-sm mb-1\" placeholder=\"Hexadecimal\" id=\"app_CorGeral\" name=\"CorGeral\" value=\"";
echo $CorGeral;
echo "\" onkeyup=\"changeInputColor('CorGeral', this.value)\">\n          </div>\n          <div class=\"col-md-100 \">\n            <input type=\"color\" class=\"form-control form-control-sm\" value=\"";
echo ${$xtwxdntjxd};
echo "\" id=\"CorGeral\" onchange=\"changeColor('app_CorGeral', this.value)\">\n          </div>\n        </div>\n        <label class=\"form-label\">OPACIDADE</label>\n        <input type=\"range\" class=\"form-range\" min=\"0\" max=\"100\" step=\"1\" value=\"\" oninput=\"changeInputRange('app_CorGeral_transparency', 'app_CorGeral', this.value)\">\n        <div id=\"app_CorGeral_transparency\" class=\"p-1 rounded-pill\" style=\"background-color: ";
$GLOBALS["czwbrnmips"] = "CorGeral";
echo $CorGeral;
echo "\">\n        </div>\n      </div>\n    </div>\n  </div>\n  </div>\n <div class=\"row mt-2\">\n  <div class=\"col\">\n    <div class=\"card card-small\">\n      <label for=\"\">COR MENU</label>\n      <div class=\"card-body p-1\">\n        <div class=\"row align-items-center\">\n          <div class=\"col-md-100\">\n            <input type=\"text\" class=\"form-control form-control-sm mb-1\" placeholder=\"Hexadecimal\" id=\"app_CorMenu\" name=\"CorMenu\" value=\"";
echo $CorMenu;
echo "\" onkeyup=\"changeInputColor('CorMenu', this.value)\">\n          </div>\n          <div class=\"col-md-100\">\n            <input type=\"color\" class=\"form-control form-control-sm\" value=\"";
echo ${$GLOBALS["ombeopehxin"]};
echo "\" id=\"CorMenu\" onchange=\"changeColor('app_CorMenu', this.value)\">\n          </div>\n        </div>\n        <label class=\"form-label\">OPACIDADE</label>\n        <input type=\"range\" class=\"form-range\" min=\"0\" max=\"100\" step=\"1\" value=\"\" oninput=\"changeInputRange('app_CorMenu_transparency', 'app_CorMenu', this.value)\">\n        <div id=\"app_CorMenu_transparency\" class=\"p-1 rounded-pill\" style=\"background-color: ";
echo ${$GLOBALS["ombeopehxin"]};
echo "\">\n        </div>\n      </div>\n    </div>\n  </div>\n  <div class=\"col\">\n    <div class=\"card card-small\">\n      <label for=\"\">COR TEXTO</label>\n      <div class=\"card-body p-1\">\n        <div class=\"row align-items-center\">\n          <div class=\"col-md-100\">\n            <input type=\"text\" class=\"form-control form-control-sm mb-1\" placeholder=\"Hexadecimal\" id=\"app_CorTexto\" name=\"CorTexto\" value=\"";
echo ${$GLOBALS["yfpvwbjf"]};
echo "\" onkeyup=\"changeInputColor('CorTexto', this.value)\">\n          </div>\n          <div class=\"col-md-100\">\n            <input type=\"color\" class=\"form-control form-control-sm\" value=\"";
echo ${$GLOBALS["yfpvwbjf"]};
echo "\" id=\"CorTexto\" onchange=\"changeColor('app_CorTexto', this.value)\">\n          </div>\n        </div>\n        <label class=\"form-label\">OPACIDADE</label>\n        <input type=\"range\" class=\"form-range\" min=\"0\" max=\"100\" step=\"1\" value=\"\" oninput=\"changeInputRange('app_CorTexto_transparency', 'app_CorTexto', this.value)\">\n        <div id=\"app_CorTexto_transparency\" class=\"p-1 rounded-pill\" style=\"background-color: ";
echo ${$GLOBALS["yfpvwbjf"]};
echo "\">\n        </div>\n      </div>\n    </div>\n  </div>\n </div>\n<div class=\"row mt-2\">\n<div class=\"col\">\n<div class=\"card card-small\">\n<label for=\"\">LINK LOGO</label>\n<input type=\"text\" name=\"logoonline\" class=\"form-control\" placeholder=\"Link em png!\" value=\"";
echo ${$GLOBALS["fgncjek"]};
echo "\">\n</div>\n</div>\n<div class=\"col\">\n<div class=\"card card-small\">\n<label for=\"\">LINK FUNDO</label>\n<input type=\"text\" name=\"fundoonline\" class=\"form-control\" placeholder=\"Link em jpeg!\" value=\"";
echo ${$gjbdevoyus};
echo "\">\n</div>\n</div>\n</div>\n<div class=\"row mt-2\">\n<div class=\"col\">\n<div class=\"card card-small\">\n<label for=\"\">LINK FUNDO LOG</label>\n<input type=\"text\" name=\"fundoDoLogOnline\" class=\"form-control\" placeholder=\"Link em jpeg!\" value=\"";
echo ${$GLOBALS["jlnqihnyuvso"]};
echo "\">\n</div>\n</div>\n<div class=\"col\">\n<div class=\"card card-small\">\n<label for=\"\">LINK RODAP\xc3\x89</label>\n<input type=\"text\" name=\"BackgroundLink2\" class=\"form-control\" placeholder=\"Link em jpeg!\" value=\"";
echo $BackgroundLink2;
echo "\">\n</div>\n</div>\n</div>\n<div class=\"row mt-2\">\n<div class=\"col\">\n<div class=\"card card-small\">\n<label for=\"\">EMAIL</label>\n<input type=\"text\" name=\"email\" class=\"form-control\" value=\"";
echo getConfigUser("email", ${$GLOBALS["mtcbmfvonp"]});
echo "\">\n</div>\n</div>\n<div class=\"col\">\n<div class=\"card card-small\">\n<label for=\"\">LINK CONTATO OU RENOVAR</label>\n<input type=\"text\" name=\"contato\" class=\"form-control\" value=\"";
echo getConfigUser("contato", ${$GLOBALS["mtcbmfvonp"]});
echo "\">\n</div>\n</div>\n</div>\n<div class=\"row mt-2\">\n<div class=\"col\">\n<div class=\"card card-small\">\n<label for=\"\">LINK TERMOS</label>\n<input type=\"text\" name=\"termos\" class=\"form-control\" value=\"";
echo getConfigUser("termos", ${$GLOBALS["mtcbmfvonp"]});
$cirgnsvti = "sql";
echo "\">\n</div>\n</div>\n<div class=\"col\">\n<div class=\"card card-small\">\n<label for=\"\">CHECKUSER</label>\n<select name=\"checkuser\" class=\"form-select\">\n";
if ($check["checkuser"] == "true") {
    echo "<option value=\"true\">ATIVADO</option>\n<option value=\"false\">DESATIVADO</option>\n";
} else {
    echo "<option value=\"false\">DESATIVADO</option>\n<option value=\"true\">ATIVADO</option>\n";
}
echo "</select>\n</div>\n</div>\n</div>\n<div class=\"row mt-2\">\n<div class=\"col\">\n<div class=\"card card-small\">\n<label for=\"\">NOTAS</label>\n<textarea name=\"notas\" class=\"form-control\" rows=\"4\">";
echo getConfigUser("notas", ${$GLOBALS["mtcbmfvonp"]});
echo "</textarea>\n</div>\n</div>\n</div>\n<div class=\"mt-2 d-grid gap-2\">\n<button type=\"submit\" name=\"atualiza_config\" style=\"color: white\" class=\"btn btn-success\">EDITAR CONFIGURA\xc3\x87\xc3\x83O</button></form>\n</div>\n<div class=\"mt-4 mb-3\">\n<label class=\"my-1 me-2 float-left\"><b><i class=\"fa-solid fa-arrow-right\"></i> Selecione o servidor</b></label>\n<form action=\"\" id=\"form_servidor\" method=\"post\">\n<select class=\"form-select\" id=\"editar_servidor\" name=\"editar_servidor\">\n<option value=\"\">Selecione</option>\n";
${$rmicpmqz} = $conn->query("SELECT * FROM servidores WHERE id_owner='{$uid}'");
while (${$GLOBALS["ujlrrbfrdcw"]} = $sql->fetch(PDO::FETCH_ASSOC)) {
    echo "<option value='" . ${$GLOBALS["nliueplgim"]}["id"] . "'>" . ${$GLOBALS["nliueplgim"]}["Name"] . "</option>";
}
echo "\n</select>\n</form>\n</div>\n<div class=\"mb-3\">\n<label class=\"my-1 me-2\" for=\"\"><b><i class=\"fa-solid fa-arrow-right\"></i> Selecione a payload</b></label>\n<form action=\"\" id=\"form_payload\" method=\"post\">\n<select id=\"editar_payload\" class=\"form-select\" name=\"editar_payload\">\n<option value=\"\">Selecione</option>\n";
${$GLOBALS["hqkkwoxysu"]} = $conn->query("SELECT * FROM payloads WHERE id_owner='{$uid}'");
while (${$GLOBALS["nliueplgim"]} = $sql->fetch(PDO::FETCH_ASSOC)) {
    $GLOBALS["jwdeahj"] = "row";
    echo "<option value='" . $row["id"] . "'>" . ${$GLOBALS["nliueplgim"]}["Name"] . "</option>";
}
echo "\n</select>\n</form>\n</div>\n<div class=\"mb-3\">\n<label class=\"my-1 me-2\" for=\"\"><b><i class=\"fa-solid fa-arrow-right\"></i> Selecione a porta</b></label>\n<form action=\"\" id=\"form_porta\" method=\"post\">\n<select class=\"form-select\" id=\"editar_porta\" name=\"editar_porta\">\n<option value=\"\">Selecione</option>\n";
${$cirgnsvti} = $conn->query("SELECT * FROM portas WHERE id_owner='{$uid}'");
while (${$GLOBALS["fkimycdmfju"]} = $sql->fetch(PDO::FETCH_ASSOC)) {
    echo "<option value='" . ${$GLOBALS["nliueplgim"]}["id"] . "'>" . ${$GLOBALS["nliueplgim"]}["Porta"] . "</option>";
}
echo "\n</select>\n</form>\n<form action=\"\" method=\"post\">\n<div class=\"mt-2 d-grid gap-2\">\n<button style=\"color: white\" name=\"btn_salvar\" class=\"btn btn-success\" type=\"submit\">SALVAR TUDO E ATT VERS\xc3\x83O</button>\n</div>\n</form>\n</div>\n<div id=\"alert\" class=\"alert mt-2\"></div>\n</center>\n</div>\n";
if (isset($_POST["btn_salvar"])) {
    $GLOBALS["erigftvkadw"] = "config";
    $GLOBALS["tagiucrnpu"] = "search";
    $puvzydblltm = "servidores";
    $ltlumpqpmbk = "dados";
    $GLOBALS["mculqwxy"] = "dados";
    $obwwrvn = "uid";
    addVersion(${$GLOBALS["mtcbmfvonp"]});
    $jhuwhdoei = "sql";
    $GLOBALS["wfotoy"] = "sql";
    $servidores = array();
    $GLOBALS["cpbgjectkpl"] = "uid";
    $fwqurcpv = "sql";
    $GLOBALS["cuazeoz"] = "uid";
    $ybyvowugl = "payloads";
    $GLOBALS["ipwlgik"] = "path";
    $payloads = array();
    $GLOBALS["mvuoenpou"] = "uid";
    $GLOBALS["pjoecceudlk"] = "uid";
    ${$GLOBALS["ljvertwn"]} = array();
    $qfaowd = "dados";
    $ifjqphjd = "uid";
    $GLOBALS["kemtnt"] = "json";
    $GLOBALS["rhhmzrpjopcq"] = "uid";
    ${$GLOBALS["wfotoy"]} = $conn->query("SELECT Name, TYPE, FLAG, ServerIP, CheckUser, ServerPort, SSLPort, USER, PASS FROM servidores  WHERE id_owner='{$uid}'");
    while (${$GLOBALS["nliueplgim"]} = $sql->fetch(PDO::FETCH_ASSOC)) {
        ${$GLOBALS["umfliveds"]}[] = ${$GLOBALS["nliueplgim"]};
    }
    $xjhfxspkg = "dados";
    $GLOBALS["dndrjkm"] = "path";
    $kanywmd = "replace";
    $GLOBALS["jgfttgnqed"] = "uid";
    $fwmzrvkciypx = "change";
    ${$fwqurcpv} = $conn->query("SELECT Name, FLAG, Payload, SNI, TlsIP, ProxyIP, ProxyPort, Info FROM payloads  WHERE id_owner='{$uid}'");
    while (${$GLOBALS["nliueplgim"]} = $sql->fetch(PDO::FETCH_ASSOC)) {
        $GLOBALS["fqomroqx"] = "payloads";
        $revvbrm = "row";
        $payloads[] = $row;
    }
    $ebjfdy = "portas";
    ${$jhuwhdoei} = $conn->query("SELECT Porta FROM portas WHERE id_owner='{$uid}'");
    while (${$GLOBALS["nliueplgim"]} = $sql->fetch(PDO::FETCH_ASSOC)) {
        $GLOBALS["snnanr"] = "portas2";
        $qwoaauwfy = "row";
        $GLOBALS["gbwkpvngw"] = "portas";
        $portas[] = $row["Porta"];
        $portas2[] = ${$GLOBALS["nliueplgim"]};
    }
    $xsyoxjkrow = "search";
    $smtxebitoyu = "uid";
    ${$GLOBALS["kemtnt"]} = json_encode(${$ebjfdy});
    ${$GLOBALS["tagiucrnpu"]} = array("[", "\"", ",", "]");
    ${$kanywmd} = array("", "", ";", "");
    ${$GLOBALS["kxvbrw"]} = str_replace(${$xsyoxjkrow}, ${$GLOBALS["zbmhvkelugcb"]}, ${$GLOBALS["vggfkoxchyc"]});
    ${$GLOBALS["mculqwxy"]} = array("Version" => getConfigUser("versao", ${$GLOBALS["mtcbmfvonp"]}), "ReleaseNotes" => getConfigUser("notas", ${$GLOBALS["mtcbmfvonp"]}), "UrlUpdate" => getConfigUser("att", ${$GLOBALS["cuazeoz"]}), "Sms" => getConfigUser("sms", ${$GLOBALS["mtcbmfvonp"]}), "CorUser" => getConfigUser("CorUser", ${$GLOBALS["mtcbmfvonp"]}), "CorGeral" => getConfigUser("CorGeral", ${$GLOBALS["pjoecceudlk"]}), "CorMenu" => getConfigUser("CorMenu", ${$GLOBALS["mtcbmfvonp"]}), "CorTexto" => getConfigUser("CorTexto", ${$GLOBALS["mtcbmfvonp"]}), "logoonline" => getConfigUser("logoonline", ${$GLOBALS["mtcbmfvonp"]}), "fundoonline" => getConfigUser("fundoonline", ${$GLOBALS["mtcbmfvonp"]}), "fundoDoLogOnline" => getConfigUser("fundoDoLogOnline", ${$GLOBALS["mvuoenpou"]}), "LogoLink" => getConfigUser("logoonline", ${$GLOBALS["rhhmzrpjopcq"]}), "BackgroundLink" => getConfigUser("fundoonline", ${$GLOBALS["mtcbmfvonp"]}), "BackgroundLink1" => getConfigUser("fundoDoLogOnline", ${$smtxebitoyu}), "BackgroundLink2" => getConfigUser("BackgroundLink2", ${$GLOBALS["cpbgjectkpl"]}), "EmailFeedback" => getConfigUser("email", ${$GLOBALS["mtcbmfvonp"]}), "UrlContato" => getConfigUser("contato", ${$ifjqphjd}), "UrlTermos" => getConfigUser("termos", ${$GLOBALS["jgfttgnqed"]}), "CheckUser" => getConfigUser("checkuser", ${$GLOBALS["mtcbmfvonp"]}), "UdpPort" => ${$fwmzrvkciypx}, "Udp" => ${$GLOBALS["xszfvgsup"]}, "Servers" => ${$GLOBALS["umfliveds"]}, "Networks" => ${$GLOBALS["ovptytvbf"]});
    ${$xjhfxspkg} = json_encode(${$qfaowd}, "JSON_U^EWWY_UV__^ISOEW");
    ${$GLOBALS["ipwlgik"]} = "update/" . getData("pasta_att", ${$obwwrvn}) . "";
    $GLOBALS["mmhxljlq"] = "config";
    if (!file_exists(${$GLOBALS["dndrjkm"]})) {
        $yqsxozmonfqf = "path";
        mkdir($path, 0777, true);
    }
    ${$GLOBALS["znvdmxz"]} = "update/" . getData("pasta_att", ${$GLOBALS["mtcbmfvonp"]}) . "/config";
    if (file_exists(${$GLOBALS["erigftvkadw"]})) {
        unlink(${$GLOBALS["znvdmxz"]});
    }
    file_put_contents(${$GLOBALS["mmhxljlq"]}, ${$ltlumpqpmbk});
    echo "<script>\n\$('#alert').html('Configura\xc3\xa7\xc3\xb5es salvas com sucesso!')\n\$('#alert').addClass('alert-success')\n";
}
echo "\n<script>\n\$('#editar_payload').on('change', function() {\ndocument.getElementById(\"form_payload\").submit();\n})\n\$('#editar_servidor').on('change', function() {\ndocument.getElementById(\"form_servidor\").submit();\n})\n\$('#editar_porta').on('change', function() {\ndocument.getElementById(\"form_porta\").submit();\n})\n</script>\n<script src=\"static/assets/js/extras.1.1.0.min.js\"></script>\n<script src=\"static/assets/js/shards-dashboards.1.1.0.min.js\"></script>\n<script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/npm/toastify-js\"></script>\n<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\" integrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\" crossorigin=\"anonymous\"></script>\n<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity \"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>\n<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js\" integrity \"sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2\" crossorigin=\"anonymous\"></script>\n<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js\"></script>\n<script src=\"https://unpkg.com/shards-ui@latest/dist/js/shards.min.js\"></script>\n<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js\"></script>\n<script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>\n<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>\n<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>\n<script src=\"https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js\"></script>\n<script>\nfunction changeInputColor(elementId, value) {\nlet color = value;\nif (value.length == 9) {\ncolor = '#' + value.substring(3, value.length);\n} else if (value.length == 6) {\ncolor = '#' + value;\n} else {\ncolor = '#FFFFFF';\n}\ndocument.getElementById(elementId).value = color;\n}\nfunction changeColor(elementId, value) {\nlet color = \$('#' + elementId).val();\nlet alpha = color.length == 9 ? color.substring(1, 3) : 'FF';\nlet colorHex = alpha + value.substring(1, value.length);\ncolor = hexToRgba(colorHex);\nalpha = parseAlpha(color);\nlet rgb = 'rgba(' + color.r + ',' + color.g + ',' + color.b + ',' + alpha + ')';\n\$('#' + elementId).val('#' + colorHex);\n\$('#' + elementId + '_transparency').css('background-color', rgb);\n}\nfunction changeInputRange(elementId, elementId2, value) {\nvar element = document.getElementById(elementId);\nvar element2 = document.getElementById(elementId2);\ncolor = element2.value\ncolor = color.replace('#', '');\nvalue = value.replace('.', '');\nif (color.length == 8) {\ncolor = color.substring(2, 8);\n} else if (color.length == 7) {\ncolor = color.substring(1, 7);\n}\nvalue = parseFloat(value) / 100;\n\$('#' + elementId2).val('#' + alphaHexColor(value) + color);\nvar rgb = 'rgba(' + hexToRgb(color).r + ',' + hexToRgb(color).g + ',' + hexToRgb(color).b + ',' + value + ')';\n\$('#' + elementId).css('background-color', rgb);\n}\nfunction alphaHexColor(number) {\nlet alphaFixed = number.toFixed(2) * 255;\nlet alphaHex = alphaFixed.toString(16);\nlet split = alphaHex.split('.');\nreturn split[0].length == 1 ? '0' + split[0] : split[0];\n}\nfunction hexToRgb(hex) {\nvar result = /^#?([a-f\\d]{2})([a-f\\d]{2})([a-f\\d]{2})\$/i.exec(hex);\nreturn result ? {\nr: parseInt(result[1], 16),\ng: parseInt(result[2], 16),\nb: parseInt(result[3], 16)\n} : null;\n}\nfunction hexToRgba(hex) {\nif (hex.length == 6) {\nhex = 'ff' + hex;\n}\nvar result = /^#?([a-f\\d]{2})([a-f\\d]{2})([a-f\\d]{2})([a-f\\d]{2})\$/i.exec(hex);\nreturn result ? {\na: parseInt(result[1], 16),\nr: parseInt(result[2], 16),\ng: parseInt(result[3], 16),\nb: parseInt(result[4], 16),\n} : null;\n}\nfunction parseAlpha(color) {\nlet alpha = color.a / 255;\nreturn alpha;\n}\nconst obj = {\napp_CorUser: 'app_CorUser_transparency',\napp_CorGeral: 'app_CorGeral_transparency',\napp_CorMenu: 'app_CorMenu_transparency',\napp_CorTexto: 'app_CorTexto_transparency',\n}\nfor (var key in obj) {\nlet element = \$('#' + key);\ncolor = element.val();\ncolor = color.replace('#', '');\ncolor = hexToRgba(color);\nlet alpha = parseAlpha(color);\nlet rgb = 'rgba(' + color.r + ',' + color.g + ',' + color.b + ',' + alpha + ')';\n\$('#' + obj[key]).css('background-color', rgb);\n}\n</script>\n";
require_once $_SERVER["DOCUMENT_ROOT"] . "/config/rodape.php";
