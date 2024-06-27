<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Pointer Variables - C++ Programming</title>
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
    
<h1>Pointer Variables - C++ Development</h1>
    
<!-- Data through pointers -->    
<h2>Pointers</h2>
    
    <p> We are going to talk about: declaring a pointer variable, changing a variable using a pointer and how to point to a string.     </p>
    
    <hr />
    
<!-- Declaring a pointer variable -->
<h3>Declaring a pointer variable</h3>
    
    <p>    Previously we learned how to display the location of a variable, and we can actually store that location using another variable.  Let's decalre this data type variable an int and place an asterisk star before it, so the computer will be able to reconginze it as a point variable.   </p>
    
<!-- Example -->
<em>Example:</em>
<!-- Code section -->
<pre class = "code">
<span class = "comments">/* Declaring a pointer */</span>   
#include &#60;iostream&#62; 
using namespace std; 

int main() 
{ 
    int *ptr;
    int NumberOfStreetLights = 700; 
    *ptr = &NumberOfStreetLights; 
    cout &lt;&lt; "The number of street lights is equal to " &lt;&lt; NumberOfStreetLights 
        &lt;&lt; " and the location for that number is " &lt;&lt; ptr &lt;&lt; endl; 
    return 0;
} </pre>
    
    <hr />
    
<!-- Changing a variable using a pointer -->
<h3>Changing a variable using a pointer</h3>
    
    <p>    So now that we have learned how to successfully declare a pointer variable, lets try changing the value of another data type using the pointer.  However to do this, we would have needed to already created a variable intiailized it with a value and set it equal to a pointer.    </p>
    
<!-- Example -->
<em>Example:</em>
<!-- Code section -->
<pre class = "code">
<span class = "comments">/* Changing a variable using a pointer */</span> 
#include &#60;iostream&#62;
using namespace std; 

int main() 
{ 
    int *ptr; 
    int NumberOfStreetLights = 700, x;
    cout &lt;&lt; "The number of street lights is equal to " &lt;&lt; NumberOfStreetLights &lt;&lt; endl;
    ptr = &NumberOfStreetLights;
    *ptr = 800;
    cout &lt;&lt; "The number of street lights is now equal to " 
             &lt;&lt; NumberOfStreetLights &lt;&lt; endl; 
    return 0;
} </pre> 
    
    <p> Let's say we want to save the current value of a pointer, we can just set it equal to another variable (x), then change the value of the pointer and the previous value is stored in the variable we stored it in (x).  </p>
    
<!-- Example -->
<em>Example:</em>
<!-- Code section -->
<pre class = "code">
<span class = "comments">/* Changing a variable using a pointer */ </span>
#include &#60;iostream&#62; 
using namespace std;

int main() 
{ 
    int *ptr, x; 
    int NumberOfStreetLights = 700; 
    cout &lt;&lt; "The number of street lights is equal to " 
             &lt;&lt; NumberOfStreetLights &lt;&lt; endl;

    ptr = &NumberOfStreetLights;
    x = *ptr; 
    *ptr = 800;

    cout &lt;&lt; "The number of street lights is now equal to " 
             &lt;&lt; NumberOfStreetLights &lt;&lt; endl; 
    cout &lt;&lt; "The number of street lights used to be equal to " &lt;&lt; x &lt;&lt; endl; 
    return 0; 
} </pre>
    
<br />
<hr />
    
<!-- Pointing to a string -->
<h3>Pointing to a string </h3>
    
    <p> Similar to pointing to integers we must declare the pointer a string data type first.<br /><br />string *(variablename) = &(variablename); 
    </p>

    
<!-- Example -->
<em>Example:</em>
<!-- Code section -->
<pre class = "code">
<span class = "comments">/* Pointing to a String */</span> 
#include &#60;iostream&#62; 
using namespace std; 

int main() 
{ 
    string *stringPtr;
    string x = "Mellow Yellow"; 
    stringPtr = &x; 
    
    cout &lt;&lt; "The location for our string x is" 
             &lt;&lt; stringPtr 
             &lt;&lt; "and the value for our string is " &lt;&lt; <span style="color:red">*stringPtr </span> &lt;&lt; endl;   
    return 0;
} </pre>
    
    <p> I may have forgotten to mention this before, but we can actually show the value of our variable if we write the pointer using the asterisk star, such as in the example above.   </p>
    
<hr />
<br />
<a href = "C++21.html">Previous page</a>
<span class ="next">
<a href = "C++23.html">Next Page </a></span>
<br /><br />

</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>