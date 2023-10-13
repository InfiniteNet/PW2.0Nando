<?php

$GLOBALS["btgwmevmqj"] = "valor";
$GLOBALS["cwjkxpee"] = "dataexpirefotmat";
$GLOBALS["wcbmdprppdh"] = "payment";
$GLOBALS["oexfcydik"] = "apimp";
$GLOBALS["orxigjug"] = "login";
$GLOBALS["mmziiir"] = "nome";
$GLOBALS["bssukowsgjj"] = "cpf";
require_once "vendor/autoload.php";
$oqncsblfphxf = "dataexpirefotmat";
$GLOBALS["eqygxous"] = "accessKEY";
$GLOBALS["udswvgs"] = "ipdominio";
require_once "pages/system/seguranca.php";
require_once "pages/system/config.php";
$GLOBALS["zhupdlulnxb"] = "dataexpire";
protegePaginassh("userssh");
if ($_POST["segmax"] !== $accessKEY) {
    expulsaVisitantessh();
    exit;
}
if ($_POST["ipmax"] !== ${$GLOBALS["udswvgs"]}) {
    expulsaVisitantessh();
    exit;
}
${$GLOBALS["zhupdlulnxb"]} = date("Y-m-d\\TH:i:s", strtotime("+15 minutes"));
${$oqncsblfphxf} = "{$dataexpire}.000-03:00";
if (isset($_POST["botaopagar"])) {
    ${$GLOBALS["bssukowsgjj"]} = $_POST["cpf"];
    ${$GLOBALS["mmziiir"]} = $_POST["nome"];
    $bjtqucfh = "apimp";
    $GLOBALS["axlwgfwjfsc"] = "valor";
    $iokdllq = "email";
    ${$GLOBALS["orxigjug"]} = $_POST["login"];
    ${$iokdllq} = $_POST["email"];
    ${$bjtqucfh} = $_POST["apimp"];
    ${$GLOBALS["axlwgfwjfsc"]} = $_POST["valortotal"];
    MercadoPago\SDK::setAccessToken(${$GLOBALS["oexfcydik"]});
    $GLOBALS["qqvhmhrma"] = "apimp";
    ${$GLOBALS["wcbmdprppdh"]} = new MercadoPago\Payment();
    $GLOBALS["rbwotfnfgxcn"] = "nome";
    $GLOBALS["oupsqgk"] = "login";
    $payment->date_of_expiration = ${$GLOBALS["cwjkxpee"]};
    $payment->transaction_amount = ${$GLOBALS["btgwmevmqj"]};
    $payment->description = "RENOVA\xc3\x87\xc3\x83O SSH";
    $payment->payment_method_id = "pix";
    $payment->payer = array("email" => "{$login}@gestorssh.com", "first_name" => $login, "last_name" => $nome, "identification" => array("type" => "CPF", "number" => ${$GLOBALS["bssukowsgjj"]}), "address" => array("zip_code" => "06233200", "street_name" => "Av. das Na\xc3\xa7\xc3\xb5es Unidas", "street_number" => "3003", "neighborhood" => "Bonfim", "city" => "Osasco", "federal_unit" => "SP"));
    $payment->save();
    $_SESSION["apimp"] = ${$GLOBALS["qqvhmhrma"]};
    $_SESSION["payment_id"] = $payment->id;
    $_SESSION["ticket_url"] = $payment->point_of_interaction->transaction_data->ticket_url;
    echo "<script type=\"text/javascript\"> window.location=\"renovarssh.php\";</script>";
}
