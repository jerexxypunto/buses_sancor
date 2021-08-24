let completado = {nombre:false,telefono:false,correo:false,msg:false};

const exprecion_reg = {
    nombre: /^[a-zA-ZÁ-ÿ]{1,40}\s[a-zA-ZÁ-ÿ]{1,40}(\s[a-zA-ZÁ-ÿ]{1,40})?$/gim,
    telefono: /^\+\d{7,14}$/gim,
}
const inputs = document.querySelectorAll('#formulario input');
const input_show = document.querySelectorAll('#formulario span');

const verificar = (e) => {
    switch (e.target.name) {
        case "nombreDePila":
            console.log(exprecion_reg.nombre.test(e.target.value));
            break;
        case "telefono":
            console.log(exprecion_reg.telefono.test(e.target.value));
            break;
        case "correo":
            console.log(e.target.value.includes("@"));
            break;
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
    input.addEventListener("keypress", verificar);
    input.addEventListener("blur", (e) => { 
        console.log(e.target);
        console.log(e.target.value);
        console.log(exprecion_reg.nombre);
        console.log(exprecion_reg.nombre.test(e.target.value));
    });

});

// setInterval(() => {
//     if (completado.nombre && completado.telefono && completado.correo && completado.msg) {
//         document.querySelector(".submit-ocultar").classList.add('disabled');
//         document.querySelector("#formulario .alert-container").style.display = 'none';
//     }else{
//         document.querySelector(".submit-ocultar").classList.remove('disabled');
//         document.querySelector("#formulario .alert-container").style.display = 'block';
//     }
// }, 100);