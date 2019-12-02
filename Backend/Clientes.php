<?php

Class Clientes{

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

	public function cadastrarClientes($nome, $telefone, $email, $senha){

		// ANTES DE CADASTRAR VERIFICAR SE O EMAIL JA ESTÁ SENDO UTILIZADO

		$cmd = $this->pdo->prepare("SELECT id FROM clientes WHERE email = :e");

		$cmd->bindValue(":e" , $email);
		$cmd->execute();

		if($cmd->rowCount() > 0){ //Email ja existe no banco

			return false;
	}

	else{ //Não foi encontrado o email

		$cmd = $this->pdo->prepare("INSERT INTO clientes(nome, telefone, email, senha) VALUES (:n, :t, :e, :s)");
			$cmd->bindValue(":n", )
	}
		

}



?>