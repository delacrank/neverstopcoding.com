<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />  
        <title>Creating Shapes - SDL Game Programming</title>
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
<?php include('..//Includes//Left_SDL.php'); ?>

<!-- Right -->
    
    <div id ="rightz">

    <h1>Creating Shapes - SDL Game Programming</h1>
        
    <h2>Creating Shapes</h2>
        
        <p>In the previous section we were able to draw a pixel on to the screen and determine its color.  For this section we will continue create functions which will allow us to draw shapes to our window. </p>
        
    <hr />
    
    <!-- Drawing an filled rect -->
    <h3>Drawing a Filled Rectangle</h3>
        
        <p>In this section we will focus on drawing a simple rectangle. Let's look at an example of how to Draw a filled rectangle.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    void FillRect(SDL_Surface* surface, int x, int y, int width, int height,
                                    Uint8 r, Uint8 g, Uint8 b)
    {
        Uint32 color;
        color =  SDL_MapRGB(surface->format, r, g, b );
        SDL_Rect rect;
        rect.x = x;
        rect.y = y;
        rect.w = width;
        rect.h = height;
        
        SDL_FillRect(surface, &amp;rect, color);
    } </pre>
        
        
    <p>In the example above, we have a function similar to our DrawPixel() function.  We pass the SDL_surface pointer for our surface, the x and y coordinates to plot the location, the width and height of our shape and finally the color scheme using our last three parameters.
        
        <span class ="nl">Moving on we declare the color as a unsigned 32 byte integer, and set it equal to <b>SDL_MapRGB()</b>.  You will notice we use a funny operator here '->' called the arrow operator. This operator works the same as a dereferance/indirect operator with a dot operater to access a pointer in either a class, structure or union '(*p).x'.</span>
        
        <span class="nl">Next we set an enum (enumeration) 'SDL_rect' to define the variable rect.  This variable will be used to discribe our rectangle in terms of location, width and height.  When we finally pass this these parameters to our function <b>SDL_FillRect()</b> it will determine which surface, its coordinates, the area as well as the color of our rectangle. </span>
        
        <span class="nl">We can now use this function in our while(ProgramIsRunning()) condition.</span>
              </p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
     while(ProgramIsRunning())
        {
<span class="comments">// FillRect(surface, x coordinate, y coordinate, width, height, r, g, b)<span class = "next">========</span></span>
            FillRect(backbuffer, 400, 300, 200, 200, 0, 0, 255);

            SDL_Delay(20);
            SDL_UpdateWindowSurface(Window);        
        }
    </pre>
    
        <hr />
        
    <!-- Drawing an hollow rect -->
    <h3>Drawing an Hollow Rectangle</h3>
        
        <p>We can use the structure of our previous example to draw a hollow rectangle as well if we make some minor adjustments to a new function.  Now we can just pass this function instead of the FillRect function in our 'while(ProgramIsRunning())' condition.
            
            <span class = "nl">The hollow rectangle is just drawing four filled rectangles using just 1 pixel width and height, to make it appear as a single line.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
   void DrawRect(SDL_Surface* surface, int x, int y, int width, int height,
                                    Uint8 r, Uint8 g, Uint8 b)
{
    FillRect(surface, x, y, width, 1, r, g, b);
    FillRect(surface, x, y+height-1, width, 1, r, g, b);
    FillRect(surface, x, y, 1, height, r, g, b);
    FillRect(surface, x+width-1, y, 1, height, r, g, b);
} </pre>
        
        <p>Be sure to define the prototype of the function in the beginning of the program if you wish to use it in your main func.</p>
    
        <hr />        
        <br />
        <a href = "SDL3.html">Previous</a>
        <span class = "next">
            <a href = "SDL5.html">Next Page</a></span>
        <br /><br />
    </div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>    