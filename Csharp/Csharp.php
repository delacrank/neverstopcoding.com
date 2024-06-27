<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<meta name="description" content="Understand how to use Microsoft's C sharp to build powerful and secure dynamic websites. You can understand an object oriented programming language, C# using the .net framework to build and maintain web or desktop applications." />
<meta name="keywords" content="C#" />
<title>Introduction to Programming in C Sharp</title>
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

<h1>Introduction to Learning C#</h1>

<!-- Working with C# -->
<h2>Working with C#</h2>
    
    <p>    Okay, Let's cover some basics about what exactly 'C sharp' is.  'C sharp' is a high level programming language, developed by Microsoft.  This means, it is relatively easier to than a low level language like c/c++ and will not require as much work to create programs. 
        
        <span class="nl">Futhermore, you can only create Microsoft applications/programs using 'C#'.  However, there are many advantages to working with Microsoft development enviroment: Visual Studio.  Many of the concepts you will learn using C sharp will be carried on to other languages, reguardless of the IDE or OS you choose to use.</span>    </p>
    
<!-- Hello World -->
<h3>Hello World</h3>
    
    <p> The first program we will be working with will just display the words, "hello world.".  In order to accomplish this you will need either an IDE, or a text editor and a compiler.  I will be using Visual Studio 2012, but you are free to use whatever you feel comfortable using as long as you can follow along with the projects. </p>
    
<em>Code:</em>
<!-- Code -->
<pre class="code">
<span class="highlight">using</span> System; 
<span class="highlight">using</span> System.Collections.Generic; 
<span class="highlight">using</span> System.Linq; 
<span class="highlight">using</span> System.Text; 

<span class="highlight2">namespace</span> Test 
{ 
    <span class="highlight3">class</span> Program 
    { 
        <span class="highlight4">static void</span> Main(string[] args)
        { 
            Console.WriteLine("Hello World"); 
        } 
    }
}</pre>
    
<p>    Alright, so let's analyze this code and try to understand what exactly is going on here.  There are several things happening all at once.  First we see a few '<span class="highlight">using</span>' statements at the very top of the program, then a '<span class="highlight2">namespace</span>' followed by a '<span class="highlight3">class</span>' and finishing with a '<span class="highlight4">method</span>'. I have highlighted each one so you can understand what I am referring to.</p>
    
<ol id = "li2">
    <li>Let's start with '<span class="highlight2">Namespace</span>', a namespace is a container for a class. 
    
    <span class="nl">In the example above we have used namespace 'Test' as our container for class Program. Everytime we want to refer to class 'program' we can use '<span class="highlight2">Test</span>.<span class="highlight3">Program</span>' and the compiler will know where to look for it.</span></li>
    
<li>'<span class="highlight">Using</span>' is a directive, it brings a 'namespace' into the scope. 
    
    <span class="nl">In the example above, we are using the directive 'System'. If you commented out that directive then we would need to type <br /><br /><span class="highlight2">System</span>.<span class="highlight3">Console</span>.WriteLine("Hello World."); <br /><br />in order to get our program to display that string. System being the 'namespace' and Console being the 'class'.</span></li>
    
    <li>'<span class="highlight3">Class</span>', a class is an abstract representation of something. 
        <span class="nl">For our purposes our class called, 'program' is just a representation of something that will display the words hello world.</span> </li>
    
<li>'<span class="highlight4">Method</span>', a method or function represents the actions a class can perform.  In our situation, we called the 'Main' method in order to perform the action of displaying the words, hello world.</li>
    </ol>
    
<p>We will have more time to get into methods later but for now let's take a look at some of the components required to build a program using c#.</p>
    
<hr />
<br />
<a href = "../C++/C++30.html">Previous Page</a>
<span class ="next">
    <a href = "Csharp1.html">Next Page</a></span>
<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>