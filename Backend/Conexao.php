<?php

// ---------------------------- CONEXAO -----------------------
try{
	
	$conexao = new PDO ("mysql:dbname=techweb;host=localhost", "root", "");
	

} 

catch (PDOException $e) {
	
	echo "Erro com banco de dados: " .$e->getMessage();
}

catch (Exception $e){

	echo "Erro genérico: ".$e->getMessage();
}

// ------------------------ INSERÇÃO DOS DADOS NO BANCO -----------------

/*$conexao->query("INSERT INTO clientes(nome, telefone, email, senha) 
	VALUES ('Matheus Fantoni', '99999999', 'matheus@live.com', '123456')");
$conexao->query("INSERT INTO clientes(nome, telefone, email, senha) 
	VALUES ('Ana Paula', '9999-9999', 'anapaulas@live.com', '123456')");*/


//--------------------------- DELETAR  --------------------------


/*$cmd = $conexao->query("DELETE FROM clientes WHERE id = '5'");*/


//---------------------- UPDATE --------------------------------------


/*$cmd = $conexao->query("UPDATE clientes SET email = 'anapaulamartins@gmail.com' WHERE id = '4'");*/


//-------------------------- SELECT --------------------------------------


$cmd = $conexao->query("SELECT * FROM clientes WHERE id = '4'");
$resultado = $cmd->fetch(PDO::FETCH_ASSOC);

foreach ($resultado as $key => $value) {
	echo $key.":".$value."<br>";
}

/*fetch(); -> pegar informação do que vem do banco de dados e transformar em um array. (for it)
/*fechAll(); -> trazer todos os registros do banco de dados*/



?>

