<?php
include __DIR__.'/Conexao.php';

class Clientes extends Conexao {
    
    private $id;
    private $nome;
    private $telefone;
    private $email;
    private $senha;


    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNome() {
        return $this->nome;
    }

   
    public function setNome($nome) {
        $this->nome = $nome;
        return $this;
    }

    
    public function getTelefone() {
        return $this->telefone;
    }

   
    public function setTelefone($telefone) {
        $this->telefone = $telefone;
        return $this;
    }

    
    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    
    public function getSenha()  {
        return $this->senha;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
        return $this;
    }
    
    
    public function insert($obj){    
    	$sql = "INSERT INTO clientes(nome,telefone,email,senha) VALUES (:nome,:telefone,:email,:senha)";
    	$consulta = Conexao::prepare($sql);
        $consulta->bindValue('nome',  $obj->nome);
        $consulta->bindValue('telefone' , $obj->telefone);
        $consulta->bindValue('senha' , $obj->senha);
        $consulta->bindValue('email', $obj->email);
        $consulta->execute();
        return Conexao::lastId(); /*Aqui vc tem o ID da pessoa, você pode não retornar ele e adicionar uma nova query para inserção e inserir nas duas tabelas ao mesmo tempo se for sempre assim */        
	}

	public function update($obj,$id = null){
		$sql = "UPDATE clientes SET nome = :nome, telefone = :telefone, email = :email, senha = :senha WHERE id = :id ";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('nome', $obj->nome);
		$consulta->bindValue('telefone' , $obj->telefone);		
        $consulta->bindValue('senha' , $obj->senha);
        $consulta->bindValue('email', $obj->email);
        $consulta->bindValue('id', $id);
		return $consulta->execute();
	}

	public function delete($obj,$id = null){
		$sql =  "DELETE FROM clientes WHERE id = :id";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('id',$id);
		$consulta->execute();
	}

	public function find($id = null){
        $sql =  "SELECT * FROM clientes WHERE id = :id";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('id',$id);
        $consulta->execute();
	}

	public function findAll(){
		$sql = "SELECT * FROM clientes";
		$consulta = Conexao::prepare($sql);
		$consulta->execute();
		return $consulta->fetchAll();
	}
}

?>