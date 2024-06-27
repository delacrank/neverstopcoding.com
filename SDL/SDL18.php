<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Game Engine Design - SDL Game Programming</title>
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

        <h1>Game Engine Design - SDL Game Programming</h1>
        
        <h2>Game Engine Design</h2>
        
            <p>The purpose of designing a game engine is to seperate our game into various headers and classes.  We will be able to modulate our programs into smaller seperate source files, by doing this we will have the power to fix bugs that occur in either input, audio or graphics without worrying about how those changes affect the entire program.
        
        <span class = "nl">Let's look at a small example of a graphics class and source file.  The purpose of this header file is just to declare all of the variables and functions we will use later.  We don't need to define or initialize anything right now.</span>
              </p>
        
    <em>Header:</em>
    <!-- code -->
    <pre class="code">
     #ifndef GRAPHICS_H
    #define GRAPHICS_H

    #include &lt;SDL2/SDL.h>
    
    class Graphics
    {
    private:
        SDL_Surface* backbuffer;
        SDL_Window* window;
        
        int width;
        int height;
        
    public:
        bool init(int aWidth, int aHeight, bool aFullscreen);
        void kill();
        void setTitle(const char* title);
        void drawPixel(int x, int y, 
                      int r, int g, int b);
        void drawRect(int x, int y, int width, int height,
                     int r, int g, int b);
        void fillRect(int x, int y, int width, int height,
                     int r, int g, int b);
        void clear(int r, int g, int b);
        void flip();
        int getWidth();
        int getHeight();
        SDL_Surface* getBackbuffer();
    };

    #endif
    </pre>
        
        <p> We can include the definitions for our public functions in another source file.
        
        <span class = "nl">Seperating our class into two files like this makes it easier to modify and change later.  Let's take a look at some of function declarations below, make sure to include the directory for our graphics.h file if it's not in the same folder.</span>
              </p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    #include "Graphics.h"
    #include &lt;iostream>
    
<span class="comments">// Initialize SDL set Window Size<span class = "next">======================</span></span>
    bool Graphics::init(int aWidth, int aHeight, bool aFullscreen)
    {
        width = aWidth;
        height = aHeight;
        
        if(aFullscreen)
        {
            window = SDL_CreateWindow("Window", SDL_WINDOWPOS_UNDEFINED,
                                     SDL_WINDOWPOS_UNDEFINED,
                                     aWidth, aHeight,
                                     SDL_WINDOW_FULLSCREEN);
        }
        else
        {
            window = SDL_CreateWindow("Window", SDL_WINDOWPOS_UNDEFINED,
                                      SDL_WINDOWPOS_UNDEFINED,
                                      aWidth, aHeight,
                                      SDL_WINDOW_SHOWN);
        }
        
        if(window == NULL)
        {
            std::cout &lt;&lt; "Error, SDL failed to initialize graphics" &lt;&lt; std::endl;
            return false;
        }
        
        backbuffer = SDL_GetWindowSurface(window);
        
        return true;
    }

<span class="comments">// Destroy Window<span class = "next">======================</span></span>
    void Graphics::kill()
    {
        SDL_DestroyWindow(window);
    }

<span class="comments">// Set Title for window<span class = "next">======================</span></span>
    void Graphics::setTitle(const char* title)
    {
        SDL_SetWindowTitle(window, title);
    }

<span class="comments">// Render pixel at set location<span class = "next">======================</span></span>
    void Graphics::drawPixel(int x, int y, int r, int g, int b)
    {
        if(backbuffer == NULL)
            return;
        
        if(SDL_MUSTLOCK(backbuffer))
        {
            if(SDL_LockSurface(backbuffer) &lt; 0)
                return;
        }
        
        if(x >= backbuffer->w || x &lt; 0 || y >= backbuffer->h || y &lt; 0)
            return;
        
        Uint32 *buffer;
        Uint32 color;
        
        color = SDL_MapRGB( backbuffer->format, r, g, b);
        
        buffer = (Uint32*)backbuffer->pixels + y*backbuffer->pitch/4 + x;
        *buffer = color;
        
        if(SDL_MUSTLOCK(backbuffer))
            SDL_UnlockSurface(backbuffer);
    }

<span class="comments">// Create rectangle shape at set location<span class = "next">======================</span></span>
    void Graphics::drawRect(int x, int y, int width, int height,
                           int r, int g, int b)
    {
        fillRect(x, y, width, 1, r, g, b);
        fillRect(x, y+height, width, 1, r, g, b);
        fillRect(x, y, 1, height, r, g, b);
        fillRect(x+width-1, y, 1, height, r, g, b);
    }

<span class="comments">// Create a filled rectangle at set location<span class = "next">======================</span></span>
    void Graphics::fillRect(int x, int y, int width, int height,
                           int r, int g, int b)
    {
        if(backbuffer == NULL)
            return;
        
        Uint32 color;
        
        color = SDL_MapRGB(backbuffer->format, r, g, b);
        
        SDL_Rect rect;
        rect.x = x;
        rect.y = y;
        rect.w = width;
        rect.h = height;
        
        SDL_FillRect(backbuffer, &amp;rect, color);
    }

<span class="comments">// Change the background color<span class = "next">======================</span></span>
    void Graphics::clear(int r, int g, int b)
    {
        if(backbuffer == NULL)
            return;
        
        Uint32 color;
        
        color = SDL_MapRGB(backbuffer->format, r, g, b);
        
        SDL_FillRect(backbuffer, NULL, color);
    }

