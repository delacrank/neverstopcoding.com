<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Buffered Input Events - SDL Game Programming</title>
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

        <h1>Buffered Input Events - SDL Game Programming</h1>
        
        <h2>Buffered Input Events</h2>
        
            <p>This section talks about buffered input, a buffered input makes it so that our program can handle an input from anywhere in the program not just in our 'ProgramIsRunning' function.
        
        <span class = "nl">The benefit of a buffered input is that we don't have to go through the entire game loop to handle one single input.</span>
                
        <span class="nl">There are two functions which are used for our buffered input: 'SDL_GetMouseState(int *x, int *y)' and 'SDL_GetKeyState(int *numkeys)'.</span>
                
        <span class="nl">Let's look at some code for our buffered mouse state.</span>
              </p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    while(ProgramIsRunning)
    {
        int mouseX;
        int mouseY;
        
        SDL_GetMouseState(&amp;mouseX, &amp;mouseY);
        
        if(SDL_GetMouseState(NULL, NULL) &amp; SDL_BUTTON(1))
        {
            Cross1X = mouseX;
            Cross1Y = mouseY;
        }
        
        if(SDL_GetMouseState(NULL, NULL) &amp; SDL_BUTTON(3))
        {
            Cross2X = mouseX;
            Cross2Y = mouseY;
        }
        
        DrawImage(Background, Backbuffer, 0, 0);
        DrawImage(Cross1, Backbuffer, Cross1X - 50, Cross1Y - 50);
        DrawImage(Cross2, Backbuffer, Cross2X - 50, Cross2Y - 50);
        
        SDL_Delay(20);
        SDL_UpdateWindowSurface(Window);
    }</pre>
        
        <p>Here we are using the SDL_GetMouseState() function and passing the x and y coordinates and parameters.  In the function below we just assign the Cross1 x and y position if the button is pressed.  In this fashion we can actually drag the image because it is being rendered frame by frame rather than waiting on a function to call the event each time we want to render the bmp file.
        
        <span class = "nl">Below we just draw the images off the window and update our window to handle the changes being made.</span>
            
        <span class="nl">If we look at the code for the keyboard input, it will be similar in some aspects and different in others.</span>
              </p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    while(ProgramIsRunning())
    {
         Uint8* keys = (Uint8*)SDL_GetKeyboardState(NULL);

        if(keys[SDL_SCANCODE_ESCAPE])
            break;

        if(keys[SDL_SCANCODE_LEFT])
            SpriteX-=8;

        if(keys[SDL_SCANCODE_RIGHT])
            SpriteX+=8;

        if(keys[SDL_SCANCODE_UP])
            SpriteY-=8;

        if(keys[SDL_SCANCODE_DOWN])
            SpriteY+=8;

        DrawImage(Background,Backbuffer, 0, 0);
        DrawImage(SpriteImage, Backbuffer, SpriteX, SpriteY);

        SDL_Delay(20);
        SDL_UpdateWindowSurface(Window);
    }</pre>
        
        <p>Both codes are being ran in our main function and both of them use the SDLGetState function.  The difference is in how we are able to read the input from the keyboard as appose to the mouse.
        
        <span class ="nl">With the keyboard buffered input we will set a compound variable called keys to a Uint8 pointer type.  Then we can assign it to the function SDL_GetKeyboardState(NULL) passing a null pointer as the parameter.</span>
            
        <span class="nl">The SDL_GetKeyboardState function refers to an array with every key in the array being another element.  When we write our if statements we are checking to see if the element in our array is true or not, if it's true than our instruction is passed which will move the sprite 8 pixels in a direction along the x or y axis.</span>
              </p>
        <hr />        
        <br />
        <a href = "SDL12.html">Previous</a>
        <span class = "next">
            <a href = "SDL14.html">Next Page</a></span>
        <br /><br />

    </div>
    
       
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>


</body>

</html>    