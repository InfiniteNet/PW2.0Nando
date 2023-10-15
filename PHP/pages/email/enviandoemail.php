<?php

$GLOBALS["wqjupsy"] = "enviado";
$GLOBALS["zrxodauyw"] = "destinatario";
$GLOBALS["lwwdbxwsruho"] = "smtp";
$GLOBALS["pdgedupqzhr"] = "mail";
$GLOBALS["hckqgdybwd"] = "sucesso";
$GLOBALS["iommihbiont"] = "destino";
$GLOBALS["rferfhf"] = "arquivo";
$GLOBALS["vfvvreyc"] = "empresanome";
$GLOBALS["axfmoixj"] = "de";
$GLOBALS["jxycuinsx"] = "portassh_corpo";
$GLOBALS["xynfbhi"] = "tip";
$GLOBALS["levxmmgo"] = "empresaemail";
$GLOBALS["dxovxja"] = "msg2";
$GLOBALS["isixyef"] = "ass";
$GLOBALS["sgwknzg"] = "hora_envio";
$GLOBALS["djwojwhbel"] = "data_envio";
$GLOBALS["jdrkinl"] = "link_corpo";
$GLOBALS["mihvcgqww"] = "login_corpo";
$GLOBALS["riisgjpygzu"] = "modelo";
$GLOBALS["pqrlxlggam"] = "conta";
$GLOBALS["vkwvtwrzm"] = "buscanosm";
$GLOBALS["voxyljfogub"] = "email";
$GLOBALS["ytqvtvidfvk"] = "server";
$GLOBALS["buaxztjqn"] = "emailservidor";
$GLOBALS["njogcrqr"] = "msg";
$GLOBALS["bcdyafspxi"] = "assunto";
$GLOBALS["olvdcx"] = "link";
$GLOBALS["xzuxwsblixm"] = "login";
$GLOBALS["ksqvtomb"] = "usuario";
require_once "../../pages/system/seguranca.php";
require_once "../../pages/system/config.php";
require_once "../../pages/system/funcoes.php";
require_once "../../pages/system/classe.ssh.php";
require_once "../../pages/system/funcoes.system.php";
protegePagina("user");
if ($usuario["ativo"] == 2) {
    echo "<script type=\"text/javascript\">";
    echo "window.location=\"home.php?page=suspenso\";";
    echo "</script>";
    exit;
}
if (isset($_POST["email"])) {
    $GLOBALS["wkiqzsfer"] = "senha";
    $xjjbhunz = "email";
    $GLOBALS["ipkvupwrbj"] = "server";
    $tmeeoecqz = "contatipo";
    ${$GLOBALS["xzuxwsblixm"]} = sql_injector($_POST["login"]);
    ${$GLOBALS["wkiqzsfer"]} = sql_injector($_POST["senha"]);
    $biwvnihe = "validade";
    ${$GLOBALS["olvdcx"]} = sql_injector($_POST["link"]);
    $ecebmjvrora = "server";
    ${$GLOBALS["bcdyafspxi"]} = sql_injector($_POST["assunto"]);
    $GLOBALS["uzyyrait"] = "buscanosm";
    ${$GLOBALS["njogcrqr"]} = sql_injector($_POST["msg"]);
    $ozjgubqv = "modelo";
    $GLOBALS["ocnuhy"] = "conta";
    ${$biwvnihe} = sql_injector($_POST["validade"]);
    $gnmqzf = "server";
    ${$tmeeoecqz} = sql_injector($_POST["tipoconta"]);
    $fjzlbsbojou = "smtp";
    $ktnrego = "destinatario";
    ${$ozjgubqv} = sql_injector($_POST["tipomodelo"]);
    $snblirenv = "smtp";
    $GLOBALS["kudftwd"] = "email";
    $GLOBALS["uhvmjkus"] = "server";
    ${$GLOBALS["buaxztjqn"]} = $_POST["servidoremail"];
    switch (${$GLOBALS["buaxztjqn"]}) {
        case 1:
            ${$GLOBALS["uhvmjkus"]} = "decido";
            break;
        case 2:
            ${$GLOBALS["ytqvtvidfvk"]} = "@gmail.com";
            break;
        case 3:
            ${$GLOBALS["ipkvupwrbj"]} = "@outlook.com";
            break;
        case 4:
            ${$ecebmjvrora} = "@hotmail.com";
            break;
        default:
            ${$gnmqzf} = "@yahoo.com.br";
            break;
    }
    ${$GLOBALS["kudftwd"]} = sql_injector($_POST["email"]);
    if (${$GLOBALS["ytqvtvidfvk"]} == "decido") {
        ${$GLOBALS["voxyljfogub"]} = ${$GLOBALS["voxyljfogub"]};
    } else {
        $GLOBALS["vjmjeuoxmcv"] = "server";
        $GLOBALS["znztsxcnqo"] = "email";
        $email = ${$GLOBALS["voxyljfogub"]} . $server;
    }
    ${$GLOBALS["vkwvtwrzm"]} = "SELECT * FROM smtp_usuarios WHERE usuario_id='" . $_SESSION["usuarioID"] . "'";
    $GLOBALS["ijltcm"] = "assunto";
    $tuostbb = "link";
    ${$GLOBALS["vkwvtwrzm"]} = $conn->prepare(${$GLOBALS["uzyyrait"]});
    $buscanosm->execute();
    $hbdenlxyvoj = "modelo";
    $pwvimmrm = "senha";
    $spcytc = "empresanome";
    ${$GLOBALS["pqrlxlggam"]} = $buscanosm->rowCount();
    if (${$GLOBALS["ocnuhy"]} <= 0) {
        echo myalertuser("error", "configure o SMTP!", "../../home.php?page=email/enviaremail");
        exit;
    }
    ${$snblirenv} = $buscanosm->fetch();
    $GLOBALS["sdejhkln"] = "assunto";
    $GLOBALS["cchbxiqbtjw"] = "smtp";
    $nkwkeijlng = "corpo";
    if (filter_var(${$GLOBALS["voxyljfogub"]}, FILTER_VALIDATE_EMAIL)) {
        $yllvjven = "email";
        $GLOBALS["yossbrenkvl"] = "email";
        $email = $email;
    } else {
        echo myalertuser("error", "Email invalido !", "../../home.php?page=email/enviaremail");
        exit;
    }
    $GLOBALS["jsxrvft"] = "email";
    $GLOBALS["wfmfbkk"] = "empresanome";
    if (${$GLOBALS["riisgjpygzu"]} == 1) {
        $otbdoij = "assunto";
        $utrshgsornr = "msg";
        if ($assunto == "") {
            echo myalertuser("error", "Informe o assunto !", "../../home.php?page=email/enviaremail");
            exit;
        }
        if (${$utrshgsornr} == "") {
            echo myalertuser("error", "Informe a mensagem !", "../../home.php?page=email/enviaremail");
            exit;
        }
    } elseif (${$hbdenlxyvoj} == 2) {
        $iwenzl = "senha";
        $khvohpufax = "validade";
        $qokjqpknw = "login";
        if ($login == "") {
            echo myalertuser("error", "Informe um login !", "../../home.php?page=email/enviaremail");
            exit;
        }
        if (${$iwenzl} == "") {
            echo myalertuser("error", "Informe uma senha !", "../../home.php?page=email/enviaremail");
            exit;
        }
        if (${$GLOBALS["olvdcx"]} == "") {
            echo myalertuser("error", "Informe um IP !", "../../home.php?page=email/enviaremail");
            exit;
        }
        if (${$khvohpufax} == "") {
            echo myalertuser("error", "Informe a validade !", "../../home.php?page=email/enviaremail");
            exit;
        }
    }
    if (${$pwvimmrm} != "") {
        $icwecesumc = "senha_corpo";
        $senha_corpo = "<b>Senha</b>: {$senha}<br />";
    } else {
        $pxlckrqqkoog = "senha_corpo";
        $senha_corpo = "";
    }
    if (${$GLOBALS["xzuxwsblixm"]} != "") {
        $csllxcpkbr = "login_corpo";
        $login_corpo = "<b>Login</b>: {$login} <br />";
    } else {
        ${$GLOBALS["mihvcgqww"]} = "";
    }
    if (${$tuostbb} != "") {
        ${$GLOBALS["jdrkinl"]} = "<b>Link de acesso</b>: <a href='{$link}' target='_blank'>{$link}</a><br /><br />";
    } else {
        $GLOBALS["ugdkyp"] = "link_corpo";
        $link_corpo = "";
    }
    ${$GLOBALS["djwojwhbel"]} = date("d/m/Y");
    $GLOBALS["dljyusekvxd"] = "enviado";
    $GLOBALS["knhxtnx"] = "smtp";
    ${$GLOBALS["sgwknzg"]} = date("H:i:s");
    ${$GLOBALS["isixyef"]} = ${$GLOBALS["bcdyafspxi"]};
    $GLOBALS["ytuhsfngve"] = "smtp";
    if (${$GLOBALS["njogcrqr"]} != "") {
        ${$GLOBALS["dxovxja"]} = "<b>Mensagem</b>:<br />{$mensagem}";
    } else {
        ${$GLOBALS["njogcrqr"]} = "";
    }
    if (${$GLOBALS["sdejhkln"]} == "") {
        if (${$GLOBALS["riisgjpygzu"]} == 1) {
            ${$GLOBALS["bcdyafspxi"]} = "Suporte TI";
        } elseif (${$GLOBALS["riisgjpygzu"]} == 2) {
            $GLOBALS["neephjb"] = "assunto";
            $assunto = "Compra Efetuada !";
        }
    }
    ${$spcytc} = ${$GLOBALS["cchbxiqbtjw"]}["empresa"];
    ${$GLOBALS["levxmmgo"]} = ${$GLOBALS["knhxtnx"]}["email"];
    $xiyldrxu = "assunto";
    if (${$GLOBALS["riisgjpygzu"]} == 1) {
        $gsbvrfgqke = "arquivo";
        $arquivo = "\n\n\t<br /><b>Suporte Tecnico</b> - <b><i>{$empresanome}</i></b><br />\n\t<b>Informa\xc3\xa7\xc3\xb5es Tecnicas Detalhadas</b>:\n\t<br /><br />\n    <b>Assunto</b>: {$ass} <br />\n    {$login_corpo}\n    {$senha_corpo}\n    {$link_corpo}\n\n    <b>Mensagem</b>:<br />\n    {$msg}\n    <hr><br />\n    Este e-mail foi enviado em <b>{$data_envio}</b> &agrave;s <b>{$hora_envio}\n\n\n\t";
    } elseif (${$GLOBALS["riisgjpygzu"]} == 2) {
        $GLOBALS["bitrqmmhz"] = "contatipo";
        $mselpikyxfhy = "tip";
        switch ($contatipo) {
            case 1:
                ${$mselpikyxfhy} = "sshconta";
                break;
            case 2:
                ${$GLOBALS["xynfbhi"]} = "sshacesso";
                break;
            default:
                ${$GLOBALS["xynfbhi"]} = "sshconta";
                break;
        }
        $GLOBALS["ogsvfb"] = "arquivo";
        if (${$GLOBALS["xynfbhi"]} == "sshconta") {
            $itcdoekt = "portas_corpo";
            ${$GLOBALS["jdrkinl"]} = "<b>IP para conex\xc3\xa3o</b>: <a href='{$link}' target='_blank'>{$link}</a><br /><br />";
            ${$itcdoekt} = "<b>Portas Proxy</b>: 80,8080,8799,3128 <br />";
            ${$GLOBALS["jxycuinsx"]} = "<b>Portas SSH</b>: 22,443 <br />";
            if (${$GLOBALS["bcdyafspxi"]} != "") {
                $dbijryfs = "ass";
                $ass = ${$GLOBALS["bcdyafspxi"]};
            } else {
                ${$GLOBALS["isixyef"]} = "Entrega de conta <b>SSH</b>";
            }
        } elseif (${$GLOBALS["xynfbhi"]} = "sshacesso") {
            $GLOBALS["ertxtlmvfjs"] = "link_corpo";
            $tcfbltevm = "todascontas";
            $link_corpo = ${$GLOBALS["jdrkinl"]};
            if (${$GLOBALS["bcdyafspxi"]} != "") {
                $hvhqbovro = "ass";
                $ass = ${$GLOBALS["bcdyafspxi"]};
            } else {
                $GLOBALS["hekebwcikik"] = "ass";
                $ass = "Acesso Painel V4.1";
            }
            ${$tcfbltevm} = "<b>4.</b>Todas suas contas <b>SSH</b> encontra-se dentro deste painel automat\xc3\xadco.";
        }
        ${$GLOBALS["ogsvfb"]} = "\n\t<br /><b>Obrigado pela compra.</b> - <b><i>{$empresanome}</i></b><br />\n\t<b>Seus Dados</b>:\n\t<br /><br />\n    <b>Assunto</b>: {$ass} <br />\n    {$login_corpo}\n    {$senha_corpo}\n    <b>Validade</b>: {$validade} Dias<br />\n    {$portas_corpo}\n    {$portassh_corpo}\n    {$link_corpo}\n    {$msg2}\n    <br /><br />\n    <b>1.</b>Duvidas e Suporte Entre em Contato com <a href='{$empresaemail}'>{$empresaemail}.</a><br />\n    <b>2.</b>Temos um Grupo Especial para Revendedores, caso seja um deles solicite o link atrav\xc3\xa9s do contato.<br />\n    <b>3.</b>Recomendamos Arquivar esse email para n\xc3\xa3o perder os dados da sua conta.<br />\n    {$todascontas}\n    <hr><br />\n    Este e-mail foi enviado em <b>{$data_envio}</b> &agrave;s <b>{$hora_envio}\n\n\n\t";
    } else {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Modelo n\xc3\xa3o selecionado!\");";
        echo "window.location=\"../../home.php?page=email/enviaremail\";";
        echo "</script>";
        exit;
    }
    ${$GLOBALS["axfmoixj"]} = explode("@", ${$GLOBALS["jsxrvft"]});
    $mvqlcpgdqco = "smtp";
    ${$xiyldrxu} = "[" . strtoupper(${$GLOBALS["ijltcm"]}) . "]" . "[" . strtoupper(${$GLOBALS["vfvvreyc"]}) . "]";
    ${$nkwkeijlng} = ${$GLOBALS["rferfhf"]};
    ${$GLOBALS["iommihbiont"]} = ${$xjjbhunz};
    ${$ktnrego} = strtoupper(${$GLOBALS["axfmoixj"]}[0]);
    ${$GLOBALS["hckqgdybwd"]} = "Email enviado, o seu cliente receber\xc3\xa1 na caixa de entrada.";
    require_once "../phpmailer/class.phpmailer.php";
    require_once "../phpmailer/class.smtp.php";
    $avxclhwzjdxo = "assunto";
    $uymqqt = "corpo";
    $jjrceamu = "destino";
    ${$GLOBALS["pdgedupqzhr"]} = new PHPMailer();
    $GLOBALS["dqowwoi"] = "smtp";
    $mail->IsSMTP();
    $mail->SMTPSecure = ${$GLOBALS["ytuhsfngve"]}["ssl_secure"];
    $mail->Host = $smtp["servidor"];
    $mail->Port = ${$mvqlcpgdqco}["porta"];
    $mail->SMTPDebug = 0;
    $mail->SMTPAuth = true;
    $mail->Username = ${$GLOBALS["lwwdbxwsruho"]}["email"];
    $mail->Password = ${$GLOBALS["lwwdbxwsruho"]}["senha"];
    $mail->From = ${$fjzlbsbojou}["email"];
    $mail->FromName = strtoupper(${$GLOBALS["wfmfbkk"]});
    $mail->AddAddress(${$jjrceamu}, ${$GLOBALS["zrxodauyw"]});
    $mail->IsHTML(true);
    $mail->CharSet = "UTF-8";
    $mail->Subject = ${$avxclhwzjdxo};
    $mail->Body = "'" . ${$uymqqt} . "'";
    ${$GLOBALS["wqjupsy"]} = $mail->Send();
    $mail->ClearAllRecipients();
    $mail->ClearAttachments();
    if (${$GLOBALS["dljyusekvxd"]}) {
        $GLOBALS["xfoccvn"] = "sucesso";
        echo myalertuser("success", $sucesso, "../../home.php?page=email/enviaremail");
        exit;
    } else {
        echo myalertuser("error", $mail->ErrorInfo, "../../home.php?page=email/enviaremail");
    }
}
