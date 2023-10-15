<?php

$GLOBALS["eifduew"] = "sql";
require_once "pages/system/seguranca.php";
if (isset($_POST["botaologin"])) {
    $mmwdugi = "resultado";
    $GLOBALS["gjydofetj"] = "sql";
    $sql = "SELECT * FROM usuario WHERE login = '" . $_POST["login"] . "' AND senha = '" . $_POST["senha"] . "' LIMIT 1";
    $sql = $conn->prepare($sql);
    $GLOBALS["knonjkcx"] = "resultado";
    $sql->execute();
    $resultado = $sql->fetch();
    if (empty($resultado)) {
        require_once "admin/validacao.php";
    } else {
        require_once "validacao.php";
    }
}
