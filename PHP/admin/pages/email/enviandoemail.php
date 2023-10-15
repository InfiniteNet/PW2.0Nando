<?php

$GLOBALS["itdvidvkblw"] = "enviado";
$GLOBALS["iptbxedhoj"] = "smtp";
$GLOBALS["scwgjvhhe"] = "mail";
$GLOBALS["jfnkfprog"] = "destinatario";
$GLOBALS["eiiyckjcuf"] = "destino";
$GLOBALS["leebylj"] = "corpo";
$GLOBALS["xgjsfqf"] = "de";
$GLOBALS["wapgoqmo"] = "arquivo";
$GLOBALS["oikgroaovtkf"] = "ass";
$GLOBALS["qqhgcbxdpfj"] = "tip";
$GLOBALS["rnocuwi"] = "contatipo";
$GLOBALS["qwhkktycmx"] = "emailadm";
$GLOBALS["ggjcxq"] = "msg2";
$GLOBALS["uocuav"] = "hora_envio";
$GLOBALS["twxogzsq"] = "link_corpo";
$GLOBALS["sibvmpm"] = "senha";
$GLOBALS["qdrstyciu"] = "link";
$GLOBALS["urdsvmn"] = "login";
$GLOBALS["mvwmeir"] = "modelo";
$GLOBALS["gqixayuliecp"] = "msg";
$GLOBALS["misgoyewno"] = "buscanosm";
$GLOBALS["sgjycngg"] = "email";
$GLOBALS["nthxnvqdzmk"] = "server";
$GLOBALS["tjvxdpon"] = "emailservidor";
$GLOBALS["ijvwahghv"] = "validade";
$GLOBALS["npkfvvjlicm"] = "assunto";
require_once "../../../pages/system/seguranca.php";
require_once "../../../pages/system/config.php";
require_once "../../../pages/system/funcoes.system.php";
protegePagina("donoadmin");
if (isset($_POST["email"])) {
    $xnpnnkxbru = "server";
    $psmdmygqyi = "msg";
    $GLOBALS["ezhrivvid"] = "senha";
    $giisdt = "emailservidor";
    $GLOBALS["crpqluhv"] = "login";
    $wsybkblq = "link";
    $txswhxcdmri = "smtp";
    $login = sql_injector($_POST["login"]);
    $cbtknpdpjww = "smtp";
    $ussfbt = "conta";
    $hqkuljb = "buscanosm";
    $GLOBALS["rlcobk"] = "email";
    $GLOBALS["oivcqye"] = "email";
    $senha = sql_injector($_POST["senha"]);
    $link = sql_injector($_POST["link"]);
    $GLOBALS["mkeaafbepn"] = "modelo";
    $assunto = sql_injector($_POST["assunto"]);
    $GLOBALS["wkilolcnny"] = "modelo";
    $locrwilcq = "modelo";
    $zbajewm = "contatipo";
    $msg = sql_injector($_POST["msg"]);
    $GLOBALS["aievxigslnj"] = "server";
    $validade = sql_injector($_POST["validade"]);
    $GLOBALS["mdnhefbrgmu"] = "ass";
    $GLOBALS["vuavznpiv"] = "email";
    $udndck = "login";
    $GLOBALS["ninxghajxhqn"] = "assunto";
    $contatipo = sql_injector($_POST["tipoconta"]);
    $mddllr = "smtp";
    $modelo = sql_injector($_POST["tipomodelo"]);
    $emailservidor = $_POST["servidoremail"];
    switch ($emailservidor) {
        case 1:
            ${$GLOBALS["nthxnvqdzmk"]} = "decido";
            break;
        case 2:
            ${$GLOBALS["aievxigslnj"]} = "@gmail.com";
            break;
        case 3:
            ${$xnpnnkxbru} = "@outlook.com";
            break;
        case 4:
            ${$GLOBALS["nthxnvqdzmk"]} = "@hotmail.com";
            break;
        default:
            ${$GLOBALS["nthxnvqdzmk"]} = "@yahoo.com.br";
            break;
    }
    ${$GLOBALS["vuavznpiv"]} = sql_injector($_POST["email"]);
    $tekxpdsff = "validade";
    $uoxseuf = "arquivo";
    if (${$GLOBALS["nthxnvqdzmk"]} == "decido") {
        $frvbashrlmf = "email";
        $email = ${$GLOBALS["sgjycngg"]};
    } else {
        $leaohsdj = "email";
        $GLOBALS["quvwfplxshoy"] = "server";
        ${$GLOBALS["sgjycngg"]} = $email . $server;
    }
    ${$GLOBALS["misgoyewno"]} = "SELECT * FROM smtp WHERE usuario_id='" . $_SESSION["usuarioID"] . "'";
    $GLOBALS["wmnqdylb"] = "data_envio";
    $sxovucgkgr = "conta";
    ${$hqkuljb} = $conn->prepare(${$GLOBALS["misgoyewno"]});
    $agurxtuufci = "assunto";
    $buscanosm->execute();
    ${$sxovucgkgr} = $buscanosm->rowCount();
    $ztbozgfm = "sucesso";
    if (${$ussfbt} <= 0) {
        echo myalertuser("error", "Voc\xc3\xaa n\xc3\xa3o configurou o servidor SMTP!", "../../home.php?page=email/enviaremail");
        exit;
    }
    ${$cbtknpdpjww} = $buscanosm->fetch();
    if (filter_var(${$GLOBALS["rlcobk"]}, FILTER_VALIDATE_EMAIL)) {
        $GLOBALS["bqhmasbbfd"] = "email";
        $email = ${$GLOBALS["sgjycngg"]};
    } else {
        echo myalertuser("error", "Email invalido", "../../home.php?page=email/enviaremail");
        exit;
    }
    $GLOBALS["unbvnjjyeccu"] = "smtp";
    if (${$GLOBALS["mkeaafbepn"]} == 1) {
        $GLOBALS["chlreugm"] = "assunto";
        if ($assunto == "") {
            echo myalertuser("error", "Informe o assunto", "../../home.php?page=email/enviaremail");
            exit;
        }
        if (${$GLOBALS["gqixayuliecp"]} == "") {
            echo myalertuser("error", "Informe a mensagem !", "../../home.php?page=email/enviaremail");
            exit;
        }
    } elseif (${$GLOBALS["mvwmeir"]} == 2) {
        if (${$GLOBALS["urdsvmn"]} == "") {
            echo myalertuser("error", "Informe o login!", "../../home.php?page=email/enviaremail");
            exit;
        }
        $hplmdbuyy = "senha";
        if ($senha == "") {
            echo myalertuser("error", "Informe a senha !", "../../home.php?page=email/enviaremail");
            exit;
        }
        if (${$GLOBALS["qdrstyciu"]} == "") {
            echo myalertuser("error", "Informe o IP !", "../../home.php?page=email/enviaremail");
            exit;
        }
        if (${$GLOBALS["ijvwahghv"]} == "") {
            echo myalertuser("error", "Informe a Validade !", "../../home.php?page=email/enviaremail");
            exit;
        }
    }
    $GLOBALS["xpsehybt"] = "smtp";
    if (${$GLOBALS["sibvmpm"]} != "") {
        $ghjfhjnyvp = "senha_corpo";
        $senha_corpo = "<b>Senha</b>: {$senha}<br />";
    } else {
        $GLOBALS["dhygmwdmigw"] = "senha_corpo";
        $senha_corpo = "";
    }
    $GLOBALS["cymppyshhbd"] = "modelo";
    $GLOBALS["imcvpqdjlu"] = "assunto";
    if (${$udndck} != "") {
        $GLOBALS["pjsfmwgp"] = "login_corpo";
        $login_corpo = "<b>Login</b>: {$login} <br />";
    } else {
        $GLOBALS["cdyymjs"] = "login_corpo";
        $login_corpo = "";
    }
    $GLOBALS["xbxogrscvj"] = "msg";
    if (${$GLOBALS["qdrstyciu"]} != "") {
        $beqhfdtp = "link_corpo";
        $link_corpo = "<b>Link de acesso</b>: <a href='{$link}' target='_blank'>{$link}</a><br /><br />";
    } else {
        ${$GLOBALS["twxogzsq"]} = "";
    }
    ${$GLOBALS["wmnqdylb"]} = date("d/m/Y");
    ${$GLOBALS["uocuav"]} = date("H:i:s");
    ${$GLOBALS["mdnhefbrgmu"]} = ${$GLOBALS["imcvpqdjlu"]};
    if (${$GLOBALS["xbxogrscvj"]} != "") {
        ${$GLOBALS["ggjcxq"]} = "<b>Mensagem</b>:<br />{$mensagem}";
    } else {
        $ufutdes = "msg";
        $msg = "";
    }
    if (${$GLOBALS["npkfvvjlicm"]} == "") {
        $bsrsvptnq = "modelo";
        if (${$GLOBALS["mvwmeir"]} == 1) {
            $qpfrnvsjoo = "assunto";
            $assunto = "Suporte TI";
        } elseif ($modelo == 2) {
            $hvlmkkgqe = "assunto";
            $assunto = "Compra Efetuada";
        }
    }
    ${$GLOBALS["qwhkktycmx"]} = ${$GLOBALS["xpsehybt"]}["email"];
    if (${$tekxpdsff} == "") {
        $GLOBALS["qgznrtbtps"] = "validadetecnico";
        $validadetecnico = "";
    } else {
        $xsbjsqqgtv = "validadetecnico";
        $validadetecnico = "<b>Validade</b>: {$validade} Dias<br />";
    }
    if (${$GLOBALS["cymppyshhbd"]} == 1) {
        $GLOBALS["jhdtsutlkv"] = "arquivo";
        $arquivo = "\n\n\t<br /><b>Suporte Tecnico</b><br />\n\t<b>Informa\xc3\xa7\xc3\xb5es Tecnicas Detalhadas</b>:\n\t<br /><br />\n    <b>Assunto</b>: {$ass} <br />\n    {$login_corpo}\n    {$senha_corpo}\n    {$validadetecnico}\n    {$link_corpo}\n\n\n    <b>Mensagem</b>:<br />\n    {$msg}\n    <hr><br />\n    Este e-mail foi enviado em <b>{$data_envio}</b> &agrave;s <b>{$hora_envio}\n\n\n\t";
    } elseif (${$locrwilcq} == 2) {
        $GLOBALS["nvfurjfs"] = "tip";
        $ejptqubltj = "tip";
        switch (${$GLOBALS["rnocuwi"]}) {
            case 1:
                ${$GLOBALS["qqhgcbxdpfj"]} = "sshconta";
                break;
            case 2:
                ${$GLOBALS["nvfurjfs"]} = "sshacesso";
                break;
            default:
                ${$ejptqubltj} = "sshconta";
                break;
        }
        if (${$GLOBALS["qqhgcbxdpfj"]} == "sshconta") {
            $khexicjwmepi = "link_corpo";
            $gnirsdzpew = "portas_corpo";
            $link_corpo = "<b>IP para conex\xc3\xa3o</b>: <a href='{$link}' target='_blank'>{$link}</a><br /><br />";
            $GLOBALS["gwbpbbkrvk"] = "portassh_corpo";
            $portas_corpo = "<b>Portas Squid</b>: 80,8080,8799,3128 <br />";
            $portassh_corpo = "<b>Portas SSH</b>: 22,443 <br />";
            if (${$GLOBALS["npkfvvjlicm"]} != "") {
                ${$GLOBALS["oikgroaovtkf"]} = ${$GLOBALS["npkfvvjlicm"]};
            } else {
                ${$GLOBALS["oikgroaovtkf"]} = "Entrega de conta <b>SSH</b>";
            }
        } elseif (${$GLOBALS["qqhgcbxdpfj"]} = "sshacesso") {
            $vilhvhyte = "link_corpo";
            $GLOBALS["qlhhzsfeo"] = "link_corpo";
            $jfckphhkcn = "todascontas";
            $link_corpo = $link_corpo;
            if (${$GLOBALS["npkfvvjlicm"]} != "") {
                $GLOBALS["gunevitjeho"] = "ass";
                $ass = ${$GLOBALS["npkfvvjlicm"]};
            } else {
                $GLOBALS["vrdwcttbp"] = "ass";
                $ass = "Acesso Painel V4.1";
            }
            ${$jfckphhkcn} = "<b>4.</b>Todas suas contas <b>SSH</b> encontra-se dentro deste painel automat\xc3\xadco.";
        }
        ${$GLOBALS["wapgoqmo"]} = "\n\t<br /><b>Obrigado pela compra.</b><br />\n\t<b>Seus Dados</b>:\n\t<br /><br />\n    <b>Assunto</b>: {$ass} <br />\n    {$login_corpo}\n    {$senha_corpo}\n    <b>Validade</b>: {$validade} Dias<br />\n    {$portas_corpo}\n    {$portassh_corpo}\n    {$link_corpo}\n    {$msg2}\n    <br /><br />\n    <b>1.</b>Duvidas e Suporte Entre em Contato com <a href='{$emailadm}'>{$emailadm}.</a><br />\n    <b>2.</b>Temos um Grupo Especial para Revendedores, caso seja um deles solicite o link atrav\xc3\xa9s do contato.<br />\n    <b>3.</b>Recomendamos Arquivar esse email para n\xc3\xa3o perder os dados da sua conta.<br />\n    {$todascontas}\n    <hr><br />\n    Este e-mail foi enviado em <b>{$data_envio}</b> &agrave;s <b>{$hora_envio}\n\n\n\t";
    } else {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Modelo n\xc3\xa3o selecionado!\");";
        echo "window.location=\"../../home.php?page=email/enviaremail\";";
        echo "</script>";
        exit;
    }
    $GLOBALS["ofbiuzjsqqt"] = "enviado";
    ${$GLOBALS["xgjsfqf"]} = explode("@", ${$GLOBALS["oivcqye"]});
    ${$agurxtuufci} = "[" . ${$GLOBALS["ninxghajxhqn"]} . "]" . "[SEUSiteSSH]";
    ${$GLOBALS["leebylj"]} = ${$uoxseuf};
    ${$GLOBALS["eiiyckjcuf"]} = ${$GLOBALS["sgjycngg"]};
    ${$GLOBALS["jfnkfprog"]} = strtoupper(${$GLOBALS["xgjsfqf"]}[0]);
    ${$ztbozgfm} = "Email enviado, o cliente receber\xc3\xa1 na caixa de entrada.";
    require_once "../phpmailer/class.phpmailer.php";
    require_once "../phpmailer/class.smtp.php";
    ${$GLOBALS["scwgjvhhe"]} = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPSecure = ${$GLOBALS["unbvnjjyeccu"]}["ssl_secure"];
    $mail->Host = ${$mddllr}["servidor"];
    $mail->Port = ${$txswhxcdmri}["porta"];
    $mail->SMTPDebug = 0;
    $mail->SMTPAuth = true;
    $umrsiyj = "corpo";
    $mail->Username = ${$GLOBALS["iptbxedhoj"]}["email"];
    $mail->Password = ${$GLOBALS["iptbxedhoj"]}["senha"];
    $mail->From = ${$GLOBALS["iptbxedhoj"]}["email"];
    $mail->FromName = "Administra\xc3\xa7\xc3\xa3o";
    $mail->AddAddress(${$GLOBALS["eiiyckjcuf"]}, ${$GLOBALS["jfnkfprog"]});
    $mail->IsHTML(true);
    $mail->CharSet = "UTF-8";
    $mail->Subject = ${$GLOBALS["npkfvvjlicm"]};
    $mail->Body = "'" . $corpo . "'";
    ${$GLOBALS["ofbiuzjsqqt"]} = $mail->Send();
    $mail->ClearAllRecipients();
    $mail->ClearAttachments();
    if (${$GLOBALS["itdvidvkblw"]}) {
        $GLOBALS["ybecickt"] = "sucesso";
        echo myalertuser("success", $sucesso, "../../home.php?page=email/enviaremail");
    } else {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Erro ao enviar: " . $mail->ErrorInfo . "\");";
        echo "window.location=\"../../home.php?page=email/enviaremail\";";
        echo "</script>";
    }
}
