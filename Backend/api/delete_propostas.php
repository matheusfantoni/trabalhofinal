<?php
include __DIR__.'/../control/PropostasControl.php';
 
$data = file_get_contents('php://input');
$obj =  json_decode($data);
//echo $obj->titulo;

$id = $obj->id;

if(!empty($data)){	
 $propostasControl = new PropostasControl();
 $propostasControl->delete($obj,$id);
 header('Location:listar.php');
}



?>