var tablero;
//Esto es un js
document.addEventListener("DOMContentLoaded",function(){
    tablero=$('#tableestudiantes').DataTable({

        initComplete: function () {
            fnteditestudiantes();
            fntdelestudiantes();
            fntviewcliente();
        },

        "aProcessing":true,
        "aSeverSide":true,
        "language" :{
            "url":"Assets/js/plugins/es-ES.json"
        },
        "ajax":{
            "url":" "+baseurl+"/Estudiantes/getestudiantes",
            "dataSrc":""
        },
        "columns": [
            { "data": 'idusuario' },
            { "data": 'nombre' },
            { "data": 'apellidos' },
            { "data": 'correo' },
            { "data": 'tipo' },
            { "data": 'suscripcion' },
            { "data": 'estado' },
            { "data": 'acciones' }
        ],
        "resonsieve":"true",
        "bDestroy":true,
        "iDisplayLength":10,
        "order":[[0,"desc"]]

    });
    //Insert
    var forminsert= document.querySelector("#formestudiantes");
    forminsert.onsubmit=function(e){
        e.preventDefault();
        var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        var ajaxUrl = baseurl+'/Estudiantes/setestudiantes';
        var formdata=new FormData(forminsert);
        request.open("POST",ajaxUrl,true);
        request.send(formdata);
        request.onreadystatechange =function(){
            if(request.readyState == 4 && request.status==200){
                //console.log(request.responseText);
                var obdata=JSON.parse(request.responseText);
                //console.log(obdata);
                if(obdata.status){
                    $('#modalformestudiantes').modal("hide");
                    forminsert.reset();
                    //Validar datos repetodos
                    swal("Administración de Estudiantes", obdata.msg ,"success");
                    //Ojo 
                    tablero.ajax.reload(function(){
                       
                    });
                } else{
                    swal("Error",obdata.msg,"error");
                    //forminsert.reset();
                }
            }
        }
    }
},false);


function openmodal(){

    document.querySelector('#idusuario').value="";
    document.querySelector('#titlemodal').innerHTML = "Nuevo Estudiante";
    document.querySelector('.modal-header').classList.replace("headerupdate","headerregister");
    document.querySelector('#btnactionform').classList.replace("btn-info","btn-primary");
    document.querySelector('#btntext').innerHTML="Guardar";
    document.querySelector('#formestudiantes').reset();
    $('#modalformestudiantes').modal("show");
    
}
//Funciones Usuarios
window.addEventListener('load',function(){

},false)


//Update
function fnteditestudiantes(){
    $('#tableestudiantes').on('click', '.btneditestudiantes', function () {
            document.querySelector('#titlemodal').innerHTML = "Actualizar Estudiante";
            document.querySelector('.modal-header').classList.replace("headerregister","headerupdate");
            document.querySelector('#btnactionform').classList.replace("btn-primary","btn-info");
            document.querySelector('#btntext').innerHTML="Actualizar";
            //Recupera
            var idkey = this.getAttribute("rl");
            var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            //El getusuario esta en Singular !Cuidado confunfir!
            var ajaxUrl = baseurl+'/Estudiantes/getestudiante/'+idkey;
            request.open("GET",ajaxUrl,true);
            request.send();
            request.onreadystatechange =function(){
                if(request.readyState == 4 && request.status==200){
     
                    var objdata=JSON.parse(request.responseText);
                    
                    if(objdata.status){
                        document.querySelector("#idusuario").value=objdata.data.idusuario;
                        document.querySelector("#txtci").value=objdata.data.ci;
                        document.querySelector("#txtnombre").value=objdata.data.nombre;
                        document.querySelector("#txtapellido").value=objdata.data.apellidos;
                        document.querySelector("#txtcorreo").value=objdata.data.correo;
                        document.querySelector("#txttelefono").value=objdata.data.telefono;
                    
                        $('#liststatus').val(objdata.data.estado).trigger('change');

         

                        $('#modalformestudiantes').modal("show");
                    }else{
                        swal("Error",objdata.msg,"error");
                    }
                }
            }
           
        });
   
}

//Delete logic

function fntdelestudiantes(){
   
    $('#tableestudiantes').on('click', '.btndelusuario', function () {
            var idusuarios = this.getAttribute("rl");
            swal({
                title:"Eliminar Usuario",
                text: "¿Realmente Quiere eliminar el Estudiante?",
                type:"warning",
                showCancelButton:true,
                confirmButtonText: "Si, Eliminar",
                cancelButtonText: "No, Cancelar",
                closeOnConfirm:false,
                closeOnCancel:true
            },function(isConfirm){
                if(isConfirm){
                var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                var ajaxUrl = baseurl+'/Usuarios/delusuario/';
                var strdata = "idusuario="+idusuarios;
                request.open("POST",ajaxUrl,true);
                request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                request.send(strdata);
                request.onreadystatechange =function(){
                        if(request.readyState == 4 && request.status==200){
                            console.log(request.responseText);
                            var objdata=JSON.parse(request.responseText);
                            if(objdata.status){
                                swal("Eliminar!",objdata.msg,"success");
                                //Libreria de reload solucionar
                                //tablero generico
                                tablero.ajax.reload(function(){
                                    //funeditsuario();
                                    //fundelusuario();
                                    //fntpermisosrol();
                                });

                            }else{
                                swal("Error",objdata.msg,"error");
                            }
                        }
                    }
                }

            });
        });
   
}

//Ver al usuario
function fntviewcliente(){
    $('#tableestudiantes').on('click', '.btnviewusuario', function () {
    var idpersona = this.getAttribute("rl");

    var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
    var ajaxurl = baseurl+'/Usuarios/getusuario/'+idpersona;
    request.open("GET",ajaxurl,true);
    request.send();
    request.onreadystatechange = function(){
        if(request.readyState == 4 && request.status == 200){
            var objdata = JSON.parse(request.responseText);
            if(objdata.status)
            {
               var estadoUsuario = objdata.data.Estado == 1 ? 
                '<span class="badge badge-success">Activo</span>' : 
                '<span class="badge badge-danger">Inactivo</span>';

                var ci =objdata.data.ci;
                var nombre= objdata.data.nombre;
                var apellido = objdata.data.apellidos;
                var telefono = objdata.data.telefono;
                var correo= objdata.data.correo;
                var pendiente="Datos Pendientes";

                document.querySelector("#celIdentificacion").innerHTML = (ci != null) ? ci : pendiente;
                document.querySelector("#celNombre").innerHTML = (nombre != null) ? nombre : pendiente;
                document.querySelector("#celApellido").innerHTML = (apellido != null) ? apellido : pendiente;
                document.querySelector("#celTelefono").innerHTML = (telefono != null) ? telefono : pendiente;
                document.querySelector("#celEmail").innerHTML = (correo != null) ? correo : pendiente;
                document.querySelector("#celEstado").innerHTML = estadoUsuario;
         
                $('#modalviewuser').modal('show');
            }else{
                swal("Error", objdata.msg , "error");
            }
        }
    }
})
}
