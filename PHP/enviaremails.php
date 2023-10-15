<?php

$GLOBALS["abyglfsxpruq"] = "enviado";
$GLOBALS["dsuyeqhiiqd"] = "corpo";
$GLOBALS["leegfkmgpw"] = "email_smtp";
$GLOBALS["ygaeinsy"] = "servidor_smtp";
$qgeqqaxbj = "assunto";
$GLOBALS["kuhqpqtsr"] = "mail";
$hysjyfn = "senha_smtp";
require_once "phpmailer/class.phpmailer.php";
require_once "phpmailer/class.smtp.php";
$mail = new PHPMailer();
$rtdcvoflv = "destino";
$GLOBALS["ftopeldx"] = "email_smtp";
$GLOBALS["cqkhtmj"] = "enviado";
$mail->IsSMTP();
$bmygcmyyksa = "ssl_smtp";
$mail->SMTPSecure = $ssl_smtp;
$pcsqdgws = "porta_smtp";
$qrpsbhcxu = "destinatario";
$mail->Host = $servidor_smtp;
$mail->Port = $porta_smtp;
$mail->SMTPDebug = 0;
$mail->SMTPAuth = true;
$mail->Username = $email_smtp;
$mail->Password = $senha_smtp;
$mail->From = $email_smtp;
$mail->FromName = "Suporte - SSH";
$mail->AddAddress($destino, $destinatario);
$mail->IsHTML(true);
$mail->CharSet = "UTF-8";
$mail->Subject = $assunto;
$mail->Body = "'" . $corpo . "'";
$enviado = $mail->Send();
$mail->ClearAllRecipients();
$mail->ClearAttachments();
if ($enviado) {
    $yjemnrc = "sucesso";
    echo "<script type=\"text/javascript\">";
    echo "alert(\"" . $sucesso . "\");";
    echo "window.location=\"../../home.php?page=email/enviaremail\";";
    echo "</script>";
} else {
    echo "<script type=\"text/javascript\">";
    echo "alert(\"Erro ao enviar: " . $mail->ErrorInfo . "\");";
    echo "window.location=\"../../home.php?page=email/enviaremail\";";
    echo "</script>";
}
