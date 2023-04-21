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
            { "data": 'estado' }
        ],
        "resonsieve":"true",
        "bDestroy":true,
        "iDisplayLength":10,
        "order":[[0,"desc"]]

    });
});


function openmodal(){
    $('#modalformusuario').modal("show");
    
}
