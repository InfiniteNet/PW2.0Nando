<?php

$GLOBALS["gmnecnw"] = "botao";
$GLOBALS["empcnosnsdjf"] = "diav";
$GLOBALS["ybolrlexcttm"] = "mesv";
$GLOBALS["wlrycjjz"] = "anov";
$GLOBALS["vrrtfgug"] = "partesven";
$GLOBALS["btnnjjlyvlhp"] = "vencimento";
$GLOBALS["podkepk"] = "dia";
$GLOBALS["oussjmbqw"] = "dataconvcriado";
$GLOBALS["flxbhjzsky"] = "partes";
$GLOBALS["rflsfpuuirl"] = "datacriado";
$GLOBALS["qeqxvqesop"] = "tipo";
$GLOBALS["neondchl"] = "row";
$GLOBALS["ytlimaejrc"] = "SQLUPUser";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/pagas.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
$xjbnurgccvo = "SQLUPUser";
$GLOBALS["bdbkictas"] = "usuario";
protegePagina("user");
if ($usuario["ativo"] == 2) {
    echo "<script type=\"text/javascript\">";
    echo "window.location=\"home.php?page=suspenso\";";
    echo "</script>";
    exit;
}
$tmqypt = "SQLUPUser";
$hbuekpoh = "usuario";
echo "<div class=\"row\" id=\"table-hover-row\">\n    <div class=\"col-12\">\n        <div class=\"card\">\n            <div class=\"card-header\">\n                <h1 class=\"card-title font-medium-2\"><i class=\"fad fa-globe-americas text-success font-large-1\"></i> Faturas Pagas</h1>\n            </div>\n            <div class=\"card-content\">\n                <div class=\"card-body\">\n                    <p>Verifique suas faturas completas</p>\n                </div>\n                <div class=\"table-responsive\">\n                    <table class=\"table table-hover mb-0\" id=\"MeuServidor\" data-search=\"minhaPesquisa-lista\">\n                        <thead>\n                        <tr>\n                            <th>ID Fatura</th>\n                            <th>Tipo</th>\n                            <th>Status</th>\n                            <th>Data</th>\n                            <th>Vencimento</th>\n                            <th>Valor</th>\n                            <th>Informa\xc3\xa7\xc3\xb5es</th>\n                        </tr>\n                        </thead>\n                        <tbody>\n                        ";
${$xjbnurgccvo} = "SELECT * FROM fatura_clientes where usuario_id =  '" . $usuario["id_usuario"] . "' and status='pago' ORDER BY id desc ";
${$GLOBALS["ytlimaejrc"]} = $conn->prepare(${$tmqypt});
$SQLUPUser->execute();
if ($SQLUPUser->rowCount() > 0) {
    $GLOBALS["sjbgpfmpp"] = "row";
    while (${$GLOBALS["sjbgpfmpp"]} = $SQLUPUser->fetch()) {
        $GLOBALS["itdxozisz"] = "row";
        $GLOBALS["gxlhawvx"] = "datavn";
        $nhvwjzxclk = "row";
        $GLOBALS["elsoiqsq"] = "row";
        $flnogmkji = "tipo";
        $yonkzubowx = "tipo";
        $fftuparqcrt = "ano";
        $wepbenpkaakp = "mes";
        $GLOBALS["lbcwxhgmezk"] = "datavn";
        $GLOBALS["uwsiyjk"] = "partesven";
        $vjiswlfvn = "partes";
        $ckmlzmpylvty = "vencimento";
        $ufjpcern = "dataconvcriado";
        switch (${$GLOBALS["neondchl"]}["tipo"]) {
            case "vpn":
                ${$flnogmkji} = "Acesso VPN";
                break;
            case "revenda":
                ${$GLOBALS["qeqxvqesop"]} = "Revenda";
                break;
            default:
                ${$yonkzubowx} = "Outros";
                break;
        }
        ${$GLOBALS["rflsfpuuirl"]} = ${$GLOBALS["itdxozisz"]}["data"];
        ${$ufjpcern} = substr(${$GLOBALS["rflsfpuuirl"]}, 0, 10);
        ${$GLOBALS["flxbhjzsky"]} = explode("-", ${$GLOBALS["oussjmbqw"]});
        $GLOBALS["dxstiinwiqv"] = "mesv";
        ${$fftuparqcrt} = ${$GLOBALS["flxbhjzsky"]}[0];
        $beburr = "botao";
        $GLOBALS["cpfqxwjcepv"] = "botao";
        $owwvfpc = "valor";
        ${$wepbenpkaakp} = ${$vjiswlfvn}[1];
        $zfcohrpjwpql = "row";
        ${$GLOBALS["podkepk"]} = ${$GLOBALS["flxbhjzsky"]}[2];
        $GLOBALS["cpgoullx"] = "botao";
        $GLOBALS["hlhebxtwl"] = "row";
        ${$ckmlzmpylvty} = ${$nhvwjzxclk}["datavencimento"];
        $GLOBALS["mriofqyyknnv"] = "mes";
        ${$GLOBALS["lbcwxhgmezk"]} = substr(${$GLOBALS["btnnjjlyvlhp"]}, 0, 10);
        ${$GLOBALS["vrrtfgug"]} = explode("-", ${$GLOBALS["gxlhawvx"]});
        ${$GLOBALS["wlrycjjz"]} = ${$GLOBALS["uwsiyjk"]}[0];
        $GLOBALS["wtzwutjjxjh"] = "valor";
        ${$GLOBALS["ybolrlexcttm"]} = ${$GLOBALS["vrrtfgug"]}[1];
        ${$GLOBALS["empcnosnsdjf"]} = ${$GLOBALS["vrrtfgug"]}[2];
        ${$owwvfpc} = number_format(${$GLOBALS["neondchl"]}["valor"] * ${$zfcohrpjwpql}["qtd"], 2);
        switch (${$GLOBALS["neondchl"]}["status"]) {
            case "pendente":
                ${$GLOBALS["cpfqxwjcepv"]} = "<span class=\"label label-warning\">Pendente</span>";
                break;
            case "cancelado":
                ${$beburr} = "<span class=\"label label-danger\">Cancelado</span>";
                break;
            case "pago":
                ${$GLOBALS["gmnecnw"]} = "<span class=\"label label-success\">Pago</span>";
                break;
            default:
                ${$GLOBALS["cpgoullx"]} = "Outros";
                break;
        }
        $plearyflrlmy = "ano";
        echo "\n                                <tr >\n                                    <td >#";
        echo ${$GLOBALS["elsoiqsq"]}["id"];
        echo "</td>\n                                    <td>";
        echo ${$GLOBALS["qeqxvqesop"]};
        echo "</td>\n                                    <td>";
        $GLOBALS["jnftuvwur"] = "dia";
        echo ${$GLOBALS["gmnecnw"]};
        echo "</td>\n                                    <td>";
        echo $dia;
        echo "/";
        echo ${$GLOBALS["mriofqyyknnv"]};
        echo " - ";
        echo $ano;
        echo "</td>\n                                    <td>";
        echo ${$GLOBALS["empcnosnsdjf"]};
        echo "/";
        echo ${$GLOBALS["dxstiinwiqv"]};
        echo " - ";
        echo ${$GLOBALS["wlrycjjz"]};
        echo "</td>\n                                    <td>R\$";
        echo number_format(${$GLOBALS["wtzwutjjxjh"]}, 2, ",", ".");
        echo "</td>\n\n\n                                    <td>\n\n                                        <a href=\"home.php?page=faturasclientes/minhas/verfatura&id=";
        echo ${$GLOBALS["hlhebxtwl"]}["id"];
        echo "\" class=\"btn btn-block btn-success\">Visualizar</a>\n                                    </td>\n                                </tr>\n                            ";
    }
}
echo "\n                        </tbody>\n                    </table>\n                </div>\n            </div>\n        </div>\n    </div>\n</div>\n";
