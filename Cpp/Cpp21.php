<!DOCTYPE html>
<html>
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Compilation Process - Cpp Programming</title>
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

        <h1>Compilation Process - Cpp Development</h1>
        
        <!-- seperate compilation -->
        <h2>Compilation Process</h2>
        
            <p>When compiling multipile files, Cplusplus will first compile each individual file into something called 'preprocessed code' (file.i), then it will take those files and convert them into something called 'assembly code' (file.s), from here it will compile them again into something called 'object code' (file.o).
                
        <span class="nl">If all the source files have compiled without error they will be combined using something called a linker, the linker can then output executeable code will the OS can run.</span>
        
        <span class ="nl">In order to compile your .cpp source files into just raw preprocessor code you can use this command the '-E' argument, the '-o' just stores the information into a file.</span>
              </p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class="comments">// Command line argument for preprocessor code</span>
    g++ -E test.cpp -o test.i</pre>
        
        <p>If we want to generate just the assembly code, we can use the '-S' argument.  Follow the example below assuming that our source code is named is test.cpp.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class="comments">// Command line argument for assembly code</span>
    g++ -S test.cpp</pre>
        
        <p>If we want to further compile our program once again into object code we can use the '-c' argument.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class="comments">// Command line argument for object code</span>
    g++ -c test.cpp</pre>    
        
        <p>This file will look like a bunch of strange symbols depending on which type of editor you decide to use.  If you want to understand these symbols then type in 'nm' to display the translation.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class="comments">// Command line argument for understanding symbols</span>
    nm test.o</pre>   
        
        <p>Let's change this simple .cpp file into object code.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class ="code">
    int main()
    {
        
    }</pre>
    <br />
        
    <p>The alternative is to use a different editor like sublime text which will open the object file and display the Hex values of the machine code.</p>    
        
    <hr />
        
    <h3>Using Emacs</h3>
        
        <img src="/Images/o%20code.png"/>
        
    <hr />
        
    <h3>Using Text Edit.</h3>
        
        <img src="/Images/o%20code2.png"/>
        
    <hr />
        
    <h3>Using Sublime Text.</h3>
        
        <img src="/Images/o%20code3.png"/>
        
    <p>Each image is just how different editors interpret machine code, the last example is the code converted into hex values, we could view it using binary values but i'm sure the file would be much larger.
        
        <span class ="nl">Let's look at a chart to see how the compiler takes 'cpp' source code and compiles it into an executable file.</span>
              </p>
        
        <img src="/Images/compiler.png"/>
        <br />
        <em>Image from http://www.tenouk.com/ModuleW.html</em>
        
        <hr />
        <br />
        <a href="Cpp20.html">Previous</a>
        <span class = "next">
        <a href = "Cpp22.html">Next Page</a></span>
        <br /><br />

    </div>    
    
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>  