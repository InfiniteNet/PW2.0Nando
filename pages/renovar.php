<?php

$GLOBALS["ynwdxkprynof"] = "urlcode";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/input.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
protegePagina("user");
if ($_SESSION["valor"] == 0.0) {
    echo "<script type=\"text/javascript\"> window.location=\"../home.php?page=erroprocesso\";</script>";
}
if (isset($_SESSION["ticket_url"])) {
    $GLOBALS["qgcxep"] = "urlcode";
    $urlcode = $_SESSION["ticket_url"];
} else {
    echo "<script type=\"text/javascript\"> window.location=\"../home.php?page=erroprocesso\";</script>";
}
echo "<script src=\"https://sdk.mercadopago.com/js/v2\"></script>\n<script type=\"text/javascript\">\n\n//Calling function\nsetTimeout(repeatAjax,5000);\nfunction repeatAjax(){\njQuery.ajax({\n\n          type: \"POST\",\n          url: 'pages/verify.php',\n          dataType: 'text',\n          success: function(resp) {\n          \tif(resp == 'Aprovado')\n          \t{\n              window.location = \"../home.php?page=aprovado\";\n\n                    jQuery('.teste').html(resp);\n                    }\n\n          },\n          complete: function() {\n                setTimeout(repeatAjax,5000); //After completion of request, time to redo it after a second\n             }\n        });\n}\n</script>\n<div class=\"active\"><a class=\"d-flex align-items-center\" href=\"home.php\"><i data-feather=\"home\"></i><span class=\"menu-title text-truncate\" data-i18n=\"Dashboards\">DASHBOARD</span></a>\n</div>\n<iframe id=\"iFrameVideos\" src=\"";
echo ${$GLOBALS["ynwdxkprynof"]};
echo "\" height=\"700px\" width=\"100%\" frameborder=\"0\" marginwidth=\"0\" marginheight=\"0\" scrolling=\"yes\" allowfullscreen=\"allowfullscreen\" > Por favor, use um navegador que suporte iframes!</iframe>\n<script>iFrameResize({log: false, inPageLinks: true}, '#iFrameVideos')</script>\n</div>\n";
