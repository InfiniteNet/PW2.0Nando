<?php

$GLOBALS["vpmdkqyk"] = "addvalidade";
$GLOBALS["ttxwwj"] = "InsertAcesso";
$GLOBALS["tdovpwumi"] = "add";
$GLOBALS["ondokohwb"] = "validadeatual";
$GLOBALS["yycmbil"] = "notins";
$GLOBALS["onhoitqn"] = "server";
$GLOBALS["efqeevdipbt"] = "msg";
$GLOBALS["msuzqtsbm"] = "SQLserver";
$GLOBALS["utyubv"] = "soma";
$GLOBALS["xavgplac"] = "acessos";
$GLOBALS["tbcqnwlwzvcy"] = "SQLSubSSH";
$GLOBALS["ebpdmzp"] = "row";
$GLOBALS["scqupxnd"] = "SQLContasSSH";
$GLOBALS["gfyeaov"] = "contas_ssh_criadas";
$GLOBALS["dpymwin"] = "limite_servidor";
$GLOBALS["hhceqqfvybw"] = "remove";
$GLOBALS["ntbkcd"] = "servido";
$GLOBALS["xsjwdlgkq"] = "SQLAcesso";
require_once "../../../pages/system/seguranca.php";
require_once "../../../pages/system/config.php";
protegePagina("donoadmin");
if (isset($_POST["val"]) and isset($_POST["usuario"]) and $_POST["servidor"] != 0) {
    $GLOBALS["tflxibflbw"] = "SQLAcesso";
    if (!is_numeric($_POST["val"])) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Somente valores numericos!\");";
        echo "window.location=\"../../home.php?page=usuario/perfil&id_usuario=" . $_POST["usuario"] . " \";";
        echo "</script>";
        exit;
    }
    $GLOBALS["agjtdlyhj"] = "SQLAcesso";
    ${$GLOBALS["xsjwdlgkq"]} = "select * from acesso_servidor WHERE id_acesso_servidor = '" . $_POST["servidor"] . "' and id_usuario='" . $_POST["usuario"] . "'";
    ${$GLOBALS["tflxibflbw"]} = $conn->prepare(${$GLOBALS["agjtdlyhj"]});
    $SQLAcesso->execute();
    if ($SQLAcesso->rowCount() <= 0) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"O Cliente n\xc3\xa3o possui este servidor!\");";
        echo "window.location=\"../../home.php?page=usuario/listar\";";
        echo "</script>";
    } else {
        $GLOBALS["wztkdrmldj"] = "postacesso";
        ${$GLOBALS["ntbkcd"]} = $SQLAcesso->fetch();
        ${$GLOBALS["wztkdrmldj"]} = $_POST["acesso"];
        ${$GLOBALS["hhceqqfvybw"]} = $_POST["racesso"];
        $xxisokhjch = "postacesso";
        if (!is_numeric($postacesso)) {
            echo "<script type=\"text/javascript\">";
            echo "alert(\"Numero de acesso invalido!\");";
            echo "window.location=\"../../home.php?page=usuario/listar\";";
            echo "</script>";
            exit;
        }
        if (!is_numeric(${$GLOBALS["hhceqqfvybw"]})) {
            echo "<script type=\"text/javascript\">";
            echo "alert(\"Numero de acesso invalido!\");";
            echo "window.location=\"../../home.php?page=usuario/listar\";";
            echo "</script>";
            exit;
        }
        if (${$GLOBALS["hhceqqfvybw"]} > 0) {
            $wqppvuexj = "servido";
            $ecxarogmcndl = "SQLUsuarioSub";
            $spdtkjqk = "acessos";
            $qsqrasoqrw = "servido";
            ${$GLOBALS["dpymwin"]} = $servido["qtd"];
            $rwxemgyhy = "SQLContasSSH";
            $yblgfzwetdd = "server";
            $GLOBALS["tqicetj"] = "notins";
            ${$spdtkjqk} = ${$GLOBALS["hhceqqfvybw"]};
            ${$GLOBALS["gfyeaov"]} = 0;
            ${$GLOBALS["scqupxnd"]} = "SELECT sum(acesso) AS quantidade  FROM conta_ssh where id_servidor = '" . ${$GLOBALS["ntbkcd"]}["id_servidor"] . "' and id_usuario='" . $_POST["usuario"] . "' ";
            ${$rwxemgyhy} = $conn->prepare(${$GLOBALS["scqupxnd"]});
            $GLOBALS["zajmcy"] = "notins";
            $tydlyi = "SQLContasSSH";
            $SQLContasSSH->execute();
            ${$GLOBALS["scqupxnd"]} = $SQLContasSSH->fetch();
            $GLOBALS["ssipknvq"] = "SQLUsuarioSub";
            ${$GLOBALS["gfyeaov"]} += ${$tydlyi}["quantidade"];
            $GLOBALS["kjzbxvsv"] = "SQLUsuarioSub";
            ${$ecxarogmcndl} = "SELECT * FROM usuario WHERE id_mestre ='" . $_POST["usuario"] . "'";
            $GLOBALS["sbmjsosu"] = "contas_ssh_criadas";
            $GLOBALS["knpctgi"] = "InsertAcesso";
            ${$GLOBALS["kjzbxvsv"]} = $conn->prepare(${$GLOBALS["ssipknvq"]});
            $idwovfubdi = "addvalidade";
            $SQLUsuarioSub->execute();
            if ($SQLUsuarioSub->rowCount() > 0) {
                while (${$GLOBALS["ebpdmzp"]} = $SQLUsuarioSub->fetch()) {
                    $ijplhskxpy = "SQLSubSSH";
                    $xpjrmlps = "servido";
                    $GLOBALS["prrxjyibfvp"] = "row";
                    ${$GLOBALS["tbcqnwlwzvcy"]} = "select sum(acesso) AS quantidade  from conta_ssh WHERE id_usuario = '" . $row["id_usuario"] . "' and id_servidor='" . $servido["id_servidor"] . "' ";
                    ${$ijplhskxpy} = $conn->prepare(${$GLOBALS["tbcqnwlwzvcy"]});
                    $SQLSubSSH->execute();
                    ${$GLOBALS["tbcqnwlwzvcy"]} = $SQLSubSSH->fetch();
                    ${$GLOBALS["gfyeaov"]} += ${$GLOBALS["tbcqnwlwzvcy"]}["quantidade"];
                }
            }
            if (${$GLOBALS["dpymwin"]} - ${$GLOBALS["xavgplac"]} < ${$GLOBALS["sbmjsosu"]}) {
                $igpcorngvvv = "soma";
                $soma = ${$GLOBALS["dpymwin"]} - ${$GLOBALS["gfyeaov"]};
                echo "<script type=\"text/javascript\">";
                $GLOBALS["qnshnrie"] = "limite_servidor";
                echo "alert(\"Voc\xc3\xaa n\xc3\xa3o pode tirar esses limites ele criou mais!\\n Criados: " . ${$GLOBALS["gfyeaov"]} . " Acessos \\n Pode Tirar: " . ${$GLOBALS["utyubv"]} . " \\n Limite de Acessos: " . $limite_servidor . "\");";
                echo "window.location=\"../../home.php?page=usuario/perfil&id_usuario=" . $_POST["usuario"] . " \";";
                echo "</script>";
                exit;
            }
            $vhldecvnfg = "InsertAcesso";
            ${$GLOBALS["msuzqtsbm"]} = "select * from servidor WHERE id_servidor = '" . ${$wqppvuexj}["id_servidor"] . "'";
            ${$GLOBALS["msuzqtsbm"]} = $conn->prepare(${$GLOBALS["msuzqtsbm"]});
            $GLOBALS["igcplnv"] = "msg";
            $SQLserver->execute();
            ${$yblgfzwetdd} = $SQLserver->fetch();
            ${$GLOBALS["efqeevdipbt"]} = "Servidor Modificado <small><b>" . ${$GLOBALS["onhoitqn"]}["ip_servidor"] . "</b></small> Veja as altera\xc3\xa7\xc3\xb5es: <small><i><b><a href=\"../home.php?page=servidor/meuservidor\">Veja</a></b></i></small>  !";
            ${$GLOBALS["tqicetj"]} = "INSERT INTO notificacoes (usuario_id,data,tipo,linkfatura,mensagem) values ('" . $_POST["usuario"] . "','" . date("Y-m-d H:i:s") . "','outros','Admin','" . ${$GLOBALS["igcplnv"]} . "')";
            $GLOBALS["bvcbtvcbuqrz"] = "acessos";
            ${$GLOBALS["zajmcy"]} = $conn->prepare(${$GLOBALS["yycmbil"]});
            $notins->execute();
            if ($_POST["val"] == 0) {
                $lwyjsicpbo = "addvalidade";
                $addvalidade = "";
            } else {
                $GLOBALS["pwmbeu"] = "addvalidade";
                $GLOBALS["mfguvpf"] = "add";
                if (${$GLOBALS["ntbkcd"]}["validade"] <= date("Y-m-d")) {
                    $GLOBALS["jomumyogwk"] = "add";
                    $add = date("Y-m-d", strtotime("+ " . $_POST["val"] . " days"));
                } else {
                    ${$GLOBALS["ondokohwb"]} = ${$GLOBALS["ntbkcd"]}["validade"];
                    ${$GLOBALS["tdovpwumi"]} = date("Y-m-d", strtotime("+ " . $_POST["val"] . " days"), strtotime(${$GLOBALS["ondokohwb"]}));
                }
                ${$GLOBALS["pwmbeu"]} = "validade='" . ${$GLOBALS["mfguvpf"]} . "',";
            }
            ${$GLOBALS["knpctgi"]} = "UPDATE acesso_servidor set " . ${$idwovfubdi} . " qtd=qtd-'" . ${$GLOBALS["bvcbtvcbuqrz"]} . "' where id_acesso_servidor='" . $_POST["servidor"] . "' and id_usuario='" . $_POST["usuario"] . "'";
            ${$GLOBALS["ttxwwj"]} = $conn->prepare(${$vhldecvnfg});
            $InsertAcesso->execute();
            echo "<script type=\"text/javascript\">";
            echo "alert(\"Servidor Editado com sucesso!\");";
            echo "window.location=\"../../home.php?page=usuario/perfil&id_usuario=" . $_POST["usuario"] . " \";";
            echo "</script>";
        } else {
            $GLOBALS["rhxwyaf"] = "InsertAcesso";
            $sfggww = "SQLserver";
            $nheyrloo = "SQLserver";
            if ($_POST["val"] == 0) {
                ${$GLOBALS["vpmdkqyk"]} = "";
            } else {
                $GLOBALS["seppvctvr"] = "servido";
                if ($servido["validade"] <= date("Y-m-d")) {
                    $GLOBALS["nlzekyit"] = "add";
                    $add = date("Y-m-d", strtotime("+ " . $_POST["val"] . " days"));
                } else {
                    $sgcwdbxl = "validadeatual";
                    $validadeatual = ${$GLOBALS["ntbkcd"]}["validade"];
                    ${$GLOBALS["tdovpwumi"]} = date("Y-m-d", strtotime("+ " . $_POST["val"] . " days", strtotime(${$GLOBALS["ondokohwb"]})));
                }
                ${$GLOBALS["vpmdkqyk"]} = "validade='" . ${$GLOBALS["tdovpwumi"]} . "',";
            }
            $rkgfiolvm = "SQLserver";
            $GLOBALS["lpforgvlnr"] = "server";
            $GLOBALS["pvkkms"] = "InsertAcesso";
            $GLOBALS["wqkubhs"] = "postacesso";
            ${$GLOBALS["ttxwwj"]} = "UPDATE acesso_servidor set " . ${$GLOBALS["vpmdkqyk"]} . " qtd=qtd+'" . $postacesso . "' where id_acesso_servidor='" . $_POST["servidor"] . "' and id_usuario='" . $_POST["usuario"] . "'";
            ${$GLOBALS["rhxwyaf"]} = $conn->prepare(${$GLOBALS["pvkkms"]});
            $InsertAcesso->execute();
            ${$nheyrloo} = "select * from servidor WHERE id_servidor = '" . ${$GLOBALS["ntbkcd"]}["id_servidor"] . "'";
            ${$sfggww} = $conn->prepare(${$rkgfiolvm});
            $SQLserver->execute();
            ${$GLOBALS["onhoitqn"]} = $SQLserver->fetch();
            $GLOBALS["gdilzjylxrg"] = "notins";
            ${$GLOBALS["efqeevdipbt"]} = "Servidor Modificado <small><b>" . ${$GLOBALS["lpforgvlnr"]}["ip_servidor"] . "</b></small> Veja as altera\xc3\xa7\xc3\xb5es: <small><i><b><a href=\"../home.php?page=servidor/meuservidor\">Veja</a></b></i></small>  !";
            ${$GLOBALS["gdilzjylxrg"]} = "INSERT INTO notificacoes (usuario_id,data,tipo,linkfatura,mensagem) values ('" . $_POST["usuario"] . "','" . date("Y-m-d H:i:s") . "','outros','Admin','" . ${$GLOBALS["efqeevdipbt"]} . "')";
            ${$GLOBALS["yycmbil"]} = $conn->prepare(${$GLOBALS["yycmbil"]});
            $notins->execute();
            echo "<script type=\"text/javascript\">";
            echo "alert(\"Servidor Editado com sucesso!\");";
            echo "window.location=\"../../home.php?page=usuario/perfil&id_usuario=" . $_POST["usuario"] . " \";";
            echo "</script>";
        }
    }
} else {
    echo "<script type=\"text/javascript\">";
    echo "alert(\"Preencha todos os campos!\");";
    echo "window.location=\"../../home.php?page=usuario/perfil&id_usuario=" . $_POST["usuario"] . " \";";
    echo "</script>";
}
