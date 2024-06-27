<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Delete Operator - C++ Programming</title>
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
    
<h1>Delete Operator - C++ Development</h1>
    
<!-- Data through pointers -->    
<h2>Using 'delete' operator</h2>
    
    <p> We are going to talk about freeing up pointers and passing pointer variables to functions in this section.   </p>
    
<hr />    
    
<!-- Delete function -->
<h3>Delete function</h3>
    
    <p>    The new function will place data on the heap. The delete function will free up this  memory when, you are done with that variable (storage bin).    </p>
    
<!-- Example -->
<em>Example:</em>
<!-- Code section -->
<pre class = "code">
<span class = "comments">/* Using the 'delete' function */</span>    
#include &#60;iostream&#62;
using namespace std; 

int main() 
{ 
    string *ptr = new string("Temporary string"); 
    cout &lt;&lt; *ptr &lt;&lt; endl; 
    (*ptr).replace(10, 6, "player"); 
    cout &lt;&lt; *ptr &lt;&lt; endl; 
    ptr->replace(0, 9, "Permanent"); 
    cout &lt;&lt; *ptr &lt;&lt; endl; 
    delete ptr;
    return 0;
} </pre>
    
    <p>  In this example, I made use of both ways of using a pointer variable with a function, so you can get familiar with either one.  Although, in our future examples we will be sticking to the dash greater than sign (->).
        
        <span class = "nl">  The delete function isn't always necessary, however, if you want to create a large program which requires a lot of memory than it might be worth considering.  Especially, if you don't want to have all of these variables floating around which, could potentially cause problems in the future.</span> </p>
    
<hr />
    
<!-- Passing pointer variables to functions -->
<h3>Passing pointer variables to functions</h3>
    
    <p>    Remember when we talked about keeping your variables local in our dividing your work into functions section. How a variable created in one function will remain local to that function and wouldn't be able to be modified in another, unless we used a global variable. 
        
<span class = "nl">Let's take a look at how our functions interact with our variables.    </p>
    
<!-- Example -->
<em>Example:</em>
<!-- Code section -->
<pre class = "code">
<span class = "comments">/* Passing pointer variables through functions */</span>     
#include &#60;iostream&#62; 
using namespace std; 

void AddTen (int newNumber) 
{
    newNumber += 10; 
    cout &lt;&lt; "Inside the function " &lt;&lt; newNumber &lt;&lt; endl; 
} 

int main()
{ 
    int myNumber = 30; 
    cout &lt;&lt; "Before the function " &lt;&lt; myNumber &lt;&lt; endl; 
    AddTen(myNumber); 
    cout &lt;&lt; "After the function " &lt;&lt; myNumber &lt;&lt; endl; 
    return 0;    
}</pre>
    
    <p> In this example, we see how the variable myNumber was increased by ten via the use of the function, yet remained at its original value once we called it again from our main function. 
    
    <span class="nl">Below we are going to modify the program so that we use a pointer to change the value of our variable within our 'AddTen' function.</span> </p>
    
<!-- Example -->
<em>Example:</em>
<!-- Code section -->
<pre class = "code">
<span class = "comments">/* Passing pointer variables through functions */</span>    
#include &#60;iostream&#62;
using namespace std; 

void AddTen (int <span style="color:red">*newNumber</span>) 
{
    (<span style="color:red">*newNumber</span>) += 10; 
    cout &lt;&lt; "Inside the function " &lt;&lt; (<span style="color:red">*newNumber</span>) &lt;&lt; endl;
} 

int main()
{ 
    int myNumber = 30; 
    cout &lt;&lt; "Before the function " &lt;&lt; myNumber &lt;&lt; endl; 
    AddTen(<span style="color:red">&amp;myNumber</span>); 
    cout &lt;&lt; "After the function " &lt;&lt; myNumber &lt;&lt; endl; 
    return 0; 
}</pre>

    <p>I highlighted the changes made in the program so you can see that we are using pointers in our AddTen function instead of integer varaibles which remain local to the function.
    
    <span class = "nl">Also, notice how when we applied the AddTen function to our main function we used the 'myNumber' address instead of the value.</span> </p>
    
<em>Code:</em>
<!-- code -->
<pre class="code">Addten(&amp;myNumber);</pre>
    
    
    <p>This was done because our pointer is going to be referring to the variable by its location, not the value stored within it. </p>
    
<hr />
<br />
<a href = "C++24.html">Previous page</a>
<span class ="next">
<a href = "C++26.html">Next Page </a></span>
<br /><br />

</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>