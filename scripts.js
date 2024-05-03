//Ejecutando funciones
document.getElementById("btn_iniciar").addEventListener("click", iniciarSesion);
document.getElementById("btn_registro").addEventListener("click", register);

//Declarando variables
var formulariologin = document.querySelector(".formulariologin");
var Formularioregistro = document.querySelector(".Formularioregistro");
var contenedor_formularioinicio = document.querySelector(".contenedor_formularioinicio");
var cajatraseralogin = document.querySelector(".cajatraseralogin");
var cajatraseraregistrar = document.querySelector(".cajatraseraregistrar");

    //FUNCIONES

function anchoPage(){

    if (window.innerWidth > 850){
        cajatraseraregistrar.style.display = "block";
        cajatraseralogin.style.display = "block";
    }else{
        cajatraseraregistrar.style.display = "block";
        cajatraseraregistrar.style.opacity = "1";
        cajatraseralogin.style.display = "none";
        formulariologin.style.display = "block";
        contenedor_formularioinicio.style.left = "0px";
        Formularioregistro.style.display = "none";   
    }

}

anchoPage();


    function iniciarSesion(){
        if (window.innerWidth > 850){
            formulariologin.style.display = "block";
            contenedor_formularioinicio.style.left = "10px";
            Formularioregistro.style.display = "none";
            cajatraseraregistrar.style.opacity = "1";
            cajatraseralogin.style.opacity = "0";
        }else{
            formulariologin.style.display = "block";
            contenedor_formularioinicio.style.left = "0px";
            Formularioregistro.style.display = "none";
            cajatraseraregistrar.style.display = "block";
            cajatraseralogin.style.display = "none";
        }
    }

    function register(){
        if (window.innerWidth > 850){
            Formularioregistro.style.display = "block";
            contenedor_formularioinicio.style.left = "410px";
            formulariologin.style.display = "none";
            cajatraseraregistrar.style.opacity = "0";
            cajatraseralogin.style.opacity = "1";
        }else{
            Formularioregistro.style.display = "block";
            contenedor_formularioinicio.style.left = "0px";
            formulariologin.style.display = "none";
            cajatraseraregistrar.style.display = "none";
            cajatraseralogin.style.display = "block";
            cajatraseralogin.style.opacity = "1";
        }
}