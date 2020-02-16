<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Sound - SDL Game Programming</title>
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

        <h1>Sound - SDL Game Programming</h1>
        
        <h2>Understanding Sound w/ SDL</h2>
        
            <p>SDL has another framework for handling sounds, similar to having to download and install the frameworks that we used for our images and true type fonts we will have to repeat this process for our sound.
        
    <span class="nl">The first thing you want to do is download the framework from sdl <a href="https://www.libsdl.org/projects/SDL_mixer/">here</a>, if you are using a make just drag the file into your frameworks located under MacHD/Library/Frameworks. Once you have completed that step you should now add the necessary header files to your source code file.</span> 
        </p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    #include &lt;SDL2/SDL.h>
    #include &lt;SDL2_mixer/SDL_mixer.h></pre>
        
    <p>It can be different if you are on a different machine that runs Windows or Linux, it could look like this '#include &lt;SDL2/SDL_mixer.h>'.
        
    <span class = "nl">From this point you want to add the correct command line accessor in order to compile our program.  It will look something like this, below.</span>
        </p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    g++ -framework sdl2 -framework sdl2_mixer -o test main.cpp</pre>
        
    <p>Now that I have covered the basic set up, let's start looking into some small programs which we can use to test out some of the features of this sound library.  Quick note, this library will only play certain types of sound files: WAV, WAVE, OGG, MIDI and MP3.
        
        <span class = "nl">Also, if you don't already have audio files which you can use, then you will have to learn how to create custom sounds for your game.  This isn't in the scope of this tutorial.</span>
        
    <span class="nl">Alright, now let's look at some code.</span>
              </p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    #include &lt;SDL2/SDL.h>
    #include &lt;SDL2_mixer/SDL_mixer.h>
    #include &lt;iostream>

    SDL_Surface* Background = NULL;
    SDL_Surface* Backbuffer = NULL;

    SDL_Window* Window = NULL;

<span class="comments">// Declare the variables to hold our sound files<span class="next">======================</span> </span>
    Mix_Chunk *cNote = NULL;
    Mix_Chunk *csNote = NULL;
    Mix_Chunk *dNote = NULL;
    Mix_Chunk *dsNote = NULL;
    Mix_Chunk *eNote = NULL;
    Mix_Chunk *fNote = NULL;
    Mix_Chunk *fsNote = NULL;
    Mix_Chunk *gNote = NULL;
    Mix_Chunk *gsNote = NULL;
    Mix_Chunk *aNote = NULL;
    Mix_Chunk *asNote = NULL;
    Mix_Chunk *bNote = NULL;
    Mix_Chunk *highCNote = NULL;

<span class="comments">// We can store these pointers in an array<span class="next">===========================</span> </span>
    int noteChannel[13];
    
    bool LoadFiles();
    void FreeFiles();
    
    SDL_Surface* LoadImage(char* fileName);
    void DrawImage(SDL_Surface* image, SDL_Surface*    
    destSurface, int x, int y);
    bool ProgramIsRunning();
    
    int main(int argc, char* args[])
    {
<span class="comments">// Initialization<span class="next">====================================</span> </span>
        if(SDL_Init(SDL_INIT_EVERYTHING) > 0)
        {
            std::cout &lt;&lt; "Error" &lt;&lt; std::endl;
            SDL_Quit();
            return 0;
        }
        
        Window = SDL_CreateWindow("Interesting",
                             SDL_WINDOWPOS_UNDEFINED,
                             SDL_WINDOWPOS_UNDEFINED,
                             800, 600, SDL_WINDOW_SHOWN);
    
        Backbuffer = SDL_GetWindowSurface(Window);
    
<span class="comments">// Here we initialize SDL Mixer<span class="next">===========================</span> </span>
        if(Mix_OpenAudio(22050, MIX_DEFAULT_FORMAT, 2, 1024) == -1 )
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
    
        for(int i = 0; i &lt; 13; i++)
        {
            noteChannel[i] = -1;
        }
    
        while(ProgramIsRunning())
        {
            DrawImage(Background, Backbuffer, 0, 0);
            SDL_Delay(20);
            SDL_UpdateWindowSurface(Window);
        }
    
        FreeFiles();
        
        SDL_DestroyWindow(Window);
    <span class="comments">// Mix_CloseAudio() ends the mixer<span class="next">=============================</span> </span>
        Mix_CloseAudio();
        SDL_Quit();
    
        return 0;
    }

