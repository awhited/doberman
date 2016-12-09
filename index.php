<!doctype html>
<html>
  <head>
    <title>Project</title>
    <meta charset="UTF-8"> 
    <link rel="stylesheet" type="text/css" href="css/css.css">
    <!--<link rel="stylesheet" 
          href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
          crossorigin="anonymous"
    >-->
  </head>
  <body>
    <ul class="topnav" id="topNav"></ul>
    <div class="section container init" id="home">
      <div class="topspacer"></div>
      <div class="intro term"></div>
      <h1 class="name"></h1>
      <div class="subtext">
        <p class="subtext1"></p>
        <p class="subtext2"></p>
        <p class="subtext3"></p>
        <p class="subtext4"></p>
        <p class="subtext5"></p>
      </div>
    </div>
    <div class="section" id="contact">
      <div class="topspacer"></div>
      <h1>Contact</h1>
      <div id="precontact"></div>
      <form method="post" id="daform">
        <p>Please enter your contact info:</p>
        <fieldset class="text">
          <div class="input-holder">
            <label for="fname">First Name:</label>
            <input type="text" name="fname">
          </div> 
          <div class="input-holder">
            <label for="lname">Last Name:</label>
            <input type="text" name="lname">
          </div> 
          <div class="input-holder">
            <label for="email">Email Address:</label>
            <input type="text" name="email">
          </div> 
        </fieldset>
        <p>On a scale from 1 - 5 how would you rate this site:</p>
        <fieldset class="radios">
          <div class="radio holder">
            <input type="radio" name="rad" value="1" id="rad1">
            <label for="rad1">1</label> 
          </div>
          <div class="radio holder">
            <input type="radio" name="rad" value="2" id="rad2">
            <label for="rad2">2</label> 
          </div>
          <div class="radio holder">
            <input type="radio" name="rad" value="3" id="rad3">
            <label for="rad3">3</label> 
          </div>
          <div class="radio holder">
            <input type="radio" name="rad" value="4" id="rad4">
            <label for="rad4">4</label> 
          </div>
          <div class="radio holder">
            <input type="radio" name="rad" value="5" id="rad5">
            <label for="rad5">5</label> 
          </div>
        </fieldset>
        <fieldset class="checkboxes">
          <label for="checkjawn">Do you agree to the terms of service?</label>
          <input type="checkbox" name="checkjawn" value="yes" id="checkjawn">
        </fieldset>
        <fieldset class="form-submit">
          <input type="submit">  
        </fieldset>
      </form>
      <div id="afterForm"></div>
    </div>
    
    <div class="section" id="credits">
      <div class="topspacer"></div> 
      <h1>Credits</h1>
      <h3>Lord knows I couldn&#39t do it on my own</h3>
      <h3>Special thanks to:</h3>
      <ul class='links'></ul>        




    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="./js/typed.js"></script>
    <script src="./js/junk.js"></script>
    <!--<script src="./js/interaction.js"></script> for use with broken php/css terminal -->
    <script src="./js/links.js"></script>
  </body>
</html>
