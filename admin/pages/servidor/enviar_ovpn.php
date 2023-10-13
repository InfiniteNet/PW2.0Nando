<?php

$GLOBALS["uwdfwvhrqxm"] = "enviando";
$GLOBALS["hlrhnisw"] = "nome";
$GLOBALS["dkskaxpcrtc"] = "row2";
$GLOBALS["uphbjpxprnj"] = "notins";
$GLOBALS["uacudb"] = "msg";
$GLOBALS["kycpvypbrlu"] = "row";
$GLOBALS["gcgzup"] = "servidor";
$GLOBALS["frfskefoqoz"] = "server";
$GLOBALS["rbewrpl"] = "arquivo";
$GLOBALS["qbhvfxki"] = "nomedoarquido";
$GLOBALS["opplslxzc"] = "servidoridd";
require_once "../../../pages/system/seguranca.php";
require_once "../../../pages/system/config.php";
require_once "../../../pages/system/classe.ssh.php";
require_once "../../../pages/system/funcoes.system.php";
protegePagina("donoadmin");
if (isset($_POST["servidorid"])) {
    $servidoridd = sql_injector($_POST["servidorid"]);
    define("DEST_DIR", "/var/www/html../../../pages/servidor/ovpn");
    if (isset($_FILES["arquivo"]) && !empty($_FILES["arquivo"]["name"])) {
        $GLOBALS["bxgcwnrkfnve"] = "conta";
        $allxvxkfnks = "arquivo";
        $wvphwilyhj = "arquivo";
        $arquivo = $_FILES["arquivo"];
        $fughdbbot = "ovpn";
        $GLOBALS["fgyjhwa"] = "nomedoarquido";
        $GLOBALS["spxfdbwbtit"] = "buscasmtp";
        $nomedoarquido = $arquivo["name"];
        $pqmjicgxz = "buscasmtp";
        $lrtvgloqkm = "final";
        $final = sql_injector($nomedoarquido);
        $buscasmtp = "SELECT * FROM ovpn WHERE servidor_id='" . $servidoridd . "'";
        $GLOBALS["obyexlw"] = "buscasmtp";
        $buscasmtp = $conn->prepare($buscasmtp);
        $hudptl = "conta";
        $buscasmtp->execute();
        $conta = $buscasmtp->rowCount();
        $ovpn = $buscasmtp->fetch();
        if ($conta > 0) {
            echo myalertuser("error", "J\xc3\xa1 existe um Arquivo APK neste Servidor", "../../home.php?page=servidor/servidor&id_servidor=" . $_POST["servidorid"] . " ");
        }
        if (!move_uploaded_file(${$GLOBALS["rbewrpl"]}["tmp_name"], "/var/www/html../../../pages/servidor/ovpn/" . ${$GLOBALS["rbewrpl"]}["name"])) {
            echo myalertuser("error", "Ocorreu um Erro no Processo de Upload", "../../home.php?page=servidor/servidor&id_servidor=" . $_POST["servidorid"] . " ");
        } else {
            $lmogrrht = "data";
            $GLOBALS["ijwhvtqqzvnw"] = "buscauser";
            $qxgkxk = "buscauser";
            $womsbolgwq = "nome";
            $data = date("Y-m-d H:i:s");
            ${$GLOBALS["frfskefoqoz"]} = "SELECT * FROM servidor where id_servidor='" . ${$GLOBALS["opplslxzc"]} . "'";
            ${$GLOBALS["frfskefoqoz"]} = $conn->prepare(${$GLOBALS["frfskefoqoz"]});
            $ywtvvxwnfq = "buscauser2";
            $tspyknsgbuo = "nomedoarquido";
            $GLOBALS["hjgmvn"] = "servidor";
            $sruwznsyllec = "buscauser2";
            $tcpgcqld = "enviando";
            $ntzzvkqg = "buscauser";
            $server->execute();
            ${$GLOBALS["gcgzup"]} = $server->fetch();
            ${$ntzzvkqg} = "SELECT * FROM conta_ssh where id_servidor='" . ${$GLOBALS["hjgmvn"]}["id_servidor"] . "'";
            $hyvbebssmxf = "buscauser2";
            ${$GLOBALS["ijwhvtqqzvnw"]} = $conn->prepare(${$qxgkxk});
            $bdltrfw = "enviando";
            $qhovpj = "data";
            $buscauser->execute();
            if ($buscauser->rowCount() > 0) {
                while (${$GLOBALS["kycpvypbrlu"]} = $buscauser->fetch()) {
                    $joicqsoq = "servidor";
                    $GLOBALS["rnslolqkcj"] = "row";
                    $tiwirjv = "notins";
                    ${$GLOBALS["uacudb"]} = "Foi adicionado um Arquivo APK no Servidor <b>" . $servidor["nome"] . "</b> <small><a href=\"../home.php?page=downloads/ovpn\">Veja</a></small>!";
                    $GLOBALS["bqollvnp"] = "msg";
                    ${$tiwirjv} = "INSERT INTO notificacoes (usuario_id,data,tipo,linkfatura,mensagem,info_outros) values ('" . ${$GLOBALS["rnslolqkcj"]}["id_usuario"] . "','" . date("Y-m-d H:i:s") . "','outros','n/d','" . $msg . "','Arquivos')";
                    ${$GLOBALS["uphbjpxprnj"]} = $conn->prepare(${$GLOBALS["uphbjpxprnj"]});
                    $notins->execute();
                }
            }
            ${$hyvbebssmxf} = "SELECT * FROM acesso_servidor where id_servidor='" . ${$GLOBALS["gcgzup"]}["id_servidor"] . "'";
            ${$ywtvvxwnfq} = $conn->prepare(${$sruwznsyllec});
            $zvepebvqxx = "nomedoarquido";
            $buscauser2->execute();
            if ($buscauser2->rowCount() > 0) {
                while (${$GLOBALS["dkskaxpcrtc"]} = $buscauser2->fetch()) {
                    $paanfttuuon = "notins";
                    ${$GLOBALS["uacudb"]} = "Revendedor Foi adicionado um Arquivo APK no Servidor <b>" . ${$GLOBALS["gcgzup"]}["nome"] . "</b> <small><a href=\"../home.php?page=downloads/ovpn\">Veja</a></small>!";
                    ${$paanfttuuon} = "INSERT INTO notificacoes (usuario_id,data,tipo,linkfatura,mensagem,info_outros) values ('" . ${$GLOBALS["dkskaxpcrtc"]}["id_usuario"] . "','" . date("Y-m-d H:i:s") . "','outros','n/d','" . ${$GLOBALS["uacudb"]} . "','Arquivos')";
                    $gtuhafwkno = "notins";
                    $GLOBALS["dwvskjirjdpr"] = "notins";
                    $notins = $conn->prepare($notins);
                    $notins->execute();
                }
            }
            ${$GLOBALS["hlrhnisw"]} = explode(".", ${$tspyknsgbuo});
            ${$tcpgcqld} = "insert into ovpn (servidor_id,nome,arquivo,data) values ('" . ${$GLOBALS["opplslxzc"]} . "','" . ${$womsbolgwq}[0] . "','" . ${$zvepebvqxx} . "','" . ${$qhovpj} . "')";
            ${$GLOBALS["uwdfwvhrqxm"]} = $conn->prepare(${$bdltrfw});
            $enviando->execute();
            echo myalertuser("success", "O Arquivo APK foi enviado", "../../home.php?page=servidor/servidor&id_servidor=" . $_POST["servidorid"] . " ");
        }
    } else {
        echo myalertuser("error", "Houve algum erro durante o Upload do arquivo", "../../home.php?page=servidor/servidor&id_servidor=" . $_POST["servidorid"] . " ");
    }
}
