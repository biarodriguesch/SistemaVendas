function handleAvista(campo) {
    if(campo.checked == true) {
        let parcelas = document.getElementById("parcelas");
        parcelas.setAttribute('disabled', '');

        document.getElementById("parcelado").checked = false;

        parcelas.value = "";

  }
}
function handleParcelado(campo) {
    if(campo.checked == true) {
        let parcelas = document.getElementById("parcelas");
        parcelas.removeAttribute('disabled', '');

        document.getElementById("avista").checked = false;

    }
}
