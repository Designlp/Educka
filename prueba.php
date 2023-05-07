<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Video de YouTube personalizado</title>
  </head>
  <body>
    <div id="player"></div>

    <script src="https://www.youtube.com/iframe_api"></script>
    <script>
      var player;

      function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
          videoId: 'HI8WFuTy4wc',
          playerVars: {
    
            'controls': 1,
            'rel': 0,
            'showinfo': 0,
            'origin': 'https://educka.online'
          },
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          }
        });
      }

      function onPlayerReady(event) {
        // Reproducir video cuando el reproductor esté listo
        event.target.playVideo();
      }

      function onPlayerStateChange(event) {
        // Detectar cambios de estado del reproductor (por ejemplo, cuando finaliza el video)
        if (event.data == YT.PlayerState.ENDED) {
          // Inserta aquí la acción que quieras que ocurra después de que finalice el video
        }
      }
    </script>
  </body>
</html>
