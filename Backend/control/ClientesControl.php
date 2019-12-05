<?php
include __DIR__.'/../model/Clientes.php';

class ClientesControl{
	function insert($obj){
		$clientes = new Clientes();
		return $clientes->insert($obj);		
	}

	function update($obj,$id){
		$clientes = new Clientes();
		return $clientes->update($obj,$id);
	}

	function delete($obj,$id){
		$clientes = new Clientes();
		return $clientes->delete($obj,$id);
	}

	function find($id = null){
		$clientes = new Clientes();
		return $clientes->find($id);
	}

	function findAll(){
		$clientes = new Clientes();
		return $clientes->findAll();
	}
}

?>