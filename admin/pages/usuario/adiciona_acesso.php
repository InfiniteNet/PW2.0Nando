<?php

$GLOBALS["nxkeilttlo"] = "InsertAcesso";
$GLOBALS["lwmyhhbhufs"] = "add";
require_once "../../../pages/system/seguranca.php";
require_once "../../../pages/system/config.php";
protegePagina("donoadmin");
if (isset($_POST["usuario"]) and isset($_POST["qtd"]) and $_POST["servidor"] != 0) {
    if (!is_numeric($_POST["val"])) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Somente valores numericos!\");";
        echo "window.location=\"../../home.php?page=usuario/perfil&id_usuario=" . $_POST["usuario"] . " \";";
        echo "</script>";
        exit;
    }
    $mhmadhcusm = "SQLAcesso";
    if ($_POST["val"] == 0) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Somente valores maiores que 0!\");";
        echo "window.location=\"../../home.php?page=usuario/perfil&id_usuario=" . $_POST["usuario"] . " \";";
        echo "</script>";
        exit;
    }
    $dhugjfghdvl = "SQLAcesso";
    $GLOBALS["dbcuncqrxd"] = "SQLAcesso";
    $SQLAcesso = "select * from acesso_servidor WHERE id_servidor = '" . $_POST["servidor"] . "'\nand id_usuario='" . $_POST["usuario"] . "'  ";
    $SQLAcesso = $conn->prepare(${$mhmadhcusm});
    $SQLAcesso->execute();
    if ($SQLAcesso->rowCount() > 0) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Servidor ja esta salvo!\");";
        echo "window.location=\"../../home.php?page=usuario/listar\";";
        echo "</script>";
    } else {
        $GLOBALS["wryusbtsijl"] = "add";
        ${$GLOBALS["lwmyhhbhufs"]} = date("Y-m-d", strtotime("+ " . $_POST["val"] . " days"));
        ${$GLOBALS["nxkeilttlo"]} = "INSERT INTO acesso_servidor (id_servidor, id_usuario, qtd,validade)\nVALUES ('" . $_POST["servidor"] . "', '" . $_POST["usuario"] . "', '" . $_POST["qtd"] . "','" . ${$GLOBALS["wryusbtsijl"]} . "'  )  ";
        ${$GLOBALS["nxkeilttlo"]} = $conn->prepare(${$GLOBALS["nxkeilttlo"]});
        $InsertAcesso->execute();
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Adicionado com sucesso!\");";
        echo "window.location=\"../../home.php?page=usuario/perfil&id_usuario=" . $_POST["usuario"] . " \";";
        echo "</script>";
    }
} else {
    echo "<script type=\"text/javascript\">";
    echo "alert(\"Preencha todos os campos!\");";
    echo "window.location=\"../../home.php?page=usuario/perfil&id_usuario=" . $_POST["usuario"] . " \";";
    echo "</script>";
}
