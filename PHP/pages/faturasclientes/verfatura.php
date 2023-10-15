<?php

$GLOBALS["oavmvzp"] = "desconto";
$GLOBALS["tghjpqxx"] = "eu";
$GLOBALS["epcnuncankg"] = "empresa";
$GLOBALS["cczzijrni"] = "mesv";
$GLOBALS["efgsipj"] = "diav";
$GLOBALS["ophyladcr"] = "tipo";
$GLOBALS["bbdgrhuhwvcx"] = "preference_data";
$GLOBALS["nttiyxig"] = "decricao";
$GLOBALS["nppwqwxcd"] = "total2";
$GLOBALS["xreyrq"] = "valorfinal";
$GLOBALS["dkndugwyku"] = "desconto1";
$GLOBALS["yqgevbmieyu"] = "fatu";
$GLOBALS["hjmvejpqqqq"] = "total";
$GLOBALS["rrddzpggjb"] = "valor";
$GLOBALS["arwkumegmxg"] = "conta";
$GLOBALS["nwkpyjho"] = "acc";
$GLOBALS["fvgfoqygte"] = "usufatu";
$GLOBALS["advijhblasf"] = "user";
$GLOBALS["ssvfdhlmej"] = "anov";
$GLOBALS["bvfljed"] = "partes2";
$GLOBALS["bigjoxvuunk"] = "datanv";
$GLOBALS["olmgituyim"] = "datavenc";
$GLOBALS["lmoeohzdvn"] = "mes";
$GLOBALS["yhrydvf"] = "ano";
$GLOBALS["xepcqzs"] = "dataconvcriado";
$GLOBALS["vitqsok"] = "partes";
$GLOBALS["fdltycs"] = "datacriado";
$GLOBALS["jdyppulfn"] = "fatu";
$GLOBALS["wtjjqsnparm"] = "mp";
$GLOBALS["cjmbcj"] = "usuario";
$GLOBALS["jdkmbj"] = "SQLmp";
echo "<script type=\"text/javascript\" src=\"//resources.mlstatic.com/mptools/render.js\"></script>\n";
$GLOBALS["oefsfjho"] = "SQLmp";
$GLOBALS["nezpzudgvp"] = "mp";
$GLOBALS["pvvdael"] = "mp";
$GLOBALS["vrlyomzqkjq"] = "SQLmp";
require_once "pages/system/seguranca.php";
$hhovyngd = "fatu";
require_once "lib/mercadopago.php";
protegePagina("user");
if ($usuario["ativo"] == 2) {
    echo "<script type=\"text/javascript\">";
    echo "window.location=\"home.php?page=suspenso\";";
    echo "</script>";
    exit;
}
${$GLOBALS["vrlyomzqkjq"]} = "select * from mercadopago";
$GLOBALS["khpeyqtpbhy"] = "usufatu";
${$GLOBALS["jdkmbj"]} = $conn->prepare(${$GLOBALS["oefsfjho"]});
$xargvhrfe = "total";
$SQLmp->execute();
${$GLOBALS["wtjjqsnparm"]} = $SQLmp->fetch();
${$GLOBALS["pvvdael"]} = new MP("" . ${$GLOBALS["wtjjqsnparm"]}["CLIENT_ID"] . "", "" . ${$GLOBALS["nezpzudgvp"]}["CLIENT_SECRET"] . "");
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/verfatura.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
$bitbpagbrem = "anov";
$fxsgkqgvsanm = "tipo";
if (isset($_GET["id"])) {
    $GLOBALS["xbeehnybx"] = "dataconvcriado";
    $uwxidumzhqeg = "mesv";
    $GLOBALS["uisrsmsve"] = "dia";
    $verubpfklte = "fatu";
    $GLOBALS["znqhtcugpfd"] = "desconto";
    $GLOBALS["orpvbuh"] = "fatu";
    $qrpbdym = "SQLUPUser";
    $GLOBALS["cfefddebq"] = "partes2";
    $otokrq = "conta";
    $rpvhcpfslk = "id";
    $GLOBALS["iliyqpsim"] = "SQLUPUser";
    $xiuzwgadtu = "fatu";
    $GLOBALS["lyvcgxni"] = "SQLUPUser";
    $GLOBALS["jibgvyk"] = "fatura_id";
    $jysmlbewpl = "fatu";
    $fatura_id = $_GET["id"];
    $blcnhokbe = "fatura_id";
    $GLOBALS["cuvcxhtbfnqw"] = "preference";
    $GLOBALS["foejhetnty"] = "preference_data";
    $fcgfhnbphi = "user";
    $joxgypsgoek = "datacriado";
    $SQLUPUser = "SELECT * FROM fatura where id='" . $fatura_id . "'";
    $SQLUPUser = $conn->prepare($SQLUPUser);
    $GLOBALS["onqyssxqulwr"] = "server";
    $SQLUPUser->execute();
    $euhkmvd = "servidor";
    $GLOBALS["btucfzm"] = "diav";
    $msufyxeuo = "conta";
    $conta = $SQLUPUser->rowCount();
    $GLOBALS["cujgpue"] = "server";
    $GLOBALS["yjvmzkhlpyg"] = "fatu";
    $GLOBALS["wmysajm"] = "desconto1";
    $GLOBALS["bsnaavkjzhk"] = "partes";
    $gphyof = "fatu";
    $GLOBALS["waxymnhbvxv"] = "server";
    if ($conta == 0) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Fatura n\xc3\xa3o encontrada!\");";
        echo "window.location=\"home.php?page=faturas/abertas\";";
        echo "</script>";
    }
    $GLOBALS["dfydylplx"] = "partes2";
    $yuotkdjee = "datavenc";
    $GLOBALS["pnitgbdkqv"] = "total";
    $ohieqlpgv = "fatu";
    ${$GLOBALS["jdyppulfn"]} = $SQLUPUser->fetch();
    if (${$GLOBALS["jdyppulfn"]}["usuario_id"] != $_SESSION["usuarioID"]) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Esta fatura n\xc3\xa3o \xc3\xa9 sua!\");";
        echo "window.location=\"home.php?page=faturas/abertas\";";
        echo "</script>";
    }
    if (${$GLOBALS["orpvbuh"]}["status"] == "cancelado") {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Esta fatura est\xc3\xa1 vencida ou expirada!\");";
        echo "window.location=\"home.php?page=faturas/abertas\";";
        echo "</script>";
    }
    ${$joxgypsgoek} = ${$ohieqlpgv}["data"];
    ${$GLOBALS["xbeehnybx"]} = substr(${$GLOBALS["fdltycs"]}, 0, 10);
    $ztwysstvaf = "total2";
    ${$GLOBALS["vitqsok"]} = explode("-", ${$GLOBALS["xepcqzs"]});
    ${$GLOBALS["yhrydvf"]} = ${$GLOBALS["bsnaavkjzhk"]}[0];
    ${$GLOBALS["lmoeohzdvn"]} = ${$GLOBALS["vitqsok"]}[1];
    ${$GLOBALS["uisrsmsve"]} = ${$GLOBALS["vitqsok"]}[2];
    $GLOBALS["edlndnkrdt"] = "partes2";
    $GLOBALS["dyubixkpan"] = "fatu";
    ${$GLOBALS["olmgituyim"]} = ${$GLOBALS["yjvmzkhlpyg"]}["datavencimento"];
    ${$GLOBALS["bigjoxvuunk"]} = substr(${$yuotkdjee}, 0, 10);
    ${$GLOBALS["bvfljed"]} = explode("-", ${$GLOBALS["bigjoxvuunk"]});
    ${$GLOBALS["ssvfdhlmej"]} = ${$GLOBALS["edlndnkrdt"]}[0];
    ${$uwxidumzhqeg} = ${$GLOBALS["dfydylplx"]}[1];
    $ttwwvl = "total2";
    ${$GLOBALS["btucfzm"]} = ${$GLOBALS["cfefddebq"]}[2];
    ${$GLOBALS["advijhblasf"]} = "SELECT * FROM usuario where id_usuario='" . ${$GLOBALS["jdyppulfn"]}["usuario_id"] . "'";
    ${$GLOBALS["advijhblasf"]} = $conn->prepare(${$fcgfhnbphi});
    $user->execute();
    ${$GLOBALS["fvgfoqygte"]} = $user->fetch();
    ${$GLOBALS["onqyssxqulwr"]} = "SELECT * FROM servidor where id_servidor='" . ${$GLOBALS["jdyppulfn"]}["servidor_id"] . "'";
    ${$GLOBALS["waxymnhbvxv"]} = $conn->prepare(${$GLOBALS["cujgpue"]});
    $omdtbuweif = "fatu";
    $server->execute();
    $GLOBALS["rgkfsqags"] = "total";
    $bogvodsfcb = "tipo";
    ${$euhkmvd} = $server->fetch();
    if (${$verubpfklte}["tipo"] == "vpn") {
        $avxkxbofue = "acc";
        ${$GLOBALS["nwkpyjho"]} = "SELECT * FROM conta_ssh where id_usuario_ssh='" . ${$GLOBALS["jdyppulfn"]}["conta_id"] . "'";
        ${$GLOBALS["nwkpyjho"]} = $conn->prepare(${$avxkxbofue});
        $acc->execute();
        ${$GLOBALS["arwkumegmxg"]} = $acc->fetch();
    }
    ${$GLOBALS["wmysajm"]} = ${$omdtbuweif}["desconto"];
    ${$GLOBALS["znqhtcugpfd"]} = number_format(${$GLOBALS["jdyppulfn"]}["desconto"], 2, ",", ".");
    ${$GLOBALS["rrddzpggjb"]} = number_format(${$gphyof}["valor"], 2, ",", ".");
    ${$GLOBALS["hjmvejpqqqq"]} = ceil(${$xiuzwgadtu}["valor"] * ${$GLOBALS["jdyppulfn"]}["qtd"] - ${$GLOBALS["dkndugwyku"]});
    $GLOBALS["sugmrmbivob"] = "id";
    ${$GLOBALS["xreyrq"]} = ${$GLOBALS["jdyppulfn"]}["valor"];
    ${$GLOBALS["pnitgbdkqv"]} = number_format(${$GLOBALS["rgkfsqags"]}, 2, ",", ".");
    ${$GLOBALS["jdyppulfn"]}["valor"] *= ${$GLOBALS["jdyppulfn"]}["qtd"];
    ${$GLOBALS["nppwqwxcd"]} = number_format(${$ztwysstvaf}, 2, ",", ".");
    ${$rpvhcpfslk} = ${$GLOBALS["dyubixkpan"]}["id"];
    $vwdunwnjx = "tipo";
    ${$GLOBALS["nttiyxig"]} = ${$GLOBALS["jdyppulfn"]}["descricao"];
    ${$GLOBALS["bbdgrhuhwvcx"]} = array("items" => array(array("id" => ${$GLOBALS["sugmrmbivob"]}, "title" => "Mercado Pago Inc - Pagamentos", "currency_id" => "BRL", "picture_url" => "https://www.mercadopago.com/org-img/MP3/home/logomp3.gif", "description" => ${$GLOBALS["nttiyxig"]}, "unit_price" => intval(${$GLOBALS["xreyrq"]}), "category_id" => "Category", "quantity" => intval(${$GLOBALS["jdyppulfn"]}["qtd"]))));
    ${$GLOBALS["cuvcxhtbfnqw"]} = $mp->create_preference(${$GLOBALS["foejhetnty"]});
    switch (${$jysmlbewpl}["tipo"]) {
        case "vpn":
            ${$GLOBALS["ophyladcr"]} = "Acesso VPN";
            break;
        case "revenda":
            ${$vwdunwnjx} = "Revenda";
            break;
        default:
            ${$bogvodsfcb} = "Outros";
            break;
    }
} else {
    echo "<script type=\"text/javascript\">";
    echo "alert(\"Fatura Inexistente!\");";
    echo "window.location=\"home.php?page=faturas/abertas\";";
    echo "</script>";
}
echo "\n<section class=\"card invoice-page\">\n    <div id=\"invoice-template\" class=\"card-body\">\n        <!-- Invoice Company Details -->\n        <div id=\"invoice-company-details\" class=\"row\">\n            <div class=\"col-md-6 col-sm-12 text-left pt-1\">\n                <div class=\"media pt-1\">\n                    <img src=\"../app-assets/images/logo/logo.png\" alt=\"company logo\" class=\"\" />\n                </div>\n            </div>\n            <div class=\"col-md-6 col-sm-12 text-right\">\n                <h1>";
echo ${$GLOBALS["jdyppulfn"]}["id"];
echo "</h1>\n                <div class=\"invoice-details mt-2\">\n                    <h6>Dia do vencimento.</h6>\n                    <p>";
echo ${$GLOBALS["efgsipj"]};
echo "/";
echo ${$GLOBALS["cczzijrni"]};
echo "/";
$omhmjpnhojt = "usufatu";
echo ${$bitbpagbrem};
echo "</p>\n                    <p>";
if (${$GLOBALS["jdyppulfn"]}["servidor_id"] != 0) {
    $wywoqnw = "servidor";
    $GLOBALS["elunbfwgwdu"] = "servidor";
    echo "<b>Servidor:</b> <i class=\"fa fa-calendar\"></i> ";
    echo $servidor["ip_servidor"];
    echo " (";
    echo $servidor["nome"];
    echo ")";
}
echo "</p>\n                    <p>";
if (${$GLOBALS["jdyppulfn"]}["conta_id"] != 0) {
    if (${$GLOBALS["jdyppulfn"]}["tipo"] == "vpn") {
        $GLOBALS["slnfcrjrhjon"] = "conta";
        echo "</p>\n                    <p><b>Conta:</b> <i class=\"fa fa-calendar\"></i>";
        echo $conta["login"];
        echo "</p>\n                    ";
    }
}
echo "                </div>\n            </div>\n        </div>\n        <!--/ Invoice Company Details -->\n\n        <!-- Invoice Recipient Details -->\n        <div id=\"invoice-customer-details\" class=\"row pt-2\">\n            <div class=\"col-md-6 col-sm-12 text-left\">\n                <h5>";
echo ${$GLOBALS["epcnuncankg"]};
echo ", Inc.</h5>\n                <div class=\"recipient-info my-2\">\n                    <p>Telegram: <a href=\"https://t.me/crazy_vpn\">Crazy</a> e <a href=\"https://t.me/souzanavarro\">Orlando Souza</a> </p>\n                </div>\n                <div class=\"recipient-contact pb-2\">\n                    <p>\n                        <i class=\"feather icon-mail\"></i>\n                        ";
$lksofalmkuu = "fatu";
$kcisurac = "fatu";
echo ${$GLOBALS["tghjpqxx"]}["email"];
echo "                    </p>\n                    <p>\n                        <i class=\"feather icon-phone\"></i>\n                        ";
echo formataTelefone(${$GLOBALS["tghjpqxx"]}["celular"]);
echo "                    </p>\n                </div>\n            </div>\n            <div class=\"col-md-6 col-sm-12 text-right\">\n                <h5>";
echo ${$GLOBALS["khpeyqtpbhy"]}["nome"];
echo "</h5>\n                <div class=\"company-info my-2\">\n                </div>\n                <div class=\"company-contact\">\n                    <p>\n                        <i class=\"feather icon-mail\"></i>\n                        ";
echo ${$omhmjpnhojt}["email"];
echo "                    </p>\n                    <p>\n                        <i class=\"feather icon-phone\"></i>\n                        ";
echo formataTelefone(${$GLOBALS["fvgfoqygte"]}["celular"]);
$GLOBALS["tfdkiwpoh"] = "fatu";
echo "                    </p>\n                </div>\n            </div>\n        </div>\n        <!--/ Invoice Recipient Details -->\n\n        <!-- Invoice Items Details -->\n        <div id=\"invoice-items-details\" class=\"pt-1 invoice-items-table\">\n            <div class=\"row\">\n                <div class=\"table-responsive col-sm-12\">\n                    <table class=\"table table-borderless\">\n                        <thead>\n                        <tr>\n                            <th class=\"text-center\">Qtd</th>\n                            <th>Produto</th>\n                            <th class=\"text-right\">Tipo</th>\n                            <th class=\"text-right\">Descri\xc3\xa7\xc3\xa3o</th>\n                            <th class=\"text-right\">Subtotal</th>\n                        </tr>\n                        </thead>\n                        <tbody>\n                        <tr>\n                            <td class=\"text-center\">";
echo ${$hhovyngd}["qtd"];
echo "</td>\n                            <td>Contas SSH</td>\n                            <td class=\"text-right\"> ";
echo ${$fxsgkqgvsanm};
echo " </td>\n                            <td class=\"text-right\"> ";
echo $fatu["descri\xc3\xa7\xc3\xa3o"];
$GLOBALS["gmpmwrdc"] = "fatu";
echo "</td>\n                            <td class=\"text-right\"> R\$";
$GLOBALS["njowkrhnr"] = "total1";
echo ${$xargvhrfe};
echo " </td>\n                        </tr>\n                        </tbody>\n                    </table>\n                </div>\n            </div>\n        </div>\n        <div id=\"invoice-total-details\" class=\"invoice-total-table\">\n            <div class=\"row\">\n                <div class=\"col-7 offset-5\">\n                    <div class=\"table-responsive\">\n                        <table class=\"table table-borderless\">\n                            <tbody>\n                            <tr>\n                                <th>SUBTOTAL</th>\n                                <td>R\$";
echo $total1;
echo "</td>\n                            </tr>\n                            <tr>\n                                <th>DESCONTO (5%)</th>\n                                <td>R\$";
echo ${$GLOBALS["oavmvzp"]};
echo "</td>\n                            </tr>\n                            <tr>\n                                <th>TOTAL</th>\n                                <td>R\$";
echo ${$GLOBALS["hjmvejpqqqq"]};
echo "</td>\n                            </tr>\n                            </tbody>\n                        </table>\n                    </div>\n                </div>\n            </div>\n        </div>\n\n        <!-- Invoice Footer -->\n        <div id=\"invoice-footer\" class=\"text-right pt-3\">\n            <script type=\"text/javascript\">\n                function excluir_fatura(){\n                    decisao = confirm(\"Tem certeza que vai excluir?!\");\n                    if (decisao){\n                        window.location.href='home.php?page=faturasclientes/verfatura&id=";
echo $fatu["id"];
echo "&act=3'\n                    } else {\n                    }\n                }\n            </script>\n        </div>\n        <!--/ Invoice Footer -->\n        <div class=\"divider\"></div>\n\n        <div class=\"col-sm-12 text-center\">\n            <button type=\"button\" onclick=\"excluir_fatura()\" class=\"btn btn-success pull-right\"><i class=\"fad fa-trash-o\"></i> Excluir</button>\n            ";
if ($fatu["status"] == "pendente") {
    echo "            <button type=\"button\" onclick=\"window.location.href='home.php?page=faturasclientes/verfatura&id=";
    echo ${$GLOBALS["jdyppulfn"]}["id"];
    echo "&act=1'\" class=\"btn btn-primary\"><i class=\"fad fa-download\"></i> Confirmar</button>\n            <button type=\"button\" onclick=\"window.location.href='home.php?page=faturasclientes/verfatura&id=";
    echo ${$GLOBALS["jdyppulfn"]}["id"];
    echo "&act=2'\" class=\"btn btn-primary\"><i class=\"fad fa-times-circle\"></i> Cancelar</button>\n        </div>\n\n        <div class=\"divider\"></div>\n\n        <div class=\"col-sm-12 text-center\">\n            ";
} elseif ($fatu["status"] == "pago") {
    echo "                <h3 class=\"text-center text-success\">Fatura Paga</h3>\n            ";
} elseif (${$GLOBALS["yqgevbmieyu"]}["status"] == "cancelado") {
    echo "                <h4 class=\"text-center text-danger\">Fatura Cancelada</h4>\n            ";
}
echo "        </div>\n    </div>\n</section>\n";
