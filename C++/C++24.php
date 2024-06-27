<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>New Operator &amp; Heap - C++ Programming</title>
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
    
<h1>New Operator &amp; Heap - C++ Development</h1>
    
<!-- Data through pointers -->    
<h2>Using 'new' operator</h2>
    
    <p> In this section we are going to talk about: storing data in our heap using an operator called new.    </p>
    
    <hr />
<!-- Dynamically allocating with new -->
<h3>Dynamically allocating with new</h3>
    
    <p>    Using new.  In order to declare a storage bin on the heap, we need to create a variable which will be able to keep track of the items on the heap.  The only way to do this is by using a pointer variable along with using a function called new. New is different then other functions because it doesn't require the use of parenthese, furthermore we must declare the data type when using new.  In the example below we are going to use int for our datatype.
    
        <span class ="nl">int *xPtr = new int;</span> </p>
    
<!-- Example -->
<em>Example:</em>
<!-- Code section -->
<pre class = "code">
<span class = "comments">/* Using the 'new' function */</span>
#include &#60;iostream&#62; 
using namespace std; 

int main()
{ 
    int *ptr = new int; 
    *ptr = 10; 
    cout &lt;&lt; *ptr &lt;&lt; endl; 
    return 0;
} </pre>
    
    <p>Okay, so some of you might be asking, what's the point of all this.  Why can't we just create a variable declare it an int and intialize it to ten?  Well, that requires the use of memory and the computer will store that the return value of that variable in our memory. 
        
    <span class ="nl">However, if we use a pointer we won't need to name the variable or store it as a variable with a name, we can just use our 'new' function to store it on the heap and then call it from the heap when we need it. </span>   </p>
    
    <hr />
    
<!-- Using an intializer -->
<h3>Using an initializer </h3> 
    
    <p>    Previously, we declared an integer pointer, set it equal to an int, placed it on the heap using our new function and then intialized the variable on the heap using our pointer.  This time we are going to do that all in one line in order to intialize memory we allocate to the heap.   </p>
    
<!-- Example -->
<em>Example:</em>
<!-- Code section -->
<pre class = "code">
<span class = "comments">/* Using the 'new' function */</span>    
#include &#60;iostream&#62; 
using namespace std; 

int main() 
{ 
    int *ptr = new int(10);
    cout &lt;&lt; *ptr &lt;&lt; endl; 
    return 0;
} </pre>
    
    <p>Let's try this with a string. </p>
    
<!-- Example -->
<em>Example:</em>
<!-- Code section -->
<pre class = "code">
<span class = "comments">/* Using the 'new' function */</span>   
#include &#60;iostream&#62; 
using namespace std; 

int main()
{ 
    string *ptr = new string("Calling this string from the heap using a pointer"); 
    cout &lt;&lt; *ptr &lt;&lt; endl;
    return 0;
} </pre> 
    
    <p>Alternate methods to working with pointers and functions.
        
        <span class ="nl"> Remember when we wanted to use the length function in order to display all the characters for one of our strings.  We had to use parenthese around our pointer, there is another way to do this. </span></p>
    
<em>Code:</em>
<!-- code -->
<pre class = "code">
<span class="comments">//Old way</span>
cout &lt;&lt; (*ptr).length() &lt;&lt; endl; 
<span class="comments">//Alternative way</span>
cout &lt;&lt; ptr->length() &lt;&lt; endl;</pre>
    
<hr />
<br />
<a href = "C++23.html">Previous page</a>
<span class ="next">
<a href = "C++25.html">Next Page </a></span>
<br /><br />

</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>