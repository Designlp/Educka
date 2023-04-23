var tablero;
document.addEventListener("DOMContentLoaded",function(){
    tablero=$('#tableusuarios').DataTable({
        "aProcessing":true,
        "aSeverSide":true,
        "language" :{
            "url":"https://cdn.datatables.net/plug-ins/1.12.1/i18n/es-ES.json"
        },
        "ajax":{
            "url":" "+baseurl+"/usuarios/getusuarios",
            "dataSrc":""
        },
        "columns": [
            { "data": 'idusuario' },
            { "data": 'nombre' },
            { "data": 'apellidos' },
            { "data": 'correo' },
            { "data": 'idroles' },
            { "data": 'estado' },
            { "data": 'acciones' }
        ],
        "resonsieve":"true",
        "bDestroy":true,
        "iDisplayLength":10,
        "order":[[0,"desc"]]

    });
    //Insert
    var forminsert= document.querySelector("#formusuario");
    forminsert.onsubmit=function(e){
        e.preventDefault();
        var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        var ajaxUrl = baseurl+'/Usuarios/setusuarios';
        var formdata=new FormData(forminsert);
        request.open("POST",ajaxUrl,true);
        request.send(formdata);
        request.onreadystatechange =function(){
            if(request.readyState == 4 && request.status==200){
               
                console.log(request.responseText);
                var obdata=JSON.parse(request.responseText);
                console.log(obdata);
                if(obdata.status){
                    $('#modalformusuario').modal("hide");
                    forminsert.reset();
                    
                    swal("Usuario Nuevo", obdata.msg ,"success");
                    //Ojo 
                    tablero.ajax.reload(function(){
                        //fnteditrol();
                        //fntdelrol();
                        //fntpermisosrol();
                    });
                   
                } else{
                    swal("Error",obdata.msg,"error");
                    forminsert.reset();
                }
            }
        }
    }

},false);

$('#tableusuarios').DataTable();
function openmodal(){
    document.querySelector('#idusuario').value="";
    document.querySelector('#titlemodal').innerHTML = "Nuevo Usuario";
    document.querySelector('.modal-header').classList.replace("headerupdate","headerregister");
    document.querySelector('#btnactionform').classList.replace("btn-info","btn-primary");
    document.querySelector('#btntext').innerHTML="Guardar";
    document.querySelector('#formusuario').reset();
    $('#modalformusuario').modal("show");
    
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
                    //console.log(request.responseText);
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
                        $('#txtrol').selectpicker('refresh');
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
//Especial
function fntrolesusuario(){
    if( document.querySelector('#txtrol')){
        var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        var ajaxUrl = baseurl+'/Usuarios/getselectroles';
        request.open("GET",ajaxUrl,true);
        request.send();

        request.onreadystatechange =function(){
            if(request.readyState == 4 && request.status==200){
             
                document.querySelector('#txtrol').innerHTML= request.responseText;
                document.querySelector('#txtrol').value=1;
                $('#txtrol').selectpicker('render');
            }
        }
    }    
}