<span class="comments">// Graphics <span class="next">=============================</span> </span>
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

    void DrawImage(SDL_Surface* image, SDL_Surface*
    destSurface, int x, int y)
    {
        SDL_Rect destRect;
        destRect.x = x;
        destRect.y = y;
    
        SDL_BlitSurface(image, NULL, destSurface, &amp;destRect);
    }

<span class="comments">// Write the function to handle events to play sounds<span class="next">==============</span> </span>
    bool ProgramIsRunning()
    {
        SDL_Event event;
    
        bool running = true;
        
        while(SDL_PollEvent(&amp;event))
        {
            if(event.type == SDL_QUIT)
                running = false;
        
            if(event.type == SDL_KEYDOWN)
            {
                switch(event.key.keysym.sym)
                {
                    case SDLK_ESCAPE:
                        running = false;
                        break;
                    
        <span class="comments">// Mix_PlayChannel() plays our sound file<span class="next">====================</span> </span>
                    case SDLK_a:
                        noteChannel[0] = Mix_PlayChannel(-1, cNote, 0);
                        break;
                    
                    case SDLK_w:
                        noteChannel[1] = Mix_PlayChannel(-1, csNote, 0);
                        break;
                    
                    case SDLK_s:
                        noteChannel[2] = Mix_PlayChannel(-1, dNote, 0);
                        break;
                    
                    case SDLK_e:
                        noteChannel[3] = Mix_PlayChannel(-1, dsNote, 0);
                        break;
                    
                    case SDLK_d:
                        noteChannel[4] = Mix_PlayChannel(-1, eNote, 0);
                        break;
                    
                    case SDLK_f:
                        noteChannel[5] = Mix_PlayChannel(-1, fNote, 0);
                        break;
                    
                    case SDLK_t:
                        noteChannel[6] = Mix_PlayChannel(-1, fsNote, 0);
                        break;
                    
                    case SDLK_g:
                        noteChannel[7] = Mix_PlayChannel(-1, gNote, 0);
                        break;
                    
                    case SDLK_y:
                        noteChannel[8] = Mix_PlayChannel(-1, gsNote, 0);
                        break;
                    
                    case SDLK_h:
                        noteChannel[9] = Mix_PlayChannel(-1, aNote, 0);
                        break;
                    
                    case SDLK_u:
                        noteChannel[10] = Mix_PlayChannel(-1, asNote, 0);
                        break;
                    
                    case SDLK_j:
                        noteChannel[11] = Mix_PlayChannel(-1, bNote, 0);
                        break;
                    
                    case SDLK_k:
                        noteChannel[12] = Mix_PlayChannel(-1, highCNote, 0);
                        break;
                    
                    default:
                        break;
                }
            }
        
            if(event.type == SDL_KEYUP)
            {
                switch (event.key.keysym.sym)
                {
                    case SDLK_ESCAPE:
                        running = false;
                        break;
                    
                    case SDLK_a:
    <span class="comments">// Mix_HaltChannel() will stop our sound stream<span class="next">================</span> </span>
                        Mix_HaltChannel(noteChannel[0]);
                        break;
                    
                    case SDLK_w:
                        Mix_HaltChannel(noteChannel[1]);
                        break;
                
                    case SDLK_s:
                        Mix_HaltChannel(noteChannel[2]);
                        break;
                    
                    case SDLK_e:
                        Mix_HaltChannel(noteChannel[3]);
                        break;
                    
                    case SDLK_d:
                        Mix_HaltChannel(noteChannel[4]);
                        break;
                    
                    case SDLK_f:
                        Mix_HaltChannel(noteChannel[5]);
                        break;
                        
                    case SDLK_t:
                        Mix_HaltChannel(noteChannel[6]);
                        break;
                        
                    case SDLK_g:
                        Mix_HaltChannel(noteChannel[7]);
                        break;
                    
                    case SDLK_y:
                        Mix_HaltChannel(noteChannel[8]);
                        break;
                    
                    case SDLK_h:
                        Mix_HaltChannel(noteChannel[9]);
                        break;
                    
                    case SDLK_u:
                        Mix_HaltChannel(noteChannel[10]);
                        break;
                    
                    case SDLK_j:
                        Mix_HaltChannel(noteChannel[11]);
                        break;
                    
                    case SDLK_k:
                        Mix_HaltChannel(noteChannel[12]);
                        break;
                    
                    default:
                        break;
                }
            }
        }
        return running;
    }

    bool LoadFiles()
    {
        Background = LoadImage("graphics/background4.bmp");
    
<span class="comments">// Here we can load our sound files<span class="next">====================</span> </span>
        cNote = Mix_LoadWAV("notes/c.wav");
        csNote = Mix_LoadWAV("notes/cs.wav");
        dNote = Mix_LoadWAV("notes/d.wav");
        dsNote = Mix_LoadWAV("notes/ds.wav");
        eNote = Mix_LoadWAV("notes/e.wav");
        fNote = Mix_LoadWAV("notes/f.wav");
        fsNote = Mix_LoadWAV("notes/fs.wav");
        gNote = Mix_LoadWAV("notes/g.wav");
        gsNote = Mix_LoadWAV("notes/gs.wav");
        aNote = Mix_LoadWAV("notes/a.wav");
        asNote = Mix_LoadWAV("notes/as.wav");
        bNote = Mix_LoadWAV("notes/b.wav");
        highCNote = Mix_LoadWAV("notes/highC.wav");
    
<span class="comments">// If any file fails let the player know<span class="next">====================</span> </span>
        if(Background == NULL || cNote == NULL || csNote == NULL
        || dNote == NULL || dsNote == NULL || eNote == NULL
        || fNote == NULL || fsNote == NULL || gNote == NULL
        || gsNote == NULL || aNote == NULL || asNote == NULL
        || bNote == NULL || highCNote == NULL)
        {
            return false;
        }
    
        return true;
    }

    void FreeFiles()
    {
<span class="comments">// Free the up the memory<span class="next">====================</span> </span>
        if(cNote != NULL)
        {
            Mix_FreeChunk(cNote);
            cNote = NULL;
        }
    
        if(csNote != NULL)
        {      
            Mix_FreeChunk(csNote);
            csNote = NULL;
        }
    
        if(dNote != NULL)
        {
            Mix_FreeChunk(dNote);
            dNote = NULL;
        }
    
        if(dsNote != NULL)
        {
            Mix_FreeChunk(dsNote);
            dsNote = NULL;
        }
    
        if(eNote != NULL)
        {
            Mix_FreeChunk(eNote);
            eNote = NULL;
        }
    
        if(fNote != NULL)
        {
            Mix_FreeChunk(fNote);
            fNote = NULL;
        }
    
        if(fsNote != NULL)
        {
            Mix_FreeChunk(fsNote);
            fsNote = NULL;
        }
    
        if(gNote != NULL)
        {
            Mix_FreeChunk(gNote);
            gNote = NULL;
        }
    
        if(gsNote != NULL)
        {
            Mix_FreeChunk(gsNote);
            gsNote = NULL;
        }
    
        if(aNote != NULL)
        {
            Mix_FreeChunk(aNote);
            aNote = NULL;
        }
    
        if(bNote != NULL)
        {
            Mix_FreeChunk(bNote);
            bNote = NULL;
        }
    
        if(highCNote != NULL)
        {
            Mix_FreeChunk(highCNote);
            highCNote = NULL;
        }
    
        if(Background != NULL)
        {
            SDL_FreeSurface(Background);
            Background = NULL;
        }
    }</pre>
        
        <p>In the beginning of our code we used the Mix_Chunk struct to create pointer variables for each of our sound samples. 
