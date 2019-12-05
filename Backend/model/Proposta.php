<?php
include __DIR__.'/Conexao.php';

class Propostas extends Conexao {
	
    private $id;
    private $data;
    private $serviço;
    private $urgencia;
    private $obs;
    private $telefone;

    
    function getId() {
        return $this->id;
    }

    function getData() {
        return $this->data;
    }

    function getServiço() {
        return $this->serviço;
    }

    function getUrgencia() {
        return $this->urgencia;
    }

    function getObs() {
        return $this->obs;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setData($data) {
        $this->data = $data;
    }

    function setServiço($serviço) {
        $this->serviço = $serviço;
    }

    function setUrgencia($urgencia) {
        $this->urgencia = $urgencia;
    }

    function setObs($obs) {
        $this->obs = $obs;
    }

    function setTelefone($telefone){
        $this->telefone = $telefone;
    }

    public function insert($obj){
    	$sql = "INSERT INTO propostas(data,serviço,urgencia,obs,telefone) VALUES (:data,:serviço,:urgencia,:obs,:telefone)";
    	$consulta = Conexao::prepare($sql);
        $consulta->bindValue('data',  $obj->data);
        $consulta->bindValue('serviço', $obj->serviço);
        $consulta->bindValue('urgencia' , $obj->urgencia);        
        $consulta->bindValue('obs' , $obj->obs);
        $consulta->bindValue('telefone' , $obj->telefone);
    	return $consulta->execute();
	}

	public function update($obj,$id = null){
		$sql = "UPDATE propostas SET data = :data, serviço = :serviço,urgencia = :urgencia, obs = :obs, telefone = :telefone WHERE id = :id ";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('data', $obj->data);
		$consulta->bindValue('serviço', $obj->serviço);
		$consulta->bindValue('urgencia' , $obj->urgencia);
		$consulta->bindValue('obs' , $obj->obs);
        $consulta->bindValue('telefone' , $obj->telefone);
		$consulta->bindValue('id', $id);
		return $consulta->execute();
	}

	public function delete($obj,$id = null){
		$sql =  "DELETE FROM propostas WHERE id = :id";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('id',$id);
		$consulta->execute();
	}

	public function find($id = null){
        $sql =  "SELECT * FROM propostas WHERE id = :id";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('id',$id);
        $consulta->execute();
	}

	public function findAll(){
		$sql = "SELECT * FROM propostas";
		$consulta = Conexao::prepare($sql);
		$consulta->execute();
		return $consulta->fetchAll();
	}

}

?>