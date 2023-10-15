<?php

$GLOBALS["usnjbpavetbi"] = "SQLSucesso";
$GLOBALS["nndshvw"] = "SQLExcluiRev";
$GLOBALS["hdojwyowyc"] = "SQLExcluiRevnoti3";
$GLOBALS["yrhbltybe"] = "SQLExcluiRevnoti2";
$GLOBALS["ldfvwdcnqjg"] = "SQLExcluiRevnoti";
$GLOBALS["bqnejnfi"] = "SQLExcluichamados2";
$GLOBALS["qdoiby"] = "SQLExcluichamados1";
$GLOBALS["bginrsmerhr"] = "SQLExcluiRevfat3";
$GLOBALS["exrrtlyaqkw"] = "SQLExcluiRevfat";
$GLOBALS["geetjdxz"] = "SQLExcluiAcessor";
$GLOBALS["ucqnmucixjgc"] = "row";
$GLOBALS["edxglpgsgikr"] = "SQLExcluiSRev";
$GLOBALS["tbidkxrv"] = "SQLUsuarioSub";
$GLOBALS["nydtmnfarcc"] = "SQLExcluiAcesso";
$GLOBALS["xcpnwgt"] = "SQLSSH";
$GLOBALS["irogrmx"] = "SQLSMS";
$GLOBALS["afqdgzwqqk"] = "endereco_web";
$GLOBALS["jxxfbmupqf"] = "mensagem";
$GLOBALS["itrmpqegub"] = "SQLSub";
$GLOBALS["epinciausgv"] = "operacao";
$GLOBALS["kxfhnsnb"] = "SQLUpdate";
$GLOBALS["wtclyfqi"] = "usuario_owner";
$GLOBALS["hwmjixocweh"] = "usuario";
$GLOBALS["fefmbjqgfb"] = "SQLUser";
$GLOBALS["wexftharcc"] = "id_usuario";
$GLOBALS["puqidkb"] = "id";
$GLOBALS["octbeat"] = "SQLResID";
$GLOBALS["qjwglpv"] = "SQLNew";
$GLOBALS["qtjgvq"] = "senha";
$GLOBALS["dhugysvmkup"] = "subrevenda";
$GLOBALS["gfzuuakpvpf"] = "nome";
$GLOBALS["huxkqfxtr"] = "add";
$GLOBALS["glusjos"] = "SQLeu";
$GLOBALS["tmcwxhurepa"] = "SQLcelular";
$GLOBALS["gvdlirhow"] = "SQLemail";
$GLOBALS["ctlbwwgiogju"] = "SQLADM";
$GLOBALS["krwxkcru"] = "SQLCSSH";
$GLOBALS["juuiccsgpc"] = "SQLUsuario";
$GLOBALS["usblfl"] = "tipouser";
$GLOBALS["qpbkeepkfhe"] = "celular";
$GLOBALS["yxmhvspirye"] = "login";
$GLOBALS["dhbiufbh"] = "dias";
$GLOBALS["yrqfmip"] = "email";
$GLOBALS["tconqkbsdoyv"] = "valorrev";
$GLOBALS["wduesf"] = "diretorio";
$GLOBALS["railhvlhyisd"] = "accessKEY";
$GLOBALS["nnsugavmhhm"] = "owner";
$GLOBALS["tbldlvdred"] = "tmp";
$GLOBALS["mhsaggreshs"] = "pass";
$GLOBALS["akivplioib"] = "i";
$GLOBALS["zofmckolm"] = "salt";
$GLOBALS["jzusokknekj"] = "administrador";
$GLOBALS["jlfdijivqc"] = "SQLAdministrador";
$GLOBALS["bqrcimwtji"] = "date";
require_once "seguranca.php";
require_once "config.php";
require_once "funcoes.php";
require_once "classe.ssh.php";
$ctsyfgtvy = "dominio";
require_once "funcoes.system.php";
$ukhedef = "SQLAdministrador";
$date = date("Y-m-d H:i:s");
$dominio = $_SERVER["HTTP_HOST"];
$temmzytb = "token";
$SQLAdministrador = "SELECT * FROM admin";
$SQLAdministrador = $conn->prepare($SQLAdministrador);
$SQLAdministrador->execute();
$administrador = $SQLAdministrador->fetch();
function geraToken()
{
    $GLOBALS["bctgllr"] = "pass";
    $salt = "123456ABCDER";
    srand((float) microtime() * 1000000);
    $i = 0;
    $hffymuonyv = "pass";
    $pass = 0;
    while ($i <= 7) {
        $almxwyoubjgd = "tmp";
        $bfbiycxiu = "num";
        $rzmxeaeqz = "pass";
        $nbwnbnn = "i";
        $gxvgogfojt = "num";
        $qntgtjlpr = "salt";
        $num = rand() % 10;
        $tmp = substr($salt, $num, 1);
        $pass .= $tmp;
        $i++;
    }
    return ${$hffymuonyv};
}
$token = geraToken();
if (isset($_GET["op"], $_GET["owner"])) {
    $GLOBALS["dnqbmy"] = "operacao";
    $operacao = $_GET["op"];
    $dtaqiglyu = "operacao";
    $owner = $_GET["owner"];
    $GLOBALS["ajicvloif"] = "operacao";
    $jgplfgkev = "operacao";
    $jyyafou = "owner";
    if ($owner != $accessKEY) {
        protegePagina("user");
    } else {
        if ($owner == $accessKEY) {
            protegePagina("donoadmin");
        }
    }
    if (${$GLOBALS["ajicvloif"]} == "new") {
        if (isset($_GET["diretorio"]) && isset($_GET["subrevenda"]) && isset($_GET["valorrev"]) && isset($_GET["email"]) && isset($_GET["nome"]) && isset($_GET["dias"]) && isset($_GET["login"]) && isset($_GET["senha"]) && isset($_GET["tipo"]) && isset($_GET["celular"]) && isset($_GET["acesso"])) {
            $GLOBALS["vhkugup"] = "senha";
            $shgcondwqo = "SQLCSSH";
            $GLOBALS["uyxowiyv"] = "id";
            $smujqxjyeewl = "SQLNew";
            $GLOBALS["ljrmmcfwv"] = "tipouser";
            $xwnlixn = "token";
            $GLOBALS["fahnegej"] = "subrevenda";
            $rphkocrhef = "SQLNew";
            ${$GLOBALS["wduesf"]} = $_GET["diretorio"];
            ${$GLOBALS["fahnegej"]} = $_GET["subrevenda"];
            ${$GLOBALS["tconqkbsdoyv"]} = $_GET["valorrev"];
            ${$GLOBALS["yrqfmip"]} = $_GET["email"];
            $grvvihippj = "nome";
            $nome = $_GET["nome"];
            $GLOBALS["xgvjiupbpde"] = "accessKEY";
            ${$GLOBALS["dhbiufbh"]} = $_GET["dias"];
            ${$GLOBALS["yxmhvspirye"]} = $_GET["login"];
            $GLOBALS["htjjrdjwmrzu"] = "tipouser";
            ${$GLOBALS["qpbkeepkfhe"]} = $_GET["celular"];
            ${$GLOBALS["vhkugup"]} = $_GET["senha"];
            ${$GLOBALS["usblfl"]} = $_GET["tipo"];
            if (${$GLOBALS["nnsugavmhhm"]} == ${$GLOBALS["xgvjiupbpde"]}) {
                ${$GLOBALS["nnsugavmhhm"]} = 0;
            }
            ${$GLOBALS["juuiccsgpc"]} = "select * from usuario WHERE login = '" . $_GET["login"] . "' ";
            $vnhdolhrw = "SQLADM";
            ${$GLOBALS["juuiccsgpc"]} = $conn->prepare(${$GLOBALS["juuiccsgpc"]});
            $GLOBALS["xwtknwyf"] = "tipouser";
            $ckjarbfn = "SQLcelular";
            $SQLUsuario->execute();
            if ($SQLUsuario->rowCount() > 0) {
                $GLOBALS["ffussqaswc"] = "diretorio";
                echo myalertuser("warning", "O usu\xc3\xa1rio " . $_GET["login"] . " j\xc3\xa1 existe!", $diretorio);
                exit;
            }
            ${$GLOBALS["krwxkcru"]} = "select * from conta_ssh WHERE login = '" . $_GET["login"] . "' ";
            ${$GLOBALS["krwxkcru"]} = $conn->prepare(${$shgcondwqo});
            $SQLCSSH->execute();
            if ($SQLCSSH->rowCount() > 0) {
                $dtybsmrijvn = "diretorio";
                echo myalertuser("warning", "O usu\xc3\xa1rio " . $_GET["login"] . " j\xc3\xa1 existe!", $diretorio);
                exit;
            }
            $GLOBALS["ddzbbkbq"] = "SQLeu";
            ${$vnhdolhrw} = "select * from admin WHERE login = '" . $_GET["login"] . "' ";
            $GLOBALS["jtmwwdphstq"] = "owner";
            $GLOBALS["vwszkvip"] = "SQLADM";
            ${$GLOBALS["ctlbwwgiogju"]} = $conn->prepare($SQLADM);
            $SQLADM->execute();
            $sqflhecgoc = "eumesmo";
            $vtahxuzm = "SQLemail";
            $GLOBALS["bhhiclic"] = "tipouser";
            $npvesctsoocd = "SQLResID";
            $GLOBALS["ypdgwrqwvr"] = "SQLemail";
            if ($SQLADM->rowCount() > 0) {
                $GLOBALS["vuquejrs"] = "diretorio";
                echo myalertuser("warning", "O usu\xc3\xa1rio " . $_GET["login"] . " j\xc3\xa1 existe!", $diretorio);
                exit;
            }
            ${$GLOBALS["gvdlirhow"]} = "select * from usuario WHERE email = '" . $_GET["email"] . "' ";
            ${$GLOBALS["ypdgwrqwvr"]} = $conn->prepare(${$vtahxuzm});
            $GLOBALS["kwqcyjtkf"] = "valorrev";
            $SQLemail->execute();
            if ($SQLemail->rowCount() > 0) {
                $nrdwctx = "diretorio";
                echo myalertuser("warning", "Esse E-MAIL j\xc3\xa1 existe!", $diretorio);
                exit;
            }
            ${$ckjarbfn} = "select * from usuario WHERE celular = '" . $_GET["celular"] . "' ";
            ${$GLOBALS["tmcwxhurepa"]} = $conn->prepare(${$GLOBALS["tmcwxhurepa"]});
            $yywegiufg = "type_access";
            $SQLcelular->execute();
            $GLOBALS["pdwajdd"] = "type_access";
            ${$GLOBALS["glusjos"]} = "select * from usuario WHERE id_usuario = '" . $_SESSION["usuarioID"] . "' ";
            ${$GLOBALS["ddzbbkbq"]} = $conn->prepare(${$GLOBALS["glusjos"]});
            $SQLeu->execute();
            ${$sqflhecgoc} = $SQLeu->fetch();
            if ($SQLcelular->rowCount() > 0) {
                echo myalertuser("warning", "Esse celular j\xc3\xa1 existe!", ${$GLOBALS["wduesf"]});
                exit;
            }
            switch (${$GLOBALS["ljrmmcfwv"]}) {
                case 1:
                    ${$GLOBALS["usblfl"]} = "revenda";
                    break;
                case 2:
                    ${$GLOBALS["xwtknwyf"]} = "vpn";
                    break;
                default:
                    ${$GLOBALS["bhhiclic"]} = "erro";
                    break;
            }
            if (${$GLOBALS["usblfl"]} == "erro") {
                echo myalertuser("warning", "Selecione o tipo de usu\xc3\xa1rio", ${$GLOBALS["wduesf"]});
                exit;
            }
            ${$GLOBALS["usblfl"]} == "revenda";
            ${$GLOBALS["pdwajdd"]} = $_GET["acesso"];
            $yigsdaszkz = "email";
            ${$GLOBALS["huxkqfxtr"]} = date("Y-m-d H:i:s", strtotime("+ " . ${$GLOBALS["dhbiufbh"]} . " days"));
            ${$smujqxjyeewl} = "INSERT INTO usuario (ativo, id_mestre, nome, validade, login, tipo, subrevenda, email, celular, senha, data_cadastro, token_user, permitir_demo, valorrevenda)\nVALUES ('1', '" . ${$GLOBALS["jtmwwdphstq"]} . "', '" . ${$GLOBALS["gfzuuakpvpf"]} . "', '" . ${$GLOBALS["huxkqfxtr"]} . "', '" . ${$GLOBALS["yxmhvspirye"]} . "','" . ${$GLOBALS["htjjrdjwmrzu"]} . "' , '" . ${$GLOBALS["dhugysvmkup"]} . "',  '" . ${$yigsdaszkz} . "',  '" . ${$GLOBALS["qpbkeepkfhe"]} . "', '" . ${$GLOBALS["qtjgvq"]} . "', '" . ${$GLOBALS["bqrcimwtji"]} . "' , '" . ${$xwnlixn} . "' , '" . ${$yywegiufg} . "' , '" . ${$GLOBALS["kwqcyjtkf"]} . "') ";
            $dcopttdh = "dominio";
            ${$rphkocrhef} = $conn->prepare(${$GLOBALS["qjwglpv"]});
            $SQLNew->execute();
            ${$npvesctsoocd} = "SELECT LAST_INSERT_ID() AS last_id";
            ${$GLOBALS["octbeat"]} = $conn->prepare(${$GLOBALS["octbeat"]});
            $SQLResID->execute();
            ${$GLOBALS["puqidkb"]} = $SQLResID->fetch();
            echo info_alert_user(${$dcopttdh}, "" . $_GET["login"] . "", "" . $_GET["senha"] . "", ${$GLOBALS["jzusokknekj"]}["textorev"] . "", "../../home.php?page=usuario/perfil&id_usuario=" . ${$GLOBALS["uyxowiyv"]}["last_id"] . " ");
            exit;
        } else {
            $GLOBALS["jlmeibe"] = "diretorio";
            echo myalertuser("warning", "Preencha todos os campos!", $diretorio);
            exit;
        }
    } else {
        if (${$jgplfgkev} == "dados") {
            if (isset($_GET["id_usuario"]) && isset($_GET["diretorio"]) && isset($_GET["nome"]) && isset($_GET["email"]) && isset($_GET["celular"])) {
                $GLOBALS["hmyvym"] = "email";
                $ispphjurtct = "accessKEY";
                ${$GLOBALS["wexftharcc"]} = $_GET["id_usuario"];
                ${$GLOBALS["wduesf"]} = $_GET["diretorio"];
                ${$GLOBALS["gfzuuakpvpf"]} = $_GET["nome"];
                ${$GLOBALS["hmyvym"]} = $_GET["email"];
                ${$GLOBALS["qpbkeepkfhe"]} = $_GET["celular"];
                ${$GLOBALS["fefmbjqgfb"]} = "select * from usuario WHERE id_usuario = '" . ${$GLOBALS["wexftharcc"]} . "'  ";
                ${$GLOBALS["fefmbjqgfb"]} = $conn->prepare(${$GLOBALS["fefmbjqgfb"]});
                $SQLUser->execute();
                $edipprsdfkb = "owner";
                ${$GLOBALS["hwmjixocweh"]} = $SQLUser->fetch();
                if (${$edipprsdfkb} != ${$GLOBALS["railhvlhyisd"]}) {
                    $giaxgidigv = "owner";
                    $ienlhrfamriy = "id_usuario";
                    if (!($id_usuario == $owner)) {
                        $GLOBALS["kxqiugonict"] = "usuario";
                        $miwbklhbjijk = "SQLSub";
                        $avobgo = "owner";
                        $xpdscfdbonyr = "SQLSub";
                        $rxmdcspgzgy = "SQLSub";
                        $GLOBALS["vijdwmi"] = "usuario_owner";
                        $SQLSub = "select * from usuario WHERE  id_mestre ='" . $usuario["id_mestre"] . "' ";
                        $SQLSub = $conn->prepare($SQLSub);
                        $SQLSub->execute();
                        $usuario_owner = $SQLSub->fetch();
                        if (${$GLOBALS["wtclyfqi"]}["id_mestre"] != $owner) {
                            $GLOBALS["ewuzcvt"] = "diretorio";
                            echo myalertuser("error", "Sem permissao!", $diretorio);
                            exit;
                        }
                    }
                } else {
                    if (${$GLOBALS["nnsugavmhhm"]} == ${$ispphjurtct}) {
                        ${$GLOBALS["nnsugavmhhm"]} = 0;
                    }
                }
                $fuqgijgjqd = "SQLUpdate";
                $SQLUpdate = "UPDATE usuario SET nome='" . ${$GLOBALS["gfzuuakpvpf"]} . "', email='" . ${$GLOBALS["yrqfmip"]} . "', celular='" . ${$GLOBALS["qpbkeepkfhe"]} . "' WHERE id_usuario='" . ${$GLOBALS["hwmjixocweh"]}["id_usuario"] . "'  ";
                $GLOBALS["buyicng"] = "diretorio";
                ${$GLOBALS["kxfhnsnb"]} = $conn->prepare(${$GLOBALS["kxfhnsnb"]});
                $SQLUpdate->execute();
                echo myalertuser("success", "Dados alterados!", ${$GLOBALS["buyicng"]});
                exit;
            } else {
                $cnfplnsr = "diretorio";
                echo myalertuser("warning", "Preencha todos os campos!", $diretorio);
                exit;
            }
        } else {
            if (${$GLOBALS["epinciausgv"]} == "senha") {
                if (isset($_GET["id_usuario"]) && isset($_GET["diretorio"])) {
                    $GLOBALS["snzbhkzm"] = "accessKEY";
                    $rlauuvnbq = "diretorio";
                    $ehujur = "SQLUser";
                    $qyhrvo = "owner";
                    $GLOBALS["yrhbmteqkdtw"] = "SQLUser";
                    $eawyuwkniu = "diretorio";
                    $fwsejdqjjll = "id_usuario";
                    $vfmhhpw = "SQLUser";
                    ${$GLOBALS["wexftharcc"]} = $_GET["id_usuario"];
                    $GLOBALS["yjeaihxxlq"] = "owner";
                    ${$rlauuvnbq} = $_GET["diretorio"];
                    ${$GLOBALS["yrhbmteqkdtw"]} = "select * from usuario WHERE id_usuario = '" . ${$fwsejdqjjll} . "'  ";
                    ${$ehujur} = $conn->prepare(${$vfmhhpw});
                    $SQLUser->execute();
                    ${$GLOBALS["hwmjixocweh"]} = $SQLUser->fetch();
                    if (${$qyhrvo} != ${$GLOBALS["railhvlhyisd"]}) {
                        $inrlrhrta = "id_usuario";
                        if (!($id_usuario == ${$GLOBALS["nnsugavmhhm"]})) {
                            $uvqghqlnqh = "usuario";
                            $GLOBALS["brnyjpjoh"] = "SQLSub";
                            $GLOBALS["yfuedsoyugw"] = "usuario_owner";
                            ${$GLOBALS["itrmpqegub"]} = "select * from usuario WHERE  id_mestre ='" . $usuario["id_mestre"] . "' ";
                            $GLOBALS["myxjcdapeufy"] = "SQLSub";
                            $SQLSub = $conn->prepare(${$GLOBALS["brnyjpjoh"]});
                            $SQLSub->execute();
                            ${$GLOBALS["yfuedsoyugw"]} = $SQLSub->fetch();
                            if (${$GLOBALS["wtclyfqi"]}["id_mestre"] != ${$GLOBALS["nnsugavmhhm"]}) {
                                echo myalertuser("error", "Sem permissao!", ${$GLOBALS["wduesf"]});
                                exit;
                            }
                        }
                    } else {
                        if (${$GLOBALS["nnsugavmhhm"]} == ${$GLOBALS["snzbhkzm"]}) {
                            $GLOBALS["tpylqochnc"] = "owner";
                            $owner = 0;
                        }
                    }
                    $clixjpyvt = "usuario";
                    ${$GLOBALS["jxxfbmupqf"]} = "Dados de acesso: IP->" . ${$GLOBALS["afqdgzwqqk"]} . " Login-> " . $usuario["login"] . " Senha->" . ${$GLOBALS["hwmjixocweh"]}["senha"];
                    ${$GLOBALS["irogrmx"]} = "insert into sms (id_remetente, id_destinatario, assunto, mensagem)\nVALUES ('" . ${$GLOBALS["yjeaihxxlq"]} . "', '" . ${$GLOBALS["hwmjixocweh"]}["id_usuario"] . "', 'Reenviar Senha', '" . ${$GLOBALS["jxxfbmupqf"]} . "')  ";
                    $pxplnariesy = "SQLSMS";
                    $SQLSMS = $conn->prepare(${$GLOBALS["irogrmx"]});
                    $SQLSMS->execute();
                    echo myalertuser("success", "Senha reenviada!", ${$eawyuwkniu});
                    exit;
                } else {
                    $hmeqbfmns = "diretorio";
                    echo myalertuser("warning", "Preencha todos os campos!", $diretorio);
                    exit;
                }
            } else {
                if (${$dtaqiglyu} == "deletar") {
                    if (isset($_GET["id_usuario"]) && isset($_GET["diretorio"])) {
                        $GLOBALS["mqwxenrwj"] = "id_usuario";
                        $tedhoiigs = "SQLExcluichamados2";
                        $pnnpmyyfbi = "SQLExcluiRevfat2";
                        $GLOBALS["biqbkddjpoh"] = "SQLExcluiRevfat";
                        $sueopidm = "SQLExcluiRev";
                        $hxznrqpfbka = "SQLExcluiRevnoti2";
                        $GLOBALS["roimrcwgfd"] = "id_usuario";
                        $sntprnulcja = "SQLUser";
                        $GLOBALS["uiethagnq"] = "SQLExcluichamados2";
                        $lhlxkwkc = "SQLExcluichamados1";
                        $id_usuario = $_GET["id_usuario"];
                        $qdjvbsd = "SQLExcluiRevfat3";
                        ${$GLOBALS["wduesf"]} = $_GET["diretorio"];
                        $rovhgrrxliee = "id_usuario";
                        $GLOBALS["gpmwlq"] = "id_usuario";
                        $GLOBALS["yowyubpwwi"] = "SQLExcluiRev";
                        ${$GLOBALS["fefmbjqgfb"]} = "select * from usuario WHERE id_usuario = '" . ${$GLOBALS["roimrcwgfd"]} . "'  ";
                        $GLOBALS["sdsyevsgof"] = "owner";
                        $lgkyavjnsyq = "id_usuario";
                        $vovxhofrtgt = "SQLExcluiRevnoti";
                        $jpgigrd = "SQLExcluiRevfat3";
                        ${$sntprnulcja} = $conn->prepare(${$GLOBALS["fefmbjqgfb"]});
                        $SQLUser->execute();
                        ${$GLOBALS["hwmjixocweh"]} = $SQLUser->fetch();
                        $vdlnyhijw = "id_usuario";
                        $GLOBALS["ghdemwssw"] = "SQLExcluiRevfat2";
                        $slkjdfst = "SQLExcluiRevnoti";
                        if (${$GLOBALS["nnsugavmhhm"]} != ${$GLOBALS["railhvlhyisd"]}) {
                            if (!(${$GLOBALS["wexftharcc"]} == ${$GLOBALS["nnsugavmhhm"]})) {
                                $GLOBALS["lyesirlp"] = "usuario_owner";
                                ${$GLOBALS["itrmpqegub"]} = "select * from usuario WHERE  id_mestre ='" . ${$GLOBALS["hwmjixocweh"]}["id_mestre"] . "' ";
                                ${$GLOBALS["itrmpqegub"]} = $conn->prepare(${$GLOBALS["itrmpqegub"]});
                                $owygrteo = "usuario_owner";
                                $SQLSub->execute();
                                $usuario_owner = $SQLSub->fetch();
                                $GLOBALS["mczclmeuvw"] = "owner";
                                if (${$GLOBALS["lyesirlp"]}["id_mestre"] != $owner) {
                                    $eufwfoi = "diretorio";
                                    echo myalertuser("error", "Sem permissao!", $diretorio);
                                    exit;
                                }
                            }
                        } else {
                            if (${$GLOBALS["sdsyevsgof"]} == ${$GLOBALS["railhvlhyisd"]}) {
                                ${$GLOBALS["nnsugavmhhm"]} = 0;
                            }
                        }
                        ${$GLOBALS["xcpnwgt"]} = "update conta_ssh set status='3', id_usuario='0' WHERE id_usuario = '" . ${$GLOBALS["wexftharcc"]} . "'  ";
                        $GLOBALS["xbkgvaey"] = "id_usuario";
                        $rpkorvne = "SQLExcluiRevnoti";
                        ${$GLOBALS["xcpnwgt"]} = $conn->prepare(${$GLOBALS["xcpnwgt"]});
                        $SQLSSH->execute();
                        if (${$GLOBALS["hwmjixocweh"]}["tipo"] == "revenda") {
                            $xiztemc = "id_usuario";
                            $snsutpzkd = "SQLUsuarioSub";
                            ${$GLOBALS["nydtmnfarcc"]} = "delete from acesso_servidor WHERE  id_usuario = '" . $id_usuario . "'";
                            $liaeebrtr = "SQLExcluiAcesso";
                            $jccyejjivc = "SQLUsuarioSub";
                            ${$GLOBALS["nydtmnfarcc"]} = $conn->prepare($SQLExcluiAcesso);
                            $SQLExcluiAcesso->execute();
                            ${$snsutpzkd} = "SELECT * FROM usuario where id_mestre =  '" . ${$GLOBALS["wexftharcc"]} . "' ";
                            $GLOBALS["bnlpioxtxn"] = "SQLUser";
                            ${$GLOBALS["tbidkxrv"]} = $conn->prepare(${$jccyejjivc});
                            $nbumhsv = "id_usuario";
                            $SQLUsuarioSub->execute();
                            if ($SQLUsuarioSub->rowCount() > 0) {
                                $koykyszs = "row";
                                while (${$koykyszs} = $SQLUsuarioSub->fetch()) {
                                    $fswbotuygubr = "SQLSSH";
                                    $GLOBALS["qftljk"] = "SQLExcluiSRev";
                                    $tmybeusckey = "SQLSSH";
                                    $GLOBALS["ocvhvb"] = "row";
                                    $rmjgbs = "SQLExcluiSRev";
                                    $ksdnxxlgdwm = "SQLSSH";
                                    $qwkxuaf = "row";
                                    $SQLSSH = "update conta_ssh set status='3', apagar='3', id_usuario='0' WHERE id_usuario = '" . $row["id_usuario"] . "'  ";
                                    $SQLSSH = $conn->prepare($SQLSSH);
                                    $SQLSSH->execute();
                                    $SQLExcluiSRev = "delete  from usuario WHERE  id_usuario = '" . $row["id_usuario"] . "'";
                                    $GLOBALS["kokfjxyob"] = "SQLExcluiAcessor";
                                    $SQLExcluiSRev = $conn->prepare(${$GLOBALS["edxglpgsgikr"]});
                                    $SQLExcluiSRev->execute();
                                    $SQLExcluiAcessor = "delete  from acesso_servidor WHERE  id_usuario = '" . ${$GLOBALS["ucqnmucixjgc"]}["id_usuario"] . "'";
                                    ${$GLOBALS["geetjdxz"]} = $conn->prepare(${$GLOBALS["geetjdxz"]});
                                    $SQLExcluiAcessor->execute();
                                }
                            }
                            ${$GLOBALS["fefmbjqgfb"]} = "update usuario set id_mestre='0' WHERE id_mestre = '" . ${$nbumhsv} . "'  ";
                            ${$GLOBALS["fefmbjqgfb"]} = $conn->prepare(${$GLOBALS["bnlpioxtxn"]});
                            $SQLUser->execute();
                        }
                        ${$GLOBALS["biqbkddjpoh"]} = "delete from fatura WHERE  usuario_id = '" . ${$lgkyavjnsyq} . "'";
                        $olrodbhi = "SQLExcluiRevfat2";
                        ${$GLOBALS["exrrtlyaqkw"]} = $conn->prepare(${$GLOBALS["exrrtlyaqkw"]});
                        $SQLExcluiRevfat->execute();
                        ${$pnnpmyyfbi} = "delete from fatura_clientes WHERE  usuario_id = '" . ${$vdlnyhijw} . "'";
                        ${$GLOBALS["ghdemwssw"]} = $conn->prepare(${$olrodbhi});
                        $SQLExcluiRevfat2->execute();
                        ${$qdjvbsd} = "delete from fatura_clientes WHERE  id_mestre = '" . ${$GLOBALS["wexftharcc"]} . "'";
                        ${$jpgigrd} = $conn->prepare(${$GLOBALS["bginrsmerhr"]});
                        $dlkyrkxiusx = "SQLExcluiRevnoti2";
                        $SQLExcluiRevfat3->execute();
                        ${$GLOBALS["qdoiby"]} = "delete from chamados WHERE  usuario_id = '" . ${$rovhgrrxliee} . "'";
                        ${$GLOBALS["qdoiby"]} = $conn->prepare(${$lhlxkwkc});
                        $SQLExcluichamados1->execute();
                        ${$tedhoiigs} = "delete from chamados WHERE  id_mestre = '" . ${$GLOBALS["xbkgvaey"]} . "'";
                        ${$GLOBALS["uiethagnq"]} = $conn->prepare(${$GLOBALS["bqnejnfi"]});
                        $kxorlygunt = "SQLExcluiRevnoti3";
                        $SQLExcluichamados2->execute();
                        $sjthwveqpkyh = "id_usuario";
                        ${$GLOBALS["ldfvwdcnqjg"]} = "delete from notificacoes WHERE  usuario_id = '" . ${$GLOBALS["wexftharcc"]} . "'";
                        ${$GLOBALS["ldfvwdcnqjg"]} = $conn->prepare(${$vovxhofrtgt});
                        $SQLExcluiRevnoti->execute();
                        ${$rpkorvne} = "delete from fatura_comprovantes WHERE  usuario_id = '" . ${$GLOBALS["wexftharcc"]} . "'";
                        ${$GLOBALS["ldfvwdcnqjg"]} = $conn->prepare(${$slkjdfst});
                        $SQLExcluiRevnoti->execute();
                        ${$dlkyrkxiusx} = "delete from fatura_comprovantes_clientes WHERE  usuario_id = '" . ${$sjthwveqpkyh} . "'";
                        ${$GLOBALS["yrhbltybe"]} = $conn->prepare(${$hxznrqpfbka});
                        $SQLExcluiRevnoti2->execute();
                        ${$GLOBALS["hdojwyowyc"]} = "delete  from fatura_comprovantes_clientes WHERE  id_mestre = '" . ${$GLOBALS["gpmwlq"]} . "'";
                        ${$kxorlygunt} = $conn->prepare(${$GLOBALS["hdojwyowyc"]});
                        $SQLExcluiRevnoti3->execute();
                        ${$sueopidm} = "delete from usuario WHERE  id_usuario = '" . ${$GLOBALS["wexftharcc"]} . "'";
                        ${$GLOBALS["yowyubpwwi"]} = $conn->prepare(${$GLOBALS["nndshvw"]});
                        $SQLExcluiRev->execute();
                        echo myalertuser("success", "Deletado com sucesso!", ${$GLOBALS["wduesf"]});
                        exit;
                    } else {
                        $GLOBALS["ftxnrehfg"] = "diretorio";
                        echo myalertuser("warning", "Preencha todos os campos!", $diretorio);
                        exit;
                    }
                } else {
                    if (${$GLOBALS["epinciausgv"]} == "suspender") {
                        if (isset($_GET["id_usuario"]) && isset($_GET["diretorio"])) {
                            $warcuoiek = "SQLUser";
                            $GLOBALS["hurvuhhcisu"] = "SQLSSH";
                            ${$GLOBALS["wexftharcc"]} = $_GET["id_usuario"];
                            $uxgrbhz = "diretorio";
                            $jkxewxoj = "SQLUser";
                            $owxbkr = "owner";
                            $GLOBALS["nextqzzdgp"] = "accessKEY";
                            $egxacpi = "data";
                            $hlxetdsqwtdi = "owner";
                            ${$GLOBALS["wduesf"]} = $_GET["diretorio"];
                            ${$warcuoiek} = "select * from usuario WHERE id_usuario = '" . ${$GLOBALS["wexftharcc"]} . "'  ";
                            $yljpeqibe = "data";
                            $GLOBALS["cpuewsme"] = "usuario";
                            $vudnekedvrw = "SQLSSH";
                            $GLOBALS["hihfknj"] = "SQLSSH";
                            ${$jkxewxoj} = $conn->prepare(${$GLOBALS["fefmbjqgfb"]});
                            $ujikrwto = "id_usuario";
                            $SQLUser->execute();
                            ${$GLOBALS["cpuewsme"]} = $SQLUser->fetch();
                            if (${$owxbkr} != ${$GLOBALS["nextqzzdgp"]}) {
                                if (!(${$GLOBALS["wexftharcc"]} == ${$GLOBALS["nnsugavmhhm"]})) {
                                    $egpvfxjwwe = "usuario";
                                    $kdqoucvoh = "SQLSub";
                                    $fxegklrdln = "SQLSub";
                                    ${$GLOBALS["itrmpqegub"]} = "select * from usuario WHERE  id_mestre ='" . $usuario["id_mestre"] . "' ";
                                    ${$kdqoucvoh} = $conn->prepare(${$fxegklrdln});
                                    $SQLSub->execute();
                                    $qnhbaoxeigx = "usuario_owner";
                                    ${$GLOBALS["wtclyfqi"]} = $SQLSub->fetch();
                                    if (${$qnhbaoxeigx}["id_mestre"] != ${$GLOBALS["nnsugavmhhm"]}) {
                                        echo myalertuser("error", "Sem permissao!", ${$GLOBALS["wduesf"]});
                                        exit;
                                    }
                                }
                            } else {
                                if (${$hlxetdsqwtdi} == ${$GLOBALS["railhvlhyisd"]}) {
                                    $rkrhomy = "owner";
                                    $owner = 0;
                                }
                            }
                            ${$vudnekedvrw} = "update conta_ssh set status='2', apagar='2', data_suspensao='" . ${$yljpeqibe} . "' WHERE id_usuario = '" . ${$GLOBALS["wexftharcc"]} . "'  ";
                            ${$GLOBALS["hihfknj"]} = $conn->prepare(${$GLOBALS["hurvuhhcisu"]});
                            $SQLSSH->execute();
                            if (${$GLOBALS["hwmjixocweh"]}["tipo"] == "revenda") {
                                $GLOBALS["sdpocg"] = "id_usuario";
                                $wbxjgok = "SQLUsuarioSub";
                                ${$GLOBALS["tbidkxrv"]} = "SELECT * FROM usuario where id_mestre =  '" . $id_usuario . "' ";
                                ${$wbxjgok} = $conn->prepare(${$GLOBALS["tbidkxrv"]});
                                $SQLUsuarioSub->execute();
                                if ($SQLUsuarioSub->rowCount() > 0) {
                                    while (${$GLOBALS["ucqnmucixjgc"]} = $SQLUsuarioSub->fetch()) {
                                        $GLOBALS["lkjgcyoosspd"] = "SQLSSH";
                                        $GLOBALS["xysktv"] = "row";
                                        $arkfryxli = "SQLUser";
                                        $GLOBALS["ygxlwun"] = "data";
                                        $prriquec = "SQLSSH";
                                        $cqkuhxwxt = "data";
                                        $SQLSSH = "update conta_ssh set status='2', apagar='2', data_suspensao='" . $data . "' WHERE id_usuario = '" . $row["id_usuario"] . "'  ";
                                        $SQLSSH = $conn->prepare(${$GLOBALS["xcpnwgt"]});
                                        $SQLSSH->execute();
                                        $SQLUser = "update usuario set ativo='2', apagar='1', suspenso='" . $data . "' WHERE id_usuario = '" . ${$GLOBALS["ucqnmucixjgc"]}["id_usuario"] . "'  ";
                                        ${$GLOBALS["fefmbjqgfb"]} = $conn->prepare(${$GLOBALS["fefmbjqgfb"]});
                                        $SQLUser->execute();
                                    }
                                }
                            }
                            ${$GLOBALS["fefmbjqgfb"]} = "update usuario set ativo='2', apagar='1', suspenso='" . ${$egxacpi} . "' WHERE id_usuario = '" . ${$ujikrwto} . "'  ";
                            ${$GLOBALS["fefmbjqgfb"]} = $conn->prepare(${$GLOBALS["fefmbjqgfb"]});
                            $SQLUser->execute();
                            echo myalertuser("success", "Suspendido com sucesso!", ${$uxgrbhz});
                            exit;
                        } else {
                            $ecqbdpasg = "diretorio";
                            echo "<script type=\"text/javascript\">";
                            echo "alert(\"Preencha todos os campos!\");";
                            echo "window.location=\"" . $diretorio . "\";";
                            echo "</script>";
                            exit;
                        }
                    } else {
                        if (${$GLOBALS["epinciausgv"]} == "ususpender") {
                            if (isset($_GET["id_usuario"]) && isset($_GET["diretorio"])) {
                                ${$GLOBALS["wexftharcc"]} = $_GET["id_usuario"];
                                ${$GLOBALS["wduesf"]} = $_GET["diretorio"];
                                $fbcjbmekiob = "accessKEY";
                                $codbuou = "SQLSSH";
                                $vkvmvtklswy = "SQLUser";
                                ${$GLOBALS["fefmbjqgfb"]} = "select * from usuario WHERE id_usuario = '" . ${$GLOBALS["wexftharcc"]} . "'";
                                $GLOBALS["ufqxekkpemsp"] = "SQLUser";
                                ${$vkvmvtklswy} = $conn->prepare(${$GLOBALS["fefmbjqgfb"]});
                                $SQLUser->execute();
                                $GLOBALS["fggyjufqxm"] = "accessKEY";
                                $jkdwqjhx = "id_usuario";
                                ${$GLOBALS["hwmjixocweh"]} = $SQLUser->fetch();
                                $GLOBALS["ybpxifk"] = "usuario";
                                if (${$GLOBALS["nnsugavmhhm"]} != ${$GLOBALS["fggyjufqxm"]}) {
                                    if (!(${$GLOBALS["wexftharcc"]} == ${$GLOBALS["nnsugavmhhm"]})) {
                                        $GLOBALS["hnorrwoag"] = "usuario_owner";
                                        $cggpmcny = "owner";
                                        ${$GLOBALS["itrmpqegub"]} = "select * from usuario WHERE  id_mestre ='" . ${$GLOBALS["hwmjixocweh"]}["id_mestre"] . "'";
                                        ${$GLOBALS["itrmpqegub"]} = $conn->prepare(${$GLOBALS["itrmpqegub"]});
                                        $SQLSub->execute();
                                        ${$GLOBALS["hnorrwoag"]} = $SQLSub->fetch();
                                        if (${$GLOBALS["wtclyfqi"]}["id_mestre"] != ${$cggpmcny}) {
                                            echo "<script type=\"text/javascript\">";
                                            echo "alert(\"Voc\xc3\xaa n\xc3\xa3o tem permissao!!\");";
                                            $sfhntxtjplu = "diretorio";
                                            echo "window.location=\"" . $diretorio . "\";";
                                            echo "</script>";
                                            exit;
                                        }
                                    }
                                } else {
                                    if (${$GLOBALS["nnsugavmhhm"]} == ${$fbcjbmekiob}) {
                                        ${$GLOBALS["nnsugavmhhm"]} = 0;
                                    }
                                }
                                ${$GLOBALS["xcpnwgt"]} = "update conta_ssh set status='1', apagar='1' WHERE id_usuario = '" . ${$GLOBALS["wexftharcc"]} . "'  ";
                                $GLOBALS["ypgypmocsl"] = "SQLUser";
                                ${$GLOBALS["xcpnwgt"]} = $conn->prepare(${$codbuou});
                                $SQLSSH->execute();
                                if (${$GLOBALS["ybpxifk"]}["tipo"] == "revenda") {
                                    $pyupdr = "SQLUsuarioSub";
                                    $GLOBALS["akyeqccji"] = "id_usuario";
                                    $krpwaff = "SQLUsuarioSub";
                                    $tplsepuc = "SQLUsuarioSub";
                                    $SQLUsuarioSub = "SELECT * FROM usuario where id_mestre =  '" . $id_usuario . "' ";
                                    $SQLUsuarioSub = $conn->prepare($SQLUsuarioSub);
                                    $SQLUsuarioSub->execute();
                                    if ($SQLUsuarioSub->rowCount() > 0) {
                                        $GLOBALS["usmekro"] = "row";
                                        while (${$GLOBALS["usmekro"]} = $SQLUsuarioSub->fetch()) {
                                            $GLOBALS["cjyupgj"] = "row";
                                            $GLOBALS["bbqnvgfynlnm"] = "SQLSSH";
                                            $SQLSSH = "update conta_ssh set status='1', apagar='1' WHERE id_usuario = '" . $row["id_usuario"] . "'  ";
                                            $qidrmwdtxkm = "SQLUser";
                                            $GLOBALS["mfxnlb"] = "SQLUser";
                                            ${$GLOBALS["xcpnwgt"]} = $conn->prepare(${$GLOBALS["xcpnwgt"]});
                                            $SQLSSH->execute();
                                            ${$qidrmwdtxkm} = "update usuario set ativo='1', apagar='1' WHERE id_usuario = '" . ${$GLOBALS["ucqnmucixjgc"]}["id_usuario"] . "'  ";
                                            $gwybny = "SQLUser";
                                            $SQLUser = $conn->prepare(${$GLOBALS["mfxnlb"]});
                                            $SQLUser->execute();
                                        }
                                    }
                                }
                                $GLOBALS["hzmslodmiat"] = "SQLUser";
                                ${$GLOBALS["ypgypmocsl"]} = "update usuario set ativo='1', apagar='1' WHERE id_usuario = '" . ${$jkdwqjhx} . "'  ";
                                ${$GLOBALS["ufqxekkpemsp"]} = $conn->prepare(${$GLOBALS["hzmslodmiat"]});
                                $SQLUser->execute();
                                if (isset($_GET["renovar"])) {
                                    $GLOBALS["lnpowfd"] = "add";
                                    $fzjjsmfj = "add";
                                    $GLOBALS["wicqqfixbeqf"] = "SQLSucesso";
                                    $add = date("Y-m-d H:i:s", strtotime("+31 days"));
                                    ${$GLOBALS["usnjbpavetbi"]} = "update usuario set validade='" . $add . "' where id_usuario='" . $_GET["renovar"] . "'";
                                    ${$GLOBALS["wicqqfixbeqf"]} = $conn->prepare(${$GLOBALS["usnjbpavetbi"]});
                                    $GLOBALS["bpgiune"] = "diretorio";
                                    $SQLSucesso->execute();
                                    echo myalertuser("success", "Renovado com sucesso!", $diretorio);
                                    exit;
                                } else {
                                    echo myalertuser("success", "Reativado com sucesso!", ${$GLOBALS["wduesf"]});
                                    exit;
                                }
                            } else {
                                $GLOBALS["kpplyhj"] = "diretorio";
                                echo myalertuser("warning", "Preencha todos os campos!", $diretorio);
                                exit;
                            }
                        } else {
                        }
                    }
                }
            }
        }
    }
} else {
    $GLOBALS["hobjmrfnw"] = "diretorio";
    echo myalertuser("warning", "Preencha todos os campos!", $diretorio);
    exit;
}
