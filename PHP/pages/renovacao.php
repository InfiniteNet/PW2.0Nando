<?php

$GLOBALS["rraxtdru"] = "accessKEY";
$GLOBALS["nglksmnd"] = "avatarusu";
$GLOBALS["gveosocu"] = "valor";
$GLOBALS["oyuuwufqkm"] = "todosacessos";
$GLOBALS["fwnzscdobi"] = "master";
$GLOBALS["bslhlcpz"] = "SQLmaster";
$ctvisdeyd = "valor";
$GLOBALS["xduntgi"] = "SQLSubSSHsubs123";
$GLOBALS["cxruwdtqc"] = "subrow2";
$GLOBALS["dajmctmvxpg"] = "subrow";
$fclnde = "SQLqtdserveracessos";
$GLOBALS["xyeizlgjs"] = "SQLSubUSUARIOSsubs";
$GLOBALS["bbsfwnkproqs"] = "quantidade_ssh_subs";
$GLOBALS["svnssxidysg"] = "SQLqtdserveracessos";
$GLOBALS["oqmpvfxvt"] = "master";
$GLOBALS["dsaqqorevd"] = "todossubrevendedores";
$GLOBALS["oqchze"] = "SQLSubrevendedores";
$GLOBALS["ltueggbkehp"] = "todosacessos";
$GLOBALS["ondmphtcn"] = "tipousuario";
$GLOBALS["sxwcrey"] = "dataviewpos";
$GLOBALS["dakeqgoqucn"] = "dataviewatual";
$GLOBALS["cwudai"] = "datar";
$GLOBALS["gxfrjgwifq"] = "usuario";
$GLOBALS["vwqbexujs"] = "data_atual";
$esryqpep = "usuario";
$iwuremoe = "SQLqtdserveracessos";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/input.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
$lvuhemxw = "usuario";
$ymvriydcu = "SQLmaster";
protegePagina("user");
$pnmxpeionym = "usuario";
if (${$esryqpep}["validade"] < ${$GLOBALS["vwqbexujs"]}) {
    $GLOBALS["bgqsrmgr"] = "dataviewatual";
    $GLOBALS["wldjgwvf"] = "datar";
    $dataviewatual = date("d/m/Y", strtotime(${$GLOBALS["gxfrjgwifq"]}["validade"]));
    $GLOBALS["ebhoxwfumikd"] = "dataviewpos";
    $datar = date("Y-m-d H:i:s", strtotime("+31 days", strtotime(${$GLOBALS["vwqbexujs"]})));
    $dataviewpos = date("d/m/Y", strtotime(${$GLOBALS["cwudai"]}));
} else {
    $ooekmqyyltue = "datar";
    $GLOBALS["ervfzcrfq"] = "usuario";
    $GLOBALS["sffvysdg"] = "usuario";
    ${$GLOBALS["dakeqgoqucn"]} = date("d/m/Y", strtotime($usuario["validade"]));
    ${$ooekmqyyltue} = date("Y-m-d H:i:s", strtotime("+31 days", strtotime(${$GLOBALS["ervfzcrfq"]}["validade"])));
    ${$GLOBALS["sxwcrey"]} = date("d/m/Y", strtotime(${$GLOBALS["cwudai"]}));
}
$krbxeuvywr = "todosacessos";
$GLOBALS["alfgbhdpxl"] = "usuario";
switch (${$pnmxpeionym}["tipo"]) {
    case "vpn":
        ${$GLOBALS["ondmphtcn"]} = "Usu\xc3\xa1rio VPN";
        break;
    case "revenda":
        ${$GLOBALS["ondmphtcn"]} = "Revendedor";
        break;
    default:
        ${$GLOBALS["ondmphtcn"]} = "erro";
        break;
}
if (${$GLOBALS["gxfrjgwifq"]}["tipo"] == "revenda" && ${$lvuhemxw}["subrevenda"] == "sim") {
    $GLOBALS["torkjjud"] = "tipousuario";
    $tipousuario = "Sub-Revendedor";
}
if (${$GLOBALS["gxfrjgwifq"]}["tipo"] == "revenda") {
    ${$GLOBALS["oqchze"]} = "select * from usuario WHERE id_mestre = '" . $_SESSION["usuarioID"] . "' and tipo='revenda'";
    $GLOBALS["zxyzdeqf"] = "SQLSubrevendedores";
    $SQLSubrevendedores = $conn->prepare(${$GLOBALS["oqchze"]});
    $SQLSubrevendedores->execute();
    ${$GLOBALS["dsaqqorevd"]} = $SQLSubrevendedores->rowCount();
    if ($SQLSubrevendedores->rowCount() > 0) {
        $GLOBALS["yprgfkkgbg"] = "subrow";
        while (${$GLOBALS["yprgfkkgbg"]} = $SQLSubrevendedores->fetch()) {
            $qwxhwljf = "SQLSubSSHsubs";
            $rgdsdlqyykb = "subrow";
            $GLOBALS["ovafsduiuu"] = "quantidade_ssh_subs";
            $xzhbjimcwyg = "sshsubs";
            $quantidade_ssh_subs = 0;
            $ikixgckyuvg = "SQLSubSSHsubs";
            $wqwsueyz = "SQLSubSSHsubs";
            $SQLSubSSHsubs = "select * from conta_ssh WHERE id_usuario = '" . $subrow["id_usuario"] . "'  ";
            $SQLSubSSHsubs = $conn->prepare($SQLSubSSHsubs);
            $SQLSubSSHsubs->execute();
            ${$GLOBALS["bbsfwnkproqs"]} += $SQLSubSSHsubs->rowCount();
            ${$xzhbjimcwyg} = $SQLSubSSHsubs->rowCount();
            ${$GLOBALS["xyeizlgjs"]} = "select * from usuario WHERE id_mestre = '" . ${$GLOBALS["dajmctmvxpg"]}["id_usuario"] . "'  ";
            $meoyxmt = "sshsubs132";
            ${$GLOBALS["xyeizlgjs"]} = $conn->prepare(${$GLOBALS["xyeizlgjs"]});
            $imdybjvvzg = "quantidade_USUARIOS_subs";
            $SQLSubUSUARIOSsubs->execute();
            $quantidade_USUARIOS_subs += $SQLSubUSUARIOSsubs->rowCount();
            ${$meoyxmt} = $SQLSubUSUARIOSsubs->rowCount();
            if ($SQLSubUSUARIOSsubs->rowCount() > 0) {
                while (${$GLOBALS["cxruwdtqc"]} = $SQLSubUSUARIOSsubs->fetch()) {
                    $GLOBALS["idjcklp"] = "subrow2";
                    $GLOBALS["edkcosjjn"] = "SQLSubSSHsubs123";
                    $SQLSubSSHsubs123 = "select * from conta_ssh WHERE id_usuario = '" . $subrow2["id_usuario"] . "'  ";
                    ${$GLOBALS["xduntgi"]} = $conn->prepare(${$GLOBALS["xduntgi"]});
                    $SQLSubSSHsubs123->execute();
                    ${$GLOBALS["bbsfwnkproqs"]} += $SQLSubSSHsubs123->rowCount();
                }
            }
        }
    }
}
$sbfrijppbd = "usuario";
$uopgyja = "ipdominio";
${$ymvriydcu} = "select * from usuario WHERE id_usuario = '" . ${$GLOBALS["gxfrjgwifq"]}["id_mestre"] . "'";
${$GLOBALS["bslhlcpz"]} = $conn->prepare(${$GLOBALS["bslhlcpz"]});
$SQLmaster->execute();
${$GLOBALS["fwnzscdobi"]} = $SQLmaster->fetch();
$oizjxwif = "SQLqtdserveracessos";
${$GLOBALS["ltueggbkehp"]} = 0;
${$oizjxwif} = "SELECT sum(qtd) AS limites FROM acesso_servidor where id_usuario = '" . $_SESSION["usuarioID"] . "'";
$GLOBALS["pynwkomzen"] = "SQLqtdserveracessos";
${$fclnde} = $conn->prepare($SQLqtdserveracessos);
$SQLqtdserveracessos->execute();
${$GLOBALS["svnssxidysg"]} = $SQLqtdserveracessos->fetch();
$GLOBALS["mstiqmjwisy"] = "usuario";
${$GLOBALS["oyuuwufqkm"]} += ${$iwuremoe}["limites"];
${$krbxeuvywr} *= ${$GLOBALS["mstiqmjwisy"]}["valorrevenda"];
$hygotogxi = "usuario";
$_SESSION["valor"] = ${$ctvisdeyd};
$GLOBALS["nljrnkblfj"] = "valor";
$_SESSION["data"] = ${$GLOBALS["cwudai"]};
$_SESSION["id_mestre"] = ${$GLOBALS["alfgbhdpxl"]}["id_mestre"];
echo "<!-- Modal -->\n<div class=\"row\">\n<div class=\"col-12\">\n<!-- Profile Image -->\n<div class=\"card border-primary\">\n<div class=\"card-body little-profile text-center\">\n<div class=\"pro-img\"><img class=\"img-circle\" src=\"../app-assets/images/avatars/";
echo ${$GLOBALS["nglksmnd"]};
echo "\" height=\"80\" width=\"80\" alt=\"user\" /></div>\n<br>\n<h3 class=\"profile-username text-center\">";
echo $usuario["nome"];
echo "</h3>\n<p class=\"text-muted text-center\"><span class=\"badge badge-light-primary profile-badge\">";
echo ${$GLOBALS["ondmphtcn"]};
echo "</span></p>\n<br>\n<div class=\"card-body\">\n<h2 class=\"card-text mb-1 text-center text-danger\">\xf0\x9f\x91\x8b Ol\xc3\xa1, vamos renovar?</h2><br>\n<h4 class=\"card-text mb-2 text-center text-info\">LIMITE TOTAL: <span class=\"badge badge-light-warning\">";
echo ${$GLOBALS["oyuuwufqkm"]};
echo "</span></h4>\n<h4 class=\"card-text mb-2 text-center text-info\">VALOR UNIT\xc3\x81RIO: <span class=\"badge badge-light-warning\">R\$ ";
echo number_format(${$GLOBALS["gxfrjgwifq"]}["valorrevenda"], 2, ",", ".");
echo "</span></h4><h4 class=\"card-text mb-2 text-center text-info\">VALOR TOTAL: <span class=\"badge badge-light-warning\">R\$ ";
echo number_format(${$GLOBALS["gveosocu"]}, 2, ",", ".");
echo "</span></h4>\n<h4 class=\"card-text mb-2 text-center text-info\">VALIDADE ANTES: <span class=\"badge badge-light-warning\">";
echo ${$GLOBALS["dakeqgoqucn"]};
echo "</span></h4>\n<h4 class=\"card-text mb-2 text-center text-info\">VALIDADE DEPOIS: <span class=\"badge badge-light-warning\">";
echo ${$GLOBALS["sxwcrey"]};
echo "</span></h4><br>\n<div class=\"row\">\n<form role=\"form\" id=\"form\" name=\"form\" action=\"pages/processando.php\" method=\"post\">\n<fieldset class=\"form-label-group form-group position-relative has-icon-left\">\n<div class=\"col-12\">\n<div class=\"mb-1 text-center\">\n<label class=\"form-label\" for=\"email-id-column\"><a class=\"badge badge-light-success\">DIGITE O CPF</a></label>\n<div class=\"input-group input-group-merge\">\n<input type=\"text\" minlength=\"11\" maxlength=\"11\" name=\"cpf\" id=\"cpf\" class=\"form-control text-center\" placeholder=\"Favor digitar s\xc3\xb3 n\xc3\xbameros...\" value=\"\" required=\"\"/>\n</div>\n</div>\n</div>\n<input type=\"hidden\" class=\"form-control\" id=\"segmax\" name=\"segmax\" value=\"";
echo ${$GLOBALS["rraxtdru"]};
echo "\">\n<input type=\"hidden\" class=\"form-control\" id=\"ipmax\" name=\"ipmax\" value=\"";
echo ${$uopgyja};
echo "\">\n<input type=\"hidden\" class=\"form-control\" id=\"apimp\" name=\"apimp\" value=\"";
echo ${$GLOBALS["oqmpvfxvt"]}["accesstoken"];
echo "\">\n<input type=\"hidden\" class=\"form-control\" id=\"nome\" name=\"nome\" value=\"";
echo ${$sbfrijppbd}["nome"];
echo "\">\n<input type=\"hidden\" class=\"form-control\" id=\"login\" name=\"login\" value=\"";
echo ${$GLOBALS["gxfrjgwifq"]}["login"];
echo "\">\n<input type=\"hidden\" class=\"form-control\" id=\"email\" name=\"email\" value=\"";
echo ${$GLOBALS["gxfrjgwifq"]}["email"];
echo "\">\n<input type=\"hidden\" class=\"form-control\" id=\"valortotal\" name=\"valortotal\" value=\"";
echo $valor;
echo "\">\n</fieldset><br>\n<button type=\"submit\" name=\"botaopagar\" class=\"btn btn-success\"><i data-feather=\"refresh-cw\"></i><b> RENOVAR</b></button><br>\n</form>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n";
