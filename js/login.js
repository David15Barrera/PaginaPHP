function validar() {
	var nombre = document.getElementById("nombre").value;
	var apellido = document.getElementById("apellido").value;
	var usuario = document.getElementById("Name").value;
	var pass = document.getElementById("pass").value;
	
	if (nombre == "" || apellido == "" || usuario == "" || pass == "") {
	  alert("Por favor, llene todos los campos");
	  return false;
	}
	alert("Usuario registrado");
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

function validarCultivos() {
	var fecha = document.getElementById("fecha").value;
	var cantidad = document.getElementById("cantidad").value;
	var departamento = document.getElementById("departamento").value;
	var metodo = document.getElementById("metodo").value;
	var area = document.getElementById("area").value;
	var errores = "";
  
	if (fecha === "") {
	  errores += "Debe ingresar la fecha de la cosecha.\n";
	}
  
	if (cantidad === "") {
	  errores += "Debe ingresar la cantidad cosechada.\n";
	} else if (isNaN(cantidad)) {
	  errores += "La cantidad debe ser un número.\n";
	}
  
	if (departamento === "") {
	  errores += "Debe seleccionar un departamento.\n";
	}
  
	if (metodo === "") {
	  errores += "Debe ingresar el método de cultivo.\n";
	}
  
	if (area === "") {
	  errores += "Debe ingresar el área cultivada.\n";
	} else if (isNaN(area)) {
	  errores += "El área cultivada debe ser un número.\n";
	}  
	if (errores !== "") {
	  alert(errores);
	  event.preventDefault();
	}else {
		alert("Ingresado");
	  }
  }

  function validarHistorias() {
	var fecha = document.getElementById("nombre").value;
	var cantidad = document.getElementById("Dios").value;
	var departamento = document.getElementById("cargo").value;
	var metodo = document.getElementById("apodo").value;
	var area = document.getElementById("pass").value;
	var errores = "";
  
	if (fecha === "") {
	  errores += "Debe ingresar un Titulo.\n";
	}
  
	if (cantidad === "") {
	  errores += "Debe ingresar un nombre.\n";
	} 
  
	if (departamento === "") {
	  errores += "Debe seleccionar la cultura.\n";
	}
  
	if (metodo === "") {
	  errores += "Debe ingresar el Sombre nombre.\n";
	}
  
	if (area === "") {
	  errores += "Debe ingresar una descripcion.\n";
	} 
  
	if (errores !== "") {
	  alert(errores);
	  event.preventDefault();
	}else {
		alert("Ingresado");
	  }
  }

  function eliminar(id) {
    if (confirm("¿Desea eliminar este registro?")) {
        window.location.href = "eliminar.php?idcultivo=" + id;
    }
}

function eliminarHistorias(id) {
    if (confirm("¿Desea eliminar este registro?")) {
        window.location.href = "eliminarHis.php?idLeyenda=" + id;
    }
}

function eliminarUser(id) {
    if (confirm("¿Desea eliminar este registro?")) {
        window.location.href = "eliminarUser.php?id=" + id;
    }
}