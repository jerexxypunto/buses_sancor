const menu_button = document.querySelector(".navigator_menu--button nav");

menu_button.addEventListener("click", ()=>{
    document.querySelector("#lista-menu").classList.toggle("desbanecido");
})