<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Algorithms Part 5 (Implicit/Reference Captures, Return Type, Count_if) - Cpp Standard Library</title>
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
<?php include('..//Includes//Left_Cpp_Std_Lib.php'); ?>

<!-- Right -->
    
    <div id ="rightz">
    
        <h1>Algorithms Part 5 (Implicit/Reference Captures, Return Type, Count_if) - Cpp Standard Library</h1>
        
        <h2>Algorithms (Implicit/Reference Captures, Return Type, Count_if)</h2>
        
            <p>So far we have just recently learned what the capture list does when using the lambda expression.  By intializing variables within our local scope and adding those variable names to our capture list we can pass the value of those variables to our lambda expression.
        
        <span class = "nl">Let's look at an example of passing those values to our lambda expression implicitly and letting our compiler find the local variable within our scope.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class = "code">
    std::vector&lt;int> vi { 1, 2, 3, 4, 5, 6, 7, 8, 9};
        
    int y = 5; 
    
    <span class = "comments">// Using the equal sign tells the compiler to find 'y'</span>
    auto it = std::find_if(vi.begin(), vi.end(), 
        [<span class = "red">=</span>] (int x) { return x > y; });
        
    for(it; it != vi.end(); it++)
        std::cout &lt;&lt; *it &lt;&lt; std::endl;</pre>
        
        <p>Now let's look at an example of passing by reference to our lambda expression. To keep things simple we are going back to using just the plan lambda expression without all of these algorithm fuctions.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class = "code">
    int x = 5;
    
    <span class = "comments">// Pass a reference to x in our capture list</span>
    auto lambda = [<span class = "red">&amp;x</span>] () { return ++x; };
    
    std::cout &lt;&lt; lambda() &lt;&lt; std::endl;</pre>
        
        <p>In the example above we passed the address of integer x into our lambda function and then incremented it by one, let's try this with a pass by value.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class = "code">
    int x = 5;
    
    <span class = "comments">// Pass a value to x in our capture list</span>
    auto lambda = [x] () { return ++x; };
    
    std::cout &lt;&lt; lambda() &lt;&lt; std::endl;</pre>
        
        <p>What happened, did we get an error message saying that 'x' was a read-only variable?  This is because values in a lambda expression cannot be changed unless they are a reference or unless we declare the lambda 'mutable'.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class = "code">
    int x = 5;
    
    <span class = "comments">// Pass a value to x in our capture list</span>
    auto lambda = [x] () <span class = "red">mutable</span> { return ++x; };
    
    std::cout &lt;&lt; lambda() &lt;&lt; std::endl;</pre>
        
        <p>Now, we can change the value since we declared the lambda mutable, even thou it isn't a reference.</p>
        
        <hr />
        
        <!-- return type -->
        <h3>Trailing Return type</h3>
    
            <p>With functions they usually return a value, we can determine the type of value that a function returns by using a trailing return type.
        
            <span class = "nl">First let's look at an example of a trailing return type.</span></p>
                
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    std::vector&lt;int> vi {1, 2, 3, 4, 5, 6, 7, 8, 9};
    
    <span class = "comments">// Transform all the integers less than greater than five, by adding five</span>
    std::transform(vi.begin(), vi.end(), vi.begin(), 
        [] (int x) <span class = "red">-> int</span> { if (x > 5) return x = x +5; else return x; });
    
    for(int i : vi)
        std::cout &lt;&lt; i &lt;&lt; std::endl;</pre>
        
        <p>If we check the output, you can see that any number greater than five has five more added to it. This was an example of using trailing return type and also the transform function.  
            <span class = "nl">The way the transform function works is by changing the elements in our container based on our predicate or lambda expression and returning that value into third argument which is a location.</span>
            
        <hr />
        
        <!-- count_if -->
        <h3>Count_if</h3>
        
            <p>The 'count_if()' function returns the number of possible elements return a true value based on our comparsions.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    std::vector&lt;int> vi {1, 2, 3, 4, 5, 6, 7, 8, 9};
    
    std::cout &lt;&lt; std::count_if(vi.begin(), vi.end(), [] (int x) { return x > 5; }) &lt;&lt; std::endl;</pre>
        
        <hr />
        <br />
        <a href="Cpp_Std_Lib12.html">Previous</a>
        <span class = "next">
        <a href = "Cpp_Std_Lib14.html">Next Page</a></span>
        <br /><br />

    </div>    
    
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>  