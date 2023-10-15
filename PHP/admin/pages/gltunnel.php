<?php

if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/gltunnel.php")) {
    header("Location: index.php?e=404");
    exit;
}
echo "<iframe id=\"iFrameVideos\" src=\"/gltunnel/index.php\" height=\"1000px\" width=\"100%\" frameborder=\"0\" marginwidth=\"0\" marginheight=\"0\" scrolling=\"yes\" allowfullscreen=\"allowfullscreen\" > Por favor, use um navegador que suporte iframes!</iframe>\n<script>iFrameResize({log: false, inPageLinks: true}, '#iFrameVideos')</script>\n\n</div>\n";
