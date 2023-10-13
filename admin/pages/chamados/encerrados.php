<?php

$GLOBALS["rkjnnvpgnr"] = "mes";
$GLOBALS["bhkuigrps"] = "ano";
$GLOBALS["ilojptxhni"] = "dia";
$GLOBALS["bmfqylsqcy"] = "data2";
$GLOBALS["wenlysrdefyv"] = "tipo";
$GLOBALS["nqlecrlunc"] = "user2";
$GLOBALS["ehaiieuchq"] = "SQLUsuario2";
$GLOBALS["zgoist"] = "row";
$GLOBALS["rbgrossw"] = "SQLUsuario";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/encerrados.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
protegePagina("donoadmin");
$GLOBALS["bopgprxcf"] = "SQLUsuario";
$GLOBALS["evwkvmxmx"] = "SQLUsuario";
echo "<style>\n.card-datatable {\npadding-left: 5px;\npadding-right: 5px;\n}\n</style>\n<section id=\"complex-header-datatable\">\n<div class=\"row\">\n<div class=\"col-12\">\n<div class=\"card\">\n<div class=\"card-header border-bottom\">\n<h4 class=\"card-title\">Tickets encerrados</h4>\n</div>\n<div class=\"card-datatable\">\n<table id=\"example\" class=\"table\">\n<thead>\n<tr>\n<th>N\xc2\xb0 DE CHAMADO </th>\n<th>STATUS </th>\n<th>ABERTO POR </th>\n<th>MOTIVO </th>\n<th>ULTIMA ATUALIZACAO </th>\n<th>ACOES</th>\n</tr>\n</thead>\n<tbody id=\"myTable\">\n";
$SQLUsuario = "SELECT * FROM chamados   where  status = 'encerrado' and id_mestre=0 ORDER BY id desc";
${$GLOBALS["rbgrossw"]} = $conn->prepare($SQLUsuario);
$SQLUsuario->execute();
if ($SQLUsuario->rowCount() > 0) {
    while (${$GLOBALS["zgoist"]} = $SQLUsuario->fetch()) {
        $glqfejjmfhn = "row";
        $ezpkgi = "SQLUsuario2";
        $GLOBALS["ucdiergkru"] = "row";
        $vcpjwxbjtey = "tipo";
        $wpbtlgfi = "mes";
        $GLOBALS["wwfidwvfkhn"] = "tipo";
        $ttivymohoyb = "data1";
        $GLOBALS["fkdaqqh"] = "row";
        $SQLUsuario2 = "SELECT * FROM usuario   where  id_usuario = '" . $row["usuario_id"] . "'";
        $yjhnwvjp = "tipo";
        $GLOBALS["kumoqrxixrn"] = "data1";
        $leoxvkgfqo = "tipo";
        $abnlmfgw = "SQLUsuario2";
        $fnjqbbeum = "row";
        ${$GLOBALS["ehaiieuchq"]} = $conn->prepare($SQLUsuario2);
        $SQLUsuario2->execute();
        ${$GLOBALS["nqlecrlunc"]} = $SQLUsuario2->fetch();
        switch (${$GLOBALS["ucdiergkru"]}["tipo"]) {
            case "contassh":
                ${$GLOBALS["wenlysrdefyv"]} = "SSH";
                break;
            case "revendassh":
                ${$GLOBALS["wenlysrdefyv"]} = "REVENDA SSH";
                break;
            case "usuariossh":
                ${$leoxvkgfqo} = "USU\xc3\x81RIO SSH";
                break;
            case "servidor":
                ${$vcpjwxbjtey} = "SERVIDOR";
                break;
            case "outros":
                ${$yjhnwvjp} = "OUTROS";
                break;
            default:
                ${$GLOBALS["wwfidwvfkhn"]} = "Erro";
                break;
        }
        ${$GLOBALS["kumoqrxixrn"]} = explode(" ", ${$GLOBALS["fkdaqqh"]}["data"]);
        $GLOBALS["xnbeyrlp"] = "row";
        ${$GLOBALS["bmfqylsqcy"]} = explode("-", ${$ttivymohoyb}[0]);
        ${$GLOBALS["ilojptxhni"]} = ${$GLOBALS["bmfqylsqcy"]}[2];
        $eldhyyw = "user2";
        ${$wpbtlgfi} = ${$GLOBALS["bmfqylsqcy"]}[1];
        $GLOBALS["wvpquemgu"] = "user2";
        ${$GLOBALS["bhkuigrps"]} = ${$GLOBALS["bmfqylsqcy"]}[0];
        echo "<div class=\"modal fade\" id=\"squarespaceModal";
        echo ${$GLOBALS["zgoist"]}["id"];
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalLabel\" aria-hidden=\"true\">\n<div class=\"modal-dialog\">\n<div class=\"modal-content\">\n<div class=\"modal-header\">\n<h3 class=\"modal-title\" id=\"lineModalLabel\"><i class=\"fa fa-info\"></i> Informa\xc3\xa7\xc3\xb5es do Ticket</h3>\n<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>\n</div>\n<div class=\"modal-body\">\n<form action=\"pages/chamados/deletar_chamado.php\" method=\"post\">\n<input name=\"chamado\" type=\"hidden\" value=\"";
        $GLOBALS["fyiqzqvwfxq"] = "row";
        echo ${$GLOBALS["zgoist"]}["id"];
        echo "\">\n<input name=\"diretorio\" type=\"hidden\" value=\"../../home.php?page=chamados/encerrados\">\n<div class=\"form-group\">\n<label for=\"exampleInputEmail1\">Motivo</label>\n<input type=\"text\" class=\"form-control\" id=\"exampleInputEmail1\" value=\"";
        echo ${$GLOBALS["zgoist"]}["motivo"];
        $useoxp = "row";
        echo "\" disabled>\n</div>\n<div class=\"form-group\">\n<label for=\"exampleInputEmail1\">Mensagem</label>\n<textarea class=\"form-control\" rows=5 cols=20 wrap=\"off\" disabled>";
        $GLOBALS["gkonpgva"] = "row";
        echo ${$fnjqbbeum}["mensagem"];
        echo "</textarea>\n</div>\n<div class=\"form-group\">\n<label for=\"exampleInputPassword1\">Sua Resposta</label>\n<textarea class=\"form-control\" rows=5 cols=20 wrap=\"off\" placeholder=\"Deixe uma resposta para ele visualizar\" required disabled>";
        echo $row["resposta"];
        echo "</textarea>\n</div>\n</div>\n<div class=\"modal-footer\">\n<div class=\"col-12 text-center\">\n<button class=\"btn btn-danger\">Deletar Ticket</button>\n</form>\n</div>\n</div>\n</div>\n</div>\n</div>\n<tr>\n<td>#";
        echo ${$GLOBALS["xnbeyrlp"]}["id"];
        echo "</td>\n<td><small class=\"label label-success\">";
        echo ucfirst(${$GLOBALS["zgoist"]}["status"]);
        echo "</small></td>\n<td><a href=\"home.php?page=usuario/perfil&id_usuario=";
        echo ${$GLOBALS["wvpquemgu"]}["id_usuario"];
        echo "\">";
        echo ${$eldhyyw}["nome"];
        echo "</a></td>\n<td>";
        echo $row["motivo"];
        echo "</td>\n<td>";
        echo ${$GLOBALS["ilojptxhni"]};
        echo "/";
        echo ${$GLOBALS["rkjnnvpgnr"]};
        echo " - ";
        echo ${$GLOBALS["bhkuigrps"]};
        echo "</td>\n<td>\n<a data-bs-toggle=\"modal\" data-bs-target=\"#squarespaceModal";
        echo $row["id"];
        echo "\" class=\"btn-sm btn-primary\"><i data-feather='eye'></i></a>\n</td>\n</tr>\n";
    }
}
echo "</tbody>\n</table>\n</div>\n</div>\n</div>\n</div>\n</section>\n";
