
const token = document.getElementById("csrfToken").content;
let save = document.getElementById("saveTask");
let id = document.getElementById("id_task").value
let ruta = document.getElementById("ruta").value;

const consulta = async () => {

    let description = document.getElementById("description");
    let name_task = document.getElementById("name");
    let url = window.location.origin;

    const form = new FormData()
    form.append('name', name_task.value);
    form.append('description', description.value);
    form.append("id",id);
    form.append('_token', token);

    const resp = await fetch(`${url}/${ruta}`, {
        method: 'post',
        body: form
    });

    try {
        const data = await resp.json();
        document.getElementById("noti").classList.remove("d-none")
        setTimeout(function (){
            document.getElementById("noti").classList.add("d-none")
        },2000)
        
        if (ruta == "createTask") {
            name_task.value = "";
            description.value = "";
        }
    } catch (error) {
        console.log("Error al obtener la respuesta", error);
    }
} 

const validar = () =>{
    let description = document.getElementById("description");
    let name_task = document.getElementById("name");
    if (description.value.length === 0 || name_task.value.length === 0) {
        document.getElementById("mensaje").classList.remove("d-none")
        setTimeout(function (){
            document.getElementById("mensaje").classList.add("d-none")
        },2000)
        
    }
    else{
        consulta()
    }
}
save.onclick = (event) => {    
    event.preventDefault();
    validar()
    
}



