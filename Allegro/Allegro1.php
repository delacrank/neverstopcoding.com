<!DOCTYPE html>
<html>
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />    
        <title>2D Graphics - Allegro Game Programming</title>
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

    <h1>2D Graphics - Allegro Game Development</h1>    
        
    <h2>2D Graphics</h2>    
        
        <p>The way graphics are rendered to the screen are done by using something called a frame buffer.  The frame buffer is the GPU (Graphics Processing Unit), it is a piece of hardware (a Graphics Card).  This card deals with simple triangles which are composed of three vertices and three vectors. A vertex is a point on which two vectors meet, while a vector is simply a line.
        
        <span class = "nl">The GPU will store various coordinates for our vectors, and then shade the areas in those objects with different colors. Once all of the calculations are completed these instructions are uploaded on to the monitor and new image can begin construction in the GPU.</span>
        
        <span class = "nl">The way in which the graphics are transferred from our GPU to the monitor is something called a 'blit'. Short for bit-block memory, basically a block of memory for each frame.</span>
        
        <span class = "nl">Let's look at an example of rendering a Bitmap to our window.</span> </p>
            
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    #include "allegro.h"
    
    int main(void)
    {
        <span class = "comments">// Store our filename</span>
        char *filename = "allegro.pcx";
        <span class = "comments">// Create a pointer to a 'BITMAP' type</span>
        BITMAP *image;
        <span class = "comments">// Create an int for validation of our window</span>
        int ret;
        
        allegro_init();
        install_keyboard();
        
        <span class = "comments">// Set the color scheme</span>
        set_color_depth(16);
        <span class = "comments">// Create our window resolution set to 640 x 480</span>
        ret = set_gfx_mode(GFX_AUTODETECT_WINDOWED, 640, 480, 0, 0);
        if(ret != 0) {
            allegro_message(allegro_error);
            return 1;
        }
        
        <span class = "comments">// Assign our .pcx file to our BITMAP pointer</span>
        image = load_bitmap(filename, NULL);
        <span class = "comments">// Error handling</span>
        if(!image) {
            allegro_message("Error loading %s", filename);
            return 1;
        }
        
        <span class = "comments">// Append the image to our window, at these coordinates</span>
        blit(image, screen, 0, 0, 0, 0, SCREEN_W, SCREEN_H);
        
        <span class = "comments">// We can remove the bitmap from memory now that it is loaded</span>
        destroy_bitmap(image);
        
        <span class = "comments">// Display the resolution</span>
        textprintf_ex(screen, font, 0, 0, 1, -1, "%dx%d", SCREEN_W, SCREEN_H);
        
        <span class = "comments">// Keep open until a key is pressed</span>
        while(!keypressed());
        
        allegro_exit();
        return 0;
    }
    
    END_OF_MAIN()</pre>
        
        <p>It's important that when we use an image file, it be in the '.pcx' format, otherwise it will not load properly.
            
        <span class = "nl">Take a moment to notice these variable names 'SCREEN_W' and 'SCREEN_H' they will hold the values for the screen width and screen height respectively.</span>
            
        <span class ="nl">We can use the 'load_bitmap()' function to pass our filename into our 'BITMAP' object. It actually holds two arguments, the second one will replace the first if isn't valid.</span>
        
        <span class = "nl">Passing the 'blit()' function simply appends our 'BITMAP' pointer to our 'Window', it also has several arguments that will allow you to adjust the position of the image on the window.</span>
        
        <span class = "nl">Let's look at another example where we render simply graphic primitives, just pixels.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    #include "allegro.h"
    
    int main(void)
    {
        <span class = "comments">// Declare our x, y coordinates</span>
        int x, y;
        <span class = "comments">// Declare our color variables</span>
        int red, green, blue, color;
        
        allegro_init();
        
        install_keyboard();
        
        <span class = "comments">// Create a randomly generated number based on time</span>
        srand(time(NULL));
        
        int ret = set_gfx_mode(GFX_AUTODETECT_WINDOWED, 640, 480, 0, 0);
        if(ret != 0) {
            allegro_message(allegro_error);
            return 1;
        }
         
        textprintf_ex(screen, font, 0, 0, 15, -1, "Pixel Program - 
        %dx%d - Press ESC to quit", SCREEN_W, SCREEN_H);
        
        <span class = "comments">// A while loop to repeat the functions we will pass</span>
        while(!key[KEY_ESC])
        {
            <span class = "comments">// Assign 'x' to the remainder of 10 divided by screen width - 20</span>
            x = 10 + rand() % (SCREEN_W - 20);
            <span class = "comments">// Assign 'y' to the remainder of 10 divided by screen height - 20</span>
            y = 10 + rand() % (SCREEN_H - 20);
            
            <span class = "comments">// Assign the colors to a randomn number between 0 - 255</span>
            red = rand() % 255;
            green = rand() % 255;
            blue = rand() % 255;
            color = makecol(red,green,blue);
            
            <span class = "comments">// Pass these values into our putpixel() function</span>
            putpixel(screen, x, y, color);
        }
        
        allegro_exit();
        return 0;
    }
    END_OF_MAIN()</pre>
        
        <p>In this program we draw a random pixel with a randomly generated color in various locations on the screen.  The while loop ensures that the pixels will keep getting drawn until the screen fills up.
        
        <span class = "nl">The 'putpixel()' function handles the algorithm for rendering the pixels to the screen, we are just passing x, y, and color coordinates to tell it where to place those pixels.</span>
        
        <span class = "nl">There is also a 'hline()' function for horizontal lines and a 'vline()' function for horizontal lines.</span>
        
        <span class = "nl">To see the hline and vline functions simply create two more variables one to hold another x coordinate and one to hold another y coordinate.  You could name these x2 and y2, be sure to add them in the function calls, like so.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class = "code">
    <span class = "comments">// horizontal line function call</span>
    hline(screen, x, y, x1, color);
    
    <span class = "comments">// vertical line function call</span>
    vline(screen, x, y, y2, color);</pre>
        
        <p>These calls would be in place of the putpixel function inside our while loop.
        
        <span class = "nl">Let's take a look at one more program, we can use the functions we just learned in respect to drawing lines to print the word hello, to our window.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    #include "allegro.h"

    int main(void) {

        allegro_init();
        install_keyboard();
    
        int ret;
    
        ret = set_gfx_mode(GFX_AUTODETECT_WINDOWED, 640, 480, 0, 0);
    
        if(ret != 0)
        {
            allegro_message(allegro_error);
            return 1;
        }
    
        <span class = "comments">// Print the H</span>
        vline(screen, 50, 100, 150, 5);
        hline(screen, 50, 125, 75, 5);
        vline(screen, 75, 100, 150, 5);
    
        <span class = "comments">// Print the E</span>
        vline(screen, 100, 100, 150, 5);
        hline(screen, 100, 100, 125, 5);
        hline(screen, 100, 125, 125, 5);
        hline(screen, 100, 150, 125, 5);
    
        <span class = "comments">// Print the L</span>
        vline(screen, 150, 100, 150, 5);
        hline(screen, 150, 150, 175, 5);

        <span class = "comments">// Print the L</span>
        vline(screen, 200, 100, 150, 5);
        hline(screen, 200, 150, 225, 5);
    
        <span class = "comments">// Print the O</span>
        circle(screen, 270, 125, 25, 5);
    
        while(!keypressed());
    
        allegro_exit();
    
        return 0;
    }
    END_OF_MAIN()</pre>
    
     <hr />        
        <br />
        <a href = "Allegro.html">Previous Page</a>
        <span class = "next"><a href="Allegro2.html">Next Page</a></span>
        <br /><br />

    </div>
    
       
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>

</html>    