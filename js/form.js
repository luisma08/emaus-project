document.querySelector("#submit").addEventListener("click", e => {
    e.preventDefault();
  
    //INGRESE UN NUMERO DE WHATSAPP VALIDO AQUI:
    const telefono = "51923995006";
  
    const name = document.querySelector("#name").value;
    const mail = document.querySelector("#mail").value;
    const services = document.querySelector("#tel").value;
    const description = document.querySelector("#description").value;
    const resp = document.querySelector("#response");
  
    resp.classList.remove("fail");
    resp.classList.remove("send");
  
    const url = `https://api.whatsapp.com/send?phone=${telefono}&text=
          *_Hola, Emaús Manos solidarias_*%0A
          *Quisiera Realizar una donación*%0A%0A
          *Nombre:*%0A
          ${name}%0A
          *Correo electronico:*%0A
          ${mail}%0A
          *Telefono/Celular*%0A
          ${tel}%0A
          *Comentario*%0A
          ${description}`;
  
    if (name === "" || mail === "") {
      resp.classList.add("fail");
      resp.innerHTML = `Faltan algunos datos, ${name}`;
      return false;
    }
    resp.classList.remove("fail");
    resp.classList.add("send");
    resp.innerHTML = `Se ha enviado tu mensaje, ${name}`;
  
    window.open(url);
  });