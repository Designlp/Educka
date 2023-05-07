<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Video personalizado</title>
    <script src="https://www.youtube.com/iframe_api?key=AIzaSyAY7t04ndWQXH4H34SHXBa8f2jSSOdaceU"></script>

    <style>
      #player {
        width: 100%;
        height: 0;
        padding-bottom: 56.25%;
        position: relative;
      }
      #video-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: black;
        opacity: 0.5;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 1;
      }
      #play-button {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background-color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <div id="player"></div>
    <div id="video-overlay">
      <div id="play-button">&#9658;</div>
    </div>
    <script>
      var player;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
          videoId: 'osUFRHYgvQ4',
          events: {
            'onReady': onPlayerReady
          }
        });
      }
      function onPlayerReady(event) {
        document.getElementById('play-button').addEventListener('click', function() {
          player.playVideo();
          document.getElementById('video-overlay').style.display = 'none';
        });
      }
    </script>
  </body>
</html>
