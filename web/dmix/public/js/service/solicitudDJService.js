const getSolicitudDJ = async (filtro ="todos")=>{
    let resp;
    if(filtro == "todos"){
        resp = await axios.get("api/solicitud_djs/get");
    }else {
        resp = await axios.get(`api/solicitud_djs/filtrar?filtro=${filtro}`);
    }
    return resp.data;
};
//crearConsola

const crearSolicitudDJ = async (solicituddj)=>{ //arrow functions
    
    //Estructura de peticion post al servidor con axios
    let resp = await axios.post("api/solicitud_djs/post", solicituddj, {
        headers: {
            "Content-Type": "application/json"
        }
    });
    return resp.data;
};

const eliminarSolicitudDJ = async(id)=>{
    try{
        let resp = await axios.post("api/solicitud_djs/delete", {id}, {
            headers:{
                "Content-Type": "application/json"
            }
        });
        return resp.data == "ok";
    }catch(e){
        return false;
    }
    
}