<?php

$GLOBALS["nhvrmlpzp"] = "show_config_mode";
$GLOBALS["dtbnhrd"] = "app_text_check_user";
$GLOBALS["oxrbwxd"] = "app_contact_icon";
$aqeqqt = "app_qsTileIcon";
$GLOBALS["lbxpsxfi"] = "app_background_image";
$GLOBALS["jjvynuswq"] = "app_limiter_is_active";
$GLOBALS["qnlskgtfp"] = "app_logo";
$GLOBALS["nkkpduxtu"] = "app_config_item_background_color";
$GLOBALS["dgztspkennqm"] = "border_color";
$GLOBALS["rvfffexkif"] = "icon_color";
$GLOBALS["okfqftfl"] = "text_color";
$GLOBALS["kprpvrvc"] = "logo_width";
$GLOBALS["dqcvjldxmg"] = "app_contact_icon";
$GLOBALS["erscqgogr"] = "logo_height";
$GLOBALS["jnlskhkzss"] = "app_dialog_error_background_color";
$GLOBALS["fambryvaipqp"] = "app_name";
$GLOBALS["ftbgqnca"] = "app_message_type";
$GLOBALS["nvbrnek"] = "app_message_text";
$GLOBALS["tjhnjnzgo"] = "app_dialog_image_limit_exceeded";
$GLOBALS["nomjvhigjhk"] = "background_color";
$GLOBALS["qbliincuvnn"] = "app_name";
$GLOBALS["rfgyinkg"] = "app_text_check_user";
$GLOBALS["vcksvsbbhwe"] = "app_dialog_image_message";
$GLOBALS["wufgiuouk"] = "app_dialog_error_text_color";
$ivwxwwyokd = "show_config_mode";
$qzwsvva = "app_qsTileIcon";
$GLOBALS["qvmymmp"] = "app_dialog_error_text_color";
$tkiyxyx = "logo_height";
$cwrbbrqhreg = "app_dialog_error_text_color";
$GLOBALS["vboptuagh"] = "card_color";
$gcvrxpxbloib = "app_contact_link";
$GLOBALS["bonypjwm"] = "app_dialog_error_background_color";
$gecnhpso = "app_contact_link";
$GLOBALS["kvsregmck"] = "app_dialog_success_text_color";
$GLOBALS["tfnxlfbrb"] = "app_dialog_config_background_color";
$GLOBALS["hxykctkmq"] = "app_dialog_success_background_color";
$GLOBALS["dpfmzcnjs"] = "app_dialog_image_success";
$GLOBALS["hyfhhrttw"] = "app_contact_link";
$GLOBALS["hykrxh"] = "button_color";
$GLOBALS["jgwebxvk"] = "server_state_slow";
$GLOBALS["sbfvlupzwdoo"] = "app_limiter_is_active";
$GLOBALS["chjsveoeb"] = "default_config_icon";
$GLOBALS["boyhejglee"] = "app_dialog_error_background_color";
$GLOBALS["uyqbask"] = "button_color";
$GLOBALS["gkjccr"] = "card_color";
$GLOBALS["bfkbkmqsh"] = "background_color";
$GLOBALS["bsmjildqtyn"] = "app_qsTileIcon";
$GLOBALS["lqffjyiv"] = "slc_limite_con";
$GLOBALS["zjgkfukdvrv"] = "slc_modo_con";
$GLOBALS["mxmtqja"] = "slc_c_fundo";
$GLOBALS["qkexbgdju"] = "resultado_produtos_app_visu";
$GLOBALS["vqvusw"] = "row_produto_app_visu";
$GLOBALS["qyxtriejrkw"] = "result_produtos_app_visu";
$qstbkblr = "logo_height";
$GLOBALS["ulhivrr"] = "user_id";
$GLOBALS["isolqljvuopy"] = "db_user_id";
$GLOBALS["reqnuz"] = "row_produto_login";
$GLOBALS["cbkxltiwlhqt"] = "resultado_produtos_login";
$jqtygwf = "conn";
$GLOBALS["tdtpzvuwv"] = "result_produtos_login";
$GLOBALS["rlpfgyycnl"] = "background_color";
$zcnccnf = "login";
$GLOBALS["kecyxxkrms"] = "app_name";
echo "\n<!doctype html>\n<html class=\"no-js h-100\" lang=\"pt-BR\" translate=\"no\">\n<link rel=\"shortcut icon\" href=\"static/assets/img/favicon.png\" />\n<title>\nGL-GESTOR - APLICATIVO\n</title>\n";
$wmkcnxxghg = "resultado_produtos_app_visu";
include_once $_SERVER["DOCUMENT_ROOT"] . "/class/topo.php";
$GLOBALS["deomkp"] = "app_dialog_success_text_color";
echo "<body class=\"h-100\">\n\n";
$gqkyexayrdg = "app_dialog_success_text_color";
include_once $_SERVER["DOCUMENT_ROOT"] . "/class/topo2.php";
$wwuwzmchqvhe = "app_qsTileIcon";
echo "\n";
include_once $_SERVER["DOCUMENT_ROOT"] . "/class/conexao.php";
$login = $_SESSION["painel"]["login"];
$GLOBALS["pbzjhki"] = "logo_width";
$GLOBALS["glcjbs"] = "app_name";
$result_produtos_login = "SELECT * FROM usuariogl WHERE login LIKE '{$login}' LIMIT 1";
$resultado_produtos_login = mysqli_query($conn, $result_produtos_login);
$GLOBALS["kyhenas"] = "conn";
$qyvmlzkfmm = "app_qsTileIcon";
while (${$GLOBALS["reqnuz"]} = mysqli_fetch_assoc(${$GLOBALS["cbkxltiwlhqt"]})) {
    ${$GLOBALS["isolqljvuopy"]} = ${$GLOBALS["reqnuz"]}["id"];
    ${$GLOBALS["ulhivrr"]} = ${$GLOBALS["isolqljvuopy"]};
}
$GLOBALS["flhcohdutd"] = "app_dialog_error_text_color";
${$GLOBALS["qyxtriejrkw"]} = "SELECT * FROM app_configgl WHERE user_id LIKE '{$db_user_id}'";
${$wmkcnxxghg} = mysqli_query(${$GLOBALS["kyhenas"]}, ${$GLOBALS["qyxtriejrkw"]});
$hbvvkvn = "logo_height";
$mwkpldljqt = "icon_color";
while (${$GLOBALS["vqvusw"]} = mysqli_fetch_assoc(${$GLOBALS["qkexbgdju"]})) {
    $xmhlwe = "app_name";
    $GLOBALS["kdrfqvahj"] = "row_produto_app_visu";
    $GLOBALS["nicfrifp"] = "app_background_no_color";
    $GLOBALS["kqstsajllxio"] = "row_produto_app_visu";
    $xcyqcsgehbvd = "app_config_item_background_color";
    $syyiuiuqdrg = "row_produto_app_visu";
    $etiysj = "border_color";
    $fhkixtepzjgy = "app_dialog_success_text_colo";
    $GLOBALS["lugidn"] = "row_produto_app_visu";
    $GLOBALS["loomoxnjqw"] = "logo_width";
    ${$GLOBALS["mxmtqja"]} = ${$GLOBALS["vqvusw"]}["slc_c_fundo"];
    $GLOBALS["igicsscd"] = "row_produto_app_visu";
    $GLOBALS["vdgezvebgdl"] = "icon_color";
    $ylkxckkls = "row_produto_app_visu";
    $GLOBALS["gspvcwhsecxd"] = "app_logo";
    $GLOBALS["lnjwcthipd"] = "server_state_fast";
    $GLOBALS["owtgycjulr"] = "row_produto_app_visu";
    $hrumlxhnfhpj = "row_produto_app_visu";
    ${$GLOBALS["zjgkfukdvrv"]} = ${$GLOBALS["kdrfqvahj"]}["slc_modo_con"];
    $iticvx = "row_produto_app_visu";
    $feioaioln = "app_background_image";
    $GLOBALS["vqsrqiq"] = "row_produto_app_visu";
    ${$GLOBALS["lqffjyiv"]} = ${$GLOBALS["lugidn"]}["slc_limite_con"];
    $twwfhdaj = "logo_height";
    ${$xmhlwe} = ${$GLOBALS["vqvusw"]}["app_name"];
    $GLOBALS["zppxdtu"] = "text_color";
    ${$GLOBALS["gspvcwhsecxd"]} = ${$GLOBALS["vqvusw"]}["app_logo"];
    ${$twwfhdaj} = ${$iticvx}["logo_height"];
    $mvjwsfxrq = "app_dialog_image_validate";
    ${$GLOBALS["loomoxnjqw"]} = ${$GLOBALS["igicsscd"]}["logo_width"];
    $mlksmobgaxgw = "app_dialog_image_invalid_data";
    $ntpqpe = "row_produto_app_visu";
    $trtosyp = "app_text_check_user";
    ${$GLOBALS["bsmjildqtyn"]} = ${$GLOBALS["vqvusw"]}["app_qsTileIcon"];
    $GLOBALS["wwpchlmng"] = "row_produto_app_visu";
    ${$GLOBALS["bfkbkmqsh"]} = ${$GLOBALS["vqvusw"]}["background_color"];
    ${$GLOBALS["gkjccr"]} = ${$GLOBALS["vqvusw"]}["card_color"];
    ${$GLOBALS["zppxdtu"]} = ${$syyiuiuqdrg}["text_color"];
    $GLOBALS["oiqsmvs"] = "app_contact_icon";
    ${$GLOBALS["uyqbask"]} = ${$GLOBALS["vqvusw"]}["button_color"];
    ${$GLOBALS["vdgezvebgdl"]} = ${$GLOBALS["vqvusw"]}["icon_color"];
    $xvgmockovjp = "show_config_mode";
    ${$etiysj} = ${$GLOBALS["vqsrqiq"]}["border_color"];
    ${$feioaioln} = ${$GLOBALS["vqvusw"]}["app_background_image"];
    ${$GLOBALS["nicfrifp"]} = ${$GLOBALS["vqvusw"]}["app_background_no_color"];
    ${$GLOBALS["oiqsmvs"]} = ${$GLOBALS["vqvusw"]}["app_contact_icon"];
    $GLOBALS["vyttxenrqwok"] = "row_produto_app_visu";
    ${$GLOBALS["chjsveoeb"]} = ${$GLOBALS["vqvusw"]}["default_config_icon"];
    ${$xvgmockovjp} = ${$GLOBALS["vyttxenrqwok"]}["show_config_mode"];
    $GLOBALS["rglsfmvc"] = "row_produto_app_visu";
    $uxkhtsazlw = "app_dialog_image_fail";
    ${$GLOBALS["sbfvlupzwdoo"]} = ${$hrumlxhnfhpj}["app_limiter_is_active"];
    ${$GLOBALS["lnjwcthipd"]} = ${$GLOBALS["vqvusw"]}["server_state_fast"];
    ${$GLOBALS["jgwebxvk"]} = ${$GLOBALS["kqstsajllxio"]}["server_state_slow"];
    ${$fhkixtepzjgy} = ${$GLOBALS["vqvusw"]}["app_dialog_success_text_colo"];
    ${$GLOBALS["hyfhhrttw"]} = ${$GLOBALS["owtgycjulr"]}["app_contact_link"];
    ${$GLOBALS["dpfmzcnjs"]} = ${$GLOBALS["vqvusw"]}["app_dialog_image_success"];
    ${$GLOBALS["hxykctkmq"]} = ${$GLOBALS["vqvusw"]}["app_dialog_success_background_color"];
    ${$xcyqcsgehbvd} = ${$GLOBALS["vqvusw"]}["app_config_item_background_color"];
    ${$GLOBALS["tfnxlfbrb"]} = ${$GLOBALS["rglsfmvc"]}["app_dialog_config_background_color"];
    ${$GLOBALS["kvsregmck"]} = ${$GLOBALS["vqvusw"]}["app_dialog_success_text_color"];
    ${$uxkhtsazlw} = ${$GLOBALS["wwpchlmng"]}["app_dialog_image_fail"];
    ${$GLOBALS["bonypjwm"]} = ${$GLOBALS["vqvusw"]}["app_dialog_error_background_color"];
    ${$GLOBALS["qvmymmp"]} = ${$GLOBALS["vqvusw"]}["app_dialog_error_text_color"];
    ${$mvjwsfxrq} = ${$ylkxckkls}["app_dialog_image_validate"];
    ${$GLOBALS["vcksvsbbhwe"]} = ${$GLOBALS["vqvusw"]}["app_dialog_image_message"];
    ${$GLOBALS["tjhnjnzgo"]} = ${$GLOBALS["vqvusw"]}["app_dialog_image_limit_exceeded"];
    ${$mlksmobgaxgw} = ${$GLOBALS["vqvusw"]}["app_dialog_image_invalid_data"];
    ${$trtosyp} = ${$GLOBALS["vqvusw"]}["app_text_check_user"];
    ${$GLOBALS["nvbrnek"]} = ${$ntpqpe}["app_message_text"];
    ${$GLOBALS["ftbgqnca"]} = ${$GLOBALS["vqvusw"]}["app_message_type"];
}
if (${$GLOBALS["qbliincuvnn"]} == "") {
    ${$GLOBALS["fambryvaipqp"]} = "BASE GL\xf0\x9f\x9a\x80";
} else {
    if (${$GLOBALS["kecyxxkrms"]} > "") {
        ${$GLOBALS["fambryvaipqp"]} = ${$GLOBALS["fambryvaipqp"]};
    }
}
if (${$hbvvkvn} == "") {
    $uvsrnwkp = "logo_height";
    $logo_height = "150";
} else {
    if (${$tkiyxyx} > "") {
        $iirrwqb = "logo_height";
        ${$GLOBALS["erscqgogr"]} = $logo_height;
    }
}
$kknvbgfvj = "app_text_check_user";
if (${$GLOBALS["pbzjhki"]} == "") {
    ${$GLOBALS["kprpvrvc"]} = "150";
} else {
    if (${$GLOBALS["kprpvrvc"]} > "") {
        $GLOBALS["xenkjvmjitt"] = "logo_width";
        ${$GLOBALS["kprpvrvc"]} = $logo_width;
    }
}
if (${$GLOBALS["bfkbkmqsh"]} == "") {
    $wuxugvwula = "background_color";
    $background_color = "#00ffffff";
} else {
    if (${$GLOBALS["nomjvhigjhk"]} > "") {
        $GLOBALS["xkdbgcffg"] = "background_color";
        $mpqksrmhnusd = "background_color";
        $background_color = $background_color;
    }
}
$GLOBALS["cpuuodqaun"] = "app_dialog_error_background_color";
$GLOBALS["sujdgvyc"] = "app_logo";
if (${$GLOBALS["gkjccr"]} == "") {
    ${$GLOBALS["gkjccr"]} = "#00ffffff";
} else {
    if (${$GLOBALS["vboptuagh"]} > "") {
        $GLOBALS["xltnurfr"] = "card_color";
        $card_color = ${$GLOBALS["gkjccr"]};
    }
}
$odvnjhqa = "button_color";
$GLOBALS["sldxuocyg"] = "app_background_image";
$GLOBALS["ogttofdnmf"] = "app_dialog_success_text_color";
if (${$GLOBALS["okfqftfl"]} == "") {
    $gcydhlbfh = "text_color";
    $text_color = "#ffffffff";
} else {
    if (${$GLOBALS["okfqftfl"]} > "") {
        $GLOBALS["vhoszcm"] = "text_color";
        $text_color = ${$GLOBALS["okfqftfl"]};
    }
}
if (${$odvnjhqa} == "") {
    $gtbrjwxjltf = "button_color";
    $button_color = "#FF23af4d";
} else {
    if (${$GLOBALS["hykrxh"]} > "") {
        $ifhrijrltw = "button_color";
        $GLOBALS["rgwriwraxj"] = "button_color";
        $button_color = $button_color;
    }
}
if (${$mwkpldljqt} == "") {
    $dcouujmsieue = "icon_color";
    $icon_color = "#fffac400";
} else {
    if (${$GLOBALS["rvfffexkif"]} > "") {
        $nbxfjmworuw = "icon_color";
        $fddfhdptdlnv = "icon_color";
        $icon_color = $icon_color;
    }
}
$dsxkbbwgw = "app_dialog_success_text_color";
if (${$GLOBALS["dgztspkennqm"]} == "") {
    $GLOBALS["owalqwyrww"] = "border_color";
    $border_color = "#ffc87e7e";
} else {
    if (${$GLOBALS["dgztspkennqm"]} > "") {
        $inhvmpdqvex = "border_color";
        $xfduuss = "border_color";
        $border_color = $border_color;
    }
}
if (${$GLOBALS["tfnxlfbrb"]} == "") {
    ${$GLOBALS["tfnxlfbrb"]} = "#e8eccbe1";
} else {
    if (${$GLOBALS["tfnxlfbrb"]} > "") {
        $npaunieqgqs = "app_dialog_config_background_color";
        $app_dialog_config_background_color = ${$GLOBALS["tfnxlfbrb"]};
    }
}
if (${$GLOBALS["nkkpduxtu"]} == "") {
    $GLOBALS["zpbbtu"] = "app_config_item_background_color";
    $app_config_item_background_color = "#bcf2e8e8";
} else {
    if (${$GLOBALS["nkkpduxtu"]} > "") {
        ${$GLOBALS["nkkpduxtu"]} = ${$GLOBALS["nkkpduxtu"]};
    }
}
$ovcblkg = "text_color";
if (${$GLOBALS["hxykctkmq"]} == "") {
    ${$GLOBALS["hxykctkmq"]} = "#FF04f634";
} else {
    if (${$GLOBALS["hxykctkmq"]} > "") {
        $jwwehoifz = "app_dialog_success_background_color";
        $dkhmxs = "app_dialog_success_background_color";
        $app_dialog_success_background_color = $app_dialog_success_background_color;
    }
}
if (${$GLOBALS["jnlskhkzss"]} == "") {
    $GLOBALS["fpssuhugdce"] = "app_dialog_error_background_color";
    $app_dialog_error_background_color = "#FFfa0000";
} else {
    if (${$GLOBALS["cpuuodqaun"]} > "") {
        $aybpcywgp = "app_dialog_error_background_color";
        $app_dialog_error_background_color = ${$GLOBALS["bonypjwm"]};
    }
}
$GLOBALS["hhistoqzphz"] = "card_color";
if (${$GLOBALS["ogttofdnmf"]} == "") {
    $GLOBALS["rssfpgi"] = "app_dialog_success_text_color";
    $app_dialog_success_text_color = "#FFffffff";
} else {
    if (${$dsxkbbwgw} > "") {
        $vawyjcvwv = "app_dialog_success_text_color";
        $gytujaxw = "app_dialog_success_text_color";
        $app_dialog_success_text_color = $app_dialog_success_text_color;
    }
}
if (${$GLOBALS["wufgiuouk"]} == "") {
    $GLOBALS["bhskwwnhejw"] = "app_dialog_error_text_color";
    $app_dialog_error_text_color = "#FFffffff";
} else {
    if (${$cwrbbrqhreg} > "") {
        ${$GLOBALS["qvmymmp"]} = ${$GLOBALS["qvmymmp"]};
    }
}
$GLOBALS["bphttfceydt"] = "app_contact_link";
if (${$GLOBALS["qnlskgtfp"]} == "") {
    $GLOBALS["zzlnenfyux"] = "app_logo";
    $app_logo = "https://i.imgur.com/TAWmkzs.png";
} else {
    if (${$GLOBALS["sujdgvyc"]} > "") {
        $GLOBALS["elttbhgcsm"] = "app_logo";
        $GLOBALS["jnjrdb"] = "app_logo";
        $app_logo = $app_logo;
    }
}
$GLOBALS["fbijmyymgr"] = "app_logo";
$wgklpgg = "app_dialog_success_background_color";
if (${$wwuwzmchqvhe} == "") {
    $pfcdjipk = "app_qsTileIcon";
    $app_qsTileIcon = "https://i.imgur.com/Im5837K.png";
} else {
    if (${$qzwsvva} > "") {
        $mmvdbsu = "app_qsTileIcon";
        $hyutrt = "app_qsTileIcon";
        $app_qsTileIcon = $app_qsTileIcon;
    }
}
if (${$GLOBALS["sldxuocyg"]} == "") {
    $GLOBALS["pksqbbnac"] = "app_background_image";
    $app_background_image = "https://i.imgur.com/vvLLutx.jpg";
} else {
    if (${$GLOBALS["lbxpsxfi"]} > "") {
        $eziujdruy = "app_background_image";
        $GLOBALS["urggfrulurdb"] = "app_background_image";
        $app_background_image = $app_background_image;
    }
}
if (${$GLOBALS["oxrbwxd"]} == "") {
    $kuvkkkrhhsjw = "app_contact_icon";
    $app_contact_icon = "https://i.imgur.com/dQToNIf.png";
} else {
    if (${$GLOBALS["oxrbwxd"]} > "") {
        $GLOBALS["kfeafaqsgkvi"] = "app_contact_icon";
        $app_contact_icon = ${$GLOBALS["oxrbwxd"]};
    }
}
$ixvfmjhfz = "button_color";
if (${$gcvrxpxbloib} == "") {
    ${$GLOBALS["hyfhhrttw"]} = "https://{$link2}/renovassh.php";
} else {
    if (${$GLOBALS["bphttfceydt"]} > "") {
        ${$GLOBALS["hyfhhrttw"]} = ${$GLOBALS["hyfhhrttw"]};
    }
}
if (${$GLOBALS["dtbnhrd"]} == "") {
    ${$GLOBALS["dtbnhrd"]} = "\xf0\x9f\x91\xa4 Usu\xc3\xa1rio: {username}<br>\xf0\x9f\x93\x86 Expira em: {validate}<br>\xf0\x9f\x93\x85 Dias restantes: {days}<br>\xf0\x9f\x9a\xab Conex\xc3\xb5es: {connections}|{limit_connections}";
} else {
    if (${$kknvbgfvj} > "") {
        $GLOBALS["voukoys"] = "app_text_check_user";
        $GLOBALS["uthikxxnfz"] = "app_text_check_user";
        $app_text_check_user = $app_text_check_user;
    }
}
echo "\n<div class=\"main-content-container container-fluid px-4\">\n<div class=\"page-header row no-gutters py-4\">\n<div class=\"col-12 col-sm-4 text-sm-left mb-0\">\n<center>\n<span class=\"text-uppercase page-subtitle\">Aplicativo</span>\n<h3 class=\"page-title\">Vis\xc3\xa3o Geral</h3>\n</center>\n</div>\n</div>\n<form action=\"/class/salvar-app.php\" method=\"post\" enctype=\"multipart/form-data\">\n<input class=\"form-control\" type=\"hidden\" name=\"tipox\" value=\"edit1\">\n<div class=\"row\">\n  <div class=\"col-md-100 mb-2\">\n    <div class=\"card card-small\">\n      <div class=\"card-header border-bottom\">\n          <h6 class=\"m-0\">Nome do aplicativo</h6>\n      </div>\n      <div class=\"card-body p-0\">\n        <ul class=\"list-group list-group-small list-group-flush\">\n          <li class=\"list-group-item d-flex px-3\">\n            <input type=\"text\" class=\"form-control\" value=\"";
echo htmlspecialchars(${$GLOBALS["glcjbs"]});
echo "\" name=\"app_name\">\n          </li>\n        </ul>\n      </div>\n    </div>\n  </div>\n  <div class=\"col-md-100 mb-2\">\n    <div class=\"card card-small\">\n      <div class=\"card-header border-bottom\">\n        <h6 class=\"m-0\">Logo do aplicativo</h6>\n      </div>\n      <div class=\"card-body p-0\">\n        <ul class=\"list-group list-group-small list-group-flush\">\n          <li class=\"list-group-item d-flex px-3\">\n            <div class=\"input-group\">\n              <input type=\"text\" class=\"form-control mb-0\" id=\"app_logo\" name=\"app_logo\" value=\"";
echo ${$GLOBALS["fbijmyymgr"]};
echo "\">\n              <input type=\"file\" style=\"display: none\" id=\"upload-input-logo\">\n              <div class=\"input-group-append\">\n                <button class=\"btn btn-outline-secondary btn__upload\" type=\"button\" id=\"upload-button-logo\"><i class=\"material-icons\">cloud_upload</i></button>\n              </div>\n            </div>\n          </li>\n          <div class=\"input-group mb-1\">\n            <img style=\"height: 6rem;\" class=\"img-fluid mx-auto d-block\" src=\"";
echo ${$GLOBALS["qnlskgtfp"]};
echo "\" id=\"preview-image-logo\">\n          </div>\n        </ul>\n      </div>\n    </div>\n  </div>\n  <div class=\"col-md-100 mb-2\">\n    <div class=\"card card-small\">\n      <ul class=\"list-group list-group-small list-group-flush\">\n        <li class=\"list-group-item d-flex px-3\">\n          <div class=\"row\">\n            <h6 class=\"col-12\">Altura e largura da logo</h6>\n            <div class=\"col-lg-6 mb-1\">\n              <input type=\"number\" class=\"form-control form-control-sm ml-auto\" placeholder=\"Altura\" id=\"app_logo_height\" name=\"logo_height\" value=\"";
echo ${$qstbkblr};
echo "\">\n            </div>\n            <div class=\"col-lg-6 mb-1\">\n              <input type=\"number\" class=\"form-control form-control-sm ml-auto\" placeholder=\"Largura\" id=\"app_logo_width\" name=\"logo_width\" value=\"";
echo ${$GLOBALS["kprpvrvc"]};
echo "\">\n            </div>\n          </div>\n        </li>\n      </ul>\n    </div>\n  </div>\n  <div class=\"col-md-100 mb-2\">\n    <div class=\"card card-small\">\n      <div class=\"card-header border-bottom\">\n        <h6 class=\"m-0\">QsTile Icone</h6>\n      </div>\n      <div class=\"card-body p-0\">\n        <ul class=\"list-group list-group-small list-group-flush\">\n          <li class=\"list-group-item d-flex px-3\">\n            <div class=\"input-group\">\n              <input type=\"text\" class=\"form-control\" id=\"app_qsTileIcon\" name=\"app_qsTileIcon\" value=\"";
echo ${$qyvmlzkfmm};
echo "\">\n              <input type=\"file\" style=\"display: none\" id=\"upload-input-qstile\">\n              <div class=\"input-group-append\">\n                <button class=\"btn btn-outline-secondary btn__upload\" type=\"button\" id=\"upload-button-qstile\"><i class=\"material-icons\">cloud_upload</i></button>\n              </div>\n            </div>\n          </li>\n          <div class=\"input-group mb-1\">\n            <img style=\"height: 6rem;\" class=\"img-fluid mx-auto d-block\" src=\"";
echo ${$aqeqqt};
echo "\" id=\"preview-image-qstile\">\n          </div>\n        </ul>\n      </div>\n    </div>\n  </div>\n</div>\n<div class=\"row\">\n  <div class=\"col-md-100 mb-2\">\n    <div class=\"card card-small\">\n      <div class=\"card-header border-bottom\">\n        <h6 class=\"m-0\">Imagem de fundo</h6>\n      </div>\n      <div class=\"card-body p-0\">\n        <ul class=\"list-group list-group-small list-group-flush\">\n          <li class=\"list-group-item d-flex px-3\">\n            <div class=\"input-group\">\n              <input type=\"text\" class=\"form-control\" id=\"app_background_image\" name=\"app_background_image\" value=\"";
echo ${$GLOBALS["lbxpsxfi"]};
$GLOBALS["wikssjtmoqt"] = "background_color";
echo "\">\n              <input type=\"file\" style=\"display: none\" id=\"upload-input-fundo\">\n              <div class=\"input-group-append\">\n                <button class=\"btn btn-outline-secondary btn__upload\" type=\"button\" id=\"upload-button-fundo\"><i class=\"material-icons\">cloud_upload</i></button>\n              </div>\n            </div>\n          </li>\n          <div class=\"input-group mb-2\">\n            <img style=\"height: 6rem;\" class=\"img-fluid mx-auto d-block\" src=\"";
echo ${$GLOBALS["lbxpsxfi"]};
echo "\" id=\"preview-image-fundo\">\n          </div>\n        </ul>\n      </div>\n    </div>\n  </div>\n</div>\n<div class=\"row\">\n  <div class=\"col-md-4 mb-2\">\n    <div class=\"card card-small\">\n      <div class=\"card-header border-bottom\">\n        <h6 class=\"m-0\">Cor do fundo</h6>\n      </div>\n      <div class=\"card-body p-1\">\n        <div class=\"row align-items-center\">\n          <div class=\"col-md-100\">\n            <input type=\"text\" class=\"form-control form-control-sm mb-1\" placeholder=\"Hexadecimal\" id=\"app_background_color\" name=\"background_color\" value=\"";
echo ${$GLOBALS["rlpfgyycnl"]};
echo "\" onkeyup=\"changeInputColor('background_color', this.value)\">\n          </div>\n          <div class=\"col-md-100 \">\n            <input type=\"color\" class=\"form-control form-control-sm\" value=\"";
echo ${$GLOBALS["bfkbkmqsh"]};
$GLOBALS["pdxxlmt"] = "border_color";
echo "\" id=\"background_color\" onchange=\"changeColor('app_background_color', this.value)\">\n          </div>\n        </div>\n        <label class=\"form-label\">Opacidade</label>\n        <input type=\"range\" class=\"form-range\" min=\"0\" max=\"100\" step=\"1\" value=\"\" oninput=\"changeInputRange('app_background_color_transparency', 'app_background_color', this.value)\">\n        <div id=\"app_background_color_transparency\" class=\"p-1 rounded-pill\" style=\"background-color: ";
echo $background_color;
echo "\">\n        </div>\n      </div>\n    </div>\n  </div>\n  <div class=\"col-md-4 mb-2\">\n    <div class=\"card card-small\">\n      <div class=\"card-header border-bottom\">\n        <h6 class=\"m-0\">Cor do cart\xc3\xa3o</h6>\n      </div>\n      <div class=\"card-body p-1\">\n        <div class=\"row align-items-center\">\n          <div class=\"col-md-100\">\n            <input type=\"text\" class=\"form-control form-control-sm mb-1\" placeholder=\"Hexadecimal\" id=\"app_card_color\" name=\"card_color\" value=\"";
$GLOBALS["ccqbyrlbsnx"] = "app_config_item_background_color";
echo ${$GLOBALS["gkjccr"]};
echo "\" onkeyup=\"changeInputColor('card_color', this.value)\">\n          </div>\n          <div class=\"col-md-100 \">\n            <input type=\"color\" class=\"form-control form-control-sm\" value=\"";
$wcgrkvwo = "app_config_item_background_color";
echo ${$GLOBALS["hhistoqzphz"]};
echo "\" id=\"card_color\" onchange=\"changeColor('app_card_color', this.value)\">\n          </div>\n        </div>\n        <label class=\"form-label\">Opacidade</label>\n        <input type=\"range\" class=\"form-range\" min=\"0\" max=\"100\" step=\"1\" value=\"\" oninput=\"changeInputRange('app_card_color_transparency', 'app_card_color', this.value)\">\n        <div id=\"app_card_color_transparency\" class=\"p-1 rounded-pill\" style=\"background-color: ";
echo ${$GLOBALS["gkjccr"]};
echo "\">\n        </div>\n      </div>\n    </div>\n  </div>\n  <div class=\"col-md-4 mb-2\">\n    <div class=\"card card-small\">\n      <div class=\"card-header border-bottom\">\n        <h6 class=\"m-0\">Cor do texto</h6>\n      </div>\n      <div class=\"card-body p-1\">\n        <div class=\"row align-items-center\">\n          <div class=\"col-md-100\">\n            <input type=\"text\" class=\"form-control form-control-sm mb-1\" placeholder=\"Hexadecimal\" id=\"app_text_color\" name=\"text_color\" value=\"";
echo ${$GLOBALS["okfqftfl"]};
echo "\" onkeyup=\"changeInputColor('text_color', this.value)\">\n          </div>\n          <div class=\"col-md-100\">\n            <input type=\"color\" class=\"form-control form-control-sm\" value=\"";
$GLOBALS["nylcixt"] = "icon_color";
echo ${$ovcblkg};
echo "\" id=\"text_color\" onchange=\"changeColor('app_text_color', this.value)\">\n          </div>\n        </div>\n        <label class=\"form-label\">Opacidade</label>\n        <input type=\"range\" class=\"form-range\" min=\"0\" max=\"100\" step=\"1\" value=\"\" oninput=\"changeInputRange('app_text_color_transparency', 'app_text_color', this.value)\">\n        <div id=\"app_text_color_transparency\" class=\"p-1 rounded-pill\" style=\"background-color: ";
echo ${$GLOBALS["okfqftfl"]};
echo "\">\n        </div>\n      </div>\n    </div>\n  </div>\n</div>\n<div class=\"row\">\n  <div class=\"col-md-4 mb-2\">\n    <div class=\"card card-small\">\n      <div class=\"card-header border-bottom\">\n        <h6 class=\"m-0\">Cor do bot\xc3\xa3o</h6>\n      </div>\n      <div class=\"card-body p-1\">\n        <div class=\"row align-items-center\">\n          <div class=\"col-md-100\">\n            <input type=\"text\" class=\"form-control form-control-sm mb-1\" placeholder=\"Hexadecimal\" id=\"app_button_color\" name=\"button_color\" value=\"";
echo ${$ixvfmjhfz};
echo "\" onkeyup=\"changeInputColor('button_color', this.value)\">\n          </div>\n          <div class=\"col-md-100\">\n            <input type=\"color\" class=\"form-control form-control-sm\" value=\"";
echo ${$GLOBALS["uyqbask"]};
echo "\" id=\"button_color\" onchange=\"changeColor('app_button_color', this.value)\">\n          </div>\n        </div>\n        <label class=\"form-label\">Opacidade</label>\n        <input type=\"range\" class=\"form-range\" min=\"0\" max=\"100\" step=\"1\" value=\"\" oninput=\"changeInputRange('app_button_color_transparency', 'app_button_color', this.value)\">\n        <div id=\"app_button_color_transparency\" class=\"p-1 rounded-pill\" style=\"background-color: ";
echo ${$GLOBALS["uyqbask"]};
echo "\">\n        </div>\n      </div>\n    </div>\n  </div>\n  <div class=\"col-md-4 mb-2\">\n    <div class=\"card card-small\">\n      <div class=\"card-header border-bottom\">\n        <h6 class=\"m-0\">Cor do \xc3\xadcone</h6>\n      </div>\n      <div class=\"card-body p-1\">\n        <div class=\"row align-items-center\">\n          <div class=\"col-md-100\">\n            <input type=\"text\" class=\"form-control form-control-sm mb-1\" placeholder=\"Hexadecimal\" id=\"app_icon_color\" name=\"icon_color\" value=\"";
echo ${$GLOBALS["rvfffexkif"]};
echo "\" onkeyup=\"changeInputColor('icon_color', this.value)\">\n          </div>\n          <div class=\"col-md-100\">\n            <input type=\"color\" class=\"form-control form-control-sm\" value=\"";
echo $icon_color;
echo "\" id=\"icon_color\" onchange=\"changeColor('app_icon_color', this.value)\">\n          </div>\n        </div>\n        <label class=\"form-label\">Opacidade</label>\n        <input type=\"range\" class=\"form-range\" min=\"0\" max=\"100\" step=\"1\" value=\"\" oninput=\"changeInputRange('app_icon_color_transparency', 'app_icon_color', this.value)\">\n        <div id=\"app_icon_color_transparency\" class=\"p-1 rounded-pill\" style=\"background-color: ";
echo ${$GLOBALS["rvfffexkif"]};
echo "\">\n        </div>\n      </div>\n    </div>\n  </div>\n  <div class=\"col-md-4 mb-2\">\n    <div class=\"card card-small\">\n      <div class=\"card-header border-bottom\">\n        <h6 class=\"m-0\">Cor da borda</h6>\n      </div>\n      <div class=\"card-body p-1\">\n        <div class=\"row align-items-center\">\n          <div class=\"col-md-100\">\n            <input type=\"text\" class=\"form-control form-control-sm mb-1\" placeholder=\"Hexadecimal\" id=\"app_border_color\" name=\"border_color\" value=\"";
echo ${$GLOBALS["dgztspkennqm"]};
echo "\" onkeyup=\"changeInputColor('border_color', this.value)\">\n          </div>\n          <div class=\"col-md-100\">\n            <input type=\"color\" class=\"form-control form-control-sm\" value=\"";
echo ${$GLOBALS["dgztspkennqm"]};
echo "\" id=\"border_color\" onchange=\"changeColor('app_border_color', this.value)\">\n          </div>\n        </div>\n        <label class=\"form-label\">Opacidade</label>\n        <input type=\"range\" class=\"form-range\" min=\"0\" max=\"100\" step=\"1\" value=\"\" oninput=\"changeInputRange('app_border_color_transparency', 'app_border_color', this.value)\">\n        <div id=\"app_border_color_transparency\" class=\"p-1 rounded-pill\" style=\"background-color: ";
echo $border_color;
echo "\">\n        </div>\n      </div>\n    </div>\n  </div>\n</div>\n<div class=\"row\">\n  <div class=\"col-md-6 mb-2\">\n    <div class=\"card card-small\">\n      <div class=\"card-header border-bottom\">\n        <h6 class=\"m-0\">Bot\xc3\xa3o de contato</h6>\n      </div>\n      <div class=\"card-body p-0\">\n        <ul class=\"list-group list-group-small list-group-flush\">\n          <li class=\"list-group-item d-flex px-3\">\n            <div class=\"input-group\">\n              <input type=\"text\" class=\"form-control\" id=\"app_contact_icon\" name=\"app_contact_icon\" value=\"";
echo ${$GLOBALS["dqcvjldxmg"]};
echo "\">\n              <input type=\"file\" style=\"display: none\" id=\"upload-input-contact\">\n              <div class=\"input-group-append\">\n                <button class=\"btn btn-outline-secondary btn__upload\" type=\"button\" id=\"upload-button-contact\"><i class=\"material-icons\">cloud_upload</i></button>\n              </div>\n            </div>\n          </li>\n          <div class=\"input-group mb-2\">\n            <img style=\"height: 6rem;\" class=\"img-fluid mx-auto d-block\" src=\"";
echo ${$GLOBALS["oxrbwxd"]};
echo "\" id=\"preview-image-contact\">\n            </div>\n            <div class=\"card-body p-0\">\n              <ul class=\"list-group list-group-small list-group-flush\">\n                <li class=\"list-group-item d-flex px-3\">\n                  <div class=\"row\">\n                    <h6 class=\"ml-auto\">URL Link de contato ou renova\xc3\xa7\xc3\xa3o</h6>\n                    <div class=\"input-group\">\n                      <input type=\"text\" class=\"form-control form-control-sm ml-auto\" value=\"";
echo ${$gecnhpso};
echo "\" name=\"app_contact_link\" placeholder=\"Link para contato\">\n                    </div>\n                  </div>\n                </div>\n              </li>\n            </ul>\n          </div>\n        </div>\n      </div>\n    <div class=\"col-md-6 mb-2\">\n      <div class=\"card card-small\">\n        <div class=\"card-header border-bottom\">\n          <h6 class=\"m-0\">Utilit\xc3\xa1rios de configura\xc3\xa7\xc3\xa3o</h6>\n        </div>\n      <div class=\"card-body p-0\">\n        <ul class=\"list-group list-group-small list-group-flush\">\n          <li class=\"list-group-item d-flex px-3\">\n            <div class=\"row\">\n              <h6 class=\"ml-auto\">Exibir modo de conex\xc3\xa3o</h6>\n              <div class=\"form-check form-check-inline ms-3\">\n                <input class=\"form-check-input\" type=\"radio\" name=\"show_config_mode\" value=\"1\" ";
if (${$GLOBALS["nhvrmlpzp"]} == "1" || ${$ivwxwwyokd} == "") {
    echo "checked";
} else {
    echo "False";
}
echo " >\n                <label class=\"form-check-label\" for=\"inlineRadio1\">Sim</label>\n              </div>\n              <div class=\"form-check form-check-inline ms-3\">\n                <input class=\"form-check-input\" type=\"radio\" name=\"show_config_mode\" value=\"0\" ";
if (${$GLOBALS["nhvrmlpzp"]} == "0") {
    echo "checked";
} else {
    echo "False";
}
echo " >\n                <label class=\"form-check-label\" for=\"inlineRadio2\">Nao</label>\n              </div>\n            </div>\n          </li>\n          <li class=\"list-group-item d-flex px-3\">\n            <div class=\"row\">\n              <h6 class=\"ml-auto\">Limiter de conex\xc3\xa3o</h6>\n              <div class=\"form-check form-check-inline ms-3\">\n                <input class=\"form-check-input\" type=\"radio\" name=\"app_limiter_is_active\" value=\"1\" ";
if (${$GLOBALS["jjvynuswq"]} == "1" || ${$GLOBALS["sbfvlupzwdoo"]} == "") {
    echo "checked";
} else {
    echo "False";
}
echo ">\n                <label class=\"form-check-label\" for=\"inlineRadio1\">Ativo</label>\n              </div>\n              <div class=\"form-check form-check-inline ms-3\">\n                <input class=\"form-check-input\" type=\"radio\" name=\"app_limiter_is_active\" value=\"0\" ";
if (${$GLOBALS["sbfvlupzwdoo"]} == "0") {
    echo "checked";
} else {
    echo "False";
}
echo ">\n                <label class=\"form-check-label\" for=\"inlineRadio2\">Inativo</label>\n              </div>\n            </div>\n          </li>\n        </ul>\n      </div>\n    </div>\n  </div>\n</div>\n<div class=\"row\">\n<div class=\"col-md-100 mb-4\">\n<div class=\"card card-small\">\n<div class=\"card-header border-bottom\">\n<h6 class=\"m-0\">Salvar</h6>\n</div>\n<div class=\"card-body p-0\">\n<ul class=\"list-group list-group-small list-group-flush\">\n<li class=\"list-group-item d-flex px-3\">\n<button type=\"submit\" class=\"btn btn-2 btn-dark ml-auto\" name=\"save\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-save2\" viewBox=\"0 0 16 16\"><path d=\"M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v4.5h2a.5.5 0 0 1 .354.854l-2.5 2.5a.5.5 0 0 1-.708 0l-2.5-2.5A.5.5 0 0 1 5.5 6.5h2V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z\"/>\n</svg> <span>Salvar</span>\n</button>\n<button type=\"button\" class=\"btn btn-2 btn-dark ml-2 ms-1\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-plus-lg\" viewBox=\"0 0 16 16\"><path fill-rule=\"evenodd\" d=\"M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z\"/>\n</svg> <span>Op\xc3\xa7\xc3\xb5es</span>\n</button>\n\n\n<button data-bs-toggle=\"modal\" data-bs-target=\"#delet_all\" type=\"button\" class=\"btn btn-2 btn-dark ml-2 ms-1\" id=\"delete\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-trash\" viewBox=\"0 0 16 16\">\n  <path d=\"M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z\"/>\n  <path d=\"M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z\"/>\n</svg> <span>Resetar</span>\n</button>\n</li>\n</ul>\n</div>\n</div>\n</div>\n</div>\n</form>\n</div>\n<div class=\"modal fade\" id=\"exampleModal\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\" tabindex=\"-1\"\naria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">\n<div class=\"modal-dialog\">\n<div class=\"modal-content\">\n<div class=\"modal-header\">\n<h5 class=\"modal-title\" id=\"exampleModalLabel\">Mais op\xc3\xa7\xc3\xb5es de cores</h5>\n<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>\n</div>\n<div class=\"modal-body\">\n<form action=\"/class/salvar-app.php\" method=\"post\" enctype=\"multipart/form-data\">\n<input class=\"form-control\" type=\"hidden\" name=\"tipox\" value=\"edit2\">\n<div class=\"row\">\n<div class=\"col-md-6 mb-4\">\n<div class=\"card card-small\">\n<div class=\"card-header border-bottom\">\n<h6 class=\"m-0\">Fundo do dialog de configura\xc3\xa7\xc3\xa3o</h6>\n</div>\n<div class=\"card-body p-1\">\n<div class=\"row align-items-center\">\n<div class=\"col-md-6\">\n<input type=\"text\" class=\"form-control form-control-sm mb-1\"\nplaceholder=\"Hexadecimal\" id=\"app_dialog_config_background_color\"\nname=\"app_dialog_config_background_color\"\nvalue=\"";
echo ${$GLOBALS["tfnxlfbrb"]};
echo "\"\nonkeyup=\"changeInputColor('app_dialog_config_background_color', this.value)\">\n</div>\n<div class=\"col-md-6 \">\n<input type=\"color\" class=\"form-control form-control-sm\"\nvalue=\"";
echo ${$GLOBALS["tfnxlfbrb"]};
$GLOBALS["htjdgaf"] = "app_dialog_success_background_color";
echo "\"\nid=\"app_dialog_config_background_color\"\nonchange=\"changeColor('app_dialog_config_background_color', this.value)\">\n</div>\n</div>\n<label class=\"form-label\">Opacidade</label>\n<input type=\"range\" class=\"form-range\" min=\"0\" max=\"100\" step=\"1\" value=\"100\"\noninput=\"changeInputRange('app_dialog_config_background_color_transparency', 'app_dialog_config_background_color', this.value)\">\n<div id=\"app_dialog_config_background_color_transparency\" class=\"p-1 rounded-pill\"\nstyle=\"background-color: #383838\">\n</div>\n</div>\n</div>\n</div>\n<div class=\"col-md-6 mb-4\">\n<div class=\"card card-small\">\n<div class=\"card-header border-bottom\">\n<h6 class=\"m-0\">Fundo dos Itens de configura\xc3\xa7\xc3\xa3o</h6>\n</div>\n<div class=\"card-body p-1\">\n<div class=\"row align-items-center\">\n<div class=\"col-md-6\">\n<input type=\"text\" class=\"form-control form-control-sm mb-1\"\nplaceholder=\"Hexadecimal\" id=\"app_config_item_background_color\"\nname=\"app_config_item_background_color\"\nvalue=\"";
echo ${$wcgrkvwo};
echo "\"\nonkeyup=\"changeInputColor('app_config_item_background_color', this.value)\">\n</div>\n<div class=\"col-md-6 \">\n<input type=\"color\" class=\"form-control form-control-sm\"\nvalue=\"";
echo ${$GLOBALS["ccqbyrlbsnx"]};
echo "\"\nid=\"app_config_item_background_color\"\nonchange=\"changeColor('app_config_item_background_color', this.value)\">\n</div>\n</div>\n<label class=\"form-label\">Opacidade</label>\n<input type=\"range\" class=\"form-range\" min=\"0\" max=\"100\" step=\"1\" value=\"100\"\noninput=\"changeInputRange('app_config_item_background_color_transparency', 'app_config_item_background_color', this.value)\">\n<div id=\"app_config_item_background_color_transparency\" class=\"p-1 rounded-pill\"\nstyle=\"background-color: #404040\">\n</div>\n</div>\n</div>\n</div>\n</div>\n<div class=\"row\">\n<div class=\"col-md-6 mb-4\">\n<div class=\"card card-small\">\n<div class=\"card-header border-bottom\">\n<h6 class=\"m-0\">Dialog de sucesso</h6>\n</div>\n<div class=\"card-body p-1\">\n<div class=\"row align-items-center mb-1\">\n<label class=\"form-label\">Cor do fundo</label>\n<div class=\"col-md-6\">\n<input type=\"text\" class=\"form-control form-control-sm mb-1\"\nplaceholder=\"Hexadecimal\" id=\"app_dialog_success_background_color\" name=\"app_dialog_success_background_color\" value=\"";
echo ${$wgklpgg};
echo "\" onkeyup=\"changeInputColor('app_dialog_success_background_color', this.value)\">\n</div>\n<div class=\"col-md-6 \">\n<input type=\"color\" class=\"form-control form-control-sm\"\nvalue=\"";
$thibkhvd = "app_dialog_error_text_color";
echo $app_dialog_success_background_color;
echo "\"\nid=\"app_dialog_success_background_color\"\nonchange=\"changeColor('app_dialog_success_background_color', this.value)\">\n</div>\n</div>\n<div class=\"row align-items-center m-0 mb-3\">\n<label class=\"form-label p-0\">Opacidade do fundo</label>\n<input type=\"range\" class=\"form-range\" min=\"0\" max=\"100\" step=\"1\" value=\"86\"\noninput=\"changeInputRange('app_dialog_success_background_color_transparency', 'app_dialog_success_background_color', this.value)\">\n<div id=\"app_dialog_success_background_color_transparency\"\nclass=\"p-1 rounded-pill\"\nstyle=\"background-color: #dd404040\">\n</div>\n</div>\n<div class=\"row align-items-center\">\n<label class=\"form-label\">Cor do Texto</label>\n<div class=\"col-md-6\">\n<input type=\"text\" class=\"form-control form-control-sm mb-1\" placeholder=\"Hexadecimal\" id=\"app_dialog_success_text_color\" name=\"app_dialog_success_text_color\" value=\"";
echo ${$gqkyexayrdg};
echo "\" onkeyup=\"changeInputColor('app_dialog_success_text_color', this.value)\">\n</div>\n<div class=\"col-md-6 \">\n<input type=\"color\" class=\"form-control form-control-sm\" value=\"";
echo ${$GLOBALS["deomkp"]};
echo "\" id=\"app_dialog_success_text_color\" onchange=\"changeColor('app_dialog_success_text_color', this.value)\">\n</div>\n</div>\n</div>\n</div>\n</div>\n<div class=\"col-md-6 mb-4\">\n<div class=\"card card-small\">\n<div class=\"card-header border-bottom\">\n<h6 class=\"m-0\">Dialog de erro</h6>\n</div>\n<div class=\"card-body p-1\">\n<div class=\"row align-items-center mb-1\">\n<label class=\"form-label\">Cor do fundo</label>\n<div class=\"col-md-6\">\n<input type=\"text\" class=\"form-control form-control-sm mb-1\"\nplaceholder=\"Hexadecimal\" id=\"app_dialog_error_background_color\"\nname=\"app_dialog_error_background_color\"\nvalue=\"";
echo ${$GLOBALS["bonypjwm"]};
echo "\"\nonkeyup=\"changeInputColor('app_dialog_error_background_color', this.value)\">\n</div>\n<div class=\"col-md-6 \">\n<input type=\"color\" class=\"form-control form-control-sm\"\nvalue=\"";
echo ${$GLOBALS["boyhejglee"]};
echo "\"\nid=\"app_dialog_error_background_color\"\nonchange=\"changeColor('app_dialog_error_background_color', this.value)\">\n</div>\n</div>\n<div class=\"row align-items-center m-0 mb-3\">\n<label class=\"form-label p-0\">Opacidade do fundo</label>\n<input type=\"range\" class=\"form-range\" min=\"0\" max=\"100\" step=\"1\" value=\"100\"\noninput=\"changeInputRange('app_dialog_error_background_color_transparency', 'app_dialog_error_background_color', this.value)\">\n<div id=\"app_dialog_error_background_color_transparency\"\nclass=\"p-1 rounded-pill\"\nstyle=\"background-color: #404040\">\n</div>\n</div>\n<div class=\"row align-items-center\">\n<label class=\"form-label\">Cor do Texto</label>\n<div class=\"col-md-6\">\n<input type=\"text\" class=\"form-control form-control-sm mb-1\"\nplaceholder=\"Hexadecimal\" id=\"app_dialog_error_text_color\"\nname=\"app_dialog_error_text_color\"\nvalue=\"";
echo $app_dialog_error_text_color;
echo "\"\nonkeyup=\"changeInputColor('app_dialog_error_text_color', this.value)\">\n</div>\n<div class=\"col-md-6 \">\n<input type=\"color\" class=\"form-control form-control-sm\"\nvalue=\"";
echo ${$GLOBALS["flhcohdutd"]};
echo "\"\nid=\"app_dialog_error_text_color\"\nonchange=\"changeColor('app_dialog_error_text_color', this.value)\">\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n<div class=\"row\">\n  <div class=\"col-md-12 mb-4\">\n    <div class=\"card card-small\">\n      <div class=\"card-header border-bottom\">\n        <h6 class=\"m-0\">Mensagem CheckUser</h6>\n      </div>\n      <div class=\"card-body p-1\">\n        <div class=\"row align-items-center\">\n          <div class=\"col-md-12\">\n            <textarea class=\"form-control form-control-sm\" rows=\"4\" placeholder=\"Texto\" id=\"app_text_check_user\" name=\"app_text_check_user\">";
echo ${$GLOBALS["rfgyinkg"]};
echo "</textarea>\n          </div>\n        </div>\n      </div>\n    </div>\n  </div>\n</div>\n<div class=\"row\">\n<div class=\"col-md-12 mb-4\">\n<div class=\"card card-small\">\n<div class=\"card-header border-bottom\">\n<h6 class=\"m-0\">Mensagem (Aviso, Boas Vindas, Alerta ...)</h6>\n</div>\n<div class=\"card-body p-1\">\n<div class=\"row align-items-center\">\n<div class=\"col-md-12\">\n<textarea class=\"form-control form-control-sm\" rows=\"3\"\nplaceholder=\"Texto\" id=\"app_message_text\"\nname=\"app_message_text\">";
echo ${$GLOBALS["nvbrnek"]};
echo "</textarea>\n<label class=\"form-label mt-1\">Tipo de mensagem</label>\n<select class=\"form-select form-control-sm mt-1\" id=\"app_message_type\"\nname=\"app_message_type\">\n<option value=\"1\" False>\nBoas Vindas (Ser\xc3\xa1 exibido uma unica vez)\n</option>\n<option value=\"2\" False>\nAlerta (Sempre ser\xc3\xa1 exibido)\n</option>\n<option value=\"3\" selected>\nAo conectar vpn (Ao conectar vpn ser\xc3\xa1 exibido)\n</option>\n<option value=\"4\" False>\nN\xc3\xa3o exibir (N\xc3\xa3o ser\xc3\xa1 exibido)\n</option>\n</select>\n</div>\n</div>\n</div>\n</div>\n</div>\n<div class=\"modal-footer p-0 pt-2\">\n<button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fechar</button>\n<button type=\"submit\" name=\"save\" class=\"btn btn-dark\">Salvar</button>\n</div>\n</div>\n</div>\n</form>\n</div>\n</div>\n</div>\n</div>\n</main>\n</div>\n</div>\n\n<div class=\"modal fade\" id=\"delet_all\" role=\"dialog\">\n  <div class=\"modal-dialog modal-md\">\n    <div class=\"modal-content\">\n      <div class=\"modal-body\">\n        <center>\n          <img id=\"main-logo\" class=\"d-inline-block align-top mr-1\" src=\"https://i.imgur.com/IoBKANK.png\" width=\"150\" height=\"150\" alt=\"Shards Dashboard\"></img>\n            <h5>Deseja realmente deletar seu tema atual?</h5>\n        </center>\n      </div>\n      <div class=\"modal-footer\">\n         <a type=\"button\" name=\"reset\"\nclass=\"btn btn-outline-danger ml-2 ms-1\" href=\"class/func_del.php?func=del_theme\">Resetar</a>\n            <button type=\"button\" class=\"btn btn-dark\" data-bs-dismiss=\"modal\">Cancelar</button>\n      </div>\n    </div>\n  </div>\n</div>\n\n<style>\n  textarea {\n    width: 100%;\n  }\n  .text {\n    color: red;\n  }\n</style>\n\n<div class=\"modal fade\" id=\"import\" role=\"dialog\">\n  <div class=\"modal-dialog modal-md\">\n    <div class=\"modal-content\">\n        <form method=\"POST\" action=\"/class/import.php?func=tema\">\n      <div class=\"modal-body\">\n        <center>\n        <h5>Somente uma config por vez!!!</h5>\n        <h6 class=\"text\">Em fase de testes!!!</h6>\n          <hr>\n          <textarea id=\"imp\" name=\"imp\" rows=\"15\"></textarea>\n        </center>\n      </div>\n      <div class=\"modal-footer\">\n        <button type=\"button\" class=\"btn btn-dark\" data-bs-dismiss=\"modal\">Cancelar</button>\n        <button type=\"submit\" class=\"btn btn-outline-success\" id=\"importar\" data-bs-dismiss=\"modal\">Importar</button>\n      </div>\n      </form>\n    </div>\n  </div>\n</div>\n\n<script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/npm/toastify-js\"></script>\n<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"\nintegrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\" crossorigin=\"anonymous\"></script>\n<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\"\nintegrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\"\ncrossorigin=\"anonymous\"></script>\n<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js\"\nintegrity=\"sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2\"\ncrossorigin=\"anonymous\"></script>\n<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js\"></script>\n<script src=\"https://unpkg.com/shards-ui@latest/dist/js/shards.min.js\"></script>\n<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js\"></script>\n<script src=\"static/assets/js/extras.1.1.0.min.js\"></script>\n<script src=\"static/assets/js/shards-dashboards.1.1.0.min.js\"></script>\n<script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>\n<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>\n<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>\n  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js\"></script>\n  <script>\n    \$(document).ready(function() {\n      // Fun\xc3\xa7\xc3\xa3o para realizar o upload da imagem ao ImgBB\n      function uploadImage(file) {\n        var form_data = new FormData();\n        var timestamp = new Date().getTime();\n        var filename = file.name;\n        var extension = filename.split('.').pop().toLowerCase();\n        var new_filename = md5(file) + '_' + timestamp + '.' + extension;\n        form_data.append('image', file, new_filename);\n\n        \$.ajax({\n          url: 'https://api.imgbb.com/1/upload?key=2d064f28588136d4bed6fe5c05ca6d90',\n          type: 'POST',\n          data: form_data,\n          contentType: false,\n          processData: false,\n          success: function(data) {\n            var link = data.data.url;\n            \$('#app_logo').val(link);\n            \$('#preview-image-logo').attr('src', link);\n          },\n          error: function(xhr, status, error) {\n            \$('#error-message-logo').text('Ocorreu um erro ao enviar a imagem.');\n            \$('#error-message-logo').show();\n          }\n        });\n      }\n\n      // Evento de sele\xc3\xa7\xc3\xa3o de arquivo\n      \$('#upload-input-logo').change(function() {\n        var file = \$(this).prop('files')[0];\n        if (file) {\n          \$('#error-message-logo').hide();\n          uploadImage(file);\n          var reader = new FileReader();\n          reader.onload = function() {\n            \$('#preview-image-logo').attr('src', reader.result);\n          };\n          reader.readAsDataURL(file);\n        } else {\n          \$('#error-message-logo').text('Nenhum arquivo selecionado.');\n          \$('#error-message-logo').show();\n        }\n      });\n    });\n\n    function md5(input) {\n      var hash = CryptoJS.MD5(input);\n      return hash.toString(CryptoJS.enc.Hex);\n    }\n\n  </script>\n  <script>\n    \$(document).ready(function() {\n      // Fun\xc3\xa7\xc3\xa3o para realizar o upload da imagem ao ImgBB\n      function uploadImage(file) {\n        var form_data = new FormData();\n        var timestamp = new Date().getTime();\n        var filename = file.name;\n        var extension = filename.split('.').pop().toLowerCase();\n        var new_filename = md5(file) + '_' + timestamp + '.' + extension;\n        form_data.append('image', file, new_filename);\n\n        \$.ajax({\n          url: 'https://api.imgbb.com/1/upload?key=2d064f28588136d4bed6fe5c05ca6d90',\n          type: 'POST',\n          data: form_data,\n          contentType: false,\n          processData: false,\n          success: function(data) {\n            var link = data.data.url;\n            \$('#app_qsTileIcon').val(link);\n            \$('#preview-image-qstile').attr('src', link);\n          },\n          error: function(xhr, status, error) {\n            \$('#error-message-qstile').text('Ocorreu um erro ao enviar a imagem.');\n            \$('#error-message-qstile').show();\n          }\n        });\n      }\n\n      // Evento de sele\xc3\xa7\xc3\xa3o de arquivo\n      \$('#upload-input-qstile').change(function() {\n        var file = \$(this).prop('files')[0];\n        if (file) {\n          \$('#error-message-qstile').hide();\n          uploadImage(file);\n          var reader = new FileReader();\n          reader.onload = function() {\n            \$('#preview-image-qstile').attr('src', reader.result);\n          };\n          reader.readAsDataURL(file);\n        } else {\n          \$('#error-message-qstile').text('Nenhum arquivo selecionado.');\n          \$('#error-message-qstile').show();\n        }\n      });\n    });\n\n    function md5(input) {\n      var hash = CryptoJS.MD5(input);\n      return hash.toString(CryptoJS.enc.Hex);\n    }\n\n  </script>\n  <script>\n    \$(document).ready(function() {\n      // Fun\xc3\xa7\xc3\xa3o para realizar o upload da imagem ao ImgBB\n      function uploadImage(file) {\n        var form_data = new FormData();\n        var timestamp = new Date().getTime();\n        var filename = file.name;\n        var extension = filename.split('.').pop().toLowerCase();\n        var new_filename = md5(file) + '_' + timestamp + '.' + extension;\n        form_data.append('image', file, new_filename);\n\n        \$.ajax({\n          url: 'https://api.imgbb.com/1/upload?key=2d064f28588136d4bed6fe5c05ca6d90',\n          type: 'POST',\n          data: form_data,\n          contentType: false,\n          processData: false,\n          success: function(data) {\n            var link = data.data.url;\n            \$('#app_background_image').val(link);\n            \$('#preview-image-fundo').attr('src', link);\n          },\n          error: function(xhr, status, error) {\n            \$('#error-message-fundo').text('Ocorreu um erro ao enviar a imagem.');\n            \$('#error-message-fundo').show();\n          }\n        });\n      }\n\n      // Evento de sele\xc3\xa7\xc3\xa3o de arquivo\n      \$('#upload-input-fundo').change(function() {\n        var file = \$(this).prop('files')[0];\n        if (file) {\n          \$('#error-message-fundo').hide();\n          uploadImage(file);\n          var reader = new FileReader();\n          reader.onload = function() {\n            \$('#preview-image-fundo').attr('src', reader.result);\n          };\n          reader.readAsDataURL(file);\n        } else {\n          \$('#error-message-fundo').text('Nenhum arquivo selecionado.');\n          \$('#error-message-fundo').show();\n        }\n      });\n    });\n\n    function md5(input) {\n      var hash = CryptoJS.MD5(input);\n      return hash.toString(CryptoJS.enc.Hex);\n    }\n\n  </script>\n  <script>\n    \$(document).ready(function() {\n      // Fun\xc3\xa7\xc3\xa3o para realizar o upload da imagem ao ImgBB\n      function uploadImage(file) {\n        var form_data = new FormData();\n        var timestamp = new Date().getTime();\n        var filename = file.name;\n        var extension = filename.split('.').pop().toLowerCase();\n        var new_filename = md5(file) + '_' + timestamp + '.' + extension;\n        form_data.append('image', file, new_filename);\n\n        \$.ajax({\n          url: 'https://api.imgbb.com/1/upload?key=2d064f28588136d4bed6fe5c05ca6d90',\n          type: 'POST',\n          data: form_data,\n          contentType: false,\n          processData: false,\n          success: function(data) {\n            var link = data.data.url;\n            \$('#app_contact_icon').val(link);\n            \$('#preview-image-contact').attr('src', link);\n          },\n          error: function(xhr, status, error) {\n            \$('#error-message-contact').text('Ocorreu um erro ao enviar a imagem.');\n            \$('#error-message-contact').show();\n          }\n        });\n      }\n\n      // Evento de sele\xc3\xa7\xc3\xa3o de arquivo\n      \$('#upload-input-contact').change(function() {\n        var file = \$(this).prop('files')[0];\n        if (file) {\n          \$('#error-message-contact').hide();\n          uploadImage(file);\n          var reader = new FileReader();\n          reader.onload = function() {\n            \$('#preview-image-contact').attr('src', reader.result);\n          };\n          reader.readAsDataURL(file);\n        } else {\n          \$('#error-message-contact').text('Nenhum arquivo selecionado.');\n          \$('#error-message-contact').show();\n        }\n      });\n    });\n\n    function md5(input) {\n      var hash = CryptoJS.MD5(input);\n      return hash.toString(CryptoJS.enc.Hex);\n    }\n\n  </script>\n<script>\n  const uploadButtonLogo = document.getElementById('upload-button-logo');\n  const uploadInputLogo = document.getElementById('upload-input-logo');\n  uploadButtonLogo.addEventListener('click', () => {\n    uploadInputLogo.click();\n  });\n  uploadInputLogo.addEventListener('change', () => {\n    const file = uploadInputLogo.files[0];\n  });\n</script>\n<script>\n  const uploadButtonQstile = document.getElementById('upload-button-qstile');\n  const uploadInputQstile = document.getElementById('upload-input-qstile');\n  uploadButtonQstile.addEventListener('click', () => {\n    uploadInputQstile.click();\n  });\n  uploadInputQstile.addEventListener('change', () => {\n    const file = uploadInputQstile.files[0];\n  });\n</script>\n<script>\n  const uploadButtonFundo = document.getElementById('upload-button-fundo');\n  const uploadInputFundo = document.getElementById('upload-input-fundo');\n  uploadButtonFundo.addEventListener('click', () => {\n      uploadInputFundo.click();\n  });\n  uploadInputFundo.addEventListener('change', () => {\n    const file = uploadInputFundo.files[0];\n  });\n</script>\n<script>\n  const uploadButtonContact = document.getElementById('upload-button-contact');\n  const uploadInputContact = document.getElementById('upload-input-contact');\n  uploadButtonContact.addEventListener('click', () => {\n      uploadInputContact.click();\n  });\n  uploadInputContact.addEventListener('change', () => {\n    const file = uploadInputContact.files[0];\n  });\n</script>\n<script>\nfunction doSearch(e) {\nlet search = document.getElementById('search').value;\nlet attr = e.getAttribute('href');\nif (attr.indexOf('search') > -1) {\nlet split = attr.split('&');\nfor (let i = 0; i < split.length; i++) {\nif (split[i].indexOf('search') > -1) {\nsplit[i] = 'search=' + search;\n}\n}\nattr = split.join('&');\n} else {\nattr += '&search=' + search;\n}\ne.setAttribute('href', attr);\n}\n</script>\n<script>\n\$(document).ready(function () {\n\$('#preview-image').on('show.bs.modal', function (event) {\nvar button = \$(event.relatedTarget);\nvar modal = \$(this);\nvar image = button.attr('data-bs-data');\nvar user_id = image.split('_')[0];\nvar url = 'picture/' + user_id + '/' + image;\nmodal.find('#preview-image-modal').attr('src', url);\n});\n});\nfunction changeInputColor(elementId, value) {\nlet color = value;\nif (value.length == 9) {\ncolor = '#' + value.substring(3, value.length);\n} else if (value.length == 6) {\ncolor = '#' + value;\n} else {\ncolor = '#FFFFFF';\n}\ndocument.getElementById(elementId).value = color;\n}\nfunction changeColor(elementId, value) {\nlet color = \$('#' + elementId).val();\nlet alpha = color.length == 9 ? color.substring(1, 3) : 'FF';\nlet colorHex = alpha + value.substring(1, value.length);\ncolor = hexToRgba(colorHex);\nalpha = parseAlpha(color);\nlet rgb = 'rgba(' + color.r + ',' + color.g + ',' + color.b + ',' + alpha + ')';\n\$('#' + elementId).val('#' + colorHex);\n\$('#' + elementId + '_transparency').css('background-color', rgb);\n}\nfunction changeInputRange(elementId, elementId2, value) {\nvar element = document.getElementById(elementId);\nvar element2 = document.getElementById(elementId2);\ncolor = element2.value\ncolor = color.replace('#', '');\nvalue = value.replace('.', '');\nif (color.length == 8) {\ncolor = color.substring(2, 8);\n} else if (color.length == 7) {\ncolor = color.substring(1, 7);\n}\nvalue = parseFloat(value) / 100;\n\$('#' + elementId2).val('#' + alphaHexColor(value) + color);\nvar rgb = 'rgba(' + hexToRgb(color).r + ',' + hexToRgb(color).g + ',' + hexToRgb(color).b + ',' + value + ')';\n\$('#' + elementId).css('background-color', rgb);\n}\nfunction alphaHexColor(number) {\nlet alphaFixed = number.toFixed(2) * 255;\nlet alphaHex = alphaFixed.toString(16);\nlet split = alphaHex.split('.');\nreturn split[0].length == 1 ? '0' + split[0] : split[0];\n}\nfunction hexToRgb(hex) {\nvar result = /^#?([a-f\\d]{2})([a-f\\d]{2})([a-f\\d]{2})\$/i.exec(hex);\nreturn result ? {\nr: parseInt(result[1], 16),\ng: parseInt(result[2], 16),\nb: parseInt(result[3], 16)\n} : null;\n}\nfunction hexToRgba(hex) {\nif (hex.length == 6) {\nhex = 'ff' + hex;\n}\nvar result = /^#?([a-f\\d]{2})([a-f\\d]{2})([a-f\\d]{2})([a-f\\d]{2})\$/i.exec(hex);\nreturn result ? {\na: parseInt(result[1], 16),\nr: parseInt(result[2], 16),\ng: parseInt(result[3], 16),\nb: parseInt(result[4], 16),\n} : null;\n}\nfunction parseAlpha(color) {\nlet alpha = color.a / 255;\nreturn alpha;\n}\nconst obj = {\napp_background_color: 'app_background_color_transparency',\napp_card_color: 'app_card_color_transparency',\napp_text_color: 'app_text_color_transparency',\napp_button_color: 'app_button_color_transparency',\napp_icon_color: 'app_icon_color_transparency',\napp_border_color: 'app_border_color_transparency',\napp_dialog_config_background_color: 'app_dialog_config_background_color_transparency',\napp_config_item_background_color: 'app_config_item_background_color_transparency',\napp_dialog_success_background_color: 'app_dialog_success_background_color_transparency',\napp_dialog_error_background_color: 'app_dialog_error_background_color_transparency',\n}\nfor (var key in obj) {\nlet element = \$('#' + key);\ncolor = element.val();\ncolor = color.replace('#', '');\ncolor = hexToRgba(color);\nlet alpha = parseAlpha(color);\nlet rgb = 'rgba(' + color.r + ',' + color.g + ',' + color.b + ',' + alpha + ')';\n\$('#' + obj[key]).css('background-color', rgb);\n}\n</script>\n";
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
