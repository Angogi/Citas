function toogleview(){

    var ContenedorFormulario = document.getElementById("contenedorPrincipal");
    var TablaCitas = document.getElementById("tablacitas");
 

    console.log("ContenedorFormulario", ContenedorFormulario);
    console.log("TablaCitas", TablaCitas);

    ContenedorFormulario.classList.toggle("active");
    TablaCitas.classList.toggle("active");
    pikachu();
}

function pikachu(){
    var cambioBoton = document.getElementById("desplegable");

    if(cambioBoton.innerHTML=="Formulario"){
        cambioBoton.innerHTML = "Ver Citas";
    }
    else{
        cambioBoton.innerHTML="Formulario";
    }

    console.log("cambioBoton", cambioBoton.outerHTML);

}
