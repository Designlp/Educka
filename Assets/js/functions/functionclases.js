var tablero;
//Esto es un js
//Prueba a com
document.addEventListener("DOMContentLoaded", function () {
    tablero = $('#tableclases').DataTable({
        "aProcessing": true,
        "aSeverSide": true,
        "language": {
            "url": "https://cdn.datatables.net/plug-ins/1.12.1/i18n/es-ES.json"
        },
        "ajax": {
            "url": " " + baseurl + "/Clases/getclases",
            "dataSrc": ""
        },
        "columns": [
            { "data": 'idclases' },
            { "data": 'titcurso' },
            { "data": 'titclase' },
            { "data": 'estado' },
            { "data": 'acciones' }
        ],
        "resonsieve": "true",
        "bDestroy": true,
        "iDisplayLength": 10,
        "order": [[0, "desc"]]

    });
    //Insert
    var forminsert = document.querySelector("#formclase");
    forminsert.onsubmit = function (e) {
        e.preventDefault();
        var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        var ajaxUrl = baseurl + '/Clases/setclase';
        var formdata = new FormData(forminsert);
        request.open("POST", ajaxUrl, true);
        request.send(formdata);
        request.onreadystatechange = function () {

            if (request.readyState == 4 && request.status == 200) {

                //console.log(request.responseText);
                var obdata = JSON.parse(request.responseText);
                //console.log(obdata);
                if (obdata.status) {
                    $('#modalformclases').modal("hide");
                    forminsert.reset();
                    //Validar datos repetodos
                    swal("Administración de Usuarios", obdata.msg, "success");
                    //Ojo 
                    tablero.ajax.reload(function () {
                        //fnteditrol();
                        //fntdelrol();
                        //fntpermisosrol();
                    });

                } else {
                    swal("Error", obdata.msg, "error");
                    //forminsert.reset();
                }
            }
        }
    }

}, false);

$('#tableclases').DataTable();
function openmodal() {
    document.querySelector('#idclase').value = "";
    document.querySelector('#materialfile').value = "";listfile();
    document.querySelector('#titlemodal').innerHTML = "Nuevo Usuario";
    document.querySelector('.modal-header').classList.replace("headerupdate", "headerregister");
    document.querySelector('#btnactionform').classList.replace("btn-info", "btn-primary");
    document.querySelector('#btntext').innerHTML = "Guardar";
    document.querySelector('#formclase').reset();
    $('#modalformclases').modal("show");
}
//Funciones Usuarios
window.addEventListener('load', function () {

}, false)


//Updates
function fnteditclase() {
    var btnedit = Array.apply(null, document.querySelectorAll(".btneditclase"));
    btnedit.forEach(function (btnedit) {

        btnedit.addEventListener("click", function () {
            //alert("Click to close...");s
            document.querySelector('#titlemodal').innerHTML = "Actualizar Usuario";
            document.querySelector('.modal-header').classList.replace("headerregister", "headerupdate");
            document.querySelector('#btnactionform').classList.replace("btn-primary", "btn-info");
            document.querySelector('#btntext').innerHTML = "Actualizar";
            //Recupera
            var idkey = this.getAttribute("rl");
            var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            //El getusuario esta en Singular !Cuidado confunfir!
            var ajaxUrl = baseurl + '/Clases/getclase/' + idkey;
            request.open("GET", ajaxUrl, true);
            request.send();
            request.onreadystatechange = function () {
                if (request.readyState == 4 && request.status == 200) {

                    var objdata = JSON.parse(request.responseText);

                    if (objdata.status) {
                        document.querySelector("#idclase").value = objdata.data.idclases;
                        document.querySelector("#txttitulo").value = objdata.data.titclase;
                        document.querySelector("#txtdescripcion").value = objdata.data.descripcion;
                        document.querySelector("#txtenlace").value = objdata.data.enlace;

                        if(objdata.data.archivourl != '' && objdata.data.archivos != ''){
                            fileupdateexist(objdata.data.archivourl,objdata.data.archivos);
                        }

                        $('#liststatus').val(objdata.data.estado).trigger('change');



                        $('#modalformclases').modal("show");
                    } else {
                        swal("Error", objdata.msg, "error");
                    }
                }
            }

        });
    });

}

//Especial

//Delete logic
function fntdelcurso() {

    var btndelusuario = document.querySelectorAll(".btndelcurso");

    btndelusuario.forEach(function (btndelusuario) {
        btndelusuario.addEventListener("click", function () {
            var idusuarios = this.getAttribute("rl");
            swal({
                title: "Eliminar Curso",
                text: "¿Realmente Quiere eliminar el Usuario?",
                type: "warning",
                showCancelButton: true,
                confirmButtonText: "Si, Eliminar",
                cancelButtonText: "No, Cancelar",
                closeOnConfirm: false,
                closeOnCancel: true
            }, function (isConfirm) {
                if (isConfirm) {
                    var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                    var ajaxUrl = baseurl + '/Cursos/delcurso/';
                    var strdata = "idusuario=" + idusuarios;
                    request.open("POST", ajaxUrl, true);
                    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    request.send(strdata);
                    request.onreadystatechange = function () {
                        if (request.readyState == 4 && request.status == 200) {
                            console.log(request.responseText);
                            var objdata = JSON.parse(request.responseText);
                            if (objdata.status) {
                                swal("Eliminar!", objdata.msg, "success");
                                //Libreria de reload solucionar
                                //tablero generico
                                tablero.ajax.reload(function () {
                                    //funeditsuario();
                                    //fundelusuario();
                                    //fntpermisosrol();
                                });

                            } else {
                                swal("Error", objdata.msg, "error");
                            }
                        }
                    }
                }

            });
        });
    });
}



