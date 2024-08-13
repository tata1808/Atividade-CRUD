
function validaCadastro() {
	var username = document.getElementById("username").value;
	var password = document.getElementById("password").value;

	if (username == "" || password == "") {
		alert("Preencha todos os campos!");
		return false;
	}

	if (password.length < 8) {
		alert("Senha muito curta! Deve ter no mínimo 8 caracteres.");
		return false;
	}

	return true;
}


function validaLogin() {
	var username = document.getElementById("username").value;
	var password = document.getElementById("password").value;

	if (username == "" || password