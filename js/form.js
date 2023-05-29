document.querySelector("#submit").addEventListener("click", e => {
    e.preventDefault();
  
    const name = document.querySelector("#name").value;
    const mail = document.querySelector("#mail").value;
    const tel = document.querySelector("#tel").value;
    const description = document.querySelector("#description").value;
    //const resp = document.querySelector("#response");
  
    //resp.classList.remove("fail");
    //resp.classList.remove("send");
  
    const message = `<div>
                      <p>Hola, quisiera realizar una donacion</p>
                      <p>Mis datos son los siguientes</p>
                      <p>Nombre: ${name}</p>
                      <p>Correo electronico: ${mail}</p>
                      <p>Telefono: ${tel}</p>
                      <p>Comentario: ${description}</p>
                    </div>`;

    var form = this(message);
    var formData = new FormData(form);
  
    // Realiza una petición AJAX
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '../utils/enviar_correo.php', true);
    xhr.onload = function() {
      // Maneja la respuesta del servidor aquí
      if (xhr.status === 200) {
        alert('Correo enviado exitosamente');
        form.reset(); // Limpia el formulario después de enviar el correo
      } else {
        alert('Error al enviar el correo');
      }
    };
    
    xhr.send(formData);

  });