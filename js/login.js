function validar() {
	var nombre = document.getElementById("nombre").value;
	var apellido = document.getElementById("apellido").value;
	var usuario = document.getElementById("Name").value;
	var pass = document.getElementById("pass").value;
	
	if (nombre == "" || apellido == "" || usuario == "" || pass == "") {
	  alert("Por favor, llene todos los campos");
	  return false;
	}
	return true;
}

const inputs = document.querySelectorAll(".input");


function addcl(){
	let parent = this.parentNode.parentNode;
	parent.classList.add("focus");
}

function remcl(){
	let parent = this.parentNode.parentNode;
	if(this.value == ""){
		parent.classList.remove("focus");
	}
}


inputs.forEach(input => {
	input.addEventListener("focus", addcl);
	input.addEventListener("blur", remcl);
});
