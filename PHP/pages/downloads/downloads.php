<?php

$GLOBALS["nplctsaf"] = "usuario";
$GLOBALS["zzrjhdyw"] = "buscausuario";
$pwfuddvgd = "buscausuario";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/downloads.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
protegePagina("user");
$xivynvd = "usuario";
if ($usuario["ativo"] == 2) {
    echo "<script type=\"text/javascript\">";
    echo "window.location=\"home.php?page=suspenso\";";
    echo "</script>";
    exit;
}
${$GLOBALS["zzrjhdyw"]} = "SELECT * FROM usuario WHERE id_usuario='" . $_SESSION["usuarioID"] . "'";
${$pwfuddvgd} = $conn->prepare(${$GLOBALS["zzrjhdyw"]});
$buscausuario->execute();
${$GLOBALS["nplctsaf"]} = $buscausuario->fetch();
echo "\n<style>\n  /* -------------------- Select Box Styles: stackoverflow.com Method */\n  /* -------------------- Source: http://stackoverflow.com/a/5809186 */\n  select#soflow,\n  select#soflow-color {\n    -webkit-appearance: button;\n    -webkit-border-radius: 2px;\n    -webkit-box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);\n    -webkit-padding-end: 20px;\n    -webkit-padding-start: 2px;\n    -webkit-user-select: none;\n    cursor: pointer;\n    background-image: url(http://i62.tinypic.com/15xvbd5.png), -webkit-linear-gradient(#FAFAFA, #F4F4F4 40%, #E5E5E5);\n    background-position: 97% center;\n    background-repeat: no-repeat;\n    border: 1px solid #AAA;\n    color: #555;\n    font-size: inherit;\n    overflow: hidden;\n    padding: 5px 10px;\n    text-overflow: ellipsis;\n    white-space: nowrap;\n    width: 300px;\n  }\n\n  @media screen and (max-width: 480px) {\n    select#soflow {\n      width: 200px;\n    }\n\n  }\n\n\n  select#soflow-color {\n    color: #fff;\n    background-image: url(http://i62.tinypic.com/15xvbd5.png), -webkit-linear-gradient(#779126, #779126 40%, #779126);\n    background-color: #779126;\n    -webkit-border-radius: 20px;\n    -moz-border-radius: 20px;\n    border-radius: 20px;\n    padding-left: 15px;\n  }\n\n  .classehr {\n    margin-bottom: 5px;\n    margin-top: 0px;\n  }\n\n  #aumente {\n    font-weight: normal;\n    color: #000000;\n    letter-spacing: -2pt;\n    word-spacing: -6pt;\n    font-size: 25px;\n    text-align: left;\n    font-family: courier new, courier, monospace;\n  }\n\n  .tooltipsy {\n    padding: 10px;\n    max-width: 200px;\n    color: #303030;\n    background-color: #f5f5b5;\n    border: 1px solid #deca7e;\n  }\n\n  .small-box h3 {\n    font-size: 25px;\n  }\n</style>\n\n\n<script>\n  function carregadownloads() {\n\n    var obj = document.getElementById(\"conteudo\");\n    obj.innerHTML = '<div class=\"col-lg-12\"><small>Buscando arquivos...</small></center></div>';\n    var tipo = \$(\"#soflow\").val();\n    \$('#conteudo').fadeOut(0).fadeIn();\n    setTimeout(function() {\n      \$(\"#conteudo\").load('../pages/downloads/ajax_downloads.php?tipo=' + tipo);\n      \$('#conteudo').fadeOut(0).fadeIn();\n    }, 2000);\n  }\n</script>\n\n<script>\n  function carregainicial() {\n    \$(\"#conteudo\").load('../pages/downloads/ajax_downloads.php?tipo=0');\n    \$('#conteudo').fadeOut(0).fadeIn();\n  };\n</script>\n<!-- Input with Icons start -->\n<section id=\"input-with-icons\">\n  <div class=\"row match-height\">\n    <div class=\"col-12\">\n      <div class=\"card\">\n        <div class=\"card-header\">\n          <h1 class=\"card-title\">Arquivos Para Download</h1>\n        </div>\n        <div class=\"card-content\">\n          <form class=\"\" action=\"#\" method=\"post\">\n            <div class=\"card-body\">\n              <input type=\"hidden\" onchange=\"carregadownloads()\" id=\"soflow\" size=\"1\" name=\"Name\">\n              <div class=\"col-12\">\n                <div class=\"row\" id=\"conteudo\">\n                  <script>\n                    carregainicial();\n                  </script>\n                </div>\n              </div>\n            </div>\n        </div>\n        </form>\n      </div>\n    </div>\n  </div>\n  </div>\n</section>\n<!-- Input with Icons end -->\n";
