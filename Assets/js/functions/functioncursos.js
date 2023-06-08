var tablero;
//Esto es un js
//Prueba a com
document.addEventListener("DOMContentLoaded",function(){
    tablero=$('#tablecursos').DataTable({
        "aProcessing":true,
        "aSeverSide":true,
        "language" :{
            "url":baseurl+"/Assets/js/plugins/es-ES.json"
        },
        "ajax":{
            "url":" "+baseurl+"/Cursos/getcursos",
            "dataSrc":""
        },
        "columns": [
            { "data": 'idcurso' },
            { "data": 'nombre' },
            { "data": 'titulo' },
            { "data": 'nombrecat' },
            { "data": 'estado' },
            { "data": 'acciones' }
        ],
        "resonsieve":"true",
        "bDestroy":true,
        "iDisplayLength":10,
        "order":[[0,"desc"]]

    });
    //Insert
    var forminsert= document.querySelector("#formcurso");
    forminsert.onsubmit=function(e){
        e.preventDefault();
        var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        var ajaxUrl = baseurl+'/Cursos/setcurso';
        var formdata=new FormData(forminsert);
        request.open("POST",ajaxUrl,true);
        request.send(formdata);
        request.onreadystatechange =function(){
            if(request.readyState == 4 && request.status==200){
               
                //console.log(request.responseText);
                var obdata=JSON.parse(request.responseText);
                //console.log(obdata);
                if(obdata.status){
                    $('#modalformcursos').modal("hide");
                    forminsert.reset();
                    //Validar datos repetodos
                    swal("Administración de Cursos", obdata.msg ,"success");
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

$('#tablecursos').DataTable();
function openmodal(){
    document.querySelector('#idcurso').value="";
    document.querySelector('#titlemodal').innerHTML = "Nuevo Curso";
    document.querySelector('.modal-header').classList.replace("headerupdate","headerregister");
    document.querySelector('#btnactionform').classList.replace("btn-info","btn-primary");
    document.querySelector('#btntext').innerHTML="Guardar";
    document.querySelector('#formcurso').reset();
    $('#modalformcursos').modal("show");
    
}
//Funciones Usuarios
window.addEventListener('load',function(){
    fntcursoscategorias();
},false)

//Especial
function fntcursoscategorias(){
    if( document.querySelector('#listcategorias')){
        var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        var ajaxUrl = baseurl+'/Cursos/getselecategorias';
        request.open("GET",ajaxUrl,true);
        request.send();

        request.onreadystatechange =function(){
            if(request.readyState == 4 && request.status==200){
             
                document.querySelector('#listcategorias').innerHTML= request.responseText;
             
                $('#listcategorias').val(1).trigger('change');
                
                
            }
        }
    }    
}

//Updates
function fnteditcurso(){
    var btneditusuario=Array.apply(null, document.querySelectorAll(".btneditcurso"));    
    btneditusuario.forEach(function(btneditusuario){
        
        btneditusuario.addEventListener("click",function(){
            //alert("Click to close...");s
            document.querySelector('#titlemodal').innerHTML = "Actualizar Usuario";
            document.querySelector('.modal-header').classList.replace("headerregister","headerupdate");
            document.querySelector('#btnactionform').classList.replace("btn-primary","btn-info");
            document.querySelector('#btntext').innerHTML="Actualizar";
            //Recupera
            var idkey = this.getAttribute("rl");
            var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            //El getusuario esta en Singular !Cuidado confunfir!
            var ajaxUrl = baseurl+'/Cursos/getcurso/'+idkey;
            request.open("GET",ajaxUrl,true);
            request.send();
            request.onreadystatechange =function(){
                if(request.readyState == 4 && request.status==200){
     
                    var objdata=JSON.parse(request.responseText);
                    
                    if(objdata.status){
                        document.querySelector("#idcurso").value=objdata.data.idcurso;
                        document.querySelector("#txttitulo").value=objdata.data.titulo;
                        document.querySelector("#txtdescripcion").value=objdata.data.descripcion;

                        $('#listcategorias').val(objdata.data.idcategoria).trigger('change');
                        $('#liststatus').val(objdata.data.estado).trigger('change');
               
                        
                     
                        $('#modalformcursos').modal("show");
                    }else{
                        swal("Error",objdata.msg,"error");
                    }
                }
            }
           
        });
    });
    
}

//Especial

//Delete logic
function fntdelcurso(){
   
    var btndelusuario = document.querySelectorAll(".btndelcurso");

    btndelusuario.forEach(function(btndelusuario){
        btndelusuario.addEventListener("click",function(){
            var idusuarios = this.getAttribute("rl");
            swal({
                title:"Eliminar Curso",
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
                var ajaxUrl = baseurl+'/Cursos/delcurso/';
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



function fntclasescurso(){
   
    var btndetallesclases = document.querySelectorAll(".btnclases");

    btndetallesclases.forEach(function(btndetallesclases){
        btndetallesclases.addEventListener("click",function(){
            var idcurso = this.getAttribute("rl");
            var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            var ajaxUrl = baseurl+'/Cursos/asingclases/'+idcurso;
            request.open("GET",ajaxUrl,true);
            request.send();
            request.onreadystatechange =function(){
                if(request.readyState == 4 && request.status==200){
                    window.location = baseurl + "/Clases";
                }
            };
        });
    });
}

