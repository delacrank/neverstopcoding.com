<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Primitive Data types - Java Programming</title>
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel="stylesheet"><link href='http://fonts.googleapis.com/css?family=Cormorant+Infant' rel="stylesheet"><link rel="stylesheet"
      type="text/css"
      href="../testcss.css">

</head>
<body>

    
 <!-- Header -->
<?php include('..//Includes//header.php'); ?>

<!-- Navigation2 -->
<?php include('..//Includes//nav.php'); ?>
    
<!-- Navigation2 -->
<?php include('..//Includes//nav2.php'); ?>

<!-- Left --><div class = "mainWrapper">
<?php include('..//Includes//Left_Java.php'); ?>
    
<!-- Right --> 
<div id ="rightz">

    <h1>Primitive Data types - Java Programming</h1>

    <h2>Primitive Data types</h2>
    
        <p>There are about six different types of data in java some which hold varying amounts of storage.</p>
    
    <ol id ="li">
        <li><b>Int:</b> An integer can store 4 bytes or 32 bits.</li>
        <li><b>Short:</b> A short stores 2 bytes.</li>
        <li><b>Long:</b> A long stores 8 bytes.</li>
        <li><b>Float:</b> A float stores 4 bytes.</li>
        <li><b>Double:</b> A double stores 8 bytes.</li>
        <li><b>Char:</b> A char stores 1 byte.</li>
        <li><b>Boolean:</b> Sometimes written as bool stores 1 byte.</li>
    </ol>
    
        <p>Short, long and integer are all integer types, they store whole numbers and are usually declared by writing the type before the variable name.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// Declare 1 int, 1 short and 1 long.</span>
    int variable;
    short variable1;
    long variable 2;</pre>
    
    <p>In java we can declare multiple types by using a comma as a delimiter and typing the variable names after the type name like so.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// Declare 3 ints, 3 doubles and 3 chars.</span>
    int x, y, z;
    double q, r s;
    char a, b, c;</pre>
    
    <p>Whenever we declare a variable in java we are allocating memory for it, so in our previous example we allocated 12 bytes of storage for our int variables, 24 bytes of storage for our double variables and 3 bytes of storage for our char variables.</p>
    
    <hr />
    
    <!-- Initization -->
    <h3>Initialization</h3>
    
        <p>In order to initialize our variables to hold a certain type of value. The assignment operator must be used '='.  It is called a binary operator because it operates on two operands. An operand is just a variable or data type when you have an operand and an operator together it is called an expression, because usually a change occurs.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// An assignment statement initializes a to equal 5</span>
    int a = 5;
    <span class = "comments">// Error integer types can only be assigned to integer values or whole numbers</span>
    int a = "hello"</pre>
    
    <p>We can reassign the value of a to something else or pass that value into another variable if we choose to do so by using the assignment statement again.
    
    <span class = "nl">Let's take a look at some other  operators.</span></p>
    
    <hr />
    
    <!-- Arithmetic operators -->
    <h3>Arithmetic Operators</h3>
    
        <p>There are five different types of binary arithmetic operators. These operators will only work on number types so no booleans or chars or strings with the exception of the addition operator, which performs concatenation.</p>
    
     <ol id ="li">
        <li><b>Addition '+':</b> Adds two numbers together or concats two strings.</li>
        <li><b>Subtraction '-':</b> Subtracts one number from another.</li>
        <li><b>Division '/':</b> Divides one number into another.</li>
        <li><b>Multiplication '*':</b> Multiplies two numbers together.</li>
        <li><b>Modulus '%':</b> Returns the remainder of two numbers.</li>
    </ol>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// Add these values together</span>
    int a = 5;
    int b = 3;
    <span class = "comments">// Store the sum in this variable c</span>
    int c = a + b;</pre>
    
    
    <br />
    <hr />
    
<a href="Java.html"> Previous page</a><span class = "next"><a href="Java2.html">Next page</a></span>
<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>