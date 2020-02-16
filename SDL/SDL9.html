<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Outline Fonts - SDL Game Programming</title>
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

        <h1>Outline Fonts - SDL Game Programming</h1>
        
        <h2>SDL Outline Fonts</h2>
        
            <p>Similar to when we added our image framework to our frameworks library.  We will require the use of another extension library in order to work with outline fonts <a href="https://www.libsdl.org/projects/SDL_ttf/" target = "_blank">SDL Outline Fonts</a>.  Furthermore, we will need to include '&lt;SDL2/SDL2_ttf.h>' to source code files in order to use the framework and add -framework sdl2_tff to our commandline if we wish to use the terminal. I am assuming that ttf stands for true type font.</p>
        
        <hr />
        
        <h3>Drawing Outline Fonts</h3>
        
            <p>Previously we learned how to add fonts to our window using a technique called 'Raster fonts'.  In this tutorial we will talk about using an extension library called 'SDL2_TTF.h' in order to draw fonts from an actually .ttf file. 
                
            <span class="nl">Using this method is slower in terms of how long it takes the CPU to process the outlined fonts, the benefits is that there is more variety and better scaling with .ttf fonts. </span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    #include &lt;SDL2/SDL.h>
    #include &lt;SDL2_ttf/SDL_ttf.h>
    #include &lt;stdio.h>

    SDL_Surface* Backbuffer = NULL;

    SDL_Window* Window = NULL;

    TTF_Font* Font = NULL;

    void DrawOutlineText(SDL_Surface* surface, char* string, int x, int y, TTF_Font* font,
                     Uint8 r, Uint8 g, Uint8 b);
    bool ProgramIsRunning();

    int main(int argc, char* args[])
    {
<span class="comments">// Initialization &amp; Window Creation<span class="next">==========================</span> </span>
        if(SDL_Init(SDL_INIT_EVERYTHING) &lt; 0)
        {
            SDL_ShowSimpleMessageBox(SDL_MESSAGEBOX_INFORMATION,
                                            "SDL", "SDL failed to initialize", NULL);
            SDL_Quit();
            return 0;
        }
    
        Window = SDL_CreateWindow("SDL", SDL_WINDOWPOS_UNDEFINED,
                                        SDL_WINDOWPOS_UNDEFINED,
                                        800, 600, SDL_WINDOW_SHOWN);
    
        Backbuffer = SDL_GetWindowSurface(Window);
    
<span class="comments">// Font Initialization<span class="next">==========================</span> </span>
        if(TTF_Init() == -1)
        {
            SDL_ShowSimpleMessageBox(SDL_MESSAGEBOX_INFORMATION, "SDL",
                                            "SDL failed to initialize TTF", Window);
        
            SDL_DestroyWindow(Window);
            TTF_Quit();
            SDL_Quit();
        
            return 0;
        }

<span class="comments">// Locate font file and determine size<span class="next">=====================</span> </span>
        Font = TTF_OpenFont("fonts/Alfphabet.ttf", 24);
    
<span class="comments">// Error handling for font file<span class="next">=====================</span> </span>
        if(Font == NULL)
        {
            SDL_ShowSimpleMessageBox(SDL_MESSAGEBOX_INFORMATION, "SDL", 
                                            "Failed to load", Window);
        
            SDL_DestroyWindow(Window);
            TTF_CloseFont(Font);
            TTF_Quit();
            SDL_Quit();
        
            return 0;
        }
        
        int counter = 0;
    
<span class="comments">// Draw strings to the Window using our fonts<span class="next">=====================</span> </span>
        while(ProgramIsRunning())
        {
            SDL_FillRect(Backbuffer, NULL, 0);
        
            counter++;
            if(counter > 1000)
                counter = 0;
        
            char buffer[64];
            sprintf(buffer, "I can count to 1000: %d", counter);
        
            DrawOutlineText(Backbuffer, "I am the king", 100, 100, Font, 255, 0, 0);
            DrawOutlineText(Backbuffer, "I am the king 2", 100, 150, Font, 0, 255, 0);
            DrawOutlineText(Backbuffer, buffer, 100, 200, Font, 0, 0, 255);
        
            SDL_Delay(20);
        
            SDL_UpdateWindowSurface(Window);
        }
    
            SDL_DestroyWindow(Window);
            TTF_CloseFont(Font);
            TTF_Quit();
            SDL_Quit();
    
            return 0;            
    }

<span class="comments">// Font Drawing function<span class="next">==========================</span> </span>
    void DrawOutlineText(SDL_Surface* surface, char* string, int x, int y, TTF_Font* font,
                    Uint8 r, Uint8 g, Uint8 b)
    {
        SDL_Surface* renderedText = NULL;
    
        SDL_Color color;
    
        color.r = r;
        color.g = g;
        color.b = b;
    
        renderedText = TTF_RenderText_Solid(font, string, color);
    
        SDL_Rect pos;
    
        pos.x = x;
        pos.y = y;
    
        SDL_BlitSurface(renderedText, NULL, surface, &amp;pos);
        SDL_FreeSurface(renderedText);    
    }

<span class="comments">// Player Input<span class="next">==========================</span> </span>
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
    } </pre>    
        
    <p>If I were to talk about each function, I would start with our main function first.  We see a new if statement which checks to see if the 'TTF_Init()' is negative one, meaning there is an error with initializing it. 
        
        <span class = "nl">The next thing we do is assign the variable font to a function 'TTF_OpenFont()' where we pass the .ttf font file necessary for our font type.  Once again there is error checking to ensure that the file was sucessfully loaded into the variable.</span>
        
        <span class="nl">Next let's skip ahead to our 'DrawOutlineText()' function. First let's notice that we will store our renderedText into a surface and initialize it to a null pointer or NULL.  Then we declare color a type of SDL_Color, from here we can initialize each color member type r, g, b to parameters to be passed in our function.</span>
        
        <span class="nl">Now that we have a surface for our text, and ways to adjust the values of our colors using enum SDL_Color we can proceed to initializing our surface to a function called 'TTF_RenderText_Solid()'.  This function will control the type of font we use, which characters will be in this font and the color of our text.</span>
        
        <span class="nl">As with other SDL graphics we need to append our text to a surface, and for that we can call the 'SDL_BlitSurface()' function.  Finally, we can free up that surface for new functions. If we go back up to our 'ProgramIsRunning()' funciton then we will be able to understand what is going on when we call our 'DrawOutlineText()'.</span>
        
        <span class="nl">Let's look at 'ProgramIsRunning()' now.  First we fill the entire screen with the Backbuffer surface, now we can use the DrawOutLineText to specify any location on the Backbuffer we wish to draw on.  Once we have specified a location using our x and y coordinates, we are free to choose the type of font, the amount of characters in our string and the color of our choice for displaying our text.</span>
        
        <span class="nl">If you want to change the size of the font, we can do so by chaning the number of pixels earlier when we initialized the font variable</span>
              </p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    Font = TTF_OpenFont("fonts/Alfphabet.ttf", <span class = "red">24</span>);</pre>
        
        <hr />        
        <br />
        <a href = "SDL8.html">Previous</a>
        <span class = "next">
            <a href = "SDL10.html">Next Page</a></span>
        <br /><br />

    </div>
    
       
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>


</body>

</html>    