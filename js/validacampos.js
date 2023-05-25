function validaCampos() {
    var nombreC = document.getElementById("nombreCompleto").value;
    if(nombreC ==''){ alert("Ingresa los datos del nombre es requerido"); return;}
    var correoE = document.getElementById("mailEmpleado").value;
    if(correoE ==''){ alert("Ingresa los datos del correo es requerido"); return;}
    var sexoF = document.getElementById("femenino").checked;
    var sexoM = document.getElementById("masculino").checked;
    if(!sexoM && !sexoF){ alert("Debes seleccionar un sexo"); return;}
    var area = document.getElementById("areaEmpleado").value;
    var descrip = document.getElementById("descripcionEmpleado").value;
   
    if(descrip ==''){ alert("Debes ingresar una descripci\u00f3n"); return;}
   
    var bolInf = document.getElementById("boletinInformativo").checked;
    var rol1 = document.getElementById("Desarrollador").checked;
    var rol2 = document.getElementById("Gerente").checked;
    var rol3 = document.getElementById("Auxiliar").checked;
    if(!rol1 && !rol2 && !rol3 ){ alert("Debes seleccionar al menor un rol"); return;}

    document.formRegistro.submit();
}