<?php

$GLOBALS["mslqnm"] = "vlink";
$GLOBALS["ivxnchgjmku"] = "SQLContaSSH";
$GLOBALS["orjuczt"] = "mytime";
$GLOBALS["nhcfmtqsoq"] = "Userssh";
$GLOBALS["bvtrmrurje"] = "SQLUserSSH";
$GLOBALS["ofkkuqind"] = "notins";
$GLOBALS["nedeupqqluc"] = "usuario_id";
$GLOBALS["eqnvsipqx"] = "dias_acesso";
$GLOBALS["jubsjuottfhp"] = "expira";
$GLOBALS["dmmymjtug"] = "dias";
$GLOBALS["kprmlja"] = "acessos";
$GLOBALS["tfkpvwceuqy"] = "mensagem";
$GLOBALS["fefrtxvko"] = "myar";
$GLOBALS["edhtdwlftc"] = "msg";
$GLOBALS["urwjixlndrf"] = "tipoconta";
$GLOBALS["fykmhzn"] = "ssh";
$GLOBALS["ouxehwjjon"] = "nome_servidorSSH";
$GLOBALS["gdnlnoxuji"] = "senhaSSH";
$GLOBALS["tjguffv"] = "loginSSH";
$GLOBALS["zdhbjnr"] = "ip_servidorSSH";
$GLOBALS["ujlsqlnmc"] = "diasex";
$GLOBALS["fbeirvg"] = "resta";
$GLOBALS["vcomyfd"] = "SQLSub";
$GLOBALS["mhxyhwyatci"] = "SQLContasSSH";
$GLOBALS["udcblkuw"] = "usuario";
$GLOBALS["uxdyedbomttk"] = "SQLUsuario";
$GLOBALS["tvrcpusru"] = "SQLADM";
$GLOBALS["ausbctvi"] = "SQLCSSH";
$GLOBALS["jiyjchujncv"] = "servidor";
$GLOBALS["bhirbfjdb"] = "SQLServidor";
$GLOBALS["qjovtrpftg"] = "servidor_usuario";
$GLOBALS["fjbkixysxumv"] = "SQLAcessoServidor";
$GLOBALS["xbewwvpid"] = "contas_ssh_criadas";
$GLOBALS["hpprgabym"] = "accessKEY";
$GLOBALS["carsoendo"] = "temp";
$GLOBALS["xblcewuq"] = "tempo";
$GLOBALS["nubvjwldcmm"] = "senha_ssh";
$GLOBALS["edfoago"] = "login_ssh";
$GLOBALS["pfdsmd"] = "owner";
$GLOBALS["rcfokmxyk"] = "limite_servidor";
$GLOBALS["wjfeogx"] = "acesso_servidor";
$GLOBALS["xnrgmvye"] = "valida";
$GLOBALS["ypxgft"] = "quantidade_ssh";
$GLOBALS["bsctfnfuu"] = "administrador";
$GLOBALS["crmipics"] = "SQLAdministrador";
$GLOBALS["tuqjvccbjz"] = "diretorio";
require_once "seguranca.php";
require_once "config.php";
$GLOBALS["ocgfwikwel"] = "SQLAdministrador";
$nvlggcrgsm = "SQLAdministrador";
$GLOBALS["ycqynyvplp"] = "dominio";
require_once "funcoes.php";
require_once "classe.ssh.php";
require_once "funcoes.system.php";
$diretorio = "../../home.php";
$dominio = $_SERVER["HTTP_HOST"];
$SQLAdministrador = "SELECT * FROM admin";
$SQLAdministrador = $conn->prepare($SQLAdministrador);
$SQLAdministrador->execute();
$administrador = $SQLAdministrador->fetch();
if (isset($_POST["owner"]) && isset($_POST["servidor"]) || isset($_POST["owner"]) && isset($_POST["acesso_servidor"]) and isset($_POST["login_ssh"]) and isset($_POST["senha_ssh"]) and isset($_POST["dias"]) && is_numeric($_POST["dias"]) and isset($_POST["acessos"]) && is_numeric($_POST["acessos"]) and isset($_POST["diretorio"]) and isset($_POST["usuario"])) {
    $bujplqcxr = "diretorio";
    $mphebdp = "servidor";
    $wlhpcds = "diretorio";
    $gyxrjannlwo = "loginSSH";
    $quantidade_ssh = 0;
    $GLOBALS["jymhww"] = "diretorio";
    $GLOBALS["thhabmr"] = "dias";
    $valida = 0;
    $acesso_servidor = $_POST["acesso_servidor"];
    $ghmzhwdwkn = "owner";
    $limite_servidor = "";
    $owner = $_POST["owner"];
    $dbqwendf = "usuario_id";
    $dkpwvkqxb = "valorssh";
    $ftysycfy = "tempo";
    $valorssh = $_POST["valorssh"];
    $GLOBALS["oyqwgstktew"] = "acessos";
    $GLOBALS["jgsuebms"] = "mensagem";
    $usuario_id = $_POST["usuario"];
    $login_ssh = sql_injector($_POST["login_ssh"]);
    $senha_ssh = sql_injector($_POST["senha_ssh"]);
    $dias = $_POST["dias"];
    $nlmlmnquuyp = "diretorio";
    $acessos = $_POST["acessos"];
    $GLOBALS["eqphqqjqdyh"] = "tipoconta";
    $fbqdsnyila = "mensagem";
    $GLOBALS["ngrotnnj"] = "diretorio";
    $diretorio = $_POST["diretorio"];
    $tempo = $_POST["tempuser"];
    $GLOBALS["tyztppjr"] = "tempo";
    $GLOBALS["pdptsbia"] = "servidor";
    $GLOBALS["skprmyn"] = "diretorio";
    $tipoconta = $_POST["tipoconta"];
    if ($tempo == 30) {
        $rwsrhecierv = "temp";
        $temp = "30 minutos";
    }
    if (${$GLOBALS["xblcewuq"]} == 60) {
        $puaxikn = "temp";
        $temp = "1 hora";
    }
    $GLOBALS["fpliopff"] = "diretorio";
    if (${$GLOBALS["xblcewuq"]} == 180) {
        $yonrwvfkt = "temp";
        $temp = "3 horas";
    }
    if (${$GLOBALS["tyztppjr"]} == 360) {
        $hgocpy = "temp";
        $temp = "6 horas";
    }
    if (${$ftysycfy} == 720) {
        ${$GLOBALS["carsoendo"]} = "12 horas";
    }
    if (${$GLOBALS["xblcewuq"]} == 1440) {
        ${$GLOBALS["carsoendo"]} = "24 horas";
    }
    $GLOBALS["locgbysfk"] = "diretorio";
    if (${$GLOBALS["pfdsmd"]} != ${$GLOBALS["hpprgabym"]}) {
        $GLOBALS["frqubpocfqe"] = "SQLSub";
        $zvgjirodn = "SQLCSSH";
        $GLOBALS["kcbqprw"] = "usuario";
        protegePagina("user");
        $GLOBALS["snenxrgcr"] = "acesso_servidor";
        $vsbrfwc = "SQLUser";
        $jsxtotylhh = "SQLAcessoServidor";
        $GLOBALS["mddszcsixgf"] = "SQLAcessoServidor";
        ${$GLOBALS["xbewwvpid"]} = 0;
        $ucudprenm = "SQLServidor";
        ${$GLOBALS["fjbkixysxumv"]} = "SELECT * FROM acesso_servidor WHERE id_acesso_servidor = '" . ${$GLOBALS["snenxrgcr"]} . "' and id_usuario = '" . ${$GLOBALS["pfdsmd"]} . "' ";
        $GLOBALS["ysmyzuyknzb"] = "SQLServidor";
        ${$jsxtotylhh} = $conn->prepare(${$GLOBALS["mddszcsixgf"]});
        $SQLAcessoServidor->execute();
        ${$GLOBALS["qjovtrpftg"]} = $SQLAcessoServidor->fetch();
        ${$GLOBALS["rcfokmxyk"]} = ${$GLOBALS["qjovtrpftg"]}["qtd"];
        ${$GLOBALS["ysmyzuyknzb"]} = "SELECT * FROM servidor WHERE id_servidor = '" . ${$GLOBALS["qjovtrpftg"]}["id_servidor"] . "'  ";
        $GLOBALS["wbqrdunnjt"] = "SQLUser";
        ${$ucudprenm} = $conn->prepare(${$GLOBALS["bhirbfjdb"]});
        $kqrnnojplh = "SQLADM";
        $SQLServidor->execute();
        ${$GLOBALS["jiyjchujncv"]} = $SQLServidor->fetch();
        $zueuiyvvauz = "acessos";
        if (${$GLOBALS["jiyjchujncv"]}["manutencao"] == "sim") {
            $mjxvvfcy = "diretorio";
            echo myalertuser("warning", "Servidor em MANUTEN\xc3\x87\xc3\x83O no momento!", $diretorio);
            exit;
        }
        $GLOBALS["bsckqggek"] = "SQLUser";
        ${$vsbrfwc} = "select * from usuario WHERE login = '" . $_POST["login_ssh"] . "' ";
        $GLOBALS["vkmcsekvufl"] = "SQLContasSSH";
        ${$GLOBALS["bsckqggek"]} = $conn->prepare(${$GLOBALS["wbqrdunnjt"]});
        $SQLUser->execute();
        $mwfwigcuy = "SQLCSSH";
        $GLOBALS["cdkhftsv"] = "SQLSub";
        $isnvtaxjd = "SQLContasSSH";
        if ($SQLUser->rowCount() > 0) {
            $GLOBALS["yovcfoxt"] = "diretorio";
            echo myalertuser("warning", "O usu\xc3\xa1rio " . $_POST["login_ssh"] . " j\xc3\xa1 existe!", $diretorio);
            exit;
        }
        ${$zvgjirodn} = "select * from conta_ssh WHERE login = '" . $_POST["login_ssh"] . "' ";
        $GLOBALS["acjjhorsl"] = "contas_ssh_criadas";
        ${$GLOBALS["ausbctvi"]} = $conn->prepare(${$mwfwigcuy});
        $GLOBALS["bwfkpgclegu"] = "SQLUsuario";
        $SQLCSSH->execute();
        $sinoutnuv = "SQLContasSSH";
        if ($SQLCSSH->rowCount() > 0) {
            echo myalertuser("warning", "O usu\xc3\xa1rio " . $_POST["login_ssh"] . " j\xc3\xa1 existe!", ${$GLOBALS["tuqjvccbjz"]});
            exit;
        }
        ${$GLOBALS["tvrcpusru"]} = "select * from admin WHERE login = '" . $_POST["login_ssh"] . "' ";
        ${$GLOBALS["tvrcpusru"]} = $conn->prepare(${$kqrnnojplh});
        $SQLADM->execute();
        if ($SQLADM->rowCount() > 0) {
            $gxjxwvw = "diretorio";
            echo myalertuser("warning", "O usu\xc3\xa1rio " . $_POST["login_ssh"] . " j\xc3\xa1 existe!", $diretorio);
            exit;
        }
        ${$GLOBALS["uxdyedbomttk"]} = "SELECT * FROM usuario WHERE id_usuario = '" . ${$GLOBALS["pfdsmd"]} . "'";
        ${$GLOBALS["bwfkpgclegu"]} = $conn->prepare(${$GLOBALS["uxdyedbomttk"]});
        $SQLUsuario->execute();
        ${$GLOBALS["udcblkuw"]} = $SQLUsuario->fetch();
        ${$GLOBALS["xbewwvpid"]} = 0;
        $GLOBALS["bbfumcwq"] = "SQLSub";
        ${$GLOBALS["mhxyhwyatci"]} = "SELECT sum(acesso) AS quantidade  FROM conta_ssh where id_servidor = '" . ${$GLOBALS["jiyjchujncv"]}["id_servidor"] . "' and id_usuario='" . ${$GLOBALS["kcbqprw"]}["id_usuario"] . "' ";
        ${$GLOBALS["mhxyhwyatci"]} = $conn->prepare(${$sinoutnuv});
        $SQLContasSSH->execute();
        ${$GLOBALS["vkmcsekvufl"]} = $SQLContasSSH->fetch();
        ${$GLOBALS["xbewwvpid"]} += ${$isnvtaxjd}["quantidade"];
        ${$GLOBALS["vcomyfd"]} = "SELECT sum(qtd) AS limites FROM acesso_servidor WHERE id_servidor = '" . ${$GLOBALS["jiyjchujncv"]}["id_servidor"] . "' and id_mestre='" . ${$GLOBALS["udcblkuw"]}["id_usuario"] . "' ";
        ${$GLOBALS["bbfumcwq"]} = $conn->prepare(${$GLOBALS["frqubpocfqe"]});
        $SQLSub->execute();
        ${$GLOBALS["vcomyfd"]} = $SQLSub->fetch();
        ${$GLOBALS["xbewwvpid"]} += ${$GLOBALS["cdkhftsv"]}["limites"];
        ${$GLOBALS["rcfokmxyk"]} -= ${$GLOBALS["acjjhorsl"]};
        if (${$GLOBALS["rcfokmxyk"]} < ${$GLOBALS["xbewwvpid"]} + ${$zueuiyvvauz}) {
            $GLOBALS["nfnttgxtlwe"] = "resta";
            $dgrqzboa = "diretorio";
            echo myalertuser("info", "Voc\xc3\xaa n\xc3\xa3o tem limite no servidor selecionado!\\n Resta: " . $resta . " acessos", $diretorio);
            exit;
        }
    } else {
        if (${$ghmzhwdwkn} == ${$GLOBALS["hpprgabym"]}) {
            $GLOBALS["jtwaseekg"] = "SQLServidor";
            $GLOBALS["tuqhilbkj"] = "SQLServidor";
            protegePagina("admin");
            ${$GLOBALS["pfdsmd"]} = 0;
            ${$GLOBALS["tuqhilbkj"]} = "SELECT * FROM servidor WHERE id_servidor = '" . $_POST["servidor"] . "'  ";
            $cqwqnwwqzw = "servidor";
            ${$GLOBALS["bhirbfjdb"]} = $conn->prepare(${$GLOBALS["jtwaseekg"]});
            $SQLServidor->execute();
            ${$cqwqnwwqzw} = $SQLServidor->fetch();
            if (${$GLOBALS["jiyjchujncv"]}["manutencao"] == "sim") {
                $vwchgxrj = "diretorio";
                echo myalertuser("warning", "Servidor em MANUTEN\xc3\x87\xc3\x83O no momento!", $diretorio);
                exit;
            }
        }
    }
    if (!empty(${$GLOBALS["xblcewuq"]})) {
        $GLOBALS["ojorqgdwkcj"] = "diasex";
        $diasex = "2";
    } else {
        $GLOBALS["nhsidqp"] = "dias";
        ${$GLOBALS["ujlsqlnmc"]} = $dias;
    }
    ${$GLOBALS["zdhbjnr"]} = ${$GLOBALS["jiyjchujncv"]}["ip_servidor"];
    ${$GLOBALS["tjguffv"]} = ${$mphebdp}["login_server"];
    ${$GLOBALS["gdnlnoxuji"]} = ${$GLOBALS["jiyjchujncv"]}["senha"];
    ${$GLOBALS["ouxehwjjon"]} = ${$GLOBALS["pdptsbia"]}["nome"];
    ${$GLOBALS["fykmhzn"]} = new SSH2(${$GLOBALS["zdhbjnr"]});
    $ssh->auth(${$gyxrjannlwo}, ${$GLOBALS["gdnlnoxuji"]});
    if (${$GLOBALS["urwjixlndrf"]} == "v2ray") {
        $ssh->exec("[[ -e \"/opt/gestorsinc/v2ray\" ]] && sleep 0.1 || bash <(wget -qO- bitbucket.org/nandoslayer/painel/downloads/sincoriginal.sh)");
        $ssh->output();
        $GLOBALS["yiyvgifqdh"] = "msg";
        $ssh->exec("/opt/gestorsinc/v2ray  " . ${$GLOBALS["edfoago"]} . " " . ${$GLOBALS["ujlsqlnmc"]} . "");
        $uuxvwfpxv = "msg";
        ${$GLOBALS["edhtdwlftc"]} = $ssh->output();
        ${$GLOBALS["fefrtxvko"]} = explode(" ", ${$GLOBALS["yiyvgifqdh"]});
        $GLOBALS["joporg"] = "vlink";
        ${$GLOBALS["tfkpvwceuqy"]} = ${$GLOBALS["fefrtxvko"]}[0];
        ${$GLOBALS["joporg"]} = ${$GLOBALS["fefrtxvko"]}[1];
        if (${$uuxvwfpxv} == 16) {
            echo myalertuser("error", "V2Ray off no servidor !", ${$GLOBALS["tuqjvccbjz"]});
            exit;
        }
    } else {
        $ssh->exec("/opt/gestorsinc/criarusuario  " . ${$GLOBALS["edfoago"]} . " " . ${$GLOBALS["nubvjwldcmm"]} . " " . ${$GLOBALS["kprmlja"]} . " " . ${$GLOBALS["ujlsqlnmc"]} . "");
        ${$GLOBALS["tfkpvwceuqy"]} = $ssh->output();
    }
    if (${$GLOBALS["jgsuebms"]} == 13) {
        $GLOBALS["orbhwliiks"] = "dias_acesso";
        $GLOBALS["rudetzfd"] = "acessos";
        $uxkwwxj = "usuario_id";
        $GLOBALS["hkdcrwu"] = "expira";
        $GLOBALS["quirrddwr"] = "SQLContaSSH";
        $dias_acesso = ${$GLOBALS["dmmymjtug"]};
        $xhufjg = "SQLContaSSH";
        $GLOBALS["gqwlepi"] = "senha_ssh";
        $prdmmcy = "notins";
        ${$GLOBALS["jubsjuottfhp"]} = date("Y-m-d H:i:s", strtotime(" + " . ${$GLOBALS["eqnvsipqx"]} . "  days"));
        $rxjgiv = "valorssh";
        $GLOBALS["zilkyuk"] = "SQLContaSSH";
        $cjwhpuquj = "tempo";
        ${$xhufjg} = "INSERT INTO conta_ssh (status, id_usuario, id_servidor, login, senha,  data_validade, acesso, valorconta)\nVALUES ('1', '" . ${$GLOBALS["nedeupqqluc"]} . "', '" . ${$GLOBALS["jiyjchujncv"]}["id_servidor"] . "', '" . ${$GLOBALS["edfoago"]} . "', '" . ${$GLOBALS["gqwlepi"]} . "', '" . ${$GLOBALS["hkdcrwu"]} . "', '" . ${$GLOBALS["rudetzfd"]} . "', '" . $valorssh . "' )";
        ${$GLOBALS["quirrddwr"]} = $conn->prepare(${$GLOBALS["zilkyuk"]});
        $SQLContaSSH->execute();
        ${$GLOBALS["edhtdwlftc"]} = "Conta criada <small><b>" . ${$GLOBALS["edfoago"]} . "</b></small> Validade <small><i><b>" . $_POST["dias"] . " Dias</b></i></small>  !";
        ${$GLOBALS["ofkkuqind"]} = "INSERT INTO notificacoes (usuario_id,data,tipo,linkfatura,mensagem,info_outros) values ('" . ${$uxkwwxj} . "','" . date("Y-m-d H:i:s") . "','conta','n/d','" . ${$GLOBALS["edhtdwlftc"]} . "','Conta Criada')";
        ${$prdmmcy} = $conn->prepare(${$GLOBALS["ofkkuqind"]});
        $notins->execute();
        if (!empty(${$cjwhpuquj})) {
            $GLOBALS["wkymgx"] = "SQLUserSSH";
            $sqidwdc = "SQLUserSSH";
            $GLOBALS["iyojshspq"] = "Userssh";
            $GLOBALS["bpdomquxl"] = "login_ssh";
            $SQLUserSSH = "SELECT * FROM conta_ssh WHERE login = '" . $login_ssh . "'";
            ${$GLOBALS["bvtrmrurje"]} = $conn->prepare($SQLUserSSH);
            $SQLUserSSH->execute();
            ${$GLOBALS["nhcfmtqsoq"]} = $SQLUserSSH->fetch();
            $GLOBALS["betblllk"] = "iduserssh";
            $iduserssh = ${$GLOBALS["iyojshspq"]}["id_usuario_ssh"];
            ${$GLOBALS["orjuczt"]} = strtotime("+{$tempo} minutes");
            exec("echo {$mytime}:{$iduserssh} > /var/tmp/{$login_ssh}.painel");
        }
    }
    if (${$GLOBALS["tfkpvwceuqy"]} == 15) {
        $GLOBALS["imjnbgguwa"] = "dias";
        $xpvrsmo = "SQLContaSSH";
        $mdhwxblewe = "dias_acesso";
        $udmhhpbvruh = "expira";
        $GLOBALS["rndcsk"] = "expira";
        $igozjurzhus = "acessos";
        $kumtvxjc = "tempo";
        $GLOBALS["vbatjflksbhj"] = "msg";
        $lfnrrtlpd = "usuario_id";
        $welodmaml = "notins";
        ${$GLOBALS["eqnvsipqx"]} = $dias;
        $GLOBALS["owvxkuixxm"] = "login_ssh";
        $GLOBALS["gxllxrym"] = "valorssh";
        $GLOBALS["swcudpwjhfu"] = "usuario_id";
        $GLOBALS["pttrfcvjhf"] = "msg";
        $edfyuqkckcn = "login_ssh";
        $GLOBALS["hbrexvb"] = "servidor";
        ${$GLOBALS["rndcsk"]} = date("Y-m-d H:i:s", strtotime(" + " . ${$mdhwxblewe} . "  days"));
        $cntdhzvkbf = "notins";
        ${$GLOBALS["ivxnchgjmku"]} = "INSERT INTO conta_ssh (status, id_usuario, id_servidor, login, senha,  data_validade, acesso, valorconta, uuid)\nVALUES ('1', '" . ${$GLOBALS["swcudpwjhfu"]} . "', '" . ${$GLOBALS["hbrexvb"]}["id_servidor"] . "', '" . ${$edfyuqkckcn} . "', '" . ${$GLOBALS["nubvjwldcmm"]} . "', '" . ${$udmhhpbvruh} . "', '" . ${$igozjurzhus} . "', '" . ${$GLOBALS["gxllxrym"]} . "', '" . ${$GLOBALS["mslqnm"]} . "' )";
        ${$xpvrsmo} = $conn->prepare(${$GLOBALS["ivxnchgjmku"]});
        $SQLContaSSH->execute();
        ${$GLOBALS["vbatjflksbhj"]} = "Conta criada <small><b>" . ${$GLOBALS["owvxkuixxm"]} . "</b></small> Validade <small><i><b>" . $_POST["dias"] . " Dias</b></i></small>  !";
        ${$GLOBALS["ofkkuqind"]} = "INSERT INTO notificacoes (usuario_id,data,tipo,linkfatura,mensagem,info_outros) values ('" . ${$lfnrrtlpd} . "','" . date("Y-m-d H:i:s") . "','conta','n/d','" . ${$GLOBALS["pttrfcvjhf"]} . "','Conta Criada')";
        ${$cntdhzvkbf} = $conn->prepare(${$welodmaml});
        $notins->execute();
        if (!empty(${$kumtvxjc})) {
            $trlfaftm = "mytime";
            $rqlquefhq = "iduserssh";
            $oykjsrgdci = "SQLUserSSH";
            $SQLUserSSH = "SELECT * FROM conta_ssh WHERE login = '" . ${$GLOBALS["edfoago"]} . "'";
            $GLOBALS["fnufjdb"] = "SQLUserSSH";
            ${$GLOBALS["bvtrmrurje"]} = $conn->prepare($SQLUserSSH);
            $SQLUserSSH->execute();
            ${$GLOBALS["nhcfmtqsoq"]} = $SQLUserSSH->fetch();
            ${$rqlquefhq} = ${$GLOBALS["nhcfmtqsoq"]}["id_usuario_ssh"];
            ${$trlfaftm} = strtotime("+{$tempo} minutes");
            exec("echo {$mytime}:{$iduserssh} > /var/tmp/{$login_ssh}.painel");
        }
    }
    switch (${$fbqdsnyila}) {
        case 0:
            echo myalertuser("error", "Este login j\xc3\xa1 existe ou servidor offline!", ${$GLOBALS["tuqjvccbjz"]});
            break;
        case 1:
            echo myalertuser("error", "N\xc3\xa3o use espa\xc3\xa7os, acentos ou caracteres especiais!", ${$GLOBALS["skprmyn"]});
            break;
        case 2:
            echo myalertuser("error", "Login muito curto!", ${$GLOBALS["tuqjvccbjz"]});
            break;
        case 3:
            echo myalertuser("error", "Login muito grande!", ${$GLOBALS["tuqjvccbjz"]});
            break;
        case 4:
            echo myalertuser("error", "Campo login est\xc3\xa1 vazio!", ${$GLOBALS["tuqjvccbjz"]});
            break;
        case 5:
            echo myalertuser("error", "Campo senha est\xc3\xa1 vazio!", ${$GLOBALS["fpliopff"]});
            break;
        case 6:
            echo myalertuser("error", "Senha muito curta!", ${$GLOBALS["jymhww"]});
            break;
        case 7:
            echo myalertuser("error", "Dias inv\xc3\xa1lido!", ${$GLOBALS["locgbysfk"]});
            break;
        case 8:
            echo myalertuser("error", "Dias vazio!", ${$nlmlmnquuyp});
            break;
        case 9:
            echo myalertuser("error", "Dias deve ser maior que zero!", ${$GLOBALS["tuqjvccbjz"]});
            break;
        case 10:
            echo myalertuser("error", "Acessos inv\xc3\xa1lido!", ${$GLOBALS["tuqjvccbjz"]});
            break;
        case 11:
            echo myalertuser("error", "Campo limite vazio", ${$GLOBALS["tuqjvccbjz"]});
            break;
        case 12:
            echo myalertuser("error", "Campo limite deve ser maior que zero", ${$GLOBALS["ngrotnnj"]});
            break;
        case 13:
            if (empty(${$GLOBALS["xblcewuq"]})) {
                $GLOBALS["lhqgrgjbz"] = "acessos";
                $nmsdcfpuo = "nome_servidorSSH";
                $GLOBALS["fvqwpkxlxlu"] = "administrador";
                echo info_alert($nome_servidorSSH, ${$GLOBALS["edfoago"]}, ${$GLOBALS["nubvjwldcmm"]}, $acessos, "{$dias} dias", $administrador["textocon"] . "", ${$GLOBALS["tuqjvccbjz"]});
            } else {
                $sobisrtarbs = "login_ssh";
                $gwvvyrg = "administrador";
                $GLOBALS["epukwvjz"] = "diretorio";
                $oqxorxl = "senha_ssh";
                echo info_alert(${$GLOBALS["ouxehwjjon"]}, $login_ssh, $senha_ssh, ${$GLOBALS["kprmlja"]}, "{$temp}", $administrador["textocon"] . "", $diretorio);
            }
            break;
        case 14:
            echo myalertuser("error", "Erro ao criar login!", ${$GLOBALS["tuqjvccbjz"]});
            break;
        case 15:
            if (empty(${$GLOBALS["xblcewuq"]})) {
                $qjzpiogx = "acessos";
                echo info_alertv2(${$GLOBALS["ouxehwjjon"]}, ${$GLOBALS["edfoago"]}, ${$GLOBALS["nubvjwldcmm"]}, $acessos, "{$dias} dias", ${$GLOBALS["mslqnm"]}, ${$GLOBALS["tuqjvccbjz"]});
            } else {
                $GLOBALS["jyydxxgxijd"] = "senha_ssh";
                $kyedmuf = "acessos";
                $vwkbncdtxm = "diretorio";
                echo info_alertv2(${$GLOBALS["ouxehwjjon"]}, ${$GLOBALS["edfoago"]}, $senha_ssh, $acessos, "{$temp}", ${$GLOBALS["mslqnm"]}, $diretorio);
            }
            break;
        default:
            echo myalertuser("info", "Houve um erro inesperado, tente novamente!", ${$bujplqcxr});
            break;
    }
} else {
    echo myalertuser("info", "Preencha todos os campos corretamente!", ${$GLOBALS["tuqjvccbjz"]});
    exit;
}
