document.addEventListener('DOMContentLoaded', function () {
    obtenerToken();
});
async function registrarToken() {
    try {
        let valores = new FormData(frm_new_token);
        valores.append('sesion', session_session);
        valores.append('token', token_token);
        let result = await fetch(base_url_server + 'src/control/controller-tokensApi.php?tipo=registrarToken', {
            mode: 'cors',
            method: 'POST',
            cache: 'no-cache',
            body: valores
        });
        let json = await result.json();
        let form = document.getElementById("frm_new_token");
        let modal = bootstrap.Modal.getInstance(document.getElementById('AgregarToken'));
        if (json.status) {
            form.reset();
            modal.hide();
            console.log('registrado');
            obtenerToken();
        } else {
            alert(json.mensaje);
            console.log(json.mensaje);
        }
    } catch (e) {
        console.log("Error function || " + e);
    }
}

async function obtenerToken() {
    let tableBody = document.getElementById("tbody_tokens");
    try {
        let valores = new FormData();
        valores.append('sesion', session_session);
        valores.append('token', token_token);
        let result = await fetch(base_url_server + 'src/control/controller-tokensApi.php?tipo=listarTokens', {
            mode: 'cors',
            method: 'POST',
            cache: 'no-cache',
            body: valores
        });
        let json = await result.json();
        if (json.status) {
            tableBody.innerHTML = '';
            let datos = json.contenido;
            if (datos.length > 0) {
                let contador = 0;
                datos.forEach(item => {
                    let tr = document.createElement("tr");
                    tr.id = item.id;
                    contador++;
                    tr.innerHTML = `
                                    <td><a href="#!">#${contador}</a></td>
                                    <td>${item.creado_en}</td>
                                    <td><a href="#!">${item.token}</a></td>
                                                      
                                    <td><a href="" class="link-dark" data-bs-toggle="modal" data-bs-target="#act_token" onclick="obtnertokeninfo(${item.id});"><i class="ri-edit-line align-middle fs-20"></i></a> </td>                
               `;
                    tableBody.append(tr);
                });
            } else {
                tableBody.innerHTML = '<tr><td colspan="5">no hay tokens para mostrar</td></tr>';
            }
        } else {
            console.log(json.mensaje);
            tableBody.innerHTML = '<tr><td colspan="5">Error al mostrar tokens</td></tr>';
        }
    } catch (e) {
        console.log("Error function || " + e);
    }
}

async function obtnertokeninfo(idToken) {
    let token = document.getElementById("tokenApi_new");
    let descripcion = document.getElementById("descripcion_new");
    let idtoken = document.getElementById("idToken_new");
    let body = document.querySelector("#actualizazrToken .modal-body");
    try {
        let datos = new FormData();
        datos.append('sesion', session_session);
        datos.append('token', token_token);
        datos.append('idToken', idToken);
        let result = await fetch(base_url_server + 'src/control/controller-tokensApi.php?tipo=obtenerDatosToken', {
            mode: 'cors',
            method: 'POST',
            cache: 'no-cache',
            body: datos
        });
        let json = await result.json();
        if (json.status) {
            let tokenData = json.contenido;
            idtoken.value = tokenData.id;
            token.value = tokenData.token;
            descripcion.value = tokenData.descripcion;
        }else{
            body.innerHTML = `<div class="alert alert-danger" role="alert">
                                      Error al obtener los datos del token.
                                 </div>`;
        }
    } catch (e) {
        console.log("Error function || " + e);
    }
}

async function actualizarToken() {
    try {
        let valores = new FormData(frm_update_token);
        valores.append('sesion', session_session);
        valores.append('token', token_token);
        let result = await fetch(base_url_server + 'src/control/controller-tokensApi.php?tipo=actualizarToken', {
            mode: 'cors',
            method: 'POST',
            cache: 'no-cache',
            body: valores
        });
        let json = await result.json();
        if (json.status) {
            let modal = bootstrap.Modal.getInstance(document.getElementById('act_token'));
            modal.hide();
            obtenerToken();
        } else {
            alert(json.mensaje);
            console.log(json.mensaje);
        }
    } catch (e) {
        console.log("Error function || " + e);
    }
}