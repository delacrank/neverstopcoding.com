<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />   
        <title>Rendering an Image - SDL Game Programming</title>
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

        <h1>Rendering an Image - SDL Game Programming</h1>
        
        <h2>Rendering an Image</h2>
        
            <p>Now that we have been able to successfully create a window using SDL2, let's see if we can render an image to the screen.
        
        <span class = "nl">SDL stores images on to a rectangular grid called a surface, learning how to use these surfaces will be the key to rendering images to our windowed application.</span></p>
            
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    #include &lt;SDL2/SDL.h>

    SDL_Surface* Image = NULL;
    SDL_Surface* Backbuffer = NULL;

    SDL_Window* Window = NULL;

    int main(int argc, char* args[])
    {
    
<span class = "comments">// SDL Initialize <span class="next">====================================</span></span>
        if(SDL_Init(SDL_INIT_EVERYTHING) &lt; 0)
        {
            SDL_ShowSimpleMessageBox(SDL_MESSAGEBOX_INFORMATION,
                        "SDL", "SDL failed to initialize!", NULL);
            SDL_Quit();
            return 0;
        }
        
<span class = "comments">// Create the window <span class="next">====================================</span></span>
        Window = SDL_CreateWindow("SDL!!!",
                                    SDL_WINDOWPOS_UNDEFINED,
                                    SDL_WINDOWPOS_UNDEFINED,
                                    800, 600, SDL_WINDOW_SHOWN);
                                    
<span class = "comments">// Append Surface to window  <span class="next">====================================</span></span>
        Backbuffer = SDL_GetWindowSurface(Window);

<span class = "comments">// Store image in variable <span class="next">====================================</span></span>
        Image = SDL_LoadBMP("directory/fileName.bmp" );

<span class = "comments">// Error handling for Image <span class="next">====================================</span></span>
        if(Image == NULL)
        {
            SDL_ShowSimpleMessageBox(SDL_MESSAGEBOX_INFORMATION,
                                        "SDL", "Image failed to load!", NULL);

            SDL_DestroyWindow(Window);
            SDL_Quit();
            return 0;
        }
        
<span class = "comments">// Append Image to surface <span class="next">====================================</span></span>
        SDL_BlitSurface(Image, NULL, Backbuffer, NULL );

        SDL_UpdateWindowSurface(Window);

        SDL_Delay(3000);

<span class = "comments">// Garbage Collection <span class="next">====================================</span></span>
        SDL_DestroyWindow(Window);
        SDL_FreeSurface(Image);
        SDL_Quit();

        return 1;
}</pre>    
        
    <p>Alright, let's set into this next program which renders an image to our screen.  The first thing you will notice is that we initialize two more pointer variables in addition to our window variable.  The purpose of these additional pointers is to not only store our image but also to create a buffer for our image to be rendered to.
        
        <span class ="nl">The first pointer is called a surface (SDL_Surface* Image), we will use this pointer to store our image.  The next surface pointer is a backbuffer (SDL_Surface* BackBuffer), the backbuffer acts as a background for our image.</span>
        
        <span class = "nl">Our program progresses as normal starting our main function, checking to see if our Initialize function is nulll, defining our Window variable, until we see our new variable in play (backbuffer).  The way the backbuffer surface works in SDL 2 is by setting it equal to the window.  The way we do this is by calling the  <b>SDL_GetWindowSurface()</b> function and passing the window variable in as an argument.</span>
        
        <span class = "nl">Now that we have set our backbuffer surface equal to our window we need to be able to draw to it.  First we have to store our image file, so let's call <b>SDL_LoadBMP()</b> function in order to let SDL know where the file is located.  Let's run some error checking to ensure that an image was returned, if it wasn't we can let the user know it failed to load and close the window.</span>
        
        <span class="nl"> If the image was stored successfully then let's draw it to the backbuffer using <b>SDL_BlitSurface()</b> function, passing our image and backbuffer as arguments. Following that we can now update our window with our image using the <b>SDL_UpdateWindowSurface()</b> function.  In SDL 1.2 this was called flipping the backbuffer.</span>
              </p>
        
        <hr />        
        <br />
        <a href = "SDL.html">Previous</a>
        <span class = "next">
            <a href = "SDL2.html">Next Page</a></span>
        <br /><br />

    </div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>    