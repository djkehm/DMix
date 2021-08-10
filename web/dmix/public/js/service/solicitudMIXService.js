const getSolicitudMIX = async (filtro ="todos")=>{
    let resp;
    if(filtro == "todos"){
        resp = await axios.get("api/solicitud_mix/get");
    }else {
        resp = await axios.get(`api/solicitud_mix/filtrar?filtro=${filtro}`);
    }
    return resp.data;
};
//crearConsola

const crearSolicitudMIX = async (solicitudmix)=>{ //arrow functions
    
    //Estructura de peticion post al servidor con axios
    let resp = await axios.post("api/solicitud_mix/post", solicitudmix, {
        headers: {
            "Content-Type": "application/json"
        }
    });
    return resp.data;
};

const eliminarSolicitudMIX = async(id)=>{
    try{
        let resp = await axios.post("api/solicitud_mix/delete", {id}, {
            headers:{
                "Content-Type": "application/json"
            }
        });
        return resp.data == "ok";
    }catch(e){
        return false;
    }
    
}