<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Video Player</title>
  <link rel="stylesheet" href="https://cdn.plyr.io/3.6.2/plyr.css" />
</head>
<body>
  <div class="plyr__video-embed" id="player">
  <iframe src="https://www.youtube.com/embed/bCTSCRo3vwM" title="ONE PIECE FILM RED SUMMARY ANIMATION" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  </div>

  <script src="https://cdn.plyr.io/3.6.2/plyr.js"></script>
  <script>
    const player = new Plyr('#player', {
      controls: ['play', 'progress', 'current-time', 'mute', 'volume', 'fullscreen']
    });
  </script>
</body>
</html>
