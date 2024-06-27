<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Completing the Game Engine - SDL Game Programming</title>
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

        <h1>Completing the Game Engine - SDL Game Programming</h1>
        
        <h2>Completing the Game Engine</h2>
        
            <p>It's nice to have a class for each aspect of our game, one for graphics, sound, images, etc.  However, we still have a lot of code within our main.cpp file, so in order to shorten that and organize it some more we can create a class called game.
        
        <span class = "nl">The game class will act similar to our main.cpp in that it combines all of our classes. Let's first take a look at the header file.</span></p>     
        
    <em>Code:</em>
    <pre class="code">
    <span class = "comments">// Game.h file</span>
    #ifndef GAME_H
    #define GAME_H

    #include &lt;SDL2_ttf/SDL_ttf.h>

    #include "Graphics.h"
    #include "Input.h"
    #include "Audio.h"

    class Game
    {
    private:
        Graphics graphics;
        Input input;
        Audio audio;
        int fps;
        bool isDone;
        
    public:
        Game();
        ~Game();
    
        unsigned int getTicks();
        void setFPS(int f);
        void delay(int ticks);
        bool initSystem(char title[], int width, int height, bool fullscreen);
        void freeSystem();
        void run();
        void end();
    
        virtual bool init();
        virtual void free();
        virtual void update();
        virtual void draw(Graphics* g);
    
        Graphics* getGraphics();
        Input* getInput();
        Audio* getAudio();
    };

    #endif</pre>
        
        <p>Similar to our main.cpp file we declared several headers and created objects for each of those header files, we also declared the functions for each of those files.  Let's take a look into our Game.cpp file now to understand the functions.</p>
        
    <em>Code:</em>    
    <!-- code -->
    <pre class="code">
    <span class = "comments">// Game.cpp file</span>
    #include "Game.h"

<span class = "comments">// Game constructor initialize game loop boolean, fps <span class = "next">=================</span></span>
    Game::Game()
    {
        isDone = false;
        fps = 30;
    }

<span class = "comments">// Game destructor <span class = "next">=====================================</span></span>
    Game::~Game()
    {

    }

    unsigned int Game::getTicks()
    {
        return SDL_GetTicks();
    }

    void Game::setFPS(int f)
    {
        fps = f;
    }

    void Game::delay(int ticks)
    {
        if(ticks > 0)
            SDL_Delay(ticks);
    }

<span class = "comments">// SDL initialization <span class = "next">=====================================</span></span>
    bool Game::initSystem(char title[], int width, int height, bool    fullscreen)
    {
        if(SDL_Init(SDL_INIT_EVERYTHING) == -1)
            return false;
        
        if(!graphics.init(width, height, fullscreen))
            return false;
        
        graphics.setTitle(title);
    
        if(!audio.init());
            return false;
        
        input.init();
    
        if(TTF_Init() == -1)
            return false;
        
        return true;
    }

<span class = "comments">// Garbage Collection <span class = "next">=====================================</span></span>
    void Game::freeSystem()
    {
        graphics.kill();
        input.kill();
        audio.kill();
        TTF_Quit();
        SDL_Quit();
    }

<span class = "comments">// Main game loop <span class = "next">=====================================</span></span>
    void Game::run()
    {
        while(!isDone)
        {
            unsigned int frameStart = SDL_GetTicks();
            
            SDL_Event event;
            
            while(SDL_PollEvent(&amp;event))
            {
                if(event.type == SDL_QUIT)
                {
                    isDone = true;
                    break;
                }
            }
            
            input.update();
            update();
            draw(getGraphics());
            
            getGraphics()->flip();
            
            int frameTime = getTicks() - frameStart;
            int delayTime = (1000/fps) - frameTime;
        }
        
        free();
        freeSystem();
    }
    
<span class = "comments">// Quit game <span class = "next">=====================================</span></span>
    void Game::end()
    {
        isDone = true;
    }
    
    bool Game::init()
    {
        return initSystem("Game", 800, 600, false);
    }
    
    void Game::free()
    {
    
    }

    void Game::update()
    {
    
    }

    void Game::draw(Graphics* g)
    {
        g->clear(255, 255, 255);
    }

<span class = "comments">// Return graphics object <span class = "next">=========================</span></span>
    Graphics* Game::getGraphics()
    {
        return &amp;graphics;
    }
    
<span class = "comments">// Return input object <span class = "next">=========================</span></span>
    Input* Game::getInput()
    {
        return &amp;input;
    }
    
<span class = "comments">// Return audio object <span class = "next">=========================</span></span>
    Audio* Game::getAudio()
    {
        return &amp;audio;
    }</pre>
        
        <p>We start off the game file by simply declaring a constructor and a deconstructor, in our constructor we initialize two variables 'isDone' a boolean to false, and 'fps' an integer to 30 frames per second.
            
        <span class = "nl">Get ticks just returns the in game timer in terms of milliseconds, we can compare that variable to our framespersecond in order collerbrate that variable. Next, we create a delay function and the initialization function, which usually takes up a large portion of our main.cpp file.</span>
            
        <span class = "nl">'FreeSystem()' function works as garbage collection, since we already declared the objects within our header file we are free to use them in this cpp file.  We will use the member functions for each of our objects to collect any garbage from memory we no longer need.</span>
            
        <span class = "nl">Just like in our main functions we have to handle the in game loop which checks to see if the window has been closed.  We named this function 'run()', it also handles initialization of keys required for our inputs, drawing graphics to our surface and rendering that surface to our window.</span>
            
        <span class = "nl">Now let's take a look at the main.cpp file and what it should look like, now that we have organized our code.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// Main.cpp file</span>
    #include "Game.h"

    int main(int argc, char *argv[])
    {
        Game game;
    
        if(!game.init())
            game.free();
        
        game.run();
    
        return 0;
    }</pre>
        
        <p>The main.cpp file is reduced to 7 lines of code, we declare the 'Game' object and check to see if SDL is initialized using the member function 'init()', if not free all the memory using the member function 'free()'.  Then call the 'run()' function and are game should start as well as be able to close if we decide to close the window.</p>
        
        <hr />        
        <br />
        <a href = "SDL22.html">Previous</a>
        <span class = "next">
            <a href = "SDL24.html">Next Page</a></span>
        <br /><br />

    </div>
    
       
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>

</html>    