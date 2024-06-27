<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<meta name="description" content="Understand how to use the .net Framework to create powerful web applications using C# for windows machines." />
<meta name="keywords" content=".Net" />
<meta name="author" content="Juan Arias" />
   
<title>Visual Studio IDE - .Net Framework</title>
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
<?php include('..//Includes//Left_dotNet.php'); ?>
    
<!-- Right -->
<div id ="rightz">
    
<h1>Visual Studio IDE - .Net Framework</h1>

<!-- Components of Visual Studio -->
<h2>Understanding Visual Studio IDE</h2>

    <p>There are several components or windows which can be accessed to increase speed and productivity.  One of them is called '<b>Solution Explorer</b>', this manages the folders and files for your projects. In addition you have '<b>Server Explorer</b>' which deals with managing the database and handling the connection to the server.  The '<b>Tool Box</b>' helps you to drag tools in order to create 'text boxes', 'labels', 'hyperlinks', 'buttons', etc. The '<b>Properties</b>' window, helps manage the properties of any elements you which to change on form. Finally, there is '<b>Team Foundation Explorer</b>' which is used for working with a development team and can be useful for quickly transfering files. </p>

<hr />    
    
<!-- Tools and Options -->
<h2>Tools and Options</h2>

    <p>Tools and options can be useful for managing views, word wrap, font size, compilers and other preferences. Tools and options also has a package manager which is called '<b>NuGet</b>', this is important for adding references for your project.  There is another viable option in '<b>Tools</b>' called '<b>Attach to Process</b>', this allows you to attach an .exe (executable file) to your Visual Studio and debug it. Visual Studio organizes many of the components in it's 'references' you can add references to your project in solution explorer and this will allow you to use the Framework to add libraries to the project.</p>

<hr />    
    
<!-- Views  -->
<h2>Views</h2> 

    <p>Visual Studio also has multiple ways of viewing the content of your projects. One view is called the design view another is called the source view, there is also a third view called split view and it allows you to see both the design as well as the source.</p>

<hr />    
    
<!-- Controlling Flow with C# -->
<h2>Controlling Flow with C#</h2>

    <p>In our first console application we will learn how to control program flow using control structures, such as: if, else, for (loop), while, do while, and for each. </p>
       
<hr />    
    
<h3>If Else</h3>    
    
<em>Code:</em>
<!-- Code IF ELSE -->
<pre class="code">
If (b == true)
{ &nbsp; &nbsp; &nbsp;}
else 
{  &nbsp; &nbsp; &nbsp;} </pre>
    
 <p>Let's take a look at an '<b>if else</b>' statement. Simple enough, if 'b' is equal to true, perform the instructions inside the curly braces, otherwise perform the method in the curly braces beneath this method called else.</p>
    
<hr />    
    
<h3>For Loop</h3>
    
<em>Code:</em>
<!-- Code FOR LOOP -->
<pre class="code">
for (int i = 0; i &lt; 10; i++) 
{ 
    j++;
}</pre>

<p> In this example, define a variable 'j' equal to zero,
then use the for function to increment the variable 'j' by one ten times.</p>
    
<hr />    
    
<h3>While Loop</h3>
<!-- Code -->
<pre class="code">
int i = 20; 
    
while(i > 10)
{ 
    i--; 
    Console.WriteLine(i);
}</pre>

<p>In this while loop, i is assigned to the value twenty and will be decremented by one for every itertation of the loop, so ten times.</p> 
        
<em>Code:</em>
<!-- Code -->
<pre class="code">
string[] pets = { "dog", "cat", "bird" };

foreach (string value in pets) 
{ 
    Console.WriteLine(value); 
}</pre>
    
    <p>Writes a value for each variable in the collection of a list, array, etc.</p>
    
<em>Code:</em>
<!-- Code -->
<pre class="code">
Console.WriteLine("Write a Number one through four");
int i = 0;
i = Convert.ToInt32(Console.ReadLine());

switch (i)
{ 
    case 1: 
    case 2: 
        Console.WriteLine("You entered 2"); 
        break; 
    case 3: 
        Console.WriteLine("You entered 3"); 
        break; 
    default: 
        Console.WriteLine("Invalid entry");
        break; 
}</pre>

<p>Gives the user control over the flow of the program based on the input.</p>

<hr />    
    
<h3>Break &amp; Continue</h3>    
    
    <p>Using break statement in a loop will break the current iteration in a loop, then start the loop from the beginning without finishing the the previous iteration.
        
    <span class ="nl"> Continue will allow the loop to finish its current iteration after performing the break.</span></p>

<hr />    
    
<!-- Convertin primitive Data Types -->
<h3>Converting primitive Data Types</h3>

    <p>There are several different primitive data types, to name a few you have your numbers: short, long, int, float, double.  Then you have your characters: char, string. There are ways to convert data types by using either method like 'Convert' or 'Parse', or by 'casting' a data type.</p>
    
<hr />    
    
<h3>Parse or Convert</h3>

<em>Code:</em>
<!-- Code Convert/Parsing -->
<pre class="code">
<span class="comments">//Converts a string into a number</span>
Int32.Parse("3"); 

<span class="comments">//Converts a string into a number</span>
Convert.ToInt32("5");

<span class="comments">//Converts a number into a string</span>
32.ToString();</pre>

    <p>These functions are used to change data types by using the variable or value as an argument.</p>
    
<hr />

<h3>Casting</h3>    
    
<!-- Code -->
<pre class="code">
<span class="comments">//declare a double</span> 
double x = 15.4; 

<span class="comments">//cast it as an int</span> 
int a = (int)x;</pre>

    <p>In our last example we defined a variable x as a double, and then cast it to an integer.  We can do this with objects or other variables which have similar values.</p>

<hr />    
    
<!-- Access Modifiers -->
<h3>Working with Access Modifiers</h3>

    <p><b>Access modifiers</b> are ways to control the access of reference and value types within programs, furthermore 'access modifiers' promote encapsulation our classes, methods, and variables. There are five types of access modifiers: public, private, protected, internal and internal protected.<br /><br /><b>Public</b> modifiers allow methods, variables and classes to be access by any other class, <b>Private</b> modifiers only are accessible from within the same class, <b>Protected</b> modifiers are only accessible from an inherited class, <b>Internal</b> are only accessible from within the same assembly, <b>Protected Internal</b> is only accessible from a dervied class of the same assembly. </p>

<!-- Ref and out params-->
<h2>Reference and Out parameters</h2>

    <p>There are two parameters which allow you to pass a variable outside the scope of a method or class.  One of them is called 'ref' the other is 'out'.  The difference between the two, is that 'ref' doesn't need to be initialized, while the compiler assumes that an 'out' parameter is initialized before being passed into an arguement of a function.</p>
    
<hr />
<br />
<a href="dotNet1.html">Next Page</a>
<br /><br />
</div>
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
</body>
</html>