
import Swal from '/node_modules/sweetalert2/dist/sweetalert2';




document.addEventListener("DOMContentLoaded", function() {
    let miImagen = document.getElementById("miImagen");
    let miImagen1 = document.getElementById("miImagen1");
    let name = document.getElementById('name');
    let name1 = document.getElementById('name1');
    let name3 = document.getElementById('name3');
    let bio = document.getElementById('bio');

    if (miImagen.getAttribute("src") === "" && miImagen1.getAttribute("src") === ""  ) {
        
        miImagen.src = "https://d500.epimg.net/cincodias/imagenes/2016/07/04/lifestyle/1467646262_522853_1467646344_noticia_normal.jpg";
        miImagen1.src = "https://d500.epimg.net/cincodias/imagenes/2016/07/04/lifestyle/1467646262_522853_1467646344_noticia_normal.jpg";
    } 

  

        if (name.innerHTML.trim() === ""  &&  name1.innerHTML.trim() === "" ) {
            name.innerHTML = "@userExample";
            name1.innerHTML = "@userExampled";
           
    }

    if (name3.innerHTML.trim() === ""  ) {
        
        name3.innerHTML = "@userExampled";
       
}


    if (bio.innerHTML.trim() === "") {
        bio.innerHTML = "@some descriptcion here";

}








});


