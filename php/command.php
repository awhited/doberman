<?php

$file = fopen("lock.dat", w);

//flock($file, LOCK_EX);

$cmdtxt = $_GET["cmdtxt"];
echo "cmdtxt = ${cmdtxt}"
/*$length = strlen($cmdtxt);
$time = $length/6;
echo "
      <style type='text/css'>.cursor {
          animation: typing ${time}s steps(${length}, end); 
        }
      </style>
      <div class='term'>${cmdtxt}<span class='cursor'> </span></div></br>  
     ";
     
//sleep($time);
*/
//flock($file, LOCK_UN);

?>
