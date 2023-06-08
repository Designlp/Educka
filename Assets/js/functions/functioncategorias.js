var tablero;
//Esto es un js
document.addEventListener("DOMContentLoaded",function(){
    tablero=$('#tablecategorias').DataTable({
        "aProcessing":true,
        "aSeverSide":true,
        "language" :{
            "url":baseurl+"/Assets/js/plugins/es-ES.json"
        },
        "ajax":{
            "url":" "+baseurl+"/Categorias/getcategorias",
            "dataSrc":""
        }, 
        "columns": [
            { "data": 'idcategoria' },
            { "data": 'nombre' },
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
    var forminsert= document.querySelector("#formcategorias");
    forminsert.onsubmit=function(e){
        e.preventDefault();
        var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        var ajaxUrl = baseurl+'/Categorias/setcategorias';
        var formdata=new FormData(forminsert);
        request.open("POST",ajaxUrl,true);
        request.send(formdata);
        request.onreadystatechange =function(){
            if(request.readyState == 4 && request.status==200){
                //console.log(request.responseText);
                var obdata=JSON.parse(request.responseText);
                //console.log(obdata);
                if(obdata.status){
                    $('#modalformcategorias').modal("hide");
                    forminsert.reset();
                    //Validar datos repetodos
                    swal("Administración de Categorias", obdata.msg ,"success");
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

$('#tablecategorias').DataTable();
function openmodal(){

    document.querySelector('#idcategoria').value="";
    document.querySelector('#titlemodal').innerHTML = "Nueva Categoria";
    document.querySelector('.modal-header').classList.replace("headerupdate","headerregister");
    document.querySelector('#btnactionform').classList.replace("btn-info","btn-primary");
    document.querySelector('#btntext').innerHTML="Guardar";
    document.querySelector('#formcategorias').reset();
    $('#modalformcategorias').modal("show");
    
}
//Funciones Usuarios
window.addEventListener('load',function(){

},false)


//Update
function fnteditcategorias(){
    var btneditcategorias=Array.apply(null, document.querySelectorAll(".btneditcategorias"));    
    btneditcategorias.forEach(function(btneditcategorias){
        
        btneditcategorias.addEventListener("click",function(){
            //alert("Click to close...");
            document.querySelector('#titlemodal').innerHTML = "Actualizar Categorias";
            document.querySelector('.modal-header').classList.replace("headerregister","headerupdate");
            document.querySelector('#btnactionform').classList.replace("btn-primary","btn-info");
            document.querySelector('#btntext').innerHTML="Actualizar";
            //Recupera
            var idkey = this.getAttribute("rl");
            var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            //El getusuario esta en Singular !Cuidado confunfir!
            var ajaxUrl = baseurl+'/Categorias/getcategoria/'+idkey;
            request.open("GET",ajaxUrl,true);
            request.send();
            request.onreadystatechange =function(){
                if(request.readyState == 4 && request.status==200){
     
                    var objdata=JSON.parse(request.responseText);
                    
                    if(objdata.status){
                        document.querySelector("#idcategoria").value=objdata.data.idcategoria;
                        document.querySelector("#txtnombre").value=objdata.data.nombre;
                        document.querySelector("#txtdescripcion").value=objdata.data.descripcion;
                        $('#liststatus').val(objdata.data.estado).trigger('change');
                        $('#modalformcategorias').modal("show");
                    }else{
                        swal("Error",objdata.msg,"error");
                    }
                }
            }
           
        });
    });
    
}

//Delete logic

function fntdelcategorias(){
   
    var btndelcategorias = document.querySelectorAll(".btndelcategorias");

    btndelcategorias.forEach(function(btndelcategorias){
        btndelcategorias.addEventListener("click",function(){
            var idcategoria = this.getAttribute("rl");
            swal({
                title:"Eliminar Categorias",
                text: "¿Realmente Quiere eliminar el Categorias?",
                type:"warning",
                showCancelButton:true,
                confirmButtonText: "Si, Eliminar",
                cancelButtonText: "No, Cancelar",
                closeOnConfirm:false,
                closeOnCancel:true
            },function(isConfirm){
                if(isConfirm){
                var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                var ajaxUrl = baseurl+'/Categorias/delcategoria/';
                var strdata = "idcategoria="+idcategoria;
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



