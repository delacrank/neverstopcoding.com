<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />    
<title>Primitive Data types Part 2 - Java Programming</title>
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

    <h1>Primitive Data types Part 2 - Java Programming</h1>

    <h2>Primitive Data types Cont.</h2>
        
        <p>In this section we are going to keep going over primitive date types, conversions, unary operators, and relational operators.
    
    <span class = "nl">This section might be a little boring but necessary in order to have a firm grasp of the basics.</span></p>
    
    <hr />
    
    <!-- Constant Variables -->
    <h3>Constant Variables</h3>
    
        <p>Constant variables are declare using the reserved word 'final' before the name of the variable.  The value in a constant variable cannot be changed.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class="comments">// Initialize a constant variable</span>
    final int a = 5;
    <span class="comments">// Error cannot change the value</span>
    a = 2;</pre>
    
    <hr />
    
    <h3>Relational Operators</h3>
    
        <p>A relational operator will compare two variables to see if one is equal to, less than or greater than the other.  This typically helps a lot when using control structures like 'if', 'while' or 'for' loops.  We will talk about these later.</p>
    
    <ol id = "li">
        <li><b>Less Than '&lt;':</b> Checks to see if left operand is less than right operand.</li>
        <li><b>Greater Than '>':</b> Checks to see if one variable is greater than the other.</li>
        <li><b>Less Than or equal to '<u>&lt;</u>':</b> Checks to see if one variable is less than or equal to the other.</li>
        <li><b>Greater Than or equal to '<u>></u>':</b> Checks to see if one variable is greater than or equal to the other.</li>
        <li><b>Equal to '==':</b> Checks to see if both variables are equal to each other.</li>
        <li><b>Not equal to '!=':</b> Checks to see if one value is not equal to the other.</li>
    </ol>
    
    <p>Typically when using these relational operators they are placed in a control structure which checks to see if the value is true or false.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    class Relational {
    
        public static void main(String[] args) {
        
            <span class = "comments">// if this value is true print out the first statement</span>
            if( 5 > 6 )
                System.out.println("Five is greater than six");
             <span class = "comments">// Otherwise print this statement instead</span>
            else
                System.out.println("Five is less than six");
    
        }
    }</pre>
    
    <hr />
    
    <!-- unary operators -->
    <h3>Unary Operators</h3>
        
        <p>Unary operators means they only work on one operand instead of two. Increment and decrement operators like ++, or -- will either add one or subtract one from the initial operand.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    class Unary {
        public static void main(String[] args) {
            int a = 1;
            <span class = "comments">// display value of 'a'</span>
            System.out.println(a);
            <span class = "comments">// display value of 'a' incremented by one</span>
            System.out.println(++a);
             <span class = "comments">// display value of 'a' decremented by one</span>
            System.out.println(--a);
        }
    }</pre>
    
    <p>Unary operators are similar to compound assignment operators only they can increase the or decrease the initial value by one, we will talk about compound operators next.</p>
    
    <hr />
    
    <!-- Compound Assignment -->
    <h3>Compound Assignment Operators</h3>
    
        <p>The way the compound assignment operator functions is by doing the arithmetic and then assigning the new variable to the product, sum or difference of the expression.
    
    <span class = "nl">Let's look at an example.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// Initialize 'a' to equal 5</span>
    int a = 5;
    <span class = "comments">// Take the initial value add three to it</span>
    a = a + 3;</pre>
    
        <p>We can increment the variable 'a' by three using this code, or we can use the compound assignment.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// Initialize 'a' to equal 5</span>
    int a = 5;
    <span class = "comments">// Take the initial value add three to it</span>
    a += 3;</pre>
    
        <p>These compound assignment operators can be perform with are other operators as well.</p>
    
    <ol id = "li">
        <li><b>Add and Assign '+=':</b> Adds and assigns to initial variable.</li>
        <li><b>Subtract and Assign '-=':</b> Returns the difference to the to initial variable.</li>
        <li><b>Multipily and Assign '*=':</b> Returns the product to the initial variable.</li>
        <li><b>Divide and Assign '/=':</b> Returns the divisor to the initial variable.</li>
        <li><b>Modulus and Assign '%=':</b> Returns the remainder initial variable.</li>
        <li><b></b></li>
    </ol>
    
    <p>Next we can look at control structures and functions.</p>
    
    <br />
    <hr />
    
<a href="Java1.html">Previous</a> <span class = "next"><a href="Java3.html">Next page</a></span>
<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>