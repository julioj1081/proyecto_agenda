document.addEventListener("DOMContentLoaded", () =>{
    let form = document.getElementById('form_subir');
    form.addEventListener("submit", function (e){
        e.preventDefault();
        subir_archivos(this);
    });
});

function subir_archivos(form){
    //VARIABLES CON HIJOS
    let barra = form.children[1].children[0],
    span = barra.children[0],
    boton_cancelar = form.children[2].children[1];

    barra.classList.remove('barra_verde', 'barra_roja');

    //Peticion ajax
    let peticion = new XMLHttpRequest();
    //proceso
    peticion.upload.addEventListener("progress", (e)=>{
        let porcentaje = Math.round((e.loaded / e.total) * 100);
        console.log(porcentaje);
        barra.style.width = porcentaje+'%';
        span.innerHTML = porcentaje+'%';
    });

    //CUANDO EL PROCESO HAYA FINALIZADO
    peticion.addEventListener("load", () =>{
        barra.classList.add('barra_verde');
        span.innerHTML = "Proceso completado";
    });

    //ENVIAR DATOS
    peticion.open('post', 'subir.php');
    peticion.send(new FormData(form));
    //CUANDO SE CANCELE precionando el btn
    boton_cancelar.addEventListener("click", ()=>{
        peticion.abort();
        barra.classList.remove('barra_verde');
        barra.classList.add('barra_roja');
        span.innerHTML = "Proceso cancelado";
    }
    );

}