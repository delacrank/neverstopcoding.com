<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Adding Game states - SDL Game Programming</title>
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

        <h1>Adding Game states - SDL Game Programming</h1>
        
        <h2>Adding Game states to the Game Engine</h2>
        
            <p>The game states are just states of the game which we can use to under progression or change options.  For example you might want to give the player an option to open a menu, yet you need to stop the current state of the game in progress to do this.
        
        <span class = "nl">Let's see how we can add different states and even a manager to organize those states for our game engine.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// StateManager.h file</span>
    #ifndef STATEMANAGER_H
    #define STATEMANAGER_H
    
    #include &lt;stack>
    #include "GameState.h"
    #include "Graphics.h"
    
    class GameState;
    
    class StateManager
    {
    private:
        std::stack&lt;GameState*> states;
    public:
        StateManager(){};
        ~StateManager(){};
        
        void addState(GameState* s);
        void popState();
        void update();
        void draw(Graphics* g);
        bool isEmpty();
    };
    
    #endif</pre>
        
        <p>We can start with the header for the state manager, this will control the different states which can be accessed by the game.  We can store these states on a 'stack' in order to better control how we load and release them.
        
        <span class = "nl">The 'stack' data structure will provide us with the first in, last out control for storing and removing states.  We will also include functions for drawing the state using the graphics class or checking if there isn't a stateloaded with our boolean function.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// StateManager.cpp file</span>
    #include "StateManager.h"
    
    void StateManager::addState(GameState* s)
    {
        s->setManager(this);
        states.push(s);
    }
    
    void StateManager::popState()
    {
        states.pop();
    }
    
    void StateManager::update()
    {
        if(!states.empty())
        {
            if(states.top() != NULL)
            {
                states.top()->update();
            }
        }
    }
    
    void StateManager::draw(Graphics* g)
    {
        if(!states.empty())
        {
            if(states.top() != NULL)
            {
                states.top()->draw(g);
            }
        }
    }
    
    bool StateManager::isEmpty()
    {
        return states.empty();
    }</pre>
        
        <p>Now, let's take a look at another file, our 'GameState.h' file as well as the 'GameState.cpp' file which defines the functions declared in our header.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class = "code">
    <span class = "comments">// GameState.h file</span>
    #ifndef GAMESTATE_H
    #define GAMESTATE_H
    
    #include "StateManager.h"
    #include "Graphics.h"
    
    class StateManager;
    
    class GameState
    {
    private:
        StateManager* manager;
    
    public:
        GameState();
        ~GameState(){};
        
        virtual void update();
        virtual void draw(Graphics* g);
        
        StateManager* getManager();
        void setManager(StateManager* m);
    };
    
    #endif</pre>
        
        <p>Once again we add the graphics because we need to be able to draw the background for each of our different states, also the 'StateManager' header and class were included.  Now we can access member functions from our StateManager object.
        
        <span class = "nl">Let's take a look at the functions we just declared here in this header.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// GameState.cpp</span>
    #include "GameState.h"
    
    GameState::GameState()
    {
        manager = NULL;
    }
    
    void GameState::update()
    {
    
    }
    
    void GameState::draw(Graphics* g)
    {
    
    }
    
    StateManager* GameState::getManager()
    {
        return manager;
    }
    
    void GameState::setManager(StateManager* m)
    {
        manager = m;
    }</pre>
        
        <p>The constructor just initializaes the manager object to null, it's a pointer.  We have an interesting function which returns a pointer of type 'StateManager', this will be used to access the member functions of our 'StateManager'.  
        
        <span class = "nl">The last function, just assigns the manager to our 'StateManager'.  Let's take a look at a possible demo of what a state could look like.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// SplashState.h file</span>
    #ifndef SPLASH_STATE
    #define SPLASH_STATE
    
    #include "GameState.h"
    #include "Graphics.h"
    #include "Image.h"
    #include "Input.h"
    #include "Sound.h"
    
    class SplashState : public GameState
    {
    private:
        Input* input;
        Image backgroundImage;
        Image logoImage;
        Sound sound;
        
        int logoImageY;
        int logoImageX;
        bool soundPlayed;
        
        static const int TARGET_Y = 300;
    public:
        bool init(Input* i, StateManager* m, Graphics* g);
        void free();
        
        virtual void update();
        virtual void draw(Graphics* g);
    };
    
    #endif</pre>
        
        <p>Here we use inheritance in order to use the member functions from our GameState class 'update' and 'draw'.  Now, let's take a look at the member functions for this class which we will define in our 'SplashState.cpp' file.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class = "code">
    <span class = "comments">// SplashState.cpp file</span>
    #include "SplashState.h"
    
