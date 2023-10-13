<?php

$GLOBALS["ribvqnuxmpie"] = "payment";
$GLOBALS["yqkflknb"] = "valor";
$GLOBALS["sqmlcycvvfq"] = "apimp";
$GLOBALS["xibgsolb"] = "login";
$GLOBALS["qypxpqjmm"] = "nome";
$GLOBALS["jehgefabeg"] = "cpf";
$GLOBALS["pdtnttntk"] = "dataexpirefotmat";
$GLOBALS["bhmigqxjcb"] = "accessKEY";
require_once "../vendor/autoload.php";
$pdgeeartq = "ipdominio";
require_once "system/seguranca.php";
require_once "system/config.php";
protegePagina("user");
$GLOBALS["dmpkcz"] = "dataexpire";
if ($_POST["segmax"] !== $accessKEY) {
    expulsaVisitante();
    exit;
}
if ($_POST["ipmax"] !== ${$pdgeeartq}) {
    expulsaVisitante();
    exit;
}
${$GLOBALS["dmpkcz"]} = date("Y-m-d\\TH:i:s", strtotime("+15 minutes"));
${$GLOBALS["pdtnttntk"]} = "{$dataexpire}.000-03:00";
if (isset($_POST["botaopagar"])) {
    $GLOBALS["utkjgwmmjs"] = "login";
    ${$GLOBALS["jehgefabeg"]} = $_POST["cpf"];
    $GLOBALS["sumxfvbkwe"] = "email";
    ${$GLOBALS["qypxpqjmm"]} = $_POST["nome"];
    ${$GLOBALS["xibgsolb"]} = $_POST["login"];
    ${$GLOBALS["sumxfvbkwe"]} = $_POST["email"];
    $kpijpyc = "apimp";
    ${$GLOBALS["sqmlcycvvfq"]} = $_POST["apimp"];
    ${$GLOBALS["yqkflknb"]} = $_POST["valortotal"];
    MercadoPago\SDK::setAccessToken(${$kpijpyc});
    ${$GLOBALS["ribvqnuxmpie"]} = new MercadoPago\Payment();
    $payment->date_of_expiration = ${$GLOBALS["pdtnttntk"]};
    $wicgnz = "email";
    $GLOBALS["aadurrmsd"] = "nome";
    $payment->transaction_amount = ${$GLOBALS["yqkflknb"]};
    $payment->description = "RENOVAR REVENDA";
    $payment->payment_method_id = "pix";
    $payment->payer = array("email" => $email, "first_name" => ${$GLOBALS["utkjgwmmjs"]}, "last_name" => $nome, "identification" => array("type" => "CPF", "number" => ${$GLOBALS["jehgefabeg"]}), "address" => array("zip_code" => "06233200", "street_name" => "Av. das Na\xc3\xa7\xc3\xb5es Unidas", "street_number" => "3003", "neighborhood" => "Bonfim", "city" => "Osasco", "federal_unit" => "SP"));
    $payment->save();
    $_SESSION["apimp"] = ${$GLOBALS["sqmlcycvvfq"]};
    $_SESSION["payment_id"] = $payment->id;
    $_SESSION["ticket_url"] = $payment->point_of_interaction->transaction_data->ticket_url;
    echo "<script type=\"text/javascript\"> window.location=\"../home.php?page=renovar\";</script>";
}
