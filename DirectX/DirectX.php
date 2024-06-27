<!DOCTYPE html>
<html>
    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <meta name="description" content="To create video games using the DirectX API for graphics, input, sound and much more. DirectX is used for Windows game programming." />
        <meta name="keywords" content="Directx, Game Programming, C++, Windows" />
        <meta name="author" content="Juan Arias" />
        <title>Setting Up - DirectX Game Development</title>
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
<?php include('..//Includes//Left_DirectX.php'); ?>

<!-- Right -->
    
    <div id ="rightz">

        <h1>Setting Up - DirectX Game Development</h1>
        
        <h2>Setting Up</h2>
        
            <p>In order to compile these programs make sure that you are using a Windows machine and most of the programs will be compiled from the 'command line'. For this you can download a compiler called 'MinGw' and use any text editor of your choosing.
        
    <span class = "nl">Typing in 'gcc' in the command line will allow you to check whether you installed it properly. You will have to go to MyComputer -> Properties -> Advanced -> Enviromental Variables -> Select 'Path'. From here add 'C:\MinGW\bin' to the end of the path or where ever you installed it.  Then if you close and open the command line, you should be able to compile using those tools. </span>
                
    <span class = "nl">In order to create Windows games using DirectX 9, we need to be able to create a 'Windowed' program. This requires us to know some windows programming. Furthermore, notice that DirectX 9 is an entire package of different programs which manage sound, graphics, input, networking.</span>
                
    <span class = "nl">Let's look at some of these libraries.</span></p>
        
    <ul id= "li">
        <li><b>Direct3D :</b> Rendering library provides access to the video card to render both 2D and 3D graphics.</li>
        <li><b>DirectSound :</b> Audio library used to play digit sound files.</li>
        <li><b>XACT :</b> newer audio library which supplements DirectSound.</li>
        <li><b>DirectInput :</b> Device library used to access keyboard, joystick and mouse devices.</li>
        <li><b>XInput :</b> An input libraru which provides support for Xbox 360 controller.</li>
        <li><b>DirectPlay :</b> an old networking library which is no longer supported.</li>
    </ul>
        
        <p>Let's start with a small program which will create a small windowed message box. The purpose of this program will be to test that your compiler works and to show you some basic Windows programming.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    #include &lt;windows.h>
    
    int WINAPI WinMain(HINSTANCE hInstance, HINSTANCE hPrevInstance, 
    LPSTR lpCmdLine, int nShowCmd)
    {
        MessageBox(Null, "Welcome to Windows programming",
        "Hello World", MB_OK | MB_ICONEXCLAMATION);
    }</pre>
        
        <p>Let's look more closely at this 'WinMain' function and understand the parameters and how they are used.  First we know that the function returns an integer. The 'HINSTANCE hInstance' parameter determines the amount of instances of the current 'window' are active.
        
    <span class = "nl">'HINSTANCE hPrevInstance' is used to identify the previous instance of our window.  If this instance is NULL we use this parameter to determine whether this is the first instance of our window.</span>
        
    <span class = "nl">'LPSTR lpCmdLine' parameter is used to pass in command line options, when running the window.</span>
        
    <span class = "nl">This last parameter 'int nCmdShow' displays the amount of options currently being used in the instance of the windowed application.</span></p>
        
        <hr />        
        <br />

        <span class = "next">
            <a href = "DirectX1.html">Next Page</a></span>
        <br /><br />

    </div>    
    
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>    