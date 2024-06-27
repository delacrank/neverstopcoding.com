<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" /> 
<title>Using Ref &#38; Out parameters - C# programming</title>
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


<h1>Using Ref &#38; Out parameters - Learning C#</h1>
    
<h2>Using Ref &#38; Out parameters</h2>
    
    <p>In this section, we are going to talk about how to use ref and out parameters in our method arguments to go beyond the scope of our methods.</p>
    
<hr />
    
<!-- Ref Params -->
<h3>Ref Parameters</h3>
    
    <p>So, what is a ref parameter?  Ref is short for reference.  
        
    <span class = "nl">Normally what happens when we use a method to perform a function in our program, the program will create a copy of the parameter we need for our argument.  Then it will apply the instructions from the method and apply it to our argument.</span>
        
    <span class = "nl">Remember this code?</span></p>
    
<em>Code:</em>
<!-- code -->
<pre class="code">
using System; 

namespace Parameters 
{     
    class Pass 
    { 
        public static void Value( int change )
        {
            change = 5;
        }
    
        public static Main()
        { 
            int i = 0; 
            Console.WriteLine(i);
            Pass.Value(i); 
            Console.WriteLine(i); 
        }
    }
}</pre>
    
    <p>Let's see what happens when I use a ref variable instead. </p>
    
<em>Code:</em>
<!-- code -->
<pre class="code">
using System; 

namespace Parameters 
{    
    class Pass 
    {         
        public static void Value( <span class="highlight">ref</span> int x )
        { 
            x = 5;  <span class = "comments">// This variable  <u>doesn't</u> need to be initialized when using the ref parameter.</span>
        } 
    
        public static void Main()
        { 
            int i = 0; <span class = "comments">// This variable requires initialization when using the ref argument.</span>
            Console.WriteLine( i); 
            Pass.Value(<span class="highlight">ref</span> i); 
            Console.WriteLine(i);
        }
    }
}</pre>
    
   <p>Changes we make to the variable in our 'Value' scope are also affected in our 'Main' method as well.  So we can assign values to different methods or classes by using declaring certain variables 'ref' objects.</p>
    
<hr />    
    
<!-- Out parameters -->
<h3>Out parameters</h3>
    
    <p> Let's take a look at the out parameter, which is similar to the ref parameter only with some minor differences. </p>
    
<em>Code:</em>
<!-- code -->
<pre class="code">
using System; 

namespace Parameters 
{    
    class Pass 
    {        
        public static void Value( <span class="highlight">out</span> int x )
        { 
           x = 5; <span class = "comments">// must be initialized using the out parameter.</span>
        } 
    
        public static void Main()
        { 
            int i; <span class = "comments">// This variable <u>doesn't</u> require initialization when using the out argument.</span>
            Console.WriteLine( i);
            Pass.Value(<span class="highlight">out</span> i);
            Console.WriteLine(i);
        }
    }
}</pre>
    
<hr />
<br />
<a href = "Csharp6.html">Previous Page</a>
<span class ="next">
    <a href = "Csharp8.html">Next Page</a></span>
<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>