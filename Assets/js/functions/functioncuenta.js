var tablero;
//Esto es un js
document.addEventListener("DOMContentLoaded",function(){

    
    //Insert
    var forminsert= document.querySelector("#formcuentas");
    forminsert.onsubmit=function(e){
        e.preventDefault();
        var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        var ajaxUrl = baseurl+'/Cuentas/setcuentas';
        var formdata=new FormData(forminsert);
        request.open("POST",ajaxUrl,true);
        request.send(formdata);
        request.onreadystatechange =function(){
            if(request.readyState == 4 && request.status==200){
                //console.log(request.responseText);
                var obdata=JSON.parse(request.responseText);
                //console.log(obdata);
                if(obdata.status){
                    forminsert.reset();
                    //Validar datos repetodos
                    swal("Administración de Cuentas", obdata.msg ,"success");
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




//Update
function fnteditcuenta(){    
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
}






