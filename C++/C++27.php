<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Passing by Reference - C++ Programming</title>
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
    
<h1>Passing by Reference - C++ Development</h1>
    
<!-- Data through pointers -->    
<h2>Referring to Data through Pointers cont.</h2>
    
    <p>    This will be the last section on referring to data through pointers before we move on to creating classes.  All that remains is returning a pointer as a nonpointer and passing by reference.    </p>
    
<hr />
    
<!-- Returning a pointer as a nonpointer --> 
<h3>Returning a pointer as a nonpointer</h3>
    
    <p>This will be an example of how to dereference a pointer so you don't need to use it as a pointer. </p>

<!-- Example -->
<em>Example:</em>
<!-- Code section -->
<pre class = "code">
<span class = "comments">/* Deferencing Pointers */</span> 
#include &#60;iostream&#62;
using namespace std; 
    
string *GetCode2() 
{
    string *code = new string("ABCDEF");     
    return code; 
} 
    
int main() 
{  
    string <span style="color:red">newcode</span>;
    int index;
    
    for (index = 0; index &lt; 10; index++)  
    {  
        newcode = <span style="color:red">*</span>GetCode2(); 
        cout &lt;&lt; <span style="color:red">newcode</span> &lt;&lt; endl; 
    } 
    return 0;
}</pre>

<p> Notice how we declared the string 'newcode' as just a string, and then set it equal to our function with the asterisk in front of it.  If i were to remove the asterisk from the function when I intialized the string then it would try to convert it from: pointer function to a string function (that would cause an error).    
</p>
    
<hr />    
<!-- Passing by reference -->
<h3>Passing by reference</h3>
    
    <p>
    Remeber how earlier we talked about hexadecimal numbers and how the computer stores the addresses for our variables using hexadecimal notation.  Well, we are going to use those reference points to modify variables from different functions without having to use a pointer.
    </p>
    
<!-- Example -->
<em>Example:</em>
<!-- Code section -->
<pre class = "code">
<span class = "comments">/* Passing by Reference */</span>
#include &#60;iostream&#62; 
using namespace std; 

void AddTen(int &#38;myRef) 
{
    myRef += 10;
} 
    
int main()
{  
     int myNumber = 30;
     AddTen(myNumber); 
     cout &lt;&lt; myNumber &lt;&lt; endl;
     return 0;
}</pre>
    
<p>Make sure that you use the correct case, whether it be upper or lower case.  The address or reference point for myNumber is different than mynumber.    </p>
    
<hr />
<br />
<a href = "C++26.html">Previous page</a>
<span class ="next">
<a href = "C++28.html">Next Page </a></span>
<br /><br />

</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>