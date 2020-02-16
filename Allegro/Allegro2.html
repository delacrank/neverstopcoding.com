<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />  
        <title>Vectors and Coordinates - Allegro Game Programming</title>
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

    <h1>Vectors and Coordinates - Allegro Game Developement</h1>    
    
    <h2>Graphics cont.</h2>    
        
        <p>So far we have learned how to render a bitmap image on to our window. We learned how our GPU stores frames in a buffer before rendering it to our OS window.  We also learned that 2 dimensional graphics are composed of vectors and vertices.
        
        <span class = "nl">In this section we are going to continue to learna about 2d vector graphics and proceed to use different functions which can draw shapes which we can color or fill.</span>
        
        <span class = "nl">One is the 'rect()' function and the other is the n'fillRect()' functoin.  Be sure to include both the starting and ending points for our x and y coordinates as these functions require 6 arguments: screen, x1, x2, y1, y2 and color.</span>
        
        <span class = "nl">Let me create a list of these functions so you have a better idea of how they work.</span></p>
        
        <ul id="li">
            <li><b>line() :</b> Requires 6 arguments (screen, x1, y1, x2, y2, color), draws a single line.</li>
            <li><b>hline() :</b> Requires 5 arguments (screen, x1, y1, x2, color), draws a single horizontal line.</li>
            <li><b>vline() :</b> Requires 5 arguments (screen, x1, y1, y2, color), draws a single horizontal line.</li>
            <li><b>rect() :</b> Requires 6 arguments (screen, x1, y1, y2, color), draws a single unfilled rectanle.</li>
            <li><b>rectfill() :</b> Requires 6 arguments (screen, x1, y1, y2, color), draws a single filled rectanle.</li>
            <li><b>circle :</b> Requires 5 arguments (screen, x1, y1, radius, color), draws an unfilled circle.</li>
            <li><b>circlefill() :</b> Requires 5 arguments (screen, x1, y1, radius, color), draws a filled circle.</li>
            <li><b>ellipse() :</b> Requires 6 arguments (screen, x1, y1, radiusx, radiusy, color), draws an unfilled ellipse.</li>
            <li><b>ellipsefill() :</b> Requires 6 arguments (screen, x1, y1, radiusx, radiusy, color), draws a filled ellipse.</li>
        </ul>
        
        <p>Let's look at an example of what drawing an unfilled rectangle in the center of the screen looks like.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    #include "allegro.h"
    
    int main()
    {
        allegro_init();
        
        install_keyboard();
        
        int ret;
        
        ret = set_gfx_mode(GFX_AUTODETECT_WINDOWED, 640, 480, 0, 0);
        
        if(ret != 0)
        {
            allegro_message(allegro_error);
            return 1;
        }
        
        textprintf_ex(screen, font, 0, 0, 1, -1, "Rectangle program");
        
        <span class = "comments">// Prints the rectanle starting at 70 x, 70 y, ending at 200 x, 200 y, color '13'</span>
        rect(screen, 70, 70, 200, 200, 13);
        
        while(!keypressed());
        
        allegro_exit();
    }
    END_OF_MAIN()
    </pre>
        
        <p>If we look at the x and y coordinates we can see the difference between 70 and 200 is 130 pixels, and also the difference will be equal to 130 pixels from top to bottom.
        
        <span class="nl">If we want to change the shape of our square to look more like a rectangle than we adjust the coordinates for our y coordinates and make them closer together. Let's look at an example of this.</span></p>
        
        <em>Code:</em>
        <!-- code -->
        <pre class="code">
        rect(screen, 70, 70, 200, 130, 13);</pre>
        
        <p>Or I can make the second x coordinate closer and keep our y coordinate at 200, then the rectangle will appear longer on the vertical plane.</p>
        
        <em>Code:</em>
        <!-- code -->
        <pre class="code">
        rect(screen, 70, 70, 130, 200, 13);</pre>
        
        <p>Now let's take a moment to notice how a circle or an ellipse is rendered and how we can change the radius to adjust the size of our circle. However, this time let's look at a filled circle or ellipse, instead of a an empty one.</p>
        
        <em>Code:</em>
        <!-- code -->
        <pre class="code">
        circlefill(screen, 70, 70, 5, 10);</pre>
        
        <p>We can draw an extremely small circle using this example, the radius determines how far the circle will be in every direction. So if we use 5 then the circle will be 10 pixels tall and 10 pixels wide.
        
        <span class = "nl">In order to see this properly demonstrated let's look at an example of a circle next to a cross with equal height and width.</span></p>
        
        <em>Code:</em>
        <!-- code -->
        <pre class="code">
        <span class = "comments">// Our filled circle</span>
        circlefill(screen, 70, 70, 50, 10);
        
        <span class = "comments">// Our horizontal line</span>
        hline(screen, 150, 70, 250, 10);
        
        <span class = "comments">// Our vertical line</span>
        vline(screen, 200, 20, 120, 10);</pre>
        
        <p>If you look at the x and y coordinates of our vertical line the y coordinates being 20 and 120 a difference of 100.  Then the horizontal line has two x coordinates of 150 and 250 the difference being a 100 again.
        
        <span class = "nl">Our circle however only has a radius of 50 pixels, so that means it's center is 70 both y and x, now let's look at an ellipse.</span></p>
        
        <em>Code:</em>
        <!-- code -->
        <pre class="code">
        <span class = "comments">// a narrow ellipse</span>
        ellipsefill(screen, 70, 70, 20, 40, 10);
        
        <span class = "comments">// a wide ellipse</span>
        ellipsefill(screen, 150, 70, 40, 20, 10);</pre>
        
        <p>By changing the values of the x and y coordinates for our third and forth arguments we can easily change the shape of our ellipse.  In the first example we have made the ellipse taller by adding 40 pixels to the top and bottom of our center point and only 20 pixels to the left and right of our center point.
        
        <span class = "nl">This was replicated in the second example by switching the values of the third and forth arguments.</span></p>
        
        
        <hr />        
        <br />
        <a href = "Allegro1.html">Previous Page</a>
        <span class = "next"><a href="Allegro3.html">Next Page</a></span>
        <br /><br />

    </div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>    