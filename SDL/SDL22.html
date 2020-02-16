<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Audio Core - SDL Game Programming</title>
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

        <h1>Audio Core - SDL Game Programming</h1>
        
        <h2>Audio Core</h2>
        
            <p>The audio core is what were are going to use to add sound to our game.  We can break up this core into 3 different classes, one class which handles how sound effects and music is played, paused or resumed.  Another class for just sound files and the third class for the music files.
        
        <span class = "nl">Let's look at the first class, this will handle both sound and music files.</span></p>
        
    <em>Header:</em>
     <!-- Header -->
    <pre class="code">
    #ifndef Audio_h
    #define Audio_h

    #include &lt;SDL2/SDL.h>
    #include &lt;SDL2_mixer/SDL_mixer.h>
    #include &lt;stdio.h>

    class Audio
    {
    private:
    public:
        bool init();
        void kill();
        
        bool musicPlaying();
        bool musicPaused();
        void pauseMusic();
        void resumeMusic();
        void stopMusic();
        
        void stopChannel(int channel);
    };

    #endif</pre>
        
        <p>This class includes not only our SDL header file but also our SDL_mixer header necessary for handling all audio files.  Additionally, it can initialize, stop, play, pause or resume music.
        
        <span class = "nl">Let's look at some of function defintions.</span>
              </p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    #include "Audio.h"
    
    bool Audio::init()
    {
        if(Mix_OpenAudio( 22050, MIX_DEFAULT_FORMAT, 2, 2048 ) == -1)
        {
            printf("Failed to initialize\n");
                return false;
        }
        
        return true;
    }

    void Audio::kill()
    {
        Mix_CloseAudio();
    }

    bool Audio::musicPlaying()
    {
        return Mix_PlayingMusic();
    }

    bool Audio::musicPaused()
    {
        return Mix_PausedMusic();
    }

    void Audio::pauseMusic()
    {
        Mix_PauseMusic();
    }

    void Audio::resumeMusic()
    {
        Mix_ResumeMusic();
    }

    void Audio::stopMusic()
    {
        Mix_HaltMusic();
    }

    void Audio::stopChannel(int channel)
    {
        Mix_HaltChannel(channel);
    }</pre>
        
        <p>There's nothing complicated about these definitions, some of them return boolean values which are necessary for checking if music is actually being played or just pasued.  The void functions just stop or play music.
        
        <span class = "nl">Let's look at our sound header file now, to see how we can seperate our functions to handle just the sound files.</span></p>
        
    <em>Header:</em>
     <!-- Header -->
    <pre class="code">
    #ifndef Sound_h
    #define Sound_h

    #include "Audio.h"

    class Sound
    {
    private:
        Mix_Chunk* sound;
    public:
        Sound();
        ~Sound();
        bool load(char fileName[]);
        void free();
        
        int play(int loops = 0);
        bool isLoaded();
    };

    #endif</pre>
        
        <p>Our private variable is a pointer which we use to store sound files called Mix_Chunk, similar to the way SDL uses surfaces to store image files, Mix_Chunk is used to handle sound files.
        
        <span class = "nl">We also have the constructor and the load function to validate if the file has been correctly loaded.  Finally, we have a play function which can control the amount of times a sound file is repeated and a boolean function to see if the file has been loaded already.</span>
        
        <span class = "nl">Let's look at the function definitions.</span>
              </p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    #include "Sound.h"

    Sound::Sound()
    {
        sound = NULL;
    }

    Sound::~Sound()
    {
        
    }

    bool Sound::load(char fileName[])
    {
        sound = Mix_LoadWAV(fileName);
        
        if(sound == NULL)
        {
            printf("Failed to load sound: ");
            printf(fileName);
            printf("\n");
            
            return false;
        }
        
        return true;
    }

    void Sound::free()
    {
        if(sound != NULL)
        {
            Mix_FreeChunk(sound);
            sound = NULL;
        }
    }

    int Sound::play(int loops)
    {
        if(sound != NULL)
        {
            return Mix_PlayChannel(-1, sound, loops);
        }
        else
        {
            return -1;
        }
    }

    bool Sound::isLoaded()
    {
        return (sound != NULL);
    }</pre>
        
        <p>We see the constructor just initializes our Mix_Chunk variable to a null pointer. The load function uses the Mix_LoadWAV() function to pass a '.wav' file into our pointer variable. It will return a true value if the file was loaded.
        
        <span class = "nl">The free function just clears our Mix_Chunk pointer variable, the play function will determine which file is played, and how many times its played.</span>
            
        <span class="nl">Finally, isLoaded function just checks to see if our sound variable is null or not and will return either a true or false value based on whether its null or not.  Let's look at the Music header and Music definitions next.</span>
        </p>
        
    <em>Header:</em>
     <!-- Header -->
    <pre class="code">
    #ifndef Music_h
    #define Music_h

    #include "Audio.h"

    class Music
    {
    private: 
        Mix_Music* music;
    public:
        Music();
        ~Music();
        
        bool load(char fileName[]);
        void free();
        void play(int loops = 0);
        bool isLoaded();
    };
    
    #endif</pre>
        
        <p>Similar to the sound header with the different being that music files are stored in Mix_Music pointer variables and not Mix_Chunk pointers.
        
        <span class = "nl">Let's quickly move on to the definitions and finally our main class.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    #include "Music.h"

    Music::Music()
    {
        music = NULL;
    }

    Music::~Music()
    {
        
    }

    bool Music::load(char fileName[])
    {
        music = Mix_LoadMUS(fileName);
        
        if(music == NULL)
        {
            printf("Failed to load song: ");
            printf(fileName);
            printf("\n");
            
            return false;
        }
        
        return true;
    }

    void Music::free()
    {
        if(music != NULL)
        {
            Mix_FreeMusic(music);
            music = NULL;
        }
    }

    void Music::play(int loops)
    {
        if(music != NULL)
            Mix_PlayMusic(music, loops);
    }

    bool Music::isLoaded()
    {
        return (music != NULL);
    }</pre>
        
        <p>Basically an exact replica of our Sound definitions with the changes being made in the name of functions 'Mix_LoadMUS()', 'Mix_FreeMusic()' and 'Mix_PlayMusic()' to handle larger sound files.
        
        <span class = "nl">Now our main class before move on to using a state management core and game core classes.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    #include "Graphics.h"
    #include "Input.h"
    #include "Image.h"
    #include "Audio.h"
    #include "Music.h"
    #include "Sound.h"

