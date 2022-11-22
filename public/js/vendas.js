function handleAvista(campo) {

    if(campo.checked == true) {
        let parcelas = document.getElementById("parcelas");
        parcelas.setAttribute('disabled', '');
    }

  }

function metodopag(avista, parcelado) {
   if(avista.checked == null)
     return "á vista";
     if(parcelado.checked == null)
     return "parcelado";
}
