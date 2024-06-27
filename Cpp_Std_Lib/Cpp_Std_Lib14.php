<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Algorithms Part 6 (Bind, Ref, Insert Iterators) - Cpp Standard Library</title>
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
    
        <h1>Algorithms Part 6 (Bind, Ref, Insert Iterators) - Cpp Standard Library</h1>
        
        <h2>Algorithms (Bind, Ref, Insert Iterators)</h2>
        
            <p>In this section we are going to be learning about how to use the bind function.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    int add(int x, int y)
    {
        return x + y;
    }
    
    int main()
    {
        <span class = "comments">// Here we can bind this 'add' function to a variable called new_add</span>
        std::function&lt;int(int, int)> new_add =
            std::bind(add, std::placeholders::_1, std::placeholders::_2);
        
        <span class = "comments">// We can call it and pass arguments to it as well</span>
        std::cout &lt;&lt; new_add(2,3) &lt;&lt; std::endl;
    }</pre>
        
        <p>Alright, what's the purpose of using bind?  We can use bind instead of using a lambda function to work with some of our algorithm functions. </p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class = "code">
    bool isBigger(int x, int y)
    {
        return x >  y;
    }
    
    int main()
    {
        std::vector&lt;int> vi {1, 2, 3, 4, 5, 6, 7, 8, 9};
            
        <span class = "comments">// Sort our vector based on elements greater than 4</span>    
        std::sort(vi.begin(), vi.end(), 
            std::bind(isBigger, std::placeholders::_1, 4 ));
        
        for(int i :  vi)
            std::cout &lt;&lt; i &lt;&lt; std::endl;
    }</pre>
        
        <p>Here at least we can pass different arguments into our parameters and not have to worry about repeatedly typing in the lambda expression every  time.
        
        <span class = "nl">I could also pass a local reference into our bind function by using another function called 'ref()'.  Let's see an example below.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class = "code">
    bool isBigger(int x, int y)
    {
        return x >  y;
    }
    
    int main()
    {
        std::vector&lt;int> vi {1, 2, 3, 4, 5, 6, 7, 8, 9};
            
        int x = 4;    
            
        <span class = "comments">// Sort our vector based on elements  greater than x</span>    
        std::sort(vi.begin(), vi.end(), 
            std::bind(isBigger, std::placeholders::_1, std::ref(x) ));
        
        for(int i :  vi)
            std::cout &lt;&lt; i &lt;&lt; std::endl;
    }</pre>
        
    <hr />
        
    <!-- Insert Iterators -->
    <h3>Insert Iterators</h3>
        
        <p>There are three forms of insert iterators, 'back_inserter()', 'inserter()' and 'front_inserter()' for forward_list containers. We've already seen an example of using the 'back_inserter()', let's look at some more small exapmles.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    std::vector&lt;int> vi {1, 2, 3, 4};
    std::vector&lt;int> vi2;
    
    <span class = "comments">// Add all the elements from vi into the rear of vi2</span>
    std::copy(vi.begin(), vi.end(), back_inserter(vi2));
    
    for(int i :  vi2)
        std::cout &lt;&lt; i &lt;&lt; std::endl;</pre>
        
        <p>If we look at 'inserter()' it works the same only we can manage where the elements are added.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    std::vector&lt;int> vi {1, 2, 3, 4};
    std::vector&lt;int> vi2 {5,6,7,8,9};
    std::vector&lt;int> vi3 {10, 11, 12, 13};
    
    <span class = "comments">// Copy elements from vi and vi2 into vi3</span>
    std::copy(vi.begin(), vi.end(), inserter(vi3, vi3.begin()));
    std::copy(vi2.begin(), vi2.end(), inserter(vi3, vi3.begin() + 4));
    
    for(int i :  vi3)
        std::cout &lt;&lt; i &lt;&lt; std::endl;</pre>
        
        <hr />
        <br />
        <a href="Cpp_Std_Lib13.html">Previous</a>
        <span class = "next">
        <a href = "Cpp_Std_Lib15.html">Next Page</a></span>
        <br /><br />

    </div>    
    
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>  