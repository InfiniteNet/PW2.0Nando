<?php

$GLOBALS["iodikdkxnj"] = "valor";
$GLOBALS["pxqcwzcotm"] = "dia";
$GLOBALS["ylpxvxyiie"] = "botao";
$GLOBALS["phffhenbkoi"] = "diav";
$GLOBALS["ihkqgrhczsc"] = "partesven";
$GLOBALS["xqxbixukd"] = "vencimento";
$GLOBALS["dhsxgejpqg"] = "datavn";
$GLOBALS["vjegktgpf"] = "row";
$GLOBALS["udgkdmm"] = "mes";
$GLOBALS["srdtvfyzip"] = "ano";
$GLOBALS["eehotcqmri"] = "partes";
$GLOBALS["ecwxvorupc"] = "dataconvcriado";
$GLOBALS["wurocosuaj"] = "tipo";
$GLOBALS["homtofgq"] = "SQLUPUser";
$GLOBALS["qvnqienndlz"] = "SQLUPUser";
$GLOBALS["bosjftcxof"] = "usuario";
$fmflmzystsl = "usuario";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/abertas.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
protegePagina("user");
if (${$GLOBALS["bosjftcxof"]}["ativo"] == 2) {
    echo "<script type=\"text/javascript\">";
    echo "window.location=\"home.php?page=suspenso\";";
    echo "</script>";
    exit;
}
echo "<div class=\"row\" id=\"table-hover-row\">\n    <div class=\"col-12\">\n        <div class=\"card\">\n            <div class=\"card-header\">\n                <h1 class=\"card-title font-medium-2\"><i class=\"fad fa-globe-americas text-success font-large-1\"></i> Faturas Abertas</h1>\n            </div>\n            <div class=\"card-content\">\n                <div class=\"card-body\">\n                    <p>Verifique os dados das suas faturas</p>\n                </div>\n                <div class=\"table-responsive\">\n                    <table class=\"table table-hover mb-0\" id=\"MeuServidor\" data-search=\"minhaPesquisa-lista\">\n                        <thead>\n                        <tr>\n                            <th>ID Fatura</th>\n                            <th>Tipo</th>\n                            <th>Status</th>\n                            <th>Data</th>\n                            <th>Vencimento</th>\n                            <th>Valor</th>\n                            <th>Informa\xc3\xa7\xc3\xb5es</th>\n                        </tr>\n                        </thead>\n                        <tbody>\n                        ";
${$GLOBALS["homtofgq"]} = "SELECT * FROM fatura_clientes where usuario_id =  '" . ${$fmflmzystsl}["id_usuario"] . "' and status='pendente' ORDER BY id desc ";
${$GLOBALS["homtofgq"]} = $conn->prepare(${$GLOBALS["qvnqienndlz"]});
$SQLUPUser->execute();
if ($SQLUPUser->rowCount() > 0) {
    $udtctuwvg = "row";
    while (${$udtctuwvg} = $SQLUPUser->fetch()) {
        $kgjmivgh = "datacriado";
        $jbguwwujqsk = "anov";
        $GLOBALS["yoqyrolxk"] = "row";
        $kfzqktidgt = "tipo";
        $unffnuccnqci = "partesven";
        $nzbpugn = "dataconvcriado";
        $suwrfbuymyxy = "ano";
        $cblgydj = "valor";
        $igostwaf = "row";
        $rigfnutbvlv = "mesv";
        $GLOBALS["rlfvhvblcpk"] = "datacriado";
        $adhkpvmsdaq = "dia";
        $aubuuwnvpz = "partes";
        switch ($row["tipo"]) {
            case "vpn":
                ${$GLOBALS["wurocosuaj"]} = "Acesso VPN";
                break;
            case "revenda":
                ${$GLOBALS["wurocosuaj"]} = "Revenda";
                break;
            default:
                ${$kfzqktidgt} = "Outros";
                break;
        }
        ${$GLOBALS["rlfvhvblcpk"]} = ${$igostwaf}["data"];
        $swvrwidvus = "partes";
        $gnqrkze = "vencimento";
        ${$GLOBALS["ecwxvorupc"]} = substr(${$kgjmivgh}, 0, 10);
        ${$GLOBALS["eehotcqmri"]} = explode("-", ${$nzbpugn});
        $vsenmwvpic = "anov";
        ${$GLOBALS["srdtvfyzip"]} = ${$aubuuwnvpz}[0];
        ${$GLOBALS["udgkdmm"]} = ${$GLOBALS["eehotcqmri"]}[1];
        ${$adhkpvmsdaq} = ${$swvrwidvus}[2];
        $pjhdmho = "mes";
        $GLOBALS["fkbivwympst"] = "botao";
        $yuqnepb = "partesven";
        ${$gnqrkze} = ${$GLOBALS["vjegktgpf"]}["datavencimento"];
        $GLOBALS["dkvzplspnd"] = "partesven";
        ${$GLOBALS["dhsxgejpqg"]} = substr(${$GLOBALS["xqxbixukd"]}, 0, 10);
        ${$unffnuccnqci} = explode("-", ${$GLOBALS["dhsxgejpqg"]});
        ${$vsenmwvpic} = ${$GLOBALS["dkvzplspnd"]}[0];
        ${$rigfnutbvlv} = ${$GLOBALS["ihkqgrhczsc"]}[1];
        ${$GLOBALS["phffhenbkoi"]} = ${$yuqnepb}[2];
        ${$cblgydj} = number_format(${$GLOBALS["vjegktgpf"]}["valor"] * ${$GLOBALS["vjegktgpf"]}["qtd"], 2);
        switch (${$GLOBALS["vjegktgpf"]}["status"]) {
            case "pendente":
                ${$GLOBALS["ylpxvxyiie"]} = "<span class=\"label label-warning\">Pendente</span>";
                break;
            case "cancelado":
                ${$GLOBALS["ylpxvxyiie"]} = "<span class=\"label label-danger\">Cancelado</span>";
                break;
            case "pago":
                ${$GLOBALS["fkbivwympst"]} = "<span class=\"label label-success\">Pago</span>";
                break;
            default:
                ${$GLOBALS["ylpxvxyiie"]} = "Outros";
                break;
        }
        $epbrvfbjijb = "mesv";
        echo "\n                                <tr >\n                                    <td >#";
        echo ${$GLOBALS["vjegktgpf"]}["id"];
        echo "</td>\n                                    <td>";
        echo ${$GLOBALS["wurocosuaj"]};
        echo "</td>\n                                    <td>";
        echo ${$GLOBALS["ylpxvxyiie"]};
        echo "</td>\n                                    <td>";
        echo ${$GLOBALS["pxqcwzcotm"]};
        echo "/";
        echo ${$pjhdmho};
        echo " - ";
        echo ${$suwrfbuymyxy};
        echo "</td>\n                                    <td>";
        echo ${$GLOBALS["phffhenbkoi"]};
        echo "/";
        echo $mesv;
        echo " - ";
        echo ${$jbguwwujqsk};
        echo "</td>\n                                    <td>R\$";
        echo number_format(${$GLOBALS["iodikdkxnj"]}, 2, ",", ".");
        echo "</td>\n\n\n                                    <td>\n\n                                        <a href=\"home.php?page=faturasclientes/minhas/verfatura&id=";
        echo ${$GLOBALS["vjegktgpf"]}["id"];
        echo "\" class=\"btn btn-block btn-success btn-sm\">Visualizar</a>\n\n                                    </td>\n                                </tr>\n                            ";
    }
}
echo "\n                        </tbody>\n                    </table>\n                </div>\n            </div>\n        </div>\n    </div>\n</div>\n";
