<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Understanding Pointers - C++ Programming</title>
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
<?php include('..//Includes//Left_C++.php'); ?>

<!-- Right -->
<div id ="rightz">
    
<h1>Understanding Pointers - C++ Development</h1>
    
<!-- Data through pointers -->    
<h2>Referring to Data through Pointers</h2>
    
    <p>We are going to use this chapter to talk about memory management, and the difference between hexadecimal and decimal numbers.</p>
    
<hr />    
<!-- Heap and Stack -->    
<h3>Heap and Stack Variables</h3>
    
    <p>Understand memory management.  There are two forms of memory which the computer uses to store and retrieve data, heap and stack.
        
        <span class  ="nl">A heap is common storage area which the computer creates in order to set aside data (a global variabled is stored in the heap).</span>
    
        <span class  ="nl">The other form is called a stack, and the stack uses chronological order similar to a stack of papers.  Data can be placed either on top or beneath the stack but cannot be retrieved from the middle unless other data is removed from the top or bottom of the stack (functions are stored in the stack).</span>
    </p>
  
    <hr />
    
<!-- Hex Numbers -->
<h3>Hexadecimal (Hex) Numbers</h3>
    
    <p> A hexadecimal number will usually appear on the console by having a zero and 'x' before the number.  So if the computer were to display the number one in hexadecimal notation, it would appear like so: 0x1. 
        
        <span class  ="nl">The difference between decimal numbers and hexadecimal is that decimals numbers can only go to ten digits ( 0, 1, 2, 3, 4, 5, 6, 7, 8, 9 ) hence deci (ten in greek).  However, hexadecimal can go up to sixteen digits ( 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, A, B, C, D, E, F ). </span>
    
    <span class  ="nl">A = 10, B = 11, C = 12, D = 13, E = 14, F = 15.</span>
        
        <span class  ="nl">Converting numbers into hexadecimal.</span>
        
        <span class  ="nl">Well, this is a little extra but if you know anything about binary numbers, hexadecimal numbers work in a similar way.  A hex number works in powers to the sixteenth not powers to the second, for a five digit number the notation would be: </span>
        
        <span class  ="nl"> 16^<sup>4</sup> + 16^<sup>3</sup> + 16^<sup>2</sup> + 16^<sup>1</sup> + 16^<sup>0</sup> </span>
        
        <span class  ="nl">A 100 converted to hex would be: <br /> 6 * ( 16 ^ <sup>1</sup> ) + 4 * ( 16 ^ <sup>0</sup> ) = 96 + 4 = 100</span>
    </p>
        
    <hr />
    
<!-- Getting a variables address -->
<h3>Getting a variable's address</h3>

    <p> We are going to create a small program where we will declare an integer and intialize it with a number.  Yet, when we run the program, the output will be a location for the address of that value, not the actually value itself.    </p>
    
<!-- Example -->
<em>Example:</em>
<!-- Code section -->
<pre class = "code">
<span class = "comments">/* The variable address */</span>    
#include &#60;iostream&#62; 
using namespace std; 

int main() 
{ 
    int NumberOfStreetLights = 700;
    cout &lt;&lt; &amp;NumberOfStreetLights &lt;&lt; endl;
    return 0;
} </pre>
    
    <p> The number my console produced is '0x7fff5ed30c48' and 700 converted into hex is equal to 0x2BC (you can your computers calculator in view programmer to convert the numbers), so clearly that number isn't the converted value. 
        
    <span class  ="nl">The computer is allocating a place to store this data (most likely heap storage), and will use this address (0x7fff5ed30c48) in order to retrieve the value for NumberOfStreetLights variable. By putting an ampersign (&amp;) before our variable, we were able to see the address.</span>  </p>
    
<hr />
<br />
<a href = "C++20.html">Previous page</a>
<span class ="next">
<a href = "C++22.html">Next Page </a></span>
<br /><br />

</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>