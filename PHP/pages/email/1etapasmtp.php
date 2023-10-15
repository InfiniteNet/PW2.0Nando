<?php

$GLOBALS["xcnqbxgfxnd"] = "smtp";
$GLOBALS["ehfpzov"] = "buscasmtp";
$GLOBALS["mulmolbdoyf"] = "buscasmtp";
$eudkusnsftl = "buscasmtp";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/1etapasmtp.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
$GLOBALS["vihevhbpcmq"] = "smtp";
$vtkvtu = "conta";
protegePagina("user");
$usfqvoy = "usuario";
if ($usuario["ativo"] == 2) {
    echo "<script type=\"text/javascript\">";
    echo "window.location=\"home.php?page=suspenso\";";
    echo "</script>";
    exit;
}
${$GLOBALS["mulmolbdoyf"]} = "SELECT * FROM smtp_usuarios WHERE usuario_id='" . $_SESSION["usuarioID"] . "'";
${$eudkusnsftl} = $conn->prepare(${$GLOBALS["ehfpzov"]});
$buscasmtp->execute();
${$GLOBALS["vihevhbpcmq"]} = $buscasmtp->fetch();
${$vtkvtu} = $buscasmtp->rowCount();
$GLOBALS["qcnqeciqu"] = "smtp";
echo "<!-- Input with Icons start -->\n<section id=\"input-with-icons\">\n    <div class=\"row match-height\">\n        <div class=\"col-12\">\n            <div class=\"card\">\n                <div class=\"card-header\">\n                    <h1 class=\"card-title font-medium-2\"><i class=\"fad fa-pencil text-success font-large-1\"></i> Alterar Informa\xc3\xa7\xc3\xb5es</h1>\n                </div>\n                <div class=\"card-content\">\n                    <div class=\"card-body\">\n                        <form action=\"pages/email/configurasmtp.php\" method=\"POST\" role=\"form\">\n                            <div class=\"row\">\n                                <div class=\"col-12\">\n                                    <p>Digite abaixo os novos dados do seu servidor de email</p>\n                                </div>\n                                <div class=\"col-sm-6\">\n                                    <div class=\"mb-1\">\n                                        Nome de Sua Empresa\n\n                                        <fieldset class=\"form-group position-relative has-icon-left\">\n                                            <input required=\"required\" type=\"text\" value=\"";
echo ${$GLOBALS["xcnqbxgfxnd"]}["empresa"];
echo "\" class=\"form-control\" id=\"nomeempresa\" name=\"nomeempresa\" placeholder=\"Ex: sshplus\">\n                                            <div class=\"form-control-position\">\n                                                <i class=\"fad fa-user-tie\"></i>\n                                            </div>\n                                        </fieldset>\n                                    </div>\n                                </div>\n                                <div class=\"col-sm-6\">\n                                    <div class=\"mb-1\">\n                                        Servidor\n\n                                        <fieldset class=\"form-group position-relative\">\n                                            <input required=\"required\" type=\"text\" value=\"";
echo ${$GLOBALS["xcnqbxgfxnd"]}["servidor"];
$nlfweve = "smtp";
echo "\" class=\"form-control\" id=\"servidor\" name=\"servidor\" placeholder=\"Ex: smtp.gmail.com\">\n                                            <div class=\"form-control-position\">\n                                                <i class=\"fad fa-server\"></i>\n                                            </div>\n                                        </fieldset>\n                                    </div>\n                                </div>\n                                <div class=\"col-sm-6\">\n                                    <div class=\"mb-1\">\n                                        Porta\n\n                                        <fieldset class=\"form-group position-relative has-icon-left input-divider-left\">\n                                            <input required=\"required\" type=\"text\" value=\"";
echo ${$GLOBALS["xcnqbxgfxnd"]}["porta"];
echo "\" class=\"form-control\" id=\"porta\" name=\"porta\" placeholder=\"Ex: 465 SSL ou 587 TLS\">\n                                            <div class=\"form-control-position\">\n                                                <i class=\"fad fa-globe-americas\"></i>\n                                            </div>\n                                        </fieldset>\n                                    </div>\n                                </div>\n                                <div class=\"col-sm-6\">\n                                    <div class=\"mb-1\">\n                                        SSL\n\n                                        <fieldset class=\"form-group position-relative input-divider-right\">\n                                            <input required=\"required\" type=\"text\" value=\"";
echo ${$GLOBALS["xcnqbxgfxnd"]}["ssl_secure"];
echo "\" class=\"form-control\" id=\"ssl\" name=\"ssl\" placeholder=\"Ex: SSL ou TLS\">\n                                            <div class=\"form-control-position\">\n                                                <i class=\"fad fa-at\"></i>\n                                            </div>\n                                        </fieldset>\n                                    </div>\n                                </div>\n                                <div class=\"col-sm-6\">\n                                    <div class=\"mb-1\">\n                                        Email\n\n                                        <fieldset class=\"form-group position-relative input-divider-right\">\n                                            <input required=\"required\" type=\"text\" value=\"";
echo $smtp["email"];
echo "\" class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"Email do servidor\">\n                                            <div class=\"form-control-position\">\n                                                <i class=\"fad fa-at\"></i>\n                                            </div>\n                                        </fieldset>\n                                    </div>\n                                </div>\n                                <div class=\"col-sm-6\">\n                                    <div class=\"mb-2\">\n                                        Senha\n\n                                        <fieldset class=\"form-group position-relative input-divider-right\">\n                                            <input class=\"form-control\" type=\"password\" value=\"";
echo $smtp["senha"];
echo "\" id=\"senha\" name=\"senha\" placeholder=\"Senha do Email\">\n                                            <div class=\"form-control-position\">\n                                                <i class=\"fad fa-key-skeleton\"></i>\n                                            </div>\n                                        </fieldset>\n                                    </div>\n                                </div>\n                                <div class=\"col-sm-12 col-12 text-center\">\n                                    <button type=\"submit\" class=\"btn btn-success\">Salvar</button>\n                                    <button type=\"reset\" class=\"btn btn-danger\">Limpar</button>\n                                </div>\n                            </div>\n                    </div>\n                    </form>\n                </div>\n            </div>\n        </div>\n    </div>\n</section>\n<!-- Input with Icons end -->\n";
