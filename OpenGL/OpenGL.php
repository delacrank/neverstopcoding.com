<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <meta name="description" content="Create beautiful graphical programs using the OpenGL API. Create for 3D rendering or even 2D, used in many popular games as an alternative to window's direct3D API." />
        <meta name="keywords" content="OpenGL, graphics, programming" />
        <meta name="author" content="Juan Arias" />  
        <title>Introduction to OpenGL Graphics Programming</title>
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
<?php include('..//Includes//Left_OpenGL.php'); ?>

<!-- Right -->
    
    <div id ="rightz">

        <h1>Introduction to OpenGL Graphics Programming</h1>
        
        <h2>What is OpenGL</h2>
        
            <p>OpenGL is a graphics library used for creating 3D graphics in either Windows, Linux or Mac.  Windows has their own 3D graphics library called Direct3D which allows the rendering of 3D graphics PC's using the windows OS.  However, there is a lot of information online about why people decide to use one over the other <a href="http://programmers.stackexchange.com/questions/60544/why-do-game-developers-prefer-windows" target = "_blank">example</a>.  
                
        <span class = "nl"> The reason i have choosen to use OpenGL for my game development is because I prefer to work on either a mac or a linux machine.</span>
                
        <span class = "nl"> Before getting started you should also know that there will be several libraries which need to be downloaded and built.  I will share the links for those as well as the link I used to build them.  Notice, I am using a mac so I will show only how I built the files necessary for compiling OpenGL source code for other Mac users.  However, there is information online and on these sites for building and linking the necessary files for a linx or a windows machine.</span></p>
        
        <hr />
                
        <h2>Downloading and Building OpenGL</h2>
        
            <p>I am going to be using glfw library as glut is outdated so for those files go <a href="http://www.glfw.org/" target="_blank">here</a>.  Furthermore, I will also be using another library called glew and that can be found on this website <a href="http://glew.sourceforge.net/" target="_blank">here</a>. I prefer to use a text editor and a terminal to compile and execute any code I write as appose to an IDE, so I used this youtube video along with the help of <a href="https://www.macports.org/" target="_blank">Mac Ports</a> and <a href="http://www.cmake.org/" target="_blank">CMake</a> to create my build.<br /><br />
        Below is the video I used to create my build.</p>
        
    <div class="video">
    <iframe style="margin-left: 1em"
src="https://www.youtube.com/embed/shpdt6hCsT4">
</iframe></div>
    <br />
    <hr />
        
        <h2>Command Line</h2>
        
        <p>Once we have successfully installed mac ports, and used cmake to build our directories the next step is trying to compile our OpenGL code and seeing if we can execute any of that code.
            
    <span class = "nl">For this we need to use our terminal and write commands into our command line.  I use the g++ compiler so I will always start out with writing g++, then i like to name my executable file so I used -o and whatever name I want to give it (usually test).
        
    <span class = "nl">From here we have to include our .cpp file as well as -std=gnu++0x for our c++11 standard for any c++11 code included.
        
    <span class = "nl">g++ -o test main.cpp -std=gnu++0x
        
    <span class = "nl">Yet, we haven't added our glfw or glew libraries and there are other features we need to add as well, you will get reference errors if you don't include certain frameworks. Also, make sure that you are in the correct directory when you are building your .cpp file because your OS doesn't know where it is located.  If its on your desktop you can type <em>cd desktop</em> to your change directory to the desktop. I will include all the necessary commands that I use bellow.</span>
        
        <span class = "nl">g++ -o test main.cpp -lglfw3 -framework Cocoa -framework OpenGL -framework IOKit -framework CoreVideo -lglew -std=gnu++0x</span>
    
    <span class = "nl">If there aren't any build errors, you can run the application using ./a.out or ./test if you decided to name the executable file.</span></p>
        
        <hr />
        
        <!-- Using an IDE -->
        <h3>Using an IDE</h3>
        
            <p>The command line works fine, however for those of you who prefer using an IDE like 'Visual Studio' for Windows, 'Xcode' for Mac, etc. then you will have to learn how to add the proper libraries and frameworks in your project, to get your program to compile and execute files.
        
        <span class="nl">Some of the examples I will use are going to be taken from the OpenGL Superbible, in order to build these examples which come with their own set of header files you will need to set up your build.  I am using a Mac so my build will be different from those of you using a Windows or Linux machine.</span>
                
        <span class="nl">Below is a video which I use to run the examples for my build.</span> </p>
        
        <div class="video">
        <iframe style="margin-left: 1em"
src="https://www.youtube.com/embed/VTd8GSYOiZE">
            </iframe></div>

        <hr />        
        <br />
        <a href = "OpenGL1.html">Next Page</a></span>
        <br /><br />
    </div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>    