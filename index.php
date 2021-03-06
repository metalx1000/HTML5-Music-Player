<!DOCTYPE html>
<html lang="en">
<head>
  <title>Music Player</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="player.js"></script>

  <!--Favicons-->
  <link rel="apple-touch-icon" sizes="57x57" href="icons/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="icons/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="icons/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="icons/apple-touch-icon-76x76.png">
  <link rel="icon" type="image/png" href="icons/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="icons/favicon-96x96.png" sizes="96x96">
  <link rel="icon" type="image/png" href="icons/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="icons/manifest.json">
  <link rel="shortcut icon" href="icons/favicon.ico">
  <meta name="apple-mobile-web-app-title" content="Music Player">
  <meta name="application-name" content="Music Player">
  <meta name="msapplication-TileColor" content="#2d89ef">
  <meta name="msapplication-config" content="icons/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">
</head>
<body>

<div class="container">
  <h2>Music Player</h2>
  <div id="player_box" style="display:none">
  </div>
  <div class="progress">
    <div id="progress" class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:0%">
      Song Time
    </div>
  </div>
  <div class="btn-group btn-group-justified">
    <a href="#" id="playbtn" class="btn btn-primary btn-lg">Play/Pause <span class="glyphicon glyphicon-play"></span></a>
  </div>
  <div class="btn-group btn-group-justified">
    <a href="#" id="backbtn" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-step-backward"></span>Previous</a>
    <a href="#" id="nextbtn" class="btn btn-primary btn-lg">Next<span class="glyphicon glyphicon-step-forward"></span></a>
  </div>

  <div class="btn-group btn-group-justified">
    <a href="#" id="shuffle" class="btn btn-primary btn-lg">Shuffle <span class="glyphicon glyphicon-random"></span></a>
  </div>
  <div class="btn-group btn-group-justified">
    <a href="#" id="voldown" class="btn btn-primary btn-lg">Volume <span class="glyphicon glyphicon-volume-down"></span></a>
    <a href="#" id="volup" class="btn btn-primary btn-lg">Volume <span class="glyphicon glyphicon-volume-up"></span></a>
  </div>

  <div class="btn-group btn-group-justified">
    <a href="#" id="rmsong" class="btn btn-primary btn-lg">Remove Song<span class="glyphicon glyphicon-minus-sign"></span></a>
    <a href="#" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Add Songs<span class="glyphicon glyphicon-plus-sign"></span></a>
  </div>


  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Song URLs Below</h4>
        </div>
        <div class="modal-body">
            <div class="form-group">
              <textarea id="list" class="form-control" rows="5" id="comment"></textarea>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" id="addlist" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</div>




<!--github ribon-->
<a href="https://github.com/metalx1000/HTML5-Music-Player">
<img style="position: absolute; top: 0; right: 0; border: 0;" src="https://camo.githubusercontent.com/365986a132ccd6a44c23a9169022c0b5c890c387/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f7265645f6161303030302e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png"></a>
</body>
</html>

