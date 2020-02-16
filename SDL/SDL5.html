<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />  
        <title>Moving Sprites - SDL Game Programming</title>
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

    <h1>Moving Sprites - SDL Game Programming</h1>
        
    <h2>Moving Sprites</h2>    
    
        <p>This section will go into how to animate sprites which, are basically image files.  From now on after displaying this example, I will use only new functions to display code.
            
            <span class ="nl">From here on out You will have to use the skeleton code of Initializing SDL, Creating the window, program running function, loadfiles, basically any previous code we spoke about.</span>
        </p>
            
    <hr />
        
    <!-- -->
    <h3>Moving a sprite</h3>
        
        <p>The way we are able to move sprites is being changing the position of the image, let's look at an example below.</p>
        
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    #include &lt;SDL2/SDL.h>
    
    SDL_Surface* Background = NULL;
    SDL_Surface* SpriteImage = NULL;
    SDL_Surface* Backbuffer = NULL;
    SDL_Window* Window = NULL;
    
    
    SDL_Rect SpritePos;
    
    bool LoadFiles();
    void FreeFiles();
    bool ProgramIsRunning();
    
    int main(int argc, char* argcs[])
    {
<span class="comments">// Initialize everything <span class="next">====================================</span></span>
        if(SDL_Init(SDL_INIT_EVERYTHING) &lt; 0)
        {
            SDL_ShowSimpleMessageBox(SDL_MESSAGEBOX_INFORMATION, 
                                        "SDL", "Failed to initialize", NULL);
            SDL_Quit();
            return 0;
        }
        
        Window = SDL_CreateWindow("SDL",
                                        SDL_WINDOWPOS_UNDEFINED,
                                        SDL_WINDOWPOS_UNDEFINED,
                                        800, 600, SDL_WINDOW_SHOWN);
        
        Backbuffer = SDL_GetWindowSurface(Window);
        
<span class="comments">// Error checking image files <span class="next">====================================</span></span>
        if(!LoadFiles())
        {
            SDL_ShowSimpleMessageBox(SDL_MESSAGEBOX_INFORMATION, 
                                        "SDL", "Failed to load files", NULL);
            FreeFiles();
            SDL_DestroyWindow(Window);
            SDL_Quit();
            return 0;
        }
        
        SpritePos.x = 0;
        SpritePos.y = 250;
        
<span class="comments">// Physics <span class="next">====================================</span></span>
        while(ProgramIsRunning())
        {
            SpritePos.x+=5;
            
            if(SpritePos.x > 800)
                SpritePos.x = -200;
                
            SDL_BlitSurface(Background, NULL, Backbuffer, NULL);
            SDL_BlitSurface(SpriteImage, NULL, Backbuffer, &amp;SpritePos);
            
            SDL_Delay(20);
            SDL_UpdateWindowSurface(Window);
        }
         
        FreeFiles();
        SDL_Quit();
        return 0;
    }
    
<span class="comments">// Player Input <span class="next">====================================</span></span>
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
    
<span class="comments">// Load Images <span class="next">====================================</span></span>
    bool LoadFiles()
    {         
        Background = SDL_LoadBMP("Location/Image.bmp");
            
        if(Background == NULL)
        return false;
        
        SpriteImage =  SDL_LoadBMP("Location/Image.bmp");
            
        if(SpriteImage == NULL)
        return false;
        
        return true;
    }
    
<span class="comments">// Free up memory <span class="next">====================================</span></span>
    void FreeFiles()
    {
        SDL_FreeSurface(Background);
        SDL_FreeSurface(SpriteImage);
    } </pre>
        
    <p>We used similar to our rendering an image file, we create two functions to load our images and one error report if the images fail to load.  Yet this time we specify an enum called SDL_Rect.  This enum will store the location of our Sprite image, and we can increment or decrement to move it up and down the y axis or left to right using the x axis.
        
        <span class = "nl">Notice how we pass in a new argument to our second <b>SDL_BlitSurface()</b> function.  This argument will pass the location of our sprite position as a reference.</span>
        
        <span class = "nl">Other than passing that new argument and modifying the SpritePos to be incremented by 5 pixels to the x axis, no real changes have been made to our original Game Structure file.</span></p>
        
    <hr />
        
    <!-- Alpha Masking -->
    <h3>Alpha Masking</h3>
        
        <p>One thing we will do is remove the background from our sprite by adding a wrapper to our <b>LoadImage()</b> function.  The technique we will be using to accomplish this graphic feat is called Alpha Masking.</p>    
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    SDL_Surface* LoadImage(char* fileName)
    {
        SDL_Surface* imageLoaded = NULL;
        SDL_Surface* processedImage = NULL;
        imageLoaded = SDL_LoadBMP("directory/fileName");

        if(imageLoaded != NULL)
        {
        
<span class="comments">// Convert the surface to a graphics format SDL can understand <span class = "next">========</span></span>
            processedImage = SDL_ConvertSurface(imageLoaded, Backbuffer->format, 0);
            SDL_FreeSurface(imageLoaded);

            if(processedImage != NULL)
            {
    
<span class="comments">// Use the processed graphics format to mask the background <span class = "next">========</span></span>
                Uint32 colorKey = SDL_MapRGB(processedImage->format, 255, 0, 255);
                SDL_SetColorKey(processedImage, SDL_TRUE, colorKey);
            }
        }
        return processedImage;
    }</pre>
     
        <p>Now if we just change our <b>LoadFile()</b> function to pass our new LoadImage function, instead of using SDL's LoadBMP() function for our image files. To understand how this function works let's take a look at some of the functions we used.  <b>SDL_ConvertSurface()</b> this is going store our backbuffer and our image and convert it to the program's display format.  
        
        <span class = "nl">Then we use this variable 'colorKey' along with the function <b>SDL_SetColorKey()</b> to map color we want to be masked.</span>
              </p> 
        
    <em>Code:</em>
    <!-- code -->    
    <pre class="code">
     <span class="comments">// New LoadFile()</span>
    bool LoadFiles()
    {         
    
<span class="comments">// Mask the backgrounds of our images using the LoadImage function <span class = "next">========</span></span>
        Background = <span class="red">LoadImage</span>("Location/Image.bmp");
            
        if(Background == NULL)
        return false;
        
<span class="comments">// Mask the backgrounds of our images using the LoadImage function <span class = "next">========</span></span>
        SpriteImage =  <span class="red">LoadImage</span>("Location/Image.bmp");
            
        if(SpriteImage == NULL)
        return false;
        
        return true;
    }
    </pre>
        
    <p>Our LoadFiles() looks like this now.</p>
        
     <hr />        
        <br />
        <a href = "SDL4.html">Previous</a>
        <span class = "next">
            <a href = "SDL6.html">Next Page</a></span>
        <br /><br />

    </div>    
    
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>    