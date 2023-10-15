<?php

$GLOBALS["bmftgxhwi"] = "noticia";
$GLOBALS["auhykwkelo"] = "ipdominio";
$GLOBALS["uvbiwlh"] = "accessKEY";
$GLOBALS["ktbflnqy"] = "procnoticias";
$GLOBALS["kuswhome"] = "not";
$GLOBALS["tvfuzea"] = "SQLnoticia";
$GLOBALS["bephlgko"] = "id";
$GLOBALS["hbaiavk"] = "SQLinfo2";
$GLOBALS["ludhotf"] = "info";
$GLOBALS["wtitbhj"] = "SQLinfo";
$GLOBALS["wnfjsiny"] = "mp";
$GLOBALS["qianiaa"] = "procnoticias";
$GLOBALS["lorbhqxpght"] = "SQLmp";
$GLOBALS["sxwycoyosh"] = "SQLmp";
$fmbvhbwnwsph = "procnoticias";
include "../../pages/system/config.php";
$mmzhfeeve = "SQLmp";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/gerenciar.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
protegePagina("donoadmin");
${$GLOBALS["sxwycoyosh"]} = "select * from mercadopago";
${$GLOBALS["lorbhqxpght"]} = $conn->prepare(${$mmzhfeeve});
$SQLmp->execute();
${$GLOBALS["wnfjsiny"]} = $SQLmp->fetch();
if (isset($_GET["delinfo"])) {
    ${$GLOBALS["wtitbhj"]} = "select * from informativo";
    ${$GLOBALS["wtitbhj"]} = $conn->prepare(${$GLOBALS["wtitbhj"]});
    $SQLinfo->execute();
    if ($SQLinfo->rowCount() > 0) {
        ${$GLOBALS["ludhotf"]} = $SQLinfo->fetch();
        $GLOBALS["dvgnln"] = "info";
        if (unlink("../admin/pages/noticias/" . $info["imagem"] . "")) {
            $GLOBALS["luklmytwcr"] = "SQLinfo2";
            $grkqzuwfdn = "SQLinfo2";
            $SQLinfo2 = "delete from informativo";
            ${$GLOBALS["hbaiavk"]} = $conn->prepare($SQLinfo2);
            $SQLinfo2->execute();
            echo "<script type=\"text/javascript\">";
            echo "alert(\"Informativo apagado!\");";
            echo "window.location=\"home.php?page=apis/gerenciar\";";
            echo "</script>";
        } else {
            echo "<script type=\"text/javascript\">";
            echo "window.location=\"home.php?page=apis/gerenciar\";";
            echo "</script>";
        }
    } else {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"N\xc3\xa3o foi encontrado nenhum informativo!\");";
        echo "window.location=\"home.php?page=apis/gerenciar\";";
        echo "</script>";
    }
}
if (isset($_GET["delnoti"])) {
    $fnrbnqcetiu = "id";
    $zwlhvdhiuxw = "SQLnoticia";
    $id = $_GET["delnoti"];
    $GLOBALS["wyoccpiuupd"] = "SQLnoticia";
    $SQLnoticia = "select * from noticias where id='" . ${$GLOBALS["bephlgko"]} . "'";
    ${$GLOBALS["tvfuzea"]} = $conn->prepare($SQLnoticia);
    $SQLnoticia->execute();
    if ($SQLnoticia->rowCount() > 0) {
        $GLOBALS["iegzbydy"] = "SQLinfo2";
        $GLOBALS["yejdvbi"] = "not";
        $not = $SQLnoticia->fetch();
        if (${$GLOBALS["kuswhome"]}["status"] != "ativo") {
            echo "<script type=\"text/javascript\">";
            echo "window.location=\"home.php?page=apis/gerenciar\";";
            echo "</script>";
            exit;
        }
        ${$GLOBALS["iegzbydy"]} = "update noticias set status='desativado' where id='" . ${$GLOBALS["bephlgko"]} . "'";
        $GLOBALS["xmdpgncab"] = "SQLinfo2";
        $SQLinfo2 = $conn->prepare(${$GLOBALS["hbaiavk"]});
        $SQLinfo2->execute();
        echo "<script type=\"text/javascript\">";
        echo "window.location=\"home.php?page=apis/gerenciar\";";
        echo "</script>";
    } else {
        echo "<script type=\"text/javascript\">";
        echo "window.location=\"home.php?page=apis/gerenciar\";";
        echo "</script>";
    }
}
echo "<section id=\"input-style\">\n<div class=\"row\">\n<div class=\"col-12\">\n<form class=\"\" action=\"\" method=\"post\">\n<div class=\"card\">\n<div class=\"card-header\">\n<h4 class=\"card-title text-danger\">Gerenciar Email do sistema</h4>\n</div>\n<div class=\"card-content\">\n<div class=\"card-body\">\n<div class=\"row\">\n<div class=\"col-12 text-center\">\n<p>\nFuncional em: (Recuperar Senha, Enviar Email)\n</p>\n</div>\n<div class=\"col-12 text-center\">\n<fieldset class=\"form-group\">\n<a href=\"home.php?page=email/1etapasmtp\" class=\"btn btn-danger\"><i data-feather='mail'></i> Configurar o PHP Mailer</a>\n</fieldset>\n</div>\n</div>\n</div>\n</div>\n</div>\n</form>\n</div>\n</div>\n</section>\n";
${$fmbvhbwnwsph} = "select * FROM noticias where status='ativo'";
${$GLOBALS["qianiaa"]} = $conn->prepare(${$GLOBALS["ktbflnqy"]});
$procnoticias->execute();
echo "<section id=\"input-style\">\n<div class=\"row\">\n<div class=\"col-12\">\n<form role=\"form\" action=\"pages/apis/addnoti.php\" method=\"post\" enctype=\"multipart/form-data\">\n<div class=\"card\">\n<div class=\"card-header\">\n<h4 class=\"card-title text-warning\">Notificar na tela dashbord</h4>\n</div>\n<div class=\"card-content\">\n<div class=\"card-body\">\n<div class=\"row\">\n<div class=\"col-12\">\n<p>\nNotificar as revendas!\n</p>\n</div>\n<div class=\"col-md-6 col-12\">\n<div class=\"mb-2\">\n<label class=\"form-label\" for=\"email-id-column\">T\xc3\xadtulo</label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather='edit-3'></i></span>\n<input required=\"required\" class=\"form-control\" name=\"titu\" placeholder=\"Titulo da noticia\">\n</div>\n</div>\n</div>\n<div class=\"col-md-6 col-12\">\n<div class=\"mb-2\">\n<label class=\"form-label\" for=\"email-id-column\">Subt\xc3\xadtulo</label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather='edit-2'></i></span>\n<input required=\"required\" class=\"form-control\" name=\"subtitu\" placeholder=\"Exemplo: Remova as contas expiradas!\">\n</div>\n</div>\n</div>\n<div class=\"col-12\">\n<div class=\"mb-2\">\n<label class=\"form-label\" for=\"email-id-column\">Informe seu Texto</label>\n<div class=\"input-group input-group-merge\">\n<textarea class=\"form-control\" rows=\"6\" name=\"msg\" placeholder=\"Digite ... Use <br> para quebra de linhas\"></textarea>\n</div>\n</div>\n</div>\n<input type=\"hidden\" class=\"form-control\" id=\"segmax\" name=\"segmax\" value=\"";
echo ${$GLOBALS["uvbiwlh"]};
echo "\">\n<input type=\"hidden\" class=\"form-control\" id=\"ipmax\" name=\"ipmax\" value=\"";
echo ${$GLOBALS["auhykwkelo"]};
echo "\">\n<div class=\"col-12 text-center\">\n<div class=\"mb-1\">\n<fieldset class=\"form-group\">\n<button type=\"submit\" name=\"adicionanoticia\" class=\"btn btn-success\">Adicionar</button>\n";
if ($procnoticias->rowCount() > 0) {
    $GLOBALS["vrmefmqthor"] = "noticia";
    ${$GLOBALS["bmftgxhwi"]} = $procnoticias->fetch();
    echo "<a href=\"home.php?page=apis/gerenciar&delnoti=";
    echo ${$GLOBALS["vrmefmqthor"]}["id"];
    echo "\" name=\"remove\" class=\"btn btn-danger\">Desativar</a>\n";
}
echo "</fieldset>\n</div>\n</div>\n";
if ($procnoticias->rowCount() > 0) {
    echo "<div class=\"col-12\">\n<center>\n<h5 class=\"text-warning\"><i data-feather='info'></i>Existe uma notifica\xc3\xa7\xc3\xa3o ativa</h5>\n</center>\n</div>\n";
}
echo "</div>\n</div>\n</div>\n</div>\n</form>\n</div>\n</div>\n</section>\n";
