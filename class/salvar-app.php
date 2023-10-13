<?php

$GLOBALS["reniusxnk"] = "app_dialog_image_invalid_data";
$GLOBALS["edibqkqmzu"] = "app_dialog_image_limit_exceeded";
$GLOBALS["sfwlwgtue"] = "app_dialog_image_message";
$ishwcfwllfn = "conn";
$GLOBALS["qvdvoahcff"] = "app_dialog_error_background_color";
$GLOBALS["btfsyqasrk"] = "app_dialog_image_fail";
$GLOBALS["bixbjlkboqmp"] = "app_dialog_success_background_color";
$GLOBALS["nnosqvugb"] = "server_state_slow";
$GLOBALS["vrkxesflgzme"] = "app_limiter_is_active";
$GLOBALS["shdtwlxye"] = "show_config_mode";
$GLOBALS["yronjfzs"] = "default_config_icon";
$GLOBALS["ydpsqqgbieg"] = "app_message_type";
$GLOBALS["rsmukcq"] = "app_message_text";
$GLOBALS["qtcofsgbvty"] = "app_dialog_image_validate";
$GLOBALS["drqjdvewdmj"] = "app_dialog_config_background_color";
$GLOBALS["kqduwe"] = "app_config_item_background_color";
$GLOBALS["iidmawefn"] = "app_dialog_image_success";
$GLOBALS["ordxzuzbylr"] = "app_dialog_success_text_color";
$GLOBALS["wgkrwuxes"] = "app_contact_link";
$GLOBALS["djdoxjvbf"] = "app_dialog_success_text_colo";
$GLOBALS["xghmqdsmyxg"] = "server_state_fast";
$GLOBALS["pvwrttolyg"] = "app_contact_icon";
$GLOBALS["gdwhlised"] = "app_background_image";
$GLOBALS["udqmyew"] = "button_color";
$GLOBALS["msfpowtfzce"] = "card_color";
$GLOBALS["knuketd"] = "background_color";
$GLOBALS["tiqbwzcm"] = "logo_width";
$GLOBALS["cwczbkkjrib"] = "logo_height";
$GLOBALS["lfplpvfk"] = "tipox";
$GLOBALS["lbgbwgsfnrf"] = "app_logo";
$GLOBALS["cswlmsii"] = "app_name";
$GLOBALS["rsosxff"] = "ja_tem_app_config";
$GLOBALS["vmffgxed"] = "ja_tem_app_config";
$GLOBALS["biigjsxfzg"] = "tipox";
$GLOBALS["fqzrdvfpu"] = "result_produtos_app_config";
$GLOBALS["bhilxobnoi"] = "conn";
$GLOBALS["ifecvwsfkf"] = "resultado_produtos_app_config";
$GLOBALS["vtxbreysl"] = "db_user_id";
$GLOBALS["mcyvtxrtx"] = "user_id";
$GLOBALS["iqvhoerc"] = "row_produto_login";
$GLOBALS["qixroftir"] = "resultado_produtos_login";
$GLOBALS["irblqyedeux"] = "login";
$GLOBALS["ozvnlwc"] = "tipox";
session_start();
$GLOBALS["mafqxc"] = "result_produtos_login";
if ($_SESSION["painel"]["login"] != "") {
} else {
    echo "<br><br><center><h1>REDIRECIONANDO...</h1></center>";
    echo "<script>\nwindow.location='/loging.php';\n</script>";
    exit;
}
include_once $_SERVER["DOCUMENT_ROOT"] . "/class/conexao.php";
${$GLOBALS["ozvnlwc"]} = addslashes($_POST["tipox"]);
$GLOBALS["igwhxqgp"] = "resultado_produtos_app_config";
$dpzbnxsf = "conn";
$GLOBALS["jbfdashvxxty"] = "result_produtos_login";
$GLOBALS["rehhiomsnhco"] = "row_produto_app_config";
if (${$GLOBALS["ozvnlwc"]} == "") {
    $_SESSION["message"] = "N\xc3\xa3o houve mudan\xc3\xa7as!";
    header("location: /app_config.php");
    exit;
}
${$GLOBALS["irblqyedeux"]} = $_SESSION["painel"]["login"];
$yivtqvdjukd = "result_produtos_app_config";
${$GLOBALS["mafqxc"]} = "SELECT * FROM usuariogl WHERE login LIKE '{$login}'";
$ttxbhiiookxu = "resultado_produtos_login";
${$GLOBALS["qixroftir"]} = mysqli_query(${$dpzbnxsf}, ${$GLOBALS["jbfdashvxxty"]});
while (${$GLOBALS["iqvhoerc"]} = mysqli_fetch_assoc(${$ttxbhiiookxu})) {
    $GLOBALS["dmabnspdoip"] = "db_user_id";
    $GLOBALS["xfimwlxebwb"] = "row_produto_login";
    $db_user_id = $row_produto_login["id"];
    ${$GLOBALS["mcyvtxrtx"]} = ${$GLOBALS["vtxbreysl"]};
}
${$yivtqvdjukd} = "SELECT * FROM app_configgl WHERE user_id LIKE '{$user_id}' LIMIT 1";
${$GLOBALS["igwhxqgp"]} = mysqli_query(${$GLOBALS["bhilxobnoi"]}, ${$GLOBALS["fqzrdvfpu"]});
while (${$GLOBALS["rehhiomsnhco"]} = mysqli_fetch_assoc(${$GLOBALS["ifecvwsfkf"]})) {
    ${$GLOBALS["vmffgxed"]} = "OK";
}
if (${$GLOBALS["rsosxff"]} != "OK") {
    $lnlocnllo = "app_qsTileIcon";
    $wgifemgqs = "app_text_check_user";
    ${$GLOBALS["cswlmsii"]} = addslashes($_POST["app_name"]);
    ${$GLOBALS["lbgbwgsfnrf"]} = addslashes($_POST["app_logo"]);
    $GLOBALS["cxxudco"] = "app_dialog_image_limit_exceeded";
    ${$GLOBALS["cwczbkkjrib"]} = addslashes($_POST["logo_height"]);
    $GLOBALS["molgatiytws"] = "server_state_slow";
    $GLOBALS["zqostgejox"] = "show_config_mode";
    $fxxhwdtrn = "border_color";
    $zuomdbcjzcn = "default_config_icon";
    ${$GLOBALS["tiqbwzcm"]} = addslashes($_POST["logo_width"]);
    $obnfwzrwd = "app_limiter_is_active";
    $gmwarmxwfy = "app_dialog_image_fail";
    $yrrcjyesrl = "card_color";
    ${$lnlocnllo} = addslashes($_POST["app_qsTileIcon"]);
    ${$GLOBALS["knuketd"]} = addslashes($_POST["background_color"]);
    $GLOBALS["ctqbowi"] = "icon_color";
    ${$yrrcjyesrl} = addslashes($_POST["card_color"]);
    $tvilbijyg = "app_dialog_error_text_color";
    $GLOBALS["mmrmmgcp"] = "text_color";
    if (strlen(${$GLOBALS["msfpowtfzce"]}) == 7 || strlen(${$GLOBALS["msfpowtfzce"]}) == 9) {
    }
    ${$GLOBALS["mmrmmgcp"]} = addslashes($_POST["text_color"]);
    ${$GLOBALS["udqmyew"]} = addslashes($_POST["button_color"]);
    ${$GLOBALS["ctqbowi"]} = addslashes($_POST["icon_color"]);
    $GLOBALS["inrzpkhxwsb"] = "app_background_no_color";
    ${$fxxhwdtrn} = addslashes($_POST["border_color"]);
    $GLOBALS["rbmglpdlbbc"] = "app_dialog_image_invalid_data";
    ${$GLOBALS["gdwhlised"]} = addslashes($_POST["app_background_image"]);
    ${$GLOBALS["inrzpkhxwsb"]} = addslashes($_POST["app_background_no_color"]);
    ${$GLOBALS["pvwrttolyg"]} = addslashes($_POST["app_contact_icon"]);
    ${$zuomdbcjzcn} = addslashes($_POST["default_config_icon"]);
    $gdfttdm = "app_dialog_success_background_color";
    ${$GLOBALS["zqostgejox"]} = addslashes($_POST["show_config_mode"]);
    $qbkrqdboc = "app_dialog_image_message";
    ${$obnfwzrwd} = addslashes($_POST["app_limiter_is_active"]);
    ${$GLOBALS["xghmqdsmyxg"]} = addslashes($_POST["server_state_fast"]);
    ${$GLOBALS["molgatiytws"]} = addslashes($_POST["server_state_slow"]);
    ${$GLOBALS["djdoxjvbf"]} = addslashes($_POST["app_dialog_success_text_colo"]);
    ${$GLOBALS["wgkrwuxes"]} = addslashes($_POST["app_contact_link"]);
    ${$GLOBALS["ordxzuzbylr"]} = addslashes($_POST["app_dialog_success_text_color"]);
    ${$GLOBALS["djdoxjvbf"]} = addslashes($_POST["app_dialog_success_text_colo"]);
    ${$GLOBALS["iidmawefn"]} = addslashes($_POST["app_dialog_image_success"]);
    ${$gdfttdm} = addslashes($_POST["app_dialog_success_background_color"]);
    ${$GLOBALS["kqduwe"]} = addslashes($_POST["app_config_item_background_color"]);
    $qtikpwyxp = "app_dialog_error_background_color";
    ${$GLOBALS["drqjdvewdmj"]} = addslashes($_POST["app_dialog_config_background_color"]);
    ${$GLOBALS["ordxzuzbylr"]} = addslashes($_POST["app_dialog_success_text_color"]);
    ${$gmwarmxwfy} = addslashes($_POST["app_dialog_image_fail"]);
    ${$qtikpwyxp} = addslashes($_POST["app_dialog_error_background_color"]);
    ${$tvilbijyg} = addslashes($_POST["app_dialog_error_text_color"]);
    ${$GLOBALS["qtcofsgbvty"]} = addslashes($_POST["app_dialog_image_validate"]);
    ${$qbkrqdboc} = addslashes($_POST["app_dialog_image_message"]);
    ${$GLOBALS["cxxudco"]} = addslashes($_POST["app_dialog_image_limit_exceeded"]);
    $GLOBALS["sshkcws"] = "config";
    ${$GLOBALS["rbmglpdlbbc"]} = addslashes($_POST["app_dialog_image_invalid_data"]);
    ${$wgifemgqs} = addslashes($_POST["app_text_check_user"]);
    ${$GLOBALS["rsmukcq"]} = addslashes($_POST["app_message_text"]);
    ${$GLOBALS["ydpsqqgbieg"]} = addslashes($_POST["app_message_type"]);
    ${$GLOBALS["sshkcws"]} = $conn->prepare("INSERT INTO app_configgl SET\nuser_id = '{$user_id}',\napp_name = '{$app_name}',\napp_logo = '{$app_logo}',\nlogo_height = '{$logo_height}',\nlogo_width = '{$logo_width}',\napp_qsTileIcon = '{$app_qsTileIcon}',\nbackground_color = '{$background_color}',\ncard_color = '{$card_color}',\ntext_color = '{$text_color}',\nbutton_color = '{$button_color}',\nicon_color = '{$icon_color}',\nborder_color = '{$border_color}',\napp_background_image = '{$app_background_image}',\napp_background_no_color = '{$app_background_no_color}',\napp_contact_icon = '{$app_contact_icon}',\ndefault_config_icon = '{$default_config_icon}',\nshow_config_mode = '{$show_config_mode}',\napp_limiter_is_active = '{$app_limiter_is_active}',\nserver_state_fast = '{$server_state_fast}',\nserver_state_slow = '{$server_state_slow}',\napp_dialog_success_text_color = '{$app_dialog_success_text_color}',\napp_contact_link = '{$app_contact_link}',\napp_dialog_image_success = '{$app_dialog_image_success}',\napp_dialog_success_background_color = '{$app_dialog_success_background_color}',\napp_config_item_background_color = '{$app_config_item_background_color}',\napp_dialog_config_background_color = '{$app_dialog_config_background_color}',\napp_dialog_image_fail = '{$app_dialog_image_fail}',\napp_dialog_error_background_color = '{$app_dialog_error_background_color}',\napp_dialog_error_text_color = '{$app_dialog_error_text_color}',\napp_dialog_image_validate = '{$app_dialog_image_validate}',\napp_dialog_image_message = '{$app_dialog_image_message}',\napp_dialog_image_limit_exceeded = '{$app_dialog_image_limit_exceeded}',\napp_dialog_image_invalid_data = '{$app_dialog_image_invalid_data}',\napp_text_check_user = '{$app_text_check_user}',\napp_message_text = '{$app_message_text}',\napp_message_type = '{$app_message_type}'\n\n");
    $config->execute();
} else {
    if (${$GLOBALS["lfplpvfk"]} == "edit1") {
        $erjcgmtjxaf = "app_logo";
        ${$GLOBALS["cswlmsii"]} = addslashes($_POST["app_name"]);
        ${$erjcgmtjxaf} = addslashes($_POST["app_logo"]);
        $cfcilzxx = "server_state_fast";
        ${$GLOBALS["cwczbkkjrib"]} = addslashes($_POST["logo_height"]);
        ${$GLOBALS["tiqbwzcm"]} = addslashes($_POST["logo_width"]);
        $GLOBALS["aryphkkjlc"] = "icon_color";
        $mlwxwwycqr = "text_color";
        $GLOBALS["yfyoxtq"] = "app_qsTileIcon";
        $app_qsTileIcon = addslashes($_POST["app_qsTileIcon"]);
        $yplqdv = "border_color";
        $GLOBALS["wbmtlyo"] = "button_color";
        $bclhbrepe = "app_background_no_color";
        ${$GLOBALS["knuketd"]} = addslashes($_POST["background_color"]);
        ${$GLOBALS["msfpowtfzce"]} = addslashes($_POST["card_color"]);
        ${$mlwxwwycqr} = addslashes($_POST["text_color"]);
        $nizltjst = "app_contact_icon";
        ${$GLOBALS["wbmtlyo"]} = addslashes($_POST["button_color"]);
        $GLOBALS["blyedr"] = "app_background_image";
        ${$GLOBALS["aryphkkjlc"]} = addslashes($_POST["icon_color"]);
        ${$yplqdv} = addslashes($_POST["border_color"]);
        ${$GLOBALS["blyedr"]} = addslashes($_POST["app_background_image"]);
        ${$bclhbrepe} = addslashes($_POST["app_background_no_color"]);
        ${$nizltjst} = addslashes($_POST["app_contact_icon"]);
        ${$GLOBALS["yronjfzs"]} = addslashes($_POST["default_config_icon"]);
        ${$GLOBALS["shdtwlxye"]} = addslashes($_POST["show_config_mode"]);
        ${$GLOBALS["vrkxesflgzme"]} = addslashes($_POST["app_limiter_is_active"]);
        $brbjtbklohjl = "app_dialog_success_text_colo";
        $GLOBALS["lhywds"] = "app_contact_link";
        ${$cfcilzxx} = addslashes($_POST["server_state_fast"]);
        ${$GLOBALS["nnosqvugb"]} = addslashes($_POST["server_state_slow"]);
        ${$brbjtbklohjl} = addslashes($_POST["app_dialog_success_text_colo"]);
        ${$GLOBALS["lhywds"]} = addslashes($_POST["app_contact_link"]);
        $GLOBALS["phzaegsep"] = "config";
        ${$GLOBALS["ordxzuzbylr"]} = addslashes($_POST["app_dialog_success_text_color"]);
        ${$GLOBALS["phzaegsep"]} = $conn->prepare("UPDATE app_configgl SET \napp_name = '{$app_name}',\napp_logo = '{$app_logo}',\nlogo_height = '{$logo_height}',\nlogo_width = '{$logo_width}',\napp_qsTileIcon = '{$app_qsTileIcon}',\nbackground_color = '{$background_color}',\ncard_color = '{$card_color}',\ntext_color = '{$text_color}',\nbutton_color = '{$button_color}',\nicon_color = '{$icon_color}',\nborder_color = '{$border_color}',\napp_background_image = '{$app_background_image}',\napp_background_no_color = '{$app_background_no_color}',\napp_contact_icon = '{$app_contact_icon}',\ndefault_config_icon = '{$default_config_icon}',\nshow_config_mode = '{$show_config_mode}',\napp_limiter_is_active = '{$app_limiter_is_active}',\nserver_state_fast = '{$server_state_fast}',\nserver_state_slow = '{$server_state_slow}',\napp_dialog_success_text_color = '{$app_dialog_success_text_colo}',\napp_contact_link = '{$app_contact_link}'\n\nWHERE user_id = '{$user_id}' ");
        $config->execute();
        $_SESSION["message"] = "Editado com sucesso!";
        header("location: /app_config");
    } else {
        if (${$GLOBALS["biigjsxfzg"]} == "edit2") {
            $GLOBALS["tygbmvo"] = "app_dialog_image_success";
            ${$GLOBALS["djdoxjvbf"]} = addslashes($_POST["app_dialog_success_text_colo"]);
            $GLOBALS["xxbtrvbbvk"] = "app_text_check_user";
            ${$GLOBALS["tygbmvo"]} = addslashes($_POST["app_dialog_image_success"]);
            $GLOBALS["nfjgvgges"] = "app_message_type";
            $GLOBALS["clkscxe"] = "app_dialog_error_text_color";
            ${$GLOBALS["bixbjlkboqmp"]} = addslashes($_POST["app_dialog_success_background_color"]);
            ${$GLOBALS["kqduwe"]} = addslashes($_POST["app_config_item_background_color"]);
            $GLOBALS["djhfqezvb"] = "app_dialog_image_validate";
            $GLOBALS["ystnxupeckl"] = "config";
            ${$GLOBALS["drqjdvewdmj"]} = addslashes($_POST["app_dialog_config_background_color"]);
            ${$GLOBALS["ordxzuzbylr"]} = addslashes($_POST["app_dialog_success_text_color"]);
            ${$GLOBALS["btfsyqasrk"]} = addslashes($_POST["app_dialog_image_fail"]);
            ${$GLOBALS["qvdvoahcff"]} = addslashes($_POST["app_dialog_error_background_color"]);
            ${$GLOBALS["clkscxe"]} = addslashes($_POST["app_dialog_error_text_color"]);
            ${$GLOBALS["djhfqezvb"]} = addslashes($_POST["app_dialog_image_validate"]);
            ${$GLOBALS["sfwlwgtue"]} = addslashes($_POST["app_dialog_image_message"]);
            ${$GLOBALS["edibqkqmzu"]} = addslashes($_POST["app_dialog_image_limit_exceeded"]);
            ${$GLOBALS["reniusxnk"]} = addslashes($_POST["app_dialog_image_invalid_data"]);
            ${$GLOBALS["xxbtrvbbvk"]} = addslashes($_POST["app_text_check_user"]);
            ${$GLOBALS["rsmukcq"]} = addslashes($_POST["app_message_text"]);
            ${$GLOBALS["nfjgvgges"]} = addslashes($_POST["app_message_type"]);
            ${$GLOBALS["ystnxupeckl"]} = $conn->prepare("UPDATE app_configgl SET \napp_dialog_image_success = '{$app_dialog_image_success}',\napp_dialog_success_background_color = '{$app_dialog_success_background_color}',\napp_config_item_background_color = '{$app_config_item_background_color}',\napp_dialog_config_background_color = '{$app_dialog_config_background_color}',\napp_dialog_success_text_color = '{$app_dialog_success_text_color}',\napp_dialog_image_fail = '{$app_dialog_image_fail}',\napp_dialog_error_background_color = '{$app_dialog_error_background_color}',\napp_dialog_error_text_color = '{$app_dialog_error_text_color}',\napp_dialog_image_validate = '{$app_dialog_image_validate}',\napp_dialog_image_message = '{$app_dialog_image_message}',\napp_dialog_image_limit_exceeded = '{$app_dialog_image_limit_exceeded}',\napp_dialog_image_invalid_data = '{$app_dialog_image_invalid_data}',\napp_text_check_user = '{$app_text_check_user}',\napp_message_text = '{$app_message_text}',\napp_message_type = '{$app_message_type}'\n\nWHERE user_id = '{$user_id}' ");
            $config->execute();
            $_SESSION["message"] = "Editado com sucesso!";
            header("location: /app_config.php");
        } else {
            $_SESSION["erro"] = "Erro ao editar!";
            header("location: /app_config.php");
        }
    }
}
if (mysqli_affected_rows(${$ishwcfwllfn})) {
    $_SESSION["message"] = "Editado com sucesso!";
    header("location: /app_config.php");
} else {
    $_SESSION["erro"] = "Erro ao editar!";
    header("location: /app_config.php");
}
