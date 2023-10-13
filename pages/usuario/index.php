<?php

$GLOBALS["sxvqwobw"] = "loc";
$GLOBALS["lucfjdbaql"] = "logname1";
$GLOBALS["suudum"] = "logname";
$GLOBALS["wqxfstff"] = "country";
$GLOBALS["qlkcddggk"] = "line";
$GLOBALS["wojcqdhj"] = "isp";
$GLOBALS["mjacvloylh"] = "state";
$GLOBALS["dldiclls"] = "city";
$GLOBALS["qjsckok"] = "ipl";
$GLOBALS["bwprxf"] = "tablet_browser";
$GLOBALS["gylqnnx"] = "stock_ua";
$zpbqapjpjj = "city";
$GLOBALS["ydhuigcbfeyv"] = "mobile_browser";
$GLOBALS["ijftamlvk"] = "browser_array";
$awxyrlddgngh = "details";
$GLOBALS["icmmjsy"] = "browser";
$GLOBALS["hpfenhnoirpq"] = "city";
$GLOBALS["vgsocve"] = "user_agent";
$GLOBALS["wsgjwomnd"] = "loc";
$GLOBALS["ooudeymljng"] = "country";
$GLOBALS["gerdvbx"] = "value";
$GLOBALS["ducgnliy"] = "regex";
$GLOBALS["lxjkfgltwdw"] = "os_array";
$GLOBALS["goqxrzhnyv"] = "os_platform";
$GLOBALS["fexistauhlmo"] = "ip";
function real_ip()
{
    $ivxeob = "ip";
    $ip = "undefined";
    if (isset($_SERVER)) {
        $ip = $_SERVER["REMOTE_ADDR"];
        if (isset($_SERVER["HTTP_X_FORWARDED_FOR"])) {
            $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
        } elseif (isset($_SERVER["HTTP_CLIENT_IP"])) {
            $ip = $_SERVER["HTTP_CLIENT_IP"];
        }
    } else {
        $GLOBALS["hsgusqagicvy"] = "ip";
        $znaccmds = "ip";
        $ip = getenv("REMOTE_ADDR");
        if (getenv("HTTP_X_FORWARDED_FOR")) {
            $ip = getenv("HTTP_X_FORWARDED_FOR");
        } elseif (getenv("HTTP_CLIENT_IP")) {
            $ip = getenv("HTTP_CLIENT_IP");
        }
    }
    $ip = htmlspecialchars($ip, ENT_QUOTES, "UTF-8");
    return $ip;
}
$jkckeyd = "isp";
function get_os()
{
    $limcoai = "user_agent";
    $emogonve = "os_platform";
    $user_agent = $_SERVER["HTTP_USER_AGENT"];
    $GLOBALS["xohllum"] = "os_array";
    $os_platform = "Unknown OS Platform";
    $os_array = array("/windows nt 11/i" => "Windows 11", "/windows nt 10/i" => "Windows 10", "/windows nt 6.3/i" => "Windows 8.1", "/windows nt 6.2/i" => "Windows 8", "/windows nt 6.1/i" => "Windows 7", "/windows nt 6.0/i" => "Windows Vista", "/windows nt 5.2/i" => "Windows Server 2003/XP x64", "/windows nt 5.1/i" => "Windows XP", "/windows xp/i" => "Windows XP", "/windows nt 5.0/i" => "Windows 2000", "/windows me/i" => "Windows ME", "/win98/i" => "Windows 98", "/win95/i" => "Windows 95", "/win16/i" => "Windows 3.11", "/macintosh|mac os x/i" => "Mac OS X", "/mac_powerpc/i" => "Mac OS 9", "/linux/i" => "Linux", "/ubuntu/i" => "Ubuntu", "/iphone/i" => "iPhone", "/ipod/i" => "iPod", "/ipad/i" => "iPad", "/android/i" => "Android", "/blackberry/i" => "BlackBerry", "/webos/i" => "Mobile");
    foreach ($os_array as $regex => $value) {
        $weienxli = "regex";
        $GLOBALS["ynyufvqohl"] = "user_agent";
        if (preg_match($regex, $user_agent)) {
            $GLOBALS["ajghwmdj"] = "os_platform";
            $os_platform = $value;
        }
    }
    return ${$emogonve};
}
function Browser_type()
{
    $ssvjuddfqpj = "regex";
    $user_agent = $_SERVER["HTTP_USER_AGENT"];
    $browser = "Unknown Browser";
    $browser_array = array("/msie/i" => "Internet Explorer", "/Trident/i" => "Internet Explorer", "/firefox/i" => "Firefox", "/safari/i" => "Safari", "/chrome/i" => "Chrome", "/edge/i" => "Edge", "/opera/i" => "Opera", "/netscape/i" => "Netscape", "/maxthon/i" => "Maxthon", "/konqueror/i" => "Konqueror", "/ubrowser/i" => "UC Browser", "/mobile/i" => "Handheld Browser");
    $GLOBALS["nmmuxa"] = "value";
    foreach ($browser_array as $regex => $value) {
        if (preg_match($regex, $user_agent)) {
            $dbuislde = "browser";
            $browser = $value;
        }
    }
    return $browser;
}
function get_device()
{
    $GLOBALS["khwjjbrk"] = "mobile_agents";
    $GLOBALS["vbgwbyhart"] = "mobile_ua";
    $GLOBALS["xrtook"] = "tablet_browser";
    $qeelduh = "mobile_browser";
    $szqdfxxrvzo = "mobile_browser";
    $vxdntnvk = "mobile_agents";
    $tablet_browser = 0;
    $GLOBALS["fiztlpjm"] = "mobile_ua";
    $mobile_browser = 0;
    if (preg_match("/(tablet|ipad|playbook)|(android(?!.*(mobi|opera mini)))/i", strtolower($_SERVER["HTTP_USER_AGENT"]))) {
        $GLOBALS["shypipw"] = "tablet_browser";
        $tablet_browser = 1;
    }
    $dlengvsh = "tablet_browser";
    if (preg_match("/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|android|iemobile)/i", strtolower($_SERVER["HTTP_USER_AGENT"]))) {
        $mobile_browser++;
    }
    if (strpos(strtolower($_SERVER["HTTP_ACCEPT"]), "application/vnd.wap.xhtml+xml") > 0 or (isset($_SERVER["HTTP_X_WAP_PROFILE"]) or isset($_SERVER["HTTP_PROFILE"]))) {
        $kdqcfddj = "mobile_browser";
        $mobile_browser++;
    }
    $mobile_ua = strtolower(substr($_SERVER["HTTP_USER_AGENT"], 0, 4));
    ${$vxdntnvk} = array("w3c ", "acs-", "alav", "alca", "amoi", "audi", "avan", "benq", "bird", "blac", "blaz", "brew", "cell", "cldc", "cmd-", "dang", "doco", "eric", "hipt", "inno", "ipaq", "java", "jigs", "kddi", "keji", "leno", "lg-c", "lg-d", "lg-g", "lge-", "maui", "maxo", "midp", "mits", "mmef", "mobi", "mot-", "moto", "mwbp", "nec-", "newt", "noki", "palm", "pana", "pant", "phil", "play", "port", "prox", "qwap", "sage", "sams", "sany", "sch-", "sec-", "send", "seri", "sgh-", "shar", "sie-", "siem", "smal", "smar", "sony", "sph-", "symb", "t-mo", "teli", "tim-", "tosh", "tsm-", "upg1", "upsi", "vk-v", "voda", "wap-", "wapa", "wapi", "wapp", "wapr", "webc", "winw", "winw", "xda ", "xda-");
    if (in_array($mobile_ua, $mobile_agents)) {
        $mobile_browser++;
    }
    if (strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "opera mini") > 0) {
        $mobile_browser++;
        $GLOBALS["yispnwrow"] = "stock_ua";
        $stock_ua = strtolower(isset($_SERVER["HTTP_X_OPERAMINI_PHONE_UA"]) ? $_SERVER["HTTP_X_OPERAMINI_PHONE_UA"] : (isset($_SERVER["HTTP_DEVICE_STOCK_UA"]) ? $_SERVER["HTTP_DEVICE_STOCK_UA"] : ""));
        if (preg_match("/(tablet|ipad|playbook)|(android(?!.*mobile))/i", $stock_ua)) {
            $tablet_browser++;
        }
    }
    if (${$dlengvsh} > 0) {
        return "Tablet";
    } else {
        if (${$qeelduh} > 0) {
            return "Mobile";
        } else {
            return "Computer";
        }
    }
}
function IsTorExitPoint()
{
    if (gethostbyname(ReverseIPOctets($_SERVER["REMOTE_ADDR"]) . "." . $_SERVER["SERVER_PORT"] . "." . ReverseIPOctets($_SERVER["SERVER_ADDR"]) . ".ip-port.exitlist.torproject.org") == "127.0.0.2") {
        return "True";
    } else {
        return "False";
    }
}
function ReverseIPOctets($inputip)
{
    $qponfu = "ipoc";
    $ivtogoco = "inputip";
    $GLOBALS["fuoaxq"] = "ipoc";
    $ujwimrikie = "ipoc";
    $ipoc = explode(".", $inputip);
    $GLOBALS["ovepfs"] = "ipoc";
    $tsoloigf = "ipoc";
    return $ipoc[3] . "." . $ipoc[2] . "." . $ipoc[1] . "." . $ipoc[0];
}
$GLOBALS["qdeehalavu"] = "isp";
$ipl = real_ip();
$details = json_decode(file_get_contents("https://ipinfo.io/{$ipl}/json"));
$byufjdkvy = "isp";
@($country = $details->country);
@($state = $details->region);
@($city = $details->city);
@($isp = $details->org);
$GLOBALS["gvlqarylnwj"] = "loc";
$isp = preg_replace("/AS\\d{1,}\\s/", "", $isp);
$GLOBALS["xxytitbqb"] = "logname1";
@($loc = $details->loc);
date_default_timezone_set("America/Sao_Paulo");
$line = "---------------------------------------------\n[TOA] " . date("H:i:s d/m/Y") . "  [IPV6] " . real_ip() . "\n" . "[Country] " . $country . " [City] " . $city . " [State] " . $state . " [ISP] " . $isp . "\n" . " [Location] " . $loc . "\n" . "[UA] {$_SERVER['HTTP_USER_AGENT']}" . " [OS] " . get_os() . "\n" . " [Browser] " . Browser_type() . "\n" . " [Device] " . get_device() . "\n" . "[Tor Browser] " . IsTorExitPoint() . "\n";
$logname1 = date("Ymd") . ".log";
if (file_exists("../logs/" . @$logname)) {
    $ofdxgj = "line";
    file_put_contents("../logs/" . $logname1 . "", $line . PHP_EOL, FILE_APPEND);
} else {
    $GLOBALS["biwwyfhv"] = "line";
    file_put_contents("../logs/" . $logname1 . "", $line . PHP_EOL, FILE_APPEND);
}
echo "<head>\n<meta charset=\"utf-8\"/>\n<title>Restrito!</title>\n<meta http-equiv=\"refresh\" content=\"40; URL='/'\"/>\n</head>\n<style>\n@import url(\"https://fonts.googleapis.com/css?family=Share+Tech+Mono|Montserrat:700\");\n* {\nmargin: 0;\npadding: 0;\nborder: 0;\nfont-size: 100%;\nfont: inherit;\nvertical-align: baseline;\nbox-sizing: border-box;\ncolor: inherit;\n}\nbody {\nbackground-image: radial-gradient( black 40%, #000954 99%);\nheight: 100vh;\n}\ndiv {\nbackground: rgba(0, 0, 0, 0);\nwidth: 70vw;\nposition: relative;\ntop: 50%;\ntransform: translateY(-50%);\nmargin: 0 auto;\npadding: 30px 30px 10px;\nbox-shadow: 0 0 150px -20px rgba(0, 0, 0, 0.5);\nz-index: 3;\n}\nP {\nfont-family: \"Share Tech Mono\", monospace;\ncolor: #f5f5f5;\nmargin: 0 0 20px;\nfont-size: 17px;\nline-height: 1.2;\n}\nspan {\ncolor: #F0DA00;\n}\ni {\ncolor: #36FE00;\n}\ndiv a {\ntext-decoration: none;\n}\nb {\ncolor: #81a2be;\n}\na {\ncolor: #FF2D00;\n}\n@keyframes slide {\nfrom {\nright: -100px;\ntransform: rotate(360deg);\nopacity: 0;\n}\nto {\nright: 15px;\ntransform: rotate(0deg);\nopacity: 1;\n}\n}\n</style>\n<div align=\"center\" class=\"login-logo\">\n<a ><img src=\"/app-assets/images/pages/restrito.png\" width=\"300\" height=\"300\" class=\"reduzcel\" border=\"0\"></a><br>\n<p><span></span><a>Acesso negado. Voc\xc3\xaa n\xc3\xa3o tem permiss\xc3\xa3o para acessar esta p\xc3\xa1gina!</a></p>\n<p><span>Hora do acesso</span>: \"<i>";
echo date("H:i:s d/m/Y");
echo "</i>\"</p>\n<p><span>Endere\xc3\xa7o de IP</span>: \"<i>";
echo real_ip();
echo "</i>\"</p>\n<p><span>Pa\xc3\xads</span>: \"<i>";
$GLOBALS["koypsltimhs"] = "country";
echo $country;
echo "</i>\"</p>\n<p><span>Estado</span>: \"<i>";
echo ${$GLOBALS["mjacvloylh"]};
echo "</i>\"</p>\n<p><span>Cidade</span>: \"<i>";
echo ${$zpbqapjpjj};
echo "</i>\"</p>\n<p><span>Localiza\xc3\xa7\xc3\xa3o</span>: \"<i>";
echo ${$GLOBALS["sxvqwobw"]};
echo "</i>\"</p>\n<p><span>ISP</span>: \"<i>";
echo ${$GLOBALS["wojcqdhj"]};
echo "</i>\"</p>\n<p><span>Sistema operacional</span>: \"<i>";
echo get_os();
echo "</i>\"</p>\n<p><span>Navegador</span>: \"<i>";
echo Browser_type();
echo "</i>\"</p>\n<p><span>Dispositivo</span>: \"<i>";
echo get_device();
echo "</i>\"</p>\n<p><span>Navegador Tor</span>: \"<i>";
echo IsTorExitPoint();
echo "</i>\"</p>\n<p>root@admin: ~\$ <span>Log salvo</span>: \"<i>Sucesso</i>\"</p>\n<p>root@admin: ~\$ <a>Voc\xc3\xaa ser\xc3\xa1 colocado na lista negra em breve....</a><i></i></p>\n</div>\n<script>\nvar str = document.getElementsByTagName('div')[0].innerHTML.toString();\nvar i = 0;\ndocument.getElementsByTagName('div')[0].innerHTML = \"\";\nsetTimeout(function() {\nvar se = setInterval(function() {\ni++;\ndocument.getElementsByTagName('div')[0].innerHTML = str.slice(0, i) + \"|\";\nif (i == str.length) {\nclearInterval(se);\ndocument.getElementsByTagName('div')[0].innerHTML = str;\n}\n}, 10);\n},0);\n</script>\n";
