document.addEventListener("DOMContentLoaded", async ()=>{
    let solicitud_mix = await getSolicitudMIX();
    cargarTabla(solicitud_mix);
});

const cargarTabla = (solicitud_djs)=>{
    //1. Obtener una referencia al cuerpo de la tabla
    let tbody = document.querySelector("#tbody-solicitudes_mix");
    tbody.innerHTML = "";
    //2. Recorrer todas las consolas
    for(let i=0; i < solicitud_mix.length; ++i){
        //3. Por cada consola generar una fila
        let tr = document.createElement("tr");
        //4. Generar por cada atributo de la consola, un td
        let tdIdSolicitud = document.createElement("td");
        tdIdSolicitud.innerText = solicitud_mix[i].id;
        

        let tdStatus = document.createElement("td");
        tdStatus.innerText = solicitud_mix[i].estado;

        if(tdStatus=="no"){
            tdStatus.value = "SOLICITUD ENVIDA"; 
        }
        else{
            tdStatus.value = "SOLICITUD ACEPTADA";
        }
        
        //5. Agregar los td al tr
        tr.appendChild(tdIdSolicitud);
        tr.appendChild(tdStatus);
        //6. Agregar el tr al cuerpo de la tabla
        tbody.appendChild(tr);
    }

};