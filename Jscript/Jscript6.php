<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<meta name="description" content="Learn to make your web sites interact with your users by coding with javascript. Javascript can give your web pages life by elements move, change shape, pop out or disappear." />
<meta name="keywords" content="Javascript, JS" />
<meta name="author" content="Juan Arias" />  
<title>Javascript - Manipulating Data Structures</title>
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

<h1>Javascript Manipulating Data Structures</h1>
    
    <h2>Working with Data Structures</h2>
    
        <p>When we create an array or an object, each of the elements of this structure are stored in a sequential order. Usually this order is numbered from 0 - x where x is the size of that structure. You can determine the size of the strucutre using the length function (array.lenght).

        <span class = "nl">In this section we are going to go over various ways of adding, removing, splitting, merging and basically reordering items or elements within a data structure like an array.</span>

        <span class = "nl">We can first start with adding elements using the basic array literal notiation.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// Basic way to add items to the end of an array</span>
    var colors = ["red", "blue", "green"];
    
    <span class = "comments">// Initialize later elements, they will be added on automatically</span>
    colors[3] = "black";
    colors[4] = "purple";
    
    <span class = "comments">// We can check here to see they were added</span>
    for(var i = 0; i &lt; colors.length; i++) {
        console.log(colors[i]);
    }
    
    <span class = "comments">// A simplier way to call the elements in the array is using the toString function</span>
    console.log(colors.toString());
    
    <span class = "comments">// to remove the third and forth elements of this array</span>
    colors.length = 3;
    console.log(colors.toString());</pre>
    
    <p>Let's also see how we can check to see if a certain data type is an array before we start trying to add or remove elements from it.  This can be done using the 'isArray()' function.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    var colors = new Array();
    
    <span class = "comments">// will print true if its an array, false if not</span>
    console.log(Array.isArray(colors));</pre>
    
    <hr />
    
    <h3>Stack Methods</h3>
    
    <p>Now, let's look at an example of using some of the functions created in order to add or remove elements to the end of our array. These functions work similar to the way we manage memory on the stack, LIFO (last in first out).
    
    <span class = "nl">Similar to working with a stack of pancakes elements from the stack can only be added or removed to the end of the pile, any other arrangement would disturb the entire pile of pancakes. </span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// initialize the array to an empty set</span>
    var colors = [];
    
    <span class = "comments">// add a color to the array</span>
    colors.push("red");
    
    <span class = "comments">// check to see the color was added</span>
    console.log(colors.toString());
    
    <span class = "comments">// remove the color</span>
    colors.pop();
    
    <span class = "comments">// let's check again </span>
    console.log(colors.toString());</pre>
    
    <p>Great but, push and pop functions aren't limited to adding or removing just one element at a time, and the types of data that can be added to an array aren't limited to just strings. Let's look at something more complicated, like added a number an array and a string to the end of this array.
    
    <span class = "nl">Pop as a function just removes one element at a time, so if you want to remove more then one element, you can call it multiple times or just use a for loop.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// initialize the array</span>
    var colors = ["red", "blue", "yellow"];
    
    <span class = "comments">// add an integer, a string and an array to our colors array</span>
    colors.push(1, "juice", ["mime", "pillow"]);
    
    <span class = "comments">// display the contents as a string</span>
    console.log(colors.toString());
    
    <span class = "comments">// remove the last three elements from out array</span>
    for(var i = 0; i &lt; 3; i++)
        colors.pop();
        
    <span class = "comments">// display the array again</span>
    console.log(colors.toString());</pre>
    
    <p>Basically stack methods focus primarily on removing elements from the back or adding them to the back of an array, let's see how this differs from something called a Queue.</p>
    
    <hr />
    
    <h3>Queue Methods</h3>
    
        <p>A queue goes by a different principle of first in first out. So similar to a stack where first out applies (meaning elements will be removed from the back of the array), a queue differs from where we will be adding the elements. They will be added to the front of the data structure.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    var colors = ["red", "blue", "green"];
    
    <span class = "comments">// add colors to the front of the array</span>
    colors.unshift("purple", "black");
    
    console.log(colors.toString());
    
    <span class = "comments">// now let's remove one color from the list</span>
    colors.shift();
    
    <span class = "comments">// display the results</span>
    console.log(colors.toString());</pre>
    
    <p>That is enough for now, we will continue working with data structures in the next section.</p>   
    
<hr />
<br />
<a href="Jscript5.php">Previous</a>
<span class = "next"><a href="Jscript7.php">Next Page</a></span>
<br /><br />    
    
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>