<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Events - SDL Game Programming</title>
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

        <h1>Events - SDL Game Programming</h1>
        
        <h2>Working with Events</h2>
        
            <p>In our section we are going to be working with events and understanding how to possibly add either/both keyboard or/and mouse events in order to give our players a chance to interact with the game. The first program will just generate an image based on either the right or left mouse click button being pressed once and released.
        
        <span class = "nl">You will shortly understand that the way the computer inputs from mouse and keyboard is a very exact science, and as such we must specify the difference between clicking, holding, and releasing certain buttons (mouse or keyboard).  Thankfully for us we are using an API (SDL) which is simple and easy to understand in order to achieve our desired means.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class = "code">
    #include &lt;SDL2/SDL.h>
    #include &lt;stdio.h>
    #include &lt;iostream>
    
    int Cross1X = -100;
    int Cross1Y = -100;
    int Cross2X = -100;
    int Cross2Y = -100;
    
    SDL_Surface* Cross1 = NULL;
    SDL_Surface* Cross2 = NULL;
    SDL_Surface* Background = NULL;
    SDL_Surface* Backbuffer = NULL;
    
    SDL_Window* Window = NULL;
    
    bool LoadFiles();
    void FreeFiles();
    
    SDL_Surface* LoadImage(const char* fileName);
    void DrawImage(SDL_Surface* image, SDL_Surface* destSurface, int x, int y);
    bool ProgramIsRunning();
    
    int main(int argc, char* args[])
    {
<span class="comments">// Initialization<span class="next">====================================</span> </span>
        if(SDL_Init(SDL_INIT_EVERYTHING) &lt; 0)
        {
            std::cout &lt;&lt; "Error" &lt;&lt; std::endl;
            SDL_Quit();
            return 0;
        }
        
        Window = SDL_CreateWindow("Click me", SDL_WINDOWPOS_UNDEFINED,
                                        SDL_WINDOWPOS_UNDEFINED,
                                        800, 600, SDL_WINDOW_SHOWN);
        
        Backbuffer = SDL_GetWindowSurface(Window);
        
        if(!LoadFiles())
        {
            std::cout &lt;&lt; "Error" &lt;&lt; std::endl;
            SDL_DestroyWindow(Window);
            FreeFiles();
            SDL_Quit();
            return 0;
        }
        
<span class="comments">// Player Inputs<span class="next">====================================</span> </span>
        while(ProgramIsRunning())
        {
            SDL_FillRect(Backbuffer, NULL, 0);
            
            DrawImage(Background, Backbuffer, 0, 0);
            DrawImage(Cross1, Backbuffer, Cross1X - 50, Cross1Y - 50);
            DrawImage(Cross2, Backbuffer, Cross2X - 50, Cross2Y - 50);
            
            SDL_Delay(20);
            
            SDL_UpdateWindowSurface(Window);
        }
        
        FreeFiles();
        SDL_DestroyWindow(Window);
        SDL_Quit();
        
        return 1;
    }
    
<span class="comments">// Process Image files<span class="next">====================================</span> </span>
    SDL_Surface* LoadImage(const char* fileName)
    {
        SDL_Surface* imageLoaded = NULL;
        SDL_Surface* processedImage = NULL;
        
        imageLoaded = SDL_LoadBMP(fileName);
        
        if(imageLoaded != NULL)
        {
            processedImage = SDL_ConvertSurface(imageLoaded, Backbuffer->format, 0);
            
            if(processedImage != NULL)
            {
                Uint32 colorKey = SDL_MapRGB(processedImage->format, 0xFF, 0, 0xFF);
                
                SDL_SetColorKey(processedImage, SDL_TRUE, colorKey);
            }
        }
        
        return processedImage;
    }
    
<span class="comments">// Format Images on to surfaces<span class="next">===============================</span> </span>
    void DrawImage(SDL_Surface* image, SDL_Surface* destSurface, int x, int y)
    {
        SDL_Rect destRect;
        destRect.x = x;
        destRect.y = y;
        
        SDL_BlitSurface( image, NULL, destSurface, &amp;destRect);
    }
    
