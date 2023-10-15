<?php

$GLOBALS["lgywyjm"] = "weeks";
$GLOBALS["zeeeevockcs"] = "hours";
$GLOBALS["artrwte"] = "minutes";
$GLOBALS["kojxedci"] = "years";
$GLOBALS["ogwtfihojr"] = "months";
$GLOBALS["ipesofelvdby"] = "days";
$GLOBALS["ftuwtorziir"] = "seconds";
$GLOBALS["lfxellgcmq"] = "diff";
$GLOBALS["slprdghxt"] = "time";
$GLOBALS["wgirxvi"] = "now";
require_once "config.php";
echo tempo_corrido("2022-01-07 19:00:38");
function tempo_corrido($time)
{
    $GLOBALS["fctmkcgiplmo"] = "seconds";
    $egxmcqd = "time";
    $GLOBALS["qjznrgw"] = "weeks";
    $hbrgcwkc = "minutes";
    $now = strtotime(date("Y-m-d H:i:s"));
    $GLOBALS["nfgdqob"] = "diff";
    $GLOBALS["yytwiy"] = "years";
    $uhbgdygc = "diff";
    $gbpuydcdaxa = "diff";
    $wwzpyiz = "diff";
    $time = strtotime($time);
    $GLOBALS["ygskrbtpykn"] = "hours";
    $jyxpkxamtss = "months";
    $GLOBALS["tfgjsjmkyor"] = "seconds";
    $xwxljpv = "minutes";
    $diff = $now - $time;
    $seconds = $diff;
    $minutes = round($diff / 60);
    $hours = round($diff / 3600);
    $xsxtmxyaowt = "minutes";
    $undhsdlhagf = "hours";
    $days = round($diff / 86400);
    $weeks = round($diff / 604800);
    $months = round($diff / 2419200);
    $years = round($diff / 29030400);
    $uxvccs = "days";
    $jodovnulylh = "months";
    if ($seconds <= 60) {
        return $seconds == 1 ? "1 seg atr\xc3\xa1s" : $seconds . " seg atr\xc3\xa1s";
    } else {
        if ($minutes <= 60) {
            return $minutes == 1 ? "1 min atr\xc3\xa1s" : $minutes . " min atr\xc3\xa1s";
        } else {
            if ($hours <= 24) {
                return $hours == 1 ? "1 hrs atr\xc3\xa1s" : $hours . " hrs atr\xc3\xa1s";
            } else {
                if ($days <= 7) {
                    return $days == 1 ? "1 dia atr\xc3\xa1s" : $days . " dias atr\xc3\xa1s";
                } else {
                    if ($weeks <= 4) {
                        return $weeks == 1 ? "1 semana atr\xc3\xa1s" : $weeks . " semanas atr\xc3\xa1s";
                    } else {
                        if ($months <= 12) {
                            return $months == 1 ? "1 m\xc3\xaas atr\xc3\xa1s" : $months . " meses atr\xc3\xa1s";
                        } else {
                            return $years == 1 ? "um ano atr\xc3\xa1s" : $years . " anos atr\xc3\xa1s";
                        }
                    }
                }
            }
        }
    }
}
