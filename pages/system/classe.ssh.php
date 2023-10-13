<?php

$GLOBALS["lxdmqkeaoqfo"] = "blocking";
$GLOBALS["bnnqlpdwj"] = "cmd";
$GLOBALS["kzyofkbohrb"] = "remote";
$GLOBALS["vwhjhcfuvdn"] = "local";
$GLOBALS["jiolksxv"] = "username";
$GLOBALS["gyfbowtgcyy"] = "secret";
$GLOBALS["wdskic"] = "private";
$GLOBALS["xxhkonzyy"] = "auth";
$GLOBALS["nmcynijwcg"] = "port";
class SSH2
{
    var $ssh;
    var $stream;
    function __construct($host, $port = 22)
    {
        $xxpnikb = "port";
        if (!($this->ssh = ssh2_connect($host, $port))) {
            return false;
        }
    }
    function online($host, $port = 22)
    {
        if (!($this->ssh = ssh2_connect($host, $port))) {
            return false;
        } else {
            return true;
        }
    }
    function auth($username, $auth, $private = null, $secret = null)
    {
        $GLOBALS["yippcxei"] = "auth";
        $GLOBALS["mtsjbd"] = "private";
        if (is_file($auth) && is_readable($auth) && isset($private)) {
            $GLOBALS["whcevdttdgn"] = "auth";
            $GLOBALS["xubuprjpb"] = "username";
            if (!ssh2_auth_pubkey_file($this->ssh, $username, $auth, $private, $secret)) {
                return false;
            }
        } else {
            $GLOBALS["jjigxsm"] = "auth";
            if (!ssh2_auth_password($this->ssh, $username, $auth)) {
                return false;
            }
        }
        return true;
    }
    function send($local, $remote, $perm)
    {
        $GLOBALS["wtilcfnvm"] = "perm";
        if (!ssh2_scp_send($this->ssh, $local, $remote, $perm)) {
            return false;
        }
        return true;
    }
    function get($remote, $local)
    {
        $GLOBALS["ictdwxm"] = "remote";
        $gootrqj = "local";
        if (ssh2_scp_recv($this->ssh, $remote, $local)) {
            return false;
        }
        return true;
    }
    function cmd($cmd, $blocking = true)
    {
        $this->stream = ssh2_exec($this->ssh, $cmd);
        stream_set_blocking($this->stream, $blocking);
    }
    function exec($cmd, $blocking = true)
    {
        $GLOBALS["ukkmdswdqhm"] = "blocking";
        $this->cmd($cmd, $blocking = true);
    }
    function output()
    {
        return stream_get_contents($this->stream);
    }
}
