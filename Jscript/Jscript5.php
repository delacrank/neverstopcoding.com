<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<meta name="description" content="Learn to make your web sites interact with your users by coding with javascript. Javascript can give your web pages life by elements move, change shape, pop out or disappear." />
<meta name="keywords" content="Javascript, JS" />
<meta name="author" content="Juan Arias" />  
<title>Javascript - Complex Data Types</title>
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

<h1>Javascript Complex Data Types</h1>
    
    <h2>Objects Continued</h2>
    
    <p>Let's look at a few other ways to declare and initialize an object. There is a certain notation called object literal notation, it is similar to the way you would declare an array only without using the openning and closing curly braces to indicate it was an array. 
    
    <span class = "nl">Example below.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// one way to create the object</span>
    var person1 = new Object();
    person.name = "june";
    person.age = 50;
    
    <span class = "comments">// another way to initialize the object</span>
    var person2 = {
        name : "june",
        age : 50
    };
    
    <span class = "comments">// yet a third way to initiallize the object</span>
    var person3 = {};
    person3.name = "june";
    person3.age = 50;</pre>
    
    <p>There is also another way to call objects once they are declared. So far we have been using a notation called dot notation, we can use square brackets instead.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    var person = {
        name : "june"
    };
    
    <span class = "comments">// similar to the way we would call an associative array</span>
    console.log(person[name]);</pre>
    
    <hr />
    
    <h3>Arrays</h3>
    
        <p>We may have saw a small example of creating and using an array in the for loop example.  In this section I will go over a few ways to declare and initialize an array. Let's start with the most common way, this is actually the same way you declare an array in java.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// similar to declaring an object, we use a constructor to create an array</span>
    var colors = new Array();
    
    <span class = "comments">// allocate 20 spaces for an array</span>
    var colors2 = new Array(20);
    
    <span class = "comments">// declare and initialize the array</span>
    var colors3 = new Array("red", "white", "blue", "yellow"); </pre>

        <p>So this is how you create an array, yet there are multiple ways of creating arrays, let's look at how we would create an array using the array literal notation. 

        <span class = "nl">Similar to the way we created an object by using the object class and creating an instance of it, then we created the object using object literal notation. The same principles apply to arrays.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class ="comments">// Array literal notation</span>
    <span class ="comments">// Array initialized with 3 elements</span>
    var colors = ["red", "blue", "green"];
    
    <span class ="comments">// empty array</span>
    var colors2 = [];
    
    <span class ="comments">// loop through the array</span>
    for(var x in colors) {
        console.log(colors[x]);
    }</pre>
    
    <p>In the next section we are going to go over several of the functions we can use to manipulate the elements within this container or structure 'array'.</p>
    
    
    
<hr />
<br />
<a href="Jscript4.php">Previous</a>
<span class = "next"><a href="Jscript6.php">Next Page</a></span>
<br /><br />    
    
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>