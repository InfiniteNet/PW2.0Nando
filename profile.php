<?php

$GLOBALS["pzdsucwkdz"] = "profile_token";
$GLOBALS["tryigdmdhwoa"] = "db_usuario_acess";
$GLOBALS["pdbxpiweq"] = "profile_usuario";
$GLOBALS["bcoosqekm"] = "row_produto_cat";
$vvssnmfgnvb = "profile_usuario";
$GLOBALS["oislac"] = "profile_id";
$GLOBALS["wjitggygdeq"] = "conn";
$mxtkyeegimw = "link_glv2";
$mgeknlzwhr = "row_produto_cat";
$GLOBALS["rkvnszvk"] = "resultado_produtos_cat";
$gnqqvqq = "db_usuario_acess";
$GLOBALS["pekomsel"] = "result_produtos_cat";
$GLOBALS["xbmqxkrglt"] = "link_glv2";
$GLOBALS["aqjaqqnwlbqr"] = "link_gl";
$GLOBALS["lkngsu"] = "result_produtos_cat";
$pyqpcdw = "profile_id";
if (!file_exists("base_app/basegl.apk")) {
    $GLOBALS["jdjhplx"] = "link_gl";
    $link_gl = "https://bitbucket.org/nandoslayer/pweb2.0/downloads/basegl.apk";
} else {
    $link_gl = "/base_app/basegl.apk";
}
if (!file_exists("base_app/baseglv2.apk")) {
    $GLOBALS["cckgont"] = "link_glv2";
    $link_glv2 = "https://bitbucket.org/nandoslayer/pweb2.0/downloads/baseglv2.apk";
} else {
    ${$GLOBALS["xbmqxkrglt"]} = "/base_app/baseglv2.apk";
}
$bkajzyjoyjpx = "resultado_produtos_cat";
echo "<!doctype html>\n<html class=\"no-js h-100\" lang=\"pt-BR\" translate=\"no\">\n<link rel=\"shortcut icon\" href=\"static/assets/img/favicon.png\" />\n<title>\nGL-GESTOR - PERFIL\n</title>\n";
include_once $_SERVER["DOCUMENT_ROOT"] . "/class/topo.php";
echo "<body class=\"h-100\">\n";
include_once $_SERVER["DOCUMENT_ROOT"] . "/class/topo2.php";
echo "\n<div class=\"main-content-container container-fluid px-4\">\n<div class=\"page-header row no-gutters py-4\">\n<div class=\"col-12 col-sm-4 text-center text-sm-left mb-0\">\n<center>\n<span class=\"text-uppercase page-subtitle\">Vis\xc3\xa3o geral</span>\n<h3 class=\"page-title\">PERFIL</h3>\n</center>\n</div>\n</div>\n<div class=\"row\">\n<div class=\"col-lg-4\">\n<div class=\"card card-small mb-4 pt-3\">\n<div class=\"card-header border-bottom text-center\">\n<div class=\"mb-3 mx-auto\">\n<img class=\"rounded-circle\" src=\"static/assets/img/avatars/4.png\" alt=\"User Avatar\"\nwidth=\"110\">\n</div>\n";
${$GLOBALS["pekomsel"]} = "SELECT * FROM usuariogl WHERE id LIKE '{$db_user_id}'";
${$GLOBALS["rkvnszvk"]} = mysqli_query(${$GLOBALS["wjitggygdeq"]}, ${$GLOBALS["lkngsu"]});
while (${$mgeknlzwhr} = mysqli_fetch_assoc(${$bkajzyjoyjpx})) {
    $GLOBALS["eajxgsmfbr"] = "row_produto_cat";
    $faocgcdcn = "profile_usuario";
    $qzcurajfd = "row_produto_cat";
    $GLOBALS["kkxpcvttendm"] = "profile_token";
    ${$GLOBALS["oislac"]} = $row_produto_cat["id"];
    ${$faocgcdcn} = ${$GLOBALS["eajxgsmfbr"]}["user"];
    ${$GLOBALS["kkxpcvttendm"]} = ${$GLOBALS["bcoosqekm"]}["token"];
}
echo "\n<h4 class=\"mb-0\">\n";
echo "</h4>\n<span class=\"text-muted d-block mb-2 mt-2\">\n";
$xkbvugsflu = "profile_usuario";
echo "</span>\n</div>\n</div>\n</div>\n<div class=\"col-lg-8\">\n<div class=\"card card-small mb-4\">\n<div class=\"card-header border-bottom\">\n<h6 class=\"m-0\">ID do usu\xc3\xa1rio ";
echo ${$pyqpcdw};
echo "</h6>\n</div>\n<ul class=\"list-group list-group-flush\">\n<li class=\"list-group-item p-3\">\n<div class=\"row\">\n<!--<div class=\"col\">\n<form action=\"profile#ERRO\" method=\"POST\">\n<div class=\"mb-3\">\n<div class=\"form-group col-md-100\">\n<label for=\"username\" class=\"form-label\">Nome de usu\xc3\xa1rio</label>\n<input class=\"form-control\" id=\"username\" placeholder=\"Username\" value=\"";
echo ${$vvssnmfgnvb};
echo "\" name=\"username\" type=\"text\" disabled>\n</div>\n</div>\n<div class=\"mb-3\">\n<div class=\"form-group col-md-6\">\n<label for=\"firstName\" class=\"form-label\">Primeiro nome</label>\n<input type=\"text\" class=\"form-control\" id=\"firstName\" name=\"firstName\" placeholder=\"First Name\" value=\"";
echo $profile_usuario;
echo "\">\n</div>\n<div class=\"form-group col-md-6\">\n<label for=\"lastName\" class=\"form-label\">\xc3\x9altimo nome</label>\n<input type=\"text\" class=\"form-control\" id=\"lastName\" name=\"lastName\" placeholder=\"Last Name\" value=\"";
echo ${$GLOBALS["pdbxpiweq"]};
echo "\">\n</div>\n</div>\n<div class=\"mb-3\">\n<div class=\"form-group col-md-6\">\n<label for=\"password\" class=\"form-label\">Senha</label>\n<input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\" placeholder=\"Password\">\n</div>\n<div class=\"form-group col-md-6\">\n<label for=\"passwordConfirm\" class=\"form-label\">Confirmar senha</label>\n<input type=\"password\" class=\"form-control\" id=\"passwordConfirm\" name=\"passwordConfirm\" placeholder=\"Confirm Password\">\n</div>\n</div>-->\n";
if (${$GLOBALS["tryigdmdhwoa"]} >= "9") {
    echo "<div class=\"row\">\n\n<div class=\"mb-3 col-md-100\">\n<label for=\"Link_up\" class=\"form-label\">Link de UP-Auth</label>\n<div class=\"input-group\">\n<input type=\"text\" class=\"form-control\" id=\"Link_up\" placeholder=\"Link_up\" value=\"";
    echo "https://{$link2}/raw/auth.php";
    echo "\" readonly>\n<div class=\"input-group-append\">\n<button class=\"btn btn-outline-secondary\" type=\"button\"\nonclick=\"copyToClipboard('#Link_up')\">\n<i class=\"material-icons\">content_copy</i>\n</button>\n</div>\n</div>\n</div>\n\n\n</div>\n<hr class=\"mb-0\">\n<span>Abra seu MT Manager v\xc3\xa1 no arquivo <b>classe.dex</b>, <b>Editor plus</b>, pesquisa por <b>https://</b> e cole o link de UP-Auth.</span>\n<hr>\n\n<div class=\"row\">\n\n<div class=\"mb-3 col-md-100\">\n<label for=\"Link_up2\" class=\"form-label\">Link de UP-Config</label>\n<div class=\"input-group\">\n<input type=\"text\" class=\"form-control\" id=\"Link_up2\" placeholder=\"Link_up2\" value=\"";
    echo "https://{$link2}/raw/config.php";
    echo "\" readonly>\n<div class=\"input-group-append\">\n<button class=\"btn btn-outline-secondary\" type=\"button\"\nonclick=\"copyToClipboard('#Link_up2')\">\n<i class=\"material-icons\">content_copy</i>\n</button>\n</div>\n</div>\n</div>\n\n\n</div>\n<hr class=\"mb-0\">\n<span>Abra seu MT Manager v\xc3\xa1 no arquivo <b>classe.dex</b>, <b>Editor plus</b>, pesquisa por <b>https://</b> e cole o link de UP-Config.</span>\n<hr>\n\n<div class=\"row\">\n\n<div class=\"mb-3 col-md-100\">\n<label for=\"Link_up3\" class=\"form-label\">Link de UP-Tema</label>\n<div class=\"input-group\">\n<input type=\"text\" class=\"form-control\" id=\"Link_up3\" placeholder=\"Link_up3\" value=\"";
    echo "https://{$link2}/raw/tema.php";
    echo "\" readonly>\n<div class=\"input-group-append\">\n<button class=\"btn btn-outline-secondary\" type=\"button\"\nonclick=\"copyToClipboard('#Link_up3')\">\n<i class=\"material-icons\">content_copy</i>\n</button>\n</div>\n</div>\n</div>\n\n</div>\n<hr class=\"mb-0\">\n<span>Abra seu MT Manager v\xc3\xa1 no arquivo <b>classe.dex</b>, <b>Editor plus</b>, pesquisa por <b>https://</b> e cole o link de UP-Tema.</span>\n<hr>\n";
}
echo "\n\n<div class=\"row\">\n<div class=\"mb-3 col-md-100\">\n<label for=\"token_up\" class=\"form-label\">Token de autentica\xc3\xa7\xc3\xa3o</label>\n<div class=\"input-group\">\n<input type=\"text\" class=\"form-control\" id=\"token_up\" placeholder=\"token_up\" value=\"";
echo ${$GLOBALS["pzdsucwkdz"]};
echo "\" readonly>\n<div class=\"input-group-append\">\n<button class=\"btn btn-outline-secondary\" type=\"button\"\nonclick=\"copyToClipboard('#token_up')\">\n<i class=\"material-icons\">content_copy</i>\n</button>\n</div>\n</div>\n</div>\n</div>\n<hr class=\"mb-0\">\n<span>Abra seu MT Manager v\xc3\xa1 no arquivo <b>update</b> que fica localizado na pasta <b>assets</b> e cole o token dentro do arquivo.</span>\n<hr>\n<div class=\"col-md-6 mb-3\">\n<img src=\"https://i.ibb.co/j5YL6hM/20230516-193339.png\" width=\"70\" height=\"70\" />\n<label for=\"base_app\" class=\"form-label\">Download da base</label>\n<br>\n<a class=\"btn btn-dark\" href=\"";
echo ${$GLOBALS["aqjaqqnwlbqr"]};
echo "\" style=\"width: 100%;\">DOWNLOAD</a>\n";
if (${$gnqqvqq} >= "9") {
    echo "<br>\n<img src=\"https://i.ibb.co/j5YL6hM/20230516-193339.png\" width=\"70\" height=\"70\" />\n<label for=\"base_app\" class=\"form-label\">Upload da base</label>\n<br>\n<form method=\"post\" enctype=\"multipart/form-data\" action=\"recebeUp.php\">\n       \n\t  <center><input name=\"arquivo\" type=\"file\" />\n       <input class=\"btn btn-dark\" type=\"submit\" style=\"width: 100%;\" value=\"UPLOAD\" /> </center><br/>\n\t   <p>\n\t\t\t\t</p>\n    </form>\n";
}
echo "</div>\n<hr>\n<div class=\"col-md-6 mb-3\">\n<img src=\"https://i.ibb.co/j5YL6hM/20230516-193339.png\" width=\"70\" height=\"70\" />\n<label for=\"base_app\" class=\"form-label\">Download da base v2ray</label>\n<br>\n<a class=\"btn btn-dark\" href=\"";
echo ${$mxtkyeegimw};
echo "\" style=\"width: 100%;\">DOWNLOAD</a>\n";
if (${$GLOBALS["tryigdmdhwoa"]} >= "9") {
    echo "<br>\n<img src=\"https://i.ibb.co/j5YL6hM/20230516-193339.png\" width=\"70\" height=\"70\" />\n<label for=\"base_app\" class=\"form-label\">Upload da base v2ray</label>\n<br>\n<form method=\"post\" enctype=\"multipart/form-data\" action=\"recebeUpv2.php\">\n       \n\t  <center><input name=\"arquivo\" type=\"file\" />\n       <input class=\"btn btn-dark\" type=\"submit\" style=\"width: 100%;\" value=\"UPLOAD\" /> </center><br/>\n\t   <p>\n\t\t\t\t</p>\n    </form>\n";
}
echo "</div>\n<hr>\n\n\n\n\n\n<!--<div class=\"mb-3 col-md-6\">\n<label for=\"token\" class=\"form-label\">Token</label>\n<div class=\"input-group\">\n<input type=\"text\" class=\"form-control\" id=\"token\" placeholder=\"Token\" value=\"";
echo ${$GLOBALS["pzdsucwkdz"]};
echo "\" readonly>\n<div class=\"input-group-append\">\n<button class=\"btn btn-outline-secondary\" type=\"button\"\nonclick=\"copyToClipboard('#token')\">\n<i class=\"material-icons\">content_copy</i>\n</button>\n</div>\n</div>\n</div>\n<button type=\"submit\" class=\"btn btn-accent\">Atualizar</button>-->\n</form>\n</div>\n</div>\n</li>\n</ul>\n</div>\n</div>\n</div>\n<!-- End Default Light Table -->\n</div>\n</main>\n</div>\n</div>\n<script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/npm/toastify-js\"></script>\n<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"\nintegrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\" crossorigin=\"anonymous\"></script>\n<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\"\nintegrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\"\ncrossorigin=\"anonymous\"></script>\n<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js\"\nintegrity=\"sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2\"\ncrossorigin=\"anonymous\"></script>\n<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js\"></script>\n<script src=\"https://unpkg.com/shards-ui@latest/dist/js/shards.min.js\"></script>\n<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js\"></script>\n<script src=\"static/assets/js/extras.1.1.0.min.js\"></script>\n<script src=\"static/assets/js/shards-dashboards.1.1.0.min.js\"></script>\n<script>\nfunction doSearch(e) {\nlet search = document.getElementById('search').value;\nlet attr = e.getAttribute('href');\nif (attr.indexOf('search') > -1) {\nlet split = attr.split('&');\nfor (let i = 0; i < split.length; i++) {\nif (split[i].indexOf('search') > -1) {\nsplit[i] = 'search=' + search;\n}\n}\nattr = split.join('&');\n} else {\nattr += '&search=' + search;\n}\ne.setAttribute('href', attr);\n}\n</script>\n<script>\nfunction copyToClipboard(element) {\nvar \$temp = \$(\"<input>\");\n\$(\"body\").append(\$temp);\n\$temp.val(\$(element).val()).select();\ndocument.execCommand(\"copy\");\nToastify({\n  text: \"Token copiado con sucesso!\",\n  gravity: \"top\",\n  position: \"right\",\n  className: \"info\",\n  duration: 3000,\n  close: true,\n  style: {\n    background: \"linear-gradient(to right, #00b09b, #96c93d)\",\n  }\n}).showToast();\n\$temp.remove();\n}\n</script>\n</body>\n</html>\n";
