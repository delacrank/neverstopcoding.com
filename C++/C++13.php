<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Do While Loop - C++ Programming</title>
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
    
<h1>Do While Loop - C++ Development</h1>
    
<!-- Directly C++ Program Flow -->
<h2>Directing C++ Program Flow cont.</h2>
    
    <p>    We are going to continue talking about loops, although this time, we will use other variables besides just int and double to control our loops.  </p>

<hr />
    
<!-- Using true false values for while loops -->
<h3>Using true false values w/ while loops</h3>
    
    <p>    I hope that you have a good memory of many of the concepts we talked about in prior sections of this webpage because, in the next segment we will be combining variables from multiple sections. </p>
    
<!-- Example -->
<em>Example:</em>
<!-- Code section -->
<pre class = "code">
#include &#60;iostream&#62;
using namespace std;

int main()
{
    int i = 0;
    bool done = false;
    while (!done)
    {
        cout &lt;&lt; i &lt;&lt; endl;
        i++;
        if (i == 10)
            done = true;
    }
    
    cout &lt;&lt; "All done!" &lt;&lt; endl;
    return 0;
}</pre>    
    <p> Let's break down this program step by step, so we can really understand what exactly is going on.  </p>

<ol id = "li2">
<li>First we declare the variable 'i' an integer and intialize it to zero.</li>
<li>We declare the variable 'done' to a boolean and intialize it as false.</li>
<li>Start the while loop, setting the parameter to cancel the loop if the boolean 'done' <u>does</u> <u>not</u> remain false.</li>
<li>Write the value for the variable i using cout then end the line of output.</li>
<li>Increment i by one.</li>
<li>Using an if statment we check the value within i and compare if its equal to ten, if it is, then set the boolean 'done' equal to true.</li>
<li>The loop checks to see if done is equal to false, then preceeds to execute the instructions in the brackets: incrementing i by one and writing the value of i in the console, while checking to see if i is equal to ten.</li>
<li>Eventually, the loop increments i to equal ten the if statement sets 'done' equal to true. The while loop checks the parameter one final time to see if 'done' is false and ends the loop, our program continues writing last line of code into the console, "All done!".</li>
</ol>

<hr />

<!-- Do while -->
<h3>Do While loop</h3>

    <p> The do while is the while loop with a slight modification on when to execute the code. </p>

<!-- Example -->
<em>Example:</em>
<!-- Code section -->
<pre class = "code">
#include &#60;iostream&#62;
using namespace std;
    
int main()
{
    int i = 0;
    do
    {
        cout &lt;&lt; i &lt;&lt; endl;
        i++;
    }
    while (i &lt;= 10);
        cout &lt;&lt; "All done!" &lt;&lt; endl;
        
    return 0;
}</pre>

    <p>    The major benefit of using the do while loop, is that the code is at least executed once before the loop checks to see if the parameters are true.</p>

<hr />
<br />

<a href = "C++12.html">Previous page</a>
<span class ="next">
    <a href = "C++14.html">Next Page </a></span>
<br /><br />

</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>