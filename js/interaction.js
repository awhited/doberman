
function command(command) {
    $.ajax({
      
      url: "php/command.php?=&cmdtxt=" + command,
      type: "get", 
      success: function(result){
          console.log(result);    
          //$(".intro").append(result);
      }
   });  
}

function shell() {
  $('.intro').append(">");
}

function pauseterm() {
  var start = Date.now();
  while (Date.now() < start + 3000) {};
}

$(document).ready(function() {
  shell();
  command("Linux Kernel");
  command(">"); 
  command("stuff");
    

});
