

            var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            //El getusuario esta en Singular !Cuidado confunfir!
            var ajaxUrl = baseurl+'/Video/getclase';
            request.open("GET",ajaxUrl,true);
            request.send();
            request.onreadystatechange =function(){
                if(request.readyState == 4 && request.status==200){
                  
                    var objdata=JSON.parse(request.responseText);
                
                    if(objdata.estado){
                        getvideo(objdata.enlace);
                    }else{
                        swal("Error",objdata.msg,"error");
                    }
                }
            }
           
    

function getvideo(url){
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
                             enablejsapi:1,
                             rel: 0,
                             modestbranding: 1,
                             showinfo: 0,
                             iv_load_policy: 3,
                             controls:0,
                             disableClickHandling: true,
                             disablekb:1
                          },
    
        });
    
        player.toggleControls(false);
        player.on('play', function() {
            player.toggleControls(true);
          });
        
          player.on('enterfullscreen', function() {
            iframe.requestFullscreen();
          });
        
          player.on('exitfullscreen', function() {
            if (document.fullscreenElement === null) {
              player.toggleFullscreen(false);
            }
          });
    
    }
    );
    
}



