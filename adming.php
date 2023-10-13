<?php

$GLOBALS["gyfdmiv"] = "valor";
$GLOBALS["eqhebvuj"] = "gerador";
$GLOBALS["mijpbvy"] = "txt_active";
$GLOBALS["ppeigic"] = "dias_user";
$GLOBALS["vlnvekhybfnn"] = "dt_calc_user";
$GLOBALS["cnjzsyilcgg"] = "data_consultar_user";
$GLOBALS["kduhzxy"] = "p_validade";
$GLOBALS["wugzwblkfyb"] = "gerador";
$nguijr = "valor";
$GLOBALS["xhrsxnaxjdiw"] = "validade";
$GLOBALS["ipfhqwpcq"] = "gerador";
$GLOBALS["ntninwte"] = "data_2";
$GLOBALS["okvjoppu"] = "db_adm_expirar";
$GLOBALS["eiysjwzovln"] = "db_adm_login";
$ytsemkxl = "valor";
$GLOBALS["lxinjbr"] = "db_adm_user";
$GLOBALS["hzjdsk"] = "db_adm_user_id";
$GLOBALS["iwmvjmlkdodi"] = "db_cat_value";
$GLOBALS["mnynsksqjuup"] = "cor_active";
$GLOBALS["nixkswv"] = "db_usuario_acess_name";
$GLOBALS["awxgjyx"] = "gerador";
$GLOBALS["prnejeo"] = "db_adm_permiss";
$GLOBALS["dzyhdqlrst"] = "row_produto_cat";
$GLOBALS["onephjqtny"] = "resultado_produtos_cat";
$GLOBALS["yqnmpkcmo"] = "result_produtos_cat";
$GLOBALS["lfewdjelgtr"] = "db_usuario_acess";
$GLOBALS["tmqzlpogtx"] = "resultado_produtos_cat";
echo "<!doctype html>\n<html class=\"no-js h-100\" lang=\"pt-BR\" translate=\"no\">\n<link rel=\"shortcut icon\" href=\"static/assets/img/favicon.png\" />\n<title>\nGL-GESTOR - DASHBOARD\n</title>\n";
$elnrwec = "conn";
$bdilsxw = "row_produto_cat";
$wmqcwbffvf = "result_produtos_cat";
$vrjgkzqbb = "gerador";
$GLOBALS["fwscqcfuft"] = "valor";
include_once $_SERVER["DOCUMENT_ROOT"] . "/class/topo.php";
echo "<body class=\"h-100\">\n";
include_once $_SERVER["DOCUMENT_ROOT"] . "/class/topo2.php";
include_once $_SERVER["DOCUMENT_ROOT"] . "/class/enc.php";
echo "<style>\nnav {\nbackground-color: white;\n}\nbody {\nbackground-color: #f2f2f2;\n}\n</style>\n";
if ($db_usuario_acess == "9") {
} else {
    echo "<center><br><h1>REDIRECIONANDO...</h1><br></center>";
    exit;
}
echo "<div class=\"main-content-container container-fluid px-4\">\n<div class=\"page-header row no-gutters py-4\">\n<div class=\"col-12 col-sm-4 text-sm-left mb-0\">\n<center>\n<span class=\"text-uppercase page-subtitle\">Usu\xc3\xa1rios</span>\n<h3 class=\"page-title\">Vis\xc3\xa3o Geral</h3>\n</center>\n</div>\n</div>\n<div class=\"row\">\n<div class=\"col-lg-12 mb-4 p-0\">\n<div class=\"card card-small mb-4\">\n<div class=\"card-header border-bottom\">\n<div class=\"d-flex justify-content-between align-items-center\">\n<!--<h6 class=\"m-1\">Categorias</h6>-->\n<button type=\"button\" class=\"btn btn-dark btn-custom\" data-bs-toggle=\"modal\"\ndata-bs-target=\"#modal-category\"><i class=\"medium material-icons\"\nstyle=\"font-size: 1rem;\">add</i> <span>Adicionar</span>\n</button>\n</div>\n</div>\n<div class=\"card-body p-2 pb-3 text-center\">\n<div class=\"table-responsive\">\n<table class=\"table table-striped mb-3\">\n<thead class=\"bg-light\">\n<tr>\n<th scope=\"col\" class=\"border-0\">#</th>\n<th scope=\"col\" class=\"border-0\">Nome</th>\n<th scope=\"col\" class=\"border-0\">Login</th>\n<th scope=\"col\" class=\"border-0\">Expirar</th>\n<th scope=\"col\" class=\"border-0\">Permiss\xc3\xa3o</th>\n<!--<th scope=\"col\" class=\"border-0\">Token</th>-->\n<!--\n<th scope=\"col\" class=\"border-0\">Status</th>\n-->\n<th scope=\"col\" class=\"border-0\">A\xc3\xa7\xc3\xb5es</th>\n</tr>\n</thead>\n<tbody>\n";
include_once $_SERVER["DOCUMENT_ROOT"] . "/class/conexao.php";
${$GLOBALS["yqnmpkcmo"]} = "SELECT * FROM usuariogl ";
${$GLOBALS["tmqzlpogtx"]} = mysqli_query(${$elnrwec}, ${$wmqcwbffvf});
while (${$bdilsxw} = mysqli_fetch_assoc(${$GLOBALS["onephjqtny"]})) {
    $ewfhuibxyfo = "db_adm_user";
    $eykwdez = "db_adm_user_id";
    $lvpkpbcc = "db_adm_token";
    $gvbunyrosy = "db_adm_login";
    $swmwrohoqr = "db_adm_token";
    $GLOBALS["waugbosjhg"] = "db_adm_permiss";
    $aluyttke = "row_produto_cat";
    $GLOBALS["fotgadgnhy"] = "db_adm_pass1";
    $dixtehzma = "row_produto_cat";
    $db_adm_user_id = ${$GLOBALS["dzyhdqlrst"]}["id"];
    $bjtbzm = "cor_active";
    $wbcdcgwq = "db_adm_pass1";
    $db_adm_user = $row_produto_cat["user"];
    $ukapfhabql = "row_produto_cat";
    $zemwnvnwjmj = "row_produto_cat";
    $db_adm_login = ${$GLOBALS["dzyhdqlrst"]}["login"];
    $GLOBALS["xxepicgs"] = "db_adm_pass";
    $nlejejgo = "db_adm_expirar";
    $db_adm_pass1 = ${$GLOBALS["dzyhdqlrst"]}["pass"];
    $db_adm_expirar = $row_produto_cat["expirar"];
    $ugtqng = "validade";
    ${$GLOBALS["prnejeo"]} = $row_produto_cat["permiss"];
    $GLOBALS["tbwmbe"] = "db_adm_pass";
    $GLOBALS["rghetcckwas"] = "row_produto_cat";
    ${$swmwrohoqr} = ${$dixtehzma}["token"];
    $GLOBALS["wjmgkymrodk"] = "db_cat_status";
    $GLOBALS["mcdzwnaqe"] = "key";
    $GLOBALS["botohux"] = "data_1";
    $thzefymq = "row_produto_cat";
    $ywkcuk = "data_atual";
    if (${$GLOBALS["waugbosjhg"]} == "9") {
        $GLOBALS["mwsvhteujg"] = "db_usuario_acess_name";
        $db_usuario_acess_name = "Dono";
    } else {
        if (${$GLOBALS["prnejeo"]} == "7") {
            $jefredkpsqu = "db_usuario_acess_name";
            $db_usuario_acess_name = "Revendedor";
        } else {
            if (${$GLOBALS["prnejeo"]} == "5") {
                $GLOBALS["hnzynokv"] = "db_usuario_acess_name";
                $db_usuario_acess_name = "Usuario";
            } else {
                if (${$GLOBALS["prnejeo"]} == "4") {
                    $rktkamo = "db_usuario_acess_name";
                    $db_usuario_acess_name = "Membro";
                } else {
                    if (${$GLOBALS["prnejeo"]} == "3") {
                        ${$GLOBALS["nixkswv"]} = "Expirado";
                    } else {
                        $qchjlrbtvjij = "db_usuario_acess_name";
                        $db_usuario_acess_name = "";
                    }
                }
            }
        }
    }
    $mjewgudvhefg = "data_1";
    if (${$GLOBALS["wjmgkymrodk"]} == "ACTIVE") {
        $GLOBALS["ftfudegxusfy"] = "txt_active";
        ${$GLOBALS["mnynsksqjuup"]} = " badge-success\"";
        ${$GLOBALS["ftfudegxusfy"]} = "Ativo";
    } else {
        $qepwxptcqb = "cor_active";
        $cor_active = "\" style=\"background-color: red;\"";
        $vmcjgfpl = "txt_active";
        $txt_active = "Desativado";
    }
    ${$GLOBALS["tbwmbe"]} = AESCrypt::decrypt(${$GLOBALS["mcdzwnaqe"]}, ${$wbcdcgwq});
    ${$GLOBALS["iwmvjmlkdodi"]} = "\"{\\\"edit_qual\\\": \\\"EDIT\\\", \\\"edit_qual_id\\\": \\\"" . ${$GLOBALS["hzjdsk"]} . "\\\", \\\"user\\\": \\\"" . ${$GLOBALS["lxinjbr"]} . "\\\", \\\"pass\\\": \\\"" . ${$GLOBALS["xxepicgs"]} . "\\\", \\\"token\\\": \\\"" . ${$lvpkpbcc} . "\\\", \\\"status\\\": \\\"ACTIVE\\\", \\\"login\\\": \\\"" . ${$GLOBALS["eiysjwzovln"]} . "\\\", \\\"expirar\\\": \\\"" . ${$GLOBALS["okvjoppu"]} . "\\\", \\\"permiss\\\": \\\"" . ${$GLOBALS["prnejeo"]} . "\\\"}\"";
    echo "<style>\n  p {\n    white-space: nowrap\n  }\n</style>\n<input type=\"hidden\" id=\"category_";
    $GLOBALS["uxwugvqdxyq"] = "row_produto_cat";
    $GLOBALS["eebommcrpl"] = "row_produto_cat";
    $GLOBALS["xpkcoc"] = "row_produto_cat";
    echo ${$GLOBALS["rghetcckwas"]}["id"];
    echo "\"\nvalue='";
    echo ${$GLOBALS["iwmvjmlkdodi"]};
    echo "'>\n";
    ${$mjewgudvhefg} = ${$GLOBALS["dzyhdqlrst"]}["expirar"];
    ${$GLOBALS["ntninwte"]} = strtotime(${$GLOBALS["botohux"]});
    ${$GLOBALS["xhrsxnaxjdiw"]} = date("d/m/Y", ${$GLOBALS["ntninwte"]});
    $GLOBALS["eihfihkxkpl"] = "dias_user";
    $dhhimnm = "p_validade";
    $rfxupep = "row_produto_cat";
    if (${$GLOBALS["dzyhdqlrst"]}["permiss"] == 3) {
        $GLOBALS["xeorgthhtz"] = "p_validade";
        $dinrff = "row_produto_cat";
        $p_validade = "<span class=\"badge badge-pill badge-outline-danger\"><b>" . ${$GLOBALS["nixkswv"]} . " </b><b>(" . $row_produto_cat["permiss"] . ")</b></span>";
    } elseif (${$thzefymq}["permiss"] == 5) {
        $GLOBALS["iupdbprdlp"] = "row_produto_cat";
        ${$GLOBALS["kduhzxy"]} = "<span class=\"badge badge-pill badge-outline-primary\"><b>" . ${$GLOBALS["nixkswv"]} . " </b><b>(" . $row_produto_cat["permiss"] . ")</b></span>";
    } else {
        $GLOBALS["bdroamulho"] = "row_produto_cat";
        $GLOBALS["nnplch"] = "db_usuario_acess_name";
        $mnkpwhtxy = "p_validade";
        $p_validade = "<span class=\"badge badge-pill badge-outline-dark\"><b>" . $db_usuario_acess_name . " </b><b>(" . $row_produto_cat["permiss"] . ")</b></span>";
    }
    $axjymxpndmfx = "row_produto_cat";
    ${$GLOBALS["cnjzsyilcgg"]} = date($row_produto_cat["expirar"]);
    ${$GLOBALS["vlnvekhybfnn"]} = strtotime(${$GLOBALS["cnjzsyilcgg"]}) - strtotime(${$ywkcuk});
    ${$GLOBALS["eihfihkxkpl"]} = floor(${$GLOBALS["vlnvekhybfnn"]} / 86400);
    echo "\n<tr>\n<td><p class=\"card-text d-inline-block mb-3\"><b>" . ${$GLOBALS["uxwugvqdxyq"]}["id"] . "</b>\n</p></td>\n<td><p class=\"card-text d-inline-block mb-3\"><b>" . ${$GLOBALS["dzyhdqlrst"]}["user"] . "</b>\n</p></td>\n<td><p class=\"card-text d-inline-block mb-3\"><b>" . ${$GLOBALS["eiysjwzovln"]} . "\n</b></p></td>\n<td><p class=\"card-text d-inline-block mb-3\"><b>" . ${$GLOBALS["ppeigic"]} . " dias (" . ${$ugtqng} . ")\n</b></p></td>\n<td><p class=\"card-text d-inline-block mb-3\"><b>\n" . ${$dhhimnm} . "</b>\n</p></td>\n<!--\n<td>\n<span class=\"badge badge-pill\" style=\"background-color: " . ${$GLOBALS["dzyhdqlrst"]}["category_color"] . "\">\n" . ${$rfxupep}["category_color"] . "\n</span>\n</td>\n<td>\n<span class=\"badge badge-pill " . ${$bjtbzm} . ">" . ${$GLOBALS["mijpbvy"]} . "</span>\n</td>\n-->\n<td>\n<div class=\"btn-group dropend\">\n<button class=\"btn btn-dark dropdown-toggle\" type=\"button\"\nid=\"dropdownMenuButton2\" data-bs-toggle=\"dropdown\"\naria-expanded=\"false\">\n<i class=\"material-icons\">more_vert</i>\n</button>\n<ul class=\"dropdown-menu dropdown-menu-dark\"\naria-labelledby=\"dropdownMenuButton2\">\n<li>\n<button class=\"dropdown-item\" data-bs-toggle=\"modal\"\ndata-bs-target=\"#modal-category\"\ndata-bs-category-id=\"" . ${$GLOBALS["xpkcoc"]}["id"] . "\">\n<i class=\"material-icons\">edit</i> Editar\n</button>\n</li>\n<!--<li>\n<a class=\"dropdown-item\"\nhref=\"class/salvar-admin.php?func=desab_cat&id=" . ${$GLOBALS["eebommcrpl"]}["id"] . "\">\n<i class=\"material-icons\">block</i> Desativar\n</a>\n</li>-->\n<li>\n<a class=\"dropdown-item\"\nhref=\"class/func_del.php?func=del_user&id=" . ${$GLOBALS["dzyhdqlrst"]}["id"] . "\">\n<i class=\"material-icons\">delete</i> Excluir\n</a>\n</li>\n</ul>\n</div>\n</td>\n</tr>\n";
}
echo "</tbody>\n</table>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n<div class=\"modal fade\" id=\"modal-category\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\" tabindex=\"-1\"\naria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">\n<div class=\"modal-dialog\">\n<div class=\"modal-content\">\n<div class=\"modal-header\">\n<h5 class=\"modal-title\" id=\"exampleModalLabel\">CATEGORIA</h5>\n<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>\n</div>\n<div class=\"modal-body text-start\">\n<form action=\"/class/salvar-admin.php\" method=\"POST\">\n<input id=\"csrf_token\" name=\"csrf_token\" type=\"hidden\" value=\"\">\n<input class=\"form-control\" type=\"hidden\" name=\"tipox\" value=\"categoria\">\n<input class=\"form-control\" id=\"edit_qual\" type=\"hidden\" name=\"edit_qual\" value=\"edit_qual\">\n<input class=\"form-control\" id=\"edit_qual_id\" type=\"hidden\" name=\"edit_qual_id\" value=\"edit_qual_id\">\n<div class=\"row\">\n<div class=\"col-md-6 mb-3\">\n<label class=\"form-label\" for=\"user\">User</label>\n<input class=\"form-control\" id=\"user\" maxlength=\"30\" minlength=\"2\" name=\"user\" required type=\"text\" value=\"\">\n</div>\n<div class=\"col-md-6 mb-3\">\n<label class=\"form-label\" for=\"login\">Login</label>\n<input class=\"form-control\" data=\"6\" id=\"login\" name=\"login\" required type=\"text\" value=\"\">\n</div>\n</div>\n<div class=\"row\">\n<div class=\"col-md-6 mb-3\">\n<label class=\"form-label\" for=\"expirar\">Expirar</label>\n<input class=\"form-control\" id=\"expirar\" maxlength=\"30\" minlength=\"2\" name=\"expirar\" required type=\"date\" value=\"\">\n</div>\n<div class=\"col-md-6 mb-3\">\n<label class=\"form-label\" for=\"pass\">Senha</label>\n<input class=\"form-control\" data=\"6\" id=\"pass\" name=\"pass\" required type=\"text\" value=\"\">\n</div>\n</div>\n<div class=\"row\">\n<div class=\"col-md-6 mb-3\">\n<label class=\"form-label\" for=\"permiss\">Permiss\xc3\xa3o</label>\n<select class=\"form-select\" id=\"permiss\" name=\"permiss\" required>\n<option value=\"9\">Dono</option>\n<option></option>\n<option value=\"7\">Revendedor</option>\n<option></option>\n<option value=\"5\">Usu\xc3\xa1rio</option>\n<option value=\"3\">Vencido</option>\n</select>\n</div>\n<div class=\"col-md-6 mb-3\">\n<label class=\"form-label\" for=\"token\">Token</label>\n<input class=\"form-control\" data=\"6\" id=\"token\" name=\"token\" required type=\"text\" value=\"\">\n</div>\n</div>\n<!--\n<div class=\"row\">\n<div class=\"col-md-6 mb-3\">\n<label class=\"form-label\" for=\"category_color\">Cor da categoria</label>\n<input class=\"form-control\" id=\"category_color\" name=\"category_color\" type=\"text\" value=\"#434343\">\n<input type=\"color\" class=\"form-control mt-1\"\nonchange=\"javascript:\$('#category_color').val(this.value);\"\nvalue=\"#434343\" id=\"category_color_picker\">\n<input type=\"range\" class=\"form-range\" min=\"0\" max=\"100\" step=\"1\" id=\"category_color_alpha\">\n</div>\n<div class=\"col-md-6 mb-3\">\n<label class=\"form-label\" for=\"status\">Status</label>\n<select class=\"form-select\" id=\"status\" name=\"status\" required><option value=\"ACTIVE\">Ativo</option><option value=\"INACTIVE\">Inativo</option></select>\n</div>\n</div>\n-->\n<div class=\"modal-footer p-0 pt-2\">\n<button type=\"button\" class=\"btn btn-outline-accent\" data-bs-dismiss=\"modal\">Fechar</button>\n<input class=\"btn btn-accent\" id=\"submit\" name=\"submit\" type=\"submit\" value=\"SALVAR\">\n</div>\n</form>\n</div>\n</div>\n</div>\n</div>\n</main>\n</div>\n</div>\n<script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/npm/toastify-js\"></script>\n<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"\nintegrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\" crossorigin=\"anonymous\"></script>\n<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\"\nintegrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\"\ncrossorigin=\"anonymous\"></script>\n<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js\"\nintegrity=\"sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2\"\ncrossorigin=\"anonymous\"></script>\n<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js\"></script>\n<script src=\"https://unpkg.com/shards-ui@latest/dist/js/shards.min.js\"></script>\n<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js\"></script>\n<script src=\"static/assets/js/extras.1.1.0.min.js\"></script>\n<script src=\"static/assets/js/shards-dashboards.1.1.0.min.js\"></script>\n<script>\nfunction doSearch(e) {\nlet search = document.getElementById('search').value;\nlet attr = e.getAttribute('href');\nif (attr.indexOf('search') > -1) {\nlet split = attr.split('&');\nfor (let i = 0; i < split.length; i++) {\nif (split[i].indexOf('search') > -1) {\nsplit[i] = 'search=' + search;\n}\n}\nattr = split.join('&');\n} else {\nattr += '&search=' + search;\n}\ne.setAttribute('href', attr);\n}\n</script>\n<script>\n\$('#modal-category').on('shown.bs.modal', function (event) {\nlet category_id = event.relatedTarget.getAttribute('data-bs-category-id')\nif (!category_id) {\n\$('#user').val('User ";
$GLOBALS["tsvecudwpd"] = "gerador";
${$GLOBALS["eqhebvuj"]} = rand(4, 4);
${$GLOBALS["gyfdmiv"]} = substr(str_shuffle("0123456789abcdefghijlkmnopqrstuvxyzw0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"), 0, ${$GLOBALS["tsvecudwpd"]});
echo ${$GLOBALS["gyfdmiv"]};
echo "')\n\$('#login').val('";
${$vrjgkzqbb} = rand(8, 8);
${$GLOBALS["gyfdmiv"]} = substr(str_shuffle("0123456789abcdefghijlkmnopqrstuvxyzw0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"), 0, ${$GLOBALS["awxgjyx"]});
echo ${$nguijr};
echo "')\n\$('#expirar').val('')\n\$('#permiss').val('5')\n\$('#pass').val('";
${$GLOBALS["eqhebvuj"]} = rand(8, 8);
${$GLOBALS["fwscqcfuft"]} = substr(str_shuffle("0123456789abcdefghijlkmnopqrstuvxyzw0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"), 0, ${$GLOBALS["wugzwblkfyb"]});
echo ${$GLOBALS["gyfdmiv"]};
echo "')\n\$('#token').val('";
$pccgyoyxn = "valor";
${$GLOBALS["ipfhqwpcq"]} = rand(20, 20);
${$ytsemkxl} = substr(str_shuffle("0123456789abcdefghijlkmnopqrstuvxyzw0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"), 0, ${$GLOBALS["eqhebvuj"]});
echo ${$pccgyoyxn};
echo "')\n\$('#edit_qual').val('')\n\$('#edit_qual_id').val('')\n\$('#sort_order').val('')\n\$('#status').val(\$('#status option:first').val())\n\$('#category_color').val('#434343')\nreturn\n}\n\$('form[action=\"category/create\"').attr('action', '/category/' + category_id + '/update');\nlet category_data = \$('#category_' + category_id).val()\nlet category_data_obj = JSON.parse(JSON.parse(category_data))\n\$('#user').val(category_data_obj.user)\n\$('#login').val(category_data_obj.login)\n\$('#pass').val(category_data_obj.pass)\n\$('#expirar').val(category_data_obj.expirar)\n\$('#permiss').val(category_data_obj.permiss)\n\$('#token').val(category_data_obj.token)\n\$('#edit_qual').val(category_data_obj.edit_qual)\n\$('#edit_qual_id').val(category_data_obj.edit_qual_id)\n\$('#sort_order').val(category_data_obj.sort_order)\n\$('#status').val(category_data_obj.status)\nlet color = category_data_obj.category_color.split('#')[1]\nif (color.length == 8) {\nlet alpha = parseInt(color.substring(0, 2), 16)\n\$('#category_color_alpha').val(parseFloat(alpha / 255 * 100))\n}\n\$('#category_color_picker').val('#' + (color.length == 8 ? color.substring(2, color.length) : color))\n\$('#category_color').val(category_data_obj.category_color)\n});\nfunction alphaHexColor(number) {\nlet alphaFixed = number.toFixed(2) * 255;\nlet alphaHex = alphaFixed.toString(16);\nlet split = alphaHex.split('.');\nreturn split[0].length == 1 ? '0' + split[0] : split[0];\n}\n\$('#category_color_alpha').on('input', function () {\nlet alpha = parseFloat(this.value) / 100;\nlet color = \$('#category_color').val();\ncolor = color.replace('#', '');\nif (color.length == 8) {\ncolor = color.substring(2, 8);\n}\nlet hex = alphaHexColor(alpha);\nlet hexColor = hex + color;\n\$('#category_color').val('#' + hexColor);\n});\n</script>\n<script>\n    var option= {\n      animation: true,\n      delay: 3000\n    }\n    var myAlert = document.getElementById(\"toast\");\n    var bsAlert=new bootstrap.Toast(myAlert, option);\n    bsAlert.show();\n</script>\n";
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
