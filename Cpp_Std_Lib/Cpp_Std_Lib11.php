<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Algorithms Part 3 (Lambda Expressions) - Cpp Standard Library</title>
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
    
        <h1>Algorithms Part 3 (Lambda Expressions) - Cpp Standard Library</h1>
        
        <h2>Algorithms (Lambda Expressions)</h2>
        
            <p>Lambda expressions are a way of declaring anonymous inline functions. Which can work as predicates in our sorting function when trying to manipulate our containers.
        
        <span class = "nl">Let's get a feel for using the algorithm by first declaring one and calling it.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    <span class = "comments">// A lambda expression is basically a function pointer</span>
    auto f = [] { return 42; };
    
    <span class = "comments">// Include '&lt;functional>' header, for this line of syntax</span>
    std::function&lt;int()> x  = [] { return 24; };
    
    <span class = "comments">// Call the function f</span>
    std::cout &lt;&lt; f() &lt;&lt; std::endl;
        
    <span class = "comments">// Call the function x</span>
    std::cout &lt;&lt; x() &lt;&lt; std::endl;</pre>
        
        <p>The lambda expression can be broken into 4 parts, the '[capture list]', '(parameter list)', 'return type' and the '{ function body }'.  
            
            <span class = "nl">Let's look at another example of a lambda expression only this time let's pass some parameters into the parameter list.</span> </p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    std::function&lt;int(int, int)> x = [] (int x, int y) { return x + y; };
    
    std::cout &lt;&lt; x(3,4) &lt;&lt; std::endl;</pre>
        
        <p>Now that we know how to pass arguments into our lambda expressions let's take it one step further and use a lambda expression as a predicate in a sorting algorithm.
        
        <span class = "nl">For this algorithm we are going to use a function called stable sort, it works the same way as sort does only it maintains the original order for elements of equal length.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    std::vector&lt;int> vi {1,2,3,4,5,6,7,8,9};
       
    <span class = "comments">// Return only elements which are greater than five first</span>
    std::stable_sort(vi.begin(), vi.end(), [] (int x, const int&amp;) { return x > 5; });
       
    for(int i: vi)
       std::cout &lt;&lt; i &lt;&lt; std::endl;</pre>
        
        <p>Iif you notice, we passed our vector into our 'stable_sort()' function, however for one of our arguments instead of using a predicate we used a lambda expression.  Our predicate would have taken more space and required us to write a function outside our main func.
        
        <span class = "nl">If you look closely at our lambda expression we passed in two parameters an int and a const int reference.  In the function body we compared every element to a number greater than five and sorted the elements based on those true false value.</span>
        
        <span class = "nl">Let's try using a lambda expression with a string of vectors instead of numbers, sorting by word.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    std::vector&lt;std::string> vs 
        {"jack", "jill", "up", "hill", "pail", "water", "went", "a", "and"};
       
    auto pivot = std::partition(vs.begin(), vs.end(),
        [] (std::string a) { return a == "went"; });
       
    for(auto it = vs.begin(); it != pivot; it++)
        std::cout &lt;&lt; *it &lt;&lt; std::endl;</pre>
        
         <hr />
        <br />
        <a href="Cpp_Std_Lib10.html">Previous</a>
        <span class = "next">
        <a href = "Cpp_Std_Lib12.html">Next Page</a></span>
        <br /><br />

    </div>    
    
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>  