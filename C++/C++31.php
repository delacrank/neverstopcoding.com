<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>This Pointer - C++ Programming</title>
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
    
<h1>This Pointer - C++ Development</h1>
    
<!-- Working with Classes-->    
<h2>Working with Classes</h2>
    
    <p>    We are going to talk about how to pass objects to functions in this section.    </p>
    
<hr />    
    
<!-- Passing objects to functions -->
<h3>Passing objects to functions</h3>
    
    <p>In the last section we talked about how to modify our member variables using a pointer.  How about trying to modify those variables using a function?  Remember the section on using pointers with our functions, well we will do something similar with this section.    </p>

<em>Code:</em>
<!-- Code -->
<pre class="code">
void AddOne(int *number);</pre>
    
<p>The example above uses a pointer in the parameters so that the program will modify the variable based on its location.</p>
   
<em>Code:</em>
<!-- Code -->
<pre class="code">
void AddOne(Pen *InkColor); </pre>
    
<p>Suppose we wanted to do the same with an object instead.    </p>
    
<em>Code:</em>
<!-- Code -->
<pre class="code">
void AddOne(Pen &#38;InkColor); </pre>    

<p>Isn't this the same as well, yes only we are using a reference instead of a pointer so our instructions in the curly braces would look a little different. Let's look at the two differences top to bottom.</p>
    
<em>Code:</em>    
<!-- Code -->
<pre class="code">
void AddOne(Pen *InkColor)
{
    InkColor->Length(); 
    InkColor->Insert();  
} </pre>
    
<p>Or</p>
    
<!-- Code -->
<pre class="code">   
void AddOne(Pen &#38;InkColor)
{
    InkColor.Length(); 
    InkColor.Insert(); 
} </pre>
    
<p>Alright, now that we've covered the basics, let's take a look at an example of this used in action.</p>
    
<em>Example</em>
<!--Code-->
<pre class="code">
#include &#60;iostream> 
#include "Pen.h"     
using namespace std; 
    
void AddOne(Pen *number) 
{
    cout &lt;&lt; number->InkLevelPercent &lt;&lt; endl;
}
    
int main()
{
    Pen *ptrPen = new Pen();
    ptrPen->InkLevelPercent =+ 100;
    AddOne(ptrPen);
    return 0;
}</pre>
    
<p>We declared our pointer function.  Then we defined and created an instance of our pointer for the pen class. Following that we changed the value of a member variable using our newly created pointer object.  Then we use our pointer function to see the changes made to our member variable. </p>    

<!--Using the this pointer -->
<h3>'this' Pointer</h3>
    
    <p>    Ths 'this' pointer simply contains the address for a member variable.  In the example below, we will use block as a parameter for one more cheese gone.  Then, we will use the block pointer in order to access a member variable called status. 

        <span class = "nl">However, we still need to point to the function OneMoreCheeseGone, so we will use the 'this' pointer in order to accomplish that task.  </span>  </p>
    
<!-- Example -->
<em>Example</em>
<!-- code -->
<pre class="code">
#include &#60;iostream> 
using namespace std; 
    
class Cheese 
{
public:
    string status; 
    void eat();
    void rot(); 
};
    
int CheeseCount;

void OneMoreCheeseGone(Cheese *Block) 
{
    CheeseCount--; 
    Block->status = "Gone"; 
}; 
    
void Cheese::eat()
{ 
    cout &lt;&lt; "Eaten up! Yummy" &lt;&lt; endl; 
    OneMoreCheeseGone(this); 
} 

void Cheese::rot() 
{
    cout &lt;&lt; "Rotted away! Yuck!" &lt;&lt; endl;
    OneMoreCheeseGone(this); 
} 
    
int main() 
{
    Cheese *asiago = new Cheese(); 
    Cheese *limburger = new Cheese(); 
    CheeseCount = 2; 

    asiago->eat();
    limburger->rot(); 
        
    cout &lt;&lt; endl; 
    cout &lt;&lt; "Cheese count: " &lt;&lt; CheeseCount &lt;&lt; endl; 
    cout &lt;&lt; "asiago: " &lt;&lt; asiago->status &lt;&lt; endl;
    cout &lt;&lt; "limburger: " &lt;&lt; limburger->status &lt;&lt; endl; 
        
    return 0; 
}</pre>

<p>Let's take a look at our main function.  We defined two pointers, asiago and limburger under the Cheese class.  In addition, we also used two functions from our cheese class in order to access another function from the class called, "OneMoreCheeseGone".
    
    <span class = "nl">Then, we set our CheeseCount equal to two (this integer was defined outside of our class so assigning it a new value is ok). </span>
    
    <span class = "nl">Following this we used our pointers to refer to functions within our cheese class.  We also know that the eat function will display, "Eaten up Yummy", decrement our CheeseCount by one, and call the OneMoreCheeseGone function using the 'this' pointer.</span>
    
    <span class = "nl">The rot function will perform in the same manner, with the difference being that it will display, "Rotted away! Yuck!".</span>
    
    <span class = "nl">Finally, we check to see how much cheese is left using our member variable status.</span></p>
    
<hr />
<br />
<a href = "C++30.html">Previous page</a>
<span class ="next">
<a href = "C++32.html">Next Page </a></span>
<br /><br />

</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>