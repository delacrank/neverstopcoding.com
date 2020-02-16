<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Image formats - SDL Game Programming</title>
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

        <h1>Image formats - SDL Game Programming</h1>
        
        <h2>Image formats</h2>
        
            <p>In order to work with images in formats other than BMP, you will need to go here <a href="https://www.libsdl.org/projects/SDL_image/">SDL Image framework</a> and download the correct source or binary for your OS.  Since I doing this tutorial for Mac users I would suggest downloading the Mac OS X runtime Binary and placing the SDL2 Image framework in your /Libraries/Frameworks/ folder.
        
        <span class ="nl">If you want to use Xcode to compile your SDL project then you should add the SDL2 framework and SDL2 Image frameworks in the 'Link Binary With Libraries' option under 'Build Phases'.  Just press the plus sign at the bottom and add the frameworks from your /Libraries/Frameworks/ under your MacHD.</span>
                
        <span class="nl">Or if you want to continue to compile your projects using the command line then after adding the SDL2 Image framework to your frameworks folder add '-framework sdl2_image' in addition to adding the header '&lt;SDL2_Image/SDL_image.h>' to the end of your command.</span>
              </p>
        
    <em>Code:</em>
    <pre class="code">
    g++ -o game main.cpp -w -framework sdl2 -framework sdl2_image</pre>    
        
        <h3>JPEG/PNG Formats</h3>
        
            <p>SDL has functions to handle loading image files such as PNG and JPEG.  There are advantages and disadvantages for choosing one or the other over BMP file.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    #include &lt;SDL2/SDL.h>
    #include &lt;SDL2_image/SDL_image.h>
    
    SDL_Surface* PngLogo = NULL;
    SDL_Surface* JpegLogo = NULL;
    SDL_Surface* PcxLogo = NULL;
    SDL_Surface* TgaLogo = NULL;
    SDL_Surface* Backbuffer = NULL;
    
    SDL_Window* Window;
    
    SDL_Surface* LoadImage(char* fileName);
    void DrawImage(SDL_Surface* image, SDL_Surface* destSurface, int x, int y);
    bool LoadFiles();
    void FreeFiles();
    bool ProgramIsRunning();
    
    int main(int argc, char* args[])
    {
    
<span class="comments">// Initialization &amp; Window Creation<span class="next">==========================</span> </span>
        if(SDL_Init(SDL_INIT_EVERYTHING) &lt; 0)
        {
            SDL_ShowSimpleMessageBox(SDL_MESSAGEBOX_INFORMATION, "SDL", 
                                    "SDL failed to initialize.", NULL);
            SDL_Quit();
            return 0;
        }
        
        Window = SDL_CreateWindow("Image formats", 
                                    SDL_WINDOWPOS_UNDEFINED,
                                    SDL_WINDOWPOS_UNDEFINED,
                                    800, 600, SDL_WINDOW_SHOWN);
                                    
        Backbuffer = SDL_GetWindowSurface(Window);
        
<span class="comments">// Error Handling for Images<span class="next">===========================</span> </span>
        if(!LoadFiles())
        {
            SDL_ShowSimpleMessageBox(SDL_MESSAGEBOX_INFORMATION, "SDL", 
                                    "SDL failed to initialize.", NULL);
            SDL_DestroyWindow(Window);
            FreeFiles();
            SDL_Quit();
            
            return 0;
        }
    
<span class="comments">// Drawing the Images<span class="next">====================================</span> </span>
        while(ProgramIsRunning())
        {
            DrawImage(PngLogo, Backbuffer, 0, 0);
            DrawImage(JpegLogo, Backbuffer, 400, 0);
            DrawImage(PcxLogo, Backbuffer, 0, 300);
            DrawImage(TgaLogo, Backbuffer, 400, 300);
            
            SDL_Delay(20);
            
            SDL_UpdateWindowSurface(Window);
        }
        
        FreeFiles();
        
        SDL_DestroyWindow(Window);
        SDL_Quit();
        
        return 0;
    }
    
<span class="comments">// Algorithim for processing image formats<span class="next">=====================</span> </span>
    SDL_Surface* LoadImage(char* filename)
    {
        SDL_Surface* imageLoaded = NULL;
        SDL_Surface* processedImage = NULL;
        
        imageLoaded = IMG_Load(filename);
        
        if(imageLoaded != NULL)
        {
            processedImage = SDL_ConvertSurface(imageLoaded, Backbuffer->format, 0);
            SDL_FreeSurface(imageLoaded);
            
            if(processedImage != NULL)
            {
                Uint32 colorKey = SDL_MapRGB(
                                                processedImage->format, 0xFF, 0, 0xFF);
                                                
                SDL_SetColorKey(processedImage,
                                                SDL_TRUE, colorKey);
            }
        }
        return processedImage;
    }
    
<span class="comments">// Location of images on window<span class="next">==============================</span> </span>
    void DrawImage(SDL_Surface* image, SDL_Surface* destSurface, int x, int y)
    {
        SDL_Rect destRect;
        destRect.x = x;
        destRect.y = y;
        
        SDL_BlitSurface(image, NULL, destSurface, &amp;destRect);
    }
    
<span class="comments">// Destination of files<span class="next">===============================</span> </span>
    bool LoadFiles()
    {
        PngLogo = LoadImage("graphics/png_logo.png");
        JpegLogo = LoadImage("graphics/png_logo.png");
        PcxLogo = LoadImage("graphics/png_logo.png");
        TgaLogo = LoadImage("graphics/png_logo.png");
        
        if(PngLogo == NULL || JpegLogo == NULL || PcxLogo == NULL || TgaLogo == NULL)
            return false;
            
        return true;
    }
    
    void FreeFiles()
    {
        SDL_FreeSurface(PngLogo);
        SDL_FreeSurface(JpegLogo);
        SDL_FreeSurface(PcxLogo);
        SDL_FreeSurface(TgaLogo);
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
        }
        
        return running;
    }</pre>
        
        <p>The code is similar to other programs we have wrote so far.  We define and intialize our surfaces to null, declare our function prototypes, and start our main function.
        
        <span class = "nl">Rather than repeat everything done in the program I will just skip ahead to the what happens in our 'ProgramIsRunning()' function first. We will call this function four times for each of our different image formats, notice that each image is placed on a different area of our window starting from the top left corner of the image. Finally the window is updated to render the changes made.</span>
            
        <span class="nl">If we move down to our 'DrawImage()' function, we see that it just stores the parameters for the x and y coordinates in SDL_Rect type variable called destRect and uses two member variables x and y.  We also pass our image parameter into SDL_BlitSurface in order to append our image to the destRect variable surface.</span>
            
        <span class="nl">The 'LoadImage()' function actually processes our image to be converted from our other file formats into a graphics format which SDL can understand.</span>
              </p>
        
        <hr />        
        <br />
        <a href = "SDL6.html">Previous</a>
        <span class = "next">
            <a href = "SDL8.html">Next Page</a></span>
        <br /><br />

    </div>
    
       
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>


</body>

</html>    
