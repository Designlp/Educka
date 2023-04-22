var tableroles;
document.addEventListener("DOMContentLoaded",function(){
    tableroles=$('#tableusuarios').DataTable({
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
                    alert();
                    swal("Usuario Nuevo", obdata.msg ,"success");
                    //Ojo 
                    tablemateriales.ajax.reload(function(){
                        //fnteditrol();
                        //fntdelrol();
                        //fntpermisosrol();
                    });
                   
                } else{
                    swal("Error",obdata.msg,"error");
                }
            }
        }
    }
},false);


function openmodal(){
    $('#modalformusuario').modal("show");
    
}



