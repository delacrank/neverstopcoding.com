<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Python - Intro to Python Programming</title>
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
<?php include('..//Includes//Left_Python.php'); ?>
    
<!-- Right --> 
<div id ="rightz">

<h1>Conditionals - Python Development</h1>
    
<h2>If statements, compoound conditions</h2>

    <p>We are going to go over learning how to use conditions in Python this time for being able to determine whether a variable is either equal to, greater then, less then or not equal to another value.</p>
    
<em>Code:</em>    
<!-- Code -->
<pre class="code"><span class = "comments"># comparison of strings</span>
name1 = "Jayce"
name2 = "June"
if name1 == "Jayce":
    print("the names are equal")
else:
    print("name are not equal")

<span class = "comments"># comparison of strings</span>
num1 = 3
num2 = 5
if num1 > num2 and 5 != 6:
    print("conditional statement works")
else if: num1 == 3 or num1 == 5
    print("another example of condition")</pre>   

<h2>Conditional Loop statements</h2>

    <p>Let's look at some examples of how we can use conditional statements in an collection. First we can use an 'in' statement to test to see if a value is located within a loop. Next, we can use an 'if' statement combined with a 'not' statement to see if a value is not located within a given set of values.</p>

<em>Code:</em>    
<!-- Code -->
<pre class="code">instruments = ['drum', 'flute', 'guitar']
if 'guitar' in instruments:
    print("we have an guitar")

if 'flute' not in instruments:
    print("we are missing a flute from our instruments")</pre>

    <p>We can finish up this section by understanding the if else condition.</p>

    <em>Code:</em>    
<!-- Code -->
<pre class="code">num = 5;

if num > 7:
    print("its big")
elif num < 3:
    print("its small")
else:
    print(f"the number is {num}")</pre>

<br />
<hr />
    
<a href="Python1.php">Previous Page</a>
<span class = "next"><a href="Python3.php">Next Page</a></span>
<br /><br />  
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>