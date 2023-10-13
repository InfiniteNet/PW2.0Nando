<?php

$GLOBALS["kvfjkgksnxp"] = "diretorio3";
$GLOBALS["hdtpynorno"] = "SQLHistSSH";
$GLOBALS["htlvvmnbx"] = "SQLUPSSH";
$GLOBALS["gdtxjnpdglri"] = "diretorio2";
$GLOBALS["bxpthn"] = "result";
$GLOBALS["salcifmdcv"] = "mdays";
$GLOBALS["sdxukptks"] = "datahoje";
$GLOBALS["jccucofomd"] = "servidor_new";
$GLOBALS["enkfhnoj"] = "SQLservidoral";
$GLOBALS["wnkbhjbc"] = "servidor_old";
$GLOBALS["ljoroiezvle"] = "id_ssh";
$GLOBALS["puyhiyqawgl"] = "id_new_servidor";
$GLOBALS["vqlywsvcqbm"] = "SQLDelSSH";
$GLOBALS["lgjchrtgai"] = "msg";
$GLOBALS["nqsifeu"] = "notins";
$GLOBALS["zkwfjfjxjwce"] = "usuarioid";
$GLOBALS["bobqyecrmiot"] = "sshacc";
$GLOBALS["bxjshky"] = "id_usuario_ssh";
$GLOBALS["lbkixw"] = "UserSSH";
$GLOBALS["hapfxtkib"] = "SQLUserSSH";
$GLOBALS["gxzxhkekmhh"] = "new_owner";
$GLOBALS["iwxxfx"] = "resta";
$GLOBALS["dthvfxc"] = "quantidade_acesso_total";
$GLOBALS["zexfhprx"] = "SQLAcessoSSH";
$GLOBALS["xtoaghu"] = "limite_acesso";
$GLOBALS["jfyishece"] = "acesso_servidor";
$GLOBALS["rlyluovoh"] = "SQLAcessoServidor";
$GLOBALS["wdyvcukqmy"] = "usuario_sistema";
$GLOBALS["qqitjj"] = "SQLUser";
$GLOBALS["cwyfzvxuwh"] = "valida";
$GLOBALS["garvreqnqjr"] = "SQLUsuarioSub";
$GLOBALS["scrfyshtkro"] = "sistema";
$GLOBALS["enepfhjfhbmp"] = "acesso";
$GLOBALS["pvdzkoio"] = "data_validade";
$GLOBALS["mdjjzvlcixdr"] = "dias_acesso";
$GLOBALS["fqqsprsw"] = "SQLSSH";
$GLOBALS["wrntospecsx"] = "id_usuarioSSH";
$GLOBALS["csdlwhmpd"] = "mensagem";
$GLOBALS["yrlrwvudbe"] = "senha";
$GLOBALS["hsvzoutifsl"] = "senhaSSH";
$GLOBALS["nmjlfkxejyn"] = "loginSSH";
$GLOBALS["zullakgbaxh"] = "ssh";
$GLOBALS["merpcxsw"] = "ip_servidor";
$GLOBALS["ashxqi"] = "diretorio";
$GLOBALS["lywrmkiako"] = "usuario_ssh_owner";
$GLOBALS["qrljpewyjflq"] = "conta_ssh";
$GLOBALS["tuozhsbtg"] = "SQLSub";
$GLOBALS["sbddtv"] = "SQLOwner";
$GLOBALS["jyfysfb"] = "servidor";
$GLOBALS["gehlyyxe"] = "SQLServidor";
$GLOBALS["ulderp"] = "SQLUsuarioSSH";
$GLOBALS["wgmiwywjhtuh"] = "id_servidor";
$GLOBALS["rubjyzokh"] = "operacao";
$GLOBALS["yklyldent"] = "accessKEY";
$GLOBALS["irxbkrybh"] = "owner";
require_once "seguranca.php";
require_once "config.php";
$GLOBALS["djslbq"] = "diretorio2";
require_once "funcoes.php";
require_once "classe.ssh.php";
require_once "funcoes.system.php";
$fypbnaowge = "diretorio3";
$GLOBALS["kqzgtibb"] = "data";
$oamumobs = "diretorio";
$data = date("Y-m-d H:i:s");
$diretorio = "";
$diretorio2 = "/admin/home.php?page=ssh/online";
$diretorio3 = "/home.php?page=ssh/online";
if (isset($_POST["op"]) && isset($_POST["owner"])) {
    $GLOBALS["nlwntkdsbt"] = "owner";
    $GLOBALS["ucdmurqhcy"] = "operacao";
    $hnfrijzrkaeq = "accessKEY";
    $operacao = $_POST["op"];
    $GLOBALS["vhxqoprb"] = "operacao";
    $owner = $_POST["owner"];
    $GLOBALS["vkbxvmxb"] = "operacao";
    if ($owner != $accessKEY) {
        protegePagina("user");
    } else {
        if ($owner == $accessKEY) {
            protegePagina("donoadmin");
        }
    }
    $sboblfyb = "operacao";
    $xwvqtoha = "operacao";
    $GLOBALS["bkhvnhndt"] = "operacao";
    $GLOBALS["hmworodhhm"] = "operacao";
    if (${$GLOBALS["rubjyzokh"]} == "senha") {
        if (isset($_POST["id_servidor"]) && isset($_POST["id_usuario_ssh"]) && isset($_POST["diretorio"]) && isset($_POST["senha_ssh"])) {
            $vyjbuia = "id_usuarioSSH";
            $GLOBALS["elxutlvhmpqn"] = "senha";
            $lcushmuca = "SQLUsuarioSSH";
            $GLOBALS["xgvmnyemklub"] = "conta_ssh";
            $suimtbkqh = "accessKEY";
            $senha = $_POST["senha_ssh"];
            $id_usuarioSSH = $_POST["id_usuario_ssh"];
            $GLOBALS["xrilhtjvejw"] = "conta_ssh";
            $izlfkcu = "conta_ssh";
            $wkdwgnkr = "diretorio";
            $GLOBALS["xemmkplxpkob"] = "SQLServidor";
            ${$GLOBALS["wgmiwywjhtuh"]} = $_POST["id_servidor"];
            $yakjvrvc = "id_usuarioSSH";
            ${$wkdwgnkr} = $_POST["diretorio"];
            $GLOBALS["lkmyfnzs"] = "senhaSSH";
            $GLOBALS["kaigwguyfli"] = "loginSSH";
            ${$GLOBALS["ulderp"]} = "select * from conta_ssh WHERE id_usuario_ssh = '" . ${$yakjvrvc} . "'";
            $GLOBALS["xrckrkjhw"] = "SQLSSH";
            $GLOBALS["mtrqkfogve"] = "conta_ssh";
            $fzxfffqujha = "owner";
            ${$GLOBALS["ulderp"]} = $conn->prepare(${$lcushmuca});
            $dhwxpucwdgy = "SQLSSH";
            $GLOBALS["xdtpyjpc"] = "owner";
            $SQLUsuarioSSH->execute();
            ${$izlfkcu} = $SQLUsuarioSSH->fetch();
            if (${$GLOBALS["mtrqkfogve"]}["demo"] == "sim") {
                echo "<script type=\"text/javascript\">";
                $cijfaotzv = "diretorio";
                echo "alert(\"N\xc3\xa3o permitido alterar conta de demonstra\xc3\xa7\xc3\xa3o!\");";
                echo "window.location=\"" . $diretorio . "\";";
                echo "</script>";
                exit;
            }
            ${$GLOBALS["gehlyyxe"]} = "select * from servidor WHERE id_servidor = '" . ${$GLOBALS["wgmiwywjhtuh"]} . "'";
            ${$GLOBALS["xemmkplxpkob"]} = $conn->prepare(${$GLOBALS["gehlyyxe"]});
            $SQLServidor->execute();
            ${$GLOBALS["jyfysfb"]} = $SQLServidor->fetch();
            $klrjlgplfk = "diretorio";
            if (${$fzxfffqujha} != ${$GLOBALS["yklyldent"]}) {
                $GLOBALS["torjnna"] = "SQLOwner";
                $SQLOwner = "select * from usuario WHERE id_usuario = '" . ${$GLOBALS["irxbkrybh"]} . "'";
                ${$GLOBALS["sbddtv"]} = $conn->prepare(${$GLOBALS["sbddtv"]});
                $fykesppwgv = "conta_ssh";
                $SQLOwner->execute();
                ${$GLOBALS["irxbkrybh"]} = $SQLOwner->fetch();
                $GLOBALS["dfubmvc"] = "owner";
                if (!(${$fykesppwgv}["id_usuario"] == $owner["id_usuario"])) {
                    if (${$GLOBALS["irxbkrybh"]}["tipo"] == "revenda") {
                        $jqhtabq = "usuario_ssh_owner";
                        $zdqcolvealh = "owner";
                        ${$GLOBALS["tuozhsbtg"]} = "select * from usuario WHERE id_usuario = '" . ${$GLOBALS["qrljpewyjflq"]}["id_usuario"] . "' and id_mestre='" . $owner["id_usuario"] . "'";
                        $GLOBALS["klgmsiusn"] = "SQLSub";
                        $SQLSub = $conn->prepare(${$GLOBALS["tuozhsbtg"]});
                        $SQLSub->execute();
                        ${$GLOBALS["lywrmkiako"]} = $SQLSub->fetch();
                        if (!(${$GLOBALS["qrljpewyjflq"]}["id_usuario"] == ${$jqhtabq}["id_usuario"])) {
                            echo myalertuser("error", "Sem permissao !", ${$GLOBALS["ashxqi"]});
                            exit;
                        }
                    } else {
                        $fdwsnlqh = "diretorio";
                        echo myalertuser("error", "Sem permissao !", $diretorio);
                        exit;
                    }
                }
            } else {
                if (${$GLOBALS["xdtpyjpc"]} == ${$suimtbkqh}) {
                    ${$GLOBALS["irxbkrybh"]} = 0;
                }
            }
            ${$GLOBALS["merpcxsw"]} = ${$GLOBALS["jyfysfb"]}["ip_servidor"];
            $GLOBALS["tkqhzjdvvx"] = "SQLSSH";
            $GLOBALS["clplolorl"] = "ip_servidor";
            ${$GLOBALS["kaigwguyfli"]} = ${$GLOBALS["jyfysfb"]}["login_server"];
            ${$GLOBALS["lkmyfnzs"]} = ${$GLOBALS["jyfysfb"]}["senha"];
            ${$GLOBALS["zullakgbaxh"]} = new SSH2(${$GLOBALS["clplolorl"]});
            $ssh->auth(${$GLOBALS["nmjlfkxejyn"]}, ${$GLOBALS["hsvzoutifsl"]});
            $ssh->exec("/opt/gestorsinc/AlterarSenha " . ${$GLOBALS["xrilhtjvejw"]}["login"] . " " . ${$GLOBALS["yrlrwvudbe"]} . "");
            ${$GLOBALS["csdlwhmpd"]} = (string) $ssh->output();
            ${$GLOBALS["tkqhzjdvvx"]} = "update conta_ssh set senha='" . ${$GLOBALS["yrlrwvudbe"]} . "' WHERE id_usuario_ssh = '" . ${$GLOBALS["xgvmnyemklub"]}["id_usuario_ssh"] . "'";
            ${$GLOBALS["xrckrkjhw"]} = $conn->prepare(${$dhwxpucwdgy});
            $SQLSSH->execute();
            echo myalertuser("success", "Senha alterada com sucesso!", ${$klrjlgplfk});
        } else {
            $GLOBALS["mmbses"] = "diretorio";
            echo myalertuser("error", "Preencha todos os campos!", $diretorio);
        }
    } else {
        if (${$GLOBALS["rubjyzokh"]} == "valor") {
            if (isset($_POST["id_servidor"]) && isset($_POST["id_usuario_ssh"]) && isset($_POST["diretorio"]) && isset($_POST["valorssh"])) {
                $ytytgkycexd = "SQLUsuarioSSH";
                $bgdzodq = "SQLUsuarioSSH";
                $wmmctifm = "owner";
                $ezwzxtzg = "valorssh";
                $GLOBALS["nualxpu"] = "SQLUsuarioSSH";
                $cuwglbznyu = "SQLSSH";
                $gqqwmzlcvzax = "owner";
                $valorssh = $_POST["valorssh"];
                $GLOBALS["nymjsnidv"] = "SQLServidor";
                $GLOBALS["qdoqne"] = "SQLServidor";
                ${$GLOBALS["wrntospecsx"]} = $_POST["id_usuario_ssh"];
                $qltbkuw = "conta_ssh";
                $GLOBALS["ijdpfd"] = "id_servidor";
                ${$GLOBALS["wgmiwywjhtuh"]} = $_POST["id_servidor"];
                ${$GLOBALS["ashxqi"]} = $_POST["diretorio"];
                $GLOBALS["ioqwscjtzqv"] = "servidor";
                ${$GLOBALS["nualxpu"]} = "select * from conta_ssh WHERE id_usuario_ssh = '" . ${$GLOBALS["wrntospecsx"]} . "'";
                ${$ytytgkycexd} = $conn->prepare(${$bgdzodq});
                $SQLUsuarioSSH->execute();
                ${$GLOBALS["qrljpewyjflq"]} = $SQLUsuarioSSH->fetch();
                $eytshd = "valorssh";
                $GLOBALS["msdnrtsof"] = "SQLServidor";
                if (${$GLOBALS["qrljpewyjflq"]}["demo"] == "sim") {
                    echo "<script type=\"text/javascript\">";
                    echo "alert(\"N\xc3\xa3o permitido alterar conta de demonstra\xc3\xa7\xc3\xa3o!\");";
                    echo "window.location=\"" . ${$GLOBALS["ashxqi"]} . "\";";
                    echo "</script>";
                    exit;
                }
                ${$GLOBALS["msdnrtsof"]} = "select * from servidor WHERE id_servidor = '" . ${$GLOBALS["ijdpfd"]} . "'";
                ${$GLOBALS["nymjsnidv"]} = $conn->prepare(${$GLOBALS["qdoqne"]});
                $SQLServidor->execute();
                ${$GLOBALS["ioqwscjtzqv"]} = $SQLServidor->fetch();
                if (${$wmmctifm} != ${$GLOBALS["yklyldent"]}) {
                    $GLOBALS["wjhlmhqmc"] = "SQLOwner";
                    $eeklbehpwuv = "conta_ssh";
                    $rplretff = "SQLOwner";
                    $SQLOwner = "select * from usuario WHERE id_usuario = '" . ${$GLOBALS["irxbkrybh"]} . "'";
                    $SQLOwner = $conn->prepare(${$GLOBALS["sbddtv"]});
                    $SQLOwner->execute();
                    ${$GLOBALS["irxbkrybh"]} = $SQLOwner->fetch();
                    if (!(${$eeklbehpwuv}["id_usuario"] == ${$GLOBALS["irxbkrybh"]}["id_usuario"])) {
                        if (${$GLOBALS["irxbkrybh"]}["tipo"] == "revenda") {
                            $GLOBALS["jvqivltfxnms"] = "SQLSub";
                            $wrbdvyq = "usuario_ssh_owner";
                            $hpmjpbnkenm = "conta_ssh";
                            $yssqbgagn = "usuario_ssh_owner";
                            $ftnybrpy = "SQLSub";
                            $SQLSub = "select * from usuario WHERE id_usuario = '" . ${$GLOBALS["qrljpewyjflq"]}["id_usuario"] . "' and id_mestre='" . ${$GLOBALS["irxbkrybh"]}["id_usuario"] . "'";
                            ${$GLOBALS["tuozhsbtg"]} = $conn->prepare($SQLSub);
                            $SQLSub->execute();
                            ${$wrbdvyq} = $SQLSub->fetch();
                            if (!(${$hpmjpbnkenm}["id_usuario"] == ${$yssqbgagn}["id_usuario"])) {
                                $hlvyddrid = "diretorio";
                                echo myalertuser("error", "Sem permissao !", $diretorio);
                                exit;
                            }
                        } else {
                            $GLOBALS["yjjsvkw"] = "diretorio";
                            echo myalertuser("error", "Sem permissao !", $diretorio);
                            exit;
                        }
                    }
                } else {
                    if (${$gqqwmzlcvzax} == ${$GLOBALS["yklyldent"]}) {
                        $GLOBALS["wzeoynpjpgsg"] = "owner";
                        $owner = 0;
                    }
                }
                ${$GLOBALS["fqqsprsw"]} = "update conta_ssh set valorconta='" . ${$eytshd} . "' WHERE id_usuario_ssh = '" . ${$qltbkuw}["id_usuario_ssh"] . "'";
                ${$cuwglbznyu} = $conn->prepare(${$GLOBALS["fqqsprsw"]});
                $SQLSSH->execute();
                echo myalertuser("success", "Valor alterado com sucesso!", ${$GLOBALS["ashxqi"]});
            } else {
                $fdwbwigwrn = "diretorio";
                echo myalertuser("error", "Preencha todos os campos!", $diretorio);
            }
        } else {
            if (${$GLOBALS["rubjyzokh"]} == "dias") {
                if (isset($_POST["dias"]) && isset($_POST["id_usuarioSSH"]) && isset($_POST["diretorio"])) {
                    $GLOBALS["wiefjkpckeyr"] = "dias_acesso";
                    $pjcrswzldun = "SQLServidor";
                    $GLOBALS["fwlgxwnur"] = "conta_ssh";
                    $GLOBALS["qfbwfam"] = "conta_ssh";
                    ${$GLOBALS["wrntospecsx"]} = $_POST["id_usuarioSSH"];
                    $GLOBALS["boonzsnqajb"] = "servidor";
                    ${$GLOBALS["mdjjzvlcixdr"]} = $_POST["dias"];
                    ${$GLOBALS["ashxqi"]} = $_POST["diretorio"];
                    $ybncljlrsf = "ip_servidor";
                    $ovquigmepno = "SQLServidor";
                    ${$GLOBALS["wiefjkpckeyr"]} += 1;
                    $jhhtnk = "SQLUsuarioSSH";
                    ${$GLOBALS["ulderp"]} = "select * from conta_ssh WHERE id_usuario_ssh = '" . ${$GLOBALS["wrntospecsx"]} . "'";
                    $GLOBALS["oiiiercbyxe"] = "loginSSH";
                    $GLOBALS["rsrlzinqjwgw"] = "mensagem";
                    $GLOBALS["qedrrzrhjs"] = "servidor";
                    ${$GLOBALS["ulderp"]} = $conn->prepare(${$jhhtnk});
                    $SQLUsuarioSSH->execute();
                    ${$GLOBALS["qfbwfam"]} = $SQLUsuarioSSH->fetch();
                    ${$GLOBALS["wgmiwywjhtuh"]} = ${$GLOBALS["fwlgxwnur"]}["id_servidor"];
                    $iwtkdqblyy = "accessKEY";
                    ${$ovquigmepno} = "select * from servidor WHERE id_servidor = '" . ${$GLOBALS["qrljpewyjflq"]}["id_servidor"] . "'";
                    ${$pjcrswzldun} = $conn->prepare(${$GLOBALS["gehlyyxe"]});
                    $SQLServidor->execute();
                    $GLOBALS["kyictqvr"] = "ssh";
                    ${$GLOBALS["jyfysfb"]} = $SQLServidor->fetch();
                    if (${$GLOBALS["irxbkrybh"]} != ${$GLOBALS["yklyldent"]}) {
                        if (${$GLOBALS["qrljpewyjflq"]}["id_usuario"] != ${$GLOBALS["irxbkrybh"]}) {
                            $kjdxgrpbmyb = "SQLUsuarioSSH";
                            ${$GLOBALS["ulderp"]} = "select * from usuario WHERE id_mestre = '" . ${$GLOBALS["irxbkrybh"]} . "' and id_usuario='" . ${$GLOBALS["qrljpewyjflq"]}["id_usuario"] . "'";
                            ${$kjdxgrpbmyb} = $conn->prepare(${$GLOBALS["ulderp"]});
                            $SQLUsuarioSSH->execute();
                            if ($SQLUsuarioSSH->rowCount() < 0) {
                                echo "<script type=\"text/javascript\">";
                                echo "alert(\"N\xc3\xa3o permitido!!\");";
                                echo "window.location=\"" . ${$GLOBALS["ashxqi"]} . "\";";
                                echo "</script>";
                                exit;
                            }
                        }
                    } else {
                        if (${$GLOBALS["irxbkrybh"]} == ${$iwtkdqblyy}) {
                            $GLOBALS["ocstxou"] = "owner";
                            $owner = 0;
                        }
                    }
                    ${$GLOBALS["merpcxsw"]} = ${$GLOBALS["qedrrzrhjs"]}["ip_servidor"];
                    $qpbvupv = "senhaSSH";
                    ${$GLOBALS["oiiiercbyxe"]} = ${$GLOBALS["boonzsnqajb"]}["login_server"];
                    $cedaurefn = "mensagem";
                    ${$GLOBALS["hsvzoutifsl"]} = ${$GLOBALS["jyfysfb"]}["senha"];
                    ${$GLOBALS["kyictqvr"]} = new SSH2(${$ybncljlrsf});
                    $ssh->auth(${$GLOBALS["nmjlfkxejyn"]}, ${$qpbvupv});
                    $ssh->exec("/opt/gestorsinc/AlterarData " . ${$GLOBALS["qrljpewyjflq"]}["login"] . " " . ${$GLOBALS["mdjjzvlcixdr"]} . "");
                    ${$GLOBALS["csdlwhmpd"]} = (string) $ssh->output();
                    if (${$GLOBALS["csdlwhmpd"]} == 0) {
                        $osimgtw = "diretorio";
                        echo myalertuser("error", "Usu\xc3\xa1rio n\xc3\xa3o existe ou servidor OFFLINE!", $diretorio);
                        exit;
                    }
                    if (${$cedaurefn} == 1) {
                        echo myalertuser("error", "Informe um n\xc3\xbamero maior que zero!", ${$GLOBALS["ashxqi"]});
                        exit;
                    }
                    if (${$GLOBALS["csdlwhmpd"]} == 2) {
                        $GLOBALS["bveiwobxd"] = "diretorio";
                        echo myalertuser("warning", "Digite s\xc3\xb3 n\xc3\xbameros!", $diretorio);
                        exit;
                    }
                    if (${$GLOBALS["rsrlzinqjwgw"]} == 3) {
                        $ldfdfy = "SQLSSH";
                        $GLOBALS["wqypuhelsiri"] = "data_validade";
                        ${$GLOBALS["pvdzkoio"]} = date("Y-m-d H:i:s", strtotime(" + " . ${$GLOBALS["mdjjzvlcixdr"]} . "  days"));
                        $mvbckoef = "SQLSSH";
                        $SQLSSH = "update conta_ssh set data_validade='" . ${$GLOBALS["wqypuhelsiri"]} . "' WHERE id_usuario_ssh = '" . ${$GLOBALS["qrljpewyjflq"]}["id_usuario_ssh"] . "'";
                        ${$GLOBALS["fqqsprsw"]} = $conn->prepare(${$ldfdfy});
                        $SQLSSH->execute();
                        echo myalertuser("success", "Validade alterada com sucesso!", ${$GLOBALS["ashxqi"]});
                    }
                } else {
                    $GLOBALS["llcccihclfp"] = "diretorio";
                    echo myalertuser("warning", "Preencha todos os campos!", $diretorio);
                    exit;
                }
            } else {
                if (${$GLOBALS["rubjyzokh"]} == "acesso") {
                    if (isset($_POST["diretorio"]) && isset($_POST["acesso"]) && isset($_POST["sistema"]) && isset($_POST["id_usuario_ssh"])) {
                        $avhmuusj = "sistema";
                        $GLOBALS["hjmgpuyvqkf"] = "diretorio";
                        $swimcxkgya = "valida";
                        $GLOBALS["nymbezjkpwok"] = "id_usuarioSSH";
                        $luqxoc = "SQLServidor";
                        $GLOBALS["bfpjstmxmyj"] = "SQLServidor";
                        $id_usuarioSSH = $_POST["id_usuario_ssh"];
                        ${$GLOBALS["enepfhjfhbmp"]} = $_POST["acesso"];
                        $GLOBALS["ovvnvdqxdd"] = "sistema";
                        ${$GLOBALS["ashxqi"]} = $_POST["diretorio"];
                        $vkffgoguwqhn = "mensagem";
                        $rrovfmtd = "id_usuarioSSH";
                        $GLOBALS["itwfehbe"] = "diretorio";
                        $xbvsbtjnd = "SQLUsuarioSSH";
                        ${$GLOBALS["ovvnvdqxdd"]} = $_POST["sistema"];
                        $xxivfkqimm = "valida";
                        ${$swimcxkgya} = 0;
                        $yxuzrulzet = "servidor";
                        $hvclvf = "conta_ssh";
                        ${$xbvsbtjnd} = "select * from conta_ssh WHERE id_usuario_ssh = '" . ${$rrovfmtd} . "'";
                        ${$GLOBALS["ulderp"]} = $conn->prepare(${$GLOBALS["ulderp"]});
                        $SQLUsuarioSSH->execute();
                        $ggqeuvmukhg = "senhaSSH";
                        ${$GLOBALS["qrljpewyjflq"]} = $SQLUsuarioSSH->fetch();
                        ${$GLOBALS["bfpjstmxmyj"]} = "select * from servidor WHERE id_servidor = '" . ${$hvclvf}["id_servidor"] . "'";
                        $zbcakkisfaz = "mensagem";
                        ${$luqxoc} = $conn->prepare(${$GLOBALS["gehlyyxe"]});
                        $SQLServidor->execute();
                        ${$GLOBALS["jyfysfb"]} = $SQLServidor->fetch();
                        if (!(${$GLOBALS["qrljpewyjflq"]}["id_usuario"] == ${$avhmuusj})) {
                            $GLOBALS["fzhqvtbk"] = "sistema";
                            $fxtswotvh = "SQLUsuarioSub";
                            $zjfwunux = "SQLUsuarioSub";
                            $SQLUsuarioSub = "select * from usuario WHERE id_mestre = '" . ${$GLOBALS["scrfyshtkro"]} . "' OR id_usuario='" . $sistema . "'";
                            ${$GLOBALS["garvreqnqjr"]} = $conn->prepare($SQLUsuarioSub);
                            $SQLUsuarioSub->execute();
                            if (!($SQLUsuarioSub->rowCount() > 0)) {
                                echo myalertuser("error", "N\xc3\xa3o tem permiss\xc3\xa3o!", ${$GLOBALS["ashxqi"]});
                            } else {
                                ${$GLOBALS["cwyfzvxuwh"]} = 1;
                            }
                        } else {
                            ${$GLOBALS["cwyfzvxuwh"]} = 1;
                        }
                        if (${$xxivfkqimm} == 1) {
                            $hfkdcsq = "quantidade_acesso_total";
                            $GLOBALS["bxuikev"] = "SQLUser";
                            ${$GLOBALS["qqitjj"]} = "select * from usuario WHERE id_usuario = '" . ${$GLOBALS["scrfyshtkro"]} . "'  ";
                            ${$GLOBALS["qqitjj"]} = $conn->prepare(${$GLOBALS["bxuikev"]});
                            $iokpexntbxfr = "usuario_sistema";
                            $joicvppl = "SQLAcessoServidor";
                            $SQLUser->execute();
                            $feriigjjmj = "limite_acesso";
                            ${$GLOBALS["wdyvcukqmy"]} = $SQLUser->fetch();
                            $GLOBALS["vktyddi"] = "limite_acesso";
                            ${$feriigjjmj} = 0;
                            ${$GLOBALS["rlyluovoh"]} = "select * from acesso_servidor WHERE id_usuario = '" . ${$GLOBALS["wdyvcukqmy"]}["id_usuario"] . "' and id_servidor='" . ${$GLOBALS["jyfysfb"]}["id_servidor"] . "'";
                            $GLOBALS["eocoubhergom"] = "SQLAcessoSSH";
                            $GLOBALS["pkgfbofmx"] = "SQLSub";
                            $qtxucon = "SQLSub";
                            ${$GLOBALS["rlyluovoh"]} = $conn->prepare(${$joicvppl});
                            $fbjytgv = "conta_ssh";
                            $SQLAcessoServidor->execute();
                            ${$GLOBALS["jfyishece"]} = $SQLAcessoServidor->fetch();
                            $xogapc = "servidor";
                            $xnahoyxlc = "servidor";
                            $xbewujhj = "SQLSub";
                            $fnewgtslhrfr = "SQLAcessoSSH";
                            ${$GLOBALS["xtoaghu"]} = ${$GLOBALS["jfyishece"]}["qtd"];
                            $GLOBALS["jsakegfdwisx"] = "SQLSub";
                            ${$hfkdcsq} = 0;
                            $wxubwa = "SQLAcessoSSH";
                            ${$GLOBALS["eocoubhergom"]} = "select sum(acesso) AS quantidade from conta_ssh WHERE id_usuario = '" . ${$GLOBALS["wdyvcukqmy"]}["id_usuario"] . "' and id_servidor='" . ${$xogapc}["id_servidor"] . "' and id_usuario_ssh != '" . ${$fbjytgv}["id_usuario_ssh"] . "'";
                            ${$GLOBALS["zexfhprx"]} = $conn->prepare(${$GLOBALS["zexfhprx"]});
                            $SQLAcessoSSH->execute();
                            ${$fnewgtslhrfr} = $SQLAcessoSSH->fetch();
                            $GLOBALS["hjlvdsz"] = "quantidade_acesso_total";
                            ${$GLOBALS["dthvfxc"]} += ${$wxubwa}["quantidade"];
                            ${$qtxucon} = "SELECT sum(qtd) AS limites FROM acesso_servidor WHERE id_servidor = '" . ${$xnahoyxlc}["id_servidor"] . "' and id_mestre='" . ${$iokpexntbxfr}["id_usuario"] . "'";
                            ${$GLOBALS["jsakegfdwisx"]} = $conn->prepare(${$GLOBALS["pkgfbofmx"]});
                            $SQLSub->execute();
                            $rzkjmrqhlbvs = "acesso";
                            ${$GLOBALS["tuozhsbtg"]} = $SQLSub->fetch();
                            ${$GLOBALS["dthvfxc"]} += ${$xbewujhj}["limites"];
                            if (${$GLOBALS["vktyddi"]} < ${$GLOBALS["hjlvdsz"]} + ${$rzkjmrqhlbvs}) {
                                $yfoexyqmtx = "limite_acesso";
                                ${$GLOBALS["iwxxfx"]} = $limite_acesso - ${$GLOBALS["dthvfxc"]};
                                echo myalertuser("error", "S\xc3\xb3 possui " . ${$GLOBALS["iwxxfx"]} . " de limite dispon\xc3\xadvel", ${$GLOBALS["ashxqi"]});
                                exit;
                            }
                        }
                        ${$GLOBALS["merpcxsw"]} = ${$GLOBALS["jyfysfb"]}["ip_servidor"];
                        $GLOBALS["mzdxxkvm"] = "senhaSSH";
                        ${$GLOBALS["nmjlfkxejyn"]} = ${$GLOBALS["jyfysfb"]}["login_server"];
                        $lwgotzr = "diretorio";
                        ${$ggqeuvmukhg} = ${$yxuzrulzet}["senha"];
                        $GLOBALS["wexmhyux"] = "diretorio";
                        ${$GLOBALS["zullakgbaxh"]} = new SSH2(${$GLOBALS["merpcxsw"]});
                        $ssh->auth(${$GLOBALS["nmjlfkxejyn"]}, ${$GLOBALS["mzdxxkvm"]});
                        $ssh->exec("/opt/gestorsinc/alterarlimite " . ${$GLOBALS["qrljpewyjflq"]}["login"] . " " . ${$GLOBALS["enepfhjfhbmp"]} . "");
                        ${$zbcakkisfaz} = (string) $ssh->output();
                        if (${$vkffgoguwqhn} == 4) {
                            $GLOBALS["susebnkuymb"] = "conta_ssh";
                            $qmvesoy = "SQLSSH";
                            ${$GLOBALS["fqqsprsw"]} = "update conta_ssh set acesso='" . ${$GLOBALS["enepfhjfhbmp"]} . "' WHERE id_usuario_ssh = '" . $conta_ssh["id_usuario_ssh"] . "'";
                            ${$qmvesoy} = $conn->prepare(${$GLOBALS["fqqsprsw"]});
                            $SQLSSH->execute();
                        }
                        switch (${$GLOBALS["csdlwhmpd"]}) {
                            case 0:
                                echo myalertuser("error", "Erro no Servidor SSH!", ${$GLOBALS["ashxqi"]});
                                break;
                            case 1:
                                echo myalertuser("error", "Usu\xc3\xa1rio inv\xc3\xa1lido", ${$GLOBALS["wexmhyux"]});
                                break;
                            case 2:
                                echo myalertuser("error", "Limite inv\xc3\xa1lido", ${$lwgotzr});
                                break;
                            case 3:
                                echo myalertuser("warning", "Informe um n\xc3\xbamero maior que zero", ${$GLOBALS["hjmgpuyvqkf"]});
                                break;
                            case 4:
                                echo myalertuser("success", "Limite alterado com sucesso!", ${$GLOBALS["ashxqi"]});
                                break;
                            case 5:
                                echo myalertuser("error", "Usu\xc3\xa1rio invalido", ${$GLOBALS["itwfehbe"]});
                                break;
                        }
                    } else {
                        echo myalertuser("warning", "Preencha todos os campos!", ${$GLOBALS["ashxqi"]});
                        exit;
                    }
                } else {
                    if (${$sboblfyb} == "owner") {
                        if (isset($_POST["n_owner"]) && isset($_POST["id_usuario_ssh"]) && isset($_POST["diretorio"])) {
                            $rpoyfuohegl = "diretorio";
                            $tzaehhdhbacn = "owner";
                            $GLOBALS["cvzxzej"] = "id_usuario_ssh";
                            $diretorio = $_POST["diretorio"];
                            $wqtsdtm = "accessKEY";
                            $id_usuario_ssh = $_POST["id_usuario_ssh"];
                            ${$GLOBALS["gxzxhkekmhh"]} = $_POST["n_owner"];
                            $GLOBALS["ookdqqv"] = "accessKEY";
                            $GLOBALS["pnaahklt"] = "new_owner";
                            if (${$GLOBALS["irxbkrybh"]} != ${$wqtsdtm}) {
                                $GLOBALS["fpylxxyotc"] = "owner";
                                $GLOBALS["dchdndrg"] = "SQLUserSSH";
                                $mcyoqdqm = "id_usuario_ssh";
                                $GLOBALS["cpsxojdppbn"] = "SQLUserSSH";
                                ${$GLOBALS["hapfxtkib"]} = "select * from conta_ssh WHERE id_usuario_ssh = '" . $id_usuario_ssh . "' and id_usuario='" . $owner . "'";
                                ${$GLOBALS["dchdndrg"]} = $conn->prepare(${$GLOBALS["cpsxojdppbn"]});
                                $SQLUserSSH->execute();
                                ${$GLOBALS["lbkixw"]} = $SQLUserSSH->fetch();
                                if (!($SQLUserSSH->rowCount() > 0)) {
                                    $GLOBALS["otxbssawr"] = "UserSSH";
                                    $GLOBALS["mbzpbbibaf"] = "SQLUser";
                                    $GLOBALS["glrfpig"] = "SQLUser";
                                    $GLOBALS["qtgjfvmuxcg"] = "SQLUser";
                                    $SQLUser = "select * from usuario WHERE id_mestre = '" . ${$GLOBALS["irxbkrybh"]} . "' and id_usuario='" . $UserSSH["id_usuario"] . "'";
                                    $SQLUser = $conn->prepare($SQLUser);
                                    $SQLUser->execute();
                                    if (!($SQLUser->rowCount() > 0)) {
                                        $GLOBALS["tcofwlb"] = "diretorio";
                                        echo myalertuser("error", "sem permissao", $diretorio);
                                        exit;
                                    }
                                }
                            } else {
                                if (${$tzaehhdhbacn} == ${$GLOBALS["ookdqqv"]}) {
                                    ${$GLOBALS["irxbkrybh"]} = 0;
                                }
                            }
                            $GLOBALS["ddutpkv"] = "SQLSSH";
                            $GLOBALS["xarcuz"] = "SQLSSH";
                            $SQLSSH = "update conta_ssh set id_usuario='" . ${$GLOBALS["pnaahklt"]} . "' WHERE id_usuario_ssh = '" . ${$GLOBALS["bxjshky"]} . "'";
                            ${$GLOBALS["fqqsprsw"]} = $conn->prepare($SQLSSH);
                            $GLOBALS["rifcvbe"] = "diretorio";
                            $SQLSSH->execute();
                            echo myalertuser("success", "Alterado com sucesso!", $diretorio);
                            exit;
                        } else {
                            echo "<script type=\"text/javascript\">";
                            $GLOBALS["pjossluqatm"] = "diretorio";
                            echo "alert(\"Preencha todos os campos!\");";
                            echo "window.location=\"" . $diretorio . "\";";
                            echo "</script>";
                            exit;
                        }
                    } else {
                        if (${$xwvqtoha} == "deletar") {
                            if (isset($_POST["id_usuario_ssh"]) && isset($_POST["diretorio"])) {
                                $GLOBALS["hchbpfxxd"] = "SQLUsuarioSSH";
                                $jwvlipd = "SQLUser";
                                $GLOBALS["tlkqqbgm"] = "id_usuarioSSH";
                                $GLOBALS["pvsyivxuj"] = "owner";
                                $GLOBALS["ihndnjxk"] = "SQLUser";
                                $jkapvaut = "diretorio";
                                $id_usuarioSSH = $_POST["id_usuario_ssh"];
                                $diretorio = $_POST["diretorio"];
                                $hdtxzkq = "usuario_sistema";
                                $mmrhhqnvpmph = "owner";
                                $gwnqzjice = "SQLDelSSH";
                                ${$GLOBALS["ulderp"]} = "select * from conta_ssh WHERE id_usuario_ssh = '" . ${$GLOBALS["wrntospecsx"]} . "'";
                                ${$GLOBALS["hchbpfxxd"]} = $conn->prepare(${$GLOBALS["ulderp"]});
                                $SQLUsuarioSSH->execute();
                                ${$GLOBALS["qrljpewyjflq"]} = $SQLUsuarioSSH->fetch();
                                $hbmlxkl = "diretorio";
                                $GLOBALS["ktujhyntoee"] = "id_usuarioSSH";
                                if (${$GLOBALS["qrljpewyjflq"]}["demo"] == "sim") {
                                    $GLOBALS["rsyxoprg"] = "diretorio";
                                    echo "<script type=\"text/javascript\">";
                                    echo "alert(\"N\xc3\xa3o permitido alterar conta de demonstra\xc3\xa7\xc3\xa3o!\");";
                                    echo "window.location=\"" . $diretorio . "\";";
                                    echo "</script>";
                                    exit;
                                }
                                ${$GLOBALS["ihndnjxk"]} = "select * from usuario WHERE id_usuario = '" . ${$mmrhhqnvpmph} . "'  ";
                                ${$GLOBALS["qqitjj"]} = $conn->prepare(${$jwvlipd});
                                $SQLUser->execute();
                                ${$hdtxzkq} = $SQLUser->fetch();
                                if (${$GLOBALS["irxbkrybh"]} != ${$GLOBALS["yklyldent"]}) {
                                    $GLOBALS["ddelda"] = "id_usuarioSSH";
                                    $miwzrhkph = "SQLUserSSH";
                                    $GLOBALS["fkpmnxmaq"] = "SQLUserSSH";
                                    $vwicvmdmiyi = "SQLUserSSH";
                                    $SQLUserSSH = "select * from conta_ssh WHERE id_usuario_ssh = '" . $id_usuarioSSH . "' and id_usuario='" . ${$GLOBALS["irxbkrybh"]} . "'";
                                    $SQLUserSSH = $conn->prepare($SQLUserSSH);
                                    $SQLUserSSH->execute();
                                    if (!($SQLUserSSH->rowCount() > 0)) {
                                        $pfbuyfvcxv = "SQLUser";
                                        $GLOBALS["yaedvb"] = "UserSSH";
                                        $GLOBALS["gbpwkjsmarej"] = "SQLUser";
                                        $flinim = "SQLUser";
                                        $UserSSH = $SQLUserSSH->fetch();
                                        $SQLUser = "select * from usuario WHERE id_mestre = '" . ${$GLOBALS["irxbkrybh"]} . "' and id_usuario='" . ${$GLOBALS["qrljpewyjflq"]}["id_usuario"] . "'";
                                        $SQLUser = $conn->prepare($SQLUser);
                                        $SQLUser->execute();
                                        if (!($SQLUser->rowCount() > 0)) {
                                            echo "<script type=\"text/javascript\">";
                                            echo "alert(\"Voce n\xc3\xa3o tem permissao!\");";
                                            echo "window.location=\"" . ${$GLOBALS["ashxqi"]} . "\";";
                                            echo "</script>";
                                            exit;
                                        }
                                    }
                                } else {
                                    if (${$GLOBALS["pvsyivxuj"]} == ${$GLOBALS["yklyldent"]}) {
                                        ${$GLOBALS["irxbkrybh"]} = 0;
                                    }
                                }
                                $GLOBALS["hxqzhswsvu"] = "SQLDelSSH";
                                if (${$GLOBALS["irxbkrybh"]} == 0) {
                                    if (${$GLOBALS["qrljpewyjflq"]}["id_usuario"] != 0) {
                                        $GLOBALS["jcuntkhtkf"] = "usuarioid";
                                        $GLOBALS["eyqgjwl"] = "msg";
                                        $qhudtxhjjwb = "notins";
                                        $GLOBALS["nbjebvor"] = "conta_ssh";
                                        $GLOBALS["gewbhlhrq"] = "notins";
                                        $GLOBALS["lslluutbnl"] = "conta_ssh";
                                        $lrjoyfw = "sshacc";
                                        $sshacc = $conta_ssh["login"];
                                        $ymfzyqnrjv = "msg";
                                        $usuarioid = $conta_ssh["id_usuario"];
                                        $msg = "A Conta SSH <small><b>" . ${$GLOBALS["bobqyecrmiot"]} . "</b></small> foi encerrada!";
                                        $notins = "INSERT INTO notificacoes (usuario_id,data,tipo,linkfatura,mensagem,info_outros) values ('" . ${$GLOBALS["zkwfjfjxjwce"]} . "','" . date("Y-m-d H:i:s") . "','conta','n/d','" . $msg . "','Encerramento')";
                                        $notins = $conn->prepare(${$GLOBALS["nqsifeu"]});
                                        $notins->execute();
                                    }
                                } else {
                                    $ivfwaieqc = "conta_ssh";
                                    if ($conta_ssh["id_usuario"] != 0) {
                                        $GLOBALS["xkjzsketj"] = "conta_ssh";
                                        $GLOBALS["fkscncc"] = "sshacc";
                                        $GLOBALS["oiimkiwfw"] = "msg";
                                        $dpglemwn = "notins";
                                        $hgtofbrclbi = "sshacc";
                                        $sshacc = ${$GLOBALS["qrljpewyjflq"]}["login"];
                                        ${$GLOBALS["zkwfjfjxjwce"]} = $conta_ssh["id_usuario"];
                                        ${$GLOBALS["lgjchrtgai"]} = "Voc\xc3\xaa acabou de encerrar a Conta SSH <small><b>" . ${$GLOBALS["fkscncc"]} . "</b></small>!";
                                        ${$GLOBALS["nqsifeu"]} = "INSERT INTO notificacoes (usuario_id,data,tipo,linkfatura,mensagem,info_outros) values ('" . ${$GLOBALS["zkwfjfjxjwce"]} . "','" . date("Y-m-d H:i:s") . "','conta','n/d','" . ${$GLOBALS["oiimkiwfw"]} . "','Encerramento')";
                                        ${$GLOBALS["nqsifeu"]} = $conn->prepare(${$dpglemwn});
                                        $notins->execute();
                                    }
                                }
                                ${$gwnqzjice} = "update conta_ssh set status='3', apagar='3', id_usuario='0' WHERE id_usuario_ssh = '" . ${$GLOBALS["ktujhyntoee"]} . "'";
                                ${$GLOBALS["vqlywsvcqbm"]} = $conn->prepare(${$GLOBALS["hxqzhswsvu"]});
                                $SQLDelSSH->execute();
                                echo myalertuser("success", "Usuario deletado!", ${$hbmlxkl});
                                exit;
                            } else {
                                $qujrqlrfblc = "diretorio";
                                echo myalertuser("warning", "Preencha todos os campos!", $diretorio);
                                exit;
                            }
                        } else {
                            if (${$GLOBALS["bkhvnhndt"]} == "deletarsusp") {
                                if (isset($_POST["diretorio"]) && isset($_POST["id_usuario_ssh"])) {
                                    $buduylnvjg = "diretorio";
                                    $diretorio = $_POST["diretorio"];
                                    $GLOBALS["ftdxlieftso"] = "id_usuarioSSH";
                                    ${$GLOBALS["wrntospecsx"]} = $_POST["id_usuario_ssh"];
                                    if (!empty(${$GLOBALS["ftdxlieftso"]})) {
                                        $GLOBALS["kfbtuq"] = "SQLDelSSH";
                                        $thgildq = "SQLDelSSH";
                                        $SQLDelSSH = "update conta_ssh set status='3', apagar='3', id_usuario='0' where data_validade < NOW() - INTERVAL 1 DAY and data_suspensao < NOW() - INTERVAL 5 DAY and status >= '2'";
                                        ${$GLOBALS["vqlywsvcqbm"]} = $conn->prepare($SQLDelSSH);
                                        $SQLDelSSH->execute();
                                        echo myalertuser("success", "Contas deletadas!", ${$GLOBALS["ashxqi"]});
                                        exit;
                                    } else {
                                        echo myalertuser("warning", "Nenhuma conta SSH foi deletada!", ${$GLOBALS["ashxqi"]});
                                        exit;
                                    }
                                }
                            } else {
                                if (${$GLOBALS["vhxqoprb"]} == "migrar") {
                                    if (isset($_POST["id_ssh"]) && isset($_POST["id_new_servidor"]) && isset($_POST["diretorio"])) {
                                        $fqkqpsykh = "SQLUsuarioSSH";
                                        $GLOBALS["lewstftfpodd"] = "id_ssh";
                                        $nkuajllqhppe = "SQLUser";
                                        ${$GLOBALS["ashxqi"]} = $_POST["diretorio"];
                                        $smjbolosjkjs = "owner";
                                        ${$GLOBALS["lewstftfpodd"]} = $_POST["id_ssh"];
                                        $GLOBALS["cjjfccn"] = "loginSSH";
                                        $cwwtwew = "servidor_new";
                                        $txwwbstp = "SQLUsuarioSSH";
                                        ${$GLOBALS["puyhiyqawgl"]} = $_POST["id_new_servidor"];
                                        $GLOBALS["thcpvjdgeb"] = "SQLServidor";
                                        $xmbpbojknr = "servidor_new";
                                        ${$GLOBALS["ulderp"]} = "select * from conta_ssh WHERE id_usuario_ssh = '" . ${$GLOBALS["ljoroiezvle"]} . "'";
                                        $eipqqfokuj = "accessKEY";
                                        $xtedovelbqy = "SQLServidor";
                                        $svmtuzxsxkpf = "conta_ssh";
                                        ${$fqkqpsykh} = $conn->prepare(${$txwwbstp});
                                        $GLOBALS["tgzhxlcf"] = "conta_ssh";
                                        $SQLUsuarioSSH->execute();
                                        $conta_ssh = $SQLUsuarioSSH->fetch();
                                        ${$xtedovelbqy} = "select * from servidor WHERE id_servidor = '" . ${$GLOBALS["qrljpewyjflq"]}["id_servidor"] . "'";
                                        ${$GLOBALS["gehlyyxe"]} = $conn->prepare(${$GLOBALS["gehlyyxe"]});
                                        $toorqbwa = "mensagem_new";
                                        $GLOBALS["eyipffr"] = "datauser";
                                        $SQLServidor->execute();
                                        ${$GLOBALS["wnkbhjbc"]} = $SQLServidor->fetch();
                                        $GLOBALS["uycuqqe"] = "result";
                                        ${$GLOBALS["qqitjj"]} = "select * from usuario WHERE id_usuario = '" . ${$GLOBALS["irxbkrybh"]} . "'  ";
                                        ${$nkuajllqhppe} = $conn->prepare(${$GLOBALS["qqitjj"]});
                                        $hyurqxr = "servidor_new";
                                        $SQLUser->execute();
                                        ${$GLOBALS["wdyvcukqmy"]} = $SQLUser->fetch();
                                        $mxqijxk = "mdays2";
                                        $lyylygrvzce = "ssh_new";
                                        if (${$GLOBALS["irxbkrybh"]} != ${$eipqqfokuj}) {
                                            $sqohlhbbjgvn = "SQLUserSSH";
                                            $kejkgsjr = "id_ssh";
                                            $mqhruqku = "SQLservidoral";
                                            $GLOBALS["lmclwftqvzn"] = "id_new_servidor";
                                            ${$GLOBALS["enkfhnoj"]} = "select * from  acesso_servidor WHERE \tid_servidor = '" . $id_new_servidor . "' and id_usuario='" . ${$GLOBALS["irxbkrybh"]} . "'";
                                            $GLOBALS["qmoptglrk"] = "SQLUserSSH";
                                            ${$GLOBALS["enkfhnoj"]} = $conn->prepare(${$mqhruqku});
                                            $SQLservidoral->execute();
                                            $GLOBALS["veiexuo"] = "SQLUserSSH";
                                            ${$sqohlhbbjgvn} = "select * from conta_ssh WHERE id_usuario_ssh = '" . ${$kejkgsjr} . "' and id_usuario='" . ${$GLOBALS["irxbkrybh"]} . "' ";
                                            ${$GLOBALS["qmoptglrk"]} = $conn->prepare(${$GLOBALS["veiexuo"]});
                                            $SQLUserSSH->execute();
                                            if (!($SQLUserSSH->rowCount() > 0)) {
                                                $GLOBALS["nwfujkndfi"] = "UserSSH";
                                                $GLOBALS["xmxdsqbl"] = "conta_ssh";
                                                $UserSSH = $SQLUserSSH->fetch();
                                                $GLOBALS["zsrrkodcrcf"] = "SQLUser";
                                                $GLOBALS["tnvqkexvkrg"] = "SQLUser";
                                                ${$GLOBALS["qqitjj"]} = "select * from usuario WHERE id_mestre = '" . ${$GLOBALS["irxbkrybh"]} . "' and id_usuario='" . $conta_ssh["id_usuario"] . "'";
                                                ${$GLOBALS["zsrrkodcrcf"]} = $conn->prepare(${$GLOBALS["tnvqkexvkrg"]});
                                                $SQLUser->execute();
                                                if (!($SQLUser->rowCount() > 0)) {
                                                    $okrnsuojy = "diretorio";
                                                    echo "<script type=\"text/javascript\">";
                                                    echo "alert(\"Voce nao tem permissao!\");";
                                                    echo "window.location=\"" . $diretorio . "\";";
                                                    echo "</script>";
                                                    exit;
                                                }
                                            }
                                        } else {
                                            if (${$smjbolosjkjs} == ${$GLOBALS["yklyldent"]}) {
                                                $kwxiqqvvyr = "owner";
                                                $owner = 0;
                                            }
                                        }
                                        $wjirifnvcn = "SQLServidor";
                                        $GLOBALS["ctvqscl"] = "datauser";
                                        if (${$GLOBALS["irxbkrybh"]} == 0) {
                                            if (${$GLOBALS["qrljpewyjflq"]}["id_usuario"] != 0) {
                                                $GLOBALS["gongsoncn"] = "usuarioid";
                                                $kcnevezi = "msg";
                                                $deptldqvcdb = "sshacc";
                                                $kfephecj = "sshacc";
                                                $GLOBALS["psqwblndmgu"] = "notins";
                                                $GLOBALS["biwdxxgxfbp"] = "notins";
                                                $sshacc = ${$GLOBALS["qrljpewyjflq"]}["login"];
                                                ${$GLOBALS["zkwfjfjxjwce"]} = ${$GLOBALS["qrljpewyjflq"]}["id_usuario"];
                                                $GLOBALS["fdglwskx"] = "servidor_old";
                                                $GLOBALS["ucihrvdkixkc"] = "msg";
                                                ${$kcnevezi} = "O sistema acabou de Migrar a Conta SSH <small><b>" . ${$deptldqvcdb} . "</b></small> para o Servidor <small><b>" . $servidor_old["nome"] . "</b></small>  !";
                                                ${$GLOBALS["biwdxxgxfbp"]} = "INSERT INTO notificacoes (usuario_id,data,tipo,linkfatura,mensagem,info_outros) values ('" . ${$GLOBALS["gongsoncn"]} . "','" . date("Y-m-d H:i:s") . "','conta','n/d','" . ${$GLOBALS["ucihrvdkixkc"]} . "','Encerramento')";
                                                ${$GLOBALS["nqsifeu"]} = $conn->prepare(${$GLOBALS["psqwblndmgu"]});
                                                $notins->execute();
                                            }
                                        } else {
                                            if (${$GLOBALS["qrljpewyjflq"]}["id_usuario"] != 0) {
                                                $GLOBALS["hbmtbk"] = "usuarioid";
                                                $fpiequo = "sshacc";
                                                $GLOBALS["vjtdeesev"] = "notins";
                                                $sshacc = ${$GLOBALS["qrljpewyjflq"]}["login"];
                                                $GLOBALS["onqghto"] = "notins";
                                                $nmfmqmdatkt = "notins";
                                                $usuarioid = ${$GLOBALS["qrljpewyjflq"]}["id_usuario"];
                                                ${$GLOBALS["lgjchrtgai"]} = "Voc\xc3\xaa migrou a Conta SSH <small><b>" . ${$GLOBALS["bobqyecrmiot"]} . "</b></small> para o Servidor <small><b>" . ${$GLOBALS["wnkbhjbc"]}["nome"] . "</b></small>  !";
                                                ${$nmfmqmdatkt} = "INSERT INTO notificacoes (usuario_id,data,tipo,linkfatura,mensagem,info_outros) values ('" . ${$GLOBALS["zkwfjfjxjwce"]} . "','" . date("Y-m-d H:i:s") . "','conta','n/d','" . ${$GLOBALS["lgjchrtgai"]} . "','Encerramento')";
                                                ${$GLOBALS["vjtdeesev"]} = $conn->prepare(${$GLOBALS["onqghto"]});
                                                $notins->execute();
                                            }
                                        }
                                        ${$GLOBALS["merpcxsw"]} = ${$GLOBALS["wnkbhjbc"]}["ip_servidor"];
                                        ${$GLOBALS["nmjlfkxejyn"]} = ${$GLOBALS["wnkbhjbc"]}["login_server"];
                                        ${$GLOBALS["hsvzoutifsl"]} = ${$GLOBALS["wnkbhjbc"]}["senha"];
                                        ${$GLOBALS["zullakgbaxh"]} = new SSH2(${$GLOBALS["merpcxsw"]});
                                        $ssh->auth(${$GLOBALS["nmjlfkxejyn"]}, ${$GLOBALS["hsvzoutifsl"]});
                                        $hbwwwszkrc = "senhaSSH";
                                        $ssh->exec("/opt/gestorsinc/remover " . ${$GLOBALS["qrljpewyjflq"]}["login"] . "");
                                        ${$GLOBALS["csdlwhmpd"]} = (string) $ssh->output();
                                        ${$GLOBALS["thcpvjdgeb"]} = "select * from servidor WHERE id_servidor = '" . $_POST["id_new_servidor"] . "'";
                                        ${$wjirifnvcn} = $conn->prepare(${$GLOBALS["gehlyyxe"]});
                                        $SQLServidor->execute();
                                        ${$GLOBALS["jccucofomd"]} = $SQLServidor->fetch();
                                        ${$GLOBALS["merpcxsw"]} = ${$xmbpbojknr}["ip_servidor"];
                                        ${$GLOBALS["nmjlfkxejyn"]} = ${$hyurqxr}["login_server"];
                                        ${$hbwwwszkrc} = ${$cwwtwew}["senha"];
                                        ${$lyylygrvzce} = new SSH2(${$GLOBALS["merpcxsw"]});
                                        $ptbbpbkelxpi = "mdays2";
                                        $ssh_new->auth(${$GLOBALS["cjjfccn"]}, ${$GLOBALS["hsvzoutifsl"]});
                                        $GLOBALS["nxudvkpemnwi"] = "datahoje";
                                        ${$GLOBALS["ctvqscl"]} = date_create(${$svmtuzxsxkpf}["data_validade"]);
                                        ${$GLOBALS["nxudvkpemnwi"]} = date_create();
                                        $GLOBALS["vionytrdhpi"] = "conta_ssh";
                                        ${$GLOBALS["uycuqqe"]} = date_diff(${$GLOBALS["eyipffr"]}, ${$GLOBALS["sdxukptks"]});
                                        $hxqrmebekii = "mensagem_new";
                                        ${$GLOBALS["salcifmdcv"]} = date_interval_format(${$GLOBALS["bxpthn"]}, "%a");
                                        $GLOBALS["cmftmt"] = "conta_ssh";
                                        ${$GLOBALS["salcifmdcv"]} += 1;
                                        $ssh_new->exec("/opt/gestorsinc/criarusuario  " . ${$GLOBALS["qrljpewyjflq"]}["login"] . " " . ${$GLOBALS["cmftmt"]}["senha"] . " " . ${$GLOBALS["vionytrdhpi"]}["acesso"] . " " . ${$mxqijxk} . "");
                                        ${$hxqrmebekii} = (string) $ssh_new->output();
                                        if (${$toorqbwa} == 13) {
                                            $GLOBALS["lmuyyvirgmu"] = "SQLDelSSH";
                                            ${$GLOBALS["vqlywsvcqbm"]} = "update conta_ssh set id_servidor='" . $_POST["id_new_servidor"] . "'  WHERE id_usuario_ssh = '" . ${$GLOBALS["qrljpewyjflq"]}["id_usuario_ssh"] . "'";
                                            ${$GLOBALS["vqlywsvcqbm"]} = $conn->prepare(${$GLOBALS["lmuyyvirgmu"]});
                                            $SQLDelSSH->execute();
                                            $ssh->exec("/opt/gestorsinc/remover " . ${$GLOBALS["qrljpewyjflq"]}["login"] . "");
                                            $ssh->output();
                                            echo myalertuser("success", "Migrado com sucesso!", ${$GLOBALS["ashxqi"]});
                                            exit;
                                        } else {
                                            $GLOBALS["qjxbjic"] = "diretorio";
                                            $uskfchecg = "conta_ssh";
                                            $ssh_new->exec("/opt/gestorsinc/remover " . $conta_ssh["login"] . "");
                                            $ssh_new->output();
                                            echo myalertuser("warning", "Erro no servidor!", $diretorio);
                                            exit;
                                        }
                                    } else {
                                        echo myalertuser("warning", "Preencha todos os campos", ${$GLOBALS["ashxqi"]});
                                        exit;
                                    }
                                } else {
                                    if (${$GLOBALS["vkbxvmxb"]} == "kill") {
                                        if (isset($_POST["id_usuario_ssh"]) && isset($_POST["diretorio"])) {
                                            $GLOBALS["jjkjlivogyp"] = "data";
                                            $sodtuwdszp = "usuario_sistema";
                                            $GLOBALS["bqoemb"] = "diretorio";
                                            $diretorio = $_POST["diretorio"];
                                            $GLOBALS["jzowfj"] = "id_ssh";
                                            $id_ssh = $_POST["id_usuario_ssh"];
                                            $GLOBALS["mjlmlek"] = "conta_ssh";
                                            ${$GLOBALS["ulderp"]} = "select * from conta_ssh WHERE id_usuario_ssh = '" . ${$GLOBALS["ljoroiezvle"]} . "'";
                                            $mjouqln = "SQLUser";
                                            ${$GLOBALS["ulderp"]} = $conn->prepare(${$GLOBALS["ulderp"]});
                                            $GLOBALS["fsbgvbpkmh"] = "loginSSH";
                                            $jlhxnxei = "SQLServidor";
                                            $GLOBALS["nzlvbsellobh"] = "SQLUPSSH";
                                            $kthicvqje = "conta_ssh";
                                            $SQLUsuarioSSH->execute();
                                            $conta_ssh = $SQLUsuarioSSH->fetch();
                                            ${$GLOBALS["gehlyyxe"]} = "select * from servidor WHERE id_servidor = '" . ${$GLOBALS["qrljpewyjflq"]}["id_servidor"] . "'";
                                            ${$GLOBALS["gehlyyxe"]} = $conn->prepare(${$jlhxnxei});
                                            $bscqnust = "owner";
                                            $GLOBALS["gnrltnsqjstg"] = "SQLUser";
                                            $SQLServidor->execute();
                                            ${$GLOBALS["jyfysfb"]} = $SQLServidor->fetch();
                                            ${$mjouqln} = "select * from usuario WHERE id_usuario = '" . ${$GLOBALS["irxbkrybh"]} . "'  ";
                                            ${$GLOBALS["qqitjj"]} = $conn->prepare(${$GLOBALS["gnrltnsqjstg"]});
                                            $SQLUser->execute();
                                            $qztpferk = "ip_servidor";
                                            ${$sodtuwdszp} = $SQLUser->fetch();
                                            $srwrgev = "accessKEY";
                                            $swcqnvpihud = "senhaSSH";
                                            $eycdflitnc = "senhaSSH";
                                            $wsblenv = "servidor";
                                            $GLOBALS["beptloreocu"] = "id_ssh";
                                            $GLOBALS["fmsjaghuvzce"] = "loginSSH";
                                            $GLOBALS["renjjrp"] = "SQLUPSSH";
                                            if (${$GLOBALS["irxbkrybh"]} != ${$GLOBALS["yklyldent"]}) {
                                                $GLOBALS["ibisfyksp"] = "SQLUserSSH";
                                                $GLOBALS["kxfcwdrjhpr"] = "owner";
                                                $GLOBALS["jlimpuluorn"] = "id_ssh";
                                                $jognqt = "SQLUserSSH";
                                                $SQLUserSSH = "select * from conta_ssh WHERE id_usuario_ssh = '" . $id_ssh . "' and id_usuario='" . $owner . "'";
                                                ${$GLOBALS["hapfxtkib"]} = $conn->prepare($SQLUserSSH);
                                                $SQLUserSSH->execute();
                                                if (!($SQLUserSSH->rowCount() > 0)) {
                                                    $yzvfamr = "UserSSH";
                                                    $UserSSH = $SQLUserSSH->fetch();
                                                    $vtftvmrgiidi = "owner";
                                                    $bdenjfxa = "SQLUser";
                                                    $SQLUser = "select * from usuario WHERE id_mestre = '" . $owner . "' and id_usuario='" . ${$GLOBALS["qrljpewyjflq"]}["id_usuario"] . "'";
                                                    $clsudcn = "SQLUser";
                                                    $SQLUser = $conn->prepare(${$GLOBALS["qqitjj"]});
                                                    $SQLUser->execute();
                                                    if (!($SQLUser->rowCount() > 0)) {
                                                        echo myalertuser("warning", "Erro!", ${$GLOBALS["gdtxjnpdglri"]});
                                                        exit;
                                                    }
                                                }
                                            } else {
                                                if (${$bscqnust} == ${$srwrgev}) {
                                                    ${$GLOBALS["irxbkrybh"]} = 0;
                                                }
                                            }
                                            ${$qztpferk} = ${$GLOBALS["jyfysfb"]}["ip_servidor"];
                                            ${$GLOBALS["fmsjaghuvzce"]} = ${$GLOBALS["jyfysfb"]}["login_server"];
                                            ${$eycdflitnc} = ${$wsblenv}["senha"];
                                            $GLOBALS["dgdwkekodpp"] = "SQLHistSSH";
                                            ${$GLOBALS["zullakgbaxh"]} = new SSH2(${$GLOBALS["merpcxsw"]});
                                            $ssh->auth(${$GLOBALS["fsbgvbpkmh"]}, ${$swcqnvpihud});
                                            $ssh->exec("/opt/gestorsinc/KillUser " . ${$GLOBALS["mjlmlek"]}["login"] . "");
                                            ${$GLOBALS["csdlwhmpd"]} = (string) $ssh->output();
                                            ${$GLOBALS["nzlvbsellobh"]} = "update conta_ssh set online='0', online_hist='0'  WHERE id_usuario_ssh = '" . ${$GLOBALS["ljoroiezvle"]} . "'";
                                            ${$GLOBALS["renjjrp"]} = $conn->prepare(${$GLOBALS["htlvvmnbx"]});
                                            $SQLUPSSH->execute();
                                            ${$GLOBALS["dgdwkekodpp"]} = "update hist_usuario_ssh_online set hora_desconexao='" . ${$GLOBALS["jjkjlivogyp"]} . "' , status='0' WHERE status='1' and id_usuario= '" . ${$GLOBALS["beptloreocu"]} . "'";
                                            ${$GLOBALS["hdtpynorno"]} = $conn->prepare(${$GLOBALS["hdtpynorno"]});
                                            $oqlvdtwcqi = "diretorio2";
                                            $SQLHistSSH->execute();
                                            echo myalertuser("success", "Usu\xc3\xa1rio Desconectado!", $diretorio2);
                                            exit;
                                        } else {
                                            $cmpdhvwqgci = "diretorio2";
                                            echo myalertuser("warning", "Preencha todos os campos!", $diretorio2);
                                            exit;
                                        }
                                    } else {
                                        if (${$GLOBALS["hmworodhhm"]} == "kill2") {
                                            if (isset($_POST["id_usuario_ssh"]) && isset($_POST["diretorio"])) {
                                                $GLOBALS["sesbtj"] = "SQLUsuarioSSH";
                                                $snkrvzv = "owner";
                                                $GLOBALS["ohqllum"] = "SQLServidor";
                                                ${$GLOBALS["ashxqi"]} = $_POST["diretorio"];
                                                $GLOBALS["hwjgkmbofxev"] = "id_ssh";
                                                ${$GLOBALS["ljoroiezvle"]} = $_POST["id_usuario_ssh"];
                                                $GLOBALS["wqrdmwsmzmi"] = "id_ssh";
                                                ${$GLOBALS["ulderp"]} = "select * from conta_ssh WHERE id_usuario_ssh = '" . ${$GLOBALS["hwjgkmbofxev"]} . "'";
                                                $GLOBALS["ejwsxpcyoosh"] = "SQLUsuarioSSH";
                                                $SQLUsuarioSSH = $conn->prepare(${$GLOBALS["sesbtj"]});
                                                $SQLUsuarioSSH->execute();
                                                $yuligcp = "servidor";
                                                $rpibgwhp = "servidor";
                                                ${$GLOBALS["qrljpewyjflq"]} = $SQLUsuarioSSH->fetch();
                                                $wqjrgnugnb = "SQLHistSSH";
                                                $jmmzwjvxuc = "senhaSSH";
                                                ${$GLOBALS["gehlyyxe"]} = "select * from servidor WHERE id_servidor = '" . ${$GLOBALS["qrljpewyjflq"]}["id_servidor"] . "'";
                                                $GLOBALS["tvpajdy"] = "owner";
                                                ${$GLOBALS["gehlyyxe"]} = $conn->prepare(${$GLOBALS["ohqllum"]});
                                                $sgwgjzqbviu = "accessKEY";
                                                $GLOBALS["gdqlcrmyvie"] = "SQLUser";
                                                $nrrklixwpb = "SQLHistSSH";
                                                $kcuhcefwkj = "owner";
                                                $zqtuntm = "data";
                                                $SQLServidor->execute();
                                                ${$yuligcp} = $SQLServidor->fetch();
                                                ${$GLOBALS["qqitjj"]} = "select * from usuario WHERE id_usuario = '" . ${$kcuhcefwkj} . "'  ";
                                                $qzkxusns = "ip_servidor";
                                                $GLOBALS["ebjdkhrf"] = "SQLUPSSH";
                                                ${$GLOBALS["qqitjj"]} = $conn->prepare(${$GLOBALS["gdqlcrmyvie"]});
                                                $SQLUser->execute();
                                                ${$GLOBALS["wdyvcukqmy"]} = $SQLUser->fetch();
                                                $ymkmvhlut = "loginSSH";
                                                $GLOBALS["dkdwggtkqrf"] = "loginSSH";
                                                if (${$snkrvzv} != ${$sgwgjzqbviu}) {
                                                    $GLOBALS["squlmmxcbr"] = "owner";
                                                    $GLOBALS["ceycsfm"] = "SQLUserSSH";
                                                    $GLOBALS["rdgwzmbkby"] = "SQLUserSSH";
                                                    $SQLUserSSH = "select * from conta_ssh WHERE id_usuario_ssh = '" . ${$GLOBALS["ljoroiezvle"]} . "' and id_usuario='" . $owner . "' ";
                                                    $SQLUserSSH = $conn->prepare(${$GLOBALS["hapfxtkib"]});
                                                    $SQLUserSSH->execute();
                                                    if (!($SQLUserSSH->rowCount() > 0)) {
                                                        $hutxfjka = "SQLUser";
                                                        $cbrsbpqnzf = "UserSSH";
                                                        $UserSSH = $SQLUserSSH->fetch();
                                                        $djvmonrsd = "SQLUser";
                                                        $phdtyx = "SQLUser";
                                                        $SQLUser = "select * from usuario WHERE id_mestre = '" . ${$GLOBALS["irxbkrybh"]} . "' and id_usuario='" . ${$GLOBALS["qrljpewyjflq"]}["id_usuario"] . "'";
                                                        $SQLUser = $conn->prepare($SQLUser);
                                                        $SQLUser->execute();
                                                        if (!($SQLUser->rowCount() > 0)) {
                                                            echo myalertuser("warning", "Erro!", ${$GLOBALS["kvfjkgksnxp"]});
                                                            exit;
                                                        }
                                                    }
                                                } else {
                                                    if (${$GLOBALS["tvpajdy"]} == ${$GLOBALS["yklyldent"]}) {
                                                        ${$GLOBALS["irxbkrybh"]} = 0;
                                                    }
                                                }
                                                ${$GLOBALS["merpcxsw"]} = ${$GLOBALS["jyfysfb"]}["ip_servidor"];
                                                ${$GLOBALS["dkdwggtkqrf"]} = ${$rpibgwhp}["login_server"];
                                                ${$jmmzwjvxuc} = ${$GLOBALS["jyfysfb"]}["senha"];
                                                $GLOBALS["mnpxinh"] = "conta_ssh";
                                                ${$GLOBALS["zullakgbaxh"]} = new SSH2(${$qzkxusns});
                                                $ssh->auth(${$ymkmvhlut}, ${$GLOBALS["hsvzoutifsl"]});
                                                $ssh->exec("/opt/gestorsinc/KillUser " . ${$GLOBALS["mnpxinh"]}["login"] . "");
                                                ${$GLOBALS["csdlwhmpd"]} = (string) $ssh->output();
                                                ${$GLOBALS["htlvvmnbx"]} = "update conta_ssh set online='0', online_hist='0'  WHERE id_usuario_ssh = '" . ${$GLOBALS["ljoroiezvle"]} . "'";
                                                ${$GLOBALS["ebjdkhrf"]} = $conn->prepare(${$GLOBALS["htlvvmnbx"]});
                                                $SQLUPSSH->execute();
                                                ${$wqjrgnugnb} = "update hist_usuario_ssh_online set hora_desconexao='" . ${$zqtuntm} . "' , status='0' WHERE status='1' and id_usuario= '" . ${$GLOBALS["wqrdmwsmzmi"]} . "'";
                                                ${$GLOBALS["hdtpynorno"]} = $conn->prepare(${$nrrklixwpb});
                                                $SQLHistSSH->execute();
                                                echo myalertuser("success", "Usu\xc3\xa1rio Desconectado!", ${$GLOBALS["kvfjkgksnxp"]});
                                                exit;
                                            } else {
                                                $dswcixrpk = "diretorio3";
                                                echo myalertuser("warning", "Preencha todos os campos!", $diretorio3);
                                                exit;
                                            }
                                        } else {
                                            if (${$GLOBALS["rubjyzokh"]} == "suspender") {
                                                if (isset($_POST["id_usuario_ssh"]) && isset($_POST["diretorio"])) {
                                                    $GLOBALS["ejslvt"] = "SQLUsuarioSSH";
                                                    $GLOBALS["thhcsctsmt"] = "accessKEY";
                                                    ${$GLOBALS["wrntospecsx"]} = $_POST["id_usuario_ssh"];
                                                    ${$GLOBALS["ashxqi"]} = $_POST["diretorio"];
                                                    $fyzvvqgal = "SQLUsuarioSSH";
                                                    $mkvajso = "conta_ssh";
                                                    $GLOBALS["cvssbonkw"] = "data";
                                                    $GLOBALS["cfwrjpufsq"] = "SQLUsuarioSSH";
                                                    ${$GLOBALS["ejslvt"]} = "select * from conta_ssh WHERE id_usuario_ssh = '" . ${$GLOBALS["wrntospecsx"]} . "' and status='1' and apagar='0'";
                                                    ${$GLOBALS["cfwrjpufsq"]} = $conn->prepare(${$fyzvvqgal});
                                                    $SQLUsuarioSSH->execute();
                                                    $GLOBALS["srnpptsd"] = "SQLDelSSH";
                                                    ${$mkvajso} = $SQLUsuarioSSH->fetch();
                                                    $ybgbfqdgobrr = "id_usuarioSSH";
                                                    if (${$GLOBALS["irxbkrybh"]} != ${$GLOBALS["thhcsctsmt"]}) {
                                                        $GLOBALS["ndvwrbwvh"] = "SQLUser";
                                                        $dpgnrlfy = "owner";
                                                        $wglsnrejrf = "id_usuarioSSH";
                                                        $GLOBALS["mjzuynczie"] = "SQLUser";
                                                        $btpuotdf = "SQLUser";
                                                        $SQLUser = "select * from usuario WHERE id_usuario = '" . $owner . "'  ";
                                                        $SQLUser = $conn->prepare($SQLUser);
                                                        $SQLUser->execute();
                                                        ${$GLOBALS["wdyvcukqmy"]} = $SQLUser->fetch();
                                                        ${$GLOBALS["hapfxtkib"]} = "select * from conta_ssh WHERE id_usuario_ssh = '" . ${$wglsnrejrf} . "' and id_usuario='" . ${$GLOBALS["irxbkrybh"]} . "'";
                                                        $GLOBALS["qntfbx"] = "SQLUserSSH";
                                                        $SQLUserSSH = $conn->prepare(${$GLOBALS["hapfxtkib"]});
                                                        $SQLUserSSH->execute();
                                                        if (!($SQLUserSSH->rowCount() > 0)) {
                                                            $vmavucqp = "UserSSH";
                                                            $brwwtmfycl = "owner";
                                                            $bcpjgmplpe = "SQLUser";
                                                            $UserSSH = $SQLUserSSH->fetch();
                                                            $SQLUser = "select * from usuario WHERE id_mestre = '" . $owner . "' and id_usuario='" . ${$GLOBALS["qrljpewyjflq"]}["id_usuario"] . "'";
                                                            ${$GLOBALS["qqitjj"]} = $conn->prepare(${$GLOBALS["qqitjj"]});
                                                            $SQLUser->execute();
                                                            if (!($SQLUser->rowCount() > 0)) {
                                                                echo myalertuser("warning", "Erro - sem permiss\xc3\xa3o!", ${$GLOBALS["ashxqi"]});
                                                                exit;
                                                            }
                                                        }
                                                    } else {
                                                        if (${$GLOBALS["irxbkrybh"]} == ${$GLOBALS["yklyldent"]}) {
                                                            ${$GLOBALS["irxbkrybh"]} = 0;
                                                        }
                                                    }
                                                    if (${$GLOBALS["irxbkrybh"]} == 0) {
                                                        if (${$GLOBALS["qrljpewyjflq"]}["id_usuario"] != 0) {
                                                            $GLOBALS["osepkkmief"] = "sshacc";
                                                            $GLOBALS["nlfmik"] = "msg";
                                                            $GLOBALS["muqaurqtokq"] = "conta_ssh";
                                                            $GLOBALS["pisgfcojw"] = "conta_ssh";
                                                            $sshacc = $conta_ssh["login"];
                                                            $GLOBALS["vcldznto"] = "notins";
                                                            ${$GLOBALS["zkwfjfjxjwce"]} = $conta_ssh["id_usuario"];
                                                            ${$GLOBALS["nlfmik"]} = "A Conta SSH <small><b>" . ${$GLOBALS["bobqyecrmiot"]} . "</b></small>! acabou de ser suspensa!";
                                                            $wtfrlrlcnox = "msg";
                                                            ${$GLOBALS["vcldznto"]} = "INSERT INTO notificacoes (usuario_id,data,tipo,linkfatura,mensagem,info_outros) values ('" . ${$GLOBALS["zkwfjfjxjwce"]} . "','" . date("Y-m-d H:i:s") . "','conta','n/d','" . $msg . "','Encerramento')";
                                                            ${$GLOBALS["nqsifeu"]} = $conn->prepare(${$GLOBALS["nqsifeu"]});
                                                            $notins->execute();
                                                        }
                                                    } else {
                                                        $GLOBALS["oqvnhyu"] = "conta_ssh";
                                                        if ($conta_ssh["id_usuario"] != 0) {
                                                            $GLOBALS["whutukimtuv"] = "msg";
                                                            $wllfvykhn = "notins";
                                                            $GLOBALS["cqdnvtwg"] = "conta_ssh";
                                                            $GLOBALS["ifvlnrgf"] = "notins";
                                                            $GLOBALS["gybmcvejfnr"] = "conta_ssh";
                                                            $niltkh = "usuarioid";
                                                            $rmvmdzjuw = "usuarioid";
                                                            $nzqzkoqm = "sshacc";
                                                            $GLOBALS["wjmyiubnu"] = "sshacc";
                                                            $sshacc = $conta_ssh["login"];
                                                            $usuarioid = $conta_ssh["id_usuario"];
                                                            $yhmcfotjvqpt = "notins";
                                                            $msg = "Voc\xc3\xaa acabou de Suspender a Conta SSH <small><b>" . $sshacc . "</b></small>!";
                                                            $notins = "INSERT INTO notificacoes (usuario_id,data,tipo,linkfatura,mensagem,info_outros) values ('" . $usuarioid . "','" . date("Y-m-d H:i:s") . "','conta','n/d','" . ${$GLOBALS["lgjchrtgai"]} . "','Encerramento')";
                                                            $notins = $conn->prepare($notins);
                                                            $notins->execute();
                                                        }
                                                    }
                                                    ${$GLOBALS["vqlywsvcqbm"]} = "update conta_ssh set status='2', apagar='2', data_suspensao='" . ${$GLOBALS["cvssbonkw"]} . "' WHERE id_usuario_ssh = '" . ${$ybgbfqdgobrr} . "'";
                                                    ${$GLOBALS["vqlywsvcqbm"]} = $conn->prepare(${$GLOBALS["srnpptsd"]});
                                                    $frpwrxllsph = "diretorio";
                                                    $SQLDelSSH->execute();
                                                    echo myalertuser("success", "Conta SSH suspendida!", $diretorio);
                                                    exit;
                                                } else {
                                                    $gourgmgbrl = "diretorio";
                                                    echo myalertuser("warning", "Erro - sem solicita\xc3\xa7\xc3\xa3o!", $diretorio);
                                                    exit;
                                                }
                                            } else {
                                                if (${$GLOBALS["rubjyzokh"]} == "ususpender") {
                                                    if (isset($_POST["owner"]) && isset($_POST["id_usuario_ssh"]) && isset($_POST["diretorio"])) {
                                                        $vdedpquk = "diretorio";
                                                        $GLOBALS["snfvnro"] = "SQLUsuarioSSH";
                                                        $GLOBALS["inwiboxv"] = "owner";
                                                        ${$GLOBALS["wrntospecsx"]} = $_POST["id_usuario_ssh"];
                                                        $myiboliq = "SQLUsuarioSSH";
                                                        $GLOBALS["qwbkbflo"] = "SQLDelSSH";
                                                        ${$vdedpquk} = $_POST["diretorio"];
                                                        ${$GLOBALS["inwiboxv"]} = $_POST["owner"];
                                                        ${$myiboliq} = "select * from conta_ssh WHERE id_usuario_ssh = '" . ${$GLOBALS["wrntospecsx"]} . "' and status='2' and apagar='0'";
                                                        $GLOBALS["rfphojlhgxy"] = "diretorio";
                                                        ${$GLOBALS["ulderp"]} = $conn->prepare(${$GLOBALS["snfvnro"]});
                                                        $SQLUsuarioSSH->execute();
                                                        ${$GLOBALS["qrljpewyjflq"]} = $SQLUsuarioSSH->fetch();
                                                        $vkuhwxyl = "id_usuarioSSH";
                                                        if (${$GLOBALS["irxbkrybh"]} != ${$GLOBALS["yklyldent"]}) {
                                                            $lhwvcqe = "id_usuarioSSH";
                                                            ${$GLOBALS["qqitjj"]} = "select * from usuario WHERE id_usuario = '" . ${$GLOBALS["irxbkrybh"]} . "'  ";
                                                            $nxusuhqkw = "SQLUser";
                                                            $SQLUser = $conn->prepare(${$GLOBALS["qqitjj"]});
                                                            $SQLUser->execute();
                                                            $GLOBALS["egofqws"] = "owner";
                                                            ${$GLOBALS["wdyvcukqmy"]} = $SQLUser->fetch();
                                                            ${$GLOBALS["hapfxtkib"]} = "select * from conta_ssh WHERE id_usuario_ssh = '" . ${$lhwvcqe} . "' and id_usuario='" . ${$GLOBALS["egofqws"]} . "'";
                                                            ${$GLOBALS["hapfxtkib"]} = $conn->prepare(${$GLOBALS["hapfxtkib"]});
                                                            $SQLUserSSH->execute();
                                                            if (!($SQLUserSSH->rowCount() > 0)) {
                                                                $GLOBALS["gbdclfsj"] = "SQLUser";
                                                                $GLOBALS["ofndbypx"] = "UserSSH";
                                                                $GLOBALS["wsmtfnht"] = "owner";
                                                                $UserSSH = $SQLUserSSH->fetch();
                                                                $SQLUser = "select * from usuario WHERE id_mestre = '" . $owner . "' and id_usuario='" . ${$GLOBALS["qrljpewyjflq"]}["id_usuario"] . "'";
                                                                ${$GLOBALS["qqitjj"]} = $conn->prepare(${$GLOBALS["qqitjj"]});
                                                                $SQLUser->execute();
                                                                if (!($SQLUser->rowCount() > 0)) {
                                                                    echo myalertuser("warning", "Erro - Permiss\xc3\xa3o negada!", ${$GLOBALS["ashxqi"]});
                                                                    exit;
                                                                }
                                                            }
                                                        } else {
                                                            if (${$GLOBALS["irxbkrybh"]} == ${$GLOBALS["yklyldent"]}) {
                                                                ${$GLOBALS["irxbkrybh"]} = 0;
                                                            }
                                                        }
                                                        ${$GLOBALS["vqlywsvcqbm"]} = "update conta_ssh set status='1', apagar='1' WHERE id_usuario_ssh = '" . ${$vkuhwxyl} . "'";
                                                        ${$GLOBALS["vqlywsvcqbm"]} = $conn->prepare(${$GLOBALS["qwbkbflo"]});
                                                        $SQLDelSSH->execute();
                                                        echo myalertuser("success", "Conta SSH liberada!", ${$GLOBALS["rfphojlhgxy"]});
                                                        exit;
                                                    } else {
                                                        $GLOBALS["xmculf"] = "diretorio";
                                                        echo myalertuser("warning", "Erro - sem solicita\xc3\xa7\xc3\xa3o!", $diretorio);
                                                        exit;
                                                    }
                                                } else {
                                                    if (${$GLOBALS["rubjyzokh"]} == "ususpenderrenov") {
                                                        if (isset($_POST["owner"]) && isset($_POST["id_usuario_ssh"]) && isset($_POST["diretorio"])) {
                                                            ${$GLOBALS["wrntospecsx"]} = $_POST["id_usuario_ssh"];
                                                            $GLOBALS["gmzuijfer"] = "SQLServidor";
                                                            $GLOBALS["vjqgnngcqaj"] = "conta_ssh";
                                                            $GLOBALS["mpmjvdv"] = "conta_ssh";
                                                            $abuhpmks = "SQLUsuarioSSH";
                                                            $hofnioane = "owner";
                                                            ${$GLOBALS["ashxqi"]} = $_POST["diretorio"];
                                                            $btsgnvhnv = "id_usuarioSSH";
                                                            $seifznr = "dias_acesso";
                                                            ${$hofnioane} = $_POST["owner"];
                                                            $hgcwisybie = "SQLServidor";
                                                            ${$abuhpmks} = "select * from conta_ssh WHERE id_usuario_ssh = '" . ${$btsgnvhnv} . "' and status='2' and apagar='0'";
                                                            $vcbutuvnf = "SQLDelSSH";
                                                            $rgegkspnjr = "conta_ssh";
                                                            $GLOBALS["arrymkwmdjbe"] = "SQLServidor";
                                                            $tvnsrzkmjz = "accessKEY";
                                                            ${$GLOBALS["ulderp"]} = $conn->prepare(${$GLOBALS["ulderp"]});
                                                            $sflgnmmrub = "ip_servidor";
                                                            $GLOBALS["wutxbwvpnt"] = "ip_servidor";
                                                            $SQLUsuarioSSH->execute();
                                                            ${$rgegkspnjr} = $SQLUsuarioSSH->fetch();
                                                            ${$GLOBALS["arrymkwmdjbe"]} = "select * from servidor WHERE id_servidor = '" . ${$GLOBALS["vjqgnngcqaj"]}["id_servidor"] . "'";
                                                            $lvkglwkk = "loginSSH";
                                                            ${$GLOBALS["gmzuijfer"]} = $conn->prepare(${$hgcwisybie});
                                                            $SQLServidor->execute();
                                                            ${$GLOBALS["jyfysfb"]} = $SQLServidor->fetch();
                                                            if (${$GLOBALS["irxbkrybh"]} != ${$tvnsrzkmjz}) {
                                                                $GLOBALS["knvmxjyfod"] = "owner";
                                                                ${$GLOBALS["qqitjj"]} = "select * from usuario WHERE id_usuario = '" . $owner . "'  ";
                                                                ${$GLOBALS["qqitjj"]} = $conn->prepare(${$GLOBALS["qqitjj"]});
                                                                $SQLUser->execute();
                                                                $xbezpyo = "SQLUserSSH";
                                                                $GLOBALS["eaonrjsu"] = "usuario_sistema";
                                                                $usuario_sistema = $SQLUser->fetch();
                                                                $GLOBALS["kkqnnqhfe"] = "SQLUserSSH";
                                                                ${$GLOBALS["hapfxtkib"]} = "select * from conta_ssh WHERE id_usuario_ssh = '" . ${$GLOBALS["wrntospecsx"]} . "' and id_usuario='" . ${$GLOBALS["irxbkrybh"]} . "'";
                                                                ${$GLOBALS["kkqnnqhfe"]} = $conn->prepare(${$xbezpyo});
                                                                $SQLUserSSH->execute();
                                                                if (!($SQLUserSSH->rowCount() > 0)) {
                                                                    $GLOBALS["jgptfx"] = "SQLUser";
                                                                    $GLOBALS["cjwgjsvve"] = "UserSSH";
                                                                    $UserSSH = $SQLUserSSH->fetch();
                                                                    $erexvqwm = "owner";
                                                                    ${$GLOBALS["qqitjj"]} = "select * from usuario WHERE id_mestre = '" . $owner . "' and id_usuario='" . ${$GLOBALS["qrljpewyjflq"]}["id_usuario"] . "'";
                                                                    ${$GLOBALS["jgptfx"]} = $conn->prepare(${$GLOBALS["qqitjj"]});
                                                                    $SQLUser->execute();
                                                                    if (!($SQLUser->rowCount() > 0)) {
                                                                        $GLOBALS["lueweghub"] = "diretorio";
                                                                        echo myalertuser("warning", "Erro - Permiss\xc3\xa3o negada!", $diretorio);
                                                                        exit;
                                                                    }
                                                                }
                                                            } else {
                                                                if (${$GLOBALS["irxbkrybh"]} == ${$GLOBALS["yklyldent"]}) {
                                                                    ${$GLOBALS["irxbkrybh"]} = 0;
                                                                }
                                                            }
                                                            $GLOBALS["qxybvuxu"] = "servidor";
                                                            $GLOBALS["fttxgupp"] = "servidor";
                                                            $ueyxjfr = "dias_acesso";
                                                            $GLOBALS["jfuxopy"] = "data_validade";
                                                            $qcimkmspe = "SQLDelSSH";
                                                            $dias_acesso = "31";
                                                            ${$sflgnmmrub} = ${$GLOBALS["jyfysfb"]}["ip_servidor"];
                                                            ${$lvkglwkk} = ${$GLOBALS["qxybvuxu"]}["login_server"];
                                                            ${$GLOBALS["hsvzoutifsl"]} = ${$GLOBALS["fttxgupp"]}["senha"];
                                                            ${$GLOBALS["zullakgbaxh"]} = new SSH2(${$GLOBALS["wutxbwvpnt"]});
                                                            $ssh->auth(${$GLOBALS["nmjlfkxejyn"]}, ${$GLOBALS["hsvzoutifsl"]});
                                                            $ssh->exec("/opt/gestorsinc/AlterarData " . ${$GLOBALS["mpmjvdv"]}["login"] . " " . ${$seifznr} . "");
                                                            ${$GLOBALS["csdlwhmpd"]} = (string) $ssh->output();
                                                            ${$GLOBALS["jfuxopy"]} = date("Y-m-d H:i:s", strtotime(" + " . ${$GLOBALS["mdjjzvlcixdr"]} . "  days"));
                                                            ${$vcbutuvnf} = "update conta_ssh set status='1', apagar='1', data_validade='" . ${$GLOBALS["pvdzkoio"]} . "' WHERE id_usuario_ssh = '" . ${$GLOBALS["wrntospecsx"]} . "'";
                                                            ${$GLOBALS["vqlywsvcqbm"]} = $conn->prepare(${$qcimkmspe});
                                                            $SQLDelSSH->execute();
                                                            echo myalertuser("success", "Conta SSH liberada!", ${$GLOBALS["ashxqi"]});
                                                            exit;
                                                        } else {
                                                            echo myalertuser("warning", "Erro - sem solicita\xc3\xa7\xc3\xa3o!", ${$GLOBALS["ashxqi"]});
                                                            exit;
                                                        }
                                                    } else {
                                                        if (${$GLOBALS["rubjyzokh"]} == "ususpenderconfi") {
                                                            if (isset($_POST["owner"]) && isset($_POST["id_usuario_ssh"]) && isset($_POST["diretorio"])) {
                                                                $mtaiehqt = "diretorio";
                                                                $GLOBALS["hbiuikm"] = "SQLServidor";
                                                                $eumkuhfrz = "ip_servidor";
                                                                $rncobxsbswy = "owner";
                                                                $kcxwgcfwf = "id_usuarioSSH";
                                                                $GLOBALS["gayfpgquelce"] = "id_usuarioSSH";
                                                                $jcdzwkhwq = "accessKEY";
                                                                $GLOBALS["krquvyflrf"] = "conta_ssh";
                                                                $GLOBALS["cqxuvcg"] = "SQLUsuarioSSH";
                                                                $GLOBALS["bqlxumyvg"] = "SQLUsuarioSSH";
                                                                $id_usuarioSSH = $_POST["id_usuario_ssh"];
                                                                $diretorio = $_POST["diretorio"];
                                                                ${$GLOBALS["irxbkrybh"]} = $_POST["owner"];
                                                                $GLOBALS["yxherupqwmw"] = "senhaSSH";
                                                                ${$GLOBALS["cqxuvcg"]} = "select * from conta_ssh WHERE id_usuario_ssh = '" . ${$kcxwgcfwf} . "' and status='2' and apagar='0'";
                                                                ${$GLOBALS["bqlxumyvg"]} = $conn->prepare(${$GLOBALS["ulderp"]});
                                                                $GLOBALS["ecxhnzfdlem"] = "servidor";
                                                                $SQLUsuarioSSH->execute();
                                                                $GLOBALS["dcgmbnlwxy"] = "dias_acesso";
                                                                $qlviikuntnpt = "conta_ssh";
                                                                $GLOBALS["ednmkwly"] = "ssh";
                                                                $xdpilvaovkf = "dias_acesso";
                                                                $GLOBALS["oclouiowyhv"] = "servidor";
                                                                ${$GLOBALS["krquvyflrf"]} = $SQLUsuarioSSH->fetch();
                                                                ${$GLOBALS["gehlyyxe"]} = "select * from servidor WHERE id_servidor = '" . ${$qlviikuntnpt}["id_servidor"] . "'";
                                                                $GLOBALS["csdvfsagh"] = "diretorio";
                                                                ${$GLOBALS["hbiuikm"]} = $conn->prepare(${$GLOBALS["gehlyyxe"]});
                                                                $jvrfmvvdwmee = "loginSSH";
                                                                $SQLServidor->execute();
                                                                ${$GLOBALS["ecxhnzfdlem"]} = $SQLServidor->fetch();
                                                                if (${$rncobxsbswy} != ${$GLOBALS["yklyldent"]}) {
                                                                    ${$GLOBALS["qqitjj"]} = "select * from usuario WHERE id_usuario = '" . ${$GLOBALS["irxbkrybh"]} . "'  ";
                                                                    $GLOBALS["hsydxhqnmrw"] = "SQLUserSSH";
                                                                    $GLOBALS["mxstmmfit"] = "SQLUserSSH";
                                                                    $GLOBALS["nfkkwggkzyj"] = "SQLUser";
                                                                    $SQLUser = $conn->prepare(${$GLOBALS["qqitjj"]});
                                                                    $SQLUser->execute();
                                                                    $nwluttzudjt = "SQLUserSSH";
                                                                    ${$GLOBALS["wdyvcukqmy"]} = $SQLUser->fetch();
                                                                    ${$GLOBALS["hsydxhqnmrw"]} = "select * from conta_ssh WHERE id_usuario_ssh = '" . ${$GLOBALS["wrntospecsx"]} . "' and id_usuario='" . ${$GLOBALS["irxbkrybh"]} . "'";
                                                                    ${$nwluttzudjt} = $conn->prepare(${$GLOBALS["mxstmmfit"]});
                                                                    $SQLUserSSH->execute();
                                                                    if (!($SQLUserSSH->rowCount() > 0)) {
                                                                        $icyrvyva = "SQLUser";
                                                                        $duyxosionvk = "owner";
                                                                        $GLOBALS["gfpdzcdwxi"] = "SQLUser";
                                                                        ${$GLOBALS["lbkixw"]} = $SQLUserSSH->fetch();
                                                                        ${$GLOBALS["gfpdzcdwxi"]} = "select * from usuario WHERE id_mestre = '" . ${$duyxosionvk} . "' and id_usuario='" . ${$GLOBALS["qrljpewyjflq"]}["id_usuario"] . "'";
                                                                        ${$icyrvyva} = $conn->prepare(${$GLOBALS["qqitjj"]});
                                                                        $SQLUser->execute();
                                                                        if (!($SQLUser->rowCount() > 0)) {
                                                                            echo myalertuser("warning", "Erro - Permiss\xc3\xa3o negada!", ${$GLOBALS["ashxqi"]});
                                                                            exit;
                                                                        }
                                                                    }
                                                                } else {
                                                                    if (${$GLOBALS["irxbkrybh"]} == ${$jcdzwkhwq}) {
                                                                        $GLOBALS["isfpaclxowj"] = "owner";
                                                                        $owner = 0;
                                                                    }
                                                                }
                                                                ${$GLOBALS["mdjjzvlcixdr"]} = "4";
                                                                ${$GLOBALS["merpcxsw"]} = ${$GLOBALS["jyfysfb"]}["ip_servidor"];
                                                                ${$GLOBALS["nmjlfkxejyn"]} = ${$GLOBALS["jyfysfb"]}["login_server"];
                                                                ${$GLOBALS["hsvzoutifsl"]} = ${$GLOBALS["oclouiowyhv"]}["senha"];
                                                                $GLOBALS["wbkenmxbi"] = "SQLDelSSH";
                                                                ${$GLOBALS["ednmkwly"]} = new SSH2(${$eumkuhfrz});
                                                                $ssh->auth(${$jvrfmvvdwmee}, ${$GLOBALS["yxherupqwmw"]});
                                                                $ssh->exec("/opt/gestorsinc/AlterarData " . ${$GLOBALS["qrljpewyjflq"]}["login"] . " " . ${$GLOBALS["dcgmbnlwxy"]} . "");
                                                                ${$GLOBALS["csdlwhmpd"]} = (string) $ssh->output();
                                                                ${$GLOBALS["pvdzkoio"]} = date("Y-m-d H:i:s", strtotime(" + " . ${$xdpilvaovkf} . "  days"));
                                                                ${$GLOBALS["vqlywsvcqbm"]} = "update conta_ssh set status='1', apagar='1', data_validade='" . ${$GLOBALS["pvdzkoio"]} . "' WHERE id_usuario_ssh = '" . ${$GLOBALS["wrntospecsx"]} . "'";
                                                                ${$GLOBALS["vqlywsvcqbm"]} = $conn->prepare(${$GLOBALS["wbkenmxbi"]});
                                                                $SQLDelSSH->execute();
                                                                echo myalertuser("success", "Conta SSH liberada!", ${$GLOBALS["csdvfsagh"]});
                                                                exit;
                                                            } else {
                                                                echo myalertuser("warning", "Erro - sem solicita\xc3\xa7\xc3\xa3o!", ${$GLOBALS["ashxqi"]});
                                                                exit;
                                                            }
                                                        } else {
                                                            echo myalertuser("warning", "Erro - sem solicita\xc3\xa7\xc3\xa3o!", ${$GLOBALS["ashxqi"]});
                                                            exit;
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}
