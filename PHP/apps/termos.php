<?php

$GLOBALS["yoktaqt"] = "administrador";
$GLOBALS["rswziewo"] = "SQLAdministrador";
$dtkhtmexv = "administrador";
require_once "../pages/system/funcoes.php";
$GLOBALS["riowufqt"] = "SQLAdministrador";
$qudcqyexgn = "administrador";
require_once "../pages/system/seguranca.php";
require_once "../pages/system/config.php";
require_once "../pages/system/classe.ssh.php";
$GLOBALS["ihkjdelr"] = "administrador";
$GLOBALS["kkfdomc"] = "SQLAdministrador";
$SQLAdministrador = "SELECT * FROM admin WHERE id_administrador = '1'";
$SQLAdministrador = $conn->prepare($SQLAdministrador);
$SQLAdministrador->execute();
$administrador = $SQLAdministrador->fetch();
echo "<!doctype html>\n<html lang=\"pt-br\">\n<head>\n<!-- META SECTION -->\n<title>Apps ";
echo $administrador["site"];
echo "</title>\n<meta name=\"title\" content=\"";
echo $administrador["site"];
echo " - Internet Ilimitada 5G\">\n<meta name=\"description\" content=\"";
echo $administrador["site"];
echo " - Internet ilimitada de alta qualidade.\">\n<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />\n<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />\n<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />\n<!-- END META SECTION -->\n</head>\n<body style=\"\nbackground:#2a2b25;\ncolor:#fff;\nfont-size:16px;\nfont-family: 'Roboto', sans-serif;\">\n<style>\na:link {\ncolor: white;  text-decoration: none;\n}\na:visited {\ncolor: white;  text-decoration: none;\n}\n@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&amp;display=swap');\n</style>\n<center>\n<img src=\"./img/giphy.gif\" style=\"height:140px;\">\n<div style=\"\nfont-size: 18px;\ncolor: red;\nborder-bottom: 1px solid;\nwidth: 246px;\npadding: 4px; \">\n<h1>";
$stpdqum = "administrador";
echo $administrador["site"];
echo "<br>\n<br>\n<h2>TERMOS DE USO<br>\n</div></h2><br>\n<h4>\n\xe2\x80\xa2 AO USAR NOSSO SERVI\xc3\x87O, VOC\xc3\x8a DEVE CONCORDAR COM TODOS OS NOSSOS TERMOS E CONDI\xc3\x87\xc3\x95ES. VOC\xc3\x8a DEVE ESTAR CIENTE DE QUE:<br><br>\n\xe2\x80\xa2 O NOSSO SERVI\xc3\x87O SE ISENTA DE QUAISQUER PROBLEMAS E LIMITA\xc3\x87\xc3\x95ES DOS MODOS DE CONEX\xc3\x83O AQUI UTILIZADOS, SEJA ELAS QUAIS FOR, COMO LENTID\xc3\x83O E INSTABILIDADES, OU MESMO QUEDAS, SEM DIREITO A POSS\xc3\x8dVEIS REEMBOLSOS, POIS O USU\xc3\x81RIO ESTAR\xc3\x81 CIENTE DO QU\xc3\x8a, E PARA QUE EST\xc3\x81 UTILIZANDO O APLICATIVO.<br><br>\n\xe2\x80\xa2 CORREMOS SEMPRE ATR\xc3\x81S DE MELHORAR, SE HOUVER QUEDA, VAMOS CORRER ATR\xc3\x81S PRA CORRIGIR, MAS SE N\xc3\x83O CONSEGUIMOS IREI AVISAR.<br><br>\n\xe2\x80\xa2 SE VOC\xc3\x8a REPASSAR SEU ACESSO A TERCEIROS E ENCONTRAMOS NO SISTEMA ULTRAPASSANDO O LIMITE CONTRATADO, VOC\xc3\x8a TERA SEU ACESSO SUSPENSO SEM DIREITO A DEVOLU\xc3\x87\xc3\x83O DE DINHEIRO.<br><br>\n\xe2\x80\xa2 PORQUE N\xc3\x83O TEM DIREITO A REEMBOLSO? PORQUE N\xc3\x83O TEMOS CULPA DA OPERADORA DERRUBAR O M\xc3\x89TODO, E DAMOS SUPORTE A SERVIDOR  E APLICATIVO, E N\xc3\x83O NA OPERADORA.<br><br>\n\xe2\x80\xa2 VOC\xc3\x8a CONCORDA QUE VOC\xc3\x8a ACESSA E USA O SERVI\xc3\x87O A SEU CRIT\xc3\x89RIO E RISCO.<br><br>\n\xe2\x80\xa2 TODA RESPONSABILIDADE DE USO \xc3\x89 SUA, N\xc3\x83O SOMOS RESPONS\xc3\x81VEL PELA REDE QUE VOC\xc3\x8a EST\xc3\x81 A ACESSAR O SERVI\xc3\x87O.\n</h4>\n<!-- RODAPE -->\n<footer class=\"footer\">\n<div class=\"container-fluid\">\n<div class=\"row\">\n<div class=\"col-sm-6\">\n2021 - <script> document.write(new Date().getFullYear())</script> ";
echo $administrador["site"];
echo "\xc2\xa9\n</div>\n<div class=\"col-sm-6\">\n<div class=\"text-sm-right\">\nDesenvolvido por <b><a href=\"https://t.me/paineis\" target=\"_blank\"></i>NTECH SYSTEM</b></a>\n</div>\n</div>\n</div>\n</div>\n</footer>\n<!-- FIM RODAPE -->\n</body>\n</html>\n";