<span class="comments">// Event Handling<span class="next">====================================</span> </span>
    bool ProgramIsRunning()
    {
        SDL_Event event;
        
        bool running = true;
        
        while(SDL_PollEvent(&amp;event))
        {
            if(event.type == SDL_QUIT)
                running = false;
            
            if(event.type == SDL_MOUSEBUTTONDOWN)
            {
                if(event.button.button == SDL_BUTTON_LEFT)
                {
                    Cross1X = event.button.x;
                    Cross1Y = event.button.y;
                }
                
                if(event.button.button == SDL_BUTTON_RIGHT)
                {
                    Cross2X = event.button.x;
                    Cross2Y = event.button.y;
                }
            }
            
            if(event.type == SDL_MOUSEMOTION)
            {
                int mouseX = event.motion.x;
                int mouseY = event.motion.y;
                
                char buffer[64];
                sprintf(buffer, "Mouse X: %d, Mouse Y: %d", mouseX, mouseY);
                
                SDL_SetWindowTitle(Window, buffer);
            }
        }
        
        return running;
    }
    
<span class="comments">// Location for images<span class="next">====================================</span> </span>
    bool LoadFiles()
    {
        Cross1 = LoadImage("graphics/cross_1.bmp");
        
        if(Cross1 == NULL)
            return false;
            
        Cross2 = LoadImage("graphics/cross_2.bmp");    
        
        if(Cross2 == NULL)
            return false;
            
        Background = LoadImage("graphics/background.bmp");
            
        if(Background == NULL)
            return false;
            
        return true;
    }
    
<span class="comments">// Free up memory<span class="next">====================================</span> </span>
    void FreeFiles()
    {
        if(Cross1 != NULL)
        {
            SDL_FreeSurface(Cross1);
            Cross1 = NULL;
        }
        
        if(Cross2 != NULL)
        {
            SDL_FreeSurface(Cross2);
            Cross2 = NULL;
        }
        
        if(Background != NULL)
        {
            SDL_FreeSurface(Background);
            Background = NULL;
        }
    }</pre>
        
        <p>Alright, so let's try to understand this code.  It looks at a lot simpler than our prior applications. After initialization we move on to our main loop 'while(ProgramIsRunning)'.  
        
        <span class = "nl">Here we simply create a surface for our backbuffer with SDL_FillRect and then we draw our background and cross images on to it. Then we delay the buffer for 20 seconds before updating it for any changes made to our background or images.</span>
            
        <span class="nl">We have our usual code for handling the image processing, which converts our BMP files into a graphics format which SDL can intrepret.</span>
            
        <span class="nl">In order to actually draw our images on to different locations on the screen we need to be able to communicate with our hardware in order to specify the x and y coordinates of our window.  SDL does this by storing them into a struct called SDL_Rect, then we can tell where on the surface to place our images based on the x and y coordinates.</span>
            
        <span class="nl">Now we can move on to the our event loop. We pass five events into this one loop: SDL_QUIT, &emsp;SDL_MOUSEBUTTONDOWN, &emsp;SDL_BUTTON_LEFT, &emsp;SDL_BUTTON_RIGHT and &emsp;SDL_MOUSEMOTION.</span>
            
        <span class="nl">You already know how SDL_QUIT works, we click on the red 'x' in our window and the program exits. The next event SDL_MOUSEBUTTONDOWN has two events within in, MOUSE_BUTTON_RIGHT and MOUSE_BUTTON_LEFT.</span>
            
        <span class="nl">This means in order to pass either of those events we have to first check that our mouse button is pressed.  If the left button is pressed we can draw the first image based on the x and y coordinates of our mouse.  The same will apply to the right button being pressed only this time we will draw a different image.</span>
            
        <span class="nl">The last event just displays the location of our cursor based on our x and y coordinates.  It will be displayed on the title using the function SDL_SetWindowTitle.</span>
            
        <span class="nl">The last few functions are already familiar to us so I won't go into explaining them.</span>
              </p>
        
        <hr />        
        <br />
        <a href = "SDL10.html">Previous</a>
        <span class = "next">
            <a href = "SDL12.html">Next Page</a></span>
        <br /><br />

    </div>
    
       
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>


</body>

</html>    