<span class="comments">// Define global variables<span class = "next">================</span></span>
    const int FPS = 30;
    const int FRAME_TIME = 1000/FPS;
    const int SCREEN_WIDTH = 800;
    const int SCREEN_HEIGHT = 600;
    const int FULLSCREEN = false;

<span class="comments">// Declare class objects<span class = "next">================</span></span>
    Graphics graphics;
    Audio audio;
    Input input;
    Music music;
    Sound sounds[5];
    Image background;

<span class="comments">// Declare global functions<span class = "next">================</span></span>
    bool InitProgram();
    void FreeProgram();
    bool ProgramRunning();

    int main(int argc, char *argv[])
    {
        if(!InitProgram())
        {
            FreeProgram();
            return 0;
        }
        
        while(ProgramRunning())
        {
            input.update();
            
<span class="comments">// Pause the music if space is pressed<span class = "next">================</span></span>
            if(input.keyHit(SDL_SCANCODE_SPACE))
            {
                if(!audio.musicPlaying())
                {
                    music.play(-1);
                }
                else
                {
                    if(audio.musicPaused())
                    {
                        audio.resumeMusic();
                    }
                    else
                    {
                        audio.pauseMusic();
                    }
                }
            }
            
            int frameStart = SDL_GetTicks();
            
<span class="comments">// Play the first sound effect, etc. etc.<span class = "next">================</span></span>
            if(input.keyHit(SDL_SCANCODE_1))
                sounds[0].play();
            
            if(input.keyHit(SDL_SCANCODE_2))
                sounds[1].play();
            
            if(input.keyHit(SDL_SCANCODE_3))
                sounds[2].play();
            
            if(input.keyHit(SDL_SCANCODE_4))
                sounds[3].play();
            
            if(input.keyHit(SDL_SCANCODE_5))
                sounds[4].play();

<span class="comments">// Clear the backbuffer<span class = "next">================</span></span>
            graphics.clear(0, 0, 0);
            
<span class="comments">// Draw background<span class = "next">================</span></span>
            background.draw(0, 0, &amp;graphics);
            
<span class="comments">// Append the backbuffer to our window<span class = "next">================</span></span>
            graphics.flip();
            
            int frameTime = SDL_GetTicks() - frameStart;
            int delay = FRAME_TIME - frameTime;
            
            if(delay > 0)
                SDL_Delay(delay);
        }
        
        FreeProgram();
        
        return 0;
    }

    bool InitProgram()
    {
        if(SDL_Init(SDL_INIT_EVERYTHING) == -1)
            return false;
        
        if(!graphics.init(SCREEN_WIDTH, SCREEN_HEIGHT, FULLSCREEN))
            return false;
        
        graphics.setTitle("Audio Test");
        
        if(!audio.init())
            return false;
        
<span class="comments">// Load these files<span class = "next">================</span></span>
        if(!background.load("graphics/background3.bmp", &amp;graphics))
            return false;
        
        if(!music.load("audio/Loop.wav"))
            return false;
        
        if(!sounds[0].load("audio/Ahh.wav"))
            return false;
        
        if(!sounds[1].load("audio/Beep.wav"))
            return false;
        
        if(!sounds[2].load("audio/Punch.wav"))
            return false;
        
        if(!sounds[3].load("audio/Scream.wav"))
            return false;
        
        if(!sounds[4].load("audio/Telephone.wav"))
            return false;
        
        input.init();
        
        return true;
    }
    
