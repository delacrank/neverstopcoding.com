<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <meta name="description" content="Learn to use the cross platform API, SDL in order to create a game engine that will work on multiple operating systems. Render images, create animations, add sound and create AI to make fun games." />
<meta name="keywords" content="SDL, Simple Direct Media Layer, Game Programming" />
<meta name="author" content="Juan Arias" />  
        <title>Simple Direct Media Layer - SDL Game Programming</title>
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

        <h1>Simple Direct Media Layer - SDL Game Programming</h1>
        
        <h2>Simple Direct Media Layer</h2> 
        
            <p>Hey guys, welcome to my section on Simple Direct Media Layer.  This section will talk about how to use a C library to access window, sound, mouse, keyboard inputs on multiple platforms.
        
        <span class="nl">In order to create games which use a GUI, we require certain features from our OS to create a window, Simple Direct Media Layer or SDL library will help us to achieve these goals without having to write or change our code depending on which device we intend to us.</span>
        
        <span class="nl">The homepage for sdl is <a href="https://www.libsdl.org/" target="_blank">SDL Homepage</a>, to download the library you would have to go here <a href="https://www.libsdl.org/download-2.0.php" target="_blank">Download lib</a>.  Once you have downloaded and extracted the Framework, you can place in your Mac HD/ Library/Frameworks/ directory. From here you should navigate to the folder and resign it using this command in your cmd line 'codesign -f -s - SDL2'. </span>
        
        <span class="nl">If you want to compile your SDL code, I would just use this command line option '-Framework SDL2'.  So your command line would look something like 'g++ -o SDL main.cpp -framework SDL2' (for a GNU compiler).</span></p>
        
        <hr />
        
        <!-- Our first program -->
        <h3>Our First Program</h3>
        
            <p>The first thing we want to do is create a window, and clear the buffer of that window. Let's look at some code first before I try to break anything down.</p>
        
     <em>Code:</em>
    <!-- code -->
    <pre class="code">
   #include &lt;SDL2/SDL.h>

    int main(int argc, char* args[])
    {
        SDL_Window* window = NULL;

        if(SDL_Init( SDL_INIT_EVERYTHING) &lt; 0)
        {
            SDL_ShowSimpleMessageBox(SDL_MESSAGEBOX_INFORMATION,
            "SDL", "SDL failed to initialize!", NULL);
            SDL_Quit();
            return 0;
        }

        window = SDL_CreateWindow("SDL!!!",
                                    SDL_WINDOWPOS_UNDEFINED,
                                    SDL_WINDOWPOS_UNDEFINED,
                                    800, 600, SDL_WINDOW_SHOWN);

        SDL_Delay(3000);
        SDL_DestroyWindow(window);
        SDL_Quit();
        return 1;
    }</pre>    
        
    <p>The first thing we did was use a pointer to initialize the window object to null.  Then we checked to see if SDL was initialized before trying to create our window, if SDL wasn't initialized then the program would close by calling the SDL_Quit() function.
        
        <span class ="nl">Once we know that SDL is initialized we set the window variable to SDL_CreateWindow() function.  Then we call SDL_Delay function to keep are window open for at least 3 seconds before we destory it and quit SDL.</span>
        
        <span class="nl">Let's talk about some of the functions and the arguments we passed to them before moving on the next section.  One of the first functions we used was <b>SDL_Init():</b> this function is used to initialize: video, audio and other functions.  In this example we decided to just initialize everything for the sake of simplicity. </span>
        
        <span class="nl">Now let's talk about another function <b>SDL_ShowSimpleMEssageBox():</b> the purpose of this function is to create a popup window which will instruct are user what to do, similar to the way javascript creates popup windows.</span>
        
        <span class="nl">We can quickly talk about the next three functions: <b>SDL_Delay()</b>, <b>SDL_DestroyWindow()</b> and <b>SDL_Quit()</b>. The first function SDL_Delay() just keeps our window open for a set time without expecting any input. The second function SDL_DestroyWindow() removes our window from memory and the last function SDL_Quit() simply exits us out of the program once the window is destoryed.</span>
        
        <span class="nl">In the next section we will talk about how render an image to our screen.</span>
              </p>    
        
        
        <hr />        
        <br />
        <span class = "next">
            <a href = "SDL1.html">Next Page</a></span>
        <br /><br />

    </div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>    