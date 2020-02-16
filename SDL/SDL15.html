<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Music - SDL Game Programming</title>
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

        <h1>Music - SDL Game Programming</h1>
        
        <h2>Play Music w/ SDL</h2>
        
            <p>The good thing is that this next example program is much smaller than our last.  Also, after this section we can finally move on to actually creating a game along with learning collision dection, artifical intelligence and creating a menu.
        
        <span class = "nl">In the next sample code, we will probably only learn 5 more functions, 'Mix_LoadMUS()', 'Mix_FreeMusic()', 'Mix_PlayMusic()', 'Mix_PauseMusic()' and finally 'Mix_ResumeMusic()'.  These functions are necessary due to the way that the SDL_mixer lib handles large sound files over smaller ones for just basic sounds.</span>
                
        <span class="nl">Let's look at some code and then analyze it.</span>
              </p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    #include &lt;SDL2/SDL.h>
    #include &lt;SDL2_mixer/SDL_mixer.h>
    #include &lt;iostream>

    Mix_Music *Music = NULL;

    SDL_Surface* Background = NULL;
    SDL_Surface* Backbuffer = NULL;

    SDL_Window* Window = NULL;

    bool LoadFiles();
    void FreeFiles();

    SDL_Surface* LoadImage(char* fileName);
    void DrawImage(SDL_Surface* image, SDL_Surface* destSurface, int x, int y);
    bool ProgramIsRunning();

    int main(int argc, char* argcs[])
    {
<span class="comments">// Initialize Everything<span class="next">=================================</span> </span>
        if(SDL_Init(SDL_INIT_EVERYTHING) &lt; 0)
        {
            std::cout &lt;&lt; "Error" &lt;&lt; std::endl;
            SDL_Quit();
            return 0;
        }
    
        Window = SDL_CreateWindow("interesting",
                             SDL_WINDOWPOS_UNDEFINED,
                             SDL_WINDOWPOS_UNDEFINED,
                             800, 600, SDL_WINDOW_SHOWN);
    
        Backbuffer = SDL_GetWindowSurface(Window);
    
<span class="comments">// Initialize Audio<span class="next">=================================</span> </span>
        if(Mix_OpenAudio(22050, MIX_DEFAULT_FORMAT, 2, 1024) == -1)
        {
            std::cout &lt;&lt; "Error" &lt;&lt; std::endl;
            SDL_DestroyWindow(Window);
            SDL_Quit();
            return 0;
        }
    
        if(!LoadFiles())
        {   
            std::cout &lt;&lt; "Error" &lt;&lt; std::endl;
            SDL_DestroyWindow(Window);
            FreeFiles();
            Mix_CloseAudio();
            SDL_Quit();
            return 0;
        }
    
        while(ProgramIsRunning())
        {
            DrawImage(Background, Backbuffer, 0, 0);
            SDL_Delay(20);
            SDL_UpdateWindowSurface(Window);
        }
    
        FreeFiles();
        Mix_CloseAudio();
        SDL_Quit();
    
        return 1;
    }

<span class="comments">// Load our sound track and background <span class="next">===========================</span> </span>
    bool LoadFiles()
    {
        Background = LoadImage("graphics/background5.bmp");
    
        if(Background == NULL)
            return false;
    
<span class="comments">// Here we use 'Mix_LoadMus()' for our audio file <span class="next">======================</span> </span>
        Music = Mix_LoadMUS("audio/happy_song.ogg");
    
    
        if(Music == NULL)
            return false;
    
        return true;
    }

    void FreeFiles()
    {
        if(Background != NULL)
        {
            SDL_FreeSurface(Background);
            Background = NULL;
        }
    
        if(Music != NULL)
        {
<span class="comments">// We use 'Mix_FreeMusic()' to free up these files <span class="next">====================</span> </span>
            Mix_FreeMusic(Music);
            Music = NULL;
        }
    }

    SDL_Surface* LoadImage(char* fileName)
    {
        SDL_Surface* imageLoaded = NULL;
        SDL_Surface* processedImage = NULL;
    
        imageLoaded = SDL_LoadBMP(fileName);
    
        if(imageLoaded != NULL)
        {
            processedImage = SDL_ConvertSurface(imageLoaded, Backbuffer->format, 0);
            SDL_FreeSurface(imageLoaded);
        
            if(processedImage != NULL)
            {
                Uint32 colorKey = SDL_MapRGB(processedImage->format, 0xFF, 0, 0xFF);
                SDL_SetColorKey(processedImage, SDL_TRUE, colorKey);
            }
        }
        return processedImage;
    }

    void DrawImage(SDL_Surface* image, SDL_Surface* destSurface, int x, int y)
    {
        SDL_Rect destRect;
        destRect.x = x;
        destRect.y = y;
    
        SDL_BlitSurface(image, NULL, destSurface, &amp;destRect);
    }

<span class="comments">// Event Handling <span class="next">=================================</span> </span>
    bool ProgramIsRunning()
    {
        SDL_Event event;
    
        bool running = true;
    
        while(SDL_PollEvent(&amp;event))
        {
            if(event.type == SDL_QUIT)
                running = false;
        
            if(event.type = SDL_KEYDOWN)
            {
                switch(event.key.keysym.sym)
                {
                    case SDLK_ESCAPE:
                        running = false;
                        break;
                    
                    case SDLK_BACKSPACE:
<span class="comments">// Here we use 'Mix_HaltMusic()' <span class="next">=============================</span> </span>
                        Mix_HaltMusic();
                        break;
                    
                    case SDLK_SPACE:
                        if(!Mix_PlayingMusic())
                        {
<span class="comments">// 'Mix_PlayMusic()' starts our sound <span class="next">===========================</span> </span>
                            Mix_PlayMusic(Music, -1);
                        }
                        else
                        {
                            if(Mix_PausedMusic())
                            {
                                Mix_ResumeMusic();
                            }
                            else
                            {
                                Mix_PauseMusic();
                            }
                        }
                        break;
                    
                    default:
                        break;
                }
            }
        }
    
        return running;
    }</pre>

        
    <p>There isn't much change in this file other than the functions we used to handle a large audio file.  As long as you familiarize yourself with the functions and the amount of parameters for each Music function, you should be fine.
        
        <span class = "nl">Similar to our last program we used 'Mix_OpenAudio()' to initialize our sound capabilities. Then when we had to load the files, for images or sound we used another function called 'Mix_LoadMUS()' passing into it the location of the audio file we want to use.  We can choose from WAV, OGG, MP3 and MIDI although MP3 is the recommended choice.</span>
        
        <span class="nl">In order to free our audio files we used 'Mix_FreeMusic()' function and this time we can just pass the variable we used to store our file.  Quickly moving down to our 'ProgramIsRunning()' function we see the difference in events. There aren't multiple channels like with our sound effects, we can just create more variables for different sound tracks.</span>
        
        <span class="nl">Our 'Mix_PlayMusic()' function takes just two parameters, the pointer which we used to store our sound file and the second parameter refers to frequency we want the file to be played, 0 for once, 1 for twice, and -1 to continuously play.</span>
        
        <span class="nl">We can halt the music file using 'Mix_HaltMusic()' or just pause it using 'Mix_PauseMusic()'.  In order to resume the sound file just type in 'Mix_ResumeMusic()' and bind that to a key.</span>
              </p>
        <hr />        
        <br />
        <a href = "SDL14.html">Previous</a>
        <span class = "next">
            <a href = "SDL16.html">Next Page</a></span>
        <br /><br />

    </div>
    
       
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>


</body>

</html>    