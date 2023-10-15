<?php

$GLOBALS["nmrbrgyl"] = "notins";
$GLOBALS["arknpdgkzz"] = "msg";
$GLOBALS["wsncoyhroo"] = "criachamado";
$GLOBALS["wrgntwyhc"] = "usuario";
$GLOBALS["mxgdjygehp"] = "verificausuario";
$GLOBALS["jhjtxbsuc"] = "msgprobl";
$GLOBALS["llhqkgbyx"] = "probl";
$GLOBALS["srjankq"] = "problema";
$GLOBALS["byopkehtnn"] = "motivo";
$GLOBALS["ysedxiepeorf"] = "login";
$GLOBALS["byxtdfbbnure"] = "usuarioid";
require_once "../../pages/system/seguranca.php";
require_once "../../pages/system/config.php";
require_once "../../pages/system/funcoes.php";
require_once "../../pages/system/classe.ssh.php";
require_once "../../pages/system/funcoes.system.php";
$ptqbnfkl = "usuario";
protegePagina("user");
if ($usuario["ativo"] == 2) {
    echo "<script type=\"text/javascript\">";
    echo "window.location=\"home.php?page=suspenso\";";
    echo "</script>";
    exit;
}
if (isset($_POST["tipo"])) {
    $GLOBALS["epspxlqfstk"] = "probl";
    $hxlutibhios = "msgprobl";
    $GLOBALS["mctpqv"] = "verificausuario";
    $GLOBALS["pbbndvuc"] = "usuario";
    $oyppnqkpkk = "problema";
    $GLOBALS["qtnwqfniuge"] = "login";
    $iyfyelgfskg = "usuario";
    ${$GLOBALS["byxtdfbbnure"]} = $_POST["my_id"];
    ${$oyppnqkpkk} = $_POST["tipo"];
    ${$GLOBALS["ysedxiepeorf"]} = $_POST["login"];
    $eynodsnaidg = "probl";
    $GLOBALS["wvdssm"] = "verificausuario";
    $GLOBALS["jqvshkgiv"] = "probl";
    $GLOBALS["ygvijd"] = "probl";
    ${$GLOBALS["byopkehtnn"]} = $_POST["motivo"];
    ${$hxlutibhios} = $_POST["problema"];
    switch (${$GLOBALS["srjankq"]}) {
        case 1:
            ${$GLOBALS["llhqkgbyx"]} = "contassh";
            break;
        case 2:
            ${$GLOBALS["epspxlqfstk"]} = "revendassh";
            break;
        case 3:
            ${$eynodsnaidg} = "usuariossh";
            break;
        case 4:
            ${$GLOBALS["jqvshkgiv"]} = "servidor";
            break;
        case 5:
            ${$GLOBALS["llhqkgbyx"]} = "outros";
            break;
        default:
            ${$GLOBALS["llhqkgbyx"]} = "erro";
            break;
    }
    if (${$GLOBALS["ygvijd"]} == "erro") {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Selecione um Problema Primeiro!\");";
        echo "window.location=\"../../home.php?page=chamados/abrir\";";
        echo "</script>";
        exit;
    }
    if (${$GLOBALS["qtnwqfniuge"]} == "") {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Informe um Login/Servidor/Conta SSH com Problemas!\");";
        echo "window.location=\"../../home.php?page=chamados/abrir\";";
        echo "</script>";
        exit;
    }
    if (${$GLOBALS["byopkehtnn"]} == "") {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Informe um Motivo Principal!\");";
        echo "window.location=\"../../home.php?page=chamados/abrir\";";
        echo "</script>";
        exit;
    }
    if (${$GLOBALS["jhjtxbsuc"]} == "") {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Por favor detalhe o problema!\");";
        echo "window.location=\"../../home.php?page=chamados/abrir\";";
        echo "</script>";
        exit;
    }
    ${$GLOBALS["wvdssm"]} = "SELECT * FROM usuario where id_usuario= '" . ${$GLOBALS["byxtdfbbnure"]} . "'";
    ${$GLOBALS["mxgdjygehp"]} = $conn->prepare(${$GLOBALS["mctpqv"]});
    $verificausuario->execute();
    ${$iyfyelgfskg} = $verificausuario->fetch();
    if (${$GLOBALS["llhqkgbyx"]} == "revendassh" and ${$GLOBALS["pbbndvuc"]}["tipo"] != "revenda") {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Voc\xc3\xaa n\xc3\xa3o \xc3\xa9 revendedor!\");";
        echo "window.location=\"../../home.php?page=chamados/abrir\";";
        echo "</script>";
        exit;
    }
    if (${$GLOBALS["wrgntwyhc"]}["id_mestre"] != 0) {
        $thvwvlk = "criachamado";
        $ebwfpuelwc = "criachamado";
        $GLOBALS["iwkumx"] = "usuario";
        $wwttreyklh = "usuario";
        $GLOBALS["phxyxoimnus"] = "usuario";
        $GLOBALS["jmuqqixxo"] = "notins";
        $GLOBALS["xcsmitvcbod"] = "usuario";
        $criachamado = "insert into chamados (usuario_id,tipo,status,motivo,mensagem,data,id_mestre,login) values ('" . ${$GLOBALS["byxtdfbbnure"]} . "','" . ${$GLOBALS["llhqkgbyx"]} . "','aberto','" . ${$GLOBALS["byopkehtnn"]} . "','" . ${$GLOBALS["jhjtxbsuc"]} . "','" . date("Y-m-d H:i:s") . "','" . $usuario["id_mestre"] . "','" . $usuario["nome"] . "')";
        $GLOBALS["ohjjkz"] = "msg";
        ${$GLOBALS["wsncoyhroo"]} = $conn->prepare($criachamado);
        $criachamado->execute();
        $zkqhhojnjr = "notins";
        ${$GLOBALS["arknpdgkzz"]} = "O Usu\xc3\xa1rio " . ${$GLOBALS["xcsmitvcbod"]}["nome"] . " Acabou de criar um Novo Chamado de Suporte Verifique!";
        ${$GLOBALS["nmrbrgyl"]} = "INSERT INTO notificacoes (usuario_id,data,tipo,linkfatura,mensagem,admin) values ('" . ${$wwttreyklh}["id_mestre"] . "','" . date("Y-m-d H:i:s") . "','chamados','Admin','" . ${$GLOBALS["ohjjkz"]} . "','nao')";
        ${$zkqhhojnjr} = $conn->prepare(${$GLOBALS["jmuqqixxo"]});
        $notins->execute();
    } else {
        $tocmfkov = "msg";
        $ysuatsglhbta = "criachamado";
        $pbufbfttttle = "usuario";
        $GLOBALS["cesrghxvkyr"] = "usuarioid";
        $GLOBALS["ferkwbtb"] = "criachamado";
        $tognufot = "msg";
        $criachamado = "insert into chamados (usuario_id,tipo,status,motivo,mensagem,data,login) values ('" . $usuarioid . "','" . ${$GLOBALS["llhqkgbyx"]} . "','aberto','" . ${$GLOBALS["byopkehtnn"]} . "','" . ${$GLOBALS["jhjtxbsuc"]} . "','" . date("Y-m-d H:i:s") . "','" . ${$GLOBALS["wrgntwyhc"]}["nome"] . "')";
        $GLOBALS["idvgwnmtw"] = "notins";
        ${$GLOBALS["wsncoyhroo"]} = $conn->prepare($criachamado);
        $mjhbbsobeg = "notins";
        $criachamado->execute();
        ${$tocmfkov} = "O Usu\xc3\xa1rio " . ${$pbufbfttttle}["nome"] . " Acabou de criar um Novo Chamado de Suporte Verifique!";
        ${$GLOBALS["nmrbrgyl"]} = "INSERT INTO notificacoes (usuario_id,data,tipo,linkfatura,mensagem,admin) values ('0','" . date("Y-m-d H:i:s") . "','chamados','Admin','" . ${$tognufot} . "','sim')";
        ${$GLOBALS["idvgwnmtw"]} = $conn->prepare(${$mjhbbsobeg});
        $notins->execute();
    }
    echo myalertuser("success", "Ticket criado coom sucesso, aguarde a resposta !", "../../home.php?page=chamados/abertas");
}
