<?php

$GLOBALS["nhdsiiw"] = "linha";
$GLOBALS["wnqiek"] = "page";
$GLOBALS["jkstpsuwwax"] = "acesso_servidor";
$GLOBALS["bdbspnpqph"] = "quantidade_ssh";
$GLOBALS["ockyhjve"] = "openvpn";
$GLOBALS["nmohfgqhp"] = "SQLopen";
$GLOBALS["iqliftigid"] = "SQLUsuarioSSH";
$GLOBALS["xzxpyxpxggo"] = "acessos";
$GLOBALS["snlsgbgcvhqy"] = "servidor";
$GLOBALS["ivhxvpmtv"] = "quantidade_ssh_sub";
$GLOBALS["nlxsbimwd"] = "stsd";
$GLOBALS["lvpuckkcwjm"] = "dias_acesso";
$GLOBALS["fydoeoyia"] = "diferenca";
$GLOBALS["jsefjpjre"] = "data_validade";
$GLOBALS["cinejx"] = "total_acesso_ssh_online";
$GLOBALS["dnqghoexn"] = "SQLAcessoSSHon";
$GLOBALS["icjchrei"] = "SQLSubSSH";
$GLOBALS["fygmfwmspdvn"] = "row";
$GLOBALS["vypsykleki"] = "SQLSub";
$GLOBALS["flifnetvjr"] = "SQLnoti5";
$GLOBALS["iuygquy"] = "SQLnoti4";
$GLOBALS["hwpwgslbray"] = "SQLnotichama";
$GLOBALS["klhqcelm"] = "SQLchamados2";
$GLOBALS["wlvzjcjlpb"] = "all_chamados";
$GLOBALS["viphvhd"] = "SQLchamados";
$GLOBALS["cuvbrjrdm"] = "revenda_qtd_susp";
$GLOBALS["qrqwitwea"] = "SQLRevenda";
$GLOBALS["qgofbdct"] = "quantidade_sub_revenda";
$GLOBALS["eedldhc"] = "SQLsbrevenda";
$GLOBALS["ekrijsj"] = "SQLchamadoscli";
$GLOBALS["cqppwrgsu"] = "totalnoti_outros";
$GLOBALS["jsdsxfgu"] = "all_chamados_clientes";
$GLOBALS["yjoqhvgs"] = "SQLchamadoscli2";
$GLOBALS["qtgqpfpcizx"] = "SQLnoti3";
$GLOBALS["fngoboos"] = "totalnoti_fatura";
$GLOBALS["mcwpzrork"] = "SQLnoti2";
$GLOBALS["bhyptouoke"] = "totalnoti_contas";
$GLOBALS["mtjjymn"] = "SQLnoti1";
$GLOBALS["wycpzsganje"] = "totalnoti";
$ffklvoqk = "isp";
$GLOBALS["rbhburrpuosn"] = "SQLnoti";
$GLOBALS["euyoknszsodu"] = "SQLfaturas2";
$GLOBALS["cbkljxk"] = "SQLchamados";
$GLOBALS["vooglrrwuw"] = "faturas";
$GLOBALS["xghakmudme"] = "SQLfaturas";
$GLOBALS["penfkzd"] = "todosarquivos";
$GLOBALS["wtcvrmvq"] = "SQLArquivos";
$GLOBALS["qswqdebxrw"] = "SQLAcesso";
$GLOBALS["nohojxfswtph"] = "SQLAcessoSSH";
$GLOBALS["ohtholltvo"] = "total_acesso_ssh";
$GLOBALS["aemoohvwowfc"] = "total_acesso_ssh_online";
$GLOBALS["ajwehxonjw"] = "SQLUsuario_sshSUSP";
$yunnayxplip = "SQLchamados2";
$GLOBALS["qcvgrubyzmx"] = "total_acesso_ssh";
$GLOBALS["yteuxvehz"] = "Meses";
$GLOBALS["jqyvswkyjtc"] = "mes";
$uyzghqe = "SQLAcessoSSH";
$GLOBALS["jqrtnkeydq"] = "mes";
$GLOBALS["nqxketyvzx"] = "ano";
$GLOBALS["jfowfodl"] = "partes";
$GLOBALS["lqkbzdcbfbdr"] = "datacad";
$GLOBALS["mfyyuxlbe"] = "avatarusu";
$necpwahyrr = "usuario";
$GLOBALS["dhkdfyjxuun"] = "usuario";
$GLOBALS["eyaxgdd"] = "SQLUsuario";
$GLOBALS["lmnzfxte"] = "all_ssh_susp_qtd";
$GLOBALS["ajslebwvb"] = "all_ssh_susp_qtd";
$GLOBALS["jaxkdav"] = "administrador";
$GLOBALS["guxhktjgwxt"] = "SQLAdministrador";
$fgydwjfhd = "SQLAdministrador";
$GLOBALS["svriyhn"] = "usuario";
require_once "pages/system/funcoes.php";
require_once "pages/system/seguranca.php";
$syakqzyapg = "quantidade_ssh_user";
$zirytbipabx = "quantidade_ssh";
$GLOBALS["rysvutgob"] = "SQLchamados";
require_once "pages/system/config.php";
$ftyqczngwct = "avatarusu";
$chukjetecw = "SQLUsuario";
$GLOBALS["umfqhgidusk"] = "SQLAdministrador";
$GLOBALS["excdqcmih"] = "SQLSubSSH";
$GLOBALS["hcanxtmqfo"] = "SQLUsuario";
$lidioetxbb = "SQLUsuario_sshSUSP";
$uarucq = "quantidade_ssh_sub";
require_once "pages/system/classe.ssh.php";
$SQLAdministrador = "SELECT * FROM admin WHERE id_administrador = '1'";
$GLOBALS["uwtegdfnqdul"] = "Mes";
$GLOBALS["owhteiydyrx"] = "SQLAcesso";
$SQLAdministrador = $conn->prepare($SQLAdministrador);
$SQLAdministrador->execute();
$GLOBALS["dmfkypxxgaq"] = "datacad";
$administrador = $SQLAdministrador->fetch();
protegePagina("user");
$quantidade_ssh = 0;
$eetwwre = "SQLArquivos";
$quantidade_ssh_user = 0;
$GLOBALS["lrmjobvy"] = "SQLAcessoSSH";
$huxvpgi = "quantidade_sub";
$quantidade_ssh_sub = 0;
$jecozqxid = "SQLAcessoSSH";
$GLOBALS["glnkhetscg"] = "SQLUsuario_ssh";
$quantidade_sub = 0;
$all_ssh_susp_qtd = 0;
$SQLUsuario = "SELECT * FROM usuario WHERE id_usuario = '" . $_SESSION["usuarioID"] . "'";
$SQLUsuario = $conn->prepare($SQLUsuario);
$bkgjpg = "avatarusu";
$SQLUsuario->execute();
$usuario = $SQLUsuario->fetch();
switch ($usuario["avatar"]) {
    case 1:
        ${$GLOBALS["mfyyuxlbe"]} = "avatar1.png";
        break;
    case 2:
        ${$bkgjpg} = "avatar2.png";
        break;
    case 3:
        ${$GLOBALS["mfyyuxlbe"]} = "avatar3.png";
        break;
    case 4:
        ${$GLOBALS["mfyyuxlbe"]} = "avatar4.png";
        break;
    case 5:
        ${$ftyqczngwct} = "avatar5.png";
        break;
    default:
        ${$GLOBALS["mfyyuxlbe"]} = "boxed-bg.png";
        break;
}
$GLOBALS["hleoqoyyfu"] = "quantidade_ssh";
$GLOBALS["jzpsaafka"] = "SQLUsuario_ssh";
if (${$GLOBALS["dhkdfyjxuun"]}["tipo"] == "revenda") {
    $GLOBALS["hqyvencu"] = "tipouser";
    $tipouser = "Revendedor";
} elseif (${$GLOBALS["dhkdfyjxuun"]}["tipo"] == "vpn") {
    $atmrmnx = "tipouser";
    $tipouser = "Usu\xc3\xa1rio VPN";
}
${$GLOBALS["lqkbzdcbfbdr"]} = ${$GLOBALS["dhkdfyjxuun"]}["data_cadastro"];
$vabykbva = "acesso_servidor";
${$GLOBALS["jfowfodl"]} = explode("-", ${$GLOBALS["dmfkypxxgaq"]});
$GLOBALS["jflxkhq"] = "SQLUsuario_ssh";
$ypjovptuczyf = "SQLUsuario_sshSUSP";
${$GLOBALS["nqxketyvzx"]} = ${$GLOBALS["jfowfodl"]}[0];
${$GLOBALS["jqyvswkyjtc"]} = ${$GLOBALS["jfowfodl"]}[1];
${$GLOBALS["uwtegdfnqdul"]} = muda_mes(${$GLOBALS["jqrtnkeydq"]});
$GLOBALS["utlbxtjcc"] = "acesso_servidor";
$lrgfieunff = "SQLAcessoSSH";
$GLOBALS["dcdjcmpeell"] = "totalnoti_chamados";
${$GLOBALS["yteuxvehz"]} = muda_mes2(${$GLOBALS["jqyvswkyjtc"]});
${$GLOBALS["jzpsaafka"]} = "select * from conta_ssh WHERE id_usuario = '" . $_SESSION["usuarioID"] . "' ";
$GLOBALS["vqyobugyrlp"] = "SQLchamados2";
${$GLOBALS["jflxkhq"]} = $conn->prepare(${$GLOBALS["glnkhetscg"]});
$SQLUsuario_ssh->execute();
${$GLOBALS["hleoqoyyfu"]} += $SQLUsuario_ssh->rowCount();
${$GLOBALS["ajwehxonjw"]} = "select * from conta_ssh WHERE id_usuario = '" . $_SESSION["usuarioID"] . "' and  status='2'";
${$lidioetxbb} = $conn->prepare(${$ypjovptuczyf});
$SQLUsuario_sshSUSP->execute();
${$GLOBALS["lmnzfxte"]} += $SQLUsuario_sshSUSP->rowCount();
$fmqoetjqhp = "total_acesso_ssh_online";
$GLOBALS["ugqbogcs"] = "usuario";
${$GLOBALS["ohtholltvo"]} = 0;
${$GLOBALS["nohojxfswtph"]} = "SELECT sum(acesso) AS quantidade FROM conta_ssh where id_usuario='" . $_SESSION["usuarioID"] . "' ";
${$lrgfieunff} = $conn->prepare(${$jecozqxid});
$GLOBALS["gjbbkzasdd"] = "usuario";
$SQLAcessoSSH->execute();
${$GLOBALS["nohojxfswtph"]} = $SQLAcessoSSH->fetch();
${$GLOBALS["qcvgrubyzmx"]} += ${$GLOBALS["nohojxfswtph"]}["quantidade"];
$kbegupt = "SQLnoti4";
${$uyzghqe} = "SELECT sum(online) AS quantidade FROM conta_ssh where id_usuario='" . $_SESSION["usuarioID"] . "' ";
$GLOBALS["rclvmxvjjo"] = "usuario";
${$GLOBALS["nohojxfswtph"]} = $conn->prepare(${$GLOBALS["lrmjobvy"]});
$SQLAcessoSSH->execute();
$rtmxnonva = "usuario";
$ynitrzn = "usuario";
${$GLOBALS["nohojxfswtph"]} = $SQLAcessoSSH->fetch();
$hqhpfokm = "acesso_servidor";
${$fmqoetjqhp} += ${$GLOBALS["nohojxfswtph"]}["quantidade"];
${$GLOBALS["qswqdebxrw"]} = "select * from acesso_servidor WHERE id_usuario = '" . $_SESSION["usuarioID"] . "' ";
${$GLOBALS["qswqdebxrw"]} = $conn->prepare(${$GLOBALS["owhteiydyrx"]});
$SQLAcesso->execute();
${$vabykbva} = $SQLAcesso->rowCount();
${$GLOBALS["wtcvrmvq"]} = "select * from  arquivo_download";
${$GLOBALS["wtcvrmvq"]} = $conn->prepare(${$eetwwre});
$GLOBALS["lyurkv"] = "stsd";
$SQLArquivos->execute();
${$GLOBALS["penfkzd"]} = $SQLArquivos->rowCount();
$bixumsvqlc = "SQLnoti1";
if (${$GLOBALS["dhkdfyjxuun"]}["id_mestre"] == 0) {
    $GLOBALS["rxfdstqfkb"] = "SQLfaturas";
    ${$GLOBALS["xghakmudme"]} = "select * from  fatura where status='pendente' and usuario_id='" . $_SESSION["usuarioID"] . "'";
    ${$GLOBALS["xghakmudme"]} = $conn->prepare(${$GLOBALS["rxfdstqfkb"]});
    $SQLfaturas->execute();
    ${$GLOBALS["vooglrrwuw"]} = $SQLfaturas->rowCount();
} else {
    $GLOBALS["kkcjdjoy"] = "SQLfaturas";
    $igeudcprw = "SQLfaturas";
    $SQLfaturas = "select * from  fatura_clientes where status='pendente' and usuario_id='" . $_SESSION["usuarioID"] . "'";
    $tnysrt = "SQLfaturas";
    $SQLfaturas = $conn->prepare($SQLfaturas);
    $SQLfaturas->execute();
    ${$GLOBALS["vooglrrwuw"]} = $SQLfaturas->rowCount();
}
$rrxrsorti = "SQLnoti4";
if (${$rtmxnonva}["tipo"] == "revenda") {
    $cqefbmck = "faturas_clientes";
    ${$GLOBALS["euyoknszsodu"]} = "select * from  fatura_clientes where status='pendente' and id_mestre='" . $_SESSION["usuarioID"] . "'";
    ${$GLOBALS["euyoknszsodu"]} = $conn->prepare(${$GLOBALS["euyoknszsodu"]});
    $SQLfaturas2->execute();
    ${$cqefbmck} = $SQLfaturas2->rowCount();
}
$GLOBALS["pbbebvlty"] = "avatarusu";
${$GLOBALS["rbhburrpuosn"]} = "select * from  notificacoes where lido='nao' and admin='nao' and usuario_id='" . $_SESSION["usuarioID"] . "'";
${$GLOBALS["rbhburrpuosn"]} = $conn->prepare(${$GLOBALS["rbhburrpuosn"]});
$SQLnoti->execute();
${$GLOBALS["wycpzsganje"]} = $SQLnoti->rowCount();
${$GLOBALS["mtjjymn"]} = "select * from  notificacoes where lido='nao' and admin='nao' and tipo='conta' and usuario_id='" . $_SESSION["usuarioID"] . "'";
${$bixumsvqlc} = $conn->prepare(${$GLOBALS["mtjjymn"]});
$SQLnoti1->execute();
${$GLOBALS["bhyptouoke"]} = $SQLnoti1->rowCount();
${$GLOBALS["mcwpzrork"]} = "select * from  notificacoes where lido='nao' and admin='nao' and tipo='fatura' and usuario_id='" . $_SESSION["usuarioID"] . "'";
${$GLOBALS["mcwpzrork"]} = $conn->prepare(${$GLOBALS["mcwpzrork"]});
$SQLnoti2->execute();
${$GLOBALS["fngoboos"]} = $SQLnoti2->rowCount();
if (${$GLOBALS["ugqbogcs"]}["tipo"] == "revenda") {
    $GLOBALS["zrgzdb"] = "SQLsbrevenda";
    $wirosywkqkd = "SQLnoti3";
    ${$GLOBALS["qtgqpfpcizx"]} = "select * from  notificacoes where lido='nao' and admin='nao' and tipo='revenda' and usuario_id='" . $_SESSION["usuarioID"] . "'";
    ${$GLOBALS["qtgqpfpcizx"]} = $conn->prepare(${$wirosywkqkd});
    $SQLnoti3->execute();
    $nvqohgdt = "totalnoti_revenda";
    $GLOBALS["wtaoxrnyngu"] = "SQLchamadoscli2";
    $totalnoti_revenda = $SQLnoti3->rowCount();
    $GLOBALS["pymouaf"] = "SQLchamadoscli";
    $GLOBALS["trnmkxtn"] = "all_chamados_clientes";
    ${$GLOBALS["yjoqhvgs"]} = "select * from  chamados where status='resposta' and id_mestre='" . $_SESSION["usuarioID"] . "'";
    ${$GLOBALS["yjoqhvgs"]} = $conn->prepare(${$GLOBALS["wtaoxrnyngu"]});
    $SQLchamadoscli2->execute();
    ${$GLOBALS["jsdsxfgu"]} += $SQLchamadoscli2->rowCount();
    ${$GLOBALS["ekrijsj"]} = "select * from  chamados where status='aberto' and id_mestre='" . $_SESSION["usuarioID"] . "'";
    ${$GLOBALS["ekrijsj"]} = $conn->prepare(${$GLOBALS["pymouaf"]});
    $SQLchamadoscli->execute();
    ${$GLOBALS["trnmkxtn"]} += $SQLchamadoscli->rowCount();
    ${$GLOBALS["eedldhc"]} = "select * from usuario WHERE id_mestre = '" . $_SESSION["usuarioID"] . "'";
    ${$GLOBALS["zrgzdb"]} = $conn->prepare(${$GLOBALS["eedldhc"]});
    $SQLsbrevenda->execute();
    ${$GLOBALS["qgofbdct"]} = $SQLsbrevenda->rowCount();
    ${$GLOBALS["qrqwitwea"]} = "SELECT * FROM usuario WHERE id_mestre = '" . $_SESSION["usuarioID"] . "' and ativo='2'";
    ${$GLOBALS["qrqwitwea"]} = $conn->prepare(${$GLOBALS["qrqwitwea"]});
    $SQLRevenda->execute();
    ${$GLOBALS["cuvbrjrdm"]} = $SQLRevenda->rowCount();
}
${$GLOBALS["cbkljxk"]} = "select * from  chamados where status='aberto' and usuario_id='" . $_SESSION["usuarioID"] . "'";
${$GLOBALS["rysvutgob"]} = $conn->prepare(${$GLOBALS["viphvhd"]});
$SQLchamados->execute();
${$GLOBALS["wlvzjcjlpb"]} += $SQLchamados->rowCount();
${$GLOBALS["vqyobugyrlp"]} = "select * from  chamados where status='resposta' and usuario_id='" . $_SESSION["usuarioID"] . "'";
${$GLOBALS["klhqcelm"]} = $conn->prepare(${$yunnayxplip});
$SQLchamados2->execute();
${$GLOBALS["wlvzjcjlpb"]} += $SQLchamados2->rowCount();
${$GLOBALS["hwpwgslbray"]} = "select * from  notificacoes where lido='nao' and admin='nao' and tipo='chamados' and usuario_id='" . $_SESSION["usuarioID"] . "'";
${$GLOBALS["hwpwgslbray"]} = $conn->prepare(${$GLOBALS["hwpwgslbray"]});
$SQLnotichama->execute();
${$GLOBALS["dcdjcmpeell"]} = $SQLnotichama->rowCount();
${$rrxrsorti} = "select * from  notificacoes where lido='nao' and admin='nao' and tipo='outros' and usuario_id='" . $_SESSION["usuarioID"] . "'";
${$GLOBALS["iuygquy"]} = $conn->prepare(${$kbegupt});
$SQLnoti4->execute();
${$GLOBALS["cqppwrgsu"]} = $SQLnoti4->rowCount();
if (${$GLOBALS["dhkdfyjxuun"]}["id_mestre"] != 0) {
    $nhuigyflw = "totalnoti_users";
    $GLOBALS["ehmgvnrll"] = "SQLnoti5";
    $GLOBALS["vxjdrqdwvr"] = "SQLnoti5";
    $SQLnoti5 = "select * from  notificacoes where lido='nao' and admin='nao' and tipo='usuario' and usuario_id='" . $_SESSION["usuarioID"] . "'";
    $SQLnoti5 = $conn->prepare(${$GLOBALS["flifnetvjr"]});
    $SQLnoti5->execute();
    $totalnoti_users = $SQLnoti5->rowCount();
}
if (${$GLOBALS["dhkdfyjxuun"]}["tipo"] == "revenda") {
    $mvdynfivwrw = "data_atual";
    $GLOBALS["ecilbb"] = "SQLSub";
    ${$GLOBALS["vypsykleki"]} = "select * from usuario WHERE id_mestre = '" . $_SESSION["usuarioID"] . "'";
    ${$GLOBALS["vypsykleki"]} = $conn->prepare(${$GLOBALS["ecilbb"]});
    $SQLSub->execute();
    $GLOBALS["zyfnhbbhvir"] = "quantidade_sub";
    if ($SQLSub->rowCount() > 0) {
        while (${$GLOBALS["fygmfwmspdvn"]} = $SQLSub->fetch()) {
            $yjtnlnex = "SQLSubSSH";
            $ypmdyitsut = "row";
            ${$GLOBALS["icjchrei"]} = "select * from conta_ssh WHERE id_usuario = '" . ${$GLOBALS["fygmfwmspdvn"]}["id_usuario"] . "'  ";
            $GLOBALS["fwkpxeclh"] = "sshsub";
            $japjedjbibc = "SQLSubSSH";
            $SQLSubSSH = $conn->prepare(${$yjtnlnex});
            $yfqsgsptbuy = "quantidade_ssh";
            $GLOBALS["uzlgqzd"] = "SQLUsuario_sshSUSP";
            $qxhhvrfvrdo = "SQLAcessoSSHon";
            $SQLSubSSH->execute();
            $quantidade_ssh += $SQLSubSSH->rowCount();
            $sshsub = $SQLSubSSH->rowCount();
            $usvkfgfuwse = "SQLAcessoSSHon";
            $GLOBALS["tmjoshvti"] = "row";
            $hvfkme = "total_acesso_ssh";
            $GLOBALS["jhzgdky"] = "SQLAcessoSSHon";
            ${$GLOBALS["ajwehxonjw"]} = "select * from conta_ssh WHERE id_usuario = '" . ${$ypmdyitsut}["id_usuario"] . "' and status='2'";
            ${$GLOBALS["ajwehxonjw"]} = $conn->prepare(${$GLOBALS["uzlgqzd"]});
            $GLOBALS["xytiwbqyncc"] = "SQLAcessoSSHon";
            $SQLUsuario_sshSUSP->execute();
            $GLOBALS["tmniwlfryc"] = "SQLAcessoSSHon";
            ${$GLOBALS["ajslebwvb"]} += $SQLUsuario_sshSUSP->rowCount();
            ${$GLOBALS["ohtholltvo"]} = 0;
            ${$usvkfgfuwse} = "SELECT sum(acesso) AS quantidade FROM conta_ssh where id_usuario='" . ${$GLOBALS["fygmfwmspdvn"]}["id_usuario"] . "' ";
            ${$GLOBALS["dnqghoexn"]} = $conn->prepare(${$GLOBALS["xytiwbqyncc"]});
            $SQLAcessoSSHon->execute();
            ${$GLOBALS["tmniwlfryc"]} = $SQLAcessoSSHon->fetch();
            ${$hvfkme} += ${$qxhhvrfvrdo}["quantidade"];
            ${$GLOBALS["dnqghoexn"]} = "SELECT sum(online) AS quantidade FROM conta_ssh where id_usuario='" . ${$GLOBALS["tmjoshvti"]}["id_usuario"] . "' ";
            $htxixek = "SQLAcessoSSHon";
            $SQLAcessoSSHon = $conn->prepare(${$GLOBALS["jhzgdky"]});
            $SQLAcessoSSHon->execute();
            ${$GLOBALS["dnqghoexn"]} = $SQLAcessoSSHon->fetch();
            ${$GLOBALS["cinejx"]} += ${$GLOBALS["dnqghoexn"]}["quantidade"];
        }
    }
    $GLOBALS["ikrhsim"] = "usuario";
    $GLOBALS["tnqylsmcv"] = "data_atual";
    ${$GLOBALS["zyfnhbbhvir"]} += $SQLSub->rowCount();
    ${$mvdynfivwrw} = date("Y-m-d H:i:s");
    ${$GLOBALS["jsefjpjre"]} = ${$GLOBALS["ikrhsim"]}["validade"];
    $GLOBALS["tfdhbmqyr"] = "quantidade_ssh";
    $GLOBALS["lqkskbyjdgv"] = "quantidade_ssh_user";
    if (${$GLOBALS["jsefjpjre"]} > ${$GLOBALS["tnqylsmcv"]}) {
        $srxpwq = "data_atual";
        ${$GLOBALS["fydoeoyia"]} = strtotime(${$GLOBALS["jsefjpjre"]}) - strtotime($data_atual);
        ${$GLOBALS["lvpuckkcwjm"]} = floor(${$GLOBALS["fydoeoyia"]} / 86400);
    } else {
        $krydbudo = "dias_acesso";
        $dias_acesso = 0;
    }
    if (${$GLOBALS["lvpuckkcwjm"]} > 10) {
        $GLOBALS["xwfnvmxsmuq"] = "stsd";
        $stsd = "info";
    } elseif (${$GLOBALS["lvpuckkcwjm"]} == 0) {
        $btxtqdp = "stsd";
        $stsd = "danger";
    } else {
        ${$GLOBALS["nlxsbimwd"]} = "warning";
    }
    ${$GLOBALS["tfdhbmqyr"]} += ${$GLOBALS["ivhxvpmtv"]} + ${$GLOBALS["lqkskbyjdgv"]};
}
$GLOBALS["sjauqhymcd"] = "SQLSubSSH";
$otyeiwwcgk = "usuario";
$SQLSubSSH = "SELECT * FROM acesso_servidor where id_usuario='" . ${$GLOBALS["gjbbkzasdd"]}["id_usuario"] . "'";
${$GLOBALS["icjchrei"]} = $conn->prepare(${$GLOBALS["excdqcmih"]});
$SQLSubSSH->execute();
if ($SQLSubSSH->rowCount() > 0) {
    while (${$GLOBALS["fygmfwmspdvn"]} = $SQLSubSSH->fetch()) {
        $ygtyofc = "SQLUsuarioSSH";
        $GLOBALS["aerqeyvmvd"] = "SQLAcessoSSH";
        $GLOBALS["zyqfgaiuxrb"] = "contas";
        $GLOBALS["kbwytegdtksp"] = "buscaserver";
        $jhjxxyk = "servidor";
        $buscaserver = "SELECT * FROM servidor where id_servidor='" . ${$GLOBALS["fygmfwmspdvn"]}["id_servidor"] . "'";
        $scfpremkntl = "buscaserver";
        $GLOBALS["johgnlxolf"] = "contas";
        $GLOBALS["lqfkvcgcs"] = "buscaserver";
        $qlbfbqqifpe = "servidor";
        $buscaserver = $conn->prepare($buscaserver);
        $buscaserver->execute();
        $servidor = $buscaserver->fetch();
        $GLOBALS["pobkvfh"] = "acessos";
        $tobmjbeblcf = "row";
        ${$GLOBALS["nohojxfswtph"]} = "SELECT sum(acesso) AS quantidade  FROM conta_ssh where id_servidor = '" . ${$GLOBALS["snlsgbgcvhqy"]}["id_servidor"] . "'  and id_usuario='" . ${$GLOBALS["fygmfwmspdvn"]}["id_usuario"] . "' ";
        ${$GLOBALS["nohojxfswtph"]} = $conn->prepare(${$GLOBALS["nohojxfswtph"]});
        $SQLAcessoSSH->execute();
        ${$GLOBALS["aerqeyvmvd"]} = $SQLAcessoSSH->fetch();
        ${$GLOBALS["pobkvfh"]} = ${$GLOBALS["nohojxfswtph"]}["quantidade"];
        if (${$GLOBALS["xzxpyxpxggo"]} == 0) {
            $GLOBALS["krayrxdwqau"] = "acessos";
            $acessos = 0;
        }
        $dffawrblrg = "row";
        ${$GLOBALS["iqliftigid"]} = "SELECT * from conta_ssh WHERE id_servidor = '" . ${$qlbfbqqifpe}["id_servidor"] . "' and id_usuario='" . $row["id_usuario"] . "'";
        ${$ygtyofc} = $conn->prepare(${$GLOBALS["iqliftigid"]});
        $SQLUsuarioSSH->execute();
        ${$GLOBALS["zyqfgaiuxrb"]} = $SQLUsuarioSSH->rowCount();
        if (${$GLOBALS["johgnlxolf"]} == 0) {
            $GLOBALS["begyoiionbe"] = "contas";
            $contas = 0;
        }
        ${$GLOBALS["nmohfgqhp"]} = "select * from ovpn WHERE servidor_id = '" . ${$tobmjbeblcf}["id_servidor"] . "' ";
        ${$GLOBALS["nmohfgqhp"]} = $conn->prepare(${$GLOBALS["nmohfgqhp"]});
        $SQLopen->execute();
        if ($SQLopen->rowCount() > 0) {
            $GLOBALS["ihlewtdrur"] = "texto";
            ${$GLOBALS["ockyhjve"]} = $SQLopen->fetch();
            ${$GLOBALS["ihlewtdrur"]} = "<a href='../admin/pages/servidor/baixar_ovpn.php?id=" . ${$GLOBALS["ockyhjve"]}["id"] . "' class=\"label label-info\">Baixar</a>";
        } else {
            $filklm = "texto";
            $texto = "<span class=\"label label-danger\">Indisponivel</span>";
        }
    }
}
echo "<!DOCTYPE html>\n<html class=\"loading bordered-layout\" lang=\"pt\" data-layout=\"bordered-layout\" data-textdirection=\"ltr\">\n<!-- BEGIN: Head-->\n<head>\n<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">\n<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">\n<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui\">\n<meta name=\"description\" content=\"Gerenciador de conex\xc3\xb4es SSH\">\n<meta name=\"keywords\" content=\"VPN GESTOR-SSH \xf0\x9f\x9a\x80, VPN, SSH, Gratis, Registrar\">\n<meta name=\"author\" content=\"nandoslayer\">\n<meta name=\"msapplication-TileColor\" content=\"#FFFFFF\">\n<meta name=\"theme-color\" content=\"#FFFFFF\">\n<title>";
echo ${$GLOBALS["jaxkdav"]}["site"];
echo "</title>\n<link rel=\"apple-touch-icon\" href=\"../app-assets/images/ico/favicon.ico\">\n<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"../app-assets/images/ico/favicon.ico\">\n<link href=\"https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600\" rel=\"stylesheet\">\n<!-- BEGIN: Vendor CSS-->\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../app-assets/vendors/css/vendors.min.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../app-assets/vendors/css/charts/apexcharts.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../app-assets/vendors/css/extensions/toastr.min.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../app-assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css\">\n<!-- BEGIN: Vendor CSS-->\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../app-assets/vendors/css/vendors.min.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../app-assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../app-assets/vendors/css/tables/datatable/buttons.bootstrap5.min.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../app-assets/vendors/css/tables/datatable/rowGroup.bootstrap5.min.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../app-assets/vendors/css/forms/select/select2.min.css\">\n<!-- END: Vendor CSS-->\n<!-- END: Vendor CSS-->\n<!-- BEGIN: Theme CSS-->\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../app-assets/css/bootstrap.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../app-assets/css/bootstrap-extended.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../app-assets/css/colors.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../app-assets/css/components.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../app-assets/css/themes/dark-layout.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../app-assets/css/themes/bordered-layout.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../app-assets/css/themes/semi-dark-layout.css\">\n<!-- BEGIN: Page CSS-->\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../app-assets/css/core/menu/menu-types/vertical-menu.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../app-assets/css/plugins/charts/chart-apex.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../app-assets/css/plugins/extensions/ext-component-toastr.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../app-assets/css/pages/app-invoice-list.css\">\n<!-- END: Page CSS-->\n<!-- BEGIN: Custom CSS-->\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../assets/css/style.css\">\n<!-- END: Custom CSS-->\n<!--<script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>-->\n<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js\"></script>\n<script src=\"http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js\"></script>\n<script src=\"https://sdk.mercadopago.com/js/v2\"></script>\n<script type=\"text/javascript\">\n\n//Calling function\nsetTimeout(repeatAjax,10000);\nfunction repeatAjax(){\njQuery.ajax({\n\n          type: \"POST\",\n          url: 'pages/verify.php',\n          dataType: 'text',\n          success: function(resp) {\n          \tif(resp == 'Aprovado')\n          \t{\n              window.location = \"../home.php?page=aprovado\";\n\n                    jQuery('.teste').html(resp);\n                    }\n\n          },\n          complete: function() {\n                setTimeout(repeatAjax,10000); //After completion of request, time to redo it after a second\n             }\n        });\n}\n</script>\n</head>\n<!-- END: Head-->\n<!-- BEGIN: Body-->\n<body class=\"vertical-layout vertical-menu-modern  navbar-floating footer-static  \" data-open=\"click\" data-menu=\"vertical-menu-modern\" data-col=\"\">\n<div class=\"wrapper\">\n<div class=\"modal fade\" id=\"flaggeral\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalLabel\" aria-hidden=\"true\" style=\"display: none;\">\n<div class=\"modal-dialog\">\n<div class=\"modal-content\">\n<div class=\"modal-header\">\n<h3 class=\"modal-title\" id=\"lineModalLabel\">Notificar Geral!</h3>\n</div>\n<div class=\"modal-body\">\n<!-- content goes here -->\n<form name=\"editaserver\" action=\"pages/usuario/notificar_home.php\" method=\"post\">\n<div class=\"form-group\">\n";
if (${$GLOBALS["dhkdfyjxuun"]}["tipo"] == "revenda" and ${$GLOBALS["dhkdfyjxuun"]}["subrevenda"] == "nao") {
    echo "<input type=\"hidden\" class=\"form-control\" id=\"owner\" name=\"clientes\" value=\"2\">\n";
} else {
    echo "<input type=\"hidden\" class=\"form-control\" id=\"owner\" name=\"clientes\" value=\"1\">\n";
}
echo "</div>\n<div class=\"form-group\">\n<label for=\"exampleInputPassword1\">Mensagem</label>\n<textarea class=\"form-control\" name=\"msg\" rows=\"3\" cols=\"20\" wrap=\"off\" placeholder=\"Digite...\" require></textarea>\n</div>\n<div class=\"modal-footer\">\n<button class=\"btn btn-success\">Confirmar</button>\n<button type=\"button\" class=\"btn btn-danger\" data-bs-dismiss=\"modal\">Cancelar</button>\n</form>\n</div>\n</div>\n</div>\n</div>\n</div>\n<script>\n//paste this code under head tag or in a seperate js file.\n// Wait for window load\n\$(window).load(function() {\n// Animate loader off screen\n\$(\".se-pre-con\").fadeOut('slow');;\n});\n</script>\n<script>\nfunction usuariosonline() {\n// Requisi\xc3\xa7\xc3\xa3o\n\$.post('pages/ssh/online_home.php?requisicao=1',\nfunction(resposta) {\n//Adiciona Efeito Fade\n\$(\"#usuarioson\").fadeOut(\"slow\").fadeIn('slow');\n// Limpa\n\$('#usuarioson').empty();\n// Exibe\n\$('#usuarioson').append(resposta);\n});\n}\n// Intervalo para cada Chamada\nsetInterval(\"usuariosonline()\", 15002);\n// Ap\xc3\xb3s carregar a Pagina Primeiro Requisito\n\$(function() {\n// Requisita Fun\xc3\xa7\xc3\xa3o acima\nusuariosonline();\n});\n</script>\n<script>\nfunction atualizar() {\n// Fazendo requisi\xc3\xa7\xc3\xa3o AJAX\n\$.post('pages/ssh/online_home.php?requisicao=2',\nfunction(online) {\n// Exibindo frase\n\$('#online_nav').html(online);\n\$('#online').html(online);\n}, 'JSON');\n}\n// Definindo intervalo que a fun\xc3\xa7\xc3\xa3o ser\xc3\xa1 chamada\nsetInterval(\"atualizar()\", 4001);\n// Quando carregar a p\xc3\xa1gina\n\$(function() {\n// Faz a primeira atualiza\xc3\xa7\xc3\xa3o\natualizar();\n});\n</script>\n<nav class=\"header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl\">\n<div class=\"navbar-container d-flex content\">\n<div class=\"bookmark-wrapper d-flex align-items-center\">\n<ul class=\"nav navbar-nav d-xl-none\">\n<li class=\"nav-item\"><a class=\"nav-link menu-toggle\" href=\"#\"><i class=\"ficon\" data-feather=\"menu\"></i></a></li>\n</ul>\n</div>\n<ul class=\"nav navbar-nav align-items-center ms-auto\">\n<li class=\"nav-item\"><a class=\"nav-link nav-link-style\"><i class=\"ficon\" data-feather=\"moon\"></i></a>\n</li>\n";
if (${$GLOBALS["dhkdfyjxuun"]}["subrevenda"] != "sim ") {
    echo "<li class=\"nav-item\"><a type=\"button\" class=\"nav-link\" data-bs-toggle=\"modal\" data-bs-target=\"#flaggeral\"><i class=\"ficon\" data-feather='message-square'></i></a></li>\n";
}
if (${$GLOBALS["aemoohvwowfc"]} > 0) {
    $GLOBALS["tgjqjkgy"] = "total_acesso_ssh_online";
    echo "<li class=\"nav-item dropdown dropdown-notification me-25 \"><a class=\"nav-link\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"ficon\" data-feather=\"zap\"></i><span class=\"badge rounded-pill bg-success badge-up badge-glow cart-item-count\" id=\"online_nav\">";
    echo $total_acesso_ssh_online;
    $wrkvyxygv = "total_acesso_ssh_online";
    echo "</span></a>\n<ul class=\"dropdown-menu dropdown-menu-media dropdown-menu-end\">\n<li class=\"dropdown-menu-header\">\n<div class=\"dropdown-header d-flex\">\n<h4 class=\"notification-title mb-0 me-auto\">Contas Online</h4>\n<div class=\"badge rounded-pill badge-light-success\" id=\"online\">\n";
    echo $total_acesso_ssh_online;
    echo "</div>\n</div>\n</li>\n";
} else {
    echo "<li class=\"nav-item dropdown dropdown-notification me-25 \"><a class=\"nav-link\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"ficon\" data-feather=\"zap-off\"></i><span class=\"badge rounded-pill bg-danger badge-up badge-glow cart-item-count\" id=\"online_nav\">";
    echo ${$GLOBALS["cinejx"]};
    echo "</span></a>\n<ul class=\"dropdown-menu dropdown-menu-media dropdown-menu-end\">\n<li class=\"dropdown-menu-header\">\n<div class=\"dropdown-header d-flex\">\n<h4 class=\"notification-title mb-0 me-auto\">Contas Online</h4>\n<div class=\"badge rounded-pill badge-light-danger\" id=\"online\">\n";
    echo ${$GLOBALS["cinejx"]};
    echo "</div>\n</div>\n</li>\n";
}
if (${$GLOBALS["cinejx"]} > 0) {
    echo "<li class=\"scrollable-container media-list\" id=\"usuarioson\">\n</li>\n";
} else {
    echo "<li class=\"scrollable-container media-list\">\n<div class=\"list-item d-flex align-items-start\">\n<div class=\"me-1\">\n<div class=\"avatar bg-light-danger\">\n<div class=\"avatar-content\"><i data-feather='zap-off'></i>\n</div>\n</div>\n</div>\n<div class=\"list-item-body flex-grow-1\">\n<p class=\"media-heading\"><span class=\"fw-bolder\">Nenhuma conta SSH online!</span></p>\n<small class=\"notification-text\">Ningu\xc3\xa9m conectado no momento!</small>\n</div>\n</div>\n</li>\n";
}
echo "<li class=\"dropdown-menu-footer\">\n<div class=\"d-flex justify-content-between mb-0\">\n</div><a class=\"btn btn-primary w-100\" href=\"?page=ssh/online\">Ver Todos</a>\n</li>\n</ul>\n</li>\n";
if (${$GLOBALS["wycpzsganje"]} > 0) {
    $GLOBALS["jmliwrqrwvz"] = "totalnoti";
    echo "<li class=\"nav-item dropdown dropdown-notification me-25\"><a class=\"nav-link\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"ficon\" data-feather=\"bell\"></i><span class=\"badge rounded-pill bg-danger badge-up badge-glow\">";
    echo ${$GLOBALS["wycpzsganje"]};
    echo "</span></a>\n<ul class=\"dropdown-menu dropdown-menu-media dropdown-menu-end\">\n<li class=\"dropdown-menu-header\">\n<div class=\"dropdown-header d-flex\">\n<h4 class=\"notification-title mb-0 me-auto\">Notifica\xc3\xa7\xc3\xb5es</h4>\n<div class=\"badge rounded-pill badge-light-danger\">";
    echo $totalnoti;
    echo "</div>\n</div>\n</li>\n";
} else {
    $GLOBALS["fljepzkkxc"] = "totalnoti";
    echo "<li class=\"nav-item dropdown dropdown-notification me-25\"><a class=\"nav-link\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"ficon\" data-feather=\"bell-off\"></i><span class=\"badge rounded-pill bg-success badge-up badge-glow\">";
    echo ${$GLOBALS["wycpzsganje"]};
    echo "</span></a>\n<ul class=\"dropdown-menu dropdown-menu-media dropdown-menu-end\">\n<li class=\"dropdown-menu-header\">\n<div class=\"dropdown-header d-flex\">\n<h4 class=\"notification-title mb-0 me-auto\">Notifica\xc3\xa7\xc3\xb5es</h4>\n<div class=\"badge rounded-pill badge-light-success\">";
    echo $totalnoti;
    echo "</div>\n</div>\n</li>\n";
}
echo "<li class=\"scrollable-container media-list\"><a class=\"d-flex\" href=\"#\">\n";
if (${$GLOBALS["wycpzsganje"]} == 0) {
    echo "</h2>\n<div class=\"list-item d-flex align-items-start\">\n<div class=\"me-1\">\n<div class=\"avatar bg-light-success\">\n<div class=\"avatar-content\"><i class=\"avatar-icon\" data-feather=\"bell-off\"></i>\n</div>\n</div>\n</div>\n<div class=\"list-item-body flex-grow-1\">\n<p class=\"media-heading\"><span class=\"fw-bolder\">nenhuma notifica\xc3\xa7\xc3\xa3o!</span></p>\n<small class=\"notification-text\">Voc\xc3\xaa n\xc3\xa3o possui notifica\xc3\xa7\xc3\xb5es</small>\n</div>\n</div>\n";
} else {
    echo "</a><a class=\"d-flex\" href=\"#\">\n<div class=\"list-item d-flex align-items-start\">\n<div class=\"me-1\">\n<div class=\"avatar bg-light-danger\">\n<div class=\"avatar-content\"><i class=\"avatar-icon\" data-feather=\"bell\"></i>\n</div>\n</div>\n</div>\n";
    if (${$GLOBALS["wycpzsganje"]} == 1) {
        $GLOBALS["cyeciharkk"] = "totalnoti";
        echo "<div class=\"list-item-body flex-grow-1\">\n<p class=\"media-heading\"><span class=\"fw-bolder\">";
        echo $totalnoti;
        echo " notifica\xc3\xa7\xc3\xa3o!</span></p><small class=\"notification-text\">Voc\xc3\xaa possui novas notifica\xc3\xa7\xc3\xb5es!</small>\n</div>\n";
    } else {
        echo "<div class=\"list-item-body flex-grow-1\">\n<p class=\"media-heading\"><span class=\"fw-bolder\">";
        echo ${$GLOBALS["wycpzsganje"]};
        echo " notifica\xc3\xa7\xc3\xb5es!</span></p><small class=\"notification-text\">Voc\xc3\xaa possui novas notifica\xc3\xa7\xc3\xb5es!</small>\n</div>\n";
    }
    echo "</div>\n";
}
echo "</a>\n</li>\n<li class=\"dropdown-menu-footer\"><a class=\"btn btn-primary w-100\" href=\"?page=notificacoes/notificacoes&ler=all\">Ver Notifica\xc3\xa7\xc3\xb5es</a></li>\n</ul>\n</li>\n<li class=\"nav-item dropdown dropdown-user\"><a class=\"nav-link dropdown-toggle dropdown-user-link\" id=\"dropdown-user\" href=\"#\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">\n<div class=\"user-nav d-sm-flex d-none\"><span class=\"user-name fw-bolder text-";
echo ${$GLOBALS["lyurkv"]};
echo "\">";
echo ucfirst(${$necpwahyrr}["nome"]);
echo "</span><span class=\"user-status\">";
if (${$GLOBALS["dhkdfyjxuun"]}["subrevenda"] != "sim") {
    echo "Revendedor";
} else {
    echo "Sub-Revendedor";
}
echo "</span></div><span class=\"avatar\"><img class=\"round\" src=\"../app-assets/images/avatars/";
echo ${$GLOBALS["pbbebvlty"]};
echo "\" alt=\"avatar\" height=\"40\" width=\"40\"><span class=\"avatar-status-online\"></span></span>\n</a>\n<div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"dropdown-user\">\n<a class=\"dropdown-item\" href=\"?page=servidor/listar\"><i class=\"me-50\" data-feather=\"calendar\"></i>Resta: ";
if (${$GLOBALS["lvpuckkcwjm"]} > 1) {
    echo "<span class=\"badge badge-light-";
    $tutdhc = "dias_acesso";
    echo ${$GLOBALS["nlxsbimwd"]};
    echo " rounded-pill ms-auto me-1\">";
    echo $dias_acesso . " dias";
    echo "</span>";
} else {
    echo "<span class=\"badge badge-light-";
    echo ${$GLOBALS["nlxsbimwd"]};
    echo " rounded-pill ms-auto me-1\">";
    echo ${$GLOBALS["lvpuckkcwjm"]} . " dia";
    echo "</span>";
}
echo "</a>\n<a class=\"dropdown-item\" href=\"home.php?page=admin/dados\"><i class=\"me-50\" data-feather=\"user\"></i>Meus Dados</a>\n<a class=\"dropdown-item\" href=\"home.php?page=renovacao\"><i class=\"me-50\" data-feather=\"shopping-cart\"></i>Renovar</a>\n<a class=\"dropdown-item\" href=\"sair.php\"><i class=\"me-50\" data-feather=\"power\"></i>Sair</a>\n</div>\n</li>\n</ul>\n</div>\n</nav>\n<!-- BEGIN: Main Menu-->\n<div class=\"main-menu menu-fixed menu-light menu-accordion menu-shadow\" data-scroll-to-active=\"false\">\n<div class=\"navbar-header\">\n<ul class=\"nav navbar-nav flex-row\">\n<li class=\"nav-item me-auto\"><a class=\"navbar-brand\" href=\"home.php\"><span class=\"brand-logo\">\n<img class=\"round\" src=\"../app-assets/images/logo/logo.png\" alt=\"avatar\" height=\"35\" width=\"28\" />\n</span>\n<h2 class=\"brand-text\">";
echo ${$GLOBALS["jaxkdav"]}["site"];
echo "</h2>\n</a></li>\n<li class=\"nav-item nav-toggle\"><a class=\"nav-link modern-nav-toggle pe-0\" data-bs-toggle=\"collapse\"><i class=\"d-block d-xl-none text-primary toggle-icon font-medium-4\" data-feather=\"x\"></i><i class=\"d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary\" data-feather=\"disc\" data-ticon=\"disc\"></i></a></li>\n</ul>\n</div>\n<div class=\"shadow-bottom\"></div>\n<div class=\"main-menu-content\">\n<ul class=\"navigation navigation-main\" id=\"main-menu-navigation\" data-menu=\"menu-navigation\">\n<li class=\"active\"><a class=\"d-flex align-items-center\" href=\"home.php\"><i data-feather=\"home\"></i><span class=\"menu-title text-truncate\" data-i18n=\"Dashboards\">DASHBOARD</span></a></li>\n<li class=\" navigation-header\"><span>MENU</span>\n</li>\n<li class=\" nav-item\"><a class=\"d-flex align-items-center\" href=\"#\"><i class=\"text-success\" data-feather=\"shield\"></i><span class=\"menu-title text-truncate\" data-i18n=\"Area VPN\">CONTAS SSH</span><span class=\"badge badge-light-success rounded-pill ms-auto me-1\">";
echo ${$GLOBALS["bdbspnpqph"]};
echo "</span></a>\n<ul class=\"menu-content\">\n";
if (${$GLOBALS["dhkdfyjxuun"]}["tipo"] == "revenda" and ${$GLOBALS["utlbxtjcc"]} > 0) {
    echo "<li><a href=\"?page=ssh/adicionar\"><i data-feather=\"user-plus\"></i><span class=\"menu-item\" data-i18n=\"Criar VPN\">Criar Conta SSH</span></a></li>\n<li><a href=\"?page=ssh/add_teste\"><i data-feather=\"clock\"></i><span class=\"menu-item\" data-i18n=\"Criar Teste\">Criar Teste SSH</span></a></li>\n";
}
echo "<li><a href=\"?page=ssh/online\"><i data-feather=\"zap\"></i><span class=\"menu-item\" data-i18n=\"SSH Online\">SSH Online</span></a></li>\n<li><a href=\"?page=ssh/contas\"><i data-feather='list'></i><span class=\"menu-item\" data-i18n=\"Listar VPN\">Contas SSH</span></a></li>\n</ul>\n</li>\n";
if (${$GLOBALS["svriyhn"]}["tipo"] == "revenda") {
    $GLOBALS["ctjvqbfcdp"] = "usuario";
    if ($usuario["subrevenda"] != "sim") {
        echo "<li class=\" nav-item\"><a class=\"d-flex align-items-center\" href=\"#\"><i class=\"text-info\" data-feather=\"users\"></i><span class=\"menu-title text-truncate\" data-i18n=\"Area de Cliente\">REVENDAS</span><span class=\"badge badge-light-info rounded-pill ms-auto me-1\">";
        $GLOBALS["jcvrvr"] = "quantidade_sub_revenda";
        echo $quantidade_sub_revenda;
        echo "</span></a>\n<ul class=\"menu-content\">\n<li><a href=\"?page=usuario/adicionar\"><i data-feather='user-plus'></i><span class=\"menu-item\" data-i18n=\"Novo Usu\xc3\xa1rio\">Novo Revendedor</span></a>\n</li>\n<li><a href=\"?page=subrevenda/revendedores\"><i data-feather='users'></i><span class=\"menu-item\" data-i18n=\"Revendedores\">Revendedores</span></a>\n</li>\n<li><a href=\"?page=subrevenda/adicionar\"><i data-feather='user-check'></i><span class=\"menu-item\" data-i18n=\"Add. Sevidor\">Adicionar Servidor</span></a>\n</li>\n<li><a href=\"?page=subrevenda/alocados\"><i data-feather='edit'></i><span class=\"menu-item\" data-i18n=\"Alterar\">Alterar Revenda</span></a>\n</li>\n</ul>\n</li>\n";
    }
}
if (${$otyeiwwcgk}["tipo"] == "revenda" and ${$hqhpfokm} > 0) {
    echo "<li class=\" nav-item\"><a class=\"d-flex align-items-center\" href=\"#\"><i class=\"text-warning\" data-feather=\"server\"></i><span class=\"menu-title text-truncate\" data-i18n=\"Alterar\">SERVIDORES</span><span class=\"badge badge-light-warning rounded-pill ms-auto me-1\">";
    echo ${$GLOBALS["jkstpsuwwax"]};
    echo "</span></a>\n<ul class=\"menu-content\">\n<li><a href=\"?page=servidor/listar\"><i data-feather='hard-drive'></i><span class=\"menu-item\" data-i18n=\"Meus Sevidores\">Listar Sevidores</span></a>\n</li>\n<!--";
    if (${$GLOBALS["dhkdfyjxuun"]}["subrevenda"] != "sim") {
        echo "<li><a href=\"?page=servidor/meuservidor\"><i data-feather='hard-drive'></i><span class=\"menu-item\" data-i18n=\"Meus Sevidores\">Listar Sevidores</span></a>\n</li>\n";
    }
    echo "-->\n</ul>\n</li>\n";
}
if (${$ynitrzn}["id_mestre"] == 0) {
    $GLOBALS["rsqtfhcou"] = "all_chamados";
    echo "<li class=\" nav-item\"><a class=\"d-flex align-items-center\" href=\"#\"><i class=\"text-danger\" data-feather='life-buoy'></i></i><span class=\"menu-title text-truncate\" data-i18n=\"Chamados\">TICKETS</span><span class=\"badge badge-light-danger rounded-pill ms-auto me-1\">";
    echo $all_chamados;
    echo "</span></a>\n<ul class=\"menu-content\">\n<li><a href=\"?page=chamados/abrir\"><i data-feather='plus-square'></i><span class=\"menu-item\" data-i18n=\"Abertos\">Abrir um Ticket</span></a>\n</li>\n<li><a href=\"?page=chamados/abertas\"><i data-feather='bell'></i><span class=\"menu-item\" data-i18n=\"Abertos\">Abertos</span></a>\n</li>\n<li><a href=\"?page=chamados/respondidos\"><i data-feather='bell-off'></i><span class=\"menu-item\" data-i18n=\"Respondidos\">Respondidas</span></a>\n</li>\n<li><a href=\"?page=chamados/encerrados\"><i data-feather='slash'></i><span class=\"menu-item\" data-i18n=\"Encerrados\">Encerradas</span></a>\n</li>\n<li><a class=\"d-flex align-items-center\" href=\"#\"><i data-feather='user-minus'></i><span class=\"menu-item text-truncate\" data-i18n=\"Revendas\">Ticket Revendas</span></a>\n<ul class=\"menu-content\">\n<li><a href=\"?page=chamadosclientes/abertas\"><i data-feather='bell'></i><span class=\"menu-item\" data-i18n=\"Abertos\">Abertos</span></a>\n</li>\n<li><a href=\"?page=chamadosclientes/respondidos\"><i data-feather='bell-off'></i><span class=\"menu-item\" data-i18n=\"Respondidos\">Respondidos</span></a>\n</li>\n<li><a href=\"?page=chamadosclientes/encerrados\"><i data-feather='slash'></i><span class=\"menu-item\" data-i18n=\"Encerrados\">Encerrados</span></a>\n</li>\n</ul>\n</li>\n</ul>\n</li>\n";
} else {
    $GLOBALS["robjtqf"] = "all_chamados";
    echo "<li class=\" nav-item\"><a class=\"d-flex align-items-center\" href=\"#\"><i class=\"text-info\" data-feather='life-buoy'></i></i><span class=\"menu-title text-truncate\" data-i18n=\"Chamados\">TICKETS</span><span class=\"badge badge-light-info rounded-pill ms-auto me-1\">";
    echo $all_chamados;
    echo "</span></a>\n<ul class=\"menu-content\">\n<li><a href=\"?page=chamados/abrir\"><i data-feather='plus-square'></i><span class=\"menu-item\" data-i18n=\"Abertos\">Abrir um Ticket</span></a>\n</li>\n<li><a href=\"?page=chamados/abertas\"><i data-feather='bell'></i><span class=\"menu-item\" data-i18n=\"Abertos\">Abertos</span></a>\n</li>\n<li><a href=\"?page=chamados/respondidos\"><i data-feather='bell-off'></i><span class=\"menu-item\" data-i18n=\"Respondidos\">Respondidos</span></a>\n</li>\n<li><a href=\"?page=chamados/encerrados\"><i data-feather='slash'></i><span class=\"menu-item\" data-i18n=\"Encerradas\">Encerradas</span></a>\n</li>\n</ul>\n</li>\n";
}
echo "<li class=\" nav-item\"><a class=\"d-flex align-items-center\" href=\"#\"><i class=\"text-primary\" data-feather=\"settings\"></i><span class=\"menu-title text-truncate\" data-i18n=\"Configura\xc3\xa7\xc3\xb5es\">CONFIGURA\xc3\x87\xc3\x95ES</span></a>\n<ul class=\"menu-content\">\n<li><a href=\"?page=admin/dados\"><i data-feather='edit'></i><span class=\"menu-item\" data-i18n=\"Minhas Informa\xc3\xa7\xc3\xb5es\">Meus Dados</span></a>\n</li>\n<li><a href=\"?page=downloads/downloads\"><i data-feather='file'></i><span class=\"menu-item\" data-i18n=\"Arquivos\">Arquivos</span></a>\n</li>\n";
if (${$GLOBALS["rclvmxvjjo"]}["tipo"] == "revenda") {
    echo "<li><a href=\"?page=email/enviaremail\"><i data-feather='mail'></i><span class=\"menu-item\" data-i18n=\"Email\">Email</span></a>\n</li>\n";
}
echo "</ul>\n</li>\n<li class=\" nav-item\"><a href=\"sair.php\"><i class=\"text-danger\" data-feather='log-out'></i><span class=\"menu-title\" data-i18n=\"Raise Support\">SAIR</span></a>\n</li>\n</ul>\n</div>\n</div>\n<!-- END: Main Menu-->\n<!-- BEGIN: Content-->\n<div class=\"app-content content\">\n<div class=\"content-overlay\"></div>\n<div class=\"header-navbar-shadow\"></div>\n<div class=\"content-wrapper container-xxl p-0\">\n<div class=\"content-header row\">\n</div>\n<div class=\"content-body\">\n<!-- Dashboard Analytics Start -->\n<section id=\"dashboard-analytics\">\n<div class=\"row\">\n<div class=\"col-sm-12\">\n</div>\n</div>\n</section>\n<!-- Dashboard Analytics end -->\n";
if (isset($_GET["page"])) {
    $dkgynwujje = "page";
    $GLOBALS["uejlvnxynraw"] = "page";
    $page = $_GET["page"];
    if (${$GLOBALS["wnqiek"]} and file_exists("pages/" . $page . ".php")) {
        include "pages/" . ${$GLOBALS["wnqiek"]} . ".php";
    } else {
        include "./pages/inicial.php";
    }
} else {
    include "./pages/inicial.php";
}
echo "</div>\n</div>\n</div>\n<!-- END: Content-->\n<div class=\"sidenav-overlay\"></div>\n<div class=\"drag-target\"></div>\n<!-- BEGIN: Footer-->\n<footer class=\"footer footer-static footer-light mt-5\">\n<div class=\"text-center\">\n<p class=\"clearfix blue-grey lighten-2 mb-0\">\n<span class=\"center\">\nVers\xc3\xa3o: ";
echo ${$GLOBALS["nhdsiiw"]};
echo "<br>\n<a class=\"text-bold-800 \" href=\"#\" target=\"_blank\">";
echo ${$GLOBALS["jaxkdav"]}["site"];
echo "&copy; <script>\ndocument.write(new Date().getFullYear())\n</script>.</a><br>Todos os direitos reservados.<br>Seu IP: ";
echo pega_ip();
echo "<br>ISP: ";
echo ${$ffklvoqk};
echo "</span>\n</p>\n</div>\n</footer>\n<!-- END: Footer-->\n<script src=\"../app-assets/vendors/js/vendors.min.js\"></script>\n<!-- BEGIN Vendor JS-->\n<!-- BEGIN: Page Vendor JS-->\n<script src=\"../app-assets/vendors/js/charts/apexcharts.min.js\"></script>\n<script src=\"../app-assets/vendors/js/extensions/moment.min.js\"></script>\n<script src=\"../app-assets/vendors/js/tables/datatable/jszip.min.js\"></script>\n<script src=\"../app-assets/vendors/js/tables/datatable/pdfmake.min.js\"></script>\n<script src=\"../app-assets/vendors/js/tables/datatable/vfs_fonts.js\"></script>\n<script src=\"../app-assets/vendors/js/tables/datatable/buttons.html5.min.js\"></script>\n<script src=\"../app-assets/vendors/js/tables/datatable/buttons.print.min.js\"></script>\n<script src=\"../app-assets/vendors/js/tables/datatable/dataTables.rowGroup.min.js\"></script>\n<script src=\"../app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js\"></script>\n<script src=\"../app-assets/vendors/js/tables/datatable/datatables.buttons.min.js\"></script>\n<script src=\"../app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js\"></script>\n<script src=\"../app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js\"></script>\n<script src=\"../app-assets/vendors/js/tables/datatable/responsive.bootstrap5.js\"></script>\n<script src=\"../app-assets/js/scripts/tables/table-datatables-basic.js\"></script>\n<!-- END: Page Vendor JS-->\n<!-- BEGIN: Theme JS-->\n<script src=\"../app-assets/js/core/app-menu.js\"></script>\n<script src=\"../app-assets/js/core/app.js\"></script>\n<!-- END: Theme JS-->\n<!-- BEGIN: Page JS-->\n<script src=\"../app-assets/js/scripts/pages/dashboard-analytics.js\"></script>\n<script src=\"../app-assets/js/scripts/pages/app-invoice-list.js\"></script>\n<script src=\"../app-assets/vendors/js/forms/select/select2.full.min.js\"></script>\n<script src=\"../app-assets/js/scripts/forms/form-select2.js\"></script>\n<script>\n\$(window).on('load', function() {\nif (feather) {\nfeather.replace({\nwidth: 14,\nheight: 14\n});\n}\n});\n\$(document).ready(function() {\n\$('#example').DataTable({\n\"language\": {\n\"lengthMenu\": \"_MENU_ Registros por p\xc3\xa1gina\",\n\"zeroRecords\": \"Nada encontrado\",\n\"info\": \"P\xc3\xa1gina _PAGE_ de _PAGES_\",\n\"infoEmpty\": \"N\xc3\xa3o h\xc3\xa1 registros\",\n\"infoFiltered\": \"(filtrando em _MAX_ registros)\",\n\"loadingRecords\": \"Aguarde...\",\n\"processing\": \"Processando...\",\n\"search\": \"Pesquisar:\",\n\"zeroRecords\": \"Nenhum registro encontrado\",\n\"paginate\": {\n\"first\": \"Primeiro\",\n\"last\": \"\xc3\xbaltimo\",\n\"next\": \"Pr\xc3\xb3ximo\",\n\"previous\": \"Anterior\"\n}\n},\n\"scrollX\": true,\norder: [\n[3, 'desc'],\n[0, 'asc']\n]\n});\n});\n</script>\n<!-- END: Page JS-->\n</body>\n<!-- END: Body-->\n</html>\n";
