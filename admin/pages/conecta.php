<?php

if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/conecta.php")) {
    header("Location: index.php?e=404");
    exit;
}
echo "<div class=\"active\"><a class=\"d-flex align-items-center\" href=\"home.php\"><i data-feather=\"home\"></i><span class=\"menu-title text-truncate\" data-i18n=\"Dashboards\">DASHBOARD</span></a>\n</div>\n<iframe id=\"iFrameVideos\" src=\"/painel.php\" height=\"700px\" width=\"100%\" frameborder=\"0\" marginwidth=\"0\" marginheight=\"0\" scrolling=\"yes\" allowfullscreen=\"allowfullscreen\" > Por favor, use um navegador que suporte iframes!</iframe>\n<script>iFrameResize({log: false, inPageLinks: true}, '#iFrameVideos')</script>\n</div>\n";
