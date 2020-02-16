<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />    
        <title>Printing Text - Allegro Game Programming</title>
        <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel="stylesheet"><link href='http://fonts.googleapis.com/css?family=Cormorant+Infant' rel="stylesheet"><link rel="stylesheet"
              type="text/css"
              href="../testcss.css">
    </head>
    
<body>
    
 <!-- Header -->
<?php include('..//Includes//header.php'); ?>

<!-- Navigation -->
<?php include('..//Includes//nav.php'); ?>
    
<!-- Navigation2 -->
<?php include('..//Includes//nav2.php'); ?>
    
<!-- Left --><div class = "mainWrapper">
<?php include('..//Includes//Left_Allegro.php'); ?>

<!-- Right -->
    
    <div id ="rightz">

    <h1>Printing Text - Allegro Game Development</h1> 
        
    <h2>Printing Text &amp; Bonus Program</h2>
    
        <p>There are several functions which allow you to display text output in different areas on the window.  Some of the arguments allow you to manage the font, color, or formatting of the text.
        
        <span class = "nl">In order to simply all of the definitions, I will simply list them below.</span></p>
        
    <ul id="li">
        <li><b>textout_ex(BITMAP *bmp, const FONT *f, const char *s, int x, y, int color, int bg) :</b> The first parameter refers to the window, then the type of font, the string literals, the x and y coordinates of the text, and finally the color as well as the background color of the text.  </li>
        <li><b>textout_centre_ex():</b> Same as above but the text is centered rather than left justified.</li> 
        <li><b>textout_justify_ex():</b> Allows you to control the justification of the text.</li> 
        <li><b>textprintf_ex():</b> Allows you to pass numerical data into the textout function.</li> 
        <li><b>textprintf_centre_ex():</b> Combines the printf and the centre function.</li> 
        <li><b>textprinf_right_ex():</b> Same only right justified.</li> 
        <li><b>textprinf_justify():</b> Provides control over the justification of the text.</li> 
    </ul>
        
        <p>To print text in the center of the screen we can just pass the 'SCREEN_W' variable and divide it by 2. That would like this:</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    textout_centre_ex(screen, font, "Centered words", SCREEN_W/2, 200, 10, -1); </pre>
        
    <hr />    
        
    <!-- Bonus Program -->
    <h3>Bonus Program</h3>    
        
        <p>In this program we are going to be displaying a spline which changes it coordinates and then renders the spline. Then it erases it and changes the coordinates before rendering another spline.</p>

    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    #include "allegro.h"
    #include "stdio.h"

    int main(void){
        
        <span class = "comments">// Initialize Allegro</span>
        allegro_init();
        install_keyboard();
    
        int ret;
        ret = set_gfx_mode(GFX_AUTODETECT_WINDOWED, 640, 480, 0, 0);
    
        if(ret != 0)
        {
            allegro_message(allegro_error);
            return 1;
        }
    
        textprintf_ex(screen, font, 0, 0, 15, -1, 
        "Splines program - %dx%d", SCREEN_W, SCREEN_H);
    
        <span class = "comments">// Our initial coordinates for our spline</span>
        int points[8] = {0, 240, 300, 0, 200, 0, 639, 240};
    
        <span class = "comments">// Store the new coordinates for our y1 point and y2 points</span>
        int y1 = 0;
        int y2 = SCREEN_H;
        <span class = "comments">// Increment or decrement the variables based on these values</span>
        int dir1 = 10;
        int dir2 = -10;
    
        while(!key[KEY_ESC])
        {
            <span class = "comments">// Increment or decrement y1 by dir1</span>
            y1 += dir1;
            
            <span class = "comments">// Check the value of y1</span>
            if(y1 > SCREEN_H)
            {
                <span class = "comments">// If y1 becomes to high, change the value of it by decrementing it</span>
                dir1 = -10;
            }
        
            <span class = "comments">// Check the value of y1</span>
            if(y1 &lt; 0) {
                <span class = "comments">// If y1 becomes negative increment it by 10</span>
                dir1 = 10;
            }
            <span class = "comments">// Pass the value of y1 into our second y point of the spline</span>
            points[3] = y1;
        
            <span class = "comments">// Increment y2 by value of 10</span>
            y2 += dir2;
            
            <span class = "comments">// Check the value of y2</span>
            if(y2 > SCREEN_H)
            {
                <span class = "comments">// If y2 becomes too large decrement it</span>
                dir2 = -10;
            }
            
            <span class = "comments">// Check if y2 becomes negative</span>
            if(y2 &lt; 0)
                <span class = "comments">// If y2 becomes less than zero increment it</span>
                dir2 = 10;
                
            <span class = "comments">// Assign that value to the third point of y</span>
            points[5] = y2;
        
            <span class = "comments">// Render the spline in white</span>
            spline(screen, points, 15);
            rest(30);
            <span class = "comments">// Pause for 30 and then draw over it with black</span>
            spline(screen, points, 0);
        }
    
        allegro_exit();
        return 0;
    }
    END_OF_MAIN()</pre>
        
        <p>The first part of the program is what we have already learned in respect towards setting up the window and checking to see that it has worked.
        
        <span class = "nl">Then we print the title of the program at the top left corner along with the resolution of the width and height of the program. Next, because we are building a program which manipulates a spline, which is a curved line we have to create the initial points for it, we pass these points into an integer array.</span>
        
        <span class = "nl">Following this we have to create four integers. The first two integers will hold the substitute coordinates for our new y2 and y3 coordinates. The x coordinates in this example will remain static.</span>
        
        <span class = "nl">Variables dir1 and dir2 will be used to either increment or decrement our y2 and y3 coordinates. We can finally move on to our while loop (which will stop if we press the escape key).</span>
        
        <span class = "nl">Our loop begins with incrementing y2 by the value of our dir1 variable, which has been initialized to the value of ten. Our first y2 coordinate begins at zero, so it will be at the top of screen.  Incrementing it by ten continously will bring that coordinate towards the bottom of the screen.</span>
        
        <span class = "nl">If we pass an if statement that checks to see if our y1 coordinate becomes larger than the screen width, we can change it to start decrementing that variable by 10 instead.</span>
        
        <span class = "nl">From here we can assign our second y coordinate to one of the points in our spline. Now we can begin start working on our third y coordinate or 'point[5]'.  We can manipulate this one independently of our first one by assigning another variable to increment/decrement it.</span>
        
        <span class = "nl">Basically the same thing is repeated to our second coordinate which was done to our first only this time we decided to decrement it and then increment it if the value becomes to small.</span>
            
        <span class= "nl">We can actually write a series of 'prinf()' functions in our if statements, to display the actual values in our console. The last part of the while loop is actually extremely important because we will render the spline with the coordinates changed to the screen.</span>
            
        <span class = "nl">The first function passes our points array into our spline function with the color being rendered as white.  Then we 'rest()' for 30 seconds and call the function again only this time rendering it in black so that it erases the first line we drew.</span>
            
        <span class = "nl">That will be all for this program.</span>
        </p>
        
        
        <hr />        
        <br />
        <a href = "Allegro3.html">Previous Page</a>
        <span class = "next"><a href="Allegro5.html">Next Page</a></span>
        <br /><br />

    </div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>    