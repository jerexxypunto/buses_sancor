let completado = {nombre:false,telefono:false,correo:false,msg:false};

const exprecion_reg = {
    nombre: /^[a-zA-ZÁ-ÿ\s]{1,40}$/gim,
    telefono: /^\d{7,14}$/gim,
}
const inputs = document.querySelectorAll('#formulario input');
const input_show = document.querySelectorAll('#formulario span');

const verificar = (e) => {
    switch (e.target.name) {
        case "nombreDePila":
            if (exprecion_reg.nombre.test(e.target.value)) {
                if (e.target.value !== "") {
                    e.target.classList.remove("incorrecto")
                    e.target.classList.add("correcto")
                    input_show[0].classList.remove("error");
                    input_show[0].classList.add("acepted");
                    completado.nombre = true;
                } else {
                    e.target.classList.remove("correcto")
                    e.target.classList.add("incorrecto");
                    input_show[0].classList.remove("acepted");
                    input_show[0].classList.add("error");
                    completado.nombre = false;
                }
            } else {
                e.target.classList.remove("correcto")
                e.target.classList.add("incorrecto");
                input_show[0].classList.remove("acepted");
                input_show[0].classList.add("error");
                completado.nombre = false;
            }
            break;
        case "telefono":
            if (exprecion_reg.telefono.test(e.target.value)) {
                if (e.target.value !== "") {
                    e.target.classList.remove("incorrecto")
                    e.target.classList.add("correcto")
                    input_show[1].classList.remove("error");
                    input_show[1].classList.add("acepted");
                    completado.telefono = true;
                } else {
                    e.target.classList.remove("correcto");
                    e.target.classList.add("incorrecto");
                    input_show[1].classList.remove("acepted");
                    input_show[1].classList.add("error");
                    completado.telefono = false;
                }
            } else {
                e.target.classList.remove("correcto")
                e.target.classList.add("incorrecto");
                input_show[1].classList.remove("acepted");
                input_show[1].classList.add("error");
                completado.telefono = false;
            }
        case "correo":
            if (e.target.value.includes('@')) {
                e.target.classList.remove("incorrecto");
                e.target.classList.add("correcto");
                input_show[2].classList.remove("error");
                input_show[2].classList.add("acepted");
                completado.correo = true;
            } else {
                e.target.classList.remove("correcto");
                e.target.classList.add("incorrecto");
                input_show[2].classList.remove("acepted");
                input_show[2].classList.add("error");
                completado.correo = false;
            }
        default:
            break;
    }
}
document.querySelector("#formulario textarea").addEventListener('keyup', (e)=>{
    if(e.target.value !== ""){
        e.target.classList.remove("incorrecto");
        e.target.classList.add("correcto");
        completado.msg = true;
    }else{
        e.target.classList.remove("correcto");
        e.target.classList.add("incorrecto");
        completado.msg = false;
    }
});

inputs.forEach(input =>{
    input.addEventListener('keyup', verificar);
    input.addEventListener('blur', verificar);
});

setInterval(() => {
    if (completado.nombre && completado.telefono && completado.correo && completado.msg) {
        document.querySelector(".submit-ocultar").classList.add('disabled');
        document.querySelector("#formulario .alert-container").style.display = 'none';
    }else{
        document.querySelector(".submit-ocultar").classList.remove('disabled');
        document.querySelector("#formulario .alert-container").style.display = 'block';
    }
}, 100);