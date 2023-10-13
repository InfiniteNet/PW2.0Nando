<?php

$GLOBALS["netbskcilbk"] = "perm_v2";
$GLOBALS["tfqerbk"] = "senha_ssh";
$GLOBALS["mjwrbk"] = "user_ssh";
$GLOBALS["nkendkbdoh"] = "donouser";
$GLOBALS["liizpvybyf"] = "SQL";
$GLOBALS["nxrrdyuxft"] = "resta";
$GLOBALS["mvcqcql"] = "SQLSub";
$GLOBALS["jsbjtwarfv"] = "contas_ssh_criadas";
$GLOBALS["whgsughfgw"] = "SQLContasSSH";
$GLOBALS["tbkxrvuxtm"] = "servidor";
$GLOBALS["dvbkbgec"] = "SQLServidor";
$GLOBALS["hdeljualbwen"] = "row_srv";
$GLOBALS["vxporyfdb"] = "SQLAcesso";
$uxidtiy = "donouser";
$GLOBALS["sqxmupk"] = "num";
$GLOBALS["fmkpkviwstr"] = "i";
$GLOBALS["mwicfecebz"] = "tmp";
$GLOBALS["zctehvdlkl"] = "pass";
$GLOBALS["plztlsn"] = "salt";
$GLOBALS["iblpbdm"] = "SQLV";
$GLOBALS["lpzqyrtxg"] = "SQLV";
$GLOBALS["yycrwfjvp"] = "usuario";
$GLOBALS["egpbkkym"] = "senha_ssh";
$GLOBALS["lkrnbr"] = "SQLV";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/add_teste.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
$jnbkeqk = "rowv";
protegePagina("user");
if (${$GLOBALS["yycrwfjvp"]}["ativo"] == 2) {
    echo "<script type=\"text/javascript\">";
    echo "window.location=\"home.php?page=suspenso\";";
    echo "</script>";
    exit;
}
$gzivigb = "rowv";
${$GLOBALS["lpzqyrtxg"]} = "SELECT permitir_demo FROM usuario where id_usuario = '" . $_SESSION["usuarioID"] . "'";
${$GLOBALS["iblpbdm"]} = $conn->prepare(${$GLOBALS["lkrnbr"]});
$GLOBALS["itcbxiu"] = "perm_v2";
$SQLV->execute();
${$gzivigb} = $SQLV->fetch();
${$GLOBALS["itcbxiu"]} = ${$jnbkeqk}["permitir_demo"];
$avlvvawi = "donouser";
function geraUser()
{
    $GLOBALS["bpiyrnvrmo"] = "i";
    ${$GLOBALS["plztlsn"]} = "1234567890";
    srand((double) microtime() * 1000000);
    $GLOBALS["zjajnq"] = "i";
    $qdfnlwuuwjc = "pass";
    $i = "";
    ${$GLOBALS["zctehvdlkl"]} = "";
    while ($i <= 2) {
        $GLOBALS["cinyffifgwl"] = "num";
        $sfgknly = "tmp";
        $tqzpdltuc = "pass";
        $nzvzkqxc = "num";
        $num = rand() % 10;
        $tmp = substr(${$GLOBALS["plztlsn"]}, $num, 1);
        $pass = ${$GLOBALS["zctehvdlkl"]} . ${$GLOBALS["mwicfecebz"]};
        ${$GLOBALS["fmkpkviwstr"]}++;
    }
    return ${$qdfnlwuuwjc};
}
$wxbenzbm = "user_ssh";
$mpqbwjkh = "SQLAcesso";
$user_ssh = geraUser();
function geraSenha()
{
    $qqikidnjthdl = "salt";
    $salt = "1234567890";
    srand((double) microtime() * 1000000);
    $mbiprjqcc = "pass";
    ${$GLOBALS["fmkpkviwstr"]} = "";
    ${$mbiprjqcc} = "";
    while (${$GLOBALS["fmkpkviwstr"]} <= 5) {
        $cxwlepd = "tmp";
        $azhhqobhj = "pass";
        $GLOBALS["giwjptusdj"] = "pass";
        $dtwdtfci = "num";
        ${$GLOBALS["sqxmupk"]} = rand() % 10;
        $gyvvcydwaq = "i";
        $GLOBALS["ubgfieqcnn"] = "tmp";
        ${$cxwlepd} = substr(${$GLOBALS["plztlsn"]}, ${$dtwdtfci}, 1);
        $pass = ${$azhhqobhj} . $tmp;
        ${$gyvvcydwaq}++;
    }
    return ${$GLOBALS["zctehvdlkl"]};
}
${$GLOBALS["egpbkkym"]} = geraSenha();
$GLOBALS["tlcftwvklh"] = "SQL";
echo "<script>\n\$(document).ready(function(\$) {\n//Initialize Select2 Elements\n\$(\".select2\").select2();\n});\n</script>\n<div class=\"active\"><a class=\"d-flex align-items-center\" href=\"home.php\"><i data-feather=\"home\"></i><span class=\"menu-title text-truncate\" data-i18n=\"Dashboards\">DASHBOARD</span></a>\n</div>\n<!-- Input with Icons start -->\n<section id=\"multiple-column-form\">\n<div class=\"row\">\n<div class=\"col-12\">\n<div class=\"card\">\n<div class=\"card-header\">\n<h4 class=\"card-title\"><a class=\"text-secondary\">Criar Teste SSH</a></h4>\n</div>\n<div class=\"card-body\">\n<form data-toggle=\"validator\" action=\"../pages/system/conta.ssh.php\" method=\"POST\" role=\"form\">\n<div class=\"row\">\n<div class=\"demo-spacing-0 mb-2\">\n<div class=\"alert alert-warning\" role=\"alert\">\n<div class=\"alert-body d-flex align-items-center\">\n<i data-feather=\"info\" class=\"me-50\"></i>\n<span>Esse login ser\xc3\xa1 exclu\xc3\xaddo automaticamente, n\xc3\xa3o adianta acrescentar dias posteriormente!!!</span>\n</div>\n</div>\n</div>\n<div class=\"col-md-6 col-12\">\n<div class=\"mb-1\">\n<label class=\"form-label\" for=\"basicSelect\"><a class=\"text-info\">Servidor</a></label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather=\"server\"></i></span>\n<select class=\"form-select\" name=\"acesso_servidor\" id=\"acesso_servidor\">\n";
$kwbeuvhk = "usuario";
${$GLOBALS["vxporyfdb"]} = "select * from acesso_servidor WHERE id_usuario = '" . $usuario["id_usuario"] . "'";
${$mpqbwjkh} = $conn->prepare(${$GLOBALS["vxporyfdb"]});
$SQLAcesso->execute();
if ($SQLAcesso->rowCount() > 0) {
    while (${$GLOBALS["hdeljualbwen"]} = $SQLAcesso->fetch()) {
        $irwkhwdbtc = "SQLServidor";
        $GLOBALS["nmthyoogw"] = "contas_ssh_criadas";
        $lorsxnqpprud = "row_srv";
        $rkgouarjlb = "SQLContasSSH";
        $GLOBALS["duohgtcnb"] = "SQLSub";
        $gwqdvbdre = "SQLSub";
        $GLOBALS["lppjtn"] = "SQLSub";
        $GLOBALS["cwsonxnaa"] = "SQLServidor";
        $GLOBALS["jgpgbbmc"] = "contas_ssh_criadas";
        $contas_ssh_criadas = 0;
        $SQLServidor = "select * from servidor WHERE id_servidor = '" . $row_srv["id_servidor"] . "'";
        ${$GLOBALS["dvbkbgec"]} = $conn->prepare($SQLServidor);
        $SQLServidor->execute();
        $jhmhncmfu = "SQLContasSSH";
        $fipnvk = "SQLContasSSH";
        ${$GLOBALS["tbkxrvuxtm"]} = $SQLServidor->fetch();
        $GLOBALS["hxynbworo"] = "SQLSub";
        ${$GLOBALS["whgsughfgw"]} = "SELECT sum(acesso) AS quantidade  FROM conta_ssh where id_servidor = '" . ${$GLOBALS["hdeljualbwen"]}["id_servidor"] . "' and id_usuario='" . $_SESSION["usuarioID"] . "' ";
        ${$rkgouarjlb} = $conn->prepare(${$fipnvk});
        $SQLContasSSH->execute();
        ${$jhmhncmfu} = $SQLContasSSH->fetch();
        $GLOBALS["tutwlolo"] = "row_srv";
        ${$GLOBALS["jsbjtwarfv"]} += ${$GLOBALS["whgsughfgw"]}["quantidade"];
        ${$GLOBALS["lppjtn"]} = "SELECT sum(qtd) AS limites FROM acesso_servidor WHERE id_servidor = '" . ${$GLOBALS["hdeljualbwen"]}["id_servidor"] . "' and id_mestre='" . $_SESSION["usuarioID"] . "' ";
        $GLOBALS["onlqaludzu"] = "contas_ssh_criadas";
        ${$gwqdvbdre} = $conn->prepare(${$GLOBALS["mvcqcql"]});
        $SQLSub->execute();
        ${$GLOBALS["duohgtcnb"]} = $SQLSub->fetch();
        ${$GLOBALS["onlqaludzu"]} += ${$GLOBALS["hxynbworo"]}["limites"];
        ${$GLOBALS["hdeljualbwen"]}["qtd"] -= ${$GLOBALS["nmthyoogw"]};
        echo "<option value=\"";
        echo ${$GLOBALS["hdeljualbwen"]}["id_acesso_servidor"];
        echo "\"><a class=\"text-info\">";
        echo ${$GLOBALS["tbkxrvuxtm"]}["nome"];
        echo "</a> - Resta <a class=\"text-warning\">";
        echo ${$GLOBALS["nxrrdyuxft"]};
        echo "</a> de <a class=\"text-success\">";
        echo ${$GLOBALS["tutwlolo"]}["qtd"];
        echo ".</a></option>\n";
    }
}
echo "</select>\n</div>\n</div>\n</div>\n<div class=\"col-md-6 col-12\">\n<div class=\"mb-1\">\n<label class=\"form-label\" for=\"basicSelect\"><a class=\"text-info\">Quem ser\xc3\xa1 o Dono?</a></label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather=\"users\"></i></span>\n";
${$GLOBALS["liizpvybyf"]} = "SELECT * FROM usuario where id_usuario = '" . $_SESSION["usuarioID"] . "'";
${$GLOBALS["tlcftwvklh"]} = $conn->prepare(${$GLOBALS["liizpvybyf"]});
$SQL->execute();
${$uxidtiy} = $SQL->fetch();
echo "<input type=\"text\" class=\"form-control\" name=\"usuario\" id=\"usuario\" disabled value=\"";
echo ${$GLOBALS["nkendkbdoh"]}["login"];
echo "\" required=\"\">\n<input type=\"hidden\" class=\"form-control\" id=\"usuario\" name=\"usuario\" value=\"";
echo ${$avlvvawi}["id_usuario"];
echo "\">\n</div>\n</div>\n</div>\n<div class=\"col-md-6 col-12\">\n<div class=\"mb-1\">\n<label class=\"form-label\" for=\"first-name-icon\"><a class=\"text-info\">Login</a></label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather=\"user\"></i></span>\n<input type=\"text\" name=\"login_ssh\" id=\"login_ssh\" oninput=\"this.value = this.value.toLowerCase()\" class=\"form-control\" minlength=\"4\" maxlength=\"12\" placeholder=\"Digite a Senha\" required=\"\" value=\"teste";
echo ${$GLOBALS["mjwrbk"]};
echo "\">\n</div>\n</div>\n</div>\n<div class=\"col-md-6 col-12\">\n<div class=\"mb-2\">\n<label class=\"form-label\" for=\"country-floating\"><a class=\"text-info\">Senha</a></label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather='lock'></i></span>\n<input type=\"text\" class=\"form-control\" name=\"senha_ssh\" minlength=\"4\" maxlength=\"10\" id=\"senha_ssh\" placeholder=\"Digite a Senha\" required=\"\" value=\"";
echo ${$GLOBALS["tfqerbk"]};
echo "\">\n</div>\n</div>\n</div>\n<div class=\"col-12\">\n<div class=\"mb-1\">\n<label class=\"form-label\" for=\"basicSelect\"><a class=\"text-info\">Tempo de Dura\xc3\xa7\xc3\xa3o</a></label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather=\"clock\"></i></span>\n<select class=\"form-select\" name=\"tempuser\" id=\"tempuser\">\n<option value=\"30\">30 Minutos</option>\n<option value=\"60\">1 hora</option>\n<option value=\"180\">3 horas</option>\n<option selected=\"selected\" value=\"360\">6 horas <small>(recomendado)</small></option>\n<option value=\"720\">12 horas</option>\n<option value=\"1440\">24 horas</option>\n</select>\n<input type=\"hidden\" name=\"dias\" id=\"dias\" class=\"form-control\" value=\"1\">\n</div>\n</div>\n<input type=\"hidden\" name=\"acessos\" id=\"acessos\" class=\"form-control\" value=\"1\">\n</div>\n";
if (${$GLOBALS["netbskcilbk"]} == 0) {
    echo "<input type=\"hidden\" class=\"form-control\" id=\"tipoconta\" name=\"tipoconta\" value=\"ssh\">\n";
} else {
    echo "<div class=\"col-12\">\n<div class=\"mb-2\">\n<div class=\"row custom-options-checkable g-1\">\n<div class=\"col-md-6\">\n<input class=\"custom-option-item-check\" type=\"radio\" name=\"tipoconta\" id=\"customOptionsCheckableRadiosWithIcon2\" value=\"ssh\" checked />\n<label class=\"custom-option-item text-center text-center p-1\" for=\"customOptionsCheckableRadiosWithIcon2\">\n<i data-feather=\"shield\" class=\"font-large-1 mb-75\"></i>\n<span class=\"custom-option-item-title h4 d-block\">CONTA SSH</span>\n<small>Nesse modo funcionar\xc3\xa1 apenas ssh</small>\n</label>\n</div>\n<div class=\"col-md-6\">\n<input class=\"custom-option-item-check\" type=\"radio\" name=\"tipoconta\" id=\"customOptionsCheckableRadiosWithIcon3\" value=\"v2ray\" />\n<label class=\"custom-option-item text-center p-1\" for=\"customOptionsCheckableRadiosWithIcon3\">\n<i data-feather=\"link\" class=\"font-large-1 mb-75\"></i>\n<span class=\"custom-option-item-title h4 d-block\">CONTA SSH E V2RAY</span>\n<small>Nesse modo funcionar\xc3\xa1 ssh e v2ray</small>\n</label>\n</div>\n</div>\n</div>\n</div>\n";
}
echo "<input type=\"hidden\" class=\"form-control\" id=\"diretorio\" name=\"diretorio\" value=\"../../home.php?page=ssh/add_teste\">\n<input type=\"hidden\" class=\"form-control\" id=\"owner\" name=\"owner\" value=\"";
echo $_SESSION["usuarioID"];
echo "\">\n<div class=\"col-12 text-center\">\n<button type=\"submit\" class=\"btn btn-success me-1 waves-effect waves-float waves-light\">Criar</button>\n<button type=\"reset\" class=\"btn btn-danger waves-effect\">Limpar</button>\n</div>\n</div>\n</form>\n</div>\n</div>\n</div>\n</section>\n<!-- Input with Icons end -->\n";
