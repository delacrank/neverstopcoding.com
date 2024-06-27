<!DOCTYPE html>
<html>  
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <meta name="description" content="Learn to program with C++ version 2011. C++ is a powerful object oriented programming language which includes a powerful library called STL (Standard template library). Understand how to use pointers, classes, polymorphism, abstraction and more in these free tutorials." />
        <meta name="keywords" content="Cpp" />
        <meta name="author" content="Juan Arias" />
        <title>Introduction to Cpp Programming</title>
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
<?php include('..//Includes//Left_Cpp.php'); ?>

<!-- Right -->
    
    <div id ="rightz">

        <h1>Introduction to Cpp Programming</h1>
        
        <h2>C plus plus using STL</h2>
        
            <p>I decided to add some new information to my c plus plus section. Upon realizing that my initial approach was wrong based on a book I was using, and reading more information on how C plus plus is taught, I decided to create this section.
        
        <span class = "nl">One of the things I learned about different approaches to teaching CPP, is that some people will teach it from a C approach which focuses on C methodology with the C plus plus syntax.  However, one of the main features of Cpp is learning to use many of features already implemented by the Standard Template Library.</span>
              </p>
        
    <hr />    
        
        <h3>Looking at the main function</h3>
        
            <p>Let's take a look at a simple Cpp program.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    int main () {
         return 0;
    }</pre>
        
    <p>Here we see 4 things, the first is int, this will used to determine the data type of our function as well as its return type.  Int means it will return an integer value, we see that value is set to zero (return 0;).  If it is set to return zero then that means the program has successfully executed, and if it returns a one, that means an error has occured.
        
        <span class = "nl">Let's look at the name of our function 'main', this function tells the program to look here to start executing commands. It will be used in almost every cpp program we create, with a few exceptions.</span>
        
        <span class="nl">After int main, we have two paranthese an opening one  '(' and a closing ')'.  These are used to handle parameters for our main function.  Then come the opening '{' and closing brackets '}', these tell the program to execute this line of code before trying to move on to another line. This is also called a block of code. </span>
        
        <span class="nl">Finally inside our block we have the return statement, it just tells the program to 'return' this value upond execution of our function.  Immediately afterwards we have a semicolon, this means stop reading this line, it is similar to a period in a sentence. </span>
              </p>    
        
        <p>Alright so we can save this information into either a .cpp or .cc file. If we want to compile this program using a GNU compiler we would need to type in.</p>
        
        <hr />
        
    <!-- compiling -->    
    <h3>Compiling our Program</h3>
        
        <p>In order to compile our program we will either require the use of an IDE 'Integrated Development System' or we can use the command line and compile it using a set of commands.  One command I will use to compile my code is g++, let's see an example of that below.</p>    
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    g++ main.cpp</pre>
        
        <p>'g++' is the command for the compiler but we can use multiple file extensions for our main file.  These include: main.C, main.cp, main.c++, main.cxx and finally main.cc. It really doesn't matter which file extension you use as long as it doesn't end with main.c, because that would refer to a <b>'C'</b> source file <u>not</u> a c plus plus source file.
        
        <span class="nl">Later when we learn about header files you will notice differences in headers which can compile c '.h' as appose to header files which can also handle cpp like '.hh' and '.hpp'.</span>
        
        <span class = "nl">Alright, so when we run this command, if it executes properly then we will see a new file in our folder.  If we are using a Unix OS then the file will be called 'a.out' and if we are using a Windows OS it will probably return a '.exe' file.  Both files are called binary files and they will execute the program if we click on them.</span>
            
        <span class="nl">Let's say we are executing multiple source files and we want to tell the difference between our executable files.  For this I can use an accessor like -o main.  It will name the executable file from 'a.out' into 'main'.</span> </p>   
         
     <em>Code:</em>
    <!-- code -->
    <pre class="code">
    g++ -o main main.cpp</pre>
        
    <p>I can also make my program compile the program into assembler source file. By using the '-S' accessor. </p> 
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    g++ -S main.cpp</pre>
        
    <p>This should return a main.s file. You will not understand if unless you understand assembler code, yet it is still good to know for understanding your program.
        
        <span class = "nl">If you want to clear the screen type in 'clear' in the command line.</span></p>
        
    <hr />
            
    <!-- running the program -->    
    <h3>Running our program</h3>
        
        <p>To execute our program we can just type in the name of the file and it should run.  However, some OS's require that you specify the location of the file, so we can type in './' to indicate the file is located in our current directory.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    ./a.out</pre>
        
    <p>Or if you named the binary file as main, you would type in './main'.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    ./main</pre>
        
    <p>If we want to see the status of value returned by our simple program we can issue the 'echo' command followed by a dollar sign and a question mark.</p>    
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    echo $?</pre>    
        
    <p>It should return a zero if our main function successfully executed unless we issues another command in our command line before typing in 'echo $?'.  The 'echo' command just repeats the last thing typed in our command line.  So if we typed in 'echo hello' then hello would be echoed.</p>
        
        <hr />        
        <br />
        <span class = "next">
            <a href = "Cpp1.html">Next Page</a></span>
        <br /><br />

    </div>    
    
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>    