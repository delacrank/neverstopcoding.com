<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<meta name="description" content="Learn to make your web sites interact with your users by coding with javascript. Javascript can give your web pages life by elements move, change shape, pop out or disappear." />
<meta name="keywords" content="Javascript, JS" />
<meta name="author" content="Juan Arias" />  
<title>Javascript - Sort, Reverse, Compare</title>
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

<h1>Javascript Manipulating Data Structures Cont.</h1>
    
    <h2>Sort, Reverse, Compare</h2>
    
    <p>Perviously we talked about stack and queue methods for adding or removing elements from a data structure like an array. In this section, we are going to go more in depth on how to combine arrays, split them, add items inbetween elements, and sort the elements in ascending or descending order.
    
    <span class = "nl">Let's start with simply reording the elements within our array, using either a sort or a reverse method.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// a random set of numbers</span>
    var numbers = new Array(3, 6, 0, 2, 7, 10, 14, 4);
    
    <span class = "comments">// let's rearrange these numbers into a sequential order</span>
    numbers.sort();
    
    <span class = "comments">// print them, to see how they were ordered</span>
    console.log(numbers.toString());</pre>
    
    <p>Alright, if we look at the results of this we can see the array was clearly sorted, but there is a problem, are sorting method only placed the numbers in sequential order based on the appearance of numbers so: 0, 10, 14, 2, 3, 4, 6, and 7.
    
    <span class = "nl">This is similar to the way it would have sorted an array of strings, however if we want to sort this array based on the value and not the appearance we need to write a function for our sorting array.</span>
    
    <span class = "nl">Think of the compare function as a way of incrementing or decrementing the order based on the value returned based its exisiting order within the array.</span>  </p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class="comments">// compare the two numbers for value</span>
    function compare (val1, val2) {
        if(val1 &lt; val2) {
            return -1;
        } else if (val1 > val2) {
            return 1;
        } else {
            return 0;
        }
    }
    
    <span class = "comments">// now we can use this function in our sorting array</span>
    var numbers = [2, 4, 14, 0, 3, 7];
    
    <span class ="comments">// execute the sorting array</span>
    numbers.sort(compare);
    
    console.log(numbers.toString());</pre>
    
    <p>Let's say for example that we actually want to return the reverse order of our numbers, if we run the sorting array once again, it will simply return the numbers in sequential order rather then descending value based on numerical value.
    
    <span class="nl">Rather then just use the reserve function let's rewrite the function to compare the numbers based on the greatest number first.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class ="code">
    <span class = "comments">// the greater comparsion function</span>
    function compare(val1, val2) {
        if(val1 > val2) {
            return -1;
        } else if (val1 &lt; val2) {
            return 1;
        } else {
            return 0;
        }
    }
    
    var numbers = [2, 4, 14, 0, 3, 7];
    
    <span class = "comments">// here we can compare the two values returned when using different sorts</span>
    console.log(numbers.reverse());
    console.log(numbers.sort(compare));</pre>
    
    <p>Notice that the reverse function doesn't actually reverse the order based on the numerical value, it simply takes the sequential order and changes the values of how each element will appear.  So element[0], becomes element[5], and element[5] becomes element[0].
    
    <span class = "nl">Let's continue to talk about how we can maniupulate data structures in our next section.</span></p>
    
      
<hr />
<br />
<a href="Jscript6.php">Previous</a>
<span class = "next"><a href="Jscript8.php">Next Page</a></span>
<br /><br />    
    
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>