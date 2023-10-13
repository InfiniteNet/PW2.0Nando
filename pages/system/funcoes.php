<?php

$GLOBALS["xosnuulj"] = "SQLUsuario";
$GLOBALS["vrefrhgdbk"] = "session";
$GLOBALS["ysbocwdkvy"] = "var";
$GLOBALS["kmwoiqoun"] = "palavra";
$GLOBALS["lehuuskg"] = "uid";
$GLOBALS["ivscnldcetm"] = "xtm";
$GLOBALS["eyodij"] = "sql";
$GLOBALS["phdrgh"] = "months";
$GLOBALS["eblcfaonpdj"] = "days";
$GLOBALS["cwvencj"] = "years";
$GLOBALS["hblqutruqn"] = "weeks";
$GLOBALS["plqyoq"] = "hours";
$GLOBALS["dudocegwjiv"] = "minutes";
$GLOBALS["gogcpkzgmn"] = "seconds";
$GLOBALS["tehrekuwxvd"] = "diff";
$GLOBALS["xzhdkuuukdd"] = "time";
$GLOBALS["gsdcxqqsbe"] = "now";
$GLOBALS["iflfhyzq"] = "fp";
$GLOBALS["tkylrx"] = "errstr";
$GLOBALS["apmunte"] = "errno";
$GLOBALS["bflwintjecaw"] = "PORTA";
$GLOBALS["pcqixabtmrgj"] = "Port";
$GLOBALS["mkeqzie"] = "IP";
require_once "seguranca.php";
function Pinga($IP, $PORTA)
{
    $GLOBALS["kmyxlmxt"] = "IPAddress";
    $wyasdys = "IPAddress";
    $IPAddress = $IP;
    $GLOBALS["kulhrecclnwx"] = "Port";
    $Port = $PORTA;
    $GLOBALS["wakimscii"] = "fp";
    $fp = @fsockopen($IPAddress, $Port, $errno, $errstr, 0.5);
    if (!$fp) {
        return 1;
    } else {
        return 0;
    }
}
function tempo_corrido($time)
{
    $GLOBALS["rklhrtnijnf"] = "weeks";
    $qruzpzcg = "minutes";
    $now = strtotime(date("Y-m-d H:i:s"));
    $npdmixvp = "months";
    $time = strtotime($time);
    $GLOBALS["ihhqyykwuz"] = "diff";
    $GLOBALS["uvqbkyb"] = "diff";
    $GLOBALS["hmrijfrgkuig"] = "weeks";
    $diff = $now - $time;
    $GLOBALS["totbqmgsoytn"] = "diff";
    $seconds = $diff;
    $minutes = round($diff / 60);
    $hours = round($diff / 3600);
    $GLOBALS["gysujra"] = "days";
    $days = round($diff / 86400);
    $ykinvvmzfd = "seconds";
    $cmeccf = "months";
    $GLOBALS["erxuoraau"] = "hours";
    $weeks = round($diff / 604800);
    $months = round($diff / 2419200);
    $years = round($diff / 29030400);
    $GLOBALS["qwhnifdm"] = "days";
    $ozjifbcx = "years";
    if ($seconds <= 60) {
        return $seconds == 1 ? "1 seg " : $seconds . " seg ";
    } else {
        if ($minutes <= 60) {
            return $minutes == 1 ? "1 min " : $minutes . " min ";
        } else {
            if ($hours <= 24) {
                return $hours == 1 ? "1 hrs " : $hours . " hrs ";
            } else {
                if ($days <= 7) {
                    return $days == 1 ? "1 dia atr\xc3\xa1s" : $days . " dias ";
                } else {
                    if ($weeks <= 4) {
                        return $weeks == 1 ? "1 semana " : $weeks . " semanas ";
                    } else {
                        if ($months <= 12) {
                            return $months == 1 ? "1 m\xc3\xaas " : $months . " meses ";
                        } else {
                            return $years == 1 ? "um ano " : $years . " anos ";
                        }
                    }
                }
            }
        }
    }
}
function tempo_final($time, $time_f)
{
    $dwegkcsmmfh = "now";
    $bnvvoflc = "seconds";
    $GLOBALS["pxewnrfp"] = "months";
    $ouxnhyugq = "weeks";
    $GLOBALS["lkcqxrzy"] = "time_f";
    $euckfx = "now";
    $fkxjdnyncum = "diff";
    $noafpiu = "hours";
    $GLOBALS["kgrwcsbrqxwe"] = "diff";
    $wefyevah = "diff";
    $GLOBALS["evyqkxuyjwr"] = "seconds";
    $GLOBALS["ylursdxn"] = "time";
    $vnhkdpfyix = "weeks";
    $ylckcxmistiu = "years";
    $now = strtotime($time_f);
    $time = strtotime($time);
    $gxbhtuk = "seconds";
    $diff = $now - $time;
    $GLOBALS["odxonm"] = "hours";
    $seconds = $diff;
    $GLOBALS["cqyumef"] = "weeks";
    $minutes = round($diff / 60);
    $GLOBALS["qimrwtdame"] = "diff";
    $uiditvu = "minutes";
    $hours = round($diff / 3600);
    $days = round($diff / 86400);
    $weeks = round($diff / 604800);
    $months = round($diff / 2419200);
    $years = round($diff / 29030400);
    if ($seconds <= 60) {
        return $seconds == 1 ? "1 seg " : $seconds . " seg ";
    } else {
        if ($minutes <= 60) {
            return $minutes == 1 ? "1 min " : $minutes . " min ";
        } else {
            if ($hours <= 24) {
                return $hours == 1 ? "1 hrs " : $hours . " hrs ";
            } else {
                if ($days <= 7) {
                    return $days == 1 ? "1 dia atr\xc3\xa1s" : $days . " dias ";
                } else {
                    if ($weeks <= 4) {
                        return $weeks == 1 ? "1 semana " : $weeks . " semanas ";
                    } else {
                        if ($months <= 12) {
                            return $months == 1 ? "1 m\xc3\xaas " : $months . " meses ";
                        } else {
                            return $years == 1 ? "um ano " : $years . " anos ";
                        }
                    }
                }
            }
        }
    }
}
function getLogged($sid)
{
    global $conn;
    $conn->query("DELETE FROM sessao WHERE expira<'" . time() . "'");
    $sql = $conn->query("SELECT * FROM sessao WHERE id='{$sid}'")->rowCount();
    if ($sql > 0) {
        if (!getAdm(getIdBySid($sid))) {
            return false;
        }
        $xtm = time() + 2000;
        $conn->query("UPDATE sessao SET expira='{$xtm}'WHERE id='{$sid}'");
        return true;
    } else {
        return false;
    }
}
function getIdBySid($sid)
{
    global $conn;
    $GLOBALS["xquheyogyj"] = "uid";
    $GLOBALS["nkjnalmk"] = "sql";
    $sql = $conn->query("SELECT uid FROM sessao WHERE id='{$sid}'")->fetch();
    @($uid = $sql[0]);
    return $uid;
}
function getAdm($uid)
{
    $GLOBALS["qodphbsfew"] = "uid";
    global $conn;
    $wscchk = "sql";
    $sql = $conn->query("SELECT * FROM admin WHERE id_administrador='" . $uid . "'")->rowCount();
    if ($sql > 0) {
        return true;
    } else {
        return false;
    }
}
function getIdByAdm($nick)
{
    $uoczrk = "sql";
    global $conn;
    $sql = $conn->query("SELECT id_administrador FROM admin WHERE login='{$nick}'")->fetch();
    return $sql[0];
}
function removerEspeciais($palavra)
{
    $GLOBALS["bwwgfyjjssm"] = "palavra";
    $GLOBALS["ujvwseqo"] = "palavra";
    $palavra = preg_replace("[^a-zA-Z0-9_]", "", strtr($palavra, "\xc3\xa1\xc3\xa0\xc3\xa3\xc3\xa2\xc3\xa9\xc3\xaa\xc3\xad\xc3\xb3\xc3\xb4\xc3\xb5\xc3\xba\xc3\xbc\xc3\xa7\xc3\xb1\xc3\x81\xc3\x80\xc3\x83\xc3\x82\xc3\x89\xc3\x8a\xc3\x8d\xc3\x93\xc3\x94\xc3\x95\xc3\x9a\xc3\x9c\xc3\x87\xc3\x91 ", "aaaaeeiooouucAAAAEEIOOOUUC_"));
    $palavra = sql_injector($palavra);
    return $palavra;
}
function validarNumero($palavra)
{
    $GLOBALS["gnvutfpau"] = "var";
    $dyiyledfc = "palavra";
    return is_numeric($palavra) ? $var = 0 : ($var = 1);
}
function getIDUsuario()
{
    $session = empty($_SESSION["usuarioID"]) ? 0 : $_SESSION["usuarioID"];
    return $session;
}
function getUsuario($id)
{
    $vgzobvilxnp = "usuario";
    $esudcjin = "id";
    $SQLUsuario = "SELECT * FROM usuario WHERE id_usuario = '" . $id . "'";
    $ckuwlhgw = "SQLUsuario";
    $SQLUsuario = $conn->prepare($SQLUsuario);
    $SQLUsuario->execute();
    $usuario = $SQLUsuario->fetch();
    $owdoionegui = "usuario";
    return $usuario;
}
