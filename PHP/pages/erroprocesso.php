<?php

require_once "system/seguranca.php";
protegePagina("user");
unset($_SESSION["valor"], $_SESSION["data"], $_SESSION["payment_id"], $_SESSION["apimp"], $_SESSION["ticket_url"]);
echo "<meta http-equiv=\"refresh\" content=\"10; URL='home.php?page=renovacao'\"/>\n<!-- partial:index.partial.html -->\n<div class=\"row\">\n<div class=\"col-12\">\n<!-- Profile Image -->\n<div class=\"card border-primary\">\n<div class=\"card-body little-profile text-center\">\n<ul class=\"list-group list-group-unbordered\">\n<style>\n.bloco img{\nwidth: 250px;\nheight: 250px;\n}\n</style>\n<div class=\"bloco\">\n<h1>N\xc3\x83O PODEMOS PROCESSAR O PAGAMENTO!</h1>\n<p>Tente novamente mais tarde</p>\n<p>ou fale com seu revendedor!</p>\n<img src=\"../app-assets/images/pages/restrito.png\" alt=\"erroprocesso\">\n</div>\n</ul>\n</div>\n</div>\n</div>\n</div>\n";
