<?php

$GLOBALS["fbititue"] = "result_usuario";
$GLOBALS["sfwosjvp"] = "resultado_usuario";
$GLOBALS["xcmeczmjq"] = "id";
$GLOBALS["pesoltgx"] = "conn";
$GLOBALS["ndsiwp"] = "resultado_produtos_login";
$GLOBALS["qzdizmdb"] = "row_produto_login";
$GLOBALS["indjhdnpj"] = "result_produtos_login";
$jvhtnhubiih = "result_produtos_login";
include_once $_SERVER["DOCUMENT_ROOT"] . "/class/conexao.php";
$kjxqcpfcxy = "conn";
$GLOBALS["fpvglxk"] = "login";
session_start();
$login = $_SESSION["painel"]["login"];
$GLOBALS["cwobfjucgm"] = "resultado_produtos_login";
$result_produtos_login = "SELECT * FROM usuariogl WHERE login LIKE '{$login}'";
$resultado_produtos_login = mysqli_query($conn, $result_produtos_login);
while (${$GLOBALS["qzdizmdb"]} = mysqli_fetch_assoc(${$GLOBALS["ndsiwp"]})) {
    $GLOBALS["rqkiolkphd"] = "db_user_id";
    $GLOBALS["kwthsvb"] = "user_id";
    $GLOBALS["eeospmrv"] = "db_user_id";
    $db_user_id = ${$GLOBALS["qzdizmdb"]}["id"];
    $user_id = $db_user_id;
}
if (mysqli_real_escape_string(${$GLOBALS["pesoltgx"]}, $_GET["func"]) == "del_conf2") {
    $dxbhyuqvx = "result_usuario";
    $xkvemxlvtfi = "conn";
    ${$GLOBALS["xcmeczmjq"]} = mysqli_real_escape_string($conn, $_GET["id"]);
    ${$dxbhyuqvx} = "DELETE FROM configgl WHERE user_id='{$db_user_id}' ";
    ${$GLOBALS["sfwosjvp"]} = mysqli_query(${$GLOBALS["pesoltgx"]}, ${$GLOBALS["fbititue"]});
    $_SESSION["message"] = "Deletado com sucesso!";
    header("location: /configg.php");
} else {
    $_SESSION["erro"] = "Erro ao deletar!";
    header("location: /configg.php");
}
