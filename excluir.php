<?php

$GLOBALS["wwrjftl"] = "pasta";
$GLOBALS["taqowrwnxsyg"] = "id";
$GLOBALS["xxtlaqbbr"] = "acao";
$GLOBALS["iqyglhonom"] = "sql";
$GLOBALS["igojjb"] = "id_owner";
require_once $_SERVER["DOCUMENT_ROOT"] . "/config/funcoes.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/modais.php";
$ihxmqe = "acao";
$GLOBALS["jupigvikkno"] = "usip";
$GLOBALS["ivjwkjpw"] = "acao";
isLogged($sid);
if ($usip !== ipusuario()) {
    expulsaVisitante();
}
if (${$ihxmqe} == "servidor") {
    if (isset($_POST["excluir_servidor"])) {
        $qrppdyfpuuwn = "id";
        $id = $_POST["id"];
        ${$GLOBALS["igojjb"]} = $_POST["id_owner"];
        ${$GLOBALS["iqyglhonom"]} = $conn->query("DELETE FROM servidores WHERE id='{$id}' AND id_owner='{$id_owner}'");
        if (${$GLOBALS["iqyglhonom"]}) {
            echo "<script>\n    alert('Servidor excluido com sucesso !');\n    window.location='/app.php';\n    </script>";
        } else {
            echo "<script>\n        alert('Falha ao excluir servidor !');\n        window.location='/app.php';\n        </script>";
        }
    } else {
        header("location: /painel.php");
    }
} elseif (${$GLOBALS["xxtlaqbbr"]} == "payload") {
    if (isset($_POST["excluir_payload"])) {
        $GLOBALS["sroklkeawuhf"] = "sql";
        $zswnxdkm = "id_owner";
        ${$GLOBALS["taqowrwnxsyg"]} = $_POST["id"];
        ${$zswnxdkm} = $_POST["id_owner"];
        $zkuumokgae = "sql";
        $sql = $conn->query("DELETE FROM payloads WHERE id='{$id}' AND id_owner='{$id_owner}'");
        if (${$GLOBALS["sroklkeawuhf"]}) {
            echo "<script>\n            alert('Payload excluida com sucesso !');\n            window.location='/app.php';\n            </script>";
        } else {
            echo "<script>\n                alert('Falha ao excluir Payload !');\n                window.location='/app.php';\n                </script>";
        }
    } else {
        header("location: /painel.php");
    }
} elseif (${$GLOBALS["ivjwkjpw"]} == "porta") {
    if (isset($_POST["excluir_porta"])) {
        $yckybic = "id";
        $id = $_POST["id"];
        $ujqypptgb = "sql";
        ${$GLOBALS["igojjb"]} = $_POST["id_owner"];
        ${$ujqypptgb} = $conn->query("DELETE FROM portas WHERE id='{$id}' AND id_owner='{$id_owner}'");
        if (${$GLOBALS["iqyglhonom"]}) {
            echo "<script>\n                alert('Porta excluida com sucesso !');\n                window.location='/app.php';\n                </script>";
        } else {
            echo "<script>\n                    alert('Falha ao excluir Porta !');\n                    window.location='/app.php';\n                    </script>";
        }
    } else {
        header("location: /painel.php");
    }
} elseif (${$GLOBALS["xxtlaqbbr"]} == "usuario") {
    $GLOBALS["sngdtrymrv"] = "uid";
    if (getOwner($uid) == false) {
        header("location: /painel.php");
    }
    if (isset($_GET["id"])) {
        $GLOBALS["vjklkexpg"] = "sql";
        $GLOBALS["pokexlwas"] = "sql";
        ${$GLOBALS["taqowrwnxsyg"]} = $_GET["id"];
        ${$GLOBALS["wwrjftl"]} = getData("pasta_att", ${$GLOBALS["taqowrwnxsyg"]});
        ${$GLOBALS["vjklkexpg"]} = $conn->query("SELECT nivel FROM usuarios WHERE id='{$id}'")->fetch();
        if (${$GLOBALS["pokexlwas"]}[0] >= 3) {
            echo "<script>\n            alert('Voc\xc3\xaa n\xc3\xa3o pode excluir o dono do site !');\n            window.location='/adicionar.php';\n            </script>";
        } else {
            $conn->query("DELETE FROM usuarios WHERE id='{$id}'");
            $conn->query("DELETE FROM configuracoes WHERE id_owner='{$id}'");
            $qdtwamo = "sql";
            $conn->query("DELETE FROM servidores WHERE id_owner='{$id}'");
            $conn->query("DELETE FROM payloads WHERE id_owner='{$id}'");
            $conn->query("DELETE FROM portas WHERE id_owner='{$id}'");
            $sql = $conn->query("DELETE FROM mensagens WHERE id_owner='{$id}'");
            delTree("update/{$pasta}");
            if (${$GLOBALS["iqyglhonom"]}) {
                echo "<script>\n                    alert('Usu\xc3\xa1rio excluido com sucesso !');\n                    window.location='/adicionar.php';\n                    </script>";
            } else {
                echo "<script>\n                        alert('Falha ao excluir usu\xc3\xa1rio !');\n                        window.location='/adicionar.php';\n                        </script>";
            }
        }
    } else {
        header("location: /painel.php");
    }
}
