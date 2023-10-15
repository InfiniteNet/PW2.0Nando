<?php

$GLOBALS["eltelkcc"] = "db_cat_value";
$GLOBALS["mvxhhidq"] = "db_cat_user_id";
$GLOBALS["vrtixhyj"] = "db_cat_ordem";
$GLOBALS["llsaitb"] = "db_cat_description";
$iteuois = "ord_or3";
$GLOBALS["odzxwz"] = "txt_active";
$GLOBALS["yruwlyduf"] = "cor_active";
$GLOBALS["lixpqbiy"] = "comando";
$GLOBALS["hgmbrmg"] = "funcao";
$GLOBALS["htfmyqtbrp"] = "ord_or3";
$GLOBALS["kcfigrei"] = "db_cat_status";
$GLOBALS["uvrhtbuvkbre"] = "db_cat_slug";
$GLOBALS["plwmwfdr"] = "db_cat_cor";
$GLOBALS["wuloec"] = "row_produto_cat";
$GLOBALS["alnosnswdne"] = "db_usuario";
$GLOBALS["eqiqrbe"] = "conn";
$GLOBALS["fyspbf"] = "resultado_produtos_cat";
$afqgkcftmoj = "row_produto_cat";
$GLOBALS["uyatskhofu"] = "resultado_produtos_cat";
$GLOBALS["rgkuevhmb"] = "result_produtos_cat";
echo "\n<!doctype html>\n<html class=\"no-js h-100\" lang=\"pt-BR\" translate=\"no\">\n<link rel=\"shortcut icon\" href=\"static/assets/img/favicon.png\" />\n<title>\nGL-GESTOR - CATEGORIAS\n</title>\n";
include_once $_SERVER["DOCUMENT_ROOT"] . "/class/topo.php";
echo "<body class=\"h-100\">\n";
include_once $_SERVER["DOCUMENT_ROOT"] . "/class/topo2.php";
echo "<div class=\"main-content-container container-fluid px-4\">\n<div class=\"page-header row no-gutters py-4\">\n<div class=\"col-12 col-sm-4 text-sm-left mb-0\">\n<center>\n<span class=\"text-uppercase page-subtitle\">CATEGORIA</span>\n<h3 class=\"page-title\">Vis\xc3\xa3o Geral</h3>\n</center>\n</div>\n</div>\n<div class=\"row\">\n<div class=\"col-lg-12 mb-4 p-0\">\n<div class=\"card card-small mb-4\">\n<div class=\"card-header border-bottom\">\n<div class=\"d-flex justify-content-between align-items-center\">\n<!--<h6 class=\"m-1\">Categorias</h6>-->\n<button type=\"button\" class=\"btn btn-dark btn-custom\" data-bs-toggle=\"modal\"\ndata-bs-target=\"#modal-category\"><i class=\"medium material-icons\"\nstyle=\"font-size: 1rem;\">add</i> <span>Adicionar</span>\n</button>\n</div>\n</div>\n<div class=\"card-body p-2 pb-3 text-center\">\n<div class=\"table-responsive\">\n<table class=\"table table-striped mb-3\">\n<thead class=\"bg-light\">\n<tr>\n<th scope=\"col\" class=\"border-0\">#</th>\n<th scope=\"col\" class=\"border-0\">Nome</th>\n<th scope=\"col\" class=\"border-0\">Ordem</th>\n<!--<th scope=\"col\" class=\"border-0\">Cor</th>-->\n<th scope=\"col\" class=\"border-0\">Status</th>\n<th scope=\"col\" class=\"border-0\">A\xc3\xa7\xc3\xb5es</th>\n</tr>\n</thead>\n<tbody>\n\n";
include_once $_SERVER["DOCUMENT_ROOT"] . "/class/conexao.php";
$result_produtos_cat = "SELECT * FROM categoriagl WHERE user_id LIKE '{$db_user_id}' ORDER BY LENGTH(sort_order), sort_order ";
$resultado_produtos_cat = mysqli_query($conn, $result_produtos_cat);
while (${$afqgkcftmoj} = mysqli_fetch_assoc(${$GLOBALS["fyspbf"]})) {
    $nemdrntbhu = "row_produto_cat";
    $vftdgpc = "row_produto_cat";
    $GLOBALS["whmiqk"] = "db_cat_status";
    $GLOBALS["wpppgvcj"] = "row_produto_cat";
    $GLOBALS["snhndfemdi"] = "row_produto_cat";
    $jlqpsbgubheu = "db_cat_slug";
    $GLOBALS["xdiimlkf"] = "db_cat_cor";
    $vzqnvbzy = "db_cat_ordem";
    $qrdayknm = "db_cat_id";
    $nshsrjmv = "row_produto_cat";
    $GLOBALS["bxvxshkx"] = "row_produto_cat";
    $GLOBALS["nlorgkvh"] = "db_cat_value";
    $GLOBALS["ljoejwooht"] = "db_cat_nome";
    $GLOBALS["carrqqder"] = "db_cat_description";
    ${$GLOBALS["alnosnswdne"]} = ${$GLOBALS["wuloec"]}["info1"];
    $ymtroeomyen = "row_produto_cat";
    $gxeecwtfxix = "txt_active";
    $GLOBALS["zgwdqhwc"] = "db_cat_ordem";
    $GLOBALS["nidjznbfiu"] = "db_cat_id";
    ${$GLOBALS["plwmwfdr"]} = ${$GLOBALS["wuloec"]}["category_color"];
    ${$GLOBALS["carrqqder"]} = ${$GLOBALS["bxvxshkx"]}["description"];
    $dywwquvlrsk = "db_cat_nome";
    $GLOBALS["yjncls"] = "comando";
    ${$GLOBALS["nidjznbfiu"]} = ${$GLOBALS["wpppgvcj"]}["id"];
    $GLOBALS["cuifyskimm"] = "db_cat_id";
    ${$dywwquvlrsk} = ${$GLOBALS["snhndfemdi"]}["name"];
    ${$GLOBALS["uvrhtbuvkbre"]} = ${$vftdgpc}["slug"];
    ${$vzqnvbzy} = ${$nshsrjmv}["sort_order"];
    ${$GLOBALS["kcfigrei"]} = ${$ymtroeomyen}["status"];
    $unwubckam = "db_cat_user_id";
    $db_cat_user_id = ${$GLOBALS["wuloec"]}["user_id"];
    $GLOBALS["wcnxinmrz"] = "row_produto_cat";
    $GLOBALS["kmdlelmlg"] = "row_produto_cat";
    if (${$GLOBALS["htfmyqtbrp"]} <= ${$GLOBALS["zgwdqhwc"]}) {
        $GLOBALS["jxsomwqnyfd"] = "db_cat_ordem";
        ${$GLOBALS["htfmyqtbrp"]} = $db_cat_ordem + 1;
    }
    $ifhphhhae = "row_produto_cat";
    if (${$GLOBALS["whmiqk"]} == "ACTIVE") {
        $wuwxqpjbq = "ico_status";
        $wbhifub = "txt_active";
        $ico_status = "block";
        ${$GLOBALS["hgmbrmg"]} = "desab_cat";
        ${$GLOBALS["lixpqbiy"]} = "Desativar";
        ${$GLOBALS["yruwlyduf"]} = " badge-success\"";
        ${$wbhifub} = "Ativo";
    } else {
        $vwjlnkox = "ico_status";
        $yuejigfs = "cor_active";
        $ico_status = "check_circle";
        ${$GLOBALS["hgmbrmg"]} = "habilit_cat";
        ${$GLOBALS["lixpqbiy"]} = "Ativar";
        ${$yuejigfs} = "\" style=\"background-color: red;\"";
        ${$GLOBALS["odzxwz"]} = "Desativado";
    }
    ${$GLOBALS["nlorgkvh"]} = "\"{\\\"edit_qual\\\": \\\"EDIT\\\", \\\"edit_qual_id\\\": \\\"" . ${$GLOBALS["cuifyskimm"]} . "\\\", \\\"category_color\\\": \\\"" . ${$GLOBALS["xdiimlkf"]} . "\\\", \\\"description\\\": \\\"" . ${$GLOBALS["llsaitb"]} . "\\\", \\\"id\\\": \\\"" . ${$qrdayknm} . "\\\", \\\"name\\\": \\\"" . ${$GLOBALS["ljoejwooht"]} . "\\\", \\\"slug\\\": \\\"" . ${$jlqpsbgubheu} . "\\\", \\\"sort_order\\\": \\\"" . ${$GLOBALS["vrtixhyj"]} . "\\\", \\\"status\\\": \\\"" . ${$GLOBALS["kcfigrei"]} . "\\\", \\\"user_id\\\": \\\"" . ${$GLOBALS["mvxhhidq"]} . "\\\"}\"";
    echo "\n<input type=\"hidden\" id=\"category_";
    echo ${$GLOBALS["wuloec"]}["id"];
    echo "\"\nvalue='";
    $edvfcyesojd = "ico_status";
    echo ${$GLOBALS["eltelkcc"]};
    echo "'>\n<style>\n  td {\n    \n  }\n</style>\n";
    echo "\n<tr>\n<td><i><p class=\"card-text d-inline-block mb-3\">\n          <span class=\"badge badge-pill badge-dark\">" . ${$ifhphhhae}["id"] . "</span>\n        </p></td>\n<td><p class=\"card-text d-inline-block mb-3\">\n          <span class=\"badge badge-pill badge-dark\">" . ${$GLOBALS["wuloec"]}["name"] . "</span>\n        </p></td>\n<td><i><p class=\"card-text d-inline-block mb-3\">\n          <span class=\"badge badge-pill badge-dark\">" . ${$GLOBALS["kmdlelmlg"]}["sort_order"] . "</span>\n        </p></td>\n<!--<td>\n<span class=\"badge badge-pill\" style=\"background-color: " . ${$nemdrntbhu}["category_color"] . "\">\n" . ${$GLOBALS["wuloec"]}["category_color"] . "\n</span>\n</td>-->\n<td><i>\n<span class=\"badge badge-pill " . ${$GLOBALS["yruwlyduf"]} . ">" . ${$gxeecwtfxix} . "</span>\n<td>\n\n<button class=\"btn btn-dark btn-sm dropdown-toggle\" type=\"button\"\nid=\"dropdownMenuButton2\" data-bs-toggle=\"dropdown\"\naria-expanded=\"false\">\n<i class=\"material-icons\">more_vert</i>\n</button>\n<ul class=\"dropdown-menu dropdown-menu-dark\"\naria-labelledby=\"dropdownMenuButton2\">\n<li>\n<button class=\"dropdown-item\" data-bs-toggle=\"modal\"\ndata-bs-target=\"#modal-category\"\ndata-bs-category-id=\"" . ${$GLOBALS["wcnxinmrz"]}["id"] . "\">\n<i class=\"material-icons\">edit</i> Editar\n</button>\n</li>\n<li>\n<a class=\"dropdown-item\"\nhref=\"class/salvar-cat.php?func=" . ${$GLOBALS["hgmbrmg"]} . "&id=" . ${$GLOBALS["wuloec"]}["id"] . "\">\n<i class=\"material-icons\">" . $ico_status . "</i> " . ${$GLOBALS["yjncls"]} . "\n</a>\n</li>\n<li>\n<a class=\"dropdown-item\"\nhref=\"class/salvar-cat.php?func=del_cat&id=" . ${$GLOBALS["wuloec"]}["id"] . "\">\n<i class=\"material-icons\">delete</i> Excluir\n</a>\n</li>\n</ul>\n\n</td>\n</tr>\n";
}
echo "\n\n</tbody>\n</table>\n</div>\n</div>\n<div class=\"modal fade\" id=\"modal-category\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\" tabindex=\"-1\"\naria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">\n<div class=\"modal-dialog\">\n<div class=\"modal-content\">\n<div class=\"modal-header\">\n<h5 class=\"modal-title\" id=\"exampleModalLabel\">CATEGORIA</h5>\n<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>\n</div>\n<div class=\"modal-body text-start\">\n<form action=\"/class/salvar-cat.php\" method=\"POST\">\n<input id=\"csrf_token\" name=\"csrf_token\" type=\"hidden\" value=\"\">\n<input class=\"form-control\" type=\"hidden\" name=\"tipox\" value=\"categoria\">\n<input class=\"form-control\" id=\"edit_qual\" type=\"hidden\" name=\"edit_qual\" value=\"edit_qual\">\n<input class=\"form-control\" id=\"edit_qual_id\" type=\"hidden\" name=\"edit_qual_id\" value=\"edit_qual_id\">\n<div class=\"row\">\n<div class=\"col-md-6 mb-3\">\n<label class=\"form-label\" for=\"name\">Nome da categoria</label>\n<input class=\"form-control\" id=\"name\" maxlength=\"30\" minlength=\"2\" name=\"name\" required type=\"text\" value=\"\">\n</div>\n<div class=\"col-md-6 mb-3\">\n<label class=\"form-label\" for=\"sort_order\">Ordem de exibi\xc3\xa7\xc3\xa3o</label>\n<input class=\"form-control\" data=\"6\" id=\"sort_order\" name=\"sort_order\" required type=\"number\" value=\"1\">\n</div>\n</div>\n\n\n<div class=\"row\"><!--\n<div class=\"col-md-6 mb-3\">\n<label class=\"form-label\" for=\"category_color\">Cor da categoria</label>\n<input class=\"form-control\" id=\"category_color\" name=\"category_color\" type=\"text\" value=\"#434343\">\n<input type=\"color\" class=\"form-control mt-1\"\nonchange=\"javascript:\$('#category_color').val(this.value);\"\nvalue=\"#434343\" id=\"category_color_picker\">\n<input type=\"range\" class=\"form-range\" min=\"0\" max=\"100\" step=\"1\" id=\"category_color_alpha\">\n</div>-->\n<div class=\"col-md-100 mb-3\">\n<label class=\"form-label\" for=\"status\">Status</label>\n<select class=\"form-select\" id=\"status\" name=\"status\" required><option value=\"ACTIVE\">Ativo</option><option value=\"INACTIVE\">Inativo</option></select>\n</div>\n</div>\n\n\n\n<div class=\"modal-footer p-0 pt-2\">\n<button type=\"button\" class=\"btn btn-outline-dark\" data-bs-dismiss=\"modal\">Fechar</button>\n<input class=\"btn btn-dark\" id=\"submit\" name=\"submit\" type=\"submit\" value=\"SALVAR\">\n</div>\n\n\n\n</form>\n</div>\n</div>\n</div>\n</div>\n</main>\n</div>\n</div>\n<script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/npm/toastify-js\"></script>\n<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"\nintegrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\" crossorigin=\"anonymous\"></script>\n<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\"\nintegrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\"\ncrossorigin=\"anonymous\"></script>\n<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js\"\nintegrity=\"sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2\"\ncrossorigin=\"anonymous\"></script>\n<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js\"></script>\n<script src=\"https://unpkg.com/shards-ui@latest/dist/js/shards.min.js\"></script>\n<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js\"></script>\n<script src=\"static/assets/js/extras.1.1.0.min.js\"></script>\n<script src=\"static/assets/js/shards-dashboards.1.1.0.min.js\"></script>\n<script>\nfunction doSearch(e) {\nlet search = document.getElementById('search').value;\nlet attr = e.getAttribute('href');\nif (attr.indexOf('search') > -1) {\nlet split = attr.split('&');\nfor (let i = 0; i < split.length; i++) {\nif (split[i].indexOf('search') > -1) {\nsplit[i] = 'search=' + search;\n}\n}\nattr = split.join('&');\n} else {\nattr += '&search=' + search;\n}\ne.setAttribute('href', attr);\n}\n</script>\n<script>\n\$('#modal-category').on('shown.bs.modal', function (event) {\nlet category_id = event.relatedTarget.getAttribute('data-bs-category-id')\nif (!category_id) {\n\$('#edit_qual').val('')\n\$('#edit_qual_id').val('')\n\$('#name').val('')\n\$('#sort_order').val('";
echo ${$iteuois};
echo "')\n\$('#status').val(\$('#status option:first').val())\n\$('#category_color').val('#434343')\nreturn\n}\n\$('form[action=\"category/create\"').attr('action', '/category/' + category_id + '/update');\nlet category_data = \$('#category_' + category_id).val()\nlet category_data_obj = JSON.parse(JSON.parse(category_data))\n\$('#edit_qual').val(category_data_obj.edit_qual)\n\$('#edit_qual_id').val(category_data_obj.edit_qual_id)\n\$('#name').val(category_data_obj.name)\n\$('#sort_order').val(category_data_obj.sort_order)\n\$('#status').val(category_data_obj.status)\nlet color = category_data_obj.category_color.split('#')[1]\nif (color.length == 8) {\nlet alpha = parseInt(color.substring(0, 2), 16)\n\$('#category_color_alpha').val(parseFloat(alpha / 255 * 100))\n}\n\$('#category_color_picker').val('#' + (color.length == 8 ? color.substring(2, color.length) : color))\n\$('#category_color').val(category_data_obj.category_color)\n});\nfunction alphaHexColor(number) {\nlet alphaFixed = number.toFixed(2) * 255;\nlet alphaHex = alphaFixed.toString(16);\nlet split = alphaHex.split('.');\nreturn split[0].length == 1 ? '0' + split[0] : split[0];\n}\n\$('#category_color_alpha').on('input', function () {\nlet alpha = parseFloat(this.value) / 100;\nlet color = \$('#category_color').val();\ncolor = color.replace('#', '');\nif (color.length == 8) {\ncolor = color.substring(2, 8);\n}\nlet hex = alphaHexColor(alpha);\nlet hexColor = hex + color;\n\$('#category_color').val('#' + hexColor);\n});\n</script>\n";
if (isset($_SESSION["message"])) {
    echo "    <script>\n      Toastify({\n        text: \"";
    echo $_SESSION["message"];
    echo "\",\n        gravity: \"top\",\n        position: \"right\",\n        className: \"info\",\n        duration: 3000,\n        close: true,\n        style: {\n          background: \"linear-gradient(to right, #00b09b, #96c93d)\",\n        }\n      }).showToast();\n    </script>\n    ";
    unset($_SESSION["message"]);
    unset($_SESSION["erro"]);
}
if (isset($_SESSION["erro"])) {
    echo "    <script>\n      Toastify({\n        text: \"";
    echo $_SESSION["message"];
    echo "\",\n        gravity: \"top\",\n        position: \"right\",\n        className: \"info\",\n        duration: 3000,\n        close: true,\n        style: {\n          background: \"linear-gradient(to right, #b00000, #c93d3d)\",\n        }\n      }).showToast();\n    </script>\n    ";
    unset($_SESSION["erro"]);
    unset($_SESSION["message"]);
}
echo "</body>\n</html>\n";