From here we move on to declaring our functions and then on to our main function.
        
            <span class = "nl">Next we move to initialization and then to our first real sound function <b>'Mix_OpenAudio(22050, MIX_DEFAULT_FORMAT, 2, 1024)'</b>.  This function will initiailze our SDL mixer, it takes four parameters.  The first parameter represents the sample rate (the amount of sound samples per second) a sample rate will determine the amount of sound bits are used per second of audio (read <a href="https://en.wikipedia.org/wiki/Sampling_(signal_processing)" target="_blank">here</a> for differing sample sizes).</span>
            
        <span class="nl">The second param is used to determine the format which is compatible with the system, the third param determines whether audio is stero or mono, the last param indicates the chunk size.  Chunk size is used to describe the size of each mixed sample, you want to use a size small enough not to lag your game, yet large enough so that sounds don't skip, similar to the way frames tend to be choppy when there aren't enough of them.</span>
            
        <span class="nl">If I continue down to where we see a for loop for our channel, you will notice that each channel is initiailzed to a negative one.  The Mix_Chunks are used to store the sound files, and the channel array is used to organize them so we can easily choose between different channels of sound.</span>
            
        <span class="nl">Understanding the channels is very important, sometimes we want to play sounds which overlap each other, like a sound track and a sound effect, maybe two sound effects follow each other with the second overlapping the end of the first.  In order to organize these sounds we have to sort them into different channels, for this example we are going to initialize all the sounds to just one channel negative one.  </span>
            
        <span class="nl">This means no two sounds can overlap each other, if I play one sound then another the first will have to stop before the other sound is played.  It can seem as two sounds are being played at the same time if one sound has an interval for more than 2 seconds, but the computer will not play both sound files at the same time unless they are on different channels. </span>
            
        <span class="nl">We can skip the 'ProgramIsRunning' function within our main loop, skip the Load Image function as well as the draw image function.  Now, you will see the very large 'ProgramIsRunning()' function.  We have to first pass our SDL_PollEvent to check for any events, then we pass one event for exiting the program before we move on to our many sound events.</span>
            
        <span class="nl">Here we see another function, <b>'Mix_playChannel()'</b> it takes 3 parameters. The first parameter refers to the channel on which the sound will be played.  If you haven't initialized a sound to a channel then nothing will be played. </span>
            
        <span class="nl">The next parameter determines the sound file, we stored all of our files in as struct variables 'Mix_Chunk' with names which refer to different notes. Its important to provide our variables with descriptive names so as not to get confused.</span>
            
        <span class="nl">The last param determines the length of sound being played. For this argument we can three different values, zero, one and negative one.  If we initialize our first argument to be zero then sound will play once, if we set it to one sound will play twice and if we set it to negative one then the sound will loop continuously.</span>
            
        <span class="nl">Moving along we see another list of events, these deal with when we release a key.  All of these events will stop our sound from being played any longer.  This is done with a function called <b>'Mix_HaltChannel()'</b>.  It just stops the sound from being played any longer, if we use a negative one for the argument then all the channels will stop playing sound.</span>
            
            <span class="nl">The last two functions we see are the <b>Mix_LoadWAV()</b> and the <b>Mix_FreeChunk()</b>, one loads the sound file and the other releases it.</span>
              </p>
        
          
        <hr />        
        <br />
        <a href = "SDL13.html">Previous</a>
        <span class = "next">
            <a href = "SDL15.html">Next Page</a></span>
        <br /><br />

    </div>
    
       
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>


</body>

</html>    