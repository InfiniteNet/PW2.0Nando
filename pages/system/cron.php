<?php

$GLOBALS["plustxxviq"] = "rowS";
$GLOBALS["kqvexbzmuru"] = "SQLSubUser";
$GLOBALS["gdlibkotkrt"] = "SQLRevenda";
$GLOBALS["fvxfaefcdpso"] = "SQLUser1";
$GLOBALS["bdyutxon"] = "SQLSSH1";
$GLOBALS["jkyiwubvo"] = "row1";
$GLOBALS["kjludkomp"] = "SQLUserativo";
$GLOBALS["geutnrkekke"] = "rowuser";
$GLOBALS["qiyjdi"] = "SQLUSER";
$GLOBALS["qkuhssbfinjk"] = "dtuser";
$GLOBALS["vgmgvyr"] = "SQLSUS";
$GLOBALS["yuwnjfpm"] = "SQLUPSSH";
$GLOBALS["urghpq"] = "row";
$GLOBALS["uvlckzjpn"] = "SQLSSH";
$GLOBALS["grrosxgdxik"] = "SQLSSH";
$GLOBALS["qddxscrtjyv"] = "data";
$GLOBALS["owtbloggasc"] = "SQLRevenda";
require_once "seguranca.php";
require_once "config.php";
$data = date("Y-m-d H:i:s");
$SQLSSH = "SELECT * FROM conta_ssh where data_validade < '" . $data . "' and status='1'";
$SQLSSH = $conn->prepare($SQLSSH);
$SQLSSH->execute();
if ($SQLSSH->rowCount() > 0) {
    while (${$GLOBALS["urghpq"]} = $SQLSSH->fetch()) {
        $wcbptdcgzsl = "SQLUPSSH";
        $GLOBALS["ickouuokdg"] = "row";
        $scfovcnwsu = "SQLUPSSH";
        $SQLUPSSH = "update conta_ssh set status='2', apagar='2', data_suspensao='" . ${$GLOBALS["qddxscrtjyv"]} . "' WHERE id_usuario_ssh = '" . $row["id_usuario_ssh"] . "'";
        $SQLUPSSH = $conn->prepare(${$GLOBALS["yuwnjfpm"]});
        $SQLUPSSH->execute();
        $bubutb = "row";
        echo "<br>Conta SSH" . $row["login"] . " foi suspensa!<br>";
    }
} else {
    echo "<br>Nenhuma Conta SSH suspensa!<br>";
}
$jjsxaeq = "SQLRevenda";
${$GLOBALS["vgmgvyr"]} = "SELECT * FROM usuario";
${$GLOBALS["vgmgvyr"]} = $conn->prepare(${$GLOBALS["vgmgvyr"]});
$SQLSUS->execute();
if ($SQLSUS->rowCount() > 0) {
    $GLOBALS["gsjfgn"] = "row";
    while (${$GLOBALS["gsjfgn"]} = $SQLSUS->fetch()) {
        $GLOBALS["iteinpy"] = "row";
        $wskczdcq = "dtuser";
        $dtuser = substr($row[validade], 0, 10);
        if (${$GLOBALS["qkuhssbfinjk"]} <= ${$GLOBALS["qddxscrtjyv"]}) {
            ${$GLOBALS["qiyjdi"]} = "SELECT * FROM usuario where id_usuario='" . ${$GLOBALS["urghpq"]}["id_usuario"] . "'";
            $GLOBALS["pspekldjssg"] = "SQLUSER";
            $SQLUSER = $conn->prepare(${$GLOBALS["qiyjdi"]});
            $SQLUSER->execute();
            if ($SQLUSER->rowCount() > 0) {
                while (${$GLOBALS["geutnrkekke"]} = $SQLUSER->fetch()) {
                    $pwlmsvwbtwg = "rowuser";
                    if ($rowuser[ativo] == 1) {
                        $vlregsg = "SQLUserativo";
                        $fyslgwecbrf = "SQLUsuarioSub";
                        $ujzkcgt = "SQLSSH";
                        $jctzgncyg = "SQLSSH";
                        $GLOBALS["unaiuxpsael"] = "SQLUsuarioSub";
                        $SQLSSH = "update conta_ssh set status='2', apagar='2', data_suspensao='" . ${$GLOBALS["qddxscrtjyv"]} . "' WHERE id_usuario = '" . ${$GLOBALS["geutnrkekke"]}[id_usuario] . "'";
                        ${$GLOBALS["uvlckzjpn"]} = $conn->prepare($SQLSSH);
                        $SQLSSH->execute();
                        ${$vlregsg} = "update usuario set ativo='2', apagar='2', suspenso='" . ${$GLOBALS["qddxscrtjyv"]} . "' WHERE id_usuario = '" . ${$GLOBALS["geutnrkekke"]}[id_usuario] . "'";
                        ${$GLOBALS["kjludkomp"]} = $conn->prepare(${$GLOBALS["kjludkomp"]});
                        $GLOBALS["tfwjdcggp"] = "SQLUsuarioSub";
                        $SQLUserativo->execute();
                        ${$GLOBALS["unaiuxpsael"]} = "SELECT * FROM usuario where id_mestre = '" . ${$GLOBALS["geutnrkekke"]}[id_usuario] . "'";
                        ${$GLOBALS["tfwjdcggp"]} = $conn->prepare(${$fyslgwecbrf});
                        $SQLUsuarioSub->execute();
                        if ($SQLUsuarioSub->rowCount() > 0) {
                            while (${$GLOBALS["jkyiwubvo"]} = $SQLUsuarioSub->fetch()) {
                                $GLOBALS["rutxkiwrgp"] = "data";
                                $qxcrfukvpnqw = "SQLSSH1";
                                $rfpzklnj = "row1";
                                $edelogb = "SQLSSH1";
                                $SQLSSH1 = "update conta_ssh set status='2', apagar='2', data_suspensao='" . $data . "' WHERE id_usuario = '" . ${$GLOBALS["jkyiwubvo"]}["id_usuario"] . "'";
                                ${$GLOBALS["bdyutxon"]} = $conn->prepare($SQLSSH1);
                                $SQLSSH1->execute();
                                $GLOBALS["tagdhigg"] = "SQLUser1";
                                $GLOBALS["itrxbpokps"] = "SQLUser1";
                                $SQLUser1 = "update usuario set ativo='2', apagar='1', suspenso='" . ${$GLOBALS["qddxscrtjyv"]} . "' WHERE id_usuario = '" . ${$rfpzklnj}["id_usuario"] . "'";
                                $SQLUser1 = $conn->prepare(${$GLOBALS["fvxfaefcdpso"]});
                                $SQLUser1->execute();
                            }
                        }
                    }
                }
            }
        }
    }
} else {
    echo "<br>Nenhum revendedor suspenso!<br>\n";
}
${$GLOBALS["gdlibkotkrt"]} = "SELECT * FROM usuario where ativo='2' and apagar='1'";
${$GLOBALS["owtbloggasc"]} = $conn->prepare(${$jjsxaeq});
$SQLRevenda->execute();
if ($SQLRevenda->rowCount() > 0) {
    $rpxzco = "row";
    while (${$rpxzco} = $SQLRevenda->fetch()) {
        $iemkmvcupd = "SQLSSH";
        $GLOBALS["cftntquwa"] = "row";
        $GLOBALS["dqtreqd"] = "SQLSSH";
        $GLOBALS["iqddqprux"] = "SQLSSH";
        $GLOBALS["ngsjuedamrn"] = "SQLRevenda";
        $GLOBALS["nujcggpua"] = "SQLSubUser";
        $tdtsyycnvrqg = "SQLSubUser";
        $SQLSSH = "update conta_ssh set status='2', apagar='2', data_suspensao='" . ${$GLOBALS["qddxscrtjyv"]} . "' WHERE id_usuario = '" . $row["id_usuario"] . "'";
        $SQLSSH = $conn->prepare($SQLSSH);
        $SQLSSH->execute();
        ${$GLOBALS["gdlibkotkrt"]} = "update usuario set ativo='2', apagar='2', suspenso='" . ${$GLOBALS["qddxscrtjyv"]} . "' WHERE id_usuario = '" . ${$GLOBALS["urghpq"]}["id_usuario"] . "'";
        ${$GLOBALS["gdlibkotkrt"]} = $conn->prepare(${$GLOBALS["ngsjuedamrn"]});
        $tgxtimyjvlx = "row";
        $SQLRevenda->execute();
        echo "Revendedor " . ${$GLOBALS["urghpq"]}["login"] . " foi suspenso!<br>";
        ${$GLOBALS["nujcggpua"]} = "SELECT * FROM usuario where id_mestre='" . $row["id_usuario"] . "'";
        ${$GLOBALS["kqvexbzmuru"]} = $conn->prepare(${$tdtsyycnvrqg});
        $SQLSubUser->execute();
        if ($SQLSubUser->rowCount() > 0) {
            while (${$GLOBALS["plustxxviq"]} = $SQLSubUser->fetch()) {
                $gxldrebp = "rowS";
                $GLOBALS["tsfaodeq"] = "rowS";
                ${$GLOBALS["uvlckzjpn"]} = "update conta_ssh set status='2', apagar='2', data_suspensao='" . ${$GLOBALS["qddxscrtjyv"]} . "' WHERE id_usuario = '" . $rowS["id_usuario"] . "'";
                $hvgkdefqk = "data";
                ${$GLOBALS["uvlckzjpn"]} = $conn->prepare(${$GLOBALS["uvlckzjpn"]});
                $SQLSSH->execute();
                ${$GLOBALS["gdlibkotkrt"]} = "update usuario set ativo='2', apagar='1', suspenso='" . ${$hvgkdefqk} . "' WHERE id_usuario = '" . ${$gxldrebp}["id_usuario"] . "'";
                ${$GLOBALS["gdlibkotkrt"]} = $conn->prepare(${$GLOBALS["gdlibkotkrt"]});
                $SQLRevenda->execute();
                echo "Revendedor " . ${$GLOBALS["plustxxviq"]}["login"] . " foi suspenso!<br>";
            }
        } else {
            echo "<br>Nenhum revendedor suspenso!<br>";
        }
    }
} else {
    echo "<br>Nenhum revendedor suspenso!<br>";
}
${$GLOBALS["gdlibkotkrt"]} = "SELECT * FROM usuario where validade > '" . ${$GLOBALS["qddxscrtjyv"]} . "' and ativo='1' and apagar='1'";
${$GLOBALS["gdlibkotkrt"]} = $conn->prepare(${$GLOBALS["gdlibkotkrt"]});
$SQLRevenda->execute();
if ($SQLRevenda->rowCount() > 0) {
    while (${$GLOBALS["urghpq"]} = $SQLRevenda->fetch()) {
        $GLOBALS["xmtcrkjhwbxf"] = "row";
        $GLOBALS["ahemncll"] = "SQLRevenda";
        $iphrtmojnpj = "row";
        $GLOBALS["jmwvuuveeey"] = "SQLRevenda";
        $voymazohrtp = "SQLSubUser";
        $jrnmgzkwi = "SQLSSH";
        ${$GLOBALS["uvlckzjpn"]} = "update conta_ssh set status='1', apagar='1' WHERE id_usuario = '" . $row["id_usuario"] . "'";
        ${$jrnmgzkwi} = $conn->prepare(${$GLOBALS["uvlckzjpn"]});
        $SQLSSH->execute();
        ${$GLOBALS["gdlibkotkrt"]} = "update usuario set ativo='1', apagar='0' WHERE id_usuario = '" . ${$GLOBALS["urghpq"]}["id_usuario"] . "'";
        $GLOBALS["flpjvkbf"] = "SQLSubUser";
        ${$GLOBALS["ahemncll"]} = $conn->prepare(${$GLOBALS["jmwvuuveeey"]});
        $SQLRevenda->execute();
        echo "Revendedor " . ${$GLOBALS["urghpq"]}["login"] . " foi liberado!<br>";
        ${$voymazohrtp} = "SELECT * FROM usuario where id_mestre='" . ${$iphrtmojnpj}["id_usuario"] . "'";
        ${$GLOBALS["kqvexbzmuru"]} = $conn->prepare(${$GLOBALS["flpjvkbf"]});
        $SQLSubUser->execute();
        if ($SQLSubUser->rowCount() > 0) {
            while (${$GLOBALS["plustxxviq"]} = $SQLSubUser->fetch()) {
                $ousfeeib = "SQLSSH";
                $cxrsjrsmrn = "rowS";
                $bhgrwjf = "SQLSSH";
                ${$GLOBALS["uvlckzjpn"]} = "update conta_ssh set status='1', apagar='1' WHERE id_usuario = '" . ${$GLOBALS["plustxxviq"]}["id_usuario"] . "'";
                ${$ousfeeib} = $conn->prepare(${$bhgrwjf});
                $SQLSSH->execute();
                ${$GLOBALS["gdlibkotkrt"]} = "update usuario set ativo='1', apagar='1' WHERE id_usuario = '" . ${$cxrsjrsmrn}["id_usuario"] . "'";
                ${$GLOBALS["gdlibkotkrt"]} = $conn->prepare(${$GLOBALS["gdlibkotkrt"]});
                $SQLRevenda->execute();
                echo "Revendedor " . ${$GLOBALS["plustxxviq"]}["login"] . " foi liberado!<br>";
            }
        } else {
            echo "<br>Nenhum revendedor liberado!<br>";
        }
    }
} else {
    echo "<br>Nenhum revendedor liberado!<br>";
}
