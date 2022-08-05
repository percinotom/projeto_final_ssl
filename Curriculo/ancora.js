let btnControlaSubMenu = document.querySelector(".checkbtn");
let submenu = document.querySelector(".submenu");
let ancora_perfil = document.querySelector("#ancora-perfil");
let ancora_formacao = document.querySelector("#ancora-formacao");
let ancora_habilidades = document.querySelector("#ancora-habilidades");

ancora_perfil.addEventListener("click", function(){
    submenu.classList.remove("ativo");   
});

ancora_formacao.addEventListener("click", function(){
    submenu.classList.remove("ativo");   
});

ancora_habilidades.addEventListener("click", function(){
    submenu.classList.remove("ativo");   
});

btnControlaSubMenu.addEventListener("click", function(){
    submenu.classList.toggle("ativo");
});