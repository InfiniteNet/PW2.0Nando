<?php

$GLOBALS["vyfpbwhsmio"] = "pasta_velha";
$GLOBALS["ipsrfeninjzm"] = "nivel";
$GLOBALS["euoopnm"] = "pasta_nova";
$GLOBALS["yrbwvwds"] = "pasta";
$GLOBALS["fpfcewpqk"] = "dados";
$GLOBALS["orjhspfvks"] = "senha";
$GLOBALS["ogcivzvweep"] = "login";
$GLOBALS["hnkrsiyjghkl"] = "sql_titulo";
$GLOBALS["heubwl"] = "sql_altura";
$GLOBALS["mvdbbc"] = "sql_logo";
$GLOBALS["pwgkvrmkl"] = "link";
$GLOBALS["sldcmjffy"] = "largura";
$GLOBALS["ofdfkhguk"] = "altura";
$GLOBALS["tbcksdwvbg"] = "logo";
$GLOBALS["ellpeul"] = "dominio";
$GLOBALS["frnhfifri"] = "contato";
$GLOBALS["vjekjmpq"] = "fundoDoLogOnline";
$GLOBALS["zvcyghoekf"] = "fundoonline";
$GLOBALS["jultlfpc"] = "logoonline";
$GLOBALS["puycfdecfdx"] = "CorTexto";
$GLOBALS["uamtzzbq"] = "CorGeral";
$GLOBALS["gxtaopiwlpo"] = "CorUser";
$GLOBALS["soelnv"] = "update";
$GLOBALS["noogrkded"] = "pronto";
$GLOBALS["fsyemgbjc"] = "config";
$GLOBALS["wlcinqw"] = "uid";
$GLOBALS["dfrcryui"] = "path";
$GLOBALS["exwsrt"] = "busca";
$GLOBALS["jjgbphyxmoq"] = "acao";
$GLOBALS["dtdhslwkvtf"] = "sql";
$GLOBALS["onlvwqlcoxat"] = "sms";
$GLOBALS["qqdkthu"] = "porta";
$GLOBALS["bmminrxq"] = "proxyport";
$GLOBALS["kpkvlshe"] = "acao";
$GLOBALS["ukzwrycrx"] = "id";
$GLOBALS["jszsvudln"] = "acao";
$GLOBALS["aqxeingdsrc"] = "sslport";
$GLOBALS["pcuxqblkvpd"] = "flag";
$GLOBALS["toqyanokux"] = "nome";
$GLOBALS["idxjnxy"] = "id_owner";
require_once $_SERVER["DOCUMENT_ROOT"] . "/config/funcoes.php";
$GLOBALS["yziowse"] = "usip";
$GLOBALS["vwyxofyp"] = "acao";
$GLOBALS["lvunhlomxdw"] = "acao";
isLogged($sid);
if ($usip !== ipusuario()) {
    expulsaVisitante();
}
$GLOBALS["vxnxddjzeh"] = "acao";
if (${$GLOBALS["vwyxofyp"]} == "servidor") {
    if (isset($_POST["atualiza_servidor"])) {
        $GLOBALS["usirxsk"] = "id";
        $tsbqydocudpr = "tipo";
        $GLOBALS["seiuwnhjn"] = "checkuser";
        ${$GLOBALS["idxjnxy"]} = $_POST["id_owner"];
        $osievrznedbx = "serverip";
        ${$GLOBALS["usirxsk"]} = $_POST["id"];
        ${$GLOBALS["toqyanokux"]} = $_POST["nome"];
        ${$tsbqydocudpr} = $_POST["tipo"];
        ${$GLOBALS["pcuxqblkvpd"]} = $_POST["flag"];
        ${$osievrznedbx} = $_POST["serverip"];
        $GLOBALS["rxemkqfrhk"] = "serverport";
        ${$GLOBALS["seiuwnhjn"]} = $_POST["checkuser"];
        ${$GLOBALS["rxemkqfrhk"]} = $_POST["serverport"];
        ${$GLOBALS["aqxeingdsrc"]} = $_POST["sslport"];
        if (empty(${$GLOBALS["toqyanokux"]})) {
            echo "<script>\n    alert('Nome n\xc3\xa3o pode ficar vazio !');\n    window.location='/app.php';\n    </script>";
        } else {
            $rheqkceiwhf = "sql";
            $sql = $conn->prepare("UPDATE servidores SET id_owner='{$id_owner}', Name='{$nome}', TYPE='{$tipo}', FLAG='{$flag}', ServerIP='{$serverip}', CheckUser='{$checkuser}', ServerPort='{$serverport}', SSLPort='{$sslport}', USER='', PASS='' WHERE id='{$id}'");
            $sql->execute();
            echo "<script>\n        alert('Servidor editado com sucesso !');\n        window.location='/app.php';\n        </script>";
        }
    } else {
        header("location: /painel.php");
    }
} elseif (${$GLOBALS["jszsvudln"]} == "payload") {
    if (isset($_POST["atualiza_payload"])) {
        $cxjpct = "tlsip";
        ${$GLOBALS["idxjnxy"]} = $_POST["id_owner"];
        $xpbfgkl = "nome";
        $ohsfzbaq = "sni";
        ${$GLOBALS["ukzwrycrx"]} = $_POST["id"];
        ${$GLOBALS["toqyanokux"]} = $_POST["nome"];
        $bcqueqqvm = "payload";
        ${$GLOBALS["pcuxqblkvpd"]} = $_POST["flag"];
        ${$bcqueqqvm} = $_POST["pay"];
        $GLOBALS["uhbxtm"] = "proxyip";
        ${$ohsfzbaq} = $_POST["sni"];
        $GLOBALS["heilrwxphuzs"] = "info";
        ${$cxjpct} = $_POST["tlsip"];
        ${$GLOBALS["uhbxtm"]} = $_POST["proxyip"];
        ${$GLOBALS["bmminrxq"]} = $_POST["proxyport"];
        ${$GLOBALS["heilrwxphuzs"]} = $_POST["info"];
        if (empty(${$xpbfgkl})) {
            echo "<script>\n            alert('Nome n\xc3\xa3o pode ficar vazio !');\n            window.location='/app.php';\n            </script>";
        } else {
            $GLOBALS["lfyhvjhhfgnq"] = "sql";
            $sql = $conn->prepare("UPDATE payloads SET id_owner='{$id_owner}', Name='{$nome}', FLAG='{$flag}', Payload='{$payload}', SNI='{$sni}', TlsIP='{$tlsip}', ProxyIP='{$proxyip}', ProxyPort='{$proxyport}', Info='{$info}' WHERE id='{$id}'");
            $sql->execute();
            echo "<script>\n            alert('Payload editada com sucesso !');\n            window.location='/app.php';\n            </script>";
        }
    } else {
        header("location: /painel.php");
    }
} elseif (${$GLOBALS["vxnxddjzeh"]} == "porta") {
    if (isset($_POST["atualiza_porta"])) {
        $wdmoqojd = "id_owner";
        $csberftri = "porta";
        $GLOBALS["edeushdcec"] = "id";
        $id_owner = $_POST["id_owner"];
        $id = $_POST["id"];
        ${$GLOBALS["qqdkthu"]} = $_POST["porta"];
        if (empty(${$csberftri})) {
            echo "<script>\n                alert('Porta n\xc3\xa3o pode ficar vazio');\n                window.location='/app.php';\n                </script>";
        } else {
            $jhwkejcjw = "sql";
            $sql = $conn->prepare("UPDATE portas SET id_owner='{$id_owner}', Porta='{$porta}' WHERE id='{$id}'");
            $sql->execute();
            echo "<script>\n                alert('Porta editada com sucesso !');\n                window.location='/app.php';\n                </script>";
        }
    } else {
        header("location: /painel.php");
    }
} elseif (${$GLOBALS["lvunhlomxdw"]} == "sms") {
    if (isset($_POST["atualiza_sms"])) {
        $ggtfeouut = "busca";
        $GLOBALS["sbhsyqig"] = "path";
        $shtmqh = "uid";
        ${$GLOBALS["idxjnxy"]} = $_POST["id_owner"];
        ${$GLOBALS["onlvwqlcoxat"]} = $_POST["sms"];
        ${$ggtfeouut} = $conn->query("SELECT * FROM mensagens WHERE id_owner='{$id_owner}'");
        if ($busca->rowCount() > 0) {
            $elgmfyuc = "sql";
            $sql = $conn->query("UPDATE mensagens SET msg='{$sms}' WHERE id_owner='{$id_owner}'");
        } else {
            ${$GLOBALS["dtdhslwkvtf"]} = $conn->query("INSERT INTO mensagens SET id_owner='{$id_owner}', msg='{$sms}'");
        }
        $GLOBALS["fgwvxnvd"] = "busca";
        addSms(${$GLOBALS["idxjnxy"]});
        $GLOBALS["derfwvzv"] = "busca";
        $bapwmtdkpwpt = "config";
        $thwxcvjsuixl = "pronto";
        $busca = $conn->query("SELECT * FROM mensagens WHERE id_owner='{$id_owner}'")->fetch();
        $pronto = "{\"SendMessage\":\"" . ${$GLOBALS["exwsrt"]}["att"] . "\",\"MyMessage\":\"" . $busca["msg"] . "\"}";
        ${$GLOBALS["dfrcryui"]} = "update/" . getData("pasta_att", ${$GLOBALS["wlcinqw"]}) . "";
        if (!file_exists(${$GLOBALS["sbhsyqig"]})) {
            $GLOBALS["fhcdgfjbvg"] = "path";
            mkdir($path, 0777, true);
        }
        $istldfcezgg = "config";
        ${$bapwmtdkpwpt} = "update/" . getData("pasta_att", ${$shtmqh}) . "/sms";
        if (file_exists(${$istldfcezgg})) {
            $treduzt = "config";
            unlink($config);
        }
        file_put_contents(${$GLOBALS["fsyemgbjc"]}, ${$GLOBALS["noogrkded"]});
        echo "<script>\n        alert('SMS enviado com sucesso !');\n        window.location='/app.php';\n        </script>";
    } else {
        header("location: /painel.php");
    }
} elseif (${$GLOBALS["kpkvlshe"]} == "config") {
    if (isset($_POST["atualiza_config"])) {
        $GLOBALS["vrwpfljlfcc"] = "notas";
        ${$GLOBALS["idxjnxy"]} = $_POST["id_owner"];
        ${$GLOBALS["vrwpfljlfcc"]} = $_POST["notas"];
        $GLOBALS["xcoqcfkz"] = "sms";
        $GLOBALS["jjzqddys"] = "BackgroundLink2";
        $sms = "http://" . $_SERVER["HTTP_HOST"] . "/update/" . getData("pasta_att", ${$GLOBALS["wlcinqw"]}) . "/sms";
        $qsjqkhxrzic = "termos";
        ${$GLOBALS["soelnv"]} = "http://" . $_SERVER["HTTP_HOST"] . "/update/" . getData("pasta_att", ${$GLOBALS["wlcinqw"]}) . "/config";
        ${$GLOBALS["gxtaopiwlpo"]} = $_POST["CorUser"];
        $pygelciuh = "CorMenu";
        $zzvfxppshw = "email";
        ${$GLOBALS["uamtzzbq"]} = $_POST["CorGeral"];
        ${$pygelciuh} = $_POST["CorMenu"];
        ${$GLOBALS["puycfdecfdx"]} = $_POST["CorTexto"];
        ${$GLOBALS["jultlfpc"]} = $_POST["logoonline"];
        $uhfwjuen = "checkuser";
        ${$GLOBALS["zvcyghoekf"]} = $_POST["fundoonline"];
        ${$GLOBALS["vjekjmpq"]} = $_POST["fundoDoLogOnline"];
        ${$GLOBALS["jjzqddys"]} = $_POST["BackgroundLink2"];
        ${$zzvfxppshw} = $_POST["email"];
        ${$GLOBALS["frnhfifri"]} = $_POST["contato"];
        ${$qsjqkhxrzic} = $_POST["termos"];
        ${$uhfwjuen} = $_POST["checkuser"];
        ${$GLOBALS["dtdhslwkvtf"]} = $conn->query("SELECT * FROM configuracoes WHERE id_owner='{$id_owner}'");
        if ($sql->rowCount() == 0) {
            $GLOBALS["tupmsfmwios"] = "config";
            ${$GLOBALS["fsyemgbjc"]} = $conn->query("INSERT INTO configuracoes SET id_owner='{$id_owner}', notas='{$notas}', sms='{$sms}', att='{$update}', logoonline='{$logoonline}', fundoonline='{$fundoonline}', fundoDoLogOnline='{$fundoDoLogOnline}', BackgroundLink2='{$BackgroundLink2}', CorUser='{$CorUser}', CorGeral='{$CorGeral}', CorMenu='{$CorMenu}', CorTexto='{$CorTexto}', email='{$email}', contato='{$contato}', termos='{$termos}', checkuser='{$checkuser}'");
            if (${$GLOBALS["tupmsfmwios"]}) {
                echo "<script>\n            alert('Configura\xc3\xa7\xc3\xb5es editadas com sucesso !');\n            window.location='/app.php';\n            </script>";
            }
        } elseif ($sql->rowCount() == 1) {
            $qocdqn = "config";
            $GLOBALS["ligkcr"] = "config";
            $config = $conn->query("UPDATE configuracoes SET notas='{$notas}', sms='{$sms}', att='{$update}', logoonline='{$logoonline}', fundoonline='{$fundoonline}', fundoDoLogOnline='{$fundoDoLogOnline}', BackgroundLink2='{$BackgroundLink2}', CorUser='{$CorUser}', CorGeral='{$CorGeral}', CorMenu='{$CorMenu}', CorTexto='{$CorTexto}', email='{$email}', contato='{$contato}', termos='{$termos}', checkuser='{$checkuser}' WHERE id_owner='{$id_owner}'");
            if ($config) {
                echo "<script>\n            alert('Configura\xc3\xa7\xc3\xb5es editadas com sucesso !');\n            window.location='/app.php';\n            </script>";
            }
        }
    } else {
        header("location: /painel.php");
    }
} elseif (${$GLOBALS["jjgbphyxmoq"]} == "site") {
    $szyejqf = "uid";
    if (getAdm($uid) == false) {
        header("location: /painel.php");
    }
    if (isset($_POST["atualiza_site"])) {
        $rjsjnkmivk = "sql_titulo";
        $mwapptqk = "titulo";
        $GLOBALS["dsenjwqsu"] = "sql_largura";
        $kpnmlinw = "sql_link";
        ${$GLOBALS["ellpeul"]} = $_SERVER["HTTP_HOST"];
        ${$GLOBALS["tbcksdwvbg"]} = $_POST["logo"];
        ${$GLOBALS["ofdfkhguk"]} = $_POST["altura"];
        ${$GLOBALS["sldcmjffy"]} = $_POST["largura"];
        ${$GLOBALS["pwgkvrmkl"]} = $_POST["link"];
        ${$mwapptqk} = $_POST["titulo"];
        ${$GLOBALS["mvdbbc"]} = $conn->query("UPDATE configs SET valor='{$logo}' WHERE nome='logo'");
        ${$GLOBALS["heubwl"]} = $conn->query("UPDATE configs SET valor='{$altura}' WHERE nome='altura'");
        ${$GLOBALS["dsenjwqsu"]} = $conn->query("UPDATE configs SET valor='{$largura}' WHERE nome='largura'");
        ${$kpnmlinw} = $conn->query("UPDATE configs SET valor='http://{$dominio}' WHERE nome='link'");
        ${$rjsjnkmivk} = $conn->query("UPDATE configs SET valor='{$titulo}' WHERE nome='titulo'");
        if (${$GLOBALS["hnkrsiyjghkl"]}) {
            echo "<script>\n        alert('Configura\xc3\xa7\xc3\xb5es do site editadas com sucesso !');\n        window.location='/painel.php';\n        </script>";
        }
    } else {
        header("location: /painel.php");
    }
} elseif (${$GLOBALS["jszsvudln"]} == "dados") {
    $qkmcwchfwd = "acao";
    if ($_POST["nome"]) {
        $umytpcgthwv = "nome";
        ${$GLOBALS["toqyanokux"]} = $_POST["nome"];
        ${$GLOBALS["dtdhslwkvtf"]} = $conn->query("SELECT * FROM usuarios WHERE nome='{$nome}'")->rowCount();
        if (${$GLOBALS["dtdhslwkvtf"]} > 0) {
            echo "<script>\n                alert('Este nome de usu\xc3\xa1rio j\xc3\xa1 est\xc3\xa1 em uso !');\n                window.location='/perfil.php';\n                </script>";
        } elseif (empty(${$umytpcgthwv})) {
            echo "<script>\n        alert('O nome n\xc3\xa3o pode ficar vazio !');\n        window.location='/perfil.php';\n        </script>";
        } else {
            $GLOBALS["nkyapjh"] = "sql";
            $sql = $conn->query("UPDATE usuarios SET nome='{$nome}' WHERE id='" . getIdBySid($sid) . "'");
            echo "<script>\n                alert('Nome atualizado com sucesso !');\n                window.location='/perfil.php';\n                </script>";
        }
    } elseif ($_POST["login"]) {
        $mptfkp = "login";
        $login = $_POST["login"];
        ${$GLOBALS["dtdhslwkvtf"]} = $conn->query("SELECT * FROM usuarios WHERE login='{$login}'")->rowCount();
        if (${$GLOBALS["dtdhslwkvtf"]} > 0) {
            echo "<script>\n                alert('Este login de usu\xc3\xa1rio j\xc3\xa1 est\xc3\xa1 em uso !');\n                window.location='/perfil.php';\n                </script>";
        } elseif (empty(${$GLOBALS["ogcivzvweep"]})) {
            echo "<script>\n        alert('O login n\xc3\xa3o pode ficar vazio !');\n        window.location='/perfil.php';\n        </script>";
        } else {
            ${$GLOBALS["dtdhslwkvtf"]} = $conn->query("UPDATE usuarios SET login='{$login}' WHERE id='" . getIdBySid($sid) . "'");
            echo "<script>\n                alert('Login atualizado com sucesso !');\n                window.location='/perfil.php';\n                </script>";
        }
    } elseif ($_POST["senha"]) {
        ${$GLOBALS["orjhspfvks"]} = $_POST["senha"];
        ${$GLOBALS["orjhspfvks"]} = md5(${$GLOBALS["orjhspfvks"]});
        if (empty(${$GLOBALS["orjhspfvks"]})) {
            echo "<script>\n        alert('A senha n\xc3\xa3o pode ficar em branco !');\n        window.location='/perfil.php';\n        </script>";
        } else {
            ${$GLOBALS["dtdhslwkvtf"]} = $conn->query("UPDATE usuarios SET senha='{$senha}' WHERE id='" . getIdBySid($sid) . "'");
            echo "<script>\n                    alert('Senha atualizada com sucesso !');\n                    window.location='/perfil.php';\n                    </script>";
        }
    } elseif ($_POST["pasta"]) {
        $GLOBALS["fkespze"] = "contar";
        $rbdmfljk = "pasta";
        $GLOBALS["yitgthml"] = "contar";
        $pasta = $_POST["pasta"];
        ${$GLOBALS["dtdhslwkvtf"]} = $conn->query("SELECT * FROM usuarios WHERE pasta_att='{$pasta}'");
        ${$GLOBALS["fkespze"]} = $sql->rowCount();
        $GLOBALS["jfdjfdm"] = "uid";
        ${$GLOBALS["fpfcewpqk"]} = $sql->fetch(PDO::FETCH_ASSOC);
        if (${$GLOBALS["yitgthml"]} > 0 && ${$GLOBALS["fpfcewpqk"]}["id"] != ${$GLOBALS["jfdjfdm"]}) {
            echo "<script>\n        alert('Esta pasta j\xc3\xa1 est\xc3\xa1 em uso !');\n        window.location='/perfil.php';\n        </script>";
        } elseif (empty(${$GLOBALS["yrbwvwds"]})) {
            echo "<script>\n        alert('O nome da pasta n\xc3\xa3o pode ficar vazio !');\n        window.location='/perfil.php';\n        </script>";
        } else {
            $lknxwkorjfhp = "pasta_velha";
            $GLOBALS["dmjwxi"] = "pasta_velha";
            $pasta_velha = "update/" . $_POST["pasta_velha"];
            $psolgtobvh = "sms";
            $cysxzrtw = "pasta_nova";
            ${$GLOBALS["euoopnm"]} = "update/" . $_POST["pasta"];
            rename(${$GLOBALS["dmjwxi"]}, ${$cysxzrtw});
            ${$psolgtobvh} = getConfig("link") . "/update/" . $_POST["pasta"] . "/sms";
            ${$GLOBALS["soelnv"]} = getConfig("link") . "/update/" . $_POST["pasta"] . "/config";
            $conn->query("UPDATE configuracoes SET att='{$update}', sms='{$sms}' WHERE id_owner='" . getIdBySid($sid) . "'");
            ${$GLOBALS["dtdhslwkvtf"]} = $conn->query("UPDATE usuarios SET pasta_att='{$pasta}' WHERE id='" . getIdBySid($sid) . "'");
            echo "<script>\n        alert('Pasta atualizada com sucesso !');\n        window.location='/perfil.php';\n        </script>";
        }
    } elseif (${$qkmcwchfwd} == "usuarios") {
        if (getAdm(${$GLOBALS["wlcinqw"]}) == false) {
            header("location: /painel.php");
        }
        if (isset($_POST["atualiza_usuarios"])) {
            ${$GLOBALS["ukzwrycrx"]} = $_POST["id"];
            $GLOBALS["uiechetoe"] = "login";
            ${$GLOBALS["toqyanokux"]} = $_POST["nome"];
            ${$GLOBALS["uiechetoe"]} = $_POST["login"];
            $gigwvgztqt = "senha";
            ${$GLOBALS["orjhspfvks"]} = $_POST["senha"];
            ${$GLOBALS["ipsrfeninjzm"]} = $_POST["nivel"];
            if (empty(${$gigwvgztqt})) {
                $GLOBALS["rpprkxoyth"] = "sql";
                $sqriazavs = "sms";
                ${$GLOBALS["dtdhslwkvtf"]} = $conn->query("UPDATE usuarios SET nome='{$nome}', login='{$login}', nivel='{$nivel}', pasta_att='" . $_POST["pasta_nova"] . "' WHERE id='{$id}'");
                $pogseijyzp = "id";
                $xyenbobd = "pasta_nova";
                ${$GLOBALS["vyfpbwhsmio"]} = "update/" . $_POST["pasta_velha"];
                ${$GLOBALS["euoopnm"]} = "update/" . $_POST["pasta_nova"];
                rename(${$GLOBALS["vyfpbwhsmio"]}, ${$xyenbobd});
                ${$sqriazavs} = getConfig("link") . "/update/" . getData("pasta_att", ${$GLOBALS["ukzwrycrx"]}) . "/sms";
                ${$GLOBALS["soelnv"]} = getConfig("link") . "/update/" . getData("pasta_att", ${$pogseijyzp}) . "/config";
                $conn->query("UPDATE configuracoes SET att='{$update}', sms='{$sms}' WHERE id_owner='{$id}");
                if (${$GLOBALS["rpprkxoyth"]}) {
                    echo "<script>\n            alert('Usu\xc3\xa1rio editado com sucesso !');\n            window.location='/usuarios.php';\n            </script>";
                }
            } else {
                $frcmqeu = "senha";
                $GLOBALS["qrkqkau"] = "id";
                $trnhblx = "pasta_velha";
                $senha = md5(${$GLOBALS["orjhspfvks"]});
                ${$GLOBALS["dtdhslwkvtf"]} = $conn->query("UPDATE usuarios SET nome='{$nome}', login='{$login}', senha='{$senha}', nivel='{$nivel}', pasta_att='" . $_POST["pasta_nova"] . "' WHERE id='{$id}'");
                $GLOBALS["cbosnkrqrly"] = "sql";
                ${$trnhblx} = "update/" . $_POST["pasta_velha"];
                ${$GLOBALS["euoopnm"]} = "update/" . $_POST["pasta_nova"];
                rename(${$GLOBALS["vyfpbwhsmio"]}, ${$GLOBALS["euoopnm"]});
                ${$GLOBALS["onlvwqlcoxat"]} = getConfig("link") . "/update/" . getData("pasta_att", ${$GLOBALS["qrkqkau"]}) . "/sms";
                ${$GLOBALS["soelnv"]} = getConfig("link") . "/update/" . getData("pasta_att", ${$GLOBALS["ukzwrycrx"]}) . "/config";
                $conn->query("UPDATE configuracoes SET att='{$update}', sms='{$sms}' WHERE id_owner='{$id}'");
                if (${$GLOBALS["cbosnkrqrly"]}) {
                    echo "<script>\n            alert('Senha do usu\xc3\xa1rio atualizada com sucesso !');\n            window.location='/usuarios.php';\n            </script>";
                }
            }
        } else {
            header("location: /painel.php");
        }
    } else {
        header("location: /painel.php");
    }
}
