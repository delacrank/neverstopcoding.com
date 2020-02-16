<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Raster &amp; Outline Font Classes - SDL Game Programming</title>
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

        <h1>Raster &amp; Outline Font Classes - SDL Game Programming</h1>
        
        <h2>Raster and Outline Font Classes</h2>
        
            <p>In this section we are going to be focusing on both the Raster and Outline Font Classes.  The purpose of these classes is to add either a raster font or outline font to our program without having to go through the trouble of typing out all the code everytime we want to do so.
        
        <span class="nl">Let's start by looking at our raster header and function definitions.</span>
        </p>
        
    <em>Header:</em>
     <!-- Header -->
    <pre class="code">
    #ifndef RasterFont_h
    #define RasterFont_h

    #include &lt;cstring>
    #include "Image.h"

    class RasterFont
    {
    private:
        static const int NUM_COLUMNS = 16;
        static const int START_CHAR = 32;
        
        Image image;
        int charSize;
    public:
        bool load(const char fileName[], Graphics* g);
        void draw(const char text[], int x, int y, Graphics* g);
        void free();
    };

    #endif</pre>
        
        <p>Let's take a look at the static qualifer, this is new to us.  When you make a variable static, it means that you can only use that variable in the file it's defined.  Since we have included it in our 'RasterFont.cpp' file, this means that we can use it there.
        
        <span class = "nl">We have used it to break up our raster fonts into 16 possible columns, this is because from left to right there are 16 columns in our font bitmap file. Then we initialize the start char equal to 32, this is because according to ascii values, the first character doesn't start until the 32nd number, the first number appears at the 48th value and the first letter appears at the 65th value.  We can convert our characters into bitmap frames using this system.</span>
            
        <span class="nl">We can declare our image class type as image to make use of some of the image functions such as load, framesize, draw, etc.  Let's show the definitions for these functions.</span>
              </p>
        
    <em>Code:</em>
     <!-- Header -->
    <pre class="code">  #include "RasterFont.h"

    bool RasterFont::load(const char fileName[], Graphics* g)
    {
        if(!image.load(fileName, g))
            return false;
        
        charSize = image.getWidth()/NUM_COLUMNS;
        
        image.setFrameSize(charSize, charSize);
        
        return true;
    }

    void RasterFont::draw(const char text[], int x, int y, Graphics* g)
    {
        if(!image.isLoaded())
            return;
        
        for(int i = 0; i &lt; strlen(text); i++ )
        {
            image.draw(x+i*charSize, y, text[i]-START_CHAR, g);
        }
    }

    void RasterFont::free()
    {
        image.free();
    }</pre>
        
        <p>For our raster fonts we can load each individual character by dividing our bitmap into smaller frames.  We store that value into a variable and then pass that into another function 'setFrameSize' to determine height and width of the frame.
        
        <span class = "nl">The draw function just takes the values of a c style string (char array) subtracts them by 32 and draws the appropriate bitmap char for each character written.  It includes spaces, symbols, numbers and letters both lower and upper case.</span>
            
        <span class="nl">Let's move on to our outline font header file.</span>
              </p>
        
    <em>Header:</em>
     <!-- Header -->
    <pre class="code">
    #ifndef OutlineFont_h
    #define OutlineFont_h

    #include &lt;SDL2_ttf/SDL_ttf.h>
    #include "Graphics.h"

    class OutlineFont
    {
    private:
        TTF_Font* font;
    
    public:
        OutlineFont();
        ~OutlineFont();
        
        bool load(const char fileName[], int size);
        void free();
        
        void draw(const char text[], int x, int y, int r, int g, int b, Graphics* gfx);
    };

    #endif</pre>
        
        <p>The outline font header has a lot less involved because we are going to be using an entire library in order to work with these true type fonts. 
        
        <span class = "nl">After the constructor and desctructor we have our load function which handles the font file itself, it will also use an integer to determine how big or small the font will be rendered.</span>
        
        <span class = "nl">The draw class just draws the fonts from the file on to the backbuffer.  It will also be used to determine the color and the positioning of the fonts on window.</span>
            
        <span class="nl">SDL_BlitSurface() is the final step to ensuring that these fonts are appended to the backbuffer. Below are the definitions for each funciton.</span>
              </p>
        
    <em>Code:</em>
     <!-- Header -->
    <pre class="code">
    #include "OutlineFont.h"

    OutlineFont::OutlineFont()
    {
        font = NULL;
    }

    OutlineFont::~OutlineFont()
    {
        
    }

    bool OutlineFont::load(const char fileName[], int size)
    {
        font = TTF_OpenFont(fileName, size);
            
        if(font == NULL)
            return false;
        
        return true;
    }

    void OutlineFont::free()
    {
        if(font != NULL)
        {
            TTF_CloseFont(font);
        }
    }

    void OutlineFont::draw(const char text[], int x, int y, int r,
                           int g, int b, Graphics* gfx)
    {
        if(font == NULL)
            return;
        
        SDL_Surface* renderedText = NULL;
        SDL_Color color;
        
        color.r = r;
        color.g = g;
        color.b = b;
        
        renderedText = TTF_RenderText_Solid(font, text, color);
        
        SDL_Rect pos;
        
        pos.x = x;
        pos.y = y;
        
        SDL_BlitSurface(renderedText, NULL, gfx->getBackbuffer(), &amp;pos);
        SDL_FreeSurface(renderedText);
    }</pre>
        
        <p>Let's look at some of the calls made with the implementation of these classes.  Below is the main source file.</p>
        
    <em>Code:</em>
    <!-- code -->    
    <pre class="code">
    #include "Graphics.h"
    #include "Image.h"
    #include "RasterFont.h"
    #include "OutlineFont.h"

