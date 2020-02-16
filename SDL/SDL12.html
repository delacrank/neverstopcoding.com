<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Events Part 2 - SDL Game Programming</title>
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

        <h1>Events Part 2 - SDL Game Programming</h1>
        
        <h2>Working with Events</h2>
        
            <p>In this next sample code we are going to be using keyboard events to move an image around the screen using the up, down, right and left arrow keys.  
                
            <span class="nl">In this situation our SDL keyboard events are stored in a struct called SDLK for simple director media layer keyboard. The way we are going to brake up our keyboard events, because there are so many of them is with a switch statement.  This will enable us to label an event and action for each key, and seperate those instructions using case for each key pressed.</span>  
                
            <span class="nl">Let's dive into some code and then try to understand it.</span></p>
                
                
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    #include &lt;SDL2/SDL.h>
    #include &lt;iostream>

    SDL_Surface* Background = NULL;
    SDL_Surface* SpriteImage = NULL;
    SDL_Surface* Backbuffer = NULL;

    SDL_Window* Window = NULL;

    int SpriteX = 350;
    int SpriteY = 250;

    bool LoadFiles();
    void FreeFiles();

    SDL_Surface* LoadImage( char* fileName);
    void DrawImage(SDL_Surface* image, SDL_Surface* destSurface, int x,     int y);
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
    
        Window = SDL_CreateWindow("Use the arrow keys to move the sprite
        around and esc to exit",
                                        SDL_WINDOWPOS_UNDEFINED,
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

<span class="comments">// Main Loop<span class="next">====================================</span> </span>
        while(ProgramIsRunning())
        {
            DrawImage(Background, Backbuffer, 0, 0);
            DrawImage(SpriteImage, Backbuffer, SpriteX, SpriteY);
            SDL_Delay(20);
            SDL_UpdateWindowSurface(Window);
        }
    
        FreeFiles();
        SDL_DestroyWindow(Window);
        SDL_Quit();
        return 1;
    }

<span class="comments">// Image processing<span class="next">====================================</span> </span>
    SDL_Surface* LoadImage( char* fileName)
    {
        SDL_Surface* imageLoaded = NULL;
        SDL_Surface* processedImage = NULL;
    
        imageLoaded = SDL_LoadBMP(fileName);
    
        if(imageLoaded != NULL)
        {
            processedImage = SDL_ConvertSurface(imageLoaded, 
            Backbuffer->format, 0);
            SDL_FreeSurface(imageLoaded);
        
            if(processedImage != NULL)
            {
                Uint32 colorKey = SDL_MapRGB(processedImage->format, 0xFF, 0, 0xFF);
                SDL_SetColorKey(processedImage, SDL_TRUE, colorKey);
            }
        }
        return processedImage;
    }

<span class="comments">// X and Y coordination<span class="next">====================================</span> </span>
    void DrawImage(SDL_Surface* image, SDL_Surface* destSurface,
    int x, int y)
    {
        SDL_Rect destRect;
        destRect.x = x;
        destRect.y = y;
    
        SDL_BlitSurface( image, NULL, destSurface, &amp;destRect);
        }

<span class="comments">// Event handling<span class="next">====================================</span> </span>
    bool ProgramIsRunning()
    {
        SDL_Event event;
    
        bool running = true;
    
        while(SDL_PollEvent(&amp;event))
        {
            if(event.type == SDL_QUIT)
                running = false;
        
            if(event.type == SDL_KEYDOWN)
            {
                switch(event.key.keysym.sym)
                {
                    case SDLK_ESCAPE:
                        running = false;
                        break;
                
                    case SDLK_LEFT:
                        SpriteX-=50;
                        break;
                    
                    case SDLK_RIGHT:
                        SpriteX+=50;
                        break;
                    
                    case SDLK_UP:
                        SpriteY-=50;
                        break;
                    
                    case SDLK_DOWN:
                        SpriteY+=50;
                        break;
                    
                    default:
                        break;
                }
            }
        }
    
        return running;
    }

<span class="comments">// File Loading<span class="next">====================================</span> </span>
    bool LoadFiles()
    {
        SpriteImage = LoadImage("graphics/spaceship.bmp");
    
        if(SpriteImage == NULL)
            return false;
    
        Background = LoadImage("graphics/background3.bmp");
    
        if(Background == NULL)
            return false;
    
        return true;
    }

    void FreeFiles()
    {
        if(SpriteImage != NULL)
        {
            SDL_FreeSurface(SpriteImage);
            SpriteImage = NULL;
        }
    
        if(Background != NULL)
        {
            SDL_FreeSurface(Background);
            Background = NULL;
        }
    }</pre>
        
    <p>For this program we are going to be using a sprite instead of two cross images so we should define the positioning for the coordinates of that sprite using global variable.  As well as a Surface to place our sprite on.
        
    <span class = "nl">After we initialize the program we have to draw our sprite and background to our window.  We accomplish this process using the DrawImage functions.  We stored the coordinates for our sprite's position into variables so that we can manipulate its position using our keyboard events.</span>
        
    <span class = "nl">If we skip down to the event handling section, you will notice the same 'while(SDL_PollEvent(&amp;event))' function which checks for events happening.  Then we will start off our keyboard events by checking to see if a key has been pressed.</span>
        
    <span class ="nl">Here we create instructions for our program based on which key is press, of course if we don't specify a key then nothing will happen.  First we use 'event.key.keysym.sym' to read the names for each of our keys.  Since we are only using five keys it will be simple, esc, up, down, left, and right.</span>
        
    <span class="nl">Each key changes the position of our x and y coordinates and the esc key quits the program, by assigning false value to our running variable.</span>
          </p>
        
        <hr />        
        <br />
        <a href = "SDL11.html">Previous</a>
        <span class = "next">
            <a href = "SDL13.html">Next Page</a></span>
        <br /><br />

    </div>
    
       
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>


</body>

</html>    