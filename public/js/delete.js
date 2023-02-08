const eliminar = async (id) => {
    const token = document.getElementById("csrfToken").content;
    let url = window.location.origin;

    const form = new FormData()
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
    const token = document.getElementById("csrfToken").content;
    let url = window.location.origin;

    const form = new FormData()
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