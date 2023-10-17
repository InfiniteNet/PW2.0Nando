<?php

$GLOBALS["uhuqvob"] = "loginerro";
$GLOBALS["xhbrefnltp"] = "login";
$GLOBALS["vbnurovri"] = "row_produto";
$GLOBALS["icovnlg"] = "result_produtos";
$GLOBALS["onkobxqrvj"] = "conn";
$GLOBALS["wwprqroigfno"] = "key";
$GLOBALS["alhhbe"] = "pass";
$GLOBALS["xyqlnhxhidn"] = "form1";

session_start();
if ($_POST["form_login"] == "LOGIN") {
    $wgowccnwmul = "pass1";
    $GLOBALS["gnjofhqxyfq"] = "pass1";
    $ttbltarxqmh = "resultado_produtos";
    include_once $_SERVER["DOCUMENT_ROOT"] . "/class/conexao.php";
    include_once $_SERVER["DOCUMENT_ROOT"] . "/class/enc.php";
    ${$GLOBALS["xyqlnhxhidn"]} = addslashes($_POST["form_login"]);
    $afppkhb = "login";
    $login = addslashes($_POST["username"]);
    $GLOBALS["rvdbqtiirk"] = "resultado_produtos";
    $ckrivazymy = "result_produtos";
    ${$GLOBALS["gnjofhqxyfq"]} = addslashes($_POST["password"]);
    ${$GLOBALS["alhhbe"]} = AESCrypt::encrypt(${$GLOBALS["wwprqroigfno"]}, ${$wgowccnwmul});
    ${$ckrivazymy} = "SELECT * FROM usuariogl WHERE login='{$login}' && pass='{$pass}' LIMIT 1";
    $GLOBALS["qswcnwcpp"] = "form1";
    ${$GLOBALS["rvdbqtiirk"]} = mysqli_query(${$GLOBALS["onkobxqrvj"]}, ${$GLOBALS["icovnlg"]});
    while (${$GLOBALS["vbnurovri"]} = mysqli_fetch_assoc(${$ttbltarxqmh})) {
        $cwelemjupd = "row_produto";
        ${$GLOBALS["xhbrefnltp"]} = $row_produto["login"];
        $_SESSION["painel"]["login"] = ${$GLOBALS["xhbrefnltp"]};
        ${$GLOBALS["uhuqvob"]} = "ERRO";
        echo "<script>\nwindow.location='./gltunnel.php';\n</script>";
    }
    if (${$GLOBALS["qswcnwcpp"]} != "") {
        $GLOBALS["vprvobkmezm"] = "loginerro";
        if ($loginerro != "ERRO") {
            echo "<script>\nalert('USU\xc3\x81RIO OU SENHA INCORRETOS');\nwindow.location='./gltunnel.php';\n</script>";
        }
    }
}
if ($_POST["form_login"] == "SAIR") {
    unset($_SESSION["newsession"]);
    unset($_SESSION["painel"]["login"]);
}
echo "<!DOCTYPE html>\n<html lang=\"pt\">\n<head>\n  <meta charset=\"UTF-8\">\n  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />\n  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n  <title>GL-GESTOR - LOGIN</title>\n  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65\" crossorigin=\"anonymous\">\n  <style>\n    body {\n      background-image: linear-gradient(225deg, #eb45f2 0, #d33ff7 16.67%, #b83afb 33.33%, #9738ff 50%, #6c38ff 66.67%, #0c3bff 83.33%, #003eff 100%);\n      font-family: Arial, Helvetica, Sans-Serif;\n      overflow: hidden;\n      height: 100vh;\n    }\n    .login {\n      width: 100%;\n      height: 90vh;\n      align-items: center;\n      justify-content: center;\n      display: flex;\n    }\n    .card {\n      border-radius: 20px;\n      margin: 50px;\n      background-color: #0000005c;\n      border: none;\n    }\n    .form-control {\n      border-radius: 20px;\n      background-color: #0000005c;\n      border-color: #0000005c;\n      margin-top: -10px;\n    }\n    .logo {\n      width: 120px;\n      height: 120px;\n      margin-bottom: -10px;\n    }\n    .login h3 {\n      display: flex;\n      justify-content: center;\n      margin-bottom: -10px;\n      color: #c5b4e3;\n    }\n    .btn {\n      width: 100%;\n      border-radius: 20px;\n      color: #c5b4e3;\n    }\n    .card p {\n      color: #c5b4e3;\n      font-size: 12px;\n      margin-bottom: -5px;\n      margin-top: -2px;\n    }\n@media (min-width: 768px) {\n      .card {\n        border-radius: 20px;\n        margin: 20px;\n        background-color: #0000005c;\n      }\n    }\n  </style>\n</head>\n<body>\n  <div class=\"login\">\n    <div class=\"container\">\n      <div class=\"row\">\n        <div class=\"col-lg-4 offset-lg-4\">\n          <div class=\"card\">\n            <div class=\"card-body\">\n              <center>\n                <img class=\"logo\" src=\"static/assets/img/avatars/4.png\" alt=\"Painel de controle GL-GESTOR\">\n            <div class=\"card-body\">\n              <form action=\"\" method=\"POST\">\n                <input name=\"form_login\" type=\"hidden\" value=\"LOGIN\">\n                <div>\n                  <div class=\"mb-3\">\n                    <input class=\"form-control\" type=\"text\" name=\"username\" id=\"username\" value=\"\" placeholder=\"Usu\xc3\xa1rio\" required/>\n                  </div>\n                </div>\n                <div>\n                  <div class=\"mb-3\">\n                    <input class=\"form-control\" type=\"password\" name=\"password\" id=\"password\" value=\"\" placeholder=\"Senha\" required/>\n                  </div>\n                </div>\n                <div>\n                  <div class=\"mb-3\">\n                    <button class=\"btn btn-dark\" name=\"submit\" id=\"submit\" type=\"submit\">ENTRAR</button>\n                  </div>\n                  <hr>\n                  <div class=\"\">\n                    <center>\n                     \n                    </center>\n                  </div>\n                </div>\n              </form>\n            </div>\n          </div>\n        </div>\n      </div>\n    </div>\n  </div>\n</body>\n</html>\n";
