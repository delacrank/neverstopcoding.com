<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Expressions &amp; Switch Statement- C++ Programming</title>
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
    
<h1>Expressions &amp; Switch Statement -  C++ Development</h1>
    
<!-- Directly C++ Program Flow -->
<h2>Directing C++ Program Flow</h2>
    
    <p>In this section we are going to talk about expressions, and explain what a switch is and how to use it.    </p>
    
<!--Expressions -->
<h3>Expressions</h3>
    
    <p>We know that an operand is a object to the left or right of an operator, and we know that different operators perform different actions on our operands.  Yet, is do you call operands being used with operators to compute a value? 
        
<span class="nl">This is an expression, an expression is a sequence of operators and operands that specifies a computation.</span>
        
<span class="nl">An assignment ( int val = 2; ), function call ( f(a) ), or simple addition problem ( 2 + 2 ) can be considered an expression.</span></p>
    
<!-- Switch-Statements -->
<h3>Switch statements</h3>
    
    <p> A switch statement also controls the flow of program and gives the user options in terms of being able to select cases from the switch.  Below I will show you an example of a switch.</p>
    
<!-- Example -->
<em>Example:</em>
<!-- Code section -->
<pre class = "code">
<span class="comments">/* Switch Statement Program */</span>
#include &#60;iostream&#62;
using namespace std;

int main()
{
    const double cm_per_inch = 2.54; 
    int length = 1; 
    char unit = 'a'; 
    cout &lt;&lt; "Please enter a length followed by a unit (c or i):\n"; 
    cin >> length >> unit; 
    switch (unit) 
    { 
        case 'i': 
            cout &lt;&lt; length &lt;&lt; "in ==" &lt;&lt; cm_per_inch*length &lt;&lt; "cm\n"; 
            break; 

        case 'c': 
            cout &lt;&lt; length &lt;&lt; "cm ==" &lt;&lt; length/cm_per_length &lt;&lt; "in\n"; 
            break;
        
        default: 
            cout &lt;&lt; "Sorry, I don't know a unit called '" &lt;&lt; unit &lt;&lt; "'\n; 
            break;
    }
    return 0;  
}</pre>
  

<p>Alright, so what's going on with all this code.  </p>

<ol>
<li>We defined our constant variable cm_per_inch as a reference for converting inches to centimeters or vice versa. </li><br />
    
<li>Then we defined a char named unit to provide our users a variable for determining whether they wanted to use inches or centimeters. </li><br />
    
<li> We need a cin for our users to input length and unit type (our length and unit of measurement).
</li> <br />
    
<li>Following this we prompted our users to input a number for the length and letter either: 'i' for inches or 'c' centimeters.</li><br />
    
<li>In terms of converting our length we need to use our switch statement to either multiply (our inches into centimeters) or divide (our centimeters into inches) our length based on our unit variable. </li><br />
    
<li>
There is also a default option in case our user puts in an incorrect letter (<u>not</u> 'c' or 'i') or trys to put a letter for our length variable (this will prevent the compiler for drawing a runtime error).
</li><br />
    
<li>Our switch cases will display their length either in inches or centimeters and then convert it, and display the conversion. However, if the user tried to input an invalid character or integer then the switch will revert to the default case.</li>
</ol>
<hr />
<br />

<a href = "C++9.html">Previous page</a>
<span class ="next">
    <a href = "C++11.html">Next Page </a></span>
<br /><br />

</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>