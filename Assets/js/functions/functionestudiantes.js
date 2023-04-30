var tablero;
//Esto es un js
//Prueba a com
document.addEventListener("DOMContentLoaded",function(){
    tablero=$('#tableestudiantes').DataTable({
        "aProcessing":true,
        "aSeverSide":true,
        "language" :{
            "url":"https://cdn.datatables.net/plug-ins/1.12.1/i18n/es-ES.json"
        },
        "ajax":{
            "url":" "+baseurl+"/Estudiantes/getestudiantes",
            "dataSrc":""
        },
        "columns": [
            { "data": 'idusuario' },
            { "data": 'ci' },
            { "data": 'nombre' },
            { "data": 'apellidos' },
            { "data": 'telefono' },
            { "data": 'correo' },
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
   

},false);
//Activacion del Modal

