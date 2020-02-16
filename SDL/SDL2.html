<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />   
        <title>Game Loop - SDL Game Programming</title>
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

        <h1>Game Loop - SDL Game Programming</h1>
        
       <h2>Understanding the Game Loop</h2>
       
        <p>When we create a game we must create a loop which will keep the game running and render the data we input using either our mouse or keyboard.  Our Game loop has 5 stages: Initialize, Player Input, Physics, Rendering, and Exit.  However, it will usually go back to Player input after rendering has taken place.
        
        <span class = "nl">The Initialization phase makes sure that video and sound are working, the player input is the game asking for input, the physics is determing the math necesary to execute the player input, the rendering displays the results of our player input. The game will then ask for more input, if the player decides the quit the game thats the last phase.</span>
        
        <span class = "nl">In this new code we will create an event which prompt the user to quit the game by pressing the 'x' at the top left of our window.  This means we can keep the window open as long as we want without the program crashing.  The second thing we will do is randomly generate images in different locations while the game is running.</span>
        
        <span class = "nl">These actions are performed by creating the ProgramIsRunning() function, and the LoadImages() function. </span>
        </p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    #include &lt;SDL2/SDL.h>
    
    SDL_Surface* background = NULL;
    SDL_Surface* sprite = NULL;
    SDL_Surface* backbuffer = NULL;

    SDL_Window* Window = NULL;
    
    bool ProgramIsRunning();
    bool LoadImages();
    void FreeImages();
    
    int main(int argc, char* argcs[])
    {
    
<span class = "comments">// Set up Window <span class="next">====================================</span></span>
        if(SDL_Init(SDL_INIT_EVERYTHING) &lt; 0)
        {
            SDL_ShowSimpleMessageBox(SDL_MESSAGEBOX_INFORMATION,
                                            "SDL", "SDL failed to initialize.", NULL);
            SDL_Quit();
            return 0;
        }
        Window = SDL_CreateWindow("SDL", 
                                        SDL_WINDOWPOS_UNDEFINED,
                                        SDL_WINDOWPOS_UNDEFINED,
                                        800, 600, SDL_WINDOW_SHOWN);
    
        backbuffer = SDL_GetWindowSurface(Window);
        
<span class = "comments">// Error handling <span class="next">====================================</span></span>
        if(!LoadImages())
        {
            SDL_ShowSimpleMessageBox(SDL_MESSAGEBOX_INFORMATION,
            "SDL", "Image faild to load!", NULL);
            
            FreeImages();
            SDL_Quit();
            return 0;
        }
        
        SDL_BlitSurface(background, NULL, backbuffer, NULL);
        
<span class = "comments">// Execute Game Physics <span class="next">====================================</span></span>
        while(ProgramIsRunning())
        {
            SDL_Rect spritePos;
            spritePos.x = rand()%800;
            spritePos.y = rand()%600;
            
            SDL_BlitSurface(sprite, NULL, backbuffer, &amp;spritePos);
            SDL_UpdateWindowSurface(Window);
            SDL_Delay(100);        
        }
    }
       
<span class = "comments">// Player input handling <span class="next">====================================</span></span>
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
        
<span class = "comments">// Render Game physics <span class="next">====================================</span></span>
    bool LoadImages()
    {
        background = SDL_LoadBMP("Location/Image.bmp");
            
        if(background == NULL)
        return false;
            
        sprite =  SDL_LoadBMP("Location/Image.bmp");
            
        if(sprite == NULL)
        return false;
        
        return true;
    }
        
<span class = "comments">// Garbage Collection <span class="next">====================================</span></span>
    void FreeImages()
    {
        if(background != NULL)
        {
            SDL_FreeSurface(background);
            background = NULL;
        }
            
        if(sprite != NULL)
        {
            SDL_FreeSurface(sprite);
            sprite = NULL;
        }
    }</pre>
        
    <p>Alright, let's trace through our code again.  We set 4 pointers this time: two for our images (one for the background one for the sprite), one for our backbuffer (to draw our images on to) and one for our window.
        
        <span class = "nl">Similar to last time we Initialize our SDL functinos, create the window and set the backbuffer equal to our window. In order to explain our new code I will first have to explain the functions we created LoadImages() and ProgramIsRunning().</span>
        
        <span class = "nl">The first function <b>LoadImages()</b> just makes sure that our images were loaded properly and stored into variables before we did anything else.  This function is a bool type, which means it will return either a true or false, this will be useful later on for error handling.</span>
        
        <span class = "nl"><b>ProgramIsRunning()</b> is the second function and this is also a bool type. This function will check to see if we submitted SDL_QUIT (checked the 'x' box) value and send a false value, otherwise it will return a true value.  This function will be necessary for handling the second and last phase of our game loop, it is also called event handling.</span>
        
        <span class = "nl">If we go back to our <b>Main()</b> function we will see how both those functions (ProgramIsRunning(), LoadImages()) are intergrated into our main(). After assigning the backbuffer equal to our window we use an if statement to see whether or not the images were uploaded and of the right format.  If they weren't we can inform the user using a messagebox and exit the program, and if they were we can draw them to our buffer using the <b>SDL_BlitSurface()</b> function.</span>
        
        <span class="nl">A while loop is used for our player Input phase.  This is where the player input phase happens, if the player presses the 'x' button then we will exit the program.  However, if they do not we can use our physics to randomly generate our sprites in different positions of our x and y coordinates.  Both of our x and y coordinates are set to the size of our resolution so that images aren't generated off the screen. </span>

        <span class="nl">The sprites are drawn to our buffer using the the <b>SDL_BlitSurface()</b> function and the position is adjusted again using a reference variable '&amp;spritePos'. We should update the window to show changes made and wait for a period of time before running the function again and drawing another image to our buffer.</span>
        </p>    
        
        <hr />        
        <br />
        <a href = "SDL1.html">Previous</a>
        <span class = "next">
            <a href = "SDL3.html">Next Page</a></span>
        <br /><br />

    </div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>    