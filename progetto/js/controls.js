function checkFormL() {
    var mes = "";
    if (! exists(document.formlogin.username.value)) {
        mes = mes + "Missing username\n";
    }
    if (! exists(document.formlogin.password.value)) {
        mes = mes + "Missing password\n";
    }
    if (mes != "") {
        alert(mes);
    } 
}
