<!DOCTYPE html>
<html lang="en_EN">
<?php
require_once __DIR__ . '/src/router.php';
?>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>BT</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="static/index.css" />
</head>

<body>
  <div class="scanlines"></div>
  <div class="scanline"></div>
  <div class="flicker"></div>
  <!--<div class="box progress">
    <h2>Progress Bar</h2>
    <div class="box-body">
      <div class="progress-box">
        <p class="text-center progress-text">Loading Floppy Disk 1 of 4,273...</p>
        <div class="progress-bar"><span id="loader" style="width:0%"></div>
        <script>
          var elem = document.getElementById("loader");
          var width = 1;
          var id = setInterval(frame, 5);

          function frame() {
            if (width >= 100) {
              clearInterval(id);
              document.querySelector(".body").style.display = "block";
              document.querySelector(".progress").style.display = "none";
            } else {
              width++;
              elem.style.width = width + '%';
              document.querySelector(".progress-text").style.display = "Loading Floppy Disk " + width + " of 4,273...";
            }
          }
        </script>
      </div>
    </div>
  </div>-->
  <!-- style="display: none" -->
  <div class="body" >
    <?= getMenuHTML(); ?>
    <?= getContentHTML(); ?>
  </div>
  <div style="visibility:hidden">
    <audio autoplay loop>
      <source src="static/megadrive_video_stalker.mp3">
      <p>If you can read this, your browser does not support the audio element.</p>
    </audio>
  </div>
  </div>
</body>

</html>