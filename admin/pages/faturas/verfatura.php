<?php

$GLOBALS["whqyxbwhv"] = "servidor";
$GLOBALS["rvgsymujm"] = "dia";
$GLOBALS["hfngapubeu"] = "arquivo";
$GLOBALS["kfdbifktti"] = "comprovante";
$GLOBALS["vaxumixwvwp"] = "notificacao";
$GLOBALS["bbrvmexeiwtq"] = "data";
$GLOBALS["hzmhxu"] = "msg";
$GLOBALS["kjlmbgnr"] = "usufatu";
$GLOBALS["pspvykmt"] = "usuarion";
$GLOBALS["qnqboiswgin"] = "modificafatura";
$jlnhhmq = "usufatu";
$GLOBALS["qlgkrvvdldjo"] = "mudacp";
$GLOBALS["espifxbjc"] = "cpconta";
$GLOBALS["qqentnrhvb"] = "verificacp";
$GLOBALS["hplrfhegreb"] = "verificado";
$GLOBALS["cbjiyfcdicx"] = "verifica";
$GLOBALS["svhgopvv"] = "vai";
$GLOBALS["dtmwbyj"] = "tipo";
$GLOBALS["saxles"] = "total";
$GLOBALS["dzmepqaut"] = "valor";
$GLOBALS["nzshiu"] = "desconto";
$GLOBALS["pgmyhrmote"] = "acc";
$GLOBALS["qhvugpvrv"] = "server";
$GLOBALS["xnqvrdkukit"] = "usufatu";
$GLOBALS["cjwcnipcoujf"] = "fatu";
$GLOBALS["trajveqwqu"] = "user";
$GLOBALS["qydymxi"] = "diav";
$GLOBALS["dtknvmkuu"] = "mesv";
$GLOBALS["viqlmajccov"] = "anov";
$GLOBALS["ebftpeynie"] = "datavenc";
$GLOBALS["xftndyjmic"] = "mes";
$GLOBALS["cgbyyzbvklo"] = "ano";
$GLOBALS["webuqdfww"] = "dataconvcriado";
$GLOBALS["ijyiiycfj"] = "fatu";
$GLOBALS["sawyokzietcz"] = "partes";
$rdojri = "fatu";
$GLOBALS["cisfltzukvrg"] = "fatu";
$GLOBALS["xmeqdshfr"] = "datacriado";
$GLOBALS["ojgsovykldi"] = "conta";
$GLOBALS["rrwmlcuzm"] = "SQLUPUser";
$GLOBALS["jwnhptpwyf"] = "fatura_id";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/verfatura.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
protegePagina("donoadmin");
if (isset($_GET["id"])) {
    $ecpmplre = "datanv";
    $kwrusshr = "fatu";
    $GLOBALS["ygephyed"] = "desconto1";
    $rvtyflcfrp = "conta";
    $bfxlkhjln = "partes2";
    $GLOBALS["mnxwdtulcecj"] = "SQLUPUser";
    $GLOBALS["jqivmfy"] = "partes2";
    $dvwrnd = "datanv";
    $GLOBALS["nnoroegniro"] = "servidor";
    ${$GLOBALS["jwnhptpwyf"]} = $_GET["id"];
    ${$GLOBALS["mnxwdtulcecj"]} = "SELECT * FROM fatura where id='" . ${$GLOBALS["jwnhptpwyf"]} . "'";
    $GLOBALS["itcqxkk"] = "partes";
    $howwktpst = "tipo";
    ${$GLOBALS["rrwmlcuzm"]} = $conn->prepare(${$GLOBALS["rrwmlcuzm"]});
    $SQLUPUser->execute();
    $bolgexqyasa = "partes2";
    $oryfmsyciaw = "fatu";
    $GLOBALS["elleuiqnwqw"] = "partes";
    ${$rvtyflcfrp} = $SQLUPUser->rowCount();
    $GLOBALS["shfvusovhhd"] = "dataconvcriado";
    if (${$GLOBALS["ojgsovykldi"]} == 0) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Fatura n\xc3\xa3o encontrada!\");";
        echo "window.location=\"home.php?page=faturas/abertas\";";
        echo "</script>";
    }
    ${$kwrusshr} = $SQLUPUser->fetch();
    $mopbpag = "user";
    ${$GLOBALS["xmeqdshfr"]} = ${$GLOBALS["cisfltzukvrg"]}["data"];
    $GLOBALS["hugmyfu"] = "datavenc";
    ${$GLOBALS["shfvusovhhd"]} = substr(${$GLOBALS["xmeqdshfr"]}, 0, 10);
    ${$GLOBALS["sawyokzietcz"]} = explode("-", ${$GLOBALS["webuqdfww"]});
    $GLOBALS["bspwyjkwx"] = "desconto1";
    ${$GLOBALS["cgbyyzbvklo"]} = ${$GLOBALS["sawyokzietcz"]}[0];
    $GLOBALS["icofrvjuwy"] = "fatu";
    $neotnzmy = "dia";
    ${$GLOBALS["xftndyjmic"]} = ${$GLOBALS["itcqxkk"]}[1];
    ${$neotnzmy} = ${$GLOBALS["elleuiqnwqw"]}[2];
    $gckniayednx = "server";
    ${$GLOBALS["ebftpeynie"]} = ${$GLOBALS["cisfltzukvrg"]}["datavencimento"];
    $lqagssgzg = "partes2";
    ${$ecpmplre} = substr(${$GLOBALS["hugmyfu"]}, 0, 10);
    $triiquj = "valorfinal";
    ${$lqagssgzg} = explode("-", ${$dvwrnd});
    ${$GLOBALS["viqlmajccov"]} = ${$GLOBALS["jqivmfy"]}[0];
    $ifalhttoonlb = "server";
    ${$GLOBALS["dtknvmkuu"]} = ${$bolgexqyasa}[1];
    ${$GLOBALS["qydymxi"]} = ${$bfxlkhjln}[2];
    ${$GLOBALS["trajveqwqu"]} = "SELECT * FROM usuario where id_usuario='" . ${$GLOBALS["icofrvjuwy"]}["usuario_id"] . "'";
    ${$mopbpag} = $conn->prepare(${$GLOBALS["trajveqwqu"]});
    $user->execute();
    ${$GLOBALS["xnqvrdkukit"]} = $user->fetch();
    ${$GLOBALS["qhvugpvrv"]} = "SELECT * FROM servidor where id_servidor='" . ${$GLOBALS["cisfltzukvrg"]}["servidor_id"] . "'";
    $GLOBALS["uefblr"] = "fatu";
    ${$gckniayednx} = $conn->prepare(${$ifalhttoonlb});
    $server->execute();
    ${$GLOBALS["nnoroegniro"]} = $server->fetch();
    if (${$GLOBALS["cisfltzukvrg"]}["tipo"] == "vpn") {
        ${$GLOBALS["pgmyhrmote"]} = "SELECT * FROM conta_ssh where id_usuario_ssh='" . ${$GLOBALS["cisfltzukvrg"]}["conta_id"] . "'";
        ${$GLOBALS["pgmyhrmote"]} = $conn->prepare(${$GLOBALS["pgmyhrmote"]});
        $acc->execute();
        ${$GLOBALS["ojgsovykldi"]} = $acc->fetch();
    }
    ${$GLOBALS["ygephyed"]} = ${$GLOBALS["cisfltzukvrg"]}["desconto"];
    ${$GLOBALS["nzshiu"]} = number_format(${$GLOBALS["cisfltzukvrg"]}["desconto"], 2, ",", ".");
    ${$GLOBALS["dzmepqaut"]} = number_format(${$GLOBALS["cisfltzukvrg"]}["valor"], 2, ",", ".");
    ${$GLOBALS["saxles"]} = ceil(${$GLOBALS["cisfltzukvrg"]}["valor"] * ${$GLOBALS["cisfltzukvrg"]}["qtd"] - ${$GLOBALS["bspwyjkwx"]});
    ${$triiquj} = ${$GLOBALS["uefblr"]}["valor"];
    $cuotvpntjyu = "tipo";
    ${$GLOBALS["saxles"]} = number_format(${$GLOBALS["saxles"]}, 2, ",", ".");
    switch (${$oryfmsyciaw}["tipo"]) {
        case "vpn":
            ${$cuotvpntjyu} = "Acesso VPN";
            break;
        case "revenda":
            ${$howwktpst} = "Revenda";
            break;
        default:
            ${$GLOBALS["dtmwbyj"]} = "Outros";
            break;
    }
} else {
    echo "<script type=\"text/javascript\">";
    echo "alert(\"Fatura Inexistente!\");";
    echo "window.location=\"home.php?page=faturas/abertas\";";
    echo "</script>";
    exit;
}
if (isset($_GET["act"])) {
    $nvikocvddzf = "vai";
    $GLOBALS["rdhjobxhtt"] = "vai";
    $bwugpwabow = "vai";
    $rblpcabxhuv = "vai";
    $ckeana = "vai";
    switch ($_GET["act"]) {
        case "1":
            ${$GLOBALS["svhgopvv"]} = "comfirma";
            break;
        case "2":
            ${$nvikocvddzf} = "cancela";
            break;
        case "3":
            ${$rblpcabxhuv} = "deleta";
            break;
        default:
            ${$bwugpwabow} = "erro";
            break;
    }
    if (${$ckeana} == "erro") {
        $yefbshihfio = "fatu";
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Erro na comfirma\xc3\xa7\xc3\xa3o!\");";
        echo "window.location=\"home.php?page=faturas/verfatura&id=" . $fatu["id"] . "\";";
        echo "</script>";
        exit;
    } elseif (${$GLOBALS["svhgopvv"]} == "comfirma") {
        $oglrpbqqn = "verifica";
        $iyvlftbmge = "verifica";
        $cxvjsts = "cpconta";
        $wjnegdyftrq = "verificado";
        $gqvqudmtbld = "usuarion";
        $GLOBALS["cecxkht"] = "data";
        $verifica = "SELECT * FROM fatura where id='" . ${$GLOBALS["jwnhptpwyf"]} . "'";
        $verifica = $conn->prepare(${$GLOBALS["cbjiyfcdicx"]});
        $verifica->execute();
        $verificado = $verifica->fetch();
        $vgdqhy = "fatura_id";
        if (${$GLOBALS["hplrfhegreb"]}["status"] != "pendente") {
            echo "<script type=\"text/javascript\">";
            echo "alert(\"Essa fatura n\xc3\xa3o pode ser aceita!\");";
            echo "window.location=\"home.php?page=faturas/abertas\";";
            echo "</script>";
            exit;
        }
        ${$GLOBALS["qqentnrhvb"]} = "SELECT * FROM fatura_comprovantes where fatura_id='" . ${$vgdqhy} . "'";
        ${$GLOBALS["qqentnrhvb"]} = $conn->prepare(${$GLOBALS["qqentnrhvb"]});
        $GLOBALS["xjrwzlvw"] = "fatu";
        $verificacp->execute();
        ${$GLOBALS["espifxbjc"]} = $verificacp->rowCount();
        if (${$cxvjsts} > 0) {
            $GLOBALS["ejbqpxqw"] = "comprovante";
            $comprovante = $verifica->fetch();
            ${$GLOBALS["qlgkrvvdldjo"]} = "UPDATE fatura_comprovantes set status='fechado' where fatura_id='" . ${$GLOBALS["jwnhptpwyf"]} . "'";
            $ebsxqdwmtpoh = "mudacp";
            $mudacp = $conn->prepare(${$GLOBALS["qlgkrvvdldjo"]});
            $mudacp->execute();
        }
        ${$GLOBALS["qnqboiswgin"]} = "UPDATE fatura SET status='pago' where id='" . ${$GLOBALS["jwnhptpwyf"]} . "'";
        $GLOBALS["jrqqywrk"] = "notificacao";
        $GLOBALS["ngdnftkekal"] = "notificacao";
        ${$GLOBALS["qnqboiswgin"]} = $conn->prepare(${$GLOBALS["qnqboiswgin"]});
        $modificafatura->execute();
        ${$GLOBALS["pspvykmt"]} = ${$GLOBALS["cisfltzukvrg"]}["usuario_id"];
        ${$GLOBALS["cecxkht"]} = date("Y-m-d H:i:s");
        $GLOBALS["lfrquvfk"] = "msg";
        ${$GLOBALS["hzmhxu"]} = "A Fatura <b><small>#" . ${$GLOBALS["xjrwzlvw"]}["id"] . "</small></b> foi aprovada com sucesso!";
        ${$GLOBALS["ngdnftkekal"]} = "INSERT INTO notificacoes (usuario_id,data,tipo,linkfatura,mensagem) values ('" . ${$gqvqudmtbld} . "','" . ${$GLOBALS["bbrvmexeiwtq"]} . "','fatura','faturas/pagas','" . ${$GLOBALS["lfrquvfk"]} . "')";
        ${$GLOBALS["jrqqywrk"]} = $conn->prepare(${$GLOBALS["vaxumixwvwp"]});
        $notificacao->execute();
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Fatura Aprovada com sucesso!\");";
        echo "window.location=\"home.php?page=faturas/abertas\";";
        echo "</script>";
    } elseif (${$GLOBALS["svhgopvv"]} == "cancela") {
        $oyadhdmc = "verificacp";
        $grjmsznje = "fatura_id";
        ${$GLOBALS["cbjiyfcdicx"]} = "SELECT * FROM fatura where id='" . ${$GLOBALS["jwnhptpwyf"]} . "'";
        $axxrtg = "verificado";
        $GLOBALS["hfvdcduk"] = "fatu";
        $huntvmjppa = "modificafatura";
        ${$GLOBALS["cbjiyfcdicx"]} = $conn->prepare(${$GLOBALS["cbjiyfcdicx"]});
        $nkgamqic = "modificafatura";
        $verifica->execute();
        $GLOBALS["brwggvx"] = "verificado";
        ${$axxrtg} = $verifica->fetch();
        if (${$GLOBALS["brwggvx"]}["status"] != "pendente") {
            echo "<script type=\"text/javascript\">";
            echo "alert(\"Essa fatura n\xc3\xa3o pode ser cancelada!\");";
            echo "window.location=\"home.php?page=faturas/abertas\";";
            echo "</script>";
            exit;
        }
        ${$GLOBALS["qqentnrhvb"]} = "SELECT * FROM fatura_comprovantes where fatura_id='" . ${$grjmsznje} . "'";
        $wgmhgag = "notificacao";
        $GLOBALS["hitovdgqu"] = "msg";
        ${$oyadhdmc} = $conn->prepare(${$GLOBALS["qqentnrhvb"]});
        $GLOBALS["mwgpmefqgp"] = "usuarion";
        $verificacp->execute();
        ${$GLOBALS["espifxbjc"]} = $verificacp->rowCount();
        if (${$GLOBALS["espifxbjc"]} > 0) {
            $GLOBALS["nvxgmfrvpzi"] = "comprovante";
            $comprovante = $verifica->fetch();
            ${$GLOBALS["qlgkrvvdldjo"]} = "UPDATE fatura_comprovantes set status='fechado' where fatura_id='" . ${$GLOBALS["jwnhptpwyf"]} . "'";
            ${$GLOBALS["qlgkrvvdldjo"]} = $conn->prepare(${$GLOBALS["qlgkrvvdldjo"]});
            $mudacp->execute();
        }
        $pkygiisyp = "data";
        $lthldsrg = "modificafatura";
        ${$nkgamqic} = "UPDATE fatura SET status='cancelado' where id='" . ${$GLOBALS["jwnhptpwyf"]} . "'";
        ${$huntvmjppa} = $conn->prepare(${$lthldsrg});
        $modificafatura->execute();
        ${$GLOBALS["pspvykmt"]} = ${$GLOBALS["cisfltzukvrg"]}["usuario_id"];
        ${$GLOBALS["bbrvmexeiwtq"]} = date("Y-m-d H:i:s");
        ${$GLOBALS["hzmhxu"]} = "A Fatura <small><b>#" . ${$GLOBALS["hfvdcduk"]}["id"] . "</b></small> foi cancelada!";
        ${$wgmhgag} = "INSERT INTO notificacoes (usuario_id,data,tipo,linkfatura,mensagem) values ('" . ${$GLOBALS["mwgpmefqgp"]} . "','" . ${$pkygiisyp} . "','fatura','faturas/canceladas','" . ${$GLOBALS["hitovdgqu"]} . "')";
        ${$GLOBALS["vaxumixwvwp"]} = $conn->prepare(${$GLOBALS["vaxumixwvwp"]});
        $notificacao->execute();
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Fatura Cancelada!\");";
        echo "window.location=\"home.php?page=faturas/abertas\";";
        echo "</script>";
    } elseif (${$GLOBALS["rdhjobxhtt"]} == "deleta") {
        $GLOBALS["crsmcjwwq"] = "verificacp";
        $ccvbnl = "verificacp";
        $GLOBALS["xmiqpvvunmk"] = "cpconta";
        $GLOBALS["opjkec"] = "verificacp";
        $verificacp = "SELECT * FROM fatura_comprovantes where fatura_id='" . ${$GLOBALS["jwnhptpwyf"]} . "'";
        $verificacp = $conn->prepare($verificacp);
        $verificacp->execute();
        $cpconta = $verificacp->rowCount();
        if (${$GLOBALS["espifxbjc"]} > 0) {
            $GLOBALS["oilifis"] = "comprovante";
            $dqwcvvzrtc = "arquivo";
            $comprovante = $verificacp->fetch();
            $arquivo = "../../painelssh/admin/pages/faturas/comprovantes/" . ${$GLOBALS["kfdbifktti"]}["imagem"] . "";
            if (!unlink(${$GLOBALS["hfngapubeu"]})) {
                echo "<script type=\"text/javascript\">";
                echo "alert(\"Arquivo n\xc3\xa3o encontrado!\");";
                echo "window.location=\"home.php?page=faturas/abertas\";";
                echo "</script>";
                exit;
            } else {
                $brifrp = "fatura_id";
                $jijqwuq = "mudacp";
                $rgxquwdmgg = "mudacp";
                $GLOBALS["khnyquvrba"] = "modificafatura";
                ${$GLOBALS["qnqboiswgin"]} = "DELETE FROM fatura where id='" . $fatura_id . "'";
                $GLOBALS["ywhxfpfg"] = "modificafatura";
                $modificafatura = $conn->prepare(${$GLOBALS["khnyquvrba"]});
                $modificafatura->execute();
                ${$GLOBALS["qlgkrvvdldjo"]} = "DELETE FROM fatura_comprovantes where fatura_id='" . ${$GLOBALS["jwnhptpwyf"]} . "'";
                ${$jijqwuq} = $conn->prepare(${$rgxquwdmgg});
                $mudacp->execute();
                echo "<script type=\"text/javascript\">";
                echo "alert(\"Fatura Deletada!\");";
                echo "window.location=\"home.php?page=faturas/abertas\";";
                echo "</script>";
            }
        } else {
            ${$GLOBALS["qnqboiswgin"]} = "DELETE FROM fatura where id='" . ${$GLOBALS["jwnhptpwyf"]} . "'";
            ${$GLOBALS["qnqboiswgin"]} = $conn->prepare(${$GLOBALS["qnqboiswgin"]});
            $modificafatura->execute();
            echo "<script type=\"text/javascript\">";
            echo "alert(\"Fatura Deletada!\");";
            echo "window.location=\"home.php?page=faturas/abertas\";";
            echo "</script>";
        }
    }
}
echo "<section id=\"input-style\">\n<div class=\"row\">\n<div class=\"col-md-12\">\n<div class=\"card card-body printableArea\">\n<h3 class=\"text-success\"><b>SSHPLUS</b><span class=\"pull-right\">Fatura N\xc2\xb0#";
echo ${$GLOBALS["cisfltzukvrg"]}["id"];
echo "</span></h3>\n<small>Data: ";
echo ${$GLOBALS["rvgsymujm"]};
echo "/";
echo ${$GLOBALS["xftndyjmic"]};
echo "/";
echo ${$GLOBALS["cgbyyzbvklo"]};
echo "</small><br>\n<h6 class=\"card-subtitle\">Nota: Anexe um Print do Comprovante para agilizar o processo.</h6>\n<div class=\"row\">\n<div class=\"col-md-12\">\n<div class=\"pull-left\">\n<address>\n<p class=\"text-muted m-l-5\">Sao Paulo, SP\n<br/> Telefone: (11) 96383-2342\n<br/> Email: admin@admin\n</p>\n<div class=\"col-xs-6\"><br>\n<p class=\"lead\">Formas de Pagamento:</p>\n<img src=\"../../app-assets/images/credito/visa.png\" alt=\"Visa\">\n<img src=\"../../app-assets/images/credito/mastercard.png\" alt=\"Mastercard\">\n<img src=\"../../app-assets/images/credito/american-express.png\" alt=\"American Express\">\n<img src=\"../../app-assets/images/credito/caixa.png\" alt=\"Caixa\">\n<p class=\"text-muted well well-sm no-shadow\" style=\"margin-top: 10px;\">\nDep\xc3\xb3sito e Transf\xc3\xaarencia Bancaria<br>\n\xe2\x80\xa2Conta: 0000<br>\xe2\x80\xa2Agencia: oooo<br><br>\xe2\x80\xa2Nome : Crazy vpn<br>\n<br>(OBS: Enviar a confirma\xc3\xa7\xc3\xa3o com o print do comprovante.)<br>\n</p>\n</div>\n</address>\n</div>\n<div class=\"pull-right text-right\">\n<address>\n<h4 class=\"font-bold\">Para: ";
echo ${$GLOBALS["kjlmbgnr"]}["nome"];
echo "</h4>\n<p class=\"text-muted m-l-30\">\n<br/> Telefone: ";
echo ${$jlnhhmq}["celular"];
echo "<br/> Email: ";
$GLOBALS["hingojbv"] = "tipo";
echo ${$GLOBALS["xnqvrdkukit"]}["email"];
echo "</p>\n<p class=\"m-t-30\"><b>Fatura #</b> ";
echo ${$GLOBALS["cisfltzukvrg"]}["id"];
echo "</p>\n<p><b>Vencimento:</b> <i class=\"fa fa-calendar\"></i> ";
echo ${$GLOBALS["qydymxi"]};
echo "/";
echo ${$GLOBALS["dtknvmkuu"]};
echo "/";
$qdmwvpymkipv = "fatu";
echo ${$GLOBALS["viqlmajccov"]};
echo "</p>\n<p>";
if (${$rdojri}["servidor_id"] != 0) {
    echo "<b>Servidor:</b> <i class=\"fa fa-calendar\"></i> ";
    echo ${$GLOBALS["whqyxbwhv"]}["ip_servidor"];
    $uutbqumn = "servidor";
    echo " (";
    echo $servidor["nome"];
    echo ")";
}
echo "</p>\n<p>";
if (${$GLOBALS["cisfltzukvrg"]}["conta_id"] != 0) {
    echo "</p>\n<p>";
    if (${$GLOBALS["cisfltzukvrg"]}["tipo"] == "vpn") {
        echo "</p>\n<p><b>Conta:</b> <i class=\"fa fa-calendar\"></i>";
        echo ${$GLOBALS["ojgsovykldi"]}["login"];
        echo "</p>\n";
    }
}
echo "</address>\n</div>\n</div>\n<div class=\"col-md-12\">\n<div class=\"table-responsive m-t-40\" style=\"clear: both;\">\n<table class=\"table table-hover\">\n<thead>\n<tr>\n<th class=\"text-center\">Qtd</th>\n<th>Produto</th>\n<th class=\"text-right\">Tipo</th>\n<th class=\"text-right\">Descri\xc3\xa7\xc3\xa3o</th>\n<th class=\"text-right\">Subtotal</th>\n</tr>\n</thead>\n<tbody>\n<tr>\n<td class=\"text-center\">";
echo ${$GLOBALS["ijyiiycfj"]}["qtd"];
echo "</td>\n<td>Contas SSH</td>\n<td class=\"text-right\"> ";
echo ${$GLOBALS["hingojbv"]};
$GLOBALS["trynokhptjyp"] = "fatu";
echo " </td>\n<td class=\"text-right\"> ";
echo $fatu["descri\xc3\xa7\xc3\xa3o"];
echo "</td>\n<td class=\"text-right\"> R\$";
echo ${$GLOBALS["saxles"]};
echo " </td>\n</tr>\n</tr>\n</tbody>\n</table>\n</div>\n</div>\n<div class=\"col-md-12\">\n<div class=\"pull-right m-t-30 text-right\">\n<div class=\"text-right\">\n<a onclick=\"window.print();\"  class=\"btn btn-default\"><i class=\"fa fa-print\"></i> Print</a>\n<script type=\"text/javascript\">\nfunction excluir_fatura(){\ndecisao = confirm(\"Tem certeza que vai excluir?!\");\nif (decisao){\nwindow.location.href='home.php?page=faturas/verfatura&id=";
echo ${$qdmwvpymkipv}["id"];
echo "&act=3'\n} else {\n}\n}\n</script>\n<button type=\"button\" onclick=\"excluir_fatura()\" class=\"btn btn-danger\"><i class=\"fal fa-trash\"></i> Excluir\n</button>\n";
if (${$GLOBALS["cisfltzukvrg"]}["status"] == "pendente") {
    echo "<button type=\"button\" onclick=\"window.location.href='home.php?page=faturas/verfatura&id=";
    echo ${$GLOBALS["cisfltzukvrg"]}["id"];
    echo "&act=1'\" class=\"btn btn-success\" style=\"margin-right: 5px;\">\n<i class=\"fal fa-download\"></i> Confirmar\n</button>\n<button type=\"button\" onclick=\"window.location.href='home.php?page=faturas/verfatura&id=";
    echo ${$GLOBALS["cisfltzukvrg"]}["id"];
    echo "&act=2'\" class=\"btn btn-warning\" style=\"margin-right: 5px;\">\n<i class=\"fal fa-times-circle\"></i> Cancelar\n</button>\n";
} elseif (${$GLOBALS["cjwcnipcoujf"]}["status"] == "pago") {
    echo "<h3 class=\"pull-right\" style=\"margin-right: 5px;\">Fatura Paga</h3>\n";
} elseif (${$GLOBALS["cisfltzukvrg"]}["status"] == "cancelado") {
    echo "<h4 class=\"pull-right\" style=\"margin-right: 5px;\">Fatura Cancelada</h4>\n";
}
echo "</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</section>\n";
