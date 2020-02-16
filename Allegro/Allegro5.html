<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />    
        <title>Flood Fill - Allegro Game Programming</title>
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

    <h1>Flood Fill - Allegro Game Development</h1> 
    
    <h2>Flood Fill</h2>
    
        <p>In this example we are going to show how to fill in a moving object using the 'floodfill()' function. Let's look at some code with comments first and then preceed to understand the code bit by bit afterwards.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    #include &lt;allegro.h>

    int main(void) {
        <span class ="comments">// Declare variables for our x, y, xdir, ydir and radius.</span>
        int x = 100, y =100;
        int xdir = 10, ydir = 10;
        int radius = 50;
        
        <span class = "comments">// Initialize allegro, timer and keyboard</span>
        allegro_init();
        install_keyboard();
        install_timer();
        
        int ret = set_gfx_mode(GFX_AUTODETECT_WINDOWED, 640, 480, 0, 0);
        if(ret != 0) {
            allegro_message(allegro_error);
            return 1;
        }
        
        textprintf_ex(screen, font, 0, 0, 15, -1, "Flood fill %dx%d", SCREEN_W, SCREEN_H);
        
        <span class = "comments">// Start the while loop</span>
        while(!key[KEY_ESC])
        {
            <span class = "comments">// increment x by 10</span>
             x += xdir;
             <span class = "comments">// Check to see that if x-radius is greater than current direction</span>
             if(x > SCREEN_W-radius)
             {
                <span class = "comments">// Decrement it by 10</span>
                 xdir = -10;
             }
             
             <span class = "comments">// If x is less than 0 minus radius</span>
             if(x &lt; 0+radius)
             {
                <span class = "comments">// Increment it by 10</span>
                 xdir = 10;
             }
                
             <span class = "comments">// Do the same for our y coordinates</span>
             y += ydir;
             if( y > SCREEN_H-radius)
             {
                 ydir = -10;
             }
             if(y &lt; 0+radius)
             {
                 ydir = 10;
             }
             
             <span class = "comments">// Create the circle</span>
             circle(screen, x, y, radius, 10);
             <span class = "comments">// Fill in the moving circle</span>
             floodfill(screen, x, y, 10);
             rest(20);
             <span class = "comments">// Cover the old circle with black</span>
             rectfill(screen, x-radius, y-radius, x+radius, y+radius, 0);
         }
            
            allegro_exit();
            return 0;

    }
    END_OF_MAIN()</pre>
        
        <p>The program uses a similar algorithm to the one in our spline program. Where it will change the x and y values to draw the shape on the screen continously while covering it up with black to make it appear as if it is moving.
        
        <span class = "nl">The flood fill function simply works by ensuring that the object stays filled with the correct color in its new location each time. Notice how we had to add the radius in our 'if' statements to ensure that the circle didn't pass the barrier of our 'SCREEN_W' or 'SCREEN_H'. </span>
        
        <span class = "nl">We also subtracted the radius if the circle got to close to the edge of the top or left side of the screen, to ensure that circle jumped back in time.</span></p>
        
        
        <hr />        
        <br />
        <a href = "Allegro4.html">Previous Page</a>
        <span class = "next"><a href="Allegro6.html">Next Page</a></span>
        <br /><br />

    </div>
    
       
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>

</html>    