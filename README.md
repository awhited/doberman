# doberman
## Personal project website for cs1520. 
This is a simple site written in html, css, and javascript whose purpose is to be a personal promotional website. It has three sections, home, contact, and credits.

###Home
Homepage of the website. Says my name in fancy JS

###Contact
Simple contact form. will be tied in with php and mysql at a later date

###Credits
List of resources from where I've gathered information. 

##Part 2
In part 2 I will incorperate bootstrap, a frontend framework, to animate the nav bar and possibly some other things.

There will also be added functionallity in the contact form, i will use mysql and php to dump the values into a database.

###MySQL
I've tied the contact form into a mySQL database. Upon pressing submit, JS prepares an AJAX GET call to a php file which will take the data and store it in a table. 

###Styles
I've implemented several style updates to refine my terminal typing stuff. The new styles are more depended on CSS than typed.js which I was previously using. This makes them faster and easier to read. 

###Frontpage
I've decided to extend the terminal typing feature into a functional terminal which executes psudocommands to activate styles and sections of markup. When all the commands are complete, you are left with the pretty website, One obstacle in this design is getting JavaScript to execute the "commands" one at a time, rather than all at once. The current model is written using AJAX calls to php. The php files can only fire one at a time, so the theory is that the all of the AJAX calls for commands will fire one after another, but be processed by the server at a much slower rate, to simulate typing and command execution n'at. At this point the feature is broken and having only recieved the terminal code today I'm not sure that I'll get the chance to make it work :(. 
