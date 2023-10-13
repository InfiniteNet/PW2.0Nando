<?php

$GLOBALS["hctwfnbu"] = "dia";
$GLOBALS["kebbfze"] = "tipo";
$rjnmpglgloty = "fatu";
$GLOBALS["felskydm"] = "dia";
$GLOBALS["fgvwznp"] = "preference";
$GLOBALS["ddxfkl"] = "id";
$GLOBALS["ebxhynag"] = "preference_data";
$GLOBALS["miesnqjz"] = "decricao";
$GLOBALS["bothvoknw"] = "ano";
$GLOBALS["matwxk"] = "total2";
$GLOBALS["ywqxwaqrqzg"] = "total";
$GLOBALS["efjfljxjb"] = "valorfinal";
$GLOBALS["dpoyvm"] = "valor";
$GLOBALS["jkubqalhk"] = "desconto";
$GLOBALS["khlpnrbe"] = "desconto1";
$GLOBALS["iplvfvuf"] = "conta";
$GLOBALS["cfybcvn"] = "acc";
$GLOBALS["cmkpcb"] = "servidor";
$GLOBALS["ogliuyxrpv"] = "usufatu";
$GLOBALS["dgjgsa"] = "user";
$GLOBALS["cldyktbzfm"] = "mesv";
$GLOBALS["xroevomhghh"] = "anov";
$nvzqyeswrpfk = "total";
$GLOBALS["xkrypdzb"] = "partes2";
$GLOBALS["qrmjwrmzcxq"] = "datanv";
$GLOBALS["utyemdf"] = "datavenc";
$GLOBALS["bryesxkhknf"] = "mes";
$GLOBALS["cwlcomgicf"] = "dataconvcriado";
$GLOBALS["rntkyneit"] = "partes";
$GLOBALS["dgggvjo"] = "datacriado";
$GLOBALS["lcbrupzecdrg"] = "fatu";
$GLOBALS["rpcogialu"] = "fatura_id";
$GLOBALS["xmvxybq"] = "SQLUPUser";
$GLOBALS["siubwscegq"] = "mp";
$ebecjudlnc = "ano";
$GLOBALS["csznwi"] = "SQLmp";
echo "<script type=\"text/javascript\" src=\"//resources.mlstatic.com/mptools/render.js\"></script>\n";
$GLOBALS["vriadpne"] = "usuario";
require_once "pages/system/seguranca.php";
require_once "lib/mercadopago.php";
protegePagina("user");
$hukhvpva = "fatu";
if ($usuario["ativo"] == 2) {
    echo "<script type=\"text/javascript\">";
    echo "window.location=\"home.php?page=suspenso\";";
    echo "</script>";
    exit;
}
${$GLOBALS["csznwi"]} = "select * from mercadopago";
${$GLOBALS["csznwi"]} = $conn->prepare(${$GLOBALS["csznwi"]});
$lcxntvtyo = "mp";
$GLOBALS["easmbcrpniy"] = "mp";
$SQLmp->execute();
${$GLOBALS["siubwscegq"]} = $SQLmp->fetch();
${$GLOBALS["easmbcrpniy"]} = new MP("" . ${$GLOBALS["siubwscegq"]}["CLIENT_ID"] . "", "" . ${$lcxntvtyo}["CLIENT_SECRET"] . "");
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/verfatura.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
if (isset($_GET["id"])) {
    $xplvensnxpx = "fatu";
    $GLOBALS["xvbjbpy"] = "fatu";
    $GLOBALS["dyssvy"] = "fatura_id";
    $duvsygxpbxm = "datavenc";
    $ndmwsptibg = "SQLUPUser";
    $kxhomvqflxr = "user";
    $fatura_id = $_GET["id"];
    $GLOBALS["oqoxuugejrr"] = "fatu";
    $GLOBALS["vshfynitvdl"] = "partes";
    ${$GLOBALS["xmvxybq"]} = "SELECT * FROM fatura where id='" . ${$GLOBALS["rpcogialu"]} . "'";
    $GLOBALS["mqzotsxod"] = "diav";
    $xbvngyla = "conta";
    ${$GLOBALS["xmvxybq"]} = $conn->prepare(${$ndmwsptibg});
    $jwqvfxdx = "ano";
    $GLOBALS["twnejcbxm"] = "dataconvcriado";
    $GLOBALS["otietj"] = "conta";
    $SQLUPUser->execute();
    $conta = $SQLUPUser->rowCount();
    if (${$xbvngyla} == 0) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Fatura n\xc3\xa3o encontrada!\");";
        echo "window.location=\"home.php?page=faturas/abertas\";";
        echo "</script>";
    }
    $GLOBALS["rdoymej"] = "fatu";
    $GLOBALS["znlscnrudj"] = "partes2";
    $epxpdolqakgf = "dia";
    $rgbvwxb = "id";
    $hfolwjcdurh = "fatu";
    $GLOBALS["zknotreiwtk"] = "fatu";
    ${$GLOBALS["lcbrupzecdrg"]} = $SQLUPUser->fetch();
    $afwtdfjmtrcb = "total";
    if (${$GLOBALS["lcbrupzecdrg"]}["usuario_id"] != $_SESSION["usuarioID"]) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Esta fatura n\xc3\xa3o \xc3\xa9 sua!\");";
        echo "window.location=\"home.php?page=faturas/abertas\";";
        echo "</script>";
    }
    if (${$hfolwjcdurh}["status"] == "cancelado") {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Esta fatura est\xc3\xa1 vencida ou expirada!\");";
        echo "window.location=\"home.php?page=faturas/abertas\";";
        echo "</script>";
    }
    $GLOBALS["afjkxcipavb"] = "partes";
    $GLOBALS["ohyfgby"] = "server";
    $GLOBALS["ejvibute"] = "datanv";
    $lpitotduxhhf = "total2";
    ${$GLOBALS["dgggvjo"]} = ${$GLOBALS["oqoxuugejrr"]}["data"];
    ${$GLOBALS["twnejcbxm"]} = substr(${$GLOBALS["dgggvjo"]}, 0, 10);
    $moedismbiio = "fatu";
    ${$GLOBALS["rntkyneit"]} = explode("-", ${$GLOBALS["cwlcomgicf"]});
    ${$jwqvfxdx} = ${$GLOBALS["rntkyneit"]}[0];
    ${$GLOBALS["bryesxkhknf"]} = ${$GLOBALS["afjkxcipavb"]}[1];
    $GLOBALS["ukrnxcvf"] = "server";
    $jpnptckz = "user";
    ${$epxpdolqakgf} = ${$GLOBALS["vshfynitvdl"]}[2];
    ${$GLOBALS["utyemdf"]} = ${$GLOBALS["rdoymej"]}["datavencimento"];
    ${$GLOBALS["qrmjwrmzcxq"]} = substr(${$duvsygxpbxm}, 0, 10);
    ${$GLOBALS["xkrypdzb"]} = explode("-", ${$GLOBALS["ejvibute"]});
    $kbfoqvxjtpin = "partes2";
    ${$GLOBALS["xroevomhghh"]} = ${$GLOBALS["xkrypdzb"]}[0];
    ${$GLOBALS["cldyktbzfm"]} = ${$kbfoqvxjtpin}[1];
    $quzrdybrx = "server";
    $GLOBALS["wtylekxx"] = "preference_data";
    ${$GLOBALS["mqzotsxod"]} = ${$GLOBALS["znlscnrudj"]}[2];
    ${$GLOBALS["dgjgsa"]} = "SELECT * FROM usuario where id_usuario='" . ${$moedismbiio}["usuario_id"] . "'";
    ${$kxhomvqflxr} = $conn->prepare(${$jpnptckz});
    $user->execute();
    ${$GLOBALS["ogliuyxrpv"]} = $user->fetch();
    ${$GLOBALS["ohyfgby"]} = "SELECT * FROM servidor where id_servidor='" . ${$GLOBALS["lcbrupzecdrg"]}["servidor_id"] . "'";
    ${$quzrdybrx} = $conn->prepare(${$GLOBALS["ukrnxcvf"]});
    $server->execute();
    ${$GLOBALS["cmkpcb"]} = $server->fetch();
    $diciuhgw = "decricao";
    if (${$GLOBALS["lcbrupzecdrg"]}["tipo"] == "vpn") {
        $GLOBALS["rehsclw"] = "fatu";
        ${$GLOBALS["cfybcvn"]} = "SELECT * FROM conta_ssh where id_usuario_ssh='" . $fatu["conta_id"] . "'";
        $cekyixboi = "acc";
        $acc = $conn->prepare(${$GLOBALS["cfybcvn"]});
        $acc->execute();
        ${$GLOBALS["iplvfvuf"]} = $acc->fetch();
    }
    ${$GLOBALS["khlpnrbe"]} = ${$GLOBALS["lcbrupzecdrg"]}["desconto"];
    ${$GLOBALS["jkubqalhk"]} = number_format(${$xplvensnxpx}["desconto"], 2, ",", ".");
    $cpmkzobpbs = "fatu";
    $gkgikrlo = "valorfinal";
    ${$GLOBALS["dpoyvm"]} = number_format(${$GLOBALS["lcbrupzecdrg"]}["valor"], 2, ",", ".");
    ${$afwtdfjmtrcb} = ceil(${$GLOBALS["lcbrupzecdrg"]}["valor"] * ${$GLOBALS["lcbrupzecdrg"]}["qtd"] - ${$GLOBALS["khlpnrbe"]});
    ${$GLOBALS["efjfljxjb"]} = ${$cpmkzobpbs}["valor"];
    ${$GLOBALS["ywqxwaqrqzg"]} = number_format(${$GLOBALS["ywqxwaqrqzg"]}, 2, ",", ".");
    ${$GLOBALS["lcbrupzecdrg"]}["valor"] *= ${$GLOBALS["zknotreiwtk"]}["qtd"];
    ${$GLOBALS["matwxk"]} = number_format(${$lpitotduxhhf}, 2, ",", ".");
    ${$rgbvwxb} = ${$GLOBALS["xvbjbpy"]}["id"];
    ${$GLOBALS["miesnqjz"]} = ${$GLOBALS["lcbrupzecdrg"]}["descricao"];
    ${$GLOBALS["ebxhynag"]} = array("items" => array(array("id" => ${$GLOBALS["ddxfkl"]}, "title" => "Mercado Pago Inc - Pagamentos", "currency_id" => "BRL", "picture_url" => "https://www.mercadopago.com/org-img/MP3/home/logomp3.gif", "description" => ${$diciuhgw}, "unit_price" => intval(${$gkgikrlo}), "category_id" => "Category", "quantity" => intval(${$GLOBALS["lcbrupzecdrg"]}["qtd"]))));
    $ujwlmrm = "tipo";
    ${$GLOBALS["fgvwznp"]} = $mp->create_preference(${$GLOBALS["wtylekxx"]});
    $pbrnugvtj = "fatu";
    switch ($fatu["tipo"]) {
        case "vpn":
            ${$GLOBALS["kebbfze"]} = "Acesso VPN";
            break;
        case "revenda":
            ${$GLOBALS["kebbfze"]} = "Revenda";
            break;
        default:
            ${$ujwlmrm} = "Outros";
            break;
    }
} else {
    echo "<script type=\"text/javascript\">";
    echo "alert(\"Fatura Inexistente!\");";
    echo "window.location=\"home.php?page=faturas/abertas\";";
    echo "</script>";
}
echo "\n<section class=\"card invoice-page\">\n    <div id=\"invoice-template\" class=\"card-body\">\n        <!-- Invoice Company Details -->\n        <div id=\"invoice-company-details\" class=\"row\">\n            <div class=\"col-md-6 col-sm-12 text-left\">\n                <h1>Fatura #";
echo ${$GLOBALS["lcbrupzecdrg"]}["id"];
echo " </h1>\n                <div class=\"invoice-details mt-2\">\n                    <h6>Dia do pagamento</h6>\n                    <p>";
echo ${$GLOBALS["felskydm"]};
echo "/";
echo ${$GLOBALS["bryesxkhknf"]};
$GLOBALS["yuriimm"] = "fatu";
echo "/";
echo ${$ebecjudlnc};
echo "</p>\n                </div>\n            </div>\n        </div>\n        <!--/ Invoice Company Details -->\n\n        <!-- Invoice Recipient Details -->\n        <div id=\"invoice-customer-details\" class=\"row pt-2\">\n            <div class=\"col-md-6 col-sm-12 text-left\">\n                <h5>SSHPLUS, Inc.</h5><br>\n                <p><i class=\"fad fa-calendar\"></i> ";
$GLOBALS["cuipysmvyh"] = "mes";
echo ${$GLOBALS["hctwfnbu"]};
$kllostqsu = "diav";
echo "/";
echo $mes;
$ygjljkvh = "fatu";
echo "/";
echo ${$GLOBALS["bothvoknw"]};
echo "</p>\n                <div class=\"recipient-contact pb-2\">\n                    <p>\n                        <i class=\"feather icon-mail\"></i>\n                        admin@admin\n                    </p>\n                    <p>\n                        <i class=\"feather icon-phone\"></i>\n                        +55 11 99999-9999\n                    </p>\n                </div>\n            </div>\n            <div class=\"col-md-6 col-sm-12 text-right\">\n                <h5>";
echo ${$GLOBALS["ogliuyxrpv"]}["nome"];
echo "</h5>\n                <div class=\"company-info my-2\">\n                    <p><i class=\"fad fa-calendar\"></i> ";
echo $diav;
echo "/";
echo ${$GLOBALS["cldyktbzfm"]};
echo "/";
echo ${$GLOBALS["xroevomhghh"]};
echo "</p>\n                    <p>";
if (${$GLOBALS["lcbrupzecdrg"]}["servidor_id"] != 0) {
    echo "<b>Servidor:</b> <i class=\"fa fa-calendar\"></i> ";
    echo ${$GLOBALS["cmkpcb"]}["ip_servidor"];
    echo " (";
    $lmfknfv = "servidor";
    echo $servidor["nome"];
    echo ")";
}
echo "</p>\n                    <p>";
if (${$GLOBALS["yuriimm"]}["conta_id"] != 0) {
    $bruwnru = "fatu";
    echo "</p>\n                    <p>";
    if ($fatu["tipo"] == "vpn") {
        echo "</p>\n                    <p><b>Conta:</b> <i class=\"fa fa-calendar\"></i>";
        echo ${$GLOBALS["iplvfvuf"]}["login"];
        echo "</p>\n                    ";
    }
}
echo "                </div>\n                <div class=\"company-contact\">\n                    <p>\n                        <i class=\"feather icon-mail\"></i>\n                        ";
echo ${$GLOBALS["ogliuyxrpv"]}["email"];
echo "                    </p>\n                    <p>\n                        <i class=\"feather icon-phone\"></i>\n                        ";
echo ${$GLOBALS["ogliuyxrpv"]}["celular"];
echo "                    </p>\n                </div>\n            </div>\n        </div>\n        <!--/ Invoice Recipient Details -->\n\n        <!-- Invoice Items Details -->\n        <div id=\"invoice-items-details\" class=\"pt-1 invoice-items-table\">\n            <div class=\"row\">\n                <div class=\"table-responsive col-sm-12\">\n                    <table class=\"table table-borderless\">\n                        <thead>\n                        <tr>\n                            <th class=\"text-center\">Qtd</th>\n                            <th>Produto</th>\n                            <th class=\"text-right\">Tipo</th>\n                            <th class=\"text-right\">Descri\xc3\xa7\xc3\xa3o</th>\n                            <th class=\"text-right\">Subtotal</th>\n                        </tr>\n                        </thead>\n                        <tbody>\n                        <tr>\n                            <td class=\"text-center\">";
echo ${$hukhvpva}["qtd"];
echo "</td>\n                            <td>Contas SSH</td>\n                            <td class=\"text-right\"> ";
echo ${$GLOBALS["kebbfze"]};
echo " </td>\n                            <td class=\"text-right\"> ";
echo ${$GLOBALS["lcbrupzecdrg"]}["descri\xc3\xa7\xc3\xa3o"];
echo "</td>\n                            <td class=\"text-right\"> R\$";
echo ${$nvzqyeswrpfk};
echo " </td>\n                        </tr>\n                        </tr>\n                        </tbody>\n                    </table>\n                </div>\n            </div>\n        </div>\n        \n        <div id=\"invoice-total-details\" class=\"invoice-total-table\">\n            <div class=\"row\">\n                \n                    <div class=\"table-responsive col-sm-12\">\n                        <table class=\"table table-borderless\">\n                            <tbody>\n                            <tr>\n                                <th>SUBTOTAL</th>\n                                <td>R\$";
echo ${$GLOBALS["matwxk"]};
$ebxsglgxg = "total";
echo "</td>\n                            </tr>\n                            <tr>\n                                <th>DESCONTO</th>\n                                <td>R\$";
echo ${$GLOBALS["jkubqalhk"]};
echo "</td>\n                            </tr>\n                            <tr>\n                                <th>TOTAL</th>\n                                <td>R\$";
echo $total;
echo "</td>\n                            </tr>\n                            </tbody>\n                        </table>\n                    </div>\n                \n            </div>\n        </div>\n\n        <!-- Invoice Footer -->\n        <div id=\"invoice-footer\" class=\"text-center pt-3\">\n            <p>Pague com mercado pago ou transfira o valor para a conta comercial abaixo.\n            <p class=\"bank-details mb-0\">\n                <span class=\"mr-4\"><strong>SOLICITAR AO FORNECEDOR</strong></span>\n            </p>\n        </div>\n\n        <!--/ Invoice Footer -->\n        <div class=\"divider\"></div>\n\n        <div class=\"col-sm-12 text-center\">\n            ";
if (${$ygjljkvh}["status"] == "pendente") {
    echo "            <a href=\"";
    echo ${$GLOBALS["fgvwznp"]}["response"]["init_point"];
    echo "\" name=\"MP-Checkout\" class=\"btn btn-success\"> <i class=\"fad fa-credit-card\"></i> Pagar</a>\n            <button type=\"button\" onclick=\"window.location.href='home.php?page=faturas/confirmar&id=";
    echo ${$GLOBALS["lcbrupzecdrg"]}["id"];
    echo "'\" class=\"btn btn-primary\"> <i class=\"fad fa-download\"></i> Confirmar</button>\n        </div>\n\n        <div class=\"divider\"></div>\n\n        <div class=\"col-sm-12 text-center\">\n            ";
} elseif (${$rjnmpglgloty}["status"] == "pago") {
    echo "                <h3 class=\"text-success\">Fatura Paga</h3>\n            ";
} elseif (${$GLOBALS["lcbrupzecdrg"]}["status"] == "cancelado") {
    echo "                <h3 class=\"text-danger\">Fatura Cancelada/Vencida</h3>\n            ";
}
echo "        </div>\n    </div>\n</section>\n";
