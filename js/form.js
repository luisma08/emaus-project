document.getElementById("submit").addEventListener("click", e => {
    e.preventDefault();
  
    const name = document.querySelector("#name").value;
    const mail = document.querySelector("#mail").value;
    const tel = document.querySelector("#tel").value;
    const description = document.querySelector("#description").value;
    //const resp = document.querySelector("#response");
  
    //resp.classList.remove("fail");
    //resp.classList.remove("send");

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
        // Mostrar mensaje de éxito
        Swal.fire({
          icon: "success",
          title: "Éxito",
          text: "El correo ha sido enviado correctamente."
        });
        // Manejar la respuesta del servidor
        // console.log(data);
      })
      .catch(function(error) {
        // Mostrar mensaje de error
        Swal.fire({
          icon: "error",
          title: "Error",
          text: "Error al enviar el correo: " + error
        });
        // console.log(error);
      });

  });
