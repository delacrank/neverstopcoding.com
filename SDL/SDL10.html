<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Controlling the FPS - SDL Game Programming</title>
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

        <h1>Controlling the FPS - SDL Game Programming</h1>
        
        <h2>Controlling the FPS (Frames per Second)</h2>
        
            <p>Earlier in our animation demo we were able to show what it looked like to animate a sprite on a moving background.  In this demo, we are going to replicate this only this time we are going to change how time passes before each new frame is rendered to our window.
        
        <span class = "nl">Increasing the Frames per second can make the animation look smoother, and as a rule of thumb most games use either 30Hz or 60Hz (Hertz 'iterations per second').</span>
              </p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    #include &lt;SDL2/SDL.h>
    
    <span class="red">const int FPS = 30;
    const int FRAME_DELAY = 1000/FPS;</span>
    
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
            <span class="red">int frameStart = SDL_GetTicks();</span>
        
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
        
            <span class="red">int frameTime = SDL_GetTicks() - frameStart;

            if(frameTime &lt; FRAME_DELAY)
                SDL_Delay(FRAME_DELAY - frameTime);</span>

        
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
        
        
    <p>Well, that's it for dealing with images, fonts, swapping frames, and so forth.  In our next section we will dive into dealing with events and player inputs other than exiting the program.</p>
        
        <hr />        
        <br />
        <a href = "SDL9.html">Previous</a>
        <span class = "next">
            <a href = "SDL11.html">Next Page</a></span>
        <br /><br />

    </div>
    
       
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>


</body>

</html>    