var tablero;
//Esto es un js
document.addEventListener("DOMContentLoaded", function () {

    //Insert
    var forminsert = document.querySelector("#formregistro");
    forminsert.onsubmit = function (e) {
        e.preventDefault();

        var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        var ajaxUrl = baseurl + '/Registros/setregistros';
        var formdata = new FormData(forminsert);
        request.open("POST", ajaxUrl, true);
        request.send(formdata);
        request.onreadystatechange = function () {
            if (request.readyState == 4 && request.status == 200) {

                var obdata = JSON.parse(request.responseText);

                if (obdata.status) {


                    fnteditcuenta();

                    swal("Usuario Creado", obdata.msg, "success");
                } else {
                    swal("Error", obdata.msg, "error");

                }
            }
        }
    }

    fnteditcuenta();

}, false);

//Update
function fnteditcuenta() {


    var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
    var ajaxUrl = baseurl + '/Registros/getusuario';
    request.open("GET", ajaxUrl, true);
    request.send();
    request.onreadystatechange = function () {

        if (request.readyState == 4 && request.status == 200) {

            var objdata = JSON.parse(request.responseText);

            if (objdata.status) {

                document.querySelector("#txtci").value = objdata.data.ci;
                document.querySelector("#txtnombre").value = objdata.data.nombre;
                document.querySelector("#txtapellido").value = objdata.data.apellidos;
                document.querySelector("#txttelefono").value = objdata.data.telefono;
            } else {
                swal("Error", objdata.msg, "error");
            }
        }
    }

}

