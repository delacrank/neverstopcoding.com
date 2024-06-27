<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<meta name="description" content="Learn to Algorithms" />
<meta name="keywords" content="Algorithms" />
<meta name="author" content="Juan Arias" />  
<title>Big O - Algorithms</title>
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
<?php include('..//Includes//Left_Algorithms.php'); ?>
    
<!-- Right --> 
<div id ="rightz">

<h1>Big O - Learning Algorithms</h1>
    
  <h2> Return the largest</h2>
    
    <p>Let's look at an example in c of how we can take an array and pass it into a function in order to determine the largest value within the array.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    int CompareToMax(int array[], int n) {
        int curlMax, i;
        
        if(n &lt;= 0) 
            return -1;
            
        curMax = array[0];
        
        for(i = 1; i &lt; n; i++) {
            if(array[i] >  curMax) {
                curMax = array[i];
            }
        }
        
        return curMax;
    }</pre>
    
    <p>So, this is simple enough we have created an algorithm in order to determine the greatest value for one of the elements in our array.
    
    <span class='nl'>Let's look at another example we could use in order to return that same value although this time let's use a different algorithm</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    int CompareToAll(int array[], int n) {
        int i, j;
        bool isMax;
        
        if(n &lt;= 0) 
            return -1;
                
        <span class = "comments">// create a nested for loop in order to compare each value to each other value</span>
        for (i = n - 1; i > 0; i--) {
            isMax = true;
            <span class = "comments">// we take the index's of each element in order to compare the values to each other</span>
            for(j = 0; j &lt; n; j++ ) {
                if(array[j] > array[i]) {
                    isMax = false;
                    break;
                }
            }
        }
    }</pre>
    
    <p>So these are two different types ways of returning a max value from a function which accepts an array. The difference between these types is the amount of operations necessary in order to return that value.
    
    <span class = "nl">One returns the max value from the array using one for loop while the other one requires two for loops.</span></p>
    
    <hr />
    
    <h2>Big O Notation</h2>
    
        <p>Big O is a way in which to calculate the amount of operations in order to return a certain value. I will create a list below on the different ways to measure the efficiency of an algorithm.</p>
    
    <ul id='li'>
        <li><b>O(log): </b> An algorithm said to be logarithmic.</li>
        <li><b>O(n): </b> A linear algorithm running time increases if its running time increases in direct proportion to the input size.</li>
        <li><b>O(n log n): </b> A superlinear algorithm is midway between a linear algorithm and polynomial algorithm.</li>
        <li><b>O(n<sup>c</sup>):</b> A polynomial algorithm grows quickly based on the size of the input.</li>
        <li><b>O(c<sup>n</sup>):</b> An exponential algoirthm grows even faster than a polynomial algorithm.</li>
        <li><b>O(n!): </b> A factorial algorithm grows the fastest an becomes quickly unuable for even small values of n.</li>
    </ul>
    
        <p>The first function uses O(n) notation increasing relative to the amount of elements inside the array.
    
        <span class = "nl">The second function uses O(n<sup>2</sup>) notation, so if wanted to reduce the amount of runtime required to return the max value then it would be to our advantage to use the first function.</span></p>
    
<hr />
<a href="Algorithms.php">Previous</a>
<span class = "next"><a href="Algorithms2.php"> Next page</a> </span>

<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>
