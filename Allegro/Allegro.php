<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <meta name="description" content="Learn program with Allegro for game development. If you want to learn a relatively simple api along with c or c++ for multi platform game development then visit this website." />
        <meta name="keywords" content="Allegro, Game, Programming, sprite, 2D" />
        <meta name= "author" content="Juan Arias" />
        <title>Setting up Allegro - Allegro Game Programming</title>
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
<?php include('..//Includes//Left_Allegro.php'); ?>

<!-- Right -->
    
    <div id ="rightz">

    <h1>Setting up Allegro - Learning Game Development</h1>    
        
    <h2>Intro to Allegro</h2>    
        
        <p>This guide is only going to teach you how to build allegro version 4.2 on a windows OS. That is due to the guide I am following.
        
        <span class ="nl">The first thing I want to go over will be how to compile our allegro source code.  If you are using a windows machine which is the platform that I am currently working on, and you using a 'MinGw' compiler, which is the windows form of the Gnu Compiler, then here are some instructions.</span>
        
        <span class = "nl">First go to the <a target="_blank" href="http://www.liballeg.org/">'Allegro lib page'</a>, under downloads select older versions and select 'Allegro 4.2' Windows Binaries binaries, for windows and dos friendly computers.</span>
        
        <span class = "nl">If you have a mac or a linux machine you can always use a virtual machine to do these tutorials. Just make sure you put the '.dll' files under your bin folder in your MinGw compiler folder. Also, make sure to add the proper allegro headers to the correct lib folders, etc. Check that yout compiler has been added to the 'Path'  when trying to compile your program in the command line.</span>
        
        <span class = "nl">To set the 'Path' for your MinGw compiler, just open MyComputer select properties, choose 'advanced system settings', select 'enviroment variables', choose Path under 'System variables' amd then edit it.  Add 'C:/MinGw/bin;' to the end of that long path file name. Then you should be able to compile using the Gnu compiler in your command line.</span>
        
        <span class = "nl">If you have done all of this correctly we should be able to run our first allegro program. Let's dive into some source code.</span></p>
        
        <em>Code:</em>
        <!-- code -->
        <pre class="code">
        <span class = "comments">// Include the allegro header</span>
        #include &lt;allegro.h>

        int main(void){
            <span class = "comments">// Initialize the allegro</span>
            allegro_init();
            <span class = "comments">// Create window, specify width, height, color</span>
            set_gfx_mode(GFX_SAFE, 640, 480, 0, 0);
            <span class = "comments">// Set keyboard</span>
            install_keyboard();
            <span class = "comments">// Display 'Hello, world'</span>
            textout_ex(screen, font, "Hello, World!", 1, 1, 10, -1);
            <span class = "comments">// Display 'Press Esc to quit'</span>
            textout_ex(screen, font, "Press ESCape to quit.", 1, 12, 11, -1);
            <span class = "comments">// Check to see if 'esc' is pressed, if its pressed pass the exit function</span>
            while(!key[KEY_ESC]);
                allegro_exit();
    
            return 0;
        }
        END_OF_MAIN()</pre>
        
        <p>To compile the source file, be use to include the '-lalleg' command line. That option simply adds the library to the compiler which should be located in your lib file if you added it.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// Command line instructions</span>
    g++ -std=c++11 test.c -o test -lalleg</pre>
        
        <p>In order to check the version of allegro you ae using try this source code. The version of allegro is stored in a character array 'allegro_id', so printing that value to the console will display it.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    int main()
    {
        allegro_init();
        printf("Allegro version = %s\n", allegro_id);
        printf("\nPress any key to cont ...");
        system("pause");
        allegro_exit();
        return 0;
    }
    END_OF_MAIN()</pre>
        
        
        <hr />        
        <br />
        <a href = "Allegro1.html">Next Page</a>
        <br /><br />

    </div>
    
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>

</html>    