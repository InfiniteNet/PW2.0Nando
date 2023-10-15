<?php

$GLOBALS["jvsarz"] = "result";
$GLOBALS["hphbkeaeb"] = "dateEdit";
$GLOBALS["cvazjjqkh"] = "dadosJson";
$GLOBALS["wfeuxskqrmmz"] = "dadosJson";
session_start();
$dadosJson = file_get_contents("msg.json");
$GLOBALS["xzcdvj"] = "dadosJsonDecodificados";
$hptkjlnsmh = "result";
$dadosJsonDecodificados = json_decode($dadosJson);
$srzwejqfv = "msgEdit";
$GLOBALS["sqssvm"] = "msgEdit";
$wlyyfnbyis = "result";
$GLOBALS["jeyfkjoeqyb"] = "dados";
foreach ($dadosJsonDecodificados->valores as $dados) {
    $GLOBALS["uaikfeeqhtly"] = "data";
    $vibbhvszf = "mensagem";
    $mensagem = $dados->msg;
    $data = $dados->data;
}
${$srzwejqfv} = $_POST["msg"];
${$GLOBALS["hphbkeaeb"]} = date("d-m-Y");
${$hptkjlnsmh} = "{\n  \"valores\": [\n    {\n      \"msg\": \"" . ${$GLOBALS["sqssvm"]} . "\",\n      \"data\": \"" . ${$GLOBALS["hphbkeaeb"]} . "\"\n    }\n  ]\n}";
file_put_contents("msg.json", ${$GLOBALS["jvsarz"]});
if (file_put_contents("msg.json", ${$wlyyfnbyis})) {
    $_SESSION["message"] = "Editado com sucesso!";
    header("location: /gltunnel.php");
} else {
    $_SESSION["message"] = "Erro ao editar!";
    header("location: /gltunnel.php");
}
