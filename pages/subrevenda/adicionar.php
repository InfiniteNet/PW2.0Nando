<?php

$GLOBALS["usbqvjse"] = "acesso_server";
$GLOBALS["hmxjrfu"] = "row";
$GLOBALS["gvlpsieod"] = "SQL";
$GLOBALS["xjhedtogb"] = "SQLSubSSH";
$GLOBALS["ltzowicgvo"] = "SQLUsuarioSub";
$GLOBALS["tqbqavp"] = "ipdominio";
$GLOBALS["ldnmpjl"] = "SQLContasSSH";
$GLOBALS["chgqnuksvoe"] = "servidor";
$GLOBALS["bmrlhykebhj"] = "SQLServidor";
$GLOBALS["yyopej"] = "row_srv";
$GLOBALS["mgnzpgspchrf"] = "SQLAcesso";
$GLOBALS["sjfmcwc"] = "usuario";
$bbxdjohidrc = "SQLAcesso";
$lhguwerfvnw = "accessKEY";
$GLOBALS["wpbzlriio"] = "usuario";
echo "<!-- Input with Icons start -->\n<section id=\"multiple-column-form\">\n<div class=\"row\">\n<div class=\"col-12\">\n<div class=\"card\">\n<div class=\"card-header\">\n<h4 class=\"card-title\">Adicionar servidor a revenda</h4>\n</div>\n<div class=\"card-content\">\n<form action=\"pages/subrevenda/addservidor_exe.php\" method=\"POST\" role=\"form\">\n<div class=\"card-body\">\n<div class=\"row\">\n<div class=\"col-12\">\n<div class=\"demo-spacing-0 mb-3\">\n<div class=\"alert alert-warning\" role=\"alert\">\n<div class=\"alert-body d-flex align-items-center\">\n<i data-feather=\"info\" class=\"me-50\"></i>\n<span>Logo abaixo voc\xc3\xaa entrega parte de seu limite de um dos seus servidores ao seu revendedor n\xc3\xa3o \xc3\xa9 possivel entregar mais que o seu limite disponivel!</span>\n</div>\n</div>\n</div>\n</div>\n<div class=\"col-md-6 col-12\">\n<div class=\"mb-1\">\n<label class=\"form-label\" for=\"basicSelect\">Servidor</label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather=\"server\"></i></span>\n<select class=\"form-select\" name=\"servidor\" id=\"servidor\">\n";
protegePagina("user");
$eekpgekxolxj = "SQLAcesso";
if ($usuario["ativo"] == 2) {
    echo "<script type=\"text/javascript\">";
    echo "window.location=\"home.php?page=suspenso\";";
    echo "</script>";
    exit;
}
${$bbxdjohidrc} = "select * from acesso_servidor where id_usuario='" . ${$GLOBALS["sjfmcwc"]}["id_usuario"] . "'  ";
${$eekpgekxolxj} = $conn->prepare(${$GLOBALS["mgnzpgspchrf"]});
$SQLAcesso->execute();
if ($SQLAcesso->rowCount() > 0) {
    $wjervtcqcf = "row_srv";
    while (${$wjervtcqcf} = $SQLAcesso->fetch()) {
        $vhceoq = "contas_ssh_criadas";
        $nyahmmkewv = "contas_ssh_criadas";
        $qpynkihal = "SQLContasSSH";
        $iszylpirol = "SQLContasSSH";
        $GLOBALS["sbkrkaw"] = "SQLServidor";
        $GLOBALS["nhbcxxlr"] = "row_srv";
        $GLOBALS["njsnhylyuc"] = "SQLServidor";
        $qwfascbr = "resta";
        $contas_ssh_criadas = 0;
        $SQLServidor = "select * from servidor WHERE id_servidor = '" . ${$GLOBALS["yyopej"]}["id_servidor"] . "' ";
        $dmdivljz = "SQLSubSSH";
        ${$GLOBALS["bmrlhykebhj"]} = $conn->prepare($SQLServidor);
        $SQLServidor->execute();
        ${$GLOBALS["chgqnuksvoe"]} = $SQLServidor->fetch();
        $GLOBALS["dfqvojzt"] = "SQLContasSSH";
        ${$iszylpirol} = "SELECT sum(acesso) AS quantidade FROM conta_ssh where id_servidor = '" . ${$GLOBALS["yyopej"]}["id_servidor"] . "' and id_usuario='" . ${$GLOBALS["sjfmcwc"]}["id_usuario"] . "' ";
        $ejkfvbhvsq = "row_srv";
        ${$GLOBALS["dfqvojzt"]} = $conn->prepare(${$GLOBALS["ldnmpjl"]});
        $lqckjkkemymd = "contas_ssh_criadas";
        $sumjglsdfv = "contas_ssh_criadas";
        $SQLContasSSH->execute();
        $muqobqzk = "SQLContasSSH";
        $GLOBALS["mftpuonn"] = "row";
        $euglnsn = "SQLSubSSH";
        $SQLContasSSH = $SQLContasSSH->fetch();
        $contas_ssh_criadas += ${$qpynkihal}["quantidade"];
        $GLOBALS["nmlwujbdn"] = "SQLSubSSH";
        ${$GLOBALS["ltzowicgvo"]} = "SELECT * FROM usuario WHERE id_mestre ='" . ${$GLOBALS["sjfmcwc"]}["id_usuario"] . "'";
        ${$GLOBALS["ltzowicgvo"]} = $conn->prepare(${$GLOBALS["ltzowicgvo"]});
        $GLOBALS["oeudjme"] = "row_srv";
        $SQLUsuarioSub->execute();
        if ($SQLUsuarioSub->rowCount() > 0) {
            while (${$GLOBALS["mftpuonn"]} = $SQLUsuarioSub->fetch()) {
            }
        }
        ${$GLOBALS["xjhedtogb"]} = "SELECT sum(qtd) AS limites from acesso_servidor WHERE id_mestre ='" . ${$GLOBALS["sjfmcwc"]}["id_usuario"] . "' and id_servidor='" . ${$GLOBALS["nhbcxxlr"]}["id_servidor"] . "' ";
        ${$dmdivljz} = $conn->prepare(${$GLOBALS["xjhedtogb"]});
        $SQLSubSSH->execute();
        ${$GLOBALS["nmlwujbdn"]} = $SQLSubSSH->fetch();
        ${$sumjglsdfv} += ${$euglnsn}["limites"];
        ${$GLOBALS["oeudjme"]}["qtd"] -= ${$nyahmmkewv};
        $GLOBALS["rmnbdjecvs"] = "resta";
        echo "<option value=\"";
        echo ${$ejkfvbhvsq}["id_acesso_servidor"];
        echo "\"> ";
        echo ${$GLOBALS["chgqnuksvoe"]}["nome"];
        echo " - Limite: ";
        echo $resta;
        echo " </option>\n";
    }
} else {
    echo "<option value=\"nada\">Nenhum Servidor</option>\n";
}
echo "</select>\n</div>\n</div>\n</div>\n<div class=\"col-md-6 col-12\">\n<div class=\"mb-2\">\n<label class=\"form-label\" for=\"country-floating\">Limite</label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather='smartphone'></i></span>\n<input type=\"number\" min=\"5\" max=\"999\" name=\"limite\" id=\"limite\" class=\"form-control\" placeholder=\"5\" value=\"5\" required=\"required\">\n</div>\n</div>\n</div>\n<div class=\"col-12\">\n<div class=\"mb-1\">\n<label class=\"form-label\" for=\"basicSelect\">Revendedor</label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather=\"users\"></i></span>\n<select class=\"form-select\" name=\"subusuario\" id=\"subusuario\">\n";
${$GLOBALS["gvlpsieod"]} = "SELECT * FROM usuario where id_mestre='" . ${$GLOBALS["wpbzlriio"]}["id_usuario"] . "'ORDER BY id_usuario DESC";
${$GLOBALS["gvlpsieod"]} = $conn->prepare(${$GLOBALS["gvlpsieod"]});
$SQL->execute();
if ($SQL->rowCount() > 0) {
    while (${$GLOBALS["hmxjrfu"]} = $SQL->fetch()) {
        $siwkopy = "row";
        $GLOBALS["tzyqbfrift"] = "SQLServidor";
        ${$GLOBALS["bmrlhykebhj"]} = "select * from acesso_servidor  WHERE id_usuario = '" . ${$GLOBALS["hmxjrfu"]}["id_usuario"] . "'";
        $baonwyoip = "row";
        ${$GLOBALS["tzyqbfrift"]} = $conn->prepare(${$GLOBALS["bmrlhykebhj"]});
        $SQLServidor->execute();
        ${$GLOBALS["usbqvjse"]} = $SQLServidor->rowCount();
        echo "<option value=\"";
        echo ${$GLOBALS["hmxjrfu"]}["id_usuario"];
        echo "\">Nome: ";
        echo ${$baonwyoip}["nome"];
        echo " - Login: ";
        echo ${$siwkopy}["login"];
        echo " </option>\n";
    }
} else {
    echo "<option value=\"nada\">Nenhum Revendedor</option>\n";
}
echo "</select><a href=\"?page=usuario/adicionar\" class=\"btn-sm btn-success\"><i data-feather='user-plus'></i></a>\n</div>\n</div>\n</div>\n<input type=\"hidden\" class=\"form-control\" id=\"diretorio\" name=\"diretorio\" value=\"../../admin/home.php?page=ssh/adicionar\">\n<input type=\"hidden\" class=\"form-control\" id=\"segmax\" name=\"segmax\" value=\"";
echo ${$lhguwerfvnw};
echo "\">\n<input type=\"hidden\" class=\"form-control\" id=\"ipmax\" name=\"ipmax\" value=\"";
echo ${$GLOBALS["tqbqavp"]};
echo "\">\n<div class=\"col-sm-12 col-12 text-center\">\n<button type=\"submit\" class=\"btn btn-success\">Adicionar</button>\n<button type=\"reset\" class=\"btn btn-danger\">Limpar</button>\n</div>\n</div>\n</div>\n</form>\n</div>\n</div>\n</div>\n</div>\n</section>\n<!-- Input with Icons end -->\n";
