document.querySelector("#enviarMIX-btn").addEventListener("click", async ()=>{
    let nombre = document.querySelector("#nombre-txt").value.trim();
    let dj = document.querySelector("#dj-txt").value.trim();
    let fecha = document.querySelector('#fecha-txt').value.trim();
    let descripcion = document.querySelector('#descripcion-txt').value.trim();

    let errores = [];
    if(dj === ""){
        errores.push("Debe ingresar un A.K.A DJ");
    }else{
        //Validar si la consola existe en el sistema
        let solicitudesMIX = await getSolicitudMIX(); //TODO: Hay que mejorarlo
        //Nintendo SWITCH, == nintendo switch, == Nintendo Switch
        
    }
    if(nombre === ""){
        errores.push("Debe ingresar un nombre");
    }
    if(descripcion === ""){
        errores.push("Debe ingresar una descripcion sobre el DJ");
    }

    //Si no hubieron errores
    if(errores.length == 0){

        let solicitudmix = {};
        solicitudmix.nombre = nombre;
        solicitudmix.dj = dj;
        solicitudmix.fecha = fecha;
        solicitudmix.estado = "no"    //Cuando el administrador la revisa cambia el estado de la solicitud
        solicitudmix.descripcion = descripcion;
        //TODO: Falta validar!!!
        //Solo esta linea hace:
        //1. Va al controlador, le pasa los datos
        //2. EL controlador crea el modelo
        //3. El modelo ingresa en la base de datos
        //4. Todos felices
        let res = await crearSolicitudMIX(solicitudmix); 
        await Swal.fire("Solicitud realizada", "Solicitud realizada exitosamente", "info");
        //La linea que viene despues del Swal.fire se va a ejecutar solo cuando la persona aprete el OK
        //Aqui a redirigir a otra página
    
        window.location.href = "home";
        //abrir nueva pestaña
        //window.open("www.google.cl","_blank");
    } else {
        //Mostrar errores
        Swal.fire({
            title: "Errores de validacion",
            icon: "warning",
            html: errores.join("<br />")
        });
    }
});