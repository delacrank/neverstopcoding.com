<!DOCTYPE html>
<html>
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <meta name="description" content="Use the bourne again shell in order to perform quick and easy instructions on your UNIX or LINUX OS. Create files, modify directories, install programs, write shell scripts and more. " />
        <meta name="keywords" content="Bash" />
        <meta name= "author" content="Juan Arias"/>
        <title>Introduction to the Bash Shell</title>
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
<?php include('..//Includes//Left_Bash.php'); ?>

<!-- Right -->
    
    <div id ="rightz">

        <h1>Introduction to the Bash Shell</h1>
        
        <!-- Understanding the command line -->
        <h2>Using the Command Line</h2>
        
            <p>Whenever using any of the commands on a Unix Operating system there will always be two options after the initial command 'option' and 'argument'. So <i>Command</i> <i>Option</i> <i>Argument</i>, let's see an example of this in play. 
                
        <span class="nl">First open up your command line or Terminal you can find this if you going to your 'Launchpad' and typing in terminal.  Or you can navigate to it by going to your 'Finder' under directory '/Applications' then '/Utilities' and it should be called 'Terminal'.</span>
                
        <span class = "nl">Once opened type in 'ls' in order list all the files in your current directory (ls is short for list). </span> </p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class ="code">
    <span class="comments"># The Command Prompt will always display the     </span>
    <span class = "comments"># 'Machine Name', the current 'Directory' and the 'User Name' </span>
    Machine-Name:~ Directory: UserName: <span class = "red">ls</span> </pre>
        
        <p>We should have seen a list of all of our files and directorys currently residing in our home directory, this usually includes our desktop folder, music, photos, documents, downloads and applications for the current user.
        
        <span class = "nl">If you want to navigate forward or backward through your directories then you can type in the command 'cd'.  This stands for change directory, a (dot) '.' stands for the current directory while (two dots) '..' two dots refer to the parent directory.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class="comments"># The tidle near our directory refers to our home directory</span>
    Machine-Name:~ Directory: UserName: <span class = "red">cd ..</span></pre>
        
        <p>If you want to navigate to a different directory you can just type in 'cd' and the name of the directory. Like 'cd desktop'.  Let's say we wanted to create a file in our user/desktop directory, we could use our 'touch' command. 
            
        <span class = "nl">'touch' does two things, it checks the last time a file was modified or creates a new file if one doesn't already exist with the name specified. In order to know when files were last modified let's type in '-l' to see more information pertaining to the files in our directory.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments"># Use touch to update the informatio n of a file or directory</span>
    Machine-Name: Directory: UserName: <span class="red">touch fileName</span>
    Machine-Name: Directory: UserName: <span class="red">ls -l</span></pre>
        
        <p>Notice the time next to the file in which we used touch.  It has changed to the current time and date, however touch can also be used to create files as well.  Maybe its better to navigate to our desktop in order to play with this option.
        
        <span class = "nl">We can type in 'cd Username/Desktop' in order to get there.  Once we have navigated to the desktop, you should see our 'directory name' in the terminal change.  Now we can type in 'touch hello.txt' to create a blank text file called hello.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments"># Create a text file using the touch command</span>
    Machine-Name: 'desktop': UserName: <span class = "red">touch hello.txt</span></pre>
        
    <hr />
    <br />
    <a href = "Bash1.html">Next Page</a></span>
    <br /><br />
    </div>    
    
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>  