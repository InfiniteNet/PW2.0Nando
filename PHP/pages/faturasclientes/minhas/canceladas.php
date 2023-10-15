<?php

$GLOBALS["iqlanex"] = "anov";
$GLOBALS["mhhviyvdnqb"] = "mesv";
$GLOBALS["heweutue"] = "dia";
$GLOBALS["rwrxmjtv"] = "botao";
$GLOBALS["slrujezhj"] = "valor";
$GLOBALS["lnjdsw"] = "diav";
$GLOBALS["hegqohdxzry"] = "partesven";
$GLOBALS["qtdeijzhu"] = "vencimento";
$GLOBALS["oettbm"] = "partes";
$GLOBALS["cvgnudjethp"] = "dataconvcriado";
$GLOBALS["geqsupplej"] = "datacriado";
$GLOBALS["jaekitd"] = "tipo";
$GLOBALS["whlrfsltrmf"] = "row";
$GLOBALS["ibihobhklju"] = "SQLUPUser";
$GLOBALS["ibqnlkxtwy"] = "usuario";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/canceladas.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
protegePagina("user");
if (${$GLOBALS["ibqnlkxtwy"]}["ativo"] == 2) {
    echo "<script type=\"text/javascript\">";
    echo "window.location=\"home.php?page=suspenso\";";
    echo "</script>";
    exit;
}
echo "<div class=\"row\" id=\"table-hover-row\">\n    <div class=\"col-12\">\n        <div class=\"card\">\n            <div class=\"card-header\">\n                <h1 class=\"card-title font-medium-2\"><i class=\"fad fa-globe-americas text-success font-large-1\"></i> Faturas Canceladas</h1>\n            </div>\n            <div class=\"card-content\">\n                <div class=\"card-body\">\n                    <p>Verifique suas faturas canceladas</p>\n                </div>\n                <div class=\"table-responsive\">\n                    <table class=\"table table-hover mb-0\" id=\"MeuServidor\" data-search=\"minhaPesquisa-lista\">\n                        <thead>\n                        <tr>\n                            <th>ID Fatura</th>\n                            <th>Tipo</th>\n                            <th>Status</th>\n                            <th>Data</th>\n                            <th>Vencimento</th>\n                            <th>Valor</th>\n                            <th>Informa\xc3\xa7\xc3\xb5es</th>\n                        </tr>\n                        </thead>\n                        <tbody>\n                        ";
$GLOBALS["wbwbelxxbp"] = "usuario";
${$GLOBALS["ibihobhklju"]} = "SELECT * FROM fatura_clientes where usuario_id =  '" . $usuario["id_usuario"] . "' and status='cancelado' ORDER BY id desc ";
${$GLOBALS["ibihobhklju"]} = $conn->prepare(${$GLOBALS["ibihobhklju"]});
$SQLUPUser->execute();
if ($SQLUPUser->rowCount() > 0) {
    $GLOBALS["fsdbnwbnie"] = "row";
    while (${$GLOBALS["fsdbnwbnie"]} = $SQLUPUser->fetch()) {
        $fvcsrqpkr = "dia";
        $iegavmvhdfk = "partes";
        $jvratobxdwrr = "ano";
        $vglnuhuadwi = "tipo";
        $fwfzrpovhsgm = "mesv";
        $bpgtpgeumw = "datacriado";
        $hehzyyfphi = "botao";
        $GLOBALS["vmtqmfrali"] = "datavn";
        switch (${$GLOBALS["whlrfsltrmf"]}["tipo"]) {
            case "vpn":
                ${$GLOBALS["jaekitd"]} = "Acesso VPN";
                break;
            case "revenda":
                ${$GLOBALS["jaekitd"]} = "Revenda";
                break;
            default:
                ${$vglnuhuadwi} = "Outros";
                break;
        }
        ${$GLOBALS["geqsupplej"]} = ${$GLOBALS["whlrfsltrmf"]}["data"];
        $yccqjcxkjj = "dataconvcriado";
        $GLOBALS["twrswcmemvh"] = "mes";
        $browykevcof = "datavn";
        ${$GLOBALS["cvgnudjethp"]} = substr(${$bpgtpgeumw}, 0, 10);
        $GLOBALS["vuxaihmhx"] = "botao";
        $GLOBALS["oevxkun"] = "vencimento";
        $GLOBALS["mudsrlps"] = "anov";
        ${$iegavmvhdfk} = explode("-", ${$yccqjcxkjj});
        ${$jvratobxdwrr} = ${$GLOBALS["oettbm"]}[0];
        ${$GLOBALS["twrswcmemvh"]} = ${$GLOBALS["oettbm"]}[1];
        ${$fvcsrqpkr} = ${$GLOBALS["oettbm"]}[2];
        ${$GLOBALS["oevxkun"]} = ${$GLOBALS["whlrfsltrmf"]}["datavencimento"];
        ${$GLOBALS["vmtqmfrali"]} = substr(${$GLOBALS["qtdeijzhu"]}, 0, 10);
        $oigwsec = "row";
        ${$GLOBALS["hegqohdxzry"]} = explode("-", ${$browykevcof});
        $GLOBALS["kwcert"] = "diav";
        $GLOBALS["heqdkftiyj"] = "botao";
        $xvxjsvj = "botao";
        $GLOBALS["tggihmnwo"] = "ano";
        ${$GLOBALS["mudsrlps"]} = ${$GLOBALS["hegqohdxzry"]}[0];
        ${$fwfzrpovhsgm} = ${$GLOBALS["hegqohdxzry"]}[1];
        ${$GLOBALS["lnjdsw"]} = ${$GLOBALS["hegqohdxzry"]}[2];
        ${$GLOBALS["slrujezhj"]} = number_format(${$GLOBALS["whlrfsltrmf"]}["valor"] * ${$GLOBALS["whlrfsltrmf"]}["qtd"], 2);
        $ryedbchcz = "row";
        switch (${$oigwsec}["status"]) {
            case "pendente":
                ${$GLOBALS["rwrxmjtv"]} = "<span class=\"label label-warning\">Pendente</span>";
                break;
            case "cancelado":
                ${$GLOBALS["heqdkftiyj"]} = "<span class=\"label label-danger\">Cancelado</span>";
                break;
            case "pago":
                ${$GLOBALS["vuxaihmhx"]} = "<span class=\"label label-success\">Pago</span>";
                break;
            default:
                ${$xvxjsvj} = "Outros";
                break;
        }
        echo "\n                                <tr >\n                                    <td >#";
        echo ${$ryedbchcz}["id"];
        echo "</td>\n                                    <td>";
        echo ${$GLOBALS["jaekitd"]};
        echo "</td>\n                                    <td>";
        echo ${$hehzyyfphi};
        echo "</td>\n                                    <td>";
        $GLOBALS["tgulawvthmjo"] = "mes";
        echo ${$GLOBALS["heweutue"]};
        echo "/";
        echo $mes;
        echo " - ";
        echo ${$GLOBALS["tggihmnwo"]};
        echo "</td>\n                                    <td>";
        echo ${$GLOBALS["kwcert"]};
        echo "/";
        echo ${$GLOBALS["mhhviyvdnqb"]};
        echo " - ";
        echo ${$GLOBALS["iqlanex"]};
        echo "</td>\n                                    <td>R\$";
        echo number_format(${$GLOBALS["slrujezhj"]}, 2, ",", ".");
        echo "</td>\n                                </tr>\n                            ";
    }
}
echo "\n                        </tbody>\n                    </table>\n                </div>\n            </div>\n        </div>\n    </div>\n</div>\n";
