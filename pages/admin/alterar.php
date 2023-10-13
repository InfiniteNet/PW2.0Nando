<?php

$GLOBALS["nmdepryk"] = "SQLUPUsuario";
$GLOBALS["zwhbrniflvqj"] = "token";
$GLOBALS["cnjtnfy"] = "SQLUser";
$GLOBALS["irurjrib"] = "eu";
$GLOBALS["qwrcwft"] = "SQLUsuario";
$GLOBALS["hsitrjkhmzp"] = "SQLADM";
$GLOBALS["wfwfrjvmki"] = "SQLCSSH";
$GLOBALS["ubmktout"] = "email";
$GLOBALS["ampoaxrws"] = "nome";
$GLOBALS["pmnpaqetbn"] = "login";
require_once "../system/funcoes.php";
require_once "../system/seguranca.php";
require_once "../system/config.php";
$uhhmdwfuwgd = "ipdominio";
require_once "../system/funcoes.system.php";
$GLOBALS["wwgseoyfxy"] = "accessKEY";
protegePagina("user");
if ($_POST["segmax"] !== $accessKEY) {
    expulsaVisitante();
    exit;
}
if ($_POST["ipmax"] !== ${$uhhmdwfuwgd}) {
    expulsaVisitante();
    exit;
}
if (isset($_POST["login"]) and isset($_POST["email"])) {
    $hxdqibqvdd = "bancarios";
    ${$GLOBALS["pmnpaqetbn"]} = sql_injector($_POST["login"]);
    $vgsmnuza = "idcliente";
    $GLOBALS["ofbeewn"] = "SQLADM";
    $qrydrwzgfla = "SQLUsuario";
    ${$GLOBALS["ampoaxrws"]} = sql_injector($_POST["nome"]);
    $GLOBALS["rhjgmi"] = "senha";
    $bxsfswnwjzr = "celular";
    $GLOBALS["wnpvtsmkw"] = "SQLUsuario";
    $GLOBALS["ntxetn"] = "senha";
    ${$GLOBALS["ubmktout"]} = sql_injector($_POST["email"]);
    ${$bxsfswnwjzr} = sql_injector($_POST["celular"]);
    $sxbjro = "SQLCSSH";
    $GLOBALS["exbmkj"] = "token";
    ${$GLOBALS["ntxetn"]} = sql_injector($_POST["senha"]);
    $lqovyjhp = "SQLCSSH";
    ${$vgsmnuza} = $_POST["idcliente"];
    ${$GLOBALS["exbmkj"]} = $_POST["tokensecreto"];
    ${$hxdqibqvdd} = $_POST["bancarios"];
    ${$lqovyjhp} = "select * from conta_ssh WHERE login = '" . $_POST["login"] . "' ";
    ${$GLOBALS["wfwfrjvmki"]} = $conn->prepare(${$sxbjro});
    $SQLCSSH->execute();
    if ($SQLCSSH->rowCount() > 0) {
        echo myalertuser("warning", "O usu\xc3\xa1rio " . $_POST["login"] . " j\xc3\xa1 existe!", "../../home.php?page=admin/dados");
        exit;
    }
    ${$GLOBALS["hsitrjkhmzp"]} = "select * from admin WHERE login = '" . $_POST["login"] . "' ";
    ${$GLOBALS["hsitrjkhmzp"]} = $conn->prepare(${$GLOBALS["ofbeewn"]});
    $SQLADM->execute();
    if ($SQLADM->rowCount() > 0) {
        echo myalertuser("warning", "O usu\xc3\xa1rio " . $_POST["login"] . " j\xc3\xa1 existe!", "../../home.php?page=admin/dados");
        exit;
    }
    if (strlen(${$GLOBALS["rhjgmi"]}) < 5) {
        echo myalertuser("error", "Senha muito curta!", "../../home.php?page=admin/dados");
        exit;
    }
    ${$qrydrwzgfla} = "SELECT * FROM usuario WHERE id_usuario = '" . $_SESSION["usuarioID"] . "'";
    ${$GLOBALS["qwrcwft"]} = $conn->prepare(${$GLOBALS["wnpvtsmkw"]});
    $SQLUsuario->execute();
    if ($SQLUsuario->rowCount() > 0) {
        $homcezp = "eu";
        $GLOBALS["esphmzstfcm"] = "eu";
        $eu = $SQLUsuario->fetch();
        if (${$GLOBALS["pmnpaqetbn"]} !== ${$GLOBALS["irurjrib"]}["login"]) {
            $yclciwf = "SQLUser";
            $GLOBALS["hjlmsmx"] = "SQLUser";
            $SQLUser = "select * from usuario WHERE login = '" . $_POST["login"] . "' ";
            ${$GLOBALS["cnjtnfy"]} = $conn->prepare($SQLUser);
            $SQLUser->execute();
            if ($SQLUser->rowCount() > 0) {
                echo myalertuser("warning", "O usu\xc3\xa1rio " . $_POST["login"] . " j\xc3\xa1 existe!", "../../home.php?page=admin/dados");
                exit;
            }
        }
        if (${$GLOBALS["esphmzstfcm"]}["tipo"] == "revenda") {
            $nusrbrk = "SQLUPUsuario";
            $gdgwohbw = "senha";
            $xgpwgbb = "celular";
            $GLOBALS["pnmoiwpbp"] = "idcliente";
            $GLOBALS["ujhwjbj"] = "bancarios";
            $lzxjgymacqnc = "login";
            $mmmdxchnrjpu = "SQLUPUsuario";
            $SQLUPUsuario = "update usuario set nome='" . ${$GLOBALS["ampoaxrws"]} . "', login='" . $login . "', email='" . ${$GLOBALS["ubmktout"]} . "', celular='" . $celular . "', senha='" . $senha . "', idcliente_mp='" . $idcliente . "', accesstoken='" . ${$GLOBALS["zwhbrniflvqj"]} . "', dadosdeposito='" . $bancarios . "', atualiza_dados='1' WHERE id_usuario = '" . $_SESSION["usuarioID"] . "'";
            $SQLUPUsuario = $conn->prepare(${$GLOBALS["nmdepryk"]});
            $SQLUPUsuario->execute();
        } else {
            $GLOBALS["uxvnpiwpwt"] = "celular";
            $GLOBALS["tonuuqpwrf"] = "senha";
            $xfougac = "SQLUPUsuario";
            $dxmtfcutgwz = "nome";
            $SQLUPUsuario = "update usuario set nome='" . $nome . "', login='" . ${$GLOBALS["pmnpaqetbn"]} . "', email='" . ${$GLOBALS["ubmktout"]} . "', celular='" . $celular . "', senha='" . $senha . "', atualiza_dados='1' WHERE id_usuario = '" . $_SESSION["usuarioID"] . "'";
            ${$GLOBALS["nmdepryk"]} = $conn->prepare(${$GLOBALS["nmdepryk"]});
            $SQLUPUsuario->execute();
        }
        echo myalertuser("success", "Alterado com sucesso !", "../../home.php?page=admin/dados");
    } else {
        echo myalertuser("error", "Erro !", "../../home.php?page=admin/dados");
    }
} else {
    echo myalertuser("error", "Erro !", "../../home.php?page=admin/dados");
}
