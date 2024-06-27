<!DOCTYPE html>
<html>
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Expressions - Cpp Programming</title>
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
<?php include('..//Includes//Left_Cpp.php'); ?>

<!-- Right -->
    
    <div id ="rightz">

        <h1>Expressions - Cpp Development</h1>
        
        <h2>Understanding Expressions</h2> 
        
            <p>An expression in c++ is composed of at least one or more operands and an operator which, can compute to produce a value.  There are three types of operators, a unary operator: dereference '*', negative sign '-' or increment operator '++', a binary operator: assignment '=', multiply '*', addition '+', and a ternary operator which takes at least 1 operator and at least 3 operands.
        
        <span class="nl">Unary operators work on a singal operand, binrary on two operands and ternary on at least three.  </span></p>
        
        <hr />
        
        <!-- Precendence and Associativity -->
        <h3>Precendence &amp; Associativity</h3>
          
            <p>Precendence deals with which operators take priority in an expression if there were more than one operator. So, for an example like 2 + 5 * 4, we would give precendence to the multiplier operator over the addition operator.
        
        <span class = "nl">Associativity deals with how to handle the expression given the order in which they are presented.  So does the compiler compute the expression from left to right or from right to left.  Generally, the compiler will execute code from left to right, similar to the way we read.</span>
        
        <span class="nl">One thing to note is that when the precendence of two operators is the same such as with multiplication and division, the association takes over.  So, for the example of 12 / 3 * 4 we must divide twelve and three then multiply that by 4 which would equal 16.</span>
        
        <span class="nl">However, we can change the precendece by using the parenthese operator like so, 12 / ( 3 * 4 ) which would result in 3 times 4 equally twelve then divide that by twelve which produces 1 instead of 16.</span></p>
        
        <hr />
        
        <!-- overflow -->
        <h3>Overflow</h3>
        
            <p>Overflow is what happens when an expression cannot be computed due to there being an insufficient amount of storage to handle the outcome. So if we provide a number that is too large to be stored in an int for example, by multiplying two really large numbers, then you will have overflow.</p>
        
        <hr />
        
        <!-- lvalue and rvalue -->
        <h3>Lvalues &amp; Rvalues</h3>
        
            <p>There are two types of values that we use when dealing with expressions, the lvalue and the rvalue.  Lvalue refers to left associative value and Rvalue refers to right associative value.
        
        <span class = "nl">Lvalues refer to operands which are on the left hand side of the expression.  These types of values usually refer to an objects location in memory.  An example of this can be a int, string, iterator, array, etc.</span>
                
        <span class="nl">Rvalues refer to operands which are on the right side of an expression.  These types of operands refer to the actual value or the contents of the value.  An example of this would be like 54, "hello", true, {1,2,3}, etc.</span>
                
        <span class="nl">Some examples of Lvalues being switched with Rvalues would look like the examples below.  All of these expressions are considered illegal.</span>
              </p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class="comments">// initialize the variables</span>
    int a = 0, b = 0, c = 0;
    <span class="comments">// initialize a const</span>
    int const d = 0;
    <span class="comments">// Error cannot assign a number to a variable</span>
    50 = c;
    <span class="comments">// Error cannot assign an expression as a value</span>
    a + b = c;
    <span class="comments">// Error cannot assign a new value to a const</span>
    d = c;</pre>
        
        <p>The purpose of these examples is to show that assignment is right associative, this means if you want to assign a value to a variable then that value must be on the right side of the expression.</p>
        
        <hr />
        
        <!-- conditional operator -->
        <h3>Conditional operator</h3>
        
            <p>The conditional operator works by comparing two operands and outputing the true operand, givin the condition.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    int i = 0, j = 1;
    
    (i &lt; j) ? cout &lt;&lt; "i is less than j" &lt;&lt; endl 
               :  cout &lt;&lt; "j is less than i" &lt;&lt; endl; 
    
    <span class="comments">// Is the same as</span>
    if(i &lt; j)
        cout &lt;&lt; "i is less than j" &lt;&lt; endl;
    else 
        cout &lt;&lt; "j is less than i" &lt;&lt; endl;</pre>
        
        <p>If you can imagine that the question mark is the 'if' statement, the parenthese is the conditional and the colon is the else statement.  That sums up the conditional operator or our ternary operator.
        
    <span class = "nl">Let's look another simpler example.</span>
              </p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    int grade = 0;
    
    cout &lt;&lt; "Enter a grade" &lt;&lt; endl;
    
    cin >> grade;
    
    string pass = (grade &lt; 60) ? "you fail" : "you pass";
    
    cout &lt;&lt; pass &lt;&lt; endl;</pre>
        
        <hr />
        <br />
        <a href="Cpp17.html">Previous</a>
        <span class = "next">
        <a href = "Cpp19.html">Next Page</a></span>
        <br /><br />

    </div>    
    
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>  