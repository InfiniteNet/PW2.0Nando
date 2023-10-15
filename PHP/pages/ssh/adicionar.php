<?php

$GLOBALS["eqeoepvd"] = "senha_ssh";
$GLOBALS["pwrmcxo"] = "donouser";
$GLOBALS["ihrlvwhw"] = "SQL";
$GLOBALS["gjupuuoy"] = "resta";
$GLOBALS["pgskubxvuu"] = "SQLSub";
$GLOBALS["tsruxszpwpru"] = "contas_ssh_criadas";
$GLOBALS["gldeyfyfxyn"] = "SQLContasSSH";
$GLOBALS["huyduwitxy"] = "SQLServidor";
$GLOBALS["clrldwzfhb"] = "row_srv";
$GLOBALS["pnnecnbriyj"] = "SQLAcesso";
$wkscpdg = "usuario";
$GLOBALS["qjiktxktfw"] = "SQLAcesso";
$GLOBALS["dheszr"] = "salt";
$GLOBALS["sunsox"] = "donouser";
$GLOBALS["scsxutu"] = "SQL";
$GLOBALS["djcmhvvut"] = "pass";
$GLOBALS["bgbwqfukj"] = "i";
$GLOBALS["rasjqhme"] = "usuario";
$GLOBALS["xqwfdnokhilb"] = "SQLV";
$rykfmbowsflk = "SQLV";
$cneflqixbjz = "SQLV";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/adicionar.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
$hyzxnzohn = "senha_ssh";
protegePagina("user");
if (${$GLOBALS["rasjqhme"]}["ativo"] == 2) {
    echo "<script type=\"text/javascript\">";
    echo "window.location=\"home.php?page=suspenso\";";
    echo "</script>";
    exit;
}
${$GLOBALS["xqwfdnokhilb"]} = "SELECT permitir_demo FROM usuario where id_usuario = '" . $_SESSION["usuarioID"] . "'";
$GLOBALS["zzlfoejvvv"] = "perm_v2";
$qqwnvtaeo = "perm_v2";
$nzjhsz = "rowv";
$GLOBALS["mlaysiwaj"] = "rowv";
${$rykfmbowsflk} = $conn->prepare(${$cneflqixbjz});
$SQLV->execute();
${$GLOBALS["mlaysiwaj"]} = $SQLV->fetch();
${$qqwnvtaeo} = ${$nzjhsz}["permitir_demo"];
function geraSenha()
{
    $GLOBALS["ytobyov"] = "pass";
    $GLOBALS["gojhtxtjltu"] = "salt";
    $salt = "1234567890";
    srand((double) microtime() * 1000000);
    ${$GLOBALS["bgbwqfukj"]} = "";
    ${$GLOBALS["djcmhvvut"]} = "";
    while (${$GLOBALS["bgbwqfukj"]} <= 5) {
        $efkatjz = "num";
        $vghmawclkl = "tmp";
        $GLOBALS["eeqovmnmi"] = "pass";
        $kuxbofb = "tmp";
        $nveoqcci = "num";
        $num = rand() % 10;
        $tmp = substr(${$GLOBALS["dheszr"]}, $num, 1);
        $pass = ${$GLOBALS["djcmhvvut"]} . $tmp;
        ${$GLOBALS["bgbwqfukj"]}++;
    }
    return $pass;
}
${$hyzxnzohn} = geraSenha();
echo "<div class=\"active\"><a class=\"d-flex align-items-center\" href=\"home.php\"><i data-feather=\"home\"></i><span class=\"menu-title text-truncate\" data-i18n=\"Dashboards\">DASHBOARD</span></a>\n</div>\n<!-- Input with Icons start -->\n<section id=\"multiple-column-form\">\n<div class=\"row\">\n<div class=\"col-12\">\n<div class=\"card\">\n<div class=\"card-header\">\n<h4 class=\"card-title\"><a class=\"text-secondary\">Criar Conta SSH</a></h4>\n</div>\n<div class=\"card-body\">\n<form data-toggle=\"validator\" action=\"../pages/system/conta.ssh.php\" method=\"POST\" role=\"form\">\n<div class=\"row\">\n<div class=\"demo-spacing-0 mb-2\">\n<div class=\"alert alert-warning\" role=\"alert\">\n<div class=\"alert-body d-flex align-items-center\">\n<i data-feather=\"info\" class=\"me-50\"></i>\n<span>N\xc3\xa3o utilize caracteres especiais (@!#\$%&*\xc2\xa8.;:) e nem espa\xc3\xa7os no usu\xc3\xa1rio e senha!!!</span>\n</div>\n</div>\n</div>\n<div class=\"col-12\">\n<div class=\"mb-1\">\n<label class=\"form-label\" for=\"basicSelect\"><a class=\"text-info\">Servidor</a></label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather=\"server\"></i></span>\n<select class=\"form-select\" name=\"acesso_servidor\" id=\"acesso_servidor\">\n";
${$GLOBALS["qjiktxktfw"]} = "select * from acesso_servidor WHERE id_usuario = '" . ${$wkscpdg}["id_usuario"] . "'";
${$GLOBALS["pnnecnbriyj"]} = $conn->prepare(${$GLOBALS["pnnecnbriyj"]});
$SQLAcesso->execute();
if ($SQLAcesso->rowCount() > 0) {
    while (${$GLOBALS["clrldwzfhb"]} = $SQLAcesso->fetch()) {
        $gagvqyxkjvm = "row_srv";
        $sdrsluematok = "SQLContasSSH";
        $vorrjmvleu = "contas_ssh_criadas";
        $wrspvge = "SQLContasSSH";
        $qvpklp = "row_srv";
        $GLOBALS["fkqkurmwcg"] = "SQLContasSSH";
        $contas_ssh_criadas = 0;
        ${$GLOBALS["huyduwitxy"]} = "select * from servidor WHERE id_servidor = '" . ${$GLOBALS["clrldwzfhb"]}["id_servidor"] . "' ";
        $GLOBALS["hcuwwxhdd"] = "servidor";
        ${$GLOBALS["huyduwitxy"]} = $conn->prepare(${$GLOBALS["huyduwitxy"]});
        $GLOBALS["pkyobmd"] = "contas_ssh_criadas";
        $SQLServidor->execute();
        ${$GLOBALS["hcuwwxhdd"]} = $SQLServidor->fetch();
        ${$sdrsluematok} = "SELECT sum(acesso) AS quantidade  FROM conta_ssh where id_servidor = '" . ${$qvpklp}["id_servidor"] . "' and id_usuario='" . $_SESSION["usuarioID"] . "' ";
        $GLOBALS["usjtpajkhd"] = "contas_ssh_criadas";
        ${$GLOBALS["gldeyfyfxyn"]} = $conn->prepare(${$GLOBALS["gldeyfyfxyn"]});
        $SQLContasSSH->execute();
        $ioqqlxpqjoyg = "row_srv";
        ${$wrspvge} = $SQLContasSSH->fetch();
        $mtdmqeopl = "resta";
        ${$GLOBALS["tsruxszpwpru"]} += ${$GLOBALS["fkqkurmwcg"]}["quantidade"];
        ${$GLOBALS["pgskubxvuu"]} = "SELECT sum(qtd) AS limites FROM acesso_servidor WHERE id_servidor = '" . ${$gagvqyxkjvm}["id_servidor"] . "' and id_mestre='" . $_SESSION["usuarioID"] . "' ";
        ${$GLOBALS["pgskubxvuu"]} = $conn->prepare(${$GLOBALS["pgskubxvuu"]});
        $hqnimfekl = "SQLSub";
        $SQLSub->execute();
        $SQLSub = $SQLSub->fetch();
        ${$GLOBALS["pkyobmd"]} += ${$GLOBALS["pgskubxvuu"]}["limites"];
        ${$GLOBALS["clrldwzfhb"]}["qtd"] -= ${$GLOBALS["usjtpajkhd"]};
        echo "<option value=\"";
        echo ${$ioqqlxpqjoyg}["id_acesso_servidor"];
        $GLOBALS["flfrqo"] = "row_srv";
        echo "\"><a class=\"text-info\">";
        $ypymfiqopnj = "servidor";
        echo $servidor["nome"];
        echo "</a> - Resta <a class=\"text-warning\">";
        echo ${$mtdmqeopl};
        echo "</a> de <a class=\"text-success\">";
        echo $row_srv["qtd"];
        echo ".</a></option>\n";
    }
}
echo "</select>\n</div>\n</div>\n</div>\n<div class=\"col-md-6 col-12\">\n<div class=\"mb-1\">\n<label class=\"form-label\" for=\"first-name-icon\"><a class=\"text-info\">Valor</a></label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather=\"dollar-sign\"></i></span>\n<input type=\"number\" pattern=\"[0-9]+([,\\.][0-9]+)?\" step=\"0.01\" min=\"0\" name=\"valorssh\" id=\"valorssh\" class=\"form-control\">\n</div>\n</div>\n</div>\n<div class=\"col-md-6 col-12\">\n<div class=\"mb-2\">\n<label class=\"form-label\" for=\"basicSelect\"><a class=\"text-info\">Quem ser\xc3\xa1 o Dono?</a></label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather=\"users\"></i></span>\n";
${$GLOBALS["ihrlvwhw"]} = "SELECT * FROM usuario where id_usuario = '" . $_SESSION["usuarioID"] . "'";
${$GLOBALS["scsxutu"]} = $conn->prepare(${$GLOBALS["ihrlvwhw"]});
$nfpcuvup = "donouser";
$SQL->execute();
${$GLOBALS["sunsox"]} = $SQL->fetch();
echo "<input type=\"text\" class=\"form-control\" name=\"usuario\" id=\"usuario\" disabled value=\"";
echo ${$nfpcuvup}["login"];
echo "\" required=\"\">\n<input type=\"hidden\" class=\"form-control\" id=\"usuario\" name=\"usuario\" value=\"";
echo ${$GLOBALS["pwrmcxo"]}["id_usuario"];
echo "\">\n</div>\n</div>\n</div>\n<div class=\"col-md-6 col-12\">\n<div class=\"mb-1\">\n<label class=\"form-label\" for=\"first-name-icon\"><a class=\"text-info\">Login</a></label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather=\"user\"></i></span>\n<input type=\"text\" name=\"login_ssh\" id=\"login_ssh\" oninput=\"this.value = this.value.toLowerCase()\" class=\"form-control\" minlength=\"4\" maxlength=\"12\" placeholder=\"Digite o usu\xc3\xa1rio...\" required=\"\">\n</div>\n</div>\n</div>\n<div class=\"col-md-6 col-12\">\n<div class=\"mb-2\">\n<label class=\"form-label\" for=\"country-floating\"><a class=\"text-info\">Senha</a></label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather='lock'></i></span>\n<input type=\"text\" class=\"form-control\" name=\"senha_ssh\" minlength=\"4\" maxlength=\"10\" id=\"senha_ssh\" placeholder=\"Digite a Senha\" required=\"\" value=\"";
echo ${$GLOBALS["eqeoepvd"]};
echo "\">\n</div>\n</div>\n</div>\n<div class=\"col-md-6 col-12\">\n<div class=\"mb-1\">\n<label class=\"form-label\" for=\"email-id-column\"><a class=\"text-info\">Validade em Dias</a></label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather='calendar'></i></span>\n<input type=\"number\" min=\"1\" max=\"366\" name=\"dias\" id=\"dias\" class=\"form-control\" placeholder=\"30\" value=\"30\" required>\n</div>\n</div>\n</div>\n<div class=\"col-md-6 col-12\">\n<div class=\"mb-2\">\n<label class=\"form-label\" for=\"company-column\"><a class=\"text-info\">Limite de dispositivos</a></label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather='smartphone'></i></span>\n<input type=\"number\" min=\"1\" max=\"500\" name=\"acessos\" id=\"acessos\" placeholder=\"1\" class=\"form-control\" value=\"1\" required>\n</div>\n</div>\n</div>\n";
if (${$GLOBALS["zzlfoejvvv"]} == 0) {
    echo "<input type=\"hidden\" class=\"form-control\" id=\"tipoconta\" name=\"tipoconta\" value=\"ssh\">\n";
} else {
    echo "<div class=\"col-12\">\n<div class=\"mb-2\">\n<div class=\"row custom-options-checkable g-1\">\n<div class=\"col-md-6\">\n<input class=\"custom-option-item-check\" type=\"radio\" name=\"tipoconta\" id=\"customOptionsCheckableRadiosWithIcon2\" value=\"ssh\" checked />\n<label class=\"custom-option-item text-center text-center p-1\" for=\"customOptionsCheckableRadiosWithIcon2\">\n<i data-feather=\"shield\" class=\"font-large-1 mb-75\"></i>\n<span class=\"custom-option-item-title h4 d-block\">CONTA SSH</span>\n<small>Nesse modo funcionar\xc3\xa1 apenas ssh</small>\n</label>\n</div>\n<div class=\"col-md-6\">\n<input class=\"custom-option-item-check\" type=\"radio\" name=\"tipoconta\" id=\"customOptionsCheckableRadiosWithIcon3\" value=\"v2ray\" />\n<label class=\"custom-option-item text-center p-1\" for=\"customOptionsCheckableRadiosWithIcon3\">\n<i data-feather=\"link\" class=\"font-large-1 mb-75\"></i>\n<span class=\"custom-option-item-title h4 d-block\">CONTA SSH E V2RAY</span>\n<small>Nesse modo funcionar\xc3\xa1 ssh e v2ray</small>\n</label>\n</div>\n</div>\n</div>\n</div>\n";
}
echo "<input type=\"hidden\" class=\"form-control\" id=\"diretorio\" name=\"diretorio\" value=\"../../home.php?page=ssh/adicionar\">\n<input type=\"hidden\" class=\"form-control\" id=\"owner\" name=\"owner\" value=\"";
echo $_SESSION["usuarioID"];
echo "\">\n<div class=\"col-12 text-center\">\n<button type=\"submit\" class=\"btn btn-success me-1 waves-effect waves-float waves-light\">Criar</button>\n<button type=\"reset\" class=\"btn btn-danger waves-effect\">Limpar</button>\n</div>\n</div>\n</form>\n</div>\n</div>\n</div>\n</div>\n</section>\n<!-- Input with Icons end -->\n";
