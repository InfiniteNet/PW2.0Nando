<?php

$GLOBALS["lpvjgsfmde"] = "preference";
$GLOBALS["ppfpirrpm"] = "total1";
$GLOBALS["uhltrrcbv"] = "servidor";
$GLOBALS["gniooycosxl"] = "anov";
$GLOBALS["olxgkwnoit"] = "tipo";
$GLOBALS["bwvrhppu"] = "eu";
$GLOBALS["lfdwfib"] = "preference_data";
$GLOBALS["djsotfegyqs"] = "valorfinal";
$GLOBALS["ebzmmxp"] = "decricao";
$GLOBALS["mirqpd"] = "total2";
$GLOBALS["phwsoicmc"] = "total";
$GLOBALS["bjloibnmk"] = "valor";
$GLOBALS["taolpb"] = "desconto";
$GLOBALS["uogglcxpjk"] = "conta";
$GLOBALS["eozywyr"] = "acc";
$GLOBALS["oehcgnlfww"] = "server";
$GLOBALS["ppaluxvjb"] = "usufatu";
$tqjsninw = "eu";
$GLOBALS["yehidouiwfo"] = "user";
$GLOBALS["tbxxzpfg"] = "diav";
$GLOBALS["wpkxgpnwtyb"] = "diav";
$GLOBALS["yktdmkrq"] = "partes2";
$GLOBALS["svjimjyqkjtb"] = "datavenc";
$GLOBALS["llasjjga"] = "dataconvcriado";
$GLOBALS["mnlgqsudl"] = "datacriado";
$GLOBALS["uyjcis"] = "fatu";
$GLOBALS["yqbjyck"] = "SQLUPUser";
$GLOBALS["tliakwimifb"] = "usufatu";
$GLOBALS["axulpfdz"] = "eu";
$GLOBALS["btwlrvqpm"] = "fatura_id";
$GLOBALS["hspsoazlvdcw"] = "SQLmp";
$GLOBALS["rhepyxlvh"] = "mp";
$GLOBALS["uiragqkjpvy"] = "empresa";
echo "<script type=\"text/javascript\" src=\"//resources.mlstatic.com/mptools/render.js\"></script>\n";
$GLOBALS["jllnyrwvqs"] = "total";
$GLOBALS["rovdjrap"] = "SQLmp";
$GLOBALS["htmevybnax"] = "fatu";
$GLOBALS["hluvursbtcp"] = "fatu";
$qkoevwak = "mp";
require_once "pages/system/seguranca.php";
$sbxnbdjwt = "mp";
require_once "lib/mercadopago.php";
protegePagina("user");
$vuqnwykjj = "usufatu";
$GLOBALS["hvivzap"] = "mp";
$mpeejj = "usuario";
$fnmygn = "SQLmp";
if ($usuario["ativo"] == 2) {
    echo "<script type=\"text/javascript\">";
    echo "window.location=\"home.php?page=suspenso\";";
    echo "</script>";
    exit;
}
${$fnmygn} = "select * from mercadopago";
${$GLOBALS["hspsoazlvdcw"]} = $conn->prepare(${$GLOBALS["rovdjrap"]});
$SQLmp->execute();
$dgywsbcjf = "mesv";
${$GLOBALS["hvivzap"]} = $SQLmp->fetch();
${$qkoevwak} = new MP("" . ${$sbxnbdjwt}["CLIENT_ID"] . "", "" . ${$GLOBALS["rhepyxlvh"]}["CLIENT_SECRET"] . "");
$GLOBALS["lfibliqv"] = "eu";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/verfatura.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
$GLOBALS["tifnliaotag"] = "desconto";
if (isset($_GET["id"])) {
    $GLOBALS["kobodumr"] = "total";
    $GLOBALS["quxfujowrfx"] = "fatu";
    $GLOBALS["ovsgyp"] = "SQLUPUser";
    $crrurwuco = "fatu";
    $GLOBALS["foyqduxekh"] = "dataconvcriado";
    $GLOBALS["jzwulvjl"] = "anov";
    $GLOBALS["jorvuhnzefcr"] = "fatura_id";
    $GLOBALS["neylefirba"] = "fatu";
    $papmcieydfwj = "partes";
    $GLOBALS["ehrnkpxm"] = "valorfinal";
    $ffwqtprphy = "mes";
    $GLOBALS["bawlpymvmkt"] = "datavenc";
    $ntrhgqteoes = "fatu";
    $iejrxcanfoj = "servidor";
    $GLOBALS["dyjcstho"] = "fatu";
    $GLOBALS["kgkklivksz"] = "fatu";
    $GLOBALS["hiqbzer"] = "datanv";
    $GLOBALS["fvyixyzq"] = "conta";
    $GLOBALS["vmihbpibet"] = "dia";
    $GLOBALS["prezuqw"] = "datacriado";
    $GLOBALS["emljiedcshu"] = "ano";
    $GLOBALS["xivunnu"] = "partes";
    ${$GLOBALS["btwlrvqpm"]} = $_GET["id"];
    $GLOBALS["nnesylncepz"] = "mesv";
    $xglozwiocfc = "decricao";
    $GLOBALS["hoxjfvxxf"] = "conta";
    $GLOBALS["wixdpsecen"] = "desconto1";
    $GLOBALS["vwblbhshn"] = "fatu";
    $GLOBALS["evkggbi"] = "partes";
    $GLOBALS["lgerqvvwnv"] = "fatu";
    $oksbxtfxzk = "server";
    $jwihzeuxeeuu = "fatu";
    ${$GLOBALS["ovsgyp"]} = "SELECT * FROM fatura where id='" . ${$GLOBALS["jorvuhnzefcr"]} . "'";
    ${$GLOBALS["yqbjyck"]} = $conn->prepare(${$GLOBALS["yqbjyck"]});
    $SQLUPUser->execute();
    ${$GLOBALS["hoxjfvxxf"]} = $SQLUPUser->rowCount();
    $ktvyefv = "fatu";
    $GLOBALS["mjegnh"] = "total";
    $txhebnyglhq = "partes";
    if (${$GLOBALS["fvyixyzq"]} == 0) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Fatura n\xc3\xa3o encontrada!\");";
        echo "window.location=\"home.php?page=faturas/abertas\";";
        echo "</script>";
    }
    ${$GLOBALS["vwblbhshn"]} = $SQLUPUser->fetch();
    if (${$ktvyefv}["usuario_id"] != $_SESSION["usuarioID"]) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Esta fatura n\xc3\xa3o \xc3\xa9 sua!\");";
        echo "window.location=\"home.php?page=faturas/abertas\";";
        echo "</script>";
    }
    if (${$GLOBALS["kgkklivksz"]}["status"] == "cancelado") {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Esta fatura est\xc3\xa1 vencida ou expirada!\");";
        echo "window.location=\"home.php?page=faturas/abertas\";";
        echo "</script>";
    }
    ${$GLOBALS["prezuqw"]} = ${$GLOBALS["uyjcis"]}["data"];
    ${$GLOBALS["foyqduxekh"]} = substr(${$GLOBALS["mnlgqsudl"]}, 0, 10);
    ${$GLOBALS["xivunnu"]} = explode("-", ${$GLOBALS["llasjjga"]});
    ${$GLOBALS["emljiedcshu"]} = ${$txhebnyglhq}[0];
    $ytywkmnkbks = "fatu";
    ${$ffwqtprphy} = ${$papmcieydfwj}[1];
    $sibsphd = "user";
    $mlpibdh = "user";
    $GLOBALS["twavxf"] = "preference";
    $ronrtlgj = "fatu";
    $leofqcpfb = "id";
    ${$GLOBALS["vmihbpibet"]} = ${$GLOBALS["evkggbi"]}[2];
    $sarxdsm = "datanv";
    ${$GLOBALS["bawlpymvmkt"]} = ${$GLOBALS["uyjcis"]}["datavencimento"];
    ${$GLOBALS["hiqbzer"]} = substr(${$GLOBALS["svjimjyqkjtb"]}, 0, 10);
    ${$GLOBALS["yktdmkrq"]} = explode("-", ${$sarxdsm});
    ${$GLOBALS["jzwulvjl"]} = ${$GLOBALS["yktdmkrq"]}[0];
    ${$GLOBALS["nnesylncepz"]} = ${$GLOBALS["yktdmkrq"]}[1];
    $GLOBALS["mqihbdoyig"] = "id";
    $GLOBALS["fgqugp"] = "desconto1";
    ${$GLOBALS["tbxxzpfg"]} = ${$GLOBALS["yktdmkrq"]}[2];
    ${$mlpibdh} = "SELECT * FROM usuario where id_usuario='" . ${$crrurwuco}["usuario_id"] . "'";
    ${$GLOBALS["yehidouiwfo"]} = $conn->prepare(${$sibsphd});
    $user->execute();
    ${$GLOBALS["ppaluxvjb"]} = $user->fetch();
    ${$GLOBALS["oehcgnlfww"]} = "SELECT * FROM servidor where id_servidor='" . ${$GLOBALS["lgerqvvwnv"]}["servidor_id"] . "'";
    ${$GLOBALS["oehcgnlfww"]} = $conn->prepare(${$oksbxtfxzk});
    $server->execute();
    $ixwgpgmqk = "preference_data";
    ${$iejrxcanfoj} = $server->fetch();
    if (${$GLOBALS["uyjcis"]}["tipo"] == "vpn") {
        $fvxwooi = "fatu";
        ${$GLOBALS["eozywyr"]} = "SELECT * FROM conta_ssh where id_usuario_ssh='" . $fatu["conta_id"] . "'";
        $GLOBALS["dhlkweg"] = "acc";
        ${$GLOBALS["eozywyr"]} = $conn->prepare($acc);
        $acc->execute();
        ${$GLOBALS["uogglcxpjk"]} = $acc->fetch();
    }
    $oqoenr = "tipo";
    ${$GLOBALS["wixdpsecen"]} = ${$jwihzeuxeeuu}["desconto"];
    ${$GLOBALS["taolpb"]} = number_format(${$GLOBALS["uyjcis"]}["desconto"], 2, ",", ".");
    ${$GLOBALS["bjloibnmk"]} = number_format(${$GLOBALS["uyjcis"]}["valor"], 2, ",", ".");
    ${$GLOBALS["kobodumr"]} = ceil(${$GLOBALS["uyjcis"]}["valor"] * ${$GLOBALS["quxfujowrfx"]}["qtd"] - ${$GLOBALS["fgqugp"]});
    ${$GLOBALS["ehrnkpxm"]} = ${$GLOBALS["neylefirba"]}["valor"];
    ${$GLOBALS["phwsoicmc"]} = number_format(${$GLOBALS["mjegnh"]}, 2, ",", ".");
    ${$GLOBALS["dyjcstho"]}["valor"] *= ${$ytywkmnkbks}["qtd"];
    ${$GLOBALS["mirqpd"]} = number_format(${$GLOBALS["mirqpd"]}, 2, ",", ".");
    ${$GLOBALS["mqihbdoyig"]} = ${$GLOBALS["uyjcis"]}["id"];
    ${$GLOBALS["ebzmmxp"]} = ${$GLOBALS["uyjcis"]}["descricao"];
    ${$ixwgpgmqk} = array("items" => array(array("id" => ${$leofqcpfb}, "title" => "Mercado Pago Inc - Pagamentos", "currency_id" => "BRL", "picture_url" => "https://www.mercadopago.com/org-img/MP3/home/logomp3.gif", "description" => ${$xglozwiocfc}, "unit_price" => intval(${$GLOBALS["djsotfegyqs"]}), "category_id" => "Category", "quantity" => intval(${$ronrtlgj}["qtd"]))));
    ${$GLOBALS["twavxf"]} = $mp->create_preference(${$GLOBALS["lfdwfib"]});
    switch (${$ntrhgqteoes}["tipo"]) {
        case "vpn":
            ${$oqoenr} = "Acesso VPN";
            break;
        case "revenda":
            ${$GLOBALS["olxgkwnoit"]} = "Revenda";
            break;
        default:
            ${$GLOBALS["olxgkwnoit"]} = "Outros";
            break;
    }
} else {
    echo "<script type=\"text/javascript\">";
    echo "alert(\"Fatura Inexistente!\");";
    echo "window.location=\"home.php?page=faturas/abertas\";";
    echo "</script>";
}
echo "<section class=\"card invoice-page\">\n    <div id=\"invoice-template\" class=\"card-body\">\n        <!-- Invoice Company Details -->\n        <div id=\"invoice-company-details\" class=\"row\">\n            <div class=\"col-md-6 col-sm-12 text-left pt-1\">\n                <div class=\"media pt-1\">\n                    <img src=\"../app-assets/images/logo/logo.png\" alt=\"company logo\" class=\"\" />\n                </div>\n            </div>\n            <div class=\"col-md-6 col-sm-12 text-right\">\n                <h1>Invoice</h1>\n                <div class=\"invoice-details mt-2\">\n                    <h6>INVOICE NO.</h6>\n                    <p>001/2019</p>\n                    <h6 class=\"mt-2\">INVOICE DATE</h6>\n                    <p>10 Dec 2018</p>\n                </div>\n            </div>\n        </div>\n        <!--/ Invoice Company Details -->\n\n        <!-- Invoice Recipient Details -->\n        <div id=\"invoice-customer-details\" class=\"row pt-2\">\n            <div class=\"col-md-6 col-sm-12 text-left\">\n                <h5>";
echo ${$GLOBALS["uiragqkjpvy"]};
echo ", Inc.</h5>\n                <div class=\"recipient-info my-2\">\n                    <p>Telefone: ";
echo formataTelefone(${$GLOBALS["lfibliqv"]}["celular"]);
echo "                    <p>Email: ";
$mitqgsudlfw = "fatu";
echo ${$GLOBALS["bwvrhppu"]}["email"];
echo "</p>\n                    <p>Desenvolvedores <a href=\"https://t.me/crazy_vpn\">Crazy</a> e <a href=\"https://t.me/\">Orlando Souza</a> </p>\n                </div>\n                <div class=\"recipient-contact pb-2\">\n                    <p>\n                        <i class=\"feather icon-mail\"></i>\n                        ";
echo ${$GLOBALS["axulpfdz"]}["email"];
echo "                    </p>\n                    <p>\n                        <i class=\"feather icon-phone\"></i>\n                        ";
echo formataTelefone(${$tqjsninw}["celular"]);
echo "                    </p>\n                </div>\n            </div>\n            <div class=\"col-md-6 col-sm-12 text-right\">\n                <h5>";
echo ${$GLOBALS["tliakwimifb"]}["nome"];
echo "</h5>\n                <div class=\"company-info my-2\">\n                    <p class=\"m-t-30\"><b>Fatura #</b> <i class=\"fa fa-calendar\"></i> ";
echo ${$GLOBALS["uyjcis"]}["id"];
echo "</p>\n                    <p><b>Vencimento:</b> ";
echo ${$GLOBALS["wpkxgpnwtyb"]};
echo "/";
echo ${$dgywsbcjf};
echo "/";
echo ${$GLOBALS["gniooycosxl"]};
echo "</p>\n                    <p>";
if (${$GLOBALS["uyjcis"]}["servidor_id"] != 0) {
    echo "<b>Servidor:</b> <i class=\"fa fa-calendar\"></i> ";
    echo ${$GLOBALS["uhltrrcbv"]}["ip_servidor"];
    echo " (";
    echo ${$GLOBALS["uhltrrcbv"]}["nome"];
    echo ")";
}
echo "</p>\n                    <p>";
if (${$GLOBALS["htmevybnax"]}["conta_id"] != 0) {
    if (${$GLOBALS["uyjcis"]}["tipo"] == "vpn") {
        echo "</p>\n                    <p><b>Conta:</b> <i class=\"fa fa-calendar\"></i>";
        echo ${$GLOBALS["uogglcxpjk"]}["login"];
        echo "</p>\n                    ";
    }
}
echo "                </div>\n                <div class=\"company-contact\">\n                    <p>\n                        <i class=\"feather icon-mail\"></i>\n                        ";
echo ${$GLOBALS["ppaluxvjb"]}["email"];
echo "                    </p>\n                    <p>\n                        <i class=\"feather icon-phone\"></i>\n                        ";
echo formataTelefone(${$vuqnwykjj}["celular"]);
echo "                    </p>\n                </div>\n            </div>\n        </div>\n        <!--/ Invoice Recipient Details -->\n\n        <!-- Invoice Items Details -->\n        <div id=\"invoice-items-details\" class=\"pt-1 invoice-items-table\">\n            <div class=\"row\">\n                <div class=\"table-responsive col-sm-12\">\n                    <table class=\"table table-borderless\">\n                        <thead>\n                        <tr>\n                            <th class=\"text-center\">Qtd</th>\n                            <th>Produto</th>\n                            <th class=\"text-right\">Tipo</th>\n                            <th class=\"text-right\">Descri\xc3\xa7\xc3\xa3o</th>\n                            <th class=\"text-right\">Subtotal</th>\n                        </tr>\n                        </thead>\n                        <tbody>\n                        <tr>\n                            <td class=\"text-center\">";
echo ${$mitqgsudlfw}["qtd"];
echo "</td>\n                            <td>Contas SSH</td>\n                            <td class=\"text-right\"> ";
echo ${$GLOBALS["olxgkwnoit"]};
echo " </td>\n                            <td class=\"text-right\"> ";
echo ${$GLOBALS["uyjcis"]}["descri\xc3\xa7\xc3\xa3o"];
echo "</td>\n                            <td class=\"text-right\"> R\$";
echo ${$GLOBALS["phwsoicmc"]};
echo " </td>\n                        </tr>\n                        </tbody>\n                    </table>\n                </div>\n            </div>\n        </div>\n        <div id=\"invoice-total-details\" class=\"invoice-total-table\">\n            <div class=\"row\">\n                <div class=\"col-7 offset-5\">\n                    <div class=\"table-responsive\">\n                        <table class=\"table table-borderless\">\n                            <tbody>\n                            <tr>\n                                <th>SUBTOTAL</th>\n                                <td>R\$: ";
echo ${$GLOBALS["ppfpirrpm"]};
echo "</td>\n                            </tr>\n                            <tr>\n                                <th>DESCONTO</th>\n                                <td>R\$: ";
echo ${$GLOBALS["tifnliaotag"]};
echo "</td>\n                            </tr>\n                            <tr>\n                                <th>TOTAL</th>\n                                <td>R\$: ";
echo ${$GLOBALS["jllnyrwvqs"]};
echo "</td>\n                            </tr>\n                            </tbody>\n                        </table>\n                    </div>\n                </div>\n            </div>\n        </div>\n\n        <!-- Invoice Footer -->\n        <div id=\"invoice-footer\" class=\"text-right pt-3\">\n            <div class=\"divider\"></div>\n\n            <div class=\"col-sm-12 text-center\">\n                ";
if (${$GLOBALS["hluvursbtcp"]}["status"] == "pendente") {
    echo "                <a href=\"";
    $soquwbj = "fatu";
    echo ${$GLOBALS["lpvjgsfmde"]}["response"]["init_point"];
    echo "\" name=\"MP-Checkout\" class=\"btn btn-success\"> <i class=\"fad fa-credit-card\"></i> Pagar</a>\n                <button type=\"button\" onclick=\"window.location.href='home.php?page=faturasclientes/minhas/confirmar&id=";
    echo $fatu["id"];
    echo "\" class=\"btn btn-primary\"> <i class=\"fad fa-download\"></i> Confirmar</button>\n            </div>\n\n            <div class=\"divider\"></div>\n\n            <div class=\"col-sm-12 text-center\">\n                ";
} elseif (${$GLOBALS["uyjcis"]}["status"] == "pago") {
    echo "                    <h3 class=\"text-success\">Fatura Paga</h3>\n                ";
} elseif (${$GLOBALS["uyjcis"]}["status"] == "cancelado") {
    echo "                    <h3 class=\"text-danger\">Fatura Cancelada/Vencida</h3>\n                ";
}
echo "            </div>\n        </div>\n        <!--/ Invoice Footer -->\n\n    </div>\n</section>\n";
