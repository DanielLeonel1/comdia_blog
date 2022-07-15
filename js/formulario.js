const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input')


const expreciones = {
	usu_correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]{2,3}$/,
	usu_contra: /^[A-Za-z0-9_-]{4,12}$/
}

const campos = {
	usu_correo: false,
	usu_contra: false
}

var $usu_correo = document.querySelector("#grupo_correo");
var $usu_contra = document.querySelector("#grupo_contra");


const validarFormulario = (e) => {
	switch (e.target.name){
		case "usu_correo":
		if (expreciones.usu_correo.test(e.target.value)) {
			usu_correo.style.borderColor="#17ff00";
			usu_correo.style.background="#eafaf1";
			$usu_correo.style.borderColor = "#17ff00";
			campos['usu_correo'] = true;
		}else{
			usu_correo.style.borderColor="#ff0000";
			usu_correo.style.background="#fceae9";
			$usu_correo.style.borderColor = "#17ff00";
			campos['usu_correo'] = false;
		}
		break;


		case "usu_contra":
		if (expreciones.usu_contra.test(e.target.value)) {
			usu_contra.style.borderColor="#17ff00";
			usu_contra.style.background="#eafaf1";
			$usu_contra.style.borderColor = "#17ff00";
			campos['usu_contra'] = true;
		}else{
			usu_contra.style.borderColor="#ff0000";
			usu_contra.style.background="#fceae9";
			$usu_contra.style.borderColor = "#17ff00";
			campos['usu_contra'] = false;
		}		
		break;


	}
}


inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario);
	input.addEventListener('blur', validarFormulario);
});



formulario.addEventListener('submit', (e) => {
	if (campos.usu_correo && campos.usu_contra) {


	}else{
		e.preventDefault();
		formulario.reset();
		alert("Cumple con el formato solicitado");
	}
});