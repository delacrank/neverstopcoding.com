<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Manipulating Chars and Strings - C++ Programming</title>
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
    
<h1>Manipulating Chars and Strings - C++ Development</h1>

<!-- Working with characters and strings cont. -->
<h2>Working with chars and strings cont.</h2>
    
    <p>    We will talk more about strings and manipulating the values of our variables in this section. However, we will also include a section on variables which we don't want to change, these types of variables are called constants.  </p>  
    
<hr />
    
<!-- Values in strings -->
<h3>Manipulating Values in Strings</h3>
    
    <p> When working with integers we learned that we can manipulate the value of our variables by adding, subtracting, multiplying, dividing and/or re-intializing the variable to contain either a different value or changing the variable name by setting the variable equal to another int variable. </p>
   
<em>Example:</em>
<!-- Code section -->
<pre class = "code">#include &#60;iostream&#62;
using namespace std;

int main()
{
    int first = 10;
    cout &lt;&lt; first &lt;&lt; endl;
    int second = 20;
    first = second;
    cout &lt;&lt; first &lt;&lt; endl;
    return 0;
}</pre>

    <p>    Now, can we do this with strings and how about chars as well?  Maybe we can use the values in strings and chars interchangably.    </p>
    
<!-- Example -->
<em>Example:</em>
<!-- Code section -->
<pre class = "code">
#include &#60;iostream&#62;
using namespace std;

int main()
{
    string mystring;
     mystring = "hello there";
    char mong = mystring[3];
    cout &lt;&lt; mong &lt;&lt; endl;
    return 0;
}</pre>
    
<hr />

<!-- Altering Strings -->
<h3>Altering strings</h3>

    <p>    How do we add, remove or change parts of our string?  We will go into some examples of how to do this using our operators equals and plus.   </p>

<!-- Example -->
<em>Example:</em>
<!-- Code section -->
<pre class = "code">
#include &#60;iostream&#62;
using namespace std;
   
int main()
{
    string x = "abcdef";
   x[1] = 'q';
    cout &lt;&lt; x &lt;&lt; endl;
    return 0;
}</pre>
    
    <p>    In the previous example, we were able to change the second letter of our string 'x' to equal 'q' instead of 'b'.  So our console displayed 'aqcdef' instead of 'abcdef'.

<span class = "nl"> Lets see what happens if i add a letter.</span> </p>

<!-- Example -->
<em>Example:</em>
<!-- Code section -->
<pre class = "code">
#include &#60;iostream&#62;
using namespace std;

int main()
{
    string x = "abcdef";
    x += 'g';
    cout &lt;&lt; x &lt;&lt; endl;
    return 0;
}</pre>

<p>What if we used strings in an expression?    </p>

<em>Example:</em>
<!-- Code section -->
<pre class = "code">
#include &#60;iostream&#62;using namespace std;

int main()
{
    string first = "hello";
    string second = "there";
    string third = first + " " + second;
    cout &lt;&lt; third &lt;&lt; endl;
    return 0;
}</pre>
    
<br />
<hr />

<!-- Constants -->
<h3>Constants</h3>
    
    <p>    Let's say that you had a string or an integer which you didn't want to change.  For example pi or 3.14159, how could we keep this integer from changing it's value through computation from either a user or another programmer working with our code?    </p>

<em>Example:</em>
<!-- Code section -->
<pre class = "code">
#include &#60;iostream&#62;
using namespace std;
   
int main()
{
    const double pi = 3.14159;
    double value1 = 2;
    pi = value1;     cout &lt;&lt; pi &lt;&lt; endl;     return 0;
}</pre>

<p>What happened, did we get pi is a 'read-only' variable compiler error?  This is because we removed the ability to write new values into the variable pi when we declared it a constant.</p>
    
<hr />
<br />
<a href = "C++5.html">Previous page</a>
<span class="next">
    <a href = "C++7.html">Next Page</a></span>
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>