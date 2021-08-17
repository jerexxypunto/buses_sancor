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
let categoria_a_filtrar;
let boton_filtro;
let catalogo;
let contenedor_catalogo;
let catalogo_to_show = [];

let boton_slider;

function categoria_igual(cat) {
    catalogo.forEach(element => {
        if (element.children[2].children[0].textContent === cat) {
            catalogo_to_show.push(element);
        }
    });
}

if (existe(document.querySelector(".boton-enlace"))) {
    boton_slider = document.querySelector(".boton-enlace");
}

// ----------- Si contenedor-filtro existe entonces -->
if (existe(document.querySelector(".contenedor-filtro"))){
    // Defino variables
    slider_filtro = document.querySelector("#filtro");
    boton_filtro = document.querySelector(".btn-sancor");
    catalogo = document.querySelectorAll(".flota-page .contenedor-grid article");
    contenedor_catalogo = document.querySelector(".flota-page .contenedor-grid");
    //  Tomo el valor de input-range y lo convierto a numero entero   
    categoria_a_filtrar = parseInt(slider_filtro.value);
   

   boton_filtro.addEventListener('click',()=>{
      catalogo_to_show = [];
      categoria_a_filtrar = parseInt(slider_filtro.value);
      switch (categoria_a_filtrar) {
          case 0: 
                catalogo.forEach(element => {
                    element.remove();
                });
                contenedor_catalogo.append(...catalogo);
              break;
          case 5: 
                categoria_igual("1-11");
                catalogo.forEach(e => e.remove());
              contenedor_catalogo.append(...catalogo_to_show);
              break;
          case 10: 
                categoria_igual("12-32");
                catalogo.forEach(e => e.remove());
              contenedor_catalogo.append(...catalogo_to_show);
              break;
          case 15: 
                categoria_igual("33-48");
                catalogo.forEach(e => e.remove());
              contenedor_catalogo.append(...catalogo_to_show);
              break;
      
          default:
              break;
      }
   });

}
