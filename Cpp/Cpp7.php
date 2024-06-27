<!DOCTYPE html>
<html>
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Constant Expressions - Cpp Programming</title>
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

        <h1>Constant Expressions - Cpp Development</h1>
        
        <h2>Constant Expressions</h2>
        
            <p>In order to undersand const expressions we must first understand what an expression is.  An expression is one or more operands and zero or more operators which compute to produce a value.
        
        <span class = "nl">A constant expression is a value that cannot change and whose value can be evaluted at compile time. So imagine having one or more operands and zero or more operators which maintain a static value which can be evaluted at compile time.</span>
                
        <span class="nl">Let's look at an example of a const expression below.</span>
              </p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    const int num = 10;</pre>
        
        <hr />
        
        <!-- const express variables -->
        <h3>const Expression Variables</h3>
        
            <p>The C++11 standard comes equipped with some tools in order to deduce which sort of expressions are constant.  By using the keyword <b>constexpr</b> we can assign a variable to be equal to constant expression.  This is different than assigning a variable as a const. 
        
        <span class = "nl">Using this new keyword 'constexpr' we can assign functions equal to const variables where before we could not using the just the const keyword.</span>
              </p>
        
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    constexpr int sz = 20 + 1;</pre>
        
        <hr />
        
        <!-- const expr pointers -->
        <h3>constexpr &amp; Pointers</h3>
        
            <p>Const Expressions can only qualify variables which are contain literal values.  In this respect we can use it for defining pointers, just not the objects which the pointers will point to.  It's important to understand the difference between a const pointer and a pointer which points to an object which is a const.
        
        <span class = "nl">When we talk about a const pointer, I am referring to a pointer which points to a const object.  This means the object in the pointer is a literal value and cannot be changed, let's look at an example.</span>
              </p>

        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class="comments">// pointer to a const int</span>
    const int *p = nullptr;</pre>
        
        <p>Now let's look at a const pointer to an int (const or non-const).</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class="comments">// const pointer to an int</span>
    constexpr int *q = nullptr;</pre>
        
        <p>In example one the base or the bottom level of the pointer to a const is considered a literal value in the sense that it cannot change.  This is considered a 'lower-level' const.
        
        <span class = "nl">In example two the pointer itself is the const, this means it can refer to both const and non-const values.  It is considered a 'top-level' const.</span>
            
        <span class="nl">We can also have a const pointer which points to a const object (a literal value).</span>
              </p>
        
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class="comments">// const pointer to an const int</span>
    constexpr const int *q = &amp;r;</pre>
        
        <hr />
        <br />
        <a href="Cpp11.html">Previous</a>
        <span class = "next">
        <a href = "Cpp13.html">Next Page</a></span>
        <br /><br />

    </div>    
    
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>  