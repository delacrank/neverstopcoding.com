<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>References and Values - Programming C#</title>
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


<h1>References and Values - Learning C#</h1>
    
<h2>References and Values</h2>
    
<p>In this section, we will learn about pointers, and passing values from fields to objects.</p>
    
<hr />
    
<!-- this pointer -->
<h3 >'this' Pointer</h3>
    
    <p>'this' is a keyword which refers to a field in the current object.<span class ="nl">Below, we are going to look at an example of how to use the, 'this' pointer in reference to fields (number1 , number2) pertaining to the same object.</span></p>
    
<em>Code:</em>
<!-- code -->
<pre class="code">
using System;

namespace Math 
{ 
    class Math 
    { 
        private int number1;
        private int number2;

        public Math()
        {
            <span class="highlight">this</span>.number1 = 0;
            <span class="highlight">this</span>.number2 = 0;
        }

        public double Square(int number1) 
        {
            return number1 * number1;
        } 

        public double Add(int number1, int number2) 
        { 
            return number1 + number2;
        } 

        static void Main(string[] args)
        { 
            Math m = new Math(); 
            Console.WriteLine(m.Square(5)); 
            Console.WriteLine(m.Add(2, 3)); 
        } 
    }
}</pre>
    
<hr />
    
<!-- Value Parameters and Reference Parameters -->
<h3>Value Parameters and Reference Parameters</h3>
    
    <p>I will show you how to pass a value from a class into a variable using an object parameter.</p>
    
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

<p>In our first example, we saw what happened when I tried to pass a parameter using a method.  The value of the variable 'i' remained the same after I initialized it with my 'Value' Method. 
    
    <span class ="nl">In my next example, I will show you how to initialize a variable outside of its scope using an object parameter.</span></p>
    
<em>Code:</em>
<!-- code -->
<pre class = "code">
namespace Parameters 
{ 
    class Pass
    { 
    public static void Reference(<span class="highlight">WrappedInt</span> param)
        { 
            param.Number = 5; 
        } 
    } 

    class WrappedInt
    {
        public int Number;
    }

    class Program 
    { 
        public static void Main(string[] args)
        { 
            WrappedInt wi = new WrappedInt();
            Console.WriteLine(wi.Number); 
    Pass.Reference(<span class="highlight">wi</span>);
            Console.WriteLine(wi.Number); 
        }
    }
}</pre>   
    
<hr />
<br />
<a href = "Csharp5.html">Previous Page</a>
<span class ="next">
    <a href = "Csharp7.html">Next Page</a></span>
<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>