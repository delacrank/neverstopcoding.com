<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>String literals, Math, Programming terms - C++ Programming</title>
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel="stylesheet"><link href='http://fonts.googleapis.com/css?family=Cormorant+Infant' rel="stylesheet"><link rel="stylesheet"
      type="text/css"
      href="../testcss.css">
<style type="text/css">
    dt {
        font-weight: bold;
        margin-top: 1em;
    }
</style>
</head>

<body>
    
 <!-- Header -->
<?php include('..//Includes//header.php'); ?>

<!-- Navigation -->
<?php include('..//Includes//nav.php'); ?>
    
<!-- Navigation2 -->
<?php include('..//Includes//nav2.php'); ?>
    
<!-- Left --><div class = "mainWrapper">
<?php include('..//Includes//Left_C++.php'); ?>
    
<!-- Right -->
<div id ="rightz">
    
<h1>String literals, Math, Programming terms - C++ Development</h1>

<!-- String Literals -->
<h2>String literals, Math, Programming terms</h2>
    
    <p>
    In this section we will talk about C++11, manipulating our output stream to execute math equations and to modify characters.
    </p>

<hr />
    
<!-- Programming Terms -->
<h3>Programming Terms</h3>
    <p>Let's cover the basics of some programming terms before we move on to any actual code.  This will make it easier to follow along when I try to explain certain concepts.</p>
    
<dl>
    <dt>Source Code</dt>
        <dd>The file which contains the C++ code.</dd>
    
    <dt>Compiler</dt>
        <dd>Translates our C++ source code into machine code, which the computer can understand in order to carry out instructions.</dd>
    
    <dt>Object Code</dt>
        <dd>Code produced by a compiler or assembler, these codes can be linked to form an executeable file.</dd>
    
    <dt>Linker</dt>
        <dd>Takes one or more object files generated by a compiler and combines them into an executeable file, library file or other type of object file.</dd>
    
    <dt>Return type</dt>
        <dd>Determines the type of data returned, in our main function: int main(), int the the data which will be returned from that function.</dd>
    
    <dt>Name</dt>
        <dd>A name which we give to a variable, function, etc.  For int main(), the name of our function is 'main'.</dd>
    
    <dt>Parameter</dt>
        <dd>A list enclosed in parentheses.  For int main() it is empty.</dd>
    
    <dt>Function body</dt>
        <dd>A body of statements enclosed in curly braces '{ }' which lists the actions performed by the function..</dd>
</dl>
    
<!-- String literals -->
<h3>String Literals</h3>
    
    <p>    So we know we can write characters in our console by using cout &lt;&lt; " ";  We also know that we can end a line and start a new one by using endl;  So what about being able to modify our characters with some formating.  </p>
    
    <ul class = "li">
    <li>\n starts a newline</li>
    <li>\t tab character</li>
    <li>\b backspace character</li>
    <li>\* asterisk star</li>
    <li>\' single quote</li>
    <li>\\ single backslash</li>
    </ul>
        
    
<hr />

<!-- C++11 -->
<h3>Sample C++11 code</h3>
    
<p>Another example of hello world, using a  <a href ="http://www.stroustrup.com/Programming/PPP2code/std_lib_facilities.h" target = "_blank">header</a> file found on  Bjarne Stroustrup's website (the creator of c++). <br /><br />Although to use this header you will need to include it into the folder containing your cpp files, and it would require the latest version of GNU compiler (I'm using version 4.9.2).  Furthermore, if you were running it from the terminal, you would need to add these commands to your command line in order to compile the source code. 
    
<span class = "nl">g++ --std=c++11 -o test test.cpp </span>
./test </p>

<!-- Example -->
<em>Code:</em>
<!-- Code Section -->
<pre class = "code">
#include  "std_lib_facilities.h"
 
int main ()
{
    cout &lt;&lt; "Hello world!\n" 
    return 0;
}</pre>
<br />

<hr />

    
<!-- Math output stream -->
<h3>Performing math using the Output stream</h3>
    
<p>
So we can write characters using cout, what about math?        
</p>
   
<em>Code:</em>
<!-- Code Section -->
<pre class = "code">
#include  &#60;iostream&#62;
using namespace std;

int main ()
{
    cout &lt;&lt; 9 + 3 &lt;&lt; endl;
    return 0;
}</pre>

<p>The console should produce the sum of those two integers, it can also perform subtraction, division, multiplication and find remainders.  Just remember that in order for cout to display characters you must always use quotation marks.</p>
    
<hr />
<br />
<a href = "C++1.php">Previous page</a>
<span class = "next">
<a href = "C++3.php">Next Page</a></span>
<br /><br />

</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>