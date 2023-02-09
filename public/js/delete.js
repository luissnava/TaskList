
const token = document.getElementById("csrfToken").content;
let url = window.location.origin;
let vaciar = document.getElementById("vaciar");
const form = new FormData()


const eliminar = async (id) => {
    form.append("id", id);
    form.append('_token', token);

    const resp = await fetch(`${url}/deleteTask`, {
        method: 'post',
        body: form
    });

    try {
        const data = await resp.json();
        window.location.reload()

    } catch (error) {
        console.log("Error al obtener la respuesta", error);
    }
}


const restaurar = async (id) => {
    
    form.append("id", id);
    form.append('_token', token);

    const resp = await fetch(`${url}/restart-task`, {
        method: 'post',
        body: form
    });

    try {
        const data = await resp.json();
        window.location.reload()

    } catch (error) {
        console.log("Error al obtener la respuesta", error);
    }
}

const reciclar = async () => {
    
    form.append('_token', token);

    const resp = await fetch(`${url}/delete-complete`, {
        method: 'post',
        body: form
    });

    try {
        const data = await resp.json();
        window.location.reload()

    } catch (error) {
        console.log("Error al obtener la respuesta", error);
    }
}
vaciar.onclick = () =>{
   reciclar()
}