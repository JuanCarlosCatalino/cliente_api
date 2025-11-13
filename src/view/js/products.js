function createLoaderIfNotExists() {
  if (document.getElementById('fullpage-loader')) return;
  const div = document.createElement('div');
  div.id = 'fullpage-loader';
  div.className = 'hidden';
  div.innerHTML = `
    <div class="loader-box">
      <div class="spinner-border" role="status" style="width:4rem; height:4rem;">
        <span class="visually-hidden">Loading...</span>
      </div>
      <div style="margin-top:12px; font-weight:600;">Cargando...</div>
    </div>
  `;
  document.body.appendChild(div);
}

function showLoader() {
  createLoaderIfNotExists();
  const loader = document.getElementById('fullpage-loader');
  loader.classList.remove('hidden');
  // fuerza repaint para la transición si quieres
  void loader.offsetWidth;
  loader.style.opacity = '1';
  loader.style.visibility = 'visible';
}

function hideLoader() {
  const loader = document.getElementById('fullpage-loader');
  if (!loader) return;
  loader.classList.add('hidden');
  loader.style.opacity = '0';
  loader.style.visibility = 'hidden';
}


document.addEventListener('DOMContentLoaded', function () {
    obtenerToken();
    listarTodosLosPlatos();
});

//funcion para obtner token de mi base dedatos y podedr enviar 
async function obtenerToken() {
    try {
        let info = new FormData();
        info.append('sesion', session_session);
        info.append('token', token_token);
        let result = await fetch(base_url_server + 'src/control/controller-tokensApi.php?tipo=listarTokens', {
            mode: 'cors',
            method: 'POST',
            cache: 'no-cache',
            body: info
        });
        let json = await result.json();

        if (json.status) {
            let datos = json.contenido;
            tokenDb = datos[0].token;
            localStorage.setItem('tokenDataBase', tokenDb);
        } else {
            console.log("Error al obtener el token" + json.mensaje);
        }
    } catch (e) {
        console.log("Error function || " + e);
    }
}

// *******************************************************************************

const Baseurl = 'https://admin.restaurantes.serviciosvirtuales.com.pe/src/control/apiController.php?tipo=';
const APItoken = localStorage.getItem('tokenDataBase');

async function listarTodosLosPlatos() {
    let tbodyPlatos = document.getElementById("tbody_platos");
    try {
        showLoader()
        let datosForm = new FormData();
        datosForm.append('token', APItoken);

        let respuesta = await fetch(Baseurl + 'listarTodosLosPlatos', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datosForm
        });

        let json = await respuesta.json();
        if (json.status) {
            if (Array.isArray(json.contenido)) {
                tbodyPlatos.innerHTML = '';
                let contador = 0;
                let estado;
                json.contenido.forEach((item) => {

                    if(item.disponible == 1){
                       estado = `<span class="avatar-title rounded-2 fw-semibold border border-success text-success">
                                                                           <i class="ri-circle-fill fs-16"></i>
                                                                      </span`;
                    }else{ estado = `<span class="avatar-title rounded-2 fw-semibold border border-danger text-danger">
                                                                           <i class="ri-circle-fill fs-16"></i>
                                                                      </span>`
                     }                                                                     
                    contador++; // Incrementa aquí
                    let nuevaFila = document.createElement("tr");
                    nuevaFila.id = item.id;
                    nuevaFila.innerHTML = `
                            <td>
                                 <a href="src/view/assets/images/food-icon/pic13.png">
                                                                      <img src="src/view/assets/images/food-icon/pic13.png" alt="" class="avatar-lg">
                                  </a>
                            </td>
                            <td>
                                 <div class="d-flex align-items-center gap-
                                      <div>
                                           <a href="#!" class="link-dark fw-semibold fs-15">${item.nombre}</a>
                                           <p class="mb-0 mt-1">12-Inch</p>
                                      </div>
                                 </div>
                            </td>
                            <td>${item.descripcion}</td>
                            <td>${item.precio}</td>

                            <td>${item.categoria}</td>
                            <td>
                                 <div class="avatar-sm">
                                      ${estado}
                                 </div>
                            </td>
                            <td>
                                 <div class="d-flex gap-3">
                                      <a href="#!" class="text-muted"><i class="ri-eye-line align-middle fs-20"></i></a>
                                      <a href="#!" class="link-dark"><i class="ri-edit-line align-middle fs-20"></i></a>
                                      <a href="#!" class="link-danger"><i class="ri-delete-bin-5-line align-middle fs-20"></i></a>
                                 </div>
                            </td>
                    `;

                    tbodyPlatos.appendChild(nuevaFila);
                });
            } else {
                console.log(json.mensaje);
                tbodyPlatos.innerHTML = `<tr><td colspan="7">${json.mensaje}</td></tr>`;
            }
        } else {
            console.log(json.mensaje);
            tbodyPlatos.innerHTML = `<tr><td colspan="7">${json.mensaje}</td></tr>`;
        }
    } catch (e) {
        console.error('Error petición API:', e);
        tbodyPlatos.innerHTML =
        `<tr><td colspan="7">Error de conexión</td></tr>`;
    }finally{
        hideLoader();
    }
}