<?php
 $flor01 = '🌸';
 $flor02 = '🌼';
 $flor03 = '🌻';
 $flor04 = '🌹';
 $flor05 = '🥀';
 $flor06 = '🌺';
 $flor07 = '🍄';

  $flores = ["🌸", "🌼","🌻","🌹","🥀","🌺","🍄"];
  $flores[3] = "🌻";
  array_push($flores, "");

  echo gettype($flores);
  echo count($flores);

  echo "<h1>frô</h1>";

  $qtd = count($flores);

  $contador = 0;
  
  while($contador < $qtd) {
     echo "$contador <br>";    
     echo $flores[$contador];    
     $contador++;
    }
?>