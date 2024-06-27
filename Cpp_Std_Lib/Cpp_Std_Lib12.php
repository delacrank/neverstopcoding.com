<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Algorithms Part 4 (Lambda Expressions, Find, Find_if) - Cpp Standard Library</title>
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
    
        <h1>Algorithms Part 4 (Lambda Expressions, Find, Find_if) - Cpp Standard Library</h1>
        
        <h2>Algorithms (Lambda Expressions, Find, Find_if)</h2>
        
            <p>There is more to lambda expressions, one thing we haven't spoken about is using local variables outside the scope of our lambda expression.  We can accomplish this by using the capture list, anything we declare within the square brackets of our lambda.
        
        <span class = "nl">First let's talk about using the 'find()' and 'find_if()' functions.  I'm going to show an example of using the find function first.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class = "code">
    std::vector&lt;int> vi {1, 2, 3, 4, 5, 6, 7, 8, 9};
    
    std::cout &lt;&lt; *(std::find(vi.begin(), vi.end(), 3)) &lt;&lt; std::endl;</pre>
        
        <p>This is a simple way of displaying the contents of a element found in our vector, if that element isn't there then the value returned will be some large value.
        
        <span class = "nl">We can check for this using some validation.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class = "code">
    std::vector&lt;int> vi {1, 2, 3, 4, 5, 6, 7, 8, 9};
    
    std::vector&lt;int>::iterator it = std::find(vi.begin(), vi.end(), 3);
        
    if ( it != vi.end())
        std::cout &lt;&lt; *it &lt;&lt; std::endl;
    else
        std::cout &lt;&lt; "not present" &lt;&lt; std::endl;</pre>
        
        <p>Storing the value in an iterator and then checking to see if it's true will allow us to know if the our container is holding the value we see, otherwise an error message will be displayed.
        
        <span class = "nl">The 'find_if()' function allows us to pass a predicate into the last argument making it so that we have more control over the amount or type of values which are returned.</span>
        
        <span class = "nl">Let's take a look at this.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class = "code">
    bool isBigger (int a)
    {
        return a > 5;
    }
    
    int main()
    {
        std::vector&lt;int> vi {1, 2, 3, 4, 5, 6, 7, 8, 9};
    
        <span class = "comments">// find all iterators which are larger than five</span>
        std::vector&lt;int>::iterator it = std::find_if(vi.begin(), vi.end(), isBigger);
        
        <span class = "comments">// if true print those values, else print error message</span>
        if ( it != vi.end()) {
            for(it; it != vi.end(); it++)
                std::cout &lt;&lt; *it &lt;&lt; std::endl;
        } else
            std::cout &lt;&lt; "not present" &lt;&lt; std::endl;
    }</pre>
        
        <p>If we wanted to do away with the predicate and outside function we could just create a lambda expression to shorten our code make it and easier to follow.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class = "code">
    std::vector&lt;int> vi {1, 2, 3, 4, 5, 6, 7, 8, 9};
    
    <span class ="comments">// Use our lambda expression to find all elements over the value of five</span>
    std::vector&lt;int>::iterator it = 
        std::find_if (vi.begin(), vi.end(), [] (int a) { return a > 5; });
        
    if ( it != vi.end()) {
        for(it; it != vi.end(); it++)
            std::cout &lt;&lt; *it &lt;&lt; std::endl;
    } else
        std::cout &lt;&lt; "not present" &lt;&lt; std::endl;
    }</pre>
        
    <hr /> 
        
    <!-- Capture list -->
    <h3>Capture List</h3>
        
        <p>The capture list is a great way to include local variables into our lambda expression, for comparing other containers or storing values outside of our lambda expression.
        
        <span class = "nl">The capture list are the square brackets '[]' prior to our parameter list '()'. Let's compare the sizes of two vectors and return the largest values from one of our containers.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class = "code">
    std::vector&lt;int> vi {1, 2, 3, 4, 5, 6, 7, 8, 9};
    
    <span class = "comments">// Use this variable to for as our capture value</span>
    int <span class="red">var</span> = 5;
    
    std::vector&lt;int>::iterator it = 
        std::find_if (vi.begin(), vi.end(), [<span class="red">var</span>] (int a) { return a > <span class="red">var</span>; });
        
    if ( it != vi.end()) {
        for(it; it != vi.end(); it++)
            std::cout &lt;&lt; *it &lt;&lt; std::endl;
    } else
        std::cout &lt;&lt; "not present" &lt;&lt; std::endl;
    }</pre>
        
        <p>In the example above I simply initialized the value five to our integer variable 'var' and then passed that variable into our capture list.  In my lambda expression I can now access the value passed from my capture list. 
        
        <span class = "nl">Let's look at another function called 'for_each()' before moving on.</span></p>
        
        <hr />
        
        <!-- for each -->
        <h3>For_each()</h3>
        
            <p>The 'for_each()' function is similar to our for loop range, in that it will go through every element in a given container.  The difference here is that the for_each() function is built iterators and comparsions for every element in our containers.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class ="code">
    std::vector&lt;int> vi {1, 2, 3, 4, 5, 6, 7, 8, 9};
       
    int big = 5;   
       
    auto it = std::find_if(vi.begin(), vi.end(),
        [big] (const int &amp;x) { return x > big; });
        
    if ( it != vi.end()) {
        for_each( it, vi.end(), [] (int x) {std::cout &lt;&lt; x &lt;&lt; " "; });  
            std::cout &lt;&lt; std::endl;
    } else
        std::cout &lt;&lt; "not present" &lt;&lt; std::endl;</pre>
        
            <p>Here we specified the iterator, the end point of our vector and the actions to be performed by our lambda all within our function call.</p>
        
        <hr />
        <br />
        <a href="Cpp_Std_Lib11.html">Previous</a>
        <span class = "next">
        <a href = "Cpp_Std_Lib13.html">Next Page</a></span>
        <br /><br />

    </div>    
    
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>  