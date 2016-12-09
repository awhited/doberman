function links() {
  $.ajax({
    
    url: "php/links.php?=",
    type: "get", 
    success: function(result){
        $(".links").append(result);
    }
 });  
}

$(document).ready(function() {
  links();
});
