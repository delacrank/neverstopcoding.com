<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>Data Conversions &amp; Control Structures - Java Programming</title>
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

    <h1>Data Conversions &amp; Control Structures - Java Programming</h1>

    <h2>Data Conversions &amp; Control Structures</h2>
    
        <p>In this section we are going to understand what happens to data and functions when we mix multiple types of data. Later on, we will quickly go over various control structures such as: if, else, else if, for loop, and while loops.</p>
    
    <hr />
    
    <!-- Data converions -->
    <h3>Data conversions</h3>
    
        <p>When we have two different data types used together in an expression, the output has to take the form of only one of the types.  This is because various data types occupy different amounts of memory.
    
    <span class = "nl">When two data types are computed and stored into a new variable then sometimes data is loss, let's take a look at some examples of this.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    class DataConversion {
        
        public static void main(String[] args) {
            double i = 3.33;
            int x = 5;
            <span class = "comments">// The result will return a double</span>
            System.out.println(i + x);
            }
        } </pre>
    
    <p>In order to avoid loss when working with two types, it is best to cast one data to another.  For example, if I add a double and an int, I can cast the int into a double in order to change the result.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    class DataConversion {
        
        public static void main(String[] args) {
            double i = 3.33;
            int x = 5;
            <span class = "comments">// If I cast this double to an int, the result will be an int</span>
            System.out.println(<span class = "red">(int)</span>i + x);
            }
        } </pre>
    
    <p>Let's look at what happens when we try to combine a string with a integer.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    class DataConversionString {
        
        public static void main(String[] args) {
            int i = 5;
            <span class = "comments">// If concatenate a string and an integer, the result will be a string</span>
            <span class = "comments">// 5 is printed twice because you can't add a string and a number</span>
            System.out.println("This number is: " + i + 5);
            <span class = "comments">// If change the precedence using paranthese, then you can compute the value</span>
            <span class = "comments">// Since 'i' is closer to 5 it isn't converted to a string first</span>
            System.out.println("This number is: " + (i + 5));
            }
        } </pre>
    
    <hr />
    
    <!-- Control Structures -->
    <h3>Control Structures</h3>
            
        <p>The 'if' control structure works by checking the value instead the parantheses.  If the value is true then it will execute the code instead the brackets, if its false it will move on.
    
    <span class = "nl">The 'else' statement works by executing the code underneath it if the 'if' statement fails. It will not work unless the 'if' statement returns a false value.</span>
    
    <span class = "nl">The 'if else' statement is similar to the first 'if' statement, it checks to see if the next argument is true, if the first one has failed.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    
    class ifElse {
        
        public static void main(String[] args) {
            <span class = "comments">// You can play around by assigning 'a' to different values</span>
            int a = 5;
            if(a &lt; 4) {
                System.out.println("Less than four");
            } else if(a &lt; 3) {
                System.out.println("Less than three");
            } else {
                System.out.println("Less than two or greater than or equal to 5");
            }
        } 
    }</pre>
    
    <p>Let's take a look at the for loop. It works by using three expressions, an assignment, a comparsion and an increment expression. The purpose of the 'for loop' is to compute several lines of code without having to write them multiple times.
    
    <span class = "nl">The 'for loop' works by taking a variable and comparing it to a control, it will then change the initial value with the increment/decrement expression. Then it will execute the code and loop back to the beginning, only this time skipping straight to the control.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// Execute this code while i less than 10</span>
    for(int i = 0; i &lt; 10; ++i)
        System.out.println("Number is equal to: " + i );</pre>
    
    <p>Let's take a look at the while loop, it repeats until the condition is false. The while loop and for loop are very similar.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    int i = 0;
    <span class = "comments">// Check to see if i is less than ten</span>
    while(i &lt; 10) {
        System.out.println("Number is equal to: " + i );
        ++i;
    }</pre>
    
        <p>One of the last control structures that I will bring up is the switch structure. The switch structure works like the 'if else' loop, by checking the initial condition and then picking one of the cases.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    Scanner input = new Scanner(System.in);
    System.out.print("Select an option (1, 2, 3, 4) ");
    int choice = input.nextInt();
    switch(choice)
    {
        case 1:
            System.out.println("First option");
            break;
        case 2:
            System.out.println("Second option");
            break;
        case 3:
            System.out.println("Third option");
            break;
        case 4:
            System.out.println("Forth option");
            break;
        default:
            break;
    }</pre>
    
    
    <hr />
    
    <!-- Relational operators -->
    <h3>Relational Operators</h3>
    
        <p>There are two additional relational operators which, work in conjunction with our comparsion operators.  These operators are the '&amp;&amp;' (and) and the '||' (or) operator.  They work by using boolean values to determine whether or not to return a true or false value. 
    
    <span class = "nl">When using the 'AND' operator both conditions must be true in order to return a true value. Let's see what that would look like.</span></p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    if( (1 > 0) &amp;&amp; (2 > 0) )
        System.out.println("TRUE");
    else
        System.out.println("FALSE");
        
     if( (1 > 0) &amp;&amp; (-1 > 0) )
        System.out.println("TRUE");
    else
        System.out.println("FALSE");</pre>

        <p>Our first statement returned a true value, however are second statement returned a false value because one of the statements were false.  Now let's look at the statements again when we use the 'OR' operator.</p>
    
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    if( (1 > 0) || (2 > 0) )
        System.out.println("TRUE");
    else
        System.out.println("FALSE");
        
     if( (1 > 0) || (-1 > 0) )
        System.out.println("TRUE");
    else
        System.out.println("FALSE");</pre>
    
        <p>This time, both statements returned true, because at least one of the statements was true.</p>
    
    <br />
    <hr />
    
<a href="Java2.html">Previous</a> <span class = "next"><a href="Java4.html">Next page</a></span>
<br /><br />
</div>

</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>
    
</body>
</html>