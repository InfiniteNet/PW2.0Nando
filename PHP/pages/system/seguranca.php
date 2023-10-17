<?php

$GLOBALS["nxjazhcvekg"] = "line";
$GLOBALS["zujbniis"] = "logname";
$GLOBALS["vpwesoie"] = "logname1";
$GLOBALS["vcsbokrmpm"] = "loc";
$GLOBALS["mbhrggluwr"] = "isp";
$GLOBALS["ukyrmnr"] = "city";
$GLOBALS["vbltbcxbpnks"] = "country";
$GLOBALS["hsxdgbwmq"] = "ipl";
$GLOBALS["zcngokutqvtk"] = "revenda";
$GLOBALS["grsbhubgnpl"] = "SQLU";
$GLOBALS["hbyuizxdjspx"] = "usuario";
$GLOBALS["kxamrksooh"] = "ip";
$GLOBALS["orekeroo"] = "ipdominio";
$GLOBALS["dppyibok"] = "accessKEY";
$GLOBALS["couqacippng"] = "tipo";
$GLOBALS["wqgvbirj"] = "resultado";
$GLOBALS["vtgwgc"] = "senha_usuario";
$GLOBALS["pxbaeolhf"] = "senha";
$GLOBALS["yafdmqxhgw"] = "login_usuario";
$GLOBALS["mxabwqaw"] = "cS";
$GLOBALS["hvthbnrqq"] = "browser";
$GLOBALS["jgzowxj"] = "regex";
$GLOBALS["atinvb"] = "browser_array";
$GLOBALS["ggehbnoku"] = "value";
$GLOBALS["nbekib"] = "os_array";
$GLOBALS["hoevjlwfn"] = "os_platform";
$GLOBALS["fdqkmp"] = "user_agent";
$GLOBALS["lddjcjv"] = "ipoc";
$GLOBALS["ltbwffx"] = "stock_ua";
$GLOBALS["qjjyqqfcbfw"] = "mobile_ua";
$GLOBALS["snusgyvugxqr"] = "mobile_browser";
$GLOBALS["myrjszkhk"] = "tablet_browser";
$GLOBALS["evnhlekqdfv"] = "sql";
$GLOBALS["sxkkbdu"] = "conn";
$GLOBALS["ekgzjxxabrb"] = "passw";
$GLOBALS["yewpubwtdxr"] = "_SG";
$GLOBALS["aoxgvhcysx"] = "_SG";
$GLOBALS["ybvnnfoabp"] = "ipaddress";
require_once "funcoes.php";
require_once "config.php";
$cwbyeytsjn = "isp";
$cgnandvpyra = "details";
function pega_ip_vps()
{
    $GLOBALS["ywgiyw"] = "ipaddress";
    $ipaddress = $_SERVER["SERVER_ADDR"];
    $ipaddress = htmlspecialchars($ipaddress, ENT_QUOTES, "UTF-8");
    return $ipaddress;
}
$ppejxqceac = "_SG";
${$GLOBALS["yewpubwtdxr"]}["conectaServidor"] = true;
${$GLOBALS["yewpubwtdxr"]}["abreSessao"] = true;
$bnjjxdevc = "_SG";
${$GLOBALS["yewpubwtdxr"]}["caseSensitive"] = true;
${$GLOBALS["yewpubwtdxr"]}["validaSempre"] = true;
${$GLOBALS["yewpubwtdxr"]}["servidor"] = "localhost";
${$zhitcv}["usuario"] = "root";
${$GLOBALS["yewpubwtdxr"]}["senha"] = ${$GLOBALS["ekgzjxxabrb"]};
${$GLOBALS["yewpubwtdxr"]}["banco"] = "gestorssh";
${$bnjjxdevc}["paginaLogin"] = "login.php";
${$ppejxqceac}["paginaBloquear"] = "tela-bloqueada.php";
if (${$GLOBALS["aoxgvhcysx"]}["conectaServidor"] == true) {
    try {
        $GLOBALS["yygxgliu"] = "_SG";
        $GLOBALS["omzuagqd"] = "_SG";
        ${$GLOBALS["sxkkbdu"]} = new PDO("mysql:host=" . $_SG["servidor"] . ";dbname=" . ${$GLOBALS["yewpubwtdxr"]}["banco"] . ";charset=utf8mb4", ${$GLOBALS["yewpubwtdxr"]}["usuario"], $_SG["senha"], array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4"));
    } catch (PDOException $e) {
        echo "ERROR: " . $e->getMessage();
    }
}
function sql_injector($sql)
{
    $GLOBALS["ruawslhnalb"] = "sql";
    $qkxkuvyjfb = "sql";
    $aeqjgqfoe = "sql";
    $GLOBALS["vrasizzwdsrw"] = "sql";
    $GLOBALS["qzabkmdvtoeo"] = "sql";
    $ojvxnbugscb = "sql";
    $GLOBALS["vllynizf"] = "sql";
    $GLOBALS["pibwuh"] = "sql";
    $GLOBALS["tjniulfn"] = "sql";
    $GLOBALS["sqoogeo"] = "sql";
    $seonbgpmbn = "sql";
    $rufzpdpltm = "sql";
    $uyncgkr = "sql";
    $uveyhwocqhl = "sql";
    $GLOBALS["xdosbtr"] = "sql";
    $GLOBALS["nyvutmqio"] = "sql";
    $GLOBALS["nczoizeafoc"] = "sql";
    $GLOBALS["kisfociysz"] = "sql";
    $rqtjrqnehflb = "sql";
    $sql = str_replace(" or ", "", ${$GLOBALS["evnhlekqdfv"]});
    $GLOBALS["uwreclfuhsl"] = "sql";
    $xyghjb = "sql";
    $cusfcnbetfs = "sql";
    $GLOBALS["expfqzyjxb"] = "sql";
    $sql = str_replace("select ", "", $sql);
    $rublqpxomedy = "sql";
    $GLOBALS["hdjfkkqiu"] = "sql";
    $sql = str_replace("delete ", "", ${$GLOBALS["evnhlekqdfv"]});
    $vwetiyhulr = "sql";
    $sql = str_replace("create ", "", ${$GLOBALS["evnhlekqdfv"]});
    $GLOBALS["nakhnfbd"] = "sql";
    $GLOBALS["prmcjduk"] = "sql";
    $GLOBALS["fwogfdk"] = "sql";
    ${$GLOBALS["evnhlekqdfv"]} = str_replace("drop ", "", ${$GLOBALS["evnhlekqdfv"]});
    ${$GLOBALS["evnhlekqdfv"]} = str_replace("update ", "", ${$vwetiyhulr});
    ${$GLOBALS["evnhlekqdfv"]} = str_replace("drop table", "", ${$rublqpxomedy});
    ${$GLOBALS["evnhlekqdfv"]} = str_replace("show table", "", $sql);
    ${$GLOBALS["evnhlekqdfv"]} = str_replace("applet ", "", ${$GLOBALS["evnhlekqdfv"]});
    ${$GLOBALS["evnhlekqdfv"]} = str_replace("object ", "", ${$uyncgkr});
    ${$cusfcnbetfs} = str_replace(" OR ", "", ${$seonbgpmbn});
    $sql = str_replace("SELECT ", "", ${$GLOBALS["evnhlekqdfv"]});
    $gwwhcq = "sql";
    ${$GLOBALS["evnhlekqdfv"]} = str_replace("DELETE ", "", ${$uveyhwocqhl});
    ${$GLOBALS["evnhlekqdfv"]} = str_replace("CREATE ", "", ${$ojvxnbugscb});
    $sql = str_replace("DROP ", "", $sql);
    ${$GLOBALS["evnhlekqdfv"]} = str_replace("UPDATE ", "", $sql);
    $GLOBALS["byesqyl"] = "sql";
    ${$GLOBALS["evnhlekqdfv"]} = str_replace("DROP TABLE", "", ${$rqtjrqnehflb});
    ${$GLOBALS["evnhlekqdfv"]} = str_replace("SHOW TABLE", "", ${$aeqjgqfoe});
    $sql = str_replace("APPLET ", "", $sql);
    $sql = str_replace("OBJECT ", "", $sql);
    ${$GLOBALS["evnhlekqdfv"]} = str_replace("'", "", ${$xyghjb});
    $drhonzf = "sql";
    ${$GLOBALS["evnhlekqdfv"]} = str_replace("#", "", ${$GLOBALS["evnhlekqdfv"]});
    ${$GLOBALS["evnhlekqdfv"]} = str_replace("=", "", $sql);
    $xjqsjgmdpuq = "sql";
    $sql = str_replace("--", "", ${$drhonzf});
    ${$GLOBALS["evnhlekqdfv"]} = str_replace("-", "", ${$GLOBALS["evnhlekqdfv"]});
    ${$GLOBALS["evnhlekqdfv"]} = str_replace(";", "", ${$xjqsjgmdpuq});
    $sql = str_replace("*", "", ${$GLOBALS["evnhlekqdfv"]});
    ${$GLOBALS["evnhlekqdfv"]} = trim($sql);
    ${$gwwhcq} = strip_tags(${$GLOBALS["evnhlekqdfv"]});
    ${$GLOBALS["evnhlekqdfv"]} = addslashes($sql);
    return $sql;
}
function sql_injector2($sql)
{
    $GLOBALS["ucpuypstj"] = "sql";
    $GLOBALS["dnhcore"] = "sql";
    $bvwwwlb = "sql";
    ${$GLOBALS["evnhlekqdfv"]} = str_replace("<script>", "", ${$GLOBALS["evnhlekqdfv"]});
    ${$GLOBALS["evnhlekqdfv"]} = str_replace(" or ", "", ${$GLOBALS["evnhlekqdfv"]});
    $GLOBALS["lgawrvnmygc"] = "sql";
    $laocrrum = "sql";
    $nozpmihlex = "sql";
    $qkvjtrozc = "sql";
    $GLOBALS["voimhnxuli"] = "sql";
    $ececnuq = "sql";
    $ypmpjxenqu = "sql";
    ${$GLOBALS["evnhlekqdfv"]} = str_replace("select ", "", ${$GLOBALS["evnhlekqdfv"]});
    ${$GLOBALS["evnhlekqdfv"]} = str_replace("delete ", "", ${$qkvjtrozc});
    $GLOBALS["tvivuhhpury"] = "sql";
    $kvtrnkgdiswr = "sql";
    $byyqljf = "sql";
    $lbqhdi = "sql";
    $GLOBALS["vwrphomi"] = "sql";
    ${$nozpmihlex} = str_replace("create ", "", ${$ececnuq});
    $GLOBALS["xuppidtj"] = "sql";
    $mbajrae = "sql";
    ${$lbqhdi} = str_replace("drop ", "", ${$GLOBALS["evnhlekqdfv"]});
    ${$GLOBALS["evnhlekqdfv"]} = str_replace("update ", "", ${$GLOBALS["evnhlekqdfv"]});
    ${$GLOBALS["evnhlekqdfv"]} = str_replace("drop table", "", ${$GLOBALS["evnhlekqdfv"]});
    $GLOBALS["dyjqgttxa"] = "sql";
    ${$bvwwwlb} = str_replace("show table", "", ${$GLOBALS["evnhlekqdfv"]});
    $sql = str_replace("applet ", "", $sql);
    ${$GLOBALS["evnhlekqdfv"]} = str_replace("object ", "", ${$GLOBALS["evnhlekqdfv"]});
    $bpbppqyapcmc = "sql";
    $yjzcfhtbcj = "sql";
    $cwlyslwnk = "sql";
    $sql = str_replace("<SCRIPT>", "", ${$GLOBALS["evnhlekqdfv"]});
    ${$GLOBALS["evnhlekqdfv"]} = str_replace(" OR ", "", ${$ypmpjxenqu});
    ${$GLOBALS["evnhlekqdfv"]} = str_replace("SELECT ", "", ${$GLOBALS["evnhlekqdfv"]});
    ${$cwlyslwnk} = str_replace("DELETE ", "", ${$GLOBALS["evnhlekqdfv"]});
    ${$bpbppqyapcmc} = str_replace("CREATE ", "", ${$GLOBALS["evnhlekqdfv"]});
    $sql = str_replace("DROP ", "", ${$laocrrum});
    ${$GLOBALS["evnhlekqdfv"]} = str_replace("UPDATE ", "", ${$GLOBALS["evnhlekqdfv"]});
    ${$GLOBALS["evnhlekqdfv"]} = str_replace("DROP TABLE", "", $sql);
    ${$GLOBALS["evnhlekqdfv"]} = str_replace("SHOW TABLE", "", ${$yjzcfhtbcj});
    ${$byyqljf} = str_replace("APPLET ", "", ${$GLOBALS["evnhlekqdfv"]});
    ${$GLOBALS["evnhlekqdfv"]} = str_replace("OBJECT ", "", ${$GLOBALS["evnhlekqdfv"]});
    ${$GLOBALS["evnhlekqdfv"]} = str_replace("'", "", ${$GLOBALS["evnhlekqdfv"]});
    $sql = str_replace("#", "", ${$GLOBALS["evnhlekqdfv"]});
    $sql = str_replace("=", "", ${$kvtrnkgdiswr});
    ${$GLOBALS["evnhlekqdfv"]} = str_replace("--", "", ${$GLOBALS["evnhlekqdfv"]});
    $GLOBALS["qscyeff"] = "sql";
    ${$GLOBALS["evnhlekqdfv"]} = str_replace("-", "", ${$GLOBALS["evnhlekqdfv"]});
    ${$GLOBALS["evnhlekqdfv"]} = str_replace(";", "", ${$GLOBALS["evnhlekqdfv"]});
    ${$mbajrae} = str_replace("*", "", ${$GLOBALS["evnhlekqdfv"]});
    ${$GLOBALS["evnhlekqdfv"]} = trim($sql);
    $sql = addslashes(${$GLOBALS["evnhlekqdfv"]});
    return ${$GLOBALS["evnhlekqdfv"]};
}
function get_device()
{
    $jhqgugzsrl = "tablet_browser";
    $clijvfs = "mobile_agents";
    $GLOBALS["sxlrcmwjv"] = "mobile_browser";
    $GLOBALS["rcgsrooxqm"] = "mobile_agents";
    $rikgoumd = "tablet_browser";
    $tablet_browser = 0;
    $mobile_browser = 0;
    if (preg_match("/(tablet|ipad|playbook)|(android(?!.*(mobi|opera mini)))/i", strtolower($_SERVER["HTTP_USER_AGENT"]))) {
        ${$GLOBALS["myrjszkhk"]}++;
    }
    if (preg_match("/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|android|iemobile)/i", strtolower($_SERVER["HTTP_USER_AGENT"]))) {
        ${$GLOBALS["snusgyvugxqr"]}++;
    }
    if (strpos(strtolower($_SERVER["HTTP_ACCEPT"]), "application/vnd.wap.xhtml+xml") > 0 or (isset($_SERVER["HTTP_X_WAP_PROFILE"]) or isset($_SERVER["HTTP_PROFILE"]))) {
        ${$GLOBALS["snusgyvugxqr"]}++;
    }
    ${$GLOBALS["qjjyqqfcbfw"]} = strtolower(substr($_SERVER["HTTP_USER_AGENT"], 0, 4));
    $mobile_agents = array("w3c ", "acs-", "alav", "alca", "amoi", "audi", "avan", "benq", "bird", "blac", "blaz", "brew", "cell", "cldc", "cmd-", "dang", "doco", "eric", "hipt", "inno", "ipaq", "java", "jigs", "kddi", "keji", "leno", "lg-c", "lg-d", "lg-g", "lge-", "maui", "maxo", "midp", "mits", "mmef", "mobi", "mot-", "moto", "mwbp", "nec-", "newt", "noki", "palm", "pana", "pant", "phil", "play", "port", "prox", "qwap", "sage", "sams", "sany", "sch-", "sec-", "send", "seri", "sgh-", "shar", "sie-", "siem", "smal", "smar", "sony", "sph-", "symb", "t-mo", "teli", "tim-", "tosh", "tsm-", "upg1", "upsi", "vk-v", "voda", "wap-", "wapa", "wapi", "wapp", "wapr", "webc", "winw", "winw", "xda ", "xda-");
    if (in_array(${$GLOBALS["qjjyqqfcbfw"]}, ${$clijvfs})) {
        $ownehvp = "mobile_browser";
        $mobile_browser++;
    }
    if (strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "opera mini") > 0) {
        $ykmywevlwmj = "stock_ua";
        ${$GLOBALS["snusgyvugxqr"]}++;
        $stock_ua = strtolower(isset($_SERVER["HTTP_X_OPERAMINI_PHONE_UA"]) ? $_SERVER["HTTP_X_OPERAMINI_PHONE_UA"] : (isset($_SERVER["HTTP_DEVICE_STOCK_UA"]) ? $_SERVER["HTTP_DEVICE_STOCK_UA"] : ""));
        if (preg_match("/(tablet|ipad|playbook)|(android(?!.*mobile))/i", ${$GLOBALS["ltbwffx"]})) {
            $GLOBALS["qnestsbpfxre"] = "tablet_browser";
            $tablet_browser++;
        }
    }
    if (${$rikgoumd} > 0) {
        return "Tablet";
    } else {
        if (${$GLOBALS["snusgyvugxqr"]} > 0) {
            return "Mobile";
        } else {
            return "Computer";
        }
    }
}
$GLOBALS["mfkcqnsb"] = "isp";
function IsTorExitPoint()
{
    if (gethostbyname(ReverseIPOctets($_SERVER["REMOTE_ADDR"]) . "." . $_SERVER["SERVER_PORT"] . "." . ReverseIPOctets($_SERVER["SERVER_ADDR"]) . ".ip-port.exitlist.torproject.org") == "127.0.0.2") {
        return "True";
    } else {
        return "False";
    }
}
$GLOBALS["dhkjtfh"] = "state";
function ReverseIPOctets($inputip)
{
    $GLOBALS["jhgkrsiltgd"] = "inputip";
    $GLOBALS["ywlzcow"] = "ipoc";
    $GLOBALS["fbnomtcconu"] = "ipoc";
    $GLOBALS["kvspyeced"] = "ipoc";
    $ipoc = explode(".", $inputip);
    return ${$GLOBALS["lddjcjv"]}[3] . "." . ${$GLOBALS["lddjcjv"]}[2] . "." . $ipoc[1] . "." . $ipoc[0];
}
function get_os()
{
    $GLOBALS["tdfjkmwk"] = "value";
    $ivjbgybcg = "os_platform";
    $kvnxjfuofage = "regex";
    ${$GLOBALS["fdqkmp"]} = $_SERVER["HTTP_USER_AGENT"];
    ${$GLOBALS["hoevjlwfn"]} = "Desconhecido";
    ${$GLOBALS["nbekib"]} = array("/windows nt 11/i" => "Windows 11", "/windows nt 10/i" => "Windows 10", "/windows nt 6.3/i" => "Windows 8.1", "/windows nt 6.2/i" => "Windows 8", "/windows nt 6.1/i" => "Windows 7", "/windows nt 6.0/i" => "Windows Vista", "/windows nt 5.2/i" => "Windows Server 2003/XP x64", "/windows nt 5.1/i" => "Windows XP", "/windows xp/i" => "Windows XP", "/windows nt 5.0/i" => "Windows 2000", "/windows me/i" => "Windows ME", "/win98/i" => "Windows 98", "/win95/i" => "Windows 95", "/win16/i" => "Windows 3.11", "/macintosh|mac os x/i" => "Mac OS X", "/mac_powerpc/i" => "Mac OS 9", "/linux/i" => "Linux", "/ubuntu/i" => "Ubuntu", "/iphone/i" => "iPhone", "/ipod/i" => "iPod", "/ipad/i" => "iPad", "/android/i" => "Android", "/blackberry/i" => "BlackBerry", "/webos/i" => "Mobile");
    foreach (${$GLOBALS["nbekib"]} as ${$kvnxjfuofage} => $value) {
        $hyulraepd = "regex";
        $xwicksbvu = "user_agent";
        if (preg_match($regex, $user_agent)) {
            ${$GLOBALS["hoevjlwfn"]} = ${$GLOBALS["ggehbnoku"]};
        }
    }
    return ${$ivjbgybcg};
}
function get_browser_name()
{
    $tcbhxhlw = "browser";
    ${$GLOBALS["fdqkmp"]} = $_SERVER["HTTP_USER_AGENT"];
    ${$tcbhxhlw} = "Desconhecido";
    ${$GLOBALS["atinvb"]} = array("/msie/i" => "Internet Explorer", "/Trident/i" => "Internet Explorer", "/firefox/i" => "Firefox", "/safari/i" => "Safari", "/chrome/i" => "Chrome", "/edge/i" => "Edge", "/opera/i" => "Opera", "/netscape/i" => "Netscape", "/maxthon/i" => "Maxthon", "/konqueror/i" => "Konqueror", "/ubrowser/i" => "UC Browser", "/mobile/i" => "Handheld Browser");
    foreach (${$GLOBALS["atinvb"]} as ${$GLOBALS["jgzowxj"]} => ${$GLOBALS["ggehbnoku"]}) {
        $obckkcd = "user_agent";
        $vjllhxjvind = "regex";
        if (preg_match($regex, $user_agent)) {
            $hwlussdn = "browser";
            $browser = ${$GLOBALS["ggehbnoku"]};
        }
    }
    return ${$GLOBALS["hvthbnrqq"]};
}
function pega_ip()
{
    $pztaymssd = "ipaddress";
    ${$GLOBALS["ybvnnfoabp"]} = "Indefinido";
    $ltnvvbot = "ipaddress";
    if (isset($_SERVER)) {
        $tdfpclcpg = "ipaddress";
        $GLOBALS["ewqlxymw"] = "ipaddress";
        $ipaddress = $_SERVER["REMOTE_ADDR"];
        if (isset($_SERVER["HTTP_X_FORWARDED_FOR"])) {
            $ipaddress = $_SERVER["HTTP_X_FORWARDED_FOR"];
        } elseif (isset($_SERVER["HTTP_CLIENT_IP"])) {
            ${$GLOBALS["ybvnnfoabp"]} = $_SERVER["HTTP_CLIENT_IP"];
        }
    } else {
        $GLOBALS["fvfmpeiiebhg"] = "ipaddress";
        $GLOBALS["qkhgjlnayg"] = "ipaddress";
        $jztzuln = "ipaddress";
        $ipaddress = getenv("REMOTE_ADDR");
        if (getenv("HTTP_X_FORWARDED_FOR")) {
            $ipaddress = getenv("HTTP_X_FORWARDED_FOR");
        } elseif (getenv("HTTP_CLIENT_IP")) {
            $ipaddress = getenv("HTTP_CLIENT_IP");
        }
    }
    $GLOBALS["lsowqode"] = "ipaddress";
    ${$pztaymssd} = htmlspecialchars(${$ltnvvbot}, ENT_QUOTES, "UTF-8");
    return $ipaddress;
}
function validaUsuario($usuario, $senha, $ip, $tipo)
{
    global $_SG;
    $GLOBALS["xffjywiv"] = "senha_usuario";
    session_start();
    $GLOBALS["wwgdopdr"] = "usuario";
    $GLOBALS["kmkjdlysz"] = "tipo";
    ${$GLOBALS["mxabwqaw"]} = ${$GLOBALS["yewpubwtdxr"]}["caseSensitive"] ? "BINARY" : "";
    $tnxtpy = "sql";
    ${$GLOBALS["yafdmqxhgw"]} = sql_injector($usuario);
    $senha_usuario = sql_injector(${$GLOBALS["pxbaeolhf"]});
    if ($tipo == "donoadmin") {
        $GLOBALS["amtewgrl"] = "login_usuario";
        ${$GLOBALS["evnhlekqdfv"]} = "SELECT * FROM admin WHERE login = '" . $login_usuario . "' AND senha = '" . ${$GLOBALS["vtgwgc"]} . "' LIMIT 1";
    } else {
        $GLOBALS["wxlwesex"] = "senha_usuario";
        ${$GLOBALS["evnhlekqdfv"]} = "SELECT * FROM usuario WHERE login = '" . ${$GLOBALS["yafdmqxhgw"]} . "' AND senha = '" . $senha_usuario . "' LIMIT 1";
    }
    global $conn;
    ${$GLOBALS["evnhlekqdfv"]} = $conn->prepare(${$tnxtpy});
    $GLOBALS["pshhcgnxnbk"] = "resultado";
    $sql->execute();
    ${$GLOBALS["wqgvbirj"]} = $sql->fetch();
    if (empty($resultado)) {
        return false;
    } else {
        if (${$GLOBALS["couqacippng"]} == "donoadmin") {
            $vxgslne = "resultado";
            $GLOBALS["qqvfwngvnb"] = "resultado";
            $fgtvmstzxw = "resultado";
            $_SESSION["usuarioID"] = $resultado["id_administrador"];
            $_SESSION["usuarioNome"] = $resultado["nome"];
            $_SESSION["usuarioLogin"] = ${$GLOBALS["wqgvbirj"]}["login"];
            $_SESSION["usuarioSenha"] = $resultado["senha"];
            $_SESSION["tipo"] = "donoadmin";
            $_SESSION["segmax"] = ${$GLOBALS["dppyibok"]};
            $_SESSION["ipmax"] = ${$GLOBALS["orekeroo"]};
            $_SESSION["ipsession"] = ${$GLOBALS["kxamrksooh"]};
        } else {
            $GLOBALS["iukkqpe"] = "resultado";
            $_SESSION["usuarioID"] = $resultado["id_usuario"];
            $_SESSION["usuarioNome"] = ${$GLOBALS["wqgvbirj"]}["nome"];
            $GLOBALS["vxtdhxm"] = "accessKEY";
            $GLOBALS["rfevrwawupc"] = "ip";
            $GLOBALS["esclajbv"] = "resultado";
            $_SESSION["usuarioLogin"] = $resultado["login"];
            $_SESSION["usuarioSenha"] = ${$GLOBALS["wqgvbirj"]}["senha"];
            $_SESSION["tipo"] = "user";
            $GLOBALS["cjhowgp"] = "ipdominio";
            $_SESSION["segmax"] = $accessKEY;
            $_SESSION["ipmax"] = $ipdominio;
            $_SESSION["ipsession"] = $ip;
        }
        return true;
    }
}
function validaUsuariossh($usuario, $senha, $ip, $tipo)
{
    global $_SG;
    $GLOBALS["tyqrcq"] = "senha_usuario";
    $fbewcwl = "_SG";
    $GLOBALS["iffqvvkypcy"] = "login_usuario";
    session_start();
    $GLOBALS["cdryvh"] = "resultado";
    $zjdeseikgw = "senha";
    ${$GLOBALS["mxabwqaw"]} = $_SG["caseSensitive"] ? "BINARY" : "";
    $login_usuario = sql_injector(${$GLOBALS["hbyuizxdjspx"]});
    $fexwlvhivg = "sql";
    $GLOBALS["zutjcxn"] = "sql";
    ${$GLOBALS["vtgwgc"]} = sql_injector(${$zjdeseikgw});
    ${$GLOBALS["evnhlekqdfv"]} = "SELECT * FROM conta_ssh WHERE login = '" . ${$GLOBALS["yafdmqxhgw"]} . "' AND senha = '" . $senha_usuario . "' LIMIT 1";
    global $conn;
    ${$fexwlvhivg} = $conn->prepare($sql);
    $sql->execute();
    ${$GLOBALS["wqgvbirj"]} = $sql->fetch();
    if (empty($resultado)) {
        return false;
    } else {
        $_SESSION["usuarioID"] = ${$GLOBALS["wqgvbirj"]}["id_usuario_ssh"];
        $yvurungv = "resultado";
        $GLOBALS["yilejsezm"] = "ipdominio";
        $_SESSION["usuarioLogin"] = $resultado["login"];
        $GLOBALS["yrgxqdfl"] = "resultado";
        $_SESSION["usuarioSenha"] = $resultado["senha"];
        $_SESSION["tipo"] = ${$GLOBALS["couqacippng"]};
        $_SESSION["segmax"] = ${$GLOBALS["dppyibok"]};
        $_SESSION["ipmax"] = $ipdominio;
        $_SESSION["ipsession"] = ${$GLOBALS["kxamrksooh"]};
        return true;
    }
}
function protegePagina($tipo)
{
    $GLOBALS["hgqylthkqkkk"] = "sql";
    $GLOBALS["jrnmrilsho"] = "_SG";
    global $_SG;
    session_start();
    $GLOBALS["yxwcurdv"] = "login_usuario";
    $GLOBALS["lbuesdypxths"] = "sql";
    $jwcshaotzyq = "cS";
    $cS = $_SG["caseSensitive"] ? "BINARY" : "";
    $login_usuario = $_SESSION["usuarioLogin"];
    ${$GLOBALS["vtgwgc"]} = $_SESSION["usuarioSenha"];
    $prnwbmlovb = "tipo";
    $GLOBALS["apjnyvdtvur"] = "resultado";
    $gypxemjla = "resultado";
    if ($tipo == "donoadmin") {
        ${$GLOBALS["evnhlekqdfv"]} = "SELECT * FROM admin WHERE login = '" . ${$GLOBALS["yafdmqxhgw"]} . "' AND senha = '" . ${$GLOBALS["vtgwgc"]} . "' LIMIT 1";
    } else {
        $swhqqd = "sql";
        $GLOBALS["lbjfdkx"] = "login_usuario";
        $sql = "SELECT * FROM usuario WHERE login = '" . $login_usuario . "' AND senha = '" . ${$GLOBALS["vtgwgc"]} . "' LIMIT 1";
    }
    global $conn;
    $sql = $conn->prepare($sql);
    $sql->execute();
    ${$gypxemjla} = $sql->fetch();
    if (empty($resultado)) {
        expulsaVisitante();
    } else {
        if (${$GLOBALS["couqacippng"]} == "donoadmin") {
            if ($_SESSION["usuarioID"] !== ${$GLOBALS["wqgvbirj"]}["id_administrador"]) {
                expulsaVisitante();
            }
            $ujyxdxsuioc = "resultado";
            if ($_SESSION["usuarioNome"] !== $resultado["nome"]) {
                expulsaVisitante();
            }
            $atvfqdkinjtx = "accessKEY";
            $GLOBALS["htzsrlyh"] = "ipdominio";
            if ($_SESSION["segmax"] !== $accessKEY) {
                expulsaVisitante();
            }
            if ($_SESSION["ipmax"] !== $ipdominio) {
                expulsaVisitante();
            }
            if ($_SESSION["ipsession"] !== pega_ip()) {
                expulsaVisitante();
            }
        } else {
            $GLOBALS["bzjxejcwj"] = "resultado";
            if ($_SESSION["usuarioID"] !== $resultado["id_usuario"]) {
                expulsaVisitante();
            }
            if ($_SESSION["usuarioNome"] !== ${$GLOBALS["wqgvbirj"]}["nome"]) {
                expulsaVisitante();
            }
            if ($_SESSION["segmax"] !== ${$GLOBALS["dppyibok"]}) {
                expulsaVisitante();
            }
            if ($_SESSION["ipmax"] !== ${$GLOBALS["orekeroo"]}) {
                expulsaVisitante();
            }
            if ($_SESSION["ipsession"] !== pega_ip()) {
                expulsaVisitante();
            }
        }
    }
}
function protegePaginassh($tipo)
{
    $lbfcvc = "SQLU";
    $oruknnnqj = "sql";
    $GLOBALS["ktxrkaugkdu"] = "sql";
    $ykjcdwhrgso = "login_usuario";
    $GLOBALS["qfyjywyl"] = "_SG";
    $GLOBALS["rxqysbub"] = "senha_usuario";
    $GLOBALS["mfjwls"] = "cS";
    global $_SG;
    $nfrsglxp = "sql";
    session_start();
    $cS = $_SG["caseSensitive"] ? "BINARY" : "";
    $login_usuario = $_SESSION["usuarioLogin"];
    $xwleklgmjw = "resultado";
    $GLOBALS["qkppdqafhg"] = "SQLU";
    $senha_usuario = $_SESSION["usuarioSenha"];
    $sql = "SELECT * FROM conta_ssh WHERE login = '" . ${$GLOBALS["yafdmqxhgw"]} . "' AND senha = '" . ${$GLOBALS["vtgwgc"]} . "' LIMIT 1";
    global $conn;
    $sql = $conn->prepare($sql);
    $sql->execute();
    $resultado = $sql->fetch();
    $SQLU = "SELECT * FROM usuario WHERE id_usuario = '" . ${$GLOBALS["wqgvbirj"]}["id_usuario"] . "'";
    $SQLU = $conn->prepare(${$GLOBALS["grsbhubgnpl"]});
    $SQLU->execute();
    ${$GLOBALS["zcngokutqvtk"]} = $SQLU->fetch();
    if (${$GLOBALS["zcngokutqvtk"]}["ativo"] == 2) {
        echo "<script type=\"text/javascript\">";
        echo "window.location=\"suspenso.php\";";
        echo "</script>";
        exit;
    }
    if (empty(${$GLOBALS["wqgvbirj"]})) {
        expulsaVisitantessh();
    } else {
        if ($_SESSION["usuarioID"] !== ${$GLOBALS["wqgvbirj"]}["id_usuario_ssh"]) {
            expulsaVisitantessh();
        }
        $hhceup = "accessKEY";
        if ($_SESSION["segmax"] !== $accessKEY) {
            expulsaVisitantessh();
        }
        if ($_SESSION["ipmax"] !== ${$GLOBALS["orekeroo"]}) {
            expulsaVisitantessh();
        }
        if ($_SESSION["ipsession"] !== pega_ip()) {
            expulsaVisitantessh();
        }
    }
}
function expulsaVisitante()
{
    session_start();
    global $_SG;
    unset($_SESSION["usuarioID"], $_SESSION["usuarioNome"], $_SESSION["usuarioLogin"], $_SESSION["usuarioSenha"], $_SESSION["tipo"], $_SESSION["segmax"], $_SESSION["ipmax"], $_SESSION["ipsession"]);
    session_destroy();
    header("Location: ../login.php");
    exit;
}
function expulsaVisitantessh()
{
    session_start();
    global $_SG;
    unset($_SESSION["usuarioID"], $_SESSION["usuarioNome"], $_SESSION["usuarioLogin"], $_SESSION["usuarioSenha"], $_SESSION["tipo"], $_SESSION["segmax"], $_SESSION["ipmax"], $_SESSION["ipsession"]);
    session_destroy();
    header("Location: ../login.php");
    exit;
}
function expulsaSair()
{
    session_start();
    global $_SG;
    unset($_SESSION["usuarioID"], $_SESSION["usuarioNome"], $_SESSION["usuarioLogin"], $_SESSION["usuarioSenha"], $_SESSION["tipo"], $_SESSION["segmax"], $_SESSION["ipmax"], $_SESSION["ipsession"]);
    session_destroy();
    header("Location: ../index.php");
    exit;
}
function expulsaSairssh()
{
    session_start();
    global $_SG;
    unset($_SESSION["usuarioID"], $_SESSION["usuarioNome"], $_SESSION["usuarioLogin"], $_SESSION["usuarioSenha"], $_SESSION["tipo"], $_SESSION["segmax"], $_SESSION["ipmax"], $_SESSION["ipsession"]);
    session_destroy();
    header("Location: ../renovassh.php");
    exit;
}
function expulsaall()
{
    session_start();
    global $_SG;
    unset($_SESSION["usuarioID"], $_SESSION["usuarioNome"], $_SESSION["usuarioLogin"], $_SESSION["usuarioSenha"], $_SESSION["tipo"], $_SESSION["segmax"], $_SESSION["ipmax"], $_SESSION["ipsession"]);
    session_destroy();
}
${$GLOBALS["hsxdgbwmq"]} = pega_ip();
${$cgnandvpyra} = json_decode(file_get_contents("https://ipinfo.io/{$ipl}/json"));
@(${$GLOBALS["vbltbcxbpnks"]} = $details->country);
@(${$GLOBALS["dhkjtfh"]} = $details->region);
@(${$GLOBALS["ukyrmnr"]} = $details->city);
@(${$GLOBALS["mfkcqnsb"]} = $details->org);
${$cwbyeytsjn} = preg_replace("/AS\\d{1,}\\s/", "", ${$GLOBALS["mbhrggluwr"]});
@(${$GLOBALS["vcsbokrmpm"]} = $details->loc);
function get_log()
{
    $kenrnd = "line";
    $line = "---------------------------------------------\n[TOA] " . date("d/m/Y H:i:s") . "  [IPV6] " . pega_ip() . "\n" . "[UA] {$_SERVER['HTTP_USER_AGENT']}" . " [OS] " . get_os() . "\n" . " [Browser] " . get_browser_name() . "\n" . " [Device] " . get_device() . "\n" . "[Tor Browser] " . IsTorExitPoint() . "\n";
    ${$GLOBALS["vpwesoie"]} = date("Ymd") . ".log";
    if (file_exists("../logs/" . @${$GLOBALS["zujbniis"]})) {
        file_put_contents("../logs/" . ${$GLOBALS["vpwesoie"]} . "", ${$GLOBALS["nxjazhcvekg"]} . PHP_EOL, FILE_APPEND);
    } else {
        $aqocxvt = "logname1";
        file_put_contents("../logs/" . $logname1 . "", ${$GLOBALS["nxjazhcvekg"]} . PHP_EOL, FILE_APPEND);
    }
}
