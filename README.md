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
In Part 2, I will expand on part one by recoding many components in PHP and attempting to make a psudo terminal which applies styles to the site. 

There will also be added functionallity in the contact form, i will use mysql and php to dump the values into a database.

###JavaScript
An undocumented (from part1) yet important part of this site is the function at the top of junk.js. this function will set the section sizes to the size of the browser window so I can make this a one page site while keeping the illustion of a three page website. I've also incorperated AJAX calls to PHP files and did a hefty amount of work into the psudo terminal which doesn't work :(

###MySQL
I've tied the contact form into a mySQL database. Upon pressing submit, JS prepares an AJAX GET call to a php file which will take the data and store it in a table. 

###Styles
I've implemented several style updates to refine my terminal typing stuff. The new styles are more depended on CSS than typed.js which I was previously using. This makes them faster and easier to read.
 
##php
I've implemented php link looping in my credits with the use of the links.php file. This file has an array filled with links and echos out the links formatted into list elements and anchor tags. You can call it either from an inline php call or an AJAX call. I have used an AJAX call. The AJAX call can be found in links.php and I personally think its a cleaner way to write the markup.
 
###Frontpage
I've decided to extend the terminal typing feature into a functional terminal which executes psudocommands to activate styles and sections of markup. When all the commands are complete, you are left with the pretty website, One obstacle in this design is getting JavaScript to execute the "commands" one at a time, rather than all at once. The current model is written using AJAX calls to php. The php files can only fire one at a time, so the theory is that the all of the AJAX calls for commands will fire one after another, but be processed by the server at a much slower rate, to simulate typing and command execution n'at. At this point the feature is broken and having only recieved the terminal code today I'm not sure that I'll get the chance to make it work :(. 
