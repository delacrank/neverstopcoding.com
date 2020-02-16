<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>First Game - SDL Game Programming</title>
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

        <h1>First Game - SDL Game Programming</h1>
        
        <h2>Our first Game</h2>
        
            <p>So the first game we will look at is a game called based after 'Pong'.  It is similar to playing ping pong where the object is to get the ball pass your opponents paddle.
        
        <span class = "nl">Some of the game mechanics we will be learning in this example game are: Artifical Intelligence, Collison Dectection, and simple Phyics.  The artifical intelligence will determine how the opponents reacts to your movements in the game. Collision dectection makes it so that objects can't pass through each other, for our game those objects are the ball and the paddles. Physics determines the speed and trajectory of the ball when in comes in contact with the walls and our paddles.</span>
                
        <span class="nl">In addition to those topics we will also be incorportating elements from our previous tutorials such as handling images, sounds, events, fps (frames per second) and displaying fonts.</span>
                
        <span class="nl">So let's get to it, try not to be intimated by the size of the file.</span>
              </p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    #include &lt;SDL2/SDL.h>
    #include &lt;SDL2_ttf/SDL_ttf.h>
    #include &lt;SDL2_mixer/SDL_mixer.h>
    #include &lt;iostream>
    #include &lt;cstdlib>
    #include &lt;stdio.h>


<span class="comments">// Declare Global Variables</span><span class="next">============================</span>
    const int SCREEN_WIDTH = 800;
    const int SCREEN_HEIGHT = 600;

    const int PADDLE_WIDTH = 20;
    const int PADDLE_HEIGHT = 100;
    const int BALL_WIDTH = 20;
    const int BALL_HEIGHT = 20;
    const int BALL_MAX_SPEED = 20;

    const int PLAYER_PADDLE_X = PADDLE_WIDTH;
    const int ENEMY_PADDLE_X = SCREEN_WIDTH - PADDLE_WIDTH*2;
    
    const int PLAYER_SPEED = 10;
    const int ENEMY_SPEED = 10;
    
    const int FPS = 30;
    const int FRAME_DELAY = 1000/FPS;

    SDL_Window* Window = NULL;

    SDL_Surface *Backbuffer = NULL;
    SDL_Surface *BackgroundImage = NULL;
    SDL_Surface *BallImage = NULL;
    SDL_Surface *PlayerPaddleImage = NULL;
    SDL_Surface *EnemyPaddleImage = NULL;

    TTF_Font *GameFont = NULL;

    Mix_Chunk *BallBounceSound = NULL;
    Mix_Chunk *BallSpawnSound = NULL;
    Mix_Chunk *PlayerScoreSound = NULL;
    Mix_Chunk *EnemyScoreSound = NULL;
    
    Mix_Music *GameMusic = NULL;

    int PlayerScore;
    int EnemyScore;
    
    int BallXVel;
    int BallYVel;

    SDL_Rect PlayerPaddleRect;
    SDL_Rect EnemyPaddleRect;
    SDL_Rect BallRect;

    SDL_Surface* LoadImage(char* fileName);
    void DrawImage(SDL_Surface* image, SDL_Surface* destSurface, int x, int y);
    void DrawText(SDL_Surface* surface, char* string, int x, int y,
    TTF_Font* font, Uint8 r, Uint8 g, Uint8 b);
    bool ProgramIsRunning();
    bool LoadFiles();
    void FreeFiles();
    bool RectsOverlap();
    bool InitSDL();
    void ResetGame();
    bool InitGame();
    void UpdatePlayer();
    void UpdateAI();
    void UpdateBall();
    void RunGame();
    void DrawGame();
    void FreeGame();

    int main(int argc, char *argv[])
    {
<span class="comments">// Check to see if Initialization successful</span><span class="next">========================</span>
        if(!InitGame())
        {
            FreeGame();
            return 0;
        }
        
<span class="comments">// Set frame rate &amp; Run game functions</span><span class="next">============================</span>
        while(ProgramIsRunning())
        {
            long int oldTime = SDL_GetTicks();
            SDL_FillRect(Backbuffer, NULL, 0);
            RunGame();
            DrawGame();
            
            int frameTime = SDL_GetTicks() - oldTime;
            
            if(frameTime &lt; FRAME_DELAY)
                SDL_Delay(FRAME_DELAY - frameTime);
            
            SDL_UpdateWindowSurface(Window);
        }
        
        FreeGame();
        
        return 0;
    }

