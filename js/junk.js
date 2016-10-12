$(function($) {
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
                      $('subtext5').typed({
                        strings: ["balls"],
                        typeSpeed: 1
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
        '<li><a href="#credits"</a>Credits</li>' +
        '<li class="icon">' +
          '<a href="javascript:void(0);" onclick="openClose()">&#9776;</a>' +
        '</li>';
  $('#topNav').append(cnt);
})(jQuery);


(function($) {
  $('#daform').on('submit', function(e) {
    e.preventDefault();
    console.log('*yodels');

    var $form = $(this).serialize();
    console.log($form);

  });

})(jQuery);

