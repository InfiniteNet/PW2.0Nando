<?php

$GLOBALS["ckuqegabk"] = "sv";
$GLOBALS["rwccopwfiaae"] = "SQLserv";
$GLOBALS["pfhtxwdnlr"] = "row";
$GLOBALS["qtoiheced"] = "usuario_sistema";
$GLOBALS["okhfsbxo"] = "SQLUsuario";
$bxwxkkhdz = "SQLUsuario";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/notificar.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
protegePagina("donoadmin");
echo "<section id=\"multiple-column-form\">\n<div class=\"row\">\n<div class=\"col-12\">\n<div class=\"card\">\n<div class=\"card-header\">\n<h4 class=\"card-title\">Notificar Revendedor</h4>\n</div>\n<div class=\"card-body\">\n<form role=\"form\" name=\"form\" id=\"form\" action=\"pages/notificacoes/notificar_revendedor.php\" method=\"post\">\n<div class=\"row\">\n<div class=\"col-sm-6 col-12\">\n<div class=\"mb-0\">\nSelecione o Revendedor\n</div>\n<fieldset class=\"form-group position-relative\">\n<select class=\"form-control select2\" name=\"revendedor\">\n<option selected=selected>Selecione</option>\n";
${$GLOBALS["okhfsbxo"]} = "SELECT * FROM usuario where tipo='revenda' and subrevenda='nao'";
${$GLOBALS["okhfsbxo"]} = $conn->prepare(${$bxwxkkhdz});
$SQLUsuario->execute();
if ($SQLUsuario->rowCount() > 0) {
    $devbfge = "row";
    while (${$devbfge} = $SQLUsuario->fetch()) {
        $GLOBALS["comfwvs"] = "row";
        if ($row["id_usuario"] != ${$GLOBALS["qtoiheced"]}["id_usuario"]) {
            $ectvqlq = "sv";
            $GLOBALS["wpezzcnsug"] = "SQLserv";
            $GLOBALS["dlraijtrdwg"] = "SQLserv";
            $SQLserv = "SELECT * FROM acesso_servidor where id_usuario='" . ${$GLOBALS["pfhtxwdnlr"]}["id_usuario"] . "'";
            $GLOBALS["mfrtwroo"] = "row";
            ${$GLOBALS["rwccopwfiaae"]} = $conn->prepare($SQLserv);
            $SQLserv->execute();
            ${$ectvqlq} = $SQLserv->rowCount();
            echo "<option value=\"";
            echo ${$GLOBALS["pfhtxwdnlr"]}["id_usuario"];
            echo "\" >";
            echo ucfirst(${$GLOBALS["mfrtwroo"]}["nome"]);
            echo " - Servidores: ";
            echo ${$GLOBALS["ckuqegabk"]};
            echo " </option>\n";
        }
    }
}
echo "</select>\n</fieldset>\n</div>\n<div class=\"col-sm-6 col-12\">\n<div class=\"mb-1\">\n<div class=\"mb-0\">\nSelecione o Tipo\n</div>\n<fieldset class=\"form-group position-relative\">\n<select class=\"form-control select2\" name=\"tipo\">\n<option selected=selected>Selecione</option>\n<option value=\"1\">Fatura</option>\n<option value=\"2\">Outros/Servidores</option>\n</select>\n</fieldset>\n</div>\n</div>\n<div class=\"col-12 text-center\">\n<div class=\"mb-2\">\n<div class=\"mb-0\">\nMensagem\n</div>\n<fieldset class=\"form-group position-relative has-icon-left input-divider-left\">\n<textarea class=\"form-control\"  name=\"msg\" rows=\"5\" placeholder=\"Digite ...\"></textarea>\n<div class=\"form-control-position\">\n<i class=\"fad fa-at\"></i>\n</div>\n</fieldset>\n</div>\n</div>\n<div class=\"col-sm-12 col-12 text-center\">\n<button type=\"submit\" class=\"btn btn-success\">Notificar</button>\n<button type=\"reset\" class=\"btn btn-danger\">Limpar</button>\n</div>\n</div>\n</form>\n</div>\n</div>\n</div>\n</div>\n</section>\n<!-- Input with Icons start -->\n<section id=\"input-with-icons\">\n<div class=\"row match-height\">\n<div class=\"col-12\">\n<div class=\"card\">\n<div class=\"card-header\">\n<h1 class=\"card-title font-medium-2\"><i class=\"fad fa-bell text-warning font-large-1\"></i> Notificar Todos</h1>\n</div>\n<div class=\"card-content\">\n<form role=\"form\" name=\"form\" id=\"form\" action=\"pages/notificacoes/notificar_todos.php\" method=\"post\">\n<div class=\"card-body\">\n<div class=\"row\">\n<input type=\"hidden\" class=\"form-control\" name=\"clientes\" value=\"1\">\n<input type=\"hidden\" class=\"form-control\" name=\"tipo\" value=\"2\">\n<div class=\"col-12 text-center\">\n<div class=\"mb-2\">\n<div class=\"mb-0\">\nMensagem\n</div>\n<fieldset class=\"form-group position-relative has-icon-left input-divider-left\">\n<textarea class=\"form-control\"  name=\"msg\" rows=\"5\" placeholder=\"Digite ...\"></textarea>\n<div class=\"form-control-position\">\n<i class=\"fad fa-at\"></i>\n</div>\n</fieldset>\n</div>\n</div>\n<div class=\"col-sm-12 col-12 text-center\">\n<button type=\"submit\" class=\"btn btn-success\">Notificar</button>\n<button type=\"reset\" class=\"btn btn-danger\">Limpar</button>\n</div>\n</div>\n</div>\n</form>\n</div>\n</div>\n</div>\n</div>\n</section>\n<!-- Input with Icons end -->\n";
