<?php

$GLOBALS["gpgqiuqrk"] = "resultado_usuario";
$GLOBALS["tpskvepdvdx"] = "result_usuario";
$GLOBALS["wqcsvpuy"] = "app_dialog_error_text_color";
$GLOBALS["sepebbp"] = "app_dialog_success_text_color";
$GLOBALS["kduihkwo"] = "app_config_item_background_color";
$GLOBALS["eifimesud"] = "border_color";
$GLOBALS["nhoteywsxmcw"] = "icon_color";
$GLOBALS["ndaezjonncrb"] = "button_color";
$GLOBALS["emtksgikij"] = "text_color";
$GLOBALS["nftfsqbsi"] = "card_color";
$GLOBALS["kotoqwrk"] = "background_color";
$GLOBALS["goigleubpu"] = "app_qsTileIcon";
$GLOBALS["sidtvdmx"] = "logo_height";
$GLOBALS["hmbbhosgps"] = "app_logo";
$GLOBALS["yhegokkzi"] = "id2";
$GLOBALS["nkmwbgvww"] = "conn";
$oeykuqlhdisx = "result_produtos_tema";
$GLOBALS["yxrlfaglktr"] = "resultado_produtos_tema";
$GLOBALS["xhkcxkkxx"] = "id2";
$GLOBALS["zqczksdaoin"] = "resultado_produtos_login";
$GLOBALS["xxcnypg"] = "result_produtos_login";
$GLOBALS["fyorgakvgbu"] = "id";
session_start();
if ($_SESSION["painel"]["login"] != "") {
} else {
    echo "<br><br><center><h1>REDIRECIONANDO...</h1></center>";
    echo "<script>\nwindow.location='/loging.php';\n</script>";
    exit;
}
$hgkxprxgy = "conn";
$fstwvkhymwn = "row_produto_tema";
$qjyqmvnx = "login";
include_once $_SERVER["DOCUMENT_ROOT"] . "/class/conexao.php";
$GLOBALS["kkbljzo"] = "id2";
$GLOBALS["yqchsqvq"] = "row_produto_login";
$login = $_SESSION["painel"]["login"];
$GLOBALS["dszpplilapt"] = "result_produtos_login";
$GLOBALS["piorvxcnbb"] = "result_produtos_tema";
${$GLOBALS["fyorgakvgbu"]} = mysqli_real_escape_string($conn, $_GET["id"]);
$GLOBALS["qgwhmp"] = "conn";
${$GLOBALS["xxcnypg"]} = "SELECT * FROM usuariogl WHERE login LIKE '{$login}' && id='{$id}' LIMIT 1";
${$GLOBALS["zqczksdaoin"]} = mysqli_query(${$GLOBALS["qgwhmp"]}, ${$GLOBALS["dszpplilapt"]});
while (${$GLOBALS["yqchsqvq"]} = mysqli_fetch_assoc(${$GLOBALS["zqczksdaoin"]})) {
}
${$GLOBALS["piorvxcnbb"]} = "SELECT * FROM app_configgl WHERE user_id='{$id}' LIMIT 1";
${$GLOBALS["yxrlfaglktr"]} = mysqli_query(${$GLOBALS["nkmwbgvww"]}, ${$oeykuqlhdisx});
while (${$fstwvkhymwn} = mysqli_fetch_assoc(${$GLOBALS["yxrlfaglktr"]})) {
    $nkhhtiw = "row_produto_tema";
    ${$GLOBALS["yhegokkzi"]} = $row_produto_tema["user_id"];
}
if (${$GLOBALS["xhkcxkkxx"]} == ${$GLOBALS["fyorgakvgbu"]}) {
    echo "<script>alert('O tema deste usu\xc3\xa1rio ja existe!!!'); window.location='/1-admin-usuarios.php';</script>";
} else {
    if (${$GLOBALS["kkbljzo"]} < ${$GLOBALS["fyorgakvgbu"]}) {
        $GLOBALS["ehfhmoyhcw"] = "app_name";
        $GLOBALS["wpwuxalu"] = "logo_width";
        $ivrjltekwwt = "conn";
        $app_name = "GLMod ConfigMods";
        ${$GLOBALS["hmbbhosgps"]} = "https://i.imgur.com/RoL3UI1.png";
        ${$GLOBALS["sidtvdmx"]} = "150";
        $GLOBALS["bolqfwjl"] = "app_dialog_success_background_color";
        $xguivftwyud = "app_dialog_error_background_color";
        $GLOBALS["wmxjwpwgh"] = "app_text_check_user";
        $GLOBALS["vvowear"] = "app_dialog_config_background_color";
        ${$GLOBALS["wpwuxalu"]} = "150";
        ${$GLOBALS["goigleubpu"]} = "https://i.imgur.com/FNyYKck.png";
        ${$GLOBALS["kotoqwrk"]} = "#ff595959";
        ${$GLOBALS["nftfsqbsi"]} = "#ff363636";
        ${$GLOBALS["emtksgikij"]} = "#ffffffff";
        ${$GLOBALS["ndaezjonncrb"]} = "#ff595959";
        ${$GLOBALS["nhoteywsxmcw"]} = "#ffffffff";
        ${$GLOBALS["eifimesud"]} = "#ff595959";
        ${$GLOBALS["vvowear"]} = "#ff595959";
        ${$GLOBALS["kduihkwo"]} = "#ff363636";
        ${$GLOBALS["bolqfwjl"]} = "#ff595959";
        ${$GLOBALS["sepebbp"]} = "#ffffffff";
        ${$xguivftwyud} = "#ff595959";
        ${$GLOBALS["wmxjwpwgh"]} = "\xf0\x9f\x91\xa4 Usu\xc3\xa1rio: {username}<br>\xf0\x9f\x93\x86 Expira em: {validate}<br>\xf0\x9f\x93\x85 Dias restantes: {days}<br>\xf0\x9f\x9a\xab Conex\xc3\xb5es: {connections}|{limit_connections}";
        $pefiyrbmyrn = "result_usuario";
        ${$GLOBALS["wqcsvpuy"]} = "#ffffffff";
        ${$GLOBALS["tpskvepdvdx"]} = "INSERT INTO app_configgl SET app_name = '{$app_name}',\napp_logo = '{$app_logo}',\nlogo_height = '{$logo_height}',\nlogo_width = '{$logo_width}',\napp_qsTileIcon = '{$app_qsTileIcon}',\nbackground_color = '{$background_color}',\ncard_color = '{$card_color}',\ntext_color = '{$text_color}',\nbutton_color = '{$button_color}',\nicon_color = '{$icon_color}',\napp_dialog_error_text_color = '{$app_dialog_error_text_color}',\nborder_color = '{$border_color}',\napp_dialog_config_background_color = '{$app_dialog_config_background_color}',\napp_config_item_background_color = '{$app_config_item_background_color}',\napp_dialog_success_background_color = '{$app_dialog_success_background_color}',\napp_dialog_success_text_color = '{$app_dialog_success_text_color}',\napp_dialog_error_background_color = '{$app_dialog_error_background_color}',\napp_text_check_user='{$app_text_check_user}',\nuser_id='{$id}'";
        ${$GLOBALS["gpgqiuqrk"]} = mysqli_query(${$GLOBALS["nkmwbgvww"]}, ${$pefiyrbmyrn});
        if (mysqli_affected_rows(${$ivrjltekwwt})) {
            echo "<script>alert('Tema criado com sucesso!!!'); window.location='/1-admin-usuarios.php';</script>";
        } else {
            echo "<script>alert('Tema n\xc3\xa3o criado com sucesso!!!'); window.location='/1-admin-usuarios.php';</script>";
        }
    }
}
