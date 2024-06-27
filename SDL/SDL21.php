<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Input Core - SDL Game Programming</title>
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

        <h1>Input Core - SDL Game Programming</h1>
        
        <h2>Input Core</h2>
        
            <p>Creating the header and class definitions for our input core will save us a lot of time in the long run.  Using this class we will be able to quickly and effeciently add both mouse and keyboard input functions to our program.
        
        <span class = "nl">Let's quickly take a look at some of the functions we will be defining in our input header.</span></p>
        
    <em>Header:</em>
     <!-- Header -->
    <pre class="code">
    #ifndef Input_h
    #define Input_h

    #include &lt;SDL2/SDL.h>

    class Input
    {
    private:
        bool* keys;
        bool* prevKeys;
        
        bool mouseKeys[3];
        bool prevMouseKeys[3];
        
        int numKeys;
        int mouseX;
        int mouseY;
    public:
        static const int MOUSE_LEFT = 1;
        static const int MOUSE_MIDDLE = 2;
        static const int MOUSE_RIGHT = 3;
        
        void init();
        void kill();
        void update();
        
        bool keyDown(int key);
        bool keyHit(int key);
        bool keyUp(int key);
        
        bool mouseDown(int key);
        bool mouseHit(int key);
        bool mouseUp(int key);
        
        int getMouseX();
        int getMouseY();
        void hideCursor(bool hide = true);
    };

    #endif</pre>
        
        <p>First we start off by defining two pointer boolean functions for our kets and prevKeys. These variables will represent the values used to store present and previously used keys.  Since input functions work by passing events when a key is press or released, we need to know the state of both.
        
        <span class ='nl'>In order to do this we can monitor both states by storing the values in a boolean array, if a key was just pressed it will set that 'prevKeys' value to true, and if that same key is released then the 'keys' value is set to true.</span>
        
        <span class = "nl">Events can be set if both boolean values are true, or if just one is pressed for holding down that keyboard key. We can reset these values by passing another function called the update function. Let's take a look at another private variabeld called numKeys.  This stores the values for all of the possible keys on we would want to use reguardless of the order in which they are pressed or released.</span>
        
    <span class = "nl">There are two more arrays and one last int variable.  The arrays will represent the mouse buttons being pressed or released, since there are only three 'left', 'right' and 'middle' we can set the array to 3 elements.</span>
        
    <span class = "nl">The two other variables mouseX and mouseY will determine the x and y coordinates for the actual location of the mouse itself.</span>
            
    <span class="nl">Now, let's take a look at some of our function definitions.</span>
          </p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    #include "Input.h"

    void Input::init()
    {
        Uint8* keyboard = (Uint8*)SDL_GetKeyboardState(&amp;numKeys);
        
        keys = new bool[numKeys];
        prevKeys = new bool[numKeys];
        
        for(int i = 0; i &lt; numKeys; i++)
        {
            keys[i] = keyboard[i];
            prevKeys[i] = false;
        }
        
        SDL_GetMouseState(&amp;mouseX, &amp;mouseY);
        
        for(int i = 1; i &lt;= 3; i++)
        {
            mouseKeys[i] = SDL_GetMouseState(NULL, NULL) &amp; SDL_BUTTON(i);
            prevMouseKeys[i] = false;
        }
    }

    void Input::kill()
    {
        delete[] keys;
        delete[] prevKeys;
    }

    void Input::update()
    {
        Uint8* keyboard = (Uint8*)SDL_GetKeyboardState(&amp;numKeys);
        
        for(int i = 0; i &lt; numKeys; i++)
        {
            prevKeys[i] = keys[i];
            keys[i] = keyboard[i];
        }
        
        SDL_GetMouseState(&amp;mouseX, &amp;mouseY);
        
        for(int i = 1; i &lt;= 3; i++)
        {
            prevMouseKeys[i] = mouseKeys[i];
            mouseKeys[i] = SDL_GetMouseState(NULL, NULL) & SDL_BUTTON(i);
        }
    }

    bool Input::keyDown(int key)
    {
        if(key &lt; 0 || key > numKeys)
            return false;
        
        return keys[key];
    }
    
    bool Input::keyHit(int key)
    {
        if(key &lt; 0 || key > numKeys)
            return false;
        
        return (keys[key] &amp;&amp; !prevKeys[key]);
    }
    
    bool Input::keyUp(int key)
    {
        if(key &lt; 0 || key > numKeys)
            return false;

        return (prevKeys[key] &amp;&amp; !keys[key]);
    }

    bool Input::mouseDown(int key)
    {
        if(key &lt; 0 || key > 3)
            return false;
        
        return mouseKeys[key];
    }

    bool Input::mouseHit(int key)
    {
        if(key &lt; 0 || key > 3)
            return false;
        
        return (mouseKeys[key] &amp;&amp; !prevMouseKeys[key]);
    }
    
    bool Input::mouseUp(int key)
    {
        if(key &lt; 0 || key > 3)
            return false;
        
        return (mouseKeys[key] &amp;&amp; !prevMouseKeys[key]);
    }

    int Input::getMouseX()
    {
        return mouseX;
    }

    int Input::getMouseY()
    {
        return mouseY;
    }

    void Input::hideCursor(bool hide)
    {
        if(hide)
            SDL_ShowCursor(SDL_DISABLE);
        else
            SDL_ShowCursor(SDL_ENABLE);
    }</pre>
        
        <p>The first function is init() it returns no value, rather it initializes some of the private variables similar to the way a constructor would.  First it assigns a short int pointer equal to a keyboard variable.  This variable will hold the values of any keyboard button pressed.
        
        <span class = "nl">Next, we assign keys and prevKeys to boolean arrays which will hold the amount of elements necessary for every key on the keyboard.  Using a 'new' function allocates the memory for these variables on the heap, making them easier to access later on.</span>
            
        <span class="nl">We have our arrays but we haven't initialized the elements in our arrays to anything, in order to do this we created a for loop to intialize every key equal to a key which SDL can understand.  This was done previously when we initialized the short int keyboard pointer using SDL_GetKeyboardState() function. We also took this opportunity to initalize every prevKey state to false.</span>
            
        <span class="nl">Next we initialize the mouse by setting the mouseX and mouseY variables to the current coordinates using the SDL_GetMouseState() function.  In order to set the mouseKeys we will pass the SDL_MouseState along with the SDL_Button() function.  Here we make use of a bitwise operator which compares the binary values of our mouseState and button to return only the ones which match.</span>
            
        <span class="nl">Our kill function just deletes the keys and prevKeys memory we allocated earlier on to the heap.</span>
            
        <span class="nl">The update function just sets the previous false key values equal to the current true value for each key or mouse button we have pressed.</span>
            
        <span class="nl">KeyDown function can be used to return the state of any key we press, it also checks to ensure that the keys we press have been initialized by SDL. KeyHit compares a key currently pressed but not yet released, this is also true for the mouse functions.  keyUp and mouseUp do the opposite they check the state of the button currently released and compare it to a false value of the key currently pressed.  If the release state of the key is true and the pressed state is false, then we know the button was just released.</span>
            
        <span class="nl">Let's look at our main function and see how we use these classes in our demo.</span>
        </p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    #include "Graphics.h"
    #include "Image.h"
    #include "Input.h"