<span class="comments">// Convert Images to SDL format</span><span class="next">============================</span>
    SDL_Surface* LoadImage(char* fileName)
    {
        SDL_Surface* imageLoaded = NULL;
        SDL_Surface* processedImage = NULL;
        
        imageLoaded = SDL_LoadBMP(fileName);
        
        if(imageLoaded != NULL)
        {
            processedImage = SDL_ConvertSurface(imageLoaded, Backbuffer->format, 0);
            SDL_FreeSurface(imageLoaded);
            
            if(processedImage !=  NULL)
            {
                Uint32 colorKey = SDL_MapRGB(processedImage->format, 0xFF, 0, 0xFF);
                SDL_SetColorKey(processedImage, SDL_TRUE, colorKey);
            }
        }
        
        return processedImage;
    }

<span class="comments">// Draw Images along x and y axises</span><span class="next">============================</span>
    void DrawImage(SDL_Surface* image, SDL_Surface* destSurface, int x, int y)
    {
        SDL_Rect destRect;
        destRect.x = x;
        destRect.y = y;
        
        SDL_BlitSurface( image, NULL, destSurface, &amp;destRect);
    }

<span class="comments">// Function for rendering fonts</span><span class="next">============================</span>
    void DrawText(SDL_Surface* surface, char* string, int x, int y,
    TTF_Font* font, Uint8 r, Uint8 g, Uint8 b)
    {
        SDL_Surface* renderedText = NULL;
        SDL_Color color;
        
        color.r = r;
        color.g = g;
        color.b = b;
        
        renderedText = TTF_RenderText_Solid( font, string, color );
        
        SDL_Rect pos;
        
        pos.x = x;
        pos.y = y;
        
        SDL_BlitSurface( renderedText, NULL, surface, &amp;pos);
        SDL_FreeSurface(renderedText);
    }

<span class="comments">// Keep Window open unless esc is pressed</span><span class="next">=====================</span>
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
                if(event.key.keysym.sym == SDLK_ESCAPE)
                {
                    running = false;
                }
            }
        }
        
        return running;
    }

<span class="comments">// Load Images, Font and Sound files</span><span class="next">============================</span>
    bool LoadFiles()
    {
        BackgroundImage = LoadImage("graphics/background.bmp");
        BallImage = LoadImage("graphics/ball.bmp");
        PlayerPaddleImage = LoadImage("graphics/player.bmp");
        EnemyPaddleImage = LoadImage("graphics/enemy.bmp");
        
        if(BackgroundImage == NULL)
            return false;
        if(BallImage == NULL)
            return false;
        if(PlayerPaddleImage == NULL)
            return false;
        
        GameFont = TTF_OpenFont("graphics/alfphabet.ttf", 30);
        
        BallBounceSound = Mix_LoadWAV("audio/ballBounce.wav");
        BallSpawnSound = Mix_LoadWAV("audio/ballSpawn.wav");
        PlayerScoreSound = Mix_LoadWAV("audio/playerScore.wav");
        EnemyScoreSound = Mix_LoadWAV("audio/enemyScore.wav");
        
        if(BallBounceSound == NULL)
            return false;
        if(BallSpawnSound == NULL)
            return false;
        if(PlayerScoreSound == NULL)
            return false;
        if(EnemyScoreSound == NULL)
            return false;
        
        GameMusic = Mix_LoadMUS("audio/song.ogg");
        
        if(GameMusic == NULL)
            return false;
        
        return true;
    }

