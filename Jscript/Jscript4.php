<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<meta name="description" content="Learn to make your web sites interact with your users by coding with javascript. Javascript can give your web pages life by elements move, change shape, pop out or disappear." />
<meta name="keywords" content="Javascript, JS" />
<meta name="author" content="Juan Arias" />  
<title>Javascript - Objects</title>
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

<h1>Javascript Objects</h1>
    
    <h2>Javascript declaring working w/ Objects</h2>
    
        <p>In this section we are going to dive into how to declare and initialize an object. We will also go into how we can use functions to intialize certain properties of an object, what json is.
    
        <span class = "nl">An object is usually placed in a different area of memory then a variable would be. It is actually placed on this thing called a 'heap', memory used on the heap can be more easily accessed.  The memory we used for working with regular variables is placed on something called a stack, the moment we are done with this type of memory it is removed.</span>
    
        <span class = "nl">This is why are values are destroyed once we leave the scope of a function, it is because that memory was stored on the stack.  Anyways, let's see how we can create an initialize an object.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class ="comments">// the new operator places the object on the heap</span>
    var person = new Object();
    
    <span class = "comments">// we can now define the properties of the object</span>
    person.name = "june";
    person.age = 10;
    
    <span class = "comments">// if we call these properties they should display the proper values</span>
    console.log(person.name + "\n");
    console.log(person.age); </pre>
    
        <p>Let's see how we can use this example with a function to change one of the property values and see if that change remains once we are outside the scope of the function.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// create the function</span>
    function changeName(obj) {
        obj.name = "june";
    }
    
    <span class = "comments">// initialize a new object</span>
    var person = new Object();
    
    <span class = "comments">// assign name property a value</span>
    person.name = "jason";
    
    <span class = "comments">// display that value before function call</span>
    console.log(person.name);
    
    <span class = "comments">// change that value</span>
    changeName(person);
    
    <span class = "comments">// display value after function call</span>
    console.log(person.name);</pre>
    
    <p>If you run this code on your machine, you can see that clearly this function was able to change the value of the objects name property even outside of the scope of the function.
    
    <span class = "nl">This is the difference is that the heap can be accessed globally where as memory on the stack is usually designated to the scope it is assigned to. Earlier when we were working with primitive types we could identify those types by using the typeof operator.</span>
    
    <span class = "nl">When working with complex types such as objects and arrays we can use the instanceof operator. Let's see an example of this below.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    var person = new Object();
    
    <span class = "comments">// will return either a true or false value</span>
    console.log(person instanceof Object);
    console.log(person instanceof Array);
    console.log(person instanceof RegEx); </pre>
    
    <p>One thing to take note of when working with memory used on the heap. Is that there is a limited amount of memory which can be used, so in order to manage that memory properly we need to do something which is called 'dereferencing'. In order to deference an object, simply assign it to a null value.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// Initialize and reference the object using the new operator</span>
    person = new Object();
    
    person.name = "june";
    
    console.log(person.name);
    
    <span class = "comments">// We can now deference the object after we have used it</span>
    person = null; </pre>
    
    <p>A reference is basically a pointer, so assigning the point to a null value frees up that memory for future objects.</p>
    
<hr />
<br />
<a href="Jscript3.html">Previous</a>
<span class = "next"><a href="Jscript5.html">Next Page</a></span>
<br /><br />    
    
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>