<!DOCTYPE html>
<html>
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />  
        <title>Graphics - SDL Game Programming</title>
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

    <h1>Graphics - SDL Game Programming</h1>
        
       <h2>Working with Graphics</h2>
        
            <p>In this section we will focus on drawing pixels to the screen using the same coordinate system to map our images in the previous chapter.  The coordinate system is called the Cartesian coordinate system where the top left corner is equal to zero 'x', zero 'y' or (0,0).  The x axis is measures from left to right, because we have a resolution of 600 by 800 the top right corner of our window is (800, 0) and the bottom left corner of our screen is (0, 600). </p>
        
        <hr />
        
        <h3>SDL Lock</h3>
       
            <p>In order to draw pixels to our window using the coordinate system, we must first Lock the surface we wish to draw on.  This can become a problem between knowing which surfaces must be locked and which ones can be left unlocked.
        
        <span class = "nl">One of the ways we can determine the difference between accessing and locking a surface necessary for drawing and ignoring a surface which isn't necessary is by using a function called <b>SDL_MUSTLOCK()</b>.  If this function returns a true value, we can proceed by locking it by calling the <b>SDL_LockSurface()</b> function.</span>
        
        <span class = "nl">After we have checked to see if the surface should be locked, locked it we are safe to modify its contents, however it the surface was previously locked before attempting to modifying the contents then we must unlock it by calling the <b>SDL_UnlockSurface()</b>.</span>
        
        <span class = "nl">Upond successfully unlocking the surface we only require the location and color of the pixels we want to draw.  The color will be in RGB format (red, green, blue).  The combination of these colors at values of 255 each will render white, and the absence of these colors will return black. The higher the color value the stronger the color will appear, so if you mix blue and green with the value of green being more than you will have a greener blue and vice versa.</span>
                
        <span class="nl">Alright, let's look at some code.</span>
              </p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    #include &lt;SDL2/SDL.h>
    
    SDL_Surface* backbuffer = NULL;
    SDL_Window* Window = NULL;
    
    bool ProgramIsRunning();

    void DrawPixel(SDL_Surface *surface,
                                    int x, int y,
                                    Uint8 r, Uint8 g, Uint8 b);
    
    int main (int argc, char* args[])
    {
    
<span class = "comments">// Window Set up <span class="next">====================================</span></span>
        if(SDL_Init(SDL_INIT_EVERYTHING) &lt; 0)
        {
            SDL_ShowSimpleMessageBox(SDL_MESSAGEBOX_INFORMATION,
                                    "SDL", "SDL failed to initialize", NULL);
            SDL_Quit();
            return 0;        
        }
        Window = SDL_CreateWindow("SDL",
                                    SDL_WINDOWPOS_UNDEFINED,
                                    SDL_WINDOWPOS_UNDEFINED,
                                    800, 600, SDL_WINDOW_SHOWN);
                                    
        backbuffer = SDL_GetWindowSurface(Window);
        
<span class = "comments">// Main Game loop <span class="next">====================================</span></span>
        while(ProgramIsRunning())
        {

<span class = "comments">// Draw 100 randomly colored pixels per iteration <span class="next">=====================</span></span>
            for(int i = 0; i &lt; 100; i++)
            {
                DrawPixel(backbuffer,
                                    rand()%800, rand()%600,
                                    rand()%255, rand()%255, rand()%255);
            }
            
<span class="comments">// Update the window every 20 milliseconds second<span class="next">=====================</span></span>
            SDL_Delay(20);
            SDL_UpdateWindowSurface(Window);        
        }
        
        SDL_Quit();
        return 0;
    }
    
<span class = "comments">// Input Handling <span class="next">====================================</span></span>
    bool ProgramIsRunning()
    {
        SDL_Event event;
        bool running = true;
        
        while(SDL_PollEvent(&amp;event))
        {
            if(event.type == SDL_QUIT)
                running = false;
        }
        
        return running;
    }
    
<span class="comments">// Drawing pixels function<span class="next">====================================</span></span>
    void DrawPixel (SDL_Surface *surface, int x, int y, Uint8 r, Uint8 g, Uint8 b)
    {
        <span class="comments">// Check to see if Surface should be locked</span>
        if(SDL_MUSTLOCK(surface))
        {
            if(SDL_LockSurface(surface) &lt; 0)
                    return;
        }
        
        <span class="comments">// Algorithm for pixel drawing location</span>
        if(x >= surface->w || x &lt; 0 || y >= surface->h || y &lt; 0)
                return;
        Uint32 *buffer;
        Uint32 color;
        
        <span class="comments">// Algorithm for pixel coloration</span>
        color = SDL_MapRGB(surface->format, r, g, b);
        
        <span class="comments">// Algorithm for apending pixel to surface</span>
        buffer = (Uint32*)surface->pixels + y*surface->pitch/4+x;
        
        <span class="comments">// Map the pixel color to the location</span>
        (*buffer) = color;
        
        if(SDL_MUSTLOCK(surface))
                SDL_UnlockSurface(surface);
    }</pre>
        
        
        <p>The first thing to note here is the prototype of our DrawPixel() function.  This is going to determine where and what color our pixels will look like.  This function takes six parameters: the first is a pointer variable necessary to access the surface we locked, the x stands for the x axis on our surface as does the y.  Uint is the type of data (unsigned int) for our last three parameters, we use these to refer to the colors: red, green, blue.
        
        <span class="nl">From here we trace through the usual code  to initialize SDL and create our window.  Then when we run our physics for 'while(ProgramIsRunning())' we see our first example of our <b>DrawPixel()</b> function in action.  Since we already passed our surface pointer as the first parameter we can use the backbuffer for our first arguement.  We could just draw a single pixel to the screen, or we could draw a hundred random pixels in random locations.  A single white pixel being draw in the middle of the screen would look like this.</span>    
        </p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    DrawPixel (surfaceName, 400, 300, 255, 255, 255);</pre>
        
        <p>So even though we draw the pixel to the surface, it won't be rendered to the screen until we run our SDL_UpdateWindowSurface() function and tell SDL which window we want to update. For the sake of appearances we set the delay to 20 to show the animation our pixels being rendered to our window.
            
        <span class="nl">We already know what the ProgramIsRunning() function does, passes an event which lets us exit the window. All that is left is this DrawPixel function.  It looks very complicated but I explained most of it before I even displayed the code.  We check the value of surface as an argument in our SDL_MUSTLOCK() fuction, if the value is Null then we run another conditional statement to check if it's locked.</span>
            
        <span class="nl">Those nested if statements are just to check to see if the surface pointer should be locked and then it locks the surface in the next statement.  I wouldn't worry too much about the code below it, its a complicated process which converts our color values into Uint32 data, in order to paint our pixels.</span>
            
        <span class="nl">The last bit of the code just unlocks are surface once the drawing is completed.</span>
        </p>
               <hr />        
        <br />
        <a href = "SDL2.html">Previous</a>
        <span class = "next">
            <a href = "SDL4.html">Next Page</a></span>
        <br /><br />

    </div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>    