<span class="comments">// Release files from memory</span><span class="next">============================</span>
    void FreeFiles()
    {
        SDL_FreeSurface(BackgroundImage);
        SDL_FreeSurface(BallImage);
        SDL_FreeSurface(PlayerPaddleImage);
        SDL_FreeSurface(EnemyPaddleImage);
        
        TTF_CloseFont(GameFont);
        
        Mix_FreeChunk(BallBounceSound);
        Mix_FreeChunk(BallSpawnSound);
        Mix_FreeChunk(PlayerScoreSound);
        Mix_FreeChunk(EnemyScoreSound);
        
        Mix_FreeMusic(GameMusic);
    }

<span class="comments">// Collision dectection for ball and paddle</span><span class="next">=======================</span>
    bool RectsOverlap(SDL_Rect rect1, SDL_Rect rect2)
    {
        if(rect1.x >= rect2.x + rect2.w)
            return false;
        
        if(rect1.y >= rect2.y + rect2.h)
            return false;
        
        if(rect2.x >= rect1.x + rect1.w)
            return false;
        
        if(rect2.y >= rect1.y + rect1.h)
            return false;
        
        return true;
    }

<span class="comments">// Initialize SDL, Sound, and Font libraries</span><span class="next">=========================</span>
    bool InitSDL()
    {
        if(SDL_Init(SDL_INIT_EVERYTHING) == -1)
            return false;
        
        if(SDL_Init(SDL_INIT_EVERYTHING) &lt; 0)
        {
            return 0;
        }
        
        Window = SDL_CreateWindow("Interesting",
                                 SDL_WINDOWPOS_UNDEFINED,
                                 SDL_WINDOWPOS_UNDEFINED,
                                 800, 600, SDL_WINDOW_SHOWN);
        
        Backbuffer = SDL_GetWindowSurface(Window);
        
        if(Mix_OpenAudio(22050, MIX_DEFAULT_FORMAT, 2, 1024) == -1)
        {
            return 0;
        }
        
        if(TTF_Init() == -1)
        {
            return 0;
        }
        
        if(Backbuffer == NULL)
            return false;
        
        return true;
    }

<span class="comments">// Set Paddles and Ball in correct location</span><span class="next">======================</span>
    void ResetGame()
    {
        PlayerPaddleRect.x = PLAYER_PADDLE_X;
        PlayerPaddleRect.y = SCREEN_HEIGHT/2 - PADDLE_HEIGHT/2;
        PlayerPaddleRect.w = PADDLE_WIDTH;
        PlayerPaddleRect.h = PADDLE_HEIGHT;
        
        EnemyPaddleRect.x = ENEMY_PADDLE_X;
        EnemyPaddleRect.y = SCREEN_HEIGHT/2 - PADDLE_HEIGHT/2;
        EnemyPaddleRect.w = PADDLE_WIDTH;
        EnemyPaddleRect.h = PADDLE_HEIGHT;
        
        BallRect.x = SCREEN_WIDTH/2 - BALL_WIDTH/2;
        BallRect.y = SCREEN_HEIGHT/2 - BALL_HEIGHT/2;
        BallRect.w = BALL_WIDTH;
        BallRect.h = BALL_HEIGHT;
        
        BallXVel = rand()%BALL_MAX_SPEED + 1;
        
        BallYVel = (rand()%BALL_MAX_SPEED*2 + 1) - BALL_MAX_SPEED;
        
        if(rand()%2 == 0)
            BallXVel *= -1;
        
        Mix_PlayChannel(-1, BallSpawnSound, 0);
    }

<span class="comments">// Set Music, Scores, Files, and Initialization</span><span class="next">==================</span>
    bool InitGame()
    {
        if(!InitSDL())
            return false;
        if(!LoadFiles())
            return false;
        
        PlayerScore = 0;
        EnemyScore = 0;
        
        ResetGame();
        Mix_PlayMusic(GameMusic, -1);
        
        return true;
    }

<span class="comments">// Update Player Movements</span><span class="next">============================</span>
    void UpdatePlayer()
    {
        Uint8 *keys = (Uint8*)SDL_GetKeyboardState(NULL);
        
        if(keys[SDL_SCANCODE_UP])
            PlayerPaddleRect.y -= PLAYER_SPEED;
        
        if(keys[SDL_SCANCODE_DOWN])
            PlayerPaddleRect.y += PLAYER_SPEED;
        
        if(PlayerPaddleRect.y &lt; 0)
            PlayerPaddleRect.y = 0;
        
        if(PlayerPaddleRect.y > SCREEN_HEIGHT-PlayerPaddleRect.h)
            PlayerPaddleRect.y = SCREEN_HEIGHT-PlayerPaddleRect.h;
        
       }

