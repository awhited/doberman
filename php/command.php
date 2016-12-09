<?php

// This file does not work and is only here to show what I attempted. 
// the original plan was to  to do a little simulation of a terminal 
// running psudocode which will "load the site", revealing markup and 
// styles piece by with psudo commands until the whole site is shown. 
// In doing this, I was trying to find a way to get javascript to stop 
// firing all my commands at once so I could "execute" one command at 
// a time. The first method I tried was to use the setTimeout() function, 
// but JS just ran everything else and came back to it when it was done. 
// The second method, which is shown here, is making an ajax call to a 
// php file which does a blocking flock on a random file and calls sleep() 
// for the required amount of time. In theory, this should prevent ajax 
// from recieving a response until the file is finished blocking, 
// in which case all of the next requests would be executed in the sequence 
// to which they were called. In practice, this breaks horribly and the 
// server throws an error when I try to run any file with a blocking flock section.
//
$file = fopen("lock.dat", 'w');

flock($file, LOCK_EX);

$cmdtxt = $_GET["cmdtxt"];
echo "cmdtxt = ${cmdtxt}"
$length = strlen($cmdtxt);
$time = $length/6;
echo "
      <style type='text/css'>.cursor {
          animation: typing ${time}s steps(${length}, end); 
        }
      </style>
      <div class='term'>${cmdtxt}<span class='cursor'> </span></div></br>  
     ";
     
sleep($time);

flock($file, LOCK_UN);

?>
