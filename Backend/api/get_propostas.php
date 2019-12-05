<?php
include __DIR__.'/../control/PropostasControl.php';
$propostasControl = new PropostasControl();

header('Content-Type: application/json');

echo json_encode($propostasControl->findAll());

// foreach($conteudoControl->findAll() as $valor){
// 	echo json_encode($valor);
// }


?>