<span class="comments">// Update Enemy Artifical Intelligence</span><span class="next">============================</span>
    void UpdateAI()
    {
        if((EnemyPaddleRect.y + EnemyPaddleRect.h/2) > (BallRect.y+BallRect.h/2))
            EnemyPaddleRect.y -= ENEMY_SPEED;
        
        if((EnemyPaddleRect.y + EnemyPaddleRect.h/2) &lt; (BallRect.y+BallRect.h/2))
            EnemyPaddleRect.y += ENEMY_SPEED;
        
        if(EnemyPaddleRect.y &lt; 0)
            EnemyPaddleRect.y = 0;
        
        if(EnemyPaddleRect.y > SCREEN_HEIGHT-EnemyPaddleRect.h)
            EnemyPaddleRect.y = SCREEN_HEIGHT-EnemyPaddleRect.h;
    } 
    
<span class="comments">// Determine the Physics for the ball &amp; Collision reactions</span><span class="next">============</span>
    void UpdateBall()
    {
        BallRect.x += BallXVel;
        BallRect.y += BallYVel;
        
        if(RectsOverlap(BallRect, PlayerPaddleRect))
        {
            BallXVel = rand()%BALL_MAX_SPEED + 1;
            Mix_PlayChannel(-1, BallBounceSound, 0);
        }
        
        if(RectsOverlap(BallRect, EnemyPaddleRect))
        {
            BallXVel = (rand()%BALL_MAX_SPEED + 1) * -1;
            Mix_PlayChannel(-1, BallBounceSound, 0);
        }
        
        if(BallRect.y &lt; 0)
        {
            BallRect.y = 0;
            BallYVel = rand()%BALL_MAX_SPEED + 1;
            Mix_PlayChannel(-1, BallBounceSound, 0);
        }
            
        if(BallRect.y > SCREEN_HEIGHT - BallRect.h)
        {
            BallRect.y = SCREEN_HEIGHT - BallRect.h;
            BallYVel = (rand()%BALL_MAX_SPEED + 1)* -1;
            Mix_PlayChannel(-1, BallBounceSound, 0);
        }
        
        if(BallRect.x > SCREEN_WIDTH)
        {
            PlayerScore++;
            Mix_PlayChannel(-1, PlayerScoreSound, 0);
            ResetGame();
        }
        
        if(BallRect.x &lt; 0-BallRect.h)
        {
            EnemyScore++;
            Mix_PlayChannel(-1, EnemyScoreSound, 0);
            ResetGame();
        }
    }

<span class="comments">// Call the Player, Artifical Intelligence and Ball Physics functions</span><span class="next">=========</span>
    void RunGame()
    {
        UpdatePlayer();
        UpdateAI();
        UpdateBall();
    }

<span class="comments">// Render Images &amp; Text to the screen in correct locations</span><span class="next">===============</span>
    void DrawGame()
    {
        DrawImage(BackgroundImage, Backbuffer, 0, 0);
        DrawImage(BallImage, Backbuffer, BallRect.x, BallRect.y);
        DrawImage(PlayerPaddleImage, Backbuffer, PlayerPaddleRect.x, PlayerPaddleRect.y);
        DrawImage(EnemyPaddleImage, Backbuffer, EnemyPaddleRect.x, EnemyPaddleRect.y);
        
        char playerHUD[64];
        char enemyHUD[64];
        
        sprintf(playerHUD, "Player Score: %d", PlayerScore);
        sprintf(enemyHUD, "Enemy Score: %d", EnemyScore);
        
        DrawText(Backbuffer, playerHUD, 0, 1, GameFont, 64, 64, 64);
        DrawText(Backbuffer, enemyHUD, 0, 30, GameFont, 64, 64, 64);
    }

