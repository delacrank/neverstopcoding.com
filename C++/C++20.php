<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Global Variables &amp; Header Wrappers - C++ Programming</title>
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
    
<h1>Global Variables &amp; Header Wrappers - C++ Development</h1>
    
<!-- Source code files -->
<h2>Dividing between source-code files</h2>
    
    <p>    We are going to talk about declaring global variables and using mysterious headers before we move on to our next chapter, referring to data using pointers.    </p>
        
<!-- Global variables -->
<h3>Declaring Global Variables</h3>

    <p>    Not sure if you remember earlier when we had tried to share a variable between our function and our main function.  Well, we couldn't but, a global variable is exactly that. A global variable is shared in every source file and changes made to the variable in any file are shared in every file.     </p>
    
<!-- Example -->
<em>Example:</em>
<!-- Code section -->
<div style = "border: 4px darkblue inset; padding: 1em 1em 1em">
<pre class = "code">
<span class = "comments">/* The main function */</span>   
#include &#60;iostream&#62; 
#include "sharealike.h"
using namespace std; 

int main() 
{ 
    DoubleCheeseburgers = 20; 
    EatAtJoes();
    return 0;
} </pre> <br />

<pre class = "code">
<span class = "comments">/* sharealike header */</span>
#ifndef SHAREALIKE_H_INCLUDED 
#define SHAREALIKE_H_INCLUDED 

extern int DoubleCheeseburgers;
void EatAtJoes(); 

#endif // SHAREALIKE_H_INCLUDED</pre>
<br />

<pre class = "code">
<span class = "comments">/* EatAtJoes function */</span> 
#include &#60;iostream&#62;
#include "sharealike.h"
using namespace std; 
    
int DoubleCheeseburgers; 
    
void EatAtJoes()
{
    cout &lt;&lt; "How many cheeseburgers today?" &lt;&lt; endl; 
    cout &lt;&lt; DoubleCheeseburgers &lt;&lt; endl; 
}</pre>
</div>
    
    <p>    Okay, similar to before we had 3 files, 2 sources files and our header file.  Before we used the header file to link our function to our main source file, this time we are doing the same only we are declaring a variable which will be shared between those two files as well.
   
        <span class  ="nl">    Note, that when we declared the DoubleCheeseburgers variables we used the word 'external'.  This is important otherwise this variable will remain local to the header file.</span>  </p>
    
<hr />
    
<!-- Mysterious header wrappers -->
<h3>Mysterious header wrappers</h3>
    
    <p>    Okay, so when we create our header file you will notice two lines of code in the very beginning.  You have your #ifndef HEADER_H and then you have #define HEADER_H.  What do these mean?  </p>
    
<dl>
    <dt>#ifndef</dt>
        <dd>Will check to see if the header symbol (name) is defined already, similar to our if else statements.</dd>
    <dt>#define</dt>
        <dd>Defines the header symbol if it isn't already defined so the compiler knows what to with it.</dd>
    <dt>#endif</dt>
        <dd>Exactly what it states it does.  End the if statement if the symbol is defined, and if it isn't defined then define it.  Now the compiler can skip headers added twice by checking which ones are already defined (as per this statement).</dd>
</dl>
    
<hr />
<br />
<a href = "C++19.html">Previous page</a>
<span class ="next">
<a href = "C++21.html">Next Page </a></span>
<br /><br />

</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>