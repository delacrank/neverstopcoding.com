<!DOCTYPE html>
<html>
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Printing output - Cpp Programming</title>
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

        <h1>Printing output - Cpp Development</h1>
        
        <h2>Printing output</h2>
        
            <p>Our next section will cover a lot of information, so its important to review and pratice before moving on too quickly.</p>
        <hr />
        
        <!-- Understanding Preprocessing -->
        <h3>Preprocessors</h3>
        
            <p>One of the things we have to do in cpp is using functions from different files.  This allows us to write small manage programs without being overwhelemed by having to define every function we want to use in our main.cpp file.
        
        <span class = "nl">One of the first preprocessors we are going to use is called 'iostream'.  It means input, output stream it works by storing data in a buffer and then printing it to the screen.  However, in order to use this nice feature we have to find a way to use the functions defined in our 'iostream'. </span>
                
        <span class="nl">This is accomplished by using something called a preprocessor directive. For now I will only touch on using one directive, its called the 'include' directive.  Using this include directive hashmark followed by the word include ('#include') we can add our isotream to our main function program.</span>  </p>
        
    <!-- code -->
    <pre class="code">
    #include &lt;iostream>
    
    int main() {
        return 0;
    }</pre>
        
    <p>So what's up with the less than greater than symbols around our iostream file, and where exactly is this iostream file!? Alright, well when we use the include directive it allows us to access functions defined in other files.  Some of these files are called header files generally we can either use less than or greater than symbols for the search paths or we can use double quotes for to indicate the file (#include "iostream").
        
        <span class = "nl">For a mac our iostream file is located in '/usr/include/c++/'.  There you will also be able to see the version of your compiler.  Realize that compilers are going to be different for different machines and operatoring systems because, they are making sure that the machine can properly understand the assembler language as per the hardware specification.</span>
        
        <span class="nl">Now that we have a better understand of how to use the include directive to add isotream to our program, let's take advantage of some of the features we can access.</span>
              </p>
        
        <hr />
        
    <!-- STD -->    
    <h3>Understanding STD library</h3>
        
        <p>One of the operands we will use is called 'cout' it stands for console output.  It is an operand and we can store values in it.  Let's look at an example below.</p>
        
    <!-- code -->
    <pre class="code">
    #include &lt;iostream>
    
    int main() {
    
        std::cout &lt;&lt; "hello, world.\n";
    
        return 0;
    }</pre>
        
        <p>So if we compile and execute this program it should display the words 'hello, world.' in our console.  Yet, I didn't explain what is this 'std' thing or why we needed to use '::' before cout.
        
        <span class = "nl">STD just stands for the standard library and in order to use a function located in the library (the function being 'cout') we need to use a scope operator '::' to tell our program where to find this function. In order to understand what a scope operator is we first need to understand what is scope.  Scope just means what part of the program we want to use. </span>
            
        <span class="nl"> Imagine if we owned a house which had 4 rooms.  Each room could be an abstract representation of scope, if we refered to the entire house it would be called 'global' scope, and if we refered to a room it would be 'local' scope. </span>
            
        <span class="nl">What happens when we want to use something located in another room (outside of our scope), we would have to tell the program where to look for it right?  This is where the scope operator comes into play. The room we are currently located in is called the 'main' room and the function we require is located in the 'std' room.  So using std::cout tells us the program to look for our cout operand in the std room.</span>
              </p>
        
        <hr />
        
    <!-- operators and operands -->
    <h3>Operators and Operands</h3>
        
        <p>An operator is a symbol which computes two operands, in programming we can refer to operands being on either the left or right hand side of an operator. An example of operands and operators you will be more familar with is a mathematical expression '1 + 2'.
        
        <span class="nl">Here the number one is the left hand operand, the number two is the right hand operand and the plus sign is the operator.  We know that if we want to compute the two numbers together we have to place the two in a sequence.  It might not matter the sequence now because we are using addition, but if we using subtraction or divison then the output would be drastically changed.</span>
            
        <span class="nl">In order to print the words 'hello world.' to the output we have to use two operands and an operater.  These operands are 'std::cout' and "hello world.\n". So the question is how does our left operand know what to send to our output stream?  We use the '&lt;&lt;' operator or the insertion operator, understand that operator symbols can mean different things depending on the context of the operation. </span>
            
        <span class="nl">The insertion operator means insert this value into this operand. We can use it multiple times to insert multiple values into the same operand cout.</span> </p>
            
        <pre class="code">
    #include &lt;iostream>
    
    int main() {
    
        std::cout &lt;&lt; "hello, world. \n" &lt;&lt; "How are you?\n" &lt;&lt; "I'm fine thank you.\n";
    
        return 0;
    }</pre>
        
    <p>Using '\n' is a string literal which means print newline character, and it will send the console output to a newline.</p>
        
        <hr />        
        <br />
        <a href="Cpp.html">Previous</a>
        <span class = "next">
        <a href = "Cpp2.html">Next Page</a></span>
        <br /><br />

    </div>    
    
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>  