function fntclasescurso() {

    var btndetallesclases = document.querySelectorAll(".btnclases");

    btndetallesclases.forEach(function (btndetallesclases) {
        btndetallesclases.addEventListener("click", function () {
            var idcurso = this.getAttribute("rl");
            var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            var ajaxUrl = baseurl + '/Cursos/asingclases/' + idcurso;
            request.open("GET", ajaxUrl, true);
            request.send();
            request.onreadystatechange = function () {
                if (request.readyState == 4 && request.status == 200) {
                    window.location = baseurl + "/Clases";
                }
            };
        });
    });
}



//////////////////////////////////////////////////////////////////////////////////////////////////

var _validFileExtensions = [".pdf", ".doc", ".docx", ".zip", ".rar", ".7z"];
function ValidateSingleInput(oInput) {
    if (oInput.type == "file") {
        var sFileName = oInput.value;
        if (sFileName.length > 0) {
            var blnValid = false;
            for (var j = 0; j < _validFileExtensions.length; j++) {

                var sCurExtension = _validFileExtensions[j];
                
                if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                    document.querySelector('#validatearchivo').classList.add('d-none');
                    document.querySelector('#validatearchivo').innerHTML = '';
                    blnValid = true;
                    break;
                }
            }

            if (!blnValid) {
                document.querySelector('#validatearchivo').classList.remove('d-none');
                document.querySelector('#validatearchivo').innerHTML = `Formato invalido, solo se aceptan archivos ${_validFileExtensions.join(", ")}`;
                oInput.value = "";
                return false;
            }else{
                listfile();
            }


        }
    }
    return true;
}

function listfile(){
    var input = document.getElementById('materialfile')
    var output = document.getElementById('fileList');
    var children = "";
    for (var i = 0; i < input.files.length; ++i) {
        children +=  '<li>'+ input.files.item(i).name + ' <span class="remove-list" onclick="removefile(this)"><i class="fa fa-fw fa-lg fa-times-circle"></i></span>' + '</li>'
    }
    output.innerHTML = children;


}

function removefile(elemento){
    var parentElement = elemento.parentNode;
  var inputArchivo = parentElement.querySelector('input[type="file"]');
  
  parentElement.remove();
  
  if (inputArchivo) {
    inputArchivo.value = '';
  }
}


function fileupdateexist(ruta,nombrefile){
    var inputArchivo = document.getElementById("materialfile");

// URL del archivo existente
var urlArchivoExistente = ruta; // Reemplaza con la URL de tu archivo existente

// Obtener el archivo existente mediante fetch
fetch(urlArchivoExistente)
  .then(response => response.blob())
  .then(blob => {
    // Crear un objeto File a partir del Blob
    var archivoExistente = new File([blob], nombrefile);

    // Crear un objeto DataTransfer y agregar el archivo existente a él
    var dataTransfer = new DataTransfer();
    dataTransfer.items.add(archivoExistente);

    // Establecer el valor del input de archivo utilizando el objeto DataTransfer
    inputArchivo.files = dataTransfer.files;
    if (inputArchivo.files.length > 0) {
    
        }
    listfile();
  })
  .catch(error => {
    console.log("Error al obtener el archivo existente:", error);
  });
  
}


// const iframes = document.querySelectorAll("#player");


// iframes.forEach(function (iframe) {
//     var player = new Plyr(iframe, {

//         controls: ['play', 'progress', 'current-time', 'mute', 'volume', 'fullscreen'],
//         clickToPlay: false,
//         hideControls: true,
        
//         showPosterOnEnd: true,
//         disableYouTube: true, 
//         youtube: {
//             noCookie: true,
//             enablejsapi:1,
//             rel: 0,
//             modestbranding: 1,
//             showinfo: 0,
//             iv_load_policy: 3,
//             controls:0,
//             host: window.location.hostname,
//             disableClickHandling: true,
//             disablekb:1
//           },
//     });
    

// }
// );


const btnPrevisualizar = document.getElementById('btnprevisualizar');

btnPrevisualizar.addEventListener('click', function (event) {
    let enlace = document.querySelector("#txtenlace").value;
    htmiframe = `
        <iframe id="youtubeframeid"
        class="embed-responsive-item" 
        src="https://www.youtube.com/embed/${enlace}?modestbranding=1&disablekb=1&rel=0&loop=1&mute=1&showinfo=0&controls=0&iv_load_policy=3" 
        frameborder="0" 
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
        allowfullscreen
        ></iframe>
    `;
    document.querySelector('#player').innerHTML = htmiframe;



    const iframes = document.querySelectorAll("#player");


    iframes.forEach(function (iframe) {
        var player = new Plyr(iframe, {

            controls: ['play', 'progress', 'current-time', 'mute', 'volume', 'fullscreen'],
            clickToPlay: true,
            hideControls: false,
            showPosterOnEnd: true,
            disableYouTube: true,
            youtube: {
                             noCookie: true,
                             enablejsapi:1,
                             rel: 0,
                             modestbranding: 1,
                             showinfo: 0,
                             iv_load_policy: 3,
                             controls:0,
                             disableClickHandling: true,
                             disablekb:1
                          },

        });

        player.toggleControls(false);
        player.on('play', function () {
            player.toggleControls(true);
        });

    }
    );
});