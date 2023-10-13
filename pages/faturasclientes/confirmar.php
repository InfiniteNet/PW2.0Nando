<?php

$GLOBALS["rihglkosuqb"] = "fatu";
$GLOBALS["mgmegnapln"] = "conta";
$GLOBALS["njcuxq"] = "SQLUPUser";
$GLOBALS["vbdnxo"] = "fatu";
$GLOBALS["bqdxienwyb"] = "fatura_id";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/confirmar.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
$GLOBALS["lrocbncc"] = "fatu";
$GLOBALS["ubysmckto"] = "usuario";
protegePagina("user");
if ($usuario["ativo"] == 2) {
    echo "<script type=\"text/javascript\">";
    echo "window.location=\"home.php?page=suspenso\";";
    echo "</script>";
    exit;
}
if (isset($_GET["id"])) {
    $fetuly = "SQLUPUser";
    ${$GLOBALS["bqdxienwyb"]} = $_GET["id"];
    $woxxboshqrz = "fatu";
    ${$GLOBALS["njcuxq"]} = "SELECT * FROM fatura where id='" . ${$GLOBALS["bqdxienwyb"]} . "'";
    ${$fetuly} = $conn->prepare(${$GLOBALS["njcuxq"]});
    $SQLUPUser->execute();
    ${$GLOBALS["mgmegnapln"]} = $SQLUPUser->rowCount();
    if (${$GLOBALS["mgmegnapln"]} == 0) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Fatura n\xc3\xa3o encontrada!\");";
        echo "window.location=\"home.php?page=faturas/abertas\";";
        echo "</script>";
        exit;
    }
    ${$GLOBALS["rihglkosuqb"]} = $SQLUPUser->fetch();
    if (${$GLOBALS["rihglkosuqb"]}["usuario_id"] != $_SESSION["usuarioID"]) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Esta fatura n\xc3\xa3o \xc3\xa9 sua!\");";
        echo "window.location=\"home.php?page=faturas/abertas\";";
        echo "</script>";
        exit;
    }
    if (${$woxxboshqrz}["status"] == "cancelado") {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Esta fatura est\xc3\xa1 vencida ou expirada!\");";
        echo "window.location=\"home.php?page=faturas/canceladas\";";
        echo "</script>";
        exit;
    }
    $ykqsbew = "fatu";
    if ($fatu["status"] == "pago") {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Esta fatura est\xc3\xa1 paga!\");";
        echo "window.location=\"home.php?page=faturas/pagas\";";
        echo "</script>";
        exit;
    }
}
echo "<!-- Input with Icons start -->\n<section id=\"input-with-icons\">\n    <div class=\"row match-height\">\n        <div class=\"col-12\">\n            <div class=\"card\">\n                <div class=\"card-header\">\n                    <h1 class=\"card-title font-medium-2\"><i class=\"fad fa-globe-americas text-success font-large-1\"></i> Fatura N\xc2\xb0<small>#";
$GLOBALS["gvmdfecnb"] = "fatu";
echo ${$GLOBALS["lrocbncc"]}["id"];
echo "</small></h1>\n                </div>\n                <div class=\"card-content\">\n                    <form role=\"form\" action=\"pages/faturas/confirmando.php\" enctype=\"multipart/form-data\" method=\"post\">\n                        <div class=\"card-body\">\n                            <div class=\"row\">\n                                <div class=\"col-12\">\n                                    <p>Nota: Anexe uma Print do Comprovante para agilizar o processo que pode levar at\xc3\xa9 24 horas para ser efetuado e voc\xc3\xaa ver refletido em sua conta.</p>\n                                </div>\n                                <div class=\"col-sm-6 col-12\">\n                                    <div class=\"text-bold-600 font-medium-2 mb-1\">\n                                        Fatura\n                                    </div>\n                                    <fieldset class=\"form-group position-relative\">\n                                        <input type=\"text\" class=\"form-control\" placeholder=\"#";
echo $fatu["id"];
echo "\" value=\"#";
echo ${$GLOBALS["vbdnxo"]}["id"];
echo "\" disabled=\"\">\n                                        <input name=\"fatura\" value=\"";
echo ${$GLOBALS["rihglkosuqb"]}["id"];
echo "\" type=\"hidden\">\n                                    </fieldset>\n                                </div>\n                                <div class=\"col-sm-6 col-12\">\n                                    <div class=\"text-bold-600 font-medium-2 mb-1\">\n                                        Forma de Pagamento\n                                    </div>\n                                    <fieldset class=\"form-group position-relative\">\n                                        <select name=\"formap\" class=\"form-control\">\n                                            <option value=\"1\" selected=selected>Boleto</option>\n                                            <option value=\"2\">Dep\xc3\xb3sito/Transf\xc3\xaancia</option>\n                                        </select>\n                                        <div class=\"form-control-position\">\n                                            <i class=\"feather icon-file\"></i>\n                                        </div>\n                                    </fieldset>\n                                </div>\n                                <div class=\"col-sm-6 col-12\">\n                                    <div class=\"text-bold-600 font-medium-2 mb-1\">\n                                        Deixar uma descri\xc3\xa7\xc3\xa3o\n                                    </div>\n                                    <fieldset class=\"form-group position-relative has-icon-left input-divider-left\">\n                                        <textarea class=\"form-control\" name=\"msg\" id=\"msg\" class=\"form-control\" rows=\"5\" placeholder=\"Digite ... (Opcional)\"></textarea>\n                                        <div class=\"form-control-position\">\n                                            <i class=\"feather icon-phone\"></i>\n                                        </div>\n                                    </fieldset>\n                                </div>\n                                <div class=\"col-sm-6 col-12\">\n                                    <div class=\"text-bold-600 font-medium-2 mb-1\">\n                                        Comprovante\n                                    </div>\n                                    <fieldset class=\"form-group position-relative input-divider-right\">\n                                        <input type=\"file\" id=\"arquivo\" name=\"arquivo\" required=required>\n                                <div class=\"form-control-position\">\n                                    <i class=\"feather icon-file\"></i>\n                                </div>\n                                </fieldset>\n                            </div>\n                            <div class=\"col-sm-12 col-12\ttext-center\">\n                                <button type=\"submit\" class=\"btn btn-success round\">Salvar</button>\n                                <button type=\"button\" onclick=\"window.location.href='home.php?page=faturas/verfatura&id=";
echo ${$GLOBALS["rihglkosuqb"]}["id"];
echo "'\"  class=\"btn btn-warning waves-effect waves-light m-t-10\"><i class=\"fa fa-arrow-circle-o-left\" aria-hidden=\"true\"></i> Voltar</button>\n                            </div>\n                        </div>\n                </div>\n                </form>\n            </div>\n        </div>\n    </div>\n    </div>\n</section>\n<!-- Input with Icons end -->\n";
