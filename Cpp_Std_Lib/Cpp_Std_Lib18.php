<!DOCTYPE html>
<html>    
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;
	   charset=utf-8" />
        <title>Associative Containers Part 3 (Erasing Elements) - Cpp Standard Library</title>
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
    
        <h1>Associative Containers Part 3 (Erasing Elements) - Cpp Standard Library</h1>
        
        <h2>Associative Containers (Erasing Elements)</h2>
        
            <p>Erasing elements. We can use our erase function to remove elements from our associative containers map or set.  In order to remove an element we must use either the key_type or use the literal constant as an argument.
        
        <span class = "nl">Let's see an example below.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    std::map&lt;int, int> mi { {1,2}, {2,3}, {3,4}, {4,5}, {5,6} };
    
    <span class = "comments">// We can declare a key_type to pass into our argument</span>
    std::map&lt;int, int>::key_type p = 1;
    
    <span class = "comments">// Use an if statement to check if the element was removed</span>
    if(mi.erase(p))
        std::cout &lt;&lt; p &lt;&lt; " element erased" &lt;&lt; std::endl;
    else
        std::cout &lt;&lt; p &lt;&lt; " element failed to erased" &lt;&lt; std::endl;
    
    <span class = "comments">// We can also refer to the literal value of the key as well</span>
    mi.erase(2);
    
    <span class = "comments">// Print out the remainding elements</span>
    for(auto i : mi)
        std::cout &lt;&lt; i.first &lt;&lt; " " &lt;&lt; i.second &lt;&lt; std::endl;</pre>
        
        <p>Let's say we want to remove an range of elements, we can also use an iterator in order to remove these elements from our container. We can overload the erase function in order to accept a range.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    std::map&lt;int, int> mi { {1,2}, {2,3}, {3,4}, {4,5}, {5,6} };
    
    <span class = "comments">// We can declare an iterator to pass into our argument</span>
    std::map&lt;int, int>::iterator b = mi.begin();
    std::map&lt;int, int>::iterator e = mi.end();
    
    <span class = "comments">// decrement 'e' by 2</span>
    --e;
    --e;
    
    <span class = "comments">// Erase the elements within our range</span>
    mi.erase(b, e);
    
    <span class = "comments">// Print out the remainding elements</span>
    for(auto i : mi)
        std::cout &lt;&lt; i.first &lt;&lt; " " &lt;&lt; i.second &lt;&lt; std::endl;</pre>
        
        <p>So, we can remove a range of elements using our iterators.  Let's take a look at some of functions that will allow us to select elements in multimap containers where one key can potentially refer to several mapped values.
        
        <span class = "nl">In order to do this manually we would need to use the count and find functions to iterate through key elements which appear multiple times.  Let's look at an example of this in pratice.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    std::multimap&lt;int, int> mi { {1, 2}, {1, 3}, {1, 4}, {2, 2}, {2, 3}, {2, 4}, {3, 1} };
    
    <span class = "comments">// Let's use this value as our key</span>
    int search_item = 2;
    
    <span class = "comments">// We can use iterator to find our key_type value</span>
    std::multimap&lt;int, int>::iterator find = mi.find(search_item);
    
    <span class = "comments">// Return amount of mapped_types found under our key_type value</span>
    int count = mi.count(search_item);
    
    <span class = "comments">// While the mapped_type count is above zero</span>
    while(count)
    {
        <span class = "comments">// Return our mapped_type elements</span>
        std::cout &lt;&lt; find->second &lt;&lt; std::endl;
        <span class ="comments">// Increment our mapped value type by one</span>
        ++find;
        <span class ="comments">// Decrement our key_type count</span>
        --count;
    }</pre>
        
        <p>The way the program above works is by first returning the amount duplicate keys that exist in our mapped containers.  If that value is equal to or greater than one our map iterator will check the different map_type values returned in our key.  Then in our while loop we decrement the key amount as well as iterating through the different map_types, so our program will stop when our count value returns zero.</p>
        
    <hr />
        
    <!-- lower, upper and equal range -->
    <h3>Lower_bound, Upper_bound &amp; Equal Range functions</h3>
   
        <p>In this section we are going to talk about using functions which will return a variety of map_type values from our map containers.  Map_type values in the lower range of elements will be returned in our 'lower_bound()' function and vice versa for our 'upper_bound()' function.</p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class="code">
    std::multimap&lt;int, int> mi { {1, 2}, {1, 3}, {1, 4}, {2, 2}, {2, 3}, {2, 4}, {3, 1} };
    
    int search_item = 2;
    
    for(std::multimap&lt;int, int>::iterator beg = mi.lower_bound(search_item),
    end = mi.upper_bound(search_item); 
    beg != end; ++beg)
        std::cout &lt;&lt; beg->second &lt;&lt; std::endl;</pre>
        
        <p>Here we see that the same job was accomplished only we used lower and upper bound functions in order to achieve a similar affect to begin() and end() function, the difference is that we are iterating on a key instead of a container.
        
        <span class = "nl">Let's go ahead and look at how we would go about using the equal_range function next.</span></p>
        
    <em>Code:</em>
    <!-- code -->
    <pre class = "code">
    std::multimap&lt;int, int> mi { {1, 2}, {1, 3}, {1, 4}, {2, 2}, {2, 3}, {2, 4}, {3, 1} };
    
    int search_item = 2;
    
    for(std::pair&lt;std::multimap&lt;int, int>::iterator,
    std::multimap&lt;int, int>::iterator> beg = mi.equal_range(search_item);
    beg.first != beg.second; 
    ++beg.first)
        std::cout &lt;&lt; beg.first->second &lt;&lt; std::endl;</pre>
        
        <hr />
        <br />
        <a href="Cpp_Std_Lib17.html">Previous</a>
        <span class = "next">
        <a href = "Cpp_Std_Lib19.html">Next Page</a></span>
        <br /><br />

    </div>    
    
</div><!-- Footer -->
<?php include('..//Includes//footer.php'); ?>

</body>
</html>  