<?php

$GLOBALS["ttgbim"] = "resultado_usuario";
$GLOBALS["wquyrwhfjekr"] = "status";
$GLOBALS["vsxueerdny"] = "ordem";
$GLOBALS["ujgwpqtnix"] = "nome";
$umebmdfejxq = "conn";
$GLOBALS["drkkzrhp"] = "conn";
$GLOBALS["dgyyakrt"] = "result_usuario";
$GLOBALS["dngwmew"] = "id";
$GLOBALS["nefcyjcjyhd"] = "db_user_id";
$GLOBALS["uikdvlxque"] = "resultado_produtos_login";
$GLOBALS["lhlnhtoovh"] = "row_produto_login";
$GLOBALS["xyvxoptfxs"] = "result_produtos_login";
session_start();
$uvpywyew = "login";
if ($_SESSION["painel"]["login"] != "") {
} else {
    echo "<br><br><center><h4>REDIRECIONANDO...</h4></center>";
    echo "<script>\nwindow.location='/loging.php';\n</script>";
    exit;
}
include_once $_SERVER["DOCUMENT_ROOT"] . "/class/conexao.php";
$GLOBALS["dhwdhbf"] = "conn";
${$uvpywyew} = $_SESSION["painel"]["login"];
$fljgcrvmin = "resultado_produtos_login";
$GLOBALS["unyqurvodd"] = "conn";
${$GLOBALS["xyvxoptfxs"]} = "SELECT * FROM usuariogl WHERE login LIKE '{$login}'";
${$fljgcrvmin} = mysqli_query(${$GLOBALS["unyqurvodd"]}, ${$GLOBALS["xyvxoptfxs"]});
while (${$GLOBALS["lhlnhtoovh"]} = mysqli_fetch_assoc(${$GLOBALS["uikdvlxque"]})) {
    $srfesxylhvl = "db_user_id";
    $GLOBALS["enewjepo"] = "row_produto_login";
    $GLOBALS["luioeykwr"] = "user_id";
    $db_user_id = $row_produto_login["id"];
    $user_id = ${$GLOBALS["nefcyjcjyhd"]};
}
if (mysqli_real_escape_string(${$GLOBALS["dhwdhbf"]}, $_GET["func"]) == "del_cat") {
    $sbtdksbkatrg = "resultado_usuario";
    $gbfauuwpmnfn = "conn";
    ${$GLOBALS["dngwmew"]} = mysqli_real_escape_string($conn, $_GET["id"]);
    ${$GLOBALS["dgyyakrt"]} = "DELETE FROM categoriagl WHERE id='{$id}' && user_id='{$db_user_id}' ";
    $GLOBALS["hwcsfez"] = "conn";
    ${$sbtdksbkatrg} = mysqli_query($conn, ${$GLOBALS["dgyyakrt"]});
    $_SESSION["message"] = "Deletado com sucesso!";
    header("location: /categories.php");
} else {
    if (mysqli_real_escape_string(${$GLOBALS["drkkzrhp"]}, $_GET["func"]) == "desab_cat") {
        $hdlrlcwtqft = "id";
        $uemxxadij = "resultado_usuario";
        $id = mysqli_real_escape_string(${$GLOBALS["drkkzrhp"]}, $_GET["id"]);
        $GLOBALS["ghgopgewyia"] = "result_usuario";
        $result_usuario = "UPDATE categoriagl SET status='INACTIVE' WHERE id='{$id}' && user_id='{$db_user_id}'";
        $resultado_usuario = mysqli_query(${$GLOBALS["drkkzrhp"]}, ${$GLOBALS["dgyyakrt"]});
        $_SESSION["message"] = "Desativada com sucesso!";
        header("location: /categories.php");
    } else {
        if (mysqli_real_escape_string(${$umebmdfejxq}, $_GET["func"]) == "habilit_cat") {
            $lqlqkzcdzxjh = "conn";
            $vgabugvyj = "resultado_usuario";
            $GLOBALS["ppmglirdep"] = "result_usuario";
            ${$GLOBALS["dngwmew"]} = mysqli_real_escape_string(${$GLOBALS["drkkzrhp"]}, $_GET["id"]);
            ${$GLOBALS["dgyyakrt"]} = "UPDATE categoriagl SET status='ACTIVE' WHERE id='{$id}' && user_id='{$db_user_id}'";
            ${$vgabugvyj} = mysqli_query(${$lqlqkzcdzxjh}, ${$GLOBALS["ppmglirdep"]});
            $_SESSION["message"] = "Ativada com sucesso!";
            header("location: /categories.php");
        }
    }
}
if (addslashes($_POST["tipox"]) == "categoria") {
    if (addslashes($_POST["edit_qual"]) == "EDIT") {
        $GLOBALS["mesehmltv"] = "result_usuario";
        ${$GLOBALS["dngwmew"]} = addslashes($_POST["edit_qual_id"]);
        ${$GLOBALS["ujgwpqtnix"]} = addslashes($_POST["name"]);
        $pfpdfisew = "cor";
        ${$GLOBALS["vsxueerdny"]} = addslashes($_POST["sort_order"]);
        $GLOBALS["cvodkhhl"] = "conn";
        ${$pfpdfisew} = addslashes($_POST["category_color"]);
        ${$GLOBALS["wquyrwhfjekr"]} = addslashes($_POST["status"]);
        $jjovvvylf = "conn";
        ${$GLOBALS["dgyyakrt"]} = "UPDATE categoriagl SET name='{$nome}', sort_order='{$ordem}', category_color='{$cor}', status='{$status}' WHERE id='{$id}' && user_id='{$db_user_id}'";
        ${$GLOBALS["ttgbim"]} = mysqli_query(${$jjovvvylf}, ${$GLOBALS["mesehmltv"]});
        if (mysqli_affected_rows(${$GLOBALS["cvodkhhl"]})) {
            $_SESSION["message"] = "Editado com sucesso!";
            header("location: /categories.php");
        } else {
            $_SESSION["erro"] = "Erro ao editar!";
            header("location: /categories.php");
        }
    } else {
        $GLOBALS["rtotjuqgcdfj"] = "status";
        $GLOBALS["jwqhcqlsgan"] = "result_usuario";
        ${$GLOBALS["dngwmew"]} = addslashes($_POST["edit_qual_id"]);
        $qhmozqizg = "cor";
        ${$GLOBALS["ujgwpqtnix"]} = addslashes($_POST["name"]);
        ${$GLOBALS["vsxueerdny"]} = addslashes($_POST["sort_order"]);
        ${$qhmozqizg} = addslashes($_POST["category_color"]);
        ${$GLOBALS["rtotjuqgcdfj"]} = addslashes($_POST["status"]);
        $GLOBALS["ympkabudozl"] = "conn";
        ${$GLOBALS["jwqhcqlsgan"]} = "INSERT INTO categoriagl SET name='{$nome}', sort_order='{$ordem}', category_color='{$cor}', status='{$status}', user_id='{$db_user_id}'";
        ${$GLOBALS["ttgbim"]} = mysqli_query(${$GLOBALS["drkkzrhp"]}, ${$GLOBALS["dgyyakrt"]});
        if (mysqli_affected_rows(${$GLOBALS["ympkabudozl"]})) {
            $_SESSION["message"] = "Adcionado com sucesso!";
            header("location: /categories.php");
        } else {
            $_SESSION["erro"] = "Erro ao adicionar!";
            header("location: /categories.php");
        }
    }
}
