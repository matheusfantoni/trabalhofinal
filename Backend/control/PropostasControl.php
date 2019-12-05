<?php
include __DIR__.'/../model/Propostas.php';

class PropostasControl{
	function insert($obj){
		$propostas = new Propostas();
		//echo $obj->titulo;
		return $propostas->insert($obj);
	}

	function update($obj,$id){
		$propostas = new Propostas();
		return $propostas->update($obj,$id);
	}

	function delete($obj,$id){
		$propostas = new Propostas();
		return $propostas->delete($obj,$id);
	}

	function find($id = null){
		$propostas = new Propostas();
		return $propostas->find($id);
	}

	function findAll(){
		$propostas = new Propostas();
		return $propostas->findAll();
	}
}

?>