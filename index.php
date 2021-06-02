<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Loading Screen</title>
  <link rel="stylesheet" href="./css/font.css" type="text/css">
  <link rel='stylesheet' href='https://ps.googleapis.com/css?family=Orbitron' rel='stylesheet' type='text/css'><link rel="stylesheet" href="./css/style.css">
</head>
<body>
  <audio id="loading" src="music/music.mp3" autoplay="true" hidden="true" loop="true"></audio>
<div class="slider-box">
  <div class="range">
    <p><?php echo $music_title ?> :</p>
    <div class="space3"></div>
    <p class="font"><?php echo $music_name ?></p>
  </div>
</div>
<div class="center">
  <img class="img-header" src="img/logo.png" width="200" height="200">
  <div class="space"></div>
  <h1 class="name-title"><?php echo $server_name ?></h1>
  <div class="space"></div>
  <div class="box-info">
    <p class="info"><?php echo $gamemode_title ?>: <b><?php echo $gamemode ?></b></p>
    <p class="space2"></p>
    <p class="divider">|</p>
    <p class="space2"></p>
    <p class="info"><?php echo $discord_title ?>: <b><?php echo $discord ?></b></p>
    <p class="space2"></p>
    <p class="divider">|</p>
    <p class="space2"></p>
    <p class="info"><?php echo $slots_title ?>: <b><?php echo $slots ?></b></p>
  </div>
</div>
<ul id="scene" data-friction-x="0.03"
  data-friction-y="0.05">
  <li class="layer" id="specks" data-depth="0.1"></li>
  <li class="layer" id="layer-1" data-depth="0.15">
    <div class="img" id="img-1"></div>
  </li>
  <li class="layer" id="layer-2" data-depth="0.25">
    <div class="img" id="img-2"></div>
  </li>
  <li class="layer" id="layer-3" data-depth="0.45">
    <div class="img" id="img-3"></div>
  </li>
</ul>
    <script>
      var vid = document.getElementById("loading");
      vid.volume = <?php echo $music_volume ?>;
    </script>

</body>
</html>
