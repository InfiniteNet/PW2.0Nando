<?php

$GLOBALS["zdkfqeioebn"] = "enviado";
$GLOBALS["btiehmyn"] = "assunto";
$GLOBALS["rolkzemvml"] = "destino";
$GLOBALS["polupmwoi"] = "email_smtp";
$GLOBALS["cupnzw"] = "senha_smtp";
$GLOBALS["nxkqbczrhxu"] = "porta_smtp";
require_once "../phpmailer/class.phpmailer.php";
$GLOBALS["pjyvxhyds"] = "corpo";
$qkyfqcy = "email_smtp";
$gfuhcyim = "destinatario";
require_once "../phpmailer/class.smtp.php";
$tryhrgla = "mail";
$GLOBALS["tggfryuanl"] = "ssl_smtp";
$GLOBALS["nhmjkgwsh"] = "servidor_smtp";
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPSecure = $ssl_smtp;
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
    $xqyxvrqjmrrm = "sucesso";
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
