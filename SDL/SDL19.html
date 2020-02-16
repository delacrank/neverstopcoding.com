<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Image Class - SDL Game Programming</title>
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

        <h1>Image Class - SDL Game Programming</h1>
        
        <h2>Image Class</h2>
        
            <p>The next class we will be working with will ensure that images are displayed properly.  We can use this class to load all of our images and convert them to a graphics format making it faster to load onto SDL surfaces.</p>
    
    <em>Header:</em>
    <!-- code -->
    <pre class="code">
    #ifndef Image_h
    #define Image_h

    #include "Graphics.h"
    #include &lt;SDL2/SDL_image.h>
    #include &lt;stdio.h>

    class Image
    {
    private:
        SDL_Surface* surface;
        int width;
        int height;
        int frameWidth;
        int frameHeight;
    public:
        Image();
        ~Image();
        bool load( const char fileName[], Graphics* g);
        bool load( const char fileName[], int aFrameWidth, int aFrameHeight,
             Graphics* g);
        void draw(int x, int y, Graphics* g);
        void draw(int x, int y, int frame, Graphics* g);
        void free();
    
        int getWidth();
        int getHeight();
        int getFrameWidth();
        int getFrameHeight();
        void setFrameSize(int w, int h);
        bool isLoaded();
    };

    #endif</pre>
        
        <p>Here we can declare the variables we will use for our class.  We need a surface pointer to place the images on, width to describe how wide the surface needs to be, height for the same purpose, frameWidth if we want to break an image into several frames, frameHeight for the same reason.
        
        <span class = "nl">In our public function we have our constructor which is used to initialize all of our private variables, load function to check if the .bmp files have loaded, overloaded load function to include frames, draw function to draw our images on to an SDL surface, overloaded draw function for our frames, free function to destroy objects we are done using.</span>
            
        <span class="nl">The rest of the functions just return the values of our private variables. Let's take a look at the function definitions now.</span>
              </p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    #include "Image.h"

<span class="comments">// Image Constructor<span class = "next">============</span></span>
    Image::Image()
    {
        surface = NULL;
        width = 0;
        height = 0;
        frameWidth = 0;
        frameHeight = 0;
    }

<span class="comments">// Image Destructor<span class = "next">============</span></span>
    Image::~Image()
    {
    
    }

<span class="comments">// Store bitmap filename in array <span class = "next">=====</span></span>
<span class="comments">// Graphics* g pointer retrieves backbuffer from graphics class<span class = "next">=====</span></span>
    bool Image::load( const char fileName[], Graphics* g)
    {
        SDL_Surface* imageLoaded = NULL;
        imageLoaded = IMG_Load(fileName);
    
        if(imageLoaded != NULL)
        {
            surface = SDL_ConvertSurface(imageLoaded, 
                                     g->getBackbuffer()->format, 0);
            SDL_FreeSurface(imageLoaded);
        
            if(surface != NULL)
            {
                Uint32 colorKey = SDL_MapRGB( surface->format, 0xFF, 0, 0xFF);
            
                SDL_SetColorKey(surface, SDL_TRUE, colorKey);
                width = surface->w;
                height = surface->h;
            }
            else
            {
                printf("Failed to load image: ");
                printf(fileName);
                printf("\n");
                return false;
            }
        }
        else
        {
            printf("Failed to load image: ");
            printf(fileName);
            printf("\n");
            return false;
        }
    
        return true;
    }

<span class="comments">// Set Frame Height and Width for animated bitmaps<span class = "next">============</span></span>
    bool Image::load( const char fileName[], int aFrameWidth,
                     int aFrameHeight, Graphics* g)
    {
        if(load(fileName, g))
        {
            frameWidth = aFrameWidth;
            frameHeight = aFrameHeight;
        
            return true;
        }
    
        return false;
    }

<span class="comments">// Draw Surface to backbuffer<span class = "next">============</span></span>
    void Image::draw(int x, int y, Graphics* g)
    {
        if(surface == NULL)
            return;
        
        SDL_Rect destRect;
        destRect.x = x;
        destRect.y = y;
        
        SDL_BlitSurface(surface, NULL, g->getBackbuffer(), &amp;destRect);
    }

<span class="comments">// Render frame of surface to backbuffer<span class = "next">============</span></span>
    void Image::draw(int x, int y, int frame, Graphics* g)
    {
        SDL_Rect destRect;
        destRect.x = x;
        destRect.y = y;
    
        int columns = width/frameWidth;
    
        SDL_Rect sourceRect;
        sourceRect.y = (frame/columns)*frameHeight;
        sourceRect.x = (frame%columns)*frameWidth;
        sourceRect.w = frameWidth;
        sourceRect.h = frameHeight;
    
        SDL_BlitSurface(surface, &amp;sourceRect, g->getBackbuffer(),
                   &amp;destRect);
    }

<span class="comments">// Free surface objects<span class = "next">============</span></span>
    void Image::free()
    {
        if(surface != NULL)
        {
            SDL_FreeSurface(surface);
            surface = NULL;
        }
    }

