<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Control Flow - Programming C#</title>
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

<h1>Control Flow - Learning C#</h1>
    
<!-- C# basics -->    
<h2>Control Flow</h2>
    
    <p>Now that we know how to organize our work using methods, we should determine the flow of our work and give our users the option to determine the outcome of the application based on decisions they make.
        
 <span class="nl"> In our first console application we will learn how to control program flow using control structures, such as: if, else, for (loop), while, do while, and for each.</span></p>
    
<hr />

<!-- If Else -->
<h3>If Else</h3>

<p>Let's take a look at an '<b>if else</b>' statement. Simple enough, if 'b' is equal to true, perform the instructions inside the curly braces, otherwise perform the method in the curly braces beneath this method called else.</p>
    
<em>Code:</em>
<!-- code -->
<pre class="code">
If (b == true)
{ 
    <span class = "comments">// Do this</span>
} else { 
    <span class = "comments">// Otheerwise do this</span>
} </pre>


<p>Simple enough, if 'b' is equal to true, perform the instructions inside the curly braces, otherwise perform the method in the curly braces beneath this method called else.<br /><br />We can set anything in our 'if' function arguement so it isn't limited to just the variable b, this is just an example.</p>
    
<hr />
    
<!-- For Loop -->
<h3>For Loop</h3>
    
<p>In this example, define a variable 'j' equal to zero,
then use the for function to increment the variable 'j' by one ten times.</p>
    
<em>Code:</em>
<!-- code -->
 <pre class="code">
for (int i = 0; i &lt; 10; i++)
{ 
    j++; 
    Console.WriteLine( j );
}</pre>
    
<p>
In this example, I define a variable 'j' equal to zero. Then I used the for function to increment the variable 'j' by one ten times. We can print out the value using 'Console.WriteLine()' function.</p>
    
<hr />

<!-- While and Do While Loops -->
<h3>While &#38; Do While Loops</h3>
    
<p>Let's take a look at another type of control structure called the while loop and the do while loop.</p>
    
<em>Code:</em>
<!-- code -->
<pre class="code">
int i = 20; 
    
while(i > 10)
{ 
    i--; 
    Console.WriteLine(i);
} </pre>

<p>In this while loop, i is assigned to the value twenty and will be decremented by one for every itertation of the loop, so ten times.
    
    <span class = "nl">In the example below, we perform the same actions, only this time we decrement i first before checking its value with our while loop.</span></p>
    
<em>Code:</em>
<!-- code -->
<pre class="code">
int i = <span class="highlight">9</span>;
do 
{ 
    i--; 
    Console.WriteLine(i); 
} 
while(i > 10);</pre>

<p>What is the major difference here? In the example above, we needed to check the value of i first before performing the loop, while in the example below, we could decrement i by one and write its value in the console even if it's initial value was lower than ten.</p>
    
<hr />
   
<!-- For Each Loop -->
<h3>For Each Loop</h3>
    
<p> In our next example, we are going to look at the for each loop.
    
    <span class = "nl">In order for us to use the 'foreach' loop, we need a collection of some sort.  This can come in the form of a list, array, etc.</span>  </p>
    

<em>Code:</em>
<!-- code -->
<pre class="code">
class Program
{ 
    static void Main(string[] args) 
    { 
        string[] pets = { "dog", "cat", "bird" };
        foreach (string value in pets)
        { 
            Console.WriteLine(value);
        } 
        Console.ReadKey(); 
    } 
} </pre>

<br />
<hr />    
    
<!-- Switch -->
<h3>Switch</h3>
    
    <p>  A switch statement allows users to control the behavior of flow by deciding which case to use.
        
    <span class ="nl">In the example below, we will use the Convert class because C# doesn't read integers.  This convert class is being used in conjunction to the ReadLine Function in order to accept input from the user.</span> </p>
    
<em>Code:</em>
<!-- code -->
<pre class="code">
Console.WriteLine("Write a Number one through four");
int i = 0; 
i = Convert.ToInt32(Console.ReadLine());

switch (i)
{ 
    case 1: 
    case 2: 
        Console.WriteLine("Valid");
        break; 
    case 3: 
        Console.WriteLine("Large"); 
        break; 
    case 4:
        Console.WriteLine("Very Large");
        break; 
    default: 
        Console.WriteLine("Invalid");
        break; 
}</pre>
    
    <p>Gives the user control over the flow of the program based on the input.</p>
    
<hr />

<!-- Break and Continue -->
<h3>Break and Continue</h3>
    
<p>When using are switch statement, we had to use two other statements as well.  The first was a 'Break' statement, which, will break the current iteration in a loop.  The loop can then continue from the beginning although none of the lines after the break statement will be computed.
    
    <span class = "nl"> Continue is the exception to the break statement, this allows the loop to finish its current iteration after performing the break.  Computations made after the continue statement will be saved and processed.</span></p>
    
<hr />
<br />
<a href = "Csharp2.html">Previous Page</a>
<span class ="next">
    <a href = "Csharp4.html">Next Page</a></span>
<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>