<span class="comments">// Return width value<span class = "next">======================</span></span>
    int Graphics::getWidth()
    {
        return width;
    }

<span class="comments">// Return height value<span class = "next">======================</span></span>
    int Graphics::getHeight()
    {
        return height;
    }

<span class="comments">// Return backbuffer surface<span class = "next">======================</span></span>
    SDL_Surface* Graphics::getBackbuffer()
    {
        return backbuffer;
    }

<span class="comments">// Update surface for current window<span class = "next">======================</span></span>
    void Graphics::flip()
    {
        SDL_UpdateWindowSurface(window);
    }</pre>
        
        <p>Here we defined every function we declared in a header file, just be sure to either include this file in our 'main.cpp' file or add this file to the command line when compiling, otherwise you will have linker errors.
            
        <span class="nl">I just breifly described what each function does in the comments, we have used all these functions before, so it shouldn't be too hard to understand.</span>
        
        <span class = "nl">We can finish this by writing our 'main.cpp' file and initializing our graphics object</span>
              </p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    #include &lt;cstdlib>
    #include "Graphics.h"

<span class="comments">// Define global variables for window objects<span class = "next">======================</span></span>
    const int FPS = 30;
    const int FRAME_TIME = 1000/FPS;
    const int SCREEN_WIDTH = 800;
    const int SCREEN_HEIGHT = 600;
    const int FULLSCREEN = false;

<span class="comments">// Declare our graphics class into object graphics<span class = "next">======================</span></span>
    Graphics graphics;

<span class="comments">// Declare some global functions<span class = "next">======================</span></span>
    bool InitProgram();
    void FreeProgram();
    bool ProgramRunning();

    int main(int argc, char *argv[])
    {
<span class="comments">// If program fails to initialize destroy objects and end program<span class = "next">========</span></span>
        if(!InitProgram())
        {
            FreeProgram();
            return false;
        }
        
        int counter = 0;
        
        while(ProgramRunning())
        {
<span class="comments">// Set the rate for rebuffering window surface<span class = "next">======================</span></span>
            int frameStart = SDL_GetTicks();
            
            counter++;
            
            if(counter > 90)
            {
                counter = 0;
<span class="comments">// Draw a new color to backbuffer 90 times<span class = "next">======================</span></span>
                graphics.clear(rand()%255, rand()%255, rand()%255);
            }
            
            for(int i = 0; i &lt; 100; i++)
<span class="comments">// Draw a 100 random pixels <span class = "next">======================</span></span>
                graphics.drawPixel(rand()%SCREEN_WIDTH, rand()%SCREEN_HEIGHT, 
                rand()%255, rand()%255, rand()%255);
            
<span class="comments">// Draw one random rectangle<span class = "next">======================</span></span>
                graphics.drawRect(rand()%SCREEN_WIDTH, rand()%SCREEN_HEIGHT,
                rand()%100, rand()%100, rand()%255, rand()%255, rand()%255);
                    
<span class="comments">// Draw one filled random rectangle<span class = "next">======================</span></span>
        graphics.fillRect(rand()%SCREEN_WIDTH, rand()%SCREEN_HEIGHT,
        rand()%100, rand()%100, rand()%255, rand()%255, rand()%255);
            
<span class="comments">// Render these images to our window surface<span class = "next">======================</span></span>
            graphics.flip();
            
            int frameTime = SDL_GetTicks()-frameStart;
            int delay = FRAME_TIME - frameTime;
            
            if(delay > 0)
                SDL_Delay(delay);
        }
        
<span class="comments">// Destroy objects<span class = "next">======================</span></span>
        FreeProgram();
        
        return 0;
    }

<span class="comments">// Initializes SDL and creates the window<span class = "next">======================</span></span>
    bool InitProgram()
    {
        if(SDL_Init( SDL_INIT_EVERYTHING) == -1)
            return false;
        
        if(!graphics.init( SCREEN_WIDTH, SCREEN_HEIGHT, FULLSCREEN))
            return false;
        
        graphics.setTitle("Graphics Test");
        
        return true;
    }
    
<span class="comments">// Garbage collection<span class = "next">======================</span></span>
    void FreeProgram()
    {
        graphics.kill();
        SDL_Quit();
    }

<span class="comments">// Event Handling<span class = "next">======================</span></span>
    bool ProgramRunning()
    {
        SDL_Event event;
        
        while(SDL_PollEvent(&amp;event))
        {
            if(event.type == SDL_QUIT)
                return false;
            
            if(event.type == SDL_KEYDOWN)
            {
                if(event.key.keysym.sym == SDLK_ESCAPE)
                   return false;
            }
        }
        
        return true;
    }</pre>
        
        <p>If we want to compile this program just make sure you include all the necessary files and the directories in the includes preprocessor if they aren't in the same folder.</p>
        
    <em>Command Line:</em>
    <!-- cmd line -->
    <pre class="code">
    g++ main.cpp graphics.cpp -framework SDL2 -o test</pre>

        
        <hr />        
        <br />
        <a href = "SDL17.html">Previous</a>
        <span class = "next">
            <a href = "SDL19.html">Next Page</a></span>
        <br /><br />

    </div>
    
       
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>


</body>

</html>    