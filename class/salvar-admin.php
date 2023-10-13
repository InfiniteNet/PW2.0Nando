<?php

$GLOBALS["etirycxri"] = "link2";
$GLOBALS["brbfbx"] = "conn";
$GLOBALS["wjtrpdhpg"] = "resultado_usuario";
$GLOBALS["aougkomhti"] = "result_usuario";
$GLOBALS["qfekdb"] = "senha1";
$GLOBALS["onwypitqto"] = "id";
$GLOBALS["ddenvyj"] = "permiss";
$GLOBALS["jbzyctn"] = "token";
$GLOBALS["xkbatewwooeg"] = "user";
$GLOBALS["qpobhifpnlqq"] = "result_produtos_login";
$GLOBALS["zogkzkt"] = "resultado_produtos_login";
$ksdljpthrv = "expirar";
$GLOBALS["xgvtrbtrk"] = "login";
$GLOBALS["xhdlesaw"] = "key";
session_start();
$GLOBALS["iirdcivqeve"] = "token";
if ($_SESSION["painel"]["login"] != "") {
} else {
    echo "<br><br><center><h1>REDIRECIONANDO...</h1></center>";
    echo "<script>\nwindow.location='/loging.php';\n</script>";
    exit;
}
$capdyifjgve = "row_produto_login";
include_once $_SERVER["DOCUMENT_ROOT"] . "/class/conexao.php";
$GLOBALS["kkupvvtdoy"] = "user";
$lxpjenv = "result_produtos_login";
include_once $_SERVER["DOCUMENT_ROOT"] . "/class/enc.php";
${$GLOBALS["xgvtrbtrk"]} = $_SESSION["painel"]["login"];
$GLOBALS["tsduvr"] = "senha1";
$GLOBALS["dlcsvdcx"] = "permiss";
$GLOBALS["jorwzhitisr"] = "senha";
${$lxpjenv} = "SELECT * FROM usuariogl WHERE login LIKE '{$login}'";
$GLOBALS["xncmaub"] = "conn";
$GLOBALS["oocuuqgaus"] = "login";
${$GLOBALS["zogkzkt"]} = mysqli_query($conn, ${$GLOBALS["qpobhifpnlqq"]});
while (${$capdyifjgve} = mysqli_fetch_assoc(${$GLOBALS["zogkzkt"]})) {
    $GLOBALS["rycudquyqgq"] = "db_user_id";
    $GLOBALS["oowvntfkvm"] = "db_user_id";
    $gxecojheh = "row_produto_login";
    $xdsmvlr = "user_id";
    $db_user_id = $row_produto_login["id"];
    $user_id = $db_user_id;
}
${$GLOBALS["onwypitqto"]} = $_POST["edit_qual_id"];
${$GLOBALS["xkbatewwooeg"]} = $_POST["user"];
${$GLOBALS["oocuuqgaus"]} = $_POST["login"];
${$ksdljpthrv} = $_POST["expirar"];
${$GLOBALS["ddenvyj"]} = $_POST["permiss"];
${$GLOBALS["qfekdb"]} = $_POST["pass"];
${$GLOBALS["jbzyctn"]} = $_POST["token"];
${$GLOBALS["jorwzhitisr"]} = AESCrypt::encrypt(${$GLOBALS["xhdlesaw"]}, ${$GLOBALS["tsduvr"]});
if (${$GLOBALS["dlcsvdcx"]} == "" || ${$GLOBALS["kkupvvtdoy"]} == "" || ${$GLOBALS["iirdcivqeve"]} == "") {
}
if ($_POST["tipox"] == "categoria") {
    $rlhuoaou = "token";
    $GLOBALS["kdqkbjmz"] = "senha";
    $gutqnjtuqjc = "user";
    if ($_POST["edit_qual"] == "EDIT") {
        ${$GLOBALS["aougkomhti"]} = "UPDATE usuariogl SET user='{$user}', login='{$login}', pass='{$senha}', expirar='{$expirar}', token='{$token}', permiss='{$permiss}' WHERE id='{$id}'";
        ${$GLOBALS["wjtrpdhpg"]} = mysqli_query(${$GLOBALS["brbfbx"]}, ${$GLOBALS["aougkomhti"]});
        if (mysqli_affected_rows(${$GLOBALS["brbfbx"]})) {
            echo "<!DOCTYPE html>\n<html lang=\"pt\">\n<head>\n  <meta charset='UTF-8'>\n  <title>GL-GESTOR</title>\n  <style>\n    body {\n      background-image: linear-gradient(225deg, #eb45f2 0, #d33ff7 16.67%, #b83afb 33.33%, #9738ff 50%, #6c38ff 66.67%, #0c3bff 83.33%, #003eff 100%);\n      font-family: Arial, Helvetica, Sans-Serif;\n      overflow: hidden;\n    }\n\n    .area {\n      display: flex;\n      justify-content: center;\n      align-items: center;\n      height: 100vh;\n      justify-content: center;\n      align-items: center;\n    }\n\n    .card {\n      margin-top: -100px;\n      display: flex;\n      flex-direction: column;\n      align-items: center;\n      background-color: #18192090;\n      border-radius: 50px;\n      width: 355px;\n      height: 350px;\n      padding: 25px;\n    }\n\n    .card form {\n      display: flex;\n      width: 100%;\n      flex-direction: column;\n    }\n\n    .card img {\n      width: 130px;\n      height: auto;\n      margin-top: 4px;\n      border-radius: 1000px;\n    }\n\n    p {\n      color: #cbd0f7;\n      text-decoration: none;\n      text-align: center;\n    }\n\n    h1 {\n      color: #d8daec;\n      text-align: center;\n      font-size: 20px;\n      margin-bottom: 5px;\n      margin-top: 5px;\n      text-decoration: none;\n    }\n    \n    h2 {\n      color: #cbd0f7;\n      text-align: center;\n      font-size: 22px;\n      margin-bottom: 10px;\n      margin-top: 5px;\n      text-decoration: none;\n    }\n\n    form [type=\"submit\"] {\n      display: block;\n      background-color: #5568fe;\n      font-size: 20px;\n      text-transform: uppercase;\n      width: 100%;\n      height: 45px;\n      font-weight: bold;\n      cursor: pointer;\n      border: none;\n      border-radius: 50px;\n      color: #cbd0f7;\n      margin-bottom: 5px;\n    }\n\n    form [type=\"button\"] {\n      display: block;\n      background-color: #5568fe;\n      font-size: 20px;\n      text-transform: uppercase;\n      width: 100%;\n      height: 45px;\n      font-weight: bold;\n      cursor: pointer;\n      border: none;\n      border-radius: 50px;\n      color: #cbd0f7;\n      margin-bottom: 5px;\n    }\n  </style>\n  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n</head>\n<body>\n  <section class=\"area\">\n    <div class=\"card\">\n      <div>\n        <img src=\"https://i.imgur.com/9LIrYf2.png\">\n      </div>\n      <form>\n        <h2>Usu\xc3\xa1rio editado com sucesso</h2>\n        <h1>https://" . ${$GLOBALS["etirycxri"]} . "/gltunnel.php</h1>\n        <h1>Usu\xc3\xa1rio: \n          {$login}\n        </h1>\n        <h1>Senha: \n          {$senha1}\n        </h1>\n        <br>\n        <input type=\"button\" onclick=\"location.href='/adming.php';\" value=\"Voltar\" />\n      </form>\n    </section>\n  </div>\n</body>\n</html>";
        } else {
            echo "<script>alert('N\xc3\xa3o houve mudan\xc3\xa7as, edi\xc3\xa7\xc3\xa3o cancelada!'); window.location='/adming.php';</script>";
        }
    } else {
        if (${$gutqnjtuqjc} != "" && ${$GLOBALS["kdqkbjmz"]} != "" && ${$rlhuoaou} != "") {
            $sbbxgewbvxe = "result_usuario";
            $result_usuario = "INSERT INTO usuariogl SET user='{$user}', login='{$login}', pass='{$senha}', expirar='{$expirar}', token='{$token}', permiss='{$permiss}'";
            ${$GLOBALS["wjtrpdhpg"]} = mysqli_query(${$GLOBALS["brbfbx"]}, ${$GLOBALS["aougkomhti"]});
            if (mysqli_affected_rows(${$GLOBALS["brbfbx"]})) {
                echo "<!DOCTYPE html>\n<html lang=\"pt\">\n<head>\n  <meta charset='UTF-8'>\n  <title>GL-GESTOR</title>\n  <style>\n    body {\n      background-image: linear-gradient(225deg, #eb45f2 0, #d33ff7 16.67%, #b83afb 33.33%, #9738ff 50%, #6c38ff 66.67%, #0c3bff 83.33%, #003eff 100%);\n      font-family: Arial, Helvetica, Sans-Serif;\n      overflow: hidden;\n    }\n\n    .area {\n      display: flex;\n      justify-content: center;\n      align-items: center;\n      height: 100vh;\n      justify-content: center;\n      align-items: center;\n    }\n\n    .card {\n      margin-top: -100px;\n      display: flex;\n      flex-direction: column;\n      align-items: center;\n      background-color: #18192090;\n      border-radius: 50px;\n      width: 355px;\n      height: 350px;\n      padding: 25px;\n    }\n\n    .card form {\n      display: flex;\n      width: 100%;\n      flex-direction: column;\n    }\n\n    .card img {\n      width: 130px;\n      height: auto;\n      margin-top: 4px;\n      border-radius: 1000px;\n    }\n\n    p {\n      color: #cbd0f7;\n      text-decoration: none;\n      text-align: center;\n    }\n\n    h1 {\n      color: #d8daec;\n      text-align: center;\n      font-size: 20px;\n      margin-bottom: 5px;\n      margin-top: 5px;\n      text-decoration: none;\n    }\n    \n    h2 {\n      color: #cbd0f7;\n      text-align: center;\n      font-size: 22px;\n      margin-bottom: 10px;\n      margin-top: 5px;\n      text-decoration: none;\n    }\n\n    form [type=\"submit\"] {\n      display: block;\n      background-color: #5568fe;\n      font-size: 20px;\n      text-transform: uppercase;\n      width: 100%;\n      height: 45px;\n      font-weight: bold;\n      cursor: pointer;\n      border: none;\n      border-radius: 50px;\n      color: #cbd0f7;\n      margin-bottom: 5px;\n    }\n\n    form [type=\"button\"] {\n      display: block;\n      background-color: #5568fe;\n      font-size: 20px;\n      text-transform: uppercase;\n      width: 100%;\n      height: 45px;\n      font-weight: bold;\n      cursor: pointer;\n      border: none;\n      border-radius: 50px;\n      color: #cbd0f7;\n      margin-bottom: 5px;\n    }\n  </style>\n  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n</head>\n<body>\n  <section class=\"area\">\n    <div class=\"card\">\n      <div>\n        <img src=\"https://i.imgur.com/9LIrYf2.png\">\n      </div>\n      <form>\n        <h2>Usu\xc3\xa1rio adcionado com sucesso</h2>\n        <h1>https://" . ${$GLOBALS["etirycxri"]} . "/gltunnel.php</h1>\n        <h1>Usu\xc3\xa1rio: \n          `{$login}`\n        </h1>\n        <h1>Senha: \n          `{$senha1}`\n        </h1>\n        <br>\n        <input type=\"button\" onclick=\"location.href='/adming.php';\" value=\"Voltar\" />\n      </form>\n    </section>\n  </div>\n</body>\n</html>";
            } else {
                $_SESSION["erro"] = "Erro ao cadastrar usu\xc3\xa1rio!";
                header("Location: /adming.php");
            }
        }
    }
}
