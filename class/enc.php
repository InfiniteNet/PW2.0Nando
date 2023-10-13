<?php

$GLOBALS["agnnylxcg"] = "ivBytes";
$GLOBALS["zwxminujvr"] = "key";
$GLOBALS["fnwvxces"] = "plaintext";
$GLOBALS["hrpxgmwrz"] = "ciphertext";
$GLOBALS["hmgeysxud"] = "iv";
$GLOBALS["mfmrbzc"] = "password";
class AESCrypt
{
    private static $AES_MODE = "AES-256-CBC";
    private static $CHARSET = "UTF-8";
    private static $HASH_ALGORITHM = "sha256";
    private static $ivBytes = "\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00";
    private static function generateKey($password)
    {
        $yvoefog = "HASH_ALGORITHM";
        return hash(self::${$yvoefog}, $password, true);
    }
    public static function encrypt($password, $plaintext)
    {
        $sxunwagejzi = "key";
        $GLOBALS["exjnruuxbnet"] = "ivBytes";
        $setdcqudu = "AES_MODE";
        $wwrycylbik = "iv";
        $key = self::generateKey($password);
        $iv = self::${$GLOBALS["exjnruuxbnet"]};
        $ciphertext = openssl_encrypt($plaintext, self::${$setdcqudu}, $key, OPENSSL_RAW_DATA, $iv);
        return base64_encode($ciphertext);
    }
    public static function decrypt($password, $ciphertext)
    {
        $tbiigqwkqm = "password";
        $GLOBALS["yxbotsg"] = "AES_MODE";
        $iqmaecgjyex = "key";
        $GLOBALS["rjefvnmqir"] = "ciphertext";
        $key = self::generateKey($password);
        $ciphertext = base64_decode($ciphertext);
        $iv = self::${$GLOBALS["agnnylxcg"]};
        $plaintext = openssl_decrypt($ciphertext, self::${$GLOBALS["yxbotsg"]}, $key, OPENSSL_RAW_DATA, $iv);
        return $plaintext;
    }
}
$key = "@MatheusBalbo";
