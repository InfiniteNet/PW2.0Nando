<?php

$GLOBALS["awbxbvyzjoor"] = "id_porta";
$aesmehdbf = "sql";
$GLOBALS["fwdvgexnbqwf"] = "dados";
$GLOBALS["nhoiyktwy"] = "id_servidor";
$GLOBALS["tqrwhswv"] = "uid";
require_once $_SERVER["DOCUMENT_ROOT"] . "/config/funcoes.php";
isLogged($sid);
$uid = getIdBySid($sid);
echo "<!------------------------------------------------------------------------------------>\n<!-- MODAL ADD SERVIDOR -->\n<!------------------------------------------------------------------------------------>\n<div class=\"modal fade\" id=\"modal-add-servidor\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"\" aria-hidden=\"true\">\n<div class=\"modal-dialog modal-dialog-centered\" role=\"document\">\n<div class=\"modal-content\">\n<div class=\"modal-header\">\n<h2 class=\"h6 modal-title\">Adicionar servidor</h2>\n<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>\n</div>\n<div class=\"modal-body\">\n<form action=\"adicionar.php?acao=servidor\" method=\"post\">\n<input type=\"hidden\" name=\"id_owner\" value=\"";
echo getIdBySid($sid);
echo "\">\n<div class=\"row\">\n<div class=\"col\">\n<label for=\"\"><span style=\"color: black;\">Nome</span></label>\n<input type=\"text\" name=\"nome\" id=\"nome\" class=\"form-control\">\n</div>\n<div class=\"col\">\n<label for=\"\"><span style=\"color: black;\">Dominio/IP</span></label>\n<input type=\"text\" name=\"serverip\" class=\"form-control\">\n</div>\n</div>\n<div class=\"mt-2 row\">\n<div class=\"col\">\n<label for=\"\"><span style=\"color: black;\">Flag</span></label>\n<select name=\"flag\" class=\"form-select\">\n<option value=\"br.png\">BRASIL</option>\n</select>\n</div>\n<div class=\"col\">\n<label for=\"\"><span style=\"color: black;\">Tipo</span></label>\n<select name=\"tipo\" class=\"form-select\">\n<option value=\"premium\">PREMIUM</option>\n<option value=\"free\">FREE</option>\n</select>\n</div>\n</div>\n<div class=\"mt-2 row\">\n<div class=\"col\">\n<label for=\"\"><span style=\"color: black;\">Server Port</span></label>\n<input type=\"text\" value=\"22\" name=\"serverport\" value=\"22\" class=\"form-control\">\n</div>\n<div class=\"col\">\n<label for=\"\"><span style=\"color: black;\">SSL Port</span></label>\n<input type=\"text\" value=\"443\" name=\"sslport\" class=\"form-control\">\n</div>\n</div>\n<div class=\"mt-2 row\">\n<div class=\"col\">\n<label for=\"\"><span style=\"color: black;\">CheckUser</span></label>\n<input type=\"text\" value=\"http://\" name=\"checkuser\" class=\"form-control\">\n</div>\n</div>\n</div>\n<div class=\"modal-footer\">\n<button type=\"submit\" name=\"adicionar_servidor\" style=\"color: white\" class=\"btn btn-success\">Adicionar</button></form>\n<button type=\"button\" style=\"color: white\" class=\"btn btn-secondary text-gray ms-auto\" data-bs-dismiss=\"modal\">Cancelar</button>\n</div>\n</div>\n</div>\n</div>\n<!------------------------------------------------------------------------------------>\n<!-- MODAL ADD PAYLOAD -->\n<!------------------------------------------------------------------------------------>\n<div class=\"modal fade\" id=\"modal-add-payload\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"\" aria-hidden=\"true\">\n<div class=\"modal-dialog modal-dialog-centered\" role=\"document\">\n<div class=\"modal-content\">\n<div class=\"modal-header\">\n<h2 class=\"h6 modal-title\">Adicionar payload</h2>\n<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>\n</div>\n<div class=\"modal-body\">\n<form action=\"adicionar.php?acao=payload\" method=\"post\">\n<input type=\"hidden\" name=\"id_owner\" value=\"";
echo getIdBySid($sid);
echo "\">\n<div class=\"row\">\n<div class=\"col\">\n<label for=\"\"><span style=\"color: black;\">Nome</span></label>\n<input type=\"text\" name=\"nome\" id=\"nome\" class=\"form-control\">\n</div>\n<div class=\"col\">\n<label for=\"\"><span style=\"color: black;\">SNI</span></label>\n<input type=\"text\" name=\"sni\" class=\"form-control\">\n</div>\n</div>\n<div class=\"mt-2 row\">\n<div class=\"col\">\n<label for=\"\"><span style=\"color: black;\">ProxyIP</span></label>\n<input type=\"text\" name=\"proxyip\" class=\"form-control\">\n</div>\n<div class=\"col\">\n<label for=\"\"><span style=\"color: black;\">Proxy Port</span></label>\n<input type=\"text\" name=\"proxyport\" class=\"form-control\">\n</div>\n</div>\n<div class=\"mt-2 row\">\n<div class=\"col\">\n<label for=\"\"><span style=\"color: black;\">TlsIP</span></label>\n<input type=\"text\" name=\"tlsip\" class=\"form-control\">\n</div>\n<div class=\"col\">\n<label for=\"\"><span style=\"color: black;\">Operadora</span></label>\n<select name=\"flag\" class=\"form-select\">\n<option value=\"vivo\">VIVO</option>\n<option value=\"tim\">TIM</option>\n<option value=\"fluke\">FLUKE</option>\n<option value=\"claro\">CLARO</option>\n<option value=\"oi\">OI</option>\n</select>\n</div>\n</div>\n<label class=\"mt-2\"><span style=\"color: black;\">Info</span></label>\n<select name=\"info\" class=\"form-select\">\n<option value=\"Tlsws\">WS/SSL</option>\n<option value=\"Direct\">SSH/Direct</option>\n<option value=\"Proxy\">SSH/Proxy</option>\n<option value=\"Ssl\">SSH/SSL</option>\n</select>\n<label class=\"mt-2\"><span style=\"color: black;\">Payload</span></label>\n<textarea class=\"form-control\" name=\"pay\" rows=\"4\"></textarea>\n</div>\n<div class=\"modal-footer\">\n<button type=\"submit\" name=\"adicionar_payload\" style=\"color: white\" class=\"btn btn-success\">Adicionar</button></form>\n<button type=\"button\" style=\"color: white\" class=\"btn btn-secondary text-gray ms-auto\" data-bs-dismiss=\"modal\">Cancelar</button>\n</div>\n</div>\n</div>\n</div>\n<!------------------------------------------------------------------------------------>\n<!-- MODAL ADD PORTA -->\n<!------------------------------------------------------------------------------------>\n<div class=\"modal fade\" id=\"modal-add-porta\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"\" aria-hidden=\"true\">\n<div class=\"modal-dialog modal-dialog-centered\" role=\"document\">\n<div class=\"modal-content\">\n<div class=\"modal-header\">\n<h2 class=\"h6 modal-title\">Adicionar porta</h2>\n<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>\n</div>\n<div class=\"modal-body\">\n<form action=\"adicionar.php?acao=porta\" method=\"post\">\n<input type=\"hidden\" name=\"id_owner\" value=\"";
echo getIdBySid($sid);
echo "\">\n<label for=\"\"><span style=\"color: black;\">Porta</span></label>\n<input type=\"text\" name=\"porta\" class=\"form-control\">\n</div>\n<div class=\"modal-footer\">\n<button type=\"submit\" name=\"adicionar_porta\" style=\"color: white\" class=\"btn btn-success\">Adicionar</button></form>\n<button type=\"button\" style=\"color: white\" class=\"btn btn-secondary text-gray ms-auto\" data-bs-dismiss=\"modal\">Cancelar</button>\n</div>\n</div>\n</div>\n</div>\n<!------------------------------------------------------------------------------------>\n<!-- MODAL EXCLUI PAYLOADS -->\n<!------------------------------------------------------------------------------------>\n<div class=\"modal fade\" id=\"modal-excluir-todas-payloads\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"\" aria-hidden=\"true\">\n    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">\n        <div class=\"modal-content\">\n            <div class=\"modal-header\">\n                <h2 class=\"h6 modal-title\">Confirmar exclus\xc3\xa3o de todas as payloads</h2>\n                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>\n            </div>\n            <div class=\"modal-body\">\n\t\t\tTem certeza que deseja excluir todas as payloads?\n                <form action=\"adicionar.php?acao=dellall\" method=\"post\">\n                    <input type=\"hidden\" name=\"id_owner\" value=\"";
echo getIdBySid($sid);
echo "\">\n\n            </div>\n            <div class=\"modal-footer\">\n                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Cancelar</button>\n          <button type=\"submit\" class=\"btn btn-danger\" name=\"delete_all\">Excluir todas</button>\n\t\t  </form>\n            </div>\n        </div>\n    </div>\n</div>\n<!------------------------------------------------------------------------------------>\n<!-- MODAL MULTI PAYLOADS -->\n<!------------------------------------------------------------------------------------>\n<div class=\"modal fade\" id=\"modal-add-multi\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"\" aria-hidden=\"true\">\n<div class=\"modal-dialog modal-dialog-centered\" role=\"document\">\n<div class=\"modal-content\">\n<div class=\"modal-header\">\n<h2 class=\"h6 modal-title\">Adicionar v\xc3\xa1rias payloads</h2>\n<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>\n</div>\n<div class=\"modal-body\">\n<form action=\"adicionar.php?acao=multi\" method=\"post\">\n<input type=\"hidden\" name=\"id_owner\" value=\"";
echo getIdBySid($sid);
echo "\">\n<label for=\"\"><span style=\"color: black;\">Payloads</span></label>\n<textarea name=\"texto\" cols=\"30\" rows=\"10\" class=\"form-control\"></textarea>\n</div>\n<div class=\"modal-footer\">\n<button type=\"submit\" name=\"adicionar_multi\" style=\"color: white\" class=\"btn btn-success\">Adicionar</button></form>\n<button type=\"button\" style=\"color: white\" class=\"btn btn-secondary text-gray ms-auto\" data-bs-dismiss=\"modal\">Cancelar</button>\n</div>\n</div>\n</div>\n</div>\n";
if (isset($_POST["editar_servidor"])) {
    echo "<!------------------------------------------------------------------------------------>\n<!-- MODAL EDITAR SERVIDOR -->\n<!------------------------------------------------------------------------------------>\n<div class=\"modal fade\" id=\"modal-editar-servidor\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"\" aria-hidden=\"true\">\n<div class=\"modal-dialog modal-dialog-centered\" role=\"document\">\n<div class=\"modal-content\">\n<div class=\"modal-header\">\n<h2 class=\"h6 modal-title\">Editar servidor</h2>\n<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>\n</div>\n<div class=\"modal-body\">\n";
    $yujwrtvki = "dados";
    $cyjjtayqdq = "sql";
    $vmibhbaow = "dados";
    $GLOBALS["jpstxqxy"] = "dados";
    $id_servidor = $_POST["editar_servidor"];
    $sql = $conn->query("SELECT * FROM servidores WHERE id='{$id_servidor}'");
    $dados = $sql->fetch(PDO::FETCH_ASSOC);
    echo "<form action=\"editar.php?acao=servidor\" method=\"post\">\n<input type=\"hidden\" name=\"id\" value=\"";
    echo $dados["id"];
    echo "\">\n<input type=\"hidden\" name=\"id_owner\" value=\"";
    echo getIdBySid($sid);
    echo "\">\n<div class=\"row\">\n<div class=\"col\">\n<label for=\"\"><span style=\"color: black;\">Nome</span></label>\n<input type=\"text\" name=\"nome\" value=\"";
    echo $dados["Name"];
    $GLOBALS["ghgbkwyfmjk"] = "dados";
    echo "\" class=\"form-control\">\n</div>\n<div class=\"col\">\n<label for=\"\"><span style=\"color: black;\">Dominio/IP</span></label>\n<input type=\"text\" name=\"serverip\" value=\"";
    echo $dados["ServerIP"];
    echo "\" class=\"form-control\">\n</div>\n</div>\n<div class=\"mt-2 row\">\n<div class=\"col\">\n<label for=\"\"><span style=\"color: black;\">Flag</span></label>\n<select name=\"flag\" class=\"form-select\">\n<option value=\"br.png\">BRASIL</option>\n</select>\n</div>\n<div class=\"col\">\n<label for=\"\"><span style=\"color: black;\">Tipo</span></label>\n<select name=\"tipo\" class=\"form-select\">\n";
    $GLOBALS["sfnjlct"] = "dados";
    if ($dados["TYPE"] == "premium") {
        echo "<option value=\"premium\">PREMIUM</option>\n<option value=\"free\">FREE</option>\n";
    } else {
        echo "<option value=\"free\">FREE</option>\n<option value=\"premium\">PREMIUM</option>\n";
    }
    $gssevymmcd = "dados";
    echo "</select>\n</div>\n</div>\n<div class=\"mt-2 row\">\n<div class=\"col\">\n<label for=\"\"><span style=\"color: black;\">Server Port</span></label>\n<input type=\"text\" value=\"22\" name=\"serverport\" value=\"";
    echo $dados["ServerPort"];
    echo "\" class=\"form-control\">\n</div>\n<div class=\"col\">\n<label for=\"\"><span style=\"color: black;\">SSL Port</span></label>\n<input type=\"text\" value=\"";
    echo ${$GLOBALS["fwdvgexnbqwf"]}["SSLPort"];
    echo "\" name=\"sslport\" class=\"form-control\">\n</div>\n</div>\n<div class=\"mt-2 row\">\n<div class=\"col\">\n<label for=\"\"><span style=\"color: black;\">CheckUser</span></label>\n<input type=\"text\" value=\"";
    echo ${$GLOBALS["fwdvgexnbqwf"]}["CheckUser"];
    echo "\" name=\"checkuser\" class=\"form-control\">\n</div>\n</div>\n</div>\n<div class=\"modal-footer\">\n<button type=\"submit\" name=\"atualiza_servidor\" style=\"color: white\" class=\"btn btn-success\">Editar</button></form>\n<form action=\"excluir.php?acao=servidor\" method=\"post\">\n<input type=\"hidden\" name=\"id\" value=\"";
    echo ${$GLOBALS["sfnjlct"]}["id"];
    echo "\">\n<input type=\"hidden\" name=\"id_owner\" value=\"";
    echo getIdBySid($sid);
    echo "\">\n<button type=\"submit\" name=\"excluir_servidor\" style=\"color: white\" class=\"btn btn-danger ms-auto\" data-bs-dismiss=\"modal\">Excluir</button>\n</form>\n<button type=\"button\" style=\"color: white\" class=\"btn btn-secondary text-gray ms-auto\" data-bs-dismiss=\"modal\">Cancelar</button>\n</div>\n</div>\n</div>\n</div>\n<script>\n\$(document).ready(function() {\n\$('#modal-editar-servidor').modal('show');\n});\n</script>\n";
}
if (isset($_POST["editar_payload"])) {
    $bwxlppl = "id_payload";
    echo "<!------------------------------------------------------------------------------------>\n<!-- MODAL EDITAR PAYLOAD -->\n<!------------------------------------------------------------------------------------>\n<div class=\"modal fade\" id=\"modal-editar-payload\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"\" aria-hidden=\"true\">\n<div class=\"modal-dialog modal-dialog-centered\" role=\"document\">\n<div class=\"modal-content\">\n<div class=\"modal-header\">\n<h2 class=\"h6 modal-title\">Editar payload</h2>\n<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>\n</div>\n<div class=\"modal-body\">\n";
    $GLOBALS["uehxctnnkp"] = "sql";
    $id_payload = $_POST["editar_payload"];
    $sql = $conn->query("SELECT * FROM payloads WHERE id='{$id_payload}'");
    ${$GLOBALS["fwdvgexnbqwf"]} = $sql->fetch(PDO::FETCH_ASSOC);
    $pxmwlpryspr = "dados";
    $GLOBALS["rbmbqcwsy"] = "dados";
    $ckescw = "dados";
    echo "<form action=\"editar.php?acao=payload\" method=\"post\">\n<input type=\"hidden\" name=\"id\" value=\"";
    echo ${$GLOBALS["fwdvgexnbqwf"]}["id"];
    echo "\">\n<input type=\"hidden\" name=\"id_owner\" value=\"";
    $vklhjo = "dados";
    echo getIdBySid($sid);
    echo "\">\n<div class=\"row\">\n<div class=\"col\">\n<label for=\"\"><span style=\"color: black;\">Nome</span></label>\n<input type=\"text\" name=\"nome\" id=\"nome\" value=\"";
    echo $dados["Name"];
    echo "\" class=\"form-control\">\n</div>\n<div class=\"col\">\n<label for=\"\"><span style=\"color: black;\">SNI</span></label>\n<input type=\"text\" name=\"sni\" value=\"";
    $GLOBALS["bujyjtfckn"] = "dados";
    $GLOBALS["dwcykb"] = "dados";
    echo $dados["SNI"];
    $GLOBALS["igsxfixvfvhb"] = "dados";
    echo "\" class=\"form-control\">\n</div>\n</div>\n<div class=\"mt-2 row\">\n<div class=\"col\">\n<label for=\"\"><span style=\"color: black;\">ProxyIP</span></label>\n<input type=\"text\" name=\"proxyip\" value=\"";
    $vqropuqjcl = "dados";
    echo $dados["ProxyIP"];
    echo "\" class=\"form-control\">\n</div>\n<div class=\"col\">\n<label for=\"\"><span style=\"color: black;\">Proxy Port</span></label>\n<input type=\"text\" name=\"proxyport\" value=\"";
    echo $dados["ProxyPort"];
    echo "\" class=\"form-control\">\n</div>\n</div>\n<div class=\"mt-2 row\">\n<div class=\"col\">\n<label for=\"\"><span style=\"color: black;\">TlsIP</span></label>\n<input type=\"text\" name=\"tlsip\" value=\"";
    echo ${$GLOBALS["fwdvgexnbqwf"]}["TlsIP"];
    echo "\" class=\"form-control\">\n</div>\n<div class=\"col\">\n<label for=\"\"><span style=\"color: black;\">Operadora</span></label>\n<select name=\"flag\" class=\"form-select\">\n";
    if (${$GLOBALS["fwdvgexnbqwf"]}["FLAG"] == "vivo") {
        echo "<option value=\"vivo\">VIVO</option>\n<option value=\"tim\">TIM</option>\n<option value=\"fluke\">FLUKE</option>\n<option value=\"claro\">CLARO</option>\n<option value=\"oi\">OI</option>\n";
    } else {
        if ($dados["FLAG"] == "tim") {
            echo "<option value=\"tim\">TIM</option>\n<option value=\"fluke\">FLUKE</option>\n<option value=\"claro\">CLARO</option>\n<option value=\"oi\">OI</option>\n<option value=\"vivo\">VIVO</option>\n";
        } else {
            if ($dados["FLAG"] == "fluke") {
                echo "<option value=\"fluke\">FLUKE</option>\n<option value=\"claro\">CLARO</option>\n<option value=\"oi\">OI</option>\n<option value=\"vivo\">VIVO</option>\n<option value=\"tim\">TIM</option>\n";
            } else {
                if ($dados["FLAG"] == "claro") {
                    echo "<option value=\"claro\">CLARO</option>\n<option value=\"oi\">OI</option>\n<option value=\"vivo\">VIVO</option>\n<option value=\"tim\">TIM</option>\n<option value=\"fluke\">FLUKE</option>\n";
                } else {
                    echo "<option value=\"oi\">OI</option>\n<option value=\"vivo\">VIVO</option>\n<option value=\"tim\">TIM</option>\n<option value=\"fluke\">FLUKE</option>\n<option value=\"claro\">CLARO</option>\n";
                }
            }
        }
    }
    echo "</select>\n</div>\n</div>\n<label class=\"mt-2\"><span style=\"color: black;\">Info</span></label>\n<select name=\"info\" class=\"form-select\">\n";
    if (${$GLOBALS["fwdvgexnbqwf"]}["Info"] == "Tlsws") {
        echo "<option value=\"Tlsws\">WS/TLS</option>\n<option value=\"Direct\">SSH/DIRECT</option>\n<option value=\"Proxy\">SSH/PROXY</option>\n<option value=\"Ssl\">SSH/SSL</option>\n";
    } else {
        if (${$GLOBALS["fwdvgexnbqwf"]}["Info"] == "Direct") {
            echo "<option value=\"Direct\">SSH/DIRECT</option>\n<option value=\"Proxy\">SSH/PROXY</option>\n<option value=\"Ssl\">SSH/SSL</option>\n<option value=\"Tlsws\">WS/TLS</option>\n";
        } else {
            if (${$GLOBALS["fwdvgexnbqwf"]}["Info"] == "Proxy") {
                echo "<option value=\"Proxy\">SSH/PROXY</option>\n<option value=\"Ssl\">SSH/SSL</option>\n<option value=\"Tlsws\">WS/TLS</option>\n<option value=\"Direct\">SSH/DIRECT</option>\n";
            } else {
                echo "<option value=\"Ssl\">SSH/SSL</option>\n<option value=\"Tlsws\">WS/TLS</option>\n<option value=\"Direct\">SSH/DIRECT</option>\n<option value=\"Proxy\">SSH/PROXY</option>\n";
            }
        }
    }
    echo "</select>\n<label class=\"mt-2\"><span style=\"color: black;\">Payload</span></label>\n<textarea class=\"form-control\" name=\"pay\" rows=\"4\">";
    echo ${$GLOBALS["fwdvgexnbqwf"]}["Payload"];
    echo "</textarea>\n</div>\n<div class=\"modal-footer\">\n<button type=\"submit\" name=\"atualiza_payload\" style=\"color: white\" class=\"btn btn-success\">Editar</button></form>\n<form action=\"excluir.php?acao=payload\" method=\"post\">\n<input type=\"hidden\" name=\"id\" value=\"";
    echo ${$vqropuqjcl}["id"];
    echo "\">\n<input type=\"hidden\" name=\"id_owner\" value=\"";
    echo getIdBySid($sid);
    echo "\">\n<button type=\"submit\" name=\"excluir_payload\" style=\"color: white\" class=\"btn btn-danger ms-auto\" data-bs-dismiss=\"modal\">Excluir</button>\n</form>\n<button type=\"button\" style=\"color: white\" class=\"btn btn-secondary text-gray ms-auto\" data-bs-dismiss=\"modal\">Cancelar</button>\n</div>\n</div>\n</div>\n</div>\n<script src=\"static/assets/js/extras.1.1.0.min.js\"></script>\n<script src=\"static/assets/js/shards-dashboards.1.1.0.min.js\"></script>\n<script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/npm/toastify-js\"></script>\n<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\" integrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\" crossorigin=\"anonymous\"></script>\n<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity \"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>\n<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js\" integrity \"sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2\" crossorigin=\"anonymous\"></script>\n<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js\"></script>\n<script src=\"https://unpkg.com/shards-ui@latest/dist/js/shards.min.js\"></script>\n<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js\"></script>\n<script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>\n<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>\n<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>\n<script src=\"https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js\"></script>\n<script>\n\$(document).ready(function() {\n\$('#modal-editar-payload').modal('show');\n});\n</script>\n<script>\nfunction changeInputColor(elementId, value) {\nlet color = value;\nif (value.length == 9) {\ncolor = '#' + value.substring(3, value.length);\n} else if (value.length == 6) {\ncolor = '#' + value;\n} else {\ncolor = '#FFFFFF';\n}\ndocument.getElementById(elementId).value = color;\n}\nfunction changeColor(elementId, value) {\nlet color = \$('#' + elementId).val();\nlet alpha = color.length == 9 ? color.substring(1, 3) : 'FF';\nlet colorHex = alpha + value.substring(1, value.length);\ncolor = hexToRgba(colorHex);\nalpha = parseAlpha(color);\nlet rgb = 'rgba(' + color.r + ',' + color.g + ',' + color.b + ',' + alpha + ')';\n\$('#' + elementId).val('#' + colorHex);\n\$('#' + elementId + '_transparency').css('background-color', rgb);\n}\nfunction changeInputRange(elementId, elementId2, value) {\nvar element = document.getElementById(elementId);\nvar element2 = document.getElementById(elementId2);\ncolor = element2.value\ncolor = color.replace('#', '');\nvalue = value.replace('.', '');\nif (color.length == 8) {\ncolor = color.substring(2, 8);\n} else if (color.length == 7) {\ncolor = color.substring(1, 7);\n}\nvalue = parseFloat(value) / 100;\n\$('#' + elementId2).val('#' + alphaHexColor(value) + color);\nvar rgb = 'rgba(' + hexToRgb(color).r + ',' + hexToRgb(color).g + ',' + hexToRgb(color).b + ',' + value + ')';\n\$('#' + elementId).css('background-color', rgb);\n}\nfunction alphaHexColor(number) {\nlet alphaFixed = number.toFixed(2) * 255;\nlet alphaHex = alphaFixed.toString(16);\nlet split = alphaHex.split('.');\nreturn split[0].length == 1 ? '0' + split[0] : split[0];\n}\nfunction hexToRgb(hex) {\nvar result = /^#?([a-f\\d]{2})([a-f\\d]{2})([a-f\\d]{2})\$/i.exec(hex);\nreturn result ? {\nr: parseInt(result[1], 16),\ng: parseInt(result[2], 16),\nb: parseInt(result[3], 16)\n} : null;\n}\nfunction hexToRgba(hex) {\nif (hex.length == 6) {\nhex = 'ff' + hex;\n}\nvar result = /^#?([a-f\\d]{2})([a-f\\d]{2})([a-f\\d]{2})([a-f\\d]{2})\$/i.exec(hex);\nreturn result ? {\na: parseInt(result[1], 16),\nr: parseInt(result[2], 16),\ng: parseInt(result[3], 16),\nb: parseInt(result[4], 16),\n} : null;\n}\nfunction parseAlpha(color) {\nlet alpha = color.a / 255;\nreturn alpha;\n}\nconst obj = {\napp_CorUser: 'app_CorUser_transparency',\napp_CorGeral: 'app_CorGeral_transparency',\napp_CorMenu: 'app_CorMenu_transparency',\napp_CorTexto: 'app_CorTexto_transparency',\n}\nfor (var key in obj) {\nlet element = \$('#' + key);\ncolor = element.val();\ncolor = color.replace('#', '');\ncolor = hexToRgba(color);\nlet alpha = parseAlpha(color);\nlet rgb = 'rgba(' + color.r + ',' + color.g + ',' + color.b + ',' + alpha + ')';\n\$('#' + obj[key]).css('background-color', rgb);\n}\n</script>\n";
}
if (isset($_POST["editar_porta"])) {
    $GLOBALS["nffgcq"] = "dados";
    $GLOBALS["qlpwvuh"] = "sql";
    echo "<!------------------------------------------------------------------------------------>\n<!-- MODAL EDITAR PORTA -->\n<!------------------------------------------------------------------------------------>\n<div class=\"modal fade\" id=\"modal-editar-porta\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"\" aria-hidden=\"true\">\n<div class=\"modal-dialog modal-dialog-centered\" role=\"document\">\n<div class=\"modal-content\">\n<div class=\"modal-header\">\n<h2 class=\"h6 modal-title\">Editar porta</h2>\n<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>\n</div>\n<div class=\"modal-body\">\n";
    ${$GLOBALS["awbxbvyzjoor"]} = $_POST["editar_porta"];
    ${$GLOBALS["qlpwvuh"]} = $conn->query("SELECT * FROM portas WHERE id='{$id_porta}'");
    $ireqvixoq = "dados";
    ${$GLOBALS["nffgcq"]} = $sql->fetch(PDO::FETCH_ASSOC);
    echo "<form action=\"editar.php?acao=porta\" method=\"post\">\n<input type=\"hidden\" name=\"id\" value=\"";
    $GLOBALS["yyspted"] = "dados";
    echo ${$ireqvixoq}["id"];
    echo "\">\n<input type=\"hidden\" name=\"id_owner\" value=\"";
    echo getIdBySid($sid);
    echo "\">\n<label for=\"\"><span style=\"color: black;\">Porta</span></label>\n<input type=\"text\" name=\"porta\" value=\"";
    echo ${$GLOBALS["fwdvgexnbqwf"]}["Porta"];
    echo "\" class=\"form-control\">\n</div>\n<div class=\"modal-footer\">\n<button type=\"submit\" name=\"atualiza_porta\" style=\"color: white\" class=\"btn btn-success\">Editar</button></form>\n<form action=\"excluir.php?acao=porta\" method=\"post\">\n<input type=\"hidden\" name=\"id\" value=\"";
    echo $dados["id"];
    echo "\">\n<input type=\"hidden\" name=\"id_owner\" value=\"";
    echo getIdBySid($sid);
    echo "\">\n<button type=\"submit\" name=\"excluir_porta\" style=\"color: white\" class=\"btn btn-danger ms-auto\" data-bs-dismiss=\"modal\">Excluir</button>\n</form>\n<button type=\"button\" style=\"color: white\" class=\"btn btn-secondary text-gray ms-auto\" data-bs-dismiss=\"modal\">Cancelar</button>\n</div>\n</div>\n</div>\n</div>\n<script>\n\$(document).ready(function() {\n\$('#modal-editar-porta').modal('show');\n});\n</script>\n";
}
echo "\n<!------------------------------------------------------------------------------------>\n<!-- MODAL SMS -->\n<!------------------------------------------------------------------------------------>\n<div class=\"modal fade\" id=\"modal-sms\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"\" aria-hidden=\"true\">\n<div class=\"modal-dialog modal-dialog-centered\" role=\"document\">\n<div class=\"modal-content\">\n<div class=\"modal-header\">\n<h2 class=\"h6 modal-title\">Enviar SMS</h2>\n<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>\n</div>\n<div class=\"modal-body\">\n";
${$aesmehdbf} = $conn->query("SELECT * FROM mensagens WHERE id_owner='{$uid}'");
${$GLOBALS["fwdvgexnbqwf"]} = $sql->fetch(PDO::FETCH_ASSOC);
echo "<form action=\"editar.php?acao=sms\" method=\"post\">\n<input type=\"hidden\" name=\"id_owner\" value=\"";
$GLOBALS["snnuzowge"] = "dados";
echo getIdBySid($sid);
echo "\">\n<label for=\"\"><span style=\"color: black;\">Mensagem</span></label>\n<textarea name=\"sms\" class=\"form-control\" rows=\"4\">";
echo $dados["msg"];
echo "</textarea>\n</div>\n<div class=\"modal-footer\">\n<button type=\"submit\" name=\"atualiza_sms\" style=\"color: white\" class=\"btn btn-success\">Enviar</button></form>\n<button type=\"button\" style=\"color: white\" class=\"btn btn-secondary text-gray ms-auto\" data-bs-dismiss=\"modal\">Cancelar</button>\n</div>\n</div>\n</div>\n</div>\n";
