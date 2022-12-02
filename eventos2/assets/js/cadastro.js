const form = document.getElementById('form')
const usuario = document.getElementById('usuario')
const firstname = document.getElementById('firstname')
const lastname = document.getElementById('lastname')
const senha = document.getElementById('password')
const confirmsenha = document.getElementById('confirmPassword')


form.addEventListener('submit', (e) => {
    e.preventDefault()

    if(checkInputs()){
        e.target.submit();
    }
});

function checkInputs() {
    // flag to submit form
    const status = true;

    const usuarioValue = usuario.value.trim()
    const senhaValue = senha.value.trim()
    const firstnameValue = firstname.value.trim()
    const lastnameValue = lastname.value.trim()
    const confirmsenhaValue = confirmsenha.value.trim()

    var numeros = /([0-9])/;
	var alfabeto = /([a-zA-Z])/;
    var prontuario =/^gu{1}/i;
   
    if(firstnameValue === '') {
        // mostrar erro
        // add classe
        setErrorFor(firstname, 'Preencha esse campo')
        status = false;
    } else if(firstnameValue.match(numeros)){
        setErrorFor(firstname, 'Campo não deve conter números')
        status = false;
    }else{
        // adicionar a classe de sucesso
        setSuccessFor(firstname)
    }
    if(lastnameValue === '') {
        // mostrar erro
        // add classe
        setErrorFor(lastname, 'Preencha esse campo')
        status = false;
    } else if(lastnameValue.match(numeros)){
        setErrorFor(lastname, 'Campo não deve conter números')
        status = false;
    }else{
        // adicionar a classe de sucesso
        setSuccessFor(lastname)
    }
    if(usuarioValue === '') {
        // mostrar erro
        // add classe
        setErrorFor(usuario, 'Preencha esse campo')
        status = false;
    } else if(usuarioValue.length != 9 ) { 
        setErrorFor(usuario, 'Prontuário deve ter 9 caracteres ')
        status = false;
    } else if(!usuarioValue.match(numeros) || !usuarioValue.match(alfabeto) || !usuarioValue.match(prontuario) ){
        setErrorFor(usuario, 'Prontuario de ter o GU (ex: GUXX0X0X0)')
        status = false;
    }else{
        // adicionar a classe de sucesso
        setSuccessFor(usuario)
    }

    if(senhaValue === '') {
        // mostrar erro
        // add classe
        setErrorFor(senha, 'Preencha esse campo')
        status = false;

    } else if(senhaValue.length < 8) { 
        setErrorFor(senha, 'Senha deve ter mais que 8 caracteres')
        status = false;
    } else if(!senhaValue.match(numeros) || !senhaValue.match(alfabeto)){
        setErrorFor(senha, 'Senha deve ter letras e números')
        status = false;
    }else {
        // adicionar a classe de sucesso
        setSuccessFor(senha)
		//window.location.assign("select.php");
    }
    if(confirmsenhaValue != senhaValue) {
        // mostrar erro
        // add classe
        setErrorFor(confirmsenha, 'Preencha a mesma senha do campo anterior')
        status = false;

    } else {
        // adicionar a classe de sucesso
        setSuccessFor(confirmsenha)
		//window.location.assign("select.php");
    }
    return status;

}
function setErrorFor(input, message) {
    const textfield = input.parentElement;
    const small = textfield.querySelector('small')

    small.innerText = message

    textfield.className = 'input-box textfield error'
}

function setSuccessFor(input) {
    const textfield = input.parentElement;

    textfield.className = 'input-box textfield success'
}
/*
function isEmail(email) {
    return /^(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/.test(email)
}


const form = document.getElementById('form')
const usuario = document.getElementById('usuario')
const senha = document.getElementById('senha')


//form.addEventListener('submit',checkInputs)
form.addEventListener("submit", function() {
	preventDefault()
	checkInputs()
	alert(form);
})

function checkInputs(){
	const usuarioValue = usuario.value.trim()
	const senhaValue   =  senha.value.trim()

	if(usuarioValue === ''){
		//mostra o erro
		//adicionar a classe error
		errorValidotion(usuario, 'Preencha esse campo')
	} else{
		//adicionar a classe de sucesso
		successValidation(usuario)
	}
}

function errorValidotion(input, message) {
	const textfield = input.parentElement;
	const small = textfield.querySelector('small')

	small.innerText = message 

	textfield.className = 'textfield error'
}

function successValidation(input) {
	const textfield = input.parentElement;

	textfield.className = "textfield success"
}
*/