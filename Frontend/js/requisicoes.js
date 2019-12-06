window.onload = function(e) {
	fetch(
		'http://localhost/trabalhofinal/Backend/model/clientes', {		
		}).then(response => response.json())				
	.then(data => { 
		console.log(data);
		data.forEach(pessoa => {  
			var table = document.getElementById("clientes");
			var row = table.insertRow(-1);
			var idColuna = row.insertCell(0);
			var nomeColuna = row.insertCell(1); 
			var telefoneColuna = row.insertCell(2); 
			var emailColuna = row.insertCell(3); 
			var senhaColuna = row.insertCell(4); 
			 
			idColuna.innerHTML = clientes.id;
			nomeColuna.innerHTML = clientes.nome;
			telefoneColuna.innerHTML = clientes.telefone;
			emailColuna.innerHTML = clientes.email;
			senhaColuna.innerHTML = clientes.senha;
			
		})
	}).catch(error => console.error(error))
}

function adicionarPessoa(){
	document.getElementById('formClientes').style.display="block"
}

function enviarForm() {
	var form = document.getElementById('adicionarClientes');
	var data = {};
	data['nome'] = form.nome.value 
	data['telfone'] = form.telefone.value;
	data['email'] = form.email.value;
	data['senha'] = form.senha.value; 
	
	// console.log(JSON.stringify(data));
	fetch('http://localhost/trabalhofinal/Backend/model/clientes', {
		method: 'POST',       
		body: JSON.stringify(data)
	})
	.then((response) => {
		if (response.ok) {
			return response.json() 
		} else {
			return Promise.reject({ status: res.status, statusText: res.statusText });
		}   

	})
	.then((data) => console.log(data))
	.catch(err => console.log('Error message:', err.statusText));
}
