<?php

$GLOBALS["giripl"] = "pass";
$GLOBALS["puhdyuumfhn"] = "tmp";
$pxnfezbny = "senha_ssh";
$GLOBALS["djgcpnmeoid"] = "senha_ssh";
$GLOBALS["uprpaicikhz"] = "num";
$GLOBALS["qngdpxsddvt"] = "i";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/1-etapa.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
protegePagina("donoadmin");
function geraSenha()
{
    $GLOBALS["akoaefnv"] = "pass";
    $ijhcvxlrq = "pass";
    $GLOBALS["kimtfjxr"] = "salt";
    $salt = "1234567890";
    srand((double) microtime() * 1000000);
    ${$GLOBALS["qngdpxsddvt"]} = "";
    ${$ijhcvxlrq} = "";
    while (${$GLOBALS["qngdpxsddvt"]} <= 7) {
        $GLOBALS["csppqeuv"] = "salt";
        ${$GLOBALS["uprpaicikhz"]} = rand() % 10;
        $njgsvgzn = "pass";
        ${$GLOBALS["puhdyuumfhn"]} = substr($salt, ${$GLOBALS["uprpaicikhz"]}, 1);
        ${$njgsvgzn} .= ${$GLOBALS["puhdyuumfhn"]};
        ${$GLOBALS["qngdpxsddvt"]}++;
    }
    return $pass;
}
${$pxnfezbny} = geraSenha();
echo "<div class=\"active\"><a class=\"d-flex align-items-center\" href=\"home.php\"><i data-feather=\"home\"></i><span class=\"menu-title text-truncate\" data-i18n=\"Dashboards\">DASHBOARD</span></a>\n</div>\n<section id=\"multiple-column-form\">\n<div class=\"row\">\n<div class=\"col-12\">\n<div class=\"card\">\n<div class=\"card-header\">\n<h4 class=\"card-title\">Adicionar Revenda ao Painel</h4>\n</div>\n<div class=\"card-body\">\n<form data-toggle=\"validator\" action=\"pages/usuario/adicionar_exe.php\" method=\"POST\" role=\"form\">\n<div class=\"row\">\n<div class=\"col-12\">\n<p>Adicionar revenda!</p>\n</div>\n<div class=\"col-md-6 col-12\">\n<div class=\"mb-1\">\n<label class=\"form-label\" for=\"first-name-icon\">E-MAIL</label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather=\"mail\"></i></span>\n<input type=\"email\" class=\"form-control\" minlength=\"4\" maxlength=\"40\" id=\"email\" name=\"email\" placeholder=\"sshexemplo@gmail.com\" required>\n</div>\n</div>\n</div>\n<div class=\"col-md-6 col-12\">\n<div class=\"mb-2\">\n<label class=\"form-label\" for=\"first-name-icon\">Nome</label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather=\"user\"></i></span>\n<input type=\"text\" name=\"nome\" id=\"nome\" class=\"form-control\" minlength=\"4\" maxlength=\"20\" placeholder=\"Digite o Nome...\" required>\n</div>\n</div>\n</div>\n<div class=\"col-md-6 col-12\">\n<div class=\"mb-1\">\n<label class=\"form-label\" for=\"country-floating\">Validade em dias</label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather='calendar'></i></span>\n<input type=\"number\" min=\"1\" max=\"366\" name=\"dias\" id=\"dias\" class=\"form-control\" placeholder=\"31\" value=\"31\" required=\"required\">\n</div>\n</div>\n</div>\n<div class=\"col-md-6 col-12\">\n<div class=\"mb-2\">\n<label class=\"form-label\" for=\"first-name-icon\">Celular</label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather=\"smartphone\"></i></span>\n<input type=\"text\" name=\"celular\" id=\"celular\" placeholder=\"Digite os 11 Dig\xc3\xadtos...\" class=\"form-control\" minlength=\"10\" maxlength=\"11\" required>\n</div>\n</div>\n</div>\n<div class=\"col-md-6 col-12\">\n<div class=\"mb-1\">\n<label class=\"form-label\" for=\"first-name-icon\">Usu\xc3\xa1rio</label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather=\"user\"></i></span>\n<input type=\"text\" name=\"login\" id=\"login\" class=\"form-control\" minlength=\"4\" maxlength=\"12\" placeholder=\"Digite o Usu\xc3\xa1rio...\" required=\"\">\n</div>\n</div>\n</div>\n<div class=\"col-md-6 col-12\">\n<div class=\"mb-2\">\n<label class=\"form-label\" for=\"first-name-icon\">Senha</label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather=\"key\"></i></span>\n<input type=\"text\" class=\"form-control\" name=\"senha\" minlength=\"4\" maxlength=\"10\" id=\"senha\" placeholder=\"Digite a Senha...\" required=\"\" value=\"";
echo ${$GLOBALS["djgcpnmeoid"]};
echo "\">\n</div>\n</div>\n</div>\n<div class=\"col-12\">\n<div class=\"mb-2\">\n<div class=\"row custom-options-checkable g-2\">\n<div class=\"col-md-6\">\n<input class=\"custom-option-item-check\" type=\"radio\" name=\"acesso\" id=\"customOptionsCheckableRadiosWithIcon2\" value=\"0\" checked />\n<label class=\"custom-option-item text-center text-center p-1\" for=\"customOptionsCheckableRadiosWithIcon2\">\n<i data-feather=\"shield\" class=\"font-large-1 mb-75\"></i>\n<span class=\"custom-option-item-title h4 d-block\">ACESSO SSH</span>\n<small>Nesse modo ele poder\xc3\xa1 criar apenas contas ssh</small>\n</label>\n</div>\n<div class=\"col-md-6\">\n<input class=\"custom-option-item-check\" type=\"radio\" name=\"acesso\" id=\"customOptionsCheckableRadiosWithIcon3\" value=\"1\" />\n<label class=\"custom-option-item text-center p-1\" for=\"customOptionsCheckableRadiosWithIcon3\">\n<i data-feather=\"link\" class=\"font-large-1 mb-75\"></i>\n<span class=\"custom-option-item-title h4 d-block\">ACESSO SSH E V2RAY</span>\n<small>Nesse modo ele poder\xc3\xa1 criar contas ssh e v2ray</small>\n</label>\n</div>\n</div>\n</div>\n</div>\n<input type=\"hidden\" class=\"check\" id=\"radio1\" name=\"tipo\" value=\"revenda\">\n<div class=\"col-12 text-center\">\n<button type=\"submit\" class=\"btn btn-success me-1 waves-effect waves-float waves-light\">Criar</button>\n<button type=\"reset\" class=\"btn btn-danger waves-effect\">Limpar</button>\n</div>\n</div>\n</form>\n</div>\n</div>\n</div>\n</div>\n</section>\n<!-- Input with Icons end -->\n<script type=\"text/javascript\">\n\$('.descricao').tooltipsy({\noffset: [0, 10],\ncss: {\n'padding': '10px',\n'max-width': '200px',\n'color': '#303030',\n'background-color': '#f5f5b5',\n'border': '1px solid #deca7e',\n'-moz-box-shadow': '0 0 10px rgba(0, 0, 0, .5)',\n'-webkit-box-shadow': '0 0 10px rgba(0, 0, 0, .5)',\n'box-shadow': '0 0 10px rgba(0, 0, 0, .5)',\n'text-shadow': 'none'\n}\n});\n</script>\n</div>\n";
