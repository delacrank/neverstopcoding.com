<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<meta name="description" content="Learn to make your web sites interact with your users by coding with javascript. Javascript can give your web pages life by elements move, change shape, pop out or disappear." />
<meta name="keywords" content="Javascript, JS" />
<meta name="author" content="Juan Arias" />  
<title>Javascript - Operators Cont.</title>
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel="stylesheet"><link href='http://fonts.googleapis.com/css?family=Cormorant+Infant' rel="stylesheet"><link rel="stylesheet"
      type="text/css"
      href="../testcss.css">
</head>
<body>
    
 <!-- Header -->
<?php include('..//Includes//header.php'); ?>

<!-- Navigation2 -->
<?php include('..//Includes//nav.php'); ?>
    
<!-- Navigation2 -->
<?php include('..//Includes//nav2.php'); ?>

<!-- Left --><div class = "mainWrapper">
<?php include('..//Includes//Left_Jscript.php'); ?>
    
<!-- Right --> 
<div id ="rightz">

<h1>Statements</h1>
    
    <h2>Control Statements</h2>
    
        <p>I am not going to spend too much time going over every type of control statement because much of that information is covered in previous tutorials. Javascript incorporates the while, do-while, switch, for loop and for-in control statements. They are writen much the way you would write them in c except that you would use var to declare variables in a for loop.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// write a for loop that incrments to 10</span>
    for(var i = 0; i &lt; 10; i++) {
        console.log(i);
    } </pre>
    
    <hr />
    
    <h3>for-in and with operators</h3>
    
    <p>The for-in operator is similar to a for loop only executes every element in a given element, this could be elements in an array, object or other data structure. It works similar to the 'foreach' loop in PHP or C#.
    
    <span class = "nl">Here's an example below.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    var numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];
    
    <span class = "comments">// print the value each element in the array</span>
    for(var x in numbers) {
        console.log(numbers[x]);
    }</pre>
    
    <p>Even thou I haven't yet described how to declare and initialize arrays, the example is basically above. Note there a several ways to declare and initialize an array, this is just one example of doing so.</p>
    
    <hr />
    
    <h2>With Statement</h2>
    
    <p>The with statement is sort of like a directive, it includes the scope of the code below it into its scope.  For example, if I wrote several statements using the document.write() function, and didn't want to type out the word document every single time, then I could use the with statement.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// several statements writen like this</span>
    console.log("hello");
    console.log("good sir");
    console.log("how do you do?");
    
    <span class = "comments">// can be replaced by the with statement</span>
    with(console) {
        log("hello \n");
        log("good sir \n");
        log("how do you do?");
    }
    </pre>
    
    <p>In our next section we will start to dive into functions, how to create and use them in your code in order to organize your code into something cleaner and more structured.</p>
    
<hr />
<br />
<a href="Jscript1.php">Previous</a>
<span class = "next"><a href="Jscript3.php">Next Page</a></span>
<br /><br />    
    
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>