<span class = "comments">// Check to see that background, logo and sound have all loaded<span class = "next">=====</span></span>
    bool SplashState::init(Input* i, StateManager* m, Graphics* g)
    {
        input = i;
        setManager(m);
        
        if(!backgroundImage.load("graphics/graphics/splash/background.bmp", g))
            return false;
            
        if(!logoImage.load("graphics/graphics/splash/logo.bmp", g))
            return false;
            
        if(!sound.load("audio/audio/splash/sound.wav"))
            return false;
            
        logoImageY = -logoImage.getHeight();
        soundPlayed = false;
        
        return true;
    }
    
<span class = "comments">// Handle garbage collection<span class = "next">=======================</span></span>
    void SplashState::free()
    {
        logoImage.free();
        backgroundImage.free();
        sound.free();
    }
    
<span class = "comments">// Remove this state off the stack if a button is pressed<span class = "next">=================</span></span>
    void SplashState::update()
    {
        if(input->keyHit(SDL_SCANCODE_SPACE) 
        || input->keyHit(SDL_SCANCODE_ESCAPE)
        || input->keyHit(SDL_SCANCODE_RETURN))
        {
            getManager()->popState();
        }
        
        if(logoImageY &lt; TARGET_Y - logoImage.getHeight()/2)
        {
            logoImageY += 10;
        }
        else
        {
            if(!soundPlayed)
            {
                sound.play();
                soundPlayed = true;
            }
        }
    }

<span class = "comments">// Draw the graphics necessary for this state<span class = "next">======================</span></span>
    void SplashState::draw(Graphics* g)
    {
        backgroundImage.draw(0, 0, g);
        logoImage.draw(g->getWidth()/2 - logoImage.getWidth()/2, logoImageY, g);
    }</pre>
        
        <p>Really, all we did in this file was organize some images in a desired position and load a sound byte.  The interesting part of defining the member functions for our splash state class was, setting the controls for updating the state from one into the next 'update()'.
        
        <span class = "nl">Now, let's take a look at 'RunState.h' header file.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class = "code">
    <span class = "comments">// RunState.h file</span>
    #ifndef RUN_STATE
    #define RUN_STATE

    #include "GameState.h"
    #include "Graphics.h"
    #include "Image.h"
    #include "Input.h"

<span class = "comments">// Use inheritance for our update, draw functions</span>
    class RunState : public GameState
    {
    private:
        Input* input;
        Image backgroundImage;
        Image gearImage;
    
        static const int IMAGE_FRAMES = 5;
    
        int imageFrame;
        int frameCounter;

    public:
        bool init(Input* i, StateManager* m, Graphics* g);
        void free();
    
        virtual void update();
        virtual void draw(Graphics* g);
    };

    #endif</pre>
        
        <p>The run state controls the behavior of our state while it is actually up and running.  Once again we use inheritance in order to use our update and draw functions.
        
        <span class = "nl">Now, let's take a look at how we go on to define these functions in our 'RunState.cpp' file.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class = "code">
    <span class = "comments">// Runstate.cpp file</span>
    #include "RunState.h"

