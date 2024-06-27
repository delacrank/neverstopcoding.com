<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Fstream (File Stream) - Cpp Standard Library</title>
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
<?php include('..//Includes//Left_Cpp_Std_Lib.php'); ?>

<!-- Right -->
    
    <div id ="rightz">

        <h1>Fstream (File Stream) - Cpp Standard Library</h1>
        
        <h2>Working with fstream</h2>
        
            <p>The fstream is a nice stream which allows us to work with files outside our program.  We can use these files to either read text 'ifstream' or write text 'ofstream' as appose to using the console.
        
        <span class = "nl">In the program below we are going to be create a small program which will be able to copy a line of input from our console paste that text into our designated file.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    #include &lt;fstream>
    #include &lt;string>
    #include &lt;iostream>
    
    int main()
    {
        std::string word; <span class = "comments">// declare string</span>
        std::ofstream myfile; <span class = "comments">// declare file output stream object</span>
        myfile.open("ok.txt"); <span class = "comments">// use object to open file for stream output</span>
        std::getline(std::cin, word); <span class = "comments">// store input from our console into string object</span>
        myfile &lt;&lt; word; <span class = "comments">// input data from out string into our output file stream</span>
        myfile.close(); <span class = "comments">// close the file output stream</span>
    } </pre>
        
        <p>Using this same logic of our program, let's see if we can take the data written to out 'ok.txt' file and display it on to our console.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    #include &lt;fstream>
    #include &lt;string>
    #include &lt;iostream>
    
    int main()
    {
        std::string word;
        std::ifstream myfile("ok.txt");
        std::getline(myfile, word);
        std::cout &lt;&lt; word;
        myfile.close();
    }</pre>
        
        <p>The two programs are almost identical with the difference being the objects we used and how they were used.  In the first program we used ofstream object to store a characters from our console into a text file.  Then, in the second program we used an ifstream object to store characters from our text file and display them on to our console. 
        
        <span class = "nl">If we want to take this program one step further, we can add in some error handling as well as a condition.  The error handling will check to see if the file has been successfully opened and the condition will allow us to continue to add words or lines of text.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    #include &lt;fstream>
    #include &lt;string>
    #include &lt;iostream>
    
    int main()
    {
        std::string word; 
        std::ofstream myfile("ok.txt"); 
        if(myfile) <span class = "comments">// Check if file exists</span>
        {
            while(std::getline(std::cin, word))
                myfile &lt;&lt; word; 
        }
        else
        {
            std::cout &lt;&lt; "Sorry, the file cannot be located" &lt;&lt; std::endl;
        }
        
        myfile.close(); 
        return 0;
    } </pre>
        
        <p>In this last example, we used an if statement to check if the file exists, and then we used a while statement to continue to execute our 'getline' call.  We can terminate the program by simply typing in 'ctrl + d' (EOF).</p>
        
        <hr />
        
        <!-- file modes -->
        <h3>File Modes</h3>
        
            <p>There are six file modes which you can use with each stream: in, out, app, ate, trunc and binary. Becareful when using fstream in default mode, this is because once your file is opened for changes, all the information on it is automatically truncated (erased).
        
        <span class = "nl">The only way to modify the contents of a file without first truncating it, is to use either the 'app' (append) mode or the 'ate' (at end).  Let's take a look at the function call for accessing the app mode.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    #include &lt;fstream>
    #include &lt;string>
    #include &lt;iostream>
    
    int main()
    {
        std::string word; 
        std::ofstream myfile("ok.txt", std::ofstream::app); 
        while(std::getline(std::cin, word))
            myfile &lt;&lt; word;
            
        myfile.close();
    }</pre>
        
        <hr />
        <br />
        <a href="Cpp_Std_Lib.html">Previous</a>
        <span class = "next">
        <a href = "Cpp_Std_Lib2.html">Next Page</a></span>
        <br /><br />

    </div>    
    
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>  