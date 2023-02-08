console.log("hola");

let save = document.getElementById("saveTask");

let description = document.getElementById("description");

let name_task = document.getElementById("name");

const csrfToken = document.getElementById("csrfToken").content;


save.onclick = (event) =>{
    event.preventDefault();

    const consulta = async task => {
        const form = new FormData()
        form.append('name', name_task);
        form.append('description',description);
        form.append('_token', token);

        const resp = await fetch(`${url}/materias`, {
            method: 'post',
            body: form
        });
        try {
            const data = await resp.json();
            data.forEach(item => {
            console.log(item['nombre_materia']);
           });
            console.log(data)
        } catch (error) {
            console.log("Error al obtener la respuesta",error);
        }
    }
      
    
}