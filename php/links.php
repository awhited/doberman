<?php

$urls = array("https://www.youtube.com/watch?v=dQw4w9WgXcQ?autoplay=1","http://w3schools.com","https://api.jquery.com","https://github.com/mattboldt/typed.js/","http://mattbowytz.com","https://stackoverflow.com","https://google.com");

$text = array("My old friend Rick","w3schools","Matt Boldt, for his typed.js tool","jQuery api","Matt Bowytz, for being awesome","StackOverflow","Big homie Googs");

$size = sizeof($urls);
for( $i=0; $i<$size; $i++ ) {
  $jawn=$urls[$i];
  $bit=$text[$i];
  echo "<li><a href='${jawn}'>${bit} </a></li>";
}
?>
