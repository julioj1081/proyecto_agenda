document.addEventListener("DOMContentLoaded", () =>{
    
    let form = document.getElementById('register');
   
    form.addEventListener("click", function (e){
        e.preventDefault();
        direccionar(this);
    });
   
    
    /*REDIRECCIONAMIENTO*/
	function direccionar(){
		window.location="../proyecto_gil/registro.html";
    }
   
});