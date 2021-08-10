document.addEventListener("DOMContentLoaded", async ()=>{
    let solicitud_djs = await getSolicitudDJ();
    cargarTabla(solicitud_djs);
});

const cargarTabla = (solicitud_djs)=>{
    //1. Obtener una referencia al cuerpo de la tabla
    let tbody = document.querySelector("#tbody-solicitudes_djs");
    tbody.innerHTML = "";
    //2. Recorrer todas las consolas
    for(let i=0; i < solicitud_djs.length; ++i){
        //3. Por cada consola generar una fila
        let tr = document.createElement("tr");
        //4. Generar por cada atributo de la consola, un td
        let tdIdSolicitud = document.createElement("td");
        tdIdSolicitud.innerText = solicitud_djs[i].id;
        let tdNombre = document.createElement("td");
        tdNombre.innerText = solicitud_djs[i].dj;

        let tdStatus = document.createElement("td");
        tdStatus.innerText = solicitud_djs[i].estado;

        if(tdStatus=="no"){
            tdStatus.value = "SOLICITUD ENVIDA"; 
        }else{
            tdStatus.value = "SOLICITUD ACEPTADA";
        }
        
        //5. Agregar los td al tr
        tr.appendChild(tdIdSolicitud);
        tr.appendChild(tdNombre);
        tr.appendChild(tdStatus);
        //6. Agregar el tr al cuerpo de la tabla
        tbody.appendChild(tr);
    }

};