<span class="comments">// Declare global variables<span class = "next">==============</span></span>
    const int FPS = 30;
    const int FRAME_TIME = 1000/FPS;
    const int SCREEN_WIDTH = 800;
    const int SCREEN_HEIGHT = 600;
    const int FULLSCREEN = false;

<span class="comments">// Declare class objects<span class = "next">==============</span></span>
    Graphics graphics;
    Image background;
    RasterFont rasterFont;
    OutlineFont outlineFont;

<span class="comments">// Declare global functions<span class = "next">==============</span></span>
    bool InitProgram();
    void FreeProgram();
    bool ProgramRunning();

    int main(int argc, char *argvp[])
    {
        int colorCounter = 0;
        
        if(!InitProgram())
        {
            FreeProgram();
            return false;
        }
        
        while(ProgramRunning())
        {
            int frameStart = SDL_GetTicks();
            
            graphics.clear(0, 0, 0);
            
            colorCounter+=5;
            if(colorCounter > 255)
                colorCounter = 0;
            
            background.draw(0, 0, &amp;graphics);
<span class="comments">// Draw raster fonts using bitmap file<span class = "next">==============</span></span>
            rasterFont.draw("RasterFonts are really cool!", 100, 100, &amp;graphics);
<span class="comments">// Draw outline fonts using ttf file<span class = "next">==============</span></span>
            outlineFont.draw("Outline fonts are just as cool!", 100, 150, 0, 0,
                            colorCounter, &amp;graphics);
            
<span class="comments">// Append the backbuffer surface to the window<span class = "next">==============</span></span>
            graphics.flip();
            
            int frameTime = SDL_GetTicks()-frameStart;
            int delay = FRAME_TIME - frameTime;
            
            if(delay > 0)
                SDL_Delay(delay);
        }
        
        FreeProgram();
        
        return 0;
    }

<span class="comments">// Ensure that fonts have been downloaded<span class = "next">==============</span></span>
    bool InitProgram()
    {
        if(!graphics.init(SCREEN_WIDTH, SCREEN_HEIGHT, FULLSCREEN))
            return false;
        
        if(TTF_Init() == -1)
            return false;
        
        graphics.setTitle("Font Test");
        
        if(!background.load("graphics/background.bmp", &amp;graphics))
            return false;
        
        if(!rasterFont.load("graphics/blocky_font.bmp", &amp;graphics))
            return false;
        
        if(!outlineFont.load("graphics/bbrick.ttf", 25))
            return false;
        
        return true;
    }

<span class="comments">// Garbage collection<span class = "next">==============</span></span>
    void FreeProgram()
    {
        background.free();
        rasterFont.free();
        outlineFont.free();
        graphics.kill();
        TTF_Quit();
        SDL_Quit();
    }

<span class="comments">// Event handling<span class = "next">==============</span></span>
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
        
        <p>The comments explain most of what is going on in this code, our next two classes will handle input and sound.</p>
        
        <hr />        
        <br />
        <a href = "SDL19.html">Previous</a>
        <span class = "next">
            <a href = "SDL21.html">Next Page</a></span>
        <br /><br />

    </div>
    
       
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>

</html>    