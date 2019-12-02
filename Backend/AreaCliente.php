<?php

Class AreaCliente{

	private $pdo;

	// CONEXAO COM O BANCO DE DADOS
	public function__construct($dbname, $host, $user, $senha)

	{
		try{

		$this->pdo = new PDO("mysql:dbname=" . $dbname . ";host=" .$host, $user, $senha);
	}

	catch (PDOException $e) {
		echo "Erro com banco de dados: " .$e->getMessage();

		exit();
	}
	
	{
		catch (Exception $e){
			echo "Erro genérico: " .$e->getMessage();
			exit();
		}

	}

	public function buscarDados()
	{
		$res = array();

		$cmd = $this->conexao->query("SELECT * FROM propostas ORDER BY id ");
		$res = $cmd->fetchAll(PDO::FETCH_ASSOC);

		return $res;
	}

	public function cadastrarProposta($data, $serviço, $urgencia, $obs, $telefone){

		
	}

}



?>