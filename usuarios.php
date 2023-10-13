<?php
$GLOBALS["sgymobwf"] = "dados";
$GLOBALS["htfjxvh"] = "row";
$GLOBALS["fvmfgith"] = "sql";
$GLOBALS["kuffzuqv"] = "uid";
require_once $_SERVER["DOCUMENT_ROOT"] . "/config/funcoes.php";
$duhrcyhukon = "uid";
require_once $_SERVER["DOCUMENT_ROOT"] . "/modais.php";
$avmpobusesks = "row";
isLogged($sid);
if (getAdm($uid) == false)
{
    header("location: /");
}
echo "\n\n<div class=\"container\">\n    <center>\n        <a href=\"homec.php\"><img class=\"mt-5\" src=\"";
echo getConfig("logo");
echo "\" width=\"";
echo getConfig("largura");
echo "\" height=\"";
echo getConfig("altura");
echo "\"></a><br>\n        Bem vindo(a) <b>";
echo getNickById($
{
    $duhrcyhukon
});
echo "</b>!\n    </center><br><br>\n\n    <div class=\"row mb-1 mt-2\">\n        <div class=\"col\">\n            <div style=\"float: right;\"><button class=\"btn btn-secondary float-right\" type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-novo-usuario\"><i class=\"fa-solid fa-plus\"></i> Novo usu\xc3\xa1rio</button></div>\n        </div>\n    </div>\n    <div class=\"card card-body shadow border-0 table-wrapper table-responsive\">\n\n        <table class=\"table user-table table-hover align-items-center\">\n            <thead>\n                <tr>\n                    <th class=\"border-bottom\">Nome</th>\n                    <th class=\"border-bottom\">Login</th>\n                    <th class=\"border-bottom\">Status</th>\n                    <th class=\"border-bottom\">Situa\xc3\xa7\xc3\xa3o</th>\n                    <th class=\"border-bottom\">A\xc3\xa7\xc3\xb5es</th>\n                </tr>\n            </thead>\n            <tbody>\n                ";
$
{
    $GLOBALS["fvmfgith"]
} = $conn->query("SELECT * FROM usuarios");
while ($
{
    $avmpobusesks
} = $sql->fetch(PDO::FETCH_ASSOC))
{
    $jykbbuut = "row";
    $GLOBALS["oaujtl"] = "row";
    echo "                    <tr>\n                        <td><a href=\"#\" class=\"d-flex align-items-center\">\n                                <div class=\"d-block\"><span class=\"fw-bold\">";
    $ctuxyupysosg = "row";
    echo $row["nome"];
    echo "</span>\n                                </div>\n                            </a></td>\n                        <td><span class=\"fw-normal\">";
    $GLOBALS["ojtepcprfqb"] = "row";
    echo $row["login"];
    echo "</span></td>\n                        <td><span class=\"fw-normal d-flex align-items-center\">\n                                </svg>\n                                ";
    if ($
    {
        $GLOBALS["htfjxvh"]
    }
    ["nivel"] == 1)
    {
        echo "Usu\xc3\xa1rio";
    }
    elseif ($row["nivel"] == 2)
    {
        echo "Administrador";
    }
    elseif ($row["nivel"] == 3)
    {
        echo "Dono";
    }
    else
    {
        echo "Desconhecido";
    }
    echo "\n                            </span></td>\n                        <td>\n                            ";
    if ($
    {
        $GLOBALS["htfjxvh"]
    }
    ["banido"] == 1)
    {
        echo "                                <svg class=\"icon icon-xs text-danger ms-1\" title=\"\" data-bs-toggle=\"tooltip\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\" data-bs-original-title=\"Delete\" aria-label=\"Delete\">\n                                    <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z\" clip-rule=\"evenodd\"></path>\n                                </svg>\n                                <span class=\"fw-normal text-danger\"> Banido</span>\n                            ";
    }
    else
    {
        echo "                                <svg class=\"icon icon-xxs text-success me-1\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\">\n                                    <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z\" clip-rule=\"evenodd\"></path><span class=\"fw-normal text-success\"> Ativo</span>\n                                ";
    }
    echo "\n\n                        </td>\n                        <td>\n                            <div class=\"row\">\n\t\t\t\t\t\t\t";
    if ($
    {
        $GLOBALS["htfjxvh"]
    }
    ["nivel"] != 3)
    {
        echo "                                <div class=\"col px-md-0\">\n                                    <form action=\"\" method=\"post\">\n                                        <input type=\"hidden\" name=\"id\" value=\"";
        $wxoiaplfvgy = "row";
        echo $
        {
            $GLOBALS["htfjxvh"]
        }
        ["id"];
        echo "\">\n                                        <button type=\"submit\" class=\"btn btn-info btn-sm\" name=\"btn_editar\"><i class=\"fa-solid fa-pen-to-square\"></i></button>\n                                    </form>\n                                </div>\n                                <div class=\"col px-md-0\">\n                                    <a href=\"excluir.php?acao=usuario&id=";
        echo $row["id"];
        echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-trash\"></i></a>\n                                </div>\n\t\t\t\t\t\t\t\t";
    }
    echo "\n                            </div>\n                        </td>\n                    </tr>\n                ";
}
echo "            </tbody>\n        </table>\n    </div>\n\n    <!------------------------------------------------------------------------------------>\n    <!-- MODAL CONFIG USU\xc3\x81RIO -->\n    <!------------------------------------------------------------------------------------>\n    <div class=\"modal fade\" id=\"modal-novo-usuario\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"\" aria-hidden=\"true\">\n        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">\n            <div class=\"modal-content\">\n                <div class=\"modal-header\">\n                    <h2 class=\"h6 modal-title\">Novo usu\xc3\xa1rio</h2>\n                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>\n                </div>\n                <div class=\"modal-body\">\n                    <form action=\"adicionar.php?acao=usuario\" method=\"post\">\n                        <div class=\"row\">\n                            <div class=\"col\">\n                                <label for=\"\">Nome</label>\n                                <input type=\"text\" name=\"nome\" class=\"form-control\">\n                            </div>\n                            <div class=\"col\">\n                                <label for=\"\">Login</label>\n                                <input type=\"text\" name=\"login\" class=\"form-control\">\n                            </div>\n                        </div>\n\n                        <div class=\"row mt-2\">\n                            <div class=\"col\">\n                                <label for=\"\">Senha</label>\n                                <input type=\"text\" name=\"senha\" class=\"form-control\">\n                            </div>\n                            <div class=\"col\">\n                                <label for=\"\">Pasta atualiza\xc3\xa7\xc3\xa3o</label>\n                                <input type=\"text\" name=\"pasta_nova\" class=\"form-control\">\n                            </div>\n                        </div>\n\n                        <div class=\"row mt-2\">\n                        <div class=\"col\">\n                            Nivel de permiss\xc3\xa3o\n                            <select name=\"nivel\" class=\"form-select\">\n                                <option value=\"1\">Usu\xc3\xa1rio</option>\n                                <option value=\"2\">Administrador</option>\n                            </select>\n                        </div>\n                        </div>\n\n                </div>\n                <div class=\"modal-footer\">\n                    <button type=\"submit\" name=\"adicionar_usuario\" style=\"color: white\" class=\"btn btn-success\">Adicionar</button></form>\n                    <button type=\"button\" style=\"color: white\" class=\"btn btn-secondary text-gray ms-auto\" data-bs-dismiss=\"modal\">Cancelar</button>\n                </div>\n            </div>\n        </div>\n    </div>\n\n    ";
if (isset($_POST["btn_editar"]))
{
    $GLOBALS["rtcdxoqiu"] = "sql";
    $sql = $conn->query("SELECT * FROM usuarios WHERE id='" . $_POST["id"] . "'");
    $
    {
        $GLOBALS["sgymobwf"]
    } = $sql->fetch(PDO::FETCH_ASSOC);
    echo "        <!------------------------------------------------------------------------------------>\n        <!-- MODAL EDITAR USUARIO -->\n        <!------------------------------------------------------------------------------------>\n        <div class=\"modal fade\" id=\"modal-editar-usuario\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"\" aria-hidden=\"true\">\n            <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">\n                <div class=\"modal-content\">\n                    <div class=\"modal-header\">\n                        <h2 class=\"h6 modal-title\">Editar usu\xc3\xa1rio</h2>\n                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>\n                    </div>\n                    <div class=\"modal-body\">\n                        <div class=\"mt-2 mb-3\"><i class=\"fa-solid fa-skull-crossbones\"></i> N\xc3\xa3o digite a senha se n\xc3\xa3o quiser alterar</div>\n                        <form action=\"editar.php?acao=usuarios\" method=\"post\">\n                            <input type=\"hidden\" name=\"pasta_velha\" value=\"";
    echo getData("pasta_att", $_POST["id"]);
    echo "\">\n                            <input type=\"hidden\" name=\"id\" value=\"";
    echo $
    {
        $GLOBALS["sgymobwf"]
    }
    ["id"];
    echo "\">\n                            <div class=\"row\">\n                                <div class=\"col\">\n                                    <label for=\"\">Nome</label>\n                                    <input type=\"text\" name=\"nome\" value=\"";
    $GLOBALS["pfulfxqxuby"] = "dados";
    echo $
    {
        $GLOBALS["sgymobwf"]
    }
    ["nome"];
    echo "\" class=\"form-control\">\n                                </div>\n                                <div class=\"col\">\n                                    <label for=\"\">Login</label>\n                                    <input type=\"text\" name=\"login\" value=\"";
    echo $dados["login"];
    $GLOBALS["whruqtsc"] = "dados";
    echo "\" class=\"form-control\">\n                                </div>\n                            </div>\n\n                            <div class=\"row mt-2\">\n                                <div class=\"col\">\n                                    <label for=\"\">Senha</label>\n                                    <input type=\"text\" name=\"senha\" class=\"form-control\">\n                                </div>\n                                <div class=\"col\">\n                                    <label for=\"\">Pasta atualiza\xc3\xa7\xc3\xa3o</label>\n                                    <input type=\"text\" value=\"";
    echo $dados["pasta_att"];
    echo "\" name=\"pasta_nova\" class=\"form-control\">\n                                </div>\n                            </div>\n\n                            <div class=\"row mt-2\">\n                        <div class=\"col\">\n                            Nivel de permiss\xc3\xa3o\n                            <select name=\"nivel\" class=\"form-select\">\n                                <option value=\"1\">Usu\xc3\xa1rio</option>\n                                <option value=\"2\">Administrador</option>\n                            </select>\n                        </div>\n                        </div>\n\n                    </div>\n                    <div class=\"modal-footer\">\n                        <button type=\"submit\" name=\"atualiza_usuarios\" style=\"color: white\" class=\"btn btn-success\">Editar</button></form>\n                        <button type=\"button\" style=\"color: white\" class=\"btn btn-secondary text-gray ms-auto\" data-bs-dismiss=\"modal\">Cancelar</button>\n                    </div>\n                </div>\n            </div>\n        </div>\n\n        <script>\n        \$(document).ready(function() {\n            \$('#modal-editar-usuario').modal('show');\n        });\n    </script>\n\n    ";
}
echo "\n";