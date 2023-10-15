<?php

$GLOBALS["yesjar"] = "senha";
$GLOBALS["yupmvwbhj"] = "pasta";
$GLOBALS["ffcwmliu"] = "proxyport";
$GLOBALS["wibrfmmoewc"] = "i";
$GLOBALS["birbuxigaul"] = "qtd";
$GLOBALS["ewhnqg"] = "obj";
$GLOBALS["vnhrtgnlgw"] = "json";
$GLOBALS["ycswpgnwlcps"] = "porta";
$GLOBALS["lahgwbry"] = "id_owner";
$GLOBALS["qcepywkktcvu"] = "acao";
$GLOBALS["feusginz"] = "nome";
$GLOBALS["uxqeonovy"] = "proxyip";
$GLOBALS["kmhqgcaoo"] = "tlsip";
$GLOBALS["bfezhsybkl"] = "payload";
$GLOBALS["rftotizdki"] = "sql";
$GLOBALS["vuxtptmjq"] = "sslport";
$GLOBALS["acacshnoe"] = "checkuser";
$GLOBALS["remedtdqz"] = "flag";
$yrnshne = "acao";
$GLOBALS["dvbhhtibyy"] = "tipo";
require_once $_SERVER["DOCUMENT_ROOT"] . "/config/funcoes.php";
isLogged($sid);
$GLOBALS["frhbwlwssfh"] = "acao";
$GLOBALS["jtfxflnjovbn"] = "usip";
if ($usip !== ipusuario()) {
    expulsaVisitante();
}
if (${$GLOBALS["frhbwlwssfh"]} == "servidor") {
    if (isset($_POST["adicionar_servidor"])) {
        $rvuylnyggqff = "serverip";
        $GLOBALS["zdiqhxffjg"] = "nome";
        $yuvkndxovd = "id_owner";
        $id_owner = $_POST["id_owner"];
        $nome = $_POST["nome"];
        $GLOBALS["vhcysg"] = "serverport";
        ${$GLOBALS["dvbhhtibyy"]} = $_POST["tipo"];
        ${$GLOBALS["remedtdqz"]} = $_POST["flag"];
        ${$rvuylnyggqff} = $_POST["serverip"];
        ${$GLOBALS["acacshnoe"]} = $_POST["checkuser"];
        $GLOBALS["nffqyoelkm"] = "nome";
        ${$GLOBALS["vhcysg"]} = $_POST["serverport"];
        ${$GLOBALS["vuxtptmjq"]} = $_POST["sslport"];
        ${$GLOBALS["rftotizdki"]} = $conn->query("SELECT * FROM servidores WHERE Name='{$nome}' AND id_owner='{$id_owner}'")->rowCount();
        if (${$GLOBALS["rftotizdki"]} > 0) {
            echo "<script>\n            alert('J\xc3\xa1 existe um servidor com esse nome !');\n            window.location='/app.php';\n            </script>";
        } elseif (empty(${$GLOBALS["nffqyoelkm"]})) {
            echo "<script>\n            alert('Nome n\xc3\xa3o pode ficar vazio !');\n            window.location='/app.php';\n            </script>";
        } else {
            $GLOBALS["nbbkrlbil"] = "sql";
            $sql = $conn->prepare("INSERT INTO servidores SET id_owner='{$id_owner}', Name='{$nome}', TYPE='{$tipo}', FLAG='{$flag}', ServerIP='{$serverip}', CheckUser='{$checkuser}', ServerPort='{$serverport}', SSLPort='{$sslport}', USER='', PASS=''");
            $sql->execute();
            echo "<script>\n            alert('Servidor adicionado com sucesso !');\n            window.location='/app.php';\n            </script>";
        }
    } else {
        header("location: /");
    }
} elseif (${$yrnshne} == "payload") {
    if (isset($_POST["adicionar_payload"])) {
        $GLOBALS["ndhpicvbtkor"] = "id_owner";
        $GLOBALS["sakhsfp"] = "sql";
        $odzxzmmrbzhe = "flag";
        $id_owner = $_POST["id_owner"];
        $GLOBALS["jqmgvntju"] = "nome";
        $nome = $_POST["nome"];
        $flag = $_POST["flag"];
        $qlebgceiqq = "proxyport";
        $fbqmgfvnbxxg = "sni";
        $GLOBALS["gtrccatg"] = "sql";
        $wsvtghibodvv = "info";
        ${$GLOBALS["bfezhsybkl"]} = $_POST["pay"];
        ${$fbqmgfvnbxxg} = $_POST["sni"];
        ${$GLOBALS["kmhqgcaoo"]} = $_POST["tlsip"];
        ${$GLOBALS["uxqeonovy"]} = $_POST["proxyip"];
        ${$qlebgceiqq} = $_POST["proxyport"];
        ${$wsvtghibodvv} = $_POST["info"];
        ${$GLOBALS["gtrccatg"]} = $conn->query("SELECT * FROM payloads WHERE Name='{$nome}' AND id_owner='{$id_owner}'")->rowCount();
        if (${$GLOBALS["sakhsfp"]} > 0) {
            echo "<script>\n            alert('J\xc3\xa1 existe uma payload com esse nome !');\n            window.location='/app.php';\n            </script>";
        } elseif (empty(${$GLOBALS["feusginz"]})) {
            echo "<script>\n            alert('Nome n\xc3\xa3o pode ficar vazio !');\n            window.location='/app.php';\n            </script>";
        } else {
            $zwkaylsf = "sql";
            $sql = $conn->prepare("INSERT INTO payloads SET id_owner='{$id_owner}', Name='{$nome}', FLAG='{$flag}', Payload='{$payload}', SNI='{$sni}', TlsIP='{$tlsip}', ProxyIP='{$proxyip}', ProxyPort='{$proxyport}', Info='{$info}'");
            $sql->execute();
            echo "<script>\n            alert('Payload adicionada com sucesso !');\n            window.location='/app.php';\n            </script>";
        }
    } else {
        header("location: /painel.php");
    }
} elseif (${$GLOBALS["qcepywkktcvu"]} == "porta") {
    if (isset($_POST["adicionar_porta"])) {
        ${$GLOBALS["lahgwbry"]} = $_POST["id_owner"];
        $mhkwuvgnhi = "porta";
        $GLOBALS["sdemze"] = "sql";
        $porta = $_POST["porta"];
        ${$GLOBALS["rftotizdki"]} = $conn->query("SELECT * FROM portas WHERE Porta='{$porta}' AND id_owner='{$id_owner}'")->rowCount();
        if (${$GLOBALS["sdemze"]} > 0) {
            echo "<script>\n            alert('Essa porta j\xc3\xa1 existe !');\n            window.location='/app.php';\n            </script>";
        } elseif (empty(${$GLOBALS["ycswpgnwlcps"]})) {
            echo "<script>\n            alert('Porta n\xc3\xa3o pode ficar vazio !');\n            window.location='/app.php';\n            </script>";
        } else {
            ${$GLOBALS["rftotizdki"]} = $conn->prepare("INSERT INTO portas SET id_owner='{$id_owner}', Porta='{$porta}'");
            $sql->execute();
            echo "<script>\n            alert('Porta adicionada com sucesso !');\n            window.location='/app.php';\n            </script>";
        }
    } else {
        header("location: /painel.php");
    }
} elseif (${$GLOBALS["qcepywkktcvu"]} == "dellall") {
    if (isset($_POST["delete_all"])) {
        $inqmlgbynhk = "id_owner";
        $id_owner = $_POST["id_owner"];
        ${$GLOBALS["rftotizdki"]} = $conn->query("DELETE FROM payloads WHERE id_owner = '{$id_owner}'");
        echo "<script>\n            alert('Todas as payloads foram exclu\xc3\xaddas!');\n            window.location='/app.php';\n            </script>";
    } else {
        header("location: /painel.php");
    }
} elseif (${$GLOBALS["qcepywkktcvu"]} == "multi") {
    if (isset($_POST["adicionar_multi"])) {
        $GLOBALS["bvituo"] = "texto";
        $jnnqseyij = "texto";
        ${$GLOBALS["lahgwbry"]} = $_POST["id_owner"];
        ${$jnnqseyij} = $_POST["texto"];
        if (empty(${$GLOBALS["bvituo"]})) {
            echo "<script>\n                alert('As payloads n\xc3\xa3o podem ficar vazias !');\n                window.location='/app.php';\n                </script>";
        } else {
            $gqdlme = "json";
            $xwhmsugidj = "texto";
            ${$GLOBALS["vnhrtgnlgw"]} = "[\n                    " . $texto . "\n                  ]\n                ";
            ${$GLOBALS["ewhnqg"]} = json_decode(${$gqdlme}, true);
            ${$GLOBALS["birbuxigaul"]} = count(${$GLOBALS["ewhnqg"]});
            if (${$GLOBALS["birbuxigaul"]} <= 0) {
                echo "<script>\n                alert('Erro de syntax nas payloads !');\n                window.location='/app.php';\n                </script>";
            } else {
                $yjyoycpfiy = "i";
                $GLOBALS["rshqcxbh"] = "qtd";
                $GLOBALS["jyqvrcpdi"] = "i";
                for ($i = 0; ${$yjyoycpfiy} < ${$GLOBALS["rshqcxbh"]}; ${$GLOBALS["wibrfmmoewc"]}++) {
                    $oeckemkrokd = "obj";
                    $kbmetxn = "obj";
                    $GLOBALS["tksleddtq"] = "obj";
                    $dbpleicyvukd = "payload";
                    $oaexyjtihwsw = "sni";
                    $GLOBALS["wfefvoh"] = "flag";
                    $GLOBALS["czlprxm"] = "i";
                    $GLOBALS["vnkwfnchjgq"] = "i";
                    ${$GLOBALS["feusginz"]} = ${$GLOBALS["ewhnqg"]}[$i]["Name"];
                    ${$GLOBALS["wfefvoh"]} = ${$GLOBALS["ewhnqg"]}[${$GLOBALS["wibrfmmoewc"]}]["FLAG"];
                    ${$dbpleicyvukd} = ${$GLOBALS["ewhnqg"]}[${$GLOBALS["wibrfmmoewc"]}]["Payload"];
                    $nbyzmlnojh = "i";
                    ${$oaexyjtihwsw} = ${$oeckemkrokd}[${$GLOBALS["wibrfmmoewc"]}]["SNI"];
                    $GLOBALS["hipdiwunftl"] = "info";
                    ${$GLOBALS["kmhqgcaoo"]} = ${$GLOBALS["ewhnqg"]}[${$GLOBALS["wibrfmmoewc"]}]["TlsIP"];
                    ${$GLOBALS["uxqeonovy"]} = ${$kbmetxn}[${$GLOBALS["vnkwfnchjgq"]}]["ProxyIP"];
                    ${$GLOBALS["ffcwmliu"]} = ${$GLOBALS["ewhnqg"]}[${$nbyzmlnojh}]["ProxyPort"];
                    ${$GLOBALS["hipdiwunftl"]} = ${$GLOBALS["tksleddtq"]}[${$GLOBALS["wibrfmmoewc"]}]["Info"];
                    $conn->query("INSERT INTO payloads SET id_owner='{$id_owner}', Name='{$nome}', FLAG='{$flag}', Payload='{$payload}', SNI='{$sni}', TlsIP='{$tlsip}', ProxyIP='{$proxyip}', ProxyPort='{$proxyport}', Info='{$info}'");
                }
                echo "<script>\n                alert('Payloads adicionadas com sucesso !');\n                window.location='/app.php';\n                </script>";
            }
        }
    } else {
        header("location: /painel.php");
    }
} elseif (${$GLOBALS["qcepywkktcvu"]} == "usuario") {
    $GLOBALS["vvcsyglex"] = "uid";
    if (getOwner($uid) == false) {
        header("location: /painel.php");
    }
    if (isset($_POST["adicionar_usuario"])) {
        $essasmvlagu = "login";
        $mekykqco = "pasta";
        ${$GLOBALS["feusginz"]} = $_POST["nome"];
        $mdgvobmfzq = "pasta";
        ${$essasmvlagu} = $_POST["login"];
        $GLOBALS["jgikwjthxm"] = "senha";
        $senha = $_POST["senha"];
        ${$mekykqco} = $_POST["pasta_nova"];
        if (empty(${$mdgvobmfzq})) {
            $GLOBALS["qbaqvjdacws"] = "login";
            ${$GLOBALS["yupmvwbhj"]} = $login;
        }
        ${$GLOBALS["rftotizdki"]} = $conn->query("SELECT * FROM usuarios WHERE login='{$login}'");
        if ($sql->rowCount() > 0) {
            echo "<script>\n            alert('J\xc3\xa1 existe um usu\xc3\xa1rio com esse login !');\n            window.location='/adicionar.php';\n            </script>";
        } else {
            ${$GLOBALS["yesjar"]} = md5(${$GLOBALS["yesjar"]});
            ${$GLOBALS["rftotizdki"]} = $conn->query("INSERT INTO usuarios SET nome='{$nome}', login='{$login}', senha='{$senha}', pasta_att='{$pasta}'");
            if (${$GLOBALS["rftotizdki"]}) {
                echo "<script>\n                alert('Usu\xc3\xa1rio adicionado com sucesso !');\n                window.location='/adicionar.php';\n                </script>";
            }
        }
    } else {
        header("location: /painel.php");
    }
} else {
    header("location: /painel.php");
}
