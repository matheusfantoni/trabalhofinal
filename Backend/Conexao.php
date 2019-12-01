<?php


try{
	
	$conexao = new PDO ("mysql:dbname=techweb;host=localhost", "root", "");
	

} 

catch (PDOException $e) {
	
	echo "Erro com banco de dados: " .$e->getMessage();
}

catch (Exception $e){

	echo "Erro genérico: ".$e->getMessage();
}


$conexao->query("INSERT INTO clientes(nome, telefone, email, senha) 
	VALUES ('Matheus Fantoni', '99999999', 'matheus@live.com', '123456')");
$conexao->query("INSERT INTO clientes(nome, telefone, email, senha) 
	VALUES ('Ana Paula', '9999-9999', 'anapaulas@live.com', '123456')");