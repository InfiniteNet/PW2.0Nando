<?php

$GLOBALS["urlyypcq"] = "response";
$GLOBALS["yqtdimwpcm"] = "db_user_token_up";
$GLOBALS["ciosxmqkzu"] = "db_user_id_up";
$GLOBALS["atrfpvuknok"] = "resultado_produtos_login";
$GLOBALS["qtdwyu"] = "row_produto_login";
$GLOBALS["hvmdrwjpx"] = "conn";
$GLOBALS["xohkkdspn"] = "result_produtos_login";
$GLOBALS["jlfhrxpwe"] = "update";
$GLOBALS["cjhqvvaqt"] = "body";
$GLOBALS["mtuzyk"] = "request";
$GLOBALS["yhycegen"] = "dbname";
$GLOBALS["yqdobjflml"] = "conn";
$GLOBALS["hgsqmtp"] = "servidor";
include_once $_SERVER["DOCUMENT_ROOT"] . "/class/conexao.php";
$GLOBALS["yrlvdqdy"] = "usuario";
$bioeoj = "senha";
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
header("Content-Type: application/json");
$request = file_get_contents("php://input");
$body = json_decode($request);
$update = $body->update;
$gcbtjkpwp = "conn";
$cpmusts = "resultado_produtos_login";
$GLOBALS["aitymeloc"] = "update";
$update = mysqli_real_escape_string($conn, $update);
$result_produtos_login = "SELECT * FROM usuariogl WHERE token LIKE '{$update}'";
$resultado_produtos_login = mysqli_query($conn, $result_produtos_login);
while (${$GLOBALS["qtdwyu"]} = mysqli_fetch_assoc(${$GLOBALS["atrfpvuknok"]})) {
    $GLOBALS["ncggctokvlw"] = "db_user_token_up";
    ${$GLOBALS["ciosxmqkzu"]} = ${$GLOBALS["qtdwyu"]}["id"];
    ${$GLOBALS["ncggctokvlw"]} = ${$GLOBALS["qtdwyu"]}["token"];
}
if (${$GLOBALS["jlfhrxpwe"]} == ${$GLOBALS["yqtdimwpcm"]}) {
    $GLOBALS["xowyqg"] = "db_user_id_up";
    $xboelqeq = "response";
    ${$GLOBALS["urlyypcq"]} = array("status" => 200, "data" => array("id" => 865072, "user_id" => $db_user_id_up, "updated_at" => "2023-04-19 00:44:33", "device_data" => $body->device_data, "session_token" => $body->update, "created_at" => "2023-04-19 00:44:33", "device_id" => "12067dbfaca20bed", "status" => "ACTIVE"), "version" => "5.0.0");
    exit(json_encode(${$xboelqeq}));
} else {
    ${$GLOBALS["urlyypcq"]} = array("status" => 400, "data" => array("id" => 865072, "user_id" => ${$GLOBALS["ciosxmqkzu"]}, "updated_at" => "2023-04-19 00:44:33", "device_data" => $body->device_data, "session_token" => $body->update, "created_at" => "2023-04-19 00:44:33", "device_id" => "12067dbfaca20bed", "status" => "INACTIVE"), "version" => "5.0.0");
    $qgcqtulgbde = "response";
    exit(json_encode($response));
}
