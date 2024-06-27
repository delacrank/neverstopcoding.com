<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Raster Fonts - SDL Game Programming</title>
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

        <h1>Raster Fonts - SDL Game Programming</h1>
        
        <h2>SDL Raster Fonts</h2>
        
            <p>The way SDL deals with display Raster fonts to the screen is similar to the way we display images.  As long as you store your font in a file and have a way to loop through them, then you can essentially store the fonts in an array and display each font based on an element in the array.</p>
        
        <hr />
        
        <!-- Raster fonts -->
        <h3>Raster font Drawing</h3>
        
            <p>In the example below we are going to draw two sentences to the screen.  The way we can accomplish this using are raster font image is by breaking each individual character into a frame.  From there we can choose frames based on ASCII numeric order as long as we subtract that number by 32.
        
        <span class = "nl">To have a better understanding let's look at a chart of ASCII codes and characters <a target="_blank" href="http://www.ascii-code.com/">ASCII code list</a>. ASCII stands for American Standard Code for Information Interchange.</span>
              </p>
        
    <em>Code:</em>    
    <!-- code -->
    <pre class="code">
    #include &lt;SDL2/SDL.h>
    #include &lt;SDL2/SDL_image.h>
    
    #include &lt;cstring>
    
    SDL_Surface* Background = NULL;
    SDL_Surface* FontImage = NULL;
    SDL_Surface* Backbuffer = NULL;
    
    SDL_Window* Window;
    
    const int charSize = 16;
    
    SDL_Surface* LoadImage(char* fileName);
    bool LoadFiles();
    void FreeFiles();
    void DrawImage(SDL_Surface* image, SDL_Surface* destSurface, int x, int y);
    void DrawImageFrame(SDL_Surface* image, SDL_Surface* destSurface, 
                                    int x, int y, int width, int height, int frame);
    void DrawRasterText(SDL_Surface* surface, SDL_Surface* destSurface, char string[],
                                    int x, int y, int charSize);
    bool ProgramIsRunning();
    
    int main(int argc, char* args[])
    {
<span class="comments">// Initialization &amp; Window Creation<span class="next">==========================</span> </span>
        if(SDL_Init(SDL_INIT_EVERYTHING) &lt; 0)
        {
            SDL_ShowSimpleMessageBox(SDL_MESSAGEBOX_INFORMATION, "SDL",
                                            "SDL failed to initialize!", NULL);
            SDL_Quit();
            return 0;
        }
        
        Window = SDL_CreateWindow("SDL fonts", SDL_WINDOWPOS_UNDEFINED,
                                            SDL_WINDOWPOS_UNDEFINED,
                                            800, 600, SDL_WINDOW_SHOWN);
                                            
        Backbuffer = SDL_GetWindowSurface(Window);
        
<span class="comments">// Error Handling Images<span class="next">==========================</span> </span>
        if(!LoadFiles())
        {
            SDL_ShowSimpleMessageBox(SDL_MESSAGEBOX_INFORMATION, "SDL",
                                            "Failed to load files!", NULL);
                                            
            SDL_DestroyWindow(Window);
            FreeFiles();
            SDL_Quit();
            
            return 0;
        }
        
<span class="comments">// Drawing words<span class="next">==========================</span> </span>
        while(ProgramIsRunning())
        {
            DrawImage(Background, Backbuffer, 0, 0);
            DrawRasterText(FontImage, Backbuffer, "Alright let's do it!",
                                            100, 100, charSize);
            DrawRasterText(FontImage, Backbuffer, "Drawing is Fun!",
                                            100, 116, charSize);
                                            
            SDL_Delay(20);
            
            SDL_UpdateWindowSurface(Window);
        }
        
        FreeFiles();
        
        SDL_DestroyWindow(Window);
        SDL_Quit();
        
        return 0;
    }

<span class="comments">// Convert Image into graphics format<span class="next">==========================</span> </span>
    SDL_Surface* LoadImage(char* fileName)
    {
        SDL_Surface* imageLoaded = NULL;
        SDL_Surface* processedImage = NULL;
        
        imageLoaded = IMG_Load(fileName);
        
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
    
<span class="comments">// Load Images<span class="next">==========================</span> </span>
    bool LoadFiles()
    {
        Background = LoadImage("directory/Image");
        
        if(Background == NULL)
            return false;
            
        FontImage = LoadImage("directory/Image");
        
        if(FontImage == NULL)
            return false;
            
        return true;
    }
    
<span class="comments">// Garbage handling<span class="next">==========================</span> </span>
    void FreeFiles()
    {
        SDL_FreeSurface(FontImage);
        SDL_FreeSurface(Background);
    }
    
    
<span class="comments">// Appending Image to destRect<span class="next">==========================</span> </span>
    void DrawImage(SDL_Surface* image, SDL_Surface* destSurface, 
                                    int x, int y)
    {
        SDL_Rect destRect;
        destRect.x = x;
        destRect.y = y;
        
        SDL_BlitSurface(image, NULL, destSurface, &amp;destRect);
    }
    
<span class="comments">// Algorithm for breaking characters into frames<span class="next">===================</span> </span>
    void DrawImageFrame(SDL_Surface* image, SDL_Surface* destSurface,
                                    int x, int y, int width, int height, int frame)
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
    
<span class="comments">// Draws a character based on number stored in string array<span class="next">==========</span> </span>
    void DrawRasterText(SDL_Surface* surface, SDL_Surface* destSurface,
                                    char string[], int x, int y, int charSize)
    {
        for(int i = 0; i &lt; strlen(string); i++)
            DrawImageFrame(surface, destSurface, x+i*charSize,
                                            y, charSize, charSize, string[i]-32);
    }
    
<span class="comments">// Checks for player input<span class="next">==========================</span> </span>
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
    }</pre>
        
        
        <p>I'm only going to attempt to explain two of the functions on this example.  The 'void DrawRasterText()' function and the 'while(ProgramIsRunning()' function.
        
        <span class = "nl">If we look at the 'DrawRasterText()' function you will notice a for loop.  The loop will check every character (starting with the first) against the length of the string and then increment the loop by one if the variable 'i' is smaller than the string.</span>
            
        <span class="nl">Once the check is completed the loop will call the 'DrawImageFrame()' function.  Similar to our animation sprite, the image frame function will take the image and divide it into columns for each character.  Then it will replace the character based on its frame, so if the 5th frame is the character 'g', then that will be printed out.</span>
            
        <span class="nl">In order to determine which frame number will be choosen the string is stored an array, and each element in the array will be given a magic number starting at zero.  If you looked at the ASCII chart from earlier, then you would know that  ASCII printable character codes don't start until number 32 for the space character.  So, if we subtract the first 32 elements from our string array then we won't have to worry about including carriage returns, null characters and back spaces. </span>
            
        <span class="nl">From here all we have to do is replace our literal strings with frames from our image in order to print words to the screen.</span>
              </p>
         
        
        <hr />        
        <br />
        <a href = "SDL7.html">Previous</a>
        <span class = "next">
            <a href = "SDL9.html">Next Page</a></span>
        <br /><br />

    </div>
    
       
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>


</body>

</html>    