<span class = "comments">// Initialize the images for our run state<span class = "next">=============</span></span>
    bool RunState::init(Input* i, StateManager* m, Graphics* g)
    {
        input = i;
        setManager(m);
    
        if(!backgroundImage.load("graphics/graphics/run/background.bmp", g))
            return false;
            
        if(!gearImage.load("graphics/graphics/run/gear.bmp", 400, 400, g))
            return false;
        
            imageFrame = 0;
            frameCounter = 0;
        
        return true;
    }

    void RunState::free()
    {
        gearImage.free();
        backgroundImage.free();
    }

<span class = "comments">// Stop the run state<span class = "next">=============</span></span>
    void RunState::update()
    {
        if(input->keyHit(SDL_SCANCODE_ESCAPE))
        {
            getManager()->popState();
        }
    
        frameCounter++;
        
        <span class = "comments">// Animate the gear so it turns</span>
        if(frameCounter > 5)
        {
            frameCounter = 0;
            imageFrame++;
        
            if(imageFrame > IMAGE_FRAMES)
                imageFrame = 0;
        }
    }

<span class = "comments">// Draw the background for our run state<span class = "next">=======</span></span>
    void RunState::draw(Graphics* g)
    {
        backgroundImage.draw(0, 0, g);
        gearImage.draw(g->getWidth()/2 - gearImage.getFrameWidth()/2,
        g->getHeight()/2 - gearImage.getFrameHeight()/2, imageFrame, g);
    }</pre>
        
        <p>Here you can tell how easy it is to create a state and add images as well as input keys.  We simply need to call the member functions from our various classes and pass the variables necessary to create images, handle input or change states.
        
        <span class = "nl">We still several more files to look at, let's start with our 'GameStateDemo.h' header file and how the functions are defined in the 'GameStateDemo.cpp' file.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// GameStateDemo.h file</span>
    #include "Game.h"
    #include "StateManager.h"
    #include "RunState.h"
    #include "SplashState.h"
    
<span class = "comments">// Use inheritance for our 'Game' functions</span>
    class GameStateDemo : public Game
    {
    private:
        <span class = "comments">// Declare an object from these classes</span>
        StateManager manager;
        RunState runState;
        SplashState splashState;
        
    public:
        GameStateDemo();
        ~GameStateDemo();
        bool init();
        void free();
        void update();
        void draw(Graphics* g);
    };</pre>
        
        <p>Now let's take a look at the 'GameStateDemo.cpp' file and how we define the functions we just declared.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// GameStateDemo.h file</span>
    #include "GameStateDemo.h"
    
    GameStateDemo::GameStateDemo()
    {

    }

    GameStateDemo::~GameStateDemo()
    {

    }

    <span class = "comments">// Check that Game is properly initialized</span>
    bool GameStateDemo::init()
    {
        if(!initSystem("Game state demo", 800, 600, false))
            return false;
        
        if(!runState.init(getInput(), &amp;manager, getGraphics()))
            return false;
            
        if(!splashState.init(getInput(), &amp;manager, getGraphics()))
            return false;
            
        manager.addState(&amp;runState);
        manager.addState(&amp;splashState);
        
        return true;
    }
    
    <span class = "comments">// Garbage colletion</span>
    void GameStateDemo::free()
    {
        runState.free();
        splashState.free();
    }
    
    <span class = "comments">// Update the State</span>
    void GameStateDemo::update()
    {
        if(manager.isEmpty())
        {
            end();
            return;
        }
        
        manager.update();
    }
    
    <span class = "comments">// Draw the graphics</span>
    void GameStateDemo::draw(Graphics* g)
    {
        manager.draw(g);
    }</pre>
        
        <p>This concludes are section on working with the game engine. In the next several sections, I will go more in depth about working with tile maps and how to create levels using this medium.</p>
        
        <hr />        
        <br />
        <a href = "SDL23.html">Previous</a>
        <span class = "next">
            <a href = "SDL25.html">Next Page</a></span>
        <br /><br />

    </div>
    
       
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>

</html>    