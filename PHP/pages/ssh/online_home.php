<?php

$GLOBALS["bqfiomwkhcq"] = "SQLAcessoSSHon";
$GLOBALS["bxvdysfrj"] = "SQLAcessoSSH";
$GLOBALS["abwssgel"] = "total_acesso_ssh_online";
$GLOBALS["zcdgoq"] = "subussh";
$GLOBALS["zbwrihlxehn"] = "SQLSubssh";
$GLOBALS["ondotdteszvk"] = "subus";
$GLOBALS["ngloflyhx"] = "SQLSubuser";
$GLOBALS["ocpvowxds"] = "eu";
$GLOBALS["snzylgkbo"] = "dono";
$GLOBALS["yzccto"] = "SQLdono";
$GLOBALS["jhnehfgdpwlp"] = "rowSub";
$GLOBALS["seebmbpxpqm"] = "cont";
$GLOBALS["zjerxp"] = "SQLSub";
$GLOBALS["bxogjiv"] = "eubusca";
require_once "../../pages/system/seguranca.php";
require_once "../../pages/system/config.php";
$GLOBALS["migtuxduodxc"] = "usuario";
require_once "../../pages/system/funcoes.php";
require_once "../../pages/system/classe.ssh.php";
protegePagina("user");
if ($usuario["ativo"] == 2) {
    echo "<script type=\"text/javascript\">";
    echo "window.location=\"home.php?page=suspenso\";";
    echo "</script>";
    exit;
}
if (isset($_GET["requisicao"])) {
    $GLOBALS["cdpbmtqjtc"] = "eu";
    $ekdjxjemo = "eubusca";
    ${$GLOBALS["bxogjiv"]} = "SELECT * FROM usuario where id_usuario='" . $_SESSION["usuarioID"] . "'";
    $wibodyv = "eubusca";
    $eubusca = $conn->prepare(${$ekdjxjemo});
    $eubusca->execute();
    ${$GLOBALS["cdpbmtqjtc"]} = $eubusca->fetch();
    if ($_GET["requisicao"] == 1) {
        $ablfqgmruxgx = "SQLSub";
        $SQLSub = "SELECT * FROM conta_ssh where id_usuario='" . $_SESSION["usuarioID"] . "'";
        $cabdyfc = "SQLSub";
        $SQLSub = $conn->prepare(${$GLOBALS["zjerxp"]});
        $SQLSub->execute();
        if ($SQLSub->rowCount() > 0) {
            ${$GLOBALS["seebmbpxpqm"]} = 0;
            while (${$GLOBALS["jhnehfgdpwlp"]} = $SQLSub->fetch()) {
                if (${$GLOBALS["jhnehfgdpwlp"]}["online"] > 0) {
                    $gltdnlgswcc = "SQLdono";
                    $GLOBALS["mlugsvfo"] = "SQLdono";
                    ${$GLOBALS["yzccto"]} = "SELECT * FROM usuario where id_usuario='" . ${$GLOBALS["jhnehfgdpwlp"]}["id_usuario"] . "'";
                    $fnbcces = "cont";
                    ${$gltdnlgswcc} = $conn->prepare(${$GLOBALS["mlugsvfo"]});
                    $SQLdono->execute();
                    ${$GLOBALS["snzylgkbo"]} = $SQLdono->fetch();
                    ${$GLOBALS["seebmbpxpqm"]} += 1;
                    if (${$fnbcces} == 51) {
                        break;
                    }
                    echo "<div class=\"list-item d-flex align-items-center\">\n<div class=\"me-1\">\n<div class=\"avatar bg-light-success\">\n<div class=\"avatar-content\"><i><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-zap\">\n<polygon points=\"13 2 3 14 12 14 11 22 21 10 12 10 13 2\"></polygon>\n</svg></i>\n</div>\n</div>\n</div>\n<div class=\"list-item-body flex-grow-1 d-flex justify-content-between\">\n<span class=\"me-3 text-success fw-bolder\">";
                    $GLOBALS["bpgjhemk"] = "rowSub";
                    echo ${$GLOBALS["jhnehfgdpwlp"]}["login"];
                    echo "</span> <span class=\"me-3 text-warning fw-bolder\">";
                    echo $rowSub["online"];
                    echo " / ";
                    echo ${$GLOBALS["jhnehfgdpwlp"]}["acesso"];
                    echo "</span>\n</div>\n</div>\n";
                }
            }
            if (${$GLOBALS["ocpvowxds"]}["tipo"] == "revenda") {
                $nmnfuai = "SQLSubuser";
                ${$GLOBALS["ngloflyhx"]} = "SELECT * FROM usuario where id_mestre='" . $_SESSION["usuarioID"] . "'";
                ${$GLOBALS["ngloflyhx"]} = $conn->prepare(${$nmnfuai});
                $SQLSubuser->execute();
                if ($SQLSubuser->rowCount() > 0) {
                    while (${$GLOBALS["ondotdteszvk"]} = $SQLSubuser->fetch()) {
                        $GLOBALS["tlpekozrq"] = "SQLSubssh";
                        ${$GLOBALS["zbwrihlxehn"]} = "SELECT * FROM conta_ssh where id_usuario='" . ${$GLOBALS["ondotdteszvk"]}["id_usuario"] . "'";
                        ${$GLOBALS["zbwrihlxehn"]} = $conn->prepare(${$GLOBALS["tlpekozrq"]});
                        $SQLSubssh->execute();
                        if ($SQLSubssh->rowCount() > 0) {
                            $cbxldltg = "subussh";
                            while (${$cbxldltg} = $SQLSubssh->fetch()) {
                                if (${$GLOBALS["zcdgoq"]}["online"] > 0) {
                                    $GLOBALS["gxuhie"] = "subussh";
                                    $ehcpdxhv = "SQLdono";
                                    $GLOBALS["jhsyyiz"] = "subussh";
                                    $bscfyvd = "SQLdono";
                                    $GLOBALS["mnxswbfbqy"] = "dono";
                                    $yxhokotbgev = "subussh";
                                    $SQLdono = "SELECT * FROM usuario where id_usuario='" . $subussh["id_usuario"] . "'";
                                    $SQLdono = $conn->prepare(${$GLOBALS["yzccto"]});
                                    $SQLdono->execute();
                                    $dono = $SQLdono->fetch();
                                    echo "<div class=\"list-item d-flex align-items-center\">\n<div class=\"me-1\">\n<div class=\"avatar bg-light-success\">\n<div class=\"avatar-content\"><i><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-zap\">\n<polygon points=\"13 2 3 14 12 14 11 22 21 10 12 10 13 2\"></polygon>\n</svg></i>\n</div>\n</div>\n</div>\n<div class=\"list-item-body flex-grow-1 d-flex justify-content-between\">\n<span class=\"me-3 text-success fw-bolder\">";
                                    echo ${$GLOBALS["zcdgoq"]}["login"];
                                    echo "</span> <span class=\"me-3 text-warning fw-bolder\">";
                                    echo $subussh["online"];
                                    echo " / ";
                                    echo $subussh["acesso"];
                                    echo "</span>\n</div>\n</div>\n";
                                }
                            }
                        }
                    }
                }
            }
        }
    } elseif ($_GET["requisicao"] == 2) {
        $GLOBALS["uxjwtkypg"] = "SQLAcessoSSH";
        $GLOBALS["hdfxkplq"] = "SQLAcessoSSH";
        ${$GLOBALS["abwssgel"]} = 0;
        ${$GLOBALS["hdfxkplq"]} = "SELECT sum(online) AS quantidade  FROM conta_ssh  where id_usuario='" . $_SESSION["usuarioID"] . "'";
        ${$GLOBALS["bxvdysfrj"]} = $conn->prepare(${$GLOBALS["bxvdysfrj"]});
        $SQLAcessoSSH->execute();
        ${$GLOBALS["bxvdysfrj"]} = $SQLAcessoSSH->fetch();
        ${$GLOBALS["abwssgel"]} += ${$GLOBALS["uxjwtkypg"]}["quantidade"];
        $GLOBALS["bgebcvsodf"] = "eu";
        if ($eu["tipo"] == "revenda") {
            $abyiolmx = "SQLSub";
            ${$GLOBALS["zjerxp"]} = "select * from usuario WHERE id_mestre = '" . $_SESSION["usuarioID"] . "'";
            $GLOBALS["bhupxogyrt"] = "SQLSub";
            ${$abyiolmx} = $conn->prepare($SQLSub);
            $SQLSub->execute();
            if ($SQLSub->rowCount() > 0) {
                $GLOBALS["kgxaqorz"] = "row";
                while (${$GLOBALS["kgxaqorz"]} = $SQLSub->fetch()) {
                    $sljpajg = "SQLAcessoSSHon";
                    $GLOBALS["etzhohglauun"] = "SQLAcessoSSHon";
                    $iyucpyttisp = "row";
                    ${$GLOBALS["bqfiomwkhcq"]} = "SELECT sum(online) AS quantidade  FROM conta_ssh  where id_usuario='" . $row["id_usuario"] . "' ";
                    $sruxpfa = "SQLAcessoSSHon";
                    $GLOBALS["sqofwoj"] = "total_acesso_ssh_online";
                    $SQLAcessoSSHon = $conn->prepare(${$GLOBALS["etzhohglauun"]});
                    $SQLAcessoSSHon->execute();
                    ${$sljpajg} = $SQLAcessoSSHon->fetch();
                    ${$GLOBALS["sqofwoj"]} += ${$GLOBALS["bqfiomwkhcq"]}["quantidade"];
                }
            }
        }
        echo ${$GLOBALS["abwssgel"]};
    }
}
