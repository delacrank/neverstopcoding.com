<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Animating Sprites - SDL Game Programming</title>
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

    <h1>Animating Sprites - SDL Game Programming</h1>
        
    <h2>Animating your Sprites</h2>    
    
        <p>It will probably take you some time to make sense of this section because it can feel extremely complicated and overwhelming at first.  I feel that before I explain animation, I should probably explain what clipping is. 
            
            <span class = "nl">Clipping is when you can take an image file and choose a section of it to be displayed to the screen.  So if for example you have an image which is 300 by 200 pixels, and you wanted to use just the top left corner of it.  You could store that image into a rectangle and plot the points to display just that section using the x, y coordinates along with the height and width.</span>
            
            <span class="nl">When you animate your image file you are just using a strip of sprites (stored in one image file) in different positions.  Each sprite image can be divided into a section or 'frame' and then swapped out continously to trick the eye into believing that it is moving.</span>
        </p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    #include &lt;SDL2/SDL.h>
    
    SDL_Surface* Background;
    SDL_Surface* SpriteImage;
    SDL_Surface* Backbuffer;
    
    SDL_Window* Window;
    
    int SpriteFrame = 0;
    int FrameCounter = 0;
    
    const int MaxSpriteFrame = 11;
    const int FrameDelay = 2;
    
    int BackgroundX = 0;
    
    SDL_Surface* LoadImage(char* fileName);
    bool LoadFiles();
    void FreeFiles();
    void DrawImage(SDL_Surface* image, SDL_Surface* destSurface, int x, int y);
    void DrawImageFrame(SDL_Surface* image, SDL_Surface* destSurface, int x, int y,
                                    int width, int height, int frame);
    bool ProgramIsRunning();
    
    int main(int argc, char* args[])
    {
<span class="comments">// Initialize Everything <span class="next">====================================</span> </span>
        if(SDL_Init(SDL_INIT_EVERYTHING) &lt; 0)
        {
            SDL_ShowSimpleMessageBox(SDL_MESSAGEBOX_INFORMATION, "SDL",
                                            "SDL failed to intialize", NULL);
            SDL_Quit();
            return 0;        
        }
        
        Window = SDL_CreateWindow("SDL", 
                                    SDL_WINDOWPOS_UNDEFINED,
                                    SDL_WINDOWPOS_UNDEFINED,
                                    800, 600, SDL_WINDOW_SHOWN);
                            
        Backbuffer = SDL_GetWindowSurface(Window);
        
        if(!LoadFiles())
        {
            SDL_ShowSimpleMessageBox(SDL_MESSAGEBOX_INFORMATION, "SDL",
                                            "SDL failed to intialize", NULL);
            SDL_DestroyWindow(Window);
            FreeFiles();
            SDL_Quit();
            return 0;   
        }
<span class="comments">// Animate our sprites <span class="next">====================================</span> </span>
        while(ProgramIsRunning())
        {
            FrameCounter++;
        
            if(FrameCounter > FrameDelay)
            {
                FrameCounter = 0;
                SpriteFrame++;
            }
        
            if(SpriteFrame > MaxSpriteFrame)
                SpriteFrame = 0;
            
            BackgroundX  -= 6;
            if(BackgroundX &lt;= -800)
                BackgroundX = 0;
            
            DrawImage(Background, Backbuffer, BackgroundX, 0);
            DrawImage(Background, Backbuffer, BackgroundX+800, 0);
            DrawImageFrame(SpriteImage, Backbuffer, 350, 250, 150, 120, SpriteFrame);
        
            SDL_Delay(20);
        
            SDL_UpdateWindowSurface(Window);
        }
    
        FreeFiles();
        SDL_Quit();
        return 0;
    }
    
<span class="comments">// Alpha Mask images <span class="next">====================================</span> </span>
    SDL_Surface* LoadImage(char* fileName)
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
    
<span class="comments">// Store Image files <span class="next">====================================</span> </span>
    bool LoadFiles()
    {
        Background = LoadImage("directoryName/fileName");
        
        if(Background == NULL)
            return false;
            
        SpriteImage = LoadImage("directoryName/fileName");
        
        if(SpriteImage == NULL)
            return false;
            
        return true;
    }
    
<span class="comments">// Free Surfaces <span class="next">====================================</span> </span>
    void FreeFiles()
    {
        SDL_FreeSurface(Background);
        SDL_FreeSurface(SpriteImage);    
    }
    
<span class="comments">// Draw Image function <span class="next">====================================</span> </span>
    void DrawImage(SDL_Surface* image, SDL_Surface* destSurface, int x, int y)
    {
        SDL_Rect destRect;
        destRect.x = x;
        destRect.y = y;
        
        SDL_BlitSurface(image, NULL, destSurface, &amp;destRect);
    }
    
<span class="comments">// Animation Function <span class="next">====================================</span> </span>
    void DrawImageFrame(SDL_Surface* image, SDL_Surface* destSurface, int x, int y,
                                int width, int height, int frame)
    {
        SDL_Rect destRect;
        destRect.x = x;
        destRect.y = y;
        
        int columns = image->w/width;
        
        SDL_Rect sourceRect;
        sourceRect.y = (frame/columns)*height;
        sourceRect.x = (frame%columns)*width;
        sourceRect.w = width;
        sourceRect.h = height;
        
        SDL_BlitSurface(image, &amp;sourceRect, destSurface, &amp;destRect);
    }
    
<span class="comments">// Player Inputs<span class="next">====================================</span> </span>
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
    </pre>
        
        <p>Let's take a look at this code in order to make some sense of what is going on.  The first thing I want you to focus on is this 'DrawImageFrame()' function. First I will examine that function to as its being called in our main loop.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    DrawImageFrame(SpriteImage, Backbuffer, 350, 250, 150, 120, SpriteFrame);</pre>
        
        <p>You will notice the function is passing 7 arguments, that's a lot.  The first argument refers to the image file itself, the second argument refers to the backbuffer or the surface for our image, the third refers to the horizontal location or the x axis, the forth refers to the vertical or y axis, the fifth is the height, the six is the width and the seven refers to the frame.
        
        <span class = "nl">I will explain the frame soon enough but first let's look at the function.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    void DrawImageFrame(SDL_Surface* image, SDL_Surface* destSurface, int x, int y,
                                int width, int height, int frame)
    {
        SDL_Rect destRect;
        destRect.x = x;
        destRect.y = y;
        
        int columns = image->w/width;
        
        SDL_Rect sourceRect;
        sourceRect.y = (frame/columns)*height;
        sourceRect.x = (frame%columns)*width;
        sourceRect.w = width;
        sourceRect.h = height;
        
        SDL_BlitSurface(image, &amp;sourceRect, destSurface, &amp;destRect);
    }</pre>
        
        <p>First we declare destRect as a type.  The destRect refers to the x and y coordinates of the image we want to render, passing these coordinates into our argument will now change the location of our image.
            
    <span class = "nl">The next variable we see is an int called columns, the columns number will be determined by the amount of frames used in our animaton. We will set our column variable equal to the width of our image divided by our w parameter. This means if we change our width to 5 and our image is 100 pixels long, then we will have 20 columns. However, if we change our width to 20 then we will only have 5 columns.</span>
        
    <span class = "nl">Now we will determine how much of our image to render by setting sourcRect to SDL_Rect type. We set the height of our image file by taking the frame dividing it by the number of columns and multiplying that by our height parameter.</span>
          </p>
        
        <hr />        
        <br />
        <a href = "SDL5.html">Previous</a>
        <span class = "next">
            <a href = "SDL7.html">Next Page</a></span>
        <br /><br />

    </div>    
    
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>    