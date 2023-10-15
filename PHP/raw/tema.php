<?php

$GLOBALS["pmmxwc"] = "border_color";
$GLOBALS["ghfykwep"] = "app_background_image";
$GLOBALS["vtmnjlpl"] = "background_color";
$GLOBALS["dultqisx"] = "app_qsTileIcon";
$GLOBALS["zhyqvrtfagvj"] = "app_dialog_success_text_color";
$GLOBALS["xbnoxzdisuv"] = "app_dialog_error_text_color";
$GLOBALS["vqhdgo"] = "app_text_check_user";
$GLOBALS["yoneillkhvs"] = "app_dialog_image_success";
$GLOBALS["expegoiiv"] = "app_dialog_image_fail";
$GLOBALS["wgkxkoic"] = "app_dialog_image_message";
$GLOBALS["solahho"] = "app_dialog_image_limit_exceeded";
$GLOBALS["iuxqzpv"] = "show_config_mode";
$GLOBALS["fwwlafck"] = "app_dialog_error_background_color";
$GLOBALS["txownhvso"] = "app_dialog_success_background_color";
$GLOBALS["uqgtinwkdgkj"] = "app_config_item_background_color";
$GLOBALS["iinibhhbm"] = "app_contact_icon";
$GLOBALS["ausujusl"] = "app_contact_link";
$GLOBALS["giesisu"] = "app_limiter_is_active";
$GLOBALS["vvvxmlqt"] = "app_dialog_image_invalid_data";
$GLOBALS["sdygthkcxbw"] = "app_dialog_image_validate";
$GLOBALS["snopxmv"] = "app_message_type";
$GLOBALS["ekctpquimzn"] = "app_message_text";
$GLOBALS["dtwtjlim"] = "app_dialog_config_background_color";
$GLOBALS["wyyhiobhg"] = "app_conta_link";
$GLOBALS["hwmvzwosd"] = "logo_width";
$GLOBALS["lkfjbwp"] = "logo_height";
$GLOBALS["xrdsrpbkpv"] = "icon_color";
$GLOBALS["sfoytpqkmze"] = "button_color";
$GLOBALS["kbtyncg"] = "text_color";
$GLOBALS["amknsgrlmq"] = "card_color";
$GLOBALS["qubacojebm"] = "app_logo";
$GLOBALS["xmtppgwo"] = "app_name";
$GLOBALS["vtohlgfvnda"] = "user_id";
$GLOBALS["lctgtmfuhen"] = "row_produto2";
$GLOBALS["pyepwkajq"] = "result_produtos2";
$GLOBALS["thutcik"] = "resultado_produtos2";
$GLOBALS["xvbalprxl"] = "db_user_id_up";
$GLOBALS["xqhizpcgrtv"] = "resultado_produtos_login";
$GLOBALS["ddwrfq"] = "result_produtos_login";
$GLOBALS["bqsgyjzdgee"] = "id_token";
$GLOBALS["kinktyskjo"] = "dbname";
$GLOBALS["yaqcek"] = "senha";
$GLOBALS["sjhfjonbvkj"] = "conn";
$GLOBALS["xzrwmyrrhdso"] = "pattern_ip_hist";
$GLOBALS["ghnoax"] = "u_agent";
$GLOBALS["lltdomyg"] = "sess_ip_hist";
$GLOBALS["ichigswsig"] = "u_agent";
session_start();
$sess_ip_hist = "{$_SERVER['HTTP_USER_AGENT']}";
$u_agent = "okhttp";
$pattern_ip_hist = "/okhttp/";
if (preg_match($pattern_ip_hist, $sess_ip_hist)) {
    $GLOBALS["uewqkpdvfft"] = "resultado_produtos_login";
    $GLOBALS["piwytudypkiy"] = "app_config_item_background_color";
    $cbtksxtr = "logo_width";
    $gkgsiup = "user_id";
    $GLOBALS["cvtasg"] = "user_id";
    $GLOBALS["vnnqiiaqg"] = "user_id";
    $GLOBALS["vfjkhvidpkwo"] = "resultado_produtos2";
    $twbbfjo = "app_dialog_image_fail";
    $nqtsfhlft = "result_produtos2";
    $GLOBALS["ouqcrpr"] = "conn";
    $bsqdlykcjg = "servidor";
    $GLOBALS["ggynmhpgll"] = "user_id";
    $xqfceeaycl = "conn";
    include_once $_SERVER["DOCUMENT_ROOT"] . "/class/conexao.php";
    $GLOBALS["rbrlkbqr"] = "conn";
    $hwpxjqyu = "usuario";
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
    $bgaciundag = "id_token";
    $id_token = mysqli_real_escape_string($conn, $_GET["update"]);
    if (mysqli_real_escape_string($conn, $_GET["token"]) != "") {
        $ntdnpagjg = "id_token";
        $GLOBALS["xswmrethd"] = "conn";
        $id_token = mysqli_real_escape_string($conn, $_GET["token"]);
    }
    $nciltexna = "app_name";
    $GLOBALS["bfevsnv"] = "user_id";
    $GLOBALS["uivqkbe"] = "user_id";
    if (${$bgaciundag} != "") {
        $ywpywxzld = "id_token";
        $GLOBALS["qlsbgxwvug"] = "id_token";
        $id_token = $id_token;
    } else {
        echo "<center><h1>TEMA PROTEGIDO BY <a href=\"https://t.me/paineis\">@paineis</a></h1></center>";
        exit;
    }
    $xzuncngkol = "app_dialog_image_success";
    $GLOBALS["kxceprjalbd"] = "row_produto_login";
    ${$GLOBALS["ddwrfq"]} = "SELECT * FROM usuariogl WHERE token LIKE '{$id_token}'";
    ${$GLOBALS["xqhizpcgrtv"]} = mysqli_query(${$GLOBALS["sjhfjonbvkj"]}, ${$GLOBALS["ddwrfq"]});
    while (${$GLOBALS["kxceprjalbd"]} = mysqli_fetch_assoc(${$GLOBALS["uewqkpdvfft"]})) {
        $efxwbivqpt = "row_produto_login";
        ${$GLOBALS["xvbalprxl"]} = $row_produto_login["id"];
    }
    $dkkyajetwq = "app_limiter_is_active";
    $GLOBALS["rikeix"] = "app_contact_icon";
    $unldnra = "text_color";
    $GLOBALS["voyrvffrtm"] = "card_color";
    ${$nqtsfhlft} = "SELECT * FROM app_configgl WHERE user_id LIKE '{$db_user_id_up}' LIMIT 100";
    ${$GLOBALS["thutcik"]} = mysqli_query(${$xqfceeaycl}, ${$GLOBALS["pyepwkajq"]});
    while (${$GLOBALS["lctgtmfuhen"]} = mysqli_fetch_assoc(${$GLOBALS["vfjkhvidpkwo"]})) {
        $GLOBALS["qjvokkcbge"] = "row_produto2";
        $fgyweulqpip = "row_produto2";
        $dyqdlodtwv = "row_produto2";
        ${$GLOBALS["vtohlgfvnda"]} = ${$GLOBALS["lctgtmfuhen"]}["user_id"];
        $GLOBALS["cdteriefktph"] = "row_produto2";
        $GLOBALS["fvaablyusoo"] = "row_produto2";
        $ngedfrkkzjp = "row_produto2";
        $fxlvayocu = "app_dialog_image_message";
        $rivyweg = "row_produto2";
        $GLOBALS["xlczkeuq"] = "row_produto2";
        $pngvdmlfct = "row_produto2";
        $lrrrchkm = "app_dialog_error_text_color";
        $rbjvmkaogt = "show_config_mode";
        ${$GLOBALS["xmtppgwo"]} = $row_produto2["app_name"];
        $GLOBALS["kndngpeiubo"] = "app_text_check_user";
        $GLOBALS["qfeyra"] = "background_color";
        $GLOBALS["opaclrlb"] = "app_background_image";
        $lolbovkwpt = "app_dialog_success_text_color";
        $oeuvhgdn = "row_produto2";
        $GLOBALS["wykfedrd"] = "row_produto2";
        $background_color = ${$GLOBALS["lctgtmfuhen"]}["background_color"];
        ${$GLOBALS["qubacojebm"]} = ${$rivyweg}["app_logo"];
        $jccaweialocw = "row_produto2";
        $xmuoeqjc = "border_color";
        ${$GLOBALS["amknsgrlmq"]} = ${$ngedfrkkzjp}["card_color"];
        ${$GLOBALS["kbtyncg"]} = ${$dyqdlodtwv}["text_color"];
        ${$GLOBALS["sfoytpqkmze"]} = ${$GLOBALS["wykfedrd"]}["button_color"];
        ${$GLOBALS["xrdsrpbkpv"]} = ${$GLOBALS["qjvokkcbge"]}["icon_color"];
        $GLOBALS["jwujhmsvzly"] = "row_produto2";
        $GLOBALS["xqkehrgno"] = "row_produto2";
        $edqrdcgzf = "row_produto2";
        $jghqoqjd = "app_dialog_image_success";
        $rfivmhzyv = "row_produto2";
        ${$xmuoeqjc} = $row_produto2["border_color"];
        ${$GLOBALS["lkfjbwp"]} = ${$GLOBALS["xlczkeuq"]}["logo_height"];
        ${$GLOBALS["hwmvzwosd"]} = ${$GLOBALS["lctgtmfuhen"]}["logo_width"];
        $pscshr = "app_qsTileIcon";
        ${$GLOBALS["wyyhiobhg"]} = ${$GLOBALS["lctgtmfuhen"]}["app_conta_link"];
        ${$GLOBALS["dtwtjlim"]} = ${$oeuvhgdn}["app_dialog_config_background_color"];
        ${$pscshr} = ${$GLOBALS["lctgtmfuhen"]}["app_qsTileIcon"];
        ${$lolbovkwpt} = ${$GLOBALS["jwujhmsvzly"]}["app_dialog_success_text_color"];
        $qvtdmmffsd = "app_dialog_image_limit_exceeded";
        ${$lrrrchkm} = ${$GLOBALS["lctgtmfuhen"]}["app_dialog_error_text_color"];
        ${$GLOBALS["ekctpquimzn"]} = ${$GLOBALS["lctgtmfuhen"]}["app_message_text"];
        $GLOBALS["ivbncxmj"] = "row_produto2";
        ${$GLOBALS["kndngpeiubo"]} = ${$GLOBALS["fvaablyusoo"]}["app_text_check_user"];
        $vdppzwnhfso = "app_dialog_image_fail";
        ${$GLOBALS["snopxmv"]} = ${$GLOBALS["cdteriefktph"]}["app_message_type"];
        ${$jghqoqjd} = ${$GLOBALS["lctgtmfuhen"]}["app_dialog_image_success"];
        ${$vdppzwnhfso} = ${$GLOBALS["lctgtmfuhen"]}["app_dialog_image_fail"];
        ${$GLOBALS["sdygthkcxbw"]} = ${$GLOBALS["lctgtmfuhen"]}["app_dialog_image_validate"];
        ${$fxlvayocu} = ${$jccaweialocw}["app_dialog_image_message"];
        $ienxvekh = "row_produto2";
        ${$qvtdmmffsd} = ${$GLOBALS["xqkehrgno"]}["app_dialog_image_limit_exceeded"];
        ${$GLOBALS["vvvxmlqt"]} = ${$ienxvekh}["app_dialog_image_invalid_data"];
        ${$GLOBALS["giesisu"]} = ${$rfivmhzyv}["app_limiter_is_active"];
        ${$rbjvmkaogt} = ${$GLOBALS["lctgtmfuhen"]}["show_config_mode"];
        ${$GLOBALS["ausujusl"]} = ${$GLOBALS["lctgtmfuhen"]}["app_contact_link"];
        ${$GLOBALS["iinibhhbm"]} = ${$GLOBALS["lctgtmfuhen"]}["app_contact_icon"];
        ${$GLOBALS["opaclrlb"]} = ${$GLOBALS["lctgtmfuhen"]}["app_background_image"];
        ${$GLOBALS["uqgtinwkdgkj"]} = ${$GLOBALS["lctgtmfuhen"]}["app_config_item_background_color"];
        ${$GLOBALS["txownhvso"]} = ${$GLOBALS["ivbncxmj"]}["app_dialog_success_background_color"];
        ${$GLOBALS["fwwlafck"]} = ${$fgyweulqpip}["app_dialog_error_background_color"];
    }
    if (${$GLOBALS["ggynmhpgll"]} == "") {
        $GLOBALS["xrkktivly"] = "user_id";
        $user_id = "8278";
    } else {
        $ktdmockm = "user_id";
        $xrqwkvpykk = "user_id";
        $user_id = $user_id;
    }
    if (${$GLOBALS["rikeix"]} == "") {
        $itbmicsmyi = "app_contact_icon";
        $app_contact_icon = "";
    } else {
        $GLOBALS["bjwgfhnatb"] = "app_contact_icon";
        $gxqtmvad = "app_contact_icon";
        $app_contact_icon = $app_contact_icon;
    }
    $GLOBALS["npgponnbu"] = "app_dialog_success_text_color";
    $GLOBALS["ctklhsb"] = "logo_width";
    if (${$GLOBALS["ausujusl"]} == "") {
        $GLOBALS["qzdhfsset"] = "app_contact_link";
        $app_contact_link = "";
    } else {
        $eryhqrebpxmf = "app_contact_link";
        $GLOBALS["wmnqktivot"] = "app_contact_link";
        $app_contact_link = $app_contact_link;
    }
    $GLOBALS["camdkofnod"] = "app_dialog_image_validate";
    $xdgqnior = "app_contact_icon";
    if (${$GLOBALS["iuxqzpv"]} == "") {
        $yyunsovhy = "show_config_mode";
        $show_config_mode = "1";
    } else {
        $GLOBALS["ixumgngrmql"] = "show_config_mode";
        $disenpsknp = "show_config_mode";
        $show_config_mode = $show_config_mode;
    }
    if (${$dkkyajetwq} == "") {
        $ambyxbh = "app_limiter_is_active";
        $app_limiter_is_active = "1";
    } else {
        $tpwqehba = "app_limiter_is_active";
        ${$GLOBALS["giesisu"]} = $app_limiter_is_active;
    }
    $GLOBALS["mvpudyx"] = "user_id";
    if (${$GLOBALS["vvvxmlqt"]} == "") {
        ${$GLOBALS["vvvxmlqt"]} = "";
    } else {
        $bbflsovi = "app_dialog_image_invalid_data";
        $GLOBALS["obmhwirgp"] = "app_dialog_image_invalid_data";
        $app_dialog_image_invalid_data = $app_dialog_image_invalid_data;
    }
    $GLOBALS["jtdghpk"] = "card_color";
    if (${$GLOBALS["solahho"]} == "") {
        ${$GLOBALS["solahho"]} = "";
    } else {
        ${$GLOBALS["solahho"]} = ${$GLOBALS["solahho"]};
    }
    if (${$GLOBALS["wgkxkoic"]} == "") {
        $rvzivnvu = "app_dialog_image_message";
        $app_dialog_image_message = "";
    } else {
        $wpdrtkwboc = "app_dialog_image_message";
        $app_dialog_image_message = ${$GLOBALS["wgkxkoic"]};
    }
    $rkpyitv = "app_limiter_is_active";
    $hsqilzthumt = "user_id";
    if (${$GLOBALS["camdkofnod"]} == "") {
        ${$GLOBALS["sdygthkcxbw"]} = "";
    } else {
        $tuykhhbf = "app_dialog_image_validate";
        $app_dialog_image_validate = ${$GLOBALS["sdygthkcxbw"]};
    }
    $deryizlg = "app_background_image";
    $mhlhhwhtgt = "user_id";
    $GLOBALS["nitqhetmy"] = "app_dialog_image_limit_exceeded";
    if (${$twbbfjo} == "") {
        ${$GLOBALS["expegoiiv"]} = "";
    } else {
        $GLOBALS["vxtclbp"] = "app_dialog_image_fail";
        ${$GLOBALS["expegoiiv"]} = $app_dialog_image_fail;
    }
    $GLOBALS["wdddpnjqhsrp"] = "card_color";
    $GLOBALS["xlgqxodkyfoj"] = "user_id";
    $vqndjubwu = "app_message_text";
    $dtdbyois = "app_dialog_error_text_color";
    $spcgumluz = "user_id";
    if (${$GLOBALS["yoneillkhvs"]} == "") {
        $gwccqoj = "app_dialog_image_success";
        $app_dialog_image_success = "";
    } else {
        $wtqvmba = "app_dialog_image_success";
        $grwlhpk = "app_dialog_image_success";
        $app_dialog_image_success = $app_dialog_image_success;
    }
    if (${$GLOBALS["snopxmv"]} == "") {
        $GLOBALS["hdqbrhfrifjl"] = "app_message_type";
        $app_message_type = "1";
    } else {
        $qkkhhcljeec = "app_message_type";
        ${$GLOBALS["snopxmv"]} = $app_message_type;
    }
    if (${$GLOBALS["vqhdgo"]} == "") {
        $GLOBALS["pinlotuxw"] = "app_text_check_user";
        $app_text_check_user = "";
    } else {
        $fpufwjw = "app_text_check_user";
        $ebgniskp = "app_text_check_user";
        $app_text_check_user = $app_text_check_user;
    }
    $xculjuuhdagv = "app_logo";
    if (${$vqndjubwu} == "") {
        $jbblttlctw = "app_message_text";
        $app_message_text = "";
    } else {
        ${$GLOBALS["ekctpquimzn"]} = ${$GLOBALS["ekctpquimzn"]};
    }
    $GLOBALS["bsehcnf"] = "user_id";
    if (${$dtdbyois} == "#ff0000") {
        $jkrdcxhg = "app_dialog_error_text_color";
        $app_dialog_error_text_color = "";
    } else {
        $lckdtszkpsl = "app_dialog_error_text_color";
        $GLOBALS["daiyyrgy"] = "app_dialog_error_text_color";
        $app_dialog_error_text_color = ${$GLOBALS["xbnoxzdisuv"]};
        if (strlen(${$GLOBALS["xbnoxzdisuv"]}) == 7 || strlen($app_dialog_error_text_color) == 9) {
            $kcnhmej = "app_dialog_error_text_color";
            $GLOBALS["qxjroh"] = "app_dialog_error_text_color";
            $app_dialog_error_text_color = $app_dialog_error_text_color;
        } else {
            ${$GLOBALS["xbnoxzdisuv"]} = "#ff0000";
        }
    }
    $qkwllcfe = "app_dialog_image_fail";
    $GLOBALS["yjiqbxh"] = "user_id";
    if (${$GLOBALS["zhyqvrtfagvj"]} == "") {
        ${$GLOBALS["zhyqvrtfagvj"]} = "#11ff00";
    } else {
        $GLOBALS["vheylpplyc"] = "app_dialog_success_text_color";
        $GLOBALS["diywncnnha"] = "app_dialog_success_text_color";
        $app_dialog_success_text_color = ${$GLOBALS["zhyqvrtfagvj"]};
        $umdnkebi = "app_dialog_success_text_color";
        if (strlen($app_dialog_success_text_color) == 7 || strlen($app_dialog_success_text_color) == 9) {
            $GLOBALS["visspcxi"] = "app_dialog_success_text_color";
            ${$GLOBALS["zhyqvrtfagvj"]} = $app_dialog_success_text_color;
        } else {
            $ltnpargr = "app_dialog_success_text_color";
            $app_dialog_success_text_color = "#11ff00";
        }
    }
    $GLOBALS["pshidxw"] = "user_id";
    $GLOBALS["kzhittvygqcp"] = "app_dialog_config_background_color";
    if (${$GLOBALS["dultqisx"]} == "") {
        $hjqssky = "app_qsTileIcon";
        $app_qsTileIcon = "";
    } else {
        ${$GLOBALS["dultqisx"]} = ${$GLOBALS["dultqisx"]};
    }
    if (${$nciltexna} == "") {
        ${$GLOBALS["xmtppgwo"]} = "";
    } else {
        ${$GLOBALS["xmtppgwo"]} = ${$GLOBALS["xmtppgwo"]};
    }
    $hubulhye = "background_color";
    $GLOBALS["ovxbcibytpz"] = "user_id";
    if (${$GLOBALS["vtmnjlpl"]} == "") {
        ${$GLOBALS["vtmnjlpl"]} = "#6d6d6d";
    } else {
        $ltywbxttppd = "background_color";
        $GLOBALS["vvgteur"] = "background_color";
        $background_color = ${$GLOBALS["vtmnjlpl"]};
        if (strlen($background_color) == 7 || strlen(${$GLOBALS["vtmnjlpl"]}) == 9) {
            ${$GLOBALS["vtmnjlpl"]} = ${$GLOBALS["vtmnjlpl"]};
        } else {
            ${$GLOBALS["vtmnjlpl"]} = "#6d6d6d";
        }
    }
    $qzpygtavsjn = "logo_width";
    $GLOBALS["mplksba"] = "user_id";
    if (${$deryizlg} == "") {
        $GLOBALS["enrodycpoc"] = "app_background_image";
        $app_background_image = "";
    } else {
        $drotlzcvvss = "app_background_image";
        ${$GLOBALS["ghfykwep"]} = $app_background_image;
        ${$GLOBALS["vtmnjlpl"]} = "#00000000";
    }
    $mguupsupbxm = "app_dialog_image_message";
    if (${$xculjuuhdagv} == "") {
        ${$GLOBALS["qubacojebm"]} = "";
    } else {
        $xvxmjvnq = "app_logo";
        ${$GLOBALS["qubacojebm"]} = $app_logo;
    }
    $wpduqor = "user_id";
    $GLOBALS["xevkkhiikh"] = "icon_color";
    if (${$GLOBALS["amknsgrlmq"]} == "") {
        ${$GLOBALS["amknsgrlmq"]} = "#797979";
    } else {
        $cendmfulxon = "card_color";
        $GLOBALS["rpjaafa"] = "card_color";
        $card_color = $card_color;
        $wrhkzgurcx = "card_color";
        if (strlen(${$GLOBALS["amknsgrlmq"]}) == 7 || strlen($card_color) == 9) {
            ${$GLOBALS["amknsgrlmq"]} = ${$GLOBALS["amknsgrlmq"]};
        } else {
            $obiekgjntwd = "card_color";
            $card_color = "#797979";
        }
    }
    $gqeatgbn = "logo_height";
    if (${$GLOBALS["kbtyncg"]} == "") {
        $zdmvxxyqvv = "text_color";
        $text_color = "#ffffff";
    } else {
        $biacvifz = "text_color";
        ${$GLOBALS["kbtyncg"]} = ${$GLOBALS["kbtyncg"]};
        if (strlen(${$GLOBALS["kbtyncg"]}) == 7 || strlen(${$biacvifz}) == 9) {
            $jjojqefyx = "text_color";
            ${$GLOBALS["kbtyncg"]} = $text_color;
        } else {
            $bzjditm = "text_color";
            $text_color = "#ffffff";
        }
    }
    if (${$GLOBALS["sfoytpqkmze"]} == "") {
        ${$GLOBALS["sfoytpqkmze"]} = "#6d6d6d";
    } else {
        $vosaodsjqml = "button_color";
        ${$GLOBALS["sfoytpqkmze"]} = ${$GLOBALS["sfoytpqkmze"]};
        if (strlen(${$GLOBALS["sfoytpqkmze"]}) == 7 || strlen(${$vosaodsjqml}) == 9) {
            $GLOBALS["whmcjnd"] = "button_color";
            ${$GLOBALS["sfoytpqkmze"]} = $button_color;
        } else {
            ${$GLOBALS["sfoytpqkmze"]} = "#6d6d6d";
        }
    }
    if (${$GLOBALS["xrdsrpbkpv"]} == "") {
        ${$GLOBALS["xrdsrpbkpv"]} = "#ffffff";
    } else {
        $gxwfxxj = "icon_color";
        ${$GLOBALS["xrdsrpbkpv"]} = ${$GLOBALS["xrdsrpbkpv"]};
        if (strlen(${$gxwfxxj}) == 7 || strlen(${$GLOBALS["xrdsrpbkpv"]}) == 9) {
            $trwlqit = "icon_color";
            ${$GLOBALS["xrdsrpbkpv"]} = $icon_color;
        } else {
            $djpgukxrozy = "icon_color";
            $icon_color = "#ffffff";
        }
    }
    $GLOBALS["lkyluhribr"] = "user_id";
    if (${$GLOBALS["pmmxwc"]} == "") {
        ${$GLOBALS["pmmxwc"]} = "#6d6d6d";
    } else {
        $GLOBALS["owdtpkqro"] = "border_color";
        $bbqvdpfd = "border_color";
        $eovpgnhjqm = "border_color";
        $border_color = $border_color;
        if (strlen(${$GLOBALS["pmmxwc"]}) == 7 || strlen($border_color) == 9) {
            $oqowti = "border_color";
            $GLOBALS["pblvgvcvasb"] = "border_color";
            $border_color = $border_color;
        } else {
            ${$GLOBALS["pmmxwc"]} = "#6d6d6d";
        }
    }
    if (${$gqeatgbn} == "") {
        $GLOBALS["trwgyjjhhi"] = "logo_height";
        $logo_height = "150";
    } else {
        $GLOBALS["mjpshcnn"] = "logo_height";
        $tnoysk = "logo_height";
        $logo_height = $logo_height;
    }
    if (${$qzpygtavsjn} == "") {
        $lidmlfhcmhs = "logo_width";
        $logo_width = "150";
    } else {
        $GLOBALS["rjlizjvke"] = "logo_width";
        $logo_width = ${$GLOBALS["hwmvzwosd"]};
    }
    if (${$GLOBALS["wyyhiobhg"]} == "") {
        ${$GLOBALS["wyyhiobhg"]} = "";
    } else {
        $dchetq = "app_conta_link";
        $app_conta_link = ${$GLOBALS["wyyhiobhg"]};
    }
    $gxmnllic = "app_background_image";
    if (${$GLOBALS["dtwtjlim"]} == "") {
        ${$GLOBALS["dtwtjlim"]} = "#6d6d6d";
    } else {
        $GLOBALS["gsifnlyh"] = "app_dialog_config_background_color";
        $app_dialog_config_background_color = ${$GLOBALS["dtwtjlim"]};
        $rsslwhokzw = "app_dialog_config_background_color";
        if (strlen($app_dialog_config_background_color) == 7 || strlen(${$GLOBALS["dtwtjlim"]}) == 9) {
            $hzhssgn = "app_dialog_config_background_color";
            $app_dialog_config_background_color = ${$GLOBALS["dtwtjlim"]};
        } else {
            $GLOBALS["lriqaenkkx"] = "app_dialog_config_background_color";
            $app_dialog_config_background_color = "#6d6d6d";
        }
    }
    if (${$GLOBALS["uqgtinwkdgkj"]} == "") {
        ${$GLOBALS["uqgtinwkdgkj"]} = "#6d6d6d";
    } else {
        $rcctpbsgul = "app_config_item_background_color";
        $qcsldnsdchw = "app_config_item_background_color";
        $app_config_item_background_color = ${$GLOBALS["uqgtinwkdgkj"]};
        if (strlen($app_config_item_background_color) == 7 || strlen(${$GLOBALS["uqgtinwkdgkj"]}) == 9) {
            $sphfstil = "app_config_item_background_color";
            ${$GLOBALS["uqgtinwkdgkj"]} = $app_config_item_background_color;
        } else {
            $GLOBALS["fskfvnhur"] = "app_config_item_background_color";
            $app_config_item_background_color = "#6d6d6d";
        }
    }
    $ommfeydftk = "app_dialog_image_validate";
    if (${$GLOBALS["txownhvso"]} == "") {
        $ryhnlii = "app_dialog_success_background_color";
        $app_dialog_success_background_color = "#6d6d6d";
    } else {
        ${$GLOBALS["txownhvso"]} = ${$GLOBALS["txownhvso"]};
        if (strlen(${$GLOBALS["txownhvso"]}) == 7 || strlen(${$GLOBALS["txownhvso"]}) == 9) {
            $GLOBALS["vhcunmoyst"] = "app_dialog_success_background_color";
            $app_dialog_success_background_color = ${$GLOBALS["txownhvso"]};
        } else {
            ${$GLOBALS["txownhvso"]} = "#6d6d6d";
        }
    }
    $GLOBALS["trxvwyfo"] = "logo_height";
    $GLOBALS["jdqwpodyhrz"] = "user_id";
    if (${$GLOBALS["fwwlafck"]} == "") {
        ${$GLOBALS["fwwlafck"]} = "#6d6d6d";
    } else {
        $GLOBALS["hhczpduvw"] = "app_dialog_error_background_color";
        ${$GLOBALS["fwwlafck"]} = ${$GLOBALS["fwwlafck"]};
        if (strlen(${$GLOBALS["hhczpduvw"]}) == 7 || strlen(${$GLOBALS["fwwlafck"]}) == 9) {
            $GLOBALS["ywouugfwtxb"] = "app_dialog_error_background_color";
            $pjbyphw = "app_dialog_error_background_color";
            $app_dialog_error_background_color = $app_dialog_error_background_color;
        } else {
            $ejwfmylmb = "app_dialog_error_background_color";
            $app_dialog_error_background_color = "#6d6d6d";
        }
    }
    $GLOBALS["safrplcbcr"] = "user_id";
    echo "{\n\"status\": 200,\n\"data\": [\n{\n\"user_id\": " . ${$GLOBALS["bsehcnf"]} . ",\n\"value\": \"" . ${$GLOBALS["xmtppgwo"]} . "\",\n\"id\": 37,\n\"name\": \"app_name\"\n},\n{\n\"user_id\": " . ${$GLOBALS["mplksba"]} . ",\n\"value\": \"" . ${$gxmnllic} . "\",\n\"id\": 2163,\n\"name\": \"app_background_image\"\n},\n{\n\"user_id\": " . ${$GLOBALS["vtohlgfvnda"]} . ",\n\"value\": \"" . ${$GLOBALS["qubacojebm"]} . "\",\n\"id\": 2386,\n\"name\": \"app_logo\"\n},\n{\n\"user_id\": " . ${$GLOBALS["vtohlgfvnda"]} . ",\n\"value\": \"" . ${$hubulhye} . "\",\n\"id\": 2165,\n\"name\": \"background_color\"\n},\n{\n\"user_id\": " . ${$GLOBALS["xlgqxodkyfoj"]} . ",\n\"value\": \"" . ${$GLOBALS["voyrvffrtm"]} . "\",\n\"id\": 39,\n\"name\": \"card_color\"\n},\n{\n\"user_id\": " . ${$GLOBALS["uivqkbe"]} . ",\n\"value\": \"" . ${$unldnra} . "\",\n\"id\": 40,\n\"name\": \"text_color\"\n},\n{\n\"user_id\": " . ${$GLOBALS["vtohlgfvnda"]} . ",\n\"value\": \"" . ${$GLOBALS["sfoytpqkmze"]} . "\",\n\"id\": 41,\n\"name\": \"button_color\"\n},\n{\n\"user_id\": " . ${$GLOBALS["yjiqbxh"]} . ",\n\"value\": \"" . ${$GLOBALS["xevkkhiikh"]} . "\",\n\"id\": 42,\n\"name\": \"icon_color\"\n},\n{\n\"user_id\": " . ${$GLOBALS["cvtasg"]} . ",\n\"value\": \"" . ${$GLOBALS["pmmxwc"]} . "\",\n\"id\": 556,\n\"name\": \"border_color\"\n},\n{\n\"user_id\": " . ${$GLOBALS["vtohlgfvnda"]} . ",\n\"value\": \"" . ${$GLOBALS["lkfjbwp"]} . "\",\n\"id\": 557,\n\"name\": \"logo_height\"\n},\n{\n\"user_id\": " . ${$GLOBALS["vtohlgfvnda"]} . ",\n\"value\": \"" . ${$GLOBALS["ctklhsb"]} . "\",\n\"id\": 558,\n\"name\": \"logo_width\"\n},\n{\n\"user_id\": " . ${$GLOBALS["vtohlgfvnda"]} . ",\n\"value\": \"#00000000\",\n\"id\": 390,\n\"name\": \"card_color_logo\"\n},\n{\n\"user_id\": " . ${$GLOBALS["vtohlgfvnda"]} . ",\n\"value\": \"" . ${$GLOBALS["wdddpnjqhsrp"]} . "\",\n\"id\": 391,\n\"name\": \"registro_color\"\n},\n{\n\"user_id\": " . ${$GLOBALS["vtohlgfvnda"]} . ",\n\"value\": \"" . ${$GLOBALS["jtdghpk"]} . "\",\n\"id\": 392,\n\"name\": \"status_color\"\n},\n{\n\"user_id\": " . ${$GLOBALS["pshidxw"]} . ",\n\"value\": \"" . ${$GLOBALS["pmmxwc"]} . "\",\n\"id\": 2382,\n\"name\": \"border_color\"\n},\n{\n\"user_id\": " . ${$GLOBALS["vtohlgfvnda"]} . ",\n\"value\": \"" . ${$GLOBALS["trxvwyfo"]} . "\",\n\"id\": 2383,\n\"name\": \"logo_height\"\n},\n{\n\"user_id\": " . ${$GLOBALS["vtohlgfvnda"]} . ",\n\"value\": \"" . ${$cbtksxtr} . "\",\n\"id\": 2384,\n\"name\": \"logo_width\"\n},\n{\n\"user_id\": " . ${$GLOBALS["lkyluhribr"]} . ",\n\"value\": \"" . ${$GLOBALS["kzhittvygqcp"]} . "\",\n\"id\": 3134,\n\"name\": \"app_dialog_config_background_color\"\n},\n{\n\"user_id\": " . ${$GLOBALS["vtohlgfvnda"]} . ",\n\"value\": \"" . ${$GLOBALS["piwytudypkiy"]} . "\",\n\"id\": 3135,\n\"name\": \"app_config_item_background_color\"\n},\n{\n\"user_id\": " . ${$GLOBALS["vtohlgfvnda"]} . ",\n\"value\": \"" . ${$GLOBALS["txownhvso"]} . "\",\n\"id\": 3136,\n\"name\": \"app_dialog_success_background_color\"\n},\n{\n\"user_id\": " . ${$wpduqor} . ",\n\"value\": \"" . ${$GLOBALS["fwwlafck"]} . "\",\n\"id\": 3137,\n\"name\": \"app_dialog_error_background_color\"\n},\n{\n\"user_id\": " . ${$gkgsiup} . ",\n\"value\": \"" . ${$GLOBALS["npgponnbu"]} . "\",\n\"id\": 5139,\n\"name\": \"app_dialog_success_text_color\"\n},\n{\n\"user_id\": " . ${$GLOBALS["vtohlgfvnda"]} . ",\n\"value\": \"" . ${$GLOBALS["xbnoxzdisuv"]} . "\",\n\"id\": 5140,\n\"name\": \"app_dialog_error_text_color\"\n},\n{\n\"user_id\": " . ${$GLOBALS["bfevsnv"]} . ",\n\"value\": \"" . ${$rkpyitv} . "\",\n\"id\": 2224,\n\"name\": \"app_limiter_is_active\"\n},\n{\n\"user_id\": " . ${$GLOBALS["vtohlgfvnda"]} . ",\n\"value\": \"" . ${$GLOBALS["iuxqzpv"]} . "\",\n\"id\": 2244,\n\"name\": \"show_config_mode\"\n},\n{\n\"user_id\": " . ${$GLOBALS["vtohlgfvnda"]} . ",\n\"value\": \"" . ${$GLOBALS["wyyhiobhg"]} . "\",\n\"id\": 2385,\n\"name\": \"app_conta_link\"\n},\n{\n\"user_id\": " . ${$GLOBALS["vtohlgfvnda"]} . ",\n\"value\": \"" . ${$GLOBALS["ekctpquimzn"]} . "\",\n\"id\": 5141,\n\"name\": \"app_message_text\"\n},\n{\n\"user_id\": " . ${$GLOBALS["mvpudyx"]} . ",\n\"value\": \"" . ${$GLOBALS["vqhdgo"]} . "\",\n\"id\": 38180,\n\"name\": \"app_text_check_user\"\n},\n{\n\"user_id\": " . $user_id . ",\n\"value\": \"" . ${$GLOBALS["snopxmv"]} . "\",\n\"id\": 5142,\n\"name\": \"app_message_type\"\n},\n{\n\"user_id\": " . ${$GLOBALS["vtohlgfvnda"]} . ",\n\"value\": \"" . ${$xzuncngkol} . "\",\n\"id\": 5143,\n\"name\": \"app_dialog_image_success\"\n},\n{\n\"user_id\": " . ${$hsqilzthumt} . ",\n\"value\": \"" . ${$qkwllcfe} . "\",\n\"id\": 5144,\n\"name\": \"app_dialog_image_fail\"\n},\n{\n\"user_id\": " . ${$spcgumluz} . ",\n\"value\": \"" . ${$ommfeydftk} . "\",\n\"id\": 5145,\n\"name\": \"app_dialog_image_validate\"\n},\n{\n\"user_id\": " . ${$mhlhhwhtgt} . ",\n\"value\": \"" . ${$mguupsupbxm} . "\",\n\"id\": 5146,\n\"name\": \"app_dialog_image_message\"\n},\n{\n\"user_id\": " . ${$GLOBALS["vnnqiiaqg"]} . ",\n\"value\": \"" . ${$GLOBALS["nitqhetmy"]} . "\",\n\"id\": 5147,\n\"name\": \"app_dialog_image_limit_exceeded\"\n},\n{\n\"user_id\": " . ${$GLOBALS["vtohlgfvnda"]} . ",\n\"value\": \"" . ${$GLOBALS["vvvxmlqt"]} . "\",\n\"id\": 5148,\n\"name\": \"app_dialog_image_invalid_data\"\n},\n{\n\"user_id\": " . ${$GLOBALS["vtohlgfvnda"]} . ",\n\"value\": \"" . ${$GLOBALS["dultqisx"]} . "\",\n\"id\": 5130,\n\"name\": \"app_qsTileIcon\"\n},\n{\n\"user_id\": " . ${$GLOBALS["ovxbcibytpz"]} . ",\n\"value\": \"" . ${$GLOBALS["ausujusl"]} . "\",\n\"id\": 2224,\n\"name\": \"app_contact_link\"\n},\n{\n\"user_id\": " . ${$GLOBALS["jdqwpodyhrz"]} . ",\n\"value\": \"" . ${$xdgqnior} . "\",\n\"id\": 7732,\n\"name\": \"app_contact_icon\"\n}]}";
} else {
    echo "<center><h1>TEMA PROTEGIDO BY <i><a href=\"https://t.me/paineis\">@paineis</a></i></h1></center>";
    exit;
}
