const exprecion_reg = {
    nombre: /\d+/gim,
    telefono: /\w+[A-Z]/gim,
}
const inputs = document.querySelectorAll('#formulario input');
const input_show = document.querySelectorAll('#formulario span');
inputs[0].addEventListener('keyup', (e)=>{
    if (!(exprecion_reg.nombre.test(e.target.value))) {
        if (e.target.value !== "") {
            e.target.classList.remove("incorrecto")
            e.target.classList.add("correcto")
            input_show[0].classList.remove("error");
            input_show[0].classList.add("acepted");
        }else{
            e.target.classList.remove("correcto")
            e.target.classList.add("incorrecto");
            input_show[0].classList.remove("acepted");
            input_show[0].classList.add("error");
        }
    }else{
        e.target.classList.remove("correcto")
        e.target.classList.add("incorrecto");
        input_show[0].classList.remove("acepted");
        input_show[0].classList.add("error");
    }
});
inputs[1].addEventListener('keyup', (e)=>{
    if (!(exprecion_reg.telefono.test(e.target.value))) {
        if (e.target.value !== "") {
            e.target.classList.remove("incorrecto")
            e.target.classList.add("correcto")
            input_show[1].classList.remove("error");
            input_show[1].classList.add("acepted");
        }else{
            e.target.classList.remove("correcto");
            e.target.classList.add("incorrecto");
            input_show[1].classList.remove("acepted");
            input_show[1].classList.add("error");
        }
    }else{
        e.target.classList.remove("correcto")
        e.target.classList.add("incorrecto");
        input_show[1].classList.remove("acepted");
        input_show[1].classList.add("error");
    }
});
inputs[2].addEventListener('keyup', (e)=>{
    if (e.target.value.includes('@')) {
            e.target.classList.remove("incorrecto");
            e.target.classList.add("correcto");
            input_show[2].classList.remove("error");
            input_show[2].classList.add("acepted");
    }else{
        e.target.classList.remove("correcto");
        e.target.classList.add("incorrecto");
        input_show[2].classList.remove("acepted");
        input_show[2].classList.add("error");
    }
});
document.querySelector("#formulario textarea").addEventListener('keyup', (e)=>{
    if(e.target.value !== ""){
        e.target.classList.remove("incorrecto");
        e.target.classList.add("correcto");
    }else{
        e.target.classList.remove("correcto");
        e.target.classList.add("incorrecto");
    }
});