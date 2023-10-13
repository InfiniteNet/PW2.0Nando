<?php

$GLOBALS["ddjnxwgg"] = "SQLAcessoSSH";
$GLOBALS["tirbnqsm"] = "total_acesso_ssh_online";
$GLOBALS["cndgclxqguib"] = "cont";
$GLOBALS["hitgyyqewzf"] = "SQLdono";
$GLOBALS["fnhxqpns"] = "rowSub";
$GLOBALS["fwewckoogz"] = "SQLSub";
require_once "../../../pages/system/seguranca.php";
require_once "../../../pages/system/config.php";
require_once "../../../pages/system/classe.ssh.php";
if (isset($_GET["requisicao"])) {
    if ($_GET["requisicao"] == 1) {
        $wcdikiudnp = "SQLSub";
        $SQLSub = "SELECT * FROM conta_ssh";
        $SQLSub = $conn->prepare($SQLSub);
        $SQLSub->execute();
        if ($SQLSub->rowCount() > 0) {
            $yprlqdxwm = "cont";
            $cont = 0;
            while (${$GLOBALS["fnhxqpns"]} = $SQLSub->fetch()) {
                if (${$GLOBALS["fnhxqpns"]}["online"] > 0) {
                    $jwfdifg = "SQLdono";
                    $teepiskkh = "SQLdono";
                    ${$GLOBALS["hitgyyqewzf"]} = "SELECT * FROM usuario where id_usuario='" . ${$GLOBALS["fnhxqpns"]}["id_usuario"] . "'";
                    $GLOBALS["hmkhvtlmj"] = "dono";
                    ${$jwfdifg} = $conn->prepare(${$teepiskkh});
                    $SQLdono->execute();
                    $pvexjio = "rowSub";
                    $yjqgoaincl = "cont";
                    ${$GLOBALS["hmkhvtlmj"]} = $SQLdono->fetch();
                    $uhkdacd = "rowSub";
                    ${$yjqgoaincl} += 1;
                    if (${$GLOBALS["cndgclxqguib"]} == 51) {
                        break;
                    }
                    $ipxbmkrevyc = "rowSub";
                    echo "<div class=\"list-item d-flex align-items-center\">\n<div class=\"me-1\">\n<div class=\"avatar bg-light-success\">\n<div class=\"avatar-content\"><i><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\" height=\"24px\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-zap\">\n<polygon points=\"13 2 3 14 12 14 11 22 21 10 12 10 13 2\"></polygon>\n</svg></i>\n</div>\n</div>\n</div>\n<div class=\"list-item-body flex-grow-1 d-flex justify-content-between\">\n<span class=\"me-3 text-success fw-bolder\">";
                    echo ${$pvexjio}["login"];
                    echo "</span> <span class=\"me-3 text-warning fw-bolder\">";
                    echo ${$uhkdacd}["online"];
                    echo " / ";
                    echo $rowSub["acesso"];
                    echo "</span>\n</div>\n</div>\n";
                }
            }
        }
    } elseif ($_GET["requisicao"] == 2) {
        $mepftxfk = "total_acesso_ssh_online";
        $GLOBALS["twrplzywr"] = "SQLAcessoSSH";
        $GLOBALS["fuojwfn"] = "SQLAcessoSSH";
        $GLOBALS["tffehdugjrdc"] = "SQLAcessoSSH";
        $GLOBALS["ldisdrlhljb"] = "SQLAcessoSSH";
        $total_acesso_ssh_online = 0;
        $SQLAcessoSSH = "SELECT sum(online) AS quantidade FROM conta_ssh";
        $SQLAcessoSSH = $conn->prepare($SQLAcessoSSH);
        $SQLAcessoSSH->execute();
        $SQLAcessoSSH = $SQLAcessoSSH->fetch();
        ${$GLOBALS["tirbnqsm"]} += ${$GLOBALS["ddjnxwgg"]}["quantidade"];
        echo ${$GLOBALS["tirbnqsm"]};
    }
}
