<?php

$GLOBALS["casedwffdaq"] = "senha_ssh";
$GLOBALS["mwccnhjgduxy"] = "i";
$GLOBALS["dajxxmm"] = "tmp";
$GLOBALS["yqqixpf"] = "pass";
$GLOBALS["jrobtypsrree"] = "salt";
$GLOBALS["vfmfbmtlcuj"] = "perm_v2";
$mlgkejrclwoc = "row";
$GLOBALS["dtywuw"] = "row";
$GLOBALS["uftdyffm"] = "SQL";
$GLOBALS["lgmqlqxbjt"] = "usuario";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/input.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
protegePagina("user");
if (${$GLOBALS["lgmqlqxbjt"]}["ativo"] == 2) {
    echo "<script type=\"text/javascript\">";
    echo "window.location=\"home.php?page=suspenso\";";
    echo "</script>";
    exit;
}
$GLOBALS["weompg"] = "SQL";
$GLOBALS["tdlndmkn"] = "senha_ssh";
echo "<script>\n\$(document).ready(function(\$) {\n//\$(\"[data-mask]\").inputmask();\n//Inputmask().mask(document.querySelectorAll(\"input\"));\n\$('#celular').inputmask(\"(99)99999-9999\"); //static mask\n});\n</script>\n";
${$GLOBALS["uftdyffm"]} = "SELECT permitir_demo FROM usuario where id_usuario = '" . $_SESSION["usuarioID"] . "'";
${$GLOBALS["weompg"]} = $conn->prepare(${$GLOBALS["uftdyffm"]});
$SQL->execute();
${$GLOBALS["dtywuw"]} = $SQL->fetch();
${$GLOBALS["vfmfbmtlcuj"]} = ${$mlgkejrclwoc}["permitir_demo"];
function geraSenha()
{
    $GLOBALS["emilsdove"] = "i";
    ${$GLOBALS["jrobtypsrree"]} = "1234567890";
    srand((double) microtime() * 1000000);
    $GLOBALS["yvwmytmgty"] = "i";
    $i = "";
    ${$GLOBALS["yqqixpf"]} = "";
    while ($i <= 7) {
        $GLOBALS["zwsqbmyqc"] = "num";
        $duwsptadylr = "tmp";
        $num = rand() % 10;
        $mkgwmp = "pass";
        $GLOBALS["yjhavllscjs"] = "salt";
        $GLOBALS["higfexn"] = "num";
        $tmp = substr($salt, $num, 1);
        $pass = ${$GLOBALS["yqqixpf"]} . ${$GLOBALS["dajxxmm"]};
        ${$GLOBALS["mwccnhjgduxy"]}++;
    }
    return ${$GLOBALS["yqqixpf"]};
}
${$GLOBALS["casedwffdaq"]} = geraSenha();
echo "<!-- Input with Icons start -->\n<section id=\"multiple-column-form\">\n<div class=\"row\">\n<div class=\"col-12\">\n<div class=\"card\">\n<div class=\"card-header\">\n<h4 class=\"card-title\">Adicionar Revendedor ao Painel</h4>\n</div>\n<div class=\"card-body\">\n<form data-toggle=\"validator\" action=\"pages/system/funcoes.usuario.php\" method=\"GET\" role=\"form\">\n<div class=\"row\">\n<div class=\"col-12\">\n<p>Adicionar revenda!</p>\n</div>\n<div class=\"col-md-6 col-12\">\n<div class=\"mb-1\">\n<div class=\"form-group\">\n<input type=\"hidden\" class=\"form-control\" id=\"owner\" name=\"owner\" value=\"";
echo $_SESSION["usuarioID"];
echo "\">\n<input type=\"hidden\" class=\"form-control\" id=\"diretorio\" name=\"diretorio\" value=\"../../home.php?page=usuario/adicionar\">\n<input type=\"hidden\" class=\"form-control\" id=\"op\" name=\"op\" value=\"new\">\n<input type=\"hidden\" class=\"check\" id=\"radio\" name=\"tipo\" value=\"1\">\n</div>\n<label class=\"form-label\" for=\"first-name-icon\">N\xc3\xadvel da Revenda</label>\n<div class=\"input-group input-group-merge\">\n<ul class=\"list-unstyled mb-0\">\n<li class=\"d-inline-block mr-2\">\n<fieldset>\n<div class=\"vs-radio-con\">\n<input id=\"radio1\" type=\"radio\" name=\"subrevenda\" value=\"nao\">\n<span class=\"vs-radio\">\n<span class=\"vs-radio--border\"></span>\n<span class=\"vs-radio--circle\"></span>\n</span>\n<span class=\"\">Revendedor</span>\n</div>\n</fieldset>\n</li>\n<li class=\"d-inline-block mr-2\">\n<fieldset>\n<div class=\"vs-radio-con vs-radio-success\">\n<input id=\"radio2\" type=\"radio\" name=\"subrevenda\" value=\"sim\" checked >\n<span class=\"vs-radio\">\n<span class=\"vs-radio--border\"></span>\n<span class=\"vs-radio--circle\"></span>\n</span>\n<span class=\"\">Sub-Revendedor</span>\n</div>\n</fieldset>\n</li>\n</ul>\n</div>\n</div>\n</div>\n<div class=\"col-md-6 col-12\">\n<div class=\"mb-2\">\n<label class=\"form-label\" for=\"first-name-icon\">Valor</label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather=\"dollar-sign\"></i></span>\n<input type=\"number\" pattern=\"[0-9]+([,\\.][0-9]+)?\" step=\"0.01\" min=\"0\" name=\"valorrev\" id=\"valorrev\" class=\"form-control\">\n</div>\n</div>\n</div>\n<div class=\"col-md-6 col-12\">\n<div class=\"mb-1\">\n<label class=\"form-label\" for=\"first-name-icon\">E-MAIL</label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather=\"mail\"></i></span>\n<input type=\"email\" class=\"form-control\" minlength=\"4\" maxlength=\"40\" id=\"email\" name=\"email\" placeholder=\"sshexemplo@gmail.com\">\n</div>\n</div>\n</div>\n<div class=\"col-md-6 col-12\">\n<div class=\"mb-2\">\n<label class=\"form-label\" for=\"first-name-icon\">Nome</label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather=\"user\"></i></span>\n<input type=\"text\" name=\"nome\" id=\"nome\" class=\"form-control\" minlength=\"4\" maxlength=\"20\" placeholder=\"Digite o Nome...\" required>\n</div>\n</div>\n</div>\n<div class=\"col-md-6 col-12\">\n<div class=\"mb-1\">\n<label class=\"form-label\" for=\"country-floating\">Validade em dias</label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather='calendar'></i></span>\n<input type=\"number\" min=\"1\" max=\"1000\" name=\"dias\" id=\"dias\" class=\"form-control\" placeholder=\"1\" value=\"1\" required>\n</div>\n</div>\n</div>\n<div class=\"col-md-6 col-12\">\n<div class=\"mb-2\">\n<label class=\"form-label\" for=\"first-name-icon\">Celular</label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather=\"smartphone\"></i></span>\n<input type=\"text\" name=\"celular\" id=\"celular\" placeholder=\"Digite os 11 Dig\xc3\xadtos...\" class=\"form-control\" minlength=\"10\" maxlength=\"11\">\n</div>\n</div>\n</div>\n<div class=\"col-md-6 col-12\">\n<div class=\"mb-1\">\n<label class=\"form-label\" for=\"first-name-icon\">Usu\xc3\xa1rio</label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather=\"user\"></i></span>\n<input type=\"text\" name=\"login\" id=\"login\" oninput=\"this.value = this.value.toLowerCase()\" class=\"form-control\" minlength=\"4\" maxlength=\"12\" placeholder=\"Digite o Usuario...\" required>\n</div>\n</div>\n</div>\n<div class=\"col-md-6 col-12\">\n<div class=\"mb-2\">\n<label class=\"form-label\" for=\"first-name-icon\">Senha</label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather=\"key\"></i></span>\n<input type=\"text\" class=\"form-control\" name=\"senha\" minlength=\"4\" maxlength=\"10\" id=\"senha\" placeholder=\"Digite a Senha...\" value=\"";
echo ${$GLOBALS["tdlndmkn"]};
echo "\" required>\n</div>\n</div>\n</div>\n";
if (${$GLOBALS["vfmfbmtlcuj"]} == 1) {
    echo "<div class=\"col-12\">\n<div class=\"mb-2\">\n<div class=\"row custom-options-checkable g-2\">\n<div class=\"col-md-6\">\n<input class=\"custom-option-item-check\" type=\"radio\" name=\"acesso\" id=\"customOptionsCheckableRadiosWithIcon2\" value=\"0\" checked />\n<label class=\"custom-option-item text-center text-center p-1\" for=\"customOptionsCheckableRadiosWithIcon2\">\n<i data-feather=\"shield\" class=\"font-large-1 mb-75\"></i>\n<span class=\"custom-option-item-title h4 d-block\">ACESSO SSH</span>\n<small>Nesse modo ele poder\xc3\xa1 criar apenas contas ssh</small>\n</label>\n</div>\n<div class=\"col-md-6\">\n<input class=\"custom-option-item-check\" type=\"radio\" name=\"acesso\" id=\"customOptionsCheckableRadiosWithIcon3\" value=\"1\" />\n<label class=\"custom-option-item text-center p-1\" for=\"customOptionsCheckableRadiosWithIcon3\">\n<i data-feather=\"link\" class=\"font-large-1 mb-75\"></i>\n<span class=\"custom-option-item-title h4 d-block\">ACESSO SSH E V2RAY</span>\n<small>Nesse modo ele poder\xc3\xa1 criar contas ssh e v2ray</small>\n</label>\n</div>\n</div>\n</div>\n</div>\n";
} else {
    echo "<input type=\"hidden\" class=\"check\" id=\"radio\" name=\"acesso\" value=\"0\">\n";
}
echo "<div class=\"col-12 text-center\">\n<button type=\"submit\" class=\"btn btn-success me-1 waves-effect waves-float waves-light\">Criar</button>\n<button type=\"reset\" class=\"btn btn-danger waves-effect\">Limpar</button>\n</div>\n</div>\n</form>\n</div>\n</div>\n</div>\n</div>\n</section>\n<!-- Input with Icons end -->\n";
