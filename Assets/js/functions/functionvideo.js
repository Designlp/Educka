
const cardcurso = document.querySelector('#cardcurso');
const titulo = document.querySelector('.tituloclase');
const descripcion = document.querySelector('#descripclase');

document.addEventListener("DOMContentLoaded",function(){
    var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
    var ajaxUrl = baseurl+'/Video/getcurso';
    request.open("GET",ajaxUrl,true);
    request.send();
    request.onreadystatechange =function(){
        if(request.readyState == 4 && request.status==200){
            //console.log(request.responseText);
            var objdata=JSON.parse(request.responseText);

            cardcurso.innerHTML = `<div  class="media flex-nowrap">
            <div class="media-left mr-16pt">
                <a href="${baseurl}/Contenido"><img src="${baseurl + objdata.portadaurl}"
                         width="40"
                         alt="Angular"
                         class="rounded"></a>
            </div>
            <div class="media-body d-flex flex-column">
                <a href="${baseurl}/Contenido"
                   class="card-title">${objdata.titulo}</a>
                <div class="d-flex">
                    <span class="text-50 small font-weight-bold mr-8pt">${objdata.nombre} ${objdata.apellidos}</span>
                    <!--<span class="text-50 small">Software Engineer and Developer</span>-->
                </div>
            </div>
        </div>`;

     
              
        }
    }

    getclase();
},false);



function getclase(){
    var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
    //El getusuario esta en Singular !Cuidado confunfir!
    var ajaxUrl = baseurl + '/Video/getclase';
    request.open("GET", ajaxUrl, true);
    request.send();
    request.onreadystatechange = function () {
        if (request.readyState == 4 && request.status == 200) {
    
            var objdata = JSON.parse(request.responseText);
    
            if (objdata.estado) {
                titulo.innerHTML= objdata.titclase;
                descripcion.innerHTML=objdata.descripcion;
                getvideo(objdata.enlace);
                
            } else {
                swal("Error", objdata.msg, "error");
            }
        }
    }
    
}


function getvideo(url) {
    let enlace = url;
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
            hideControls: true,
            showPosterOnEnd: true,
            disableYouTube: true,
            youtube: {
                noCookie: true,
                enablejsapi: 1,
                rel: 0,
                modestbranding: 1,
                showinfo: 0,
                iv_load_policy: 3,
                controls: 0,
                disableClickHandling: true,
                disablekb: 1
            },

        });

        player.toggleControls(false);
        player.on('play', function () {
            player.toggleControls(true);
        });

        player.on('enterfullscreen', function () {
            iframe.requestFullscreen();
        });

        player.on('exitfullscreen', function () {
            if (document.fullscreenElement === null) {
                player.toggleFullscreen(false);
            }
        });

    }
    );

}

//funciones de listado de video

const listclases = document.querySelector('#course-toc-2');

// Obtener información de suscripción del usuario mediante AJAX
$.ajax({
    url: baseurl + "/Contenido/getusuario",
    type: "GET",
    dataType: "json",
    success: function (data) {
        const suscripcion = data.suscripcion; // Obtener el valor de suscripción del usuario

        // Cargar las plataformas de forma dinámica mediante Ajax
        $.ajax({
            url: baseurl + "/Contenido/getclases",
            type: "GET",
            dataType: "json",
            success: function (data) {
                const clases = data;

                // Generar HTML de las plataformas
                const clasesHTML = `
                    ${clases.map(function (clase) {
                    return `
                            <div class="accordion__menu-link">
                                ${clase.iconp}
                                <a class="flex" onclick="checkPrivacy(${clase.privacidad}, ${clase.idclases}, ${suscripcion})">${clase.titclase}</a>
                                <span class="text-muted">8m 42s</span>
                            </div>
                        `;
                }).join('')}
                `;

                // Agregar las plataformas al elemento listclases
                listclases.innerHTML = clasesHTML;
            },
            error: function (xhr, status, error) {
                console.log("Error al cargar las plataformas:", error);
            }
        });
    },
    error: function (xhr, status, error) {
        console.log("Error al obtener información del usuario:", error);
    }
});

// Función para comprobar la privacidad y mostrar la alerta
function checkPrivacy(privacidad, idclase, suscripcion) {
    if (suscripcion === 0) {
        if (privacidad === 0) {
            swal("Alerta", "La clase es privada", "error");
        } else if (privacidad === 1) {
            var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            var ajaxUrl = baseurl + '/Contenido/asingclases/' + idclase;
            request.open("GET", ajaxUrl, true);
            request.send();
            request.onreadystatechange = function () {
                if (request.readyState == 4 && request.status == 200) {
                    window.location = baseurl + "/Video";
                }
            };
        }
    } else if (suscripcion === 1) {
        var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        var ajaxUrl = baseurl + '/Contenido/asingclases/' + idclase;
        request.open("GET", ajaxUrl, true);
        request.send();
        request.onreadystatechange = function () {
            if (request.readyState == 4 && request.status == 200) {
                window.location = baseurl + "/Video";
            }
        };
    }
}

