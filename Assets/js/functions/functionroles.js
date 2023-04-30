var tablero;
//Esto es un js
//Prueba a com
document.addEventListener("DOMContentLoaded",function(){
    tablero=$('#tableroles').DataTable({
        "aProcessing":true,
        "aSeverSide":true,
        "language" :{
            "url":"https://cdn.datatables.net/plug-ins/1.12.1/i18n/es-ES.json"
        },
        "ajax":{
            "url":" "+baseurl+"/Roles/getroles",
            "dataSrc":""
        },
        "columns": [
            { "data": 'idroles' },
            { "data": 'tipo' },
            { "data": 'descripcion' },
            { "data": 'estado' },
            { "data": 'acciones' }
        ],
        "resonsieve":"true",
        "bDestroy":true,
        "iDisplayLength":10,
        "order":[[0,"desc"]]

    });
    //Insert
    var forminsert= document.querySelector("#formroles");
    forminsert.onsubmit=function(e){
        e.preventDefault();
        var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        var ajaxUrl = baseurl+'/Roles/setroles';
        var formdata=new FormData(forminsert);
        request.open("POST",ajaxUrl,true);
        request.send(formdata);
        request.onreadystatechange =function(){
            if(request.readyState == 4 && request.status==200){
               
                //console.log(request.responseText);
                var obdata=JSON.parse(request.responseText);
                //console.log(obdata);
                if(obdata.status){
                    $('#modalformroles').modal("hide");
                    forminsert.reset();
                    //Validar datos todos
                    swal("Administración de Roles", obdata.msg ,"success");
                    //Ojo 
                    tablero.ajax.reload(function(){
                        //fnteditrol();
                        //fntdelrol();
                        //fntpermisosrol();
                    });
                   
                } else{
                    swal("Error",obdata.msg,"error");
                    //forminsert.reset();
                }
            }
        }
    }

},false);
//Activacion del Modal
$('#tableroles').DataTable();

function openmodal(){
    document.querySelector('#idrol').value="";
    document.querySelector('#titlemodal').innerHTML = "Nuevo Rol";
    document.querySelector('.modal-header').classList.replace("headerupdate","headerregister");
    document.querySelector('#btnactionform').classList.replace("btn-info","btn-primary");
    document.querySelector('#btntext').innerHTML="Guardar";
    document.querySelector('#formroles').reset();
    $('#modalformroles').modal("show");
    
}
//Funciones Usuarios
window.addEventListener('load',function(){
    fntrolesusuario();
},false)


//Update
function fnteditusuario(){
    var btneditusuario=Array.apply(null, document.querySelectorAll(".btneditusuario"));    
    btneditusuario.forEach(function(btneditusuario){
        
        btneditusuario.addEventListener("click",function(){
            //alert("Click to close...");
            document.querySelector('#titlemodal').innerHTML = "Actualizar Usuario";
            document.querySelector('.modal-header').classList.replace("headerregister","headerupdate");
            document.querySelector('#btnactionform').classList.replace("btn-primary","btn-info");
            document.querySelector('#btntext').innerHTML="Actualizar";
            //Recupera
            var idkey = this.getAttribute("rl");
            var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            //El getusuario esta en Singular !Cuidado confunfir!
            var ajaxUrl = baseurl+'/Usuarios/getusuario/'+idkey;
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
                        //FK especial
                        document.querySelector("#txtrol").value=objdata.data.idroles;
                  
                        $('#txtrol').selectpicker('render');
                  
                        //Estado Especial
                        document.querySelector("#liststatus").value=objdata.data.estado;
                 
                        $('#liststatus').selectpicker('render');

                        $('#modalformusuario').modal("show");
                    }else{
                        swal("Error",objdata.msg,"error");
                    }
                }
            }
           
        });
    });
    
}

//Delete logic
function fntdelusuario(){
   
    var btndelusuario = document.querySelectorAll(".btndelusuario");

    btndelusuario.forEach(function(btndelusuario){
        btndelusuario.addEventListener("click",function(){
            var idusuarios = this.getAttribute("rl");
            swal({
                title:"Eliminar Usuario",
                text: "¿Realmente Quiere eliminar el Usuario?",
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
    });
}

//Ver al usuario