<span class="comments">// Get private variables<span class = "next">============</span></span>
    int Image::getWidth()
    {
        return width;
    }

    int Image::getHeight()
    {
        return width;
    }

    int Image::getFrameHeight()
    {
        return frameHeight;
    }

    void Image::setFrameSize(int w, int h)
    {
        frameWidth = w;
        frameHeight = h;
    }

    bool Image::isLoaded()
    {
        return (surface != NULL);
    }</pre>
        
        <p>We start by initializing are private values to zero or null in our constructor, left the destructor blank. The load function will store a bitmap filename in a const char array and be converted to our backbuffer via our graphics class.
        
        <span class = "nl">We can obtain the width and height of the bitmap image by using our surface w and h variables.</span>
            
        <span class="nl">For an image which will be broken into mulltiple frames we want to just call the load function we recently defined and pass the filename and the backbuffer as parameters for that function.  Then we can take the width and height of the frame we want to use.</span>
            
        <span class="nl">The draw function will combine our surface to the backbuffer using the SDL_BlitSurface() function. We can animate images by using the same params and adding an additional one (frame) to our surface. The frames will be swapped out at a rate of 30 frames for every second, that is the minium amount of frames needed to make animation smooth for the human eye.</span>
            
        <span class="nl">The last two functions which don't return a private variable from our image class set the framesize and check if the image was loaded.</span>
            
        <span class="nl">Let's try calling some of these functions.</span>
              </p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class = "code">
    #include "Graphics.h"
    #include "Image.h"

<span class="comments">// Declare global variables<Span class= "next">=======================</Span></span>
    const int FPS = 30;
    const int FRAME_TIME = 1000/FPS;
    const int SCREEN_WIDTH = 800;
    const int SCREEN_HEIGHT = 600;
    const int FULLSCREEN = false;

    const int MAX_FRAME_DELAY = 2;
    const int MAX_FRAME = 11;

<span class="comments">// Declare class objects<Span class= "next">=======================</Span></span>
    Graphics graphics;
    Image sprite;
    Image background;

    int imageFrame = 0;
    int frameDelay = 0;

<span class="comments">// Declare global functions<Span class= "next">=======================</Span></span>
    bool InitProgram();
    void FreeProgram();
    bool ProgramRunning();

    int main(int argc, char *argv[])
    {
        if(!InitProgram())
        {
            FreeProgram();
            return 0;
        }
        
        while(ProgramRunning())
        {
<span class="comments">// Set a timer on SDL for frame rate<Span class= "next">=======================</Span></span>
            int frameStart = SDL_GetTicks();
            
<span class="comments">// Set the delay for rendering new images<Span class= "next">=======================</Span></span>
            frameDelay++;
            if(frameDelay > MAX_FRAME_DELAY)
            {
                frameDelay = 0;
<span class="comments">// Increment image frame by one after delay has passed<Span class= "next">=============</Span></span>
                imageFrame++;
                
                if(imageFrame > MAX_FRAME)
                    imageFrame = 0;
            }
        
<span class="comments">// Clear the screen<Span class= "next">=======================</Span></span>
            graphics.clear(0, 0, 0);
        
<span class="comments">// Draw the background to our backbuffer surface<Span class= "next">==================</Span></span>
            background.draw(0, 0, &amp;graphics);
        
<span class="comments">// Draw 4 images on the x axis: 0, 200, 400, 600<Span class= "next">==================</Span></span>
            for(int x = 0; x &lt; 800; x+=200)
                sprite.draw(x, 300, imageFrame, &amp;graphics);
        
<span class="comments">// Set the backbuffer surface to our window<Span class= "next">=======================</Span></span>
            graphics.flip();
                        
            int frameTime = SDL_GetTicks() - frameStart;
            int delay = FRAME_TIME - frameTime;
                  
<span class="comments">// Set the delay for 30 frames a second<Span class= "next">=======================</Span></span>
            if(delay > 0)
                SDL_Delay(delay);
        }
        
        FreeProgram();
        
        return 0;
    }

    bool InitProgram()
    {
<span class="comments">// Initialize SDL<Span class= "next">=======================</Span></span>
        if(SDL_Init(SDL_INIT_EVERYTHING) == -1)
            return false;
        
        if(!graphics.init(SCREEN_WIDTH, SCREEN_HEIGHT, FULLSCREEN))
            return false;
        
        graphics.setTitle("Image Test");
        
<span class="comments">// Load the sprite<Span class= "next">=======================</Span></span>
        if(!sprite.load("graphics/demon.bmp", 150, 120, &amp;graphics))
            return false;
        
<span class="comments">// Load the background<Span class= "next">=======================</Span></span>
        if(!background.load("graphics/background.bmp", &amp;graphics))
            return false;
        
        return true;
    }

    void FreeProgram()
    {
        sprite.free();
        background.free();
        graphics.kill();
        SDL_Quit();
    }

    bool ProgramRunning()
    {
         SDL_Event event;

        while(SDL_PollEvent(&amp;event))
        {
            if(event.type == SDL_QUIT)
                return false;
        }

        return true;
    }</pre>
        
        <p>I pretty much explained the entire program using the comments.  We first set the globals for our program, the width and height for our bmpfiles, the sdl surfaces needed, the frame rates, the functions necessary to initialize sdl and clean it up afterwards.
        
        <span class = "nl">Then we just call the functions defined in our classes in order to draw a background, 4 sprites and have those sprites rendered to our window in order to appear as thou they are moving.</span>
              </p>
        
        <hr />        
        <br />
        <a href = "SDL18.html">Previous</a>
        <span class = "next">
            <a href = "SDL20.html">Next Page</a></span>
        <br /><br />

    </div>
    
       
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>

</html>    