<?php

$GLOBALS["onixxb"] = "db_usuario_expirar_dias";
$GLOBALS["ylxnlmsee"] = "total_total_cat";
$GLOBALS["cffcivxbak"] = "sql_total_cat";
$GLOBALS["puqcbbkcy"] = "result_total_cat";
$GLOBALS["leirsdjyyftd"] = "total_total_conf";
$GLOBALS["dipwbvgqwp"] = "result_total_conf";
$GLOBALS["cacezgbg"] = "sql_total_conf";
$GLOBALS["ihfssfhxrmbw"] = "total_total_user";
$jbrsxihgdlt = "total_total_cat";
$GLOBALS["xiytlvi"] = "conn";
$GLOBALS["qmqeoycx"] = "result_total_user";
$GLOBALS["dsbdxpxqghpc"] = "dias_br";
$GLOBALS["rdlmvdb"] = "dias";
$GLOBALS["enljxwyv"] = "nome";
$GLOBALS["tyuomrktr"] = "dataJson";
$hyemgnsp = "db_usuario_acess";
$GLOBALS["dpqgyigimw"] = "mensagemJson";
$GLOBALS["vhmvkfw"] = "dadosJson";
$GLOBALS["mhunrbwnkj"] = "db_usuario_acess";
$blgeuc = "dadosJson2";
$GLOBALS["gxsrdgpyqdo"] = "msgcria";
$GLOBALS["gzihhmydqxh"] = "db_usuario_acess";
if (!file_exists("class/msg.json")) {
    $GLOBALS["xkqotzrpoh"] = "datecria";
    $GLOBALS["hvrhoobexs"] = "msgcria";
    $msgcria = "<hr><b>Canal de suporte e novidades<b><br><a href='https://t.me/paineis'>Clique aqui</a><hr>";
    $GLOBALS["qiuhmwqv"] = "datecria";
    $wkxzahtmrey = "resultcria";
    $datecria = date("d/m/Y");
    $GLOBALS["jhkhawinib"] = "resultcria";
    $resultcria = "{\n  \"valores\": [\n    {\n      \"msg\": \"<hr><b>Canal de suporte e novidades<b><br><a href='https://t.me/paineis'>Clique aqui</a><hr>\",\n      \"data\": \"" . $datecria . "\"\n    }\n  ]\n}";
    file_put_contents("class/msg.json", $resultcria);
}
$GLOBALS["mvnfogjqqizr"] = "db_usuario_acess";
echo "<!doctype html>\n<html class=\"no-js h-100\" lang=\"pt-BR\" translate=\"no\">\n<title>\nGL-GESTOR - DASHBOARD\n</title>\n<link rel=\"shortcut icon\" href=\"./static/assets/img/favicon.png\" />\n";
$GLOBALS["uwwnzn"] = "db_usuario_acess";
include_once $_SERVER["DOCUMENT_ROOT"] . "/class/topo.php";
echo "<body class=\"h-100\">\n";
include_once $_SERVER["DOCUMENT_ROOT"] . "/class/topo2.php";
$GLOBALS["dovnxwp"] = "db_usuario_acess";
echo "\n";
$hctibhbzujhu = "dadosJson";
$lhbhhi = "total_total_conf";
$GLOBALS["kwbuknizydvo"] = "dadosJsonDecodificados";
$uzsqqo = "db_usuario_expirar";
if (${$GLOBALS["gzihhmydqxh"]} == "3") {
    ${$GLOBALS["mhunrbwnkj"]} = "<p class='card-text d-inline-block mb-3'>\n          <span class='badge badge-pill badge-danger'>Nivel: Expirado</span>\n        </p>";
} else {
    if (${$GLOBALS["dovnxwp"]} == "9") {
        $GLOBALS["gcebvfcyb"] = "db_usuario_acess";
        $db_usuario_acess = "<p class='card-text d-inline-block mb-3'>\n          <span class='badge badge-pill badge-success'>Nivel: Dono</span>\n        </p>";
    } else {
        if (${$GLOBALS["mhunrbwnkj"]} == "7") {
            $GLOBALS["ojwtyfnmg"] = "db_usuario_acess";
            $db_usuario_acess = "<p class='card-text d-inline-block mb-3'>\n          <span class='badge badge-pill badge-success'>Nivel: Revendedor</span>\n        </p>";
        } else {
            if (${$GLOBALS["uwwnzn"]} == "5") {
                ${$GLOBALS["mhunrbwnkj"]} = "<p class='card-text d-inline-block mb-3'>\n          <span class='badge badge-pill badge-warning'>Nivel: Usu\xc3\xa1rio</span>\n        </p>";
            } else {
                $GLOBALS["gmxoowikl"] = "db_usuario_acess";
                $db_usuario_acess = ${$GLOBALS["mhunrbwnkj"]};
            }
        }
    }
}
echo "<style>\n@media (max-width: 10000000px) {\n\n    .col-md-6-test50 {\n        width: 50%;\n        padding-left: 12px;\n        padding-right: 3px;\n    }\n    .col-md-6-test51 {\n        width: 50%;\n        padding-right: 12px;\n        padding-left: 3px;\n    }\n\n    .col-md-6-test33 {\n        width: 33%;\n    }\n    \n    .col-md-6-test70 {\n        width: 70%;\n    }\n    \n    .col-md-6-test30 {\n        width: 30%;\n    }\n}\n</style>\n<div class=\"main-content-container container-fluid px-4\">\n<div class=\"page-header row no-gutters py-4\">\n<div class=\"col-12 col-sm-4 text-sm-left mb-0\">\n<center>\n<span class=\"text-uppercase page-subtitle\">PAINEL DE CONTROLE</span>\n<h3 class=\"page-title\">Vis\xc3\xa3o Geral</h3>\n</center>\n</div>\n</div>\n\n<div class=\"row\">\n    <div class=\"col-lg col-md-100 col-sm6 mb-2\">\n      <div class=\"card card-small card-post card-post--3\">\n        <div class=\"card-body\">\n          <div class=\"mb-3 col-md-100\">\n            <h5 class=\"card-title\">\n            <center>\n              <h6 class=\"stats-small__value count my-3 mb-3\">Alertas </h6>\n              </center>\n            </h5>\n              <center>\n              <h6>";
${$hctibhbzujhu} = file_get_contents("class/msg.json");
${$GLOBALS["kwbuknizydvo"]} = json_decode(${$GLOBALS["vhmvkfw"]});
foreach ($dadosJsonDecodificados->valores as ${$blgeuc}) {
    ${$GLOBALS["dpqgyigimw"]} = $dadosJson2->msg;
    ${$GLOBALS["tyuomrktr"]} = $dadosJson2->data;
}
echo ${$GLOBALS["dpqgyigimw"]};
echo "</h6>\n";
if (${$GLOBALS["mhunrbwnkj"]} == "<p class='card-text d-inline-block mb-3'>\n          <span class='badge badge-pill badge-success'>Nivel: Dono</span>\n        </p>") {
    echo "<h3 type=\"button\" class=\"\" data-bs-toggle=\"modal\"\ndata-bs-target=\"#modal-msg\">\n\xe2\x9c\x8d\xef\xb8\x8f\n</h3>\n";
}
echo "              </center>\n          </div>\n        </div>\n      </div>\n    </div>\n  </div>\n\n  <div class=\"row\">\n    <div class=\"col-lg col-md-6-test50 col-sm6 mb-2\">\n      <div class=\"card card-small card-post card-post--3\">\n        <div class=\"card-body\">\n          <h5 class=\"card-title\">\n            <a class=\"text-fiord-blue\" href=\"#\">Info</a>\n          </h5>\n          <p class=\"card-text d-inline-block mb-3\">\n            <span class=\"badge badge-pill badge-dark\">Nome:\n              ";
echo ${$GLOBALS["enljxwyv"]};
echo "            </span>\n          </p>\n        </br>\n            ";
$GLOBALS["jvcvyislvxkn"] = "db_usuario_expirar";
echo ${$hyemgnsp};
echo "      </div>\n    </div>\n  </div>\n  <div class=\"col-lg col-md-6-test51 col-sm6 mb-2\">\n    <div class=\"card card-small card-post card-post--3\">\n      <div class=\"card-body\">\n        <h5 class=\"card-title\">\n          <a class=\"text-fiord-blue\" href=\"#\">Validade</a>\n        </h5>\n        <p class=\"card-text d-inline-block mb-3\">\n          <span class=\"badge badge-pill badge-dark\">\n            ";
if (${$GLOBALS["rdlmvdb"]} > 100000) {
    $vhfeyvsli = "dias";
    $dias = "\xe2\x99\xbe\xef\xb8\x8f";
    ${$GLOBALS["dsbdxpxqghpc"]} = "Permanente";
} else {
    $GLOBALS["khvqhqlfiz"] = "dias";
    $dias = ${$GLOBALS["rdlmvdb"]};
    $GLOBALS["czvxlnclgv"] = "dias_br";
    $dias_br = ${$GLOBALS["dsbdxpxqghpc"]};
}
echo "Dias restante: {$dias}";
echo "          </span>\n        </p>\n      </br>\n      <p class=\"card-text d-inline-block mb-3\">\n        <span class=\"badge badge-pill badge-dark\">\n          ";
$GLOBALS["hvyivrexca"] = "sql_total_cat";
$GLOBALS["oehkbdoinjk"] = "sql_total_conf";
$ogpoxsxplrdk = "db_usuario_expirar";
echo "Data: {$dias_br}";
echo "        </span>\n      </p>\n    </div>\n  </div>\n</div>\n</div>\n\n";
if (${$GLOBALS["mvnfogjqqizr"]} == "<p class='card-text d-inline-block mb-3'>\n          <span class='badge badge-pill badge-success'>Nivel: Dono</span>\n        </p>") {
    $nfvknbqk = "sql_total_user";
    $GLOBALS["glrpjimmxh"] = "result_total_user";
    $GLOBALS["epvenczhbwtv"] = "sql_total_user";
    echo "<div class=\"row\">\n    <div class=\"col-lg col-md-100 col-sm6 mb-2\">\n      <div class=\"card card-small card-post card-post--3\">\n        <div class=\"card-body\">\n          <center>\n          <span class=\"stats-small__label text-uppercase\">Total de Usu\xc3\xa1rios</span>\n            <h6 class=\"stats-small__value count my-3\">\n            <a class=\"text-fiord-blue\" href=\"#\">\n";
    $sql_total_user = "SELECT * FROM usuariogl";
    ${$GLOBALS["qmqeoycx"]} = mysqli_query(${$GLOBALS["xiytlvi"]}, $sql_total_user);
    ${$GLOBALS["ihfssfhxrmbw"]} = mysqli_num_rows(${$GLOBALS["glrpjimmxh"]});
    echo ${$GLOBALS["ihfssfhxrmbw"]};
    echo "          </a>\n          </h6>\n          <a href=\"/adming.php\" class=\"small-box-footer\"><i class=\"fas fa-arrow-circle-right\"></i></a>\n          </center>\n      </div>\n    </div>\n  </div>\n  </div>\n";
}
echo "  \n<div class=\"row\">\n    <div class=\"col-lg col-md-100 col-sm6 mb-2\">\n      <div class=\"card card-small card-post card-post--3\">\n        <div class=\"card-body\">\n          <center>\n          <span class=\"stats-small__label text-uppercase\">Total de Configura\xc3\xa7\xc3\xb5es</span>\n            <h6 class=\"stats-small__value count my-3\">\n            <a class=\"text-fiord-blue\" href=\"#\">\n";
${$GLOBALS["cacezgbg"]} = "SELECT * FROM configgl WHERE user_id='{$user_id}'";
$GLOBALS["tvthkkhmkd"] = "mensagemJson";
${$GLOBALS["dipwbvgqwp"]} = mysqli_query(${$GLOBALS["xiytlvi"]}, ${$GLOBALS["oehkbdoinjk"]});
${$GLOBALS["leirsdjyyftd"]} = mysqli_num_rows(${$GLOBALS["dipwbvgqwp"]});
echo ${$lhbhhi};
echo "          </a>\n          </h6>\n          <a href=\"/configg.php\" class=\"small-box-footer\"><i class=\"fas fa-arrow-circle-right\"></i></a>\n          </center>\n      </div>\n    </div>\n  </div>\n  </div>\n  \n  <div class=\"row\">\n  <div class=\"col-lg col-md-100 col-sm6 mb-2\">\n    <div class=\"card card-small card-post card-post--3\">\n      <div class=\"card-body\">\n        <center>\n          <span class=\"stats-small__label text-uppercase\">Total de Categorias</span>\n          <h6 class=\"stats-small__value count my-3\">\n";
${$GLOBALS["hvyivrexca"]} = "SELECT * FROM categoriagl WHERE user_id='{$user_id}'";
${$GLOBALS["puqcbbkcy"]} = mysqli_query(${$GLOBALS["xiytlvi"]}, ${$GLOBALS["cffcivxbak"]});
${$jbrsxihgdlt} = mysqli_num_rows(${$GLOBALS["puqcbbkcy"]});
echo ${$GLOBALS["ylxnlmsee"]};
echo "          </a>\n        </h6>\n        <a href=\"/categories.php\" class=\"small-box-footer\"><i class=\"fas fa-arrow-circle-right\"></i></a>\n        </center>\n    </div>\n  </div>\n</div>\n</div>\n</div>\n</div>\n</main>\n</div>\n</div>\n\n\n<!--\n<div class=\"row\">\n<div class=\"col-lg col-md-100 col-sm-6 mb-4\">\n<div class=\"card card-small card-post card-post--1\">\n<div class=\"card-body\">\n<h5 class=\"card-title\">\n<a class=\"text-fiord-blue\" href=\"#\">Criado em</a>\n</h5>\n<p class=\"card-text d-inline-block mb-3\">\n<span class=\"badge badge-pill badge-success\">\n";
echo ${$uzsqqo};
echo "</span>\n</p>\n</div>\n</div>\n</div>\n</div>\n<div class=\"col-lg col-md-6-test50 col-sm-6 mb-4\">\n<div class=\"card card-small card-post card-post--1\">\n<div class=\"card-body\">\n<h5 class=\"card-title\">\n<a class=\"text-fiord-blue\" href=\"#\">Atualizado em</a>\n</h5>\n<p class=\"card-text d-inline-block mb-3\">\n<span class=\"badge badge-pill badge-success\">\n";
echo ${$ogpoxsxplrdk};
echo "</span>\n</p>\n</div>\n</div>\n</div>\n<div class=\"col-lg col-md-6-test50 col-sm-6 mb-4\">\n<div class=\"card card-small card-post card-post--1\">\n<div class=\"card-body\">\n<h5 class=\"card-title\">\n<a class=\"text-fiord-blue\" href=\"#\">Expira em</a>\n</h5>\n<div class=\"row p-0 mb-0\">\n<div class=\"col-md-12\">\n<p class=\"card-text d-inline-block m-0\">\n<span class=\"badge badge-pill badge-success\">\n";
echo ${$GLOBALS["jvcvyislvxkn"]};
echo "</span>\n</p>\n</br>\n<p class=\"card-text d-inline-block mb-3\">\n<span class=\"badge badge-pill badge-success\">\n";
echo ${$GLOBALS["onixxb"]};
echo "</span>\n</p>\n</div>\n</div>\n</div>\n</div>\n</div><div class=\"row\">\n<div class=\"col-lg col-md-6 col-sm-6 mb-4\">\n<div class=\"stats-small stats-small--1 card card-small\">\n<div class=\"card-body p-0 d-flex\">\n<div class=\"d-flex flex-column m-auto\">\n<div class=\"stats-small__data text-center\">\n<span class=\"stats-small__label text-uppercase\">Total de configura\xc3\xa7\xc3\xb5es</span>\n<h6 class=\"stats-small__value count my-3\">??</h6>\n<a href=\"config\" class=\"small-box-footer\"><i class=\"fas fa-arrow-circle-right\"></i></a>\n</div>\n</div>\n</div>\n</div>\n</div>\n<div class=\"col-lg col-md-6 col-sm-6 mb-4\">\n<div class=\"stats-small stats-small--1 card card-small\">\n<div class=\"card-body p-0 d-flex\">\n<div class=\"d-flex flex-column m-auto\">\n<div class=\"stats-small__data text-center\">\n<span class=\"stats-small__label text-uppercase\">Total de categorias</span>\n<h6 class=\"stats-small__value count my-3\">??</h6>\n<a href=\"categories\" class=\"small-box-footer\"><i class=\"fas fa-arrow-circle-right\"></i></a>\n</div>\n</div>\n</div>\n</div>\n</div>\n<div class=\"col-lg col-md-6 col-sm-6 mb-4\">\n<div class=\"stats-small stats-small--1 card card-small\">\n<div class=\"card-body p-0 d-flex\">\n<div class=\"d-flex flex-column m-auto\">\n<div class=\"stats-small__data text-center\">\n<span class=\"stats-small__label text-uppercase\">Total de instala\xc3\xa7\xc3\xb5es</span>\n<h6 class=\"stats-small__value count my-3\">??</h6>\n<a href=\"devices\" class=\"small-box-footer\"><i class=\"fas fa-arrow-circle-right\"></i></a>\n</div>\n</div>\n</div>\n</div>\n</div>\n\n\n</div>\n</div>\n</main>\n</div>\n</div>-->\n\n<div class=\"modal fade\" id=\"modal-msg\" role=\"dialog\">\n  <div class=\"modal-dialog modal-md\">\n    <div class=\"modal-content\">\n          <form method=\"POST\" action=\"class/msg.php\">\n      <div class=\"modal-body\">\n        <center>\n          <style>\n            textarea {\n              width: 100%;\n              border-color: #00000034;\n              border-radius: 3px;\n              align-items: center;\n            }\n          </style>\n          <textarea rows=\"20\" id=\"msg\" name=\"msg\">";
echo ${$GLOBALS["tvthkkhmkd"]};
echo "</textarea>\n        </center>\n      </div>\n      <div class=\"modal-footer p-0 pt-2\">\n            <button type=\"button\" class=\"btn btn-outline-danger\" data-bs-dismiss=\"modal\">Cancelar</button>\n        <button type=\"submit\" class=\"btn btn-dark\" id=\"editar\">Editar</button>\n      </div>\n      </form>\n    </div>\n  </div>\n</div>\n\n\n<script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/npm/toastify-js\"></script>\n<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"\nintegrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\" crossorigin=\"anonymous\"></script>\n<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\"\nintegrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\"\ncrossorigin=\"anonymous\"></script>\n<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js\"\nintegrity=\"sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2\"\ncrossorigin=\"anonymous\"></script>\n<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js\"></script>\n<script src=\"https://unpkg.com/shards-ui@latest/dist/js/shards.min.js\"></script>\n<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js\"></script>\n<script src=\"static/assets/js/extras.1.1.0.min.js\"></script>\n<script src=\"static/assets/js/shards-dashboards.1.1.0.min.js\"></script>\n<script>\nfunction doSearch(e) {\nlet search = document.getElementById('search').value;\nlet attr = e.getAttribute('href');\nif (attr.indexOf('search') > -1) {\nlet split = attr.split('&');\nfor (let i = 0; i < split.length; i++) {\nif (split[i].indexOf('search') > -1) {\nsplit[i] = 'search=' + search;\n}\n}\nattr = split.join('&');\n} else {\nattr += '&search=' + search;\n}\ne.setAttribute('href', attr);\n}\n</script>\n<script src=\"static/assets/js/app/app-blog-overview.1.1.0.js\"></script>\n  ";
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
