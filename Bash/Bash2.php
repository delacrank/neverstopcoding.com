<!DOCTYPE html>
<html>
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Modifying Directories &amp; Files - Bash Programming</title>
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
        
        <h1>Modifying Directories &amp; Files - Bash</h1>

        <h2>Modifying Directories &amp; Files - Bash</h2>
        
            <p>So far we have learned how to create both files and folders using the 'touch', 'mkdir'.  We have also learned how to move files and change filenames using the 'mv' command. 
        
        <span class="nl">We are going to continue to learn about the command line, this time we are going to learn how to remove files and folders using the remove command 'rm'.</span>
                
        <span class = "nl">Let's start by removing the text file we created earlier by typing 'rm goodbye.txt'.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class ="comments"># Remove our goodbye.txt file from our child_dir</span>
    Machine-Name: 'child_dir' UserName: <span class ="red">rm goodbye.txt</span></pre>
        
        <p>If we navigate one directory back by using our 'cd ..' command we can try to remove our 'child_dir'.  In order to remove a directory type in 'rmdir'.
        
        <span class = "nl">I added an additional command, the double amperstand symobl, this means do this command 'and' do this one afterwards. It reads from left to right.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class ="comments"># Move to parent directory and remove child_dir</span>
    Machine-Name: 'child_dir' UserName: <span class ="red">cd .. &amp;&amp; rmdir child_dir</span></pre>
        
        <p>Let's say that we had a file in our directory, like a text file for example and we wanted to remove the entire directory.  Using the 'rmdir' command would give us an error, however if we use the 'rm' command with the '-R' option then it will remove the directory along with all the contents within it.
        
        <span class ="nl">However, if the directory has senstive files then we could use the 'Ri' option which asks us to confirm before deleting any files contained within the directory.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class ="comments"># Add some files navigate to the parent directory
    # Use the interactive option to remove those files</span>
    Machine-Name: 'text_files' UserName: <span class ="red">touch ok.txt ok1.txt ok2.txt ok3.txt</span>
    Machine-Name: 'text_files' UserName: <span class ="red">cd ..</span>
    Machine-Name: 'desktop' UserName: <span class ="red">rm -Ri text_files</span></pre>
        
        <p>I would suggest playing around with some of these commands first and have fun navigating between files, directories, checking the contents, adding and removing files, etc.
        
        <span class = "nl">Another option in case you get confused with using any of the commands is to type in '-h'.  This is the help option and it will display information pertaining to the command and all the possible options or arguments which can be passed into it.</span>
            
        <span class="nl">Another possibility is using the 'man' pages short for manual.  You can type in 'man' followed by the name of the command.  Use the 'w' key to scroll up and the 'z' key to scroll down, 'q' will bring you back to the command line.</span></p>
        
        <hr />
        <br />
        <a href="Bash1.html">Previous</a><span class = "next"><a href="Bash3.html">Next</a></span>
        <br /><br />

    </div>    
    
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>  