<span class="comments">// Garbage collection &amp; Quit: SDL, Audio,  and font libs</span><span class="next">=================</span>
    void FreeGame()
    {
        SDL_DestroyWindow(Window);
        Mix_HaltMusic();
        FreeFiles();
        Mix_CloseAudio();
        TTF_Quit();
        SDL_Quit();
    }</pre>

        <br />
        <hr />
        
    <!-- global variables -->
    <h3>Global Variables</h3>
        
        <p>Alright, I suppose we can go over this code function by function.  The first thing we do is declare a bunch of global variables let's go over those first.
        
        <span class = "nl">Screen height set at 600 will also determine how far our 'Y coordinate' can span, Screen width at 800 determines the length of our 'X coordinate'.</span>
            
        <span class="nl">Paddle width set to 20 which is 2.5 percent of our screen width.  We can fit 40 paddles from the beginning of the screen to the end of it.  If we look at the paddle height it is set at 100 which is 16.66 percent of the height, we can fit 6 paddles between the top and bottom of the screen. </span>
            
        <span class="nl">Next we set the measurements for the ball, it is equal 20 height by 20 width, big enough for us to see it but small enough to make the game challenging.  The speed is also set at 20, so it will travel at a rate of 20 pixels per frame, that is equal to the size of the ball itself.</span>
            
        <span class="nl">The next two variables determine the location on the 'x axis' for the player and enemy paddles.  We set the player paddle equal to the paddle width, so this means it will be 20 pixels forward from the left side of the screen.  For the enemy paddle we set it to the screen_width minus two of the paddle_widths, so it will be set at 40 pixels from the right of the screen.  However, because objects in SDL are draw from left to right this computation is taking into account the width of the paddle itself.</span>
            
        <span class="nl">Player speed and enemy speed determine how fast we can move our paddles along the 'y axis'.  FPS is just the frames per second, this will be determined by 'SDL_GetTicks()'.</span>
            
        <span class="nl">Most of the other variables we have used before so I will skip the part about using the surfaces to draw our images on to.  We also add variables for storing our font, sound effects and sound track.</span>

        <span class="nl">We use to variables to determine our player and enemy score.  Beneath this we store the velocity for the x and y coordinates of the ball.  These are important in determine the angle at which the ball travels, by increasing the speed of the x coordinate and decreasing the speed of the y coordinate, the ball will travel at a more linear angel.  If we increase the rate of y velocity over x velocity then the ball will travel more vertically.</span>
            
        <span class="nl">The last couple of coordinates is how we set the position for our ball and paddles on the screen, using SDL_Rect.</span>
        </p>
        
    <hr />
        
    <!-- Initialization -->
    <h3>Initialization</h3>
        
        <p>We can talk about initializing all of the necessary tools for our program.
        
        <span class = "nl">Our main function stores the initialization phase of the program in a function called 'InitGame()', so let's look for it first. It is located beneath LoadImage, DrawImage, DrawText, ProgramIsRunning, LoadFiles, FreeFiles, RectsOverlap, InitSDL and ResetGame functions. </span>
            
        <span class="nl">So InitGame will return one of two true false values based on InitSDL and LoadFiles functions.  It also calls the ResetGame function and starts the music as well as initializing the score for both the enemy and the player to zero.</span>
            
        <span class="nl">If we go up two functions to InitSDL, we will see our SDL_Init(SDL_INITI_EVERYTHING) function, Window Creation, Backbuffer initialization, Mix_OpenAudio function and our TTF_Init function.  If any of these functions fail to initialize the necessary libraries then our main function will free all the files and close the game. </span>
            
        <span class="nl">The other function LoadFiles, checks to see that our images, fonts and sounds are loaded properly, if any of those files couldn't be located or failed to load then are game will also close. </span>
              </p>
        
    <hr />
    
    <!--  ProgramIsRunning -->   
    <h3>Main Loop</h3>
        
        <p>Our next function will take place while our window is open, which means the player hasn't quit the game. It is the 'while(ProgramIsRunning)' condtion.  Inside we initialize a variable called oldTime to SDL_GetTicks().
            
        <span class="nl">Then we use FillRect to set our window equal to the backbuffer (SDL_GetWindowSurface). Following this will we called our RunGame and DrawGame functions.  I will create a talk about RunGame function soon but DrawGame function just draws the images to the locations corresponding to the variables we declared earlier for our enemy paddle, player paddle, ball and font.</span>
        
        <span class = "nl">SDL_GetTicks() represents the time since SDL has been initialized in milliseconds.  There are 1000, milliseconds in 1 second and 60,000 milliseconds in 1 minute, so if we divide this number by a 1000 we can convert it to seconds.</span>
            
        <span class="nl">Earlier in our declaration of global variables we divided a thousand by our FPS (set to 30). We want to delay our frames to 30 per second. Then update the WindowSurface to the rate of our frame delay.</span>
            
        <span class="nl">Next, let's check our ProgramIsRunning function, because it has to be true in order to even consider any type of frame handling.</span>
            
        <span class="nl">All it does is check to see if the x has been clicked closing the window, or if the player has pressed the esc button.</span>
              </p>
        
    <hr />    
        
    <!-- runGame -->
    <h3>RunGame</h3>
        
        <p>The RunGame function is the meat of our game, it controls the behavior of our player controls, AI controls and the physics for the ball movements.
        
        <span class="nl">Let's first look UpdatePlayer function.  We use events for just two constrols either player presses the up key up and we decrement our y axis based on the player speed variable which is set to 10.  Or the player pressed the down key to which we would increment the y axis based on the player speed.</span>
            
        <span class="nl">If the paddle reaches the top of the screen or less than zero on the y axis then we set the paddle's y axis equal to just zero.  This means everytime the player moves the paddle up again the paddle will be reset to zero on the y axis.  We did the same for the paddle if it goes below the screen height or 600 minus the actual hieght of the paddle.  Of course we don't want a section of the paddle to go missing in our game : ). </span>  
            
        <span class="nl">The next function is the Enemy AI, this is simple enough and based on the location of the ball. If the enemie's paddle is lower than the height of the ball then we subtract from the enemie's y axis to bring the paddle up. </span>
            
        <span class="nl">However, if the enemie's paddle is higher than the ball then we need to add to the enemie's y axis to lower the paddle to the ball.  The paddle will only move in increments relative to the enemy speed, so for now its 7 pixels per frame.  If the screen is 600 pixels tall then it will take 85 movements for it to traverse from the top to the bottom or vice vera.</span> </p>
        
    <hr />    
        
    <!-- UpdateBall -->
    <h3>UpdateBall</h3>
            
        <p>The last function determines the physics for the ball.  The first thing we do is set the ball x and y position equal itself plus to the position of the ball's x and y velocity.  This makes the ball a dynamic object. 
            
        <span class="nl">One of the first functions we cover is the collison dectection, this checks to see if the ball's x axis is less than the player's x axis.  If it is less then we want to reverse the direction of the ball, we can do this by adding the Ball_Speed to our ball's position.</span>
            
        <span class="nl">What if the ball hits an enemy paddle, we would want to substract the x axis of the ball, in order to do this we can take the ball speed and multiply it by negative one.</span>
            
        <span class="nl">The next two functions cover the behavior of the ball if it touches the bottom or top of the screen.  Similar to when the ball hits the enemy paddle we just subtract the y axis if the ball has hit the bottom of the screen or add if it hits the top of the screen (relative to the speed of the ball).</span>
            
        <span class="nl">The next two functions covers what happens if the ball passes the player side or falls below zero on the x axis.  We just add one to the enemy score and call the resetGame function.  The resetGame function just repositions the ball and the paddles.</span>
            
        <span class="nl">If the ball passes the x axis on the enemie's side or goes over 800, then we add one to the players score and reset the game again.</span>
        </p>
        
        
        <hr />        
        <br />
        <a href = "SDL15.html">Previous</a>
        <span class = "next">
            <a href = "SDL17.html">Next Page</a></span>
        <br /><br />

    </div>
    
       
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>


</body>

</html>    