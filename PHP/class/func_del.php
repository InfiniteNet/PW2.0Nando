<?php

$GLOBALS["msnppscc"] = "resultado_usuario";
$GLOBALS["gfggfbunbr"] = "result_usuario";
$GLOBALS["pqwhcpx"] = "user_id";
$GLOBALS["mosylupkizj"] = "db_adm_permiss";
$GLOBALS["lynoiyyw"] = "db_user_id";
$GLOBALS["kbummtnebvd"] = "row_produto_login";
$GLOBALS["wprblujki"] = "resultado_produtos_login";
$GLOBALS["ovebcrayxe"] = "conn";
$nhfhfeeu = "result_produtos_login";
$GLOBALS["srblfdveeci"] = "login";
$ucflvn = "resultado_produtos_login";
$GLOBALS["ckfriio"] = "result_produtos_login";
include_once "conexao.php";
session_start();
$login = $_SESSION["painel"]["login"];
$GLOBALS["igamdqfkob"] = "row_produto_login";
$result_produtos_login = "SELECT * FROM usuariogl WHERE login LIKE '{$login}'";
$resultado_produtos_login = mysqli_query($conn, $result_produtos_login);
while (${$GLOBALS["igamdqfkob"]} = mysqli_fetch_assoc(${$GLOBALS["wprblujki"]})) {
    $GLOBALS["pehyilib"] = "row_produto_login";
    $GLOBALS["dllwyfhu"] = "perm";
    $GLOBALS["gjwjidomr"] = "db_usuario";
    $kycxhrwju = "db_usuario_expirar";
    $GLOBALS["xjyhnje"] = "nome";
    $GLOBALS["ysyqncd"] = "row_produto_login";
    $tpdopbnxrvc = "db_usuario_acess";
    $ugtnmqujfn = "row_produto_login";
    $gxicimcx = "row_produto_login";
    $qcgueixo = "db_user_id";
    $db_usuario = $row_produto_login["login"];
    $nome = ${$GLOBALS["kbummtnebvd"]}["user"];
    ${$GLOBALS["lynoiyyw"]} = $row_produto_login["id"];
    ${$kycxhrwju} = ${$gxicimcx}["expirar"];
    ${$GLOBALS["mosylupkizj"]} = ${$ugtnmqujfn}["permiss"];
    ${$tpdopbnxrvc} = ${$GLOBALS["kbummtnebvd"]}["permiss"];
    ${$GLOBALS["dllwyfhu"]} = ${$GLOBALS["kbummtnebvd"]}["permiss"];
    ${$GLOBALS["pqwhcpx"]} = ${$qcgueixo};
}
if (mysqli_real_escape_string(${$GLOBALS["ovebcrayxe"]}, $_GET["func"]) == "del_user") {
    $GLOBALS["wmnibcrushcs"] = "result_usuario";
    $GLOBALS["ggrmwzx"] = "id";
    $yoaylxhf = "resultado_usuario";
    $GLOBALS["driqkpxfkf"] = "conn";
    $GLOBALS["mnwsyw"] = "result_usuario";
    $GLOBALS["vtusvsgn"] = "conn";
    $id = mysqli_real_escape_string(${$GLOBALS["ovebcrayxe"]}, $_GET["id"]);
    ${$GLOBALS["gfggfbunbr"]} = "DELETE FROM usuariogl WHERE id='{$id}' ";
    $ebedjx = "result_usuario";
    $GLOBALS["sibcuauww"] = "resultado_usuario";
    $iczlghqmwtdj = "conn";
    $qjxvuwyrcqi = "result_usuario";
    $ruoekcjzkb = "conn";
    $rzyhzyeyvx = "resultado_usuario";
    $cspzrkfn = "result_usuario";
    $kwvbthircnt = "result_usuario";
    ${$GLOBALS["msnppscc"]} = mysqli_query(${$GLOBALS["vtusvsgn"]}, $result_usuario);
    ${$ebedjx} = "DELETE FROM app_configgl WHERE user_id='{$id}' ";
    ${$yoaylxhf} = mysqli_query(${$iczlghqmwtdj}, ${$GLOBALS["gfggfbunbr"]});
    ${$GLOBALS["mnwsyw"]} = "DELETE FROM categoriagl WHERE user_id='{$id}' ";
    ${$rzyhzyeyvx} = mysqli_query(${$GLOBALS["ovebcrayxe"]}, ${$GLOBALS["gfggfbunbr"]});
    ${$kwvbthircnt} = "DELETE FROM configgl WHERE user_id='{$id}' ";
    ${$GLOBALS["sibcuauww"]} = mysqli_query(${$GLOBALS["driqkpxfkf"]}, ${$qjxvuwyrcqi});
    if (mysqli_query(${$ruoekcjzkb}, ${$GLOBALS["wmnibcrushcs"]})) {
        $_SESSION["message"] = "Deletado com sucesso!";
        header("location: /adming.php");
    } else {
        $_SESSION["erro"] = "Erro ao deletar!";
        header("location: /adming.php");
    }
} elseif (mysqli_real_escape_string(${$GLOBALS["ovebcrayxe"]}, $_GET["func"]) == "del_theme") {
    $kprjtfa = "result_usuario";
    $result_usuario = "DELETE FROM app_configgl WHERE user_id='{$user_id}' ";
    $GLOBALS["wmogrucd"] = "result_usuario";
    $sqgdszwl = "conn";
    $advpksvsfk = "resultado_usuario";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    $_SESSION["message"] = "Resetado com sucesso!";
    header("location: /app_config.php");
} else {
    $_SESSION["erro"] = "Erro ao resetar!";
    header("location: /app_config.php");
}
