<?php

$GLOBALS["japlxfxv"] = "tipo";
$GLOBALS["obgvxmf"] = "decricao";
$GLOBALS["slqtljpo"] = "total2";
$GLOBALS["yhnonwi"] = "valorfinal";
$GLOBALS["prxntzcxf"] = "desconto1";
$GLOBALS["katcfer"] = "desconto";
$GLOBALS["lcyyfyg"] = "servidor";
$GLOBALS["dkimnsif"] = "server";
$GLOBALS["fyflqhuxu"] = "user";
$GLOBALS["yuigfv"] = "diav";
$GLOBALS["kqbxrdmlev"] = "partes2";
$GLOBALS["tdsiptv"] = "mesv";
$GLOBALS["ahwteyng"] = "datanv";
$GLOBALS["dongzlcq"] = "dia";
$GLOBALS["trwogbrxxt"] = "partes";
$GLOBALS["eqenywkht"] = "ano";
$GLOBALS["yptzjnald"] = "dataconvcriado";
$GLOBALS["oweeygqar"] = "datacriado";
$GLOBALS["gxhwerlgsr"] = "fatu";
$GLOBALS["hkurlpmipxwt"] = "conta";
$GLOBALS["ouekeajq"] = "fatura_id";
$GLOBALS["mdspckto"] = "SQLUPUser";
$GLOBALS["chvxnv"] = "mp";
$GLOBALS["miuixobvm"] = "SQLmp";
$wbnyxgohgvg = "usuario";
echo "<script type=\"text/javascript\" src=\"//resources.mlstatic.com/mptools/render.js\"></script>\n";
require_once "pages/system/seguranca.php";
require_once "lib/mercadopago.php";
protegePagina("user");
$nocrqbtpbxs = "fatu";
if ($usuario["ativo"] == 2) {
    echo "<script type=\"text/javascript\">";
    echo "window.location=\"home.php?page=suspenso\";";
    echo "</script>";
    exit;
}
$iviawcrmh = "SQLmp";
$wxsaffuthwy = "mp";
${$GLOBALS["miuixobvm"]} = "select * from mercadopago";
${$iviawcrmh} = $conn->prepare(${$GLOBALS["miuixobvm"]});
$GLOBALS["odwcvaxtx"] = "mp";
$SQLmp->execute();
${$GLOBALS["chvxnv"]} = $SQLmp->fetch();
${$wxsaffuthwy} = new MP("" . ${$GLOBALS["odwcvaxtx"]}["CLIENT_ID"] . "", "" . ${$GLOBALS["chvxnv"]}["CLIENT_SECRET"] . "");
$GLOBALS["frukxjh"] = "fatu";
$GLOBALS["kujhqcbbkd"] = "fatu";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/confirmar.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
$GLOBALS["nvgdebccslq"] = "fatu";
if (isset($_GET["id"])) {
    $GLOBALS["fjzvepmrgh"] = "anov";
    $GLOBALS["fvzphpzmq"] = "fatu";
    $GLOBALS["xscoegfnvqbh"] = "user";
    $ygyktcu = "preference_data";
    $GLOBALS["pmuqqowycyr"] = "partes2";
    $zcanpicsmunq = "fatura_id";
    $GLOBALS["ikronkmb"] = "usufatu";
    $GLOBALS["gzrcvwl"] = "SQLUPUser";
    $GLOBALS["tkpnqpnrbi"] = "datavenc";
    $ygqtpmhlvp = "fatu";
    $GLOBALS["txhsffnemn"] = "total";
    $yknyzolfvt = "partes2";
    $bogritkeus = "partes";
    $GLOBALS["kmkxhgm"] = "partes2";
    $xonjearuvks = "decricao";
    $fatura_id = $_GET["id"];
    $GLOBALS["reguiujbmc"] = "partes";
    ${$GLOBALS["mdspckto"]} = "SELECT * FROM fatura where id='" . ${$GLOBALS["ouekeajq"]} . "'";
    ${$GLOBALS["mdspckto"]} = $conn->prepare(${$GLOBALS["gzrcvwl"]});
    $SQLUPUser->execute();
    $GLOBALS["bqzkhxp"] = "mes";
    $mmooewkofm = "fatu";
    ${$GLOBALS["hkurlpmipxwt"]} = $SQLUPUser->rowCount();
    if (${$GLOBALS["hkurlpmipxwt"]} == 0) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Fatura n\xc3\xa3o encontrada!\");";
        echo "window.location=\"home.php?page=faturas/abertas\";";
        echo "</script>";
    }
    $zbgosygbtt = "partes";
    ${$mmooewkofm} = $SQLUPUser->fetch();
    $nmgubbhj = "valor";
    if (${$GLOBALS["gxhwerlgsr"]}["usuario_id"] != $_SESSION["usuarioID"]) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Esta fatura n\xc3\xa3o \xc3\xa9 sua!\");";
        echo "window.location=\"home.php?page=faturas/abertas\";";
        echo "</script>";
    }
    $GLOBALS["jdshcxczlvm"] = "valorfinal";
    $GLOBALS["oiirkdp"] = "fatu";
    if (${$GLOBALS["gxhwerlgsr"]}["status"] == "cancelado") {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Esta fatura est\xc3\xa1 vencida ou expirada!\");";
        echo "window.location=\"home.php?page=faturas/abertas\";";
        echo "</script>";
    }
    ${$GLOBALS["oweeygqar"]} = ${$GLOBALS["oiirkdp"]}["data"];
    $srqwvlf = "fatu";
    $uxkqudukmq = "total";
    ${$GLOBALS["yptzjnald"]} = substr(${$GLOBALS["oweeygqar"]}, 0, 10);
    $GLOBALS["xzouznrnevtn"] = "total2";
    ${$bogritkeus} = explode("-", ${$GLOBALS["yptzjnald"]});
    ${$GLOBALS["eqenywkht"]} = ${$GLOBALS["reguiujbmc"]}[0];
    $GLOBALS["pymegucjbqyh"] = "datavenc";
    ${$GLOBALS["bqzkhxp"]} = ${$GLOBALS["trwogbrxxt"]}[1];
    $okvayijfnt = "fatu";
    ${$GLOBALS["dongzlcq"]} = ${$zbgosygbtt}[2];
    ${$GLOBALS["pymegucjbqyh"]} = ${$GLOBALS["gxhwerlgsr"]}["datavencimento"];
    ${$GLOBALS["ahwteyng"]} = substr(${$GLOBALS["tkpnqpnrbi"]}, 0, 10);
    $bdupjyoch = "id";
    ${$yknyzolfvt} = explode("-", ${$GLOBALS["ahwteyng"]});
    $GLOBALS["uggiuiuf"] = "fatu";
    $GLOBALS["mwcewcchlv"] = "server";
    ${$GLOBALS["fjzvepmrgh"]} = ${$GLOBALS["kmkxhgm"]}[0];
    ${$GLOBALS["tdsiptv"]} = ${$GLOBALS["kqbxrdmlev"]}[1];
    ${$GLOBALS["yuigfv"]} = ${$GLOBALS["pmuqqowycyr"]}[2];
    ${$GLOBALS["xscoegfnvqbh"]} = "SELECT * FROM usuario where id_usuario='" . ${$GLOBALS["fvzphpzmq"]}["usuario_id"] . "'";
    ${$GLOBALS["fyflqhuxu"]} = $conn->prepare(${$GLOBALS["fyflqhuxu"]});
    $user->execute();
    $dcprsfqouijb = "desconto1";
    ${$GLOBALS["ikronkmb"]} = $user->fetch();
    ${$GLOBALS["dkimnsif"]} = "SELECT * FROM servidor where id_servidor='" . ${$GLOBALS["gxhwerlgsr"]}["servidor_id"] . "'";
    $egqmzoc = "fatu";
    ${$GLOBALS["mwcewcchlv"]} = $conn->prepare(${$GLOBALS["dkimnsif"]});
    $server->execute();
    $mottsn = "total";
    ${$GLOBALS["lcyyfyg"]} = $server->fetch();
    if (${$ygqtpmhlvp}["tipo"] == "vpn") {
        $GLOBALS["ntafpntszds"] = "acc";
        $hthpknviosj = "acc";
        $GLOBALS["cdcvnyekwl"] = "acc";
        $acc = "SELECT * FROM conta_ssh where id_usuario_ssh='" . ${$GLOBALS["gxhwerlgsr"]}["conta_id"] . "'";
        $acc = $conn->prepare($acc);
        $acc->execute();
        ${$GLOBALS["hkurlpmipxwt"]} = $acc->fetch();
    }
    ${$dcprsfqouijb} = ${$GLOBALS["gxhwerlgsr"]}["desconto"];
    ${$GLOBALS["katcfer"]} = number_format(${$GLOBALS["gxhwerlgsr"]}["desconto"], 2, ",", ".");
    ${$nmgubbhj} = number_format(${$GLOBALS["gxhwerlgsr"]}["valor"], 2, ",", ".");
    $juyqlwffxo = "fatu";
    ${$mottsn} = ceil(${$srqwvlf}["valor"] * ${$okvayijfnt}["qtd"] - ${$GLOBALS["prxntzcxf"]});
    ${$GLOBALS["yhnonwi"]} = ${$GLOBALS["gxhwerlgsr"]}["valor"];
    ${$GLOBALS["txhsffnemn"]} = number_format(${$uxkqudukmq}, 2, ",", ".");
    ${$GLOBALS["uggiuiuf"]}["valor"] *= ${$GLOBALS["gxhwerlgsr"]}["qtd"];
    $pejwst = "preference_data";
    ${$GLOBALS["slqtljpo"]} = number_format(${$GLOBALS["slqtljpo"]}, 2, ",", ".");
    ${$bdupjyoch} = ${$egqmzoc}["id"];
    $ufpbcjrrhud = "tipo";
    $GLOBALS["dyhjcypg"] = "id";
    $klpifjrio = "fatu";
    ${$xonjearuvks} = ${$GLOBALS["gxhwerlgsr"]}["descricao"];
    $jaoqtli = "preference";
    ${$ygyktcu} = array("items" => array(array("id" => ${$GLOBALS["dyhjcypg"]}, "title" => "Mercado Pago Inc - Pagamentos", "currency_id" => "BRL", "picture_url" => "https://www.mercadopago.com/org-img/MP3/home/logomp3.gif", "description" => ${$GLOBALS["obgvxmf"]}, "unit_price" => intval(${$GLOBALS["jdshcxczlvm"]}), "category_id" => "Category", "quantity" => intval(${$juyqlwffxo}["qtd"]))));
    ${$jaoqtli} = $mp->create_preference(${$pejwst});
    switch (${$klpifjrio}["tipo"]) {
        case "vpn":
            ${$GLOBALS["japlxfxv"]} = "Acesso VPN";
            break;
        case "revenda":
            ${$GLOBALS["japlxfxv"]} = "Revenda";
            break;
        default:
            ${$ufpbcjrrhud} = "Outros";
            break;
    }
} else {
    echo "<script type=\"text/javascript\">";
    echo "alert(\"Fatura Inexistente!\");";
    echo "window.location=\"home.php?page=faturas/abertas\";";
    echo "</script>";
}
echo "<script>\n  \$(function () {\n  \$('#example1').DataTable({\n    \"language\": {\n        \"sProcessing\":    \"Processando...\",\n        \"sLengthMenu\":    \"Mostrar _MENU_ registros\",\n        \"sZeroRecords\":   \"N\xc3\xa3o foram encontrados resultados\",\n        \"sEmptyTable\":    \"Nenhum dado disponivel\",\n        \"sInfo\":          \"Mostrando de _START_ at\xc3\xa9 _END_ de _TOTAL_ registros\",\n        \"sInfoEmpty\":     \"Mostrando de 0 at\xc3\xa9 0 de 0 registos\",\n        \"sInfoFiltered\":  \"(filtrado de _MAX_ registos no total)\",\n        \"sInfoPostFix\":   \"\",\n        \"sSearch\":        \"Procurar:\",\n        \"sUrl\":           \"\",\n        \"sInfoThousands\":  \",\",\n        \"sSearchPlaceholder\": \"Procure o CP\",\n        \"sLoadingRecords\": \"A carregar dados...\",\n        \"oPaginate\": {\n            \"sFirst\":    \"Primeiro\",\n            \"sLast\":    \"\xc3\x9altimo\",\n            \"sNext\":    \"Seguinte\",\n            \"sPrevious\": \"Anterior\"\n        },\n        \"oAria\": {\n            \"sSortAscending\":  \": Clique para ordenar ascendente (ASC)\",\n            \"sSortDescending\": \": Clique para ordenar descendente (DESC)\"\n        }\n    }\n});\n  responsive: true\n  });\n</script>\n <!-- Input with Icons start -->\n <section id=\"input-with-icons\">\n     <div class=\"row match-height\">\n         <div class=\"col-12\">\n             <div class=\"card\">\n                 <div class=\"card-header\">\n                     <h1 class=\"card-title font-medium-2\"><i class=\"fad fa-globe-americas text-success font-large-1\"></i> Fatura N\xc2\xb0<small>#";
echo ${$nocrqbtpbxs}["id"];
echo "</small></h1>\n                 </div>\n                 <div class=\"card-content\">\n                     <form role=\"form\" action=\"pages/faturas/confirmando.php\" enctype=\"multipart/form-data\" method=\"post\">\n                         <div class=\"card-body\">\n                             <div class=\"row\">\n                                 <div class=\"col-12\">\n                                     <p>Confirmar seu pagamento.</p>\n                                 </div>\n                                 <div class=\"col-sm-6 col-12\">\n                                     <div class=\"text-bold-600 font-medium-2 mb-1\">\n                                         Fatura\n                                     </div>\n                                     <fieldset class=\"form-group position-relative\">\n                                         <input type=\"text\" class=\"form-control\" placeholder=\"#";
echo ${$GLOBALS["kujhqcbbkd"]}["id"];
echo "\" value=\"#";
echo ${$GLOBALS["gxhwerlgsr"]}["id"];
echo "\" disabled=\"\">\n                                         <input name=\"fatura\" value=\"";
echo ${$GLOBALS["nvgdebccslq"]}["id"];
echo "\" type=\"hidden\">\n                                     </fieldset>\n                                 </div>\n                                 <div class=\"col-sm-6 col-12\">\n                                     <div class=\"text-bold-600 font-medium-2 mb-1\">\n                                         Forma de Pagamento\n                                     </div>\n                                     <fieldset class=\"form-group position-relative\">\n                                         <select name=\"formap\" class=\"form-control\">\n                                             <option value=\"1\" selected=selected>Boleto</option>\n                                             <option value=\"2\">Dep\xc3\xb3sito/Transf\xc3\xaancia</option>\n                                         </select>\n                                     </fieldset>\n                                 </div>\n                                 <div class=\"col-sm-6 col-12\">\n                                     <div class=\"text-bold-600 font-medium-2 mb-1\">\n                                         Deixar uma mensagem?\n                                     </div>\n                                     <fieldset class=\"form-group position-relative has-icon-left input-divider-left\">\n                                         <textarea class=\"form-control\" name=\"msg\" id=\"msg\" class=\"form-control\" rows=\"5\" placeholder=\"Digite ... (Opcional)\"></textarea>\n                                         <div class=\"form-control-position\">\n                                             <i class=\"fad fa-flame\"></i>\n                                         </div>\n                                     </fieldset>\n                                 </div>\n                                 <div class=\"col-sm-6 col-12\">\n                                     <div class=\"text-bold-600 font-medium-2 mb-1\">\n                                         Anexar de comprovante\n                                     </div>\n                                     <fieldset class=\"form-group position-relative input-divider-right\">\n                                         <input type=\"file\" id=\"arquivo\" name=\"arquivo\" required=required> </span> <a href=\"#\" class=\"input-group-addon btn btn-default fileinput-exists\" data-dismiss=\"fileinput\">Remover</a>\n                                    </fieldset>\n                                </div>\n                             <div class=\"col-sm-12 col-12\ttext-center\">\n                                 <button type=\"submit\" class=\"btn btn-success round\">Enviar</button>\n                                 <button type=\"button\" onclick=\"window.location.href='home.php?page=faturas/verfatura&id=";
echo ${$GLOBALS["frukxjh"]}["id"];
echo "'\" class=\"btn btn-danger round\">Voltar</button>\n                             </div>\n                         </div>\n                 </div>\n                 </form>\n             </div>\n         </div>\n     </div>\n     </div>\n </section>\n <!-- Input with Icons end -->\n";
