document.getElementById("submit").addEventListener("click", e => {
    e.preventDefault();
  
    const name = document.querySelector("#name").value;
    const mail = document.querySelector("#mail").value;
    const tel = document.querySelector("#tel").value;
    const description = document.querySelector("#description").value;
    //const resp = document.querySelector("#response");
  
    //resp.classList.remove("fail");
    //resp.classList.remove("send");
  
    //const message = `<div>
    //                  <p>Hola, quisiera realizar una donacion</p>
    //                  <p>Mis datos son los siguientes</p>
    //                  <p>Nombre: ${name}</p>
    //                  <p>Correo electronico: ${mail}</p>
    //                  <p>Telefono: ${tel}</p>
    //                  <p>Comentario: ${description}</p>
    //                </div>`;

    var parametros = {
      name: name,
      mail: mail,
      tel: tel,
      description: description
    };
    
    console.log(parametros);
    // Configurar la solicitud
    var url = "../utils/enviar_correo.php";
    var opciones = {
      method: "POST",
      headers: {
        "Content-Type": "application/json"
      },
      body: JSON.stringify(parametros)
    };
    
    // Enviar la solicitud
    fetch(url, opciones)
      .then(function(response) {
        return response.text();
      })
      .then(function(data) {
        // Manejar la respuesta del servidor
        console.log(data);
      })
      .catch(function(error) {
        console.log(error);
      });

  });