<?php

$GLOBALS["mgwclrdk"] = "acesso_server";
$GLOBALS["nvvpkspwaub"] = "SQLServidor";
$GLOBALS["pilhingjenu"] = "row";
$GLOBALS["hhffefktsv"] = "SQL";
$GLOBALS["nginajsof"] = "row_srv";
$GLOBALS["oeytpwruevl"] = "SQLAcesso";
$xdjeqmpbfo = "SQLAcesso";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/addservidor.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
protegePagina("donoadmin");
echo "<!-- Input with Icons start -->\n<div class=\"active\"><a class=\"d-flex align-items-center\" href=\"home.php\"><i data-feather=\"home\"></i><span class=\"menu-title text-truncate\" data-i18n=\"Dashboards\">DASHBOARD</span></a>\n</div>\n<section id=\"multiple-column-form\">\n<div class=\"row\">\n<div class=\"col-12\">\n<div class=\"card\">\n<div class=\"card-header\">\n<h4 class=\"card-title\">Adicionar servidor a revenda</h4>\n</div>\n<div class=\"card-content\">\n<form action=\"pages/usuario/addservidor_exe.php\" method=\"POST\" role=\"form\">\n<div class=\"card-body\">\n<div class=\"row\">\n<div class=\"demo-spacing-0 mb-2\">\n<div class=\"alert alert-info\" role=\"alert\">\n<div class=\"alert-body d-flex align-items-center\">\n<i data-feather=\"info\" class=\"me-50\"></i>\n<span>Logo Abaixo voc\xc3\xaa pode adicionar um servidor para uma revenda com limite!</span>\n</div>\n</div>\n</div>\n<div class=\"col-md-6 col-12\">\n<div class=\"mb-1\">\n<label class=\"form-label\" for=\"basicSelect\">Servidor</label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather=\"server\"></i></span>\n<select class=\"form-select\" name=\"servidor\" id=\"servidor\">\n";
${$xdjeqmpbfo} = "select * from servidor";
${$GLOBALS["oeytpwruevl"]} = $conn->prepare(${$GLOBALS["oeytpwruevl"]});
$SQLAcesso->execute();
if ($SQLAcesso->rowCount() > 0) {
    while (${$GLOBALS["nginajsof"]} = $SQLAcesso->fetch()) {
        $GLOBALS["inwkqfwksm"] = "row_srv";
        echo "<option value=\"";
        echo ${$GLOBALS["nginajsof"]}["id_servidor"];
        echo "\"> ";
        echo $row_srv["nome"];
        echo " - ";
        echo ${$GLOBALS["nginajsof"]}["ip_servidor"];
        echo "</option>\n";
    }
} else {
    echo "<option>Nenhum Servidor</option>\n";
}
echo "</select>\n</div>\n</div>\n</div>\n<div class=\"col-md-6 col-12\">\n<div class=\"mb-2\">\n<label class=\"form-label\" for=\"country-floating\">Limite</label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather='smartphone'></i></span>\n<input type=\"number\" min=\"5\" max=\"500\" name=\"limite\" id=\"limite\" placeholder=\"5\" value=\"5\" class=\"form-control\" required>\n</div>\n</div>\n</div>\n<div class=\"col-12\">\n<div class=\"mb-1\">\n<label class=\"form-label\" for=\"basicSelect\">Revendedor</label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather=\"users\"></i></span>\n<select class=\"form-select\" name=\"revendedor\" id=\"revendedor\">\n";
${$GLOBALS["hhffefktsv"]} = "SELECT * FROM usuario where tipo='revenda' and subrevenda='nao' and id_mestre=0 ORDER BY id_usuario DESC";
${$GLOBALS["hhffefktsv"]} = $conn->prepare(${$GLOBALS["hhffefktsv"]});
$SQL->execute();
if ($SQL->rowCount() > 0) {
    while (${$GLOBALS["pilhingjenu"]} = $SQL->fetch()) {
        $GLOBALS["nocoyms"] = "row";
        ${$GLOBALS["nvvpkspwaub"]} = "select * from acesso_servidor  WHERE id_usuario = '" . ${$GLOBALS["pilhingjenu"]}["id_usuario"] . "' ";
        $GLOBALS["vebjelsyj"] = "SQLServidor";
        $dtuocttu = "SQLServidor";
        $SQLServidor = $conn->prepare($SQLServidor);
        $SQLServidor->execute();
        $cyybctdrg = "row";
        ${$GLOBALS["mgwclrdk"]} = $SQLServidor->rowCount();
        echo "<option value=\"";
        echo ${$GLOBALS["pilhingjenu"]}["id_usuario"];
        echo "\">Nome: ";
        echo ${$GLOBALS["nocoyms"]}["nome"];
        echo " - Login: ";
        echo ${$cyybctdrg}["login"];
        echo " </option>\n";
    }
} else {
    echo "<option>Nenhum Revendedor</option>\n";
}
echo "</select><a href=\"?page=usuario/1-etapa\" class=\"btn-sm btn-success\"><i data-feather='user-plus'></i></a>\n</div>\n</div>\n</div>\n<div class=\"col-12 text-center\">\n<button type=\"submit\" class=\"btn btn-success me-1 waves-effect waves-float waves-light\">Adicionar</button>\n<button type=\"reset\" class=\"btn btn-danger waves-effect\">Limpar</button>\n</div>\n</div>\n</div>\n</form>\n</div>\n</div>\n</div>\n</div>\n</section>\n<!-- Input with Icons end -->\n";
