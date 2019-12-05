<?php
include __DIR__.'/../control/ClientesControl.php';
$clientesControl = new ClientesControl();

header('Content-type: application/json');

if ($clientesControl->findAll()) {
	http_response_code(200);
	echo json_encode($clientesControl->findAll());


}
else {
	http_response_code(400);
	echo json_encode(array("mensagem" => "Não encontrado"));
}
?>