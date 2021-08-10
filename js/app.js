const menu_button = document.querySelector(".navigator_menu--button nav");

menu_button.addEventListener("click", ()=>{
    document.querySelector("#lista-menu").classList.toggle("desbanecido");
})

function existe(a) {
    if (a) {
        return true;
    }else{
        return false
    }
}

let slider_filtro;
let parametroFiltro;
let boton_filtro;
let articulos;

// ----------- Si contenedor-filtro existe entonces -->
if (existe(document.querySelector(".contenedor-filtro"))){
   slider_filtro = document.querySelector("#filtro");
   parametroFiltro = parseInt(slider_filtro.value);
   boton_filtro = document.querySelector(".btn-sancor");
   articulos = document.querySelectorAll(".flota-page .contenedor-grid article");
   boton_filtro.addEventListener('click',()=>{
       parametroFiltro = parseInt(slider_filtro.value);
       console.log(parametroFiltro);
       switch (parametroFiltro) {
           case 0:
                articulos.forEach(a =>{
                    if (a.classList[0] == 'opacidad-0' || a.classList[0] == 'moveTop') {
                       a.classList.remove('opacidad-0');
                       a.classList.remove('moveTop');
                    }
                });
               break;
            case 5 :
                articulos.forEach(a => { 
                    a.classList.add('opacidad-0');
                    a.classList.remove('moveTop');
                });
                articulos.forEach(a =>{
                   if (a.children[2].children[0].innerText === "10-15"){
                       a.classList.remove('opacidad-0');
                       a.classList.add('moveTop');
                   }
                });
               break;
            case 10 :
                articulos.forEach(a => { 
                    a.classList.add('opacidad-0');
                    a.classList.remove('moveTop');
                });
                articulos.forEach(a =>{
                   if (a.children[2].children[0].innerText === "15-20"){
                       a.classList.remove('opacidad-0');
                       a.classList.add('moveTop');
                   }
                });
               break;
            case 15 :
                articulos.forEach(a => { 
                    a.classList.add('opacidad-0');
                    a.classList.remove('moveTop');
                });
                articulos.forEach(a =>{
                   if (a.children[2].children[0].innerText === "20-30"){
                       a.classList.remove('opacidad-0');
                       a.classList.add('moveTop');
                   }
                });
               break;
       
           default:
               break;
       }
   })

}