<span class="comments">// Define Global Variables<span class = "next">==============</span></span>
    const int FPS = 30;
    const int FRAME_TIME = 1000/FPS;
    const int SCREEN_WIDTH = 800;
    const int SCREEN_HEIGHT = 600;
    const int FULLSCREEN = false;
    const int SPRITE_SPEED = 10;

<span class="comments">// Declare class objects<span class = "next">==============</span></span>
    Graphics graphics;
    Input input;
    Image sprite;
    Image background;

<span class="comments">// Declare global function<span class = "next">==============</span></span>
    bool InitProgram();
    void FreeProgram();
    bool ProgramRunning();

    int main(int argc, char *argv[])
    {
<span class="comments">// Set starting coordinates for our sprite<span class = "next">==============</span></span>
        int spriteX = 300;
        int spriteY = 300;
        
        if(!InitProgram())
        {
            FreeProgram();
            return 0;
        }
        
        while(ProgramRunning())
        {
            input.update();
            
            if(input.keyDown(SDLK_ESCAPE))
                break;
            
            int frameStart = SDL_GetTicks();
            
<span class="comments">// Move sprite to these coordinates, holding the mouse button<span class = "next">==========</span></span>
            if(input.mouseDown(Input::MOUSE_LEFT))
            {
                spriteX = input.getMouseX();
                spriteY = input.getMouseY();
            }

<span class="comments">// Move sprite to these coordinates clicking mouse button<span class = "next">==============</span></span>
            if(input.mouseHit(Input::MOUSE_RIGHT))
            {
                spriteX = input.getMouseX();
                spriteY = input.getMouseY();
            }
            
<span class="comments">// Move sprite up holding up key, relative to sprite speed<span class = "next">==========</span></span>
            if(input.keyDown(SDL_SCANCODE_UP))
                spriteY -= SPRITE_SPEED;
            
<span class="comments">// Ditto down<span class = "next">==============</span></span>
            if(input.keyDown(SDL_SCANCODE_DOWN))
                spriteY += SPRITE_SPEED;
            
<span class="comments">// Ditto left<span class = "next">==============</span></span>
            if(input.keyDown(SDL_SCANCODE_LEFT))
                spriteX -= SPRITE_SPEED;
            
<span class="comments">// Ditto right<span class = "next">==============</span></span>
            if(input.keyDown(SDL_SCANCODE_RIGHT))
                spriteX += SPRITE_SPEED;
            
            graphics.clear(0, 0, 0);
            
            background.draw(0, 0, &amp;graphics);
            
<span class="comments">// Draw sprite to backbuffer<span class = "next">==============</span></span>
            sprite.draw(spriteX, spriteY, &amp;graphics);
            
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
        
        graphics.setTitle("Input Test");
        
        if(!sprite.load("graphics/spaceship.bmp", 150, 120, &amp;graphics))
            return false;
        
        if(!background.load("graphics/background.bmp", &amp;graphics))
            return false;
        
        input.init();
        
        return true;
    }

    void FreeProgram()
    {
        sprite.free();
        background.free();
        graphics.kill();
        input.kill();
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
        
        <p>You should be able to understand the program with the comments.  In our next section let's talk about working with sound.</p>
        
        <hr />        
        <br />
        <a href = "SDL20.html">Previous</a>
        <span class = "next">
            <a href = "SDL22.html">Next Page</a></span>
        <br /><br />

    </div>
    
       
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>

</html>    