<span class="comments">// Garbage collection<span class = "next">================</span></span>
    void FreeProgram()
    {
        music.free();
        
        for(int i = 0; i &lt; 5; i++)
            sounds[i].free();
        
        background.free();
        
        graphics.kill();
        input.kill();
        audio.kill();
        SDL_Quit();
    }

    bool ProgramRunning()
    {
        SDL_Event event;
        
        while(SDL_PollEvent(&amp;event))
        {
            if(event.type == SDL_QUIT)
                return false;
        }
        
        return true;
    }</pre>
        
        <p>In our main file we first include the headers for all the class files we created.  Currently we have six header files: one for graphics, input, images, audio, music and sound.  To use any of our class functions we must first declare the objects for each of our objects, this is done in our global scope.
        
        <span class = "nl">We can proceed by creating functions to handle the: initialization, game loop, and garbage collection.  After declaring our main function we check to see if the initialization function is working, if it isn't remove all allocated memory using the 'FreeProgram()' function.</span>
        
        <span class = "nl">Here is where OOP becomes very convenient.  The amount of instructions within our 'while(ProgramRunning())' function can be greatly reduced by calling the memeber functions within our classes.</span>
        
        <span class = "nl">The input.update() function initializations the current state for each key pressed and stores it in an array.  It stores the state of the mouse movements as well.  Then it will check to see if the game is paused by seeing if the space bar key is pressed, this is to start and stop the music. </span>
        
        <span class ="nl">Still in our main loop we will handle graphics using our graphics member functions. The clear member function removes any allocated memory.  The draw function will draw whatever graphics we have to a surface.  The flip function will render that surface to our current game window. </span>
        
            <span class="nl">The last couple of lines of code will simple track the amount of frames our window is buffering per second.</span></p>
        
    <em>Code:</em>    
    <!-- code -->
    <pre class="code">
    <span class = "comments">// To compile this program from the command line</span>
    g++ -framework sdl2 -framework sdl2_mixer -framework sdl2_image 
    -std=c++11 -o audio 
    main.cpp audio.cpp image.cpp input.cpp graphics.cpp music.cpp sound.cpp</pre>
        
        
        <hr />        
        <br />
        <a href = "SDL21.html">Previous</a>
        <span class = "next">
            <a href = "SDL23.html">Next Page</a></span>
        <br /><br />

    </div>
    
       
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>

</html>    