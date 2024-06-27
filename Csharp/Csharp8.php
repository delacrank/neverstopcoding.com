<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />  
<title>Boxing, UnBoxing - C# programming</title>
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
<?php include('..//Includes//Left_Csharp.php'); ?>
    
<!-- Right -->
<div id ="rightz">


<h1>Boxing, UnBoxing, Is and As - Learning C#</h1>
    

<!-- Boxing &#38; UnBoxing -->
<h2>Boxing, UnBoxing, Is and As</h2>

    <p> In this section, I will show you how to box and unbox primitive data types as well as objects.  Use 'is' and 'as' operators for our object operands. </p>
    
<hr />

<!-- Boxing -->
<h3>Boxing</h3>
    
    <p>Boxing is commonly used when you want to variables to point to the same value.  Let's take a look at that.</p>
    
<em>Code:</em>
<!-- code -->
<pre class="code">
int i = 10;

object o = i; <span class="comments">// Boxed</span></pre>
    
    <p>We just boxed variables 'o' and 'i', we can now use 'o' to refer to the value of 'i', however if we assign 'i' to something new, object 'o' will still retain integer 'i's initial value.</p>
    
<hr />

<!-- UnBoxing -->
<h3>UnBoxing</h3>
    
    <p>Before we get into how to unBox variables and objects, we must first understand what a 'cast' is.  A 'cast' is operation which checks whether or not it is safe to unbox an object.
        
    <span class="nl">Let's look at an example of this.</span></p>
    
<em>Code:</em>
<!-- code -->
<pre class="code">
Square s = new Square();
int x = 10;
object o = x;
o = s; <span class="comments">// Wait, what is stored in s? </span></pre>

    <p>The answer is no and similarily we can assign integers equal to strings unless we 'parse' them first.
        
        <span class = "nl">So, one way to check for this is to use the 'cast' operation.</span>
    
        <span class = "nl">Now, that we know what 'casting' is, let's take a look at unboxing.</span></p>
    
<em>Code:</em>
<!-- code -->
<pre class="code">
int x = 10;
object o = x;

int i = <span class="highlight">(</span>int<span class="highlight">)</span>o;</pre>
    
<br />
<hr />
    
<!-- The is operator -->
<h3>The 'is' Operator</h3>
    
    <p>The 'is' operator is something we can use to safely cast data.</p>
    
<em>Code:</em>
<!-- code -->
<pre class="code">
WrappedInt wi = new WrappedInt();
object o = wi;
if ( o <span class="highlight">is</span> WrappedInt )
{ 
    WrappedInt temp = (WrappedInt)o;
}</pre>

<p>This code essentially allows me to unbox 'o' and cast it as a 'WrappedInt' object, instead of being used as a reference for the 'wi' class.</p>
    
<hr />
    
<!-- The 'as' Operator -->
<h3>The 'as' Operator</h3>
    
    <p>Similar to the 'is' operator, 'as' works as an operator for objects and types.</p>
    
<em>Code:</em>
<!-- code -->
<pre class = "code">
WrapptedInt wi = new WrappedInt();
object o = wi;
WrappedInt temp = o <span class="highlight">as</span> WrappedInt;

if ( temp != null ) 
{ 
    Console.WriteLine("The cast was successfully");
}</pre>
    
<hr />
<br />
<a href = "Csharp7.html">Previous Page</a>
<span class ="next">
    <a href = "Csharp9.html">Next Page</a></span>
<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>