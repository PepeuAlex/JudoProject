<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Torneio de Judo</title>
  
  <link rel="stylesheet" href="style3.css">

</head>
<body>
<div class="round r-of-4">
  <div class="bracket-game">
    <div class="player top win">
      Rodrigo
      <div class="score">
        3
      </div>
    </div>
    <div class="player bot loss">
      João
      <div class="score">
        1
      </div>
    </div>
  </div>
  <div class="bracket-game cont">
    <div class="player top loss">
      Marlon
      <div class="score">
        0
      </div>
    </div>
    <div class="player bot win">
      Pedro 
      <div class="score">
        3
      </div>
    </div>
  </div>
</div>
<div class="connectors r-of-2">
  <div class="top-line"></div>
  <div class="clear"></div>
  <div class="bottom-line"></div>
  <div class="clear"></div>
  <div class="vert-line"></div>
  <div class="clear"></div>
  <div class="next-line"></div>
  <div class="clear"></div>
</div>
<div class="round r-of-2">
  <div class="bracket-game">
    <div class="player top loss">
      Rodrigo
      <div class="score">
        2
      </div>
    </div>
    <div class="player bot win">
      Pedro 
      <div class="score">
        3
      </div>
    </div>
  </div>
</div>
  
</body>
</html>
