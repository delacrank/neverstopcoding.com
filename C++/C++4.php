<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Mathetical operations - C++ Programming</title>
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
    
<h1>Mathetical operations - C++ Development</h1>

<!-- Performing math using variables -->
<h2>Using variables to perform Mathetical operations</h2>
    
    <p>    Similar to algebra we can set words or letters to store values.  5 + x = 15.  In this section we will talk more indepth on how to use our variables to solve complicated math problems.    </p>
    
<hr />
    
<!-- Using Shortcuts -->
<h3>Adding / Subtracting / Dividing / Multiplying integer variables</h3>
    
    <p>    In this example, we are going to use two variables to manipulate the value for a new variable using addition.    </p>
    
<!-- Example -->    
<em>Example:</em>
<!-- Code section -->
<pre class = "code">
#include &#60;iostream&#62;
using namespace std;
    
int main()
{
    int start;
    int time;
    int total;
    start = 37;
    time = 22;
    <strong>total = start + time; </strong>
    cout &lt;&lt; total &lt;&lt; endl; 
    return 0;
}</pre>

    <p>    In this example, we declared a variable called total in the beginning of the program and then intialized that variable to be the sum of both start and time.  Finally, we displayed the sum of those two variables to make sure that the program properly compute those values.    </p>

<hr />
    
<!-- incrementing variables -->
<h3>Using shortcuts to increment or decrement variables</h3>
    
    <p>    Once we declare and intialize a variable it will store the value plus changes we make to the variable.  For example, if i declare an integer named 'total' to equal 5, and then add 5 more to it, the new value will equal 10.  This is because, 'total' will keep the original value unless we set it equal to something else.    </p>
    
<dl>
    <dt>total = total + 5</dt>
    <dd>Is also equal to total += 5</dd>

    <dt>total = total + 1</dt>
    <dd>Is also equal to total++</dd>
    
<dt>total = total + time</dt>
    <dd>Is also equal to total += time</dd>

</dl>

<p>
These rules apply for subtraction, multiplication and divison as well.  I will show more notations later on in section variables and operators.
</p>

<hr />
<!--Working with ints and doubles-->
<h3>Working with multiple data types</h3>

    <p>    Do you know if you divide two integers using the compiler, you will only get another integer, not the remainder or the fraction if one exists. Example, input 1 / 2 into the compiler.    </p>

<!-- Example -->
<em>Example:</em>
<!-- Code section -->
<pre class = "code">
#include &#60;iostream&#62;
using namespace std;
    
int main()
{
    cout &lt;&lt; 1 / 2 &lt;&lt; endl;
}</pre>

<p>It's suppose to be point five correct? Now, let's try with one integer and one double.</p>

<!-- Example -->
<em>Example:</em>
<!-- Code section -->
<pre class = "code">
#include &#60;iostream&#62;
using namespace std;
    
int main()
{
    cout &lt;&lt; 1 / 2.0 &lt;&lt; endl;
}</pre>

<p> This time we see the correct result because, the computer doesn't use fractions when computing with integers.</p>

<hr />    
    
<!-- Finding remainders -->
<h3>How to find the remainder of a Quotient?</h3>

    <p>    A quotient is the product of dividing two numbers.  Yet when we divide two integers we are left with another whole number, how do we solve for the remainder?  We use an operator called modulus '%'.    </p>

<!-- Example -->
<em>Example:</em>
<!-- Code section -->
<pre class = "code">
#include &#60;iostream&#62;
using namespace std;
    
int main()
{
    int first;
    int second;
    int total;
    int remainder;
    first = 10;
    second = 3;
    <strong>total = first / second;</strong>
    <strong>remainder = first % second;</strong>
    cout &lt;&lt; total &lt;&lt; endl;
    cout &lt;&lt; remainder &lt;&lt; endl;
    return 0;
}</pre>

    <p>    What did we just do?  It turns out that using modulus will provide the remainder for any two numbers divided.  In this example I set first to equal 10, second to equal 3 and then first (10) by second (3).  The console should show 3 (the quotient), 1 (remainder).  Just don't try to use a double with modulus because, the compiler will draw an error.    </p>

<hr />
<br />
<a href = "C++3.html">Previous page</a>
<span class = "next"> 
<a href = "C++5.html">Next Page </a></span>
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>