(function($) {
  var h=$(window).height();
  $('.section').css("min-height",h);
})(jQuery);



(function($) {
  $(".intro").typed({
    strings: ["Hi, my name is..."],
    typeSpeed: 1,
    startDelay: 500,
    callback: function() {
      $('.name').append("Austin Whited");
      $('.subtext1').typed({
        strings: ["html5, javaScript, css, php extraordinaire"],
        typeSpeed: 1,
        startDelay: 2000,
        callback: function() {
          $('.subtext2').typed({
            strings: ["...", "..."],
            typeSpeed: 1,
            callback: function() {
              $('.subtext3').typed({
                strings: ["just kidding"],
                typeSpeed:1,
                 
                callback: function() {
                  $('.subtext4').typed({
                    strings: ["See look at the mess of js code that is behind this monstrosity.", "See check out the blinking cursors that I can't seem to make go away"],
                    callback: function() {
                      $('.subtext5').typed({
                        strings: ['¯&#92_(ツ)_/¯'],
                        typeSpeed: 1,
                        startDelay: 4000
                      });
                    } 
                  });   
                } 
              });
            }
          });
        } 
      });
    }
  });
});

(function($) {
  var cnt = 
        '<li><a href="#home">Home</a></li>' +
        '<li><a href="#contact"</a>Contact</li>' +
        '<li><a href="#credits"</a>Credits</li>';
  $('#topNav').append(cnt);
})(jQuery);

(function($) {
  var cnt =
        '<p class="contact">If you wish to contact me with any questions, comments, or concerns<br/>please fill out this form that literally goes nowhere and I will not get back to you.<br/>(Looking at you Microsoft)</p>';
    $('#precontact').append(cnt);
})(jQuery);

(function($) {
  $('#daform').on('submit', function(e) {
    e.preventDefault();
    console.log('*yodels');
     
    var cnt =
      '<div class="topspacer"></div>' +
      'Thank you for your submission. A service representative will contact you shortly......<br/>But actually this is my information if you need to get in touch with me.<br/>You won&#39t be hearing from anyone' +
      '<br/><br/>Austin Whited' +
      '<br/>University of Pittsburgh' +
      '<br/>C: (410) 916-5277' +
      '<br/>E: auw6@pitt.edu' +
      '<br/>http://pitt.edu/~auw6' +
      '</p>';
    
    var form = $(this).serialize();
    console.log(form);
    if(document.get<ElementById('checkjawn').checked) {
      $('#daform').hide();
      $('#precontact').hide();
      $.ajax({
        url: "php/formsubmit.php?=" + form,
        type: "get", 
        success: function(result){
              $("#afterForm").append(result);
        }
      });  
      $('#afterForm').append(cnt);
    } else {
      alert("You must accept the Terms of Service before proceeding!");
    }

  });
})(jQuery);


